<?php
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");
$id = $_GET['id'];
$text_message = $_GET["text_message"];
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
    $insertQuery = "INSERT INTO `table_message`(`id_vocational`, `id_customer`, `message`, `ifelse`) VALUES (:number1, :number2, :message, 'V')";
    $insertStatement = $data->prepare($insertQuery);
    $insertStatement->bindParam(':number1', $number1);
    $insertStatement->bindParam(':number2', $number2);
    $insertStatement->bindParam(':message', $text_message);
    if ($insertStatement->execute()) {
        $url_english = "http://localhost:8080/page_counseling_voiactional_arap/$number1?&invalidCredentials=true";
        header("Location: " . $url_english);
    } else {
        echo "Error inserting message.";
    }
} else {
    echo "The combination of number_vocational and number_customer already exists. Insertion is disabled.";
}
