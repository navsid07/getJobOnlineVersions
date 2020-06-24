<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php

$this->session->unset_userdata('url');

?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';

foreach ($data as $value) {
			             	
			            ?><title> <?=  base64_decode(base64_decode($value['recruiter_company_name'])); ?> Profile detail</title><?php 
}
?><meta name="viewport" content="width=device-width; initial-scale=1;" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.Online job portal for job providers and job seekers.">

<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job search" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- progress bar css-->
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->
<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=957428434400355';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
	/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}

/* Individual bars */
.bar-0 {width: 0%; height: 18px; background-color: #f44336;}
.bar-0-10 {width: 5%; height: 18px; background-color: #f44336;}
.bar-10-20 {width: 10%; height: 18px; background-color: #f44336;} 
.bar-20-30 {width: 20%; height: 18px; background-color: #ff9800;}
.bar-30-40 {width: 30%; height: 18px; background-color: #ff9800;}
.bar-40-50 {width: 40%; height: 18px; background-color: #ff9800;}
.bar-50-60 {width: 50%; height: 18px; background-color: #00bcd4;}
.bar-60-70 {width: 60%; height: 18px; background-color: #00bcd4;}
.bar-70-80 {width: 70%; height: 18px; background-color: #2196F3;}
.bar-80-90 {width: 80%; height: 18px; background-color: #2196F3;}
.bar-90-100 {width: 90%; height: 18px; background-color: #4CAF50;}
.bar-100 {width: 100%; height: 18px; background-color: #4CAF50;}


.authorName
{
	text-transform: capitalize;
	font-size:.7em;
    font-style: italic;
    float:right;
    color:grey;
    font-weight: normal;
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
</head>
<body>

<?php

		include('RecruiterHeader.php');

?>
	<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start employee search</h1>
		    <p>
			 <form action="<?= base_url(); ?>RecruiterSearch" method="post">
			 <select class="textt" name="category">
			 		<option value="">select Category</option>
			 		<?php
		            	if($categories==null)
		            	{
		            		?>
		            		<option value=""><a href="#">Categories Coming Soon</a></option>
			        <?php   
		            	}
		            	else
		            	{
		            		foreach ($categories as $value) {
		            		
		            	?>
			         <option value="<?= $value['employee_category']; ?>" ><?= base64_decode(base64_decode($value['employee_category'])); ?></option>
			            <?php
}
			        }
		            	?>
			 </select>
			<!-- <input type="text" class="text"  name="category" placeholder="Employee Category" >
			--> <input type="text" class="text" name="location" placeholder="Location" >
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Employee"></label>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	

<div class="container">

	<ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>">Home</a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>">Recruiter</a></li><li itemscope itemtype="http://schema.org/BreadcrumbList">Recruiter Dashboard</li></ul>
	 <?php 
					if($success= $this->session->flashdata('success')):

			    $success_class=$this->session->flashdata('success_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $success_class; ?>">
			  
			  <?php echo $success ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>

			<?php 
					if($update= $this->session->flashdata('update')):

			    $update_class=$this->session->flashdata('update_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12" style="margin-top:2%;">
			          <div class="alert alert-dismissible <?php echo $update_class; ?>">
			  
			  <?php echo $update ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>
			 <?php 
					if($recruit= $this->session->flashdata('recruit')):

			    $recruit_class=$this->session->flashdata('recruit_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12" style="margin-top:5%;">
			          <div class="alert alert-dismissible <?php echo $recruit_class; ?>">
			  
			  <?php echo $recruit ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			foreach ($data as $dataa) {
		if($dataa['recruiter_verify']==0)
		{
			?>

			<div class="row" style="margin-top:3%;">
				<div class="col-md-offset-2 col-md-8 text-center" id="loadingAfterSend" style="display:none;"><img src="<?= base_url(); ?>images/sendinggif2.gif"></div>
	<div class="col-md-offset-2 col-md-8 alert alert-danger" id="emailSent">
		Your email is not verified. Please verify your email in order to enable critical activities on your account. If you want to resend the verification email then click on the link below.
	</br>
</br>


<p style="text-align:center;" ><!--<a href="<?= base_url(); ?>recruiter/sendagainemail?email=<?= $dataa['recruiter_email']; ?>" class="linkcolor">-->
	<form method="post" id="sendAgainEmail" class="text-center">
		<input type="hidden" name="email" value="<?= $dataa['recruiter_email']; ?>">
		<button type="submit" id="submitbtn" class="btn" style="background-color: none; border:none;">Send Email Again</button></form></p>
	</div>
	<?php
}
}
	?>
	<div class="col-md-offset-2 col-md-8">
	<p class="alert alert-success" style="display:none;" id="emailSentSuccess">
Verification link has been sent to your email.<p>

<p class="alert alert-danger" style="display: none;" id="emailSendFailure">
Something went wrong pleasetry again later.<p>
</div>
	<div class="row">
	<div class="col-lg-3" style="margin-top:5%; margin-bottom:3%; padding:3px;">
	
	<?php
	foreach ($data as $value) {
		$dp=$value['recruiter_logo'];
		if($dp=='')
		{
			?>

			<table style="text-align:center;">
	<tr><td class="padding view overlay zoom contain" rowspan="4" width="90%" >
				<img class="imgshadow zoom" src="<?= base_url(); ?>images/nologo.png" width="90%" style="border-radius:20px;" alt="Profile Picture">
			<div class="middle">
    <div class="texttt"><a class="href" href="<?= base_url(); ?>RecruiterRegistrationStep5?id=<?= $value['recruiter_email']; ?>" title="Update Logo"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMdSURBVEhLtZbLaxRBEMbX9wPB9xtB8B9QxMdBHbd6E3NQfGURk2z3xEhunjx4MhHx6M2jCHoRMaIiEr14NmiiImpUUE8iHnRnNskhJmb9qqd7dtbNJjOb7AfD7lR316+ruqZmUvWQ79IRX4nbuK7llbPVmOurvKQLABbDS4q854pdZrg+KmazC31FL8vAGk5eXeAaKMWV352Z5XxVhUvabZbMXEXlLPaU6GXn+O1jMM51Be77y8AWPluRI9p5nqKb1rmFey37VuK+Eq7o68S5pkVmeXJpoBRXf7mNW6aESzFQDhbFfE7sMG6SiUHY+R0NkfSZz7gqvKNxFea+itjHhtoa1hlX8VV0nPmI4m7ghMY9l7La3t09Nw4c413aURIVO3cuwOIe43TMQvMqI9jxcOuhjdXgfk6sxpzz2lEScTpRlfcsFI2ime0aKmlE26X4OBVcO0oihmLxfeP8Twh102ShAYA+jUjabNaEcNTBIBch22MrgNLDCqikdDWolxOnItXeVWhvWsv22NJQKR6FUCVOsn1S6JnMJh7zZbod9+MY/5I4SlYApcfG8aiFFnIZpwyKcw2hilwNtZsxGYgt7iw4U9MGAXUzJ9geGxqxxxb3Xjh/YqEFScfZXpDpA/9DuYJ5DI+KKkFp0Npja6J57xLs/On00JJzNBMZQhV9GFbOBrbHFp8pnDwLoYqOsV1DFQ1PC5Xi/VAHrWd7IjEohObEUW1zaX8F1ETkq3SuFKl4V1P/ZWHxdQ1AH+b7CmgkjUh7WylSepv4ObXiBo9U/dAQFEoxlZoDh90A28Y+KRSbfFMzlOW3Hdxjdv83mrK8atjOUHt2yEprCUqvC6edNXpirYKTy0Fkos+YtL53Hl4aQl3REkI5E3jb6EkzEVKmvxIAvmhMofj9i8LriKR3gN+vZrh2cYcBcCIA0y0+bz5PROXC1oNseEGU+urnzxmzdGZCkzgbccwRfbMbsRc2NApbb+LmMJVQzQ+ikBCGKkex3eCXw8+ss8xMnz3B+XMN4iglvcD/S/zty4+UmVIfeTK9DdDWWU3jtEql/gED8UvZCweVwAAAAABJRU5ErkJggg==" alt="icon"></a></div>
  </div></img>
			</td></tr>
			</table>

			<?php
		}
		else
		{
	?>
	

	<table style="text-align:center;">
	<tr><td class="padding view overlay zoom contain" rowspan="4" width="90%" >
				<img class="imgshadow zoom" src="<?= base_url(); ?>logo/<?= $value['recruiter_logo']; ?>" width="90%" style="border-radius:20px;" alt="Profile Picture">
			<div class="middle">
    <div class="texttt"><a class="href" href="<?= base_url(); ?>RecruiterRegistrationStep5?id=<?= $value['recruiter_email']; ?>" title="Update Logo"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMdSURBVEhLtZbLaxRBEMbX9wPB9xtB8B9QxMdBHbd6E3NQfGURk2z3xEhunjx4MhHx6M2jCHoRMaIiEr14NmiiImpUUE8iHnRnNskhJmb9qqd7dtbNJjOb7AfD7lR316+ruqZmUvWQ79IRX4nbuK7llbPVmOurvKQLABbDS4q854pdZrg+KmazC31FL8vAGk5eXeAaKMWV352Z5XxVhUvabZbMXEXlLPaU6GXn+O1jMM51Be77y8AWPluRI9p5nqKb1rmFey37VuK+Eq7o68S5pkVmeXJpoBRXf7mNW6aESzFQDhbFfE7sMG6SiUHY+R0NkfSZz7gqvKNxFea+itjHhtoa1hlX8VV0nPmI4m7ghMY9l7La3t09Nw4c413aURIVO3cuwOIe43TMQvMqI9jxcOuhjdXgfk6sxpzz2lEScTpRlfcsFI2ime0aKmlE26X4OBVcO0oihmLxfeP8Twh102ShAYA+jUjabNaEcNTBIBch22MrgNLDCqikdDWolxOnItXeVWhvWsv22NJQKR6FUCVOsn1S6JnMJh7zZbod9+MY/5I4SlYApcfG8aiFFnIZpwyKcw2hilwNtZsxGYgt7iw4U9MGAXUzJ9geGxqxxxb3Xjh/YqEFScfZXpDpA/9DuYJ5DI+KKkFp0Npja6J57xLs/On00JJzNBMZQhV9GFbOBrbHFp8pnDwLoYqOsV1DFQ1PC5Xi/VAHrWd7IjEohObEUW1zaX8F1ETkq3SuFKl4V1P/ZWHxdQ1AH+b7CmgkjUh7WylSepv4ObXiBo9U/dAQFEoxlZoDh90A28Y+KRSbfFMzlOW3Hdxjdv83mrK8atjOUHt2yEprCUqvC6edNXpirYKTy0Fkos+YtL53Hl4aQl3REkI5E3jb6EkzEVKmvxIAvmhMofj9i8LriKR3gN+vZrh2cYcBcCIA0y0+bz5PROXC1oNseEGU+urnzxmzdGZCkzgbccwRfbMbsRc2NApbb+LmMJVQzQ+ikBCGKkex3eCXw8+ss8xMnz3B+XMN4iglvcD/S/zty4+UmVIfeTK9DdDWWU3jtEql/gED8UvZCweVwAAAAABJRU5ErkJggg==" alt="icon"></a></div>
  </div></img>
			</td></tr>
			</table>


				<?php
			}
}
	?>



</div>
<div class="col-lg-offset-1 col-lg-3 refer_earn" style="margin-top:5%; margin-bottom:3%; padding:3px;">
	 <div class="col_3 background">
	   	  	<h3 class="radius">Welcome,  <?= base64_decode(base64_decode( $value['recruiter_company_name'])); ?></h3>
	<table width="100%" >
		<th colspan="3"></th>

			
			
			<tr class="border"><td class="fontSize padding"><b>Member Since:</b></td><td class="fontSize"><?php echo $value['recruiter_member_since']; ?></td></tr>
			<tr class="border"><td class="fontSize padding"><b>Category:</b></td><td class="fontSize"><?=  base64_decode(base64_decode($value['recruiter_category'])); ?></td></tr>
			<tr class="border"><td class="fontSize padding"><b>Location:</b></td><td class="fontSize">
				<div itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?= $value['recruiter_country']; ?></span></div></td></tr>
			</table>
		</div>
	
</div>


<div class="col-lg-offset-1 col-lg-4" style="margin-top:5%; margin-bottom:3%; padding:3px;">
	<div class="social background padding" style="margin-bottom:2%;">	
		<h5><font color="#d3404e"><b>Help us Engage more audience:</b></font></h5>
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="http://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
						<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
					
			   </div>
	<?php
	foreach ($data as $value) {
		
	?>
	 <div class="col_3 background refer_earn">
	 	
<h3 class="radius">Profile Completeness</h3>
	<table width="100%">
		
			<tr class="border"><td class="fontSize padding"colspan="2">
			<?php 
			$checkbalance=$value['recruiter_balance']; 
				
				if(!empty($value['recruiter_email']) && empty($value['recruiter_company_name']))
				{
					?>
					<font color="#d3404e"><b>16%</b> </font><progress value="16" max="100">
</progress> 
					<?php
				}
				elseif(!empty($value['recruiter_company_name']) && empty($value['recruiter_country']))
				{
					?>
				<font color="#d3404e"><b>32%</b> </font><progress value="32" max="100">
</progress>
			<?php
				}
				elseif(!empty($value['recruiter_country']) && empty($value['recruiter_description']))
				{
					?>
			<font color="#d3404e"><b>48%</b> </font><progress value="48" max="100">
</progress>
<?php
				}
				elseif(!empty($value['recruiter_description']) && empty($value['recruiter_logo']))
				{
					?>
<font color="#d3404e"><b>64%</b> </font><progress value="64" max="100">
</progress>
			<?php
				}
				elseif(!empty($value['recruiter_logo']))
				{
					?>
			<font color="#d3404e"><b>80%</b> </font><progress value="80" max="100">
</progress> 
<?php
}
?>
</td></tr>
	
	<!--<tr class="border"><td class="fontSize padding" colspan="2"><font color="#f15f43"><b>100%</b> </font><progress value="100" max="100" style="color:red;">
</progress></td></tr>-->


			<tr class="border"><td class="fontSize padding"><b>Rating:</b></td><td class="fontSize">
				<?php
					if($countrating!=0 || $countreview!=0)
					{
				?>
				<a href="<?= base_url() ?>RecruiterRatingDashboard">View Rating & Review</a>
			<?php
		}
		else
		{
			echo 'No rating and review';
		}
			?></td></tr>
			<tr class="border"><td class="fontSize padding"><b>Profile Views:</b></td><td class="fontSize"><?= $value['recruiter_profile_viewed'].' Times'; ?></td></tr>
			<!--<tr><td><b>Shortlisted:</b></td><td><?= $value['recruiter_shortlist'].' Times'; ?></td></tr>
			--><tr class="border"><td class="fontSize padding"><b>Credits:</b></td><td class="fontSize"><?= $value['recruiter_balance']; ?>  <a href="<?= base_url(); ?>RecruiterAddBalance" style="text-decoration:none; color:#d3404e;">Add More Credits >></a></td></tr>
<?php
			if($checkbalance<50)
				{


			?>
			<tr class="border"><td class="fontSize padding" colspan="2"><font color="red"><b><a href="RecruiterAddBalance" class="complete" style="text-decoration:none;">Users prefer a 100% complete profile. Complete Yours</a></b></font></td></tr>
			<?php
				}
			?>
	</table>
</div>
	<?php
}
	?>
</div>

</div>


<div class="row">
		<div class="col-lg-5" style="margin-bottom:5%; padding:3px;">
		<?php
	foreach ($data as $value) {
		$company=base64_decode(base64_decode($value['recruiter_company_name']));
			$established=base64_decode(base64_decode($value['recruiter_established']));
			$employee=base64_decode(base64_decode($value['recruiter_employee_strength']));
			$website=base64_decode(base64_decode($value['recruiter_website']));
			
			$category=base64_decode(base64_decode($value['recruiter_category']));
			$contact=base64_decode(base64_decode($value['recruiter_contact']));
			$description=base64_decode(base64_decode($value['recruiter_description']));
			
			$country=$value['recruiter_country'];
			$city=base64_decode(base64_decode($value['recruiter_city']));
			$state=base64_decode(base64_decode($value['recruiter_state']));
			$address=base64_decode(base64_decode($value['recruiter_address']));
			
		if (empty($established) || empty($employee) || empty($category) || empty($contact) || empty($description) || empty($country) || empty($city) || empty($state) || empty($address)) {
				
	?>
	<div class="col_3 background refer_earn">
		<h3 class="radius">My Profile<a href="<?= base_url(); ?>EditRecruiterProfile"></a>
	</h3><table width="100%" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"></td>
			</tr>
			<?php
			
			if(empty($established) || empty($employee))
			{
			?>
				
				<tr class="border"><td class="padding fontSize profile_left"><b>Established:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
				<tr class="border"><td class="padding fontSize profile_left"><b>Employee:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
				<tr class="border"><td class="padding fontSize profile_left"><b>Website:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
			<?php
			}
			elseif (empty($category) || empty($contact) || empty($description)) 
			{
			
			?>
			
			<tr class="border"><td class="padding fontSize profile_left"><b>Category:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="3">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
			<tr class="border"><td class="padding fontSize profile_left"><b>Contact:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="3">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
			<tr class="border"><td class="padding fontSize profile_left"><b>Description:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="3">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
			<?php
			}
				elseif (empty($country) || empty($city) || empty($state) || empty($address)) 
				{
			
			?>
			
			<tr class="border"><td class="padding fontSize profile_left"><b>City:</b></td><td class="fontSize"><span itemprop="contentLocation"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="4">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></span></td></tr>
			<tr class="border"><td class="padding fontSize profile_left"><b>State:</b></td><td class="fontSize"><span itemprop="contentLocation"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="4">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></span></td></tr></div>
			<div itemscope itemtype="http://schema.org/Country">
			<tr class="border"><td class="padding profile_left fontSize"><b>Address:</b></td><td class="fontSize"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
							<input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
							<input type="hidden" name="step" value="4">
							<button type="submit" style="border:none; color:#f15f43; background-color: white;" >Add Now>></button>
						</form></td></tr>
			<?php
				}
			}
				elseif (!empty($established) && !empty($employee) && !empty($category) && !empty($contact) && !empty($description) && !empty($country) && !empty($city) && !empty($state) && !empty($address)) {
					
				?>

				<div class="col_3 background refer_earn">
						<h3 class="radius fontSize">Company Profile<a href="<?= base_url(); ?>EditRecruiterProfile"><img style="float:right;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGiSURBVDhPpZM5SwNRFEZjYRTcavc12on4A8SIlXZxKSRgLyoqcesEGwuxkVhY2djZuVb6HwTBJYq4VIKgYBGFGc993gmDPJNJ/OBw30y+e5zRGCokjuNUwDacua7bq7cLD6JVRCac0zCgH+UXFhshiaecefSjzEgHtRY87K6oYB/ktY/lWqLSTq1mD8VqdnaYlbClApt0Tlf+DqUauIRndlqgiLNfKj/kBD6gQ9fsoVALV/AE7ThGmKdQBhkpo4rZrWv2UKiDazAyGIYvlcQZ/icd1TV7KNRDCh4hAn7ZMqMU1jjL60Z1zR6KDZRuwS/7FBlZ4lwC5g/BjOuaPXSaKN2ByNpgCIyMuQh+2YKu2UOhGe5BZK0gsrS3DCIzX2ZmQtfsoSC/C3myBxBZDDIyRpjpyQJ918akTLo4+2XzDJEdgmRGV7KH4i6k9DwOL5D4JZs25VxhqZjyK2zqLZH2qOwAJJP6Ue5QjrIsrxeTaxX1gfw7SSZMMWhYWFfhBezBm16/Q/An88LSuQgknG9gg2M/hLWSXxBMwSxE9NY/Egp9A3flly2oRu2RAAAAAElFTkSuQmCC" alt="Edit profile"></a></h3>
					<table width="100%" style="border-collapse: collapse; font-size:.8em;">
						<th colspan="3"></th>
							<tr><td colspan="2"></td>
							</tr>
								<tr class="border"><td class="fontSize padding"><b>Established:</b></td><td class="fontSize"><?= $established; ?></td></tr>
								<tr class="border"><td class="fontSize padding"><b>Employee:</b></td><td class="fontSize"><?= $employee; ?></td></tr>
								<tr class="border"><td class="fontSize padding"><b>Website:</b></td><td class="fontSize"><?= $website; ?></td></tr>
					</table>
				</div>
			
			<div class="col_3 background refer_earn">
		<h3 class="radius fontSize">Company Description<a href="<?= base_url(); ?>EditRecruiterProfile"><img style="float:right;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGiSURBVDhPpZM5SwNRFEZjYRTcavc12on4A8SIlXZxKSRgLyoqcesEGwuxkVhY2djZuVb6HwTBJYq4VIKgYBGFGc993gmDPJNJ/OBw30y+e5zRGCokjuNUwDacua7bq7cLD6JVRCac0zCgH+UXFhshiaecefSjzEgHtRY87K6oYB/ktY/lWqLSTq1mD8VqdnaYlbClApt0Tlf+DqUauIRndlqgiLNfKj/kBD6gQ9fsoVALV/AE7ThGmKdQBhkpo4rZrWv2UKiDazAyGIYvlcQZ/icd1TV7KNRDCh4hAn7ZMqMU1jjL60Z1zR6KDZRuwS/7FBlZ4lwC5g/BjOuaPXSaKN2ByNpgCIyMuQh+2YKu2UOhGe5BZK0gsrS3DCIzX2ZmQtfsoSC/C3myBxBZDDIyRpjpyQJ918akTLo4+2XzDJEdgmRGV7KH4i6k9DwOL5D4JZs25VxhqZjyK2zqLZH2qOwAJJP6Ue5QjrIsrxeTaxX1gfw7SSZMMWhYWFfhBezBm16/Q/An88LSuQgknG9gg2M/hLWSXxBMwSxE9NY/Egp9A3flly2oRu2RAAAAAElFTkSuQmCC" alt="Edit profile"></a>
	</h3><table width="100%" style="border-collapse: collapse; font-size:.8em;">
		<th colspan="3"></th>
			<tr><td colspan="2"></td>
			</tr>
	
			<tr class="border"><td class="fontSize padding"><b>Category:</b></td><td class="fontSize text-center"><?= $category; ?></a></td></tr>
			<tr class="border"><td class="fontSize padding"><b>Contact:</b></td><td class="fontSize text-center"><?= $contact; ?></td></tr>
			<tr class="border"><td class="fontSize padding"><b>Description:</b></td><td class="fontSize padding"><?= $description; ?></td></tr>
			
			
		</table>
	</div>
		

		<div class="col_3 background refer_earn">
		<h3 class="radius fontSize">Address detail<a href="<?= base_url(); ?>EditRecruiterProfile"><img style="float:right;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGiSURBVDhPpZM5SwNRFEZjYRTcavc12on4A8SIlXZxKSRgLyoqcesEGwuxkVhY2djZuVb6HwTBJYq4VIKgYBGFGc993gmDPJNJ/OBw30y+e5zRGCokjuNUwDacua7bq7cLD6JVRCac0zCgH+UXFhshiaecefSjzEgHtRY87K6oYB/ktY/lWqLSTq1mD8VqdnaYlbClApt0Tlf+DqUauIRndlqgiLNfKj/kBD6gQ9fsoVALV/AE7ThGmKdQBhkpo4rZrWv2UKiDazAyGIYvlcQZ/icd1TV7KNRDCh4hAn7ZMqMU1jjL60Z1zR6KDZRuwS/7FBlZ4lwC5g/BjOuaPXSaKN2ByNpgCIyMuQh+2YKu2UOhGe5BZK0gsrS3DCIzX2ZmQtfsoSC/C3myBxBZDDIyRpjpyQJ918akTLo4+2XzDJEdgmRGV7KH4i6k9DwOL5D4JZs25VxhqZjyK2zqLZH2qOwAJJP6Ue5QjrIsrxeTaxX1gfw7SSZMMWhYWFfhBezBm16/Q/An88LSuQgknG9gg2M/hLWSXxBMwSxE9NY/Egp9A3flly2oRu2RAAAAAElFTkSuQmCC" alt="Edit profile"></a>
	</h3><table width="100%" style="border-collapse: collapse; font-size:.8em;" >
		<th colspan="3"></th>
			<tr><td colspan="2"></td>
			</tr>
	
			<tr class="border"><td class="fontSize padding"><b>Country:</b></td><td class="fontSize text-center"><span itemprop="contentLocation"><?= $country; ?></span></td></tr>
			<tr class="border"><td class="fontSize padding"><b>City:</b></td><td class="fontSize text-center"><span itemprop="contentLocation"><?= $city; ?></span></td></tr>
			<tr class="border"><td class="fontSize padding"><b>State:</b></td><td class="fontSize text-center"><span itemprop="contentLocation"><?= $city; ?></span></td></tr></div>
			<div itemscope itemtype="http://schema.org/Country">
			<tr class="border"><td class="fontSize padding"><b>Address:</b></td><td class="text-center"><?= $address; ?></td></tr>
		</div>
	</div>

				<?php
				}
			?>

			
			
	</table>
</div>
	<?php
}
	?>


          <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- sidebar -->
<!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->

        
</div>
<div class="col-lg-offset-1 col-lg-6 refer_earn" style="margin-bottom:5%; padding:3px;">
	<div class="col_3 background">
	<h3 class="radius">Employee Recommendation</h3>
	<?php
		if(empty($featuredemployeecount))
		{
			?>
			<table width="100%" style="border-collapse: collapse; text-align:center;" >
				
<tr><td><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
			</table><?php
		}
		else
		{
		?>
	<table width="100%" style="border-collapse: collapse; text-align:center;" id="employeerecommendation">
		
		<thead>
		
			 <tr style="text-align:center;">
	 	<td><div id="loading2"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
			<tbody>
			</tbody>
		
	
	</table>
	<?php
		}
			?>

<div style='margin-top: 10px; text-align:center;' class="padding" id='paginationemployeerecommendation'></div>	
	 </div>
	 </div>
	  <!-- pagination jquery for today jobs-->
			
			
	<script src="<?= base_url(); ?>js/paginationjquery.js"></script>


	<!--pagination jquery end-->


	<!--adsense code-->
	<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- leaderboard -->
<!--<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="2184624883"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->
<!--adsense code end-->

</div>
	<div class="row">
		<div class="col-lg-6 refer_earn" style="margin-bottom:5%;">
				<div class="col_3 background">
				<h3 class="radius">Jobs by me</h3>
				<?php
				if($myjobs=='null')
				{
					?>
					<b class="padding">
You haven't posted any job yet.
</b>

			<?php
				}
				else
				{
				?>
			<table width="100%" id="jobsByMeList" style="border-collapse: collapse;">
			
			<!--<tr><td class="left"></td><td>Viewed</td><td>Applied</td></tr>-->
				
<thead>
					<tr style="text-align:center;">
	 	<td><div id="loading1"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
</thead>
			
				<tbody></tbody>

	
			
		</table>
		<?php
					
				}
				?>
		<div style='text-align:center;' class="padding" id='jobsPostedPagination'></div>
		<div style="text-align: center;" class="padding"><a href="<?= base_url();?>SubmitJobForm" class="postjob">Post a new job>></a> 
			<?php
			if($myjobs != 'null')
			{
			?>
			<a href="<?= base_url();?>RecruiterJobList" >All Jobs List>></a>

			<?php
		}
			?>
		</div>

		</div>
		</div>

			
		<!-- pagination for jobs posted by-->

<script src="<?= base_url(); ?>js/jobsByMe.js"></script>

		<div class="col-lg-offset-1 col-lg-5 refer_earn" style="margin-bottom:5%; padding:3px;">
				<div class="col_3 background" ><h3 class="radius">My referral progress this month</h3>
				<table width="100%"  style="border-collapse: collapse;">
		<th colspan="4"></th>
			<tr><td></td></tr>
			<tr class="border"><td  colspan="2" class="padding fontSize profile_left"><b>Total Clicks:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="2" class="padding fontSize profile_left"><b>Total Earned:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center" class="padding fontSize profile_left"><a  style="text-decoration:none; cursor:pointer;" id="sharebutton" class="postjob">Share my referral link>></a></td></tr>
			
		<?php

		 foreach ($data as $value) {
				   				# code...
				   		
				
				   					?>





<tr class="social padding" style="text-align:center">
					
	
				<td class="padding">	<a class="btn_1" target="_blank" id="shareicon" style="cursor:pointer; display:none;" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					</td><td><a class="btn_1" target="_blank" id="shareicon1" style="cursor:pointer; display:none;"  href="https://twitter.com/share?url=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a></td><td>

					<a class="btn_1" id="shareicon3" style="cursor:pointer; display:none;"  href="https://www.linkedin.com/shareArticle?mini=true&url=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>&title=Find a job and get recruited online&summary=online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
&source=https://get-job.online" target="_blank">
						<i class="fa fa-linkedin linkedin"></i>
						<span class="share1 linkedin">Share</span>
					</a></td>
			   </tr>

<?php


		}
				?>

			</table>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col_3 col-lg-6 refer_earn" style="margin-bottom:5%;">
				
				<div class="col_3 background">
				<h3 class="radius">Articles<font style="float:right; font-size: .7em;">
					<?php

		 foreach ($data as $value) {
				   				# code...
				   		
				   					?>
				   					<a href="<?= base_url(); ?>RecruiterSubmitArticle?uid=345629856&s=78nbhgdft4dc43322&su=<?= $value['recruiter_id']; ?>" style="color:white;text-decoration:none;">Post an article >></a>

				   					<?php
				   				}
				   					?></font></h3>
			<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			
			<?php
			if(empty($articles))
			{
				 foreach ($data as $value) {
?>
<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
<tr><td class="padding" style="text-align: center;">
<a href="<?= base_url(); ?>RecruiterSubmitArticle?uid=345629856&s=78nbhgdft4dc43322&su=<?= $value['recruiter_id']; ?>" class="postjob">Add a new article>></a>
</td></tr><?php
}
			}
			else {

			foreach ($articles as $key ) {
				
			
			?>
			<tr class="border">
<td width="10%">
	<?php

	if(empty($key['recruiter_articleThumbnail']))
	{
		?>
<img src="<?=base_url(); ?>RecruiterarticleImages/ArticleImageNotAvailable.gif" width="70%" style="padding:5%;" alt="loading"/>
		<?php
	}
	else
	{
	?>
	<img src="<?=base_url(); ?>RecruiterarticleImages/<?= $key['recruiter_articleThumbnail']; ?>" style="padding:5%;" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="loading"/>
<?php
}
$singleid=$key['recruiter_articleUid'];
$uidResult=$this->fetch->fetchlogo1($singleid);
?>
			<td class="profile_left padding" width="90%"><a href="<?= base_url();?>RecruiterSingleArticle?art=<?= $key['recruiter_articleHeading']; ?>&aid=<?= $key['recruiter_articleId']?>"><?= base64_decode(base64_decode($key['recruiter_articleHeading'])); ?></a><br><font class="authorName">- <?php
				foreach ($uidResult as $resultkey) 
				{

					$empname=base64_decode(base64_decode($resultkey['recruiter_company_name']));
					if(empty($empname) || $empname=='' || $empname==null)
					{
						$authorName='Unknown';
					}
					else
					{
						$authorName=$empname;
					}

					echo $authorName;

				}
				?></font></td></tr>
	<?php
}
}
	?>
		</table>
		</div>
		</div>
</div>


</div>
<div class="container">
<div class="row refer_earn" style="margin-top:2%;">
	 <div class="col_3 background">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	  </div>
</div>
</div>
</br>
<?php include 'footer.php'; ?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
$(document).ready(function(){
    $("#sharebutton").click(function(){
        $("#shareicon").fadeIn("slow");
        $("#shareicon1").fadeIn(3000);
        $("#shareicon2").fadeIn(3000);
        $("#shareicon3").fadeIn(3000);
    });
});

$(document).ready(function(){
    $("#submitbtn").click(function(){
       
        $("#emailSent").hide(500);
        $("#loadingAfterSend").show(500);
    });
});






   //shortlist  employee by a recruiter
      $('#sendAgainEmail').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/sendagainemail'); ?>",
        data: $('#sendAgainEmail').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		
        		$('#loadingAfterSend').hide(500);
            	$('#emailSendFailure').show(500);
        
        }
        else if(response==1)
        {
        
       
        	$('#loadingAfterSend').hide(500);
           $('#emailSentSuccess').show(500);
           
        }
        
        }
        
   });

});
</script>
</html>	