<?php
if(isset($_POST['submit'])) {
$name3 = $_POST['name3'];
$email3 = $_POST['email3'];
$message3 = $_POST['message3'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: VB Engineering <sales@arcflashconsultants.in>' . "\r\n";
$To = "sales@arcflashconsultants.in";
$Subject = "Query";
$usermessage = "Thanks for contacting us we will contact you shortly.";
$Msg = "Name = ".$name3. "<br />email = ".$email3. "<br />phone = ".$phone."<br /><br />message = ".$message3."<br /><br />";
//echo $Msg;
mail($To, $Subject, $Msg, $headers);
if(isset($_POST['email']))
header("Location:complete.html");
/* $con=mysqli_connect("localhost","root","rootwdp","SEO");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="INSERT INTO enquiry (name, email,phone,website,comments) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[website]','$_POST[comments]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con); */
}
?>
<html>
<head>
<meta charset="utf-8">
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-52753548-1', 'auto');
ga('send', 'pageview');
</script>


<title>FAQ | VB Engineering | Arc Flash Studies | Arc Flash Analysis</title>
<meta name="description" content="VB Engineering is a technology enabled service provider in India. FAQ on Arc Flash Analysis, Arc Flash Studies, Arc Flash Hazards, Arc Flash PPE and PDC."/>
<meta name="keywords" content="FAQ on Arc Flash audit in India, electrical hazard safety shoes, Arc Flash Consultancy, arc Flash risk assessment, electrical risk assessment, electric safety training, arc Flash study" />
<meta name="author" content="https://plus.google.com/+Vbenggconsultants"/>
<meta name="robots" content="index, follow"/>
<meta http-equiv="Content-Type" content="text/html">
<link rel="canonical" href="https://www.vbengg.com/faq.php"/>
<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link rel="shortcut icon" href="img16/favicon.png">
<meta property="og:title" content=""/>
<link href="https://plus.google.com/+Vbenggconsultants" rel="publisher" />
<!-- Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- Font Awesome CSS -->
<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Fontello CSS -->
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Plugins -->
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
<link href="css/animations.css" rel="stylesheet">
<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
<!-- VBE core CSS file -->
<link href="css/style.css" rel="stylesheet">
<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
<link href="css/skins/blue.css" rel="stylesheet">
<!-- Custom css -->
<link href="css/custom.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
#firstname { 
word-spacing: 30px;
}
</style>

<!------ Microsoft Clarity  Code  Start ---->
<script>  
            (function(c,l,a,r,i,t,y){        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);    })(window, document, "clarity", "script", "ijmjxu70b3");
        </script>  
        <!------ Microsoft Clarity  Code  End ---->


       <!------Bing Code Start----->
       <script>
        (function(w,d,t,r,u)
        {
        var f,n,i;
        w[u]=w[u]||[],f=function()
        {
        var o={ti:"343065890", enableAutoSpaTracking: true};
        o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")
        },
        n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()
        {
        var s=this.readyState;
        s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)
        },
        i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
        })
        (window,document,"script","//bat.bing.com/bat.js","uetq");
        </script>
        <!------Bing Code ENd----->


      
        <!-- Google Analytics Code --> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-P0MZK5E2GE"></script> 
        <script> 
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date()); 
                gtag('config', 'G-P0MZK5E2GE'); 
        </script>
        <!-- Google Analytics Code End --> 

        <!-- Event snippet for Oct3rd thank you form conversion page --> 
        <script> gtag('event', 'conversion', {'send_to': 'AW-968385961/un7cCNb0_ecYEKnL4c0D'}); </script>


        
        <!-- Google Tag Manager start-->       

        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NDRGZJV');</script>

        <!-- Google Tag Manager end --> 


    
</head>
<!-- <div class="floating-form" id="contact_form">
         
</div> -->


<div class="header-top">
<div class="container">
<div class="row">
<div class="col-xs-2 col-sm-6">
<!-- header-top-first start -->
<!-- ================ -->
<div class="header-top-first clearfix">
<ul class="social-links clearfix hidden-xs">
    <li class="facebook">
        <a target="_blank" href="https://www.facebook.com/pages/VB-Engineering/1486847301558681">
            <i class="fa fa-facebook"></i>
        </a>
    </li>

    <!-- Twitter replaced with X icon -->
    <li class="twitter">
        <a target="_blank" href="https://twitter.com/VBengineering">
            <img src="img16/icons/x.png" class="x-icon" alt="X">
        </a>
    </li>

    <li class="googleplus">
        <a target="_blank" href="https://plus.google.com/+Vbenggconsultants">
            <i class="fa fa-google-plus"></i>
        </a>
    </li>

    <li class="pinterest">
        <a target="_blank" href="https://www.pinterest.com/vbengineering/">
            <i class="fa fa-pinterest"></i>
        </a>
    </li>

    <li class="linkedin">
        <a target="_blank" href="https://www.linkedin.com/in/vbengineering">
            <i class="fa fa-linkedin"></i>
        </a>
    </li>

    <li class="youtube">
        <a target="_blank" href="http://www.youtube.com">
            <i class="fa fa-youtube-play"></i>
        </a>
    </li>
