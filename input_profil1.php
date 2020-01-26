<!DOCTYPE html>
  <html>
    <head>
    <title>Input Profil Kelas I</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="styleinput.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand " href="#"><b>TPQ</b></a>
  <a class="navbar-brand btn btn-light">Input Profil Kelas I</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class="btn btn-warning" href="data_profil1.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>    
<div class="container">
    <div class="jumbotron" >
      <div  class="col-sm-6">
        <p><form action="inputpr_profil1.php" method="POST"></p>

          <div class="row">
            <div class="col-sm-6">
              <label>nis</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nis" class="form-control" maxlength="9">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control">
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Umur</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="umur" class="form-control">
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Tanggal Lahir</label>
            </div>
            <div class="col-sm-6">
              <input type="date" name="tgl" class="form-control">
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control"></textarea>
            </div>
          </div>
           
           
          <div class="row">
            <div class="col-sm-6">
              <label>Email</label>
            </div>
            <div class="col-sm-6">
              <input type="email" name="email" class="form-control">
            </div>
          </div>
    <div class="row" >
      <div class="col-sm-6">
     <button  type="submit" class="btn btn-primary btn-block">Tambahkan</button>
     <button  type="reset" class="btn btn-danger btn-block">reset</button>
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