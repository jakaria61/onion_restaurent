<?php
session_start();
include('nav.php');
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_table WHERE username='$username'AND password='$password'";

    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $_SESSION['login'] = "<div>login success</div>";
        $_SESSION['user'] = $username;
        header('location:home.php');
    } else {
        echo "<div class='text-center text-danger mt-5'>User name or password invalid</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- bootstrap link  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- css link  -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="login-page ">

    <section class='container'>
        <div class="row w-100 justify-content-center ">
            <div class=' col-md-6'>
                <img src='./images/logo2.png' class='logo m-5' alt="">

                <form action="" method="POST">
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">username</label>
                        <input type="text" name='username' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                    </div>
                    <?php

                    ?>
                    <div>
                        <button type="submit" name='submit' class="btn btn-outline-danger mb-5">Login Now</button>
                        <a href="register.php"><button type="submit" name='submit' class="btn btn-outline-danger mb-5">Create an accout?</button></a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>