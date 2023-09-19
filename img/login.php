<?php

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENJADWALAN LAB UPT KOMPUTER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">PENJADWALAN LAB UPT KOMPUTER</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="schedule.html">SCHEDULE</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li class="active"><a href="login.html">LOGIN</a></li>
				<li><a href="about.html">ABOUT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Login</p>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>BOOKING RUANG LAB</h3>
			<div class="box">
				<div class="col-4">
					<div class="wrap" style="">
					<form>
		<table width="750">
			<tr>
				<td>Nama Pemesan</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Nama Prodi</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Nama Ruang Lab</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Hari / Tanggal Pinjam </td>
				<td><input type="text" name="">
				    <input type="date" name=""></td>
			</tr>
			<tr>
				<td>Jam Mulai</td>
				<td><select>
					<option>07.30</option>
					<option>08.00</option>
					<option>08.30</option>
					<option>09.00</option>
					<option>09.30</option>
					<option>10.00</option>
					<option>12.30</option>
				</select></td>
			</tr>
			<tr>
				<td>Jam Selesai</td>
			<td><select>
				<option>09.30</option>
				<option>10.00</option>
				<option>10.30</option>
				<option>11.00</option>
				<option>11.30</option>
				<option>12.00</option>
				<option>14.30</option>
			</select></td>
		</tr>
			<tr>
				<td>Keterangan Peminjaman</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Penanggung Jawab Peminjaman </td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="simpan">
				    <input type="submit" value="kembali">
				    </td>
				</tr>
		</table>
	</form>
					</div>
			</div>
</div>
			</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - PRAKERIN - UPT KOMPUTER.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>