<?php 
include 'header.php';
?>

<div class="container">
	<br><br><br>
	<div class="card">
		<div class="card-header">
			<div class="card-title">
				<b>Edit data</b>
			</div>
		</div>
		<div class="card-body">
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
	<p><input type="nama" name="nama" placeholder="Nama Barang" class="form-control"></p>
	<p><input type="harga" name="harga" placeholder="Harga barang" class="form-control"></p>
	<p><button type="submit" class="btn btn-primary">Submit</button>
	<a href="index.php" class="btn btn-secondary">Back</a>
</p>
</form>
		</div>
	</div>
</div>

<?php 
include 'footer.php';
?>