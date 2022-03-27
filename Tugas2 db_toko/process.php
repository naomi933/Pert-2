<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $kd_produk = $_POST['kd_produk'];
    $nm_produk = $_POST['nm_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $bayar = $_POST['bayar'];
    $model= new Model();
    $model->insert($kd_produk, $nm_produk, $harga, $stok, $bayar);
    header('location:index.php');
}

if (isset($_POST['submit_edit'])) {
    $kd_produk = $_POST['kd_produk'];
    $nm_produk = $_POST['nm_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $bayar = $_POST['bayar'];
    $model= new Model();
    $model->insert($kd_produk, $nm_produk, $harga, $stok, $bayar);
    header('location:index.php');
}

if (isset($_GET['kd_produk'])) {
    $id = $_GET['kd_produk'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}

?>