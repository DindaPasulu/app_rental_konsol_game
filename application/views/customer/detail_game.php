<div class="container mt-5 mb-5">

    <div class="card">
        <div class="card-body">
            <?php foreach($detail as $dt) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 90%" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Kode Type</th>
                                <td><?php echo $dt->kode_type ?></td>
                            </tr>
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>Series</th>
                                <td><?php echo $dt->series ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Harga Sewa</th>
                                <td>Rp<?php echo number_format($dt->harga, 0,',','.') ?></td>
                            </tr>
                            <tr>
                                <th>Denda</th>
                                <td>Rp<?php echo number_format($dt->denda, 0,',','.') ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php if($dt->status == '1'){
                                        echo "Tersedia";
                                    }else {
                                        echo "Sedang di rental";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>
                                <?php
                                    if($dt->status == "0"){
                                        echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                                    }else{
                                        echo anchor('customer/rental/tambah_rental/'.$dt->id_gc, '<button class="btn btn-success">Rent</button>');
                                    }
                                ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>