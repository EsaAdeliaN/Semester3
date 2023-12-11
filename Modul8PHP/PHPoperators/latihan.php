<?php
// Operator aritmatika
echo "<h1>Belajar Operator PHP</h1>";

$angka1 = 5;
$angka2 = 10;

$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$sisaBagi = $angka1 % $angka2;
$perpangkatan = $angka1 ** $angka2;
$operasi = $angka1 - $angka2;

echo "<h3>Operator Aritmatika</h3>";
echo "$angka1 + $angka2 = $penjumlahan<br>";
echo "$angka1 - $angka2 = $pengurangan<br>";
echo "$angka1 * $angka2 = $perkalian<br>";
echo "$angka1 / $angka2 = $pembagian<br>";
echo "$angka1 % $angka2 = $sisaBagi<br>";
echo "$angka1 ** $angka2 = $perpangkatan<br>";
echo "-a = $operasi";

echo "<h3>Operator Penugasan</h3>";
$a = 15; // decimal number
var_dump($a);
echo "<br>";
$b = -5; // a negative number
var_dump($b);
echo "<br>";
$c = -500; 
var_dump($c);
echo "<br>";
$d = -50; 
var_dump($d);


// Operator Perbandingan
echo "<h3>Operator Perbandingan</h3>";

$nilaiA = 8;
$nilaiB = 12;

$lebihBesarkan = $nilaiA > $nilaiB;
$kurangBesarkan = $nilaiA < $nilaiB;
$samaDengan = $nilaiA == $nilaiB;
$tidakSamaDengan = $nilaiA != $nilaiB;


echo "Lebih Besar: " . ($lebihBesarkan ? 'true' : 'false') . "<br>";
echo "Kurang Besar: " . ($kurangBesarkan ? 'true' : 'false') . "<br>";
echo "Sama Dengan: " . ($samaDengan ? 'true' : 'false') . "<br>";
echo "Tidak Sama Dengan: " . ($tidakSamaDengan ? 'true' : 'false')."<br>";

?>