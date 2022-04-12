

<html>
<head>
<link rel="stylesheet" type ="text/css" href="/css/login and registration.css">

<title> Registration</title>
</head>
<body>

<div class="login">
     <h2 class="login_heading">Registration Form</h2>
     <?php
$table_creation="
CREATE TABLE IF NOT EXISTS `advertisement` (
  `Advid` int(50) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Companyname` varchar(100) NOT NULL UNIQUE,
  `Detail` varchar(100) NOT NULL,
  PRIMARY KEY (`Advid`)
) ENGINE=InnoDB  AUTO_INCREMENT=17;";
DB::statement($table_creation);
$table_creation="

CREATE TABLE IF NOT EXISTS `category` (
  `Cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(200) NOT NULL UNIQUE,
  PRIMARY KEY (`Cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 ;";
DB::statement($table_creation);
$table_creation="
CREATE TABLE IF NOT EXISTS `contactus` (
  `contactid` int(50) NOT NULL AUTO_INCREMENT,
  `Message` varchar(500) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB   AUTO_INCREMENT=6 ;";
DB::statement($table_creation);
$table_creation="

CREATE TABLE IF NOT EXISTS `subcategory` (
  `Subcatid` int(200) NOT NULL AUTO_INCREMENT,
  `Subcatname` varchar(100) NOT NULL UNIQUE,
  `Catid` int(200) NOT NULL,
  `Detail` varchar(800) NOT NULL,
  PRIMARY KEY (`Subcatid`),
  FOREIGN KEY (`Catid`)
  REFERENCES Category(Cat_id)
  ON DELETE CASCADE
) ENGINE=InnoDB  AUTO_INCREMENT=27 ;";
DB::statement($table_creation);
$table_creation="
CREATE TABLE IF NOT EXISTS `package` (
  `Packid` int(200) NOT NULL AUTO_INCREMENT,
  `Packname` varchar(100) NOT NULL UNIQUE,
  `Subcategory` int(200) NOT NULL,
  `Packprice` decimal(10,2) NOT NULL,

  `Detail` varchar(800) NOT NULL,
  PRIMARY KEY (`Packid`),
  FOREIGN KEY (`Subcategory`)
  REFERENCES subcategory(`Subcatid`)
  ON UPDATE CASCADE
  ON DELETE CASCADE
) ENGINE=InnoDB  AUTO_INCREMENT=28 ;";
DB::statement($table_creation);

$table_creation="
CREATE TABLE IF NOT EXISTS `users` (
  `Userid` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL,
  PRIMARY KEY(`Userid`)
) ENGINE=InnoDB;";
DB::statement($table_creation);

$table_creation="
CREATE TABLE IF NOT EXISTS `enquiry` (
  `Enquiryid` int(50) NOT NULL AUTO_INCREMENT,
  `Userid` int(50) NOT NULL,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) ,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL DEFAULT 0,
  `Child` int(50) NOT NULL CHECK(Child >= 0),
  `Adults` int(50) NOT NULL CHECK(Adults >= 0),
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL,
  PRIMARY KEY (`Enquiryid`),
  FOREIGN KEY (`Packageid`)
  REFERENCES package(`Packid`)
  ON UPDATE CASCADE
  ON DELETE CASCADE,
  FOREIGN KEY (`Userid`)
  REFERENCES users(`Userid`)
  ON UPDATE CASCADE
  ON DELETE CASCADE
) ENGINE=InnoDB   AUTO_INCREMENT=13 ;";
DB::statement($table_creation);



?>






<form action ="/insert" method="post" class="login_form">
    <div class="container">

{{ csrf_field() }}

<label for="uname"><b>Username</b></label><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" />
<label for="psw"><b>Password</b></label><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" />
<label for="cpsw"><b>Confirm Password</b></label><input type="password" name="t3" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/>

<input class="button" type="submit" value="Registration" name="sbmt">




</form>

<div>
    <p class="login">Already have an account? please..<div class=go_to_reg>
            <a  href="loginForm" target="_self">Login</a>
    </div>
    </p>
</div>

</div>


</div>

</body>
</html>
