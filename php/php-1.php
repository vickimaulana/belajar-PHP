<?php
echo "Hallo PHP" . "<br>";
echo "<br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";
echo false;
echo "<br>";
print_r("Halloooo". "<br>");
var_dump("tesss" . "<br>");
echo"<br>";
$nama = "Udin";
echo $nama;

// LANGSUNG PHP
echo "<h1>HTML di dalam PHP</h1>";

// HTML di dalam PHP;
$html = "<h1>HTML di dalam PHP</h1>";
echo $html;

// Operator Aritmatika + - * / %
$nilai1 = 7;
$nilai2 = 18.5;
echo "<br>";
echo $nilai1 + $nilai2;
echo "<br>";
echo $nilai1 . "+" . $nilai2 . "=" . $nilai1 + $nilai2;

echo "<br>";
echo $nilai1 - $nilai2;

echo "<br>";
echo $nilai1 * $nilai2;

echo "<br>";
echo $nilai1 / $nilai2;

echo "<br>";
echo $nilai1 % $nilai2;
echo "<br>";

 
//  Operator Asigment =, +=, -=, *=, /=, %=, .=
$nama = "Dino ";
// $nama .= ",";
$nama .= "Danuarta ";
// $nama .= ","; spasi atau koma kehitung
$nama .= "Siregar";
echo $nama . "<br>";
// angka penjumlahan
$x = 4;
$x += 8;
// versi simple $x = $x + 8;
echo $x;
echo "<br>";
// Perbandingan <, >, <=, >=, ==, ===, !=
var_dump(1 < 5);
echo "<br>";
var_dump(5 < 5);
echo "<br>";
var_dump(5 <= 5);
echo "<br>";
var_dump(5 >= 5);
echo "<br>";
var_dump(5 != 5);
echo "<br>";
var_dump(5 === 5);
echo "<br>" ;
echo "<br>" ;
// Gerbang  Logika &&= jika salah satu ada false akan jadi false, ||= jika salah satu ada true tetap true, !
$y = 5;
var_dump($y <= 5 && $y % 2 == 0);

