<!DOCTYPE html>
<html>
<head>
    <title> Kelas II</title>
    <link rel="stylesheet" type="text/css" href="styletampil.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#"><b>TPQ</b></a>
  <a class="navbar-brand btn btn-light" >Data Kelas II</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class="btn btn-warning" href="home2.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="table-responsive">
	<h4>DAFTAR SANTRI KELAS II</h4>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nis</th>
				<th>Nama </th>
				<th>Umur </th>
				<th>Tanggal Lahir </th>
				<th>Alamat</th>
				<th>email</th>
			</tr>
		</thead>
		<?php
		include "koneksi.php";
		$tampil = "SELECT * FROM tbl_kelas2";
		$str = mysqli_query($koneksi, $tampil);
		$no = 1;
		foreach ($str as $santri){
			?>
			<tr>
			<td><?php echo $no ?></td>
				<td><?php echo $santri['nis2']; ?></td>
				<td><?php echo $santri['nama2']; ?></td>
				<td><?php echo $santri['umur']; ?></td>
				<td><?php echo $santri['tgl']; ?></td>
				<td><?php echo $santri['alamat']; ?></td>
				<td><?php echo $santri['email']; ?></td>

	
			</tr>
	<?php
			$no++;
			
		}
		?>

	</table>
	</div>
</div>
</body>
</html>