<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataSiswa diklik maka
if (isset($_POST['dataSiswa'])) {
    $output = '';

    // mengambil data siswa dari nis yang berasal dari dataSiswa
    $sql = "SELECT * FROM siswa WHERE id_atlet = '" . $_POST['dataSiswa'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '<tr align="center">
                            <td colspan="2"><img src="img/' . $row['gambar'] . '" width="50%"></td>
                        </tr>
                        <tr>
                            <th width="40%">Nomor Anggota</th>
                            <td width="60%">' . $row['id_atlet'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama</th>
                            <td width="60%">' . $row['nama'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Tempat dan Tanggal Lahir</th>
                            <td width="60%">' . $row['tmpt_Lahir'] . ', ' . date("d M Y", strtotime($row['tgl_Lahir'])) . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Jenis Kelamin</th>
                            <td width="60%">' . $row['jekel'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Geup</th>
                            <td width="60%">' . $row['geup'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Prestasi</th>
                            <td width="60%">' . $row['prestasi'] . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
