<!DOCTYPE html>
<html lang="en">
<?php
  include "include/links.php";
  include "include/connect.php";
  $nid=$_GET['nid'];
  // echo $_GET['nid'];
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
              <h3 class="page-title"> News </h3>
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
                    <h4 class="card-title">News</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <?php
                    $sql=mysqli_query($con, "SELECT * FROM add_News WHERE n_id=$nid");
                    $rows=mysqli_fetch_array($sql);
                    ?>
                    <form action="addNewsUpdate.php?nid=<?php echo $nid ?>" method="POST" enctype="multipart/form-data" class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" value="<?php echo $rows['title'] ?>" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <select name="category"value="<?php echo $rows['category'] ?>" class="form-control" id="">
                          <option value="">Please select category</option>
                          <?php
                          $sql=mysqli_query($con, "SELECT * FROM category");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                          <option value="<?php echo $sel['name'] ?>" class="text-white"><?php echo $sel['name'] ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" name="about" value="<?php echo $rows['description'] ?> id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Uploads</label>
                        <input type="file" class="form-control" name="image" id="exampleInputName1">
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
            $about=$_POST['about'];
            $date=date('m-d-y');
            $cat=$_POST['category'];
            // $imgname = $_POST['image'];
            $imgName=$_FILES['image']['name'];
            $imgTemp=$_FILES['image']['tmp_name'];
            move_uploaded_file($imgTemp,"img/".$imgName);           
            $sql=mysqli_query($con, "UPDATE add_news SET title='$tlt', category='$cat', description='$about', image='$imgName', date='$date' WHERE n_id=$nid");
            if($sql){
              echo "<script>alert('DATA SAVED SUCCESSFULLY')</script>";
              echo "<script>window.location = 'addNewsUpdate.php?nid=$nid'; </script>";
            }else{
              echo "<script>alert('SORRY, TRY AGAIN')</script>";
            }
          }
            
          
          ?>
  </body>
</html>