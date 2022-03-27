<?php
class connection
{
    public function get_connection()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db_pegawai";
        $connect = new mysqli($host, $user, $pass, $db);
        return $connect;
    }
}
?>