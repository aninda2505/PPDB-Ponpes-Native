<?php
$sql = $koneksi->query("select * from tb_ponpes");
while ($data = $sql->fetch_assoc()) {
	$id_sek = $data['id_ponpes'];
	$nama = $data['nama_ponpes'];
	$alamat = $data['alamat_ponpes'];
}
?>


<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-home"></i> Data Pondok Pesantren
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-1">
		<table class="table" border="1">
			<tbody>
				<tr>
					<td>
						<b>Nama Pondok</b>
					</td>
					<td>
						<?php echo $nama; ?>

					</td>
				</tr>
				<tr>
					<td>
						<b>Alamat Pondok</b>
					</td>
					<td>
						<?php echo $alamat; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=edit-ponpes&kode=<?php echo $id_sek; ?>" title="Ubah" class="btn btn-warning">
				Ubah Data
			</a>
		</div>
	</div>
</div>