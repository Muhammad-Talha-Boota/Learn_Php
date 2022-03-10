<?php
  
//////////  While Loop   ///////////

/*
$a = 1;
echo "<ul>";
while($a <= 10){
    echo "<li>" . $a . ") "  . "Quadacts is a web Development<br> </li>";
    $a = $a + 1;
}
echo "</ul>"; 
*/

////////// Do While Loop   ///////////

/*
$a = 10;

echo "<ol>";
do{
    echo "<li>" . $a . ") This is Do while Loop Lecture<br> </li>";
    $a--;
}while($a >= 1);

echo "</ol>"; 
*/


////////// for Loop   ///////////

/*

for($a=1;$a <= 10;$a++){
    echo "<h1>Hello Word</h1><br>";
}

*/


////////// Nested Loop  ///////////


/*
for($a = 1;$a <= 100; $a = $a + 10 ){
    for($b = $a; $b < $a + 10; $b++ ){
        echo $b . "";
    }
    echo "<br>";
}
*/



////////// Continue & Break Statement  ///////////

/*
echo "<h1> Continue Statment </h1>";
for($a = 1; $a <= 10; $a++ ){
    if($a == 3){
        echo "No :" . $a . "<br>";
        continue;
    }
    echo "Sr. " . $a . "<br>";

} 

echo "<br>";

echo "<h1> Break Statment </h1>";

for($a = 1; $a <= 10; $a++ ){
    if($a == 3){
        echo "No :" . $a . "<br>";
        break;
    }
    echo "Sr. " . $a . "<br>";
}
*/

////////// Goto Statement  ///////////

/*
for($a=1;$a<=10;$a++){
    if ($a == 3){
        goto abc;
    }
    echo $a . "<br>";
}
abc:
echo "This is a abc label<br>";

$a=1;
while($a <=10){
    echo $a . "<br>";
    $a++;
}
*/



////////// Foreach Loop Is Alse Use In Array therefor Foreach loop in Array File  ///////////





?>