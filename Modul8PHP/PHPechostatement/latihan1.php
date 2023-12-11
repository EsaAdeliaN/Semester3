<?php
// Data tentang Politeknik Balekambang
$namaPoltek = "Politeknik Balekambang Jepara";
$alamat = "Balekambang, Gemiring Lor, Nalumsari, Jepara";
$tahunBerdiri = 2017;
$jurusan = array("Rekayasa Perangkat Lunak", "Administrasi Bisnis Internasional", "Akuntansi Keuangan Publik");

// Menampilkan data menggunakan echo
echo "Nama Politeknik: " . $namaPoltek . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Tahun Berdiri: " . $tahunBerdiri . "<br>";

echo "Jurusan yang Tersedia:<br>";
echo "<ul>";
foreach ($jurusan as $jur) {
    echo "<li>" . $jur . "</li>";
}
echo "</ul>";
?>
