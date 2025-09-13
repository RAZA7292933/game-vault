<?php include('../includes/auth.php'); ?>
<?php if (!isLoggedIn()) { header("Location: login.php"); exit(); } ?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
  <h2>Welcome to your dashboard</h2>
  <a href="upload.php">Upload New Game</a>
</body>
</html>
