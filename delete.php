
<?php

include('connection.php');

$id = $_GET['id'];

$q = " DELETE FROM `food_details` WHERE id = $id ";

mysqli_query($con, $q);

header('location:admin.php');

?>