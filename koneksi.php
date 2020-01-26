<?php
  $koneksi = mysqli_connect("localhost","root","","db_pendaftarantpq");
  if (!$koneksi) {
  	echo " koneksi gagal : ".mysqli_connect_error;

  }
  