<?php
    echo "hoe oud ben je?" .  PHP_EOL;
    $leeftijd = readline();
    $requirmend = 16.5;

    if($leeftijd > $requirmend) {
        echo "je mag beginnen met rijlessen";
    }
    if($leeftijd < $requirmend) {
        echo "helaas, je  mag nog niet beginnen met je rijlessen";
    }