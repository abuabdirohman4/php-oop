<?php

class Produk {
    public $judul, 
        $penulis, 
        $penerbit, 
        $harga;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit (Rp. $this->harga)";
    }
}

class Komik extends Produk {
    public function getInfoProduk($jmlHalaman) {
        return "Komik : $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) ~ $jmlHalaman halaman";
    }
}
class Game extends Produk {
    public function getInfoProduk($waktuMain) {
        return "Komik : $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) ~ $waktuMain jam";
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

echo $produk1->getInfoProduk(100);
echo "<br>";
echo $produk2->getInfoProduk(15);