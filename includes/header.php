<?php

session_start();

if ($_SERVER['HTTP_HOST'] == "localhost:8089") {
  $folder_name = "";
  $path = "http://localhost:8089/panopte/" . $folder_name;

    if(empty($_COOKIE['logged_in']))
    {
        header('Location: /panopte/login');
    }

} else {
  $folder_name = "";
  $path = 'http://' . $_SERVER['HTTP_HOST'] . '' . $folder_name . '/';

    if(empty($_COOKIE['logged_in']))
    {
        header('Location: /login');
    }
}

?>
<div class="toggle-btn"><i class="icon-menu_lines_hamburger_icon"></i></div>
<header class="header-main">
  <div class="top-bar">
    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col-lg-12">
          <div class="navbar-right">
            <ul class="nav-menu">
              <li class="nav-item dropdown notification">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-Icon-awesome-bell"></i>
                  <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <ul>
                   
                    <li><a href="#"><i class="icon-Icon-awesome-bell"></i> Lorem ipsum donet In eu purus libero. </a></li>
                    <li><a href="#"><i class="icon-Icon-awesome-bell"></i> Lorem ipsum donet In eu purus libero. </a></li>
                    <li><a href="#"><i class="icon-Icon-awesome-bell"></i> Lorem ipsum donet In eu purus libero. </a></li>
                    <li><a href="#"><i class="icon-Icon-awesome-bell"></i> Lorem ipsum donet In eu purus libero. </a></li>
                   
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown account-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="<?php echo $basesurl; ?>images/profile.png" alt="">
                  <span>
                    <h4>Will,Designer</h4>
                    <p>will@exm.com</p>
                  </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <ul>
                    <li>
                      <a href="#" class="">My Profile</a>
                    </li>
                    <li>
                      <a href="#" class="">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="logout-modal">Signout</a>
                    </li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>