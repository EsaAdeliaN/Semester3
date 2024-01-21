<?php
if (isset($_GET['delete'])) {
    $surveiid = $_GET['delete'];
    
    // Menampilkan konfirmasi penghapusan menggunakan HTML & CSS yang ditingkatkan
    echo "<!DOCTYPE html>
            <html>
            <head>
                <title>Konfirmasi Penghapusan Data</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                    }
                    .confirmation-box {
                        background-color: #fff;
                        border-radius: 5px;
                        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                        padding: 20px;
                        text-align: center;
                    }
                    .confirmation-box h2 {
                        margin-top: 0;
                    }
                    .btn {
                        padding: 8px 20px;
                        margin: 10px;
                        cursor: pointer;
                        border: none;
                        border-radius: 3px;
                        font-size: 14px;
                        text-transform: uppercase;
                    }
                    .btn-confirm {
                        background-color: #4CAF50;
                        color: #fff;
                    }
                    .btn-cancel {
                        background-color: #f44336;
                        color: #fff;
                    }
                </style>
            </head>
            <body>
                <div class='confirmation-box'>
                    <h2>Konfirmasi Penghapusan Data</h2>
                    <img src='images/hapus.png' alt='Delete Logo' class='logo' style='width: 120px;'>
                    <p>Apakah Anda yakin ingin menghapus data?</p>
                    <button class='btn btn-confirm' onclick=\"window.location.href='delete.php?delete={$surveiid}'\">Ya</button>
                    <button class='btn btn-cancel' onclick=\"window.location.href='home.php'\">Batal</button>
                </div>
            </body>
            </html>";
    exit(); // Pastikan untuk keluar dari script setelah menampilkan konfirmasi
}
?>
