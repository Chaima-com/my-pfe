<?php 

    $id = $_GET['id'];
    include_once('../script/user.script.php');
    deleteUser($id);
    header('location: users.php');