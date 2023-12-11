<!--Variabel yang dideklarasikan dalam suatu fungsi memiliki LINGKUP LOKAL 
dan hanya dapat diakses di dalam fungsi itu-->

<?php
function myTest()
{
$x = 5; // local scope
echo "<p>Variable x inside function is: $x</p>";
}
myTest();
// penggunan x diluar function akan menghasilkan error
echo "<p>Variable x outside function is: $x</p>";
?>