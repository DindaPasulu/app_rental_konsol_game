<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Game Type</h1>
        </div>
    </div>

    <a class="btn btn-primary mb-4" href="<?php echo base_url('admin/data_type/tambah_type') ?>">
        Tambah Game Type</a>

    <?php echo $this->session->flashdata('message') ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; 
            foreach($type as $tp): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tp->kode_type ?></td>
                    <td><?php echo $tp->nama_type ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('update_type'.$tp->id_type) ?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url('delete_type'.$tp->id_type) ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>