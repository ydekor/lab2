<?php

function sumTime($firstTime, $secondTime): void {

    $first = explode(':', $firstTime);
    if(!checkCorrectTime($first)) {
        echo "oshibka";
        return;
    }
    $second = explode(':', $secondTime);
    $sec = intval($first[2]) + intval($second[2]);
    $minute = intval($first[1]) + intval($second[1]);
    $hour = intval($first[0]) + intval($second[0]);

    if($sec >= 60) {
        $minute += intval($sec / 60);
        $tempSecs = $sec % 60;
    }
    if($minute >= 60) {
        $hour += intval($sec / 60);
        $minute = $minute % 60;
    }
    if($hour >= 24) {
        $hour = $hour % 24;
    }
    print 'result: ' . $hour . ':'. $minute . ':' . $sec; 
}

function checkCorrectTime($first): bool {
    if(count ($first) < 3) {
        return false;
    }
    foreach($first as $element) {
        try {
            intval($element);
        }
        catch(Exception $e) {
            return false;
        }

        if($element < 0) {
            return false;
        }
    }
    return true;
}

sumTime('10:10:10','10:10:10');