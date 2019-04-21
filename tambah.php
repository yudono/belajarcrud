<?php 
require 'connect.php'; //panggil file connect.php

// buat nambah data
// ambil post
if(isset($_POST['nama'])) //cek post nama
{
	$nama = htmlentities(trim($_POST['nama']) ,ENT_NOQUOTES);
	// post nama
	$harga = htmlentities(trim($_POST['harga']) ,ENT_NOQUOTES);
	// post harga


	$sql = "INSERT INTO produk(nama, harga) VALUES('$nama','$harga')";
	// sql syntaks
	$add = mysqli_query($connect, $sql);
	// sql query

	if($add)
	{
		echo 'Success!'; //kalo berhasil
	}else{
		echo 'Error!'; //kalo gagal
	}
}
 ?>

 <!-- ini form buat tambannya -->
<form action="" method="post">
	<p><input type="nama" name="nama" placeholder="Nama Barang"></p>
	<p><input type="harga" name="harga" placeholder="Harga barang"></p>
	<p><button type="submit">Submit</button></p>
</form>
<br>
<a href="index.php">Back</a>