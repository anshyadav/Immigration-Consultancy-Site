<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
        $mobno = $_POST['mobno'];
		$message = $_POST['message'];
		$from = 'GLIMS Contact Form'; 
		$to = 'office@glimsvisa.com'; 
		$subject = 'Message From GLIMS Website Contact Form';
		
		$body ="From: $name\n E-Mail: $email\n Mobile-No: $mobno\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
        if($_POST['email']){
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
        }
		
        //Check if message has been entered
		if (!$_POST['mobno']) {
			$errMobno = 'Please enter your mobile number';
		}
        
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
        
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errMobno) {
            if (mail ($to, $subject, $body, $from)) {
                $result='Thank You! We will be in touch';
            } else {
		        $result='Sorry there was an error sending your message. Please try again later.';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title> GLIMS VISA </title>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/animate.css?v=1.0" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css?v=1.0">
    <link type="text/css" rel="stylesheet" href="css/jquery.fancybox.css?v=1.0">
    <link type="text/css" rel="stylesheet" href="webkit/webkit.css?v=1.0">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css?v=1.0">
    <link type="text/css" href="css/style.css?v=1.0" rel="stylesheet" />
    <link type="text/css" href="css/media.css?v=1.0" rel="stylesheet" />
    <style type="text/css">
	#mc_embed_signup{clear:left; font-size:17px; width:108%;}
    </style>

        <!-- MailChimp Pop Up Form 
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"da1ea360f3e653267b6c38983","lid":"fb18f7a6d9"}) })</script>-->
    
</head>

