<?php
include "include/connect.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <?php
  include "include/links.php";
  ?>
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
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                          $sql=mysqli_query($con, "SELECT COUNT(n_id) as news FROM add_news ");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                          <h3 class="mb-0"><?php echo $sel['news'] ?></h3>
                          <?php
                            }
                          }
                          ?>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Uploaded New</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                          $sql=mysqli_query($con, "SELECT COUNT(id) as comments FROM comment ");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                          <h3 class="mb-0"><?php echo $sel['comments'] ?></h3>
                          <?php
                            }
                          }
                          ?>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Comments</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                          $sql=mysqli_query($con, "SELECT COUNT(id) as likes FROM likes ");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                          <h3 class="mb-0"><?php echo $sel['likes'] ?></h3>
                          <?php
                            }
                          }
                          ?>
                          <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">likes</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                          $sql=mysqli_query($con, "SELECT COUNT(id) as req FROM adversting WHERE approved=0 ");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                          <h3 class="mb-0"><?php echo $sel['req'] ?></h3>
                          <?php
                            }
                          }
                          ?>
                          <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Adverstising Request</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">News Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID No</th>
                            <th> title Name </th>
                            <th> Date </th>
                            <th> comments </th>
                            <th> Likes </th>
                            <th> operation </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql=mysqli_query($con, "SELECT * FROM add_news");
                          $countCom=mysqli_query($con, "SELECT COUNT(id) as comment FROM comment");
                          $Crows=mysqli_fetch_array($countCom);
                          $countLik=mysqli_query($con, "SELECT COUNT(id) as likes FROM likes");
                          $Crows=mysqli_fetch_array($countLik);
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              $id = $sel['n_id'];
                              ?>
                          <th><?php echo $sel['n_id'] ?> </th>
                            <td>
                              <!-- <img src="assets/images/faces/face4.jpg" alt="image" /> -->
                              <span class="pl-2"><?php echo $sel['title'] ?> </span>
                            </td>
                            <td> <?php echo $sel['date'] ?> </td>
                            <?php
                            $countCom=mysqli_query($con, "SELECT COUNT(id) as comment FROM comment WHERE n_id=$id");
                            $Crows=mysqli_fetch_array($countCom);
                            echo "<td>".  $Crows['comment'] ." </td>";
                            ?>
                            
                            <?php
                            $countLik=mysqli_query($con, "SELECT COUNT(id) as likes FROM likes WHERE n_id=$id");
                            $Lrows=mysqli_fetch_array($countLik);
                            echo "<td>".  $Lrows['likes'] ." </td>";
                            ?>
                            <td>
                              <div class="badge badge-outline-success"><a href="addNews.php">View</a></div>
                            </td>
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
            </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php
          include "include/footer.php";
          ?>
  </body>
</html>