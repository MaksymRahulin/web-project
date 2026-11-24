<?php
$mesta = ["Praha", "Plzen", "Brno", "Ostrava"];
echo sizeof($mesta) . "<br><br>";
for($i = (sizeof($mesta) + 1); $i <= 12; $i++){
    $mesta[] = "New index$i";
}
foreach ($mesta as $index => $hodnota){
    echo $hodnota . "<br>";
    if ($index > 10){
        break;
    }

}
echo "<br>" . sizeof($mesta);