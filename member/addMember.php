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
                    <h4 class="card-title">Member</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form action="addMember.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="username" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Sex</label>
                        <input type="radio" value="male" class="form-control" name="sex">Male
                        <input type="radio" value="female" class="form-control" name="sex">Female
                      </div>
                      <!-- <div class="form-group">
                        <button type="submit" name="setpass" class="btn btn-success">Set Password</button> 
                      </div> -->
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
                            <th> Password </th>
                            <th> Status </th>
                            <th> Operation </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql=mysqli_query($con, "SELECT * FROM member");
                          if(mysqli_num_rows($sql)){
                            while($sel=mysqli_fetch_array($sql)){
                              ?>
                              <tr>
                            <td> <?php echo $sel['m_id'] ?> </td>
                            <td> <?php echo $sel['name'] ?> </td>
                            <td> <?php echo $sel['password'] ?> </td>
                            <td> <?php echo $sel['status'] ?> </td>
                            <td>
                            <?php
                            if($sel['approved'] === 'Unactivated'){
                              ?>
                              <a href="addMemberUpdate.php?mid=<?php echo $sel['m_id'] ?>&approved=activated"><div class="badge badge-outline-success">Activate</div> </a>
                              <?php
                            }else{
                              ?>
                              <a href="addMemberUpdate.php?mid=<?php echo $sel['m_id'] ?>&approved=Unactivated"><div class="badge badge-outline-danger">Unactivate</div> </a>
                              <?php
                            }
                            ?>
                                 <a href="delete.php?category=member&id=<?php echo $sel['m_id'] ?>&where=m_id&action=addMember.php"><div class="badge badge-outline-danger">Delete</div></a></td>
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
            $sql=mysqli_query($con, "INSERT INTO member (name,status,approved) VALUES ('$name','offline','Unactivated')");
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