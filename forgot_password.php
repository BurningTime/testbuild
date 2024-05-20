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
