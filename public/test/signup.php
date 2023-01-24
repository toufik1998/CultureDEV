<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/parsley/parsley_css.css">
    <style>
        .my-container {
            width: 50%;
            padding: 8%;
            margin: 0 auto;
        }

        ul.parsley-errors-list li{
            margin: 1rem auto -1rem;
        }
        
    </style>
</head>

<body>


    <div class="my-container">
        <form action="../../app/controller/signup-inc.php" method="POST" id="demo-form" data-parsley-validate="" data-parsley-trigger="keyup">
            <input class="form-control" type="text" placeholder="name" name="name" data-parsley-pattern="/^[a-z0-9_-]{3,15}$/" required /><br />
            <input class="form-control" type="text" placeholder="username" name="username" data-parsley-pattern="/^[a-z0-9_-]{3,15}$/" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" data-parsley-pattern="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/" required /><br />
            <p class="text-danger small"></p>
            <button class="btn btn-secondary w-100" type="submit" name="submit">Signup</button>
            <p class="mt-3 small text-center">Already have an account? <a href="./signin.php">Login</a></p>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../assets/parsley/jquery-3.6.1.min.js"></script>
<script src="../assets/parsley/parsley.min.js"></script>
</html>