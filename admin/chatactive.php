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
              <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Active Member</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tbody>
                          <?php
                          $sql=mysqli_query($con, "SELECT * FROM member");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                              <tr>
                            <td>
                            <a class="d-inline" id="profileDropdown" href="#">
                    <p class="text-white"><?php echo $sel['name'] ?></p>
                </a> </td>
                            </tr>
                            <?php
                            }
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-7 grid-margin stretch-card">
                <div class="card" style="height: 100%;">
                <div class="message-wrapper">
                  <div class="chat">
                  <div class="incoming-message bg-success">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  <div class="chat">
                  <div class="outcoming-message bg-primary">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  <div class="chat">
                  <div class="incoming-message bg-success">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  <div class="chat">
                  <div class="outcoming-message bg-primary">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  <div class="chat">
                  <div class="incoming-message bg-success">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  <div class="chat">
                  <div class="outcoming-message bg-primary">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  <div class="chat">
                  <div class="incoming-message bg-success">
                    <div class="msg">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dignissimos nam asperiores eligendi est labore aliquam corporis quas eum accusamus!</p>
                  </div>
                  <div class="date text-white">20:20</div>
                  </div>
                  </div>
                </div>
                <br>
                  

                  <div  style="position:absolute; bottom: 0; width:100%;">
                    <form action="addMember.php" method="POST">
                      <div class="message-control d-flex justify-content-bottom align-item-bottom">
                      <textarea name="message" class="form-control" placeholder="type message ..."></textarea>
                      <button type="submit" name="btn" class="btn btn-primary mr-2"><i class="mdi mdi-send"></i></button>
                      </div>
                    </form>
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