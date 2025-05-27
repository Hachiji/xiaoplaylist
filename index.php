<?php
include 'database/config.php';

$sql = "SELECT song_name, singer, song_img, song_file FROM music ORDER BY song_id ASC LIMIT 2";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

    <!-- css styles -->
    <link rel="stylesheet" href="./styles/main.css"/>
    <link rel="stylesheet" href="./styles/components/header.css"/>
    <link rel="stylesheet" href="./styles/components/mobile-nav.css"/>
    <link rel="stylesheet" href="./styles/components/trending.css"/>
    <link rel="stylesheet" href="./styles/components/trending-show.css"/>
    <link rel="stylesheet" href="./styles/components/form.css"/>
    <link rel="stylesheet" href="./styles/util.css"/>

    <title>Xiao Playlist</title>
</head>
<body>
    <article class="container">
        <!--desktop navigation bar-->
        <header>
            <nav>
                <button class="menu_icon">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="header_list">
                    <li>
                        <!--logo-->
                        <div class="logo">
                            <img src="assets/logo/xiaoplay4.png" alt="Xiao Playlist Logo">
                        </div>
                    </li>
                    <li>
                        <!--dark mode-->
                        <button id="darkMode" class="header_sun">
                            <i class="fa-regular fa-sun"></i>
                        </button>
                    </li>
                    <li>
                        <a class="header_links" href="#">J-Pop</a>
                    </li>
                    <li>
                        <a class="header_links" href="#">J-Rock</a>
                    </li>
                    <li>
                        <a class="header_links" href="#">Pinoy OPM</a>
                    </li>
                    <li>
                        <a class="header_links" href="#">K-Pop</a>
                    </li>
                    <li>
                        <a class="header_links" href="#">Rock</a>
                    </li>
                    <li>
                        <a class="header_links" href="#">Western Music</a>
                    </li>
                    <li>
                        <button class="header_btn">Login</button>
                    </li>
                </ul>
            </nav>
        </header>
        <!--mobile navigation bar-->
        <div class="mobile_header">
            <button class="mobile_menu_icon">MENU</button>
            <ul class="mobile_header_list">
                <li>
                    <a class="mobile_header_links" href="#">J-Pop</a>
                </li>
                <li>
                    <a class="mobile_header_links" href="#">J-Rock</a>
                </li>
                <li>
                    <a class="mobile_header_links" href="#">Pinoy OPM</a>
                </li>
                <li>
                    <a class="mobile_header_links" href="#">K-Pop</a>
                </li>
                <li>
                    <a class="mobile_header_links" href="#">Rock</a>
                </li>
                <li>
                    <a class="mobile_header_links" href="#">Western Music</a>
                </li>
                <li>
                    <button class="mobile_header_btn">Login</button>
                </li>
            </ul>
        </div>
        <main>
            <!--trending section-->
            <section class="trending section">
                <h1>Top Trending Music</h1>
                    <a href="trending-page.php" class="main_show-all">show all</a>
                <div class="trending_content">
                    <?php foreach ($songs as $song): ?>
                        <div class="trending_box">
                            <img src="assets/uploads/img/<?= htmlspecialchars($song['song_img']) ?>" 
                            alt="<?= htmlspecialchars($song['song_name']) ?> Image">
     
                            <h3 class="main_title"><?= htmlspecialchars($song['song_name']) ?></h3>
                            <p class="singer"><?= htmlspecialchars($song['singer']) ?></p>
                            <audio controls preload="none">
                                <source src="assets/uploads/music/<?= htmlspecialchars($song['song_file']) ?>" type="audio/mpeg">
                            </audio>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="form_btn_container">
                    <a href="upload.php" class="form_btn">Upload Music</a>
                </div>
            </section>
            <!-- <section></section>
            <section></section> 
            <section></section>
            <section></section>
            <section></section> -->
        </main>
    <script src="./src/main.js"></script>
    </article>
</body>
</html>