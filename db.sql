-- Drop tables if previously exists

DROP TABLE IF EXISTS Person;
DROP TABLE IF EXISTS Picture;
DROP TABLE IF EXISTS Password;
-- Create new tables

CREATE TABLE Person
(
       Person_id INT NOT NULL AUTO_INCREMENT,
       P_fname VARCHAR(255) NOT NULL,
	   P_lname VARCHAR(64) NOT NULL,
	   Age INT NOT NULL,
	   Gender CHAR(1),
       CONSTRAINT pk_person PRIMARY KEY (Person_id)
) ENGINE = InnoDB;

CREATE TABLE Password 
(       
	   Pssword_id INT NOT NULL AUTO_INCREMENT,
	   PName VARCHAR(255) NOT NULL,
       Person_id INT NOT NULL,
	   Passwrd VARCHAR(255) NOT NULL,
	   CONSTRAINT pk_psswrd PRIMARY KEY (Pssword_id),
	   CONSTRAINT fk_psswrd_person FOREIGN KEY (Person_id) REFERENCES Person (Person_id)

) ENGINE = InnoDB;	

CREATE TABLE Picture
(
       Pic_id INT NOT NULL AUTO_INCREMENT,
       Person_id INT NOT NULL,
	   Pic BLOB NOT NULL,
       CONSTRAINT pk_picture PRIMARY KEY (Pic_id),
       CONSTRAINT fk_pic_person FOREIGN KEY (Person_id) REFERENCES Person (Person_id)
) ENGINE = InnoDB;
ALTER TABLE `picture` CHANGE `Pic` `Pic` VARBINARY(255) NOT NULL;

-- Fill the tables up

--Person table 

INSERT INTO Person (P_fname, P_lname, Age, Gender) VALUES ('Muse', 'Washington', 19, 'M'),
								('Mr. Scruff', 'Ronson', 50, 'M'),
								('Big', 'Mitchim', 21, 'M'),
								('lilly', 'Ronson', 20, 'F'),
								('Mark', 'Ronson', 17, 'M'),
								('Angelina', 'Washington', 24, 'F'),
								('Leon', 'Lee', 18, 'F'),
								('Nicholas', 'Smallboy', 12, 'M');
								
INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'Muse'),
(SELECT Person_id from Person WHERE P_fname = 'Muse'),'Muse123');

INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'Big'),
(SELECT Person_id from Person WHERE P_fname = 'Big'), 'Big123');

INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'lilly'),
(SELECT Person_id from Person WHERE P_fname = 'lilly'), 'Lilly123');

INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'Mark'),
(SELECT Person_id from Person WHERE P_fname = 'Mark'), 'Mark123');

INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'Angelina'),
(SELECT Person_id from Person WHERE P_fname = 'Angelina'), 'Angelina123');

INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'Leon'),
(SELECT Person_id from Person WHERE P_fname = 'Leon'),'Leon123');

INSERT INTO Password (PName, Person_id, Passwrd) VALUES (
(SELECT P_fname from Person WHERE P_fname = 'Nicholas'),
(SELECT Person_id from Person WHERE P_fname = 'Nicholas'), 'Nicholas123');
