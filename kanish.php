<?php

$rno = $_POST["rno"];
$nam = $_POST["sna"];
$test = $_POST["mar"];;
$asmark = $_POST["asm"];;

$servername = "localhost";
$username = "root";
$password ="";
$database ="mark";

$mysqli = new mysqli($servername,$username,$password,$database);

$query ="insert into wdmark (regno,sname,mark,assign) values ($rno,'$nam',$test,$asmark)";

echo $query;

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