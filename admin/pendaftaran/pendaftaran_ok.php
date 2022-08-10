<div class="card card-primary">
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
						<th>Pemberkasan</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pendaftaran where berkas ='Sudah'");
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
								<?php echo $data['nama_ayah']; ?>
							</td>
							<td>
								<?php echo $data['nama_ibu']; ?>
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
								<a href="?page=berkas-ulang&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Ulangi pemberkasan ?')" title="Ulangi Pemberkasan" class="btn btn-warning btn-sm"> UP
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