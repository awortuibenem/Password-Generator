<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            border: none;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .btn-generate {
            background-color: #007bff;
            color: #fff;
            border: none;
            font-weight: bold;
        }

        .btn-generate:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Password Generator
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="password" class="form-label">Generated Password:</label>
                            <input type="text" id="password" name="password" readonly class="form-control">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="generate" class="btn btn-generate">Generate Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
function generatePassword($length = 12) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';

    $shuffled_chars = str_shuffle($chars);

    $password = substr($shuffled_chars, 0, $length);

    return $password;
}

// Check if the form has been submitted
if (isset($_POST['generate'])) {
    $generated_password = generatePassword();

    echo '<script>document.getElementById("password").value = "' . $generated_password . '";</script>';
}
?>
</body>
</html>
