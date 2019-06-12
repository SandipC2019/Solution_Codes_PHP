<?php

//Return the Kth Day after the day S
function solution($S, $K) {
    $week = array(0 => 'Mon', 1 => 'Tue', 2 => 'Wed', 3 => 'Thu', 4 => 'Fri', 5 => 'Sat', 6 => 'Sun');
    $preDayKey = array_search($S,$week);
    $totDay = $preDayKey + $K;
    $futdayKey = fmod($totDay,7);
    return $week[$futdayKey];
}

//echo solution("Wed", 2);

?>