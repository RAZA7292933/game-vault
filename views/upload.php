<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Upload Game</title></head>
<body>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Game Title" required />
    <input type="file" name="thumbnail" required />
    <textarea name="description" placeholder="Game Description"></textarea>
    <button type="submit">Upload</button>
  </form>
</body>
</html>
