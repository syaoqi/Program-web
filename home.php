<?php
session_start();
if (!$_SESSION['username']) {
  echo "<script>
  alert('Login Dulu!')
  document.location = 'login_admin.php'
  </script>";
}
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/stylehome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><b>TPQ</b></a>
  <a class="navbar-brand ml-auto btn btn-light">HOME</a>
  <a class=" btn btn-outline-success ml-5" href="data_profil1.php">Data Santri Kelas I</a>
  <a class=" btn btn-outline-success ml-3" href="data_profil2.php">Data Santri Kelas II</a>
  <a class=" btn btn-outline-success ml-3" href="data_nilai1.php">Data nilai Kelas I</a>
  <a class=" btn btn-outline-success ml-3" href="data_nilai2.php">Data nilai Kelas II</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item">
        <a class=" btn btn-danger ml-auto" href="index.php">Keluar</a>
      </li>
    </ul>
  </div>
</nav>
<div class="tittle">
          <h1>TAMAN PENDIDIKAN AL-QUR'AN</h1>
          </div>
</div>
</body>
</html>