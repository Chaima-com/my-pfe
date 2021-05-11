<?php 

    include_once('../script/categorie.script.php');
    $id = $_GET['id'];

    delCategory($id);
    header("location: categories.php?delete=success");