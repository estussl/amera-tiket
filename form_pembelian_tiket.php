<html>
	<head>
		<title>AMERA Tiket</title>
		<link rel="shortcut icon" type="image/png" href="gambar/logo.png"/>
		<link rel="stylesheet" type="text/css" href="css/styletiket.css"/>
	</head>

	<body>
<?php
session_start();
// Mencegah pembukaan halaman ini sebelum mengisi pilih_rute.php
if(!isset($_SESSION['verifikasi']))
{
	echo("<script>
			window.alert('Anda belum mengisi data dengan lengkap')
			window.location.href='pilih_rute.php';
			</script>");
}
?>

<script type="text/javascript">
function cek()
{
	  if(document.forms['Input'].nama.value === "" || document.forms['Input'].kelamin.value === "" || document.forms['Input'].alamat.value === "" || document.forms['Input'].telepon.value === "" || document.forms['Input'].ktp.value === "" || document.forms['Input'].email.value === "")
	  {
		alert("Anda belum mengisi data dengan lengkap");
		return false;
	  }

}
</script>


		<table class="center">
		<tr>
			<th>
			<img src="gambar/logo.png" alt="Smiley face" height="100" width="100">
			</th>
			<th>
			<applet codebase="applet" code="AmeraTiket"
				width="340"
				height="50">
			</applet>
			</th>
		</tr>
		</table>


		<h2 class="tengah">Data Diri</h2>

		<table class="center">
		<br/>
		<form name="Input" onSubmit="return cek();" method="post" action="SimpanPemesan.php">
			<tr>
				<td>
					Nama
				</td>
				<td>
					<input class="penuh" require type="text" name="nama" id="nama" placeholder="Nama Lengkap"/>
				</td>
			</tr>

			<tr>
				<td>
					Jenis Kelamin
				</td>
				<td>
					<input type="radio" name="jeniskelamin" id="kelamin" value="L">Laki-Laki
					<input type="radio" name="jeniskelamin" id="kelamin" value="P">Perempuan
				</td>
			</tr>

			<tr>
				<td>
					Alamat
				</td>
				<td>
					<textarea class="penuh" id="alamat" name="alamat"></textarea>
				</td>
			</tr>

			<tr>
				<td>
					No. KTP
				</td>
				<td>
					<input class="penuh" require type="text" name="noktp" id="ktp" placeholder="Nomor KTP" id="ktp" />
				</td>
			</tr>

			<tr>
				<td>
					No. Telepon
				</td>
				<td>
					<input class="penuh" require type="text" name="telepon" id="telepon" placeholder="Nomor Telepon"/>
				</td>
			</tr>

			<tr>
				<td>
					Alamat Email
				</td>
				<td>
					<input class="penuh" type="email" name="email" id="email" placeholder="Alamat e-mail"/>
				</td>

			<tr>
				<td colspan="2" align="center">
						<input required type="checkbox" value="agree"> Saya setuju dengan <a href='terms.html'>syarat dan ketentuan</a>.
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
						<input type="submit" name="proses" value="Proses">
						<input type="reset" value="Hapus"/>
				</td>
			</tr>
		</form>
		</table>
	</body>
</html>
