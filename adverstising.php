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
    
    <!-- ##### Breaking News Area End ##### -->

    

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-lg-8">
                    <div class="contact-content mb-100">

                        <!-- Logo -->
                        <a href="#" class="d-block mb-50"><h1 class="align-left">Saltel<span class="text-danger">News</span> </h1></a>

                        

                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-70">
                            <h4 class="mb-50">Adverstising Request</h4>

                            <form action="adverstising.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Company name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="web" id="email" placeholder="Company Website" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="subject" placeholder="Company Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-group">
                                    <!-- <label for="exampleInputName1">Image Size</label> -->
                                    <select name="size" class="form-control" id="">
                                    <option value="">Please select Image size</option>
                                    <option value="327x83">327 x 83 (10,000FRW/Week)</option>
                                    <option value="1677x236">1677 x 236 (10,000FRW/Week)</option>
                                    <option value="362x386">362 x 386 (10,000FRW/Week)</option>
                                    </select>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn newsbox-btn mt-30" name="btnAd" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- ##### Google Maps ##### -->
                        <div class="map-area mb-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-9 col-md-6 col-lg-4">

                    <!-- Newsletter Widget -->
                    <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="adverstising.php" method="post">
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
    
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
    include "include/footer.php";
    ?>
    <?php
    if(isset($_POST['btnAd'])){
        $name=$_POST['name'];
        $web=$_POST['web'];
        $email=$_POST['email'];
        $size=$_POST['size'];
        $imgName=$_FILES['image']['name'];
        $imgTemp=$_FILES['image']['tmp_name'];
        move_uploaded_file($imgTemp, "img/".$imgName);
        
        $sql=mysqli_query($con, "INSERT INTO adversting (name,email,image,size,website,approved) VALUES ('$name','$email','$imgName','$size','$web',0)");
        if($sql){
            echo "<script>alert('REQUEST SEND SUCCESSUFULY')</script>";
        }else{
            echo "<script>alert('REQUEST NOT SEND SUCCESSUFULY')</script>";
        }
    }
    ?>
</body>

</html>