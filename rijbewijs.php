<?php

$computter1 = 'Hoe oud ben je?'.PHP_EOL;
$computter2 = 'Helaas, je mag nog niet beginnen met rijlessen'.PHP_EOL;
$computter3 = 'Je mag beginnen met rijlessen!'.PHP_EOL;
$auto = 16.5;

echo $computter1;

$leeftijd = readline("");

if ($auto > $leeftijd)
    echo $computter2;

if ($auto <= $leeftijd)
    echo $computter3;