<?php
// Tipe data string
$nama = "Esa Adelia Novianto";

// Tipe data integer
$nim = 2022010024;

// Tipe data float
$ipk = 3.98;

// Tipe data array
$hobi = array("Mendengarkan Musik", "Beladiri", "Bermain Game");

// Menampilkan informasi menggunakan echo
echo "Nama: " . $nama . "<br>";
echo "NIM: " . $nim . " <br>";
echo "IPK: " . $ipk . " <br>";

echo "Hobi:<br>";
echo "<ul>";
foreach ($hobi as $h) {
    echo "<li>" . $h . "</li>";
}
echo "</ul>";
?>
