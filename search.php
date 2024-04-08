<?php
include "include/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include "include/links.php";
   ?>

</head>

<body>
    <!-- Preloader -->
    

    <!-- ##### Header Area Start ##### -->
    <?php
    include "include/menu.php";
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
            <form action="search.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Search here" required>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn newsbox-btn mt-30" name="search" type="submit">Search</button>
        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->
    <?php
    
    if(isset($_POST['search'])){
        $name=$_POST['name'];
        $sql=mysqli_query($con, "SELECT * FROM add_news WHERE title LIKE '$name%'");
        if(mysqli_num_rows($sql)){
            while($rows=mysqli_fetch_array($sql)){
                ?>
                <!-- ##### Contact Area Start ##### -->
                <div class="hero-contact-area bg-overlay clearfix" style="background-image: url(admin/img/<?php echo $rows['image'] ?>)">
                    <div class="container-fluid h-30">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 col-lg-7">
                                <!-- Post Content -->
                                <div class="post-content">
                                    <p class="tag"><span><?php echo $rows['category'] ?></span></p>
                                    <a href="single-post.php?id=<?php echo $rows['n_id'] ?>"><p class="post-title"><?php echo $rows['title'] ?></p></a>
                                    <div class="d-flex align-items-center">
                                        <span class="post-date mr-30"><?php echo $rows['date'] ?></span>
                                        <span class="post-date">By IshChristian</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##### Contact Area End ##### -->
                <?php
            }
        }else{
            echo "DATA NOT FOUND";
        }
    }
    
    ?>
    



<?php
include "include/footer.php";
?>
</body>

</html>