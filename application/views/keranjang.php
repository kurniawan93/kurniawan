<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $items['name'] ?></td>
                <td><?= $items['qty'] ?></td>
                <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
            </tr>

        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>
    <div align="right">
        <a href="<?= base_url('barang/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?= base_url('barang/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjut</div>
        </a>
        <a href="<?= base_url('barang/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>