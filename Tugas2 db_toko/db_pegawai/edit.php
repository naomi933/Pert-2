<?php
$id = $_GET['kd_pegawai'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Pegawai</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <h1>Edit Data Pegawai</h1>
    <a href="index.php">Back</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Pegawai</label>
        <br>
        <input type="text" name="kd_pegawai" value="<?php echo $data->kd_produk ?>">
        <br>
        <label>Nama Pegawai</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nm_produk ?>">
        <br>
        <label>Jabatank</label>
        <br>
        <input type="number" name="jabatan" value="<?php echo $data->harga ?>">
        <br>
        <label>Divisi</label>
        <br>
        <input type="number" name="divisi" value="<?php echo $data->stok ?>">
        <br>
        <button type="submit" name="submit_edit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>