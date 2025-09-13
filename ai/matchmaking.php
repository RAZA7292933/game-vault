<?php
function findMatch($userSkill) {
  $opponents = [100, 200, 300];
  return $opponents[array_rand($opponents)];
}
?>
