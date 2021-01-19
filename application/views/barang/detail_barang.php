<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Barang</h5>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/upload/' . $brg->gambar ?>" class="card-img-top">

                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $brg->nama_brg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $brg->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-success btn-sm">Rp. <?= number_format($brg->harga, 0, ',', '.')  ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <?php echo anchor('barang/add_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Add Keranjang</div>') ?>
                        <?php echo anchor('barang/index/', '<div class="btn btn-sm btn-primary">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>