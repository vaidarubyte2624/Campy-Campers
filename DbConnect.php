<?php
 // CampyCampers version 1  13.03.2022
// Sets up the connection parameters to a mysql database


DEFINE ('DB_USER', 'IN18019491');                           // The username
DEFINE ('DB_PASSWORD','18019491');                        // The password
DEFINE ('DB_HOST', 'localhost');                        // The mysql server host address 
DEFINE ('DB_NAME', 'IN18019491');                           // The database name
  @$DB = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  if (mysqli_connect_errno())
    {
    echo 'Cannot connect to the database: ' . mysqli_connect_error();
    }


?>