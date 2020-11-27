<?php
	
	// $_POST['username'];
	// $_POST['password'];


	if(!isset($_POST['username'])||!isset($_POST['password'])){
		die('Error:'.var_dump($_POST));
	}

	session_start();

	include_once 'config.php';

	$conn = new mysqli(SERVER_NAME,USERNAME,PASSWORD,DATABASE);

	if ($conn->connect_error) {
		die('connection failed:'.$conn->connect_error);
	}

	$stmt = $conn->prepare('SELECT `id`, `username`, `password` 					FROM user_DB 
							 WHERE `username` = ?');
	$stmt->bind_param('s',$_POST['username']);
	$stmt->execute();
	$stmt->bind_result($id,$username,$password);
	$stmt->fetch();

	// This is where passwords would be compared
	if($_POST['password']==$password){
		$_SESSION['id'] = $id;
		$_SESSION['username'] = $username;
		header('location: ../index.php');
	}
	else{
		header('location: ../signin.php');

	}
	$conn->close();