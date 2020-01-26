<!DOCTYPE html>
<html>
<head>
	<title>Update Profil kelas II</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styleubah.css">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><b>TPQ</b></a>
  <a class="navbar-brand btn btn-light">Update Profil Kelas II</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class="btn btn-warning" href="data_profil2.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>    
	<div class="container">
      <div class="col-sm-6">
        <?php
        include "koneksi.php";
        //menampilkan data tertentu dari sql dalam bentuk objek
         $sql = $koneksi->query("SELECT * FROM tbl_kelas2 WHERE nis2=".$_GET['nis2']);
        //konversi data yang terdapat di dalam variabel $sql menjadi bentuk array
        $s = mysqli_fetch_array($sql);
      
        ?>
        <form action="ubahpr_profil2.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <label>NIS</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nis2" class="form-control" maxlength="9" value="<?php echo $s['nis2']?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama2" class="form-control" value="<?php echo $s['nama2']?>">
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Umur</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="umur" class="form-control" value="<?php echo $s['umur']?>">
            </div>
          </div>

             <div class="row">
            <div class="col-sm-6">
              <label>Tanggal Lahir</label>
            </div>
            <div class="col-sm-6">
              <input type="date" name="tgl" class="form-control" value="<?php echo $s['tgl']?>">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control" value=""><?php echo $s['alamat']?></textarea>
            </div>
          </div>

           

            <div class="row">
            <div class="col-sm-6">
              <label>Email</label>
            </div>
            <div class="col-sm-6">
              <input type="email" name="email" class="form-control" value="<?php echo $s['email']?>">
            </div>
          </div>


    <div class="row">
      <div class="col-sm-6">
     <button type="submit" class="btn btn-primary btn-block">Ubah Data Santri</button>
            
          </div>
        </div>
    </form>
      </div>
    
</div>
</body>
</html>