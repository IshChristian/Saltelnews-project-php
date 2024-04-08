
<?php
include "include/connect.php";
$aid=$_GET['aid'];
$app=$_GET['approved'];
$sql=mysqli_query($con, "UPDATE adversting SET approved=$app WHERE id=$aid");
if($sql){
  echo "<script>window.location = 'reqAdverstising.php'; </script>";
}else{
  echo "<script>alert('SORRY, TRY AGAIN')</script>";
}

?>
  