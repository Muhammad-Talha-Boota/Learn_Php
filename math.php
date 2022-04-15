<?php


                    ### << MATH FUNCTIONS >> ### 
            

############# Math Min & Max Functions ############

/*
//// min() Function is Use For Finding Menimum Value from an Variable. it Alse Use for Array Compare.

$str = min(12,43,45,66,77,);

echo $str . "<br>";

//// max() Function is Use For Finding maximum Value from an Variable. it Alse Use for Array Compare.

$str = max(12,43,45,66,77,);

echo $str . "<br>";

// For Multidimantional Array

$on = min( array(
  array(12,32,34,43),
  array(10,44,55,66)
));

echo "<pre>";
print_r($on)
*/



############# Math :  abs() ,ceil() , floor() & round() Functions ############

/*
//// ceil() Function hama kese value ke upper wali value return krta ha ya Float data type ke 1.3(decimal) sa uper wali Value Return kra ga.If we have Vlaue in negitive then its Return Buttom value.

echo ceil(1.2) . "<br>";
echo ceil(1.5) . "<br>";
echo ceil(5.1) . "<br>";
echo ceil(-5.6) . "<br>";


//// floor() Function is Return the Floor or Base Value on an string

echo floor(0.2) . "<br>";
echo floor(0.5) . "<br>";
echo floor(5.1) . "<br>";
echo floor(-5.6) . "<br>";


//// Round() Function return value in Round Feger if Value less the .5 then its return 0 and if the value Greater then .5 then its Return 1.

echo round(0.2) . "<br>";
echo round(0.6) . "<br>";
echo round(5.4) . "<br>";
echo round(5.8) . "<br>";
echo round(-5.2) . "<br>";


//// abs() Function Return Absolute value of an string This Function Remove Sign From the values

echo abs(+0.2) . "<br>";
echo abs(@0.6) . "<br>";
echo abs(-5.4) . "<br>";
echo abs(+5.8) . "<br>";
echo abs(-5.2) . "<br>";

*/


############# Math :  intdiv() ,pow() & sqrt() Functions ############

/*
//// intdiv() Function is use for Taken Devision of an Number. This Function have two parameters first is Inner value and Second is outer Value.

echo intdiv(30,10) . "<br>";
echo intdiv(290,19) . "<br>";
echo intdiv(2500,50) . "<br>";


//// sqrt() Function is use For taken Squar Root of an Value

echo sqrt(9) . "<br>";
echo sqrt(5) . "<br>";
echo sqrt(33) . "<br>";
echo sqrt(0) . "<br>";


// pow() Function is Use for taken power of an VAlue there are two parameters in this function first is Base and second is Power of value/Base.

echo pow(3,5) . "<br>";
echo pow(-5,-5) . "<br>";
echo pow(2,2) . "<br>";

*/


############# Math :  Random Number Functions ############

/*
//// rand() Function is use for Taken Random Value. There are two parameters in this Function First is Min Value and second is Max Value. 

echo rand() . "<br>";
echo rand(10,20) . "<br>";
echo rand(50,100) . "<br>";


//// mt_rand() function is Working like a rand Function But This Function is Modify Form of Rand Function.

echo mt_rand() . "<br>";
echo mt_rand(0,10) . "<br>";
echo mt_rand(50,70) . "<br>";


//// lcg_value() Return Flot Value Between 0 to 1

echo lcg_value() . "<br>";

*/


?>