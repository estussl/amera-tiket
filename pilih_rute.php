<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Amera Tiket</title>

  <!-- CSS  -->
  <?php require "css.html" ?>
  </head>
<body>
  <?php require"header.html";?>
  
  
  <!--====================ISI BODY===================-->
		<br>
  			<center>
			<applet codebase="applet" code="AmeraTiket.class"
				width="340"
				height="50"
				align=middle>
			</applet>
			</center>
			
		<?php
		include('connect.php');
		session_start();
		// Clear data session kalau sebelumnya ada
		if(isset($_SESSION['verifikasi']))
		{
			echo "<script>alert(\"Anda sudah mengisi form selanjutnya, menghapus...\")</script>";
			session_unset();
			// Hilangkan semua data sessionnya
		}
		 ?>

		<h2 class="center">Pilih Rute</h2>
		

            

	<form name="Input" onSubmit="return cek();" action="SimpanPesanan.php" method="post" >
	
	
	
	<div class="row">
		<div class="col s4 m4 4"></div>
		<div class="input-field col s2 m2 2">
		  <label>Stasiun Awal</label><br><br>
		  <select class="browser-default" id="stasiunAwal" required name="stasiun_awal">
			<option value="" disabled selected>Pilih Stasiun Awal</option>
				<?php
						$query = mysql_query("select * from stasiun") or die(mysql_error());

						while($row = mysql_fetch_assoc($query))
						{
							echo("<option value=\"" . $row[kode] . "\">" . $row[nama_st] . ", " . $row[provinsi] . "</option>");
						}

						?>
		  </select>
		 </div>
		 
		 <div class="input-field col s2 m2 2">
		  <label>Stasiun Tujuan</label><br><br>
		  <select class="browser-default" id="stasiunTujuan" required name="stasiun_tujuan">
			<option value="" disabled selected>Pilih Stasiun Tujuan</option>
				<?php
						$query = mysql_query("select * from stasiun") or die(mysql_error());

						while($row = mysql_fetch_assoc($query))
						{
							echo("<option value=\"" . $row[kode] . "\">" . $row[nama_st] . ", " . $row[provinsi] . "</option>");
						}

						?>
		  </select>
		 </div>
    </div>
	
 <script type="text/javascript">
			// Mencegah pemilihan stasiun yang sama
			function LarangPilihan( objekLawan, indeksIni )
			{
				var opsiDilarang = objekLawan.options;
				var panjangDilarang = opsiDilarang.length - 1;		// Indeks array mentoknya n - 1 dari angka sebenarnya

				// Bikin semua opsinya dapat dipilih
				while(panjangDilarang > 0 )
				{
					opsiDilarang[panjangDilarang].disabled = false;
					panjangDilarang--;
				}
				// kecuali elemen yang dipilih di elemen lawan
				opsiDilarang[indeksIni].disabled = true;
			}

			// Ambil elemen yang ingin di konfigurasi seleksinya
			var stasiunAwal = document.getElementById("stasiunAwal");
			var stasiunTujuan = document.getElementById("stasiunTujuan");

			stasiunAwal.onchange = function()
			{
				LarangPilihan.call(this, stasiunTujuan, this.selectedIndex);
			}

			stasiunTujuan.onchange = function()
			{
				LarangPilihan.call(this, stasiunAwal, this.selectedIndex);
			}
			</script>
 
	<div class="row">
		<div class="col s12 m4 12"></div>
		<div class="input-field col s12 m4 12">
		<label>Tanggal Berangkat</label><br><br>	
			<input class="validate center-align" required type="date" name="tgl" placeholder="DD/MM/YYYY">
         </div>
    </div>
	
	<div class="row" >
		<div class="col s12 m4 12"></div>
			<div class="input-field col s4 m4">
				<label>Jenis Tiket</label>
			</div>
		</div>
	</div>
	
	
	<div class="row" >
		<div class="col s12 m4 12"></div>
		<div class="input-field col s1 m1">
		<label>Dewasa</label>
		</div>
		<div class="input-field col s1 m1">		
			<input  type="number" name="quantity_dewasa" min="1" max="4" value=0>
         </div>
		 <div class="input-field col s1 m1">
		<label>Bayi</label>
		</div>
		<div class="input-field col s1 m1">		
			<input class="center-align" type="number" name="quantity_bayi" min="0" max="4" value=0>
         </div>
    </div>
	
	
	<div class="row" >
		<div class="col s4 m4 "></div>
			<div class="input-field col s4 m4">
				<label>Tipe Pesanan</label>
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="col s12 m4 12"></div>
		<div class="input-field col s2 m2">
			<input class="with-gap" required type="radio" id="sekalijalan" name="tipepesanan" value="pp"/>
			<label for="sekalijalan">Sekali Jalan</label>
         </div>
		 <div class="input-field col s2 m2">
			<input class="with-gap" required type="radio" id="pp" name="tipepesanan" value="pp"/>
			<label for="pp">Pulang Pergi</label>
		 </div>
    </div>
	
	
	
	<div class="row">
		<div class="col s12 m4 12"></div>
		<div class="input-field col s2 m2 center-align">
			<a class="waves-effect waves-light btn blue"> <i class="material-icons">search</i><input type="submit" value="Cari Tiket"/></a>
		</div>
		<div class="input-field col s2 m2 center-align">
			<a class="waves-effect waves-light btn blue"> <i class="material-icons">restore</i> <input type="reset" value="Atur Ulang"/></a>
		</div>
    </div>
	
	
	<br>
	
	
					
			
	</form>
		
		
	<!--<div class="row">
		<div class="col s12 m4 12"></div>
		<div class="input-field col s12 m4 12">
			<input id="email" type="email" class="validate">
          <label for="email">Email</label>		
		</div>
    </div>
	-->
  
				
	  
  <!--====================SELESAI ISI BODY===================-->
 <?php require "footer.html"; ?>


  <!--  Scripts-->
 <?php require "script.html" ?>

  </body>
</html>
