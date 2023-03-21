<?php

echo 'This Is Assignment 3.0'. '<br>';
/* ----------------------------Question 2----------------------------------------
A travel agency wants to convert currency values from one currency to another. Write a PHP function that takes in the currency value, the original currency, and the target currency as paramaters, and returns the converted value. Use real exchange rates for the currencies.*/

// Solution;
function convertCurrency($value, $fromCurrency, $toCurrency) {
    $exchangeRates = [
        'USD' => [
            'UGX' => 3,758.55,      // These are exchange rates as of current
            'EURO' => 0.98,
        ],
        'EUR' => [
            'USD' => 1.07,        // These are exchange rates as of current
            'UGX' => 4,033.34,            
        ],
        'UGX' => [
            'USD' => 0.00027,    // These are exchange rates as of current
            'EUR' => 0.00025,
        ],
    ];
    
    $exchangeRate = $exchangeRates[$fromCurrency][$toCurrency]; // Here i use a fixed exchange rate table to get the exchange rate between the currencies!

    $convertedValue = $value * $exchangeRate; // Here i multiplies the value by the exchange rate to get the converted value.

    return $convertedValue; // These are the converted values
}


$value = 10000; // This is the Original value
$fromCurrency = 'EUR'; // This is the Original currency
$toCurrency = 'UGX'; // This is the Target currency

$convertedValue = convertCurrency($value, $fromCurrency, $toCurrency);
echo "$value $fromCurrency is equal to $convertedValue $toCurrency";
// ---------------------------------End Of Question 2----------------------------

?> 