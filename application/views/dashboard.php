<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Akun</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active"><a href="<?php echo base_url('dashboard/index'); ?>"></a>Data Akun</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<section class="content" >
  <div class="container-fluid">
      <?php echo $this->session->flashdata('message'); ?>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-user-plus"></i> Tambah Akun</button>

    <a class="btn btn-danger" target="blank" href="<?php echo base_url('dashboard/print'); ?>"><i class='fa fa-print'></i>Print</a>
    <a class="btn btn-warning" target="blank" href="<?php echo base_url('dashboard/pdf'); ?>"><i class='fa fa-file'></i>Print PDF</a>
    <a class="btn btn-success" target="blank" href="<?php echo base_url('dashboard/excel'); ?>"><i class='fa fa-table '></i>Print Excel</a>

      <hr>
      <table class ="table table-bordered table-striped ">
          <tr class="bg-success">
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>USERNAME</center></th>
            <th><center>EMAIL</center></th>
            <th colspan="3"><center>OPTION</center></th>
          </tr>
          <?php
            $no=1;
            foreach($akun as $akn): 
            ?>
            <tr>
              <td><center><?php echo $no++; ?></center></td>
              <td><center><?php echo $akn->foto; ?></center></td>
              <td><?php echo $akn->username; ?></td>
              <td><?php echo $akn->email; ?></td>
              <td><center><?php echo anchor('dashboard/detail/'.$akn->id,'<div class="btn btn-success bt-sm"><i class="fa fa-search-plus "></i></div>') ?></center></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><center><?php echo anchor('dashboard/hapus/'.$akn->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>' ) ?></center></td>
               <td><center><?php echo anchor ('dashboard/edit/'. $akn->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></center></td>
            </tr>
         <?php endforeach; ?>
        </table>
        
      </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <?php echo form_open_multipart('dashboard/tambah_aksi'); ?>
          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
          </div>
                  <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
       <?php echo form_close(); ?>
      </div>
      
    </div>
    </div>
  </div>