

<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
  <i class="bi bi-toggle-on"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
    <div class="sidebar-brand">
      <a href="#">BLOOMBERG</a>
      <div id="close-sidebar">
        <i class="bi bi-toggle-off"></i>
      </div>
    </div>
    <div class="sidebar-header">
      <div class="user-pic">
        <img class="img-responsive img-rounded" src="assets/img/yogi.jpg"
          alt="User picture">
      </div>
      <div class="user-info">
          <strong>YOGI</strong>
        <span class="user-role">Administrator</span>
      </div>
    </div>
    <!-- sidebar-header  -->

    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <a href="index.php">Index</a>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="bi bi-person-lines-fill"></i>
            <span>Biography</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">Celebrity</a>
              </li>
              <li>
                <a href="#">Scientist</a>
              </li>
              <li>
                <a href="#">Player</a>
              </li>
              <li>
                <a href="#">Businessman</a>
              </li>
              <li>
                <a href="#">Politician</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fa fa-book"></i>
            <span>E-commerce</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">Products

                </a>
              </li>
              <li>
                <a href="#">Orders</a>
              </li>
              <li>
                <a href="#">Credit cart</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fa fa-book"></i>
            <span>Components</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">General</a>
              </li>
              <li>
                <a href="#">Panels</a>
              </li>
              <li>
                <a href="#">Tables</a>
              </li>
              <li>
                <a href="#">Icons</a>
              </li>
              <li>
                <a href="#">Forms</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fa fa-book"></i>
            <span>Charts</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">Pie chart</a>
              </li>
              <li>
                <a href="#">Line chart</a>
              </li>
              <li>
                <a href="#">Bar chart</a>
              </li>
              <li>
                <a href="#">Histogram</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fa fa-book"></i>
            <span>Maps</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">Google maps</a>
              </li>
              <li>
                <a href="#">Open street map</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="header-menu">
          <span>Extra</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Documentation</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Examples</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- sidebar-menu  -->
  </div>
  <!-- sidebar-content  -->
  <div class="sidebar-footer">
    <a href="#">
      <i class="fa fa-bell"></i>
      <span class="badge badge-pill badge-warning notification">3</span>
    </a>
    <a href="#">
      <i class="fa fa-envelope"></i>
      <span class="badge badge-pill badge-success notification">7</span>
    </a>
    <a href="#">
      <i class="fa fa-cog"></i>
      <span class="badge-sonar"></span>
    </a>
    <a href="database/logout.php">
      <i class="fa fa-power-off"></i>
    </a>
  </div>
</nav>
<!-- sidebar-wrapper  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js"></script>

<script>
    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


</script>