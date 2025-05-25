<?php 
include 'database/config.php';

$sql = "SELECT song_name, singer, song_img FROM music ORDER BY song_id ASC LIMIT 4";
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
        <h1>Top Trending Music</h1>
            <div class="trending section">
                <div class="trending_content-show">
                    <div class="trending_box-show">
                        <img src="" alt="No.1 trending music">
                        <h3 class="title">Multo</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.2 trending music">
                        <h3 class="title">Bunny Girl</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.3 trending music">
                        <h3 class="title">Show</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.4 trending music">
                        <h3 class="title">Ussewa</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.5 trending music">
                        <h3 class="title">Koiiro</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.6 trending music">
                        <h3 class="title">Dadalhin</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.7 trending music">
                        <h3 class="title">Kabilang Buhay</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>

                    <div class="trending_box-show">
                        <img src="" alt="No.8 trending music">
                        <h3 class="title">bakit ba ikaw</h3>
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat numquam placeat ipsum similique consequatur fuga est.</p>
                    </div>
                </div>
            </div>
        </div>

        <script type="module" src="./src/main.js"></script>
</body>
</html>