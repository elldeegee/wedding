<?php
$pass = $_POST['pass'];

if($pass == "july4th") {
	setcookie('lg', 'ro');
	$_COOKIE['lg'] = 'ro';
	header('Content-Type: application/json');
	print json_encode(array('message' => 'SUCCESS', 'code' => 200));
}
else {
	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'MISTAKE', 'code' => 500)));
}
?>