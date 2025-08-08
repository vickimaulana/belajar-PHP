<?php
// Struktur Kendali
// 1. Perulangan FOR, While, Do..while, Forech ( Perulangan khusus array)
//For
for ($i=0 ; $i <=5 ; $i++) { 
    echo "helllo <br>";
}
//While
$i = 0; // ini adalah increment
while ($i < 5) {
    echo "hehe <br>";
    $i++; // inin adalah decrement
}
//do..while
$i = 0; //Kalau pake do..while akan menampilkan terlebih dahulu meskipun hasilnya false
do {
    echo "xaxaxaxa <br>";
    $i++;
} while ($i < 5 );

// Foreach
echo "<br><br>";
?>

<!-- <!DOCTYPE html        Tulisan berwarna >        
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=0; $i < 5; $i++) : // Horizontal  
            ?> 
            <tr>
                <?php for ($j=0; $j < 3; $j++) { //Vertikal
                    echo "<td><span style='backgroundcolor:blue;'>$i</span>, <span style='color:red;'>$j</span></td>";
                } ?>
            </tr>
        <?php endfor; ?>

    </table>
</body>
</html> -->

<!-- <table border="1" cellpadding="10" cellspacing="0" buat agak ribet tapi di td>
        <?php
            for ($i=0; $i < 5 ; $i++) { 
        ?>
        <tr>
            <?php for($j = 0; $j < 5; $j++){
            ?>
            <?php if($i % 2 == 0){
             ?>
            <td style="background-color: red;"><?= ($i+1) . ",". ($j+1) ?></td>
            <?php }else{
            ?>
            <td style="background-color: blue;"><?= ($i+1) . ",". ($j+1) ?></td>
            <?php  } ?>
            <?php } ?>
        </tr>
        <?php } ?>
    </table> -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($i=0; $i < 5 ; $i++) { 
            if($i % 2 == 0){
             ?>
        <tr style="background-color: red;">
            <?php }else{?>
        <tr style="background-color: yellow;">
            <?php } ?>
            <?php for($j = 0; $j < 5; $j++){
        ?>
            <td><?= ($i+1) . ",". ($j+1) ?></td>

            <?php } ?>
        </tr>
        <?php } ?>
    </table>


   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Kalau kurung kurawa di depan diganti jadi :, maka kurawa yang bawah diganti jadi endfor; -->
        <?php for ($i=0; $i < 5; $i++) { 
            if ($i %2 == 0) {
                echo "<tr style='background-color: silver';>";
            } else {
            echo "<tr style='background-color: gray;'>";
        } ?>
        
            
                <?php for ($j=0; $j < 3; $j++) {
                    echo "<td> $i, $j </td>";
                } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>