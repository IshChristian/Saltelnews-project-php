<?php
include "include/connect.php";
$cat=$_GET['category'];
$cid=$_GET['cid'];
$whr=$_GET['where'];
$act=$_GET['action'];
$sql=mysqli_query($con, "DELETE FROM $cat WHERE $whr=$cid");
if($sql){
    echo "<script>alert('DATA IS DELETE')</script>";
    echo "<script>window.location='$act'</script>";
}else{
    echo "<script>alert('DATA NOT IS DELETE')</script>";
}
?>