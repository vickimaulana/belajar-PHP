<?php
// Pekondisian / Percabangan
//  if else
//  if else if else
//  swicth
$n = 10;
if ($n < 20) {
    echo "Betulllll";
}else{
    echo "Salaaaaahhhh";
}
echo "<br>";
if ($n < 20) {
    echo "Betulllll";
}else {
    echo "Salaaaaahhhh" . "<br>";
}
echo "<br>";
 
$x = 30;
if ($x < 20) {
    echo "Benarrr";
}else if ($x == 20) {
    echo "ini resutlnya";
}else {
    echo "Salah";
}
echo "<br>";
//  if tenary
$no = 1;
$hasil = ($no % 2 == 0) ? 'Genap' : 'Ganjil';
echo $hasil;
echo "<br>";

$no = 1;
$hasil = ($no % 2 == 0) ? 'Genap' :  (($no % 2 != 0) ? 'Ganjil': 'tak terhingga');
echo $hasil;
echo "<br>";

$nilai = 75;
// Jika nilai lebih dari 80, maka A
// Jika nilai lebih dari 70, maka B
// Jika nilai lebih dari 60, maka C
// Selain itu hasilnya D
// if ($nilai > 80) {
//     echo "A";
// } else if ($nilai > 70) {
//     echo "B";
// } else if ($nilai > 60) {
//     echo "C";
// } else {
//     echo "D";
// }
$result = ($nilai >= 80) ? "A" : (($nilai >= 70) ? "B" : (($nilai >= 60) ? "C" : "D"));
echo "<br>", $result, "<br>";


$score = 68;
$r = "";
switch (true) {
    case ($score >= 80):
        $r = "A"; 
        // bahwa r itu string atau result string
        break;
    case ($score >= 70):
        echo "B";
          break;
    case ($score >= 60):
        echo "C";
          break;
    default:
        echo "D";
        break;
}
echo $r;
echo "<br>";

$day = "Minggu";
$week = "";
//  $day = "Week day" or "Weekend"
switch ($day) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        $week = "Week day";
        break;
    case "Sabtu":
    case "Minggu":
       $week = "Weekend";
        break;
    default:
        $week = "Hari tidak valid";
        break;
}
echo $week;
echo "<br>";