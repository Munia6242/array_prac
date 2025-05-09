<?php

//index array
$Names = array("Munia","Tania","Nuba");

echo "<pre>";

print_r($Names);

echo "</pre>";


// Associative array

$names = array("Munia"=>"1","Tania"=>"2","Nuba"=>"3");

echo "<pre>";

print_r($names["Munia"]);

echo "</pre>";

?>


<?php 

// Index array

$students = array("Mabiha", "Nujhat", "Nidan");
$students [] ="Mehnoor";   // add array


echo "<pre>";
var_dump($students);
echo "</pre>";

// add multiple value

array_push($students,"Artha", "Mahfuz");

echo "<pre>";
var_dump($students);
echo "</pre>";

?>




<?php

// Associative array

$information =[
    "name" => "Munia",
    "age" => "22",
    "class" => "3rd Year",
];


foreach ($information as $key => $value){
    echo "$key : => $value <br>";
}

?>





<?php

// Multidimensional array

$students = [
    [
        "name" => "Munia",
        "age" => "22",
        "class" => "3rd Year",
    ],

    [
        "name" => "Tania",
        "age" => "23",
        "class" => "4th Year",
    ],

    [
        "name" => "Nuba",
        "age" => "18",
        "class" => "SSC",
    ]
];

foreach ($students as $key => $value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

?>



<?php

// common function of php 

echo strtoupper( "My Practice Workbook"); // out -> 11 //	show  data in uppercase
    
    echo "<br>";

    echo strtolower("My Practice Workbook");  // output -> sabuj  // show data in lowercase
    echo "<br>";

    echo strlen("Mimha Moni Daughter of humayoun kabir"); // Output -> SABUJ  // lenghth of string
    echo "<br>";

    echo strpos("Hi,Jone!","Jone!"); //Find position of a substring
    echo "<br>";
    echo str_replace("Hello","Hi","Hello , Your name is Jone");
    echo "<br>";
    echo trim (" Hi !  ");
    echo "<br>";

?>



