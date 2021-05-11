<?php 
include_once('../script/user.script.php');

    if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        if(login($email, $password)){
            $user = login($email, $password);
            if($user['role'] == 1){
                $_SESSION['connected'] = $user;
                header('location: dashboard.php');
                exit();
            }else{
                header('location: index.php?auth=unauth');
            }
        }else{
            header('location: index.php?auth=false');
        }
    }