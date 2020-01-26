<?php  
include "koneksi.php";
$nis2 =$_POST['nis2'];
$iqra_456 = $_POST['iqra_456'];
$h_doa = $_POST['h_doa'];
$h_jus_am = $_POST['h_jus_am'];
$p_am = $_POST['p_am'];
$tauhid = $_POST['tauhid'];


$update = "UPDATE tbl_nilai2 SET nis2='$nis2',iqra_456='$iqra_456',h_doa='$h_doa',h_jus_am='$h_jus_am',p_am='$p_am',tauhid='$tauhid' where nis2='$nis2'";
mysqli_query($koneksi, $update);
if (mysqli_query($koneksi, $update)) {
	header("location:data_nilai2.php");
}else{
	echo "eror gayn,". mysqli_error($koneksi);
}