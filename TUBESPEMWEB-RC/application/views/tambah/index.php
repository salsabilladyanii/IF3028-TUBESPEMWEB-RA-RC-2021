<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di aset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/aset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/aset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR!</h1>
    <h4>Buat Laporan/Keluhanr</h4>
   <hr />
   <?php 
   if(validation_errors()):
   echo validation_errors(); 
   endif;
	?>
   <?php echo form_open_multipart('index.php/Tampilandepan/tambah'); ?>
	    <textarea rows="16" cols="136" style="width: 800px;" name="isi" placeholder="Laporan/Keluhan"></textarea><br \>
		<select name="aspek">
			<option value="Dosen">Dosen</option>
			<option value="Staff">Staff</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Infrastruktur">Infrastruktur</option>
			<option value="Pengajaran">Pengajaran</option>
			<option value="Logistik">Logistik</option>
		</select><br />
		<label>File Dalam Bentuk Gambar / PDF (max 4Mb)</label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Tambah" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
</div>
</body>
</html>