<?php
include ('dbh.inc.php');

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $passwordHashed);
        if ($insertQuery->execute()) {
            header("Location: login.php"); // Redirect to login page after successful registration
            exit();
        } else {
            echo "Error: " . $insertQuery->error;
        }
    }
}
?>
