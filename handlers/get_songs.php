<?php 
include '../database/config.php';

$sql = "SELECT song_name, singer, song_img FROM music ORDER BY song_id ASC LIMIT 4";
$result = $conn->query($sql);

$songs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($songs);

?>