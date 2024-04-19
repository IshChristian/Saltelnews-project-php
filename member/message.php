

<!DOCTYPE html>
<html lang="en">
<?php 
 session_start();
  include "include/links.php";
  include "include/connect.php";
  
  $rid=$_GET['uid'];
  $sid=$_GET['sid'];
  @$mid=$_GET['mid'];
  if(isset($mid)){
    $view=mysqli_query($con, "SELECT * FROM message WHERE id='$mid'");
    $resultview=mysqli_fetch_array($view);
  if($resultview['view'] == "0" || $resultview['view'] == "1"){
    $updateview=mysqli_query($con, "UPDATE message SET view='1' WHERE id='$mid'");
    if($updateview){
      include "getmessage.php";
      }
      }
  }else{
    include "getmessage.php";
  }
          ?>
  </body>
</html>