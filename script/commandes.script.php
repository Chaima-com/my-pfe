<?php 

	include_once('db.config.php');
	// method bech tjibli tous les commandes
	function getCommandes(){
		$db = getConnection();
		$sql  = "SELECT * FROM `commandes`";
		$r = mysqli_query($db, $sql);
		return $r;
	}

	// methodde tjib commandes mta3 owner ell id_owner
	function getCmdsByIdOwner($id_owner){
		$db= getConnection();
		$sql = "SELECT * FROM `commandes` WHERE `owner_id` = $id_owner";
		$r = mysqli_query($db, $sql);
		return $r;
	}

	function deleteCmd($id_cmd){
		$db = getConnection();
		$sql = "DELETE FROM commandes WHERE id = $id_cmd";
		$r = mysqli_query($db, $sql);
		return $r;
	}

	
	