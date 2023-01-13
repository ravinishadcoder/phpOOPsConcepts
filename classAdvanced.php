<?php
require("./src/Business.php");
require("./src/Person.php");
require("./src/Staff.php");
$ravi=new Person("ravi nishad");
$staff = new Staff;
$business = new Business($staff);
$business->hire($ravi);
var_dump($staff);
?>