<?php
include("includes/header.php")
?>

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-2.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Our Products</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Special</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Menu Area Start ***** -->
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2>Products</h2>
                    </div>
                </div>

                <div class="col-10">
                    <div class="caviar-projects-menu">
                        <div class="text-center portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cakes">Cakes</button>
                            <button data-filter=".slices">Slices</button>
                            <button data-filter=".cupcakes">Cupcakes</button>
                            <button data-filter=".loaves">Loaves</button>
                            <button data-filter=".cookies">Cookies</button>
                        </div>
                    </div>

                    <div class="caviar-menu-slides owl-carousel">
                        <div class="caviar-portfolio">
                            <?php
                                $query2 = "SELECT * FROM products ORDER BY id ASC LIMIT 4";
                                $result = $mysqli->query($query2) or die($mysqli->error);
                                while ($row = $result->fetch_assoc())
                            {?>
                            <!-- Single Gallery Item Cookies-->
                            <div class="single_menu_item wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="products">
                                    </div>
                                    <div class="dish-description">
                                        <h3><?php echo $row['prod_name']; ?></h3>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>#<?php echo $row['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="caviar-portfolio">
                            <?php
                                $cat = 'cakes';
                                $query2 = "SELECT * FROM products WHERE category = '{$cat}'ORDER BY id ASC";
                                $result = $mysqli->query($query2) or die($mysqli->error);
                                while ($row = $result->fetch_assoc())
                            {?>
                            <!-- Single Gallery Item Cakes -->
                            <div class="single_menu_item cakes wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="products">
                                    </div>
                                    <div class="dish-description">
                                        <h3><?php echo $row['prod_name']; ?></h3>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>#<?php echo $row['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="caviar-portfolio">
                            <?php
                                $cat = 'slices';
                                $query2 = "SELECT * FROM products WHERE category = '{$cat}' ORDER BY id ASC";
                                $result = $mysqli->query($query2) or die($mysqli->error);
                                while ($row = $result->fetch_assoc())
                            {?>
                            <!-- Single Gallery Item Slices -->
                            <div class="single_menu_item slices wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="products">
                                    </div>
                                    <div class="dish-description">
                                        <h3><?php echo $row['prod_name']; ?></h3>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>#<?php echo $row['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="caviar-portfolio">
                            <?php
                                $cat = 'cupcakes';
                                $query2 = "SELECT * FROM products WHERE category = '{$cat}' ORDER BY id ASC";
                                $result = $mysqli->query($query2) or die($mysqli->error);
                                while ($row = $result->fetch_assoc())
                            {?>
                            <!-- Single Gallery Item Cupcakes -->
                            <div class="single_menu_item cupcakes wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="products">
                                    </div>
                                    <div class="dish-description">
                                        <h3><?php echo $row['prod_name']; ?></h3>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>#<?php echo $row['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="caviar-portfolio">
                            <?php
                                $cat = 'loaves';
                                $query2 = "SELECT * FROM products WHERE category = '{$cat}' ORDER BY id ASC";
                                $result = $mysqli->query($query2) or die($mysqli->error);
                                while ($row = $result->fetch_assoc())
                            {?>
                            <!-- Single Gallery Item Loaves-->
                            <div class="single_menu_item loaves wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="products">
                                    </div>
                                    <div class="dish-description">
                                        <h3><?php echo $row['prod_name']; ?></h3>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>#<?php echo $row['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="caviar-portfolio">
                            <?php
                            $cat = 'cookies';
                                $query2 = "SELECT * FROM products WHERE category = '{$cat}' ORDER BY id ASC";
                                $result = $mysqli->query($query2) or die($mysqli->error);
                                while ($row = $result->fetch_assoc())
                            {?>
                            <!-- Single Gallery Item Cookies-->
                            <div class="single_menu_item cookies wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="products">
                                    </div>
                                    <div class="dish-description">
                                        <h3><?php echo $row['prod_name']; ?></h3>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>#<?php echo $row['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Menu Area End ***** -->

    <!-- ***** Special Menu Area Start ***** -->
    <!-- <section class="caviar-dish-menu clearfix" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/menu-img/dish-1.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Lorem Ipsum Dolor Sit Amet</h6>
                            <p class="dish-price">$45</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="img/menu-img/dish-2.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Lorem Ipsum</h6>
                            <p class="dish-price">$45</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/menu-img/dish-3.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Lorem Ipsum Dolor Sit Amet</h6>
                            <p class="dish-price">$45</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Special Menu Area End ***** -->

    <?php include("includes/footer.php"); ?>