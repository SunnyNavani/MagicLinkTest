<?php
$highscoreFile = './highscore.txt';
$curHighScore = (int) file_get_contents($highscoreFile);
$curScore = (int) $_POST["curSex"];
echo "Score ". $curScore;
echo "HighScore ". $curhighscore;