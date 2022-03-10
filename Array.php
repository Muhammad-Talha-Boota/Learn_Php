<?php

###########   Array (Index Array)    ###########


// Code For Array
/*
$colors = array("red",12,"Blue",0.6);

echo $colors[0]  ."<br>";
echo $colors[1]  ."<br>";
echo $colors[2]  ."<br>";
echo $colors[3]  ."<br>";
echo "<br>";
*/


// Another Way For Array in Scear Brakets

/*
$colors1 = ["red","Green","Blue","Yellow"];

echo "<pre>";
print_r($colors1);
echo "</pre>";
*/


// Most Use in the Code of Array

/*
$colors[0] = "red";
$colors[1] = "Yellow";
$colors[2] = "Green";
$colors[3] = "Blue";

echo "<pre>";
print_r($colors);
echo "</pre>";
*/

// (Index Array) Array in for Loop

/*
$numbers = ["Ali",02,"Khan",04,05];

for($l = 0; $l < 5 ; $l++){
    echo $numbers[$l] . "<br>";
}
*/


###########   Associative Array    ###########


$age = array(
    "bill" => 25.5,
    2 => "30",
    "elon" => 35

);

// Other Way For Loop in Scear Brakets

/*
$age = [
    "bill" => 25.5,
    2 => "30",
    "elon" => 35

];

$age["elon"] = 50;

echo "<pre>";
print_r($age);
echo "</pre>";

echo "<pre>";
var_dump($age);
echo "</pre>";

echo $age["bill"] . "<br>";
echo $age[2] . "<br>";
echo $age["elon"] . "<br>";
*/



#########  Foreach Loop  #########


/*
$country = array("Pakistan","India","Chine","Uk","Autralia");

foreach($country as $value){
    echo $value . "<br>";
}
echo "<br>";

$age = [
    "Ali" => 25,
    "Khan" => 30,
    "Final" => 40,
    "Last_Khan" => 40,
];

foreach($age as $key => $value){
    echo $key . " = " . $value . "<br>";
}
*/


########  Multidimentional Array Or Nested Array  #########

/*
$emp = [
    [1, "Final_Khan", "Employ", "15000"],
    [2, "Last_Khan", "Manger", "20000"],
    [3, "Date_Khan", "Sales", "12000"],
    [4, "Lemon_Khan", "OfficeBoy", "8000"],
];

// Array With For Loop
echo "<h2>Array with For loop</h2>";
for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 4; $col++) {
        echo $emp[$row][$col] . "   ";
    }
    echo "<br>";
}


// Array With Foreach Loop
echo "<h2>Array with Foreach loop</h2>";
foreach ($emp as $ro) {
    foreach ($ro as $co) {
        echo $co . "  ";
    }
    echo "<br>";
}
echo "<br>";
// Array With Foreach Loop in tabel Tag

echo "<h1 align='center'>Employ Details</h1>";
echo "<table align='center' border='1' cellspacing='0' cellpadding='0' width='50%'>";
echo "<tr>
<th>Sr #</th>
<th>Name</th>
<th>Designation</th>
<th>Selary</th>
</tr>";
foreach ($emp as $ro) {
    echo "<tr>";
    foreach ($ro as $co) {
        echo "<td align='center'>  $co  </td>";
    }
    echo "</tr>";
}
echo "</table>";
*/




?>

<!-- <h1 align="center">Employ Record</h1>
<table border="1" width="50%" align="center" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th>Sr #</th>
            <th>Name</th>
            <th>Value</th>
            <th>Salery</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $emp[0][0] ?></td>
            <td><?= $emp[0][1] ?></td>
            <td><?= $emp[0][2] ?></td>
            <td><?= $emp[0][3] ?></td>
        </tr>
        <tr>
            <td><?= $emp[1][0] ?></td>
            <td><?= $emp[1][1] ?></td>
            <td><?= $emp[1][2] ?></td>
            <td><?= $emp[1][3] ?></td>
        </tr>
        <tr>
            <td><?= $emp[2][0] ?></td>
            <td><?= $emp[2][1] ?></td>
            <td><?= $emp[2][2] ?></td>
            <td><?= $emp[2][3] ?></td>
        </tr>
        <tr>
            <td><?= $emp[3][0] ?></td>
            <td><?= $emp[3][1] ?></td>
            <td><?= $emp[3][2] ?></td>
            <td><?= $emp[3][3] ?></td>
        </tr>
    </tbody>
