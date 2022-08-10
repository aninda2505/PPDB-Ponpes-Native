<?php
function generate_uuid()
{
	return sprintf(
		'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0x0fff) | 0x4000,
		mt_rand(0, 0x3fff) | 0x8000,
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff)
	);
}

$UUID = generate_uuid();

?>
<?php
$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$tahun = $data['id_tahun'];
}
?>
<!-- END -->
<?php

$sql_cek = "select * from tb_sesi";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);


$tgl1 = date("Y-m-d");
$tgl2 = $data_cek['tgl_akhir'];

$pecah1 = explode("-", $tgl1);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];

$pecah2 = explode("-", $tgl2);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 =  $pecah2[0];

$jd1 = GregorianToJD($month1, $date1, $year1);
$jd2 = GregorianToJD($month2, $date2, $year2);

$selisih = $jd1 - $jd2;
?>


<?php if ($selisih <= 0) { ?>

	<div class="container">
		<br>
		<br>
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div class="card h-100">
					<h4 class="card-header">FORMULIR PENDAFTARAN CALON SANTRI BARU TAHUN AJARAN
						<?= $tahun; ?>
					</h4>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
							<label>
								<B>A. BIODATA CALON SANTRI BARU</B>
							</label>
							<div class="form-group">
								<label>NAMA LENGKAP</label>
								<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group">
								<label>NAMA PANGGILAN</label>
								<input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" required>
							</div>
							<div class="form-group">
								<label>JENIS KELAMIN</label>
								<div>
									<select name="jekel" id="jekel" class="form-control" aria-placeholder=" -Pilih- " required>
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>NIK</label>
								<input type="text" name="nik" class="form-control" placeholder="NIK" required>
							</div>
							<div class="form-group">
								<label>TEMPAT LAHIR</label>
								<input type="text" name="tempat_lhr" class="form-control" placeholder="Kota Lahir" required>
							</div>
							<div class="form-group">
								<label>TANGGAL LAHIR</label>
								<input type="date" name="tgl_lhr" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PENDIDIKAN TERAKHIR</label>
								<input type="text" name="pend_terakhir" class="form-control" placeholder="Pendidikan Terakhir" required>
							</div>
							<div class="form-group">
								<label>ASAL SEKOLAH</label>
								<input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" required>
							</div>
							<div class="form-group">
								<label>ALAMAT</label>
								<textarea name="alamat" class="form-control" placeholder="Tuliskan Alamat Lengkap"></textarea>
							</div>
							<div class="form-group">
								<label>Apakah Pernah Mondok?</label>
								<div>
									<select name="mondok" id="mondok" class="form-control" required>
										<option>- Pilih -</option>
										<option>PERNAH</option>
										<option>TIDAK PERNAH</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Jika PERNAH, Tuliskan Nama Asal Pondok Pesantren</label>
								<input type="text" name="ponpes_asal" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Konsentrasi Yang Ingin Diambil?</label>
								<div>
									<select name="konsentrasi" id="konsentrasi" class="form-control" required>
										<option>- Pilih -</option>
										<option>SALAF</option>
										<option>SAINS</option>
									</select>
								</div>
							</div>
							<hr>
							<label>
								<B>B. BIODATA ORANG TUA/WALI</B>
							</label>
							<div class="form-group">
								<label>NAMA AYAH</label>
								<input type="text" name="nama_ayah" class="form-control" placeholder="Nama Lengkap Ayah" required>
							</div>
							<div class="form-group">
								<label>NO KTP AYAH</label>
								<label>NAMA IBU</label>
								<input type="text" name="ktpayah" class="form-control" placeholder="Nomor KTP Ayah" required>
							</div>
							<div class="form-group">
								<label>PEKERJAAN AYAH</label>
								<input type="text" name="kerja_ayah" class="form-control" placeholder="Pekerjaan Ayah" required>
							</div>
							<div class="form-group">
								<label>NAMA IBU</label>
								<input type="text" name="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu" required>
							</div>
							<div class="form-group">
								<label>NO KTP IBU</label>
								<input type="text" name="ktpibu" class="form-control" placeholder="Nomor KTP Ibu" required>
							</div>
							<div class="form-group">
								<label>PEKERJAAN IBU</label>
								<input type="text" name="kerja_ibu" class="form-control" placeholder="Pekerjaan Ibu" required>
							</div>
							<div class="form-group">
								<label>PENGHASILAN KELUARGA</label>
								<input type="text" name="penghasilan" class="form-control" placeholder="Contoh : 20.000.000" required>
							</div>
							<div class="form-group">
								<label>NO HP YANG BISA DIHUBUNGI</label>
								<input type="text" name="no_hp" class="form-control" placeholder="Contoh : 081234567890" required>
							</div>

							<div class="form-group">
								<label>Upload Foto Diri</label>
								<input type="file" name="gambar" class="form-control" required>
							</div>
							<div class="form-group">
								<input type="submit" name="Simpan" value="DAFTAR SEKARANG" class="btn btn-primary">
							</div>
						</form>


					</div>
					<div class="card-footer">
						Ayo Mendaftar
					</div>
				</div>
			</div>
		</div>
	</div>



<?php } elseif ($selisih > 0) { ?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
		<h1>Pendaftaran
			<?= $data_cek['sesi']; ?>
			Sudah Ditutup.</h1>
	</center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php } ?>

