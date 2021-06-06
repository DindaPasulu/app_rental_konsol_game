<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Game Console</th>
                <th>Tanggal Rental</th>
                <th>Tanggal Kembali</th>
                <th>Harga/hari</th>
                <th>Denda/hari</th>
                <th>Tanggal Dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
                <th>Action</th>
            </tr>
            <?php $no=1;
                foreach($transaksi as $tr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->merk ?></td>
                    <td><?php echo date('d/m/Y',strtotime($tr->tanggal_rental)) ?></td>
                    <td><?php echo date('d/m/Y',strtotime($tr->tanggal_kembali)) ?></td>
                    <td>Rp<?php echo number_format($tr->harga,0,',','.') ?></td>
                    <td>Rp<?php echo number_format($tr->denda,0,',','.') ?></td>
                    <td>
                        <?php 
                            if($tr->tanggal_pengembalian == "0000-00-00"){
                                echo "-";
                            }else{
                                echo date('d/m/Y',strtotime($tr->tanggal_pengembalian));
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                             if($tr->status_pengembalian == "Kembali"){
                                 echo "Kembali";
                             }else{
                                 echo "Belum Kembali";
                             }
                        ?>
                    </td>
                    <td>
                        <?php 
                             if($tr->status_rental == "Selesai"){
                                 echo "Selesai";
                             }else{
                                 echo "Belum Selesai";
                             }
                        ?>
                    </td>
                    <td>
                             <?php
                                if($tr->status == "1"){
                                    echo "-";
                                }else{ ?>
                                    <div class="row">
                                        <a class="btn btn-sm btn-success mr-1" href="<?php echo base_url('admin/data_transaksi/transaksi_selesai/'.$tr->id_rental) ?>">
                                            <i class="fas fa-check"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_transaksi/transaksi_batal/'.$tr->id_rental) ?>">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                             <?php   } ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
        </div>
    </section>
</div>