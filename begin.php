<?php

$name = 'Riazul';
$name .= ' Islam';

echo $name;

echo '<br/>';

//comparison

var_dump(10 <= 11);
echo '<br/>';

var_dump(10 == 9);
echo '<br/>';

var_dump(10 != 9);
echo '<br/>';

//data type check and value check

var_dump(10 === '10');
echo '<br/>';

var_dump(10 == '10');
echo '<br/>';

var_dump(10 !== '10');
$day = 'Friday';
$today = 'Saturday';

if ($today === $day) {
    echo "Today is holiday";
} else {
    echo "Today is office day";
}
