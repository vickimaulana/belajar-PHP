form action="" method="post">
    <label for="">Nilai</label>
    <input type="number" name="nilai" required>
    <br>
    <button type="submit">Check Grade</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int) $_POST['nilai'];

    if ($nilai >= 90 && $nilai <= 100) {
        $grade = "A";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        $grade = "B";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        $grade = "C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        $grade = "D";
    } elseif ($nilai >= 0 && $nilai <= 59) {
        $grade = "E";
    } else {
        $grade = "Nilai salah";
    }

    echo "<hr>";
    echo "Nilai anda : $nilai<br>";
    echo "Grade anda : $grade<br>";
}
    
?>