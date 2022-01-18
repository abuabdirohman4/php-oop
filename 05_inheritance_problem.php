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
        return "$this->penulis, $this->penerbit";
    }

    public function mixLabel($kategori, $time) {
        if ($kategori === "Game") {
            return "Game : $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) - $time jam";
        } elseif ($kategori === "Komik") {
            return "Komik : $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) ~ $time halaman";
        }
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} - Rp. {$produk->harga}";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

echo $produk1->mixLabel("Komik", 100);
echo "<br>";
echo $produk2->mixLabel("Game", 50);

// $infoProduk = new CetakInfoProduk();
// echo $infoProduk->cetak($produk1);