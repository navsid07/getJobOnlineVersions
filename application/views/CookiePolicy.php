<!DOCTYPE HTML>
<html  lang="en">
	<head><?php
include 'fav.php';

$employeId=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');

?><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
				
				<meta property="og:title" content="Find a job and get recruited online | Get Job Online">

        <meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city." />

<!-- for cookie popup-->
<!-- cookiealert styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">


<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">
<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
            <link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

							<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
							<script src="<?= base_url(); ?>js/jquery.min.js"></script>
								<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
									
										<!-- Custom Theme files -->
											<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
												<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
													<!----font-Awesome---->
														<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
															<!----font-Awesome---->
																
																<style>
                                  body
                                  {
                                    background:#f5f5f0;
                                  }
																	input[type="text"]
																	{
																		margin-bottom:4%;
																	}
																	label
																	{
																		font-size: 16px;
																		font-weight: bold;
																	}
																	form
																	{
																		margin-top:5%;
																	}
																	button
																	{
																		background-color: white;
																		color:#2185c5;
																		padding:10px 15px;
																		border:1px solid #2185c5;
																		margin-top: 5%;
																	}
																	button:hover
																	{
																		background-color: #f15f43;
																		color:white;
																		border:1px solid #f15f43;
																	}
																		.navbarr{min-height:100px;
																			
																	margin-bottom:0;}
															
.myFile {
  position: relative;
  overflow: hidden;
  float: left;
  clear: left;
}
.myFile input[type="file"] {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
  font-size: 100px;
  filter: alpha(opacity=0);
  cursor: pointer;
}
#imgresult
{
    border:none;
    background-color: white;
    color: #f15f43;
    font-weight: bold;
}
#breadcrumbs
{
  margin-top: 2%;
}

								#breadcrumbs li {
  display: inline-block;
}
#breadcrumbs li:not(:first-child) {
  margin-left: 0.2em;
}
#breadcrumbs li:not(:first-child):before {
  content: '/';
  margin-right: 0.2em;
}
								
																</style>
																<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4121794652594490",
          enable_page_level_ads: true
     });
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>-->

	</head>
		<body>
			<nav class="navbar navbar-default" role="navigation">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url(); ?>Dashboard"><img src="<?= base_url(); ?>logo/getjob.png" alt="logo"/></a>
      </div>
      <!--/.navbar-header-->
      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
          

          <ul class="nav navbar-nav">

            <?php
            if(empty($employeId) && empty($recruiterId) && empty($employeeSession) && empty($recruiterSession))
{

                include('GetJobHeaderLi.php');
          
         }
         

            elseif(!empty($recruiterId) || !empty($recruiterSession))
            {

              include('RecruiterHeaderLi.php');
            ?>
           
           <?php
       }
       
       elseif(!empty($employeId) || !empty($employeeSession))
       {

        include('EmployeeHeaderLi.php');
        ?>
       
     <?php
       }
           ?>
            
          </ul>

       
      </div>
      <div class="clearfix"> </div>
    </div>
      <!--/.navbar-collapse-->
  </nav>

    <div id="spacer">
    &nbsp;
  </div>
	<div class="container">

    <!--cookie alert page-->
<div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="<?= base_url(); ?>CookiePolicy" target="_blank">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
        I agree
    </button>
</div>
    <!--end cookie alert page-->
    <ul id="breadcrumbs" style="margin-top: 6%;"><li><a href="<?= base_url(); ?>">Home </a></li><li>Cookie Policy</li></ul>
    <div class="col-md-offset-1 col-md-10 col_3 single_right" style="margin-bottom: 5%;">
      <div class="background single">
    <h2 class="align-center" style="color: #d3404e;">Cookie Policy for Get Job Online</h2>

<h4 class="align-center regularColorBlue">This is the Cookie Policy for Get Job Online, accessible from https://www.get-job.online</h4>
<div class="padding">
<h4 class="align-center regularColorBlue"><strong>What Are Cookies</strong></h4>

<p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.</p>

<ul><li>For more general information on cookies see the Wikipedia article on HTTP Cookies.</li></ul>

<h4 class="align-center regularColorBlue"><strong>How We Use Cookies</strong></h4>

<p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>

<h4 class="align-center regularColorBlue"><strong>Disabling Cookies</strong></h4>

<p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p>

<h4 class="align-center regularColorBlue"><strong>The Cookies We Set</strong></h4>

<ul>

<li>
   Account related cookies
    <p>If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p>
</li>

<li>
    Login related cookies
    <p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to log in every single time you visit a new page. These cookies are typically removed or cleared when you log out to ensure that you can only access restricted features and areas when logged in.</p>
</li>




<li>
   Forms related cookies
    <p>When you submit data to through a form such as those found on contact pages or comment forms cookies may be set to remember your user details for future correspondence.</p>
</li>

<li>
  Site preferences cookies
    <p>In order to provide you with a great experience on this site we provide the functionality to set your preferences for how this site runs when you use it. In order to remember your preferences we need to set cookies so that this information can be called whenever you interact with a page is affected by your preferences.</p>
</li>

</ul>

<h4 class="align-center regularColorBlue"><strong>Third Party Cookies</strong></h4>

<p>In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>

<ul>

<li>
    <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.</p>
    <ul><li>For more information on Google Analytics cookies, see the official Google Analytics page.</li></ul>
</li>




<li>
    <p>The Google AdSense service we use to serve advertising uses a DoubleClick cookie to serve more relevant ads across the web and limit the number of times that a given ad is shown to you.</p>
    <ul><li>For more information on Google AdSense see the official Google AdSense privacy FAQ.</li></ul>
</li>




<li>
    <p>We also use social media buttons and/or plugins on this site that allow you to connect with your social network in various ways. For these to work the following social media sites including; {List the social networks whose features you have integrated with your site?:12}, will set cookies through our site which may be used to enhance your profile on their site or contribute to the data they hold for various purposes outlined in their respective privacy policies.</p>
</li>

</ul>

<h4 class="align-center regularColorBlue"><strong>More Information</strong></h4>

<p>Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>

<p class="padding">However if you are still looking for more information then you can contact us through one of our preferred contact methods:</p>

<ul>
<li>Email: info@get-job.online</li>

</ul>
</div>
	</div></div>
</div>
				<?php include 'footer.php'; ?>
			
		</body>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script><!--
<script>
    for (var i = 1; i <= 150; i++)
        document.querySelector("#fillme").innerHTML += "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ";
</script>-->

<!-- Include cookiealert script -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
</html>