<?php
$Name_Signin = $_POST['Name_Signin'];
$Password_Signin = $_POST['Password_Signin'];

$pdo = new PDO('mysql:host=localhost;dbname=data_project_customer', 'root', '');
$query = "select * from table_customer";
$statement = $pdo->prepare($query);
$statement->execute([$Name_Signin, $Password_Signin]);
$statement->bindParam(':id', $id);
$match_found = false;

while ($my_data = $statement->fetch(PDO::FETCH_ASSOC)) {
    if ($Name_Signin == $my_data["Customer_Name"] && $Password_Signin == $my_data["Customer_Password"]) {
        $id = $my_data["Customer_Id"];
        $match_found = true;
    }
}

if ($match_found) {
    $url_arap = "http://localhost:8080/index_client_arap?id=$id";
    header("Location: " . $url_arap);
} else {
    $url_arap = "http://localhost:8080/page_Client_arap?invalidCredentials=true";
    header("Location: " . $url_arap);
}

header("Access-Control-Allow-Origin: *");
echo json_encode($my_data);
