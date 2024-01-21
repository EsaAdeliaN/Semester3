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
                    <h5 class="card-title">Create Data</h5>
                </div>
                <div class="card-body">
                    <form action="process_update.php" method="post" enctype="multipart/form-data">
                        <!-- Input tersembunyi untuk menyimpan ID data yang akan diperbarui -->
                        <input type="hidden" name="dataID" value="ID_DATA_YANG_DIPERBARUI">

                        <div class="form-group">
                            <label for="inputPhoto">Icon Survei </label>
                            <input type="file" class="form-control-file" id="inputPhoto" name="inputPhoto">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Judul Survei</label>
                            <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Masukkan judul survei">
                        </div>
                        <div class="form-group">
                            <label for="inputLink">Link Survei</label>
                            <input type="text" class="form-control" id="inputLink" name="inputLink" placeholder="Masukkan link survei">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                        <button type="submit" class="btn btn-primary btn-block" style="background-color: white; color: blue;">keluar</button>
                    </form>
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
