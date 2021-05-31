<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register') ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                         <?php echo form_error('nama','<span class="text-small text-danger">','</span>')?>
                    </div>
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username">
                        <?php echo form_error('username','<span class="text-small text-danger">','</span>')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                        <?php echo form_error('email','<span class="text-small text-danger">','</span>')?>
                  </div>
                  <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat">
                        <?php echo form_error('username','<span class="text-small text-danger">','</span>')?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="gender" class="d-block">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">--Pilih Gender--</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                        <?php echo form_error('gender','<span class="text-small text-danger">','</span>')?>
                    </div>
                    <div class="form-group col-6">
                      <label for="no_telp">No. Telp</label>
                      <input id="no_telp" type="text" class="form-control" name="no_telp">
                        <?php echo form_error('no_telp','<span class="text-small text-danger">','</span>')?>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                        <?php echo form_error('password','<span class="text-small text-danger">','</span>')?>
                    </div>

                  <!--<div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>-->

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                    <!--<div class="mt-3 mb-3 text-center">
                       <a >Already has an account?</a>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">
                      Login
                    </button>-->
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kelompok 1 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
