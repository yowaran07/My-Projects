<?php
ob_start();
error_reporting(E_ALL);
session_start();
include_once "includes/config.php";
'db_connect()';

if ($_SESSION["userId"] == "") {
  
  header("Location:admin.php");
  exit();
}

$uid = $_SESSION["userId"];
$selectCat = "SELECT * from biography group by  category";
$rescat = $mysqli->query($selectCat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Admin Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <?php include('includes/link.php');?> 
  <link href="assets/css/admincss.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">



<body>
<div class="page-wrapper chiller-theme toggled">
          <?php include('includes/adminsidebar.php');?>

            <div class="page-content">
              <div class="container-fluid">
                <div class="col-lg-12 admin"  >
                  <p>dfgdfgdfdgdfgdfgdfgfdgfgdfgdfgdfgdfgdfgdfgdfgfdgdfffffffffffffffffffffffffffffffffffsgvbcxbsdfdfgdfgfgf</p>
                </div>
              </div>

            </div>
</div>      
    

            
<!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
 




  </body>
