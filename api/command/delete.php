<?php 

	include_once('../../script/commandes.script.php');
	// HEADERS
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    if(isset($_GET['id'])){
    	$id = $_GET['id'];
    	$r = deleteCmd($id);
    	if($r){
    		echo json_encode(['msg'=>"commande is deleted"]);
    	}else{
    		echo json_encode(['error'=>"deleting is failed"]);
    	}
    }else{
    	echo json_encode(['error'=>"id is required"]);
    }