<?php  
include "koneksi.php";

$nis =$_POST['nis'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$update = "UPDATE tbl_kelas1 SET nis='$nis',nama='$nama',umur='$umur',tgl='$tgl',alamat='$alamat',Email='$email' where nis='$nis'";
mysqli_query($koneksi, $update);
if (mysqli_query($koneksi, $update)) {
	header("location:data_profil1.php");
}else{
	echo "eror gayn,". mysqli_error($koneksi);
}