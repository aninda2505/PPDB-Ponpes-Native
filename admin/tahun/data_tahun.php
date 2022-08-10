<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Tahun Ajaran</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-tahun" class="btn btn-primary">
					<i class="fa fa-plus"></i> Tambah</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th>Tahun Ajaran</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
						$no = 1;
						$sql = $koneksi->query("select * from tb_tahun");
						while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_tahun']; ?>
						</td>
						<td>
							<?php echo $data['t_ajaran']; ?>
						</td>
						<td>
							<?php echo $data['status']; ?>
						</td>
						<td>
							<a href="?page=edit-tahun&kode=<?php echo $data['id_tahun']; ?>" title="Ubah"
							 class="btn btn-warning btn-sm"> Ubah
							</a>
							<a href="?page=del-tahun&kode=<?php echo $data['id_tahun']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								Hapus
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