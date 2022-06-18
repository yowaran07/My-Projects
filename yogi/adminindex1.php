<?php
ob_start();
error_reporting(E_ALL);
session_start();
include_once "includes/config.php";
'db_connect()';


$selectCat = "SELECT * from biography group by  category";
$rescat = $mysqli->query($selectCat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bloomberg News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <?php include('includes/link.php');?> 
  <link href="assets/css/admincss.css" rel="stylesheet">
  <link href="glass.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">



<body>
  <div class="container-fluid">
    <div class="glass-panel">
      <h1><a href="https://superdevresources.com/glassmorphism-ui-css/" target="_blank">Glassmorphism CSS Panels and Buttons</a></h1>
      <p>Glassmorphism is achieved using transparency and background blur to get a frosted-glass like effect.</p>
    <div class="glass-toolbar">
      <button class="glass-button">Glass Button</button>
      <a href="https://superdevresources.com/glassmorphism-ui-css/" target="_blank" class="glass-button">Glass Link Button</a>
    </div>
    </div> 
  </div>

            
<!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <script>     
  
  
  $("#select_box1").select2({
    maximumSelectionLength: 2
      });
      </script>
     <script>     
  $(document).ready(function() {
    $('#multiple1').select2();
        });   

</script>
<script>
function preview() {
frame.src=URL.createObjectURL(event.target.files[0]);
"<form>";
<input type="file" onchange="preview()"></input>;
<img id="frame" src="" width="100px" height="100px"/>
"</form>";
}
</script>



  </body>
