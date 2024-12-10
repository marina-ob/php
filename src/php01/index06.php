<?php
for ($i = 2; $i <=10; $i += 2) {
    echo $i;
    echo "<br>";
}

echo "<br>";

$count = 0;

while ($count < 20) {
    $count ++;
    echo $count;
    echo "<br>";
}

echo "<br>";



$count2 = 0;

while ($count2 <= 100) {
    $count2 ++;
    if ($count2 % 3 === 0){
        continue;
    }
    if ($count2 === 20) {
        break;
    }
    echo $count2;
    echo "<br>";
}

echo "<br>";

$nume = 0;

do {
    echo "num = " . $nume . "<br>";
    $nume ++;
} while ($nume < 3);

echo "<br>";

for ($i = 1; $i < 51; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz"."<br>";
    } elseif ($i % 3 === 0) {
        echo "Fizz"."<br>";
    } elseif ($i % 5 === 0) {
        echo "Buzz"."<br>";
    } else {
        echo $i."<br>";
    }
}


for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "⚫︎";
    }
    echo "<br>";
}