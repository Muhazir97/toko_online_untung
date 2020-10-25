<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
                  <div align="center">
                        <h3> Masukan Alamat Pengiriman dan Metode Pembayaran</h3><br>
			<div class="btn btn-info">
				<?php 
				   $grand_total = 0;
				   if ($keranjang =$this->cart->contents())
				   {
				   	foreach ($keranjang as $items)
				   	{
				   		$grand_total = $grand_total + $items['subtotal'];
				   	}
				   	   echo "<h4> Total Belanja Anda Rp. " .number_format($grand_total, 0, ',','.');
				    ?>
			</div>
            </div>
			<br>
		    

             

             <form action="<?php echo base_url() ?>email" method="post" enctype="multipart/form>
             	<?php echo form_open(base_url('etalase/proses_pesanan'));
                  $kode_transaksi = ('TOU-').strtoupper(random_string('alnum',5));
                   ?>
                  
                  <div class="form-group">    
                        <input type="hidden" name="kode_invoice" placeholder="Nama Lengkap" class="form-control" value=" <?php echo $kode_transaksi ?>" readonly required>
                  </div>

             	<div class="form-group">
             		<label>Nama Lengkap <a style="color: red;">*</a></label>
             		<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required>
             	</div>

             	<div class="form-group">
             		<label>Alamat <a style="color: red;">*</a></label>
             		<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" required>
             	</div>

             	<div class="form-group">
             		<label>No Telephone <a style="color: red;">*</a></label>
             		<input type="number" name="no_telephone" placeholder="No Telephone" class="form-control" required>
             	</div>

                  <div class="form-group">
                        <label>Email <a style="color: red;">*</a></label>
                        <input type="text" name="email" placeholder="Email" class="form-control" required>
                  </div>

             	<div class="form-group">
             		<label>Pilih Jasa Pengiriman <a style="color: red;">*</a></label>
             		<select name="jasa" class="form-control" required>
             			<option value="">Pilih Jasa Pengiriman</option>
             			<option value="JNE">JNE</option>
             			<option value="NINJA">NINJA</option>
             			<option value="TIKI">TIKI</option>
                              <option value="JNT">JNT</option>
             		</select>
             	</div>

             	<div class="form-group">
             		<label>Pilih Bank <a style="color: red;">*</a></label>
             		<select name="bank" class="form-control" required>
             			<option value="">Pilih Bank</option>
             			<option value="BCA - 0976566455">BCA - 0976566455</option>
             			<option value="BNI - 6758545665">BNI - 6758545665</option>
             			<option value="BRI SYARIAH - 09875644563">BRI SYARIAH - 09875644563</option>
             		</select>
             	</div>
                  <div align="center">
             	<button type="submit" class="btn btn-success mb-3">&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;Pesan &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
                  </div>
             </form>
          <?php 
             } else {
             	echo "<h5>Keranjang Belanja Anda Masih Kosong!!!";
             }
           ?>

		</div>
		<div class="col-md-2"></div>
				
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
<br>
<br><br>