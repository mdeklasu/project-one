<?php
$link=mysqli_connect("localhost","root","","project_one");

$cell=$_POST['cell'];

$file_name=$_FILES['logo']['name'];
$file_tmp=$_FILES['logo']['tmp_name'];
$file_desti='uploads/'.$file_name;
move_uploaded_file($file_tmp,$file_desti);

$email=$_POST['email'];

$query="INSERT INTO top_bar(cell,logo,email) VALUES('$cell','$file_desti','$email')";

$query_run=mysqli_query($link,$query);
if ($query_run) {
	header("Location: show-top-bar.php");
}
else{
	header("Location: add-top-bar.php");
}

?>