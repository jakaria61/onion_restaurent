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

    <div class="container">
        <h1 class="text-center text-danger">our Delicious Food</h1>
        <div class="row">
            <?php
            include('connection.php');

            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $files = $_FILES['file'];
                $filename = $files['name'];

                $fileerror = $files['error'];
                $filetmp = $files['tmp_name'];

                $fileext = explode('.', $filename);
                $filecheck = strtolower(end($fileext));


                $fileextstored = array('png', 'jpg', 'jpeg');

                if (in_array($filecheck, $fileextstored)) {
                    $destinationfile = 'upload/' . $filename;
                    move_uploaded_file($filetmp, $destinationfile);

                    $q = "INSERT INTO `food_details`(`title`, `description`,`price`, `image`) VALUES (' $title','$description','$price','$destinationfile')";
                    $query = mysqli_query($con, $q);

                    $displayquery = "SELECT * FROM `food_details`";
                    $querydisplay = mysqli_query($con, $displayquery);

                    $row = mysqli_num_rows($querydisplay);


                    while ($result = mysqli_fetch_array($querydisplay)) {
            ?>

                        <div class='col-md-4  '>

                            <img src="<?php echo $result['image']; ?>" width='100px'><br>
                            <h5><?php echo $result['title']; ?></h5>
                            <p><?php echo $result['description']; ?></p>
                            <h4><?php echo $result['price']; ?></h4>

                            <button class="btn btn-success "> <a href="order.php?id=<?php echo $result['id']; ?>" class="text-white"> order Now </a> </button>
                        </div>

            <?php
                    }
                }
            }

            ?>


        </div>
    </div>
</body>

</html>