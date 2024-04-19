<?php 
  include "include/connect.php";
  $mid=$_GET['mid'];
  $approved=$_GET['approved'];
  $sql=mysqli_query($con, "UPDATE member SET approved='$approved' WHERE m_id=$mid");
  if($sql){
    // echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
    echo "<script>window.location = 'addMember.php'; </script>";
  }else{
    echo "<script>alert('SORRY, TRY AGAIN')</script>";
  }


?>