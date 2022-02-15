<?php
require 'conn.php';

$tod = $_GET["id"];
if ( hapuskon($tod) > 0)  {
	echo "
	<script>
		alert('data berhasil dihapus!');
		document.location.href = 'data_contact.php';
		</script>
	";
}else{
	echo "<script>
		alert('data gagal dihapus!');
		document.location.href = 'data_contact.php';
		</script>";
}
?>