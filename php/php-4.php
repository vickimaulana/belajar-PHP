<?php
// Array :
// $foods = array("Burger", "Nasi Padang", "Gado-Gado"); Versi lama
$foods = ["Burger", "Nasi Padang", "Gado-Gado"]; // Versi Baru
var_dump($foods[2]);



$fills =["Spageti","Pizza"];
foreach ($fills as $fill) {
    $foods[]= $fill;
}


$nasi_padang = $foods[1];
$kata_nasi = explode(" ", $nasi_padang)[0];
echo $kata_nasi; echo "<br>"; // Output: Nasi 
var_dump($foods);

?>