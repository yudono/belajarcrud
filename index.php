<?php 
include 'header.php';
?>

<div class="container">
	<br><br><br>
	<div class="card">
	<div class="card-header">
		<div class="card-title">
			<b>BELAJAR CRUD</b>
		</div>
	</div>
	<div class="card-body">

		<?php 
require 'connect.php'; //panggil file connect.php

$sql = "SELECT * FROM produk";
//sql syntaks nya

$fetch = mysqli_query($connect, $sql);
// buat query dari database

$nomor = 1;
// bikin nomor menjadi 0


echo '<p><a href="tambah.php" class="btn btn-primary">Tambah</a></p>'; // link tambah

//bikin table
echo '<table class="table table-striped table-bordered">';
echo '<tr><td>Nomor</td><td>Nama</td><td>Harga</td><td>Action</td></tr>';

// menampilkan data
while($row = mysqli_fetch_array($fetch))
{

	echo'<tr>';
	echo '<td>'.$nomor.'</td>'; // masukin nomor ke tabel
	echo '<td>'.$row['nama'].'</td>'; //masukin nama dari database tadi
	echo '<td>'.$row['harga'].'</td>'; //masukin harga dari database tadi
	echo '<td><a href="edit.php?id='.$row['id'].'">Edit</a>&nbsp;&nbsp;<a href="hapus.php?id='.$row['id'].'">Hapus</a></td>'; //masukin action nanti linknya nyambung ke file
	echo '</tr>';

	$nomor++; //tambah nomor otomatis (incement)

}
echo '<table>';
?>


</div>
</div>
</div>



<?php 
include 'footer.php';
?>
 <!-- jadi gini file di atas buat nampilin data doang -->