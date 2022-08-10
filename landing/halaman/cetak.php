<?php
$nik = $_POST['nik'];

$sql_cek = "SELECT * FROM tb_pendaftaran WHERE nik='$nik'";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
?>

<div class="container">
	<br>
	<br>
	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card h-100">
				<h4 class="card-header">Hasil Pencarian NIK :
					<?php echo $data_cek['nik']; ?>
				</h4>
				<div class="card-body">

					<h3>Pendaftaran Berhasil.</h3>
					<table border="1" cellspacing="0" height="230px" style="width: 75%">
						<tbody>
							<tr>
								<td>NIK</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nik']; ?>
								</td>

							</tr>
							<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nama_lengkap']; ?>
								</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['jekel']; ?>
								</td>
							</tr>
							<tr>
								<td>TTL</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['tempat_lhr']; ?>
									/
									<?php echo $data_cek['tgl_lhr']; ?>
								</td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['alamat']; ?>
								</td>
							</tr>
							<tr>
								<td>Nama Ayah</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nama_ayah']; ?>
								</td>
							</tr>
							<tr>
								<td>Nama Ibu</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nama_ibu']; ?>
								</td>
							</tr>
						</tbody>
					</table>
					<br>

					<a href="./report/cetak_pendafaran.php?id_daftar=<?php echo $data_cek['id_daftar']; ?>" target="blank" title="Cetak Bukti Pendaftaran" class="btn btn-warning">
						Cetak Bukti Pendaftaran
					</a>
					<br>
					<br>
					<p style="text-align:justify">
						<b>Cetak Bukti Pendaftaran dan Lengkapi Berkasi dibawah ini, kemudian kumpulkan di Kantor Tata Usaha Pondok Pesantren Tasywiqul Furqon Sebelum Pendaftaran Ditutup</b>
						<br> - FC Akta Kelahiran
						<br> - FC Kartu Keluarga
						<br> - FC KTP Orang Tua
					</p>

				</div>
				<div class="card-footer">
					Segera lengkapi pemberkasan !!!
				</div>
			</div>
		</div>
	</div>
</div>
<!--end-->