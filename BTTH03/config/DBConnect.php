<?php

class DBConnection
{

    private $conn = null;

    public function __construct()
    {

        // B1. Kết nối DB Server
        try {
            // Đặt múi giờ mặc định
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            //kết nối
            $this->conn = new PDO('mysql:host=localhost;dbname=btth03;port=3306', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
