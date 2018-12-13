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
                                            <div class="card-title">Tambah Data Slideshow</div>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="<?php echo base_url(). 'index.php/admin/Slideshow/create'; ?>" enctype="multipart/form-data">
                                            <!-- <div class="form-group">
                                                <label for="squareSelect">Nama Admin</label>
                                                <select class="form-control input-square" id="squareSelect" name="adminn">
                                                    <option>1</option>
                                                </select>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="pillInput">ID Admin</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan ID Admin" name="adminn">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Masukkan gambar
                                                </label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" accept="images/*">
                                            </div>                                         
                                        
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-success" type="submit" name="btnSubmit">Submit</button>
                                            <button class="btn btn-danger">Cancel</button>
                                        </div>
                                        </form>
                                </div>
                    </div>
<?php $this->load->view('admin/Sidebar/slideshow'); ?>