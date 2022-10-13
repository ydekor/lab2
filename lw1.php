<?php

function sumTime(string $firstTime, string $secondTime): string
{
    $first = [];
    $second = [];
    $result = [];
    $nums = ' 0123456789:';
    foreach (str_split($firstTime) as $tmp) {
        if (!(strpos($nums, $tmp))) {
            return 'oshibka';
        }
    }
    $first = explode(':', $firstTime);
    foreach (str_split($secondTime) as $tmp) {
        if (!(strpos($nums, $tmp))) {
            return 'oshibka';
        }
    }
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
    return "$result[0]:$result[1]:$result[2]";
}

echo sumTime($argv[1], $argv[2]);
