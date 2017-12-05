<?php
include __DIR__ .'/config.php';
include __DIR__ .'/functions.php';

$checkuser = checkUser($_POST['email']);

if(is_null($checkuser["email"])){
	insertUser($_POST['name'], $_POST['email']);
	insertQuestion($_POST['category'], $_POST['message'], $_POST['name']);
	header('Location: index.php');
}
else{
	insertQuestion($_POST['category'], $_POST['message'], $_POST['name']);
	header('Location: index.php');
}
?>