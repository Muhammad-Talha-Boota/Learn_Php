


<!-- #########  Note  ########## -->

BINARY is use for case sensitive. By Use this one it's return Data into the Given Form.


<!-- Command For Creat Data Base with SQL. -->

create DATABASE test(Name of Data Base);




<!-- MySQL Create Table Tutorial SQL # 3 -->

<!-- command for create data Table -->

CREATE TABLE table_name(
    column1 datatype,
    column1 datatype,
    column1 datatype,
    ....
)

<!-- Data Types for Dta Table -->

Three Type of category in Datatype.
1. String
2. Numeric
3. Date and Time (The Date Formate is (YYYY-MM-DD hh:mm:ss));

These Three category all Types is the Relative-pics Folder.

VARCHAR And Date Wright into the Codes

<!-- command for use table  -->

USE database_name;



<!-- ######### MySQL Insert Tutorial SQL # 4  ########### -->

<!-- Command For Insert Date into the data_Table -->

INSERT INTO table_name (column1,column2,......)
value(Value1,value2,.....);




<!-- MySQL INSERT Multiple Rows Tutorial  SQL # 5 -->

<!-- command for insert Multiple Rows -->

INSERT INTO table_name (column1,column2,......)
value
(Value1,value2,.....),
(Value1,value2,.....),
(Value1,value2,.....);




<!-- ############ MySQL Constraints SQL # 6  ########### -->

<!-- Constraints in MySQL  -->

Demo Constraints in the Relative-pics Folder 

Constraints mean Restrictions.. There are Six type of Constraints are as follous.
1. Not Null
2. Unique
3. Default
4. Check
5. Foreign Key
6. Primary key

<!-- Table with some Constraints. -->

CREATE TABLE student_information(
    id INT NOT NUll UNIQUE,
    name VARCHAR(50) NOT NULL,
    Age INT NOT NULL CHECK(Age>=18),
    Phone INT NOT NULL UNIQUE,
    Gender VARCHAR(10) NOT NULL
    City VARCHAR(50) NOT NULL DEFAULT'Gujranwala'
);





<!--  ########## MySQL SELECT With WHERE Clause SQL # 7  ###########  -->

<!-- SELECT Command for Select Date From Data Table -->

<!-- Data from given column -->

SELECT column1, column2, column3, ......
FROM table_name

<!-- Data from all Column -->

SELECT * 
FROM table_name;

<!-- we also rename the Column name with the help of AS. --> 
<!-- we have inverted codes when we have two are more then words Column name -->

SELECT column1 AS Given_name, column2 AS Given_name, column3 AS Given_name, ......
FROM table_name

<!-- SELECT Date with WHERE Clause -->

<!-- Selected columns -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE condition

<!-- All Columns -->

SELECT *
FROM table_name
WHERE condition

<!-- WHERE comparision operater  -->

(= Equal)   (> Greater then)  (< Less then) (>= Greter then or Equal to) (<= less then or equal to) (<> or != not Equal) (BETWEEN(Between a certain range))  (LIKE(Search for a pattern))  (IN(To specify multiple possible values for a columns)).





<!-- ############ MySQL AND, OR, NOT Operators SQL # 8   ############ -->

<!-- AND Operater Return data whoes Exist in Both conditions -->


SELECT column1, column2, column3, ......
FROM table_name
WHERE condition1 AND condition2 AND condition3.......; 

SELECT * FROM student_information WHERE age <= 20 AND age >= 25

<!-- OR operater Return date Whoes Exist in atlest one condition -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE condition1 OR condition2 OR condition3.......;

<!-- For Combined we have Round Brases.  -->

SELECT * FROM student_information WHERE (age <= 20 OR age >= 25) AND gender = 'F'

<!-- NOT Operater Return Date Whoes Not is Gujranwwala -->

SELECT * FROM student_information WHERE NOT City = 'Gujranwala'





<!-- ########## MySQL IN & NOT IN Operator SQL # 9  ########### -->

<!-- IN operater is the Short Way of OR operater. -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name IN (value1, value2,...);

SELECT * FROM student_information WHERE age IN(18,21,25,22,23)

