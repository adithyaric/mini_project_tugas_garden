<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data Table</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="breadcrumb-item active"><a href="<?php echo base_url('dashboard/grafik'); ?>"></a>Data Table</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<section class="content">
	<div class="container-fluid">
		<table class="table table-bordered table-striped ">
			<tr class="bg-success">
				<th>
					<center>NO</center>
				</th>
				<th>
					<center>Suhu C</center>
				</th>
				<th>
					<center>Suhu F</center>
				</th>
				<th>
					<center>RH</center>
				</th>
				<th>
					<center>Soil</center>
				</th>
			</tr>
			<?php
			$no = 1;
			foreach ($datas as $data) :
			?>
				<tr>
					<td>
						<center><?php echo $no++; ?></center>
					</td>
					<td><?php echo $data->suhuc; ?></td>
					<td><?php echo $data->suhuf; ?></td>
					<td><?php echo $data->lembab; ?></td>
					<td><?php echo $data->soil; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>

	</div>
</section>
