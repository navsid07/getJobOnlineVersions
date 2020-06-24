<!--A Design by W3layouts

Author: W3layout

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

--><?php
//session_start();

//echo $id=$this->session->userdata('eid');

/*if(!empty($id))

{

	echo 'isset';

}

else

{

	echo 'notisset';

}*/

		
 $linkid=$this->session->userdata('linkid');
 if(!empty($linkid))
 {
 	$this->session->unset_userdata('linkid');
 }
$recruiterCookie=get_cookie('sessionCookieRecruiter');
$employeeCookie=get_cookie('sessionCookieEmployee');
 $employe_session=$this->session->userdata('employe_id');
 $recruiter_session=$this->session->userdata('recruiter_id');

?><!DOCTYPE HTML>

<html  lang="en">

<head><?php

include 'fav.php';

?><title><?php

		$emplyee_uuid=$this->session->userdata('employe_id');
		foreach ($jobs as $key ) {
	$substr= base64_encode($key['submitjob_job_title']);
	$subb= substr($substr, 0, 15);
	echo base64_decode($subb);
} ?></title>


<meta name="description" content="job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.Online job portal for job providers and job seekers" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta name="keywords" content="job consultants in bathinda, job opportunities, career center, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />




<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="<?= base_url(); ?>js/jquery.min.js"></script>

<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>

<!-- Custom Theme files -->

<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />


<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!----font-Awesome-->

<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 

<!----font-Awesome-->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


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

<style>
  .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: white;
 text-shadow: 0 0 5px #230046;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #230046;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: white;
  text-shadow: 0 0 5px #230046;
}


<style>
	/* Three column layout */
.sidee {
    float: left;
    width: 15%;
  
}

.middlee {

    float: left;
    width: 70%;
}

