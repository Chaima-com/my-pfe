<?php 

include_once('../../script/user.script.php');
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$path = '/assets/avatars/';
$data = json_decode(file_get_contents("php://input")); // json_decode(JSON) => tableau / object
/*Person p = new Person() // email
p.email*/
if(!empty($data->email) && !empty($data->password)){ // kena moch fara8 !
    $email    = $data->email;
    $password = $data->password;
    $user = login($email, $password);
    if($user){ // ken jebet 7eja diff de 0 true
        $u = [
            'id'=>$user['id'],
            'firstName'=> $user['first_name'],
            'lastName' => $user['last_name'],
            'password' => $user['password'],
            'username' => $user['username'],
            'email'    => $user['email'],
            //'role'     => $user['role'],
            'avatar'   => $path.$user['avatar']
        ];
        http_response_code(200);
        echo json_encode($u);
    }else{
        http_response_code(404);
        echo json_encode(['error'=>"undefined user"]);
    }
}else{
    echo json_encode(['error'=>"please enter your email and password"]);
    return null;
}
