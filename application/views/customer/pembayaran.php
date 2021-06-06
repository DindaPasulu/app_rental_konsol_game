<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Game Console</th>
                                <td>:</td>
                                <td><?php echo $tr->merk ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_rental ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?php echo $tr->tanggal_kembali ?></td>
                            </tr>
                            <tr>
                                <th>Biaya Sewa</th>
                                <td>:</td>
                                <td>Rp<?php echo number_format($tr->harga,0,',','.') ?></td>
                            </tr>
                            <tr>
                                <?php 
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_rental);
                                    $jmlHari = abs(($x-$y)/(60*60*24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td><?php echo $jmlHari ?> hari</td>
                            </tr>
                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success">Rp<?php echo number_format($tr->harga * $jmlHari,0,',','.') ?></button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p class="text-success">Pembayaran Dilakukan Dengan Sistem COD (Cash-On-Delivery)</p>
                </div>
            </div>
        </div>
    </div>
</div>