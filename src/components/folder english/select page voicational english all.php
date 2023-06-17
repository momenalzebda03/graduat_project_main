<?php

$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");

$query = "SELECT * FROM table_vocational";
$statement = $data->prepare($query);
$statement->bindParam(':id', $id);
$statement->execute();

$my_data = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Access-Control-Allow-Origin: *");

echo json_encode($my_data);