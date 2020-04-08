<?php 
include 'header.php';
?>

<div class="container">
	<br><br><br>
	<div class="card">
		<div class="card-header">
			<div class="card-title">
				<b>Tambah data</b>
			</div>
		</div>
		<div class="card-body">
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
		header('Location:/'); //kalo berhasil
	}else{
		echo '<script>alert("Error!");</script>'; //kalo gagal
	}

	// sama kya di atas buat nampolin
	$sql = "SELECT * FROM produk WHERE id = $id";
	$fetch = mysqli_query($connect, $sql);
	$data = mysqli_fetch_array($fetch);

}

 ?>
 <!-- htmlnya buat bikin form -->
<form action="" method="post">
	<p><input type="nama" name="nama" value="<?=$data['nama']?>" class="form-control"></p>
	<p><input type="number" name="harga" value="<?=$data['harga']?>" class="form-control"></p>
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