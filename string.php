<?php

                        /////// String Functions /////////



 ############# String : Explode() & Implode() ############

/*
///// Explode function is use for Convert string value into a Array 

$str = "Hello world. it's a Beautiful day.";

 // In explode we have three values 'saprater','Array_name','Limit' we saprte this with , . etc. And its skip string value if we give limit in Negetive Value.
$new = explode(" ", $str , "-1"); 

echo "<pre>";
print_r($new);

////// Implode function is use for Convert Array into String

$array = ['Orange','red','Blue','Green','Black'];

// In this First Value we have sapraters like (. , - ; etc) We also use numbers or Worlds and Html tags Implode Function and Join Perform Same Work 
$new = implode("<br>",$array);

echo "<pre>";
print_r($new);
*/


############# String : Str_split() & Chunk_split() ############

/*
//// str_string(string,length) Function is use for Convert string characters into an array. There are two parameters in str_string Function First is Array name And Second is Length 

$str = "Quadacts Company";

$new = str_split($str,2);

echo "<pre>";
print_r($new);

//// Chunk_split(string,length,end) Function is use for convert string value Characters into an array with another Chracter. There is Three parameters in Chunk Function First is array name second is lenght and third is some Chracter or Html Tags


$str = "Pakistan Gujranwala";

$chunk = chunk_split($str , 2, "<br>");

echo "<pre>";
print_r($chunk);
*/

############# UpperCase & LowerCase Function ############

/*
// There are five type of Upper and Lower case are as Follows

// 1. strtolower() is use for Convert Variable into Lowercase 
// 2. strtoupper() is use for Convert variable into Uppercase
// 3. lcfirst() is use for Convert variabel into first Lower case Latter 
// 4. usfirst() is use for Convert variabel into first Upper case Latter 
// 5. ucwords() is use for convert all Words First chracters into Upper case

//// For strtolower()
$test = "PAKISTAN GUJRANWALA";

$new = strtolower($test);

echo $new  . "<br>";

//// for strtoupper()
$test = "pakistan gujranwala";

$new = strtoupper($test);

echo $new  . "<br>";

//// for lcfirst()
$test = "Pakistan gujranwala";

$new = lcfirst($test);

echo $new  . "<br>";

//// for ucfirst()
$test = "pakistan gujranwala";

$new = ucfirst($test);

echo $new  . "<br>";

//// for ucwords()
$test = "pakistan gujranwala";

$new = ucwords($test);

echo $new  . "<br>";

*/


############# String Length & Count Function ############

/*
//// strlen() is use for find the length of given variable 

$str = "Quadacts Company";

echo strlen($str) . "<br>";

//// str_word_count() is use for find the length of given variable 

$str = "Quadacts Company";

//There are Two parameters first is string name and second is retutn (0 is default, 1 is return array, 2 is return array with key)

$new = str_word_count($str, 0);

echo "<pre>";
print_r($new);

$new = str_word_count($str, 1);

echo "<pre>";
print_r($new);

$new = str_word_count($str, 2);

echo "<pre>";
print_r($new);


//// substr_count() is use for search the word in the variable

$Chnab = "They may go home when the work is done for the day of the duty.";

// There are four parameters First is (string name) second is (Searching Word) Third is starting point and Fourth is End Point...  Note third and fourth is optional.

echo substr_count($Chnab,"the",24,30);
*/


############# String FInd Position Function ############

/*
// There are Four types for Find Position are as Follows.
// 1. strpos
// 2. strrpos
// 3 stripos
// 4. strripos

//// Strtpos() is use for Find Position it's have three paramenters first is {String name} second is {Finding Word} and the Third is {starting Point} we also have starting point in negitive.

$str = "Hello World. The world is nice";

echo "strpos is : " . strpos($str, "world") . "<br>";
echo strpos($str, "world",10) . "<br>";

// strrpos() is finding position to Reverse and the Both Strings are case sancetive

echo "strrpos is : " . strrpos($str, "world") . "<br>";

// stripos() is work same like a strpos but stripos is case insentive its Search word not case of the latter

$str = "Hello World. The world is nice";

echo "stripos is : " . stripos($str, "WORLD") . "<br>";
echo stripos($str, "world",10) . "<br>";

// strripos() is finding position to Reverse and the Both Strings are case sancetive

echo "strripos is : " . strripos($str, "WORLD") . "<br>";

*/