/* Place text to the right */
.floatright {
    text-align: right;
    
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

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


/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .sidee, .middlee {
        width: 100%;
    }
    .floatright {
        display: none;
    }
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

<link rel="stylesheet" href="<?= base_url(); ?>css/modal.css">
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>



</head>

<body>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><font color="#230046">Rate Recruiter Here</font></h4>
        </div>
      
        <form action="<?= base_url(); ?>RecruiterRating" method="post" class="form">  <div class="modal-body">
        	 <div class="rating">
  <label>
    <input type="radio" name="rating" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="rating" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="rating" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="rating" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="rating" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</div>
</br>
	<input type="text" placeholder="Review title here" name="title" class="form-control" required>
			</br>
			<textarea cols="10" class="form-control" name="review" Placeholder="Write something exciting for the recruiter" required></textarea>
        	 
	<input type="hidden" value="<?= $emplyee_uuid; ?>" name="uid">
        	 <?php

        	 foreach ($recruiter as $value) {

?>
        	<input type="hidden" name="rid" value="<?= $value['recruiter_id']; ?>">
       <?php
}
       ?>
        </div>
        <div class="modal-footer">
         <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>-->
         <button type="submit" class="btn regularButton">Submit</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>


<!-- rating modal end-->


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
	        <?php
	        if(!empty($recruiter_session) || !empty($recruiterCookie))
	        {
	        ?>
	        <ul class="nav navbar-nav">
		      
		      <?php
		      	include('RecruiterHeaderLi.php');
		      ?> 
		        
	        </ul>
	        <?php
	        	}
	        	elseif(!empty($employe_session) || !empty($employeeCookie))
	        	{
	        		?>

	        <ul class="nav navbar-nav">

		       <?php
		       			include('EmployeeHeaderLi.php');
		       ?>
			    

	        </ul>

	        		<?php
	        	}
	        ?>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>

<div id="spacer">
		&nbsp;
	</div>
	<div id="spacetop">
		
	</div>

<div class="container">
<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Recruiterdetail</span></li></ul>
	<?php

	if($alert=$this->session->flashdata('alert')):

		$alert_class=$this->session->flashdata('alert_class');

	?>

	<div class="row" style="margin-top:2%;">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?=  $alert_class; ?>">

			  

			  <?= $alert ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

		

		

			?>

			<?php

	if($reportRecruiter1=$this->session->flashdata('reportRecruiter1')):

		$reportRecruiter1_class=$this->session->flashdata('reportRecruiter1_class');

	?>

	<div class="row" style="margin-top:2%;">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?=  $reportRecruiter1_class; ?>">

			  <?= $reportRecruiter1 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

		

		

			?>



	<div class="row">

	<div class="col-lg-8 col_3" style="text-align:center; margin-top:5%; margin-bottom:3%;">

	<table width="100%" class="background">

		<?php

		foreach ($recruiter as $value) {

			

		?>

			<tr><td colspan="2"><h3 class="radius"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></h3></td>

			</tr>


			<tr><td colspan="2" class="padding"><font size=""><?php if(!empty($value['recruiter_description']))
			{ echo base64_decode(base64_decode($value['recruiter_description']));} else{ 
				if($requestInfo==0)
				{
				?>
				<form method="post" id="requestMoreInfoRecruiterForm">
					<input type="hidden" name="request" value="1">
					<input type="hidden" name="uid" value="<?= $value['recruiter_id']; ?>">

					<?php
					if(!empty($employe_session))
					{
						?>
						<input type="hidden" name="sid" value="<?= $employe_session; ?>">
						<?php
					}
					 
					  elseif (!empty($employeeCookie)) {
					?>
					<input type="hidden" name="sid" value="<?= $employeeCookie; ?>">
					<?php

					}
					?>
					
					<button type="submit" class="btn regularButton" id="requestMoreInfoButton">Request More Info.</button>
				</form>
				<div class="col-md-offset-3 col-md-6 alert alert-success" style="display: none;" id="informationAsked"><b>Information Asked.</b></div>
				<?php
			} 
			else
			{
				echo '<div class="col-md-offset-3 col-md-6 alert alert-success"><b>Information Asked.</b></div>';
			}
		}
		?></font></td></tr>


			<tr><td colspan="2" class="padding" itemscope itemtype="http://schema.org/Place"><i class="fa fa-map-marker" aria-hidden="true"></i>
<span itemprop="name">
 <?= $value['recruiter_country']; ?></span></td></tr>

			
<?php
}
?>
				
	</table>

</div>



<div class="col-lg-4 col_3" style="margin-top:5%; margin-bottom:3%; padding:3px;">
	
	<div class="social background padding" style="margin-bottom:2%;">	
		<h5><font color="#d3404e"><b>Help us Engage more audience:</b></font></h5>
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="https://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
	<?php
	foreach ($recruiter as $value) {
		
	?>

	<table width="100%" class="background">
		<th colspan="2"></th>
		<tr><td colspan="2"><h3 class="radius">Profile Completeness</h3></td></tr>
			
			<?php 
			$checkbalance=$value['recruiter_balance']; 
				if($checkbalance<50)
				{


			?>
			
			<tr><td colspan="2" class="padding"><font color="#230046"><b>50%</b> </font><progress value="50" max="100">
</progress> </td></tr>

<?php
}
else
{
	?>

	<tr><td colspan="2" class="padding"><font color="#230046"><b>100%</b> </font><progress value="100" max="100" style="color:red;">
</progress></td></tr>

<?php
}
if($jobcount=='null')
{
	$count='0';
}
else
{
	$count=$jobcount;
}
?>
			<tr><td class="padding"><b>Category:</b></td><td><?= base64_decode(base64_decode($value['recruiter_category'])); ?></td></tr>
			<tr><td class="padding"><b>Profile Views:</b></td><td><?=  $value['recruiter_id'].$value['recruiter_profile_viewed'].' Times'; ?></td></tr>
			<tr><td class="padding"><b>Current Job Openings:</b></td><td><?= $count; ?></td></tr>

			<tr><td colspan="2" style="text-align:center;" class="padding" ><a class="alert-link" id="report" style="cursor:pointer; text-decoration: none;">Report this user</a>
				<a id="hide" class="alert-link" style="display:none; cursor:pointer; text-decoration: none;">Hide Report x</a>
			</td></tr>
			<tr><td class="padding" colspan="2">

					<span  style="display:none;color:green; font-weight:bold;" id="reportSuccessmsg">Your report successfully submitted.</span>

					<span  style="display:none;color:red; font-weight:bold;" id="reportFailuremsg">Something went wrong please try after sometime.</span>
			<table id="reportRecruiter" width="100%" align="center" style="display: none;">
				<form id="reportRecruiterForm"  method="post">
					<?php $get_rid=$this->input->get('id'); ?>
			<tr><td class="padding">
				
		<input type="radio" name="select" value="Spam"> Spam</td>
		<td class="padding">
				<input type="hidden" name="getRid" value="<?= $get_rid; ?>">

			<input type="radio" name="select" value="Unresponsive" > Unresponsive</td></tr>
			<tr><td class="padding" colspan="2" style="text-align: center;"><textarea class="form-control" name="reportRecruiter" Placeholder="Write something about your report"></textarea></td></tr>
			<tr><td class="padding" colspan="2"><input type="submit" class="regularButton" value="Report"></td></tr>
		</form>
	</table>
	</td></tr>
			<tr><td colspan="2" class="padding" style="text-align:center;" id="ratingStars">
				<?php
				if($ratingstar==0)
				{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	    
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon">
			<img src="<?= base_url();?>images/ratingstars/starempty20.png" alt="icon"> 
		<img src="<?= base_url();?>images/ratingstars/starempty25.png" alt="icon">
		<img src="<?= base_url();?>images/ratingstars/starempty30.png" alt="icon">  </a>
				<?php
			}
			if($ratingstar > 0 && $ratingstar < 1)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	   
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty20.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty25.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starhalf30.png" alt="icon">    </a>
				<?php
			}
			
			if($ratingstar == 1)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	   
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon">
			<img src="<?= base_url();?>images/ratingstars/starempty20.png" alt="icon">
			<img src="<?= base_url();?>images/ratingstars/starempty25.png" alt="icon">  
		<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">  </a>
				<?php
			}
			if($ratingstar > 1 && $ratingstar < 2)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	   
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon">
			<img src="<?= base_url();?>images/ratingstars/starempty20.png" alt="icon"> 
		<img src="<?= base_url();?>images/ratingstars/starhalf25.png" alt="icon"> 
	<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">  </a>
				<?php
			}
			if($ratingstar == 2)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon">
				 <img src="<?= base_url();?>images/ratingstars/starempty20.png" alt="icon">
				 <img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon">  
				 <img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">    </a>
				<?php
			}
			if($ratingstar > 2 && $ratingstar < 3)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon">
				 <img src="<?= base_url();?>images/ratingstars/starhalf20.png" alt="icon">
				 <img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon">
				 <img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">      </a>
				<?php
			}
			if($ratingstar == 3)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	
				 <img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starempty15.png" alt="icon"> 
			<img src="<?= base_url();?>images/ratingstars/starfill20.png" alt="icon">
			<img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon"> 
			<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">    </a>
				<?php
			}
			if($ratingstar > 3 && $ratingstar < 4)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starhalf15.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starfill20.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon"> 
					<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">      </a>
				<?php
			}
			if($ratingstar == 4)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	
					<img src="<?= base_url();?>images/ratingstars/starempty10.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starfill15.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starfill20.png" alt="icon">
				<img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon">  
				<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">     </a>
				<?php
			}
			if($ratingstar > 4 && $ratingstar < 5)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	
					<img src="<?= base_url();?>images/ratingstars/starhalf10.png" alt="icon">
					<img src="<?= base_url();?>images/ratingstars/starfill15.png" alt="icon"> 
					<img src="<?= base_url();?>images/ratingstars/starfill20.png" alt="icon"> 
					<img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon">
					<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">     
				</a>
				<?php
			}
			if($ratingstar == 5)

			{
				?>
				<a href="" class="alert-link" style="text-decoration:none;" title="Rate this recruiter" data-toggle="modal" data-target="#myModal">	
					<img src="<?= base_url();?>images/ratingstars/starfill10.png" alt="icon">
					<img src="<?= base_url();?>images/ratingstars/starfill15.png" alt="icon">
					<img src="<?= base_url();?>images/ratingstars/starfill20.png" alt="icon">
					<img src="<?= base_url();?>images/ratingstars/starfill25.png" alt="icon">
					<img src="<?= base_url();?>images/ratingstars/starfill30.png" alt="icon">       
				</a>
				<?php
			}
			
				?></br>
			<?php
							if($ratingcount==0)
							{

							
			?>
				<p><?php echo $ratingstar ?>  average based on <?php echo $ratingcount; ?> reviews.</p>

			<?php
			}
			else
			{
				?>
				<p><a href="<?= base_url(); ?>RecruiterRatingDetail?rid=<?= $value['recruiter_id']; ?>"><?php echo $ratingstar ?>  average based on <?php echo $ratingcount; ?> reviews.</a></p>
			<?php
			}
			?>
