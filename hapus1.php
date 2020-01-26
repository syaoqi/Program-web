<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM tbl_kelas1 WHERE nis=".$_GET['nis']);
?>

<script>
	document.location = 'data_profil1.php'
</script>
