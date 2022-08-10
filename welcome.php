<?php
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
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PSB ONLINE
		<?php echo $nama; ?>
	</title>
	<link rel="icon" href="dist/img/logo1.png">

	<!-- Bootstrap core CSS -->
	<link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="landing/css/modern-business.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success fixed-top">
		<div class="container">
			<a class="navbar-brand" href="?page=modul-about">
				<h3>
					<b>PSB ONLINE
						<?php echo $nama; ?>
					</b>
				</h3>
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="btn btn-success" href="?page=modul-home">HOME</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-success" href="?page=modul-help">PANDUAN</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-warning" href="?page=modul-register">
							<b>DAFTAR</b>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div>
		<!-- /. WEB DINAMIS DISINI ############################################################################### -->
		<?php
		if (isset($_GET['page'])) {
			$halaman = $_GET['page'];

			switch ($halaman) {

				case 'modul-home':
					include "landing/halaman/home.php";
					break;
				case 'modul-help':
					include "landing/halaman/panduan.php";
					break;
				case 'modul-register':
					include "landing/halaman/daftar.php";
					break;
				case 'modul-info':
					include "landing/halaman/info.php";
					break;

				case 'modul-print':
					include "landing/halaman/cetak.php";
					break;
				case 'modul-hasil':
					include "landing/halaman/data_cetak.php";
					break;

					//default
				default:
					include "landing/halaman/home.php";
					break;
			}
		} else {
			include "landing/halaman/home.php";
		}
		?>

	</div>
	<!-- /.container -->
	<br>
	<br>
	<!-- Footer -->
	<footer class="py-1 bg-success">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; 2021 | <a href="https://tasywiqulfurqonkudus.com/" style="color: aliceblue;">Pondok Pesantren Tasywiqul Furqon</a> | <a href="login.php" style="color: aliceblue;"> Admin </a> </p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="landing/vendor/jquery/jquery.min.js"></script>
	<script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>