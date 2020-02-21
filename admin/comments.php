<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
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
                        <h2 class="pageheader-title">Comments</h2>
                        <p class="pageheader-text">Read and Reply Comments Here</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Comments</li>
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
                    <div class="tab-regular">
                        <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">All Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">All Replies</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent7">
                            <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                            <div class="card">
                                <h5 class="card-header">Comments Table</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>BLOG POST</th>
                                                    <th>Username</th>
                                                    <th>Comment</th>
                                                    <th>Time</th>
                                                    <th>Reply</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $query2 = "SELECT * FROM comments";
                                                $result = $mysqli->query($query2) or die($mysqli->error);
                                                while ($row = $result->fetch_assoc())
                                                {
                                                    $blogid = $row['blog_id'];
                                                    $queryBlog = "SELECT * FROM blog WHERE id = {$blogid} ";
                                                    $result2 = $mysqli->query($queryBlog) or die($mysqli->error);
                                                    $blog_name = $result2->fetch_assoc()
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id']?></td>
                                                    <td><?php echo $blog_name['title']?></td>
                                                    <td><?php echo $row['username']?></td>
                                                    <td><?php echo $row['comment']?></td>
                                                    <td><?php echo $row['created_at']?></td>
                                                    <td><a href='reply.php?comment_id=<?php echo $row['id']?>'>Reply Comment</a></td>
                                                    <td><a href='delete.php?comment_id=<?php echo $row['id']?>' onclick="return confirm('Are you sure you want to delete this picture?');">Delete Comment</a></td>

                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>BLOG POST</th>
                                                    <th>Username</th>
                                                    <th>Comment</th>
                                                    <th>Time</th>
                                                    <th>Reply</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                <div class="card">
                                    <h5 class="card-header">Replies Table</h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Comment</th>
                                                        <th>Username</th>
                                                        <th>Reply</th>
                                                        <th>Time</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $query2 = "SELECT * FROM replies";
                                                    $result = $mysqli->query($query2) or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc())
                                                    {
                                                        $comid = $row['comment_id'];
                                                        $queryCom = "SELECT * FROM comments WHERE id = {$comid} ";
                                                        $results = $mysqli->query($queryCom) or die($mysqli->error);
                                                        $comment = $results->fetch_assoc();
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['id']?></td>
                                                        <td><?php echo $comment['comment']?></td>
                                                        <td><?php echo $comment['username']?></td>
                                                        <td><?php echo $row['reply']?></td>
                                                        <td><?php echo $row['created_at']?></td>
                                                        <td><a href='delete.php?reply_id=<?php echo $row['id']?>' onclick="return confirm('Are you sure you want to delete this picture?');">Delete Reply</a></td>

                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Comment</th>
                                                        <th>Username</th>
                                                        <th>Reply</th>
                                                        <th>Time</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
        </div>


<?php
include("includes/footer.php");
?>