<!-- NOT IN operater is the oposite of IN operater. its Return Value that is not in Given Value -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name IN (value1, value2,...);

<!-- we have multiple value in the command -->

SELECT * FROM student_information WHERE age NOT IN(18,21,25,22,23)





<!--  ####### MySQL BETWEEN & NOT BETWEEN Operator SQL # 10  ######## -->

<!-- Select with BETWEEN operator Sytax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name BETWEEN value1 AND value2;

SELECT * FROM student_information WHERE age BETWEEN 18 AND 20;

<!-- Select with NOT BETWEEN operator Sytax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name NOT BETWEEN value1 AND value2;

SELECT * FROM student_information WHERE age NOT BETWEEN 20 AND 30;

<!-- It also Search for Alphabaticaly -->

SELECT * FROM student_information WHERE name BETWEEN "a" AND "z";

<!-- BETWEEN For Date  -->

SELECT * FROM quad WHERE DOB BETWEEN '1900-01-01' AND '2010-01-01';





<!-- ########  MySQL LIKE Operator & Wildcards SQL # 11  ####### -->


<!-- Like operater with Wildcards Patterns -->

LIKE 'a%' start with "a"
LIKE '%a' End with "a"
LIKE '%am%' Have "am" in any position
LIKE 'a%m' start with "a" and Ends with "m"
LIKE '-a%' "a" in the second position 
LIKE '--a%' "a" in the second position 
LIKE '-oy%' "o" in the second and "y" in the third position. 


<!-- WhildCard Characters -->

There are Two type of wildCard Characters
1. (Percentage Sign) % : Represents Zero, one, or Multiple Characters.
2. (Underscore Sign) - : Represents a single Character.

<!-- SELECT with LIKE Operater Sytax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name LIKE pattern;

<!-- SELECT with NOT LIKE Operater Sytax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name NOT LIKE pattern;





<!-- ########### SELECT REGULAR Expression SQL # 12  ########## -->

By useing REGULAR Expression we can Access More then one reconrd at a time. For More Then one Expression we Use | (pai sign)

<!-- Regular Expression Patterns with Description -->
 
1.  ^      '^ra'    Beginig of string   
2.  $      'an$'    End of string
3.  [..]   '[rms]'  Any chracter list Between the square Brackets
4.  ^[...] '^[rms]' Beginig with any chracter listed between the square Brackets.
5.  [a-z]  '[a-h]e' Match With the range.  i.e ae,be,cr etc.
6.  p1|p2|p3 'ali|khan|final' matches any of the patterns p1,p2 or p3
7. ''  'ra'  Return Relative date with ra Expression.

<!-- SELECT with Regular Expression Syntax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE column_name REGEXP pattern;





<!-- ########### ORDER BY & DISTINCT SQL # 13  ########## -->

<!-- SELECT with ORDER BY syntax -->

SELECT column1, column2, column3, ......
FROM table_name
ORDER By column_name ASC | DESC;

Here ASC is By Default Order

<!-- we also use this for any spacefic column -->

SELECT * FROM `student_information` WHERE age IN(18,30,25) ORDER BY name DESC;


<!-- SELECT Date With DISTINCT -->

DISTINCT is use for Return Data with No Duplicase its Return Single Time Data. And Its return Data is called consoledet Data.

<!-- SELECT with DISTINCT syntax -->

SELECT DISTINCT column1,column2,....... FROM table_name;

<!-- Query Example of DISTINCT with DESC or ASC Order -->

SELECT DISTINCT age AS 'Student-Age' FROM student_information ORDER BY age ASC






<!-- ########### IS NULL & IS NOT NULL SQL # 14 ########## -->

<!-- IS NULL is use for return Null Date from the Data table -->

<!-- SELECT with IS NULL Syntax -->

SELECT column1, column2, column3, ......
FROM table_name

<!-- Qurey Example of IS NULL -->

SELECT * FROM `quad` WHERE DOB IS NULL;

<!-- SELECT with IS NOT NULL Syntax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE Column_name IS NOT NULL;

<!-- Qurey Example of IS NOT NULL -->

