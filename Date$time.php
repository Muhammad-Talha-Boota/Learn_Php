

  <!-- Complete formate Details About Date & Time in this link
  https://www.w3schools.com/php/func_date_date.asp  -->


<?php

        ####### Date() Function #########

/*
// "d,j,dS" for date

echo "Today Date is :" . date('d') . "<br>"; 
echo "Today Date is :" . date('j') . "<br>"; 
echo "Today Date is :" . date('dS') . "<br>"; 


// "F,m,M,n" for Month

echo "Currrent Month is :" . date('F') . "<br>"; 
echo "Currrent Month is :" . date('m') . "<br>"; 
echo "Currrent Month is :" . date('M') . "<br>"; 
echo "Currrent Month is :" . date('n') . "<br>"; 


// "Y,y" for Year

echo "Currrent Year is :" . date('Y') . "<br>"; 
echo "Currrent Year is :" . date('y') . "<br>"; 

// "D,I,N,w" for Week

echo "Currrent Week is :" . date('D') . "<br>"; 
echo "Currrent Week is :" . date('l') . "<br>"; 
echo "Currrent Week is :" . date('N') . "<br>"; 
echo "Currrent Week is :" . date('w') . "<br>"; 


// For Day Number in the 365 days

echo  "Day of the Year :" . date('z') . "<br>";


// Current Week number

echo "Week of the Year :" . date('W') . "<br>";


// Days of the Current Month

echo "Days of the Current Month :" . date('t') . "<br>";


// For Leap year

echo "Is this is Leap year :" . date('L') . "<br>";


// Full Date 

echo "<h1>Today Date :" . date('j/M/Y') . "</h1><br>";
echo "<h1>Today Date :" . date('y-F-dS') . "</h1><br>"; //Amarican Date Type

*/


                ####### Time() Function #########
/*
          ### << https://www.php.net/manual/en/timezones.asia.php >> ###
          // Link For Defferant Time Zone Codes of Asia

//(h,H,g,G) For Hour

echo "Current Hour is : " . date('h') . "<br>"; //for 01 to 12
echo "Current Hour is : " . date('H') . "<br>"; //fro 01 to 23 
echo "Current Hour is : " . date('g') . "<br>"; //for 1 to 12
echo "Current Hour is : " . date('G') . "<br>"; //for 0 to 23


//(i) For Minutes

echo "Current Minute is : " . date('i') . "<br>"; //only one


//(i) For Seconds

echo "Current Second is : " . date('s') . "<br>"; //only one


//(i) For Meridien

echo "Current Meridian is : " . date('a') . "<br>"; //For maredian in small Case
echo "Current Meridian is : " . date('A') . "<br>"; //For maredian in Capital Case


// Full Time 

date_default_timezone_set("Asia/Karachi"); // For Set Time Zone
echo "<h1>Time is " . date('h:i:s A e') . "</h1><br>";
echo "<h1>Date & Time is " . date('dS/M/Y h:i:s A e') . "</h1><br>"; // e parameter for Time Zone
*/ 

                  ####### MkTime() & Gmmktime() Function #########

/*
//// mktime() Function is use for have past Time. Mktime Full Form Maketime this Function Have Six parameters First is Hour second is minutes third is second Fourth is month Fivth is Date and Sixeth is Year.

echo "<h1>Date & Time is " . date('dS/M/Y h:i:s A') . "</h1><br><br>";

echo date("d/M/Y h:i:s A" , mktime(0,0,0,10,15,2003)) ."<br>";

//// gmmktime() is show Eurpen time Zone 

echo date("d/M/Y h:i:s A" , gmmktime(0,0,0,10,15,2003)) ."<br>";
*/
 


                  ####### date_create() & date_format() Function #########

