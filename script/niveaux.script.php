<?php 

    include_once('db.config.php');

    function getNiveaux(){
        $db = getConnection();
        $sql = "SELECT * FROM niveaux ORDER BY id DESC";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function getNiveau($id){
        $db = getConnection();
        $sql = "SELECT * FROM niveaux WHERE id = $id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function addNiveau($label){
        $db = getConnection();
        $sql = "INSERT INTO `niveaux`(`id`, `label`) VALUES (null,\"".$label."\")";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function editNiveau($id, $label){
        $db = getConnection();
        $sql = "UPDATE `niveaux` SET `label`=\"".$label."\" WHERE `id`=$id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function delNiveau($id){
        $db = getConnection();
        $sql = "DELETE FROM `niveaux` WHERE id=$id";
        $r = mysqli_query($db, $sql);
        return $r;
    }