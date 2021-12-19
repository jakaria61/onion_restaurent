<?php
include('nav.php');
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
    <div class="container ">
        <div class="col-lg-12">
            <h1 class="text-danger text-center">admin panel</h1>
            <table class="table table-striped table-bordered">
                <tr class="text-center">
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>price</th>
                    <th>delete</th>
                    <th>update</th>

                </tr>
                <?php
                include('connection.php');

                $q = "SELECT * FROM  food_details";
                $query = mysqli_query($con, $q) or
                    die(mysqli_error($con));
                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['title']; ?></td>
                        <td><?php echo $res['description']; ?></td>
                        <td><?php echo $res['price']; ?></td>
                        <td> <button class=" btn btn-danger "> <a href=" delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>
                        <td> <button class="btn btn-success "> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> update </a> </button> </td>

                    </tr>
                <?php
                }
                ?>
            </table>
            <div class="text-center">
                <a href="insert.php"> <button class='btn btn-outline-warning p-5'>Add Food</button></a>
                <a href="manageorder.php"> <button class='btn btn-outline-warning p-5'>Manageorder</button></a>
                <a href="add_admin.php"> <button class='btn btn-outline-warning p-5'>Add Admin</button></a>
            </div>
        </div>
    </div>

</body>

</html>