
<?php
include "include/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include "include/links.php";
   ?>
   <style>
    .cookie-popup {
    position: fixed;
    bottom: 2em;
    left: 2em;
    width: 350px;
    background-color: #242424;
    padding: 1.5em;
    }

    .cookie-popup * {
        color: #fff;
    }

    .cookie-popup .title {
        font-size: 1.6em;
        letter-spacing: 0.4px;
        margin-bottom: 0.5em;
    }

    .cookie-popup .info {
        line-height: 1.4em;
        letter-spacing: 0.4px;
        margin-bottom: 2em;
    }

    .cookie-popup .cta {
        border: none;
        outline: none;
        padding: 0.8em 1.5em;
        background-color: black;
        font-size: 1.1em;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.4s;
    }

    .cookie-popup .cta:hover {
        background-color: #3c9e66;
    }

    .cookie-popup a {
        text-decoration: none;
        border-bottom: 1px solid;
        transition: color 0.4s;
    }

    .cookie-popup a.settings {
        color: #bbb;
        margin-left: 1em;
        border-bottom: none;
    }

    .cookie-popup a:hover {
        color: #3c9e66;
    }

   </style>

</head>

<body>
    <!-- Preloader -->
     <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
         <div></div>
             <div></div>
             <div></div>
             <div></div>
         </div>
     </div>
    <?php
    function generateRandomUsername($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $username = '';
        for ($i = 0; $i < $length; $i++) {
            $username .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $username;
    }
    
    // Check if the cookie is set, if not display the popup
    // echo $_COOKIE['username'];
    if (!isset($_COOKIE['saltelnews_user'])) {
        echo '
        <div class="cookie-popup" style="z-index: 999;">
        <p class="title">Allow Cookies</p>
        <p class="info">By using this website, you automatically accept that we use cookies. <a href="#">Read more</a>
        </p>
        <button id="accept-cookies" class="cta">Accept all</button>
        
    </div>
    ';
    }
    ?>
    
    <script>
    // JavaScript to handle the popup and setting the cookie
    
    document.addEventListener('DOMContentLoaded', function() {
        var popup = document.getElementById('cookie-popup');
        var acceptButton = document.getElementById('accept-cookies');
    
        acceptButton.addEventListener('click', function() {
            // Generate a random username
            var username = '<?php echo generateRandomUsername(); ?>';
    
            // Set cookie to expire in 30 days
            var expires = new Date();
            expires.setTime(expires.getTime() + (30 * 24 * 60 * 60 * 1000));
            document.cookie = 'saltelnews_user=' + username + ';expires=' + expires.toUTCString() + ';path=/';
            window.location='index.php';
    
            // Set username in the session
            <?php $_SESSION['saltelnews_user'] = "' + saltelnews_user + '"; ?>
    
            // Hide the popup
            popup.style.display = 'none';
             
            window.location='index.php?';
        });
    });
    </script>
    
    
    
    <!-- ##### Header Area Start ##### -->
    <?php
    include "include/menu.php";
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area">
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
                            <?php
                            $sql=mysqli_query($con, "SELECT * FROM add_news ORDER BY n_id DESC LIMIT 3;");
                            while($rows=mysqli_fetch_array($sql)){
                                $Nid=$rows['n_id'];
                                ?>
                                <li><a href="single-post.php?id=<?php echo $Nid ?>"><?php echo $rows['title'] ?></a></li>
                                <?php
                            }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>Lastest news</h6>
                            <!-- <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">International</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Sport</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Education</a>
                                    <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Lifestye</a>
                                </div>
                            </nav> -->
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                          
                            <?php
                            $sql=mysqli_query($con, "SELECT * FROM add_news ORDER BY n_id DESC LIMIT 12;");
                            while($rows=mysqli_fetch_array($sql)){
                                $Nid=$rows['n_id'];
                                ?>
                                <!-- Single News Area -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-blog-post style-2 mb-5">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="single-post.php?id=<?php echo $Nid ?>"><img src="admin/img/<?php echo $rows['image'] ?>" alt=""></a>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date"><?php echo $rows['date'] ?></span> / <span class="post-date text-danger"><?php echo $rows['category'] ?>
                                            <a href="single-post.php?id=<?php echo $Nid ?>" class="post-title"><?php echo $rows['title'] ?></a>
                                            <a href="single-post.php?id=<?php echo $Nid ?>" class="post-author">By <?php echo $rows['u_id'] ?></a>
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
                        <form action="index.php" method="post">
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

    <!-- ##### Video Area Start ##### -->
    
    

                                    
    <!-- ##### Video Area End ##### -->

    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
        
            <div class="row">
            <?php
            $sql=mysqli_query($con, "SELECT * FROM add_news ORDER BY date ASC LIMIT 9;");
            while($rows=mysqli_fetch_array($sql)){
                $Nid=$rows['n_id'];
                ?>
                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="single-post.php?id=<?php echo $Nid ?>"><img src="admin/img/<?php echo $rows['image'] ?>" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date"><?php echo $rows['date'] ?></span>
                            <a href="single-post.php?id=<?php echo $Nid ?>" class="post-title"><?php echo $rows['title'] ?></a>
                            <a href="single-post.php?id=<?php echo $Nid ?>" class="post-author">By IshChristian</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
               

                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="category.php" class="btn newsbox-btn">Load More</a>
                    </div>
                </div>


            </div>
            
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->

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

    <!-- ##### Footer Area Start ##### -->
    <?php
    include "include/footer.php";
    ?>
</body>

</html>