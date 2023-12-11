<?php

// A. Deklarasi variabel
// Variabel $nama menyimpan nama "Esa Adelia Novianto" dengan tambahan tag <br> untuk menciptakan baris baru saat ditampilkan.
// Variabel $umur menyimpan nilai umur 20.
$nama = "Esa Adelia Novianto <br>";
$umur = 20 ;

// B. Menampilkan informasi
// Menampilkan informasi nama dan umur menggunakan perintah echo.
// Pada baris pertama, menampilkan nama dengan menggunakan nilai variabel $nama.
// Pada baris kedua, menampilkan umur dengan menggunakan nilai variabel $umur, dan menambahkan teks "tahun" diikuti dengan tag <br> untuk menciptakan baris baru.
echo "Nama: " . $nama . "\n";
echo "Umur: " . $umur . " tahun <br>\n";

// C. Mengecek kategori usia
// Menggunakan struktur kontrol if-elseif-else untuk mengecek kategori usia berdasarkan nilai umur.
// Jika umur kurang dari 18, menampilkan "Kategori Usia: Anak-anak".
// Jika umur antara 18 dan 60, menampilkan "Kategori Usia: Dewasa".
// Jika umur lebih dari 60, menampilkan "Kategori Usia: Lansia".
if ($umur < 18) {
    echo "Kategori Usia: Anak-anak\n";
} elseif ($umur >= 18 && $umur <= 60) {
    echo "Kategori Usia: Dewasa\n";
} else {
    echo "Kategori Usia: Lansia\n";
}

?>