<body id="mainBox" class="creamBg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="150">
    <div id="site-head">

        <!-- Top Header Section Begins -->
        <div class="top-head">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class=" pull-right">
                            <li style="font-family:swis721_btroman !important"> <i class="fa fa-clock-o" aria-hidden="true"></i> 9.00 am – 6.00 pm </li>
                            <li>
                                <a href="tel:7837376900" style="font-family:swis721_btroman !important"> <i class="fa fa-phone" aria-hidden="true"></i> +91 78373 76900 </a>
                            </li>
                            <li>
                                <a href="mailto:office@glimsvisa.com?Subject=Contacting from GLIMS Website" style="font-family:swis721_btroman !important"> <i class="fa fa-envelope" aria-hidden="true"></i> office@glimsvisa.com </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Section Ends -->

        <!-- Header Section Begins -->
        <header id="header" class="float-panel" data-top="0" data-scroll="100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu">
                        <div class="menuBar scrollbtn">
                            <nav class="navbar navbar-default">
                                <div class="skewbox"> </div>
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <div class="logo">
                                            <a class="navbar-brand" href="http://www.glimsvisa.com/"><img src="images/logo.png" alt="logo" /></a>
                                        </div>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#site-head"> Home</a></li>
                                            <li><a href="#about">About Us</a></li>
                                            <li><a href="#class">Work</a></li>
                                            <li><a href="#gallery">Business</a></li>
                                            <li><a href="#products">Study</a></li>
                                            <li><a href="#plans">Tourist</a></li>
                                            <li><a href="news.html">Citizenship</a></li>
                                            <li><a href="#footer">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section Ends -->

        <!-- Banner Section Begins -->
        <section class="banner wow animated fadeInLeft" data-wow-delay="0.5s">
            <div class="container pr">
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="bannerText">
                            <h1 class="slideout"> Strong </h1>
                            <h3> Happens When <br/>You Run Out Of </h3>
                            <h1>Weak.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section Ends -->

        <!-- Scroll Down Section Begins -->
        <section class="scrollDown scrollbtn">
            <h6> <a href="#boxes"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Scroll Down </a> </h6>
        </section>
        <!-- Scroll Down Section Ends -->

    </div>

    <div class="main">

        <!-- Box Section Begins -->
        <section id="boxes" class="boxes pad-top-120 pad-bottom-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                        <div class="box box-1">
                            <figure><img src="images/1.jpg" alt="image" /></figure>
                            <div class="boxInfo">
                                <h3> Job Assistance </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                        <div class="box box-2"> 
                            <figure><img src="/images/2.jpg" alt="image" /></figure>
                            <div class="boxInfo">
                                <h3> Free Consultation </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                        <div class="box box-3">
                            <figure><img src="../images/3.jpg" alt="image" /></figure>
                            <div class="boxInfo">
                                <h3> Money Back Gurantee </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Box Section Ends -->

        <!-- About Section Begins -->
        <section id="about" class="about pad-top-110 pad-bottom-120">
            <div class="container-fluid no-padding">
                <div class="row no-margin">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow animated fadeInLeft" data-wow-delay="0.5s">
                        <figure><img src="  /images/4.jpg" alt="image" style="padding-top: 6%;" /></figure>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right wow animated fadeInRight" data-wow-delay="0.5s">
                                <h6 class="titleTop"> WELCOME TO GLIMS </h6>
                                <h2 class="sectionTitle">WHat Is <span>GLIMS VISA?</span></h2>
                                <p> GLIMS is no stranger to Chandigarh. We have been here for half a decade now, and have guided 1000s of Chandigarians to study overseas, invest overseas, migrate overseas, and for travel and tourism. GLIMS is continues to guide more people each day. On an average, about 50 people walk-in to our Chandigarh office to migrate abroad. </p>
                                <p> GLIMS Chandigarh Office houses a team of young and talented people, well-acquainted with the ins and outs of immigration to Australia, immigration to Canada, and many other countries. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section Ends -->

        <!-- Feature Section Begins -->
        <section id="feature" class="feature pad-top-115 pad-bottom-115">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">FOUR STEPS TO REACH YOUR COUNTRY</h6>
                                <h2 class="sectionTitle pad-bottom-60"><span>Ultimate Process</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feBox">
                            <img class="fIcons" src="images/6.png"/>
                            <h4>1. Free Consultation </h4>
                            <p> We will provide you free consultation to decide which country is best for you and which type of visa help you fulfill your goals. </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feBox">
                            <img class="fIcons" src="images/7.png"/>
                            <h4>2. Documents Processing </h4>
                            <p> Here we will ask you to submit all the required documents according the applying country. Post submission we will validate and attest them. </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feBox">
                            <img class="fIcons" src="images/8.png"/>
                            <h4>3. Assitance in Job/Passport </h4>
                            <p> Apart from Visa, we will help you in other crucial things like passport, job assistance, journey planning, etc. </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feBox">
                            <img class="fIcons" src="images/9.png"/>
                            <h4>4. Application Submission & Tracking </h4>
                            <p> In the last stage we will submit your application directly to the immigration authority of respective country. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Section Ends -->

        <!-- Class Section Begins -->
        <section id="class" class="class pad-top-115 pad-bottom-115">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">Choose Your Country Now</h6>
                                <h2 class="sectionTitle">Selection <span>Factors</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp animated" data-wow-delay="0.5s">
                    <div class="tabs-header">
                        <div id="filters" class="button-group isogrp" data-option-key="filter">
                            <button class="button is-checked" data-filter=".sun" ><span>Canada</span></button>
                            <button class="button" data-filter=".mon"><span>Australia</span></button>
                            <button class="button" data-filter=".tue"><span>New Zealand</span></button>
                            <button class="button" data-filter=".wed"><span>US</span></button>
                            <button class="button" data-filter=".thu"><span>Germany</span></button>
                            <button class="button" data-filter=".fri"><span>Singapore</span></button>
                            <div class="border-move border"></div>
                        </div>
                    </div>
                    <div id="classbox" class="grid clickable clearfix">
                         <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon wed">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> Work Visa </h6>
                                </div>
                                <img class="fIcons" src="images/money.png"/>
                                <h4> Money </h4>
                                <p> This country provides min wages which ranks in top highest min wages list.</p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> Work Visa </h6>
                                </div>
                                <img class="fIcons" src="images/recession.png"/>
                                <h4> Recession </h4>
                                <p> Rare Chances of affected by recession in coming 5 years. Plan tension free. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon wed thu">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> Study Visa </h6>
                                </div>
                                <img class="fIcons" src="images/education.png"/>
                                <h4> Education </h4>
                                <p> This country owns the worlds best universities and most popular choice for MS/MBA. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon tue thu fri">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> All Visa </h6>
                                </div>
                                <img class="fIcons" src="images/peace.png"/>
                                <h4> Peace </h4>
                                <p> This country lives in peace with no involvement in racism and terrorist attacks. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun wed">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> All Visa </h6>
                                </div>
                                <img class="fIcons" src="images/passport.png"/>
                                <h4> Passport </h4>
                                <p> If you have passport and visa of this country then you can work in atleast 5 countries. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon thu fri">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> All Visa </h6>
                                </div>
                                <img class="fIcons" src="images/visa.png"/>
                                <h4> Visa </h4>
                                <p> Getting Visa from this country is peace of cake. Procees is smooth and fast. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> Tourist Visa </h6>
                                </div>
                                <img class="fIcons" src="images/travel.png"/>
                                <h4> Travel </h4>
                                <p> This country hosts beautiful beaches, which leaves you with asthetic pleasure. </p>
                            </div>
                        </div>
                                                <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sun mon wed">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> All Visa </h6>
                                </div>
                                <img class="fIcons" src="images/language.png"/>
                                <h4> Language </h4>
                                <p> You can easily live and work in this country if you are fluent in english only. </p>
                            </div>
                        </div>
       
                    </div>
                </div>
            </div>
        </section>
        <!-- Class Section Ends -->

        <!-- Gallery Section Begins -->
        <!-- <section id="gallery" class="gallery pad-top-115 pad-bottom-115 parallax">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">FOUR STEPS TO REACH YOUR GOAL</h6>
                                <h2 class="sectionTitle pad-bottom-60">Our <span>Gallery</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp animated" data-wow-delay="0.5s">
                    <div class="gallery-isotope col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="gallery-filters" class="gallery-button-group isogrp" data-option-key="filter">
                            <button class="button is-checked" data-filter="*"><span>All</span></button>
                            <button class="button" data-filter=".fitness"><span>Fitness</span></button>
                            <button class="button" data-filter=".gymn"><span>Gym</span></button>
                            <button class="button" data-filter=".yoga"><span>Yoga</span></button>
                            <button class="button" data-filter=".running"><span>Running</span></button>
                            <button class="button" data-filter=".workout"><span>Workout</span></button>
                        </div>
                        <div id="gallery-box" class="gallery-grid clickable clearfix">
                            <div class="elemnt transition gymn yoga grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/554x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/554x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness yoga grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/938x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/938x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness running grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/554x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/554x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition workout gymn grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/938x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/938x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition running grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/938x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/938x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness yoga grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/554x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/554x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness gymn grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/938x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/938x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition workout running grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/554x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/554x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition workout grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/554x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/554x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition workout yoga grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/938x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/938x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness running grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/554x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/554x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="http://placehold.it/938x320" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="http://placehold.it/938x320">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Gallery Section Ends -->

        <!-- Call To Action Section Begins -->
        <section id="call-to-action" class="call-to-action pad-top-115 pad-bottom-115">
            <div class="actionBg parallax"></div>
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">hurry up</h6>
                                <h2 class="sectionTitle">40% <span>Discount</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <p class="procap"> Start your VISA preparation today with GLIMS. Avail 40% off today</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow animated fadeInUp" data-wow-delay="0.5s">
                        <a href="tel:7837376900"><button type="button" class="fill-btn"><i class="fa fa-phone" aria-hidden="true"></i> +91 78373 76900</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Section Ends -->

        <!-- testimonial Section Begins -->
        <section id="testimonial" class="testimonial pad-top-115 pad-bottom-120">
            <div class="testimonialBg parallax"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="titleText">
                            <h6 class="titleTop">Our Clients</h6>
                            <h2 class="sectionTitle pad-bottom-60">SUCCESS <span>STORIES</span></h2>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <div class="clientSlide">
                                <div id="owl-testimonial" class="testimonial-slider">
                                    <div class="item">
                                        <img src="images/Ram%20Naresh.jpeg" alt="images" />
                                        <div class="spacer left">
                                            <div class="mask"></div>
                                        </div>
                                        <p> I was searching for company who have transparent process and trusted by others, what I got was GLIMS. GLIMS VISA always exceeded my expectations and worked hard to get me Singapore work visa for my computer operator job. Your efforts were remarkable and are much appreciated. </p>
                                        <h4> Ram Naresh - Uttar Pradesh </h4>
                                        <h5> Ram0786naresh@gmail.com </h5>
                                    </div>
                                    <div class="item">
                                        <img src="images/Sadhu%20Ram.jpeg" alt="images" />
                                        <div class="spacer left">
                                            <div class="mask"></div>
                                        </div>
                                        <p>I got reference for GLIMS VISA thorugh online search for Chandigarh best visa agency. But I was not satisfied, then I keep on reading the testimonals and contacting those clients regarding their work. Most of them said one common line 'Expertise and dedication', which became the key reason for choosing GLIMS for Canada work visa. </p>
                                        <h4> Sadhu Ram - Gujrat </h4>
                                        <h5> Dude.sadhuram@gmail.com </h5>
                                    </div>
                                    <div class="item">
                                        <img src="images/Komal.jpeg" alt="images" />
                                        <div class="spacer left">
                                            <div class="mask"></div>
                                        </div>
                                        <p> Excellent service and professional staff-base helped me throught the complex process of Canadian work visa. My Case Manager was Rajan Kumar who work whole heartedly for visa application. One more thing I would like to add that these guys not only help in VISA but also in passport, jobs and journey planning.</p>
                                        <h4> Komal Garg - Haryana </h4>
                                        <h5> Kgarg0410@gmail.com </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial Section Ends -->

        <!-- news Section Begins -->
        <section id="news" class="news products pad-top-115 pad-bottom-110">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">READY TO GO?</h6>
                                <h2 class="sectionTitle">Latest <span>News</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p class="procap"> Feed your brain with our chef's top notch recipes. These recipes will help you gain insight of various country immigration process and related updates. So step forward and read what interest you and then decide which country you should opt for you career or business.</p>
                    </div>
                    <div id="owl-news">
                        <div class="item">
                            <figure> <img src="images/Flag%20of%20Australia.jpg" alt="images" /> </figure>
                            <h4> <a href="/Job-Opportunities-in-Australia-is-Still-Positive.html"> Job Opportunities in Australia is Still Positive</a> </h4>
                            <div class="news-comments">
                                <a href="#"> <i class="fa fa-comment" aria-hidden="true"></i> 2 </a>
                                <a href="#"> <i class="fa fa-eye" aria-hidden="true"></i> 980 </a>
                            </div>
                        </div>
                        <div class="item">
                            <figure> <img src="images/usflag.png" alt="images" /> </figure>
                            <h4> <a href="/US-New-Immigration-System-Benefit-Indian-Skilled-Workers.html"> US New Immigration System - Benefit Indian Skilled Workers</a> </h4>
                            <div class="news-comments">
                                <a href="#"> <i class="fa fa-comment" aria-hidden="true"></i> 2 </a>
                                <a href="#"> <i class="fa fa-eye" aria-hidden="true"></i> 943 </a>
                            </div>
                        </div>
                        <div class="item">
                            <figure> <img src="images/canada1.png" alt="images" /> </figure>
                            <h4> <a href="/Canada-invited-3-times-higher-number-of-People-for-PR-Visa.html"> Canada invited 3 times higher number of People for PR Visa </a> </h4>
                            <div class="news-comments">
                                <a href="#"> <i class="fa fa-comment" aria-hidden="true"></i> 2 </a>
                                <a href="#"> <i class="fa fa-eye" aria-hidden="true"></i> 743 </a>
                            </div>
                        </div>
                        <div class="item">
                            <figure> <img src="images/Flag%20of%20Canada.jpg" alt="images" /> </figure>
                            <h4> <a href="/Canada-keeps-Minimum-Immigration-Target-of-3-Lakh-Next-Year.html"> Canada keeps Minimum Immigration Target of 3 Lakh Next Year </a> </h4>
                            <div class="news-comments">
                                <a href="#"> <i class="fa fa-comment" aria-hidden="true"></i> 2 </a>
                                <a href="#"> <i class="fa fa-eye" aria-hidden="true"></i> 843 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news Section Ends -->

        <!-- footer Section Begins -->
        <section id="footer" class="footer pad-top-120 pad-bottom-120">
            <div class="footerBg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer_logo">
                            <figure></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contact-form btm-brdr">
                            <h4 class="fTitle"> Contact <span>Us</span> </h4>
                            <form class="form-horizontal" role="form" method="post" action="index.php">
                            <div class="form-Box">
                                <input type="text" placeholder="Name*" class="b_effect" id="name" name="name" required/>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <input type="email" placeholder="Email" class="b_effect" id="email" name="email"/>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <input type="number" placeholder="Mobile No*" class="b_effect" id="mobno" name="mobno" required/>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <textarea placeholder="Message*" class="b_effect" rows="4" name="message" required></textarea>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <input id="submit" name="submit" type="submit" value="Send" class="fill-btn" />
                            </div>
                            <div class="form-Box">
                                <h4 class="fTitle"><span><?php echo $result; ?></span></h4>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contact-address btm-brdr">
                            <h4 class="fTitle"> Visit <span>Us</span> </h4>
                            <ul>
                                <li><a href="tel:7837376900"><i class="fa fa-phone" aria-hidden="true"></i> <span>+91 78373 76900</span></a> </li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> <a  target="_blank" href="https://www.google.com/maps?q=Global Business Park, Ambala Chandigarh Expressway, Zirakpur, Punjab, India"><span>SCO: 424, GLOBAL BUSINESS PARK, CHD-AMBALA HIGHWAY, ZIRAKPUR, Punjab - 140603</span></a> </li>
                                <li>
                                    <a href="mailto:office@glimsvisa.com?Subject=Contacting from GLIMS Website"> <i class="fa fa-envelope-o" aria-hidden="true"></i> <span>office@glimsvisa.com</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="subscribe btm-brdr">
                            <h4 class="fTitle"> Subscribe for <span>Updates</span> </h4>

                                <div id="mc_embed_signup">
                                <form action="https://glimsvisa.us16.list-manage.com/subscribe/post?u=da1ea360f3e653267b6c38983&amp;id=fb18f7a6d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_da1ea360f3e653267b6c38983_fb18f7a6d9" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="fill-btn" style="text-align: right !important; background-color: #2495ff; color: #fff;"></div>
                                    </div>
                                </form>
                        </div>
                            
                        <div class="social-icons">
                            <h4 class="fTitle"> Connect Us <span>Socially</span> </h4>
                            <ul>
                                <li>
                                    <a href="https://fb.me/glimsvisa" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/GLIMSVISA" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div></div>
        </section>
        <!-- footer Section Ends -->

        <!-- copyright Section Begins -->
        <section id="copyright" class="copyright">
            <div class="container wow animated fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6> Copyright © 2017. GLIMS VISA - All Rights Reserved. Designed and developed by <a href="https://www.linkedin.com/in/anshyadav/" target="_blank">Ansh Yadav.</a> </h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- copyright Section Ends -->
    </div>
        <!-- Back to top Section Begins -->
        <a href="javascript:void(0);" class="back-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
        <!-- Back to top Section Ends -->
    
    <!-- Jquery Js -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/element.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>

</body>

</html>