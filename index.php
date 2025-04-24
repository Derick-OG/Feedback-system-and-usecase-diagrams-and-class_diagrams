<?php
echo "Hello World";
print "Hello World";
print("Hello World");
printf("Hello World");

$names=('1, 2');
print_r( $names); //prints an array in a more readable way

var_dump($names); //prints an array in a more detailed way

//Single line comment

/*Multi line comment*/

#variables
//A variable is a container that stores data
//variables in php starts with a $ sign followed by the name of the variable
//A variable cannot start with a number
//Avariable can only contain alpha-numeric characters and underscores (A-Z, 0-9 and _)
//Variable  names are case sensitive( $name and $NAME are two different variables)

$name= "<h1 style='color:red'> Derick OG</h1>";
echo $name;

//Operators
$num1= 5;
$num2= 10;

//Arithmetic operations
$sum= $num1 + $num2;
$difference= $num1 - $num2;
$product= $num1 * $num2;
$quotient= $num1 / $num2;
$mod= $num1 % $num2;

echo $sum;
echo "<br>";
echo $difference;
echo "<br>";
echo $product;
echo "<br>";
echo $quotient;
echo "<br>";
echo $mod;
echo "<br>";

echo "<h4> Comparison Operator</h4>";
$result = $num1 == $num2 ? "True" : "False"; //Equality check
$result1 = $num1 < $num2 ? "True" : "False"; //Less than check
$result2 = $num1 > $num2 ? "True" : "False"; //Greater then check
$result3 = $num1 <= $num2 ? "True" : "False"; //Less than or Equal to check
$result4 = $num1 >= $num2 ? "True" : "False"; // Greater than or Equal to check

echo $result;
echo "<br>";
echo $result1;
echo "<br>";
echo $result2;
echo "<br>";
echo $result3;
echo "<br>";
echo $result4;
echo "<br>";

$num1 < $num2 || $num1 == $num2;
// || or
// && and
// ! Not

/*
$a=8;
1 && 1 = 1
1 && 0 = 0
0 && 1 = 0
0 && 0 = 0

$a > 5 || $a < 10 = true

$a = 5;
*/
echo "<h4> Concatinating strings</h4>";
//Concatination of strings is a combination of two strings
$string1= "Hello";
$string2= "Derick OG!";

$sentence1 = $string1 . " ". $string2; // Helle Derick OG
$sentence2 = "$string1  $string2"; // Helle Derick OG

echo $sentence1;
echo  "<br>";
echo $sentence2;
