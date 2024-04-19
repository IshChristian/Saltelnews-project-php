<!DOCTYPE html>
<html lang="en">
<?php
session_start();
  include "include/links.php";
  include "include/connect.php";
  $nid=$_GET['nid'];
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
              <h3 class="page-title"> ADD </h3>
              <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ADD</li>
                </ol> -->
              </nav>
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <?php
                    $sql=mysqli_query($con, "SELECT * FROM category WHERE id=$nid");
                    $rows=mysqli_fetch_array($sql);
                    ?>
                    <form action="addCategory.php?nid=<?php echo $nid ?>" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" value="<?php echo $rows['name'] ?>" name="title" id="exampleInputName1" placeholder="Name">
                      </div>
                      <button type="submit" name="btn" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
          include "include/footer.php";
          ?>
          <?php
          if(isset($_POST['btn'])){
            $tlt=$_POST['title'];
            $date=date('m-d-y');
            $sql=mysqli_query($con, "UPDATE category SET name='$tlt',date='$date' WHERE id=$nid");
            if($sql){
              echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
              echo "<script>window.location = 'addCategory.php'; </script>";
            }else{
              echo "<script>alert('SORRY, TRY AGAIN')</script>";
            }
          }
          ?>
  </body>
</html>