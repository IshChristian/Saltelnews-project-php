<?php
include "include/connect.php";
$rid=$_GET['uid'];
$sid=$_GET['sid'];
@$mid=$_GET['mid'];

$sql = "SELECT * FROM message WHERE (sid=$sid AND rid=$rid) OR (sid=$rid AND rid=$sid) ORDER BY timestamp ASC";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0){
              while($msg=mysqli_fetch_array($result)){
                $is_sender = ($msg['sid'] == $sid) ? "right" : "left"; 
                if($is_sender){
                  ?>
                  <div class="msg <?php echo $is_sender ?>-msg">
                  <div class="msg-bubble" style="color: white ">
                    <div class="msg-text" id="message">
                    <?php echo $msg['message'] ?>
                    </div>
                    
                  </div>
                </div>
                  <?php
              }
              }
            }


?>