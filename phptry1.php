<?php
echo "Welcome to PHP";
echo "<br>";
$stuname = $_POST["sname"];
$gender = $_POST["gen"];
$father = $_POST["fname"];
$mobile = $_POST["mno"];
$door = $_POST["dno"];
$streetname = $_POST["st"];
$village = $_POST["vil"];
$district = $_POST["dist"];
$pincode = $_POST["pcode"];
$state = $_POST["state"];
echo $stuname."<br>";
if ($gender == "Male")
 {
	echo "S/o.".$father."<br>";
 }
else
 {
	echo "D/o.".$father."<br>";
 }	
echo $mobile."<br>";
echo $door.", ".$streetname."<br>";
echo $village."<br>";
echo $district."<br>";
echo "Pincode - ".$pincode."<br>";
echo $state."<br>";
?>