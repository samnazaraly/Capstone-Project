

<?php
//create database sequence
//in local, user and password are always root 
 $db_host = 'localhost';
 $db_user = 'root';
 $db_password = 'root';
 $db_db = 'signup_db';

 //create object of database 
 $mysqli = new mysqli(
   $db_host,
   $db_user,
   $db_password,
   $db_db
 );

 if ($mysqli->connect_error) {
  echo 'Errno: '.$mysqli->connect_errno;
  echo '<br>';
  echo 'Error: '.$mysqli->connect_error;
}

return $mysqli;

// echo 'Success: A proper connection to MySQL was made.';
// echo '<br>';
// echo 'Host information: '.$mysqli->host_info;
// echo '<br>';
// echo 'Protocol version: '.$mysqli->protocol_version;

?>