SELECT * FROM `quad` WHERE DOB IS NOT NULL;





<!-- ########### LIMIT & OFFSET SQL # 15 ########## -->

<!-- LIMIT is use for Given LIMIT in the return data. LIMIT 3 -->

<!-- SELECT with LIMIT Syntax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE condition
LIMIT number;

<!-- Qurey Example of IS LIMIT -->

SELECT * FROM student_information WHERE City <> 'Gujranwala' LIMIT 4;

<!-- OFFSET is use for that where we want to start. LIMIT 3,4 -->

<!-- SELECT with LIMIT & OFFSET Syntax -->

SELECT column1, column2, column3, ......
FROM table_name
WHERE condition
LIMIT offset, number;

<!-- Qurey Example of IS LIMIT -->

SELECT * FROM student_information WHERE City <> 'Gujranwala' LIMIT 3, 4;




<!-- ########### Aggregate Functions SQL # 16 ########## -->

Five Type of Aggregate Functions are as follous;

1. Count(column_name) 
2. MAX(column_name)
3. MIN(column_name)
4. SUM(column_name)
5. AVG(column_name)

<!-- SELECT with Aggregate Functions Syntax -->

SELECT COUNT(Column_name)
FROM table_name
WHERE condition;

<!-- Queery Example For COUNT. Its use for total Count -->

SELECT COUNT(name) AS 'Total student' FROM emp_record

<!-- Queery Example For MAX Use For Max Number -->

SELECT MAX(name) AS 'MAX_Salery' FROM emp_record

<!-- Queery Example For SUM  Use for Total Sum-->

SELECT SUM(name) AS 'Total Salery' FROM emp_record

<!-- Queery Example For AVG Use For Avg of a total Number -->

SELECT AVG(name) AS 'Total Average' FROM emp_record





<!-- ########### UPDATE SQL # 17 ########## -->

UPDATE COMMAND is use for update the Data From the data table.

<!-- UPDATE Syntax -->

UPDATE table_name
SET column1_name = value1 , column2_name = value2,....
WHERE condition;

<!-- Quree Example Single Column Update -->

UPDATE student_information SET name = "Muhammad Talha"  WHERE id = 10;

<!-- Quree Example Multiple Column Update -->

UPDATE student_information SET name = "Muhammad Talha",age = 21, phone = 03027124  WHERE id = 10;

<!-- An other Example with WHERE condition; -->

UPDATE student_information SET age = 23 WHERE id IN (7,8);'





<!-- ########### COMMIT & ROLLBACK SQL # 18 ########## -->

And if we Work in SQL WorkBAnch then we Set Some Settings.

<!-- Impoetent Note -->

By default, MySQL automatically commits the changes permanently to the database. To force MySQL not to commit changes automatically, you use the following statement:

SET autocommit = 0;
Code language: SQL (Structured Query Language) (sql)
Or

SET autocommit = OFF

<!-- ROLLBACK -->

ROLLBACK Command revert INSERT, UPDATE, DELETE And All quree of Insert Data. And Revert All Command that Run Before Run This Quree. Mean Ka Ya Pahla Sa Run Hoi Sabhi Command Ko Revers kr da ga.

<!-- COMMIT -->

Commit Command Save All Quree. Mean ka Es Ko Use krna ka Bad Ya Jab Ham ROLLBACK Command Use kra ga to Roll Back Sabhi Update ko Reverse nhi Kra ge bss Commit Command Tak ke Quree ko he Reverse kra ge 

<!-- NOTE -->

This Two Commands COMMIT & ROLLBACK Only Work For Three Commands Are as Follous.

COMMIT & ROLLBACK Works for.

1. INSERT 
2. UPDATE
3. DELETE

<!-- Quree Example For COMMIT -->

SELECT * FROM `student_information` COMMIT






<!-- ########### DELETE SQL # 19 ########## -->

DELETE Command is use foe Delete Some Data From the Data Table.

<!-- DELETE Syntax -->

DELETE FROM table_name
WHERE condition;





<!-- ########### PRIMARY KEY & FOREGIN KEY SQL # 20 ########## --> Constraints ke Last two keys

