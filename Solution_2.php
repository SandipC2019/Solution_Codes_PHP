<?php

//Return lowest integer which is not present in the array
function solution($A) {
    sort($A);
    $min = 1;
    foreach ($A as $a)
    {
        if(($a <= $min) && ($a > 0))    
        {
            $min = $a;
            $min = $min + 1;
        }
    }
    return $min;
}

//$nums = array(1, 2, 3, 6, 4);
//$nums = array(-1, -3, -2);
//$nums = array(1, 3, 6, 4, 1, 2);
//echo solution($nums);

?>