<?php
session_start();

$hostname = "127.0.0.1";
$username = "root";
$password = "123456";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

mysql_select_db("305cde",$connection);

/*
$name=$_POST['login'];
$password=$_POST['password'];
*/

$json = json_decode(file_get_contents('php://input'));

if(!empty($json)){	
	$name=$json->login;
	$password=$json->password;
}
else{
  echo "fail";
}


$result = mysql_query("select count(*) from personal where login = '$name' and password = '$password'");

if($result){
	$row = mysql_fetch_row($result);
	
	if( $row[0] == 1 ){
		$_SESSION["number"] = 1;
		echo 'success';
	} else {
		echo 'failure';
	}
	
}else{
    echo 'failure';
}



?>

