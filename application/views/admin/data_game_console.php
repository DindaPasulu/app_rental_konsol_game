<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Game Console</h1>
        </div>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Status</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($game_console as $gc) : ?>
                        <td><?php echo $no++ ?></td>
                        <td></td>
                        <td><?php echo $gc->kode_type ?></td>
                        <td><?php echo $gc->merk ?></td>
                        <td><?php echo $gc->status ?></td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>