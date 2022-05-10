

            <!-- Create Table & Insert data into table -->


CREATE TABLE first_year_stu(
    id INT NOT NULL AUTO_INCREMENT UNIQUE,
    name VARCHAR(20) NOT NULL,
    pct INT NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(1) NOT NULL,
    city INT NOT NULL,
    course INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (course) REFERENCES course_n (coid)
);

INSERT INTO first_year_stu(name,pct,age,gender,city,course) VALUES
('ali',45,19,'M',1,2),
('Rumasa',33,20,'F',2,3),
('Numman',35,21,'M',3,4),
('Aliza',55,22,'F',4,1),
('Zain',32,20,'M',5,2);



             <!-- UPDATE Query -->

UPDATE first_year_stu SET pct = 85 WHERE id = 4; 

<!-- Query for Update more then one records at a time -->

UPDATE first_year_stu SET pct = (CASE id WHEN 5 THEN 35 WHEN 6 THEN 90 END) WHERE id IN (5,6);