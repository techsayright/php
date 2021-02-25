<?php

echo "<h1>Demonstrate of Array in PHP</h1>";

// Define an indexed array
echo "<h3>Indexed array</h3>";
$car = array("Mercedez", "Audi", "BMW");

print_r($car);
echo "<br>";

// Sorting array by value
sort($car); 
print_r($car);
echo "<br>";

// Sorting and printing array
print_r($car);   
echo "<br>";    
rsort($car);
print_r($car);   
echo "<br>";    

$numbers = array(3,10,8,7.8,90);
 
// Sorting and printing array
print_r($numbers);
echo "<br>";
sort($numbers);
print_r($numbers);
echo "<br>";
 
// Sorting and printing array
print_r($numbers);
echo "<br>";
rsort($numbers);
print_r($numbers);
echo "<br>";


// Define an associative array
echo "<h3>Associative array</h3>";
$Marks = array("Maths"=>78, "English"=>82, "Science"=>89);

print_r($Marks);
echo "<br>";

// Sorting array by value 
asort($Marks);
print_r($Marks);
echo "<br>";

// Sorting array by value
arsort($Marks);
print_r($Marks);
echo "<br>";

// Sorting array by key 
ksort($Marks);
print_r($Marks);
echo "<br>";

// Sorting array by key 
krsort($Marks);
print_r($Marks);
echo "<br>";

// Define a multidimensional array
echo "<h3>Multidimensional array</h3>";
$sub = array(
    array(
        "subject name" => "Theory of Computation",
        "subject sir" => "Mitul patel",
    ),
    array(
        "subject name" => "Web Programming",
        "subject sir" => "Shraddha Modi",
    ),
    array(
        "subject name" => "Advance java programming",
        "subject sir" => "K.C Suthar",
    ),
    array(
        "subject name" => "CNS",
        "subject sir" => "Adesh Panchal",
    ),
    
);
// Access nested value
echo "Web Programming's Teacher is: " . $sub[1]["subject sir"];


?>