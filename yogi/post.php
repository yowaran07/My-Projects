<?php 

error_reporting(E_ALL);

include_once "includes/config.php";
'db_connect'();

$resQry = "SELECT * FROM `biography` GROUP by category DESC";
$result = $mysqli->query($resQry);
$trow = mysqli_fetch_array($result);
if (!$result){
           echo 'Could not run query: ' . $mysqli->error;
           exit;
        }else{
            $resCnt = $result->num_rows;
        }

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
                <form class="" autocomplete="off" id="myForm" action="postdb.php" method="post" style="font-family: sans-serif;" >
              
            <table width="80%" class="table table-bordered border-color:red">
             
              <tr>
                <td>Name</td>
                <td><input type="text" class="form-control form-control-sm"  value="" name="name"></td>
                <td>Category</td>
                <td>
                <select name="select_box" class="form-select form-control-sm " id="select_box">
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
                  <select name="select_box[]" class="form-select js-example-basic-multiple" id="multiple" multiple="multiple">
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
                <td>Category</td>
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
                <?php include('includes/footer.php');?>

         
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript">     
  
  
                $("#select_box").select2({
                  maximumSelectionLength: 2
                    });
                
                $(document).ready(function() {
                  $('#multiple').select2();
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

</html>