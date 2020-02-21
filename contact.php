<?php
include("includes/header.php");
?>

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-4.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Contact</h2>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890">+2348026958814</a> <a href="tel:+1234567890">+1 234 567 890</a></p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lagos, Nigeria</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:someone@yoursite.com">info@tifesbakery.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="caviar-contact-area d-md-flex align-items-center" id="contact">
        <div class="contact-form-area d-flex justify-content-end">
            <div class="contact-form">
                <div class="contact-form-title">
                    <p>get in touch</p>
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
        <!-- <div class="caviar-map-area wow fadeInRightBig" data-wow-delay="0.5s">
            <div id="googleMap"></div>
        </div> -->
    </div>
    <!-- ***** Contact Area End ***** -->
    <?php include("includes/footer.php"); ?>