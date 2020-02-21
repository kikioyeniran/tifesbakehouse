<?php
include("includes/header.php");
?>
<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query2 = "SELECT * FROM blog WHERE id = {$id} LIMIT 1";
    $result = $mysqli->query($query2) or die($mysqli->error);
    $row = $result->fetch_assoc();
?>

 <!-- ***** Breadcumb Area Start ***** -->
 <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(images/<?php echo $row['image']?>)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Tife's Blog</h2>
                        <h4><?php echo $row['title']?></h4>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Regular Page Area Start ***** -->
    <section class="caviar-regular-page section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 col-md-8">
                    <div class="regular-page-content">
                        <div class="post-title">
                            <h2><?php echo $row['title'];?></h2>
                            <a href="#">Published <?php echo $row['dt']?></a>
                        </div>
                        <div class="post-content">
                            <blockquote>
                                <img src="img/icons/quotation-mark.svg" alt="">
                                <div class="blockquote-content">
                                    <h6><?php echo $row['summary']?></h6>
                                    <p><?php echo $row['author']?></p>
                                </div>
                            </blockquote>
                            <p><?php echo $row['main_post'];?></p>
                            <hr>
                            <h5>Comments Section</h5>
                            <ul class="comment-list">
                                <?php
                                  $query2 = "SELECT * FROM comments WHERE blog_id = {$id} ORDER BY created_at DESC";
                                  $result = $mysqli->query($query2) or die($mysqli->error);
                                  if(empty($result)){?>
                                        <h6>Be the first to comment!</h6>
                                 <?php } else{
                                  while ($row = $result->fetch_assoc())
                                  {   $comid = $row['id'];
                                    ?>
                                <li>
                                    <div class="comment">
                                        <h6><?php echo $row['username']?></h6>
                                        <p><?php echo $row['comment']?></p>
                                        <div class="comment-time"><?php echo $row['created_at']?></div>
                                        <!-- <p><a href="#" class="reply-button">Reply </a></p> -->
                                    </div>

                                    <ul class="reply-list">
                                        <?php
                                            $query = "SELECT * FROM replies WHERE comment_id = {$comid} ORDER BY created_at DESC";
                                            $results = $mysqli->query($query) or die($mysqli->error);
                                            while ($reply = $results->fetch_assoc())
                                            {
                                        ?>
                                        <li class="reply">
                                            <h6><?php echo $reply['username']?></h6>
                                            <p><?php echo $reply['reply']?></p>
                                            <div class="comment-time"><?php echo $reply['created_at']?></div>
                                        </li>
                                            <?php }?>
                                    </ul>

                                </li>
                                <?php } }?>
                            </ul>
                            <div class="contact-form">
                                <div class="contact-form-title">
                                    <p>Comment on this Blog Post</p>
                                </div>
                                <form method="POST" action="comment.php?blog_id=<?php echo $id?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="Your Name" name="username">
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" id="Message" cols="30" rows="10" placeholder="Your Comment..." name="message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn caviar-btn" name="comment"><span></span> Comments</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Regular Page Area End ***** -->

<?php
include("includes/footer.php");
}
else{
  redirect_to("blog.php");
}
?>
