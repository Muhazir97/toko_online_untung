
<body style="background-color: #87CEFA;">

  <div class="container">
<br>
<br>
    <div class="card o-hidden border-0 shadow-lg col-lg-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <img src=" <?php echo base_url('assets/img/TOU.png') ?>" width="100" height="130">
              </div>
<br>
              <form method="post" action=" <?php echo base_url('registrasi/index') ?> " class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama" name="nama" required>
                </div>
               
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" name="username" required="">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required=""> 

                   
                  </div>

                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password2" required="" >
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
              
                
              </form>
              <hr>
              
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Udah Punya Akun ?, Silahkan Login !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<br>
<br>
<br>


</html>
