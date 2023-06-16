<?php
$Name_vocational = $_POST['Name_vocational'];
$Job_vocational = $_POST['Job_vocational'];
$Specialization_vocational = $_POST['Specialization_vocational'];
$Experience_vocational = $_POST['Experience_vocational'];
$Experience_vocational1 = $_POST['Experience_vocational1'];
$Experience_vocational2 = $_POST['Experience_vocational2'];
$Experience_vocational3 = $_POST['Experience_vocational3'];
$String_Skill_vocational = $_POST['String_Skill_vocational'];
$Skill_vocational = $_POST['Skill_vocational'];
$Skill_vocational1 = $_POST['Skill_vocational1'];
$Skill_vocational2 = $_POST['Skill_vocational2'];
$Password_vocational = $_POST['Password_vocational'];
$imageFileType = basename($_FILES["Image_vocational"]["name"]);

if (empty($Name_vocational) || empty($Job_vocational) || empty($Specialization_vocational) || empty($Experience_vocational) || empty($Experience_vocational1) || empty($Experience_vocational2) || empty($Experience_vocational3) || empty($String_Skill_vocational) || empty($Skill_vocational) || empty($Skill_vocational1) || empty($Skill_vocational2) || empty($Password_vocational) || empty($imageFileType)) {
    print "<p style='color: red;'>error the insert</p>";
} else {
    $pdo = new PDO('mysql:host=localhost;dbname=data_project_customer', 'root', '');
    $query = "INSERT INTO table_vocational (Name_Vocational, Vocational_Job_Description, Vocational_Specialization, Vocational_Experience, Vocational_Experience1, Vocational_Experience2, Vocational_Experience3, Vocational_String_Skill, Vocational_Skill1, Vocational_Skill2, Vocational_Skill3, Vocational_Password, Vocational_Image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->execute([$Name_vocational, $Job_vocational, $Specialization_vocational, $Experience_vocational, $Experience_vocational1, $Experience_vocational2, $Experience_vocational3, $String_Skill_vocational, $Skill_vocational, $Skill_vocational1, $Skill_vocational2, $Password_vocational, $imageFileType]);

    if ($statement) {
        $url = "http://localhost:8080/page_vocational_english";
        header("Location: " . $url);
    }
}
