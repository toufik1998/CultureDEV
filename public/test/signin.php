
<?php
include('../components/sign_head.php');
?>  

    <div class="my-container">
   
        <form action="../../app/controller/signin-inc.php" method="POST" id="demo-form" data-parsley-validate="" data-parsley-trigger="keyup">
            <input class="form-control" type="text" placeholder="username" name="username" data-parsley-pattern="/^[a-z0-9_-]{3,15}$/" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" data-parsley-pattern="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/" required /><br />
            <p class="text-danger small"></p>
            <button class="btn btn-secondary w-100" type="submit" name="submit">Login</button>
            <p class="mt-3 small text-center">Don't have an account? <a href="./signup.php">Signup</a></p>
        </form>

    </div>


<?php
include('../components/footer_sign.php');
?>      