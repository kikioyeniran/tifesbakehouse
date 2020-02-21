<?php
include("includes/header.php")
?>

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <!-- Welcome Slides -->

        <div class="caviar-hero-slides owl-carousel">
            <?php
                $query2 = "SELECT * FROM home_slider ORDER BY id ASC";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while ($row = $result->fetch_assoc())
                //echo($row.length());
            {?>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(admin/images/<?php echo $row['image']?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2><?php echo $row['text_header']; ?></h2>
                                <p><?php echo $row['text_body']; ?></p>
                                <a href="#" class="btn caviar-btn"><span></span> Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $newID = $row['id'] + 1;
                    $query = "SELECT * FROM home_slider WHERE id = {$newID} LIMIT 1";
                    $result2 = $mysqli->query($query) or die($mysqli->error);
                    $row2 = $result2->fetch_assoc();
                    if(empty($row2['image'])){
                        $query = "SELECT * FROM home_slider WHERE id = 1 LIMIT 1";
                        $result2 = $mysqli->query($query) or die($mysqli->error);
                        $row2 = $result2->fetch_assoc();
                    }
                ?>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url(admin/images/<?php echo $row2['image']?>);"></div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <?php
                $query = "SELECT * FROM about_us WHERE id = 1 LIMIT 1";
                $result2 = $mysqli->query($query) or die($mysqli->error);
                $row2 = $result2->fetch_assoc();
            ?>
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="admin/images/<?php echo $row2['image'];?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                    <div class="about-us-content">
                        <span><?php echo $row2['sub_heading'];?></span>
                        <p><?php echo $row2['profile']?></p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
            <div class="about-us-second-part">
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="about-us-content">
                        <?php
                            $query = "SELECT * FROM about_us WHERE id = 1 LIMIT 1";
                            $result2 = $mysqli->query($query) or die($mysqli->error);
                            $row2 = $result2->fetch_assoc();
                        ?>
                            <span>our chef</span>
                            <p><?php echo $row2['profile'];?></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src="admin/images/<?php echo $row2['image'];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Our Products</h2>
                    </div>
                    <!-- btn -->
                    <a href="products.php" class="btn caviar-btn"><span></span> View Our Products</a>
                </div>
            </div>
            <div class="row">
                <?php
                    $query2 = "SELECT * FROM products ORDER BY id ASC LIMIT 3";
                    $result = $mysqli->query($query2) or die($mysqli->error);
                    while ($row = $result->fetch_assoc())
                {?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="prodImg">
                        <div class="dish-info">
                            <h6 class="dish-name"><?php echo $row['prod_name']; ?></h6>
                            <p class="dish-price">#<?php echo $row['price']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- ****** Dish Menu Area End ****** -->

    <!-- ****** Awards Area Start ****** -->
    <!-- <section class="caviar-awards-area" id="awards">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-2">
                    <div class="section-heading">
                        <h2>Awards</h2>
                    </div>
                </div>
                <div class="col-12 col-md-9 ml-md-auto">
                    <div class="caviar-awards d-sm-flex justify-content-between">
                        <img src="img/awards-img/a-1.png" alt="">
                        <img src="img/awards-img/a-2.png" alt="">
                        <img src="img/awards-img/a-3.png" alt="">
                        <img src="img/awards-img/a-4.png" alt="">
                        <img src="img/awards-img/a-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ****** Awards Area End ****** -->

    <!-- ****** Testimonials Area Start ****** -->
    <section class="caviar-testimonials-area" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <div class="testimonials-content">
                        <div class="section-heading text-center">
                            <h2>Testimonials</h2>
                        </div>
                        <div class="caviar-testimonials-slides owl-carousel">
                        <?php
                            $query2 = "SELECT * FROM testimonials";
                            $result = $mysqli->query($query2) or die($mysqli->error);
                            while ($row = $result->fetch_assoc())
                        {?>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                <img src="admin/images/<?php echo $row['image'];?>" alt="">
                                    <div class="tes-name">
                                        <h5><?php echo $row['name']; ?></h5>
                                        <p><?php echo $row['portfolio']; ?></p>
                                    </div>
                                </div>
                                <p><?php echo $row['testimony']; ?></p>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Testimonials Area End ****** -->

     <!-- ****** Blog Area Start ****** -->
     <section class="caviar-blog-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Our Blog</h2>
                    </div>
                    <!-- btn -->
                    <a href="blog.php" class="btn caviar-btn"><span></span> View Our Blog</a>
                </div>
            </div>
            <div class="row">
                <?php
                    $query2 = "SELECT * FROM blog ORDER BY id ASC LIMIT 3";
                    $result = $mysqli->query($query2) or die($mysqli->error);
                    while ($row = $result->fetch_assoc())
                {?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-blog wow fadeInUp" data-wow-delay="0.5s">
                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="blogImg">
                        <div class="blog-info">
                            <h6 class="blog-name"><?php echo $row['title']; ?></h6>
                            <p class="blog-price">Read</p>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->

    <!-- ****** Reservation Area Start ****** -->
    <section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Contact Us</h2>
                </div>
                <form method="POST" action="comment.php">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Name" name="username">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Phone Number" name="phone">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn caviar-btn" name="submit"><span></span> Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="images/biscuits.jpg" alt="">
        </div>
    </section>
    <!-- ****** Reservation Area End ****** -->

    <?php include("includes/footer.php"); ?>