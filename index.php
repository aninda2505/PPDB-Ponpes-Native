<?php
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: welcome.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

include "inc/koneksi.php";
?>
<?php
$sql = $koneksi->query("select * from tb_ponpes");
while ($data = $sql->fetch_assoc()) {
	$nama = $data['nama_ponpes'];
	$alamat = $data['alamat_ponpes'];
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PONDOK TASYWIQUL FURQON</title>
	<link rel="icon" href="dist/img/logo1.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-success navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
								-
								<?php echo $alamat; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-success elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<span class="brand-text font-weight-light">
					<center>
						<b>PPDB PPTF</b>
					</center>
				</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level == "Administrator") {
						?>
							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>
										Data Master
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-ponpes" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Pondok Pesantren</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-tahun" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Tahun Ajaran</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-sesi" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Periode Daftar</p>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-users"></i>
									<p>
										Data Pendaftaran
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-pendaftaran" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Pendaftaran Masuk</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=pendaftaran-lengkap" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Sudah Pemberkasan</p>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>
										Kelola Laporan
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=pendaftaran-lengkap" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Sudah Pemberkasan</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-pendaftaran" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Belum Pemberkasan</p>
										</a>
									</li>
								</ul>
							</li>

						<?php
						} elseif ($data_level == "Petugas") {
						?>

							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-users"></i>
									<p>
										Data Pendaftaran
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-pendaftaran" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Pendaftaran Masuk</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=pendaftaran-lengkap" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Sudah Pemberkasan</p>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>
										Kelola Laporan
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=pendaftaran-lengkap" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Sudah Pemberkasan</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-pendaftaran" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Belum Pemberkasan</p>
										</a>
									</li>
								</ul>
							</li>

						<?php
						}
						?>

						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Pengguna
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {
								//Klik Halaman Home Pengguna
							case 'admin':
								include "home/admin.php";
								break;
							case 'petugas':
								include "home/admin.php";
								break;

								//Pengguna
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;

							case 'data-tahun':
								include "admin/tahun/data_tahun.php";
								break;
							case 'add-tahun':
								include "admin/tahun/add_tahun.php";
								break;
							case 'edit-tahun':
								include "admin/tahun/edit_tahun.php";
								break;
							case 'del-tahun':
								include "admin/tahun/del_tahun.php";
								break;

							case 'data-pendaftaran':
								include "admin/pendaftaran/data_pendaftaran.php";
								break;
							case 'pendaftaran-lengkap':
								include "admin/pendaftaran/pendaftaran_ok.php";
								break;
							case 'add-pendaftaran':
								include "admin/pendaftaran/add_pendaftaran.php";
								break;
							case 'edit-pendaftaran':
								include "admin/pendaftaran/edit_pendaftaran.php";
								break;
							case 'berkas-ulang':
								include "admin/pendaftaran/ulang_pendaftaran.php";
								break;
							case 'del-pendaftaran':
								include "admin/pendaftaran/del_pendafataran.php";
								break;
							case 'detail':
								include "admin/pendaftaran/detail_pendaftaran.php";
								break;


							case 'data-ponpes':
								include "admin/ponpes/data_ponpes.php";
								break;
							case 'edit-ponpes':
								include "admin/ponpes/edit_ponpes.php";
								break;

							case 'data-sesi':
								include "admin/sesi/data_sesi.php";
								break;
							case 'edit-sesi':
								include "admin/sesi/edit_sesi.php";
								break;

								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					} else {
						// Auto Halaman Home Pengguna
						if ($data_level == "Administrator") {
							include "home/admin.php";
						} elseif ($data_level == "Petugas") {
							include "home/admin.php";
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="https://tasywiqulfurqonkudus.com/">
					<strong>PPTF</strong>
				</a>
				All rights reserved.
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>