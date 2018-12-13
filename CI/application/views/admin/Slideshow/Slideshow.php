  <?php $this->load->view('admin/Home/js'); ?>
  <?php $this->load->view('admin/Home/Main_header'); ?>
  <div class="main-panel">
    <div class="content">
<div class="container-fluid">
      <h4 class="page-title">Data Slideshow</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Data Slideshow</div>
                        </div>
        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <a href="<?php echo base_url() ?>index.php/admin/Slideshow/insert"><button class="btn btn-primary">Tambah Slideshow</button></a>
                                        <tr>
                                            <th>No. ID</th>
                                            <th>Admin</th>
                                            <th>Slideshow</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($data_slideshow as $slideshow) 
                                            {
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $slideshow -> ID_SLIDE ?></td>
                                            <td><?php echo $slideshow -> ID_ADMIN ?></td>
                                            <td><img src="<?php echo base_url().$slideshow -> IMG ?>" width="100" height="100"></td>
                                            <td><a href="<?php echo base_url('index.php/admin/Slideshow/edit/'.$slideshow -> ID_SLIDE) ?>"><button class="btn btn-primary">EDIT</button></a>
                                                <a href="<?php echo base_url('index.php/admin/Slideshow/hapus/'.$slideshow-> ID_SLIDE) ?>" ><button class="btn btn-primary" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')">HAPUS</button></a></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>
<?php $this->load->view('admin/Sidebar/slideshow'); ?>

<!-- <a class="btn btn-success" onclick="return confirm('Anda ingin untuk mengubah data ?')" href="./?page=update_slideshow&id=<?php echo $slideshow -> kd_slideshow; ?>" > <i class="fa fa-edit" style="color: #fff" ></i> </a >  -->