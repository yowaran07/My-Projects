<?php
ob_start();
error_reporting(E_ALL);

include_once "includes/config.php";
session_start();
$catid = $_POST['catid'];
$subcategory = $_POST['subcategory'];

if($catid !="" ){
$getnamQry = "SELECT * FROM `biography`  WHERE category =  '$catid' group by subcategory ";

// echo $getnamQry ;
$getnamRes=$mysqli->query($getnamQry);


$i=0;
while($row =mysqli_fetch_array($getnamRes)){
$i++;
echo "<option value=".$row['subcategory'].">".$row['subcategory']."</option>";
}
}
else{
  $getsubcatQry = "SELECT * FROM `biography` WHERE subcategory = '$subcategory'";
  echo $getsubcatQry;
  $subcatres = $mysqli->query($getsubcatQry);

  $i=0;
  while($cow =mysqli_fetch_array($subcatres)){
  $i++;
  echo "<option value=".$cow['name'].">".$cow['name']."</option>";
  }
  
}
 ?>
