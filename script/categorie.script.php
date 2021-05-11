<?php 

    include_once('db.config.php');

    function getCategories(){
        $db = getConnection();
        $sql = "SELECT * FROM categorie";
        return mysqli_query($db, $sql);
    }

    function getCategory($id){
        $db = getConnection();
        $sql = "SELECT * FROM categorie WHERE id = $id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function addCategory($label){
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
    }