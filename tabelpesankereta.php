<html>
<head>
<title>Tabel Pemesanan Kereta</title>
<link rel="shortcut icon" type="image/png" href="gambar/logo.png"/>
<link rel="stylesheet" type="text/css" href="css/styletiket.css"/>
</head>


<table class="center">
		<tr>
			<th>
			<img src="gambar/logo.png" alt="Smiley face" height="100" width="100">
			</th>
			<th>
			<applet codebase="applet" code="AmeraTiket"
				width="340"
				height="50"
				align="middle">
			</applet>
			</th>
		</tr>
		</table>

<h2 class="tengah">Tabel Pemesanan Kereta</h1>
<br>
<br>
<body>
<table class="center" border="1">
	<tr>
    <th rowspan="2">No.	</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Jenis Kelamin</th>
    <th rowspan="2">No. Telepon</th>
    <th rowspan="2" >No. KTP</th>
    <th colspan="2">Stasiun</th>
    <th rowspan="2">Tanggal Berangkat</th>
    <th colspan="2">Banyak Tiket</th>
    <th rowspan="2">Tipe Pesanan</th>
	</tr>

    <tr>

      <th>Asal</th>
      <th>Tujuan</th>
<th>Dewasa</th>
<th>Bayi</th>
    </tr>




	<tr>
	<?php
	// session_start();
	//
	// if(!isset($_POST["nama"]))
	// 	{
	//
	//
	// 		echo ("<script>
	// 			window.alert('Anda belum mengisi data dengan lengkap')
	// 			window.location.href='pilih_rute.php';
	// 			</SCRIPT>");
	//
	//
	// 	}
	//
	// $nama=$_POST["nama"];
	// $jenis_kelamin=$_POST["jeniskelamin"];
	// $noktp=$_POST["noktp"];
	// $telepon=$_POST["telepon"];

	include('connect.php');
	$queryPemesan = mysql_query("select no_ktp, nama, jenis_kel, telepon from pemesan");
	$counter = 1;

	while($data=mysql_fetch_assoc($queryPemesan))
	{
		echo "<td>$counter.</td>";
		echo "<td>$data[nama]</td>";
		echo "<td>$data[jenis_kel]</td>";
		echo "<td>$data[telepon]</td>";
		echo "<td>$data[no_ktp]</td>";

		$queryPesan = mysql_query("select st_awal, st_tujuan, tgl, tiket_d, tiket_b, tipe from pesan_tiket where no_ktp='$data[no_ktp]'");
		$dataPesan=mysql_fetch_assoc($queryPesan);
		echo "<td>$dataPesan[st_awal]</td>";
		echo "<td>$dataPesan[st_tujuan]</td>";
		echo "<td>$dataPesan[tgl]</td>";
		echo "<td>$dataPesan[tiket_d]</td>";
		echo "<td>$dataPesan[tiket_b]</td>";

		if($dataPesan['tipe'] == "pp")
		{
			echo "<td>Pulang Pergi </td>";
		}
		else
		{
			echo "<td>Sekali Jalan</td>";
		}

		echo "</tr>";
		$counter++;
	}
	?>
</table>


</body>
</html>
