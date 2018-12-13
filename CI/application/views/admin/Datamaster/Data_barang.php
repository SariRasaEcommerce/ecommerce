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
                            <div class="card-title">DATA BARANG</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <a href="<?php echo base_url() ?>index.php/admin/Data_barang/insert"><button class="btn btn-primary">Tambah Data Barang</button></a>
                                        <tr>
                                            <th>No</th>
                                            <th>Admin</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Berat</th>
                                            <th>Stok</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($data_barang as $barang) 
                                            {
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $barang -> ID_BARANG ?></td>
                                            <td><?php echo $barang -> ID_ADMIN ?></td>
                                            <td><?php echo $barang -> NAMA_BARANG ?></td>
                                            <td><?php echo $barang -> HARGA_BARANG ?></td>
                                            <td><?php echo $barang -> DESKRIPSI ?></td>
                                            <td><?php echo $barang -> BERAT ?></td>
                                            <td><?php echo $barang -> STOK ?></td>
                                            <td><img src="<?php echo base_url().$barang -> IMG ?>" width="100" height="70"></td>
                                            <td><a href="<?php echo base_url('index.php/admin/Data_barang/edit/'.$barang -> ID_BARANG) ?>"><button class="btn btn-primary">EDIT</button></a>
                                                <a href="<?php echo base_url('index.php/admin/Data_barang/hapus/'.$barang-> ID_BARANG) ?>" ><button class="btn btn-primary" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')">HAPUS</button></a></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php $this->load->view('admin/Sidebar/databarang'); ?>
<?php $this->load->view('admin/Home/Footer'); ?>