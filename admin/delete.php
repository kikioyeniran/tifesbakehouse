<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
if(isset($_GET['sliderid']))
{$id = mysql_prep($_GET['sliderid']);
	if($id){
		$query = "DELETE FROM home_slider WHERE id = {$id} LIMIT 1";
		$result = $mysqli->query($query) or die($mysqli->error);
		if(mysqli_affected_rows($mysqli) == 1){
            header("Location: home_slider.php");
			}else{
				//Deletion Failed
				echo "<script>alert(\"Image deleted from database\")<script>";
				echo "<p>" .  mysql_error() .  "</p>";
				echo "<a href = 'home_slider.php'>Return to Main Page</a>";
				}
    }
    else
    {//subject didn't exist in  database
        //redirect_to("event.php");
        header("Location: home_slider.php");
    }
}
    if(isset($_GET['prodid']))
{
        $id = mysql_prep($_GET['prodid']);
        if($id)
        {$query = "DELETE FROM products WHERE id = {$id} LIMIT 1";
            $result = $mysqli->query($query) or die($mysqli->error);
            if(mysqli_affected_rows($mysqli) == 1){
                header("Location: products.php");
                }
                else{
                    //Deletion Failed
                    echo "<script>alert(\"Image deleted from database\")<script>";
                    echo "<p>" .  mysql_error() .  "</p>";
                    echo "<a href = 'products.php'>Return to Main Page</a>";
                    }
            }else{
                header("Location: products.php");
                }
}if(isset($_GET['aboutid']))
   {$id = mysql_prep($_GET['aboutid']);
            if($id)
            {$query = "DELETE FROM about_us WHERE id = {$id} LIMIT 1";
                $result = $mysqli->query($query) or die($mysqli->error);
                if(mysqli_affected_rows($mysqli) == 1){
                    header("Location: about_us.php");
                    }
                    else{
                        //Deletion Failed
                        echo "<script>alert(\"Image deleted from database\")<script>";
                        echo "<p>" .  mysql_error() .  "</p>";
                        echo "<a href = 'about_us.php'>Return to Main Page</a>";
                        }
                }else{
                    //subject didn't exist in  database
                    //redirect_to("gallery.php");
                    header("Location: about_us.php");
                    }
    }

    if(isset($_GET['comment_id']))
    {      $id = mysql_prep($_GET['comment_id']);
            if($id)
            {$query = "DELETE FROM comments WHERE id = {$id} LIMIT 1";
                $result = $mysqli->query($query) or die($mysqli->error);
                if(mysqli_affected_rows($mysqli) == 1){
                    header("Location: comments.php");
                    }
                    else{
                        //Deletion Failed
                        echo "<script>alert(\"Image deleted from database\")<script>";
                        echo "<p>" .  mysql_error() .  "</p>";
                        echo "<a href = 'comments.php'>Return to Main Page</a>";
                        }
                }else{
                    header("Location: comments.php");
                    }
    }

    if(isset($_GET['reply_id']))
    {       $id = mysql_prep($_GET['reply_id']);
            if($id)
            {$query = "DELETE FROM replies WHERE id = {$id} LIMIT 1";
                $result = $mysqli->query($query) or die($mysqli->error);
                if(mysqli_affected_rows($mysqli) == 1){
                    header("Location: comments.php");
                    }
                    else{
                        //Deletion Failed
                        echo "<script>alert(\"Image deleted from database\")<script>";
                        echo "<p>" .  mysql_error() .  "</p>";
                        echo "<a href = 'comments.php'>Return to Main Page</a>";
                        }
                }else{
                    //subject didn't exist in  database
                    //redirect_to("gallery.php");
                    header("Location: comments.php");
                    }
    }

    if(isset($_GET['testid']))
    {$id = mysql_prep($_GET['testid']);
                if($id)
                {$query = "DELETE FROM testimonies WHERE id = {$id} LIMIT 1";
                    $result = $mysqli->query($query) or die($mysqli->error);
                    if(mysqli_affected_rows($mysqli) == 1){
                       header("Location: testimony.php");
                        }
                        else{
                            //Deletion Failed
                            echo "<script>alert(\"Image deleted from database\")<script>";
                            echo "<p>" .  mysql_error() .  "</p>";
                            echo "<a href = 'event.php'>Return to Main Page</a>";
                            }
                    }else{
                       header("Location: testimony.php");
                        }
    }if(isset($_GET['recipeid']))
    {$id = mysql_prep($_GET['recipeid']);
                if($id)
                {$query = "DELETE FROM recipes WHERE id = {$id} LIMIT 1";
                    $result = $mysqli->query($query) or die($mysqli->error);
                    if(mysqli_affected_rows($mysqli) == 1){
                        header("Location: recipes.php");
                        }
                        else{
                            //Deletion Failed
                            echo "<script>alert(\"Image deleted from database\")<script>";
                            echo "<p>" .  mysql_error() .  "</p>";
                            echo "<a href = 'sermon.php'>Return to Main Page</a>";
                            }
                    }else{
                        //subject didn't exist in  database
                       // redirect_to("sermon.php");
                        header("Location: sermon.php");
                        }}
     if(isset($_GET['blog']))
    {$id = mysql_prep($_GET['blog']);
                if($id)
                {$query = "DELETE FROM blog WHERE id = {$id} LIMIT 1";
                    $result = $mysqli->query($query) or die($mysqli->error);
                    if(mysqli_affected_rows($mysqli) == 1){
                        header("Location: ebooks.php");
                        echo "<script>alert(\"record deleted from database\")<script>";
                        //redirect_to("sermon.php");
                        }
                        else{
                            //Deletion Failed
                            echo "<script>alert(\"Image deleted from database\")<script>";
                            echo "<p>" .  mysql_error() .  "</p>";
                            echo "<a href = 'sermon.php'>Return to Main Page</a>";
                            }
                    }else{
                        //subject didn't exist in  database
                       // redirect_to("sermon.php");
                        header("Location: sermon.php");
                        }}
                        ?>