<?php
define('DB_SERVER','localhost');
define('DB_USER','harjeet');
define('DB_PASS' ,'manku@123');
define('DB_NAME', 'testclinic');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>