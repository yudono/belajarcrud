<?php 
require 'connect.php'; //panggil file connect.php

// ambil parameter id ?id=
if(isset($_GET['id']))
{
	$id = htmlentities(trim($_GET['id']) ,ENT_NOQUOTES);
	// parameter id


	$sql = "DELETE FROM produk WHERE id = '$id'";
	// sql syntaks

	$delete = mysqli_query($connect, $sql);
	// sql query

	if($delete)
	{
		header('Location:index.php'); //kalo berhasil
	}else{
		echo 'Hapus gagal!'; //kalo gagal!
	}
}else{
	header('Location:index.php'); //kalo parameter id gak ada
}
