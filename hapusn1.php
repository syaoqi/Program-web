<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM tbl_nilai WHERE nis=".$_GET['nis']);
?>

<script>
	document.location = 'data_nilai1.php'
</script>
