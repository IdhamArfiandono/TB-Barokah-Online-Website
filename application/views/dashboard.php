     <!-- Header-->
     <header class="bg-dark py-5">
         <div class="container px-4 px-lg-5 my-5">
             <div class="text-center text-white">
                 <h1 class="display-4 fw-bolder">TB Barokah</h1>
                 <p class="lead fw-normal text-white-50 mb-0">Kelompok Project Web Progamming 3</p>
             </div>
         </div>
     </header>
     <!-- Section-->
     <section class="py-5">
         <div class="container px-4 px-lg-5 mt-5">
             <div class="row">
                 <?php foreach ($barang as $brg) : ?>

                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card h-100">
                         <!-- Product image-->
                         <a href="#">
                             <img src=" <?= base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                             <!-- Product details-->
                             <div class="card-body p-4">
                                 <div class="text-center">
                                     <!-- Product name-->
                                     <h4 class="card-title">
                                         <a href="#"><?php echo $brg->nama_brg ?></a>
                                     </h4>
                                     <h6>Keterangan : <?php echo $brg->keterangan ?></h6>
                                     <h5>Harga : Rp. <?php echo number_format($brg->harga),'.' ?></h5>
                                 </div>
                             </div>
                             <!-- Product actions-->
                             <div class="card-footer text-center">
                                 <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                                 <?= anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                             </div>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </section>