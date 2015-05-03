<?php
$e=$_GET['email'];
 /*echo $e; */
$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$s=$mysqli->query("select Role from register_info where Email= {'$e'}");
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">

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
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

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

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Welcome <?php session_start(); echo $_SESSION['email']; ?></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a  id="profile" href="#profile" >Create/View Profile</a></li>
                                <li><a id="eprofile" href="#eprofile">Edit Profile </a></li>
                                <li><a id="message" href="#message">Messages</a></li>
                                <li><a id="search" href="#search">Search/Apply Jobs</a></li>
                                <li><a id="jobsum" href="#jobsum">View Job Summary </a></li>
                                <li><a id="logout" href="#logout">Logout</a></li>
                            </ul>
                        </li>


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>


<br> <br> <br> <br> <br> <br>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div id="a"></div>

</div> </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Preloader js file -->
<script src="js/queryloader2.min.js" type="text/javascript"></script>
<!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- slick slider -->
<script src="js/slick.min.js"></script>
<!-- superslides slider -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

<!-- Custom js-->
<script src="js/custom.js"></script>
<script>
    $(document).ready(function()
    {


            $('#profile').on('click',function(e) {
                e.preventDefault();
                $('#a').load("hn.html");
            });
        $('#logout').on('click',function(e) {
        });
        });








</script>