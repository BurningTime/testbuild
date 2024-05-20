<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BurningTime | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
<div class="container">
    <div class="row justify-content-center">
        <!-- Form column -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form action="regauth.php" id="registrationForm" method="post">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="fName" placeholder="First Name" name="fName">
                            <label for="fName">First Name</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="lName" placeholder="Last Name" name="lName">
                            <label for="lName">Last Name</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Password" name="password" required>
                            <label for="pwd">Password</label>
                            <div id="passwordHelp" class="form-text">Password must be 8-20 characters long, contain letters and numbers, and no special characters.</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="showPassword">
                            <label class="form-check-label" for="showPassword">Show Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                            <label class="form-check-label" for="myCheck">Agree with terms and conditions.</label>
                        </div>
                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <button type="submit" class="btn btn-primary" id="signUpButton" name="signUp">Register</button>
        </div>
    </div>
</div>

                    </form>
                </div>
                <div class="card-footer">BruteForce 1.1</div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="loginauth.js"></script>
<?php
include("footer.php");
?>
