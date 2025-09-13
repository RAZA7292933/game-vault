<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>GameVault</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
  <h1>🎮 Welcome to GameVault</h1>
  <div class="game-grid">
    <?php
      $games = getGames($conn);
      while ($game = $games->fetch_assoc()) {
        echo "<div class='game-card'>
                <img src='../assets/images/{$game['thumbnail']}' />
                <h3>{$game['title']}</h3>
                <a href='play.php?id={$game['id']}'>Play</a>
              </div>";
      }
    ?>
  </div>
</body>
</html>
