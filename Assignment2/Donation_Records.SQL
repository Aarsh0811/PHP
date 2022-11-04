/* NAME: AARSH PARIMAL PATEL
Semester-2
ASSIGNMENT-2 */

/* The code below is for the sql of our webpage */

/* Creating our table*/
CREATE TABLE Donation_Records(
/* adding the variables to our table which will input data according to its type*/
ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
FirstName varchar(50) NOT NULL,
LastName varchar(50) NOT NULL,
Email varchar(50) NOT NULL,
PhoneNo char(10) NOT NULL,
Birthdate DATE NOT NULL,
Amount double NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

/*end of the code */