</td></tr>

			
<?php
			if($checkbalance<50)
				{


			?>
			<!--<tr><td colspan="2" class="padding"><font color="red"><b><a href="<?= base_url(); ?>recruiter/addbalance" class="complete" style="text-decoration:none; on">Users prefer a 100% complete profile.Complete Yours</a></b></font></td></tr>-->
			<?php
				}
			?>
	</table>

	<?php
}
	?>
</div>

</div>
<!--<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			
<div class="col_3 cool radius margin-bottom">
	   	  	
	   	  	<h3 class="radius">Rating & Review</h3>
  	<ul class="list_1" class="radius">
	   	  	
	   	  		<li style="text-align:center;" class="border padding">
<p><?php echo $ratingstar ?>  average based on <?php echo $ratingcount; ?> reviews.</p>
<p>Out of 5</p>

<hr style="border:3px solid #f1f1f1">
</li>



	<li class="border padding">
  <div class="sidee">
    <div>5 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
    	<?php

    	if($recruiter5star=='')
    	{
    		?>
<div class="bar-0"></div>
    		<?php
    	}
    	

    	elseif($recruiter5star>0 || $recruiter5star<=20)
    	{
    		?>
<div class="bar-10-20"></div>
    		<?php
    	}
    	

    	elseif($recruiter5star>20 || $recruiter5star<=40)
    	{
    		?>
<div class="bar-20-30"></div>
    		<?php
    	}
    	

    	elseif($recruiter5star>40 || $recruiter5star<=60)
    	{
    		?>
<div class="bar-50-60"></div>
    		<?php
    	}
    	

    	elseif($recruiter5star>60 || $recruiter5star<=80)
    	{
    		?>
<div class="bar-60-70"></div>
    		<?php
    	}
    	

    	elseif($recruiter5star>60 || $recruiter5star<=100)
    	{
    		?>
<div class="bar-80-90"></div>
    		<?php
    	}
    	

    	else
    	{
    		?>
<div class="bar-100"></div>
    		<?php
    	}
    	?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter5star; ?></div>
  </div>
