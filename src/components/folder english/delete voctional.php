<?php
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");
$id = $_GET['id'];
$before_and_after = explode('_', $id);
$number1 = $before_and_after[1];
$number2 = $before_and_after[0];
$checkQuery = "SELECT * FROM `link` WHERE `number_vocational` = :number1 AND `number_customer` = :number2";
$checkStatement = $data->prepare($checkQuery);
$checkStatement->bindParam(':number1', $number1);
$checkStatement->bindParam(':number2', $number2);
$checkStatement->execute();
$existingCount = $checkStatement->fetchColumn();

if ($existingCount > 0) {
    $deleteQuery = "DELETE FROM `link` WHERE `number_vocational` = :number1 AND `number_customer` = :number2";
    $deleteStatement = $data->prepare($deleteQuery);
    $deleteStatement->bindParam(':number1', $number1);
    $deleteStatement->bindParam(':number2', $number2);

    if ($deleteStatement->execute()) {
        $url_english = "http://localhost:8080/index_vocational_english?id=$number1&true_delete=true";
        header("Location: " . $url_english);
    } else {
        echo "Oops, an error occurred while deleting.";
    }
}