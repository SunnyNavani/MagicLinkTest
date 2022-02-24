<?php
$highscoreFile = './highscore.txt';
$curHighScore = (int) file_get_contents($highscoreFile);
$curScore = (int) $_POST["curSex"];
file_put_contents($highscoreFile,$curScore);
echo "Score ". $curScore;
echo "HighScore ". $curHighScore;
?>