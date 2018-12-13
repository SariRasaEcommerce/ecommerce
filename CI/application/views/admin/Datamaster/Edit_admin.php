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
                                        <div class="card-title">Form Edit Data Admin</div>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url(). 'index.php/admin/Data_admin/editaction'; ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control input-pill" id="pillInput" name="id" value="<?php echo $ID_ADMIN; ?>">
                                            <label for="pillInput">Nama Lengkap Admin</label>
                                            <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Nama Lengkap Admin" name="admin" value="<?php echo $NAMA_ADMIN; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pillInput">Alamat</label>
                                            <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Alamat Lengkap" name="alamat" value="<?php echo $ALAMAT; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pillInput">No. Telp</label>
                                            <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan No. Telp Anda" name="telp" value="<?php echo $NO_TELP; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pillInput">Email</label>
                                            <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Email Anda" name="email" value="<?php echo $EMAIL; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pillInput">Password</label>
                                            <input type="password" class="form-control input-pill" id="pillInput" placeholder="Masukkan Password Anda" name="pass" value="<?php echo $PASSWORD; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Masukkan gambar
                                            </label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" accept="images/*">
                                        </div>                                         
                                    
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success" type="submit" name="btnSubmit">Submit</button></form>
                                        <a href="<?php echo base_url() ?>index.php/admin/Data_admin"><button class="btn btn-danger">Cancel</button></a>
                                    </div>
                                    
                            </div>
                </div>
<?php $this->load->view('admin/Sidebar/dataadmin'); ?>