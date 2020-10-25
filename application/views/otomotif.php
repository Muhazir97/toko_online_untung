<br>
<style>
  .card:hover {
    box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
    transform:scale(1.04) ;
}
</style>
<div class="container" align="center">
<div class="container-fluid">
      <div class="row">

        <?php foreach ($otomotif as $brg ): ?>
        <dvi class="col-xs ml-4 row" >
          <div  class=" card mb-3"  style="width: 13rem;">
            <img src="<?php echo base_url(). '/upload/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title m-1"><?php echo $brg->nama_brg ?></h5>
              <p class="card-text">Rp. <?php echo number_format( $brg->harga, 0,',','.' )?></p>
              
               <form class="cart" action="<?php echo base_url('etalase/tambah_ke_keranjang/' .$brg->id_brg)?>" method="post" enctype='multipart/form-data'>
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

              <button type="submit" class="btn btn-success" onclick="Swal.fire('Oke','Berhasil Menambahkan Barang','success')"><i class="fas fa-cart-plus" ></i> Beli</button>
            </form><br>

              <?php echo anchor('welcome/detail/' .$brg->id_brg, '<div class="btn btn-info"><i class="fas fa-search" ></i> Detail</div>  ') ?>

              
            </div>
          </div>
        </dvi>
       
       <?php endforeach; ?>

      </div>
    </div>
  </div>
         <br>
    
  </body>
  <br>
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
  
  