</table> -->


<?php

############  Multidimentional Associative Array  ################

// Regular Way For Array
/*
$marks = array(
    "Final_Khan" => array("Phy" => 64, "Chem" => 76, "Math" => 56),
    "Date_Khan" => array("Phy" => 64, "Chem" => 76, "Math" => 56),
    "Lemon_Khan" => array("Phy" => 64, "Chem" => 76, "Math" => 56),
);

echo "<pre>";
print_r($marks);
*/

// Easy Way For Array

/*
$marks = [
    "Final_Khan" => [
        "Phy" => 64,
        "Chem" => 76,
        "Math" => 56
    ],
    "Date_Khan" => [
        "Phy" => 64,
        "Chem" => 76,
        "Math" => 56
    ],
    "Lemon_Khan" => [
        "Phy" => 64,
        "Chem" => 76,
        "Math" => 56
    ],
];
echo "<h1 align='center'>Students Test Record</h1>";
echo "<table border='1' cellspacing='0' cellpadding='0' width='50%' align='center' >";
echo "<tr>
<th> Name </th>
<th> Physics </th>
<th> Chemistry </th>
<th> Math </th>
</tr>";
foreach ($marks as $key => $value) {
    echo "<tr>  
    <th align='center'>$key </th>";

    foreach ($value as $vl) {
        echo "<td align='center'> $vl </td>";
    }
    echo "</tr>";
}
echo "</table>";
*/


##############  Multidimentional Array with List  ###############

/*
// List With Index Array

$emp = [
    [1, "Final_Khan", "Employ", "15000"],
    [2, "Last_Khan", "Manger", "20000"],
    [3, "Date_Khan", "Sales", "12000"],
    [4, "Lemon_Khan", "OfficeBoy", "8000"],
    [5, "Gul_Khan", "Driver", "8000"],
];

echo "<h1 align='center'>List with Index Array</h1>";
echo "<table align='center' width='50%' border='1' cellpadding='0' cellspacing='0'>";
echo "<tr>
<th>Sr #</th>
<th>Name</th>
<th>Designation</th>
<th>Selary</th>
</tr>";
foreach($emp as list($sr,$name,$designation,$salery)){
    echo " <tr align='center'><th>$sr</th>  <td>$name</td>  <td>$designation</td>  <td>$salery</td> </tr>";
}
echo "</table>";


// List With Associative array 


$emp = [
    [
        "id" => 1,
        "Name" => "Final_Khan",
        "designation" => "Employ",
        "selary" => "12000",
    ],
    [
        "id" => 2,
        "Name" => "Date_Khan",
        "designation" => "Order Taker",
        "selary" => "15000",
    ],
    [
        "id" => 3,
        "Name" => "Gul_Khan",
        "designation" => "Office Boy",
        "selary" => "8000",
    ],
    [
        "id" => 4,
        "Name" => "Lungs_Khan",
        "designation" => "Driver",
        "selary" => "10000",
    ],
    [
        "id" => 5,
        "Name" => "Liver_Khan",
        "designation" => "Gard",
        "selary" => "6500",
    ],
    [
        "id" => 6,
        "Name" => "Daraz_Khan",
        "designation" => "Gardien",
        "selary" => "6000",
    ],
];
echo "<h1 align='center'>List with Associative Array</h1>";
echo "<table align='center' width='50%' border='1' cellpadding='0' cellspacing='0'>";
echo "<tr>
<th>Sr #</th>
<th>Name</th>
<th>Designation</th>
<th>Selary</th>
</tr>";
foreach($emp as list("id" => $sr, "Name" => $name, "designation" => $designation, "selary" => $salery)){
    echo " <tr align='center'><th>$sr</th>  <td>$name</td>  <td>$designation</td>  <td>$salery</td> </tr>";
}
echo "</table>";
*/


