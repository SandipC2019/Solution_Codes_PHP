<?php

function solution($S) {
    $mainArray = str_split($S);
    $totLen = count($mainArray);
    $numOfOB = 0;
    $numOfCB = 0;
    for($i = 0; $i < $totLen; $i++)
    {
        $numOfOB = numOfBrackets($mainArray, "(", 0, $i+1);
        $numOfCB = numOfBrackets($mainArray, ")", $i+1, $totLen);
        if($numOfOB == $numOfCB)
            return $i+1;
    }
    if($numOfCB == 0)
        return 0;
    else
        return $i+1;
}

function numOfBrackets($a, $b, $start, $end) {
    $count = 0;
    if($start<$end)
    {
        for($i = $start; $i < $end; $i++)
        {
            if($a[$i] == $b)
            {
                $count++;
            }
        }
    }
    return $count;
}
