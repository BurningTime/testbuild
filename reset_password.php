<?php
require 'dbh.inc.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    // Check if email exists in the database
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Update the user's password
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $new_password, $email);
        $stmt->execute();

        // Redirect with success message
        echo "<script>
                alert('Your password has been reset successfully.');
                window.location.href = 'login.php';
              </script>";
    } else {
        // Redirect with error message
        echo "<script>
                alert('Email address not found.');
                window.location.href = 'forgot_password.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
