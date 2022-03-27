<!doctype html>
<html lang="en">

<head>
    <title>Create New Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <h1>Create</h1>
    <a href="index.php">Back</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Produk</label>
        <br>
        <input type="text" name="kd_produk">
        <br>
        <label>Nama Produk</label>
        <br>
        <input type="text" name="nm_produk">
        <br>
        <label>Harga Produk</label>
        <br>
        <input type="number" name="harga">
        <br>
        <label>Jumlah Produk</label>
        <br>
        <input type="number" name="stok">
        <br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>

</body>

</htmml>