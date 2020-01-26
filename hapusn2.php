<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM tbl_nilai2 WHERE nis2=".$_GET['nis2']);
?>

<script>
	document.location = 'data_nilai2.php'
</script>