</ul>
<style>
       .social-links .x-icon {
    width: 18px;
    height: 18px;
    vertical-align: middle;
    display: inline-block;

    /* makes the logo grey */
    filter: grayscale(100%) brightness(30%);
    opacity: 0.8;
}
</style>
<div class="social-links hidden-lg hidden-md hidden-sm">
<div class="btn-group dropdown">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
<ul class="dropdown-menu dropdown-animation">
<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
</ul>
</div>
</div></div>
</div></div>
<header class="header fixed clearfix">
<div>
<div>
<div class="col-md-3">
<!-- header-left start -->
<!-- ================ -->
<div class="header-left clearfix">
<!-- logo -->
<div class="logo">
                            <a href="index.html" class="active"><img id="logo" src="img16/vblogo2014.png" alt="vb-engineering" title="detailed-engineering-consultants"   style="height: 84px;"  ></a> 
                            <!-- <a href="index.html" class="active"><img id="logo" src="img16/logo-test.png" alt="vb-engineering" title="detailed-engineering-consultants"  style="height: 84px;"  ></a> -->
                        </div>
<!-- name-and-slogan -->
<div class="site-slogan"> 
</div>
</div>
<!-- header-left end -->
</div>
<div class="col-md-9">
<!-- header-right start -->
<!-- ================ -->
<div class="header-right clearfix">
<!-- main-navigation start -->
<!-- ================ -->
<div class="main-navigation animated">
<!-- navbar start -->
<!-- ================ -->
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<!-- Toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="">
<a href="index.html">Home</a>
</li>
<li class="">
<a href="about-vb-engineering.html">About</a>
</li>													
<!-- mega-menu start -->
<li class="dropdown active mega-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
<ul class="dropdown-menu">
<li>
<div class="row">
<div class="col-lg-4 col-md-3 hidden-sm">
<h4>VB Engineering India Pvt. Ltd.</h4>
<p>We are always ready to serve you</p>
<img src="img16/vbe-services.jpg" alt="Detailed Engineering Consultants" title="Arc Flash Consultants">
</div>
<div class="col-lg-8 col-md-9">
<h4 id="firstname">Electrical &nbsp;&nbsp;&nbsp;&nbsp;Mechanical &nbsp;&nbsp; Solar</h4>
<div class="row">
<div class="col-sm-4">
<div class="divider"></div>
<ul class="menu">
<li><a href="cad-drafting-services.html"><i class="icon-right-open"></i>SLD Preparation</a></li>
<li><a href="relay-coordination.html"><i class="icon-right-open"></i>Relay Coordination</a></li>
<li><a href="arc-flash-risk-assessment.html"><i class="icon-right-open"></i>Arc Flash Analysis</a></li>
<li><a href="harmonic-analysis.html"><i class="icon-right-open"></i>Harmonic Analysis</a></li>
<li><a href="engineering-services.html"><i class=""></i>Read More</a></li>
</ul>
</div>
<div class="col-sm-4">
<div class="divider"></div>
<ul class="menu">
<li><a href="3d-cad-drafting-services.html"><i class="icon-right-open"></i>3d Drawing Preparation</a></li>
<li><a href="plant-layout-design.html"><i class="icon-right-open"></i>Optimal Floor Planning</a></li>
<li><a href="piping-engineering.html"><i class="icon-right-open"></i>Piping Design</a></li>
<li><a href="ir-thermography.html"><i class="icon-right-open"></i>IR Thermography</a></li>
<li><a href="engineering-services.html"><i class=""></i>Read More</a></li>
</ul>
</div>
<div class="col-sm-4">
<div class="divider"></div>
<ul class="menu">
<li><a href="solar-power-plant-designing-services.html"><i class="icon-right-open"></i>Power Plant Designing</a></li>
<li><a href="solar-power-plant-designing-services.html"><i class="icon-right-open"></i>DPR Preparation</a></li>
<li><a href="solar-power-plant-designing-services.html"><i class="icon-right-open"></i>Turnkey Solutions</a></li>
<li><a href="solar-power-plant-designing-services.html"><i class="icon-right-open"></i>Cost Benefit Analysis</a></li>
<li><a href="engineering-services.html"><i class=""></i>Read More</a></li>
</ul>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<!-- mega-menu end -->
<!-- mega-menu start -->
<li class="dropdown mega-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Support</a>
<ul class="dropdown-menu">
<li>
<div class="row">
<div class="col-sm-8 col-md-8">
<h4>We are Always Happy to Support You</h4>
<p>VB Engineering India Pvt. Ltd. is located in Hyderabad (India).</p>
<img src="img16/vb-engineering-support.png" alt="Consulting Engineers" title="Detailed Engineering Consultants">
</div>
<div class="col-sm-4 col-md-4">
<h4>Support</h4>
<div class="row">
<div class="col-sm-10">
<div class="divider"></div>
<ul class="menu">
<li><a href="electrical-engineering-services.html"><i class="icon-right-open"></i>Electrical</a></li>
<li><a href="mechanical-engineering-services.html"><i class="icon-right-open"></i>Mechanical</a></li>
<li><a href="solar-power-consultants.html"><i class="icon-right-open"></i>Solar &amp; PV System</a></li>
<li><a href="http://www.vbtrainings.com/" target="_blank"><i class="icon-right-open"></i>Academy</a></li>
<li><a href="portfolio-products.html"><i class="icon-right-open"></i>Products</a></li>
<li><a href="vb-research.html"><i class="icon-right-open"></i>Research</a></li>
<li><a href="vb-knowledge-base.html"><i class="icon-right-open"></i>White Papers</a></li>
<li><a href="http://www.vbengg.com/blog"><i class="icon-right-open"></i>BLOG</a></li>
<li><a href="safety-faq.html"><i class="icon-right-open"></i>FAQ</a></li>
<li><a href="sitemap.xml"><i class="icon-right-open"></i>Sitemap</a></li>
<li><a href="Contact"><i class="icon-right-open"></i>Contact Us</a></li>
</ul>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<!-- mega-menu end -->
<li class="">
<a href="portfolio-products.html" class="" data-toggle="">Portfolio</a>
</li>
<li class="">
<a href="Contact" class="" data-toggle="">Contact Us</a>
</li>
<li class="">
<a href="http://www.vbengg.com/blog" class="" data-toggle="">Blog</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- navbar end -->
</div>
<!-- main-navigation end -->
</div>
<!-- header-right end -->
</div>
</div>
</div>
</header>
<h1>FAQ</h1>
<!--<h2>Our Location</h2>-->
<!-- Map -->
<div class="page-intro">
<div class="container">
<div class="row">
<div class="col-md-12">
<ol class="breadcrumb">
<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
<li class="active">FAQ</li>
</ol>
</div>
</div>
</div>
</div>
<!-- page-intro end -->
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
<div class="container">
<div class="row">
<!-- sidebar start -->
<aside class="col-md-3">
<div class="sidebar">
<div class="block clearfix">
<h3 class="title">Submit Your Question</h3>
<div class="separator"></div>
<form  form name="" method="post" action="">
<div class="form-group has-feedback">
<label for="name3">Name</label>
<input type="text" class="form-control" id="name3" placeholder="Enter your name" name="name3">
<i class="fa fa-user form-control-feedback"></i>
</div>
<div class="form-group has-feedback">
<label for="email3">Email address</label>
<input type="email" class="form-control" id="email3" placeholder="Enter your email" name="email3">
<i class="fa fa-envelope form-control-feedback"></i>
</div>
<div class="form-group has-feedback">
<label for="message3">Question</label>
<textarea class="form-control" rows="4" id="message3" placeholder="" name="message3"></textarea>
<i class="fa fa-pencil form-control-feedback"></i>
</div><a href="#"><input type="submit" value="Submit" name="submit" class="btn btn-lg btn-default"  style="width:180px; height:60px;  font-family:Rockwell; font-size:20px;"></a> 
</form>
</div>
</div>
</aside>
<!-- sidebar end -->
<!-- main start -->
<!-- ================ -->
<div class="main col-md-9">
<!-- page-title start -->
<!-- ================ -->
<h1 class="page-title">Frequently Asked Questions</h1>
<!-- page-title end -->
<!-- tabs start -->
<div class="tabs-style-2">
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa  fa-life-saver pr-10"></i>FAQ PAGE-1</a></li>
<li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>FAQ PAGE-2</a></li>
<li><a href="#tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-10"></i>FAQ PAGE-3</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane fade in active" id="tab1">
<!-- accordion start -->
<div class="panel-group" id="accordion-faq">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 1.	What is Arc Flash hazard analysis?
</a>
</h4>
</div>
<div id="collapseOne" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash hazard analysis gives the amount of energy that release when an Arc Flash incident occurs. With this Flash protection boundary can be defined and also to determine the level of Arc-rated personal protective equipment required when employees cross the boundary while they work on or near exposed live parts. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseTwo" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 2.	What are Arc Flash hazard labels?
</a>
</h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash Labels provides the information of hazardous level of the equipment or the system. It also gives the information to the workmen about the boundary levels to operate when in live condition. These labels are designed by considering the NFPA 70E and OSHA standards.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseThree" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>3.How to design NFPA 70e labels?
</a>
</h4>
</div>
<div id="collapseThree" class="panel-collapse collapse">
<div class="panel-body">
A.	NFPA 70e labels are designed based on the knowledge of workmen and also the levels of Arc Flash. Mainly these labels should contain the information of level of incident energy, different boundaries and the PPE to be used based on the category.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseFour" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 4.	What are Arc Flash electrical safety equipment?
</a>
</h4>
</div>
<div id="collapseFour" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash electrical safety equipment is commonly known as Arc Flash Personal Protective Equipment (PPE) which safeguards the workmen while working with the panels in live operating condition. These are categorized based on the incident energy which releases at the time of Arc fault.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseFive" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 5.	How to use Arc Flash safety glasses?
</a>
</h4>
</div>
<div id="collapseFive" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash safety glasses are different from the normal safety glasses which are used by the workmen. These should be used while working on the live energized equipment. These are also should be used based on the category which gives the protection when any Flash occur.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseSix" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>6.Why do we use Arc Flash label printer?
</a>
</h4>
</div>
<div id="collapseSix" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash label printer is different from normally used printers. A specific format and standard sizes are used with the Arc Flash label printer. This printer designed to print the Arc Flash label stickers from the standards of NFPA and OSHA which are used to paste at the every individual feeder.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseSeven" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 7.	What does Nfpa 70e say about electrical safety?
</a>
</h4>
</div>
<div id="collapseSeven" class="panel-collapse collapse">
<div class="panel-body">
A.	NFPA 70E purely says about electrical safety related work practices of the employees during the period of maintenance, operation, installation, testing and calibration and other related electrical work practices which expose the workmen to the electrical hazards. The work practices may be at the workshops, garages, buildings, warehouses.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseEight" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 8.What kind of Arc Flash hearing protection is required for dangerous category?
</a>
</h4>
</div>
<div id="collapseEight" class="panel-collapse collapse">
<div class="panel-body">
A.NFPA 70E recommends the workmen would not to work on equipment in live condition when they are in dangerous category. So no specific hearing protection is provided for dangerous category. From the revision of NFPA 2012 normally used hearing protection  is mandated for all categories.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseNine" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>9.What is Arc Flash clothing and how to determine the Arc Flash PPE?
</a>
</h4>
</div>
<div id="collapseNine" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash Clothing is a safeguard for the workmen who works at the equipment in live condition. This is also known as Personal Protective Equipment (PPE). Th Arc Flash PPE can be determined easily because it looks completely different from general PPE used by the workmen in the industries. This PPE should be used while operating with the breakers and at the tie of maintenance of the breaker.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseTen" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>10.Why do we use Arc Flash study software for Arc Flash hazard calculations?
</a>
</h4>
</div>
<div id="collapseTen" class="panel-collapse collapse">
<div class="panel-body">
A.Arc Flash hazard calculations are linked with the logarithmic formulas and other equations and also related with the terms, so it is difficult to calculate with these formulas for individual feeders, it is time taken process. To reduce this process software’s are used.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapseEleven" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>11.Why should I use electrical PPE?
</a>
</h4>
</div>
<div id="collapseEleven" class="panel-collapse collapse">
<div class="panel-body">
A.The PPE plays a major role in protecting the workmen from shocks. PPE includes such as safety helmets, safety shoes, gloves, high visibility clothing, eye protection…When you are using PPE on working stations that indicates you are in safe side.
</div>
</div>
</div>
</div>
<!-- accordion end -->
</div>
<div class="tab-pane fade" id="tab2">
<!-- accordion start -->
<div class="panel-group" id="accordion-faq-2">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseOne-2"  class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 12.What is Arc Flash category table?
</a>
</h4>
</div>
<div id="collapseOne-2" class="panel-collapse collapse">
<div class="panel-body">
A.Based on the incident energy levels generated at the electrical equipment NFPA defined in category table. This category table provides the information of incident energy range and respective category.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseTwo-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>13.Can I get Arc Flash safety training?
</a>
</h4>
</div>
<div id="collapseTwo-2" class="panel-collapse collapse">
<div class="panel-body">
A.VB Engineering provides the Arc Flash safety training to the workmen about the Arc Flash hazard and also the safety measures to be followed at the time of maintenance and operation of breakers. The general training is not related with the Arc Flash study.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseThree-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>14.How to read electrical warning labels?
</a>
</h4>
</div>
<div id="collapseThree-2" class="panel-collapse collapse">
<div class="panel-body">
A.Electrical warning labels are generally provided at all the areas of electrical equipment. These provide only the information of risk at the particular location. These are denoted by the symbols of shock and danger (D). If the shock symbol is mentioned it means don’t touch the equipment there is a possibility of shock, similarly if Danger (D) is mentioned don’t touch the equipment and don’t move forward to this location.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseFour-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 15.How to read Arc Flash warning labels?
</a>
</h4>
</div>
<div id="collapseFour-2" class="panel-collapse collapse">
<div class="panel-body">
A.Arc Flash labels are defined such that a layman working at the equipment can understand the label. So, labels are designed in particular format. They are:
a) Category of the equipment is mentioned on the label.
b) Depending on the category label color changes.
c) Flash protection boundary is mentioned on the label.
d) Incident energy of the equipment is represented on the label.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseFive-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 16.How to define safety electric work procedures?
</a>
</h4>
</div>
<div id="collapseFive-2" class="panel-collapse collapse">
<div class="panel-body">
A.From the electrical based trainings the workmen and laymen gets knowledge about the safety electric work procedures. General electric work procedures are wearing safety shoes, safety gloves, holding the tools carefully while working, working under the observation of maintenance people, using hearing protection at required locations. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseSix-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>17.What are the causes of Arc Flash?						
</a>
</h4>
</div>
<div id="collapseSix-2" class="panel-collapse collapse">
<div class="panel-body">
A.	When current flows through an air gap between two conductors then Arc Flash happens. Arc Flash can also can caused by breaks are gaps in the insulations, improper installation, corrosion or other impurities on the surface of the conductor. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseSeven-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>18.What are Nfpa 70e Arc Flash requirements?
</a>
</h4>
</div>
<div id="collapseSeven-2" class="panel-collapse collapse">
<div class="panel-body">
A.The requirements of the NEFA-70E for Arc Flash boundary is personal protective equipment access to reference tables, personal protective equipment matrix, equipment selection electrical assessments, signage, proper storage and training. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseEight-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 19.	What is Arc fault breaker and how to use it?
</a>
</h4>
</div>
<div id="collapseEight-2" class="panel-collapse collapse">
<div class="panel-body">
A.Arc fault breaker is specially designed breaker used to get disconnecting the power by detecting the electrical Arc at the time of fault prevents from the fire accidents and Arc Flash accidents. Before going to use this devices initially we have to identify the specific structure and specific destinations where this breaker is really applicable.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseNine-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>20.What are Arc Flash boundaries and how to determine them?
</a>
</h4>
</div>
<div id="collapseNine-2" class="panel-collapse collapse">
<div class="panel-body">
A.Arc Flash boundaries are three types they are limited, restricted, prohibited boundaries.  These boundaries are determined by Categories of incident energy across the protective devices.  
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseTen-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>21.How to design Arc Flash labels?
</a>
</h4>
</div>
<div id="collapseTen-2" class="panel-collapse collapse">
<div class="panel-body">
A.The word danger is appears in white letters on red background, it indicates the most dangers threats. The word warning is appears in black letters on an orange background. And Arc Flash warning labels carry additional information beyond what is required by law.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapseEleven-2" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>22.How are Arc Flash relays operated?
</a>
</h4>
</div>
<div id="collapseEleven-2" class="panel-collapse collapse">
<div class="panel-body">
A.Arc Flash relays are one of the best solutions to prevent Arc Flash hazards. This Arc Flash relay operates with the use of light sensors. A sensor is placed in the equipment’s chamber. This sensor senses the spark or light and after certain level of light it automatically trips the relay so that Arc Flash can be reduced.
</div>
</div>
</div>
</div>
<!-- accordion end -->
</div>
<div class="tab-pane fade" id="tab3">
<!-- accordion start -->
<div class="panel-group" id="accordion-faq-3">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseOne-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>23.How to prevent Arc Flash accidents?
</a>
</h4>
</div>
<div id="collapseOne-3" class="panel-collapse collapse">
<div class="panel-body">
A.People must be aware about the Arc Flash accidents why it is happening. And people wearing proper PPE in working stations. The people fallows the cautions and rules of NFPA. Then preventing the Arc Flash accidents.       
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseTwo-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>24.How to mitigate Arc Flash hazard analysis?							  </a>
</h4>
</div>
<div id="collapseTwo-3" class="panel-collapse collapse">
<div class="panel-body">
A.Mitigation of Arc Flash hazard can be achieved by following proper methods like mandating the work permits for the persons working on the equipment, wearing proper PPE while working on the equipment, allowing qualified and trained persons only to the equipment, using electrical Arc detecting equipment, performing relay coordination etc. By following these procedures electrical Arc hazards can be mitigated or reduced.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseThree-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>25.What are Arc rated shirts?
</a>
</h4>
</div>
<div id="collapseThree-3" class="panel-collapse collapse">
<div class="panel-body">
A.The rated shirts are designed to provide to withstand from heat and flame.to minimize the total burn injury. Our rated shirts and sweat shirts also help to provide the wearer with extra secondary protection to help escape possibility secondary explosion in work space. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseFour-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>26.Where can I get full information about Arc Flash hazards and its mitigation?
</a>
</h4>
</div>
<div id="collapseFour-3" class="panel-collapse collapse">
<div class="panel-body">
A.From the standards of NFPA we can get the information about the Arc Flash hazards and its mitigation and for the calculation formulas we have to refer the  IEEE 1584 standards and for the codes , shortcuts ,abbreviations simply we have to refer the NEC standard books.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseFive-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i> 27.	What is ieee1584?
</a>
</h4>
</div>
<div id="collapseFive-3" class="panel-collapse collapse">
<div class="panel-body">
A.	IEEE1584 is a standard which came from the Institute of electrical and electronic engineers. This IEEE1584 provides us different ways and methods for measuring and calculating incident energy whenever Arc Flash occurs. Its main aim is to protect people from Arc Flash hazards by defining guidelines. It also defines safe working distance. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseSix-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>28.How are OSHA fines for Arc Flash accidents?
</a>
</h4>
</div>
<div id="collapseSix-3" class="panel-collapse collapse">
<div class="panel-body">
A.Occupational Health Safety Administration (OSHA) deals with the safety of the employee mainly. As per OSHA employer must provide safe environment to the employee. In case of any violation of this or any accident due to unsafe work areas, OSHA imposes fines to the companies as much as 5,00,000 dollars. OSHA proposes companies to follow NFPA70E guidelines for safety. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseSeven-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>29.What are Arc Flash suits and how to use them?
</a>
</h4>
</div>
<div id="collapseSeven-3" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash suits are specially designed Arc rated clothing which safeguards the workmen from the Arc Flash hazard. These are to be used based on the category levels referred from the Arc Flash labels. This Arc Flash suit is a complete body cover.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseEight-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>31.What is personnel protective equipment?
</a>
</h4>
</div>
<div id="collapseEight-3" class="panel-collapse collapse">
<div class="panel-body">
A.	Personnel protective equipment means clothes, helmets, goggles or other equipment designed to protect body from damage or injury or even death. These personnel protective equipment are designed to cope with hazards like electrical, chemical, heat etc. These PPE are must while working in dangerous conditions. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseNine-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>32.What is restricted approach?
</a>
</h4>
</div>
<div id="collapseNine-3" class="panel-collapse collapse">
<div class="panel-body">
A.Restricted approach boundary in to which qualified personal only allowed who undergone respective training on this and has to wear proper PPE. Due to its proximity to shock, personal should us shock protection techniques and equipment. Also, personal must have the approved plan for the work that is going to perform. 
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapseTen-3" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>33.How to determine Arc Flash boundary?
</a>
</h4>
</div>
<div id="collapseTen-3" class="panel-collapse collapse">
<div class="panel-body">
A.	Arc Flash boundary is determined by the expansion or explosion of Arc when a fault of short circuit occurs. These are calculated by the Arc Flash study and from the Arc Flash labels pasted at the panels the workmen and the laymen can find the distance while moving around the electrical equipment.
</div>
</div>
</div>
</div>
<!-- accordion end -->
</div>
<div class="tab-pane fade" id="tab4">
<!-- accordion start -->
<div class="panel-group" id="accordion-faq-4">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseOne-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>34.What is Flash protection boundary and prohibited approach?
</a>
</h4>
</div>
<div id="collapseOne-4" class="panel-collapse collapse">
<div class="panel-body">
A.Flash protection boundary is the longest distant boundary from the energy source. If an Arc Flash occurs, a person at this boundary can receive second degree burn. A prohibited approach boundary in to which only qualified professionals can enter into it with respective PPE must.          
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseTwo-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>35.Where can I get Arc Flash certification?							  </a>
</h4>
</div>
<div id="collapseTwo-4" class="panel-collapse collapse">
<div class="panel-body">
A.Arc Flash certifications is provided to the workmen and laymen whose gains the knowledge about the Arc Flash hazards and the safety measures to be followed. These certifications are provided by the Arc Flash trainers at the time of Arc Flash training held at the facility and also a special courses is available for normal people. These certificates are no way related to NFPA and OSHA only standards of NFPA and OSHA are discussed.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseThree-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>36.Is Arc Flash analysis a scientific approach?
</a>
</h4>
</div>
<div id="collapseThree-4" class="panel-collapse collapse">
<div class="panel-body">
A.	Yes it is a scientific approach because for conducting the Arc Flash analysis no hand calculations are performed only the standard formulas are considered for calculations. While the study no practical visualization is not shown at the electrical equipment.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseFive-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>37.What are Arc Flash warning signs?
</a>
</h4>
</div>
<div id="collapseFive-4" class="panel-collapse collapse">
<div class="panel-body">
A.Arc Flash warning signs are used to identify the categories for the particular equipment. For every category a specially designed Arc Flash suits are to be wear while maintenance. The signs are generally denoted as 0,1,2,3,4 and D. D is for the Dangerous category and the other are category-0,1,2,3,4.  
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseSix-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>38.What is an Arc fault?
</a>
</h4>
</div>
<div id="collapseSix-4" class="panel-collapse collapse">
<div class="panel-body">
A.An Arc fault is defined as the high power discharge of current or electricity between two or more conductors. This fault can generate heat which can break down wire’s insulation   and possibly can trigger fire. This Arc fault can cause huge damage to the equipment and even injure/kill people.  
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseSeven-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>39.What kind of PPE should be used for Arc Flash category no 4?
</a>
</h4>
</div>
<div id="collapseSeven-4" class="panel-collapse collapse">
<div class="panel-body">
A.Following PPE should be used for category no 4: 
a)	Cotton Underwear, 
b)	Short sleeved T shirt,
c)	FR long sleeved shirt & long pants,
d)	FR coverall,
e)	Arc Flash suit hood,
f)	Arc Flash suit jacket,
g)	Arc Flash suit pants,
h)	Hard Hat, 
i)	Safety glasses or goggles, 
j)	Hearing Protection,
k)	Leather gloves and shoes as needed.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseEight-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>40.What kind of PPE should be used for Arc Flash category no 3?
</a>
</h4>
</div>
<div id="collapseEight-4" class="panel-collapse collapse">
<div class="panel-body">
A.Following PPE should be used for category no 3:
a)	Cotton Underwear, 
b)	Short sleeved T shirt,
c)	FR long sleeved shirt & long pants,
d)	FR coverall,
e)	Arc Flash suit hood,
f)	Hard Hat, 
g)	Safety glasses or goggles, 
h)	Hearing Protection,
i)	Leather gloves and shoes as needed.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseNine-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>41.What kind of PPE should be used for Arc Flash category no 2?
</a>
</h4>
</div>
<div id="collapseNine-4" class="panel-collapse collapse">
<div class="panel-body">
A.Following PPE should be used for category no 2: 
a)	Cotton Underwear, 
b)	Short sleeved T shirt,
c)	FR long sleeved shirt & pants or FR covered instead, 
d)	Arc rated wrap around face shield,
e)	Hard Hat, 
f)	Safety glasses or goggles, 
g)	Hearing Protection,
h)	Leather gloves and shoes as needed.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseTen-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>42.What kind of PPE should be used for Arc Flash category no 1?
</a>
</h4>
</div>
<div id="collapseTen-4" class="panel-collapse collapse">
<div class="panel-body">
A.Following PPE should be used for category no 1:
a)	Cotton Underwear, 
b)	FR long sleeved shirt & pants or FR covered instead, 
c)	Hard Hat, 
d)	Safety glasses or goggles, 
e)	Leather gloves and shoes as needed.
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-4" href="#collapseFour-4" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>43.What kind of PPE should be used for dangerous category?
</a>
</h4>
</div>
<div id="collapseFour-4" class="panel-collapse collapse">
<div class="panel-body">
A.As per NFPA 70E safety guidelines, there is no PPE for dangerous category. Because, dangerous category means the incident energy at the devise is more than 40 cal/cm^2. So, the devise is dangerous to work even with PPE. In order to work on those devices, it is recommended that power supply to be cut off. 
</div>
</div>
</div>
</div>
</div>
<!-- accordion end -->
</div>
</div>
<div class="tab-pane fade" id="tab5">
<!-- accordion start -->
<div class="panel-group" id="accordion-faq-5">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseOne-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>44.What is the difference between bolted short circuit and Arcing short circuit?
</a>
</h4>
</div>
<div id="collapseOne-5" class="panel-collapse collapse">
<div class="panel-body">
A.Both types of short circuit currents are dangerous and cause Arc Flash accidents. But, both are different in terms of their characteristics. Bolted short circuit occurs when two live conductors get into contact. Whereas Arcing short circuit occurs when there exist Arc between two live conductors. This Arc is formed due to many reasons like poor maintenance, dust, loose connections etc., Between these two, Arcing short circuit is much dangerous than bolted short circuit.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseTwo-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>45.Why more fire accidents happen because of Arc Flash hazards?							                                                       </a>
</h4>
</div>
<div id="collapseTwo-5" class="panel-collapse collapse">
<div class="panel-body">
A.When Arc Flash hazards happens high amount of incident energy is generated due to the delay in fault interruptions. If the more time taken to interrupt the fault the energy releases is high. The incident energy is a form of fire. To reduce these accidents Arc Flash relay are used which detects the light and trips the device faster.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseThree-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>46.What is short circuit and how to interrupt it?
</a>
</h4>
</div>
<div id="collapseThree-5" class="panel-collapse collapse">
<div class="panel-body">
A.When a direct contact or indirect contact between two live conductors is developed it leads a short circuit, this short circuit produces a fault in the system which creates a serious disturbances in the facility. The time taken to interrupt the fault happens due to short circuit produces a Flash over at the feeders. The early fault clearance or interruption creates less disturbances in the system.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseFive-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>47.What is relay coordination and how to achieve it for successful short circuit interruption?
</a>
</h4>
</div>
<div id="collapseFive-5" class="panel-collapse collapse">
<div class="panel-body">
A.Relay coordination study is conducted between the protective devices to check whether the facility related devices are in coordination or not. This study is done with the short circuit interruption values. After the study recommendations are provided if required. When the system is in coordination automatically the short circuit interruption is in normal condition only.  
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseSix-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>48.Is Arc Flash analysis practiced in India?
</a>
</h4>
</div>
<div id="collapseSix-5" class="panel-collapse collapse">
<div class="panel-body">
A.The expansion of MNC based manufacturing plants are increased and they follow the standards of NFPA and OSHA made the culture of the plant safety studies. Arc Flash analysis is one of the safety study which mainly recommends the suggestions the facility from accident free zone to the workmen from electrical accidents.  
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseSeven-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>49.What is incident energy?
</a>
</h4>
</div>
<div id="collapseSeven-4" class="panel-collapse collapse">
<div class="panel-body">
A.Incident energy is the energy impressed on a surface at a working distance, D from the Arc source. The unit by which Incident energy is represented is cal/cm^2. The working distance, D is the distance from where worker stands to the fault location. Incident energy is the function of system voltage, available SC current, Arc current and time required for protective device to open.
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapseEight-5" class="collapsed">
<i class="fa fa-question-circle pr-10"></i>50.How to reduce incident energy?
</a>
</h4>
</div>
<div id="collapseEight-5" class="panel-collapse collapse">
<div class="panel-body">
A.Incident energy is calculated from device tripping time, the time taken by the device when a fault occurs for a particular short circuit value. If we decrease the tripping time which means a breaker opening time incident energy can be reduced. This reduction is recommended only after performing relay coordination study only.
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- tabs end -->
</div>
<!-- main end -->
</div>
</div>
</section>
<!-- main-container end -->
<!-- section start -->
<!-- ================ -->
<div class="section gray-bg text-muted footer-top clearfix">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="owl-carousel clients">
<div class="client">
<a href="#"><img src="img16/clients/vb-engineering-client1.png" alt="vbe-client" title="detailed-engineering-services"></a>
</div>
<div class="client">
<a href="#"><img src="img16/clients/vb-engineering-client2.png" alt="vbe-client" title="detailed-engineering-services"></a>
</div>
<div class="client">
<a href="#"><img src="img16/clients/vb-engineering-client3.png" alt="vbe-client" title="detailed-engineering-services"></a>
</div>
<div class="client">
<a href="#"><img src="img16/clients/vb-engineering-client4.png" alt="vbe-client" title="detailed-engineering-services"></a>
</div>
</div>
</div>
<div class="col-md-6">
<blockquote class="inline">
<p align="justify" class="margin-clear">The post sales service and support provided by M/s VB Engineering was really supportive showcasing their commitment and professionalism towards a client.</p>	
<footer><cite title="Source Title">-FMC</cite></footer>
</blockquote>
</div>
</div>
</div>
</div>
<!-- section end -->
<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
<!-- ================ -->
<footer id="footer">
<!-- .footer start -->
<!-- ================ -->
<div class="footer">
<div class="container">
<div class="row">
<div class="col-md-5">
<div class="footer-content">
<div class="logo-footer"><img id="logo-footer" src="img16/VB-Engineering-logo.png" hight="60" width="60" alt="vb-engineering" title="detailed-engineering-consultant"><h4>Vijaya Bhanu Engineering India Pvt. Ltd.</h4></div>
<ul class="list-icons">
<li><i class="fa fa-map-marker pr-10"></i>Flat No: G1, Plot No: 123, Balaji Residency, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Balaji Nagar, Behind Heritage Stores, Nizampet Village, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rangareddy District, Hyderabad (India) - 500090.</li>
<li><i class="fa fa-phone pr-10"></i>+91 40 40064644</li>
<li><i class="fa fa-envelope-o pr-10"></i> sales@vbengg.com</li>
</ul>
<ul class="social-links circle">
    <li class="facebook">
        <a target="_blank" href="https://www.facebook.com/pages/VB-Engineering/1486847301558681">
            <i class="fa fa-facebook"></i>
        </a>
    </li>

    <!-- Twitter replaced with X -->
    <li class="twitter">
        <a target="_blank" href="https://twitter.com/VBengineering">
            <img src="img16/icons/x.png" class="x-icon" alt="X">
        </a>
    </li>

    <li class="googleplus">
        <a target="_blank" href="https://plus.google.com/+Vbenggconsultants">
            <i class="fa fa-google-plus"></i>
        </a>
    </li>

    <li class="pinterest">
        <a target="_blank" href="https://www.pinterest.com/vbengineering/">
            <i class="fa fa-pinterest"></i>
        </a>
    </li>

    <li class="linkedin">
        <a target="_blank" href="https://www.linkedin.com/in/vbengineering">
            <i class="fa fa-linkedin"></i>
        </a>
    </li>

    <li class="youtube">
        <a target="_blank" href="https://www.youtube.com/channel/UCNFOmB0hIW5EkXx8NgiKkfw">
            <i class="fa fa-youtube-play"></i>
        </a>
    </li>
