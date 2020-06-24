<!--A Design by W3layouts

Author: W3layout

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->

<?php

$employeeCookie=get_cookie('sessionCookieEmployee');

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
 $employe_session=$this->session->userdata('employe_id');

?>


<!DOCTYPE HTML>

<html  lang="en">

<head>

	<?php

include 'fav.php';

?>

	<title>
		<?php

		foreach ($job as $key ) {
	echo $key['submitjob_job_title'];
}
 ?>
 | Job description:: Get-job.online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="job consultants in bathinda, job opportunities, career center, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />

<meta name="description" content="Online Job portal for job providers and job seekers.

<?php
		foreach ($job as $key ) {
			$sub=$key['submitjob_job_description'];
			$subb=substr($sub, 0, 300);
	echo base64_decode(base64_decode($subb));
} ?>

" />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>
<style>
	
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
.colorfull
{
	color:#230046;
}
</style>

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



<script>
	
	$(document).ready(function(){
	  $("#report").click(function(){
    $("#reportRecruiter").show(700);
    $("#shortlistform").hide(700);
    $("#applyJob").hide(700);
    $("#applyJob1").hide(700);
    $("#report").hide();
    $("#hide").show();
  });

	  $("#hide").click(function(){
    $("#report").show();
     $("#shortlistform").show(700);
    $("#applyJob").show(700);
    $("#applyJob1").show(700);
    $("#reportRecruiter").hide(700);
    $("#hide").hide();
  });

});
</script>

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

	      

	   	<?php
	   	$cookieEmployee=get_cookie('sessionCookieEmployee');

	   	if(empty($employe_session) && empty($cookieEmployee))

	   	{

?>

	 <ul class="nav navbar-nav">

	        	<?php
                include('GetJobHeaderLi.php');
            ?>

	        </ul>

<?php

	   	}

	   	else

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
		&nbsp;
	</div>

<div class="container">

<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Job Detail</span></li></ul>
	<?php

	if($alert=$this->session->flashdata('alert')):

		$alert_class=$this->session->flashdata('alert_class');

	?>


	<div class="row" >

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

	if($reportJob1=$this->session->flashdata('reportJob1')):

		$reportJob1_class=$this->session->flashdata('reportJob1_class');

	?>

	<div class="row" style="margin-top:2%;">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?=  $reportJob1_class; ?>">

			  

			  <?= $reportJob1 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>

