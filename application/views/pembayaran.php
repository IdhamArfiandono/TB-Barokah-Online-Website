<div class="container-fluid">

    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang AS $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    
                    echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
                } ?>
            </div><br><br>

            <h3>
                Input Alamat Pengiriman & Pembayaran
            </h3>

            <form method="post" action="<?= base_url('dashboard/proses_pesanan')?>">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="No. Telepon Anda">
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA - xxxxx </option>
                        <option>BNI - xxxxx </option>
                        <option>BRI - xxxxx </option>
                        <option>Mandiri - xxxxx </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

            </form>

            <?php 
                }else{
                    echo "Keranjang Belanja Anda Masih Kosong";
                }
            ?>

        </div>



        <div class="col-md-2"></div>
    </div>

</div>