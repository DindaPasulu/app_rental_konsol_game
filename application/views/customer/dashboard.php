<!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">House of Game Consoles</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Rent Various Game Consoles Here!</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <!--menampilkan pesan 'Data telah ditambahkan'-->
                <?php echo $this->session->flashdata('message'); ?>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($game as $gc) : ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top center" src="<?php echo base_url(). './assets/upload/'.$gc->gambar ?> "
                            style="width:160px; height:130px ;margin-left:auto; margin-right:auto" alt=""/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h4 class="fw-bolder">
                                        <a><?php echo $gc->merk?> <?php echo $gc->series?></a>
                                    </h4>
                                    <h6 class="fw-bolder">Kode Type : <?php echo $gc->kode_type?></a>
                                    </h6>
                                    <h6>Harga Sewa : Rp<?php echo number_format($gc->harga,0,',','.') ?>/hari</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <?php
                                    if($gc->status == "0"){
                                        echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                                    }else{
                                        echo anchor('customer/rental/tambah_rental/'.$gc->id_gc, '<button class="btn btn-success">Rent</button>');
                                    }
                                ?>
                                <a class="btn btn-warning" href="<?php echo base_url('customer/dashboard/detail_game/').$gc->id_gc ?>">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        