<?php
$studentName = "Jan Novak";
$test1 = 75;
$test2 = 90;
$test3 = 60;

if($test1 > 100 || $test1 < 0){
    $test1 = 0;
}
if($test2 > 100 || $test1 < 0){
    $test2 = 0;
}
if($test3 > 100 || $test1 < 0){
    $test3 = 0;
}

$sumtest = $test1 + $test2 + $test3;
$prumertest = $sumtest/3;
$grade = 0;
if($prumertest >= 90){
    $grade = 1;
} elseif ($prumertest >= 75){
    $grade = 2;
} elseif ($prumertest >= 60){
    $grade = 3;
} elseif($prumertest >= 40){
    $grade = 4;
} else{
    $grade = 5;
}


echo $studentName;
echo "<br>";
echo "Test1: ";
echo $test1;
echo "<br>";
echo "Test2: ";
echo $test2;
echo "<br>";
echo "Test3: ";
echo $test3;
echo "<br>";
echo "Celkovy pocet bodu: ";
echo $sumtest;
echo "<br>";
echo "Prumer: ";
echo $prumertest;
echo "<br>";
echo "Procentualni uspesnost: ";
echo $prumertest;
echo "%";
echo "<br>";
echo "Vysledni znamka: ";
echo $grade;
echo "<br>";

if($grade <= 4){
    echo "Hezka prace";
} else {
    echo "Bonusové úkoly";
}


