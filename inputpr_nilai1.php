<?php  
include "koneksi.php";
$nis =$_POST['nis'];
$iqra_123 = $_POST['iqra_123'];
$h_doa = $_POST['h_doa'];
$h_juz_am = $_POST['h_jus_am'];
$p_am = $_POST['p_am'];
$tauhid = $_POST['tauhid'];

$simpan = "INSERT INTO tbl_nilai (nis,iqra_123,h_doa,h_jus_am,p_am,tauhid) 
VALUES ('$nis','$iqra_123','$h_doa','$h_juz_am','$p_am','$tauhid')";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='data_nilai1.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
