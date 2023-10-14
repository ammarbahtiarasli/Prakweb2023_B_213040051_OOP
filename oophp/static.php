<?php

// class Contohstatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo " . self::$angka++ . " kali.";
//     }
// }

// echo Contohstatic::$angka;
// echo "<br>";
// echo Contohstatic::halo();
// echo "<hr>";
// echo Contohstatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

$obj = new Contoh;
echo "<hr>";
echo $obj->halo();
echo "<hr>";
echo $obj->halo();
echo "<hr>";
echo $obj->halo();

$obj2 = new Contoh;
echo "<hr>";
echo $obj2->halo();
echo "<hr>";
echo $obj2->halo();
