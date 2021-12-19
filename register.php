<?php
include('connection.php');
include('nav.php');
if (isset($_POST['done'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $q = "INSERT INTO `user_table`( `username`, `email`, `phone`, `password`) VALUES ( '$username',' $email ','$phone','$password')";
    $query = mysqli_query($con, $q);
    header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="col-lg-6 m-auto ">
        <br><br>
        <section class='container bg-secondary text-white'>
            <div class="row w-100 justify-content-center ">

                <div class=' col-md-6'>
                    <img src='./images/logo.png' class='logo m-5' alt="">
                    <p class='text-center text-white'>Please Enter Your Valid Information</p>
                    <form action="" method='post'>
                        <div class="mb-3 ">
                            <label>Username</label>
                            <input type="text" name="username" placeholder=" Enter your Username" class="form-control" required><br>
                            <label>email</label>
                            <input type="email" name="email" placeholder=" Enter your Username" class="form-control" required><br>
                            <label>phone</label>
                            <input type="number" name="phone" placeholder=" Enter your Username" class="form-control" required><br>
                            <label>password</label>
                            <input type="password" name="password" placeholder=" Enter your password" class="form-control" required><br>
                            <button class='btn btn-warning' type='submit' name='done'>Register Now</button>
                    </form>

                </div>
                <div>

                    <a href="login.php"><button type="submit" class="btn btn-warning mb-5">Have an accout?</button></a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>