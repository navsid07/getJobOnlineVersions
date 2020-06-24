
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
				
				  <meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city." />

				<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="htps://www.get-job.online">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
						<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
							<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
							<script src="<?= base_url(); ?>js/jquery.min.js"></script>
								<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
										<!-- Custom Theme files -->
											<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
												<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
													<!----font-Awesome---->
														<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
															<!----font-Awesome---->
																
																<style>
																	
																	label
																	{
																		font-size: 16px;
																		font-weight: bold;
																	}
																	
																		.navbarr{min-height:100px;
																			
																	margin-bottom:0;}
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
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

	</head>
		<body style="background: #f5f5f0">
			<nav class="navbarr navbar-default" role="navigation" style="height:10px;">
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

		   }
		       ?>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	<div class="container">
		<ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Privacy Policy</li></ul>
    <div class="col-md-offset-1 col-md-10 padding" itemscope itemtype="http://schema.org/Product" style="padding:5%;">
    <div class="single background" >  
    	<div style="text-align:center;">
				<h1 class="regularColor">Terms and Conditions for Get Job Online</h1>
				<h2 style="color:#230046;">Introduction</h2>
			</div>
				<p class="padding">These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Get Job Online accessible at www.get-job.online.</p>
				<p  class="padding">These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
				<p  class="padding">Minors or people below 18 years old are not allowed to use this Website.</p>
			</br>
				<h2 style="color:#230046;">Intellectual Property Rights</h2>
				<p  class="padding">Other than the content you own, under these Terms, Get job online and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>

<p  class="padding">You are granted limited license only for purposes of viewing the material contained on this Website.</p></br>
<h2 style="color:#230046;">Restrictions</h2>

<p  class="padding">You are specifically restricted from all of the following:</p>
<ul>
    <li>publishing any Website material in any other media.</li>
    <li>selling, sublicensing and/or otherwise commercializing any Website material.</li>
    <li>publicly performing and/or showing any Website material.</li>
    <li>using this Website in any way that is or may be damaging to this Website.</li>
    <li>using this Website in any way that impacts user access to this Website.</li>
    <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity.</li>
    <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website.</li>
    <li>using this Website to engage in any advertising or marketing.</li>
</ul>

<p  class="padding">Certain areas of this Website are restricted from being access by you and Get job Online may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p></br>
<h2 style="color:#230046;">Your Content</h2>

<p  class="padding">In these Website Standard Terms and Conditions, "Your Content" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Get job Online a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>

<p  class="padding">Your Content must be your own and must not be invading any third-party’s rights. Get Job Online reserves the right to remove any of Your Content from this Website at any time without notice.</p></br>
<h2 style="color:#230046;">No warranties</h2>

<p  class="padding">This Website is provided "as is," with all faults, and Get job Online express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>
</br>
<h2 style="color:#230046;">Limitation of liability</h2>

<p  class="padding">In no event shall Get Job Online, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Get Job Online, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p></br>
<h2 style="color:#230046;">Indemnification</h2>

<p  class="padding">You hereby indemnify to the fullest extent Get Job Online from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>
</br>
<h2 style="color:#230046;">Severability</h2>

<p  class="padding">If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>
</br>
<h2 style="color:#230046;">Variation of Terms</h2>

<p  class="padding">Get Job Online is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>

<h2 style="color:#230046;">Assignment</h2>

<p  class="padding">Get Job Online is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>
</br>
<h2 style="color:#230046;">Entire Agreement</h2>
    
<p  class="padding">These Terms constitute the entire agreement between Get Job Online and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>
</br>
<h2 style="color:#230046;">Governing Law & Jurisdiction</h2>

<p  class="padding">These Terms will be governed by and interpreted in accordance with the laws of the State of in, and you submit to the non-exclusive jurisdiction of the state and federal courts located in in for the resolution of any disputes.</p>

				</div>
			</div>
		</div>
	

				<?php include 'footer.php'; ?>
			
			
		</body>
		
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
	
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
     
      
   
</script>
</html>