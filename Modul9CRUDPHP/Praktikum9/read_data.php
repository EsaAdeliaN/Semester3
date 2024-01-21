<?php
// Database connection
include "config.php";

// Fungsi untuk mendapatkan data survei dari database
function getSurveys()
{
    global $conn;
    $sql = "SELECT * FROM surveys";
    $result = mysqli_query($conn, $sql);

    $surveys = [];

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $surveys[] = $row;
        }
    }

    return $surveys;
}

// Mendapatkan data survei
$surveys = getSurveys();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Survei</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 50px;
            max-height: 50px;
        }
    </style>
</head>

<body>
    <h2>Data Survei</h2>

    <!-- Tombol Create New Data -->
    <a href="create_data.php">Create New Data</a>

    <table>
        <thead>
            <tr>
                <th>Icon/Foto</th>
                <th>Judul Survei</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($surveys as $survey) : ?>
                <tr>
                    <td><img src="<?php echo $survey['image_url']; ?>" alt="Icon/Foto"></td>
                    <td><?php echo $survey['title']; ?></td>
                    <td><a href="<?php echo $survey['link']; ?>" target="_blank"><?php echo $survey['link']; ?></a></td>
                    <td>
                        <a href="update_data.php?id=<?php echo $survey['id']; ?>">Edit</a>
                        <a href="process_delete.php?id=<?php echo $survey['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function editSurvey(id) {
            // Tambahkan logika untuk mengedit survei (misalnya, redirect ke halaman edit)
            console.log('Edit survey dengan ID ' + id);
        }

        function deleteSurvey(id) {
            // Tambahkan logika untuk menghapus survei (misalnya, konfirmasi dan kirim request hapus)
            console.log('Hapus survey dengan ID ' + id);
        }
    </script>
</body>

</html>
