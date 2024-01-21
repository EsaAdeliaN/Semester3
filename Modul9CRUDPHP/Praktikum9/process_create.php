<?php
// Database connection
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    $title = $_POST['inputTitle'];
    $link = $_POST['inputLink'];

    // Proses upload file
    $target_dir = "uploads/";
    $photo = $target_dir . basename($_FILES["inputPhoto"]["name"]);
    move_uploaded_file($_FILES["inputPhoto"]["tmp_name"], $photo);

    // Insert data into the surveys table
    $sql = "INSERT INTO surveys (image_url, title, link) VALUES ('$photo', '$title', '$link')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Redirect back to create_data.php
header("Location: create_data.php");
exit();
?>
