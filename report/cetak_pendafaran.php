<?php
include "../inc/koneksi.php";

$id_daftar = $_GET['id_daftar'];

$sql_cek = "SELECT * FROM tb_ponpes";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH); {
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>CETAK PENDAFTARAN</title>
	</head>

	<body>
		<center>
			<h2>
				<img src="../dist/img/logo1.png" alt="" width="80px" style="float: left;">
				FORMULIR PENDAFTARAN CALON SANTRI BARU
				<br><?php echo $data_cek['nama_ponpes']; ?>
				<p style="font-family: monospace; font-size:medium;">Desa Kajeksan RT 02 RW 02, Kecamatan Kota, Kabupaten Kudus, Jawa Tengah</p>
				</h1>

				<hr / size="2px" color="black">
			<?php
		}

		$sql_tampil = "select * from tb_pendaftaran where id_daftar='$id_daftar'";
		$query_tampil = mysqli_query($koneksi, $sql_tampil);
		$no = 1;
		while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
			?>
		</center>

		<center>
			<h4>
				<u>BUKTI PENDAFTARAN</u>
			</h4>
		</center>
		<p>Telah terdata sebagai Calon Santri Baru pada
			<?= $data_cek['nama_ponpes']; ?>, dengan data sebagai berikut :
		</p>
		<table border="0" cellspacing="0" style="width: 90%">
			<tbody>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td>
						<?php echo $data['nik']; ?>
					</td>
					<td rowspan="8" align="right">
						<img src="<?php echo "../landing/img/" . $data['foto']; ?>" width="170px" height="auto">
					</td>

				</tr>
				<tr>
					<td>Nama Calon Santri</td>
					<td>:</td>
					<td>
						<?php echo $data['nama_lengkap']; ?>
					</td>

				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<?php echo $data['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td>TTL</td>
					<td>:</td>
					<td>
						<?php echo $data['tempat_lhr']; ?>
						/
						<?php echo $data['tgl_lhr']; ?>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>
						<?php echo $data['alamat']; ?>
					</td>
				</tr>
				<tr>
					<td>Nama Ayah</td>
					<td>:</td>
					<td>
						<?php echo $data['nama_ayah']; ?>
					</td>
				</tr>
				<tr>
					<td>Nama Ibu</td>
					<td>:</td>
					<td>
						<?php echo $data['nama_ibu']; ?>
					</td>
				</tr>
				<tr>
					<td>No Hp Yang Bisa Dihubungi</td>
					<td>:</td>
					<td>
						<?php echo $data['no_hp']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<p>Segera melengkapi berkas dibawah ini, dan dikumpulkan di Kantor Tata Usaha
			<?= $data_cek['nama_ponpes']; ?>. (Centang berkas yang sudah lengkap)
		</p>
		<table border="0" cellspacing="0" height="80">
			<tbody>
				<tr>
					<td>[...]</td>
					<td>FC Akta Kelahiran</td>
				</tr>
				<tr>
					<td>[...]</td>
					<td>FC Kartu Keluarga</td>
				</tr>
				<tr>
					<td>[...]</td>
					<td>FC KTP Orang Tua</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<br>
		<br> Waktu Pendaftaran :
		<?php echo $data['waktu_daftar']; ?>
		<h5 align="right">
			Ketua Panitia PSB
			<br>
			<br>
			<br>
			<br>
			<br>
			<br> (..................................)
		</h5>
	<?php } ?>

	<script>
		window.print();
	</script>

	</body>

	</html>