<?php 

    include_once('../script/specialite.script.php');
    $id = $_GET['id'];

    delSpecialite($id);
    header("location: specialites.php?delete=success");