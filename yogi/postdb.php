<?php
ob_start();
error_reporting(E_ALL);


include_once "includes/config.php";
'db_connect'();

// if ($_SESSION["userId"] == "") {
//     header("Location:index.php");
// }

// $uid = $_SESSION["userId"];

// $adminType = $_SESSION["loginName"];

    //biography post data//

  $name = $_POST["name"];
  $city = $_POST["city"];
  $category = $_POST["category"];
  $fathername = $_POST["fathername"];
  $mothername = $_POST["mothername"];
  $occupation = $_POST["occupation"];
  $education = $_POST["education"];
  $spouse = $_POST["spouse"];
  $children = $_POST["children"];
  $sibling = $_POST["sibling"];
  $instagram = $_POST["instagram"];
  $twitter = $_POST["twitter"];
  $movie = $_POST["movie"];
  $awards = $_POST["awards"];
  $yearactive = $_POST["yearactive"];
  $tags = $_POST["select_box[]"];
  $image = $_POST["image"];
  $heading1 = $_POST["heading1"];
  $data1 = $_POST["data1"];
  $heading2 = $_POST["heading2"];
  $data2 = $_POST["data2"];

  
  $dob = $_POST["dob"];

  $doc = date('Y-m-d');


      
        

      $bioGpy = "INSERT INTO `biography`(`name`, `category`, `dob`, `occupation`, `instagram`, `twitter`, `city`, `fathername`, `mothername`, `spouse`, `children`, `education`, `sibilings`, `yearactive`, `tags`, `movie`, `awards`, `image`, `heading1`, `data1`, `heading2`, `data2`, `date`) VALUES ('$name','$category', '$dob',  '$occupation', '$instagram', '$twitter', '$city', '$fathername', '$mothername', '$spouse', '$children', '$education', '$sibling', '$yearactive', '$tags', '$movie', '$awards', '$image', '$heading1', '$data1', '$heading2', '$data2', '$doc')";

      $bioGpyRes = $mysqli->query($bioGpy);
      // $lid = $mysqli->insert_id;  

      echo $bioGpy;

?>
