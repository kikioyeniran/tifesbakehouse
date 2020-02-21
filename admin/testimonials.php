<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>

<?php

if(isset($_POST['insert']))
{
    $target = "images/".basename($_FILES['image']['name']);

    $image = $_FILES['image']['name'];
    $portfolio = $_POST['portfolio'];
    $name  = addslashes($_POST['name']);
    $testimony  = addslashes($_POST['testimony']);;

    $query = "INSERT INTO testimonials(image,portfolio,testimony,name) Values ('$image', '$portfolio', '$testimony', '$name')";
    if($mysqli->query($query) or die($mysqli->error))
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
        echo "<script>alert('Image uploaded succesfully')</script>";
        }
        else
        {
            echo "<script>alert('error uploading image')</script>";
        }
    }
    else{
        echo "<script>alert('error connecting to DB')</script>";
    }

}

?>

<?php
 include("includes/header.php")
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
                        <h2 class="pageheader-title">Testimonials</h2>
                        <p class="pageheader-text">Create and New Product Details</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home Slider</li>
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
                            <h5 class="card-header">Insert Testimony</h5>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="custom-file mb-3">
                                        <input type="hidden" name="sixe" value="2000000">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Background Image</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Name</label>
                                        <input id="inputText3" type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Portfolio</label>
                                        <input id="inputText3" type="text" class="form-control" name="portfolio">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Testimony</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="testimony"></textarea>
                                    </div>
                                    <input type ="submit" name="insert" id= "insert" value="Submit" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Click the image to edit the post</h3>
                </div>
                <?php
                    $query2 = "SELECT * FROM testimonials";
                    $result = $mysqli->query($query2) or die($mysqli->error);
                    while ($row = $result->fetch_assoc())
                {?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">NAME: <?php echo $row['name']; ?></h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h4 class="mb-1">Portfolio: <?php echo $row['portfolio']; ?></h4>
                                </div>
                                <div>
                                    <a href = "edit.php?testimony=<?php echo urlencode($row['id']); ?>"><img src='images/<?php echo $row['image']?>' alt="user" class="rounded" width="100%"></a>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <h6><?php echo $row['testimony']; ?><h6>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href = "delete.php?testid=<?php echo  urlencode($row['id']); ?>" onclick="return confirm('Are you sure you want to delete this picture?');">Delete Post</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
<?php
include("includes/footer.php");
?>