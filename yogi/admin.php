

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<?php include('includes/link.php');?>


<title>Admin</title>

<div class="main_container">
  <span class="animate" style="--count:5;"></span>
  <span class="animate" style="--count:3;"></span>
  <span class="animate" style="--count:4;"></span>
  <span class="animate" style="--count:2;"></span>
  <span class="animate" style="--count:1;"></span>
  <span class="animate" style="--count:6;"></span>
  <span class="animate" style="--count:7;"></span>

  <form action="database/adminlogin.php" method="post" class="login_form">
    <h1 class="login_form_" style="color:white; text-align:center">Admin</h1>

    <div class="group">
      <input type="text" name="user" required >
      <label>Username</label>
      <span class="icon">
        <i class="fa fa-user"></i>
      </span>
    </div>

    <div class="group">
      <input type="password" name="password" required >
      <label>Password</label>
      <span class="icon">
        <i class="fa fa-key"></i>
      </span>
    </div>

    <button type="submit" style="text-align: center">Login</button>

    
  </form>
</div>