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
        </li>
      </ul>
    </section>
  </aside>
  <section class="content">
      <div class="content-wrapper">
    <div class="container-full">
      <div class="row">
      <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Appointments Lists</h4>
        </div>
        <div class="box-body">
          <div class="table-responsive-sm">
            <?php
             require("php/db_connection.php");
             $query = "SELECT * FROM appointment";
             if (!$result = mysqli_query($con, $query)) {
                 exit(mysqli_error($con));
             }
             if (mysqli_num_rows($result) > 0) {
             $number = 1;
             $user = '<table class="table mb-0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Date</th>
                <th>Message</th>
              </tr>
            </thead>';
            while ($row = mysqli_fetch_assoc($result)) {
                    $user .= '<tbody>
                              <tr>
                                  <td>'.$row['name'].'</td>
                                  <td >'.$row['mobile_no'].'</td>
                                  <td>'.$row['email'].'</td>
                                  <td>'.$row['dates'].'</td>
                                  <td>'.$row['msg'].'</td>
                              </tr>
                              </tbody>';
                              }
                        $user .= '</table>';
                        }
                    ?>
                    <?php echo $user ?>
            </table>
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
  <div class="control-sidebar-bg"></div>
</div>
  <script src="js/vendors.min.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>  <!-- Sunny Admin App -->
  <script src="js/template.js"></script>
</body>
</html>