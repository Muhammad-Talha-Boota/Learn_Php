<?php

//////// Function /////////

/*
function All(){
    echo "Hy<br>";
}
function in(){
    echo "EveryOne<br>";
}
function one(){
    echo "in Quadacts<br>";
}


all();
all();
all();
"<br>";
in();
in();
in();
"<br>";
one();
one();
one();
*/


///////// Functions With Parametrs ////////

/*
function name($first="first",$last="last"){
    echo $first . " " . $last . "<br>";
}

function sum($first="first",$last="last"){
    echo $first + $last . "<br>";
}

name("Ali");

name("Numman","Ali");

name("Gul","Khan");

name("<h1>Shalwar","khan</h1>");

sum(12,14);

sum(12.56,14.78);

$a= 50;
$b= 150;
sum($a,$b);
*/


///////// Functions With Return Value ////////

/*
function name($first="Fst",$second="Snd"){
    $nm = "$first $second";
    return  $nm;
}

$nm=  name("Alyan","Ali");

echo "Hello " . $nm;
*/


/*
function sum($math,$eng,$sec,$com,$phy){
    $result = ($math + $eng + $sec + $com + $phy) * 100;
    return $result;
}

function percent($pr){
    $final_pr = $pr / 500; 
    echo $final_pr;
}



$total = sum(88,98,95,96,98);

percent($total);
*/



///////// Functions Arguments by Reference  ////////

/*
function refer(&$string){
    $string .= " Some other changings.";
}

$str = "I Love Pakistan";
refer($str);
echo $str;
*/

/*
function first($num){
    $num += 5;
}

function second(&$num){
    $num += 8;
}


$number = 10;
first($number);
echo "The Original Value is $number <br>";

$number = 10;
second($number);
echo "The Original Value is $number <br>";
*/


///////// Variable Functions  ////////

/*
$alibaba = function($other){
    echo "Hello $other";
};

$alibaba(" Quadacts.");
*/

// Another Wey With Variable Function 

/*
function tal($other){
    echo "Hello $other";
}

$function = "tal";
$function(" Quadacts.");
*/


///////// Recursive Functions  ////////

/*
function display($number){
    if($number <= 5){
        echo "$number <br>";
        display($number + 1);
    }
}

display(3);
*/

/*
function factorial($num){
    if($num == 0){
        return 1;
    } else {
        return ($num *factorial($num - 1));
    }
}

echo factorial(15);
*/


?>