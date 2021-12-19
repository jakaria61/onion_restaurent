<?php

include('connection.php');

$id = $_GET['id'];

$q = " DELETE FROM `food_order` WHERE id = $id ";

mysqli_query($con, $q);

header('location:manageorder.php');
