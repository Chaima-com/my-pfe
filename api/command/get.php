<?php 
	include_once('../../script/commandes.script.php');
	// HEADERS
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // 
    if(isset($_GET['id_owner'])){
    	$id_owner = $_GET['id_owner'];
    	$commandes = getCmdsByIdOwner($id_owner);
    	$cmds = [];
	    foreach ($commandes as $c) {
	    	array_push($cmds, [
	    		'id'=> $c['id'], 
	    		'datedAt'=>$c['dated_at'],
	    		'livraison'=>$c['adresse_livraison']
	    	]);
    	}

   		 // conversion vers JSON

    	echo json_encode($cmds);
    	return null;

    }

    $commandes = getCommandes();
    $cmds = [];
    foreach ($commandes as $c) {
    	array_push($cmds, [
    		'id'=> $c['id'], 
    		'datedAt'=>$c['dated_at'],
    		'livraison'=>$c['adresse_livraison']
    	]);
    }

    // conversion vers JSON

    echo json_encode($cmds);