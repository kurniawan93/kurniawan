<div class="container-fluid">
    <div class="row text-center">
        <?php foreach ($pakaian_wanita as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 15rem;">
                <img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $brg->nama_brg ?></h5>
                    <small><?= $brg->keterangan ?></small><br>
                    <span class="badge badge-primary mb-3">Rp. <?= number_format($brg->harga, 0, ',', '.') ?>
                    </span><br>
                    <?php echo anchor('barang/add_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Add Keranjang</div>') ?>
                    <?php echo anchor('barang/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>