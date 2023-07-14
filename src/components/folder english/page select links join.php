<?php

$id = $_GET["id"];
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");

$query = "SELECT table_vocational.id, table_vocational.Vocational_Image, table_vocational.Name_Vocational, table_vocational.Vocational_Job_Description FROM table_vocational JOIN link ON link.number_vocational = table_vocational.id JOIN table_customer ON link.number_customer = table_customer.Customer_Id WHERE table_customer.Customer_Id = :id";

$statement = $data->prepare($query);
$statement->bindParam(':id', $id);
$statement->execute();
$my_data = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Access-Control-Allow-Origin: *");
echo json_encode($my_data);
