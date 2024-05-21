<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="newlogin.css">
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
         <div class="card">
            <div class="card-header">
            <h2>Sign in</h2>
            <a href="#" id="fbLink" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Under Construction."><i class="fab fa-facebook-f"></i></a>
            <a href="#" id="gitLink" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Under Construction."><i class="fab fa-github"></i></a>
            <a href="#" id="gLink" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Under Construction."><i class="fab fa-google"></i></a>
        </div>
        <form action="logauth.php" method="post">
            <input type="email" id="email" placeholder="Email" name="email">
            <input type="password" id="password" placeholder="Password" name="password">
            <div>
                <input type="checkbox" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <p class="signup-link"><a href="forgot_password.php">Forgot Password</a></p>
            <button type="submit" class="btn"  id="signInButton">Sign In</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="register.php">Sign up</a></p>
        </div>
    </div>
</div>
</div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {http://127.0.0.1:3000/forgot_password.php
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'manual' // Set the trigger to manual to show the tooltip programmatically
        })
    })
    // Show tooltip on click
    document.getElementById('fbLink').addEventListener('click', function(event) {
        event.preventDefault();
        var tooltip = bootstrap.Tooltip.getInstance(this);
        tooltip.show();
        setTimeout(function() {
            tooltip.hide();
        }, 800);
    });
    document.getElementById('gitLink').addEventListener('click', function(event) {
    event.preventDefault();
    var tooltip = bootstrap.Tooltip.getInstance(this);
    tooltip.show();
    setTimeout(function() {
        tooltip.hide();
    }, 800);
});
document.getElementById('gLink').addEventListener('click', function(event) {
    event.preventDefault();
    var tooltip = bootstrap.Tooltip.getInstance(this);
    tooltip.show();
    setTimeout(function() {
        tooltip.hide();
    }, 800);
});

    </script>
<?php
include("footer.php");
?>
