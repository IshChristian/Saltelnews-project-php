<?php
include "include/connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Member</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Set password</h3>
                <form action="setpassword.php?name=<?php echo $_GET['name'] ?>" method="POST">
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="text" name="password" class="form-control p_input">
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" name="btn" class="btn btn-primary btn-block enter-btn">Confirm</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <?php
    include "include/connect.php";
    if(isset($_POST['btn'])){
      $name = $_GET['name'];
      $hash = $_POST['password'];
      $password=password_hash($hash, PASSWORD_DEFAULT);

      $sql=mysqli_query($con, "UPDATE member SET password='$password' WHERE name='$name'");
      if($sql){
        echo "<script>window.location='index.php?$name'</script>";
      }else{
        echo "<script>alert('INVALID INFORMATION, USERNAME OR PASSWORD')</script>";
      }
    }
    ?>
  </body>
</html>