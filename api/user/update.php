<?php 

include_once('../../script/user.script.php');
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$path = '/var/www/html/pfe-ranya/assets/avatars/';
$data = json_decode(file_get_contents("php://input"));
if(empty($_GET['id'])){
    http_response_code(403);
    echo json_encode(['error'=>"please specify the id of user"]);
    return null;
}else{
    $id = $_GET['id'];
}

if(!empty($data->firstName)){
    $firstName = $data->firstName;
}

if(!empty($data->lastName)){
    $lastName = $data->lastName;
}

if(!empty($data->password)){
    $password = $data->password;
}

if(!empty($data->email)){
    $email = $data->email;
}

if(!empty($data->avatar)){
   $avatar = $data->avatar;
}
$ext = explode(',', $avatar);
$ext = explode('/',$ext[0]);
$data = explode(',', $avatar)[1];
$extFile = explode(';',$ext[1])[0];
$decoding = base64_decode($avatar);
$file_name = uniqid().".$extFile";
$toPath = $path.$file_name;
file_put_contents($toPath,$data);
$u = updateUser($id,$firstName,$lastName,$password,$email,$file_name);
if($u){
    http_response_code(201);
    echo json_encode(['msg'=>"profil updated successfully !"]);
}else{

    http_response_code(201);
    echo json_encode(['error'=>"failed to updated profil"]);
}

           
