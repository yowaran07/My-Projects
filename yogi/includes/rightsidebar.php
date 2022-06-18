<?php

error_reporting(E_ALL);


include_once "includes/config.php";
db_connect();
//card 1 start query//
$ResQry = "SELECT * FROM biography GROUP BY category";
$result = $mysqli->query($ResQry);
if (!$result){
           echo 'Could not run query: ' . $mysqli->error;
           exit;
        }else{
            $resCnt = $result->num_rows;
        }
//card 1 End query//
    


?>
  <div class="col-md-2 rside">
    <!--card 1 start query-->
    <div class="card my-4">
      <div class="card-header">
        <h4 align="center">Category</h4>
          <div class="card-body">
            <?php
                  if($resCnt > 0){
                  $i=1;
                  while($trow = mysqli_fetch_array($result)){
            ?>
            <ul class ="list-unstyled">
              <li>
               <?php print $trow["category"]; 
                         $i++;
                               }
                            } ?>
              </li>
            </ul>   
          </div>
        </div>     
    </div>
    <!--card 1 End query-->
    <!--card 1 start query-->
    <!--Rhis card plan for advertisement-->
    <div class="card my-4">
      <div class="card-header">
        <h4>Recent News</h4>
          <div class="card-body">
             <ul class="list-unstyled mb-0">
               <li>Sports</li>
               <li>Entertainment</li>
               <li>Tech</li>
               <li>Games</li>
             </ul>
          </div>
      </div>     
    </div>
    <!--card 1 end query-->
    <!--card 1 start query-->
    <div class="card my-4">
      <div class="card-header">
        <h4>Recent News</h4>
          <div class="card-body">
             <ul class="list-unstyled mb-0">
               <li>Sports</li>
               <li>Entertainment</li>
               <li>Tech</li>
               <li>Games</li>
             </ul>
          </div>
      </div>     
    </div>
    <!--card 1 end query-->
  </div>  



  
      
         