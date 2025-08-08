<!-- penggunaan array= penyimpanan/ penampung untuk segala tipe data -->

<?php


// array sebuah tipe data,
// boolean, string, number/integer, float

// $nama = "Reza, ibarhim";
// echo $nama; contoh saja

//array index
//               0         1         2
$tas_buah = ["Semangka", "Nanas", "Jeruk"];
print_r($tas_buah);
echo "<br>"; 
// echo $tas_buah['0'];
// echo "<br>"; 
// echo $tas_buah['1'];
// echo "<br>"; 
// echo $tas_buah['2'];
// echo "<br>"; 
// echo $tas_buah['Semangka'];
//print_r untuk mengeprint type data lebih bagus dari var_dump karena var_dump karena dia lebih detail tidak disarankan buat penampilan data

$tas_buah = ["Semangka", "Nanas", "Jeruk"];
$tas_buah[] = "Melon"; 
$tas_buah[] = "Pepaya"; 
echo "<br>"; 
foreach($tas_buah as $key => $val){
    echo "index dari " . $val . " adalah " . $key . "<br>";
}
echo "<br>"; 


// array asosiatif / associative : array dengan indeks berupa string (rangkaian)
$keranjang = [
    'buah' => 'Nanas',
    'sayuran' => 'Bayem'
];
echo $keranjang['buah'];
echo "<br>"; 
echo $keranjang['sayuran'];
