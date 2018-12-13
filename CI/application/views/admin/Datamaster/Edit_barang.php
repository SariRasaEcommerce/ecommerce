<?php $this->load->view('admin/Home/js'); ?>
<?php $this->load->view('admin/Home/Main_header'); ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
                <h4 class="page-title">Data Barang</h4>
            <div class="row">
                <div class="col-md-12">
                        <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Form Tambah Data Barang</div>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="<?php echo base_url(). 'index.php/admin/Data_barang/editaction'; ?>" enctype="multipart/form-data">
                                            <!-- <div class="form-group">
                                                <label for="squareSelect">Nama Admin</label>
                                                <select class="form-control input-square" id="squareSelect" name="adminn">
                                                    <option>1</option>
                                                </select>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="pillInput">Nama Admin</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Nama Barang" name="adminn" value="<?php echo $ID_ADMIN; ?>">
                                                <input type="hidden" class="form-control input-pill" id="pillInput" placeholder="Masukkan Nama Barang" name="id" value="<?php echo $ID_BARANG; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Barang</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Nama Barang" name="nama_brg" value="<?php echo $NAMA_BARANG; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Harga</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Harga" name="hrg" value="<?php echo $HARGA_BARANG; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Deskripsi</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Deskripsi" name="des" value="<?php echo $DESKRIPSI; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Berat</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Berat" name="brt" value="<?php echo $BERAT; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Stok</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Stok" name="stokk"  value="<?php echo $STOK; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Masukkan gambar
                                                </label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" accept="images/*">
                                            </div>                                         
                                        
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-success" type="submit" name="btnSubmit">Submit</button>
                                        </form>
                                            <a href="<?php echo base_url() ?>index.php/admin/Data_barang">
                                                <button class="btn btn-danger">Cancel</button></a>
                                        </div>
                                </div>
                    </div>
<?php $this->load->view('admin/Sidebar/databarang'); ?>
<?php $this->load->view('admin/Home/Footer'); ?>