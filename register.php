<?php
require 'PHPMailer/PHPMailerAutoload.php';
?>
<?php
if($_POST['submit'])
{
	$q=$_POST['email'];
	$a=$_POST['firstname'];
	$b=$_POST['lastname'];
	$c=$_POST['role'];
	$key = sha1($q . 'doYouLikeSauce');
	$p=md5($q);
	$base_url='http://localhost/placement/active.php';
	$mysqli=new mysqli('localhost','root','password','user_details');
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    $r=$mysqli->query("insert into store(Email) values('$q') ");
	$q=$mysqli->query("insert into register_info(FirstName,LastName,Email,Activation,Time,Password,Role) values('$a','$b','$q','$key',CURTIME(),'$p','$c')");

   
	
	$mail = new PHPMailer;
	$mail->isSMTP();
	 $mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;                             // Enable SMTP authentication
	    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission 465 ssl
	    $mail->Port = 587;

	    //Set the encryption system to use - ssl (deprecated) or tls
	    $mail->SMTPSecure = 'tls';
	    $mail->Username='tendoesch@gmail.com';
	    $mail->Password='yomahesh@9094';
	$mail->From = 'tendoesch@gmail.com';
	$mail->FromName = 'Ten Doeschate';
	$mail->addAddress($_POST['email'], 'Sumeet Lalla');
	$mail->addReplyTo('tendoesch@gmail.com', 'Ten Doeschate');
	$mail->WordWrap = 50;
	$mail->isHTML(true);
	$mail->Subject = 'Cri';
	
	$mail->Body    = 'Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. Your default password is '.$p.'<br/> <br/> <a href="'.$base_url.'?q='.$key.'">'.$base_url.'?q='.$key.'</a>';
	
	if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
	$a=true;

}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Placement and Grooming Portal : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
     <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="fullscreen-register/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fullscreen-register/assets/css/style.css">

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
 <script>
 function register()
 {
 	var c=document.getElementById('email').value;
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("t").innerHTML = xmlhttp.responseText;
                
            }
        }
        xmlhttp.open("GET", "m.php?q=" + c, true);
        xmlhttp.send();
      }
  



 </script>
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html">Placement And <span>Grooming Portal</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="mock.html">Mock Papers</a></li>
                <li><a href="scholarship.html">Alumni</a></li>
                <li><a href="events-archive.html">Gallery</a></li>
                <li><a href="gallery.html">Login</a></li>                
                <li><a href="register.php">Register</a></li> 
                <li><a href="contact.html">Contact</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
            <div class="container">
                <div class="row">
                    
                        <h1><Client Registration <span class="red">.</span></a></h1>
                    </div>
                   
                
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
               
                <div class="register span6">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <h2>Client Registration <span class="red"><strong>Form</strong></span></h2>
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="enter your first name...">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="enter your first name...">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="choose a username...">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="enter your email...">
                        <label for="role">Role</label>
                        <input type="text" id="role" name="role" placeholder="choose a role(Alumni,Student...)">
                        <button type="submit" value="submit" id="submit" name="submit">REGISTER</button>
                        <?php if(isset($a)) { unset($a);  ?>
      <p><center><strong> 
      <div class="alert alert-success">
         <p><strong>Registration complete mail sent</strong></p>
      </div></strong></center></p>
   <?php } ?>
                    </form>
                    <div id="t"> </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="fullscreen-register/assets/js/jquery-1.8.2.min.js"></script>
        <script src="fullscreen-register/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="fullscreen-register/assets/js/jquery.backstretch.min.js"></script>
        <script src="fullscreen-register/assets/js/scripts.js"></script>

    </body>

</html>

