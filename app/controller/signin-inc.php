<?php
        include('../../app/classes/login-contr.php');


    if (isset($_POST["submit"])) {

        // grabbing the data
        
        $user_name = $_POST["username"];
        $password = $_POST["password"];

        // include("../classes/dbh.class.php");
        // include('../classes/login.class.php');
        // include('../classes/login-contr.php');

        // instantiate sign up controller class
        $login = new logincontr($user_name, $password);

        // Running error handlers and user sign up
        $login->loginUser();

        // going to back to front page
    }
?> 