<?php

$link=mysqli_connect("localhost","root","","project_one");

$sub_title=$_POST['sub_title'];
$title=$_POST['title'];
$tag=$_POST['tag'];
$dsc=$_POST['dsc'];
$prag=$_POST['parg'];
$about=$_POST['about'];
$button=$_POST['button'];

$file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_desti='uploads/'.$file_name;
move_uploaded_file($file_tmp,$file_desti);

$query="INSERT INTO about_section (sub_title,title,tag,dsc,parg,about,button,image) VALUES('$sub_title','$title','$tag','$dsc','$prag','$about','$button','$file_desti')";

$query_run=mysqli_query($link,$query);

if ($query_run) {
	header("Location: about-section.php");
}
else{
	header("Location: about-section.php");
}



?>