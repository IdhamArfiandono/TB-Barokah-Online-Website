<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Barang</h1>
    </div>

    <div class="card">
        <div class="card-body">

            <?php foreach($barang as $brg) : ?>

            <form method="post" action="<?= base_url('admin/data_barang/update')?>">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg?>">
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg?>">
                            <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan?>">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori?>">
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?= $brg->harga?>">
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" value="<?= $brg->stok?>">
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control" value="<?= $brg->gambar?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm ">Simpan</button>
                    </div>
                </div>
            </form>

            <?php endforeach; ?>
        </div>
    </div>
</div>