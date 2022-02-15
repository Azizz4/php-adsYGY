<?php
require '../conn.php';

$keyword = $_GET["keyword"];

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


$booking = booking($ngab);
?>
<table border="1" cellpadding="10" cellspacing="0">
					<tr>
						<th>No.</th>
						<th>ID</th>
						<th>Time</th>
						<th>Penanggung</th>
						<th>No Telepon</th>
						<th>Kategori</th>
						<th>Kategori Ruang</th>
						<th>Check In</th>
						<th>Total</th>
						<th>Pembayaran</th>
						<th>aksi</th>
					</tr>

					<?php $i = 1; ?>
					<?php foreach ($booking as $row) :?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row["id"];?></td>
						<td><?php echo $row["time"];?></td>
						<td><?php echo $row["penanggung"];?></td>
						<td><?php echo $row["no_telepon"];?></td>
						<td><?php echo $row["kategori"];?></td>
						<td><?php echo $row["kategories_room"];?></td>
						<td><?php echo $row["check_in"];?></td>
						<td><?php echo $row["total"];?></td>
						<td><?php echo $row["pembayaran"];?></td>
						<td>
							<a href="update.php?id=<?= $row["id"]; ?>";>UPDATE</a>||
							<a href="deletebook.php?id=<?= $row["id"]; ?>" onclick="return confirm('benernichhh?');">DELETE</a>
						</td>
					</tr>
					<?php $i++; ?>
				<?php endforeach;?>
			</table>