</li>

<li class="border padding">
  <div class="sidee">
    <div>4 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
     <?php

    	if($recruiter4star=='')
    	{
    		?>
<div class="bar-0"></div>
    		<?php
    	}
    	

    	elseif($recruiter4star>0 || $recruiter4star<=20)
    	{
    		?>
<div class="bar-10-20"></div>
    		<?php
    	}
    	

    	elseif($recruiter4star>20 || $recruiter4star<=40)
    	{
    		?>
<div class="bar-20-30"></div>
    		<?php
    	}
    	

    	elseif($recruiter4star>40 || $recruiter4star<=60)
    	{
    		?>
<div class="bar-50-60"></div>
    		<?php
    	}
    	

    	elseif($recruiter4star>60 || $recruiter4star<=80)
    	{
    		?>
<div class="bar-60-70"></div>
    		<?php
    	}
    	

    	elseif($recruiter4star>60 || $recruiter4star<=100)
    	{
    		?>
<div class="bar-80-90"></div>
    		<?php
    	}
    	

    	else
    	{
    		?>
<div class="bar-100"></div>
    		<?php
    	}
    	?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter4star; ?></div>
  </div>
</li>

<li  class="border padding">
  <div class="sidee">
    <div>3 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

    	if($recruiter3star=='')
    	{
    		?>
<div class="bar-0"></div>
    		<?php
    	}
    	

    	elseif($recruiter3star>0 || $recruiter3star<=20)
    	{
    		?>
<div class="bar-10-20"></div>
    		<?php
    	}
    	

    	elseif($recruiter3star>20 || $recruiter3star<=40)
    	{
    		?>
<div class="bar-20-30"></div>
    		<?php
    	}
    	

    	elseif($recruiter3star>40 || $recruiter3star<=60)
    	{
    		?>
<div class="bar-50-60"></div>
    		<?php
    	}
    	

    	elseif($recruiter3star>60 || $recruiter3star<=80)
    	{
    		?>
<div class="bar-60-70"></div>
    		<?php
    	}
    	

    	elseif($recruiter3star>60 || $recruiter3star<=100)
    	{
    		?>
<div class="bar-80-90"></div>
    		<?php
    	}
    	

    	else
    	{
    		?>
<div class="bar-100"></div>
    		<?php
    	}
    	?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter3star; ?></div>
  </div>
