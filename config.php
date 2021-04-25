<?php  
	$server = "localhost";
	$user = "root";
	$password = "";
	$db_name = "final_project";

	$db = mysqli_connect($server,$user,$password,$db_name);
	if(!$db) {
		die("Gagal Menghubungkan ke database");
	}
?>