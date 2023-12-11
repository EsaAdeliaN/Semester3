<!--Variabel yang dideklarasikan di luar fungsi memiliki LINGKUP GLOBAL dan 
hanya dapat diakses di luar fungsi seperti berikut -->

<?php
$x = 5; // global scope
function myTest()
{
// penggunan x didalam function akan menghasilkan error
echo "<p>Variable x didalam function is: $x</p>";
}
myTest();
echo "<p>Variable x diluar function is: $x</p>";
?>

<!--jika ingin menggunakan function didalam global tambahkan di atass echo-->
<!--global $x; // Menandai $x sebagai variabel global-->