<?php

	if($shortlistJobFlash=$this->session->flashdata('shortlistJobFlash')):

		$shortlistJobFlash_class=$this->session->flashdata('shortlistJobFlash_class');

	?>

	<div class="row" style="margin-top:2%;">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?=  $shortlistJobFlash_class; ?>">

			  

			  <?= $shortlistJobFlash ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>


	<div class="row">

	<div class="col-lg-8 " style="text-align:center; margin-top:5%; margin-bottom:3%; padding:6px;">
		<?php
	if(!empty($employer_id))
			{
			

			?>
	<table width="100%" class="background col_3">

		<?php

		foreach ($job as $value) {

			

		?>

			<tr><td colspan="2"><h3 class="radius"><?= $value['submitjob_job_title']; ?></h3></td>

			</tr>

			<tr><td colspan="2" class="padding"><?= base64_decode(base64_decode($value['submitjob_job_description'])); ?></td></tr>

			<tr ><td colspan="2" class="padding"><!-- Suitcase icon by Icons8 -->

<i class="fa fa-suitcase" aria-hidden="true"></i>

<?= base64_decode(base64_decode($value['submitjob_experience_required']));?></td></tr><tr><td colspan="2" itemscope itemtype="http://schema.org/Place"><i class="fa fa-map-marker" aria-hidden="true"></i>
<span itemprop="name">
 <?= $value['submitjob_preffered_location']; ?></span></td></tr>

			<tr><td class="padding"></td></tr>
			<?php
			if(!empty($NoSession))
{
		?>
<tr><td colspan="2" class="padding">

				<a href="<?= base_url(); ?>EmployeeLogin" style="color:red; text-decoration:none;">Please Login to apply for this job.</a>

			</td></tr>
		<?php
}

else
{
	?>
<tr><td>
	<?php
					if($shortlistedStatus=='success')
					{
						?>

					<span  style="color:green; font-weight:bold;" id="shortlistSuccessmsg">You have already shortlisted this job.</span>					
					<?php
					}
					else
					{


?>
					<span  style="display:none;color:green; font-weight:bold;" id="shortlistSuccessmsg">You have successfully shortlisted this job.</span>

					<span  style="display:none;color:red; font-weight:bold;" id="shortlistFailuremsg">Something went wrong please try after.</span>
					
<form method="post" id="shortlistform">
	<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
	<input type="hidden" name="eid" value="<?= $value['submitjob_employer_id']; ?>">
	<button type="button" class="btn regularButton" id="shortlistButton">Shortlist Job</button>

	<div class="col-md-offset-2 col-md-8 alert alert-success" id="shortlistconfirm" style="display: none;">
						Do you want to shortlist this job.</br><p>
						<button type="submit" class="btn regularButton marginleft2" id="shortlistcandidate">Yes</button><button type="button" id="shortlistno" class="btn regularCancel marginleft2">No</button></p>
					</div>
</form>
<?php
}
}
?>

					<!--<a href="<?= base_url(); ?>employee/shortlistJob?jid=<?= $value['submitjob_id']; ?>&eid=<?=  $value['submitjob_employer_id']; ?>"class="alert-link" style="cursor:pointer; text-decoration: none;">Shortlist this Job</a>--></td></tr>
					<?php
					if(!empty($NoSession))
					{
						?>
<tr><td colspan="2" class="padding">

				<a href="<?= base_url(); ?>employee" style="text-decoration:none;">New user? Register here.</a>

					

				

			</td></tr>
			<?php
					}
					else
					{
?><!--
<tr><td colspan="2" style="text-align:center;" class="padding" ><a class="alert-link" id="report" style="cursor:pointer; text-decoration: none;">Report this Job</a>

				<a class="alert-link" id="hide" style="display:none; cursor:pointer; text-decoration: none;">Hide</a>
			</td></tr>-->

<?php
					}
					?>
			

			<!--<tr><td class="padding">
			<table width="50%" align="center" id="reportRecruiter" style="display: none">
			<tr><td class="padding">
				<?php $get_jid=$this->input->get('uid'); ?>
				<form  method="post" id="reportJobbb">
					
		<input type="radio" name="select" value="Spam">Spam</td>
			<td class="padding" >
				<input type="hidden" name="getJid" value="<?= $get_jid; ?>">

			<input type="radio" name="select" value="Unresponsive" > Unresponsive</td></tr>
			<tr><td class="padding" colspan="2" style="text-align: center;"><textarea class="form-control" name="reportJob" Placeholder="Tell us something about it."></textarea></td></tr>
			<tr><td class="padding" colspan="2"><input type="submit" class="regularButton" value="Report"></td></tr>
		</form>
		<tr><td>
			
		</td></tr>

	</table>

</td></tr>-->

<!--<tr><td>
	
	<table width="50%" align="center">
		<tr><td>
			<span  style="display:none;color:green; font-weight:bold;" id="reportjobSuccessmsg">You report successfully submitted.</span>

					<span  style="display:none;color:red; font-weight:bold;" id="reportjobFailuremsg">Something went wrong please try after.</span>
		</td></tr>
	</table>
</td></tr>-->
				<?php

if($applystatus!=11)
{
		$applystatus1=array();

	foreach ($applystatus as $valu) {
		$applystatus1=$valu['applyjob_status'];
	}
}
else
{
	$applystatus1=11;
}
				if($this->input->get('status') || !empty($applystatus1))
				{
				
					
					$statuss=$this->input->get('status');
					if($statuss==1 || $applystatus1==1)
					{

						?>
<tr><td colspan="2">

				<div class=" col-md-offset-2 col-md-8 alert-success">Job Application you have applied has been accepted.</div>
			</td></tr>
			<?php
			foreach ($employer_id as $vvalue) {
				
			?>
			<tr><td colspan="2" class="padding">

				<div class="col-md-12">Recruiter Contact: <?= base64_decode(base64_decode($vvalue['recruiter_contact'])); ?></div>
				
				
			</td></tr>
			<tr><td colspan="2" class="padding">

				<div class="col-md-12">Recruiter Email: <?= base64_decode(base64_decode($vvalue['recruiter_email'])); ?></div>
				
				
			</td></tr>
					<?php
				}
				}
					elseif ($statuss==2 || $applystatus1==2) {
						?>
							<tr><td colspan="2">

				<div class=" col-md-offset-2 col-md-8 alert-danger">Job Application you have applied has been declined.</div>

				
			</td></tr>
						<?php
						
					}
				}
				else
				{

				if($appliedjob=='success')

				{
					?>

					<tr><td colspan="2" class="padding">

				<div class=" col-md-9 alert alert-success">You have already applied for this job.</div>

				<div class="col-md-3">
					<form action="<?= base_url(); ?>EmployeeDeleteApplied" method="post">
						<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
						<input type="hidden" name="eid" value="<?= $value['submitjob_employer_id'];?>">

						<button type="submit" class="delete">&#10008;Delete</button>
					</form>
					<!--<a href="<?= base_url(); ?>employee/deleteeapplied/<?= $value['submitjob_id']; ?>&&eid=<?= $value['submitjob_employer_id']; ?>" class="delete" style="text-decoration:none; color:white;">&#10008; Delete</a>--></div>

			</td></tr>



					<?php

				}

				else{

				if(!empty($employe_session) || !empty($employeeCookie))

				{

				?>

			<tr><td colspan="2" class="padding"><!--
				<span  style="display:none;color:green; font-weight:bold;" id="applySuccess">Job Applied </span>-->
					<span  style="display:none;color:green; font-weight:bold;" id="applySuccessmsg">You have successfully Applied this job.</span>

					
<form method="post" id="applyJob">
	<!--<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
	<input type="hidden" name="recruiter" value="<?= $value['submitjob_employer_id']; ?>">
-->

	<button type="button" id="applyButton" class="btn regularButton">Apply Job</button>

	<div class="col-md-offset-2 col-md-8 alert alert-success" id="applyconfirm" style="display: none;">
						Do you want to apply this job.</br><p>
						<button type="submit" class="btn regularButton marginleft2" id="applycandidate">Yes</button><button type="button" id="applyno" class="btn regularCancel marginleft2">No</button></p>
					</div>
</form>
<!--<form method="post" id="applyjob">
	<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
	<input type="hidden" name="recruiter" value="<?= $value['submitjob_employer_id']; ?>">
	<button type="submit" class="btn btn-primary">Apply Now</button>
</form>-->
<!--
				<a href="<?= base_url(); ?>employee/applycheckbalance?jid=<?= $value['submitjob_id']; ?>&recruiter=<?= $value['submitjob_employer_id']; ?>" ><button  class="editbutton" >Apply Now</button></a>-->

					<!--<form method="post" id="applyform">

			<input type="hidden" value="<?= $value['id']; ?>" name="applyid">

		<button  type="button" id="editbutton" onclick="branddetails()">Apply Now</button></p>

	</form>-->
			</td></tr>



	

			<?php

		}


				if(empty($employe_session) && empty($employeeCookie))

				{


				?>

			<tr><td colspan="2" class="padding">

				<a href="<?= base_url(); ?>EmployeeLogin" style="color:red; text-decoration:none;">Please Login to apply for this job.</a>

					<!--<form method="post" id="applyform">

			<input type="hidden" value="<?= $value['id']; ?>" name="applyid">

		<button  type="button" id="editbutton" onclick="branddetails()">Apply Now</button></p>

	</form>-->

				

			</td></tr>

			<tr><td colspan="2" class="padding">

				<a href="<?= base_url(); ?>employee" style="text-decoration:none;">New user? Register here.</a>

					

				

			</td></tr>



<?php

		}
		
	}

}
}
	?>

	<?php
					if(!empty($NoSession))
					{
						?>
<tr><td colspan="2" class="padding">

				<a href="<?= base_url(); ?>employee" style="text-decoration:none;">New user? Register here.</a>

					

				

			</td></tr>
			<?php
					}
					else
					{
?>
<tr><td colspan="2" style="text-align:center;" class="padding" ><a class="alert-link" id="report" style="cursor:pointer; text-decoration: none;">Report this Job</a>

				<a class="alert-link" id="hide" style="display:none; cursor:pointer; text-decoration: none;">Hide</a>
			</td></tr>

<?php
					}
					?>
			

			<tr><td class="padding">
			<table width="50%" align="center" id="reportRecruiter" style="display: none">
			<tr><td class="padding">
				<?php $get_jid=$this->input->get('uid'); ?>
				<form  method="post" id="reportJobbb">
					
		<input type="radio" name="select" value="Spam">Spam</td>
			<td class="padding" >
				<input type="hidden" name="getJid" value="<?= $get_jid; ?>">

			<input type="radio" name="select" value="Unresponsive" > Unresponsive</td></tr>
			<tr><td class="padding" colspan="2" style="text-align: center;"><textarea class="form-control" name="reportJob" Placeholder="Tell us something about it."></textarea></td></tr>
			<tr><td class="padding" colspan="2"><input type="submit" class="regularButton" value="Report"></td></tr>
		</form>
		<tr><td>
			
		</td></tr>

	</table>

</td></tr>

<tr><td>
	
	<table width="50%" align="center">
		<tr><td>
			<span  style="display:none;color:green; font-weight:bold;" id="reportjobSuccessmsg">You report successfully submitted.</span>

					<span  style="display:none;color:red; font-weight:bold;" id="reportjobFailuremsg">Something went wrong please try after.</span>
		</td></tr>
	</table>
</td></tr>


	</table>
<?php
}
else
{
	
	?>
	<div class="alert alert-danger">
		<script>
		 window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "https://get-job.online";

    }, 3000);
