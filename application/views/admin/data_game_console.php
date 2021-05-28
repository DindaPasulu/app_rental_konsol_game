<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Game Console</h1>
        </div>

        <a href="<?php echo base_url('admin/data_game_console/tambah_game')?>" class="btn btn-primary mb-4">Tambah Data</a>
        
        <!--menampilkan pesan 'Data telah ditambahkan'-->
        <?php echo $this->session->flashdata('message'); ?>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Series</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($game_console as $gc) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td>
                                <img width="60px" src="<?php echo base_url(). 
                                'uploaded_image'.$gc->gambar ?>">
                            </td>
                            <td><?php echo $gc->kode_type ?></td>
                            <td><?php echo $gc->merk ?></td>
                            <td><?php echo $gc->series ?></td>
                            <td><?php 
                            if($gc->status == "0"){
                                echo "<span class='badge badge-danger'>Tidak Tersedia </span>";
                            }else{
                                echo "<span class='badge badge-primary'>Tersedia </span>";
                            }
                            ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/data_game_console/detail_game/'
                                    ).$gc->id_gc ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo base_url('admin/data_game_console/delete_game/'
                                    ).$gc->id_gc ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="<?php echo base_url('admin/data_game_console/update_game/'
                                    ).$gc->id_gc ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>