<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!!</title>
	<!-- file css ada di aset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/aset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/aset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR!</h1>
	<form action="" method="post">
		<input type="text" name="cari" id="cari" placeholder="Cari kata">
	</form>
	<a href="<?php echo base_url() ?>index.php/utama/tambah" ><h3>Buat Laporan / Keluhan +</h3></a>
	<h4>Laporan / Keluhan terakhir</h4>
	<hr />
	<div id="keluhan">
	<ul>
	<?php foreach ($lapor as $value){ ?> <!--$lapor didapet dari controller utama -->
		<li>
			<h4 style="margin-bottom: 20px;"><?php echo $value["isi"]; ?></h4>
			<h4 class="lampiran">Lampiran : <?php echo $value["file"]; ?></h4>
			<a href="<?php echo base_url() ?>index.php/utama/detail/<?php echo $value["id"] ?>"><h4 class="detail">selengkapnya>></h4></a>
			<h4 class="waktu" style="margin-right: 10px;">Tanggal : <?php echo $value["tanggal"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<hr />
	<?php } ?>
	</ul>
	</div>
</div>
<input id="alamat" value="<?php echo base_url() ?>index.php/utama/Pencarian/" hidden>
<script src="<?php echo base_url() ?>/aset/ajax.js"></script>
</body>
</html>