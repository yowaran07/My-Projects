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
        <div class="row">
            <?php include('includes/leftsidebar.php');?>
                <div class="col-md-7 main">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Category</label>
                      <select class="form-control form-control-sm" required id="catid" onchange="getcat()" name="standard">
                        <option value="">Select</option>
                        <?php while($catrow = mysqli_fetch_array($rescat)) { ?>
                        <option value="<?php echo $catrow['category'] ?>"><?php echo $catrow['category'] ?></option>
                        <?php } ?>
                      </select>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                      <label for="">Subcategory</label>
                      <select class="form-control form-control-sm" onchange="getsubcat()" id="subcategory" name="">
                      </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                     <div class="form-group">
                      <label for="">Name</label>
                      <select class="form-control form-control-sm"  id="name" name="">
                      </select>
                      </div>
                    </div>
                  </div>
                </div>
                  <?php include('includes/rightsidebar.php');?>

                  </div>

                  <div class= "col-lg-12 mb-5 border border-5 " >  
                          <div class="row">
                            <div class="col-sm-2">  
                              <div class="card" >
                                <div class="card-header bg-danger">
                                  <h6>Kira Advani</h6>
                                </div>  
                                <img class="card-img-top" src="assets/img/4.png " >
                                <div class="card-body bg-warning" >
                                  <h6>defsdfsdfdsfgdfgdsfgsadrasdrfdgdfgsdfgdfsdffgfg</h6>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-2">  
                              <div class="card rounded-circle " >
                                <div class="card-header bg-danger">
                                  <h6>Kira Advani gdfg</h6>
                                </div>  
                                  <img class="card-img-top" src="assets/img/3.png " >
                                  <div class="card-body" >
                                    <h6>defsdfsdfdsfgdfgdsfgsadrasdrfdgdfgsdfgdfsdffgfg</h6>
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-2">  
                              <div class="card " >
                                <div class="card-header bg-danger">
                                  <h6>Kira Advani</h6>
                                </div>  
                                  <img class="card-img-bottom" src="assets/img/2.png" >
                                  <div class="card-body" >
                                    <h6>defsdfsdfdsfgdfgdsfgsadrasdrfdgdfgsdfgdfsdffgfg</h6>
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-2">  
                              <div class="card " >
                                <div class="card-header bg-danger">
                                  <h6>Kira Advani</h6>
                                </div>  
                                  <img class="card-img-bottom" src="assets/img/2.png" >
                                  <div class="card-body" >
                                    <h6>defsdfsdfdsfgdfgdsfgsadrasdrfdgdfgsdfgdfsdffgfg</h6>
                                  </div>
                              </div>
                            </div>    
                          </div>
                        </div>
            


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
                                        <img class="img-fluid signature" src="assets/images/01_signature.png" alt="About US Signature">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="team-box">
                            <div class="img-box">
                                <img class="img-fluid" src="assets/img/17.jpg" alt="01 team">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <h5><a href="team.php">Eng Anwar Ramadan</a></h5>
                                <span>Account Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="team-box">
                            <div class="img-box">
                                <img class="img-fluid" src="assets/img/17.jpg" alt="02 team">
                                <div class="img-box-hover">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box text-center">
                                <h5><a href="team.php">Eng Osama bakri</a></h5>
                                <span>Founder &amp; CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
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

         
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>


     function getcat(){
  var catmaster = $("#catid").val();

  $.ajax({
    type:"POST",
    url:'getcat.php',
    data: {catid:catmaster},
    success: function(result){
      $("#subcategory").html(result);
    }
  });
}           

    function getsubcat(){
  var subcategory = $("#subcategory").val();

  $.ajax({
    type:"POST",
    url:'getcat.php',
    data: {subcategory:subcategory},
    success: function(result){
      $("#name").html(result);
    }
  });
}     


  </script>
</body>

</html>