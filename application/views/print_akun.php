<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<table class="tabel-bordered">
		<tr>
			<th>NO</th>
			<th>FOTO</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
		</tr>
		<?php
		$no = 1;
		foreach ($akun as $akn) :
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $akn->foto; ?></td>
				<td><?php echo $akn->username; ?></td>
				<td><?php echo $akn->email; ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>
