<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'database-1.ceaqyubwm5tx.ap-south-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin1');
define('DB_PASSWORD', '123456789');
define('DB_NAME', 'employees_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
