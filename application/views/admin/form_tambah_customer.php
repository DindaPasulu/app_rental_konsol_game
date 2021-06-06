<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data Admin</h1>
        </div>
    </section>
    <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer') ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
                <?php echo form_error('nama','<span class="text-small text-danger">','</span>')?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <?php echo form_error('username','<span class="text-small text-danger">','</span>')?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email">
                <?php echo form_error('email','<span class="text-small text-danger">','</span>')?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
                <?php echo form_error('username','<span class="text-small text-danger">','</span>')?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender">
                    <option value="">--Pilih Gender--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('gender','<span class="text-small text-danger">','</span>')?>
            </div>
            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" name="no_telp" class="form-control">
                <?php echo form_error('no_telp','<span class="text-small text-danger">','</span>')?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?php echo form_error('password','<span class="text-small text-danger">','</span>')?>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary ml-4 mr-2">Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
    </form>
</div>