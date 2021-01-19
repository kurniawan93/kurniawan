<div class="container-fluid">
    <h4>invoice</h4>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>id invoice</th>
            <th>nama pemesan</th>
            <th>alamat pemesan</th>
            <th>tanggal pemesanan</th>
            <th>batas pembayaran</th>
            <th colspan="2">aksi</th>
        </tr>

        <?php $no = 1;
        foreach ($invoice as $inv) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td><?= anchor('admin/invoice/detail/' . $inv->id, ' <div class="btn btn-sm btn-primary">Detail</div>') ?>
                <td><?= anchor('admin/invoice/hapus/' . $inv->id, ' <div class="btn btn-sm btn-danger">hapus</div>') ?>
                </td>

            </tr>

        <?php endforeach; ?>
    </table>
</div>