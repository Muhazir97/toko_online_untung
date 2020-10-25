  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="printdataaset.php" target="printdataaset.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>  

           <h1 align="center">Data Pesanan <br><div class="btn btn-success">No Invoice : <?php echo $invoice->id ?>
             
           </div></h1>                        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
          </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr bgcolor="#F0F8FF">
                        <th>ID BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH PESANAN</th>
                        <th>HARGA SATUAN</th>
                        <th>SUBTOTAL</th>
                      </tr>
                          </thead>
                          <tbody>

                   <?php 
                      $total=0;
                      if(is_array($pesanan)): 
                      foreach ($pesanan as $psn): 
                               $subtotal = $psn->jumlah * $psn->harga;
                               $total += $subtotal;
                    ?>

                      <tr>
                          <td><?php echo $psn->id_brg ?></td>
                          <td><?php echo $psn->nama_brg ?></td>
                          <td><?php echo $psn->jumlah ?></td>
                          <td><?php echo number_format($psn->harga, 0, ',','.') ?></td>
                          <td><?php echo number_format($subtotal, 0, ',','.') ?></td>
                      </tr>
                              <?php endforeach; ?>
                              <?php endif; ?>
                 </tbody> 
                       <td colspan="4" rowspan="" headers="">TOTAL BELANJA</td>
                         <td colspan="" rowspan="" headers="">
                           Rp. <?php echo number_format($total, 0,',','.')  ?>
                         </td>   
                </table>

                <a href="<?php echo base_url('admin/dashboard_admin/index') ?>"><div class="btn btn-primary"><i class="fas fa-backward"></i> Kembali</div></a>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->