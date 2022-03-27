<!doctype html>
<html lang="en">

<head>
    <title>Create Data Pegawai</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <h1>Create</h1>
    <a href="index.php">Back</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Pegawai</label>
        <br>
        <input type="text" name="kd_pegawai">
        <br>
        <label>Nama Pegawai</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label>Jabatan</label>
        <br>
        <input type="number" name="jabatan">
        <br>
        <label>Divisi</label>
        <br>
        <input type="number" name="divisi">
        <br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>

</body>

</htmml>