<!-- Auto_Increment Type -->

By Useing This Type the ID Have Default Data With Sequence. 





<!--What is PRIMARY KEY Constraint -->

1. primary key Always has a unique data.
2. A Primary key Cannot Have null Value.
3. A table can contain only one primary key Constraint.

<!-- Create Table with PRIMARY KEY Syntax FOR NEW Table -->

CREATE TABLE table_name(
    id NOT NULL Auto_Increment,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    city VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);


<!-- Alter Table with PRIMARY KEY Syntax FOR Already create Table -->

ALTER TABLE table_name

ADD PRIMARY KEY (id);


<!-- What is FOREIGN KEY Constraint  ? -->

1. A FOREIGN KEY is a key used to link two table together.
2. A FOREIGN KEY in one table used to point PRIMARY key in another table.


<!-- Create Table with FOREIGN KEY Syntax FOR NEW Table -->

CREATE TABLE table_name(
    id NOT NULL Auto_Increment,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    city VARCHAR(20) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (city) REFERNCES City (cid)
);


<!-- Alter Table with FOREIGN KEY Syntax FOR Already create Table -->

ALTER TABLE table_name

ADD FOREIGN KEY (city) REFERNCES City (cid);

<!-- CRETE Table and Insert data into table -->

CREATE TABLE web_stu(
    id INT NOT NULL Auto_Increment,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    city INT NOT NULL,
    course INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (city) REFERENCES city (cid)
);

INSERT INTO web_stu(id,name,age,city,course) 
VALUES (1,'AHMAD',33,3,4),
(2,'Kul',27,2,1),
(3,'Final',28,2,1),
(4,'Adnan',25,3,2),
(5,'Khan',33,4,3);



                    <!-- ***** JOIN  ***** -->

There are four type of join are as follous

1. INNER JOIN
2. LEFT JOIN
3. RIGHT JOIN
4. CROSS JOIN



<!-- ########### INNER JOIN  SQL # 21 ########## -->

The INNER JOIN selects records that have matching value in both tables.

<!-- INNER JOIN / JOIN Syntax -->

SELECT columns 
FROM table1 
INNER JOIN table2
ON table1.column_name = table2.columns_name;

<!-- Quree Example of INNER JOIN / JOIN -->

SELECT * FROM std_rec S INNER JOIN city C ON S.city = C.cid

<!-- Qurey Example with Require Columns, Where Condition and with the Order  -->

SELECT id,name,gender,age,cityname FROM std_rec S INNER JOIN city C ON S.city = C.cid WHERE gender = 'Male' ORDER BY name ASC;




 
<!-- ########### RIGHT JOIN & LEFT JOIN  SQL # 22 ########## -->

<!-- what is left join -->

The LEFT JOIN returns all records from the left table (table1), and also return matched records from the right table (table2)
 
<!-- LEFT JOIN Syntax. -->

SELECT columns
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;

<!-- Qurey Example of LEFT JOIN  -->

SELECT * FROM std_rec LEFT JOIN city ON std_rec.city = city.cid;


<!-- What is RIGHT JOIN ? -->

The RIGHT JOIN returns all records from the right table (table2), and the matched records from the left table (table1)
 
<!-- RIGHT JOIN Syntax. -->

SELECT columns
FROM table1
RIGHT JOIN table2 
ON table1.column_name = table2.column_name;

<!-- Qurey Example of RIGHT JOIN  -->

SELECT * FROM std_rec RIGHT JOIN city ON std_rec.city = city.cid;





<!-- ########### MySQL CROSS JOIN SQL # 23 ########## -->

<!-- what is cross join -->

Cross join return all record of table1 multiply by table2 Records one by One.

<!-- Cross Join Syntax -->

SELECT * FROM table1 CROSS JOIN table2;

<!-- Qurey Example of CROSS JOIN  -->

SELECT * FROM std_rec CROSS JOIN city;






<!-- ########### MySQL JOIN Multiple Tables SQL # 24 ########## -->

<!-- JOIN Multiple Table -->

This join is use for taken maching data from from the all join tables.

