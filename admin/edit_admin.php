<?php
include '../config.php';
include '../functions.php';

if(empty($_GET['action'])){
	header('Location: admin.php#admins');
}
else if($_GET['action'] == 'edit'){
	$_POST['name'] = showUserLogin($_GET['admin_id']);
	$_POST['email'] =showUserEmail($_GET['admin_id']);
	header('Location: admin.php#admins');
}
else if($_GET['action'] == 'delete'){
	disrateUser($_GET['admin_id']);
	header('Location: admin.php#admins');
}
?>