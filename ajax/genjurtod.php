<?php
require '../conn.php';

$keyword = $_GET["keyword"];

$tod = "SELECT * FROM contact WHERE
				id LIKE '%$keyword%' OR
				name LIKE '%$keyword%' OR 
				email LIKE '%$keyword%' OR
				no_telepon LIKE '%$keyword%'";

$kontak = contact($tod);
?>
<table border="1" cellpadding="10" cellspacing="0">
					<tr>
						<th>No.</th>
						<th>ID</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No Telepon</th>
						<th>Feedback</th>
						<th>Aksi</th>
					</tr>

					<?php $i = 1; ?>
					<?php foreach ($kontak as $row) :?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row["id"];?></td>
						<td><?php echo $row["name"];?></td>
						<td><?php echo $row["email"];?></td>
						<td><?php echo $row["no_telepon"];?></td>
						<td><?php echo $row["feedback"];?></td>
						<td>
							<a href="deletecon.php?id=<?=$row["id"]; ?> " onclick="return confirm('benernichhh?');">DELETE</a>
						</td>
					</tr>
					<?php $i++; ?>
				<?php endforeach;?>
			</table>