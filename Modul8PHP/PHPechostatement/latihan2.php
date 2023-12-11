<?php
// Data diri
$nama = "Nama: Esa Adelia Novianto";
$nim = "NIM: 2022010024";
$status = "Status: Mahasiswa";

// Daftar warna untuk setiap baris tulisan
$colors = array("orange", "purple", "blue");

// Counter untuk indeks warna
$colorIndex = 0;

// Fungsi untuk mencetak baris dengan warna
function printColoredLine($text) {
    global $colors, $colorIndex;
    echo "<p style='color: " . $colors[$colorIndex] . ";'>" . $text . "</p>";
    $colorIndex = ($colorIndex + 1) % count($colors);
}

// Menampilkan data diri dengan warna
printColoredLine($nama);
printColoredLine($nim);
printColoredLine($status);
?>
