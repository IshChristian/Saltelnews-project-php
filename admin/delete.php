<?php
include "include/connect.php";
$cat=$_GET['category'];
$cid=$_GET['id'];
$whr=$_GET['where'];
$act=$_GET['action'];
// echo $_GET['where'];
// echo $_GET['category'];
// echo $_GET['id'];
$sql=mysqli_query($con, "DELETE FROM $cat WHERE $whr=$cid");
if($sql){
    echo "<script>alert('DATA IS DELETE')</script>";
    echo "<script>window.location='$act'</script>";
}else{
    echo "<script>alert('DATA NOT IS DELETE')</script>";
}
?>