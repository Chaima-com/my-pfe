<?php 

    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = '';
    const DBNAME   = 'db_mypfe';
    function getConnection(){
        $db = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
        return $db;
    }