########  ///////  👀 All Functions 👀   ////////   #########


################ Count() and sizeof() Function in Array  #################

/*
$foods = array("Orange", "Banana", "Apple", "Mango");

echo count($foods);
*/

/*
$Items = [
    "Fruits" => [
        "Orange",
        "Banana",
        "Mango",
        "Apple"
    ],
    "Vagitable" => [
        "Carrot",
        "Tomatto",
        "Ptato",
        "Lemon"
    ],
];

// for complete array

echo sizeof($Items,1);

// For an array of array

echo sizeof($Items['Fruits'],1);
*/

// Use of Count And Sizeof Function 

/*
$food = array("Orange", "Banana", "Apple", "Mango","Pinapple");
$len = count($food);

for($i=0; $i < $len; $i++){
    echo $food[$i] . "<br>";
}
*/

//  Array Count Value 

/*
$food = array("Orange","Orange", "Banana","Grapes", "Apple", "Apple", "Apple", "Apple", "Mango","Pinapple");

echo "<pre>";
print_r(array_count_values($food));
*/


#################  in_array() & Array_search() Functions   ###################


/*
$food = ["Apple","Graps","55","Bnana","Mango"];

// echo in_array("Apple",$food);

// This True Find Exect Value type

if (in_array(55,$food,true)){
    echo "Find Successfully";
}else{
    echo "Can't Find";
}

// We Also Find Complete Array Of Associative Array

$ali = array(array("k","L"), array("p","r") , "O");

if (in_array(array("k","L"), $ali ,true)){
    echo "Find Successfully";
}else{
    echo "Can't Find";
}


// Use of array_search Function in Index Array

$food = ["Apple","Graps","55","Bnana","Mango"];

echo array_search("55",$food);

// Use of array_search Function in Index Array

$foods = ["a"=>"Apple","b"=>"Graps","c"=>"55","d"=>"Bnana","e"=>"Mango"];

echo array_search("Graps",$foods);
*/



##############  array_replace() $ array_replac_recursive() ##############

/*
// Replace value Of Two Index  Array

$fruit = ["Orange","Banana","Apple", 1 => "Grapes"];

$vegitable = ["Carrot","Pea"];

$newarray = array_replace($fruit,$vegitable);

echo "<pre>";
print_r($newarray);

// Replace value Of Three Index  Array

$fruit = ["Orange","Banana","Apple", "Grapes"];

$vegitable = ["Carrot","Pea"];

$colors = ["Red","Blue","Green"];

$newarray = array_replace($fruit,$vegitable,$colors);

echo "<pre>";
print_r($newarray);


// Replace value OF Associative Array

$fruit = ["Orange","Banana","a"=> "Apple", "Grapes"];

$vegitable = ["a"=> "Carrot","b"=> "Pea"];

$newarray = array_replace($fruit,$vegitable);

echo "<pre>";
print_r($newarray);


// Replace value OF Multidimantinal Array

$cars = array (
    array("Honda","green"),
    array("BMW","Syan"),
    array("Toyota","Red")
  );

$truk = array (
    array("Volvo"),
    array("Audi")
    
  );

  $new = array_replace_recursive($cars,$truk);

  echo "<pre>";
  print_r($new);
*/


##############  array_pop() $ array_push() ##############

/*
// Array_pop Remove Last Value Of An Array

$Emplo = ["Ali","Babar","Khawer","Kamran","Talha"];

array_pop($Emplo);

echo "<pre>";
print_r($new);

// Array_pop Add new values on the Last Of An Array

$Employ = ["Ali","Babar","Khawer","Kamran","Talha"];

array_push($Employ,"Usama","Tahir",56,45.6);

echo "<pre>";
print_r($Employ);
*/

##############  array_shift() $ array_unshift() ##############

/*
// array_shift Remove Zero index of an array

$Drivers =["Khan","Final","Gul","Badam","Akhrot"];

array_shift($Drivers);

echo "<pre>";
print_r($Drivers);

// array_shift Add Zero index of an array we Also Add More then Values

$Drivers =["Khan","Final","Gul","Badam","Akhrot"];

array_unshift($Drivers,"Talha","Asad","Usama","Tahir",7,56,9,7);

echo "<pre>";
print_r($Drivers);
*/


