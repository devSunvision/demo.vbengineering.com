 <?php
if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: VB Engineering <sales@vbengg.com>' . "\r\n";
	
	
	$To = "sales@vbengg.com";
	$Subject = "Query";
	$usermessage = "Thanks for contacting us we will contact you shortly.";
	$Msg = "Name = ".$name. "<br />email = ".$email. "<br />phone = ".$phone."<br /><br />message = ".$message."<br /><br />";
	
	 mail($To, $Subject, $Msg, $headers);
    if(isset($_POST['email']))
             header("Location:complete.html");

}
?>
<html>
<head>
		<meta charset="utf-8">
       
       
		<title>Contact Us | VB Engineering | Acr Flash Consultants in India</title>
		<meta name="description" content="VB Engineering defines and designs technology enabled business solutions. Contact us @ +040 40064644 and sales@vbengg.com for arc flash hazard analysis."/>
        <meta name="keywords" content="Arc flash audit in India, electrical hazard safety shoes, Arc flash Consultancy, arc flash risk assessment, electrical risk assessment, electric safety training, arc flash study" />
		<meta name="author" content="https://plus.google.com/+Vbenggconsultants"/>
        <meta name="robots" content="index, follow"/>
        <meta http-equiv="Content-Type" content="text/html">
        <link rel="canonical" href="https://www.vbengg.com/contact1.php"/>

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
	<!---global site tag--->   


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

    <!-- body start -->
    
    <body class="no-trans">


	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDRGZJV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



	<div class="floating-form" id="contact_form">
    <script data-b24-form="auto/48/q4a1rt" data-skip-moving="true">
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn.bitrix24.com/b14322741/crm/form/loader_48.js');
      </script>      
</div>
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
    <div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-sm-6">

							<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">
									<ul class="social-links clearfix hidden-xs">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/VB-Engineering/1486847301558681"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="https://twitter.com/VBengineering"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="https://plus.google.com/+Vbenggconsultants"><i class="fa fa-google-plus"></i></a></li>
												<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/vbengineering/"><i class="fa fa-pinterest"></i></a></li>
												<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/vb-engineering"><i class="fa fa-linkedin"></i></a></li>
											
