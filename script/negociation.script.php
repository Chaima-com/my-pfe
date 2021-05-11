<?php 
 include_once('db.config.php');
 
 function addChat($sender_id, $receiver_id, $message){
 	$db = getConnection();
	$sql = "INSERT INTO `negociation`(`id`, `sender_id`, `receiver_id`, `message`) VALUES (null,$sender_id,$receiver_id,
	\"".$message."\")";
	$r = mysqli_query($db, $sql);
	return $r;
 }
 
 addChat(4,3,"ahla monya chenhi romdhanek");