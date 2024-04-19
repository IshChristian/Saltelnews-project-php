
<link rel="stylesheet" href="msg_assets/style.css">
  <style>
    .msger-chat{
      max-height: 30rem;
      overflow-y: scroll;
    }
  </style>
  </head>
  <body>
    <?php
    include "include/header.php";
    ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <?php
        include "include/menu.php";
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <!-- <h3 class="page-title"> ADD </h3> -->
              <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ADD</li>
                </ol> -->
              </nav>
            </div>
            <?php
            $sql=mysqli_query($con, "SELECT * FROM member WHERE m_id=$rid");
            $rowsre=mysqli_fetch_array($sql);
            ?>
            <div class="col-12 grid-margin stretch-card">
            <section class="msger">
            <header class="msger-header">
              <div class="msger-header-title">
                <i class="fas fa-comment-alt"></i> <?php echo $rowsre['name'] ?>
              </div>
              <div class="msger-header-options">
                <span><i class="fas fa-cog"></i></span>
              </div>
            </header>

            <main class="msger-chat">
              <?php
               // Fetch messages from database
            // $conn=mysqli_connect('localhost','root','','sampler_db');
            $sql = "SELECT * FROM message WHERE (sid=$sid AND rid=$rid) OR (sid=$rid AND rid=$sid) ORDER BY timestamp ASC";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0){
              while($msg=mysqli_fetch_array($result)){
                $is_sender = ($msg['sid'] == $sid) ? "right" : "left"; 
                if($is_sender){
                  ?>
                  <div class="msg <?php echo $is_sender ?>-msg">
                  <!-- <div
                  class="msg-img"
                  style="background-image: url(msg_assets/male.jpg)";
                  ></div> -->
  
                  <div class="msg-bubble" style="color: white ">
                    <div class="msg-info">
                      <!-- <div class="msg-info-name">You</div> -->
                      <div class="msg-info-time"><?php echo $msg['timestamp'] ?></div>
                    </div>
  
                    <div class="msg-text">
                    <?php echo $msg['message'] ?>
                    </div>
                  </div>
                </div>
                  <?php
              }
              }
            }else{
              echo "<p class='text-success'><i> NO MESSAGE </i> </p>";
            }
                ?>
            
           
              


            </main>

            <form action="message.php?uid=<?php echo $rid ?>&sid=<?php echo $sid ?>" method="post" class="msger-inputarea">
              <input type="text" name="message" class="msger-input" placeholder="Enter your message..." required>
              <button type="submit" name="btn" class="msger-send-btn">Send</button>
            </form>
          </section>
          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
          include "include/footer.php";
          ?>
          <script src="msg_assets/script.js"></script>
          <?php
            // Process sending message
            if (isset($_POST['btn'])) {
                $sender = $_SESSION["idd"];
                $receiver = $rowsre['name'];
                $message = $_POST['message'];
                $sql = "INSERT INTO message (sender,receiver, message, timestamp,rid,sid,view) VALUES ('$sender','$receiver', '$message', NOW(),'$rid','$sid','0')";
                mysqli_query($con, $sql); 
                if($sql){
                  echo "<script>window.location = 'message.php?uid=$rid&sid=$sid'; </script>";
                }else{
                  echo "<script>alert('SORRY, TRY AGAIN')</script>";
                }
          }
       
          ?>
  </body>
</html>