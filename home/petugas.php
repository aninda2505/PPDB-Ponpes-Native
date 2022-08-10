<?php
$sql = $koneksi->query("SELECT COUNT(id_tahun) as pengguna  from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$pengguna = $data['pengguna'];
}

$sql = $koneksi->query("SELECT COUNT(id_daftar) as jumlah  from tb_pendaftaran");
while ($data = $sql->fetch_assoc()) {
	$jumlah = $data['jumlah'];
}

$sql = $koneksi->query("SELECT COUNT(id_daftar) as belum  from tb_pendaftaran where berkas='Belum'");
while ($data = $sql->fetch_assoc()) {
	$belum = $data['belum'];
}

$sql = $koneksi->query("SELECT COUNT(id_daftar) as sudah  from tb_pendaftaran where berkas='Sudah'");
while ($data = $sql->fetch_assoc()) {
	$sudah = $data['sudah'];
}
?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $pengguna; ?>
				</h3>

				<p>Tahun Ajaran Aktif</p>
			</div>
			<div class="icon">
				<i class="ion ion-star"></i>
			</div>
			<a href="?page=data-tahun" class="small-box-footer">INFO
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $jumlah; ?>
				</h3>

				<p>Pendaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-person"></i>
			</div>
			<a href="?page=data-pendaftaran" class="small-box-footer">INFO
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $belum; ?>
				</h3>

				<p>Belum Pemberkasan</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-sad"></i>
			</div>
			<a href="?page=data-pendaftaran" class="small-box-footer">INFO
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $sudah; ?>
				</h3>

				<p>Sudah Pemberkasan</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="?page=pendaftaran-lengkap" class="small-box-footer">INFO
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
</div>
<br>
<center>
	<img src="dist/img/logo1.png" width=200px />
	<h1>
		<?php echo $nama; ?>
	</h1>
</center>