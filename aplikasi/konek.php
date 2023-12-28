<?php

class Database
{
   
    
    // Properti dengan visibility diawali sebelum properti untuk menambahkan kejelasan dalam pembacaan kode.
    private $host = "localhost", $username = "root", $password = "", $db = "db_publik", $conn;
    //Komen UAS_2 : Konsep Private di atas berarti hanya bisa di akses di dalam class parent saja di luar kelas tidak bisa di akses

    // Konstruktor, merupakan magic method pada PHP, digunakan untuk inisialisasi objek saat objek dibuat.
    public function __construct()
    {
    //Komen UAS_2 : Konsep Public bisa di akses di luar kelas
       
        // Menghubungkan ke database menggunakan properti yang telah ditentukan sebelumnya.
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    // Metode getKonek digunakan untuk mengembalikan nilai dari properti $conn.
    public function getKonek()
    {
        return $this->conn;
    }
}
?>
