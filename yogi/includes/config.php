<?php


$dbhost = "localhost";
$dbname = "bloomberg";
$dbuser = "root";
$dbpass = "";

$mysql_eval_error="";
$link;

//DATABASE HOST CONNECTION
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
   printf("Can't connect Errorcode: %s\n", mysqli_connect_error());
   exit;
}


function db_connect(){
    global $dbhost;
    global $dbname;
    global $dbuser;
    global $dbpass;
    global $link;

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
       printf("Can't connect Errorcode: %s\n", mysqli_connect_error());
       exit;
    }

}


function db_close(){
global $link;
global $host_connection;
//mysql_close($link);
//mysql_close($host_connection);
}



?>