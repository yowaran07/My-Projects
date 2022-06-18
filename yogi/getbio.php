<?php
ob_start();
error_reporting(E_ALL);

include_once "includes/config.php";
session_start();
$catid = $_POST['catid'];

if($catid !="" ){
$getnamQry = "SELECT * FROM `biography`  WHERE name =  '$catid'";

// echo $getnamQry ;
$getnamRes=$mysqli->query($getnamQry);


while($row =mysqli_fetch_array($getnamRes)){
}
}
?>