<?php

$waarde= array(
    $fifthy =50,
    $twenty=20,
    $ten =10,
    $five =5,
    $two = 2,
    $one = 1,
);

$input = $argv[1];
$inputRounded = intval($input);
if(!$inputRounded == 0) {
    foreach($waarde as $waarde2){
        $amountOfx = floor($inputRounded / $waarde2);
        echo "$amountOfx x $waarde2" . PHP_EOL;
        $minus = $amountOfx * $waarde2;
        $inputRounded = $inputRounded - $minus;
    }
} else {
    exit("> geen wisselgeld.");
}