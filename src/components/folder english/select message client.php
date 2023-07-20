<?php
$data = new PDO("mysql:host=127.0.0.1;dbname=data_project_customer", "root", "");
$id = $_GET['id'];
?>
<!-- $before_and_after = explode('_', $id);
$number1 = $before_and_after[1];
$number2 = $before_and_after[0];
$checkQuery = "SELECT * FROM `link` WHERE `number_vocational` = :number1 AND `number_customer` = :number2";
$checkStatement = $data->prepare($checkQuery);
$checkStatement->bindParam(':number1', $number1);
$checkStatement->bindParam(':number2', $number2);
$checkStatement->execute();
$existingCount = $checkStatement->fetchColumn();
if ($existingCount > 0) {
    //WHERE ifelse = 'V' AND `id_vocational` = :number2 AND id_customer = :number1
    $selectQuery = "SELECT `message` FROM `table_message` WHERE ifelse = 'V'";
    $statement = $data->prepare($selectQuery);
    $statement->execute();
    $my_data = $statement->fetchAll(PDO::FETCH_ASSOC);
    header("Access-Control-Allow-Origin: *");
    echo json_encode($my_data);
} else {
    echo "The combination of number_vocational and number_customer already exists. Insertion is disabled.";
} -->