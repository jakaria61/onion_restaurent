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
    <div class="container" id="food">
        <h1 class='text-center '>Our <span class='text-warning'>Delicious</span> Food</h1>
        <div class="row w-100  ">
            <?php
            include('connection.php');
            $displayquery = "SELECT * FROM `food_details`";
            $querydisplay = mysqli_query($con, $displayquery);

            $row = mysqli_num_rows($querydisplay);


            while ($result = mysqli_fetch_array($querydisplay)) {
            ?>

                <div class='col-md-4 text-center food-container '>

                    <img src="<?php echo $result['image']; ?>" class="img-fluid food-img"><br>
                    <h5><?php echo $result['title']; ?></h5>
                    <p><?php echo $result['description']; ?></p>
                    <h5>$<?php echo $result['price']; ?></h5>
                    <button class="btn btn-success "> <a href="order.php?id=<?php echo $result['id']; ?>" class="text-white"> order Now </a> </button>
                </div>

            <?php
            }



            ?>


        </div>
    </div>
</body>

</html>