<?php
include "include/connect.php";
$Nid=$_GET['id'];
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
    <?php
   
    $sql=mysqli_query($con, "SELECT * FROM add_news WHERE n_id=$Nid;");
    while($rows=mysqli_fetch_array($sql)){
        ?>
    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(admin/img/<?php echo $rows['image'] ?>)">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span><?php echo $rows['category'] ?></span></p>
                        <p class="post-title"><?php echo $rows['title'] ?></p>
                        <div class="d-flex align-items-center">
                            <span class="post-date mr-30"><?php echo $rows['date'] ?></span>
                            <span class="post-date">By IshChristian</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <p><?php echo $rows['description'] ?></p>
                        <img class="mb-30" src="admin/img/<?php echo $rows['image'] ?>" alt="">
                        
                    </div>
                    
    <?php
    }
    ?>
                    <form action="single-post.php?id=<?php echo $Nid ?>" method="POST">
                    <div class="col-12 col-lg-8">
                        <div class="row d-flex justify-between">
                        <button type="submit" name="likeBtn" style="border: none; background-color: transparent;"><i class="fa fa-heart-o text-danger p-2" name="likeBtn" style="font-size: 40px"></i></button>
                        <button type="submit" name="commentBtn" style="border: none; background-color: transparent;"><i class="fa fa-comment text-primary p-2"  style="font-size: 40px"></i></button>
                        </div>
                        <?php
                        $Lsql=mysqli_query($con, "SELECT COUNT(id) as likes FROM likes WHERE n_id=$Nid;");
                        $Csql=mysqli_query($con, "SELECT COUNT(id) as comments FROM comment WHERE n_id=$Nid;");
                        $Lcount=mysqli_fetch_array($Lsql);
                        $Ccount=mysqli_fetch_array($Csql);
                        ?>
                        <p>Likes <?php echo $Lcount['likes'] ?> and <?php echo $Ccount['comments'] ?> comment</p>
                    </div>
                    </form>
                        <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Comments</h4>
                        <!-- single accordian area -->
                        <ol>
                        
                            <!-- Single Comment Area -->
                            <?php
                            $sql=mysqli_query($con, "SELECT * FROM comment WHERE n_id=$Nid");
                            while($rows=mysqli_fetch_array($sql)){
                                ?>
                                <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/10p.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author"><?php echo $rows['name'] ?></a>
                                            <a href="#" class="post-date"><?php echo $rows['date'] ?></a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p><?php echo $rows['comment'] ?></p>
                                    </div>
                                </div>
                            </li>
                                <?php
                            }
                            ?>
                            <!-- Single Comment Area -->
                            
                        
                           
                        </ol>

                        
                    </div>

                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Leave a comment</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="single-post.php?id=<?php echo $Nid ?>" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div class="col-12 ">
                                        <input type="text" class="form-control" name="comment" id="email" placeholder="Type Comment*">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn newsbox-btn mt-30" name="Cbtn" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                        <?php
                    if(isset($_POST['likeBtn'])){
                        $like = 1;
                        $date= date('y-m-d');
                        $sql=mysqli_query($con, "INSERT INTO likes VALUES ('','$like','$Nid')");
                        if($sql){
                            echo "<script>window.location='single-post.php?id=$Nid'</script>";
                        }

                    }
                    
                    if(isset($_POST['Cbtn'])){
                        $name=$_POST['name'];
                        $comment=$_POST['comment'];
                        $date= date('y-m-d');
                        $sql=mysqli_query($con, "INSERT INTO comment VALUES ('','$name','$comment','$date','$Nid')");
                        if($sql){
                            echo "<script>alert('Comment Replyed')</script>";
                            echo "<script>window.location='single-post.php?id=$Nid'</script>";

                        }else{
                            echo "<script>alert('Comment Not Replyed')</script>";
                        }
                    }
                    ?>
                    
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="single-post.php?id=<?php echo $Nid ?>" method="post">
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
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Latest News</h4>

                            <?php
                            $sql=mysqli_query($con, "SELECT * FROM add_news ORDER BY n_id ASC LIMIT 5;");
                            while($Nrows=mysqli_fetch_array($sql)){
                                $Cname=$Nrows['n_id'];
                                ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="admin/img/<?php echo $Nrows['image'] ?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $Nrows['date'] ?></span>
                                    <a href="single-post.php?id=<?php echo $Cname ?>" class="post-title"><?php echo $Nrows['title'] ?></a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>

                        
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
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
    <!-- ##### Footer Area Start ##### -->
    <?php
    include "include/footer.php";
    ?>
</body>

</html>