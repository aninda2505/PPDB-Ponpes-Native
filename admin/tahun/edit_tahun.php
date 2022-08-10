<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_tahun WHERE id_tahun='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-warning">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="id_tahun" name="id_tahun" value="<?php echo $data_cek['id_tahun']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun Ajaran</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="t_ajaran" name="t_ajaran" value="<?php echo $data_cek['t_ajaran']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-3">
					<select name="status" id="status" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                            //menhecek data yg dipilih sebelumnya
                            if ($data_cek['status'] == "Aktif") echo "<option value='Aktif' selected>Aktif</option>";
                            else echo "<option value='Aktif'>Aktif</option>";

                            if ($data_cek['status'] == "Non Aktif") echo "<option value='Non Aktif' selected>Non Aktif</option>";
                            else echo "<option value='Non Aktif'>Non Aktif</option>";
                        ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-warning">
			<a href="?page=data-tahun" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_tahun SET
        t_ajaran='".$_POST['t_ajaran']."',
        status='".$_POST['status']."'
        WHERE id_tahun='".$_POST['id_tahun']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-tahun';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-tahun';
        }
      })</script>";
    }}
?>
<!-- end -->