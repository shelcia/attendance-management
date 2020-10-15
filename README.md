# Attendance Management

Attendance database management using PHP and MySQLi


### Install XAMPP

https://www.apachefriends.org/download.html


### Setup the Database

1. Navigate to phpmyAdmin after installation

2. Create database named "loginsystem"

3. Execute the query given below 

<code>
  CREATE TABLE users(
    idUsers INT NOT NULL AUTO_INCREMENT,
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL,
    PRIMARY KEY (idUsers)
)
</code>
  
Note: Make sure you stick with same variable names to work with my code.

4. Now just type this url http://192.168.64.3/attendance-management/ to work with it . (make sure your cloned the code you htdocs with xampp folder)
