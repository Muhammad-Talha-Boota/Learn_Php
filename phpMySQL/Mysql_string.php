

                     <!-- STRING -->


 <!-- ########### MySQL String Functions SQL # 30 & SQL # 31 ########## -->

 There are 28 type of string function are as follows.

<!-- 1. UPPER() / UCASE() -->
The UPPER() / UCASE() function is change the case of data as lower Case.
<!-- QUERY EXAMPLE --> SELECT id,UPPER/UCASE(name) AS NAME ,pct FROM first_year_stu; 

<!-- 2. LOWER() / LCASE() -->
The LOWER() / LCASE() function is change the case of data as upper Case.
<!-- QUERY EXAMPLE --> SELECT id,LOWER/LCASE(name) AS NAME ,pct FROM first_year_stu; 

<!-- 3. CHARACTER_LENGTH / CHAR/LENGTH() / LEGTH() -->
The CHARACTER_LENGTH() function return the legth of given variable.
<!-- QUERY EXAMPLE --> SELECT id,name,CHARACTER_LENGTH/CHAR_LENGTH/LENGTH(name) AS NAME FROM first_year_stu;

<!-- 4. CONCAT() -->
The CONCAT() Function is use for show two columns in one column.
<!-- QUERY EXAMPLE --> SELECT id,CONCAT(name, ' ',pct) AS NAME_Pct FROM first_year_stu;

<!-- 5. CONCAT_WS() -->
The CONCAT_WS() return the Concat data with first string for start of all strings.
<!-- QUERY EXAMPLE --> SELECT CONCAT_WS('YAHOO','BABA','YOUTUBE','CHANNEL') AS NAME;

                         <!-- TRIM -->

<!-- 6.  TRIM() -->
The TRIM() Function remove the extra spaces from Both Sides of DATA.
<!-- QUERY EXAMPLE --> SELECT TRIM("   QUADACTS   ") AS Name;

<!-- 7. LTRIM() -->
The LTRIM() Function remove the extra spaces from the LEFT of DATA.
<!-- QUERY EXAMPLE --> SELECT LTRIM("   QUADACTS   ") AS Name;

<!-- 8. RTRIM() -->
The RTRIM() Function remove the extra spaces from the RIGHT of DATA.
<!-- QUERY EXAMPLE --> SELECT RTRIM("   QUADACTS   ") AS Name;

<!-- 9. POSITION -->
The POSITION() Function is use for Finde Position of given chrachter from a LONG string.
<!-- QUERY EXAMPLE --> SELECT POSITION('baba' IN 'Yaho baba is a you tube channal that provide codeing.') AS POS;

<!-- 10. INSTR -->
The INSTR() Function work like a POSITION Function but in this Function we have not IN into the Query.
<!-- QUERY EXAMPLE --> SELECT POSITION('Yaho baba is a you tube channal that provide codeing.','baba') AS POS;

<!-- 11. LOCATE -->
The LOCATE() Function work like a POSITION Function but in this Function we have three parameter third parameter is location that we find where from in the string. Third parameter is optional. 
<!-- QUERY EXAMPLE -->  SELECT LOCATE('baba','Yaho baba is a you tube baba channal that provide codeing.',9) AS POS;

<!-- 12. SUBSTRING() / SUBSTR() / MID() -->
The SUBSTRING() / SUBSTR() / MID() Function is return a selected part of string. It's have Three parameters First is string , second is we want string from where and third is Length.
<!-- QUERY EXAMPLE --> SELECT SUBSTRING / SUBSTR / MID('YAHOO BABA YOUTUBE CHANNAL',3,5);

<!-- 13. SUBSTRING_INDEX()  -->
The SUBSTRING_INDEX() Function return LEFT DATA of the string. it's have three parameter first is string second is Deluminator and third is index of string.
<!-- QUERY EXAMPLE -->  SELECT SUBSTRING_INDEX('YAHOO BABA YOUTUBE CHANNAL BABA','BABA',1);

<!-- 14. LEFT() -->
The LEFT() Function return left side data of selected string.
<!-- QUERY EXAMPLE --> SELECT LEFT("YAHOO BABA YOUTUBE CHANNAL",8) AS NAME;

<!-- 15. RIGHT() -->
The RIGHT() Function return Right side data of selected string.
<!-- QUERY EXAMPLE --> SELECT RIGHT("YAHOO BABA YOUTUBE CHANNAL",8) AS NAME;

<!-- 16. RPAD()  -->
The RPAD() Function is use for Given padding from right side. There are three parameters in this function first is string second is number if padding and third is Given Padding in String.
<!-- QUERY EXAMPLE --> SELECT RPAD("YAHOO BABA", 25,'_') AS NAME;

<!-- 17. LPAD()  -->
The RPAD() Function is use for Given padding from Left side. There are three parameters in this function first is string second is number if padding and third is Given Padding in String.
<!-- QUERY EXAMPLE --> SELECT LPAD("YAHOO BABA", 25,'_') AS NAME;

<!-- 18. SPACE() -->
The SPACE() Function is use for add spaces.
<!-- QUERY EXAMPLE --> SELECT SPACE(100) AS NAME;

<!-- 19. REVERSE()  -->
The REVERSE() Function is use for reverse the string.
<!-- QUERY EXAMPLE  --> SELECT REVERSE('YAHOO BABA') AS NAME;

<!-- 20. REPLACE -->
The REPLACE() Function is use for Replace some data from a string. There are three parameters in this function first is string second is finding word and the third is replaceing word.
<!-- QUERY EXAMPLE --> SELECT REPLACE('YAHOO BABA YPUTUBE CHANNAL BABA','BABA','BIBI') AS NAME;

<!-- 21. STRCMP() -->
The STRCMP() Function is use for Commpare two strings. It's return three index. IF the Strings are compare then Its return 0 . IF FIRST string greater then second then its return 1 and if First string less then second string then its return -1.
<!-- QUERY EXAMPLE --> SELECT STRCMP('YAHOO BABA','yahoo baba') AS RESULT; Return 0.
<!-- QUERY EXAMPLE --> SELECT STRCMP('YAHOO BABA','yahoo') AS RESULT; Return 1.
<!-- QUERY EXAMPLE --> SELECT STRCMP('YAHOO','yahoo baba') AS RESULT; Return -1.

<!-- 22. FIELD() -->
The FIELD() Function is use for firnd a string from a list of strings. In First string we type Findeing Word. If he find string from list then it return INDEX number of string and if not find string then it return 0. 
<!-- QUERY EXAMPLE  --> SELECT FIELD('a','e','q','g','h','s') AS Name;
<!-- QUERY EXAMPLE  --> SELECT FIELD(4,1,2,3,4,5,6,7,8) AS Name;
<!-- QUERY EXAMPLE  --> SELECT FIELD('talha','ali','khan','Last','talha','usama') AS Name;

<!-- 23. FIND_IN_SET() -->
The FIND_IN_SET() function work like a FIELD But there a Bit Change in this function this find string from a set like "Ali,talha,khan".
<!-- QUERY EXAMPLE  --> SELECT FIND_IN_SET('talha','ali,khan,Last,talha,usama') AS Name;

<!-- 24. FORMATE() -->
The FORMATE() Function is use for INT value. If we have a decimal value in this function then after the . there are many numbers But by Using the second parameter of this function that is number of int after dot we have only Given Numbers.
<!-- QUERY EXAMPLE --> SELECT FORMAT(234.343,2) AS Number;

<!-- 25. HEX() -->
The HEX() function is use for Return the Haxadasimal form of a string.
<!-- QUERY EXAMPLE --> SELECT HEX('Numman') AS name;

