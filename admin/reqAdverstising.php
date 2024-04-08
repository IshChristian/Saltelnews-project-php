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
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ADD</li>
                </ol>
              </nav>
            </div>
            
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">News</h4>
              <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Website </th>
                            <th> size </th>
                            <th> Image </th>
                            <th> operations </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql=mysqli_query($con, "SELECT * FROM adversting");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              // $id = $sel['n_id'];
                              ?>
                          <tr>
                            <td> <?php echo $sel['id'] ?> </td>
                            <td> <?php echo $sel['name'] ?> </td>
                            <td> <?php echo $sel['email'] ?> </td>
                            <td> <?php echo $sel['website'] ?> </td>
                            <td> <?php echo $sel['size'] ?> </td>
                            <td> <?php echo $sel['image'] ?> </td>
                            <td>
                              <?php
                              if($sel['approved'] === "0"){
                                ?>
                                <a href="reqAd.php?aid=<?php echo $sel['id'] ?>&action=reqAdverstising.php&approved=1"><div class="badge badge-outline-success">Approved</div> </a>
                                <?php
                              }else{
                                ?>
                                <a href="reqAd.php?aid=<?php echo $sel['id'] ?>&action=reqAdverstising.php&approved=0"><div class="badge badge-outline-danger">Unapproved</div> </a></td>
                                <?php
                              }
                              ?>
                              
                          </tr>
                          <?php
                            }
                          }else{
                            echo "NO DATA FOUND";
                          }
                          ?>

                        </tbody>
                      </table>
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
            $about=$_POST['about'];
            $date=$_POST['date'];
            $cat=$_POST['category'];
            $imgname = $_POST['image'];              
            $sql=mysqli_query($con, "INSERT INTO add_news VALUES ('','$tlt','$cat','$about','$imgname','$date')");

            if($sql){
              echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
              echo "<script>window.location = 'addNews.php'; </script>";
            }else{
              echo "<script>alert('SORRY, TRY AGAIN')</script>";
            }
          }
            
          
          ?>
  </body>
</html>