</script>
		This posting has been flaged Inactive
	</div>
	<?php
}
?>
</div>



<div class="col-lg-4" style="text-align:center; margin-top:5%; margin-bottom:3%; padding:3px;">
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
			   if(!empty($employer_id))
			   {
			   ?>
	<table width="100%" class="background col_3">

		<th colspan="2"></th>

			<tr><td colspan="2" ><h3 class="radius">Job Posted by:</h3></td></tr>

			<?php 


			foreach ($employer_id as $value) {

	$recruiterCompanyDetail=base64_decode(base64_decode($value['recruiter_company_name']));
				 
				 ?>

			<tr><td rowspan="4" class="padding">
				<?php
				if(empty($value['recruiter_logo']) || $value['recruiter_logo']=='')
				{
					?>

						<img src="<?= base_url(); ?>images/logonotavailable.gif" class="imgradius imgshadow img-responsive" width="150" alt="Company logo"></img>

					<?php
				}
				else
				{
				?>
				<img src="<?= base_url(); ?>logo/<?= $value['recruiter_logo']; ?>" class="imgradius imgshadow img-responsive" width="150" alt="Company logo"></img>
				<?php
			}
				?>
			</td></tr>

				<tr><td class="padding">
					<!--<form action="<?= base_url(); ?>recruiter/recruiterdetail" method="post">
					<input type="hidden" name="id" value="<?= $value['recruiter_id']; ?>">
					<button style="background-color:white; color:blue; border:none;" type="submit"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></button>
					
					</form>-->
					<a href="<?= base_url(); ?>RecruiterDetail?id=<?= $value['recruiter_id']; ?>&&title=<?= $recruiterCompanyDetail; ?>"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></a>
				</td></tr>

				<tr><td class="padding">
					<div itemscope itemtype="http://schema.org/Place">
					<span itemprop="name"><?= base64_decode(base64_decode($value['recruiter_city'])); ?></span></div></td></tr>

				<?php

}

				?>
				
	</table>
	<?php
}
	?>
