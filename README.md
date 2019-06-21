# Solution Codes in PHP
Solution codes for some specific problems in PHP

## Problem Statement for Solution 1: Apple Orchard Problem
In an Apple Orchard, all the apple trees are placed in a row. Two apple collectors Kane and Lui are going to collect apples from the orchard. Both of them will collect from some number of consecutive trees, where both their selected tree sets will be disjoint, which means none of their selected trees will be the same. Now, the problem is to find maximum number of apple that can be collected by both Kane and Lui jointly, if the following infos are available:
1. $A = an array containing number of apples per tree in the row
2. $K = total number of consecutive trees to be used by Kane
3. $L = total number of consecutive trees to be used by Lui

If the total number of trees used by Kane and Lui exceeds total number of trees in the row, then return -1

For example, 
If $A = [4, 120, 15, 22, 8, 25, 55, 5], which means 4, 120... are the number of apples in the trees; $K = 3 and $L = 2; then Kane will pick 3 trees from 2nd to 4th(120, 15, 22) and Lui will pick 2 trees 6th and 7th(25, 55), and total will be 237, which is the maximum possible number.
If $A = [4, 120, 15, 22], and $K = 3 and $L = 2; then return value should be -1

## Problem Statement for Solution 2
Code to return lowest integer(greater than 0) which is not present in an array. If the array elements are negative integer then 1 should be returned.

For example, 
1. If the array is [1, 2, 3, 6, 4], then the return value should be 5
2. If the array is [-1, -3, -2], then the return value should be 1

## Problem Statement for Solution 3
Code to return the 'K'th Day after the day 'S', where 'K' is any positive integer and 'S' is the name of the day in below format:
['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']

For example,
If the input value set is ("Wed", 2), then return value should be "Fri"

## Problem Statement for Solution 4
Code to find a position(k) in a string consists of only '(' and ')', where if the string is divided into two parts then the number of '(' or openning bracket in the first part will be equal to number of ')' or closing bracket in the second part.
Where 0<= k <= n (n is the total length of the string)

For example,
1. If the input value set is "(())", then  return value should be 2 (as 2 is position starting from 1, where the left su string has 2 openning brackets and right half has same number of closing brackets)
2. If the input value set is "(())))(", then  return value should be 4
3. If the input value set is "))", then  return value should be 2

