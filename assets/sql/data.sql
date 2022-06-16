/* drop database, then add to clear and reset to file data */
DROP DATABASE IF EXISTS juleschool;

CREATE DATABASE juleschool;

USE juleschool;

/* create users table */
CREATE TABLE users(	

	id int AUTO_INCREMENT,
	firstName varchar(20),
	lastName varchar(20),
	email varchar(100),
	username varchar(20),
	password varchar(50),
	access int DEFAULT 1,
	obsolete boolean DEFAULT 0,

	PRIMARY KEY(id)

);

/* create teachers table */
CREATE TABLE teachers(	

	id int AUTO_INCREMENT,
	firstName varchar(20),
	lastName varchar(20),
	email varchar(100),
	dob DATE,
	gender varChar(20),
	tenor varchar(100),
	specialty varchar(100),
	cv varchar(100),
	obsolete boolean DEFAULT 0,

	PRIMARY KEY(id)

);

/* create students table */
CREATE TABLE students(

	id int AUTO_INCREMENT,
	firstName varchar(20),
	lastName varchar(50),
	email varchar(100),
	dob DATE,
	gender varchar(20),
	grades varchar(200),
	avgGrade DECIMAL(3, 1),
	obsolete boolean DEFAULT 0,

	PRIMARY KEY(id)

);


/* create classes table */
CREATE TABLE classes(	

	id int AUTO_INCREMENT,
	name varchar(100),
	description TEXT(2000),
	teacherID int,
	duration int,
	startDate DATE,
	startTime TIME,
	obsolete boolean DEFAULT 0,

	PRIMARY KEY(id),
	FOREIGN KEY(teacherID) REFERENCES teachers(id)

);


/* create courses table */
CREATE TABLE courses(	
	
	id int AUTO_INCREMENT,
	name varchar(100),
	description TEXT(2000),
	startDate DATE,
	endDate DATE,
	obsolete boolean DEFAULT 0,

	PRIMARY KEY(id)

);


/* Insert starting data into each table */

/* users */
INSERT INTO users (firstName, lastName, email, username, password, access, obsolete)
VALUES 	
	("John", "Smith", "jsmith@email.com", "myusername", "password123", 1, 1),
	("Jane", "Doe", "jdoe@email.com", "myusername2", "password1234", 1, 1);


