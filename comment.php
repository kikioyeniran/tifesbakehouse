<?php require_once("admin/includes/connection.php"); ?>
<?php require_once("admin/includes/functions.php"); ?>

<?php

if(isset($_POST['comment']))
{

    $blog_id = $_GET['blog_id'];
    $username = $_POST['username'];
    $email  = $_POST['email'];
    $comment  = $_POST['message'];
    $GLOBALS['user'] = $username;

    $query = "INSERT INTO comments(username,blog_id,email,comment,created_at) Values ('$username', '$blog_id', '$email', '$comment', now())";
    if($mysqli->query($query) or die($mysqli->error))
    {   //$_SESSION['user_comm'] = $username;
        redirect_to('blog-single.php?id='.$blog_id.'');
    }
    else{
        echo "<script>alert('error uploading comment')</script>";
    }

}

if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $message  = $_POST['message'];
    $query = "INSERT INTO contact(name,email,message,created_at,phone) Values ('$username','$email', '$message', now(), '$phone')";
    if($mysqli->query($query) or die($mysqli->error))
    {   //$_SESSION['user_comm'] = $username;
        redirect_to('contact.php');
    }
    else{
        echo "<script>alert('error uploading comment')</script>";
    }

}

?>