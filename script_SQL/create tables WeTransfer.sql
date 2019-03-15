show databases;
use filetransfer;

show tables;

CREATE TABLE user 
(
	ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	USERNAME varchar(100),
    EMAIL varchar(255),
    PASSWORD varchar(255)
    );
    
select * from user;
select * from file;

CREATE TABLE file
(
	ID INT PRIMARY KEY NOT NULL auto_increment,
    NAME varchar(100),
    DESCRIPTION varchar(250),
    TYPE varchar(50), 
    SIZE int,
    user_ID INT NOT NULL,
	FOREIGN KEY (user_ID) REFERENCES user(id)
);
