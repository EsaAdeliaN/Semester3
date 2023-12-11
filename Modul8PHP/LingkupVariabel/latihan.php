<?php
// Variabel global
$globalVar = 10;

function mathOperation($a, $b)
{
    // Mengakses variabel global di dalam fungsi
    global $globalVar;

    // Variabel lokal di dalam fungsi
    $localResult = $a + $b + $globalVar;

    // Menampilkan hasil operasi matematika di dalam fungsi
    echo "<p>Hasil operasi matematika di dalam fungsi: $localResult</p>";

    // Mengembalikan nilai variabel lokal
    return $localResult;
}

// Memanggil fungsi dengan memberikan nilai parameter
$result = mathOperation(5, 7);

// Menampilkan hasil operasi matematika di luar fungsi
echo "<p>Hasil operasi matematika di luar fungsi: $result</p>";
?>
