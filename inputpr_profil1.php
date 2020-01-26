<?php  
include "koneksi.php";
$nis =$_POST['nis'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$simpan = "INSERT INTO tbl_kelas1 (nis,nama,umur,tgl,alamat,email) 
VALUES ('$nis','$nama','$umur','$tgl','$alamat','$email')";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='data_profil1.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
