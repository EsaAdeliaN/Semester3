<?php
// Database connection
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_data'])) {
    $dataID = $_POST["dataID"];
    $title = $_POST["inputTitle"];
    $link = $_POST["inputLink"];

    // Proses upload file jika ada perubahan
    if ($_FILES["inputPhoto"]["name"] != "") {
        $target_dir = "uploads/";
        $photo = $target_dir . basename($_FILES["inputPhoto"]["name"]);
        move_uploaded_file($_FILES["inputPhoto"]["tmp_name"], $photo);

        // Update data dengan foto baru
        $sql = "UPDATE surveys SET image_url='$photo', title='$title', link='$link' WHERE id=$dataID";
    } else {
        // Update data tanpa mengubah foto
        $sql = "UPDATE surveys SET title='$title', link='$link' WHERE id=$dataID";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Redirect back to update_data.php
header("Location: update_data.php");
exit();
?>
