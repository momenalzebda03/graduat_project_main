<?php
$Name_Client = $_POST['Name_Client'];
$Profession_Client = $_POST['Profession_Client'];
$Problem_Client = $_POST['Problem_Client'];
$Password_Client = $_POST['Password_Client'];
$Image_Client = basename($_FILES["Image_Client"]["name"]);

if (empty($Name_Client) || empty($Profession_Client) || empty($Problem_Client) || empty($Password_Client) || empty($Image_Client)) {
    print "<p style='color: red;'>يوجد مشكلة في الارسال</p>";
} else {
    $pdo = new PDO('mysql:host=localhost;dbname=data_project_customer', 'root', '');
    $query = "INSERT INTO table_customer (Customer_Name, Customer_Required_profession, Customer_Existing_Problem, Customer_Password, Customer_Image) VALUES (?, ?, ?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->execute([$Name_Client, $Profession_Client, $Problem_Client, $Password_Client, $Image_Client]);
    if ($query >= 0) {
        $url = "http://localhost:8080/page_Client_arap";
        header("Location: " . $url);
    }
}
