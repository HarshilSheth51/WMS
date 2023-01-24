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
        <a href="#" class="logo"><b>WMS</b></a>
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
                        
                      </li><!-- end message -->
                      
                      
                    </ul>
                  </li>
                                  </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                
                <ul class="dropdown-menu">
                  
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      
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
                        
                      </li><!-- end task item -->
                     
                     
                    </ul>
                  </li>
                  
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 
                  <span class="hidden-xs">Wear House Mangement System</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    
                  </li>
                            <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <input type=button onclick="location.href='index.php'" style="border: 2px solid blue ; border-radius: 5px; background-color:light blue; background-position:center;" value="Log out">
					  
					  
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

              <a href="#"><i class="fa fa-circle text-success"></i> Online <?php print $user_name;?></a>
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
                <span>Party</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="party_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="party_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Raw</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="raw_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="raw_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            </li>
                 
				<li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span> finishgood</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="finishgood_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="finishgood_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            </li>	
				
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span> PlaceCreate</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="place_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="place_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            </li>	
					<li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span> UserCreate</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="user_create.php"><i class="fa fa-circle-o"></i> Add</a></li>
                <li><a href="user_view.php"><i class="fa fa-circle-o"></i> View</a></li>
                  </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Inward</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="seinward_finishgood_view.php"><i class="fa fa-circle-o"></i>InwardFinishgood View</a></li>
                <li><a href="seinwardraw_view.php"><i class="fa fa-circle-o"></i>InwardRaw View</a></li>
                  </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Outward</span>
                
              </a>
              <ul class="treeview-menu">
                <li><a href="seoutward_finishgood_view.php"><i class="fa fa-circle-o"></i>OutwardFinishgood View</a></li>
                <li><a href="sedispatchraw_view.php"><i class="fa fa-circle-o"></i> DispatchRaw View</a></li>
                  </ul>
            </li>
            
                  
            
           
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
