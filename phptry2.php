<?php

$rno = 22017017;
$nam = "K.Bharath Chithan";
$test = 67;
$asmark = 25;

$servername = "localhost";
$username = "root";
$password ="";
$database ="mark";

$mysqli = new mysqli($servername,$username,$password,$database);

$query ="insert into wdmark (regno,sname,mark,assign) values ($rno,$nam,$test,$asmark);

$mysqli->query($query);
if ($mysqli)
{
	echo ("Sucessfully added");
}
else
{
	echo ("Error Occured");	
}
$mysqli->close();
?>