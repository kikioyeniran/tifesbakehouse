<?php
include("includes/header.php");
?>
<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-2.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Recipes</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->
<!-- ****** About Us Area Start ****** -->
<section class="caviar-recipe-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/about-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Our Recipes</h2>
                    </div>
                    <div class="about-us-content">
                        <span>baking redefined</span>
                        <p>We're committed to giving all our clients the best there is to offer at Tife's Bakehouse. That's why we decided to share some of our sumptuous recipes for ypu to try on your own. Explore our recipes below.</p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
            <?php
                $query = "SELECT * FROM recipes";
                $result = $mysqli->query($query) or die($mysqli->error);
                while ($row2 = $result->fetch_assoc())
                {?>
            <!-- About Us Single Area -->
            <div class="recipe-second-part">
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                    <div class="section-heading">
                        <h2><?php echo $row2['dish']?></h2>
                    </div>
                        <div class="recipe-content">
                            <span>BY CHEF <?php echo $row2['cook']?></span>
                            <p><?php echo $row2['recipe'];?></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="recipe-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src="admin/images/<?php echo $row2['image'];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>

        </div>
    </section>
    <!-- ****** About Us Area End ****** -->
<?php include("includes/footer.php"); ?>