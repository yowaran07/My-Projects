<?php
ob_start();
error_reporting(0);
session_start();
include_once "includes/config.php";
'db_connect()';




$bioQry = "SELECT * FROM `biography` ";
$bioresult = $mysqli->query($bioQry);
$trow = mysqli_fetch_array($bioresult);
if (!$bioresult){
           echo 'Could not run query: ' . $mysqli->error;
           exit;
        }else{
            $resCnt = $bioresult->num_rows;
        }





        $ResQry = "SELECT * FROM biography WHERE name='Abhinay'";
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
  
   <!-- Template Main CSS File -->
   <link href="assets/css/admincss.css" rel="stylesheet">

   <?php include('includes/link.php');?> 
   <link href="assets/css/admincss.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">


</head>
  <body>


  <div class="page-wrapper chiller-theme toggled">
        <?php include('includes/adminsidebar.php');?>
        <div class="page-content">
          <div class="container-fluid">
            <div class="col-lg-12 admin" > 
                <h2 align="center">Celebrity</h2>
                <ul class="nav nav-tabs  tabs" style="justify-content: space-evenly;" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#addnew" role="tab">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#edit" role="tab">Edit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#view" role="tab">Add Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#view" role="tab">Edit Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="page1.php" role="tab">View</a>
                    </li>
                </ul>

                
                
                <div class="tab-content tabs card-block">
                    
                <div class="container bio tab-pane" id="addnew" role="tabpanel">
            <div class="row">
                <form class="" autocomplete="off" id="myForm" action="postdb.php" method="post" style="font-family: sans-serif;" >
              
            <table width="80%" class="table table-bordered border-color:red">
             
              <tr>
                <td>Name</td>
                <td><input type="text" class="form-control form-control-sm" value="" name="name"></td>
                <td>Category</td>
                <td>
                    <select name="select_box" class="form-select form-control-sm " style="width: 400px;" id="select_box1">
                      <option value="" >Select</option>
                    <?php
                  foreach($bioresult as $resname){
                       echo '<option value="'.$resname["name"].'">'.$resname["name"].'</option>';
                               }
                             ?>
                    </select>
                </td>
              </tr>
              <tr>
                <td>D.O.B</td>
                <td><input type="date" class="form-control form-control-sm"  name="dob"></td>
                <td rowspan="5">Image</td>
                <td rowspan="5">
                <img id="blah" alt="your image" width="300" height="300" />
                    <input type="file" name="image"
    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"></td>
              </tr>
              <tr>
                <td>City</td>
                <td><input type="text" class="form-control form-control-sm"  name="city"></td>
              </tr>
              <tr>
                <td>Occupation</td>
                <td><input type="text" class="form-control form-control-sm"  value="" name="occupation"></td>

                
              </tr>
              <tr>
                <td>Education</td>
                <td><input type="text" class="form-control form-control-sm"  name="education"></td>
                
              </tr>
              <tr>
                <td>Spouse</td>
                <td><input type="text" class="form-control form-control-sm"  name="spouse"></td>
                
              </tr>
              <tr>
                <td>Fathername</td>
                <td><input type="text" class="form-control form-control-sm"  name="fathername"></td>
                <td> Children</td>
                <td><input type="text" class="form-control form-control-sm"  name="children"></td>
              </tr>
              </tr>
              <tr>
                <td>Mothername</td>
                <td><input type="text" class="form-control form-control-sm"  name="mothername"></td>
                <td> Sibling</td>
                <td><input type="text" class="form-control form-control-sm"  name="sibling"></td>
              </tr>
              <tr>
                <td>Instagram</td>
                <td><input type="link" class="form-control form-control-sm"  name="instagram"></td>
                <td>Twitter</td>
                <td><input type="link" class="form-control form-control-sm"  name="twitter"></td>
              </tr>
              <tr>
                <td>Movie</td>
                <td><input type="link" class="form-control form-control-sm"  name="movie"></td>
                <td>Awards</td>
                <td><input type="link" class="form-control form-control-sm"  name="awards"></td>
              </tr>
              <tr>
                <td>Year active</td>
                <td><input type="link" class="form-control form-control-sm"  name="yearactive"></td>
                <td>Tags</td>
                <td>
                  <select name="select_box[]" class="form-select js-example-basic-multiple" style="width: 400px" id="multiple1" multiple="multiple">
                      <option value="" >Select</option>
                    <?php
                  foreach($result as $resname){
                       echo '<option value="'.$resname["name"].'">'.$resname["name"].'</option>';
                               }
                             ?>
                    </select>

                </td>
              </tr>
              <tr>
                <td>Subcategory</td>
                <td><input type="text" class="form-control form-control-sm"  name="category"></td>
                <td>Images</td>
                <td><input type="file" class="form-control form-control-sm" accept="image/*/" name=""></td>
              </tr>
              <tr>
                <td>Heading</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="1" name="heading1" placeholder="Input Details"></textarea>
              </div>   
                </td>
              </tr> 
              <tr>
                <td>Input Data</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="6" name="data1" placeholder="Input Details"></textarea>
              </div>   
                </td>
              </tr>
              <tr>
                <td>Heading</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="1" name="heading2" placeholder="Input Details"></textarea>
              </div>   
                </td>
              </tr> 
              <tr>
                <td>Input Data</td>
                <td colspan="3">
              <div align="center">
              <textarea cols="100" rows="6" name="data2" placeholder="Input Details"></textarea>
              </div>   
                </td>
              </tr> 
            </table>
              <p align="center"><button class="btn-group btn-lg btn-success d-flex" name="submit">Submit</button></p><br><br>
            </form>
            </div>    
            </div>


            <div class="container bio tab-pane" id="edit" role="tabpanel">
            <div class="row">
                    <select name="select_box" class="form-select form-control-sm align-content-center " style="width: 400px; " align="right" id="select_box2">
                      <option value="" >Select</option>
                    <?php
                  foreach($bioresult as $resname){
                       echo '<option value="'.$resname["name"].'">'.$resname["name"].'</option>';
                               }
                             ?>
                    </select>

                <form class="" autocomplete="off" id="myForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" style="font-family: sans-serif;" >
              
            <table width="100%" class="table table-bordered border-color:red">
             
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

        </div>    
    </div>       
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

      $("#select_box2").select2({
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