<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNFOmB0hIW5EkXx8NgiKkfw"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
				</div>
                        </div>
                        <div>
                        <header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo" style="margin-left: -60px;">
									<a href="index.html"><img id="logo" src="img16/VB-Engineering-logo-1.png" alt="vb-engineering" title="detailed-engineering-consultants"></a>
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
													

													<li>
														<a href="index.html">Home</a>
													</li>
													<li class="">
														<a href="about-vb-engineering.html">About</a>
													</li>													
													<!-- mega-menu start -->
													<li class="dropdown mega-menu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
														<ul class="dropdown-menu" style="margin-left: 296px;">
															<li>
																<div class="row">
																
																	<!-- <div class="col-lg-4 col-md-3 hidden-sm"> -->
																		<!-- <h4>VB Engineering India Pvt. Ltd.</h4> -->
																		<!-- <p>We are always ready to serve you</p> -->
																		<!-- <img src="img16/vbe-services.jpg" alt="Detailed Engineering Consultants" title="Arc Flash Consultants"> -->
																	<!-- </div> -->
																	<div class="col-lg-12 col-md-9">
																		<!-- <h4 id="firstname">Electrical&nbsp;&nbsp;&nbsp; &nbsp;Mechanical &nbsp;&nbsp;&nbsp;&nbsp;Audits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trainings</h4> -->
																		<div class="row">
																		
																			<div class="col-sm-3">
																			
																			<h4  id="firstname"><i class="fa fa-bolt fa-5x" aria-hidden="true"></i>Electrical</h4>
																				<div class="divider">
																				
																				</div>
																				<ul class="menu">
																					<li><a href="cad-drafting-services.html"><i class="icon-right-open"></i>S L D Preparation</a></li>
																					<li><a href="load-flow-analysis-for-oil-and-gas-rigs.html"><i class="icon-right-open"></i>Load Flow Studies</a></li>
																					<li><a href="short-circuit-analysis.html"><i class="icon-right-open"></i>Short Circuit Studies</a></li>
																					<li><a href="relay-coordination.html"><i class="icon-right-open"></i>Relay Coordination Studies</a></li>
																					<li><a href="harmonic-analysis.html"><i class="icon-right-open"></i>Harmonic Analysis</a></li>
																					<li><a href="arc-flash-risk-assessment.html"><i class="icon-right-open"></i>Arc Flash Risk Assessment</a></li><br />
                                                                                    <li><a href="engineering-services.html" style="float: right;"><i class=""></i>Read More</a></li>
																				</ul>
																			</div>
                                                                            
																			<div class="col-sm-3">
																			<h4 id="firstname"><i class="fa fa-cogs fa-5x" aria-hidden="true"></i>&nbsp;Mechanical</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="cad-drawing-preparation.html"><i class="icon-right-open"></i>Cad Drawing Preparation</a></li>
																					<li><a href="3d-cad-drafting-services.html"><i class="icon-right-open"></i>3d Drawing Preparation</a></li>
																					<li><a href="piping-stress-analysis-services.html"><i class="icon-right-open"></i>Stress Analysis</a></li>
																					<li><a href="structural-forensic-engineering-services.html"><i class="icon-right-open"></i>Displacement Analysis</a></li>
																					<li><a href="engineering-isometric-drawing.html"><i class="icon-right-open"></i>Isometric Drawings</a></li>
																					<li><a href="plant-layout-design.html"><i class="icon-right-open"></i>Optimal Floor Planing</a></li><br />
                                                                                    <li><a href="engineering-services.html" style="float: right;"><i class=""></i>Read More</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-3">
																			<h4 id="firstname"><i class="fa fa-pencil fa-5x"></i>Audits</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a id="fontsize" href="arc-flash-analysis-india.html"><i class="icon-right-open"></i> Arc Flash Audit-<B class="blink">NFPA70E </B></a></li>
																					<li><a href="energy-audit-services.html"><i class="icon-right-open"></i>Energy Audit</a></li>
																					<li><a href="electrical-safety-audit.html"><i class="icon-right-open"></i>Electrical Safety Audit</a></li>
																					<li><a href="lightning-arrestor-protection-study-audit.html"><i class="icon-right-open" aria-hidden="true"></i>Lightening Arrestor Audit</a></li>
																					<li><a href="osha-process-safety-hazop-study.html"><i class="icon-right-open"></i>Hazop Study</a></li>
																					<li><a href="earthing-design-india.html"><i class="icon-right-open"></i>Earth Pits Audits</a></li><br />
																					<li><a href="engineering-services.html" style="float: right;"><i class=""></i>Read More</a></li>
																				</ul>
																			</div>
																				<div class="col-sm-3">	
                                                                                <h4 id="firstname"><i class="fa fa-graduation-cap fa-5x"></i>Trainings</h4>																		
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="Electrical-safety-training.html"><i class="icon-right-open"></i>Electrical Safety Training</a></li>
																					<li><a  href="osha-nfpa-70e-training-certification.html"><i class="icon-right-open"></i>Arc Flash Training-<B class="blink">CERTIFICATIONS</B></a></li>
																					<li><a  href="solidworks-training-certification.html"><i class="icon-right-open"></i>Solidworks Training-<B class="blink">CERTIFICATIONS</B></a></li>
																					<li><a href="cad-training.html"><i class="icon-right-open"></i>CAD Training</a></li>
																					<li><a href="gis.html"><i class="icon-right-open"></i>GIS Training</a></li>
																					<li><a href="flexsim-training.html"><i class="icon-right-open"></i>Flexsim Training</a></li><br />
																					<li><a href="engineering-services.html" style="float: right;"><i class=""></i>Read More</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													
													
													<!-- mega-menu end -->
													<!-- <li class=""> -->
														<!-- <a href="portfolio-products.html" class="" data-toggle="">Portfolio</a> -->
													<!-- </li> -->
													<!---------Products start----------------->
													
													<li class="dropdown mega-menu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products</a>
														<ul class="dropdown-menu" style="margin-left: 296px;">
															<li>
																<div class="row">
																
																	<div class="col-lg-4 col-md-3 hidden-sm">
																		<h4>VB Engineering India Pvt. Ltd.</h4>
																		<p>We are always ready to serve you</p>
																		<img src="img16/vbe-services.jpg" alt="Detailed Engineering Consultants" title="Arc Flash Consultants">
																		
																	</div>
																	<div class="col-lg-8 col-md-9">
																		<!-- <h4 id="firstname">Electrical&nbsp;&nbsp;&nbsp; &nbsp;Mechanical &nbsp;&nbsp;&nbsp;&nbsp;Audits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trainings</h4> -->
																		<div class="row">
																			<div class="col-sm-4">
																			<h4 id="firstname">Electrical</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="network-analysis-tool.html"><i class="icon-right-open"></i>Neplan</a></li>
																					<li><a href="solar-power-plant-design-india.html"><i class="icon-right-open"></i>Bluesol PV</a></li>
																					<li><a href="elecworks-india.html"><i class="icon-right-open"></i>Elecworks</a></li><br />
																					<li><a href="portfolio-products.html" style="float: right;"><i class=""></i>Read More</a></li>
																					</ul>
																			</div>
                                                                            
																			<div class="col-sm-4">
																			<h4 id="firstname">Mechanical</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="flexsim-india.html"><i class="icon-right-open"></i>Flexsim</a></li>
																					<li><a href="edgecam.html"><i class="icon-right-open"></i>Edgecam</a></li>
																					<li><a href="solidworks-training-classes-online.html"><i class="icon-right-open"></i>Solidworks</a></li><br />
																					<li><a href="portfolio-products.html" style="float: right;"><i class=""></i>Read More</a></li>
																					</ul>
																			</div>
																			<div class="col-sm-4">
																			<h4 id="firstname">IT</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="http://vbinfotechs.com" target="_blank"><i class="icon-right-open"></i>Hadoop</a></li>
																					<li><a href="http://vbinfotechs.com" target="_blank"><i class="icon-right-open"></i>Data Analytics</a></li>
																					<li><a href="http://vbinfotechs.com" target="_blank"><i class="icon-right-open"></i>Winrar</a></li><br />
																					<li><a href="http://vbinfotechs.com" target="_blank" style="float: right;"><i class=""></i>Read More</a></li>
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
													<li class="dropdown mega-menu active">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Support</a>
														<ul class="dropdown-menu" style="margin-left: 296px;">
															<li>
																<div class="row">
																	<div class="col-sm-8 col-md-8">
																		<h4>We are Always Happy to Support You</h4>
																		<p>VB Engineering India Pvt. Ltd. is located in Hyderabad (India).</p>
																		<!-- <img src="img16/vb-engineering-support.png" alt="Consulting Engineers" title="Detailed Engineering Consultants"> -->
																	<video width="600px" controls autoplay loop muted>
                                                                        <source src="img16/videos/vbeintro.mp4" type="video/mp4">
                                                                        <source src="img16/videos/vbeintro.ogg" type="video/ogg">
                                                                         Your browser does not support HTML5 video.
                                                                        </video>
																	</div>
																	<div class="col-sm-4 col-md-4">
																		<!-- <h4>Support</h4> -->
																		<div class="row">
																			<div class="col-sm-10">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="electrical-engineering-services.html"><i class="icon-right-open"></i>Electrical</a></li>
																					<li><a href="mechanical-engineering-services.html"><i class="icon-right-open"></i>Mechanical</a></li>
																					<li><a href="solar-power-consultants.html"><i class="icon-right-open"></i>Solar &amp; PV System</a></li>
																					<li><a href="http://www.vbtrainings.com/" target="_blank"><i class="icon-right-open"></i>Training</a></li>
																					<li><a href="portfolio-products.html"><i class="icon-right-open"></i>Products</a></li>
																					<li><a class="blink" href="vb-research.html"><i class="icon-right-open"></i>RND</a></li>
																					<li><a  href="vb-knowledge-base.html"><i class="icon-right-open"></i>White Papers - <b class="blink">NEW</b></a></li>
                                                                                    <li><a href="http://www.vbengg.com/blog"><i class="icon-right-open"></i>BLOG</a></li>
                                                                                    <li><a href="safety-faq.html"><i class="icon-right-open"></i>FAQ</a></li>
                                                                                    <li><a href="Contact"><i class="icon-right-open"></i>Contact Us</a></li>
																					<li><a href="service-request"><i class="icon-right-open"></i>Service Request Form</a></li>
																					 <li><a href="sitemap.xml"><i class="icon-right-open"></i>Sitemap</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="">
														<a href="Blog" class="" data-toggle="">Blog</a>
													</li>
													<li class="">
														<a href="Contact" class="" data-toggle="">Contact Us</a>
													</li>
													<!-- <li> -->
													<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvbengineeringindia%2F&width=77&layout=button_count&action=like&size=small&show_faces=false&share=false&height=21&appId" width="77" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
													<!-- </li> -->
													<!-- <li> -->
													<!-- <a href="https://twitter.com/VBengineering?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-screen-name="false" data-show-count="true">Follow @VBengineering</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
													<!-- </li> -->
                                                    
                                                    <!-- <style>#Linkedin{margin-top: 10px;}</style> -->
                                                    <!-- <li class="" id="Linkedin"> -->
                                                    <!-- <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script> -->
                                                    <!-- <script type="IN/FollowCompany" data-id="5402803" data-counter="right"></script> -->
                                                    <!-- </li> -->
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
			<!-- header end -->

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

							
							<div class="contact-form">
							 <form  form name="" method="post" action="">
									Name <br />      
                    <input type="text" name="name" id="name" required="required"  value="" style="padding:5px 2.6% 5px 2.6%; margin-top:10px; background:#f5f7f8; border:1px solid #cbcfd1; border-bottom:2px solid #cbcfd1; width:350px;"><br />
									  E-mail</span> <span class="red">*</span> (never published)<br /> 
                    <input type="text" name="email" id="email" required="required" value="" style="padding:5px 2.6% 5px 2.6%; margin-top:10px; background:#f5f7f8; border:1px solid #cbcfd1; border-bottom:2px solid #cbcfd1; width:350px;"><br>
									  Mobile <span class="red">*</span>  <br />
                    <input type="text" name="phone" id="phone" required="required"  value="" style="padding:5px 2.6% 5px 2.6%; margin-top:10px; background:#f5f7f8; border:1px solid #cbcfd1; border-bottom:2px solid #cbcfd1; width:350px;"><br>
									  Message <span class="red">*</span><br>
                    <textarea name="comments" required="required" style="background-color:#f5f7f8; width:500px; height:170px;"></textarea>
									 <input type="submit" value="Submit" name="submit" class="btn btn-lg btn-default"  style="width:180px; height:60px; margin-left: -370px; margin-top: 100px; font-family:Rockwell; font-size:20px;">
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
                                            <h3 class="title"><b>Sunvision Skill Development Society</b></h3>
									<b>Address:</b></br>
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
									</ul>
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
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/VB-Engineering/1486847301558681"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="https://twitter.com/VBengineering"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="https://plus.google.com/+Vbenggconsultants"><i class="fa fa-google-plus"></i></a></li>
												<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/vbengineering/"><i class="fa fa-pinterest"></i></a></li>
												<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/vbengineering"><i class="fa fa-linkedin"></i></a></li>
											
									<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNFOmB0hIW5EkXx8NgiKkfw"><i class="fa fa-youtube-play"></i></a></li>
									</ul>
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
                                            <li><a href="http://www.vbengg.com/blog" target="_blank">Blog</a></li>
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
		</div>
		<!-- page-wrapper end -->
        

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

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
