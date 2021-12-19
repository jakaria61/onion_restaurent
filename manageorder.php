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
            <h1 class="text-danger text-center">Manage Order</h1>
            <table class="table table-striped table-bordered">
                <tr class="text-center">
                    <th>id</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>total</th>
                    <th>Order-date</th>
                    <th>Status</th>
                    <th>customer name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Adress</th>
                    <th>Action</th>


                </tr>
                <?php
                include('connection.php');

                $q = "SELECT * FROM  food_order";
                $query = mysqli_query($con, $q) or
                    die(mysqli_error($con));
                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['food']; ?></td>
                        <td><?php echo $res['price']; ?></td>
                        <td><?php echo $res['qty']; ?></td>
                        <td><?php echo $res['total']; ?></td>
                        <td><?php echo $res['order_date']; ?></td>
                        <td><?php echo $res['status']; ?></td>
                        <td><?php echo $res['customer_name']; ?></td>
                        <td><?php echo $res['customer_contact']; ?></td>
                        <td><?php echo $res['customer_email']; ?></td>
                        <td><?php echo $res['customer_address']; ?></td>
                        <td> <button class=" btn btn-danger "> <a href=" deleteorder.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>


                    </tr>
                <?php
                }
                ?>
            </table>
            <a href="admin.php"> <button class="btn btn-primary">GO TO DashBoard</button></a>
        </div>
    </div>

</body>

</html>