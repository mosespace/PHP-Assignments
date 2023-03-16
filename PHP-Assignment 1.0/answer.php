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

// Or also the following method of concatenation method can be used to get the same results;
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

// Or also the following method of concatenation method can be used to get the same results;

echo '<br>' ."The total profit from the sale of ${sold_dresses} dresses is $${totalProfit}";


/*---------- Question Three--------------------------------------------
A construction company needs to calculate the total costs of materials used for a recent project. If the project required 300 bags of cement at $10 per bag and 1000 bricks at $0.50 per brick, how can PHP variables be used to store this information, and how can concatenation be used to display the total cost of materials used?

*/ 

echo '<h1> Question Three</h1>';
$cement_bags = 300;

// Here i display the cement bags!

echo '<br>' .$cement_bags;

$cement_cost_per_bag = 10;

// Here i display the cost per cement bag!

echo '<br>' .$cement_cost_per_bag;

$bricks = 1000;

// Here i display the number of bricks!

echo '<br>' .$bricks;

$brick_cost_each = 0.5;

// Here i display the number of cost each brick buys!

echo '<br>' .$brick_cost_each;

// Here icalculate the total cost by multiplying the quantity and cost of each material and summing the results all together in the total cost variable.

$total_costs = ($cement_bags * $cement_cost_per_bag) + ($bricks * $brick_cost_each);

// Finally, i use concatenation to display the total cost of materials used by concatenating the string "The total cost of materials used for the project is $" with the value in the variable of $total_cost.

echo '<br>' ."The total cost of materials used for the project is $" . $total_costs;

// Or also the following method of concatenation method can be used to get the same results;

echo '<br>' ."The total cost of materials used for the project is $${total_costs}";


/*---------- Question Four--------------------------------------------
A grocery store wants to calculate the total weight of apples sold in a week. If the store sold 200 pounds of apples on Monday, 150 pounds on Wednesday, and 175 pounds on fridady, how can PHP variables be used to store this information and how can concatenation be used to display the totla weight of apples sold in the week?

*/ 

echo '<h1> Question Four</h1>';
$apples_monday = 200;

// Here i display the apples sold on Monday!

echo '<br>' .$apples_monday;

$apples_wednesday = 150;

// Here i display the apples sold on Wednesday!

echo '<br>' .$apples_wednesday;

$apples_friday = 175;

// Here i display the apples sold on Fridays!

echo '<br>' .$apples_friday;

// Here icalculate the total weight of apples sold by summing the weight of apples sold on each day all together in the total cost variable.

$total_apples = $apples_monday + $apples_wednesday + $apples_friday;

echo '<br>' ."The total weight of apples sold in the week is " . $total_apples . " pounds.";

// Or also the following method of concatenation method can be used to get the same results;

echo '<br>' ."The total weight of apples sold in the week is ${total_apples} pounds.";

?>