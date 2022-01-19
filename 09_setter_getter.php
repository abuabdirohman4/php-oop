<?php

use Produk as GlobalProduk;

class Produk {
    private $judul, 
            $penulis, 
            $penerbit,
            $harga;

    protected $diskon;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getInfoProduk() {
        return "$this->penulis, $this->penerbit (Rp. $this->harga)";
    }
  
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Error Type Variable");
        }
        $this->judul = $judul;
    }
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    public function setHarga($harga) {
        $this->harga = $harga;
    }
    
    public function getJudul() {
        return $this->judul;
    }
    public function getPenulis() {
        return $this->penulis;
    }
    public function getPenerbit() {
        return $this->penerbit;
    }
    public function getHarga() {
        return $this->harga = $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        return "Komik : " . parent::getInfoProduk() ." ~ $this->jmlHalaman halaman";
    }
}
class Game extends Produk {
    public $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    
    public function getInfoProduk() {
        return "Game : " . parent::getInfoProduk() . " ~ $this->waktuMain jam";
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 100000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

// echo $produk2->setDiskon(30);
// echo $produk2->getHarga();

// echo $produk1->harga;

// $produk3 = new Produk("Baru3");
// echo $produk3->harga;

$produk2->setJudul("One Piece");
// $produk2->setJudul(123);
echo $produk2->getJudul();