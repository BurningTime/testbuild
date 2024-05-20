<?php
session_start(); // Start the session
include("dbh.inc.php");
// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit(); // Make sure to stop the script execution after redirection
}

// Now you can safely display the user's email
$user_email = $_SESSION['user_email'];

// Retrieve user's first name and last name from the database
$stmt = $conn->prepare("SELECT firstName, lastName FROM users WHERE email = ?");
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $firstName = $user['firstName'];
    $lastName = $user['lastName'];
} else {
    // Handle case where user data is not found
    $firstName = "Unknown";
    $lastName = "Unknown";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard| BurningTime</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
        <img src="images/BurningTimeLogo.png" class="logo-image">
            <div class="logo-name"><span>Burning</span>Time</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="#" data-target="dashboard" ><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="#" data-target="shop"><i class='bx bx-store-alt'></i>Products</a></li>
            <li ><a href="#" data-target="analytics"><i class='bx bx-analyse'></i>Analytics</a></li>
            <li><a href="#" data-target="tickets"><i class='bx bx-message-square-dots'></i>Tickets</a></li>
            <li><a href="#" data-target="users"><i class='bx bx-group'></i>Users</a></li>
            <li><a href="#" data-target="settings"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="logout.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!--End of Sidebar -->
    <!-- Main Content -->
    <div class="content">
        <!-- Navbar-->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">5</span>
            </a>
            <a href="#" class="profile">
                <img src="images/BurningTimeLogo.png">
            </a>
        </nav>
         <!--End of Navbar -->
        <main>
        <?php include('dashboard_content.php'); ?>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>