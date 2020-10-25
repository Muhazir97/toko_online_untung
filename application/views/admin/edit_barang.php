<div class="container-fluid">
	
     <h3 align="center">EDIT BARANG</h3>

    <?php foreach ($barang as $brg) : ?>

    	<form action="<?php echo base_url(). 'admin/data_barang/update' ?>" method="post">

    		<div class="for-group">
    			<label>Nama Barang</label>
        		<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg?>" required>		
    		</div>

    		<div class="for-group">
    			<label>Harga</label>
    			<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg?>">
        		<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>" required>		
    		</div>

    		<div class="for-group">
    			<label>Kategori</label>
        		<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>" required>		
    		</div>

    		<div class="for-group">
    			<label>Deskripsi</label>
        		<input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi?>"required>		
    		</div>

    		<div class="for-group">
    			<label>Stock</label>
        		<input type="text" name="stock" class="form-control" value="<?php echo $brg->stock?>" required>		
    		</div>
            
            <div align="center">
    		<button type="submit" class="btn btn-primary mt-3" > Simpan</button>
    		</div>
    		
    	</form>

    <?php endforeach; ?>

</div>
<br>