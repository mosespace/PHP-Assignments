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


/*---------- Question Two-----------------------------------------------
A clothing store wants to calculate the total profit form a recent sale. If the store sold 50 dresses  at a cost of $25 each and sold them for $50 each, how can PHP variables be used to store this information, and how can concatenation be used to display the total profits earned?

*/ 

echo '<h1> Question Two</h1>';
$sold_dresses =50;

// Here i display the sold dresses!

echo $sold_dresses;

$price_per_dress = 50; // But in dollars!

// Here i display the price per dress!

echo '<br>' .$price_per_dress; // But with no dollar sign!

$costPerDress = 25; 

// Here i display the cost per dress

echo '<br>' .$costPerDress;

// Since finding profit is simple using this formula: Total Revenue - Total Expenses = Profit. I will use this formular as well.

$total_dress_revenue = $sold_dresses * $price_per_dress;

// Then, here i calculate the totalcost of the dresses:

$totalCost = $sold_dresses * $costPerDress;


// Finally, i calculate the total profit:
$totalProfit = $total_dress_revenue - $totalCost;


// To display the profit earned using concatenation, we can use the "." operator to concatenate the string "Total profit earned: $" with the value of the $total_revenue variable:

echo '<br>' ."The total profit from the sale of " . $sold_dresses . " dresses is $" . $totalProfit . ".";

// Or we can also use the following method of concatenation method to get the same results;

echo '<br>' ."The total profit from the sale of ${sold_dresses} dresses is $${totalProfit}";

?>