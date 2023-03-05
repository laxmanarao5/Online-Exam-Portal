<?php
include("../includes/config.php");
$id=$_GET['id'];
$query="UPDATE `queries` SET `status`=1 WHERE id='$id';";
$result=mysqli_query($con,$query);
header('Location: page_11.php');
?>