<?php
echo "<h1>Ukol 1</h1>";
$movies = ["Spider Man", "Batman", "Marvel", "Iron Man"];
echo $movies[0] . " | " . $movies[3];
$movies[] = "Avatar";
echo " | " . count($movies);

echo "<h1>Ukol 2</h1>";
echo "<ol>";
    foreach($movies as $hodnota){
        echo "<li>$hodnota</li>";
    }
echo "</ol>";