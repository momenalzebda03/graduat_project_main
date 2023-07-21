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
    $deleteQuery1 = "DELETE FROM `link` WHERE `number_vocational` = :number1 AND `number_customer` = :number2";
    $deleteStatement1 = $data->prepare($deleteQuery1);
    $deleteStatement1->bindParam(':number1', $number1);
    $deleteStatement1->bindParam(':number2', $number2);
    if ($deleteStatement1->execute()) {
        $url_english = "http://localhost:8080/index_client_english?id=$number2&true_delete=true";
        header("Location: " . $url_english);
    } else {
        echo "Oops, an error occurred while deleting.";
    }
}
