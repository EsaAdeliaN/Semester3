<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Data - Survey Dashboard</title>
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
                    <form action="process_create.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputPhoto">Icon Survei</label>
                            <input type="file" class="form-control-file" id="inputPhoto" name="inputPhoto" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Judul Survei</label>
                            <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Masukkan judul survei" required>
                        </div>
                        <div class="form-group">
                            <label for="inputLink">Link Survei</label>
                            <input type="text" class="form-control" id="inputLink" name="inputLink" placeholder="Masukkan link survei" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Tambah Data</button>
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
