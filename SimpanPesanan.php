<?php
// Simpan semua data dari pilih_rute.php ke session
session_start();
$_SESSION['stasiunAwal'] = $_POST["stasiun_awal"];
$_SESSION['stasiunTuju'] = $_POST["stasiun_tujuan"];
$_SESSION['tgl'] = $_POST["tgl"];
$_SESSION['jumTiketDewasa'] = $_POST["quantity_dewasa"];
$_SESSION['jumTiketBayi'] = $_POST["quantity_bayi"];
$_SESSION['tipePesanan'] = $_POST["tipepesanan"];
$_SESSION['verifikasi'] = "verified";

header("location:http://localhost/tiket/form_pembelian_tiket.php");
 ?>
