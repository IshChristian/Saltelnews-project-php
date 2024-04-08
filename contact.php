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
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

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

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <img src="img/core-img/map-pin.png" alt="">
                            </div>
                            <p>Kigali City - Makuza Plaza</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <img src="img/core-img/smartphone.png" alt="">
                            </div>
                            <p>+250 791364641</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <img src="img/core-img/paper-plane.png" alt="">
                            </div>
                            <p>saltelnewsrwanda@gmail.com</p>
                        </div>

                        <!-- Contact Social Info -->
                        <div class="contact-social-info mt-50 mb-70">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-70">
                            <h4 class="mb-50">Get In Touch</h4>

                            <form action="contact.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn newsbox-btn mt-30" name="btn" type="submit">Send</button>
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
                        <form action="contact.php" method="post">
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
    <!-- ##### Contact Area End ##### -->
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
    <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Closed Captioning</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                        <p class="mb-15">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <?php
    if(isset($_POST['btn'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        $sql=mysqli_query($con, "INSERT INTO contactus (name,email,subject,message) VALUES ('$name','$email','$subject','$message')");
        if($sql){
            echo "<script>alert('MESSAGE SEND SUCCESSUFULY')</script>";
        }else{
            echo "<script>alert('MESSAGE NOT SEND SUCCESSUFULY')</script>";
        }
    }
    ?>
</body>

</html>