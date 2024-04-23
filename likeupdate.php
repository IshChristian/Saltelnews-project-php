<<<<<<< HEAD
<?php
include "include/connect.php";
$Nid=$_GET['id'];
$user=$_GET['user'];
$sql=mysqli_query($con, "DELETE FROM likes WHERE user='$user'");
if($sql){
    echo "<script>window.location='single-post.php?id=$Nid'</script>";
}
=======
<?php
include "include/connect.php";
$Nid=$_GET['id'];
$user=$_GET['user'];
$sql=mysqli_query($con, "DELETE FROM likes WHERE user='$user'");
if($sql){
    echo "<script>window.location='single-post.php?id=$Nid'</script>";
}
>>>>>>> 6b67a25acd85363a3f05327cff154678732d1223
?>