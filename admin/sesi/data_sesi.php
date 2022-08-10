<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Periode / Sesi
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Periode/Sesi</th>
						<th>Tgl Awal</th>
						<th>Tgl Akhir</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_sesi");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['sesi']; ?>
							</td>
							<td>
								<?php echo $data['tgl_awal']; ?>
							</td>
							<td>
								<?php echo $data['tgl_akhir']; ?>
							</td>
							<td>
								<a href="?page=edit-sesi&kode=<?php echo $data['id_sesi']; ?>" title="Ubah" class="btn btn-warning btn-sm"> Ubah Sesi
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