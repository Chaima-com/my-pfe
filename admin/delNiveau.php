<?php 

    include_once('../script/niveaux.script.php');
    $id = $_GET['id'];

    delNiveau($id);
    header("location: niveaux.php?delete=success");