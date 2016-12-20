<?php
  $host = "localhost";
  $user = "root";   // Nama user database
  $pass = "";
  $db_name = "amera";   // Nama database

  $connection = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
  mysql_select_db($db_name, $connection) or die("Tidak ada database yang dipilih!");

 ?>
