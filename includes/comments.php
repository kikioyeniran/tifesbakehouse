<?php require_once("admin/includes/connection.php"); ?>
<?php

    function getID(){
       $blog_id = $_GET['id'];
       //$blog_id = 1;
       return $blog_id;
    }
?>