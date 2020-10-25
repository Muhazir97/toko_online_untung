  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <button class="btn  btn-primary mb-3 " data-toggle="modal" data-target="#print_barang"><i class="fas fa-print "></i> Generate Report </button>
          </div>  

           <h1 align="center">Data Pesanan</h1>                        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <form class="form-inline my-2 my-lg-0" form action="<?php echo site_url('admin/invoice/search');?>" method = "post" >
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
                        <th>NAMA PENGIRIM</th>
                        <th>STATUS VERIFIKASI</th>
                        <th>AKSI</th>
                      </tr>
                          </thead>
                          <tbody>

                   <?php foreach ($invoice as $inv) : ?>

                      <tr>
                          <td><?php echo $inv->id ?></td>
                          <td><?php echo $inv->nama ?></td>
                          <td><?php echo $inv->alamat ?></td>
                          <td><?php echo $inv->no_telephone ?></td>
                          <td><?php echo $inv->email ?></td>
                          <td><?php echo $inv->jasa ?></td>
                          <td><?php echo $inv->bank ?></td>
                          <td><?php echo date('d F Y H:i:s', strtotime($inv->tgl_pesan)); ?></td>
                          <td><?php echo number_format($inv->jumlah_tranfer, 0, ',','.') ?></td>
                          <td><?php echo $inv->ke_bank ?></td>
                          <td><?php echo $inv->nama_pengirim ?></td>
                          <td><?php echo $inv->status_konfirmasi ?></td>
                          <td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div href="" class="btn btn-primary" > Detail Pesanan</div>') ?>&nbsp;
                          <?php echo anchor('admin/dashboard_admin/resi/' .$inv->id, '<div href="" class="btn btn-success" >Konfirmasi</div>') ?>
                          </td>
                      </tr>
                              <?php endforeach; ?>
                      </tbody>  
                </table>
              </div>
            </div>
          </div>

          <!-- /.container-fluid --><!-- Modal print -->
<div class="modal" id="print_barang" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cetak Data Invoice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/invoice/print_invoice'?>" target="_blank" method="post" enctype="multipart/form-data" >
         <table>
           <tr>
            <td>
               <div class="form-group">Dari Tanggal</div>
            </td>
            <td align="center" width="5%">
              <div class="form-group">:</div>
            </td>
            <td class="form-group">
              <input type="date" name="tgl_awal" class="form-control" placeholder="Nama Barang" required> 
            </td>
          </tr>

          <tr>
            <td>
               <div class="form-group">Dari Tanggal</div>
            </td>
            <td align="center" width="">
              <div class="form-group">:</div>
            </td>
            <td class="form-group">
              <input type="date" name="tgl_akhir" class="form-control" placeholder="Nama Barang" required> 
            </td>
          </tr>
         </table>
        <br>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Print</button>
      </div>
      </form>
     </div>
    </div>
  </div>
</div>

        </div>
        <!-- /.container-fluid -->