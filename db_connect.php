<?php

// Set up variables for connection
$db_user= 'orion_student'; // user name
$db_pw= 'orionacademy19'; // pw
$db_url= 'localhost'; // the url to the db
$db_name= 'orion_coding'; // the database we are connecting to 
//Connect to db
$db_connect = @mysqli_connect($db_url,$db_user,$db_pw,$db_name)
//If failed
OR die('Could not connect to the server'. mysqli_connect_error());
?>
