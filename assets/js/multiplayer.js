setInterval(() => {
  fetch('/sync.php')
    .then(res => res.json())
    .then(data => updateGameState(data));
}, 1000);
