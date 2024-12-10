<?php
function number() {
    echo 5;
}

number();

echo "<br>";

function addScore ($score1,$score2,$score3) {
    $totalScore = $score1 + $score2 + $score3;
    if ($totalScore > 210) {
        echo "合計点は".$totalScore."なので合格です";
    } else {
        echo "合計点は".$totalScore."なので不合格です";
    }
}

addScore (100,80,50);

echo "<br>";

function triangleArea ($bottom,$height) {
    return ($bottom * $height) / 2;
}

function squareArea ($width,$height) {
    return $width * $height;
}

function trapezoidArea ($top,$bottom,$height) {
    return ($top + $bottom) * $height / 2; 
}

$triangleArea = triangleArea(10,4);
echo $triangleArea."<br>";

$squareArea = squareArea(5,6);
echo $squareArea."<br>";

$trapezoidArea = trapezoidArea(18,16,6);
echo $trapezoidArea."<br>";