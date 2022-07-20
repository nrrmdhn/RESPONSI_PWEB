<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 10px;
			background: #f1f1f1;
		
		}

		.header {
			padding: 30px;
			text-align: center;
			background: white
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #007272;
			color: blue;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #002020;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #002020;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: #002020;
			padding-left: 20px
		}

		.fakeimg {
			background-color: #004141;
			width: 75%;
		}

		.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #002020;
			margin-top: 20px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	}
	</style>
</head>
<body style="background-image: url(bgg.jpg) ;">

	<div class="header" style="background-color: white;">
		<h1 style="font-family: serif;">MUHAMMAD NUR RAMADHAN</h1>
		<h2>NIM : 2100018127</h2>
		
	</div>

	<div class="leftcolumn">
			<div class="card" style="background-color: white;">
				<h1>KALKULATOR</h1>
				<?php
				 include ("kalkulator.html");
				 ?>
			</div>

		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: white;">
				<h1 align="center">BIODATA TAMU</h1><br><br>

				<div style="background-color: white;">
					
					<div align="center"><strong><font size="5" face="courier New, courier,mono"></font></strong></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="54%" border="0" align="center">
				    <tr>
					    <td><h4 style="background-color: black;">Nama lengkap</h4></td>
					    <td><input style="background-color:lightblue;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4 style="background-color:black;">NIM</h4></td>
					    <td><input style="background-color:lightblue;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4 style="background-color:black;">E-mail</h4></td>
					    <td><input style="background-color:lightblue;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td><h4 style="background-color:black">Prodi</h4></td>
					<td><select style="background-color:white;" name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Kedokteran</option>
						<option>Manajemen</option>
						<option>Hukum</option>
						<option>Perikanan</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color:white;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:white;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>

			<div class="card"; style="background-color: white;">
				
		    </div>
		</div>

		<div class="rightcolumn">
			<div class="card" style="background-color: white;">
				<h1>KALENDER</h1>
				<?php
					include ("kalender_bulanan.php");
				?>
			</div>

		</div>
		<div class="rightcolumn">
			<div class="card" style="background-color: white;">
				
				</div>
			</div>
		</div>
</div>   
     <div class="footer" style="background-color: black;">
     	
     	<p></p>
     </div>

</body>
</html>