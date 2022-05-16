 

                        <!-- DATE Function -->
 

<!-- ########### MySQL DATE Functions SQL # 32 & SQL # 33 & SQL # 34 ########## -->

<!-- 1. CURRENT_DATE() / CURDATE() -->
The CURRENT_DATE() / CURDATE() Function Return Current date.
<!-- QUERY EXAMPLE --> SELECT CURRENT_DATE / CURDATE() AS "TODAY DATE";

<!-- 2. SYSDATE()  -->
The SYSDATE() Function return systum date and Time.
<!-- QUERY EXAMPLE --> SELECT SYSDATE() AS "System Date";

<!-- 3. NOW()  -->
The NOW() Function return systum date and Time.
<!-- QUERY EXAMPLE --> SELECT NOW() AS "NOW Date & Time";

<!-- 4. DATE()  -->
The DATE() Function return Date From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT DATE('2002-2-15 09:34:21') AS DATE;

<!-- 5. MONTH()  -->
The MONTH() Function return Month From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT MONTH('2002-2-15 09:34:21') AS Month;

<!-- 6. MONTHNAME()  -->
The MONTHNAME() Function return Month name From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT MONTHNAME('2002-2-15 09:34:21') AS Month_name;

<!-- 7. YEAR()  -->
The YEAR() Function return Year From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT YEAR('2002-2-15 09:34:21') AS YEAR;
<!-- QUERY EXAMPLE IN DATA_TABLE --> SELECT id,name,DOB,YEAR(DOB) AS YEAR FROM quad;

<!-- 8. QUARTER()  -->
The QUARTER() Function return Quarter number of the Year From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT QUARTER('2002-2-15 09:34:21') AS Quarter_num;

<!-- 9. DAY()  -->
The DAY() Function return Day From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT DAY('2002-2-15 09:34:21') AS Day;

<!-- 10. DAYOFMONTH()  -->
The DAYOFMONTH() Function return Day of month From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT DAYOFMONTH('2002-2-15 09:34:21') AS Day;

<!-- 11. DAYNAME()  -->
The DAYNAME() Function return Name of the week Day From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT DAYNAME('2002-2-15 09:34:21') AS Day_name;

<!-- 12. DAYOFWEEK()  -->
The DAYOFWEEK() Function return Index Number of the week Day From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT DAYOFWEEK('2002-2-15 09:34:21') AS Day_num;

<!-- 13. DAYOFYEAR()  -->
The DAYOFYEAR() Function return Day Number of the Year From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT DAYOFYEAR('2002-2-15 09:34:21') AS Day_num;

<!-- 14. WEEK()  -->
The WEEK() Function return Week number of the year From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT WEEK('2002-2-15 09:34:21') AS Week_num;
<!-- QUERY EXAMPLE From DATA_Table --> SSELECT id,name,DOB,WEEK(DOB) FROM quad;

<!-- 15. WEEKDAY()  -->
The WEEKDAY() Function return Week number of the Day From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT WEEKDAY('2002-2-15 09:34:21') AS Week_Day;

<!-- 16. YEARWEEK()  -->
The YEARWEEK() Function return Week number of the YEAR From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT YEARWEEK('2002-2-15 09:34:21') AS Week_Num_OF_Year;

<!-- 17. LAST_DAY()  -->
The LAST_DAY() Function return Last Day of Month From the Date and Time.
<!-- QUERY EXAMPLE --> SELECT LAST_DAY('2002-2-15 09:34:21') AS Last_Day_month;

<!-- 18. EXTRACT() -->
The EXTRACT() Function is Return date,time,second,month.etc from date with a string in this Function.
<!-- QUERY EXAMPLE --> SELECT EXTRACT(MONTH FROM '2012-02-13 9:22:11') AS month;

                            <!-- Some Query Example of EXTRACT -->

SELECT EXTRACT(MICROSECOND FROM '2012-02-13 9:22:11') AS MS;
SELECT EXTRACT(SECOND FROM '2012-02-13 9:22:11') AS S;
SELECT EXTRACT(MINUTE FROM '2012-02-13 9:22:11') AS M;
SELECT EXTRACT(HOUR FROM '2012-02-13 9:22:11') AS H;
SELECT EXTRACT(HOUR_MICROSECOND FROM '2012-02-13 9:22:11') AS HM;
SELECT EXTRACT(HOUR FROM '2012-02-13 9:22:11') AS H;
SELECT EXTRACT(YEAR FROM '2012-02-13 9:22:11') AS Y;
SELECT EXTRACT(QUARTER FROM '2012-02-13 9:22:11') AS Q;


<!-- 19. ADDDATE()   -->
The ADDDATE() Function is use for Add Date or time into the Exist date or time.
<!-- QUERY EXAMPLE --> SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 1 WEEK) AS Date;

                        <!-- Some Query Example of EXTRACT -->

SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 20 DAY) AS Date;
SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 1 WEEK) AS Date;
SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 1 YEAR) AS Date;
SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 1 QUARTER) AS Date;
SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 12 HOUR) AS Date;
SELECT ADDDATE('2020-03-12 9:00:12',INTERVAL 30 MINUTE) AS Date;

<!-- 20. DATE_ADD() -->
The DATE_ADD() Function Work like a ADDDATE() Function.
<!-- QUERY EXAMPLE --> SELECT DATE_ADD('2020-03-12 9:00:12',INTERVAL 30 MINUTE) AS Date;

<!-- 21. MAKEDATE() -->
The MAKEADTA() Function is use for make date. There are two parameter in this Function First is Year and Second is Date. This Function Have Default month January 01 Munth.
<!-- QUERY EXAMPLE --> SELECT MAKEDATE(2019,3);

<!-- 22. SUBDATE() -->
The SUBDATE() Function is Opposite of MAKEDATE() Function.This Function use for Subtract date from exist date.
<!-- QUERY EXAMPLE --> SELECT SUBDATE('2019-04-12', INTERVAL 5 DAY) AS Date;

                        <!-- Some Query Example of SUBDATE -->

SELECT SUBDATE('2020-03-12 9:00:12',INTERVAL 20 DAY) AS Date;
SELECT SUBDATE('2020-03-12 9:00:12',INTERVAL 1 WEEK) AS Date;
SELECT SUBDATE('2020-03-12 9:00:12',INTERVAL 1 YEAR) AS Date;
SELECT SUBDATE('2020-03-12 9:00:12',INTERVAL 1 QUARTER) AS Date;
SELECT SUBDATE('2020-03-12 9:00:12',INTERVAL 12 HOUR) AS Date;
SELECT SUBDATE('2020-03-12 9:00:12',INTERVAL 30 MINUTE) AS Date;

<!-- 23. DATEDIFF() -->
The DATEDIFF() Function is use for Haveing differnce in two Dates. 
<!-- QUERY EXAMPLE --> SELECT DATEDIFF('2020-04-12','2019-05-15') AS Date;

<!-- 24. TO_DAYS() -->
The TO_DAYS() Function is use for Haveing differnce between Exist date and 0 since date.In this Function we Have Only One parameter. 
<!-- QUERY EXAMPLE --> SELECT TO_DAYS('2020-04-12') AS Date;

<!-- 25. FROM_DAYS() -->
The FROM_DAYS() Function is opposite of TO_DAYS() Function.In this function we put rendum Integer Number Like '1212321' then this Function Return us a Date.
<!-- QUERY EXAMPLE --> SELECT FROM_DAYS(122312) AS Date;

<!-- 26. PERIOD_ADD() -->
The PERIOD_ADD() Function is use for add some days in integer form into the into the Given Period.
<!-- QUERY EXAMPLE --> SELECT PERIOD_ADD(122312,5) AS Date;

<!-- 27. PERIOD_DIFF() -->
The PERIOD_DIFF() Function is use for have deffernce in to periods.
<!-- QUERY EXAMPLE --> SELECT PERIOD_DIFF(122312,523213) AS Date;

<!-- 28. DATE_FORMAT() -->
The DATE_FORMAT() Function is use for change formate of DATE.
<!-- QUERY EXAMPLE  --> SELECT DATE_FORMAT('2019-06-15', '%D-%M-%Y') AS Date; 

                    <!-- Some Query Example of DATE_FORMAT() -->

SELECT DATE_FORMAT('2019-06-15', '%D-%M-%Y,%W') AS Date;
SELECT DATE_FORMAT('2019-06-15 02:34:12:45000', '%D-%M-%Y,%W,%H:%i:%s:%f:%p') AS Date;

                        <!-- ### SQL DATE FORMATE ### -->

DATE_FORMAT() Function Have Following Types OF DATE FORMATING.   

1. DAY =>  %d(01 to 31), %e(1 to 31), %D(st,nd,rd or th), %j(001 to 365)
2. MONTH => %M(January to December), %b(Jan to dec), %m(00 to 12), %c(0 to 12)
3. YEAR => %Y(2019), %y(19)
4. WEEK => %a(mon), %W(Monday), %w(0 to 6)

                        <!-- ### SQL TIME FORMATE ### -->

DATE_FORMAT() Function Have Following Types OF TIME FORMATING.  

1. Hours => %h(01 to 12), %H(00 to 23), %g(1 to 12), %G(0 to 23)
2. Minutes => %i(00 to 59)
3. Seconds => %s(00 to 59)
4. Microsecond => %f(000000 to 999999)
5. Meridiem => %p(AM or PM)

