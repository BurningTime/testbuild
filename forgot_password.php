<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BurningTime | Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    /* Custom styles to ensure centering */
        body {
            background-color: #f0f0f0; /* Optional: Setting a light background */
            min-height: 100vh; /* Ensure full viewport height */
            display: flex;
            flex-direction: column;
        }
        .card {
            width: 100%; /* Ensure card takes full width of its container */
            max-width: 400px; /* Limit card width for better readability on larger screens */
            margin: auto; /* Center the card horizontally */
            margin-top: 50px; /* Add top margin for spacing */
            flex: 1; /* Allow card to take up remaining vertical space */
        }
        footer {
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000; /* Ensure footer is above other content */
        }
        footer p {
            margin-bottom: 0; /* Remove default bottom margin */
        }
        footer ul {
            list-style-type: none; /* Remove default list style */
            padding: 0;
            text-align: center; /* Center align list items */
        }
        footer ul li {
            display: inline-block;
            margin-right: 20px;
        }
        footer ul li:last-child {
            margin-right: 0; /* Remove margin from the last list item */
        }
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
        </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Forgot Password</div>
                <div class="card-body">
                    <form action="reset_password.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="new_password" placeholder="Enter new password" name="new_password" required>
                            <label for="new_password">New Password</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>
</body>
</html>
