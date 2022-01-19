<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         // return "Halo.";
//         return "Halo " . self::$angka . " Kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();

// OOP Biasa
class Contoh {
    // public $angka = 1;
    public static $angka = 1;

    public function halo() {
        // return "Halo " . $this->angka++ . " kali. <br>";
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$contoh = new Contoh();
echo $contoh->halo();
echo $contoh->halo();
echo $contoh->halo();
echo "<hr>";
$contoh2 = new Contoh();
echo $contoh2->halo();
echo $contoh2->halo();
echo $contoh2->halo();