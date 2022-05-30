<?php 
	
	$host='localhost';
	$username='root';
	$pass='';
	$db='amaclone';

	$conn = mysqli_connect($host,$username,$pass,$db);
	//$pdo=new PDO("mysql:host=$host;dbname=$db",$username,$pass) ;
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	if(!$conn) die("Connection refused");
	//mysql_connect_error();
 ?>