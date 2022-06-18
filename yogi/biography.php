<?php

error_reporting(E_ALL);


include_once "includes/config.php";
'db_connect()';

$serQry = "SELECT * FROM `biography` ";
$serresult = $mysqli->query($serQry);
$trow = mysqli_fetch_array($serresult);
$namerow = $trow ['name'];

if (!$serresult){
           echo 'Could not run query: ' . $mysqli->error;
           exit;
        }else{
            $resCnt = $serresult->num_rows;
        }


//Query start for table1//
$ResQry = "SELECT * FROM biography where name= '$namerow'";
$result = $mysqli->query($ResQry);
$resFet = mysqli_fetch_array($result);
//Query start for table1//

//Query result start for table1//
$name = $resFet["name"]; 
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
$tags = explode (",",$resFet["tags"]); 
$category = $resFet["category"]; 
$image = $resFet["image"]; 
$heading1 = $resFet["heading1"]; 
$data1 = $resFet["data1"]; 
$heading2 = $resFet["heading2"]; 
$data2 = $resFet["data2"]; 
//Query result end for table1//



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
              <?php include('includes/navbar.php');?>
            </div>
  </header><!-- End Header -->
  <!-- ======= Back to top ======= -->
        <a id="backtotop"> </a>

  <!-- ======= Back to top ======= -->

            <div class="row">
              <?php include('includes/leftsidebar.php');?>
                <!--main page center starts -->
                <div class="col-md-7 main">
                  <div >
                    <div class="select2">
                      <div class="content-wrapper text-center">
                      <search name="select_box" class="form-select form-control-sm w-50" placeholder="search" onchange="getselect()" id="select_box">
                      <option value="" id="select_box">Select</option>
                    <?php
                  foreach($serresult as $resname){
                       echo '<option value="'.$resname["name"].'">'.$resname["name"].'</option>';
                               }
                             ?>
                      </search>
                        <div class="container-fluid " style= "font-family:sans-serif" >
                            <h2 class="card-title text-center">Post Data</h2>
                            <h4 class="card-title text-center">Actors</h4>
                        </div>
                      </div>
                    </div>
            

          <!-- table Start -->
          <div class="container col-lg-12 grid" style="font-size: 15px;">
            <!--1st row of table Start -->
            <div class="row ">

                <div class="col-md-6">
                  <img src="assets/img/2.png"  class="w-100 h-200">
                </div>
                

                <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                          Name
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $name ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          D.O.B
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $dob ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          Occupassion
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $occupation ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          Instagram
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $instagram ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          Twitter
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $twitter ?></a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          xxxxxxxx
                      </div>
                      <div class="col-md-6">
                          xxxxxxxxx
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          City
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $city ?></a>
                      </div>
                    </div>

                </div>  
            </div>  
            <!--1st row of table End -->

            <!--second row of table Start -->
              <div class="row">
                <div class="col-md-3">
                  Father Name
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $fathername ?></a>
                </div>
                <div class="col-md-3">
                  Mother Name
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $mothername ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Spouse
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $spouse ?></a>
                </div>
                <div class="col-md-3">
                  Children
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $children ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Education
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $education ?></a>
                </div>
                <div class="col-md-3">
                  Sibilings
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $sibling ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Year Active
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $yearactive ?></a>
                </div>
                <div class="col-md-3">
                  Tags
                </div>
                <div class="col-md-3">
                  <?php
                foreach ($tags as $ntag) {
?>
                  <a href=""><?php print $ntag ?></a>
                  <?php } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Movie
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $movie ?></a>
                </div>
                <div class="col-md-3">
                  Awards
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $awards ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Categroy
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $category ?></a>
                </div>
                <div class="col-md-3">
                  Awards
                </div>
                <div class="col-md-3">
                  xxxxxxxxx
                </div>
              </div>
            </div>
        </div><br>
        <!--table grid end-->

        <!--1st card group start-->
                        <div class= "col-lg-12 border border-5 ">  
                          <div class="row">
                            <?php include('includes/cardgroup1.php');?>   
                            
                          </div>  
                        </div>
        <!--1st card group end-->                
                      </div>

                  <?php include('includes/rightsidebar.php');?>
            <!--2nd card group carousel start-->        
                <div class= "col-sm-3 col-lg-12 mb-5 " > 
                  <div class="row">
                      <?php include('includes/carousel1.php');?>
                  </div>  
                </div>
                        
            <!--2nd card group carousel end-->
            
          <!-- table Start -->
          <div class="container col-lg-8 grid" style="font-size: 20px;">
            <!--1st row of table Start -->
            <div class="row ">

                <div class="col-md-6">
                  <img src="assets/img/2.png"  class="w-100 h-200">
                </div>
                

                <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                          Name
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $name ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          D.O.B
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $dob ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          Occupassion
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $occupation ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          Instagram
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $instagram ?></a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          Twitter
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $twitter ?></a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          xxxxxxxx
                      </div>
                      <div class="col-md-6">
                          xxxxxxxxx
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          City
                      </div>
                      <div class="col-md-6">
                          <a href=""><?php print $city ?></a>
                      </div>
                    </div>

                </div>  
            </div>  
            <!--1st row of table End -->

            <!--second row of table Start -->
              <div class="row">
                <div class="col-md-3">
                  Father Name
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $fathername ?></a>
                </div>
                <div class="col-md-3">
                  Mother Name
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $mothername ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Spouse
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $spouse ?></a>
                </div>
                <div class="col-md-3">
                  Children
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $children ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Education
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $education ?></a>
                </div>
                <div class="col-md-3">
                  Sibilings
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $sibling ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Year Active
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $yearactive ?></a>
                </div>
                <div class="col-md-3">
                  Tags
                </div>
                <div class="col-md-3">
                  <?php
                foreach ($tags as $ntag) {
?>
                  <a href=""><?php print $ntag ?></a>
                  <?php } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Movie
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $movie ?></a>
                </div>
                <div class="col-md-3">
                  Awards
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $awards ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  Categroy
                </div>
                <div class="col-md-3">
                  <a href=""><?php print $category ?></a>
                </div>
                <div class="col-md-3">
                  Awards
                </div>
                <div class="col-md-3">
                  xxxxxxxxx
                </div>
              </div>
            </div>
        </div><br>

