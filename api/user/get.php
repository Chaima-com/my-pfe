<?php
    include_once('../../script/user.script.php');
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    $path = '/assets/avatars/';
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $user = mysqli_fetch_assoc(getUserById($id));
        if(!$user){
            http_response_code(404);
            echo json_encode(['error'=>"user with id: ".$id." undefined"]);
            return null;
        }
        $firstName = $user['first_name'];
        $lastName = $user['last_name'];
        $password = $user['password'];
        $username = $user['username'];
        $email = $user['email'];
        //$role = $user['role'];
        $avatar = $user['avatar'];
        $userToJson = [
            'id'=>$id,
            'firstName'=> $firstName,
            'lastName' => $lastName,
            'password' => $password,
            'username' => $username,
            'email'    => $email,
            //'role'     => $role,
            'avatar'   => $path.$avatar
        ];
        http_response_code(200);
        echo json_encode($userToJson);
    }else{
        $users = getUsers();
        $usersToJson = [];
        foreach($users as $user){
            $id = $user['id'];
            $firstName = $user['first_name'];
            $lastName = $user['last_name'];
            $password = $user['password'];
            $username = $user['username'];
            $email = $user['email'];
           $role = $user['role'];
            $avatar = $user['avatar'];
            array_push($usersToJson,[
                'id'=>$id,
                'firstName'=>$firstName,
                'lastName'=>$lastName,
                'password'=>$password,
                'username'=>$username,
                'email'   =>$email,
                'role'    =>$role,
                'avatar'  =>$avatar
            ] );
        }
        http_response_code(200);
        echo json_encode($usersToJson);
    }