<?php
include 'model.php';
$model = new Model();
$index = 1;
?>

<!doctype html>
<html lang="en">

<head>
    <title>Data Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div>
    <h1>Data Pegawai</h1>
    <a href="create.php">Tambah Data </a>
    <br>
    <a href="print.php" target="blank">Print Data</a>
    <br>
    <table border="1">
        <thead>
            <tr>
            <th>No.</th>
            <th>Kode Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Divis</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = $model->tampil_data();
            if (!empty($result)){
                foreach ($result as $data) : ?>
            <tr>
                <td><?= $index++ ?></td>
                <td><?= $data->kd_pegawai ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->jabatan ?></td>
                <td><?= $data->divisi ?></td>
                <td>
                    <a name="edit" id="edit" href="edit.php?kd_pegawai=<? $data->kd_pegawai ?>">Edit</a>
                    |
                    <a name="delete" id="delete" href="process.php?kd_pegawai=<? $data->kd_pegawai ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach;
            } else { ?>  
            <tr>
                <td colspan="9">Belum ada data pada tabel data pegawai</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>

</html>