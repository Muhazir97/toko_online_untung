
<body style="background-color: #87CEFA;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src=" <?php echo base_url('assets/img/TOU.png') ?>" width="100" height="130">
                  </div>
                   <br>
                   <?php echo $this->session->flashdata('pesan') ?>

                  <form method="post" action=" <?php echo base_url('auth/login') ?> " class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" required="">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required="">
                    </div>
                    <div align="center">
                    <button style="width: 40%;" type="submit" class="btn btn-primary form-control" >
                     Login                      
                    </button>
                  </div>
                    
                  </form>
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('registrasi/index'); ?>">Masi belum punya akun bro? Daftar di sini !!!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 </div>
      

    </div>

  </div>

</html>
