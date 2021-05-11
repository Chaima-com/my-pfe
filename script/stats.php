<?php 
    include_once('db.config.php');

    function getCountUsers(){

        $db = getConnection();
        $sql = "SELECT count(*) as NBR_USERS FROM user";
        $r  = mysqli_fetch_assoc(mysqli_query($db, $sql));
        return $r;
    }

    function getCountArticles(){

        $db = getConnection();
        $sql = "SELECT count(*) as NBR_POSTS FROM articles";
        $r  = mysqli_fetch_assoc(mysqli_query($db, $sql));
        return $r;
    }

    function getCountCmds(){

        $db = getConnection();
        $sql = "SELECT count(*) as NBR_CMDS FROM `commandes`";
        $r  = mysqli_fetch_assoc(mysqli_query($db, $sql));
        return $r;
    }

    function getCommission(){
        $db = getConnection();
        $sql = "SELECT sum(commission) as TOTAL_PROFIT FROM commandes";
        $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
        return $r;
    }