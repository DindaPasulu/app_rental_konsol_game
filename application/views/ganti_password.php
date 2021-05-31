<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary">
              <div class="card-header"><h4>Change Password</h4></div>

              <span class="m-2"><?php echo $this->session->flashdata('message') ?></span>
              <div class="card-body">
              <form method="POST" action="<?php echo base_url('auth/ganti_password_aksi/')?>" >
                <div class="form-group">
                    <label for="new_pass">New Password</label>
                    <input id="new_pass" type="password" class="form-control" name="new_pass" tabindex="1" required autofocus>
                    <?php echo form_error('new_pass','<span class="text-small text-danger">','</span>')?>
                </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="confirm_pass" class="control-label">Confirm Password</label>
                        <input id="confirm_pass" type="password" class="form-control" name="confirm_pass" tabindex="1" required autofocus>
                        <?php echo form_error('confirm_pass','<span class="text-small text-danger">','</span>')?>
                    </div>
                  </div>

                  <!--<div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>-->

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Change Password
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kelompok 1
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>