<?php 
require 'connect.php'; //panggil file connect.php

$data; //variabel global
$id = '';

// ngambil parameter 'id' dari url ?id=
if(isset($_GET['id'])) //cek ada apa ngga biar gak error
{

	$id = htmlentities(trim($_GET['id']) ,ENT_NOQUOTES);
	// biar aman aja sih

	$sql = "SELECT * FROM produk WHERE id = $id";
	// sql syntaks nya

	$fetch = mysqli_query($connect, $sql); // sql querynya

	$data = mysqli_fetch_array($fetch); //ambil data masukin ke variabel data

}else{
	header('Location:index.php'); //kalo gak ada pulang sana
}

//ngambil data post
if(isset($_POST['nama']))
{
	$nama = htmlentities(trim($_POST['nama']) ,ENT_NOQUOTES); //ambil nama dari <input type="text" name="nama">

	$harga = htmlentities(trim($_POST['harga']) ,ENT_NOQUOTES); //ambil harga dari <input type="text" name="harga">

	$sql = "UPDATE produk SET nama='$nama', harga = '$harga' WHERE id = '$id'";
	//sql syntaks

	$update = mysqli_query($connect, $sql);	
	// sql query

	if($update)
	{
		echo 'Sucess!'; //kalo berhasil :)
	}else{
		echo 'Failed!'; //kalo gagal :(
	}

	// sama kya di atas buat nampolin
	$sql = "SELECT * FROM produk WHERE id = $id";
	$fetch = mysqli_query($connect, $sql);
	$data = mysqli_fetch_array($fetch);

}

 ?>
 <!-- htmlnya buat bikin form -->
<form action="" method="post">
	<p><input type="nama" name="nama" value="<?=$data['nama']?>"></p>
	<p><input type="harga" name="harga" value="<?=$data['harga']?>"></p>
	<p><button type="submit">Submit</button></p>
</form>
<br>
<a href="index.php">Back</a>