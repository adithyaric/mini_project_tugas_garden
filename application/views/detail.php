 
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Data Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Data akun</li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <hr>
  <section class="content">
    <div class="container-fluid">
      <table class="table table-bordered"> 
      <tr>
      <th>Username</th>
      <td><?php echo $detail->username; ?></td>
      </tr>
      <tr>
      <th>Email</th>
      <td><?php echo $detail->email; ?></td>
      </tr>
      <tr>
      <th>Password</th>
      <td><?php echo $detail->password; ?></td>
      </tr>
      <tr>
      <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="110">
      </td>
      <td></td>
      </tr>




      </table>
      <a href="<?php echo base_url(); ?>"class="btn btn-primary">Kembali</a>
    </div>
  </section>



