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
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>Trending</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</a></li>
                                <li><a href="#">Welcome to Colorlib Family.</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->
    
    <!-- ##### Catagory Featured Area End ##### -->

    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>All the news</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav1" href="category.php" role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                <?php
                                $sql=mysqli_query($con, "SELECT * FROM category ORDER BY id ASC;");
                                while($Crows=mysqli_fetch_array($sql)){
                                 
                                    ?>
                                    <a class="nav-item nav-link " id="nav<?php echo $Crows['id'] ?>"  href="categoryView.php?category=<?php echo $Crows['id'] ?>" role="tab" aria-controls="nav-<?php echo $Crows['id'] ?>" aria-selected="false"><?php echo $Crows['name'] ?></a>
                                <?php
                                }
                                ?>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                <?php
                                // echo $_GET['category'];
                                $catId=$_GET['category'];
                                $Csql=mysqli_query($con, "SELECT * FROM category WHERE id=$catId");
                                $Catrows=mysqli_fetch_array($Csql);
                                $catName=$Catrows['name'];
                                $sql=mysqli_query($con, "SELECT * FROM add_news WHERE category='$catName'");
                                while($rows=mysqli_fetch_array($sql)){
                                    $Nid=$rows['n_id'];
                                    ?>
                                    <!-- Single News Area -->
                                    <div class="col-12">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="single-post.php?id=<?php echo $Nid ?>"><img src="admin/img/<?php echo $rows['image'] ?>" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date"><?php echo $rows['date'] ?></span>
                                                <a href="single-post.php?id=<?php echo $Nid ?>" class="post-title"><?php echo $rows['title'] ?></a>
                                                <a href="single-post.php?id=<?php echo $Nid ?>" class="post-author mb-30">By IshChristian</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                          
                            
                           
                            
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="categoryView.php" method="post">
                            <input type="email" name="email" id="nlemail" placeholder="Your E-mail">
                            <button type="submit" name="btn" class="btn newsbox-btn w-100">Subscribe</button>
                        </form>
                        <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                    </div>
                    <?php
                    if(isset($_POST['btn'])){
                        $em=$_POST['email'];
                        $date=date('d-m-y');
                        $sql=mysqli_query($con, "INSERT INTO subscribe (email,date) VALUES ('$em','$date')");
                        if($sql){
                            echo "<script>alert('REQUEST SEND SUCCESSUFULY')</script>";
                        }else{
                            echo "<script>alert('REQUEST NOT SEND SUCCESSUFULY')</script>";
                        }
                    }
                    ?>

                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                    <?php
                    $sql=mysqli_query($con, "SELECT * FROM adversting WHERE size='362x386' AND approved=1 LIMIT 1");
                    $ad=mysqli_fetch_array($sql);
                    ?>
                        <a href="www.<?php echo $ad['website'] ?>">                                    
                        <img src="img/<?php echo $ad['image'] ?>" alt="">
                        </a>
                    </div>

                        <!-- Latest News Widget -->
                         <!-- Latest News Widget -->
                         <div class="single-widget-area news-widget mb-30">
                            <h4>Announcement</h4>

                            <?php
                            $sql=mysqli_query($con, "SELECT * FROM announcement ORDER BY id ASC LIMIT 5;");
                            while($Nrows=mysqli_fetch_array($sql)){
                                $Cname=$Nrows['id'];
                                ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <p class="post-title"><?php echo $Nrows['description'] ?></p>
                                    <span class="post-date"><?php echo $Nrows['date'] ?></span> / <?php echo $Nrows['u_id'] ?>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="big-add-area mb-100">
        <div class="container-fluid">
        <?php
        $sql=mysqli_query($con, "SELECT * FROM adversting WHERE size='1677x236' AND approved=1 LIMIT 1");
        $ad=mysqli_fetch_array($sql);
        ?>
            <a href="www.<?php echo $ad['website'] ?>">                                    
                        <img src="img/<?php echo $ad['image'] ?>" alt="">
                        </a>
        </div>
    </div>
    <!-- ##### Add Area End ##### -->

    <!-- ##### News Area Start ##### -->
    <?php
    include "include/footer.php";
    ?>
</body>

</html>