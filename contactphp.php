<?php
if(isset($_POST['submit'])) {
$serverName = "184.168.47.21";
$options = array(  "UID" => "VBACADEMY",  "PWD" => "#Vbengg123",  "Database" => "VBACADEMY");
//$conn = sqlsrv_connect($serverName, $options);
//if( $conn === false ) {
//die( print_r( sqlsrv_errors(), true));
//}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone=$_POST['phone'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: VB Engineering <sales@vbengg.com>' . "\r\n";
$To = "sales@vbengg.com,srivani@vbengg.com";
$Subject = "From VBE Contact page";
$Msg = "Name = ".$name. "<br />email = ".$email. "<br />phone = ".$phone."<br /><br />message = ".$message."<br /><br />";
if( mail($To, $Subject, $Msg, $headers))
{
header("Location: thanks-for-enquiry.html");
//$usermessage = "Thanks for contacting us we will contact you shortly.";
}
//$sql = "INSERT INTO MasterTable(FirstName,Email,Mobile,Message) VALUES ('" . $name. "', '" . $email. "','" . $phone. "','" . $message. "')";
//$stmt = sqlsrv_query( $conn, $sql);
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

<title>Contact Us | VB Engineering | Acr Flash Consultants in India</title>
<meta name="description" content="VB Engineering defines and designs technology enabled business solutions. Contact us @ +040 40064644 and sales@vbengg.com for arc flash hazard analysis."/>
<meta name="keywords" content="Arc flash audit in India, electrical hazard safety shoes, Arc flash Consultancy, arc flash risk assessment, electrical risk assessment, electric safety training, arc flash study" />
<meta name="author" content="https://plus.google.com/+Vbenggconsultants"/>
<meta name="robots" content="index, follow"/>
<meta http-equiv="Content-Type" content="text/html">
<link rel="canonical" href="https://www.vbengg.com/contactphp.php"/>
<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link rel="shortcut icon" href="img16/favicon.png">
<meta property="og:title" content=""/>
<link href="https://plus.google.com/+Vbenggconsultants" rel="publisher" />
<!-- Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>#div1,#div2{
margin-left:20px;
}
iframe{
border-color: transparent;
border-radius:10px;
}
.message {
color: #FF0000;
font-weight: bold;
text-align: center;
width: 100%;
</style>
<!--/feedback -->
<link href="feedbackform/feedcss/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="feedbackform/feedjs/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener") ;
_floatbox.css("right", "-320px"); //initial contact form position
//Contact form Opener button
_floatbox_opener.click(function(){
if (_floatbox.hasClass('visiable')){
_floatbox.animate({"right":"-320px"}, {duration: 300}).removeClass('visiable');
}else{
_floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
}
});
//Effect on Scroll
$(window).scroll(function(){
if(_scroll){
_floatbox.animate({"top": "30px"},{duration: 300});
_scroll = false;
}
if(_timer !== false){ clearTimeout(_timer); }           
_timer = setTimeout(function(){_scroll = true; 
_floatbox.animate({"top": "10px"},{easing: "linear"}, {duration: 500});}, 400); 
});
});
</script>

<script>
    function myFunction() {
        var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener");
        _floatbox.css("right", "-322px"); //initial contact form position 
        _floatbox.animate({ "right": "0px" }, { duration: 300 }).addClass('visiable');
    }
</script>
<!--/feedback -->