##############  array_murge() $ array_combine() Functions ##############

// There are three type of array_murge 1. array_murge (For Index or Associative arrays)  2.array_murge_recursive (For Multidimantional Associative arrays)  3.array_combine (Only For Index arrays) 

/////////////////// Array_Merge 
/*
// For Index Array

$fruit = ["Orange","Banana","Apple", "Grapes"];

$vegitable = ["Carrot","Pea"];

$newarray = array_merge($fruit,$vegitable);

echo "<pre>";
print_r($newarray);

// For Index and Assosciative Array

$fruit = ["a"=>"Orange","b"=>"Banana","c"=> "Apple","d"=> "Grapes"];

$vegitable = ["Carrot","Pea"];

$newarray = array_merge($fruit,$vegitable);

echo "<pre>";
print_r($newarray);

// For Assosciative Array
// we Alse Replace First Array to second array With Plus(+) arithmatic Oprator

$fruit = ["a"=>"Orange","b"=>"Banana","c"=> "Apple","d"=> "Grapes"];

$vegitable = ["b"=>"Carrot","f"=>"Pea"];

$newarray = array_merge($fruit,$vegitable);
// $newarray = ($fruit+$vegitable); For Replace First To Second

echo "<pre>";
print_r($newarray);
*/

/////////////////// Array_merge_recursive

/*
// For Associative

$fruit = ["a"=>"Orange","b"=>"Banana","c"=> "Apple","d"=> "Grapes"];

$vegitable = ["b"=>"Carrot","f"=>"Pea"];

$newarray = array_merge_recursive($fruit,$vegitable);

echo "<pre>";
print_r($newarray);

// For Multidimantional

$fruit = ["a"=>"Orange","b"=>"Banana","c"=> "Apple","d"=> "Grapes"];

$vegitable = ["b"=>["color" => ["red","blue","green"]],"f"=>"Pea"];

$newarray = array_merge_recursive($fruit,$vegitable);

echo "<pre>";
print_r($newarray);
*/

////////////////// Array_Combine

/*
// This Function Change First Array to key And Second Array to value

$name = ["Final_Khan","Gul_Khan","Date_Khan","Badam_Khan","Last_Khan"];

$age = [23,32,43,22,12];

$new = array_combine($name,$age);

echo "<pre>";
print_r($new);
*/


##############  array_Slice() Functions ##############

/*
// Slice Function for Index Array 

$color = array("Red","Green","Blue","Yellow","Pink","Cyan");

// In this aray first is array name second is starting point Third is length and forth is Real Value name

$new = array_slice($color,1,3,true);

// In negitive Case
$new = array_slice($color,-4,3,true);

echo "<pre>";
print_r($new);


// Slice Function for Associative Array 

$fruit = array("a"=>"Apple","b"=>"Graps","c"=>"Orange","d"=>"Banana","5"=>"Guava");

$newarray = array_slice($fruit,1,5,true); //In array the true is preserve value

echo "<pre>";
print_r($newarray);
*/


##############  array_Splice() Functions ##############

/*
// array_splice is use for Delelte values in array

$color = array("Red","Green","Blue","Yellow","Pink","Cyan");

array_splice($color,0,1);

echo "<pre>";
print_r($color);

// array_splice is use for Replace values in arrays

$color = array("Red","Green","Blue","Yellow","Pink","Cyan");

$fruit = array("Orange","Banana","Guava");

array_splice($color,3,2,$fruit);

echo "<pre>";
print_r($color);

// array_splice is use for Add values in arrays if we give legth 0
// we also use count function for set value at the end

$color = array("Red","Green","Blue","Yellow","Pink","Cyan");

$fruit = array("Orange","Banana","Guava");

array_splice($color,count($color),0,$fruit);

echo "<pre>";
print_r($color);

// array_splice for Associative array

$fruit = array("a"=>"Apple","b"=>"Graps","c"=>"Orange","d"=>"Banana","5"=>"Guava");

$color = array("a"=>"Blue","b"=>"green");

array_splice($fruit,1,0,$color);

echo "<pre>";
print_r($fruit);
*/



