<div class="container-fluid">
	
	<div class="card">
  <div class="card-header">
    <h5 class="card-title">Detail Barang</h5>
  </div>
  <div class="card-body">
    

    <?php foreach($barang as $brg): ?>
    <div class="row">
    	<div class="col-md-4">
    	<img src="<?php echo base_url(). '/upload/'. $brg->gambar ?>" class="card-img-top">	
    	</div>
    	<div class="col-md-8">
    		<table class="table">
    			<tr>
    				<td>Nama Barang</td>
    				<td><?php echo $brg->nama_brg ?></td>	
    			</tr>

    			<tr>
    				<td>Harga</td>
    				<td>Rp. <?php echo number_format($brg->harga,0,',','.')  ?></td>	
    			</tr>

    			<tr>
    				<td>Kategori</td>
    				<td><?php echo $brg->kategori ?></td>	
    			</tr>

    			<tr>
    				<td>Deskripsi</td>
    				<td><?php echo $brg->deskripsi ?></td>	
    			</tr>

    			<tr>
    				<td>Stock</td>
    				<td><?php echo $brg->stock ?></td>	
    			</tr>
    		</table>

<form class="cart" action="<?php echo base_url('etalase/tambah_ke_keranjang/' .$brg->id_brg)?>" method="post" enctype='multipart/form-data'>
        <div class="quantity">
    <input
      type="number"
      id="quantity_5e264fcf26e86"
      class="input-text qty text"
      step="1"
      min="1"
      max="<?php echo $brg->stock ?>"
      name="quantity"
      value="1"
      title="Qty"
      size="4"
      inputmode="numeric" />
      </div>

<br>
        <button type="submit" class="btn btn-success" onclick="Swal.fire('Oke','Berhasil Menambahkan Barang','success')">  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;<i class="fas fa-cart-plus" ></i> Beli &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
    		</form>
    	</div>
    	
    </div>
    <br>
    <br>
    

    <form action="<?php echo base_url(). 'etalase/tambah_komen'?>" method="post">
  <div class="form-group" style="width:40%">
    <label for="exampleInputEmail1">Nama <a style="color: red;">*</a></label>
    <input type="hidden" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Anda" name="id_brg"  value="<?php echo $brg->id_brg ?>" required="">
   

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Anda" name="nama" value="<?php echo $this->session->userdata('username'); ?>" readonly>
  </div>

  <div class="form-group" style="width:40%">
    <label for="exampleFormControlTextarea1">Komentar <a style="color: red;">*</a></label>
    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi Komentar" name="komentar" required=""></textarea>
  </div>
  
  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button type="submit" class="btn btn-primary">Komentar</button>
</form>
<br>
 <?php endforeach; ?>

    

<?php foreach ($komen as $kom ): ?> 
    <div class=" card mb-3" style="width:40%">
<div class="card"  >
  <div class="card-header" >
    <i class="fas fa-user-circle fa-2x"></i> <?php echo $kom->nama ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $kom->komentar ?></h5>
    <p class="card-text" align="right"><?php echo date('d F Y H:i:s', strtotime($kom->waktu));  ?></p>
   
  </div>
 
</div></div>
 <?php endforeach; ?>
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
<br>