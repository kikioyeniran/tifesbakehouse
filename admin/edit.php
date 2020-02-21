<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

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
                                <h2 class="pageheader-title">Home</h2>
                                <p class="pageheader-text">Edit</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                    <h5 class="card-header">Edit Site Properties</h5>
                                    <div class="card-body">
                                    <?php

                                            if(isset($_GET['slider'])){
                                            $id = $_GET['slider'];
                                            $query = "SELECT * FROM home_slider WHERE id = {$id} ORDER BY id ASC";
                                            $result = $mysqli->query($query) or die($mysqli->error);
                                            $row = $result->fetch_assoc();

                                        ?>


                                        <form method="post" enctype="multipart/form-data" action="update.php?slider=<?php echo $_GET['slider']?>">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Header</label>
                                                <input id="inputText3" type="text" class="form-control" name="text_header" value="<?php echo $row['text_header'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Text Body</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text_body"><?php echo $row['text_body'];?></textarea>
                                             </div>
                                            <div class="custom-file mb-3">
                                                <input type="hidden" name="sixe" value="2000000">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">

                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Poster</label>
                                            </div>
                                            <input type ="submit" name = "upd_slider" id= "upd_slider" value="Update" class="btn btn-primary" />
                                        </form>
                                        <?php
                                            }
                                        ?>
                                        <?php

                                        if(isset($_GET['blog'])){
                                        $id = $_GET['blog'];
                                        $query = "SELECT * FROM blog WHERE id = {$id} ORDER BY id ASC";
                                        $result = $mysqli->query($query) or die($mysqli->error);
                                        $row = $result->fetch_assoc();

                                    ?>


                                    <form method="post" enctype="multipart/form-data" action="update.php?blog=<?php echo $_GET['blog']?>">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Author</label>
                                                <input id="inputText3" type="text" class="form-control" name="author" value="<?php echo $row['author'];?>">
                                            </div>
                                            <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Select Date</label>
                                             <div class="input-group date" id="datetimepicker10" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker10" name="dt" value="<?php echo $row['dt'];?>"/>
                                            <div class="input-group-append" data-target="#datetimepicker10" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                             </div>
                                             </div>
                                              </div>
                                            <script type="text/javascript">
                                            </script>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Picture</label>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Short Summary</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="summary"><?php echo $row['summary'];?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Main Blog Post</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="main_post"><?php echo $row['main_post'];?></textarea>
                                            </div>
                                            <input type ="submit" name = "upd_blog" id= "upd_blog" value="Update" class="btn btn-primary" />
                                        </form>
                                    <?php
                                        }
                                    ?>
                                    <?php

                                        if(isset($_GET['product'])){
                                        $id = $_GET['product'];
                                        $query = "SELECT * FROM products WHERE id = {$id} ORDER BY id ASC";
                                        $result = $mysqli->query($query) or die($mysqli->error);
                                        $row = $result->fetch_assoc();

                                    ?>
                                       <form method="post" enctype="multipart/form-data" action="update.php?product=<?php echo $_GET['product']?>">
                                            <div class="custom-file mb-3">
                                                <input type="hidden" name="sixe" value="2000000">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Background Image</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="name" value="<?php echo $row['prod_name'];?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="categories">
                                                    <option value="cakes">Cakes</option>
                                                    <option value="slices">Slices</option>
                                                    <option value="loaves">Loaves</option>
                                                    <option value="cupcakes">Cupcakes</option>
                                                    <option value="cookies">Cookies</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Price</label>
                                                <input id="inputText3" type="text" class="form-control" name="price" value="<?php echo $row['price'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php echo $row['description'];?></textarea>
                                            </div>
                                            <input type ="submit" name = "upd_product" id= "upd_product" value="Update" class="btn btn-primary" />
                                        </form>
                                        <?php
                                        }
                                    ?>
                                    <?php
                                        if(isset($_GET['testimony'])){
                                        $id = $_GET['testimony'];
                                        $query = "SELECT * FROM testimonials WHERE id = {$id} ORDER BY id ASC";
                                        $result = $mysqli->query($query) or die($mysqli->error);
                                        $row = $result->fetch_assoc();

                                    ?>
                                        <form method="post" enctype="multipart/form-data" action="update.php?testimony=<?php echo $_GET['testimony']?>">
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Picture</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Portfolio</label>
                                                <input id="inputText3" type="text" class="form-control" name="portfolio" value="<?php echo $row['portfolio'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Testimony</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="testimony"><?php echo $row['testimony'];?></textarea>
                                            </div>
                                            <input type ="submit" name = "upd_testimony" id= "upd_testimony" value="Update" class="btn btn-primary" />
                                        </form>
                                    <?php  } ?>
                                    <?php

                                        if(isset($_GET['recipe'])){
                                        $id = $_GET['recipe'];
                                        $query = "SELECT * FROM recipes WHERE id = {$id} ORDER BY id ASC";
                                        $result = $mysqli->query($query) or die($mysqli->error);
                                        $row = $result->fetch_assoc();
                                    ?>
                                    <form method="post" enctype="multipart/form-data" action="update.php?recipe=<?php echo $_GET['recipe']?>">
                                            <div class="custom-file mb-3">
                                                <input type="hidden" cook="sixe" value="2000000">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Recipe Image</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Dish</label>
                                                <input id="inputText3" type="text" class="form-control" name="dish" value="<?php echo $row['dish'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Cook</label>
                                                <input id="inputText3" type="text" class="form-control" name="cook" value="<?php echo $row['cook'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Recipe</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="recipe"><?php echo $row['recipe']; ?></textarea>
                                            </div>
                                            <input type ="submit" name = "upd_recipe" id= "upd_recipe" value="Update" class="btn btn-primary" />
                                        </form>
                                        <?php } ?>
                                    </div>
                                 </div>
                     </div>


                                     </div>
</div>



<?php
     include("includes/footer.php");
?>