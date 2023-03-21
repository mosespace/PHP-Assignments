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


/* ----------------------------Question 3----------------------------------------
A fitness center wants to track the body mass index (BMI) of their customers. Write a PHP function that takes in the customer's height and weight as parameters and returns their BMI. Use the BMI formula to calculate the value.*/

//The formula for BMI is weight in kilograms divided by height in meters squared.
function calculateBMI($height, $weight) {
    $bmi = $weight / ($height * $height); // The result is returned as a floating-point number representing the BMI.
    return $bmi;
}

$height = 10; // meters
$weight = 10; // kilograms

$bmi = calculateBMI($height, $weight);
echo '<br>' ."The customer's BMI is: " . $bmi; 

// ---------------------------------End Of Question 3----------------------------


/* ----------------------------Question 4----------------------------------------
An online store wants to calculate the shipping cost for a purchase based on the weight and destination of the package. Write a PHP function that takes in the weight of the package and the desitination country as parameters, and returns the shipping cost. Use real shipping rates for the destination country.*/ 

function calculateShippingCost($weight, $destinationCountry) {
    $shippingRate = 2.5; // flat rate per kilogram

    $shippingCost = $weight * $shippingRate; // I calculate the shipping cost by multiplying the weight by a flat rate per kilogram

    return $shippingCost;
}

$weight = 2; // weight in kilograms
$destinationCountry = 'UG'; // destination country

$shippingCost = calculateShippingCost($weight, $destinationCountry);
echo "The shipping cost to $destinationCountry for a $weight kg package is $shippingCost USD";

// ---------------------------------End Of Question 4----------------------------

?> 