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

	<h4>Detail Laporan/Keluhan</h4>
	<hr />
	
	<ul>
		<li>
			<h4 style="margin-bottom: 20px;"><?php echo $lapor["isi"]; ?></h4>
			<h4 class="lampiran">Lampiran : </h4><br \>

			<?php 
				$ekstensifile = explode('.',$lapor["file"]);
				$ekstensifile = strtolower(end($ekstensifile));
				if($ekstensifile == "pdf"){
			?>
			<embed src="<?php echo base_url() ?>/aset/file/<?php echo $lapor["file"]; ?>" />
			<?php } else { ?>
			<img id="filedetail" style="width: 500px;" src="<?php echo base_url() ?>/aset/file/<?php echo $lapor["file"]; ?>">
			<?php } ?>

			<div style="clear: both"></div>
			<a href="<?php echo base_url() ?>index.php/utama/delete/<?php echo $lapor["id"]?>" onclick="return confirm('Apakah yakin ingin dihapus?');"><h4 class="hapus"> | Hapus keluhan</h4></a>
			<a href="<?php echo base_url() ?>index.php/utama/detail2/<?php echo $lapor["id"]?>" ><h4 class="ubah">Ubah keluhan |</h4></a>
			<h4 class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></h4>
			<h4 class="aspek">Aspek : <?php echo $lapor["aspek"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	</ul>
</div>

</body>
</html>