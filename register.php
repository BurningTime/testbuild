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
</head>
<body>

<div class="container mt-3">
    <div class="row">
        <!-- Image column -->
        <div class="col-md-6">
            <img src="images/Register.jpg" alt="Register Image" class="img-fluid">
        </div>
        
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
                        <button type="submit" class="btn btn-primary" id="signUpButton" name="signUp">Register</button>
                    </form>
                </div>
                <div class="card-footer">BruteForce 1.1</div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="loginauth.js"></script>
<?php
include("footer.php");
?>
