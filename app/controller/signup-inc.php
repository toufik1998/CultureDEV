<?php
    include('../../app/classes/signup-contr.php');
    if (isset($_POST["submit"])) {
        // grabbing the data
        echo 'uddhuidza';
        $name = $_POST["name"];
        $user_name = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


        // instantiate sign up controller class
        $signup = new Signupcontr($name, $user_name, $password);

        // Running error handlers and user sign up
        $signup->signupUser();

        // going to back to front page
        header('location:../../public/test/signin.php');
    }
?> 