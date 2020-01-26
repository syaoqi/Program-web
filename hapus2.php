<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM tbl_kelas2 WHERE nis2=".$_GET['nis2']);
?>

<script>
	document.location = 'data_profil2.php'
</script>