</br>
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

</div>





	<div class="row">
	<?php
if(!empty($employer_id))
{
	?>
	<div class="col-lg-8" style="margin-bottom:5%;">

	

	<h1 style="display:none;">Jobs</h1>

	<div class="col_3 background"><h3 class="radius">Job Description</h3>

	<?php

	foreach ($job as $vvalue) {

	?>
	<div style="text-align: center;"><?= base64_decode(base64_decode($vvalue['submitjob_job_description'])); ?></div>

	<p class="border padding"><span class="color">salary:</span> <?= '     &#8377 '. $vvalue['submitjob_payscale']; ?></p>

	<p class="border padding"><span class="color">Industry/category/Field:</span > <?=  $vvalue['submitjob_category']; ?> </p>

	<!--<p class="border"><span class="color">Roel&category:</span >  </br> <?= base64_decode(base64_decode($value['category'])); ?> </p>

	--><p class="border padding"><span class="color">Role:</span >  <?= $vvalue['submitjob_category']; ?></p>

	
	<p class="border padding"><span class="color">Qualification:</span >  <?= base64_decode(base64_decode(      $vvalue['submitjob_lowest_education'])); ?></p>

	<p class="border padding"><span class="color">Experience:</span > <?= base64_decode(base64_decode(     $vvalue['submitjob_experience_required'])); ?></p>

	<p><h2 class="padding colorfull">Company Profile:</h2></p>


	<?php

	 foreach ($employer_id as $value) {

				 ?>


	<p class="padding"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></p>

	<p class="border padding"><?= base64_decode(base64_decode($value['recruiter_description'])); ?></p>

	<p class="border padding"><span class="color">Recruiter name:</span ><?= base64_decode(base64_decode(      $value['recruiter_company_name'])); ?></p>

	<p class="padding"><span class="color">Reruiter Id:</span >  <?=       $value['recruiter_hash']; ?></p>

	

<?php

}


?>

	<?php
if($applystatus!='11')
{
	$applystatus1=array();
	foreach ($applystatus as $value) {
		$applystatus1=$value['applyjob_status'];
	}
}
				if($this->input->get('status') || !empty($applystatus1))
				{
					$statuss=$this->input->get('status');
					if($statuss==1 || $applystatus1==1)
					{
						?>
<tr><td colspan="2" class="padding">

				<div class=" col-md-offset-2 col-md-8 alert-success">Your Application has been accepted for this job.</div>

				
			</td></tr>
					<?php
				}
					elseif ($statuss==2 || $applystatus1==2) {
						?>
							<tr><td colspan="2" class="padding">

				<div class=" col-md-offset-2 col-md-8 alert-danger">Your Application has been declined for this job.</div>
<div class="col-md-2"><!--<a href="<?= base_url(); ?>EmployeeDeleteAppliedJob?id=<?= $value['applyjob_id']; ?>"> <button type="button" class="delete">&#10008; Delete</button></a>--></div>
				
			</td></tr>
						<?php
						
					}
				}
				else
				{

		if($appliedjob=='success')

		{
//print_r('hello='.$applystatus1);
			?>
			<p class="alert alert-success" style="text-align:center;">You have already applied for this job.</p>

		<?php

		}

		else

		{



				if(!empty($employe_session) || !empty($employeeCookie))

				{

				?>

	<p style="text-align: center;">

		<!--<a href="applycheckbalance?jid=<?= $value['id']; ?>&recruiter=<?= $value['employer_id']; ?>" target="_blank"><button  id="editbutton" >Apply Now</button></a>

		-->
<!--
		<span  style="display:none;color:green; font-weight:bold;" id="applySuccess1">Job Applied </span>-->
					<span  style="display:none;color:green; font-weight:bold;" id="applySuccessmsg1">You have successfully Applied this job.</span>
		<form method="post" id="applyJob1">
	<input type="hidden" name="jid" value="<?= $vvalue['submitjob_id']; ?>">
	<input type="hidden" name="recruiter" value="<?= $vvalue['submitjob_employer_id']; ?>">
	<button type="button" id="applyButton2" class="btn regularButton" style="margin-left: 40%; margin-bottom: 2%;">Apply Now</button>
<div class="row">
	<div class="col-md-offset-2 col-md-8 alert alert-success" id="applyconfirm2" style="display: none; text-align: center;">
						Do you want to shortlist this job.</br><p>
						<button type="submit" class="btn regularButton marginleft2" id="applycandidate2">Yes</button><button type="button" id="applyno2" class="btn regularCancel marginleft2">No</button></p>
					</div>
				</div>
</form>
<!--
		<a href="applycheckbalance?jid=<?= $vvalue['submitjob_id']; ?>&recruiter=<?= $vvalue['submitjob_employer_id']; ?>"><button  class="editbutton" >Apply Now</button></a>-->
</p>

		<?php

	}

	if(empty($employe_session) && empty($employeeCookie))



	{

		?>

<p class="padding"><a href="<?= base_url(); ?>EmployeeLogin" style="color:red; text-decoration:none;">Please Login to apply for this job.</a></p>

	<p class="padding"><a href="<?= base_url(); ?>Employee" style="text-decoration:none;">New user? Register here.</a></p>



	<?php	

	}

		?>

		<!--<form method="post" id="applyform">

			<input type="hidden" value="<?= $value['id']; ?>" name="applyid">

		<button  type="button" id="editbutton" onclick="branddetails()">Appl Now</button></p>

	</form>-->

	<?php

}

}
}


	?>
</div>
</div>

<?php

}

