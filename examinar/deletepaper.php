<?php
include("../includes/config.php");
$id=$_GET['id'];
$query="DELETE FROM `questionpapers` WHERE examid='$id';";
$result=mysqli_query($con,$query);
echo '<h1 style="color:red">User Removed Sucessfull<h1>';
echo "<h2>Redirecting to Student page</h2?";
header('Location: part1.php');
?>