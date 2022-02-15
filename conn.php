<?php
$koneksi = mysqli_connect("localhost", "root", "", "ads");

function booking($buking) {
	global $koneksi;
	$ngab = mysqli_query($koneksi, $buking);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($ngab) ) {
		$rows[] = $row;
	}
	return $rows;
}
function contact($kontak) {
	global $koneksi;
	$bang = mysqli_query($koneksi, $kontak);
	$njrot = [];
	while ( $tod = mysqli_fetch_assoc($bang) ) {
		$njrot[] = $tod;
	}
	return $njrot;
}

function hapusbuk($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM booking WHERE id = '$id' ");
	return mysqli_affected_rows($koneksi);
}

function hapuskon($pus){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM contact WHERE id = '$pus' ");
	return mysqli_affected_rows($koneksi);
}

function caringab($keyword){
	$ngab = "SELECT * FROM booking WHERE
				id LIKE '%$keyword%' OR
				penanggung LIKE '%$keyword%' OR 
				no_telepon LIKE '%$keyword%' OR
				kategori LIKE '%$keyword%' OR
				kategories_room LIKE '%$keyword%' OR
				check_in LIKE '%$keyword%' OR
				total LIKE '%$keyword%' OR
				pembayaran LIKE '%$keyword%'
				";

	return booking($ngab);
}
function caritod($keyword){
	$tod = "SELECT * FROM contact WHERE
				id LIKE '%$keyword%' OR
				name LIKE '%$keyword%' OR 
				email LIKE '%$keyword%' OR
				no_telepon LIKE '%$keyword%'";

	return contact($tod);
}
?>
