<?php

//Return highest possible total number of apple that can be collected by both K and L
function solution($A, $K, $L) {
    if(!empty($A) && $K>0 && $L>0) {
        $orcLen = count($A);
        $lenFor = 0;
        $kTot = 0;
        $kTotTemp = 0;
        $kIndex = 0;
        $lTot = 0;
        $lTot1 = 0;
        $lTot2 = 0;
        $lTotTemp = 0;

        //Check for if valid calculation for both the apple taker
        if($orcLen>=($K+$L)) {
            //Leaving space for L length apple taker at the end of the row
            $lenFor = (($orcLen - $K)+1)-$L;

            //Check for highest total for K
            if($lenFor>0) {
                $kArray = returnHighestTotal(0, $lenFor, $A, $K);
                $kTot = $kArray[0];
                $kIndex = $kArray[1];
            }
            else {
                $kTot = array_sum(array_slice($A, 0, $K));
            }

            //Check for highest total for L if space available in front of the row
            $lTotTemp = 0;
            if($kIndex>=$L)
            {
                $lArray1 = returnHighestTotal(0, $kIndex, $A, $L);
                $lTot1 = $lArray1[0];
            }

            //Check for highest total for L in end of the row
            $lTotTemp = 0;
            $lIndexForL2 = $kIndex+$K;
            $lenForL2 = ($orcLen - $L)+1;
            if($lenForL2 > 0)
            {
                $lArray2 = returnHighestTotal($lIndexForL2, $lenForL2, $A, $L);
                $lTot2 = $lArray2[0];
            }
            if($lTot1>$lTot2) {
                $lTot = $lTot1;
            }
            else {
                $lTot = $lTot2;
            }

            return $kTot+$lTot;
        }
        else {
            return -1;
        }
    }
    else {
        return -1;
    }
}

//Return highest total count for consecutive trees of sliceLength 
function returnHighestTotal($index, $forLength, $mainArray, $sliceLength) {
    $totTemp = 0;
    $tot = 0;
    $totIndex = 0;
    for ($x = $index; $x < $forLength; $x++) {
        $totTemp = array_sum(array_slice($mainArray, $x, $sliceLength));
        if($totTemp>$tot) {
            $tot = $totTemp;
            $totIndex = $x;
        }
    } 
    $a = [$tot, $totIndex];
    return $a;
}

//echo solution([4, 120, 15, 22, 8, 25, 55, 5], 3 ,2);
?>