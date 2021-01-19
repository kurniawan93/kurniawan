<div class="container-fluid">
    <h4>Detail pesanan <div class="btn btn-sm btn-success"> No. <?= $invoice->id ?></div>
    </h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>id barang</th>
            <th>nama barang</th>
            <th>jumlah pesanan</th>
            <th>harga satuan</th>
            <th>sub total</th>
        </tr>
        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
            <tr>
                <td><?= $psn->id_brg ?></td>
                <td><?= $psn->nama_brg ?></td>
                <td><?= $psn->jumlah ?></td>
                <td>Rp. <?= number_format($psn->harga, 0, ',', '.') ?></td>
                <td>Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp. <?= number_format($total, 0, ',', '.') ?></td>
        </tr>
    </table>
    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-success">Kembali</div>
    </a>
</div>