<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pendaftaran
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tahun Ajaran</th>
						<th>NIK</th>
						<th>Nama Santri</th>
						<th>TTL</th>
						<th>Apakah Pernah Mondok?</th>
						<th>Asal Pondok Pesantren</th>
						<th>Konsentrasi</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>No Hp</th>
						<th>Foto</th>
						<th>Pemberkasan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pendaftaran where berkas='Belum'");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['th_ajaran']; ?>
							</td>
							<td>
								<?php echo $data['nik']; ?>
							</td>
							<td>
								<a href="?page=detail&kode=<?php echo $data['id_daftar']; ?>" title="Selengkapnya">
									<?php echo $data['nama_lengkap']; ?>
								</a>
							</td>
							<td>
								<?php echo $data['tempat_lhr']; ?>
								/
								<?php echo $data['tgl_lhr']; ?>
							</td>
							<td>
								<?php echo $data['mondok']; ?>
							</td>
							<td>
								<?php echo $data['ponpes_asal']; ?>
							</td>
							<td>
								<?php echo $data['konsentrasi']; ?>
							</td>
							<td>
								<?php echo $data['nama_ibu']; ?>
							</td>
							<td>
								<?php echo $data['nama_ayah']; ?>
							</td>
							<td>
								<?php echo $data['no_hp']; ?>
							</td>
							<td>
								<img src="<?php echo "./landing/img/" . $data['foto']; ?>" width="150px" height="auto" alt="">
							</td>
							<td>
								<?php echo $data['berkas']; ?>
							</td>
							<td>
								<a href="./report/cetak_pendafaran.php?id_daftar=<?php echo $data['id_daftar']; ?>" target="blank" title="Cetak Formulir" class="btn btn-warning btn-sm">
									C
								</a>
								<a href="?page=edit-pendaftaran&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Apakah berkas sudah lengkap ?')" title="Pemberkasan Lengkap" class="btn btn-success btn-sm"> OK
								</a>
								<a href="?page=del-pendaftaran&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									H
								</a>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->