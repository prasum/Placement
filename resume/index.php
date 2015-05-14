<?php
$e=$_GET['email'];
$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>John Bootstrap One Page HTML5 Free Resume Template | Webthemez</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="resume/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->

</head>
<body>
<header id="header">
    <div id="head" class="parallax" parallax-speed="2" style="background-position: 50% 0px;">

        <div class="top_left_cont zoomIn wow animated" id="logo">
            <img class="img-circle" src="img/guy.jpg" alt="">

            <h2>Hello! I am <?php echo $_GET['email']; ?>  <br/><strong>An aspiring student</strong></h2>
            <a href="#service" class="read_more2">Hire Me!</a> </div>
    </div>

</header>

<!--Header_section-->
<header id="header_wrapper">
    <div class="container">
        <div class="header_box">
            <!--<div class="logo"><a href="#">Resume</a></div>-->
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="main-nav" class="collapse navbar-collapse navStyle">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#header" class="scroll-link">Home</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Me</a></li>
                        <li><a href="#service" class="scroll-link">My Skills</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Header_section-->

<section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper about-us aboutUs-container fadeInLeft animated wow">
        <div class="container">
            <h2>About Me</h2>
            <h6>Name: <b><?php $q=$mysqli->query("select Name from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['Name']; ?> </b></h6>
            <h6>Roll No: <b><?php $q=$mysqli->query("select RollNo from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['RollNo']; ?> </b></h6>
            <h6>Mobile No: <b><?php $q=$mysqli->query("select MobileNo from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['MobileNo']; ?> </b></h6>
            <h6>Facebook Link: <b><?php $q=$mysqli->query("select FacebookLink from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['FacebookLink']; ?> </b></h6>
            <h6>LinkedIn link: <b><?php $q=$mysqli->query("select LinkedinLink from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['LinkedinLink']; ?></b></h6>
            <h6>SkypeLink: <b><?php $q=$mysqli->query("select SkypeLink from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['SkypeLink']; ?> </b></h6>
            <div class="inner_section">
                <div class="row">
                    <div class="col-md-6"> <img class="img-responsive" src="img/about1.png" align=""> </div>
                    <div class="col-md-6">
                        <h3>Educational details</h3>


                        <ul class="about-us-list">
                            <li class="points">Class 10: <b> <?php $q=$mysqli->query("select 10percentage from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['10percentage']; ?> </b></li>
                            <li class="points">Class 12:<b> <?php $q=$mysqli->query("select 12percentage from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['12percentage']; ?> </b> </li>
                            <li class="points">cgpa:<b><?php $q=$mysqli->query("select cgpa from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['cgpa']; ?> </b></li>
                            <li class="points">sgpa1:<b> <?php $q=$mysqli->query("select sgpa1 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['sgpa1']; ?> </b></li>

                            <li class="points">sgpa2:<b> <?php $q=$mysqli->query("select sgpa2 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['sgpa2']; ?> </b></li>
                            <li class="points">sgpa3:<b> <?php $q=$mysqli->query("select sgpa3 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['sgpa3']; ?></b></li>
                            <li class="points">sgpa4:<b> <?php $q=$mysqli->query("select sgpa4 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['sgpa4']; ?> </b></li>
                            <li class="points">sgpa5:<b> <?php $q=$mysqli->query("select sgpa5 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['sgpa5']; ?></b> </li>

                        </ul><!-- /.about-us-list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
    <div class="container">
        <h2>My Skills</h2>
        <h6>Skill1:<b> <?php $q=$mysqli->query("select skill1 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['skill1']; ?> </b></h6>
        <h6>Skill2:<b> <?php $q=$mysqli->query("select skill2 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['skill2']; ?> </b></h6>
        <h6>Skill3:<b> <?php $q=$mysqli->query("select skill3 from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['skill3']; ?></b></h6>
        <h6>Tier of placement expected: <b> <?php $q=$mysqli->query("select tier from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['tier']; ?></b></h6>
        <h6>Type of placement: <b> <?php $q=$mysqli->query("select type from store where Email= '$e' "); $row = $q->fetch_array(MYSQLI_ASSOC); echo $row['type']; ?></b></h6>

        <!--Service-->


<!-- Portfolio -->



<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>