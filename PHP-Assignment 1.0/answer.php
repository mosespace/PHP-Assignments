<?php

/*----------- Question One--------------------------------------------
A local coffe shop wants to keep track of the total revenue earned from coffe sales in a day. If the shop sold 120 cups of coffee at $2.50 each, how can PHP variables be used to store this information and how can concatenation be used to display the total revenue earned?

*/

echo '<h1> Question One</h1>';
$cups_sold = 120;

// Here i display the cups sold!

echo $cups_sold;


$price_per_cup = 2.50;

// Here i display the price per cup!

echo '<br>' .$price_per_cup;

// To calculate the total revenue earned, we can multiply the number of cups sold by the price per cup and store the result in another variable:

$total_revenue = $cups_sold * $price_per_cup;

// To display the total revenue earned using concatenation, we can use the "." operator to concatenate the string "Total revenue earned: $" with the value of the $total_revenue variable:

echo '<br>' ."Total revenue earned: $" . $total_revenue;

// Or we can also use the following method of concatenation to get the same results;

echo '<br>' ."Total revenue earned: $${total_revenue}";



?>