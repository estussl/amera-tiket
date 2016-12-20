<?php
include("connect.php");

$nama=$_POST["nama"];
$jenis_kelamin=$_POST["jeniskelamin"];
$noktp = $_POST["noktp"];
$telepon=$_POST["telepon"];

session_start();
$stasiunAwal = $_SESSION['stasiunAwal'];
$stasiunTuju = $_SESSION['stasiunTuju'];
$jumTiketDewasa = $_SESSION['jumTiketDewasa'];
$jumTiketBayi = $_SESSION['jumTiketBayi'];
$tipePesanan = $_SESSION['tipePesanan'];
$tgl = $_SESSION['tgl'];

// Format default tanggal pada mysql adalaah YYYY-MM-DD
$tglFormatted = substr($tgl, 6, 4) . "-" . substr($tgl, 3, 2) . "-" . substr($tgl, 0, 2);

// Masukkan data pesan_tiket ke pesan_tiket
$insertToPesan = mysql_query("insert into pesan_tiket(no_ktp, st_awal, st_tujuan, tgl, tiket_d, tiket_b, tipe)
								values('$noktp', '$stasiunAwal', '$stasiunTuju', '$tglFormatted', '$jumTiketDewasa', '$jumTiketBayi', '$tipePesanan')")
								or die(mysql_error());

// Masukkan data pemesan ke tabel pemesan
$insertToPemesan = mysql_query("insert into pemesan
                     values('$noktp','$nama','$jenis_kelamin','$telepon')") or die(mysql_error());

// Redirect halaman ke tabel pesan kereta
if($insertToPemesan)
{
   header("location:http://localhost/tiket/tabelpesankereta.php");
}

// Bersihin semua data _SESSION
session_unset();
 ?>
