<?php 
date_default_timezone_set('Asia/Jakarta'); // buat default timezone bukan temzon

define('HOST', 'localhost'); //buat definisiin host
define('USER', 'root'); //buat definisiin username 
define('PASS', ''); //buat definisiin password
define('DATABASE', 'belajarcrud'); //buat definisiin database


// NB: pake variabel juga bisa
// misal $host = 'localhost';
// $user = 'root';
// $pass = '';
// $database = 'belajarcrud';
// saya pake define biar kalian kenal aja sih

$connect = mysqli_connect(HOST, USER, PASS, DATABASE) or die('Database error');

// ini pake mysqli_connect() buat koneksiin ke database
// berdasar config di atas
 ?>


 <!-- jadi gini file di atas buat koneksiin ke database -->