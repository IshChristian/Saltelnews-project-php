<?php
$mid=$_GET['name'];
include "include/connect.php";
$set=mysqli_query($con, "UPDATE member SET status='offline' WHERE name='$mid'");
if($set){
session_start();
session_destroy();
echo "<script>window.location = 'login.php'</script>";
exit();
}
?>