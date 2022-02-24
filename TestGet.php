<?php
$highscoreFile = './highscore.txt';
$curhighscore = (int) file_get_contents($highscoreFile);
$curScore = (int) $_POST["curSex"];
echo "Score ". $curScore;
echo "HighScore ". $curhighscore;