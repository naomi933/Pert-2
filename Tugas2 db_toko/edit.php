<?php
$id = $_GET['kd_produk'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <h1>Edit Data Produk</h1>
    <a href="index.php">Back</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Produk</label>
        <br>
        <input type="text" name="kd_produk" value="<?php echo $data->kd_produk ?>">
        <br>
        <label>Nama Produk</label>
        <br>
        <input type="text" name="nm_produk" value="<?php echo $data->nm_produk ?>">
        <br>
        <label>Harga Produk</label>
        <br>
        <input type="number" name="harga" value="<?php echo $data->harga ?>">
        <br>
        <label>Jumlah Produk</label>
        <br>
        <input type="number" name="stok" value="<?php echo $data->stok ?>">
        <br>
        <button type="submit" name="submit_edit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>