CREATE TABLE `User` (
  `StudentsID` INT NOT NULL AUTO_INCREMENT,
  `Firstname` VARCHAR(45) NULL,
  `Lastname` VARCHAR(45) NULL,
  `Email` VARCHAR(50) NULL,
  `Password` VARCHAR(50) NULL,
  PRIMARY KEY (`StudentsID`),
  UNIQUE INDEX `Password_UNIQUE` (`Password` ASC));
  
  CREATE TABLE `Events` (
  `eventID` INT(5) NOT NULL AUTO_INCREMENT,
  `eventName` VARCHAR(45) NOT NULL,
  `Venue` VARCHAR(30) NOT NULL,
  `Date` DATE NOT NULL,
  `StartTime` TIME NOT NULL,
  `EndTime` TIME NOT NULL,
  `EventType` VARCHAR (20) NOT NULL,
  `Description` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`eventID`));

CREATE TABLE `SavedEvents` (
  `SavedUserID` INT(8) NOT NULL AUTO_INCREMENT,
  `SavedEventID` INT(8) NOT NULL,
  `EventName` VARCHAR(45) NULL,
  INDEX `SavedUserID_idx` (`SavedUserID` ASC),
  INDEX `SavedEventID_idx` (`SavedEventID` ASC),
  CONSTRAINT `SavedUserID`
    FOREIGN KEY (`SavedUserID`)
    REFERENCES `User` (`StudentsID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `SavedEventID`
    FOREIGN KEY (`SavedEventID`)
    REFERENCES `Events` (`eventID`)
	ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE `ASC_Events` (
  `ascID` INT(8) NULL AUTO_INCREMENT,
  `ascEvent` VARCHAR(45) NOT NULL,
  `About` VARCHAR(1000) NULL,
  INDEX `ascID_idx` (`ascID` ASC),
  CONSTRAINT `ascID`
    FOREIGN KEY (`ascID`)
    REFERENCES `Events` (`eventID`)
	ON DELETE CASCADE
    ON UPDATE CASCADE);
    
CREATE TABLE `InfoSession` (
  `infoSessionID` INT(8) NOT NULL AUTO_INCREMENT,
  `SessionName` VARCHAR(45) NOT NULL,
  `About` VARCHAR(1000) NULL,
  INDEX `infoSessionID_idx` (`infoSessionID` ASC),
  CONSTRAINT `infoSessionID`
    FOREIGN KEY (`infoSessionID`)
    REFERENCES `Events` (`eventID`)
	ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE `StudentVenture` (
  `studentVentureID` INT(8) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `About` VARCHAR(1000) NULL,
  INDEX `studentVentureID_idx` (`studentVentureID` ASC),
  CONSTRAINT `studentVentureID`
    FOREIGN KEY (`studentVentureID`)
    REFERENCES `Events` (`eventID`)
	ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE `StudentClub` (
  `ClubID` INT(8) NOT NULL AUTO_INCREMENT,
  `Club` VARCHAR(45) NOT NULL,
  `EventName` VARCHAR(45) NOT NULL,
  `About` VARCHAR(1000) NULL,
  INDEX `ClubID_idx` (`ClubID` ASC),
  CONSTRAINT `ClubID`
    FOREIGN KEY (`ClubID`)
    REFERENCES `Events` (`eventID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE `Admin`(
`User` varchar(10),
`Password` varchar(20));

INSERT INTO `Admin`(`User`, `Password`) VALUES ('Admin', 'PinEvents2021');

INSERT INTO `Events` (`eventId`, `eventName`, `Venue`, `Date`, `StartTime`, `EndTime`, `EventType`, `Description`) VALUES
('1', 'Rolling Smoke', 'The Hive', '2019-11-30', '18:00:00', '20:00:00', 'ASC', 'Come and enjoy good meat and music; meet new friends and have an amazing night.');
INSERT INTO `Events` (`eventName`, `Venue`, `Date`, `StartTime`, `EndTime`, `EventType`, `Description`) VALUES( 'Freaky Friday', 'On Campus Hostel', '2019-12-06', '07:00:00', '21:00:00', 'ASC', 'A fun day for you to switch places with any one in Ashesi. Have you ever wondered what it would be like to live the life of another person? Now is your chance.'),
( 'Wellness Wednesday', 'Courtyard', '2019-12-04', '10:00:00', '18:00:00', 'ASC', 'A day for you to enjoy your healthy snacks, great massages and very helpful therapy. It\'s all about mind, body and soul.'),
( 'Movie on the Hill - Gemini Man.', 'The Hive-Banquet Hall', '2019-12-07', '21:00:00', '23:55:00', 'ASC', 'Come spend you last night on the hill enjoying a movie with you friends. Create amazing memories that will last you a lifetime.'),
( 'Valentine\'s Day', 'Courtyard', '2020-02-14', '10:00:00', '20:00:00', 'ASC','Love is in the air, so why not spend the day with friends and great food?'),
( 'Time with Aunty Dee', 'Norton Motulsky', '2020-01-17', '16:30:00', '18:00:00', 'InfoSession', 'The best love you can receive is self love. Come join Aunty Dee as she discusses the basics of mental health and teaches you how to be a happier, healthier you'),
( 'Academic Advisory', 'RM 116', '2019-12-12', '16:00:00', '18:00:00', 'InfoSession', 'Meet up with Mr. Ntow as he shows you the failproof secrets to success as an Ashesi student.'),
( 'Career services: Interview Prep ', 'Norton Motulsky', '2020-02-03', '12:00:00', '13:00:00', 'InfoSession', 'Tit bits you will most definitely need to crushing that interview! Join us as we discuss these and more'),
( 'CV clinic', 'Career services office', '2019-12-16', '12:30:00', '15:00:00', 'InfoSession', 'We are ready for you, one last time before we leave school; what do you sAY?'),
( 'ODIP\'s Yale Exchange programme', 'RB 100', '2019-12-04', '16:30:00', '18:00:00', 'InfoSession', 'Have you ever wondered what it would be like to be a \"Yale fellow\"? Are you ready to go IVY LEAGUE LEVEL? Then you would not want to miss this.'),
( 'AFS Big 11 ', 'AshPitch', '2020-01-17', '12:00:00', '14:00:00', 'StudentClub','Come support your favourite Ashesi football stars in a match that seeks to generate a huge donation for the Children\'s Unit at Korle Bu'),
( 'Sip and Paint', 'Old Aknonnor', '2019-12-11', '16:30:00', '19:00:00', 'StudentClub', 'Before we had phones, we had art. Come join us for a phoneless night coupled with good music, paint and great mocktails that are guaranteed to unleash your inner Picasso!'),
( 'Silicon Valley meets Berekusu', 'RB 216', '2020-01-15', '12:30:00', '16:30:00', 'StudentClub', 'Come join us, sign up and take a trip with Ashesi as we recruit the 20 hopefuls who will make it to Silicon valley'),
( 'La Fete de la Musique', 'Courtyard', '2020-02-08', '11:00:00', '17:00:00', 'StudentClub','The French club invites you to one of the most memorable nights, filled with good music, good food and great company. C\'est tres bon!'),
( 'KCF Worship Night', 'The Hive', '2019-12-06', '21:00:00', '23:55:00', 'StudentClub', 'Come celebrate the end of the year with us as we show reverence to our Grand creator.'),
( 'Milky Mountain: Big Sale', 'Student Hangout ', '2020-02-12', '10:00:00', '18:00:00', 'StudentVenture', 'Miss us? Try our amazing offer: BUY TWO GET ONE FREE.'),
( 'Doughman Donuts: Sugar Rush', 'Amphitheatre ', '2019-12-09', '12:00:00', '18:00:00', 'StudentVenture', 'Pass by our stand on this special monday to get twice the amount of Donuts for half the price!'),
( 'Meat Empire', 'Hakuna Matata', '2019-11-20', '18:00:00', '22:00:00','StudentVenture', 'Meat Empire is back and this time we are launching our new kebab, the Mushroom Kebab! First ten people get it free.'),
( 'Kicheocho Friyay!', 'New Hostel Car Park', '2019-11-22', '18:30:00', '22:30:00', 'StudentVenture', 'We are back on the hill, one last time before you write your exams to wish you goodluck'),
( 'Pizza Hut Ashesi', 'Tanko hostel', '2019-12-13', '13:00:00', '23:00:00', 'StudentVenture', 'Join us as we celebrate our anniversary since we came to the hill!');