<!--3rd card group start-->
            <div class="container border border-5 " style="border-color: red;">
                <div class="row">
                    <div class="col-lg-5 ">
                        <div class="about-us-img-box">
                            <p>dfgdfgdfgdfg</p>
                            <img class="card-img-bottom" src="assets/img/16.jpg" >
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-us-text-box">
                            <div class="sec-title">
                                <h2>Welcome to the best industrial center around the world</h2>
                                <h3>The Global Leader in the Industry &amp; Manufacturing of innovative.</h3>
                                <p class="sec-explain">Gazolin Are A Industry &amp; Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry, Engineering, Construction And Any Related Industry Care Field.</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <p class="providing">Providing innovative website Solution For Future</p>
                                    <ul class="about-us-core-list">
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>We Use Qulity Manufacturing Materials</h4>
                                        </li>
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>Gazolin Provide Unique Technology</h4>
                                        </li>
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>Group Of Certified &amp; Experienced Team</h4>
                                        </li>
                                        <li class="item">
                                            <i class="fas fa-check"></i>
                                            <h4>The Best services of Multiple Industries</h4>
                                        </li>
                                    </ul>
                                    <div class="img-person">
                                        <img class="img-fluid about-us-person" src="assets/img/2" alt="About US Person">
                                        <img class="img-fluid signature" src="assets/img/2" alt="About US Signature">
                                    </div>
                                </div>
                                <div class="col-sm-5 d-flex align-items-center justify-content-between">
                                    <div class="about-us-features-carousel owl-carousel owl-theme">
                                        <div class="item">
                                            <i class="ar-icons-computer"></i>
                                            <h5>Transparent Pricing</h5>
                                            <a class="btn-1 btn-3" href="about-us.php"><span>Read More</span></a>
                                        </div>
                                        <div class="item">
                                            <i class="ar-icons-check-list"></i>
                                            <h5>Satisfaction Guarantee 100%</h5>
                                            <a class="btn-1 btn-3" href="about-us.php"><span>Read More</span></a>
                                        </div>
                                        <div class="item">
                                            <i class="ar-icons-architect"></i>
                                            <h5>Personalised Solutions</h5>
                                            <a class="btn-1 btn-3" href="about-us.php"><span>Read More</span></a>
                                        </div>
                                        <div class="item">
                                            <i class="ar-icons-plan-1"></i>
                                            <h5>Accurate Testing</h5>
                                            <a class="btn-1 btn-3" href="about-us.php"><span>Read More</span></a>
                                        </div>
                                        <div class="item">
                                            <i class="ar-icons-architect"></i>
                                            <h5>Environmental warehouse</h5>
                                            <a class="btn-1 btn-3" href="about-us.php"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    </div><br>
                
              
                <div class="container border border-5" style="border-color: red;">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Expert Members</h2>
                            <h3>Qualified Staff Of Engineers</h3>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <p class="sec-explain">Gazolin Are A Industry &amp; Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry, Engineering, Construction And Any Related Industry Care Field.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 ">
                        <div class="team-box">
                            <div class="img-box">
                                <img class="img-fluid" src="assets/img/17.jpg" alt="01 team">
                                <div class="img-box-hover">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><span class="bi bi-twitter"></span></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                        <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="bi bi-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <h5><a href="team.php">Eng Anwar Ramadan</a></h5>
                                <span>Account Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-box">
                            <div class="img-box">
                                <img class="img-fluid" src="assets/img/17.jpg" alt="02 team">
                                <div class="img-box-hover">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><span class="bi bi-twitter"></span></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                        <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="bi bi-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <h5><a href="team.php">Eng Osama bakri</a></h5>
                                <span>Founder &amp; CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-box page">
                            <div class="img-box">
                                <img class="img-fluid" src="assets/img/17.jpg" alt="03 team">
                                <div class="img-box-hover">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><span class="bi bi-twitter"></span></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                        <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="bi bi-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <h5><a href="team.php">Eng Omnia Ramadan</a></h5>
                                <span>Sener Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
                  </div>
                </div>
                <?php include('includes/footer.php');?>

         <!-- navbar -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="assets/js/navbar.js"></script>
  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Search menu code -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript">
          //  Search menu code 
           $("#select_box").select2({
                  maximumSelectionLength: 2
                    }); 


     //  Search menu code                 
  function getselect(){
  var select_box = $("#select_box").val();

  $.ajax({
    type:"POST",
    url:'getbio.php',
    data: {catid:select_box},
    success: function(result){
      $("#dropresult").html(result);
    }
  });
}            

var btn = $('#backtotop');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


  </script>

</body>

</html>