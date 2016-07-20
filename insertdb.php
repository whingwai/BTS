<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "123456";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

mysql_select_db("305cde",$connection);

$name=$_POST['login'];
$password=$_POST['password'];
$email=$_POST['email'];

$result = mysql_query("insert into personal (login, email, password) value ('$name', '$email', '$password')");

if($result){
    echo "success";
}else{
    echo "failure";
}


?>

