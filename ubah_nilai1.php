<?php
include'koneksi.php';
// $koneksi = mysqli_connect('localhost','root','','db_pendaftarantpq');
// $result = $koneksi->query('SELECT * FROM tbl_kelas1') or die($koneksi->error);
// ?>
<!DOCTYPE html>
  <html>
    <head>
    <title>Update Nilai Kelas I</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="styleinput.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><b>TPQ</b></a>
  <a class="navbar-brand btn btn-light">Update Nilai Kelas I</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class="btn btn-warning" href="home.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>    
<div class="container">
    <div class="jumbotron" >
      <div  class="col-sm-6">
        <?php
        include "koneksi.php";
        //menampilkan data tertentu dari sql dalam bentuk objek
        $sql = $koneksi->query("SELECT * FROM tbl_nilai WHERE nis=".$_GET['nis']);
        //konversi data yang terdapat di dalam variabel $sql menjadi bentuk array
        $s = mysqli_fetch_array($sql);
        // var_dump($s)
        ?>
        <form action="ubahpr_nilai1.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <label>Nis</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nis" class="form-control" maxlength="9" value="<?php echo $s['nis']?>" readonly>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6">
              <label>Iqra' 1-2-3</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="iqra_123" class="form-control"value="<?php echo $s['iqra_123']?>">
            </div>
          </div>

          <div  class="row">
            <div class="col-sm-6">
              <label>Hafalan Do'a</label>
            </div>
             <div class="col-sm-6">
            <input type="text" name="h_doa" class="form-control"value="<?php echo $s['h_doa']?>">
            </div>
          </div>


          <div  class="row">
            <div class="col-sm-6">
              <label>Hafalan Juz Amma</label>
            </div>
             <div class="col-sm-6">
            <input type="text" name="h_jus_am" class="form-control"value="<?php echo $s['h_jus_am']?>">
            </div>
          </div>

          <div  class="row">
            <div class="col-sm-6">
              <label>PAM</label>
            </div>
             <div class="col-sm-6">
            <input type="text" name="p_am" class="form-control"value="<?php echo $s['p_am']?>">
            </div>
          </div>


          <div  class="row">
            <div class="col-sm-6">
              <label>Tauhid</label>
            </div>
             <div class="col-sm-6">
            <input type="text" name="tauhid" class="form-control"value="<?php echo $s['tauhid']?>">
            </div>
          </div>
           
    <div class="row" >
      <div class="col-sm-6">
     <button  type="submit" class="btn btn-primary btn-block">Ubah Nilai Santri</button>
          </div>
            </div>
        </div>
    </form>
      </div>

</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>