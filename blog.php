<?php
include("includes/header.php")
?>

 <!-- ***** Breadcumb Area Start ***** -->
 <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-5.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Tife's Blog</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Regular Page Area Start ***** -->
    <!-- <section class="caviar-regular-page section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="regular-page-content">
                        <div class="post-title">
                            <h2>Proin et sem cursus, placerat odio quis, consectetur turpis</h2>
                            <a href="#">Maecenas sit amet quam magna</a>
                        </div>
                        <div class="post-content">
                            <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod. Etiam scelerisque eu enim et vestibulum. Mauris finibus, eros a faucibus varius, dui risus mattis massa, sed lobortis ante ante eget justo. Nam eu dolor lorem. Praesent blandit leo sit amet velit accumsan ultrices. Vestibulum nec libero vel sapien dictum euismod eu ac justo.</p>
                            <blockquote>
                                <img src="img/icons/quotation-mark.svg" alt="">
                                <div class="blockquote-content">
                                    <h6>Quisque sagittis non ex eget vestibulum. Sed nec ultrices dui. Cras et sagittis erat. Maecenas pulvinar, turpis in dictum tincidunt, dolor nibh lacinia lacus, quis.</h6>
                                    <p>Liam Neeson</p>
                                </div>
                            </blockquote>
                            <p>Nulla mattis massa eu turpis aliquet accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet nunc sed felis vestibulum pulvinar. Nunc odio est, blandit ut faucibus non, congue nec augue. Duis vitae vulputate nunc. Sed mi lectus, ultricies ut volutpat luctus, vestibulum ut nunc. Vestibulum sed lorem malesuada, dapibus ante pharetra, pretium mauris. Sed eleifend sit amet felis id fringilla. Suspendisse nec erat vel lacus commodo imperdiet non quis risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ac interdum elit, ac pellentesque felis. Curabitur aliquet at sapien dapibus laoreet. Sed in justo eu sem pellentesque lobortis. In hac habitasse platea dictumst. Nam pellentesque eros ut auctor fermentum. Vestibulum ut risus pharetra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Regular Page Area End ***** -->

    <!-- ***** Special Menu Area Start ***** -->
    <section class="caviar-blog-menu clearfix" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Blog Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $query2 = "SELECT * FROM blog ORDER BY id ASC";
                    $result = $mysqli->query($query2) or die($mysqli->error);
                    while ($row = $result->fetch_assoc())
                {?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-blog wow fadeInUp" data-wow-delay="0.5s">
                        <img src="admin/images/<?php echo $row['image'];?>" alt="" class="blogImg">
                        <div class="blog-info">
                            <h6 class="blog-name"><?php echo $row['title']; ?></h6>
                            <a href = "blog-single.php?id=<?php echo urlencode($row['id']); ?>"><p class="blog-price">Read</p></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ***** Special Menu Area End ***** -->

<?php
include("includes/footer.php")
?>
