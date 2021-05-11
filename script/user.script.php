<?php 

    include_once('db.config.php');


    function getUsers(){
        $db = getConnection() or die('erreur db');
        $sql = "SELECT * FROM user WHERE role = 0 ORDER BY id DESC";
        $r = mysqli_query($db, $sql);
        if(!$r){
            echo mysqli_error($db);
        }
        return $r;
    }

    function getUserById($id){
        $db = getConnection();
        $sql = "SELECT * FROM user WHERE id = $id";
        return mysqli_query($db, $sql);
    }

    function login($email, $password){
        $db = getConnection();
        $sql = "SELECT * FROM user WHERE email = \"".$email."\" AND password = \"".$password."\" ";
        return mysqli_fetch_assoc(mysqli_query($db, $sql)); // tableau
    }


    function userRegister($first_name, $last_name, $password, $username, $email, $avatar){
        $db = getConnection();
        $sql = "INSERT INTO `user`(`id`, `first_name`, `last_name`, `password`, `username`, `email`, `role`, `avatar`) VALUES ";
        $sql .= "(null,\"".$first_name."\",\"".$last_name."\",\"".$password."\",\"".$username."\",\"".$email."\",0,\"".$avatar."\")";
        return mysqli_query($db, $sql);
    }

    function updateUser($id,$first_name, $last_name, $password, $email, $avatar){
        $db = getConnection();
        $sql = "UPDATE `user` SET `first_name`=\"".$first_name."\",`last_name`=\"".$last_name."\",`password`=\"".$password."\",`email`=\"".$email."\",`avatar`=\"".$avatar."\" WHERE `id`=$id";
        $r = mysqli_query($db, $sql);
        return $r;
    }

    function deleteUser($id){
        $db = getConnection();
        $sql = "DELETE FROM user WHERE id = $id";
        $r = mysqli_query($db, $sql);
        return $r;
    }