<?php
require_once("../includes/config.php");

if (isset($_POST["videoId"]) && isset($_POST["username"])) {
    $videoId = $_POST["videoId"];
    $username = $_POST["username"];

    // Update video progress or insert a new record if it doesn't exist
    $query = $con->prepare("REPLACE INTO videoProgress (username, videoId, progress)
                            VALUES(:username, :videoId, :progress)");
    $query->bindValue(":username", $username);
    $query->bindValue(":videoId", $videoId);
    $query->bindValue(":progress", $_POST["progress"]);
    $query->execute();

    // Fetch user's watch history
    $historyQuery = $con->prepare("SELECT videoId FROM videoProgress 
                                   WHERE username=:username ORDER BY lastWatched DESC LIMIT 5");
    $historyQuery->bindValue(":username", $username);
    $historyQuery->execute();

    $historyVideos = $historyQuery->fetchAll(PDO::FETCH_COLUMN);

    // Fetch and display recommendations based on watch history
    $recommendationQuery = $con->prepare("SELECT * FROM videos WHERE videoId IN (" . implode(",", $historyVideos) . ")");
    $recommendationQuery->execute();
    
    // Display recommended videos
    while ($video = $recommendationQuery->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="recommendedVideo">';
        echo '<a href="watch.php?id=' . $video["videoId"] . '">';
        echo '<img src="' . $video["thumbnail"] . '" alt="' . $video["title"] . '">';
        echo '<span class="title">' . $video["title"] . '</span>';
        echo '</a>';
        echo '</div>';
    }
} else {
    echo "No videoId or username passed into file";
}
?>
