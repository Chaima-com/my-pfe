<?php 


include_once('../../script/article.script.php'); // jibli les scripts (logique metier )
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$path = 'C:\/xampp\/htdocs\/my-pfe\/assets\/articles\/'; // racine ou le repertoire contient les images des articles
$data = json_decode(file_get_contents("php://input"));

$owner_id = $data->owner_id;
$title    = $data->title;
$photoFile    = $data->photo; // photo en base64
$description = $data->description;
$nbr_piece   = $data->nbr_piece;
$price       = $data->price;
$status      = $data->status;
$edition     = $data->edition;
$author      = $data->author;
$category_id = $data->category_id;
$niveau_id   = $data->niveau_id;
$spec_id     = $data->specialite_id;
$ext = explode(',', $photoFile); // convetir une chaine en tableau t[0]=extension, t[1]=data(photo)
$e = explode(';', $ext[0]);
$e = explode('/', $e[0]);
$extension = $e[1];
$fileName = uniqid().".$extension";// generer chaine de 
$data = explode(',',$photoFile)[1];
// file_put_content bech tasn3enna photo isha $fileName
if(file_put_contents($path.$fileName, base64_decode($data))){
     $a = addArticle($owner_id,$title,$fileName,$description,$nbr_piece,$price,$status,$edition,$author,$category_id,$niveau_id,$spec_id);
     if($a){
            http_response_code(201);// creation ok
            echo json_encode(['msg'=>"article ajouté"]);
     }else{
            http_response_code(403);// creation ok
            echo json_encode(['error'=>"erreur d'ajout"]);
     }
}else{
       http_response_code(403);// creation ok
            echo json_encode(['error'=>"erreur d'upload fichier"]);
}




/*{
            "owner_id":"",
            "title":"",
            "photo":"",
            "description":"",
            "nbr_piece":"",
            "price":"",
            "status":"",
            "edition":"",
            "author":"",
            "category_id":"",
            "niveau_id":"",
            "specialite_id":"",
        }*/