<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>

<?php

if(isset($_POST['insert']))
{
    $target = "images/".basename($_FILES['image']['name']);

    $image = $_FILES['image']['name'];
    $dish = $_POST['dish'];
    $cook  = addslashes($_POST['cook']);
    $recipe  = addslashes($_POST['recipe']);;

    $query = "INSERT INTO recipes(image,dish,recipe,cook) Values ('$image', '$dish', '$recipe', '$cook')";
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
                        <h2 class="pageheader-title">Recipes</h2>
                        <p class="pageheader-text">Create and Edit New Recipe Details</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Recipe</li>
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
                            <h5 class="card-header">Insert New Recipe</h5>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="custom-file mb-3">
                                        <input type="hidden" cook="sixe" value="2000000">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Recipe Image</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Dish cook</label>
                                        <input id="inputText3" type="text" class="form-control" name="dish">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Cook</label>
                                        <input id="inputText3" type="text" class="form-control" name="cook">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Recipe</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="recipe"></textarea>
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
                    $query2 = "SELECT * FROM recipes";
                    $result = $mysqli->query($query2) or die($mysqli->error);
                    while ($row = $result->fetch_assoc())
                {?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">DISH: <?php echo $row['dish']; ?></h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h4 class="mb-1">Cook: <?php echo $row['cook']; ?></h4>
                                </div>
                                <div>
                                    <a href = "edit.php?recipe=<?php echo urlencode($row['id']); ?>"><img src='images/<?php echo $row['image']?>' alt="user" class="rounded" width="100%"></a>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <h6><?php echo $row['recipe']; ?><h6>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href = "delete.php?recipeid=<?php echo  urlencode($row['id']); ?>" onclick="return confirm('Are you sure you want to delete this picture?');">Delete Post</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
<?php
include("includes/footer.php");
?>