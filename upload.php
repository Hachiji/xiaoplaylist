<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>Upload Music</title>
</head>
<body>
    <div class="container">
        <a href="index.html" class="back_btn">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

        <div class="form_content">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="form_title">Upload <strong>Music</strong></h2>
            <form action="/handlers/upload_handler.php" method="post">
                <div class="form_group">
                    <label for="song_name">Song Name:</label>
                    <input type="text" id="song_name" name="song_name" required>
                    <label for="singer">Singer:</label>
                    <input type="text" id="singer" name="singer" required>
                    <label for="song_img">Song Image URL:</label>
                    <input type="text" id="song_img" name="song_img" required>
                    <label for="song_file">Song File:</label>
                    <input class="form_file" type="file" id="song_file" name="song_file" accept="audio/*" required>
                </div>
                <button type="submit" class="form_btn">Upload</button>
            </form>
        </div>
    </div>

    <script type="module" src="./src/main.js"></script>
</body>
</html>