<?php 

    include_once('db.config.php');

    function getSpecialies(){
        $db = getConnection();
        $sql = "SELECT * FROM specialite ORDER BY id DESC";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function getSpecialite($id){
        $db = getConnection();
        $sql = "SELECT * FROM specialite WHERE id = $id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function addSpecialite($label){
        $db = getConnection();
        $sql = "INSERT INTO `specialite`(`id`, `label`) VALUES (null, \"".$label."\")";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function editSpecialite($id, $label){
        $db = getConnection();
        $sql = "UPDATE `specialite` SET `label`=\"".$label."\" WHERE `id`=$id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function delSpecialite($id){
        $db = getConnection();
        $sql = "DELETE FROM `specialite` WHERE id=$id";
        $r = mysqli_query($db, $sql);
        return $r;
    }