<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>


<?php
//Slider Update Function===================================================================================================
if(isset($_POST["upd_slider"]))
	{

        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('text_header', 'text_body');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
				}
			}

        if(empty($errors))
        {
			//$file2 = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

			$id = mysql_prep($_GET['slider']);
			$text_header = mysql_prep($_POST['text_header']);
            $text_body = mysql_prep($_POST['text_body']);
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE home_slider SET text_body = '{$text_body}', text_header = '{$text_header}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE home_slider SET text_body = '{$text_body}', text_header = '{$text_header}', image = '{$image}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    header("Location: home_slider.php");
                }
                else
                {
                echo "<script>alert(\"The event update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }
//Blog Update Function===================================================================================================
if(isset($_POST["upd_blog"]))
	{
        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('title', 'author', 'summary', 'main_post', 'dt');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
            }
        }
        if(empty($errors))
        {
			$id = mysql_prep($_GET['blog']);
			$title = mysql_prep($_POST['title']);
            $author = mysql_prep($_POST['author']);
            $summary = mysql_prep($_POST['summary']);
            $main_post = mysql_prep($_POST['main_post']);
            $date = mysql_prep(date('d-m-y H:i:s', strtotime($_POST['dt'])));
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE blog SET title = '{$title}', author = '{$author}', dt = '{$date}', summary = '{$summary}', main_post = '{$main_post}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE blog SET title = '{$title}', author = '{$author}', dt = '{$date}', image = '{$image}', summary = '{$summary}', main_post = '{$main_post}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    header("Location: blog.php");
                }
                else
                {
                echo "<script>alert(\"The blog post update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }

//Product Update Function===================================================================================================
if(isset($_POST["upd_product"]))
	{
        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('name', 'categories', 'price', 'description');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
				}
        }

        if(empty($errors))
        {
            $id = mysql_prep($_GET['product']);
			$category = mysql_prep($_POST['categories']);
            $name = mysql_prep($_POST['name']);
            $price = mysql_prep($_POST['price']);
            $description = mysql_prep($_POST['description']);
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE products SET category = '{$category}', prod_name = '{$name}', price = '{$price}',description = '{$description}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE products SET category = '{$category}', prod_name = '{$name}', price = '{$price}',description = '{$description}', image = '{$image}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    header("Location: products.php");
                }
                else
                {
                echo "<script>alert(\"The products update failed\")<script>";
                }
            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }

//About Us Update Function===================================================================================================
if(isset($_POST["upd_aboutus"]))
    {
        $target = "images/".basename($_FILES['image']['name']);
        $errors = array();
        $required_fields = array('profile', 'sub_heading');
        foreach($required_fields as $fieldname){
            //var_dump($_POST[$fieldname]);
            if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
                $errors[] = $fieldname;
            }
        }

        if(empty($errors))
        {
            //$file2 = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

            $id = 1;
            $profile = mysql_prep($_POST['profile']);
            $sub_heading = mysql_prep($_POST['sub_heading']);
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE about_us SET profile = '{$profile}', sub_heading = '{$sub_heading}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE about_us SET profile = '{$profile}', sub_heading = '{$sub_heading}', image = '{$image}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    header("Location: about_us.php");
                }
                else
                {
                echo "<script>alert(\"The update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }

//Chef Update Function===================================================================================================
if(isset($_POST["upd_chef"]))
    {
        $target = "images/".basename($_FILES['image']['name']);
        $errors = array();
        $id = 1;
        $profile = mysql_prep($_POST['profile']);
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE chef SET profile = '{$profile}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE chef SET image = '{$image}', profile = '{$profile}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: chef.php");
            }
            else
            {
            echo "<script>alert(\"The update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }

//Testimony Update Function===================================================================================================
if(isset($_POST["upd_testimony"]))
    {
        $target = "images/".basename($_FILES['image']['name']);
        $errors = array();
        $required_fields = array('name', 'portfolio','testimony');
        foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
            if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))
                {
                    $errors[] = $fieldname;
                }
        }

        if(empty($errors))
        {
            $id = mysql_prep($_GET['testimony']);
            $name = mysql_prep($_POST['name']);
            $portfolio = mysql_prep($_POST['portfolio']);
            $testimony = mysql_prep($_POST['testimony']);
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE testimonials SET name = '{$name}', portfolio = '{$portfolio}', testimony = '{$testimony}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE testimonials SET image = '{$image}', name = '{$name}', portfolio = '{$portfolio}', testimony = '{$testimony}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    header("Location: testimonials.php");
                }
                else
                {
                    echo "<script>alert(\"The sermon post update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }

//Recipe Update Function===================================================================================================
if(isset($_POST["upd_recipe"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();

    $required_fields = array('cook', 'dish','recipe');
    foreach($required_fields as $fieldname){
    //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))
            {
                $errors[] = $fieldname;
            }
    }

    if(empty($errors))
    {
        $id = mysql_prep($_GET['recipe']);
        $cook = mysql_prep($_POST['cook']);
        $dish = mysql_prep($_POST['dish']);
        $recipe = mysql_prep($_POST['recipe']);
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE recipes SET cook = '{$cook}', dish = '{$dish}', recipe = '{$recipe}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE recipes SET image = '{$image}', cook = '{$cook}', dish = '{$dish}', recipe = '{$recipe}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }

        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: recipes.php");
            }
            else
            {
                echo "<script>alert(\"The sermon post update failed\")<script>";
            }
        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }
}
?>