<!-- INNER JOIN Syntax for Multiple Table. -->

we have more then 2 or 3 table for inner join

SELECT columns 
FROM table1 
INNER JOIN table2
ON table1.column_name = table2.columns_name
INNER JOIN table3
ON table1.column_name = table3.columns_name;

<!-- Qurey Example of INNER JOIN for Multiple table -->

SELECT * FROM web_stu A INNER JOIN city B ON A.city = B.cid INNER JOIN course_n C ON A.course = C.coid;

<!-- Qurey Example With Selected Columns -->

SELECT id,name,age,cityname,corsename FROM web_stu A JOIN city B ON A.city = B.cid JOIN course_n C ON A.course = C.coid;

<!-- Qurey Example With Conditional Base -->

SELECT id,name,age,cityname,corsename FROM web_stu A JOIN city B ON A.city = B.cid JOIN course_n C ON A.course = C.coid WHERE age >= 30

<!-- NOTE -->

We alse use this for left Join or Right Join.






<!-- ########### MySQL GROUP BY & HAVING Clause SQL # 25 ########## -->

<!-- WHAT IS GROUP BY..?  -->

The Group by clause is used in conjunction with the SELECT statement and Aggregate function to group rows togather by common columns values.

<!-- SELECT with Group By syntax. -->

<!-- For one table -->

SELECT calumns FROM table_name WHERE condition Group BY Column_name(s); 

<!-- For More then one table -->

SELECT calumns FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name WHERE condition GROUP BY Column_name(s); 

<!-- QUREE Example of Group by -->

SELECT city, COUNT(city) FROM web_stu GROUP BY city;

<!-- QUREE Example of Group by with JOIN -->

SELECT cityname, COUNT(city) FROM web_stu A INNER JOIN city B ON A.city = B.cid GROUP BY city;

<!-- QUREE Example of Group by with JOIN and Conditional Base(WHERE) -->

SELECT cityname, COUNT(A.city) AS Total FROM web_stu A INNER JOIN city B ON A.city = B.cid WHERE A.age >= 30 GROUP BY city;

<!-- QUREE Example of Group by with JOIN and Conditional Base(WHERE) & ORDER BY -->

SELECT cityname, COUNT(A.city) AS Total FROM web_stu A INNER JOIN city B ON A.city = B.cid WHERE A.age >= 30 GROUP BY city ORDER BY city DESC;


<!-- HAVING Clause  -->

HAVING Clause is the short form of where clause and always use with group by.

<!-- SELECT with GROUP BY & HAVING syntax -->

SELECT columns FROm table_name GROUP BY column1_name(s) HAVING condition;


<!-- QUREE Example of GROUP BY & HAVING syntax -->


SELECT cityname, COUNT(A.city) AS Total FROM web_stu A INNER JOIN city B ON A.city = B.cid WHERE A.age >= 30 GROUP BY city HAVING COUNT(A.city) > 3 ORDER BY city DESC;





<!-- ###########MySQL SubQuery with EXISTS & NOT EXISTS SQL # 26 ########## -->


<!-- What is SubQuery or Nested Query ..? -->

Ak Quree ka Ander Dusri Quree lekhna ko Sub Quree ya Nested Quree kahta ha.

<!-- SELECT with SubQuery Syntax  -->

SELECT column FROM table1 WHERE column = (SELECT column FROM table2 WHERE condition)

SubQuery is Alse work with INSERT UPDATE DELETE SELECT.

<!-- Query Example of sub_query or Nested query -->

SELECT name FROM web_stu WHERE course = (SELECT coid FROM course_n WHERE corsename = 'HTML');

<!-- Query Example of sub_query or Nested query for more than one condition -->

SELECT name FROM web_stu WHERE course IN (SELECT coid FROM course_n WHERE corsename IN ('HTML','CSS'));


<!-- What is EXISTS..? -->

If Child command return any Single Record Exists Then Parent command show results.

<!-- SELECT with EXISTS syntax -->

SELECT column FROM table1 WHERE EXISTS = (SELECT column FROM table2 WHERE condition);

<!-- Query Example of Exists -->

