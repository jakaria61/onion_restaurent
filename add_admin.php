<?php
include('connection.php');

if (isset($_POST['done'])) {

    $id = $_GET['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO `admin`(`email`, `username`, `password`) VALUES (' $email','$username','$password')";

    $query = mysqli_query($con, $q);

    header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="col-lg-6 m-auto ">
        <br><br>
        <form action="" method="post">
            <div class='card'>
                <div class="card-header bg-dark">
                    <h1 class='text-white text-center'>Add An Admin Now</h1>
                </div>
                <label>Admin Email</label>
                <input type="text" name="email" placeholder=" Enter admin Email" class="form-control"><br>
                <label>Admin Username</label>
                <input type="text" name="username" placeholder=" Enter admin user name" class="form-control"><br>
                <label>Admin password</label>
                <input type="text" name="password" placeholder=" Enter admin password" class="form-control"><br>

                <button class='btn btn-outline-success' type='submit' name='done'>Add admin</button>

            </div>
        </form>


    </div>
</body>

</html>