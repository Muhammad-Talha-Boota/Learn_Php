


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





