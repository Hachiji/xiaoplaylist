<?php
include '../database/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $song_name = $_POST['song_name'];
    $singer = $_POST['singer'];

    //music file (Required)
    $music_name = $_FILES['song_file']['name'];
    $music_tmp = $_FILES['song_file']['tmp_name'];
    $upload_music = "../assets/uploads/music/" . basename($music_name);
    move_uploaded_file($music_tmp, $upload_music);

    //song image (Optional)
    if (isset($_FILES['song_img']) && $_FILES['song_img']['error'] === UPLOAD_ERR_OK) {
        $img_name = $_FILES['song_img']['name'];
        $img_tmp = $_FILES['song_img']['tmp_name'];
        $upload_img = "../assets/uploads/img/" . basename($img_name);
        move_uploaded_file($img_tmp, $upload_img);
    } else {
        //if no image uploaded, use default
        $img_name = 'default.png';
    }

    $sql = "INSERT INTO music (song_name, singer, song_img, song_file) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $song_name, $singer, $img_name, $music_name);

    if ($stmt->execute()) {
        echo "<script>alert('Song uploaded successfully!'); window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Error uploading song: " . $stmt->error . "'); window.location.href='../upload.php';</script>";
    }
}
?>
