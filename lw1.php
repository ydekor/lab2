<?php

function sumTime(string $firstTime, string $secondTime): string
{
    $first = [];
    $second = [];
    $result = [];
    $first = explode(':', $firstTime);
    $second = explode(':', $secondTime);
    $result[0] = (intval($first[0])) + (intval($second[0]));
    $result[1] = (intval($first[1])) + (intval($second[1]));
    $result[2] = (intval($first[2])) + (intval($second[2]));
    if ((intval($result[2])) > 60) {
        $result[1] = (intval($result[1])) + 1;
        $result[2] = (intval($result[2])) - 60;
    }
    if ((intval($result[1])) > 60) {
        $result[0] = (intval($result[0])) + 1;
        $result[1] = (intval($result[1])) - 60;
    }
    if ((intval($result[0])) > 60) {
        $result[0] = (intval($result[0])) - 24;
    }
    print 'result: ' . $result[0] . ':' . $result[1] . ':' . $result[2];
    return "$result[0]:$result[1]:$result[2]";
}

sumTime('12:10:10', '10:10:10');