############# String Search Function ############

/*
// There are Five Type of search Function are as Follus
// 1. strstr(string , search , before_search(true,false)) //case-santive
// 2. strchr(string , search , before_search(true,false)) //case-santive
// 3. strrchr(string , search) //case-santive
// 4. stristr(string , search , before_search(true,false)) // case-insantive
// 5. strpbrk(string , charlist) //case-santive

//// strstr() Function is use for searching in the variabels it has three parametrs first is string name, Second is Searching World and the third is Before search(True , False). & This Function is case_santive.

$data = "Hello world, The world is nice.";

echo strstr($data,"world",true) . "<br>"; // False is By Default if we have true then its provide left data

//// stristr() Function is use for searching in the variabels. it has three parametrs first is string name, Second is Searching World and the third is Before search(True , False). & This Function is case_insantive.

$data = "Hello world, The world is nice.";

echo stristr($data,"World",false) . "<br>"; // False is By Default if we have true then its provide left data

//// strchr() Function is work like strstr

$data = "I love php. I love php too!";

echo strchr($data,'love',true) . "<br>";

//// strrchr() Function is reverse order of strchr() function.

$data = "I love php. I love php too!";

echo strrchr($data,'love') . "<br>"; // This Function have two parameters

//// strpbrk() function is use for search chracters its Search more then one chracters

$ali = "I love php. I love php too!";

echo strpbrk($ali , 'Io');
*/


############# String substr Function ############

/*
//// substr() Function stand for substring its use for Take sub values of a variable it have three parameters First is string name, second is starting point and third is End Point.

$data = "Hello world. The world is nice.";

echo substr($data,-10,-1); //we also have start and end point in negitive
*/


############# String Replace Functions ############

/*

//// str_replace() Function is use for Replace Words of a variable. This Function have three parameters First is Finding Word second is Replace word and the Third is String name. And this function is a case_santsetive.

$str = "Hello world. The world is nise.";

echo str_replace('world','Earth',$str) . "<br>";

// If we want replace more then one words then we have Array 

$find = ["Hello","world","nise"];
$replace = ["Hi","Earth","Good"];

echo str_replace($find,$replace,$str) . "<br>";

//// str_ireplace() Function work like a str_replace But This Function is case_insantive

$str = "Hello world. The world is nise.";

echo str_ireplace('HELLO','Salam',$str) . "<br>";

    // *** Note "str_Function and str_ifunction is also use for array Replacment" *** //

$array = ["Red","Green","Blue","Pink","Red"];

echo "<pre>";
print_r(str_replace('Red','Orange',$array));

// substr_replace() Function is use for Replace Words in Variable with the start position and End Position we also have position in negitive

$str = "I Love Pakistan. And Gujranwala City.";

// This Function have three Four parametrs string name replace_word starting and Endind Position 
echo substr_replace($str,' Pythen ', -6 , 5) . "<br>"; 


//// strtr() function is use for replace creacters from a String

$str = "Hello world. The world is nice.";

echo strtr($str,'eo','ia') . "<br>";

// if we Replace more then one word then we use Associative array

$array = ['Hello'=>'Hi', 'world'=>'Earth']; //Keys Replace With Values in strtr 

echo strtr($str,$array);

*/


############# String Compare Functions ############

