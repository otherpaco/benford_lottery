<?php

$eins = 0;
$zwei = 0;
$drei = 0;
$vier = 0;
$fuenf = 0;
$sechs = 0;
$sieben = 0;
$acht = 0;
$neun = 0;
$all = 0;

$csv = [];
$lines = file('lottozahlen_archiv.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value) {
    $csv[$key] = str_getcsv($value);
}

foreach ($csv as $ziehung) {
    $first = $ziehung[1][0];
    $all++;
    switch ($first) {
        case 1:
            $eins++;
            break;
        case 2:
            $zwei++;
            break;
        case 3:
            $drei++;
            break;
        case 4:
            $vier++;
            break;
        case 5:
            $fuenf++;
            break;
        case 6:
            $sechs++;
            break;
        case 7:
            $sieben++;
            break;
        case 8:
            $acht++;
            break;
        case 9:
            $neun++;
            break;
    }
}

echo ("1 = " . $eins / $all * 100) . "%\n";
echo ("2 = " . $zwei / $all * 100) . "%\n";
echo ("3 = " . $drei / $all * 100) . "%\n";
echo ("4 = " . $vier / $all * 100) . "%\n";
echo ("5 = " . $fuenf / $all * 100) . "%\n";
echo ("6 = " . $sechs / $all * 100) . "%\n";
echo ("7 = " . $sieben / $all * 100) . "%\n";
echo ("8 = " . $acht / $all * 100) . "%\n";
echo ("9 = " . $neun / $all * 100) . "%\n";
