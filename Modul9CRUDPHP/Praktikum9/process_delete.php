<?php
// Database connection
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dengan ID tertentu
    $sql = "DELETE FROM nama_tabel WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Data dengan ID $id berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi database
    mysqli_close($conn);
} else {
    echo "ID tidak ditemukan.";
}
?>