if(!empty($employe_session) || !empty($employeeCookie))

{

?>

<div class="col-lg-4" style="text-align:center; margin-bottom:5%;">

		<table class="background col_3" width="100%">

		<th colspan="2"></th>

			<tr><td colspan="2" ><h3 class="radius">Jobs Applied:</h3></td></tr>

			<?php

if($apply=='null')

{

?>

				<tr> <td class="padding"><h4>Sorry!! No result found</h4></td></tr>


<?php



}

else

{

			foreach ($apply as $value ) {

				
				 ?>

				

				 
				 	

				<tr> <td class="padding" colspan="2"><a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $value['submitjob_id']; ?>" style="text-decoration:none;"><?= $value['submitjob_job_title']; ?></a></td></tr>

				<tr ><td class="padding"><i class="fa fa-suitcase" aria-hidden="true"></i>  <?= $value['submitjob_category']; ?></td>

				<td class="padding"><i class="fa fa-map-marker" aria-hidden="true"></i>  <?= $value['submitjob_preffered_location']; ?></td></tr>

			


		

			

				<?php

}

}





				?>

	</table>

	</div>

	<?php

}

	?>

</div>





</div>

	<div class="container">
<div class="row background refer_earn" style="margin-top:2%; margin-bottom:2%;">
	 <div class="col_3 message">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 </div>
	  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	</div>