/*                  
//// date_create() Function is use for Create Futcher date or Past Date. This Function Have Two parametrs First is Date&Time Second is timezone. And This Function Return a Object.

$date = date_create("2050-12-23 12:23:00",timezone_open('Asia/Karachi')); //we have time zone in this formate with timezone_open.

//// date_format() function is use for Show the date_create Function.This Function Have two parametrs First is Object That we Have in date_create Function and Second is Formate. 

echo date_format($date,"F/d/Y h:i:s");
*/


                  ####### cheakdate() & date_diff() Function #########

/*
//// cheakdate() Function is use for Cheak the dates This Function have three parameter First is Month second is Date and third is Year. This Function Return 1 in case of true and return 0 in the case of false. In this Function we Check Past and Futher Dates.

echo checkdate(2,29,2004) . "<br>";
echo checkdate(3,25,2021) . "<br>";
echo checkdate(7,12,2030) . "<br>";
echo checkdate(4,15,2001) . "<br>";


//// date_diff() Function is use for taken Diffrenace Between two dates. This Function have three dates First is date1 second is date2 and third is absolute(this have to parameters True or False false is Default).This Function Return Differncee of Dates Between two dates.

$date1 = date_create("2001-04-06 2:12:00");
$date2 = date_create("2022-04-19 2:12:00");

$diff = date_diff($date1, $date2);

echo $diff->days . "Days";
echo "<pre>";
print_r($diff);

// For Negitive Value

$date1 = date_create("2013-12-15");
$date2 = date_create("2013-03-12");

$diff = date_diff($date1, $date2);

echo $diff->format("%R%a days"); // R is use for negitive value and % sign is Return Percentage this sign is use for days months years etc.
echo "<pre>";
print_r($diff);

// For Positive Value

$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");

$diff = date_diff($date1, $date2);

echo $diff->format("%R%a days"); // r is use for negitive sign not for positive sign R is use for negitive value and % sign is Return Percentage this sign is use for days months years etc.
echo "<pre>";
print_r($diff);
*/



         
              ####### date_add() , date_sub() & date_modify() Function #########

/*
//// date_add() Function is use for add some Days in the Existing Date. This Function Have Two parameters First is Object that is Return From Date_create() And Sencod is Intervel.

$date = Date_create("2016-05-15");

date_add($date,date_interval_create_from_date_string("30 days")); //2nd parameter use for change string into intervel

echo date_format($date, 'd-M-Y') . "<br>"; 

//// date_sub() Function is use for Subtraction some Days in the Existing Date. This Function Have Two parameters First is Object that is Return From Date_create() And Sencod is Intervel.

$date = Date_create("2016-05-15");

date_sub($date,date_interval_create_from_date_string("10 days")); //2nd parameter use for change string into intervel

echo date_format($date, 'd-M-Y') . "<br>"; 

//// date_modify() Function is use For Both Sub and Add. In this Function on the second parametr we have only string Without any Function.

$date = Date_create("2016-05-15");

date_modify($date,"10 days"); 

echo date_format($date, 'd-M-Y') . "<br>"; 
 
// For subtraction of the date.

$date = Date_create("2016-05-15");

date_modify($date,"-30 days"); 

echo date_format($date, 'd-M-Y') . "<br>"; 
*/



              ####### getdate() , localtime() & gettimeofday() Function #########
 
/*           
//// getdate() Function is return a accosiative array of the current day & time. This Function is also use for Past Date.

$date = getdate();

echo $date['mday'] . "-" . $date['month'] . "-" . $date['year'];

echo "<pre>";
print_r(getdate());
echo "</pre>";

// For old Date

$old_date = mktime(01,15,30,4,6,2001);

$date = getdate($old_date);

echo $date['mday'] . "-" . $date['month'] . "-" . $date['year'];

echo "<pre>";
print_r(getdate($old_date));
echo "</pre>";


//// gettimeifday() Function is use for Have Current Time if the Day in the Array Form.

$time = gettimeofday();

echo $time['usec'];

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

echo gettimeofday(true); // This Parameter is use for Float value And skip the array


//// localtime() Function is use for Have Local Time of our local system in the index Array Form.

echo $time['usec'];

echo "<pre>";
print_r(localtime(time(),true)); // This two parameters For Associatine Array
echo "</pre>";

// For Old date

$time = mktime(3,12,0,6,4,22);

echo "<pre>";
print_r(localtime($time,true)); // This two parameters For Associatine Array
echo "</pre>";
*/
 

                ####### date_parse() Function #########

