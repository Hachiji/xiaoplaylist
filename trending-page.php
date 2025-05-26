<?php 
include 'database/config.php';

$sql = "SELECT song_name, singer, song_img, song_file FROM music ORDER BY song_id ASC";
$result = $conn->query($sql);

$songs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = $row;
    } 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Music</title>
</head>
<body>
    <div class="container">
        <h1>Trending Music</h1>
            <div class="trending section">
                <div class="trending_content-show">
                    <?php foreach ($songs as $song): ?>
                        <div class="trending_box-show">
                            <img src="assets/uploads/img/<?= htmlspecialchars($song['song_img']) ?>" alt="<?= htmlspecialchars($song['song_img']) ?> Image">
                                <h3 class="main_title"><?= htmlspecialchars($song['song_name']) ?></h3>
                                <p class="singer"><?= htmlspecialchars($song['singer']) ?></p>
                                <audio controls preload="none">
                                    <source src="assets/uploads/music/<?= htmlspecialchars($song['song_file']) ?>" type="audio/mpeg">
                                </audio>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <script type="module" src="./src/main.js"></script>
</body>
</html>