/* students */
INSERT INTO teachers (firstName, lastName, email, dob, gender, tenor, specialty, cv, obsolete)
VALUES
  ("Samantha","Thompson","nisi.mauris.nulla@aol.net","2021-08-18","Male","for","sit amet, consectetuer adipiscing","www.curriculum.com",1),
  ("Wang","Whitaker","scelerisque.lorem@google.net","2022-01-19","Male","what","Nulla eget","www.curriculum.com",1),
  ("Lacey","Robertson","ante@icloud.edu","2021-10-21","Male","what","mi eleifend egestas.","www.cv.com",1),
  ("Allegra","Hutchinson","sem.vitae@yahoo.couk","2023-05-24","Male","not","velit. Aliquam","www.curriculum.com",1),
  ("Phoebe","Dyer","accumsan.laoreet.ipsum@outlook.net","2021-12-08","Male","what","ultrices posuere cubilia Curae","www.cv.com",1),
  ("Chelsea","Gilmore","ligula.donec@hotmail.net","2022-02-12","Male","what","In","www.curriculum.com",0),
  ("Devin","Carney","aenean.egestas.hendrerit@aol.ca","2022-09-10","Male","sure","et netus et malesuada","www.cv.com",0),
  ("Alika","Stout","dui@aol.couk","2023-04-27","Male","for","tempor arcu. Vestibulum","www.curriculum.com",1),
  ("Jade","Guy","magna@icloud.org","2021-11-08","Male","for","mollis. Integer","www.cv.com",0),
  ("Lillian","Hammond","eleifend@yahoo.org","2023-06-04","Male","not","imperdiet, erat nonummy","www.cv.com",1),
  ("Jamal","Ellis","suscipit.est@google.com","2022-09-06","Male","to","Quisque varius. Nam porttitor","www.curriculum.com",1),
  ("Elton","Holmes","molestie@outlook.edu","2023-04-25","Male","words","ullamcorper, nisl","www.curriculum.com",0),
  ("Basil","Meadows","vitae@google.ca","2021-10-27","Male","put","senectus et netus et","www.cv.com",0),
  ("Ryan","Herrera","mauris.molestie.pharetra@protonmail.edu","2022-11-29","Male","not","Donec consectetuer","www.curriculum.com",0),
  ("Levi","Mack","inceptos.hymenaeos@protonmail.org","2021-12-14","Male","for","convallis dolor.","www.curriculum.com",1),
  ("Irma","Cooper","donec@outlook.net","2022-07-22","Male","not","sapien. Aenean massa. Integer","www.curriculum.com",0),
  ("Dai","Chen","nec.mollis@yahoo.edu","2021-10-03","Male","to","est,","www.cv.com",1),
  ("Blaze","Barrera","egestas@icloud.com","2022-05-15","Male","sure","accumsan convallis, ante","www.cv.com",1),
  ("Germaine","Fisher","euismod@outlook.com","2022-08-15","Male","tenor","nec, diam. Duis","www.cv.com",0),
  ("Marcia","Howell","nunc.risus@icloud.com","2023-03-19","Male","what","pellentesque massa","www.curriculum.com",1),
  ("William","Jacobs","elementum.at@aol.couk","2022-07-08","Male","tenor","Ut semper pretium neque. Morbi","www.cv.com",0),
  ("Angelica","Mooney","mi@protonmail.couk","2021-09-24","Male","not","Etiam imperdiet dictum","www.curriculum.com",1),
  ("Gloria","Humphrey","non@outlook.edu","2022-05-14","Male","sure","at arcu.","www.cv.com",0),
  ("Malik","Bradford","nec.imperdiet@yahoo.couk","2022-07-14","Male","to","In condimentum. Donec at","www.curriculum.com",0),
  ("Georgia","Young","nulla.integer.urna@aol.couk","2023-04-14","Male","not","sagittis. Duis gravida. Praesent","www.cv.com",0),
  ("Mason","Johns","donec@yahoo.com","2022-08-07","Male","what","sodales purus, in","www.cv.com",0),
  ("Sacha","Mcgowan","morbi@yahoo.org","2022-03-08","Male","what","auctor odio a","www.curriculum.com",1),
  ("Lara","Palmer","tincidunt.dui@aol.couk","2021-08-01","Male","words","Sed pharetra, felis eget varius","www.curriculum.com",1),
  ("Hunter","Everett","dapibus.gravida.aliquam@protonmail.com","2023-02-17","Male","what","Cras sed","www.cv.com",0),
  ("Adrienne","Justice","ultrices.a@icloud.org","2022-11-18","Male","not","penatibus et magnis","www.cv.com",1),
  ("Cruz","Shannon","nisl.sem@hotmail.net","2023-02-23","Male","not","justo nec ante.","www.curriculum.com",1),
  ("William","Johns","fringilla.euismod.enim@aol.org","2022-03-13","Male","to","laoreet","www.curriculum.com",1),
  ("Quamar","Rhodes","ut.nisi.a@outlook.ca","2022-01-23","Male","for","diam. Proin","www.cv.com",1),
  ("Chantale","Bates","a.aliquet@google.edu","2022-09-04","Male","sure","lorem eu metus.","www.cv.com",1),
  ("Virginia","Cherry","egestas.blandit.nam@hotmail.net","2023-03-22","Male","put","Suspendisse","www.cv.com",0),
  ("Talon","Vasquez","consequat@google.edu","2022-10-15","Male","what","in, cursus","www.curriculum.com",0),
  ("Heidi","Rosario","eu@yahoo.edu","2022-04-18","Male","tenor","Nunc ut erat.","www.cv.com",1),
  ("Alana","Russell","parturient.montes@hotmail.couk","2021-06-22","Male","not","leo. Morbi","www.curriculum.com",0),
  ("Alan","Richard","urna.convallis@yahoo.org","2022-04-16","Male","sure","eget, venenatis a, magna. Lorem","www.curriculum.com",0),
  ("Bert","Stanton","nam.nulla@yahoo.couk","2021-07-09","Male","sure","eget odio.","www.curriculum.com",0),
  ("Abdul","Wade","cras.convallis.convallis@yahoo.ca","2022-04-27","Male","words","et magnis dis","www.cv.com",0),
  ("Virginia","Vincent","vehicula@yahoo.net","2022-11-19","Male","to","augue eu tellus. Phasellus","www.curriculum.com",1),
  ("Libby","Osborne","egestas.duis@google.ca","2022-08-11","Male","for","Donec egestas. Duis ac arcu.","www.cv.com",1),
  ("Zenaida","Scott","curae.donec.tincidunt@protonmail.org","2021-12-22","Male","for","penatibus et magnis dis parturient","www.cv.com",1),
  ("Joshua","Mcgowan","ultricies.adipiscing@google.net","2022-02-14","Male","not","Quisque nonummy ipsum non","www.cv.com",1),
  ("Piper","Wilder","blandit.viverra.donec@yahoo.net","2022-10-02","Male","tenor","vel pede blandit congue. In","www.curriculum.com",0),
  ("Britanney","Mcfarland","eleifend@google.org","2022-01-22","Male","put","vel lectus. Cum sociis natoque","www.cv.com",0),
  ("Kibo","Marks","lectus@hotmail.couk","2022-11-11","Male","what","molestie pharetra nibh. Aliquam","www.cv.com",1),
  ("Galena","Barr","sit@outlook.ca","2022-05-09","Male","what","sollicitudin commodo ipsum.","www.cv.com",0),
  ("Brett","Manning","non@outlook.ca","2022-06-24","Male","to","amet,","www.curriculum.com",1),
  ("Caryn","Wynn","et@outlook.ca","2021-07-23","Male","tenor","consequat, lectus","www.cv.com",0),
  ("Garrett","Schmidt","nec.leo@google.net","2022-10-12","Male","sure","eu, ligula. Aenean euismod","www.cv.com",0);