/*            
//// date_parse() Function is use for Show Array for date and time of Given that in the Function.

echo "<pre>";
print_r(date_parse('2001-04-06 2:12:23.6'));
echo "</pre>";

// Specific date/time with array key

$date = date_parse('2001-04-06 2:12:23.6');

echo $date['year'];

//// date_parse_from_format() Function is use for have Time Array With Given Formate.

echo "<pre>";
print_r(date_parse_from_format('d.m.y','12.04.2022'));
echo "</pre>";
*/


            ####### strtotime() , strftime() $ Gmstrftime Function #########

/*
//// strtotime() function is use for Convert String into time.

echo date("d-F-Y",strtotime('now')) . "<br>";
echo date("d-F-Y",strtotime('23 April 2006')) . "<br>";
echo date("d-F-Y",strtotime('+1 month')) . "<br>";
echo date("h:i:s A",strtotime('+3 hours')) . "<br>";
echo date("d-F-Y",strtotime('+3 week')) . "<br>";
echo date("d-F-Y",strtotime('Last day of Last Month')) . "<br>";
echo date("d-F-Y h:i:s A",strtotime('+1 week 3 Hours 5 minutes 0 second')) . "<br>";
echo date("d-F-Y",strtotime('previous Friday')) . "<br>";


//// strftime() Function is use for Convert Time into String. In this Function we use some Spacial string start with % called literal.

echo strftime("%B %d %Y, %X %Z") . "<br>";

// For Past date with mktime Function 

echo strftime("%B %d %Y, %X %Z",mktime(22,04,00,4,6,2001)) . "<br>";

echo strftime("%d/%m/%Y, %H:%M:%S",mktime(22,04,00,4,6,2001)) . "<br>";


//// gmstrftime() Function is use for show gmt or utc time zone.

echo gmstrftime("%d/%m/%Y, %H:%M:%S",mktime(22,04,00,4,6,2001)) . "<br>";
*/



            ####### date_time_set() Function #########

/*
// date_time_set(objest,hours,minutes,seconds,microsecond) Function is use for add time/date into the existence time/date.

$date = date_create("2015-05-15"); // dat_create() use for Craete Any date

date_time_set($date , 02,35);

echo date_format($date , "d/M/Y") . "<br>";  // date_formate() Use for show date with formate and object

date_time_set($date , 02,35,45);

echo date_format($date , "d/M/Y  H:m:s A");
*/



            ####### TimeZone Function #########

/*            
// There are Six type of timeZone Function are as follous.            


//// 1.date_default_timezone_get() Function Find bydefault Time Zone Set on our Local System.

echo date_default_timezone_get() . "<br>";

//// 2.date_default_timezone_set() Function is use for set time Zone.

date_default_timezone_set('Asia/Karachi');
echo date_default_timezone_get() . "<br>";

// An other Way for set and get TimeZone

$tzm = timezone_open('Asia/Karachi'); // This Function For Set Time Zone

echo timezone_name_get($tzm) . "<br>"; // This Function For Show Time Zone

//// 3.timezone_location_get() Function is use for Find location of our Current TimeZone.This Function Return an Array with latitude and longitude.

echo "<pre>";
print_r(timezone_location_get($tzm));
echo "</pre>";

//// 4.timezone_identifiers_list() Function is use for have list Of All Time Zone of the World.

echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(1)); // Here 1 is for african time Zone
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(1024)); // Here 2 is for American time Zone
echo "</pre>";

// Note: Spacific Code For All Countres in the Folder of Relative Images
*/










?>