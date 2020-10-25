

  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <button class="btn  btn-primary mb-3 " data-toggle="modal" data-target="#print_barang"><i class="fas fa-print "></i> Generate Report </button>
          </div>  

        <h1 align="center">Data Barang</h1>
           
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
          <button class="btn  btn-primary mb-3 " data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus "></i> Tambah Barang </button>

          <form class="form-inline my-2 my-lg-0" form action="<?php echo site_url('admin/data_barang/search');?>"    method = "post" >
              <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Barang"          aria-label="Search" required="">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>

          </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr bgcolor="#F0F8FF">
                        <th>NO</th>
                        <th>IMG BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>HARGA</th>
                        <th>KATEGORI</th>
                        <th>DESKRIPSI</th>
                        <th>STOCK</th>
                        <th>TGL POST</th>
                        <th >AKSI</th>
                      </tr>
                          </thead>
                          <tbody>

                   <?php 
                      $no=1;
                      foreach ($pencarian as $brg) : 
                   ?>
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td style="width: 10%;"><img src="<?php echo base_url(). '/upload/'.$brg->gambar ?>"class="card-img-top" alt="...">
                          </td>
                          <td><?php echo $brg->nama_brg ?></td>
                          <td><?php echo number_format($brg->harga, 0, ',','.') ?></td>
                          <td><?php echo $brg->kategori ?></td>
                          <td><?php echo $brg->deskripsi ?></td>
                          <td><?php echo $brg->stock ?></td>
                          <td><?php echo date('d F Y H:i:s', strtotime($brg->tgl_post)); ?></td>
                          <td colspan="2"> <?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div href="" class="btn btn-info" ><i class="fas fa-edit"></i> Update</div>') ?>&nbsp;
                          
                          <a onclick="return confirm('Yakin anda akan menghapus data ini ?')"> <?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div href="" class="btn btn-danger " > <i class="fas fa-trash-alt"></i> Hapus</div>' )  ?></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                      </tbody>  
                </table>
              </div>
            </div>
          </div>

        </div>
        
        <!-- /.container-fluid --><!-- Modal print -->
<div class="modal" id="print_barang" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cetak Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/print_barang'?>" target="_blank" method="post" enctype="multipart/form-data" >
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

<!-- Modal  tambah-->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" placeholder="Nama Barang" required> 
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" required>  
          </div>

          <div class="form-group">
                <label>Pilih Kategori</label>
                <select name="kategori" class="form-control" required>
                  <option value="">--- Pilih Kategori ---</option>
                  <option value="KOMPUTER DAN AKSESORIS">KOMPUTER DAN AKSESORIS</option>
                  <option value="FASHION">FASHION</option>
                  <option value="OLAHRAGA">OLAHRAGA</option>
                  <option value="OTOMOTIF">OTOMOTIF</option>
                </select>
          </div>

          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" required>  
          </div>

          <div class="form-group">
            <label>Stock</label>
            <input type="text" name="stock" class="form-control" placeholder="Stock" required>  
          </div>

          <div class="form-group">
            <label>Gambar Barang</label>
            <input type="file" name="gambar" class="form-control" placeholder="Nama Barang" required> 
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Barang</button>
      </div>
      </form>
    </div>


</div>
  </div>
</div>