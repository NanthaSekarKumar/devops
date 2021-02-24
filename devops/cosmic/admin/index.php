<html>
<head>
  <link rel="apple-touch-icon" href="img/favicon.png">
  <link rel="icon" type="image/png" href="img/favicon.png"/>
  <title>Cosmic Plantations - Mini Farm Lands</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
        window.history.forward();
        window.history.backward();
        function noBack()
        {
            window.history.forward();
            window.history.backward();
        }
	</script>
	<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
		<form class="login-form" method="POST" action="">
		  <p class="login-text">
		  	<h1><img src="../images\logo.png"></h1>
		  </p>
		  	<input type="text" id="username" name="username" placeholder="User Name" class="login-username" autofocus="true" required="true">
		  	<input class="login-password" required="true" type="password" name="password" id="password" placeholder="Password">
		  	<input type="submit" name="login" value="login" class="login-submit" />
		</form>
		<div class="underlay-photo"></div>
		<div class="underlay-black"></div> 
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
body, html {
  height: 100%;
}
body {
  font-family: 'Open Sans';
  font-weight: 100;
  display: flex;
  overflow: hidden;
}
input {
  ::-webkit-input-placeholder {
     color: rgba(255,255,255,0.7);
  }
  ::-moz-placeholder {
     color: rgba(255,255,255,0.7);  
  }
  :-ms-input-placeholder {  
     color: rgba(255,255,255,0.7);  
  }
  &:focus {
    outline: 0 transparent solid;
    ::-webkit-input-placeholder {
     color: rgba(0,0,0,0.7);
    }
    ::-moz-placeholder {
       color: rgba(0,0,0,0.7);  
    }
    :-ms-input-placeholder {  
       color: rgba(0,0,0,0.7);  
    }
  }
}
.login-form {
  //background: #222;
  //box-shadow: 0 0 1rem rgba(0,0,0,0.3);
  min-height: 10rem;
  margin: auto;
  max-width: 50%;
  padding: .5rem;
}
.login-text {
  //background: hsl(40,30,60);
  //border-bottom: .5rem solid white;
  color: white;
  font-size: 1.5rem;
  margin: 0 auto;
  max-width: 50%;
  padding: .5rem;
  text-align: center;
  //text-shadow: 1px -1px 0 rgba(0,0,0,0.3);
  .fa-stack-1x {
    color: black;
  }
}
.login-username, .login-password {
  background: transparent;
  border: 0 solid;
  border-bottom: 1px solid rgba(white, .5);
  color: white;
  display: block;
  margin: 1rem;
  padding: .5rem;
  transition: 250ms background ease-in;
  width: calc(100% - 3rem);
  &:focus {
    background: white;
    color: black;
    transition: 250ms background ease-in;
  }
}
.login-forgot-pass {
  //border-bottom: 1px solid white;
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 75%;
  left: 0;
  opacity: 0.6;
  padding: .5rem;
  position: absolute;
  text-align: center;
  //text-decoration: none;
  width: 100%;
  &:hover {
    opacity: 1;
  }
}
.login-submit {
  border: 1px solid white;
  background: transparent;
  color: white;
  display: block;
  margin: 1rem auto;
  min-width: 1px;
  padding: .25rem;
  transition: 250ms background ease-in;
  &:hover, &:focus {
    background: white;
    color: black;
    transition: 250ms background ease-in;
  }
}
[class*=underlay] {
  left: 0;
  min-height: 100%;
  min-width: 100%;
  position: fixed;
  top: 0;
}
.underlay-photo {
  animation: hue-rotate 6s infinite;
  background: url('img/s.jpg');
  background-size: cover;
  -webkit-filter: grayscale(30%);
  z-index: -1;
}
.underlay-black {
  background: rgba(0,0,0,0.7);
  z-index: -1;
}
@keyframes hue-rotate {
  from {
    -webkit-filter: grayscale(30%) hue-rotate(0deg);
  }
  to {
    -webkit-filter: grayscale(30%) hue-rotate(360deg);
  }
}
</style>
<?php 
require_once('login/dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=($password);
$useremail=$_POST['username'];
$ret= mysqli_query($con,"SELECT * FROM admin WHERE user='$useremail' and pass='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
session_start();
$extra="dashboard.php";
$host=$_SERVER['HTTP_HOST']; 
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
exit();
}
?>
</body>
</head>
</html>