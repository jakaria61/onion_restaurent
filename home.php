<?php
include('nav.php');

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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Red Onion Restaurant</title>
</head>

<body>

    <!-- Banner section start here  -->
    <?php
    include 'Banner.php'
    ?>
    <!-- Banner section end here  -->
    <!-- Food section start here  -->
    <?php
    include 'food.php';
    ?>
    <!-- Food section end here  -->

    <!-- history section start here  -->
    <?php
    include 'History.php'
    ?>
    <!-- history section end here  -->
    <!-- footer section start  -->
    <?php
    include 'Footer.php'

    ?>
    <!-- footer section end  -->

    <!-- bootstrap script -->
    <script src='./js/bootstrap.min.js'></script>
</body>

</html>