<?php
// Functions
// 1) Defination of a function
// Example One ----------------------------------

function calcAge(){
    // Logic
    $age = 2023-1950;

    echo $age. '<br>';
}
// 2 Invoke the function
calcAge();

// Example Two ----------------------------------

function subtract($x, $y){
    return $x - $y;
}

$z =subtract(10, 5);

echo $z. '<br>';

// Example Three ---------------------------------

function calcArea($base=0, $height=0){
    return 0.5*$base*$height;
}

$area = calcArea(10,25);
echo $area. '<br>';

// Example Four ---------------------------------

$total =function($qty, $price){
    return $qty*$price;
};

echo $total(4, 600). '<br>';

// Example Five ---------------------------------
$multiply =fn($num1, $num2) => $num1 *$num2;

echo $multiply(3,3). '<br>';

/* Trial Question:
A restaurant wants to calculate the tip amount for a table of 4 customers. Write a PHP function that takes in the total bill amount and the percentage of the tip as parameters, and returns the total tip amount and the total bill amount including the tip.
*/ 

// Calculate the tip amount!

function calcTip($totalbillAmount, $tipPercentage){

    // Calculating the tip amount
    $tipAmount = $tipPercentage * $totalbillAmount / 100;

    // Calculate the totalBill amount!
    $totalBill = $totalbillAmount + $tipAmount; 

    $result = "The total Tip amount Is; {$tipAmount} and the Total Bill is; {$totalBill}";
    return $result;
}

echo calcTip(100000,10);

?>