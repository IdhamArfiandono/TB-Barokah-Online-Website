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
                         <a href="#"><img class="card-img-top"
                                 src="<?php echo base_url('assets/upload/' . $brg->gambar) ?>" alt=""></a>
                         <!-- Product details-->
                         <div class="card-body p-4">
                             <div class="text-center">
                                 <!-- Product name-->
                                 <h4 class="card-title">
                                     <a href="#"><?php echo $brg->nama_brg ?></a>
                                 </h4>
                                 <h5>Keterangan : <?php echo $brg->keterangan ?></h5>
                                 <h5>Harga : Rp. <?php echo number_format($brg->harga),'.' ?></h5>
                             </div>
                         </div>
                         <!-- Product actions-->
                         <div class="card-footer">
                             <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                             <?= anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </section>







     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         </ol>
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
             </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>




     <div class="row text-center mt-4">

         <?php foreach ($barang as $brg) : ?>

         <div class="card ml-3 mb-3" style="width:auto">
             <img src=" <?= base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" style="width:fit-content">
             <div class="card-body">
                 <h5 class="card-title mb-1">
                     <?= $brg->nama_brg ?>
                 </h5>
                 <small>
                     <?= $brg->keterangan ?>
                 </small>
                 <br>
                 <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg->harga), '.' ?></span>
                 <br>
                 <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                 <?= anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>

             </div>
         </div>



         <?php endforeach; ?>

     </div>
     </div>