</head>
<!-- body start -->
<body class="no-trans">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
<!-- page wrapper start -->
<!-- ================ -->
/* <div class="floating-form" id="contact_form" style="background: rgba(0,0,0,.5);">
<div class="contact-opener"><b>Enquire Now</b></div>
<iframe style="height:450px;width:350px;"  id="myframe"  src="feedbackform/php-contact.php"></iframe>
</div> */
<div class="floating-form" id="contact_form">
        <script data-b24-form="auto/48/q4a1rt" data-skip-moving="true">
        (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.com/b14322741/crm/form/loader_48.js');
          </script>      
    </div>
<div class="page-wrapper">
<!-----------------------header include script--------------------------------------->
 <div class="col-md-10"> 
        </div>
        <div class="col-md-2" style="float:right;">       
            <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
            <script type="IN/FollowCompany" data-id="5402803" data-counter="bottom" style="font-weight: bold;"></script>          
        </div>
        <div w3-include-html="header.html"></li>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/FollowCompany" data-id="5402803" data-counter="right"></script>
</div> 
<script src="js/header.js"></script>
<script>
w3.includeHTML();
</script>
<!-----------------------header include script--------------------------------------->
<div class="page-intro">
<div class="container">
<div class="row">
<div class="col-md-12">
<ol class="breadcrumb">
<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
<li class="active">Contact</li>
</ol>
</div>
</div>
</div>
</div>
<!-- page-intro end -->
<center><h2>Our Location</h2></center>
<!-- Map -->
<!--<div class="container"> 
<div class="row">
<center> <div class="span12"  width="900px">    
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:263px;width:969px;"><div id="gmap_canvas" style="height:263px;width:969px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="coming-soon.html" id="get-map-data">mapsembed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(17.514817,78.379638),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.514817, 78.379638)});infowindow = new google.maps.InfoWindow({content:"<b>VB ENGINEERIMG</b><br/>Balaji Presidency, Balaji Nagar, Nizampet Behind Heritage Stores,<br/>500090 Hyderabad" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div></center>
</div>  
</div>--> 
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
<div class="container">
<div class="row">
<!-- main start -->
<!-- ================ -->
<div class="main col-md-8">
<!-- page-title start -->
<!-- ================ -->
<h1 class="page-title">Contact Us</h1>
<!-- page-title end -->
<div class="message"><?php if(isset($usermessage)) { echo $usermessage; } ?></div>
<div class="contact-form">
<form  name="" method="post" action="">
Name <br />      
<input type="text" name="name" id="name" required="required"  value="" style="padding:5px 2.6% 5px 2.6%; margin-top:10px; background:#f5f7f8; border:1px solid #cbcfd1; border-bottom:2px solid #cbcfd1; width:350px;"><br />
E-mail</span> <span class="red">*</span> (never published)<br /> 
<input type="text" name="email" id="email" required="required" value="" style="padding:5px 2.6% 5px 2.6%; margin-top:10px; background:#f5f7f8; border:1px solid #cbcfd1; border-bottom:2px solid #cbcfd1; width:350px;"><br>
Mobile <span class="red">*</span>  <br />
<input type="text" name="phone" id="phone" required="required"  value="" style="padding:5px 2.6% 5px 2.6%; margin-top:10px; background:#f5f7f8; border:1px solid #cbcfd1; border-bottom:2px solid #cbcfd1; width:350px;"><br>
Message <span class="red">*</span><br>
<textarea name="message" required="required" style="background-color:#f5f7f8; width:350px; height:170px;"></textarea>
<br />
<input type="submit" value="Submit" name="submit" class="btn btn-lg btn-default"  style="width:180px; height:60px;  font-family:Rockwell; font-size:20px;">
</form>
</div>
</div>
<!-- main end -->
<!-- sidebar start -->
<aside class="col-md-4">
<div class="sidebar">
<div class="side vertical-divider-left">
<h3 class="title"><b>VB Engineering</b></h3>
<b>Address:</b></br>
<ul class="list">
<li><strong></strong></li>
<li><i class="fa fa-home pr-10"></i> #123, Balaji Nagar, Nizampet Panchayt, Hyderabad, Telangana 500090
<li><i class="fa fa-phone pr-10"></i>+91-7893300511</li>
<li><i class="fa fa-envelope pr-10"></i><a href="mailto:sales@vbengg.com">sales@vbengg.com</a></li>
<!--<b>Address:</b></br>
<ul class="list">
<li><strong></strong></li>
<li><i class="fa fa-home pr-10"></i> D.No:7-3-5A,<br>Gandhi Bazar,<br>Above Freshmart Supermarket,<br>Mummidivaram Gate,<br>Amalapuram
<li><i class="fa fa-phone pr-10"></i>08856-237383</li>
<li><i class="fa fa-envelope pr-10"></i><a href="mailto:sales@vbengg.com">sales@vbengg.com</a></li>
</ul>
<ul class="social-links colored circle large">
<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/VB-Engineering/1486847301558681"><i class="fa fa-facebook"></i></a></li>
<li class="twitter"><a target="_blank" href="https://twitter.com/VBengineering"><i class="fa fa-twitter"></i></a></li>
<li class="googleplus"><a target="_blank" href="https://plus.google.com/+Vbenggconsultants"><i class="fa fa-google-plus"></i></a></li>
<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/vbengineering"><i class="fa fa-linkedin"></i></a></li>
</ul-->
</div>
</div>
</aside>
<!-- sidebar end -->
<!-- sidebar start 
<aside class="col-md-4">
<div class="sidebar">
<div class="side vertical-divider-left">
<h3 class="title"><b>Sun Vision</b></h3>
<b>Address:</b></br>
<ul class="list">
<li><strong></strong></li>
<li><i class="fa fa-home pr-10"></i>DNO-7-305A, Gandhi Bazar, Amalapuram, East Godavari District, Andhra Pradesh 533201
<li><i class="fa fa-envelope pr-10"></i><a href="mailto:sales@vbengg.com">sales@vbengg.com</a></li>
</ul>
<ul class="social-links colored circle large">
<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/Job-Opportunities-in-Andhra-Pradesh/931759700180650?ref=hl"><i class="fa fa-facebook"></i></a></li>
<li class="twitter"><a target="_blank" href="https://twitter.com/careers_ap"><i class="fa fa-twitter"></i></a></li>
<li class="googleplus"><a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/apcareers"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</aside>
<!-- sidebar end -->
</div></div></div></div>
</div>
</section>
<!-- main-container end -->
<!-- section start -->
<!-- ================ -->
<div class="section gray-bg text-muted footer-top clearfix">
<div class="container">
<div class="row">
<div class="col-md-6"><br /><br />
<div class="owl-carousel clients">
<div class="client">
<a href="#"><img src="img16/clients/dupont.png" alt="vbe-client" title="detailed-engineering-services"></a>
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
<!-- section start -->
<!-- ================ -->
<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
<!-- ================ -->
<footer id="footer">
<!-- .footer start -->
<!-- ================ -->
<div class="footer">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="row">
<div class="col-sm-6">
<h3>ABOUT_________</h3>
<p>VB Engineering defines, designs and delivers technology-enabled business solutions for the companies. We provide a complete range of services by leveraging our domain, business expertise and strategic alliances with leading technology providers.</p>
</div>
<div class="col-sm-6">
<h3>Navigation______</h3>
<ul class="list-icons">
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
<li><a href="sitemap.html">Sitemap</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4">
<h3>GEO PRESENCE__________________</h3>
<div class="col-sm-3">
<h5>Asia</h5>
<ul class="list-icons">
<li>Malaysia</li>
<li class="active">Singapore</li>
<li>Japan</li>
<li>Korea</li>
<li>Sri lanka</li>
<li class="active">Thailand</li>
<li>Myanmar</li>
<li>Indonesia</li>
</ul>
</div>	
<div class="col-sm-3">
<h5>Africa</h5>
<ul class="list-icons">
<li>Algeria</li>
<li>Nigeria</li>
<li>Uganda</li>
<li>Kenya</li>
<li>Tanzania</li>
<li>Zambia</li>
</ul>
</div>
<div class="col-sm-3">
<h5>Middle East</h5>
<ul class="list-icons">
<a href="arc-flash-study-UAE.html"><li>UAE</li></a>
<li>Kuwait</li>
<li>Qatar</li>
<li>Oman</li>
<li>Saudi Arabia</li>
<li>Iran</li>
<li>Bahrain</li>
</ul>
</div>
<div class="col-sm-3">
<h5>Europe</h5>
<ul class="list-icons">
<li>United Kingdom</li>
<h5>America</h5>
<li>USA</li>
<li>Brazil</li>
<h5>Australia</h5>
</ul>
</div>
</div>
<div class="col-md-4">
<h3>CONTACT INFO__________</h3>
<ul class="list-icons">
<li><i class="fa fa-map-marker pr-10"></i>Flat No: G1, Plot No: 123, Balaji Residency, 
Balaji Nagar, Behind Heritage Stores, Nizampet Village, 
Rangareddy District, Hyderabad (India) - 500090.</li>
<li><i class="fa fa-phone pr-10"></i>+91 4040064644</li>
<li><i class="fa fa-envelope-o pr-10"></i> sales@vbengg.com</li>
</ul>
<ul class="social-links colored clearfix circle">
<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/VB-Engineering/1486847301558681"><i class="fa fa-facebook"></i></a></li>
<li class="twitter">
    <a target="_blank" href="https://twitter.com/VBengineering" class="x-link">
        <img src="img16/icons/x.png" class="x-icon">
    </a>
</li>
<li class="googleplus"><a target="_blank" href="https://plus.google.com/+Vbenggconsultants"><i class="fa fa-google-plus"></i></a></li>
<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/vbengineering/"><i class="fa fa-pinterest"></i></a></li>
<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/vb-engineering"><i class="fa fa-linkedin"></i></a></li>
<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNFOmB0hIW5EkXx8NgiKkfw"><i class="fa fa-youtube-play"></i></a></li>
</ul>
<style>.social-links li a {
    display: flex;
    align-items: center;
    justify-content: center;
}

.x-icon {
    width: 24px;
}
</style>
</div>
</div>
</div>
</div>
<!-- .footer end -->
<div class="subfooter">
<div class="container">
<div class="row">
<div class="col-md-4">
<!-- Toggle get grouped for better mobile display -->  
<!---<p>Developed by: <a href="http://www.thedenkenlabs.com/" target="_blank"><b>The Denken Labs</b></a></p>--->
</div>
<div class="col-md-8">
<p>Copyright &copy; 2014 -<script  type="text/javascript">document.write((new Date()).getFullYear());</script> <b><a href="index.html">VB Engineering India (P) Ltd. </b></a>| All Rights Reserved.</p>
</div>
</div>
</div>
</div>
<!-- .subfooter end -->
</footer>
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
<!-- Initialization of Plugins -->
<script type="text/javascript" src="js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="js/custom.js"></script>
<!---chat scripts start--->
<script>
			(function(w,d,u){
					var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
					var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
			})(window,document,'https://cdn.bitrix24.com/b14322741/crm/site_button/loader_8_9tfk6y.js');
		</script> 

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