SELECT name FROM web_stu WHERE EXISTS (SELECT coid FROM course_n WHERE corsename = 'HTML');


<!-- What is NOT EXISTS..? -->

If Child command not return any Single Record Exists Then Parent command show results.

<!-- SELECT with EXISTS syntax -->

SELECT column FROM table1 WHERE NOT EXISTS = (SELECT column FROM table2 WHERE condition);

<!-- Query Example of NOT Exists -->

SELECT name FROM web_stu WHERE NOT EXISTS (SELECT coid FROM course_n WHERE corsename = 'HTML');




<!-- ########### MySQL UNION & UNION ALL SQL # 27 ########## -->

<!-- What is UNION & UNION ALL..? -->

UNION and UNION ALL return two selected Table's all columns in on table But the differnce between UNION and UNION ALL is that UNION ALL RETURN Duplicate data if two table have same name data.BUT
the UNION have no Duplicate data.

<!-- UNION & UNION ALL Syntax -->

SELECT column1,column2,.. FROM table1 UNION/UNION ALL SELECT column1,column2,.. table2;

There are some rule for UNION & UNION ALL are as follow;

1. Each SELECT statment within UNION must have the same number of columns.
2. The columns must also have similar data types.
3. The columns in each SELECT statment must also be in the same order.

<!-- Query example of UNION -->

SELECT * FROM city UNION SELECT * FROM course_n;


<!-- Query Example with Inner Join and subQuery  -->


SELECT * FROM web_stu s INNER JOIN city c ON s.city = c.cid WHERE c.cityname = 'Lahore' UNION ALL SELECT * FROM web_lac l INNER JOIN city c2 ON l.city = c2.cid WHERE c2.cityname = "Lahore";

<!-- Query Example with Inner Join and subQuery with Selected Column  -->

SELECT s.name,c.cityname,s.age FROM web_stu s INNER JOIN city c ON s.city = c.cid WHERE c.cityname = 'Lahore' UNION ALL SELECT l.name,c2.cityname,l.age FROM web_lac l INNER JOIN city c2 ON l.city = c2.cid WHERE c2.cityname = "Lahore"



<!-- ########### MySQL IF & CASE Statement SQL # 28 ########## -->

<!-- What is IF Clause..? -->

IF Clause is use for return conditional base data from the data table. This is use for only two condition true & False.

<!-- SELECT With IF Clause Syntax -->

SELECT column1,column2,...
IF (Condition, TRUE Result, FALSE Result) AS alias_name
FROM table_name;

<!-- Query Example of IF Clause -->

SELECT id,name,pct, IF(pct >= 33,'PASS','FAIL') AS Result FROM first_year_stu;


<!-- What is CASE Clause -->

Case Clause is use for return conditional base data from the data table. This is use for more then two condition.

SELECT column1,column2,...
CASE
 WHEN Condition1 THEN result1
 WHEN Condition2 THEN result2
 WHEN Condition3 THEN result3
 WHEN Condition4 THEN result4
 ELSE result alse_name
END AS alias_name
FROM table_name;


<!-- Query Example for CASE Clause -->


SELECT id,name,pct,
CASE
   WHEN pct >= 80 AND pct <=100 THEN 'ON Marit'
   WHEN pct >= 60 AND pct < 80 THEN '1st Dev.'
   WHEN pct >= 45 AND pct < 60 THEN '2nd Dev.'
   WHEN pct >= 33 AND pct < 45 THEN '3rd Dev.'
   WHEN pct < 33 THEN 'Fail'
   ELSE 'Invalid Percentage %'
END AS Grade
FROM first_year_stu;


<!-- CASE Clase For Update Query  -->

UPDATE first_year_stu SET pct = (CASE id WHEN 5 THEN 35 WHEN 6 THEN 90 END) WHERE id IN (5,6);




<!-- ########### MySQL Arithmetic Functions SQL # 29 ########## -->

There are Eighteen type of artihmatic operaters but the Nine are most important are as follows.
1. PI()
2. ROUND()
3. CEIL()
4. FLOOR()
5. POW()
6. SQRT()
7. RAND()
8. ABS()
9. SIGN()

