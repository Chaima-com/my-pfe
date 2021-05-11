<?php 

    include_once('db.config.php');

    function getArticles(){
        $db = getConnection();
        $sql = "SELECT * FROM articles";
        $r = mysqli_query($db, $sql);
        return mysqli_query($db, $sql);
    }


    function addArticle($owner_id,$title,$photo,$description,$nbr_piece,$price,$status, $edition, $author,$category_id,$niveau_id,$spec_id){
        
        $db = getConnection();
        $sql = "INSERT INTO `articles`(`id`, `owner_id`, `title`, `photo`, `description`, `published_at`, `nbr_piece`, `price`, `status`, `edition`, `author`, `category_id`, `niveau_id`, `specialite_id`, `is_hide`) 
        VALUES (null,$owner_id,\"".$title."\",\"".$photo."\",\"".$description."\",$nbr_piece,$price,\"".$price."\",\"".$status."\",\"".$edition."\",\"".$author."\",$category_id,$niveau_id,$spec_id,0)";
        echo $sql;
        die();
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function getArticle($id){
        $db = getConnection();
        $sql = "SELECT * FROM articles WHERE id = $id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function getArticleByIdOwner($id_owner){
        $db = getConnection();
        $sql = "SELECT * FROM articles WHERE owner_id = $id_owner";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function getArticleByIdCategory($id_cat){
        $db = getConnection();
        $sql = "SELECT * FROM articles WHERE category_id = $id_cat";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function delArticle($id){
        $db = getConnection();
        $sql = "DELETE FROM articles WHERE id = $id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    /*function addCategory($label){
        $db = getConnection();
        $sql = "INSERT INTO `categorie`(`id`, `label`) VALUES (null,\"".$label."\")";
        $r = mysqli_query($db, $sql);
        return $r;
    }


    function delCategory($id){
        $db = getConnection();
        $sql = "DELETE FROM `categorie` WHERE id=$id";
        echo $sql;
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function editCategory($id,$label){
        $db = getConnection();
        $sql = "UPDATE `categorie` SET `label`=\"".$label."\" WHERE `id`=$id";
        $r = mysqli_query($db, $sql);
        return $r;
    }*/