/*

//// strcmp() Function is use for Compare one variable to another variable its case_sensitive

$first = "Hello world!";
$second = "Hello world! Hello";

echo strcmp($first,$second) . "<br>";

//// strncmp() function work like a strcmp but in this Function we Use Length as a Third parameter

echo strncmp($first,$second,15) . "<br>";

//// strcasecmp() Function Work Like a strcmp but This Function is a case_insansitive

echo strcasecmp("Hello World","hello world hello") . "<br>";

//// strncasecmp() Function Work Like a strcmp but in this Function we Use Length as a Third parameter. This Function is a case_insansitive

echo strncasecmp("Hello World","hello world hello",10) . "<br>";

//// strnatcmp() Function is starnd for natural algoritham Function its use for Compare Numarics.This Function is Case_sanstitive.

echo strnatcmp("2Hello World","10hello world hello") . "<br>";

//// strnatcasecmp() Function Work like a strnatcmp. But this Function is Case_insansitive

echo strnatcasecmp("hello world","HELLO WORLD") . "<br>";

//// substr_compare() is use for Compare sub_characters in the variabels with there Positions 

echo substr_compare("hello world","HELlo world",0,3,True) . "<br>"; // Third parametr is starting point and fourth parameter is Legth and Fiveth Parameter is case_sansitive(true/False)

//// similar_text() Function is return that How much Words Compare with the second variable/parameter. This Function Return With Percentage.

echo similar_text("hello world","hello WORLD", $per) . "<br>";

echo "Percentage : " . $per;

*/


############# String strrev & str_shuffle Functions ############

/*
//// strrev() Function is use for reverse the varible

$data = "Quadacts";

echo strrev($data) . "<br>";

//// str_shuffle() Function is use for Shuffle the variable value

echo str_shuffle($data) . "<br>";
*/


############# String str_pad & str_repeat Functions ############

/*
//// str_pad(string,length,pad_string,pad_type{1.STR_PAD_BOTH 2.STR_PAD_LEFT 3.STR_PAD_RIGHT}) Function is use for Given Padding with the any sign.

$str = " Hello Quadacts ";

echo str_pad($str,20,'&&',STR_PAD_BOTH) . "<br>"; //It's Have Four Parameters Fourth is opetional 

//// str_repeat(string,number of repeat) Function is use for repeting the value of a variable

echo str_repeat($str ,5) . "<br>";
*/


############# String Trim & chop Functions ############

/*
//// trim() string function is use for Trim the chracter of a variable from the first or last of the variable.Real Time its use for the Form inputs for Egnore the more Space

$str = "Yahoo Baba";
echo $str . "<br>";

echo trim($str,"Ya") . "<br>"; //There are two parameters first is string and second is chracter


//// rtrim() Remove from the the Right Side of the Variable

echo rtrim($str,"ba") . "<br>"; // its Alse have to Parmeters


//// ltrim() Remove from the the Left Side of the Variable

echo ltrim($str,"Ya") . "<br>"; // its Alse have to Parmeters

// Real time use of trim

$data = "Quadacts";

echo $data . "<br>";

echo trim($data) . "<br>"; //This trim remove the Space Around the variable


//// Chop string Function Work like a rtrim

echo chop($data,'st');
*/


############# String Addslashes & Stripslashes Functions ############

/*
//// addslashes() Function is Use for add Slashes in the variable on the single codes and Double codes. Its USe for Protect data from the heackers

$data = "Hello I'm in 'Quadacts'";

echo $data . "<br>";

echo addslashes($data) . "<br>"; 
 
$new = addslashes($data);

//// stripslashes() is use for Remove slahes of variabels from the database.

echo stripslashes($new) . "<br>";

//// addcslashes() is Work like a addslashes But in this Function We Have Slashes on any Wheare Where we want.

echo addcslashes($data,"HmaQ") . "<br>"; // Second parameter is Chracter of the vareable  

echo addcslashes($data,"a..z") . "<br>"; // For Multipels Chracters

echo addcslashes($data,"A..Z") . "<br>"; // For Multipels Chracters

//// stripcslashes() is use for Remove Slashes for addcslashes().

$new1 = addcslashes($data,"HmaQ");

echo stripslashes($new1);

*/


############# String htmlentities() & htmlspecialchars() Functions ############

