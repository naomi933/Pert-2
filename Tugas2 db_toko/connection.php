<?php
class connection
{
    public function get_connection()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "toko_grosir";
        $connect = new mysqli($host, $user, $pass, $db);
        return $connect;
    }
}
?>