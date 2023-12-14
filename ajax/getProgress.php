<?php
require_once("../includes/config.php");

if (isset($_POST["videoId"]) && isset($_POST["username"])) {
    $videoId = $_POST["videoId"];
    $username = $_POST["username"];

    // Fetch and update video progress
    $progressQuery = $con->prepare("SELECT progress FROM videoProgress 
                                    WHERE username=:username AND videoId=:videoId");
    $progressQuery->bindValue(":username", $username);
    $progressQuery->bindValue(":videoId", $videoId);
    $progressQuery->execute();

    $progress = $progressQuery->fetchColumn();

    // If the video progress record exists, update the last watched time
    if ($progress !== false) {
        $updateQuery = $con->prepare("UPDATE videoProgress SET lastWatched=NOW() 
                                      WHERE username=:username AND videoId=:videoId");
        $updateQuery->bindValue(":username", $username);
        $updateQuery->bindValue(":videoId", $videoId);
        $updateQuery->execute();
    }

    echo $progress;

    // Fetch more details about the video
    $videoDetailsQuery = $con->prepare("SELECT * FROM videos WHERE videoId=:videoId");
    $videoDetailsQuery->bindValue(":videoId", $videoId);
    $videoDetailsQuery->execute();
    $videoDetails = $videoDetailsQuery->fetch(PDO::FETCH_ASSOC);

    // Display video details
    echo json_encode(["videoDetails" => $videoDetails]);

    // Fetch and display
