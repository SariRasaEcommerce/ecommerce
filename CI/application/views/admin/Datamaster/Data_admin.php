  <?php $this->load->view('admin/Home/js'); ?>
  <?php $this->load->view('admin/Home/Main_header'); ?>
  <div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Data Admin</h4>
            <div class="row">
                <div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Data Admin</div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <a href="<?php echo base_url() ?>index.php/admin/Data_admin/insert"><button class="btn btn-primary">Tambah Data Admin</button></a>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Alamat</th>
              <th>No. Telp</th>
              <th>Email</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no = 1;
              foreach ($data_admin as $admin) 
              {
            ?>
            <tr>
              <th scope="row"><?php echo $admin -> ID_ADMIN ?></th>
              <td><?php echo $admin -> NAMA_ADMIN ?></td>
              <td><?php echo $admin -> ALAMAT ?></td>
              <td><?php echo $admin -> NO_TELP ?></td>
              <td><?php echo $admin -> EMAIL ?></td>
              <td><img src="<?php echo base_url().$admin -> IMG ?>" width="100" height="100"></td>
              <td><a href="<?php echo base_url('index.php/admin/Data_admin/edit/'.$admin -> ID_ADMIN) ?>">
                  <button class="btn btn-primary">EDIT</button></a>
                  <a href="<?php echo base_url('index.php/admin/Data_admin/hapus/'.$admin-> ID_ADMIN) ?>">
                  <button class="btn btn-primary" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')">HAPUS</button></a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php $this->load->view('admin/Sidebar/dataadmin'); ?>