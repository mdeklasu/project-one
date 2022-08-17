<?php
$link=mysqli_connect("localhost","root","","project_one");

$title=$_POST['title'];
$tag=$_POST['tag'];
$dsc=$_POST['dsc'];
$about=$_POST['about'];

$file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_desti='uploads/'.$file_name;
move_uploaded_file($file_tmp,$file_desti);



$query="INSERT INTO home_section (title,tag,dsc,about,image) VALUES('$title','$tag','$dsc','$about','$file_desti')";


$query_run=mysqli_query($link,$query);
if ($query_run) {
	header("Location: home-section.php");
}

?>