<?php

$id_search = isset($_GET["name"]) ? $_GET["name"] : '';

$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");

$query = "SELECT * FROM table_vocational WHERE Name_Vocational = :searchTerm";
$statement = $data->prepare($query);
$statement->bindParam(':searchTerm', $id_search);
$statement->execute();

$result = 'none';

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    if ($id_search == $row["Name_Vocational"]) {
        $result = 'block';
        break;
    }
}

header('Content-Type: application/json');
echo json_encode($result);