<!-- 29. STR_TO_DATE() -->
The STR_TO_DATE() Function opposite of DATE_FORMAT() Finction.In this function we given date in string form.This function return date in SQL form.
<!-- QUERY EXAMPLE  --> SELECT STR_TO_DATE('July 10 2020', '%M %d %Y') AS Date;


                        <!-- SQL Time Function -->

<!-- 1. CURRENT_TIME() / CURTIME()-->
The CURRENT_TIME() / CURTIME() Function return Current Time Of System.
<!-- QUERRY EXAMPLE --> 1. SELECT CURRENT_TIME();     2. SELECT CURTIME();

<!-- 2. CURRENT_TIMESTAMP() / CURRENT_TIMESTAMP() -->
The CURRENT_TIMESTAMP() / CURRENT_TIMESTAMP() Function Return Current time with Current Date.
<!-- QUERY EXAMPLE -->  1. SELECT CURRENT_TIMESTAMP();   2. SELECT LOCALTIME();

<!-- 3. LOCALTIMESTAMP() -->
The LOCALTIMESTAMP() Function Retutn Current time and date.
<!-- QUERY EXAMPLE -->  SELECT LOCALTIMESTAMP();

<!-- 4. TIME() -->
The TIME() Function return time from the existin date and time.
<!-- QUERY EXAMPLE --> SELECT TIME('2020-03-22 01:15:23') AS TIME;

<!-- 5. HOUR() -->
The HOUR() Function return HOUR from the existin date and time.
<!-- QUERY EXAMPLE --> SELECT HOUR('2020-03-22 01:15:23') AS TIME;

<!-- 6. MINUTE() -->
The MINUTE() Function return MINUTE from the existin date and time.
<!-- QUERY EXAMPLE --> SELECT MINUTE('2020-03-22 01:15:23') AS TIME;

<!-- 7. SECOND() -->
The SECOND() Function return SECOND from the existin date and time.
<!-- QUERY EXAMPLE --> SELECT SECOND('2020-03-22 01:15:23') AS TIME;

<!-- 8. MICROSECOND() -->
The MICROSECOND() Function return MICROSECOND from the existin date and time.
<!-- QUERY EXAMPLE --> SELECT MICROSECOND('2020-03-22 01:15:23') AS TIME;

<!-- 9. TIMEDIFF() -->
The TIMEDIFF() Function use for take diffrence between time.This Function have two parameters first is time and second also time for Diffrence.
<!-- QUERY EXAMPLE --> SELECT SELECT TIMEDIFF('01:15:23','03:12:22') AS TIME;

<!-- 10. ADDTIME() -->
The ADDTIME() Function is use Add time into the existing time.This Function have two parameters first is time And Second is Add time.
<!-- QUERY EXAMPLE --> SELECT ADDTIME('2020-04-12 01:15:23.000001','10:5:12.000005') AS TIME;

<!-- 11. SUBTIME() -->
The SUBTIME() Function is use Subtract time into the existing time.This Function have two parameters first is time And Second is Subtract time.
<!-- QUERY EXAMPLE --> SELECT SUBTIME('2020-04-12 01:15:23.000001','10:5:12.000005') AS TIME;
 
<!-- 12. MAKETIME() -->
The MAKETIME() Function is use for Making Time.This Function have three Parameters First is Hour Second is Minutes and Third is Seconds.
<!-- QUERY EXAMPLE --> SELECT MAKETIME(03,15,56) AS Time;

<!-- 13. TIMESTAMP() -->
The TIMESTAMP() Function is use for return Combine of Date and Time.This Function have two parameters First is Date and Second is Time.
<!-- QUERY EXAMPLE --> 

<!-- 14. TIME_FORMATE() -->
The TIME_FORMATE() Function is use for change the formate of SQL.
<!-- QUERY EXAMPLE --> SELECT TIME_FORMAT('05:15:00','%H') AS Time;

                       <!-- DATE_FORMATE -->

1. Hour %h(01 to 12), %H(00 to 23), %g(1 to 12), %G(0 to 23) 
2. Minutes %i(00 to 59)
3. Seconds %s(00 to 59)
4. Microsecond %f(000000 to 999999)
5. Meridien %p(AM or PM)

                       <!-- SOME QUERY EXAMPLES -->

1. SELECT TIME_FORMAT('05:15:00','%H %i %s') AS Time;                       
2. SELECT TIME_FORMAT('05:15:00','%H:%i:%s %p') AS Time;
3. SELECT TIME_FORMAT('05:15:00','%H:%i:%s%f %p') AS Time;

<!-- 15. TIME_TO_SEC -->
The TIME_TO_SEC() Function return Second of Given Time or Exesting Time.
<!-- QUERY EXAMPLE --> SELECT TIME_TO_SEC('05:15:00') AS Time;

<!-- 16. SEC_TO_TIME -->
The SEC_TO_TIME() Function return TIME of Given Seconds.
<!-- QUERY EXAMPLE --> SELECT SEX_TO_TIME(234234) AS Time;