</div>

<?php
include 'footer.php';
?>

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


$('#shortlistform').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/shortlistJob'); ?>",
        data: $('#shortlistform').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	if(response== 1)
        	{
           $('#shortlistform').hide(500);
            $('#shortlistSuccessmsg').show(500);/*
            setTimeout(function() { $("#shortlistSuccess").hide(700);
             $("#shortlistSuccessmsg").show(700); }, 5000);*/
        }
        else if(response== 0)
        {

              $('#shortlistform').hide(500);
            $('#shortlistFailuremsg').show(500);
            
        }
        }
       // error: function(resp) { alert(JSON.stringify(resp)); }
   });

});




//job applied by a user from upper button
   /*   $('#applytjob').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/shortlistJob1'); ?>",
        data: $('#applyjob').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
alert(response);
        	/*if(response== 0)
        	{
        		window.location="<?= base_url() ?>employee/addBalanceLoad";
        //alert(response);
        }
        else if(response== 1)
        {
        	$('#applyjob').hide(500);
            $('#applySuccess').show(500);
            setTimeout(function() { $("#applySuccess").hide(700);
             $("#applySuccessmsg").show(700); }, 5000);
        }*/
   
   /*
           $('#shortlistform').hide(500);
            $('#shortlistSuccess').show(500);
            setTimeout(function() { $("#shortlistSuccess").hide(700);
             $("#shortlistSuccessmsg").show(700); }, 5000);
            //alert('success');//$('#feed-container').prepend(data);
        }
       
   });

});*/



