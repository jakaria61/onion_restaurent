<?php
include('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM food_details WHERE id =$id";
    $res = mysqli_query($con, $sql);

    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $row = mysqli_fetch_array($res);
        $title = $row['title'];
        $description = $row['description'];
        $price = $row['price'];
        $image = $row['image'];
    } else {
        header('location:home.php');
    }
} else {
    header('Location:home.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        .order {
            width: 200px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container">
            <div class='col-md-6 m-auto'>
                <h2 class="text-center text-warning">Fill this from to confrom your order</h2>
                <form action="" method='post'>
                    <fieldset>
                        <legend>Your selected Food</legend>
                        <div>
                            <?php
                            if ($image == '') {
                                echo "<div>Image are not available.</div>";
                            } else {
                            ?>
                                <img src="<?php echo $image; ?>" class="img-responsive order" alt="">

                            <?php

                            }
                            ?>
                        </div>
                        <div>
                            <h4><?php echo $title; ?></h4>
                            <input type="hidden" name="food" value="<?php echo $title; ?>" id="">
                            <p><?php echo $description ?></p>
                            <p>$<?php echo $price ?></p>
                            <input type="hidden" name="price" value="<?php echo $price; ?>" id="">
                            <div>
                                quantity
                            </div>
                            <input type="number" name="qty" class='input-responsive' value="1" placeholder="Enter your quantity" id="" required>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Delevery details</legend>
                        <div class="order-label">Full Name</div>
                        <input type="text" name="full-name" placeholder="Enter your full name eg Md Jakaria" class='form-control' id="" required>


                        <div class="order-label">Phone Number</div>
                        <input type="number" name="contact" placeholder="Enter Your Phone Number eg xxxxxxxxxx" class='form-control' id="" required>

                        <div class="order-label">Email</div>
                        <input type="email" name="email" placeholder="Enter Your Email j@gmail.com" class='form-control' id="" required>
                        <div class="order-label">Address</div>
                        <textarea name="address" rows="10" placeholder="Eg street,city,country" class='form-control' id="" required></textarea><br>
                        <input type="submit" name="submit" value="confirm order" class="btn btn-primary" id="">
                    </fieldset>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];
                    $total = $price * $qty;
                    $order_date = date('Y-m-d H:i:s');
                    $status = 'Oredered';
                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    $sql2 = "INSERT INTO `food_order` SET
                    food='$food',
                    price=$price,
                    qty=$qty,
                    total=$total,
                    order_date='$order_date',
                    status='$status',
                    customer_name='$customer_name',
                    customer_contact='$customer_contact',
                    customer_email='$customer_email',
                    customer_address='$customer_address'
                    
                    ";
                    echo $sql2;
                    $result = mysqli_query($con, $sql2);
                    if ($result == true) {
                        $_SESSION['order'] = "<div>Execute succesfully</div>";
                        header('Location:massage.php');
                    } else {
                        $_SESSION['order'] = "<div>Execution fail try again</div>";
                    }
                }

                ?>
            </div>

        </div>
    </section>
</body>

</html>