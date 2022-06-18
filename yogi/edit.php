<?php

error_reporting(E_ALL);


include_once "includes/config.php";
'db_connect'();

if($name != ""){

  $bname="SELECT * FROM biography  WHERE name='yoges'";

  $name = $_POST["name"];
  $city = $_POST["city"];



}





$ResQry = "SELECT * FROM biography WHERE name='yoges'";
$result = $mysqli->query($ResQry);
$resFet = mysqli_fetch_array($result);
$name = $resFet["name"]; 
$category = $resFet["category"]; 


$dob = $resFet["dob"]; 
$city = $resFet["city"]; 
$occupation = $resFet["occupation"]; 
$education = $resFet["education"]; 
$spouse = $resFet["spouse"]; 
$fathername = $resFet["fathername"]; 
$mothername = $resFet["mothername"]; 
$children = $resFet["children"]; 
$sibling = $resFet["sibilings"]; 
$instagram = $resFet["instagram"]; 
$twitter = $resFet["twitter"]; 
$movie = $resFet["movie"]; 
$awards = $resFet["awards"]; 
$yearactive = $resFet["yearactive"]; 
$tags = $resFet["tags"]; 
$category = $resFet["category"]; 
$image = $resFet["image"]; 
$heading1 = $resFet["heading1"]; 
$data1 = $resFet["data1"]; 
$heading2 = $resFet["heading2"]; 
$data2 = $resFet["data2"]; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bloomberg News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">

            <div class="container ">
              <?php include('includes/header.php');?>
            </div>
  </header><!-- End Header -->
          <div class="container bio">
            <div class="row">
                <form class="" autocomplete="off" id="myForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" style="font-family: sans-serif;" >
              
            <table width="80%" class="table table-bordered border-color:red">
             
              <tr>
                <td>Name</td>
                <td><input type="text" class="form-control form-control-sm"  value="<?php print $name; ?>" name="name"></td>
                <td rowspan="6" >Category</td>
                <td rowspan="6"></td>
                
              </tr>
              <tr>
                <td>D.O.B</td>
                <td><input type="date" class="form-control form-control-sm" value="<?php print $dob; ?>" name="dob"></td>
              </tr>
              <tr>
                <td>City</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $city; ?>" name="city"></td>
              </tr>
              <tr>
                <td>Occupation</td>
                <td><input type="text" class="form-control form-control-sm"  value="<?php print $occupation; ?>" name="occupation"></td>

                
              </tr>
              <tr>
                <td>Education</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $education; ?>" name="education"></td>
                
              </tr>
              <tr>
                <td>Spouse</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $spouse; ?>" name="spouse"></td>
                
              </tr>
              <tr>
                <td>Fathername</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $fathername; ?>" name="fathername"></td>
                <td> Children</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $children; ?>" name="children"></td>
              </tr>
              </tr>
              <tr>
                <td>Mothername</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $mothername; ?>" name="mothername"></td>
                <td> Sibling</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $sibling; ?>" name="sibling"></td>
              </tr>
              <tr>
                <td>Instagram</td>
                <td><input type="link" class="form-control form-control-sm" value="<?php print $instagram; ?>" name="instagram"></td>
                <td>Twitter</td>
                <td><input type="link" class="form-control form-control-sm" value="<?php print $twitter; ?>" name="twitter"></td>
              </tr>
              <tr>
                <td>Movie</td>
                <td><input type="link" class="form-control form-control-sm" value="<?php print $movie; ?>" name="movie"></td>
                <td>Awards</td>
                <td><input type="link" class="form-control form-control-sm" value="<?php print $awards; ?>" name="awards"></td>
              </tr>
              <tr>
                <td>Year active</td>
                <td><input type="link" class="form-control form-control-sm" value="<?php print $yearactive; ?>" name="yearactive"></td>
                <td>Tags</td>
                <td><input type="link" class="form-control form-control-sm" value="<?php print $tags; ?>" name="tags"></td>
              </tr>
              <tr>
                <td>Category</td>
                <td><input type="text" class="form-control form-control-sm" value="<?php print $category; ?>" name="category"></td>
                <td>Images</td>
                <td><input type="file" class="form-control form-control-sm" value="<?php print $image; ?>" accept="image/*/" name="image"></td>
              </tr>
              <tr>
                <td>Heading</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="1" name="heading1" value="<?php print $heading1; ?>" ></textarea>
              </div>   
                </td>
              </tr> 
              <tr>
                <td>Input Data</td>
                <td colspan="3">
              <div align="center">
              <input type="text" cols="100" rows="6" name="data1" value="<?php print $data1; ?>">
              </div>   
                </td>
              </tr>
              <tr>
                <td>Heading</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="1" name="heading2" value="<?php print $heading2; ?>" ></textarea>
              </div>   
                </td>
              </tr> 
              <tr>
                <td>Input Data</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="6" name="data2" value="<?php print $data2; ?>" ></textarea>
              </div>   
                </td>
              </tr> 
            </table>
              <p align="center"><button class="btn-group btn-lg btn-success d-flex" name="submit">Upadate</button></p><br><br>
            </form>
            </div>    
            </div>
                <?php include('includes/footer.php');?>

         
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>