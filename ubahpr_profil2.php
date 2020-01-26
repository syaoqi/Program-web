<?php  
include "koneksi.php";

$nis =$_POST['nis2'];
$nama = $_POST['nama2'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$update = "UPDATE tbl_kelas2 SET nis2='$nis',nama2='$nama',umur='$umur',tgl='$tgl',alamat='$alamat',email='$email' where nis2='$nis'";
mysqli_query($koneksi, $update);
if (mysqli_query($koneksi, $update)) {
	header("location:data_profil2.php");
}else{
	echo "eror gayn,". mysqli_error($koneksi);
}