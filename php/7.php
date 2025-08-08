<?php
 // $_POST, $_GET, $_REQUEST, $_SESSION
 // >, <, >=, ==, ===, !=
?>

<form action="" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama" placeholder="Masukan nama anda">
    <br>
    <button type="submit">Simpan</button>
</form>

<?php
    if(isset($_POST['nama'])){
        $nama = $_POST['nama']; //$nama itu variable nggk ush dirubah
        echo"<h1>Nama anda : $nama </h1>";
    }
?>

<!-- Buat program sederhana dengan satu buah input bernama nilai,
     jika nilai lebih dari 90 sampai 100 maka grade nya A
     Jika nilai 80 sampai 89 maka gradenya adalah B
     Jika nilai 70 sampai 79 maka gradenya adalah C
     Jika nilai 60 sampai 69 maka gradenya adalah D
     Jika nilai 0 sampai 59 maka gradenya adalah E
     output:
     Nilai anda : 100
     Grade anda : A 
     -->
<!-- Buat program sederhana dengan satu buah input bernama nilai,
     jika nilai lebih dari 90 sampai 100 maka grade nya A
     Jika nilai 80 sampai 89 maka gradenya adalah B
     Jika nilai 70 sampai 79 maka gradenya adalah C
     Jika nilai 60 sampai 69 maka gradenya adalah D
     Jika nilai 0 sampai 59 maka gradenya adalah E
     output:
     Nilai anda : 100
     Grade anda : A 
     -->

<!-- <form action="" method="post">
    <label for="">Nilai</label>
    <input type="text" nilai="grade" placeholder="Masukan Nilai anda">
    <br>
    <button type="submit">Simpan</button>
</form>

    // if(isset($_POST['nilai'])){
    //     $nilai = $_POST['nilai']; 
    //     echo"<h1>Nilai Anda adalah : $nilai </h1>";}
    if(isset($_POST['grade'])){
        $nilai = $_POST['nilai']; 
        echo"<h1>Jika nilai : $nilai </h1>";
        echo"<h1>Grade adalah : $grade </h1>";
    }
?> -->
<