<?php
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");
$id = $_GET['id'];
$before_and_after = explode('_', $id);
$number1 = $before_and_after[1];
$number2 = $before_and_after[0];
$checkQuery = "SELECT COUNT(*) FROM `link` WHERE `number_vocational` = :number1 AND `number_customer` = :number2";
$checkStatement = $data->prepare($checkQuery);
$checkStatement->bindParam(':number1', $number1);
$checkStatement->bindParam(':number2', $number2);
$checkStatement->execute();
$existingCount = $checkStatement->fetchColumn();

if ($existingCount > 0) {
    echo "The combination of number_vocational and number_customer already exists. Insertion is disabled.";
} else {
    $insertQuery = "INSERT INTO `link`(`my_check`, `number_vocational`, `number_customer`) VALUES ('false', :number1, :number2)";
    $insertStatement = $data->prepare($insertQuery);
    $insertStatement->bindParam(':number1', $number1);
    $insertStatement->bindParam(':number2', $number2);

    if ($insertStatement->execute()) {
        echo "The request has been sent to the other person";
    } else {
        echo "Oops, an error occurred";
    }
}
