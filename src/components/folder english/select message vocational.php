<?php
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer;charset=utf8", "root", "");
$id = $_GET['id'];
$before_and_after = explode('_', $id);
$number1 = $before_and_after[1];
$number2 = $before_and_after[0];
$selectQuery = "SELECT `message` FROM `table_message` WHERE ifelse = 'C' AND `id_vocational` = :number2 AND id_customer = :number1";
$statement = $data->prepare($selectQuery);
$statement->bindParam(':number1', $number1, PDO::PARAM_INT);
$statement->bindParam(':number2', $number2, PDO::PARAM_INT);
$statement->execute();
$my_data = $statement->fetchAll(PDO::FETCH_ASSOC);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");
echo json_encode($my_data);
?>
