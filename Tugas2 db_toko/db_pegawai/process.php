<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $kd_pegawai = $_POST['kd_pegawai'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $divisi = $_POST['divisi'];
    $model= new Model();
    $model->insert($kd_pegawai, $nama, $jabatan, $divisi);
    header('location:index.php');
}

if (isset($_POST['submit_edit'])) {
    $kd_pegawai = $_POST['kd_pegawai'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $divisi = $_POST['divisi'];
    $model= new Model();
    $model->insert($kd_pegawai, $nama, $jabatan, $divisi);
    header('location:index.php');
}

if (isset($_GET['kd_pegawai'])) {
    $id = $_GET['kd_pegawai'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}

?>