</li>

<li  class="border padding">
  <div class="sidee">
    <div>2 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

    	if($recruiter2star=='')
    	{
    		?>
<div class="bar-0"></div>
    		<?php
    	}
    	

    	elseif($recruiter2star>0 || $recruiter2star<=20)
    	{
    		?>
<div class="bar-10-20"></div>
    		<?php
    	}
    	

    	elseif($recruiter2star>20 || $recruiter2star<=40)
    	{
    		?>
<div class="bar-20-30"></div>
    		<?php
    	}
    	

    	elseif($recruiter2star>40 || $recruiter2star<=60)
    	{
    		?>
<div class="bar-50-60"></div>
    		<?php
    	}
    	

    	elseif($recruiter2star>60 || $recruiter2star<=80)
    	{
    		?>
<div class="bar-60-70"></div>
    		<?php
    	}
    	

    	elseif($recruiter2star>60 || $recruiter2star<=100)
    	{
    		?>
<div class="bar-80-90"></div>
    		<?php
    	}
    	

    	else
    	{
    		?>
<div class="bar-100"></div>
    		<?php
    	}
    	?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter2star; ?></div>
  </div>
</li>

<li  class="border padding">
  <div class="sidee">
    <div>1 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

    	if($recruiter1star=='')
    	{
    		?>
<div class="bar-0"></div>
    		<?php
    	}
    	

    	elseif($recruiter1star>0 || $recruiter1star<=20)
    	{
    		?>
<div class="bar-10-20"></div>
    		<?php
    	}
    	

    	elseif($recruiter1star>20 || $recruiter1star<=40)
    	{
    		?>
<div class="bar-20-30"></div>
    		<?php
    	}
    	

    	elseif($recruiter1star>40 || $recruiter1star<=60)
    	{
    		?>
<div class="bar-50-60"></div>
    		<?php
    	}
    	

    	elseif($recruiter1star>60 || $recruiter1star<=80)
    	{
    		?>
<div class="bar-60-70"></div>
    		<?php
    	}
    	

    	elseif($recruiter1star>60 || $recruiter1star<=100)
    	{
    		?>
<div class="bar-80-90"></div>
    		<?php
    	}
    	

    	else
    	{
    		?>
<div class="bar-100"></div>
    		<?php
    	}
    	?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter1star; ?></div>
  </div>
</li>

	   	  			
	 
	   	  	</ul>
	   	  	<div class="row"style="text-align:center padding:10px;">
	   	  			<div class="social" style="margin-top:2%; text-align:center;">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="http://twitter.com/share?text=Blog&url=https://www.get-job.online">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="#">
						<i class="fa fa-google-plus google"></i>
						<span class="share1 google">Share</span>
					</a>
			   </div>
	   	  		<!--<a name="fb_share" type="button" href="https://www.facebook.com/sharer.php?u=http://www.get-job.online" target="_blank">share on Facebook</a>
	   	--><!-- Place this tag in your head or just before your close body tag. -->
<!-- Place this tag in your head or just before your close body tag. -->


	   	 <!-- </div>

	   	 </div>

		</div>
</div>-->





	<div class="row">

	<div class="col-lg-8" style="margin-bottom:5%; padding:6px;">
<div class="col_3 background">
	<?php
	foreach ($recruiter as $key) {
		
	?>

	<h1 style="display:none;">Jobs</h1>

	<h3 class="radius"><?= base64_decode(base64_decode($key['recruiter_company_name'])).' ';?> Description</h3>

	
	<p class="padding"><font size=""><?= base64_decode(base64_decode($key['recruiter_description'])); ?></font></p>

	<p class="border padding"><span class="color">Established in:</span> <?=  base64_decode(base64_decode(      $key['recruiter_established'])); ?></p>

	<p class="border padding"><span class="color">Employee Strength:</span > <?=  base64_decode(base64_decode(      $key['recruiter_employee_strength'])); ?> </p>

	<p class="border padding"><span class="color">Country:</span >  <?= $key['recruiter_country']; ?></p>

	

	<p class="border padding"><span class="color">State:</span >  <?= base64_decode(base64_decode(      $key['recruiter_state'])); ?></p>

	<p class="border padding"><span class="color">Category:</span > <?= base64_decode(base64_decode(      $key['recruiter_category'])); ?></p>

	

<?php
}


	?>

