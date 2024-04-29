<?php
session_start();
$uid=$_SESSION['idd'];
?>
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
                    <h4 class="card-title">Announcement</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form action="addAnnocement.php?name=<?php echo $_SESSION['member_name'] ?>" method="POST">
                      <div class="form-group">
                        <textarea name="about" id="" class="form-control" placeholder="Type here ..."></textarea>
                      </div>
                      <button type="submit" name="btn" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Category</h4>
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Date </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql=mysqli_query($con, "SELECT * FROM announcement");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                              <tr>
                            <td> <?php echo $sel['id'] ?> </td>
                            <td> <?php echo $sel['description'] ?> </td>
                            <td> <?php echo $sel['date'] ?> </td>
                            <td><a href="addAnnocementUpdate.php?nid=<?php echo $sel['id'] ?>"><div class="badge badge-outline-success">update</div> </a>   <a href="delete.php?category=announcement&id=<?php echo $sel['id'] ?>&where=id&action=addAnnocement.php"><div class="badge badge-outline-danger">Delete</div></a></td>
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
          <!-- partial:../../partials/_footer.html -->
          <?php
          include "include/footer.php";
          ?>
          <?php
          if(isset($_POST['btn'])){
            $about=$_POST['about'];
            $date=date('y/m/d h:i:sa');
            echo $date;
            $sql=mysqli_query($con, "INSERT INTO announcement (description,date,u_id) VALUES ('$about','$date','$uid')");
            if($sql){
              echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
              echo "<script>window.location = 'addAnnocement.php?name=".$_SESSION['member_name']."</script>";
            }else{
              echo "<script>alert('SORRY, TRY AGAIN')</script>";
            }
          }
          
          ?>
  </body>
</html>