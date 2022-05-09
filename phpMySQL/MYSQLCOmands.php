


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


















