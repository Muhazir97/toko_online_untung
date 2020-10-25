<div class="container-fluid">
      <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                  <h1 align="center">KONFIRMASI PELANGGAN</h1>
               
                  <?php foreach ($resi as $brg ): ?>
                        
                  <br>
      <form action="<?php echo base_url(). 'email/update_resi' ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id?>">
                <input type="hidden" name="email" class="form-control" value="<?php echo $brg->email?>">
              </div>

              <div class="form-group">
                <label>Pilih Status Konfirmasi <a style="color: red;">*</a></label>
                <select name="status_konfirmasi" class="form-control" required>
                  <option value="">Pilih Status Konfirmasi</option>
                  <option value="Sudah Dikirim">Sudah Dikirim</option>
                  <option value="Pembayaran Salah">Pembayaran Salah</option>
                </select>
              </div>

              <div class="form-group">
                <label>Konfirmasi Pelanggan<a style="color: red;">*</a></label>
                <textarea name="informasi" class="form-control" value="<?php echo $brg->ke_bank ?>" required></textarea>
              </div>

              <div align="center">
                    <button type="submit" class="btn btn-success mb-3">Konfirmasi Pelanggan</button>
              </div> 
                      <?php endforeach; ?>
             </form>

             <div class="col-md-2"></div>
              </div>          
      </div>
</div>
<br><br><br><br><br>