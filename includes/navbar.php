<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"> <img src="images/unclogo.png" alt="UNC" style="width:50%;"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"> <img src="images/UNC1.png" alt="UNC" style="width:100%;"></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
            <span class="hidden-xs"><?php echo $voter['firstname'].' '.$voter['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">

            <li class="user-panel">
    
             
                <a href="logout.php" class="btn btn-default">Log out</a>

             
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>