/*students*/

INSERT INTO students (firstName, lastName, email, dob, gender, grades, avgGrade, obsolete)
VALUES
  ("Bruce","Arnold","a.feugiat@hotmail.org","2021-12-12","Male",72,20,1),
  ("Eleanor","Stark","sed.tortor.integer@yahoo.net","2022-03-29","Male",18,30,1),
  ("Idona","Ford","commodo.ipsum@icloud.ca","2022-09-08","Male",76,64,0),
  ("Alexa","Andrews","eleifend.non@protonmail.com","2021-12-12","Male",93,5,0),
  ("Kathleen","Best","fermentum@google.org","2023-02-20","Male",31,65,0),
  ("Cassady","Potts","semper.dui.lectus@aol.couk","2022-12-18","Male",82,44,1),
  ("Kelly","Ballard","et@aol.net","2022-01-18","Male",90,54,0),
  ("Jerry","Woodward","luctus.et.ultrices@hotmail.couk","2021-09-19","Male",5,30,0),
  ("Nerea","Harris","non.luctus@aol.ca","2023-01-05","Male",82,94,0),
  ("Mannix","Fulton","nulla@protonmail.ca","2021-12-13","Male",95,84,1),
  ("Justine","Cotton","eget.venenatis.a@yahoo.com","2022-04-30","Male",68,79,0),
  ("Ruth","Chang","massa.lobortis.ultrices@yahoo.edu","2022-12-14","Male",23,7,1),
  ("Ahmed","Pickett","dolor.elit@aol.net","2021-09-30","Male",69,97,0),
  ("Allen","Golden","nonummy.ac@outlook.edu","2022-01-23","Male",93,94,0),
  ("Chastity","Jennings","odio.tristique@icloud.org","2023-05-22","Male",27,16,0),
  ("Paki","Roach","luctus@aol.edu","2023-02-02","Male",86,20,0),
  ("Anastasia","Duran","ligula.nullam.enim@google.couk","2023-04-07","Male",7,70,0),
  ("Maryam","Boyle","sollicitudin.a@yahoo.org","2021-10-03","Male",58,69,1),
  ("Harper","Kim","orci@icloud.ca","2022-07-26","Male",22,81,0),
  ("Xandra","Spence","vitae.risus@icloud.edu","2022-09-09","Male",64,43,0),
  ("Sopoline","Hatfield","sed@icloud.net","2023-05-20","Male",35,84,0),
  ("Charity","Howard","non.dui@aol.net","2023-06-01","Male",57,1,1),
  ("Uma","Conner","diam@outlook.org","2021-10-09","Male",7,29,1),
  ("Bruce","Rowland","gravida.praesent@outlook.edu","2021-09-22","Male",24,79,1),
  ("Madison","Wilkins","porttitor.scelerisque@google.net","2021-12-18","Male",26,8,0),
  ("Declan","Mcclure","vel.quam@protonmail.net","2022-05-22","Male",91,51,0),
  ("Venus","Russell","magna.lorem.ipsum@aol.net","2022-05-03","Male",11,87,0),
  ("Alan","Walters","dolor.fusce@hotmail.net","2023-03-31","Male",23,30,1),
  ("Kibo","Holcomb","euismod@icloud.com","2021-08-06","Male",34,38,1),
  ("Oscar","Monroe","nulla.integer.vulputate@google.com","2021-08-17","Male",43,62,1),
  ("Kermit","Mcneil","lobortis.tellus@google.edu","2021-10-04","Male",35,72,0),
  ("Carl","Holder","mi@aol.ca","2021-11-03","Male",5,44,1),
  ("Randall","Best","proin.eget.odio@protonmail.ca","2022-06-15","Male",5,42,1),
  ("Benjamin","Curry","dui.cras.pellentesque@yahoo.net","2022-06-06","Male",50,50,0),
  ("Stewart","Guerra","lorem.eu@google.edu","2022-05-07","Male",56,82,0),
  ("Quynn","Aguilar","libero.et@outlook.org","2021-11-01","Male",29,85,1),
  ("Patience","Rosa","sit.amet.risus@google.com","2022-06-20","Male",83,41,1),
  ("Nevada","Lancaster","ut.tincidunt@outlook.couk","2022-01-01","Male",53,99,1),
  ("Judith","Velasquez","donec.luctus@icloud.com","2021-09-14","Male",7,14,0),
  ("Evelyn","Forbes","fusce.aliquam.enim@hotmail.edu","2022-06-06","Male",26,8,1),
  ("Hope","Wiley","tristique.pellentesque@icloud.edu","2021-08-23","Male",20,21,1),
  ("Raya","Erickson","fringilla.purus@protonmail.ca","2021-09-17","Male",36,67,1),
  ("Linus","Vega","semper.dui.lectus@google.com","2022-05-13","Male",0,73,1),
  ("Quinn","Gutierrez","enim.consequat@icloud.org","2022-09-06","Male",5,77,0),
  ("Nadine","Johnston","odio.vel.est@protonmail.ca","2022-01-06","Male",98,69,0),
  ("Hadley","Savage","donec@outlook.edu","2022-08-25","Male",16,39,1),
  ("Eaton","Burke","integer.eu@aol.couk","2022-07-15","Male",9,91,0),
  ("Xavier","Clarke","a@google.couk","2023-02-19","Male",27,91,1),
  ("Kelly","Pearson","lacinia.mattis.integer@hotmail.net","2022-06-27","Male",37,33,0),
  ("Ethan","Morin","fermentum.risus@icloud.org","2023-01-12","Male",71,27,1),
  ("Reagan","Chang","at.pede@aol.couk","2022-02-04","Male",17,49,1),
  ("Hector","Rivers","magna.lorem@aol.couk","2022-05-03","Male",6,5,1),
  ("Roary","Taylor","rutrum.lorem@yahoo.couk","2022-11-19","Male",46,29,1),
  ("Ian","Brady","mauris@protonmail.org","2022-09-20","Male",100,43,1),
  ("Caesar","Mooney","nibh.enim.gravida@outlook.com","2023-06-09","Male",32,58,0),
  ("Irma","Leach","sit@hotmail.com","2021-06-22","Male",79,65,1),
  ("Akeem","Pace","sem.elit.pharetra@icloud.couk","2022-01-20","Male",86,6,1);