</div>

</div>

<div class="col-lg-4" style="text-align:center; margin-bottom:5%; padding:6px;">

		<table width="100%" class="background" id="jobsList">

		<thead class="radius">
		<?php

//foreach ($recruiter as $value ) {
	?>
			<tr class="col_3"><td colspan="2" ><h3 class="radius">Jobs Posted By <?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></h3></td></tr>

			<?php
//}
if($jobs=='null' || empty($jobs))

{

?>

				<tr> <td class="padding"><h2>Sorry!! No result found</h2></td></tr>

			
<?php



}

else

{
?>

 <tr style="text-align:center;">
	 	<td><div id="loading1"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>
<?php

			/*foreach ($jobs as $value ) {

				 ?>

				<tr> <td colspan="2" class="padding"><a href="<?= base_url(); ?>employee/jobdetail?uid=<?= $value['submitjob_id']; ?>" style="text-decoration:none;"><?php $string= base64_decode(base64_decode($value['submitjob_job_description'])); echo substr($string,0,36).'......';?></a></td></tr>

				<tr class="border"><td class="padding"><i class="fa fa-suitcase" aria-hidden="true"></i>  <?= $value['submitjob_category']; ?></td>

				<td ><i class="fa fa-map-marker" aria-hidden="true"></i>  <?= $value['submitjob_preffered_location']; ?></td></tr>

				<?php

}*/

}

				?>

	</table>
	<div style='margin-top: 10px; text-align:center;' class="padding" id='jobsPostedPagination'></div>

	</div>

	

</div>
<!-- pagination for jobs posted by-->
<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>/js/recruiterJobsPagination.js"></script>
<!-- end code -->
</div>

	<div class="container">
<div class="row refer_earn" style="margin-top:2%;">
	 <div class="col_3 message background">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	</div>
</div>

<?php include 'footer.php'; ?>
</body>

<script src="<?= base_url(); ?>js/analytics.js"></script>

</html>	

<script type="application/javascript">

 function branddetails()

 {
		var paramstr=$("#applyform").serialize();

		//$('#loading_pic').show();

		$.post("<?php echo base_url();?>ajaxcontrol/applyajax",

		paramstr, 

		function(data) 

		{

			/*$("#votingg").hide();

			$("#voting_answer").show();*/

		

		 if(data == "Success")

		 {

		 	

		   /*$('#success_msg').show();

		  $('#success_msg').text(" Record saved successfully");*/

		/* }

		});	*/



		

 }

 </script>






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
	  $("#report").click(function(){
   	
   	$("#ratingStars").hide(500);
    $("#reportRecruiter").show(800);

    $("#report").hide();
    $("#hide").show();
  });

	  $("#hide").click(function(){
    $("#reportRecruiter").hide(800);
    $("#ratingStars").show(500);
    $("#report").show();
    $("#hide").hide();
  });
});





//report  recruiter by a employee
      $('#reportRecruiterForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/reportRecruiter'); ?>",
        data: $('#reportRecruiterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		$('#hide').hide(500);
        		$('#reportRecruiter').hide(500);
            	$('#reportFailuremsg').show(500);
           
        }
        else if(response==1)
        {
      

        	$('#hide').hide(500);
        	$('#reportRecruiter').hide(500);
            $('#reportSuccessmsg').show(500);
           
        }
        
        }
        
   });

});


      //report  recruiter by a employee
      $('#requestMoreInfoRecruiterForm').submit(function(e) {
      	

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/requestMoreInfoRecruiter'); ?>",
        data: $('#requestMoreInfoRecruiterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){

        	
        		
        		$('#requestMoreInfoButton').hide(500);
            	$('#informationAsked').show(500);
        	/*if(response== 0)
        	{

        		/*$('#hide').hide(500);
        		$('#reportRecruiter').hide(500);
            	$('#reportFailuremsg').show(500);*/
           
        /*}
        else if(response==1)
        {

        	/*$('#hide').hide(500);
        	$('#reportRecruiter').hide(500);
            $('#reportSuccessmsg').show(500);*/
           
        //}*/
        
        }
        
   });

});


</script>