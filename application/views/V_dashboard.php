  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    html, body {
      font-family: 'Open Sans', sans-serif;
    }
    body {
      display: block;
      margin: 0px!important;
    }
    body {

      background-image: url('<?php echo base_url();?>assets/images/ini-bg.png');
      background-size: cover;
    }
    img {
      max-width: 100%;
    }
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    a {
      text-decoration: none;
    }
    #header {
      float: left;
      width: 100%;
      background: #279be4;
      position: relative;
    }
    .white-label {
      float: left;
      background: #33373B;
      max-width: 210px;
      padding: 10px;
      min-height: 44px;
      background: #279BE4;
      width: 100%;
      max-height: 44px;
    }
    .white-label img {
      max-height: 43px;
    }
    .header-nav {
      min-height: 44px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      background: #279BE4;
    }
    .menu-button {
      float: left;
      font-size: 29px;
      color: #fff;
      padding: 12px 19px;
    }
    .nav ul {
      height: 20px;
      float: right;
    }
    .nav ul li {
      float: left;
      position: relative;
      padding: 11px;
    }
    .nav > ul > li:first-child {
      border-left: none;
    }
    .nav ul li a {
      color: #fff;
      padding: 1px;
      float: left;
    }
    .nav ul li i {
      color: #fff;
    }
    .nav ul li:hover {
      background: #279be4;
      color: #fff;
    }
    .user-profile {
      float: right;
    }
    .user-profile > div {
      float: left;
      padding: 20px 8px;
      position: relative;
    }
    .user-profile i {
      font-size: 1.2em;
      color: #5F6F86;
    }
    .user-profile i:hover {
      color: #397AC5;
    }
    .font-icon i:after {
     position: absolute;
     content: '3';
     background: #E74C3C;
     color: #fff;
     font-size: 12px;
     border-radius: 50%;
     width: 12px;
     height: 15px;
     padding: 2px 4px 4px 3px;
     text-align: center;
     top: 12px;
     right: 11px;
   }
   .font-icon {
     padding: 4px 10px;
   }
   .font-icon i {
    font-size: 20px;
  }
  .nav-mail .font-icon i:after {
    background: #2ECC71;
  }
  div.user-image {
    padding: 9px 5px;
    margin: 0 5px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
  }
