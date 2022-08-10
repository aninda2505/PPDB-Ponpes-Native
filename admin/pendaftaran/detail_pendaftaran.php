<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_pendaftaran WHERE id_daftar='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Detail Pendaftaran
		</h3>
		</h3>

		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-1">
		<table class="table">
			<tbody>
				<tr>
					<td colspan="2">
						<b>A. Biodata Peserta</b>
					</td>
				</tr>
				<tr>
					<td style="width: 230px">
						NIK
					</td>
					<td>:
						<?php echo $data_cek['nik']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama
					</td>
					<td>:
						<?php echo $data_cek['nama_lengkap']; ?>
					</td>
				</tr>
				<tr>
					<td>
						TTL
					</td>
					<td>:
						<?php echo $data_cek['tempat_lhr']; ?>/
						<?php echo $data_cek['tgl_lhr']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Jekel
					</td>
					<td>:
						<?php echo $data_cek['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pendidikan Terakhir
					</td>
					<td>:
						<?php echo $data_cek['pend_terakhir']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Asal Sekolah
					</td>
					<td>:
						<?php echo $data_cek['asal_sekolah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>:
						<?php echo $data_cek['alamat']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Apakah Penah Mondok?
					</td>
					<td>:
						<?php echo $data_cek['mondok']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama Ponpes Asal
					</td>
					<td>:
						<?php echo $data_cek['ponpes_asal']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Konsentrasi yang dipilih
					</td>
					<td>:
						<?php echo $data_cek['konsentrasi']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>B. Biodata Orang Tua/Wali</b>
					</td>
				</tr>
				<tr>
					<td>
						Nama Ayah
					</td>
					<td>:
						<?php echo $data_cek['nama_ayah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						No KTP AYAH
					</td>
					<td>:
						<?php echo $data_cek['ktpayah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan Ayah
					</td>
					<td>:
						<?php echo $data_cek['kerja_ayah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama Ibu
					</td>
					<td>:
						<?php echo $data_cek['nama_ibu']; ?>
					</td>
				</tr>
				<tr>
					<td>
						No KTP IBU
					</td>
					<td>:
						<?php echo $data_cek['ktpibu']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan Ibu
					</td>
					<td>:
						<?php echo $data_cek['kerja_ibu']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Penghasilan Keluarga
					</td>
					<td>:
						<?php echo $data_cek['penghasilan']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nomor Hp yang bisa dihubungi
					</td>
					<td>:
						<?php echo $data_cek['no_hp']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>C. Lain-lain</b>
					</td>
				</tr>
				<tr>
					<td>
						TA Ajaran
					</td>
					<td>:
						<?php echo $data_cek['th_ajaran']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Waktu Pendaftaran
					</td>
					<td>:
						<?php echo $data_cek['waktu_daftar']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pemberkasan
					</td>
					<td>:
						<?php echo $data_cek['berkas']; ?>
					</td>
				</tr>

			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-pendaftaran" title="Kembali" class="btn btn-warning">Kembali</a>
		</div>
	</div>
</div>