############## Array : Key Functions ##############
/*
// There Are 6 type of array key Follous
// 1.array_keys() For Find Total Keys
// 2.array_key_first()
// 3.array_key_last()
// 4.array_key_exists()
// 5.key_exists()



$colors = array(
    "first" => "mango",
    "Second" => "Green",
    "Third" => "Blue",
    "Fourth" => "Red",
    "Fiveth" => "Pink",
    "Sixth" => "Cyan",
);

// Array_keys is use to find Total Key of an Array it's for Associative Array

$new = array_keys($colors);

echo "<pre>";
print_r($new);

// Array_keys_first is use to find first Key of an Array

$new = array_key_first($colors);

echo "<pre>";
print_r($new);

// Array_keys_last is use to find last Key of an Array

$new = array_key_last($colors);

echo "<pre>";
print_r($new);

// Array_keys_exists is use to find that key is in Array Or not

$new = array_key_exists("Second",$colors);

echo "<pre>";
print_r($new);
echo "<br>";

// keys_exists shortcut for array_key_axists its use with if else conditions

$new = key_exists("Sixth",$colors);

if($new){
    echo "<h2> Key exist! </h2>";
}else{
    echo "<h2> Key dos't exist! </h2>";
}
*/


############## Array_intersect_Functions ##############

/*

/////// array_intersect this function is use for match values from given arrays we also have U(user define) in this array like array_Uintersect its return user define function 

$a1 = array("a" => "Final", "b" => "Last", "c" => "Badam", "d" => "Gul");

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$a3 = ["a" => "Final", "e" => "Gul", "f" => "Date"];

$new = array_intersect($a1, $a2, $a3);

echo "<pre>";
print_r($new);


////// array_intersect_key this Function is Use For match Keys Of Given Arrays we also have U(user define) in this array like array_intersect_key its return user define function

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$a3 = ["a" => "Final", "e" => "Gul", "f" => "Date"];

$new = array_intersect_key($a2, $a3);

echo "<pre>";
print_r($new);


////// array_intersect_assoc this Function is Use For match Keys and values Of Given Arrays 

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$a3 = ["a" => "Final", "e" => "Gul", "f" => "Date"];

$new = array_intersect_assoc($a2, $a3);

echo "<pre>";
print_r($new);


/////// array_intersect_uassoc this Function is User define function we creat our own function we also use U with intersect or assoc they both are same functionalety

function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$a3 = ["a" => "Final", "e" => "Gul", "f" => "Date"];

$new = array_uintersect_assoc($a2, $a3, "compare");
/// $new = array_uintersect_assoc($a2, $a3, "strcasecmp"); This is For Case Comparison

echo "<pre>";
print_r($new);


////// array_uintersect_uassoc this Function is User define function that we creat our own function its creat both functions

function comparekey($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

function comparevalue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$a3 = ["a" => "Final", "e" => "Gul", "f" => "Date"];

$new = array_uintersect_uassoc($a2, $a3, "comparekey", "comparevalue");

echo "<pre>";
print_r($new);

*/


############## Array : Diff Functions ##############

