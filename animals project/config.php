<?php
/*
This file contains databse configuration assuming sql is running using user "root" and password ""
*/

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

//Try connecting to database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection

if($conn == false){
    dir('Error : Can`t connect to database');
}

?>