/*

//// htmlentities() Function is Use for Have the Codes of spacial Chracters or Quotes for the Source code to protect data From Heakers.In this Function we Have two parameters First is Stiring name and Second is Flag For Singel Quotes , Dounbel Quotes and No Quotes.


$str = "Single 'Quote' is <b>Bold</b>";

echo $str . "<br>";

echo htmlentities($str,ENT_QUOTES) . "<br>"; // ENT_QUOTES & ENT_NOQUOTES

$str1 = '<a href="http://www.yahoobaba.net">Yahoo Baba Website</a>';

echo $str1 . "<br>";

echo htmlentities($str1) . "<br>";

//// html_entity_decode() Function is use for Decode the htmlentities() Function

$tal = htmlentities($str);

echo html_entity_decode($tal) . "<br>";

//// htmlspecialchars() Function is work like a  htmlentities() But in this Function its Change some Spacial Chracters.
 
$str3 = "Single 'Quote' is <b>Bold</b>";

echo htmlspecialchars($str3, ENT_QUOTES) . "<br>";


//// htmlspecialchars_decode() FUnction is Use for the decode htmlspecialchars() Function

$ana = htmlspecialchars($str3);

echo  htmlspecialchars_decode($ana) . "<br>";


        ///   <<< Function for the List and code of Entites & Spacialcracters >>>   ///

  // << get_html_translation_table(function{HTML_ENTITIES & HTML_SPECIALCHARS},flags) >> //

// HTML_SPECIALCHARS LIST

echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));

// HTML_ENTITIES LISt
echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));

*/



############# String md5 & sha1 Functions ############

/*
//// md5() Function is use for change the password into the hecsadesemal form. Its Have two parameters first is string name and second is Raw{True & False(Bydefault)}. in true its change password in Binarry form.

$str = "Hello";

echo "The String is : " .  $str . "<br>";

echo "md5 Binary is : " . md5($str,true) . "<br>";

echo "md5 HEX is : " . md5($str) . "<br>";

//// sha1() Function Work like a md5() Function But sha1() Function is more Scure then md5() Function

echo "sha1 Binary is : " . sha1($str,true) . "<br>";

echo "sha1 HEX is : " . sha1($str) . "<br>";

// Real Time Example of Md5 Function

if(md5($str) == "8b1a9953c4611296a827abf8c47804d7"){
  echo "Password Match Successfully";
} else {
  echo "Incorrect Password";
}
*/


############# String Convert_uuencode & convert_uudecode Functions ############

/*
//// convert_uuencode() function is use for Encode some Text or string For Protect From the Heakers

$str = "Numman";

echo convert_uuencode($str) . "<br>";

//// convert_uudecode() Function is Use for Decode the Encode Text 

$new = convert_uuencode($str);

echo convert_uudecode($new);

*/


############# String bin2hex & hex2bin Functions ############

/*
//// bin2hex() Function is use for Change ASCII value into Hexadecimal Characters

$str = "Hello World";

echo bin2hex($str) . "<br>";

//// hex2bin() Function is use for Change Hexadecimal Characters into ASCII Value

$new = bin2hex($str);

echo hex2bin($new);
*/


############# String chr() & ord() Functions ############

/*
//// chr() Function is use for Finding the Chracter of ASCII Value

$str = chr(76); //In this Parameter we Use Octel Value , ASCII Value or HEX Value

echo $str . "<br>";

//// ord() Function is Use For Finding ASCII Value of an Chracter

$tal = ord("L"); //Its Return ASCII VAlue only First Chracter

echo $tal
*/


############# Strip_tags() & Wordwrap() ############

/*
//// strip_tags(sting , allow ) Function is use for Remove Tags from variable. It's have two parameters First is String And Second is Allow that which tags we Allow in the String.

$str = "Hello <b>World</b>. Hello <i>Earth</i>.";

echo $str . "<br>";

echo strip_tags($str,"<b><i><h1>") . "<br>";


//// wordwrap(string , width , break , cut) Function is Use For Wrap the Stringn. it's have Fourth Parameters First is String name Second is Width(Break after How much Chracters) Third is Break tag and Fourth is cut(True , False).

$tl = "The World is Beautiful. When Every Person have Beautiful Heart.";

echo wordwrap($tl,"1","<br>",true)
*/


?>