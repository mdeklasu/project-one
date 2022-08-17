<?php
$link=mysqli_connect("localhost","root","","project_one");

$home=$_POST['home'];
$about=$_POST['about'];
$service=$_POST['services'];
$team=$_POST['team'];
$clint=$_POST['clients'];
$conatct=$_POST['contact'];
$search=$_POST['search'];




 $query="INSERT INTO header_manu (home,about,services,team,clients,contact,search) VALUES ('$home','$about','$service','$team','$clint','$conatct','$search')";
 

$query_run=mysqli_query($link,$query);

if ($query_run) {
	header("Location: show-header-munu.php");
}
else{
	header("Location: header-munu.php");
}


?>