<?php

$array = [
    " Name: Riazul Islam", " Mobile: 01722754100", " Age: 28"
];

foreach ($array as $key => $value) {
    echo $key . ':- ' . $value . '<br/>';
}

echo '<br/>';

$array = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10
];

foreach ($array as $key => $value) {
    echo $value . ' x 10 =' . $value * 10, '<br/>';
}
