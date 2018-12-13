  <?php $this->load->view('admin/Home/js'); ?>
  <?php $this->load->view('admin/Home/Main_header'); ?>
  <div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Pemesanan</h4>
            <h4 class="page-title">Data Pemesanan</h4>
            <div class="row">
                <div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Data Pemesanan</div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
                      <th>No. ID</th>
                      <th>Nama</th>
                      <th>No. Telp</th>
                      <th>Tanggal Order</th>
                      <th>Detail Alamat</th>
                      <th>Status</th>
                      <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php 
              $no = 1;
              foreach ($data_transaksi as $transaksi) 
              {
            ?>

            <tr>
               <td> <?php echo $transaksi -> ID_DETAILTRANSAKSI ?> </td>
                    <td> <?php echo $transaksi -> NAMA_PEL; ?> </td>
                    <td> <?php echo $transaksi -> NO_TELP; ?> </td>
                    <td> <?php echo date("d F Y", strtotime($transaksi -> TGL_TRANSAKSI)); ?> </td>
                    <td> <?php echo $transaksi -> ALAMAT_PEL; ?> </td>
                    <td>aa</td>
                    <td><a href="#">
                      <a href="#"><button class="btn btn-primary">DIKEMAS</button></a>
                      <a href="#"><button class="btn btn-primary">DIKIRIM</button></a>
                      <a href="#"><button class="btn btn-primary">LIHAT</button></a>
                    </td>
            </tr>

            <?php

              }

            ?>

          </tbody>

        </table>

      </div>

    </div>
  </div>
  <?php $this->load->view('admin/Sidebar/datapemesanan'); ?>
  <?php $this->load->view('admin/Home/Footer'); ?>