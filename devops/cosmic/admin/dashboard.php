<?php
$con = mysqli_connect("localhost", "agro", "G~D6draM", "agro");
$count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM downloads"));
$coun = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM contact"));
$cou = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM appointment"));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Cosmic Plantations - Mini Farm Lands</title>
	<link rel="stylesheet" href="css/vendors_css.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
  </head>
	<script type="text/javascript">
        window.history.forward();
        window.history.backward();
        function noBack()
        {
            window.history.forward();
            window.history.backward();
        }
    </script>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top pl-30">
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>			
		  </ul>
	  </div>
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">		
          <li class="dropdown user user-menu">	
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
				<img src="../images/avatar/avatar-4.png" alt="">
			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">
				 <a class="dropdown-item" href="logout.php"><i class="ti-lock text-muted mr-2"></i> Logout</a>
			  </li>
			</ul>
          </li>	
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">	
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
					 </div>
				</a>
			</div>
        </div>
      <ul class="sidebar-menu" data-widget="tree">  
		    <li>
          <a href="dashboard.php">
            <i data-feather="pie-chart"></i>
			      <span>Dashboard</span>
          </a>
        </li>  
        <li>
          <a href="contact.php">
            <i data-feather="server"></i>
            <span>Contacts</span>
          </a>
        </li> 
        <li>
          <a href="appointment.php">
            <i data-feather="server"></i>
            <span>Appointments</span>
          </a>
        </li>
        <li>
          <a href="download.php">
            <i data-feather="server"></i>
            <span>Downloads</span>
          </a>
        </li>
        <li>
          <a href="export.php">
            <i data-feather="layers"></i>
            <span>Exports</span>
          </a>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
	  <div class="container-full">
		<section class="content">
			<div class="row">
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-warning-light rounded w-60 h-60 mx-auto">
								<i class="text-warning mr-0 font-size-24 mdi mdi-contacts"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Contact</p>
								<h3 class="text-dark mb-0 font-weight-500"><?php echo $coun[0]; ?> </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-info-light rounded w-60 h-60 mx-auto">
								<i class="text-info mr-0 font-size-24 mdi mdi-briefcase-download"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Downloads</p>
								<h3 class="text-dark mb-0 font-weight-500"><?php echo $count[0]; ?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-success-light rounded w-60 h-60 mx-auto">
								<i class="text-success mr-0 font-size-24 mdi mdi-coffee"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Appointments</p>
								<h3 class="text-dark mb-0 font-weight-500"><?php echo $cou[0]; ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	  </div>
  </div>
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		</ul>
    </div>
	  &copy; 2020 <a href="http://nervygrid.co.in">NervyGrid</a>. All Rights Reserved.
  </footer>
	<script src="js/vendors.min.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	
	<script src="../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>
</body>
</html>