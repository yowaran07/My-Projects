<?php
ob_start();
error_reporting(E_ALL);
session_start();
include_once ('../includes/config.php');
db_connect(); 
$auser = addslashes($_POST["user"]);
$auser = preg_replace('/\s+/', '', $auser);
$apwd = $_POST["password"];
$password = preg_replace('/\s+/', '', $apwd);
$_SESSION["userId"] = "";
$_SESSION["loginName"] = "";


        $adminlogQry = "SELECT  *  FROM  `adminuser` WHERE `username` = '$auser' AND `password` = '$password' LIMIT 1";
		print $adminlogQry;
		$adminlogResult = $mysqli->query($adminlogQry);
		if (!$adminlogResult){
		   echo 'Could not run query: ' . $mysqli->error;
		   exit;
		}else{
		
			$resCnt = $adminlogResult->num_rows;
			
			if($resCnt == 1){
				$row = mysqli_fetch_array($adminlogResult);
				$_SESSION["userId"] = $row["userid"];
				header("Location:../adminindex.php");
			}else{
				header("Location:../admin.php");
			}
		}


    ?>