<!DOCTYPE html>
<html lang="en">
<?php 
 session_start();
  include "include/links.php";
  include "include/connect.php";
  ?>
  <style>
    .incoming-message{
      background-color: green;
      padding:10px;
      border-radius: 30px;
      direction: left;
    }
    .outcoming-message{
      padding:10px;
      border-radius: 30px;
      float: right;
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
              <h3 class="page-title"> ADD </h3>
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
          
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="link">
                    <table>
                      <tr>
                      <th><a href="chat.php" class='text-success'>Message</a></th>
                      <th><a href="activeuser.php" class='text-success'>Active</a></th>
                      </tr>
                    </table>
                    </div>
                    <br>
                    <div class="user-msg">
                    <div class="profile-desc">
                    <?php
                          $sql=mysqli_query($con, "SELECT * FROM member WHERE status='active'");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                    <div class="profile-pic d-flex">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><a href="" class='text-white'><?php echo $sel['name'] ?></a></h5>
                  <span style='color:#ccc;'>Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
                </div>
              </div>
              <?php
                            }
                          }else{
                            echo 'NO USER ACTIVE';
                          }
                          ?>
                    </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              
              </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
          // include "include/footer.php";
          ?>
          <?php
          if(isset($_POST['btn'])){
              
              // echo "<script>window.location='addMember.php'</script>"; 
            $length=8;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $username = '';
            for ($i = 0; $i < $length; $i++) {
                $username .= $characters[rand(0, strlen($characters) - 1)];
            }
            $name=$_POST['username'];
            $date=date('m-d-y');
            echo $username;
            echo $name;
            $sql=mysqli_query($con, "INSERT INTO member (name,password,status,approved) VALUES ('$name','$username','offline','Unactivated')");
            if($sql){
              echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
              echo "<script>window.location = 'addMember.php'; </script>";
            }else{
              echo "<script>alert('SORRY, TRY AGAIN')</script>";
            }
          }
          
          ?>
  </body>
</html>