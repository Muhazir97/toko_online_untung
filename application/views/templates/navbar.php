<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark " style="background-color: #DCDCDC;">
  <div class="container">

    <ul class="navbar-nav ">
      <li class="nav-item active">
        <?php 
             $keranjang = '<i class="fas fa-cart-plus fa-2x" ></i> '.$this->cart->total_items(). '&nbsp;items'
        ?>
        <?php echo anchor ('etalase/detail_keranjang', $keranjang ) ?>
      </li>
    </ul>

    <ul  class="navbar-nav navbar-center">
      <div><a style="color: white;">Selamat Datang <?php echo $this->session->userdata('username') ?> </a></div>
    </ul>

<!-- Topbar Search -->
     <ul class="navbar-nav navbar-right">
          <form action="<?php echo site_url('kategori/search');?>" method = "post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="cari" placeholder="Cari Barang" >
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
    
          <!-- Topbar Navbar -->
          
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" action="<?php echo site_url('kategori/search');?>" method = "post">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2" name="cari" placeholder="Cari Barang" required="">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          </ul>
    </div>
</nav>
<br><br>

    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #87CEFA;">

    	
  <a class="navbar-brand" href="<?php echo base_url('') ?>">
 <img src=" <?php echo base_url('assets/img/TOU.png') ?>" width="50" height="50">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('') ?>">Branda <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('konfirmasi_pembayaran/index') ?>" >Konfirmasi Pembayaran <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=" <?php echo base_url('kategori/Komputer') ?>">Komputer dan Aksesoris</a>
          <a class="dropdown-item" href=" <?php echo base_url('kategori/fashion') ?>">Fashion</a>
          <a class="dropdown-item" href=" <?php echo base_url('kategori/olahraga') ?>">Olahraga</a>
          <a class="dropdown-item" href=" <?php echo base_url('kategori/otomotif') ?>">Otomotif</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tracking Barang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=" https://www.jne.co.id/en/tracking/trace" target="_blank">JNE</a>
          <a class="dropdown-item" href=" https://www.ninjaxpress.co/id-id/tracking" target="_blank">NINJA</a>
          <a class="dropdown-item" href=" https://www.tiki.id/id/tracking" target="_blank">TIKI</a>
          <a class="dropdown-item" href=" http://www.jet.co.id/track" target="_blank">JNT</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      
    </ul>

  <ul class="navbar-nav navbar-right">
         <?php if($this->session->userdata('username')) {?>
     
      <li class="btn btn-warning " ><?php echo anchor('auth/logout' , 'Logout')?></li>
          <?php }else { ?>
      <li  class="btn btn-warning "><?php echo anchor('auth/login', 'Login')?></li>
          <?php } ?>

    </ul>
  </div>
  
</nav>

<br>