//job applied by a user from bottom button
      $('#applyJob1').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/applycheckbalance'); ?>",
        data: $('#applyJob1').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
      
        		if(response== 0)
        	{
        		window.location="<?= base_url() ?>employee/addBalanceLoad";
        //alert(response);
        }
        else
        {
        	//alert('hello');
        	 $('#applyJob1').hide(500);
        	  $('#applyJob').hide(500);
            $('#applySuccessmsg1').show(500);

            $('#applySuccessmsg').show(500);/*
            setTimeout(function() { $("#applySuccess1").hide(700);
             $("#applySuccessmsg1").show(700); }, 5000);*/
        }
      /*
           $('#shortlistform').hide(500);
            $('#shortlistSuccess').show(500);
            setTimeout(function() { $("#shortlistSuccess").hide(700);
             $("#shortlistSuccessmsg").show(700); }, 5000);*/
            //alert('success');//$('#feed-container').prepend(data);
        }
        
   });

});



//job applied by a user from bottom button
      $('#applyJob').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/applycheckbalance'); ?>",
        data: $('#applyJob').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		window.location="<?= base_url() ?>employee/addBalanceLoad";
        //alert(response);
        }
        else
        {
        	$('#applyJob').hide(500);
        	 $('#applyJob1').hide(500);
       
            $('#applySuccessmsg1').show(500);
            $('#applySuccessmsg').show(500);
            /*
            setTimeout(function() { $("#applySuccess").hide(700);
             $("#applySuccessmsg").show(700); }, 5000);*/
        }
        /*
           */
            //alert('success');//$('#feed-container').prepend(data);
        }
        
   });

});




//job applied by a user from bottom button
      $('#reportJobbb').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/reportJob'); ?>",
        data: $('#reportJobbb').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		
        	$('#reportRecruiter').hide(500);
        	$("#hide").hide(500);
        	$('#reportjobFailuremsg').show(500);
        }
        else
        {
        	
        	$('#reportRecruiter').hide(500);
        	$("#hide").hide(500);
        	$('#reportjobSuccessmsg').show(500);
        }
        
        }
        
   });



});


$(document).ready(function(){
	//show confirm form
    $("#shortlistButton").click(function(){
        $("#shortlistButton").hide(700);
        $("#shortlistconfirm").show(700);
        
    });


//hide confirm form
     $("#shortlistno").click(function(){
     	 $("#shortlistconfirm").hide(700);
        $("#shortlistButton").show(700);
       
        
    });

     //show confirm form
    $("#applyButton").click(function(){
        $("#applyButton").hide(700);
        $("#applyconfirm").show(700);
        
    });


//hide confirm form
     $("#applyno").click(function(){
     	 $("#applyconfirm").hide(700);
        $("#applyButton").show(700);
       
        
    });

     //hide confirm form
     $("#applyButton2").click(function(){
     	 $("#applyconfirm2").show(700);
        $("#applyButton2").hide(700);
       
        
    });

      //hide confirm form
     $("#applyno2").click(function(){
     	 $("#applyconfirm2").hide(700);
        $("#applyButton2").show(700);
       
        
    });
});

</script>

