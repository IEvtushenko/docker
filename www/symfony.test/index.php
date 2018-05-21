<?php

//phpinfo();

$array = [1, 2, 3, 4, 55, 6, 789];

for ($i = 0; $i < count($array); $i++) {
    $super = $array[$i] + 100;
    echo $super;
}