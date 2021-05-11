<?php 

    include_once('../script/article.script.php');
    $id = $_GET['id'];
    delArticle($id);
    header('location: articles.php');