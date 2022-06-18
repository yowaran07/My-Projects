<?php 

error_reporting(E_ALL);

include_once "includes/config.php";
'db_connect'();

$resQry = "SELECT * FROM `biography` GROUP by category DESC";
$result = $mysqli->query($resQry);
if (!$result){
           echo 'Could not run query: ' . $mysqli->error;
           exit;
        }else{
            $resCnt = $result->num_rows;
        }

?>




<nav id="navbar" class="navbar fixed-top justify-content-center">
        <div class="col-8">
        <ul >
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto " href="#">World</a></li>
          <li><a class="nav-link scrollto " href="#">Business</a></li>
          <li><a class="nav-link scrollto " href="#">Tech</a></li>
          <li class="dropdown"><a href="#"><span>Sports</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Cricket</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li class="dropdown" id="drop"><a href="#"><span>Ipl</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="#">IPL</a></li>
                      <li><a href="#">T20</a></li>
                      <li><a href="#">WORLD CUB</a></li>
                      <li><a href="#">One Day</a></li>
                    </ul>
                  </li>  
                  <li><a href="#">T20</a></li>
                  <li><a href="#">WORLD CUB</a></li>
                  <li><a href="#">One Day</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#">Football<i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Cricket</a></li>
                  <li><a href="#">Swimming</a></li>
                  <li><a href="#">Footbal</a></li>
                  <li><a href="#">Chess</a></li>
                </ul>
              </li>  
              <li><a href="#">Drop </a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Biography</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
            <?php
                  if($resCnt > 0){
                  $i=1;
                  while($trow = mysqli_fetch_array($result)){
                    
            ?>
            
              <li><a href="">
               <?php print $trow["category"]; 
                           ?></a></li>
              
              <?php $i++;
                               }
                            } ?>
            </ul>
          </li>
          </ul>
        </div>
              
        <div class="col-sm-2">  
                    <form class="form-control-sm search active-pink-3 active-pink-4">
                      <i class="fas fa-search" aria-hidden="true"></i>
                      <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search..."
                        aria-label="Search">

                    </form>
        </div>
        <span><i class="bi bi-list mobile-nav-toggle"></i></span>  
</nav><!-- .navbar -->
