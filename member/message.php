

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

           <script>
            function fetchMessage(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("msgBody").innerHTML = this.responseText;
                  }
                };
                xhttp.open("GET", "realtimeChat.php?uid=<?php echo $rid ?>&sid=<?php echo $sid ?>", true);
                xhttp.send();
              }
              fetchMessage();
              setInterval(fetchMessage, 700);
           </script>
           <script>
            document.getElementById("msgBody").scrollTop = document.getElementById("msgBody").scrollHeight;
          </script>
  </body>
</html>