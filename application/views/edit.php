<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Edit Data Akun</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<div class="content">
	<section class="container-fluid">
		<?php foreach ($akun as $akn) ?>
		<form action="<?php echo base_url() . 'dashboard/update'; ?>" method="post">
			<div class="form-group col-md-6">
				<label>Username</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $akn->id; ?>">
				<input type="text" name="username" class="form-control" value="<?php echo $akn->username; ?>">
			</div>
			<div class="form-group col-md-6">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $akn->email; ?>">
			</div>
			<div class="form-group col-md-6">
				<label>Password</label>
				<input type="text" name="password" class="form-control" value="<?php echo $akn->password; ?>">
			</div>

			<button type="reset" class="btn-danger">Reset</button>
			<button type="submit" class="btn-primary">Simpan</button>
		</form>
	</section>
</div>
