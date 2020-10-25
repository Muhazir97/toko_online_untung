<div class="container-fluid">
  
    <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $barang; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pesanan; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pesanan Yang Sudah Bayar</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $sudah_bayar; ?></div>
                        </div>
                        
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Pesanan Yang Sudah Di Verifikasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sudah_kirim; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
            <!-- Begin Page Content -->
        <div class="container-fluid">

           <h1 align="center">Data Pesanan Yang Sudah Bayar</h1>                        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <form class="form-inline my-2 my-lg-0" form action="<?php echo site_url('admin/dashboard_admin/search');?>" method = "post" >
      <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari ID Invoice" aria-label="Search" required="">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
    </form>
          </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr bgcolor="#F0F8FF">
                        <th>ID INVOICE</th>
                        <th>NAMA PEMESAN</th>
                        <th>ALAMAT PENGIRIMAN</th>
                        <th>NO TLP</th>
                        <th>EMAIL</th>
                        <th>JASA KIRIM</th>
                        <th>KE BANK</th>
                        <th>TGL PEMESANAN</th>
                        <th>JUMLAH TRANSFER</th>
                        <th>BANK PENGIRIM</th>
                        <th>NAMA_PENGIRIM</th>
                        <th>BUKTI</th>
                        <th>AKSI</th>
                      </tr>
                          </thead>
                          <tbody>

                   <?php foreach ($pencarian as $inv) : ?>

                      <tr>
                          <td><?php echo $inv->id ?></td>
                          <td><?php echo $inv->nama ?></td>
                          <td><?php echo $inv->alamat ?></td>
                          <td><?php echo $inv->no_telephone ?></td>
                          <td><?php echo $inv->email ?></td>
                          <td><?php echo $inv->jasa ?></td>
                          <td><?php echo $inv->bank ?></td>
                          <td><?php echo date('d F Y H:i:s', strtotime($inv->tgl_pesan)); ?></td>
                          <td><?php echo $inv->jumlah_tranfer ?></td>
                          <td><?php echo $inv->ke_bank ?></td>
                          <td><?php echo $inv->nama_pengirim ?></td>
                          <td style="width: 10%;"><img src="<?php echo base_url(). '/upload/'.$inv->bukti ?>"class="card-img-top" alt="...">
                          </td>
                          <td><?php echo anchor('admin/dashboard_admin/detail/' .$inv->id, '<div href="" class="btn btn-primary" > Detail Pesanan</div>') ?>&nbsp;
                          <?php echo anchor('admin/dashboard_admin/resi/' .$inv->id, '<div href="" class="btn btn-success" >Konfirmasi</div>') ?>
                          </td>
                      </tr>
                              <?php endforeach; ?>
                      </tbody>  
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
</div>