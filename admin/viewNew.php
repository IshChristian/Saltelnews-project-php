<!DOCTYPE html>
<html lang="en">
<?php
  include "include/links.php";
  include "include/connect.php";

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
            <div class="page-header">
              <h3 class="page-title"> View </h3>
            </div>
            <div class="row">
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">News</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                        <?php
                        $idN=$_GET['id'];
                          $sql=mysqli_query($con, "SELECT * FROM add_news WHERE n_id=$idN");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                           <div class="row">
                            <div class="col-md-12 d-flex flex-container" style="position: relative;">
                              <img src="uploads/<?php echo $sel['image'] ?>" class="d-flex responsive-img" style="max-width: 100%; height: auto;" alt="Responsive Image">
                            </div><br>
                            <div class="col-md-12">
                              <h4 class="text-success"><?php echo $sel['category'] ?></h4>
                              <h3 class="text-danger"><?php echo $sel['title'] ?></h3>
                            </div><br>
                            <div class="col-md-12">
                              <p><?php echo $sel['description'] ?></p>
                            </div>
                           </div>
                          <?php
                            }
                          }else{
                            echo "NO DATA FOUND";
                          }
                          ?>

                      
                    </div>
                  </div>
                </div>
              </div>
              
              
        <!-- footer -->
        <?php
        include "include/footer.php";
        ?>
  </body>
</html>