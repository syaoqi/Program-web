<?php  
include "koneksi.php";
$nis2 =$_POST['nis2'];
$nama2 = $_POST['nama2'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$simpan = "INSERT INTO tbl_kelas2 (nis2,nama2,umur,tgl,alamat,email) 
VALUES ('$nis2','$nama2','$umur','$tgl','$alamat','$email')";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='data_profil2.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
