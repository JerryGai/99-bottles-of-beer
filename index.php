<?php

function printOutLyrics($totalBottles) 
{

    if(!isset($totalBottles) || !is_int($totalBottles) || $totalBottles < 1 ) 
    {
        exit("Please provide a valid (positive integer) number of bottles");
    }

    $totalBottlePlural = $totalBottles > 1 ? "s" : "";
    $title = "{$totalBottles} Bottle{$totalBottlePlural} of Beer";

    echo "<h2>$title</h2><br>";
    for ($i = $totalBottles; $i > 0; $i--) 
    {
        $bottleLeft = ($i-1) ?: "no more";
        $currentBottlePlural = $i > 1 ? "s" : "";
        $leftBottlePlural = $bottleLeft > 1 ? "s" : "";

        echo "<p>";
        echo "{$i} bottle{$currentBottlePlural} of beer on the wall, {$i} bottle{$currentBottlePlural} of beer.<br>";
        echo "Take one down and pass it around, {$bottleLeft} bottle{$leftBottlePlural} of beer on the wall.";
        echo "</p><br>";

        if($i === 1) 
        {
            echo "<p>";
            echo "No more bottles of beer on the wall, no more bottles of beer.<br>";
            echo "Go to the store and buy some more, {$totalBottles} bottle{$totalBottlePlural} of beer on the wall.";
            echo "</p><br>";
        }
    }
}

printOutLyrics(9);
