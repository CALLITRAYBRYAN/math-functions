<?php
//Addition 
function add($a, $b) {
    return $a + $b;
}
//Subtraction
function subtract($a, $b) {
    return $a - $b;
}
//Multiplication
function multiply($a, $b) {
    return $a * $b;
}
//Division
function divide($a, $b) {
    if ($b == 0) {
        return "Cannot be divided by zero";
    }
    return $a / $b;
}
//Numbers to use in the functions
$a = 10;
$b = 5;
//Calling the functions and displaying the results
echo "Addition: " . add($a, $b) . "\n";
echo "Subtraction: " . subtract($a, $b) . "\n";
echo "Multiplication: " . multiply($a, $b) . "\n";
echo "Division: " . divide($a, $b) . "\n";
?>