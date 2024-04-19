<header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><h2 class="align-left">Saltel<span class="text-danger">News</span> </h2></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="category.php">Category</a></li>
                                    <li><a href="contact.php">Contact US</a></li>
                                    <li><a href="adverstising.php">Adverstising</a></li>
                                    <li><a href="mailto:ishimwechristia94@gmail.com">Feedback</a></li>
                                    <li><a href="search.php"><i class="fa fa-search"></i></a></li>
                                </ul>

                                <!-- Header Add Area -->
                                
                                <?php
                                include "include/connect.php";
                                $ads=mysqli_query($con, "SELECT * FROM adversting WHERE size='327x83' AND approved=1");
                                if(mysqli_num_rows($ads)){
                                    $ad=mysqli_fetch_array($ads);
                                    ?>
                                    <div class="header-add-area">
                                    <a href="www.<?php echo $ad['website'] ?>">                                    
                                    <img src="img/<?php echo $ad['image'] ?>" alt="">
                                    </a>
                                    </div>
                                    <?php
                                }
                               
                                ?>
                                   
                                
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>