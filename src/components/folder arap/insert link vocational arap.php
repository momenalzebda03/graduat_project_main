<?php
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");
$id = $_GET['id'];
$before_and_after = explode('_', $id);
$number1 = $before_and_after[1];
$number2 = $before_and_after[0];
$checkQuery1 = "SELECT * FROM `link` WHERE `number_vocational` = :number1 AND `number_customer` = :number2";
$checkStatement1 = $data->prepare($checkQuery1);
$checkStatement1->bindParam(':number1', $number1);
$checkStatement1->bindParam(':number2', $number2);
$checkStatement1->execute();
$existingCount1 = $checkStatement1->rowCount();
if ($existingCount1 > 0) {
    echo "The combination of number_vocational and number_customer already exists. Insertion is disabled.";
} else {
    $insertQuery1 = "INSERT INTO `link`(`number_vocational`, `number_customer`) VALUES (:number1, :number2)";
    $insertStatement1 = $data->prepare($insertQuery1);
    $insertStatement1->bindParam(':number1', $number1);
    $insertStatement1->bindParam(':number2', $number2);
    if ($insertStatement1->execute()) {
        $url_arap = "http://localhost:8080/index_vocational_arap?id=$number1&invalidCredentials=true";
        header("Location: " . $url_arap);
    } else {
        echo "Oops, an error occurred";
    }
}
