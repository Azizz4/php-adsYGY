<?php
require 'conn.php';

$id = $_GET["id"];
if ( hapusbuk($id) > 0)  {
	echo "
	<script>
		alert('data berhasil dihapus!');
		document.location.href = 'data_booking.php';
		</script>
	";
}else{
	echo "<script>
		alert('data gagal dihapus!');
		document.location.href = 'data_booking.php';
		</script>";
}
?>