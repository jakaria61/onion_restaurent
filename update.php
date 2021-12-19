<?php
include('connection.php');

if (isset($_POST['done'])) {

    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $q = " update  food_details set id=$id, title='$title', description='$description',price=$price where id=$id  ";

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
                    <h1 class='text-white text-center'>Update Food Details</h1>
                </div>
                <label>Title</label>
                <input type="text" name="title" placeholder=" Enter your update title" class="form-control"><br>

                <label>Description</label>
                <input type="text" name="description" placeholder=" Enter your update description" class="form-control"><br>
                <label>Price</label>
                <input type="number" name="price" placeholder=" Enter your update price" class="form-control"><br>

                <button class='btn btn-outline-success' type='submit' name='done'>Update Now</button>

            </div>
        </form>


    </div>
</body>

</html>