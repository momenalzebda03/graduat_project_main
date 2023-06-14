<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$title = $_POST['Title'];
$message = $_POST['Message'];

if (empty($name) || empty($email) || empty($title) || empty($message)) {
    print "<p style='color: red;'>يوجد مشكلة في الارسال</p>";
} else {
    $pdo = new PDO('mysql:host=localhost;dbname=data_project_customer', 'root', '');
    $query = "INSERT INTO table_select (Name, Email, Title_Message, Message) VALUES (?, ?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->execute([$name, $email, $title, $message]);
    if ($query >= 0) {
        $url = "http://localhost:8080/home_arap";
        header("Location: " . $url);
    }
}
