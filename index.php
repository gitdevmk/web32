<?php
require_once("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createPreviewVideo(null);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showAllCategories();

// New Feature: Recommended Videos
$recommendedVideos = $containers->showRecommendedVideos();
echo "<div class='recommendedVideos'>
        <h2>Recommended Videos</h2>
        $recommendedVideos
      </div>";

// New Feature: Trending Videos
$trendingVideos = $containers->showTrendingVideos();
echo "<div class='trendingVideos'>
        <h2>Trending Videos</h2>
        $trendingVideos
      </div>";
?>
