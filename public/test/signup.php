<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .my-container {
            width: 50%;
            padding: 8%;
            margin: 0 auto;
        }
    </style>
</head>

<body>


    <div class="my-container">
        <form action="../../app/controller/signup-inc.php" method="POST">
            <input class="form-control" type="text" placeholder="name" name="name" required /><br />
            <input class="form-control" type="text" placeholder="username" name="username" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" required /><br />
            <p class="text-danger small"></p>
            <button class="btn btn-secondary w-100" type="submit" name="submit">Signup</button>
            <p class="mt-3 small text-center">Already have an account? <a href="./signin.php">Login</a></p>
        </form>
    </div>
</body>

</html>