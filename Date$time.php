

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

date_default_timezone_set("Asia/Karachi");
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






?>