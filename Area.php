<?php

function countAvailableArea($n, $altitude) {
    $array = explode(" ", $altitude);
    $area = 0;
    $highestAltitudeIndex  = 0;
    if($n<1 || $n>100000 || count($array)!==$n || min($array)<0 || max($array)>100000 ){
        echo 'error';
        return;
    }
    for($i=1;$i<$n;$i++) {
        if($array[$highestAltitudeIndex] > $array[$i]){
            $area++;
        } else {
            $highestAltitudeIndex = $i;

        }
    }
    echo $area;
}

$myfile = file("input.txt");
$n = intval($myfile[0]);
$altitude = $myfile[1];

countAvailableArea($n, $altitude);