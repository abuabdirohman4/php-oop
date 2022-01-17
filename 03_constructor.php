<?php

class Produk {
    public $judul, 
        $penulis, 
        $penerbit, 
        $harga;

    // public function __construct() {
    //     echo "Hello World";
    // }
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    
    public function getLabel() {
        return "$this->judul <br> Penulis : $this->penulis <br> Penerbit : $this->penerbit <br> ";
    }
}

$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

// echo $produk3;
// echo $produk3->judul;
// var_dump($produk3);
echo "Komik : ".$produk3->getLabel();
echo "<hr>";
echo "Game : ".$produk4->getLabel();