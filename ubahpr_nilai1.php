<?php  
include "koneksi.php";

$nis =$_POST['nis'];
$iqra_123 = $_POST['iqra_123'];
$h_doa = $_POST['h_doa'];
$h_jus_am = $_POST['h_jus_am'];
$p_am = $_POST['p_am'];
$tauhid = $_POST['tauhid'];



$update = "UPDATE tbl_nilai SET nis='$nis',iqra_123='$iqra_123',h_doa='$h_doa',h_jus_am='$h_jus_am',p_am='$p_am',tauhid='$tauhid' where nis='$nis'";
mysqli_query($koneksi, $update);
if (mysqli_query($koneksi, $update)) {
	header("location:data_nilai1.php");
}else{
	echo "eror gayn,". mysqli_error($koneksi);
}