<!-- 1. PI() -->

The PI() function returns the value of PI.

<!-- Query example of PI -->
SELECT PI();

<!-- 2. ROUND() -->

The ROUND() function Return ROUND value for example if we have 4.3 then it's return 4 and if we have 4.6 then it return 5. In this Function there is a second parameter is the number of digit after DOT .

<!-- Query example of Round -->
SELECT ROUND(123.678,2);

<!-- 3. CEIL() -->

The CEIL() function Return roof(upper) value for example if we have 4.3 then it's return 5.

<!-- Query Example of CEIL -->
SELECT CEIL(12.43);

<!-- 4. FLOOR() -->

The FLOOR() function Return Floor(lower) value for example if we have 4.3 then it's return 4.

<!-- Query Example of FLOOR -->
SELECT FLOOR(12.43);
 
 <!-- 5. POW(base , exp) -->

 The POW() function is use for taken Power of a value. In this parameter there are two parameters first is Base and second is exponent.

 <!-- QUERY Example of POW -->
 SELECT POW(2,4);

 <!-- 6. SQRT() -->
 
 The SQRT() function is use for taken square root of a value.

 <!-- Query Example of SQRT -->
 SELECT SQRT(4);
 
 <!-- 7. RAND() -->

 The RAND() function Return Rendum number between 0 and 1 but by calculation we change the random number between 1 to 10.

 <!-- Random Number from 1 to 100 -->
 SELECT RAND() * 100;

 <!-- Query Example of Rand -->
 SELECT RAND();

 <!-- 8. ABS -->
 
 The ABS() function Return Absolute Vale.

 <!-- Query Example for ABS  -->
 SELECT ABS(-454);

 <!-- 9. SIGN() -->

 This SIGN() Opperater Return three type of value are as follows.
 1. (NO > 0 then return 1)
 2. (NO = 0 then return 0)
 3. (NO < 0 then return -1)

 <!-- Query Example of SIGN -->
 SELECT SIGN(0);

<!-- Query Example of SELECT with arithmatic opperaters -->

 SELECT id,name,(pct + 5) AS new FROM first_year_stu;

<!-- Query Examople of more then one function -->

 SELECT FLOOR(7 + (RAND() * 6));

 <!-- REAL TIME USE OF RANDOM NUMBER -->

 SELECT id,name,pct FROM first_year_stu ORDER BY RAND();




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



<!-- MySQL ALTER LEC # 139 SQL # 35 -->

<!-- What is ALTER -->

ALTER Command is use for Table Modify. This Command is use for change name of column, use for change datatype of column, use for change the name of the column, use for recordering of the columns.

## Features of ALTER Command.

> Add Column in a table
> Changeing Data Type of a Column
> Change Column Name
> Adding Constrints to a Column
> Change Column Position
> Delete Column
> Renaming Tables

                            <!-- ALTER Syntax -->

<!-- Syntax For add new Column in a Exiting Column -->
ALTER TABLE table_name
ADD column_name Datatype;
<!-- Query Example -->
ALTER TABLE web_stu
ADD Email VARCHAR(255);


<!-- Syntax For Modify datatpe of Column  -->
ALTER TABLE table_name
MODIFY Column_name datatype;
<!-- Query Example --> ALTER TABLE web_stu MODIFY Email INT(20);


<!-- Syntax For Delete Column  -->
ALTER TABLE table_name
DROP COLUMN Column_name datatype;
<!-- Query Example --> ALTER TABLE web_stu DROP Email_Id;


<!-- Syntax For rename Column -->
ALTER TABLE table_name
CHANGE Column_name New_name datatype Constrant;
<!-- Query Example --> ALTER TABLE web_stu CHANGE Email Email_Id VARCHAR(255) UNIQUE;

<!-- Syntax for Rename Table -->
ALTER TABLE table_name
RENAME new_table_name; 
<!-- Query Example --> ALTER TABLE web_stu RENAME WEB_LACTURER;


<!-- Syntax for reordering of new Column or Exist columnn -->
ALTER TABLE table_name
MODIFY Column_name datatype
AFTER column_name;
<!-- Query Example --> ALTER TABLE web_stu MODIFY Email VARCHAR(255) AFTER name;


