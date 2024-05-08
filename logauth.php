<?php
session_start();
include('dbh.inc.php');


if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    if($stmt->error) { echo $stmt->error; }
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('User not found!'); window.location='login.php';</script>";
    }
    $stmt->close();
} else {
    echo "<script>alert('Both email and password fields are required.'); window.location='login.php';</script>";
}
?>
