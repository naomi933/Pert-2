<?php
 include 'connection.php';
 class Model extends connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function insert($kd_pegawai, $nama, $jabatan, $divisi)
    {
        $sql = "INSERT INTO tbl_pegawai (kd_pegawai, nama, jabatan, divisi) 
        VALUES ('$kd_pegawai', '$nama', '$jabatan', '$divisi')";
        $this->conn->query($sql);
    }
    public function tampil_data()
    {
        $sql = "SELECT * FROM tbl_pegawai";
        $bind = $this->conn->query($sql);
        while($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)){
            return $baris;
        }
    }
    public function edit($id)
    {
        $sql = "SELECT * FROM tbl_pegawai WHERE kd_pegawai='$id' ";
        $bind = $this->conn->query($sql);
        while($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update ($kd_pegawai, $nama, $jabatan, $divisi)
    {
        $sql = "UPDATE tbl_pegawai SET nama='$nama', jabatan='$jabatan', divisi='$divisi' WHERE kd_pegawai='$kd_pegawai'";
        $this->conn->query($sql);
    }
    public function delete($kd_pegawai)
    {
        $sql = "DELETE FROM tbl_pegawai WHERE kd_pegawai='$kd_pegawai'";
        $this->conn->query($sql);
    }
}
?>