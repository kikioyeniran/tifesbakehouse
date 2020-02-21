<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
if(isset($_POST['insert']))
{
    $comment_id = $_GET['comment_id'];
    $username = "admin";
    $reply  = addslashes($_POST['reply']);

    $query = "INSERT INTO replies(username,comment_id,reply,created_at) Values ('$username', '$comment_id', '$reply', now())";
    if($mysqli->query($query) or die($mysqli->error))
    {
        redirect_to('comments.php');
    }
    else{
        echo "<script>alert('error uploading comment')</script>";
    }

}
?>

<?php
if(isset($_GET['comment_id'])){
    $comid = $_GET['comment_id'];
    ?>
<?php
 include("includes/header.php");
?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">

            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Home</h2>
                        <p class="pageheader-text">Reply Comment</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reply</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                            <?php   $getComment = "SELECT * FROM comments WHERE id = {$comid} ";
                                    $result2 = $mysqli->query($getComment) or die($mysqli->error);
                                    $commentRes = $result2->fetch_assoc();
                                    ?>
                        <h5 class="card-header">Reply Comments by <?php echo $commentRes['username'];?></h5>
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="reply.php?comment_id=<?php echo $_GET['comment_id']?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Your Reply</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="reply"></textarea>
                                    </div>
                                    <input type ="submit" name = "insert" id= "insert" value="Submit" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 </div>
<?php
}
else{
    redirect_to('comments.php');
}
?>
<?php
include("includes/footer.php");
?>