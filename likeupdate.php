<?php
include "include/connect.php";
$Nid=$_GET['id'];
$user=$_GET['user'];
echo $Nid;
echo $user;
$sql=mysqli_query($con, "DELETE FROM likes WHERE user='$user'");
if($sql){
    echo "<script>window.location='single-post.php?id=$Nid'</script>";
}
?>