<?php

if (isset($_POST['Simpan'])) {
	$ekstensi_diperbolehkan	= array('png', 'jpg');
	$nama = $_FILES['gambar']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['gambar']['size'];
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$path = "./landing/img/" . $nama;


	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		move_uploaded_file($file_tmp, $path);
	} else {
		echo "<script>alert('File Gabole Masuk')</script>";
	}
	$nik = $_POST['nik'];

	$sql_simpan = "INSERT INTO `tb_pendaftaran`(`id_daftar`, `nama_lengkap`, `nama_panggilan`, `jekel`,`nik`, `tempat_lhr`, `tgl_lhr`,`pend_terakhir`, `asal_sekolah`, 
		`alamat`,  `mondok`, `ponpes_asal`, `konsentrasi`, `nama_ayah`, `ktpayah`,`kerja_ayah`, `nama_ibu`, `ktpibu`,`kerja_ibu`, `penghasilan`,`no_hp`, `th_ajaran`, `foto`) VALUES(
            '" . $UUID . "',
            '" . $_POST['nama_lengkap'] . "',
			'" . $_POST['nama_panggilan'] . "',
			'" . $_POST['jekel'] . "',
			'" . $_POST['nik'] . "',
			'" . $_POST['tempat_lhr'] . "',
			'" . $_POST['tgl_lhr'] . "',
			'" . $_POST['pend_terakhir'] . "',
			'" . $_POST['asal_sekolah'] . "',
			'" . $_POST['alamat'] . "',
			'" . $_POST['mondok'] . "',
			'" . $_POST['ponpes_asal'] . "',
			'" . $_POST['konsentrasi'] . "',
			'" . $_POST['nama_ayah'] . "',
			'" . $_POST['ktpayah'] . "',
			'" . $_POST['kerja_ayah'] . "',
			'" . $_POST['nama_ibu'] . "',
			'" . $_POST['ktpibu'] . "',
			'" . $_POST['kerja_ibu'] . "',
			'" . $_POST['penghasilan'] . "',
			'" . $_POST['no_hp'] . "',
			'" . $tahun . "',
			'" . $nama . "')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan) {
		echo "<script>alert('Selamat, Pendaftaran Berhasil')</script>";
		echo "<meta http-equiv='refresh' content='0; url=welcome.php?page=modul-hasil&kode=" . $UUID . "'>";
	} else {
		echo "<script>alert('Aduh, Pendaftaran Gagal')</script>";
		echo "<meta http-equiv='refresh' content='0; url=welcome.php?page=modul-register'>";
	}
}

?>
<!-- end -->