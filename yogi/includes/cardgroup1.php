<?php

error_reporting(E_ALL);


include_once "includes/config.php";
db_connect();

$ResQry2="SELECT * FROM `biography` WHERE biography.category = 'actor' limit 10";
$result2 = $mysqli->query($ResQry2);
if (!$result2){
           echo 'Could not run query: ' . $mysqli->error;
           exit;
        }else{
            $resCnt2 = $result2->num_rows;
            
        }

        						if($resCnt2 > 0){
                                $i=0;
                                while($trow2 = mysqli_fetch_array($result2)){

?>

            <div class="col-md-8 col-lg-4 ">
                              <div class="team-box">
                                  <div class="img-box">
                                      <img class="img-fluid" src="assets/img/4.png" alt="01 team">
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
                                      <h5><a href="team.php"><?php print $trow2["name"]; ?></a></h5>
                                      <span><?php print $trow2["category"]; ?></span>
                                  </div>
                              </div>
                            </div>
                            <?php 
                                    $i++;
                                  }
                                }
                                  ?>
                                             		
