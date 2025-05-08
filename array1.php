<?php

//index array
$Names = array("Munia","Tania","Nuba");

echo "<pre>";

print_r($Names);


// Associative array

$names = array("Munia"=>"1","Tania"=>"2","Nuba"=>"3");

echo "<pre>";

print_r($names["Munia"]);

?>


<?php 

// Index array

$fruits = array("Apple", "Banana", "Cherry");
$fruits [] ="Orange";   // add array


echo "<pre>";
var_dump($fruits);
echo "</pre>";

// add multiple value

array_push($fruits,"Kiwi", "Lemon");

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Associative array

$cars = array("brand" => "Ford", "model" => "Mustang");

// $cars ["year"]=2025;
// $cars ["color"]="Sky-Blue";
$cars +=["color" => "Sky-Blue", "year" => 2025];

echo "<pre>";
//var_dump($cars);
echo "</pre>";
?>