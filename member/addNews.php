<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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
                    <form action="addNews.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <select name="category" class="form-control" id="">
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
                        <textarea class="form-control" name="about" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Uploads Cover image</label>
                        <input type="file" class="form-control" name="image1" id="exampleInputName1">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Uploads image</label>
                        <input type="file" class="form-control" name="image" id="exampleInputName1">
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
                    <h4 class="card-title">News</h4>
              <div style="max-height: 100%; overflow-y:auto;" class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> category </th>
                            <th> date </th>
                            <th> operations </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql=mysqli_query($con, "SELECT * FROM add_news");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              $id = $sel['n_id'];
                              ?>
                          <tr>
                            <td> <?php echo $sel['n_id'] ?> </td>
                            <td> <?php echo $sel['title'] ?> </td>
                            <td> <?php echo $sel['category'] ?> </td>
                            <td> <?php echo $sel['date'] ?> </td>
                            <td><a href="viewNew.php?id=<?php echo $id ?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                View
                            </button></a><a href="addNewsUpdate.php?nid=<?php echo $sel['n_id'] ?>&action=addNewsUpdate"><div class="badge badge-outline-success">update</div> </a>   <a href="delete.php?category=add_news&id=<?php echo $sel['n_id'] ?>&where=n_id&action=addNews.php"><div class="badge badge-outline-danger">Delete</div></a></td>
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
            $mid=$_SESSION['idd'];
            $tlt=$_POST['title'];
            $about=$_POST['about'];
            $cat=$_POST['category'];
            // $imgname = $_POST['image'];
            echo $timestamp=date('m-d-y');
            $imgName=$_FILES['image']['name'];
            $imgTemp=$_FILES['image']['tmp_name'];
            move_uploaded_file($imgTemp,"img/".$imgName);           
            $imgName1=$_FILES['image1']['name'];
            $imgTemp1=$_FILES['image1']['tmp_name'];
            move_uploaded_file($imgTemp1,"img/".$imgName1);    
                   
            $sql=mysqli_query($con, "INSERT INTO add_news (title,category,description,coverimage,image,u_id) VALUES ('$tlt','$cat','$about','$imgName1','$imgName','$mid')");
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