<!-- Syntax for Add Restrection for a Existing Column. -->
ALTER TABLE table_name
ADD Restrection (Column_name);
<!-- Query Example --> ALTER TABLE web_stu ADD UNIQUE(Email);


Solution jo data 1 ka bad 5 wali id a jate ha.
ALTER TABLE table_name
AUTO_INCREMENT = number where you want to start.
<!-- Query Example  --> ALTER TABLE web_student AUTO_INCREMENT = 6;



<!-- MySQL DROP & TRUNCATE Table LEC # 140 SQL # 36 -->

<!-- DROP COMMAND -->
The DROP Command is use for Delet all data and also table.
<!-- Syntax --> DROP TABLE table_name;
<!-- QUERY EXAMPLE --> DROP TABLE quad;

<!-- TRUNCATE COMMAND -->
The TRUNCATE Command is use for empty the table.This Command Delete all data of this table.
<!-- Syntax --> TRUNCATE TABLE table_name;
<!-- QUERY EXAMPLE --> TRUNCATE TABLE quad;



<!--MySQL VIEW LEC # 141 SQL # 37 -->

VIEW Comamnd is use for Save Some Createcal Query in SQL. This Command also use for some Lengthy Quers.We Create any Query with the help of create VIEW, Update it also Delete the view.

<!-- VIEW Syntax -->
CREATE view_name
AS Query_name. 
<!-- Query Example -->
CREATE VIEW SCD AS SELECT id,name,corsename FROM first_year_stu a INNER JOIN course_n b ON a.course = b.coid;

<!-- UPDATE VIEW Syntax -->
ALTER VIEW
AS Query_name;
  or
CREATE OR REPLACE VIEW
AS Query_name;
<!-- Query Example -->
ALTER VIEW scd AS SELECT id,name,cityname,corsename FROM first_year_stu a JOIN city b ON a.city = b.cid JOIN course_n c ON a.course = c.coid;

<!-- RENAME VIEW Syntax -->
RENAME TABLE view_name(old) to view_name(new);
<!-- Query Example --> RENAME TABLE scd to student_data_course;

<!-- DELETE VIEW Syntax -->
DROP VIEW view_name;
<!-- Query Example --> DROP VIEW student_data_course;

<!-- Advantages Of VIEW: -->
> Simplify Complax Query.
> Provides Extra Layer of Security.

<!-- Disadvantages Of VIEW: -->
> Performance Decreases
> Dependency on Table.


<!--MySQL INDEX LEC # 142 SQL # 38 -->

ایس کیو ایل انڈیکس کو ڈیٹا بیس سے بہت تیزی سے ڈیٹا حاصل کرنے کے لیے استعمال کیا جاتا ہے۔ ٹیبل یا ویو کو انڈیکس کرنا، بلا شبہ، سوالات اور ایپلیکیشنز کی کارکردگی کو بہتر بنانے کے بہترین طریقوں میں سے ایک ہے۔ ایس کیو ایل انڈیکس وہ ریکارڈ تلاش کرنے کے لیے ایک فوری تلاش کی میز ہے جو صارفین کو اکثر تلاش کرنے کی ضرورت ہوتی ہے۔



<!-- INDEX syntax -->
CREATE index_name ON table_name(column1,column2,column3,.......) 
<!-- Query Example --> CREATE INDEX studdob ON first_year_stu (age);


<!-- Syntax for Delete Index -->
DROP INDEX index_name ON table_name;
<!-- Query Example --> DROP INDEX studdob ON first_year_stu;

<!-- Query for Find How Many index on our Table -->
SHOW INDEX FROM table_name;




<!-- INDEX syntax For DROP Index -->
DROP INDEX index_name ON table_name;

Guideline of INDEX:
> Automatically Create the index for PRIMARY KEY and UNIQE columns
> Index columns that you Frequently use to retrieve the data.
> Index columns that are used for joins to improve join performance.
> Avoid columns that contain too many null values.
> Small tables do not require INDEXES.
