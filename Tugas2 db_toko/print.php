<?php
 include 'model.php';
 $model = new Model();
 $index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Data Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <h1>Laporan Data Produk</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Produk</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = $model->tampil_data();
            if (!empty($result)){
                foreach ($result as $data) : ?>
            <tr>
                <td><?= $index++ ?></td>
                <td><?= $data->kd_produk ?></td>
                <td><?= $data->nm_produk ?></td>
                <td><?= $data->harga ?></td>
                <td><?= $data->stok ?></td>
                <td><?= $data->bayar ?></td>
            </tr>
        <?php endforeach;
            } else { ?>  
            <tr>
                <td colspan="9">Belum ada data pada tabel data produk</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>