/*    .nav-profile {
      background: #0274BD;
      }*/
      .nav-profile-image img {
        width: 39px;
        height: 41px;
        border-radius: 50%;
        float: left;
      }
      .nav-profile-name {
        float: right;
        margin: 11px 7px 8px 14px;
        color: #fff;
      }
      .nav-profile-name i {
        padding: 0 0 0 11px;
      }
      .nav-chat i:after {
        display: none;
      }
      #sidebar {
        overflow: hidden;
        width: 210px;
        height: 100%;
        float: left;
        background: #2A2D33;
      }
      #sidebar-nav {
        width: 106%;
        height: calc(100% - 95px);
        padding: 0;
        background: #2A2D33;
        border-right: 1px solid #E0E0E0;
        overflow-y: scroll;
      }
      #sidebar-nav h2 {
        color: #60636B;
        float: left;
        width: 100%;
        font-size: .8em;
        font-family: 'Open Sans', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        padding: 3px 0 2px 20px;
        border-top: 1px solid #4D4C4C;
        box-sizing: border-box;
        margin: 10px 0;
      }
      #sidebar-nav ul {

      }
      #sidebar-nav ul li {

      }
      #sidebar-nav ul li a {
        color: #C2C2C2;
        font-size: .95em;
        padding: 15px 20px;
        float: left;
        width: 100%;
        font-weight: 600;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      #sidebar-nav ul li:hover a, #sidebar-nav ul li:hover a i, #sidebar-nav li.active a, #sidebar-nav li.active a i {
        color: #333;
      }
      #sidebar-nav ul li:hover a {
        background: #fff;
        color: #333;
      }
      #sidebar-nav ul li.active a {
        background: #fff;
        color: #333;
      }
      #sidebar-nav ul li.active a i {
        background: #fff;
      }
      #sidebar-nav i {
        padding-right: 8px;
        font-size: 1.3em;
        color: #60636B;
        width: 25px;
        text-align: center;
      }
      #content {
        float: left;
        width: calc(100% - 210px);
        height: 100%;
        word-wrap: break-word;
        background: #FFFFFF;
        font-family: Raleway, sans-serif;
      }
      ::-webkit-scrollbar {
        width: 12px;
      }
      ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        border-radius: 10px;
      }
      ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
      }
      .content {

        background: #E9EEF4;
        width: 100%;
        height: calc(100% - 64px);
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .content-header {
        background: #fff;
        float: left;
        width: 100%;
        margin-bottom: 15px;
        padding: 15px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-bottom: 1px solid #ccc;
      }
      .content-header h1 {
        margin: 0;
        font-weight: normal;
        padding-bottom: 5px;
      }
      .content-header p {
        margin: 0;
        padding-left: 2px;
      }
      .widget-box {
        background: #fff;
        border: 1px solid #E0E0E0;
        float: left;
        width: 100%;
        margin: 0 0 15px 15px;
      }
      .widget-header {
        background: #279BE4;
      }
      .widget-header h2 {
        font-size: 15px;
        font-weight: normal;
        margin: 0;
        padding: 11px 15px;
        color: #F9F9F9;
        display: inline-block;
      }
      .sample-widget {max-width: 47%;}
      .widget-box .fa-cog {
        float: right;
        color: #fff;
        margin: 11px 11px 0 0;
        font-size: 20px;
      }

      .dropdown-menu{
        position: absolute;
        top: 0px;
        left: 0px;
        transform: translate3d(0px, 25px, 0px)!important;
        background-color: #279be4!important;
        border-radius: 0px!important;
      }

    </style>
    <section id="sidebar"> 
      <div class="white-label">
      </div> 
      <div id="sidebar-nav">   
        <ul>
          <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="#"><i class="fa fa-desktop"></i> My Website</a></li>
          <li><a href="#"><i class="fa fa-usd"></i> Ecommerce</a></li>
          <li><a href="#"><i class="fa fa-pencil-square-o"></i> My Blog</a></li>
          <li><a href="#"><i class="fa fa-sitemap"></i> SEO Tools</a></li>
          <li><a href="#"><i class="fa fa-line-chart"></i> Reporting</a></li>
          <li><a href="#"><i class="fa fa-comments-o"></i>Social Marketing</a></li>
          <li><a href="#"><i class="fa fa-map-marker"></i> Get Traffic</a></li>     
          <li><a href="#"><i class="fa fa-users"></i> Employees</a></li>
          <li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
          <li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
        </ul>
      </div>
    </section>
    <section id="content">
      <div id="header">
        <div class="header-nav" style="float: right;">
          <div class="menu-button">
            <!--<i class="fa fa-navicon"></i>-->
          </div>
          <div class="nav">
            <ul>
              <li class="nav-settings">
                <div class="font-icon"><i class="fa fa-bell"></i></div>
              </li>

              <li class="nav-profile">

                <?php
                if ($this->session->userdata('statses') == "login") {
                  echo '<ul class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="color: white" class="fa fa-user"></i>&nbsp;'.$this->session->userdata('nama').'</a>
                  <div class="dropdown-menu border-0 shadow animate slideIn" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="'.base_url('Dashboard').'" style="color:white"><i style="color: white" class="fa fa-cog"></i> Dashboard</a>
                  <a class="dropdown-item" href="'.base_url('login/logout').'" style="color:white"><i style="color: white" class="fa fa-power-off"></i> Logout</a>

                  </div>
                  </ul>';
                }else{
                  echo '<a href="'.base_url('Login').'" style="background-color: #f8f9fa; color: blue" class="btn btn-default btn-xl shadow">Login</a>';
                }
                ?>

              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-header">
          <h1>Dashboard</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="widget-box sample-widget">
          <div class="widget-header">
            <h2>Widget Header</h2>
            <i class="fa fa-cog"></i>
          </div>
          <div class="widget-content">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
          </div>
        </div>
        <div class="widget-box sample-widget">
          <div class="widget-header">
            <h2>Widget Header</h2>
            <i class="fa fa-cog"></i>
          </div>
          <div class="widget-content">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
          </div>
        </div> 
      </div>
    </section>