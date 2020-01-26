<?php  
include "koneksi.php";
$nis2 =$_POST['nis2'];
$iqra_456 = $_POST['iqra_456'];
$h_doa = $_POST['h_doa'];
$h_jus_am = $_POST['h_jus_am'];
$p_am = $_POST['p_am'];
$tauhid = $_POST['tauhid'];

$simpan = "INSERT INTO tbl_nilai2 (nis2,iqra_456,h_doa,h_jus_am,p_am,tauhid) 
VALUES ('$nis2','$iqra_456','$h_doa','$h_jus_am','$p_am','$tauhid')";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='data_nilai2.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
