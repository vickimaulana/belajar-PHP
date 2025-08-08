<!-- function -->
<!-- Tata cara pembuatan function -->
<?php


// $nama = "Reza";
// echo $nama;

// $nama = "Bambang";
// echo $nama;

function callName($name= "Default")
{
//echo "Reza Ibrahim"; //Buat Pemanggilan nama
return "Nama saya adalah : ". $name. "<br>"; //Buat Pengembalian nama
}

//callName(); //Buat pemanggilan nama echo
echo callName("Reza"); //Buat pemanggilan nama return
echo callName("Bambang"); //Buat pemanggilan nama return
echo callName();//Namanya sudah disetting jadi default //Buat pemanggilan nama return


function rumusPersegiPanjang($panjang, $lebar){
    return "Luas : ".$panjang * $lebar ."<br>";
}

echo rumusPersegiPanjang(5, 5); // jadi 25  //5 x 3= 15