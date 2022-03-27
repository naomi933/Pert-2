<?php
 include 'connection.php';
 class Model extends connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function insert($kd_produk, $nm_produk, $harga, $stok)
    {
        $bayar = $this->bayar($harga, $stok);
        $sql = "INSERT INTO tbl_produk (kd_produk, nm_produk, harga, stok, bayar) 
        VALUES ('$kd_produk', '$nm_produk', '$harga', '$stok', '$bayar')";
        $this->conn->query($sql);
    }
    public function bayar($harga, $stok)
    {
        $bayar = $harga*$stok;
        return $bayar;
    }
    public function tampil_data()
    {
        $sql = "SELECT * FROM tbl_produk";
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
        $sql = "SELECT * FROM tbl_produk WHERE kd_produk='$id' ";
        $bind = $this->conn->query($sql);
        while($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update ($kd_produk, $nm_produk, $harga, $stok)
    {
        $bayar = $this->bayar($harga, $stok);
        $sql = "UPDATE tbl_produk SET nm_produk='$nm_produk', harga='$harga', stok='$stok', bayar='$bayar' WHERE kd_produk='$kd_produk'";
        $this->conn->query($sql);
    }
    public function delete($kd_produk)
    {
        $sql = "DELETE FROM tbl_produk WHERE kd_produk='$kd_produk'";
        $this->conn->query($sql);
    }
}
?>