</ul>
<style>
        .social-links.circle .x-icon {
    width: 16px;
    height: 16px;
    display: inline-block;
    vertical-align: middle;

    /* Grey color */
    filter: grayscale(100%) brightness(65%);
    opacity: 0.85;
}
</style>
</div>
</div>
<div class="col-sm-4 col-md-3 col-lg-3">
<div class="footer-content">
<h4>Photo Gallery</h4>
<div class="gallery row">
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery1.jpg" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery2.jpg" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery3.jpg" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery4.jpg" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery5.jpg" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery6.png" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery7.png" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery8.JPG" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery9.JPG" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery10.JPG" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery11.jpg" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<div class="gallery-item col-xs-4">
<div class="overlay-container">
<img src="img16/clients/vbe-gallery12.png" alt="detailed-engineering-consultants" title="vb-engineering">
</div>
</div>
<a href="vb-sitemap.html" class="link"><span>Sitemap</span></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-2 col-lg-offset-1">
<div class="footer-content">
<h4>Navigation Menu</h4>
<nav>
<ul class="nav nav-pills nav-stacked">
<li><a href="index.html">Home</a></li>
<li><a href="vb-terms-of-service.html">Terms of Service</a></li>
<li><a href="vb-privacy-policy.html">Privacy Policy</a></li>
<li><a href="about-vb-engineering.html">About Us</a></li>
<li><a href="vb-media-center.html">Media Center</a></li>
<li><a href="vb-disclaimers.html">Disclaimer</a></li>
<li><a href="Blog" target="_blank">Blog</a></li>
<li><a href="vb-learning-center.html">Learning Center</a></li>
<li><a href="vb-careers.html">Careers</a></li>
<li><a href="Contact">Contact Us</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- .footer end -->
<!-- .subfooter start -->
<!-- ================ -->
<div class="subfooter">
<div class="container">
<div class="row">
<div class="col-md-4">
<!-- Toggle get grouped for better mobile display -->  
<!---<p>Developed by: <a href="http://www.thedenkenlabs.com/" target="_blank"><b>The Denken Labs</b></a></p>--->
</div>
<div class="col-md-8">
<p>Copyright © 2016 <b><a href="index.html">VB Engineering India (P) Ltd. </b></a>| All Rights Reserved.</p>
</div>
</div>
</div>
</div>
<!-- .subfooter end -->
</footer>
<!-- footer end -->
<!-- footer end -->
</div>
<!-- page-wrapper end -->
<!-- JavaScript files placed at the end of the document so the pages load faster
================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="plugins/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="plugins/modernizr.js"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="plugins/jquery.appear.js"></script>
<!-- Sharrre javascript -->
<script type="text/javascript" src="plugins/jquery.sharrre.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="plugins/jquery.validate.js"></script>
<!-- Google Maps javascript -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="js/google.map.config.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="js/custom.js"></script>
<!---chat scripts start--->


    <!----   live chat   -->
    <script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.com/b14322741/crm/site_button/loader_10_uejvnm.js');
    </script>
    <!---- comman side contact form ---->

    <script data-b24-form="auto/200/ztaudr"
    data-skip-moving="true">(function (w, d, u) { var s = d.createElement('script'); s.async = true; s.src = u + '?' + (Date.now() / 180000 | 0); var h = d.getElementsByTagName('script')[0]; h.parentNode.insertBefore(s, h); })(window, document, 'https://cdn.bitrix24.com/b14322741/crm/form/loader_200.js');</script>


		<script>
		(function(w,d,s,c,r,a,m){
		w['KiwiObject']=r;
		w[r]=w[r] || function () {
			(w[r].q=w[r].q||[]).push(arguments)};
		w[r].l=1*new Date();
			a=d.createElement(s);
			m=d.getElementsByTagName(s)[0];
		a.async=1;
		a.src=c;
		m.parentNode.insertBefore(a,m)
		})(window,document,'script',"https://app.interakt.ai/kiwi-sdk/kiwi-sdk-17-prod-min.js?v="+ new Date().getTime(),'kiwi');
		window.onload = function () {
		kiwi.init('', 'iiDGsTOgtTbXcKt9VozbwZlbpIQz1E8A', {});
		}
		</script>  
		<!---chat scripts end--->
</body>
</html>
