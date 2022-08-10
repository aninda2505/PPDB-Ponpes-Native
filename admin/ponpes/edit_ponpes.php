<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_ponpes WHERE id_ponpes='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-warning">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_ponpes" value="<?php echo $data_cek['id_ponpes']; ?>" readonly />

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pondok Pesantren</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_ponpes" name="nama_ponpes" value="<?php echo $data_cek['nama_ponpes']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="alamat_ponpes" name="alamat_ponpes" value="<?php echo $data_cek['alamat_ponpes']; ?>" />
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-warning">
			<a href="?page=data-ponpes" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

if (isset($_POST['Ubah'])) {
	$sql_ubah = "UPDATE tb_ponpes SET
        nama_ponpes='" . $_POST['nama_ponpes'] . "',
        alamat_ponpes='" . $_POST['alamat_ponpes'] . "'
        WHERE id_ponpes='" . $_POST['id_ponpes'] . "'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
	mysqli_close($koneksi);

	if ($query_ubah) {
		echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-ponpes';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-ponpes';
        }
      })</script>";
	}
}
?>
<!--end -->