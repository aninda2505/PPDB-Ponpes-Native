<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pendaftaran WHERE id_daftar='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }

    $sql_ubah = "UPDATE tb_pendaftaran SET
        berkas='Belum' WHERE id_daftar='".$_GET['kode']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Sukses',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pendaftaran';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pendaftaran';
        }
      })</script>";
    }
?>
<!-- end -->