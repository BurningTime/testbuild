<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS (for tooltip) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Add custom CSS styles */
        .navbar-brand {
            margin-right: 0; /* Remove margin to the right */
        }
        .navbar-nav {
            margin: 0 auto; /* Center align navbar items */
            display: flex;
            justify-content: center;
            align-items: center; /* Align items vertically */
            flex-grow: 1; /* Allow items to grow to occupy remaining space */
        }
        .navbar-collapse {
            text-align: center; /* Center align navbar content */
        }
        .navbar {
            background-color: white !important; /* Set navbar background to white */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add drop shadow */
        }
        .navbar .nav-link {
            color: black !important; /* Set navbar text to black */
        }
        .navbar .nav-link:hover {
            color: orangered !important; /* Set hover color */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col text-center"> <!-- Center the content -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/BurningTimeLogo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="col text-center"> <!-- Center the content -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col text-center"> <!-- Center the content -->
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="homeLink" data-bs-toggle="tooltip" data-bs-placement="bottom" title="You must log in first.">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'manual' // Set the trigger to manual to show the tooltip programmatically
        })
    })

    // Show tooltip on click
    document.getElementById('homeLink').addEventListener('click', function(event) {
        event.preventDefault();
        var tooltip = bootstrap.Tooltip.getInstance(this);
        tooltip.show();
        setTimeout(function() {
            tooltip.hide();
        }, 2000);
    });
</script>
</body>
</html>
