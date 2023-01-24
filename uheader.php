<?php
session_start();
$user_name=$_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="cssjs/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue" style="font-size:14pt">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="index2.html" class="logo"><b>USER </b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                
                <ul class="dropdown-menu">
                
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#"> 
                          <div class="pull-left">
                           
                          </div>
                          
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      
                      
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                
                <ul class="dropdown-menu">
                  
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      </li>
                     
                    </ul>
                  </li>
                
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                
                <ul class="dropdown-menu">
                
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                     
                     
                    </ul>
                  </li>
                  
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs">WMS</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                  
                  </li>
                  
                  <li class="user-footer">
                  
                    <div class="pull-right">
                      <input type=button onclick="location.href='index.php'" style="border:2px solid;margin-right:100px; border-radius:7px; font-family:serif; background-color:lightblue;" value="Log out" >
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              
            </div>
            <div class="pull-left info">
              <p>WMS</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online <span style="color:white"><?php print $user_name;?></span></a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                </ul>
            </li>
                 
				<li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Inward Finishgood</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="inward_finishgood_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="inward_finishgood_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            
				<li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Outward Finishgood</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="outward_finishgood_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="outward_finishgood_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>DispatchRaw</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="dispatchraw_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="dispatchraw_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
				  
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>InwardRaw</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="inwardraw_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="inwardraw_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            
             
            
                  
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
