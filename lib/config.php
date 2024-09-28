<?php

DEFINE ('DB_HOST','localhost');
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_NAME','mumbai_tour1');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

//echo "<pre>"; var_dump((array) $dbcon); die();

if($dbcon) {
//	echo 'you have connected successfully';
} else {
	die('error connecting to database');
}
	
?>