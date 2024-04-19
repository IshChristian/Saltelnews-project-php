<!DOCTYPE html>
<html lang="en">
<?php 
 session_start();
  include "include/links.php";
  include "include/connect.php";
  ?>
  <link rel="stylesheet" href="member/assets/css/material-icons.min.css">
  <link rel="stylesheet" href="member/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="member/msg_assets/usermsg.css">
  <style>
    .dp-con{
      position: relative;
      display: inline-block;
    }
    .green-dot{
      position: absolute;
      top: 1px;
      right: -8px;
      width: 20px;
      height: 20px;
      border-radius: 50px;
      background-color: green;
      border: 2px solid white;
    }
    .friend-drawer:hover{
      background-color: #887f7f71;
      cursor: pointer;
    }
    .newmessage{
      top: 80%;
      width: 80px;
      height: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      float: right;
      left: 90%;
    }
    .ellipsis{
      width: 300px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      /* border: 1px solid #ccc; */
      /* padding: 5px; */
    }
    .icons{
      display: flex;
      flex-direction: column;
      align-items: center;
      top: 0;
      padding:0;
    }
    a{
      text-decoration: none;
    }
    .menu-icons p{
      top: 0.9rem;
    }
    @media screen and (max-width: 700px) {
      .newmessage{
      top: 80%;
      width: 80px;
      height: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      float: right;
      left: 83%;
    }
    }
    
  </style>
  </head>
  <body>
    <?php
    include "include/header.php";
    ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
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
            <div class="row d-flex">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                  
                    <div class="settings-tray">
                      <!-- <a href="" class="btn btn-primary"><i class="mdi mdi-plus"></i> New Message</a> -->
                    <!-- <img class="profile-image rounded-circle" style="max-width: 50px; max-height: 50px;" src="msg_assets/female.jpg" alt=""> -->
                      <span class="settings-tray--right float-right" style="display: flex; position: relative;">
                      <div class="menu-icons d-block h-50">
                      <div class="icons">
                      <a href="activeuser.php" style="display: block;position: relative" title="account-active">
                      <i class="mdi mdi-account-group text-success" style="font-size: 50px"></i>
                      <p class="text-white">Online</p>
                      </div>
                      </a>
                      </div>
                      <div class="menu-icons">
                      <a href="" style="display: block;position: relative" title="Group">
                      <div class="icons">
                      <i class="mdi mdi-package-down text-primary" style="font-size: 50px;"></i>
                      <p class="text-white">Sended</p>
                      </div>
                      </a>
                      </div>
                      
                    </span>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 
                    <hr>
                    <?php
                    $sname=$_SESSION["idd"];
                    $sender=mysqli_query($con, "SELECT * FROM member WHERE name='$sname'");
                    $rowssender=mysqli_fetch_array($sender);
                    $sendername=$rowssender['m_id'];
                    $viewed=mysqli_query($con, "SELECT * FROM (SELECT * FROM message WHERE message.sender='$sname' ORDER BY timestamp DESC LIMIT 1000)
                     AS message LEFT JOIN member ON member.m_id=message.sid OR member.m_id=message.rid GROUP BY message.receiver ORDER BY timestamp DESC;");
                    if(mysqli_num_rows($viewed)>0){
                      while($row=mysqli_fetch_array($viewed)){
                        $you = ($row['sender'] == $sname) ? $who='You:' : $who='';
                        $user=$row['rid'];
                        ?>
                        <a href="message.php?uid=<?php echo $row['rid'] ?>&sid=<?php echo $sendername ?>&mid=<?php echo $row['id'] ?>" class="text-white text-decoration-none">
                        <div class="friend-drawer d-flex friend-drawer--onhover">
                          <div class="dp-con">
                          <img class="profile-image rounded-circle" style="max-width: 50px; max-height: 50px;" src="msg_assets/<?php echo $row['image'] ?>" alt="">
                          <?php
                          if($row['status'] == "online"){
                            ?>
                            <div class="green-dot"></div>
                            <?php
                          }
                          ?>
                          
                          </div>
                          <div class="text ml-3">
                          <h6>To: <?php echo $row['receiver'] ?></h6>
                          <?php
                          if($row['view'] == "0"){
                            ?>
                            <p class="ellipsis"><?php echo $you, $row['message'] ?></p>
                            <?php
                          }else{
                            ?>
                            <p class="text-muted ellipsis"><?php echo $row['message'] ?></p>
                            <?php
                          }
                          ?>
                          <p class="text-muted"><?php echo $row['timestamp'] ?></p>
                          </div>
                        </div>
                        </a>
                        <hr>  
                        <?php
                      }
                    }else{
                      echo "NO CHAT";
                    }
                    ?>
                    
                  </div>
                
              </div>
              
              </div>
            <div class="newmessage fixed-bottom rounded-circle bg-primary">
            <a href="newmessage.php"><i class="mdi mdi-account-multiple-plus text-white" style="font-size: 50px"></i></a>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
          // include "include/footer.php";
          ?>
          <script src="member/msg_assets/usermsg.js"></script>
          <script src="member/msg_assets/jquery.min.js"></script>
          <?php
          // if(isset($_POST['btn'])){
              
          //     // echo "<script>window.location='addMember.php'</script>"; 
          //   $length=8;
          //   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          //   $username = '';
          //   for ($i = 0; $i < $length; $i++) {
          //       $username .= $characters[rand(0, strlen($characters) - 1)];
          //   }
          //   $name=$_POST['username'];
          //   $date=date('m-d-y');
          //   echo $username;
          //   echo $name;
          //   $sql=mysqli_query($con, "INSERT INTO member (name,password,status,approved) VALUES ('$name','$username','offline','Unactivated')");
          //   if($sql){
          //     echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
          //     echo "<script>window.location = 'addMember.php'; </script>";
          //   }else{
          //     echo "<script>alert('SORRY, TRY AGAIN')</script>";
          //   }
          // }
          
          ?>
  </body>
</html>