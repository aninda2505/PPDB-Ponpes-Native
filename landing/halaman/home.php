<?php
$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$tahun = $data['id_tahun'];
}
?>

<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<br>
	<br>
	<!-- Intro Content -->
	<div class="row">
		<div class="col-lg-6">
			<img src="landing/vendor/ponpes.jpg" width="100%" />
		</div>
		<div class="col-lg-6">
			<h3> Pendaftaran Calon Santri Baru Tahun
				<?= $tahun; ?> Pondok Pesantren Tasywiqul Furqon</h3>
			<p style="text-align:justify">
				<br> Pendaftaran calon santri baru Pondok Tasywiqul Furqon telah dibuka. Calon santri baru Pondok Tasywiqul Furqon dapat mendaftar sebagai santri di pondok kami secara daring (online). Sistem akan merekap secara otomatis data santri baru yang diinput melalui form pendaftaran yang telah disediakan. Silakan ikuti petunjuk berikut.
			<p style="text-align:justify">
			<h3>SYARAT PENDAFTARAN</h3>
			Mengisi Formulir Online
			<a href="?page=modul-register">
				<u>Disini.</u>
			</a>
			<br> Setelah selesai mengisi form pendaftaran, silakan datang ke Pondok Pesantren Tasywiqul Furqon untuk melengkapi pemberkasan sebagaimana berikut ini :
			<br> - FC Akta Kelahiran
			<br> - FC Kartu Keluarga
			<br> - FC KTP Orang Tua
			</p>

		</div>
	</div>
	<!-- /.row -->
	<br>
	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card h-100">
				<h4 class="card-header">Cek Pendaftaran</h4>
				<div class="card-body">

					<form action="?page=modul-print" method="POST">
						<div class="form-group">
							<label>Cari Dengan NIK</label>
							<input type="text" name="nik" class="form-control" placeholder="Masukkan NIK disini" required>
						</div>

						<div class="form-group">
							<input type="submit" name="Cek" value="CEK PENDAFTARAN" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="card-footer">
				</div>
			</div>
		</div>
	</div>
	<!-- Team Members -->

	<!-- /.row -->
</div>
<!--END -->