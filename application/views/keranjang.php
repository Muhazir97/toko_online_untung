<!-- Begin Page Content -->
        <div class="container">                        
          <h2 align="center">Keranjang Belanja Anda</h2>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                 <div>
                    <a href="<?php echo base_url('') ?>"> <div class=" btn btn-primary"><i class="fas fa-plus "></i> Belanja Lagi
                    </div></a> 
                  </div>
          </div>
<?php echo $this->session->flashdata('sukses') ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" >
                  <thead>
                     <tr bgcolor="#F0F8FF">
                        
                        <th>IMAGE</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH</th>
                        <th>HARGA</th>
                        <th>SUBTOTAL</th>
                        <th >AKSI</th>
                      </tr>
                          </thead>
                          <tbody>

                   <?php 
                      foreach ($this->cart->contents() as $items) : 
                      echo form_open(base_url('etalase/update_keranjang/' .$items['rowid']));
                   ?>
                
                      <tr>
                          
                          <td style="width: 10%;"><img src="<?php echo base_url(). '/upload/'.$items['gambar'] ?>" class="card-img-top" alt="..." >
                          </td>
                          <td><?php echo $items['name'] ?></td>
                          <td>
                              <input 
                                  type="number"
                                  id="quantity_5e264fcf26e86"
                                  class="input-text qty text"
                                  step="1"
                                  min="1"
                                  max="<?php echo $items['stock'] ?>"
                                  name="qty"
                                  value="<?php echo $items['qty'] ?>"
                                  title="Qty"
                                  size="4"
                                  inputmode="numeric" 
                               />
                          </td>
                          <td>Rp. <?php echo number_format($items['price'], 0,',','.')   ?></td>
                          <td>Rp. <?php echo number_format($items['subtotal'], 0,',','.')  ?></td>
                    
                          <td >
                               <button type="submit" class="btn btn-warning"><i class="fas fa-edit" ></i> Update</button>
                      

                            <a ><?php echo anchor('etalase/hapus_keranjang/' .$items['rowid'], '<div class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</div> ') ?> </a> 
                          </td>
                      </tr>

                        <?php 
                             echo form_close();
                            endforeach; 
                        ?>

                      <tr>
                         <td colspan="4" rowspan="" headers="">TOTAL BELANJA</td>
                         <td colspan="" rowspan="" headers="">
                           Rp. <?php echo number_format($this->cart->total(), 0,',','.')  ?>
                         </td>  
                      </tr>

                      

                      </tbody>  
                </table>
                    <div align="center">
                      <a href="<?php echo base_url('etalase/pembayaran') ?>"> <div class=" btn btn-success"><i class="far fa-hand-point-right"></i> Lanjut Ke Pembayaran </div></a><br><br>

                      <a href="<?php echo base_url('etalase/hapus_keranjang') ?>"> <div class=" btn btn-danger"><i class="fas fa-trash-alt"></i> Bersihkan Keranjang 
                    </div></a>
                    </div>
                    <br>

                  <div>
                    
                  </div>

              </div>
            </div>
          </div>

        </div>
         <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e1bbda027773e0d832d3073/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        <!-- /.container-fluid -->