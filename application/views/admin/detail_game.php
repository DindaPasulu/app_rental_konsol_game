<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Game Console</h1>
        </div>
    </section>

    <?php foreach($detail as $dt) :?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo base_url().'assets/img_upload'.$dt->gambar ?>">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Game Type</td>
                                <td>
                                <?php
                                    if($dt->kode_type == "HC"){
                                        echo "Home Console";
                                    }elseif($dt->kode_type == "HB"){
                                        echo "Hybrid Console";
                                    }elseif($dt->kode_type == "HH"){
                                        echo "Handhelds Console";
                                    }else{
                                        echo "<span class='text-danger'>Game type belum terdaftar</span>";
                                    }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <td>Series</td>
                                <td><?php echo $dt->series ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td>Harga Sewa</td>
                                <td>Rp<?php echo number_format($dt->harga,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Denda</td>
                                <td>Rp<?php echo number_format($dt->denda,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php 
                                        if($dt->status == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        } 
                                    ?>
                                </td>
                            </tr>
                        </table>

                        <a class="btn btn-sm btn-danger ml-4" href="<?php 
                            echo base_url('admin/data_game_console') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?php 
                            echo base_url('admin/data_game_console/update_game/'.$dt->id_gc) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
</div>