<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 100000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// new User();

// new App\Produk\User();
// echo "<br>";
// new App\Service\User();

// Penggunaan Alias (use)
// use App\Produk\User;
use App\Service\User as ServiceUser;
use App\Produk\User as ProductUser;

// new User();
// echo "<br>";
new ProductUser();
echo "<br>";
new ServiceUser();