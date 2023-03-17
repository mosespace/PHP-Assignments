<?php

echo '<h1>Question One</h1>';
/*---------- Question One--------------------------------------------
Suppose a student has taken end-of-term exams in Math, English, Science, and Social
Studies, and their scores are stored in four variables as follows:
phpCopy code
$mathScore = 80; // out of 100 $englishScore = 70; // out of 100 $scienceScore = 90;
// out of 100 $socialStudiesScore = 75; // out of 100
Write a PHP if statement to calculate the student's final grade based on the following
grading scale:
• A: average score >= 90
• B: 80 <= average score < 90
• C: 70 <= average score < 80
• D: 60 <= average score < 70
• F: average score < 60
Your if statement should output the student's average score and final grade.


*/
// Solution Begins-----------------------------------------------------------------------------------------
$mathScore = 80; // out of 100

// Here i display the marks scored in math!
echo '<br>' .$mathScore;

$englishScore = 70; // out of 100

// Here i display the marks scored in english!
echo '<br>' .$englishScore;

$scienceScore = 90; // out of 100

// Here i display the marks scored in science!
echo '<br>' .$scienceScore;

$socialStudiesScore = 75; // out of 100

// Here i display the marks scored in social studiies!
echo '<br>' .$socialStudiesScore;


// I decided to calculates the total score by adding up the four subject scores, and then calculate the average score by dividing the total score by 4 since the number of given subjects is 4.

$totalScore = $mathScore + $englishScore + $scienceScore + $socialStudiesScore;

$averageScore = $totalScore / 4; // Average Score

// Here i display the total-marks scored in all the subjects!

echo $totalScore . '<br>';


// Next, i decided to use an if-elseif statement to assign the final grade(s) based on the given grading scale in the above question. Finally, i out put the average score and final grade using the echo statements.

if ($averageScore >= 90) {
    $finalGrade = 'A';
  } elseif ($averageScore >= 80) {
    $finalGrade = 'B';
  } elseif ($averageScore >= 70) {
    $finalGrade = 'C';
  } elseif ($averageScore >= 60) {
    $finalGrade = 'D';
  } else {
    $finalGrade = 'F';
  }

// Here i echo the average score: !
echo 'The Average score is: ' . $averageScore . '<br>';

// Here i echo the final grade score: !
echo 'The Final grade is: ' . $finalGrade . '<br>';

echo '<h1>Question Two</h1>';
/*---------- Question Two--------------------------------------------
Suppose you are tasked with writing a PHP program that calculates the tuition of a
student at a university based on their characteristics. You are given three variables:
$nationality (a string representing the student's nationality), $is_orphan (a boolean
indicating whether the student is an orphan), and $a_level_points (an integer
representing the student's A level performance points).
Write an if statement that calculates the student's tuition according to the following
rules:
• Domestic students who are not orphans pay $10,000 in tuition
• International students who are not orphans pay $20,000 in tuition
• Domestic orphans with A level performance points greater than or equal to 45
pay $5,000 in tuition
• Domestic orphans with A level performance points less than 45 pay $8,000 in
tuition
• International orphans with A level performance points greater than or equal to
45 pay $15,000 in tuition
• International orphans with A level performance points less than 45 pay $18,000
in tuition
Write the complete PHP if statement to calculate the tuition of a student based on their
characteristics.

*/
// Solution Begins-----------------------------------------------------------------------------------------
$nationality = "Domestic"; // or "International";

// Here i display the nationality of the student!
echo '<br>' .$nationality;

$is_orphan = true; // or false

// Here i display wether the student is orpahn or not!
echo '<br>' .$is_orphan;

$a_level_points= 50;

// Here i display the points scored by students in a level!
echo '<br>' .$a_level_points;


?>