<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data - Survey Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card form-container">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="card-title">Update Data</h5>
                </div>
                <div class="card-body">
                    <?php
                    // Database connection
                    include "config.php";

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        // Retrieve data from the surveys table
                        $sql = "SELECT * FROM surveys WHERE id = $id";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="process_update.php" method="post" enctype="multipart/form-data">
                        <!-- Input tersembunyi untuk menyimpan ID data yang akan diperbarui -->
                        <input type="hidden" name="dataID" value="<?php echo $row['id']; ?>">

                        <div class="form-group">
                            <label for="inputPhoto">Icon Survei</label>
                            <input type="file" class="form-control-file" id="inputPhoto" name="inputPhoto">
                            <img src="<?php echo $row['image_url']; ?>" alt="Icon/Foto" style="max-width: 100px;">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Judul Survei</label>
                            <input type="text" class="form-control" id="inputTitle" name="inputTitle" value="<?php echo $row['title']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="inputLink">Link Survei</label>
                            <input type="text" class="form-control" id="inputLink" name="inputLink" value="<?php echo $row['link']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
