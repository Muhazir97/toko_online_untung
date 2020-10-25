<div class="container-fluid">
      <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                  <h1 align="center">KONFIRMASI PEMBAYARAN</h1>
               
                  <?php foreach ($pencarian as $brg ): ?>
                        <div align="center">
                        <div class="btn btn-info" align="">
                              Kode Invoice : <h2> <?php echo $brg->kode_invoice ?></h2>
                        </div>
                  </div>
                  <br>
      <form action="<?php echo base_url(). 'konfirmasi_pembayaran/update' ?>" method="post" enctype="multipart/form-data">
             	

                 <div class="form-group">
             		<label>Jumlah Transfer <a style="color: red;">*</a></label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id?>">
                <input type="hidden" name="status_konfirmasi" class="form-control" value="Sudah Transfer">
             		<input type="text" name="jumlah_tranfer" placeholder="Jumlah Transfer" class="form-control" value="<?php echo $brg->jumlah_tranfer ?>" required>
             	</div>

                  <div class="form-group">
                        <label>Masukkan Nama Bank Pengirim <a style="color: red;">*</a></label>
                        <input type="text" name="ke_bank" placeholder="Masukkan Nama Bank Pengirim" class="form-control" value="<?php echo $brg->ke_bank ?>" required>
                  </div>
 
             	<div class="form-group">
             		<label>Rekening Anda A/N <a style="color: red;">*</a></label>
             		<input type="text" name="nama_pengirim" placeholder="Masukan Nama Rekening Pengirim" class="form-control" value="<?php echo $brg->nama_pengirim ?>" required>
             	</div>

              <div class="form-group">
                <label>Upload Bukti Transfer <a style="color: red;">*</a></label>
                <input type="file" name="bukti" placeholder="Upload Bukti Transfer" class="form-control" value="<?php echo $brg->bukti ?>" required>
              </div>
               <br>

              <div align="center">
                    <button type="submit" class="btn btn-success mb-3">Konfirmasi Pembayaran</button>
              </div> 
                      <?php endforeach; ?>
             </form>

             <div class="col-md-2"></div>
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
<br><br><br><br><br>