/*

/////// array_diff this function is use for return Defferent values from given arrays we also Use U(user define) in this array like array_Udiff its return user define function 

$a1 = array("a" => "Final", "b" => "Last", "c" => "Badam", "d" => "Gul");

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$a3 = ["a" => "Final", "e" => "Last", "f" => "Khan"];

$new = array_diff($a1, $a2 , $a3);

echo "<pre>";
print_r($new);


/////// array_diff_key this function is use for return Defferent Key from given arrays we also Use U(user define) in this array like array_Udiff_key its return user define function 

$a1 = array("a" => "Final", "b" => "Last", "c" => "Badam", "d" => "Gul");

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$new = array_diff_key($a1, $a2 );

echo "<pre>";
print_r($new);


/////// array_diff_assoc this function is use for return Defferent Key and Values from given arrays we also Use U(user define) in this array like array_diff_Uassoc its return user define function 

$a1 = array("a" => "Final", "b" => "Last", "c" => "Badam", "d" => "Gul");

$a2 = ["a" => "Final", "d" => "Gul", "e" => "Date"];

$new = array_diff_assoc($a1, $a2 );

echo "<pre>";
print_r($new);


/////// array_diff_uassoc this Function is User define function we creat our own function we also use U with diff or assoc they both have same functionalety

function compare($a , $b) {
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
 }

$a1 = array("a" => "Final", "b" => "Last", "c" => "Badam", "d" => "Gul" , "e" => "Ali");

$a2 = ["a" => "Final", "f" => "Gul", "e" => "Date"];

$new = array_udiff_assoc($a1, $a2 , "compare" );

echo "<pre>";
print_r($new);


/////// array_udiff_uassoc this Function is User define function we creat our own function..

function comparekey($a , $b) {
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
 }

function comparevalue($a , $b) {
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
 }

$a1 = array("a" => "Final", "b" => "Last", "c" => "Badam", "d" => "Gul" , "e" => "Ali");

$a2 = ["a" => "Final", "f" => "Gul", "e" => "Date"];

$new = array_udiff_uassoc($a1, $a2 , "comparekey" , "comparevalue");

echo "<pre>";
print_r($new);

*/


############## Array_value & Array_unique Functions ##############

/*
//////// Array_value is Use for Taken All Value Of An Array its have Only One Time Value 

$a1 = array("a" => "Final", "b" => "Last", "e" => "Last", "c" => "Badam", "d" => "Gul", "e" => "Ali");

$new = array_values($a1);

echo "<pre>";
print_r($new);

/////// Array_unique is Use for Taken Unique Value Of An Array 

$a1 = array("a" => "Final", "b" => "Last", "e" => "Final", "c" => "Last", "d" => "Gul", "e" => "Gul");

$new = array_unique($a1);

echo "<pre>";
print_r($new);
*/


############## Array_Column & Array_Chunk Functions ##############

/*

/////// Array_Column in Use For Taken  Column from an Multidimantional Associative array
// we also Have Key of the Array with Third value In Array_column 

$MDA = [
    [
        "id" => "1",
        "Fname" => "Ali",
        "Lname" => "Khan",
    ],
    [
        "id" => "2",
        "Fname" => "Final",
        "Lname" => "Ullah",
    ],
    [
        "id" => "3",
        "Fname" => "Gul",
        "Lname" => "Badam",
    ],
    [
        "id" => "4",
        "Fname" => "Last",
        "Lname" => "ali",
    ],
];

$new = array_column($MDA, "Lname", "id");  //Here is the Third Value in represent the Key

echo "<pre>";
print_r($new);


///// array_Chunk Function is use For Have Accosiative Array with our Given Size 

// for Index Array

$cars = ["Volvo", "BMW", "Honda", "Toyota", "Opel"];

$new = array_chunk($cars, 3);  //in this array First is array name and second is Size of array

echo "<pre>";
print_r($new);

// For Associative Array

$age = array(
    "Ali" => 24,
    "Final" => 29,
    "Last" => 21,
    "Date" => 19,
);

$newar = array_chunk($age, 2, true); // if we want old key Of Array Then We use True Preserve value

echo "<pre>";
print_r($newar);

*/


############## Array_flip & Array_Change_key_case Functions ##############

/*
////// array_Flip Is use For the Change Key TO value And Also Change Value To key Called Flip

$Emp = array(
    "Ali" => 23,
    "Khan" => 31,
    "Gul" => 34,
    "Arbaz" => 33,
);

$new = array_flip($Emp);

echo "<pre>";
print_r($new);


///// array_change_key_case Is use For the Change Case Of the key in Array it is in lower or upper

$Emp = array(
    "Ali" => 23,
    "Khan" => 31,
    "Gul" => 34,
    "Arbaz" => 33,
);






$new = array_change_key_case( $Emp, CASE_UPPER);

echo "<pre>";
print_r($new);
*/







?>