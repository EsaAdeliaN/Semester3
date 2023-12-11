<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dosen Politeknik Balekambang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: #333;
    }

    form {
      max-width: 400px;
      width: 100%;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 20px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    input[type="submit"]:hover {
      background-color: #2980b9;
    }

    h2 {
      margin-top: 20px;
      color: #333;
    }

    p {
      margin-bottom: 10px;
      color: #555;
    }

    .output-container {
      max-width: 400px;
      width: 100%;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Dosen Politeknik Balekambang</h1>
  <form method="post" action="">
    <label for="nama">Masukkan Nama Dosen:</label>
    <select name="nama" id="nama">
      <option value="">pilih nama dosen</option>
      <?php
      // Array untuk menyimpan nama-nama dosen
      $daftarDosen = [
        "Indra Kurniawan, M.Kom.",
        "Ahamad Faiq Abror, M.Pd.",
        "Shofia Ulfah, M.Kom.",
        "Ahlis Noor Kholili, M.Kom."
      ];

      // Menampilkan pilihan nama dosen dari array
      foreach ($daftarDosen as $dosen) {
        echo "<option value=\"$dosen\">$dosen</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="Proses">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nama'])) {
      $nama = $_POST['nama'];
      $jumlahKata = str_word_count($nama);
      $jumlahHuruf = strlen(preg_replace('/\s+/', '', $nama));
      $kebalikanNama = strrev($nama);

      echo "<div class='output-container'>";
      echo "<h2>Hasil:</h2>";
      echo "<p>Jumlah Kata: $jumlahKata</p>";
      echo "<p>Jumlah Huruf: $jumlahHuruf</p>";
      echo "<p>Kebalikan Nama: $kebalikanNama</p>";
      echo "</div>";
    }
  }
  ?>

</body>
</html>
