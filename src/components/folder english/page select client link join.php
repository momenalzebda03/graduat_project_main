<?php

$id = $_GET["id"];
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");

$query = "SELECT table_customer.Customer_Id, table_customer.Customer_Image, table_customer.Customer_Name, table_customer.Customer_Required_profession, link.communication_customer AS communication_customer FROM table_customer JOIN link ON link.number_customer = table_customer.Customer_Id JOIN table_vocational ON link.number_vocational = table_vocational.id WHERE table_vocational.id = :id";

$statement = $data->prepare($query);
$statement->bindParam(':id', $id);
$statement->execute();
$my_data = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Access-Control-Allow-Origin: *");
echo json_encode($my_data);
