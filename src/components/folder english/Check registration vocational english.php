<?php
$Name_Signin = $_POST['Name_Signin'];
$Password_Signin = $_POST['Password_Signin'];

$pdo = new PDO('mysql:host=localhost;dbname=data_project_customer', 'root', '');
$query = "select * from table_vocational";
$statement = $pdo->prepare($query);
$statement->execute([$Name_Signin, $Password_Signin]);
$statement->bindParam(':id', $id);
$match_found = false;

while ($my_data = $statement->fetch(PDO::FETCH_ASSOC)) {
    if ($Name_Signin == $my_data["Name_Vocational"] && $Password_Signin == $my_data["Vocational_Password"]) {
        $id = $my_data["id"];
        $match_found = true;
    }
}

if ($match_found) {
    $url_english = "http://localhost:8080/index_vocational_english?id=$id";
    header("Location: " . $url_english);
} else {
    $url_english = "http://localhost:8080/page_vocational_english?invalidCredentials=true";
    header("Location: " . $url_english);
}

header("Access-Control-Allow-Origin: *");
echo json_encode($my_data);
