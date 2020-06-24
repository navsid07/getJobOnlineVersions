<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';
?><title> profile detail | Get-job.online </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="get job online, job opportunities, job nearby, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>

<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>



<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>css/modal.css">

<script>
$(document).ready(function()
{
	$("#showwcontact").click(function()
	{
$("#showcontact").slideToggle();
$("#showcontact1").slideToggle();
	});
	
});
</script>
<style>
#reportEmployee
{
	display:none;
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



<script>
function checkpassword()
{
	var password=$('#password').val();
	var passwordagain=$('#passwordagain').val();
	if(password != passwordagain)
	{
		//$("#error").html("Password do not match");
		$("#match").show();
		$("#submit").hide();
	}
	else
	{
		$("#submit").show();
		$("#match").hide();
		//$("#error").html("Password matched");
	}
}
</script>


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

</head>
<body>

	<!-- Modal -->
 <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <!--<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><font color="#f15f43">Rate Employee Here</font></h4>
        </div>
        <div class="modal-body">
        <form action="<?= base_url(); ?>employee/employeerating" method="post" class="form">
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
			<textarea cols="10" class="form-control" name="review" Placeholder="Write something exciting for the recruiter"></textarea>
       		<input type="hidden" value="<?= $recruiter_session; ?>" name="rid">
        	 <?php

        	 foreach ($employee as $value) {

?>
        	<input type="hidden" name="uid" value="<?= $value['employee_uid']; ?>">
       <?php
}
       ?>

       
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
         </form>
      </div>
      
    </div>
  </div>-->




<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content col_3">
  	<h3 class="radius">Recruit for<span style="float:right; color:white; cursor:pointer;" class="closei">&times;</span></h3>
  	<table width="100%" >
  		<form action="<?= base_url();?>RecruitEmployee" method="post">
  		<?php
  		if($jobscount!='null')
  		{
  			foreach ($recruiterjobs as $key) {
  				
  					$employeeuidd=$value['employee_uid'];
  					$sjid=$key['submitjob_id']; 
  					$q=$this->db->select('*')
  					->where(['recruitcandidate_employer_id'=>$recruiter_session,'recruitcandidate_employee_id'=>$employeeuidd,'recruitcandidate_jid'=>$sjid])
  					->get('recruitcandidate');
  					 $result=$q->result();
		$qqq=json_decode(json_encode($result),TRUE);
		
  		?>
<tr><td class="padding border">
	<!--recruit/?rid=<?= $value['employee_uid']; ?>
	-->
	
	<?php
foreach ($employee as $value) {
	
		if($qqq!=null)
		{
	?>
	<table><tr><td class="padding"><p class="font-color-grey" title="This candidate already recruited for this job."> <?= $key['submitjob_job_title']; ?></td><td class="padding" title="Delete recruitment"><a href="<?= base_url(); ?>RecruiterDeleteRecruitment?job=<?= $key['submitjob_id']; ?>&id= <?= $value['employee_uid']; ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
     width="25" height="25" 
     viewBox="0 0 252 252"
     style="fill:#000000; margin-top:30%;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal;"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#f15f43"></path><path d="M155.694,81.459l14.847,14.847l-74.235,74.235l-14.847,-14.847z" fill="#ffffff"></path><path d="M170.541,155.694l-14.847,14.847l-74.235,-74.235l14.847,-14.847z" fill="#ffffff"></path></g></g></svg></a></td></tr></table></p> 
<?php
}
elseif($qqq==null)
{
	
	?>
	<a href="<?= base_url();?>rRecruitEmloyee?jobid=<?=  $key['submitjob_id']; ?>&employee_id=<?= $value['employee_uid']; ?>" class="anchortag"><?= $key['submitjob_job_title']; ?></a>
	<!--<input type="radio" name="jobid" value="<?= $key['submitjob_id']; ?>"> 
	--><?php
}
}	
	?>
	
</td></tr>
<?php

}
}
?>

</form>


 
</table> 

  </div>
 
</div>



	<h1 style="display:none;">Online jobs</h1>
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
	    	if(empty($recruiter_session) && empty($recruiterCookie))
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
		         	include('RecruiterHeaderLi.php');
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

	
<div class="container">
	<div id="spacetop">
		&nbsp;
	</div>

	<ul id="breadcrumbs"><li ><a href="<?= base_url(); ?>">Home</a> </li><li >Employeedetail </li></ul>
	 <?php 
					if($shortlisted= $this->session->flashdata('shortlisted')):

			    $shortlisted_class=$this->session->flashdata('shortlisted_class');
			    ?>
			   <div class="row" style="margin-top:2%;">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $shortlisted_class; ?>">
			  
			  <?php echo $shortlisted ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>


			<?php

	if($reportEmployee1=$this->session->flashdata('reportEmployee1')):

		$reportEmployee1_class=$this->session->flashdata('reportEmployee1_class');

	?>

	<div class="row" style="margin-top:2%;">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?=  $reportEmployee1_class; ?>">

			  

			  <?= $reportEmployee1 ?>

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
			      <div class="col-lg-12"  style="margin-top:2%;">
			          <div class="alert alert-dismissible <?php echo $recruit_class; ?>">
			  
			  <?php echo $recruit; ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

			
	<div class="row">

	<div class="col-lg-6" style="margin-top:2%; margin-bottom:3%; padding:3px;">

		<?php 
		
		foreach ($data as $value) {

		?>
		<div class="col_3 background">
			<h3 class="radius"><font size="4em"><?= base64_decode(base64_decode($value['employee_name'])); ?></font></h3>
		<table width="100%" style="text-align:center;" cellpadding="10">
		
	
			<tr><td colspan="2"></td>
			</tr>

			<tr class="border"><td class="fontSize padding" colspan="2"><?php

			if(!empty($fresherExperience))
			{
			
				base64_decode(base64_decode($fresherExperience)); 
			}?></td></tr>
			<tr class="border"><td class="fontSize padding" colspan="2"><i class="fa fa-map-marker" aria-hidden="true"></i>
 			<span itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?= base64_decode(base64_decode($value['employee_state'])); ?></span></span></td></tr>



			<?php
			if(!empty($value['employee_description']))
			{
				?>
				<tr class="border"><td class="fontSize padding" colspan="2"><?= base64_decode(base64_decode($value['employee_description'])); ?></td></tr>
			<?php 
			}
	?>

	<tr><td id="loadingMsg" style="display: none;"><img src="<?= base_url(); ?>images/loading2.gif" width="15%"></td></tr>

	</table>

</div>


	<?php
}
	?>

</div>

<div class="col-lg-offset-1 col-lg-5" style="margin-top:2%; margin-bottom:3%; padding:3px;">

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
	<div class="col_3 background">
		<h3 class="radius"><font size="4em">Profile Status</font></h3>
	<table width="100%" style="text-align:center;" cellpadding="10">
		<th colspan="2"></th>
			<tr><td colspan="3" ></td></tr>
			<?php
			foreach ($data as $value) {
				
			?>
			<tr class="border"><td class="padding fontSize">Profile Viewed:</td><td class="fontSize"><?= $value['employee_profile_viewed']. 'Times'; ?></td></tr>
				
				<tr class="border"><td class="padding fontSize">Preferred Location:</td><td class="fontSize">
					<div itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?= $value['employee_preffered_location']; ?></span></div></td></tr>
				<tr><td class="fontSize">Member Since:</td><td class="fontSize">
					<?php

					if($value['member_since']==0 || empty($value['member_since']))
					{
						$memberSince='--';
						
					}
					else
					{
						$memberSince=$value['member_since'];
					}
					echo $memberSince;?></td></tr>
				<!--<tr><td colspan="2">Download Resume</a></td></tr>
	-->
	<?php

}

				?>
	</table>


</div>

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

	<div class="col-lg-6" style="margin-bottom:5%; padding:3px;">
	<div class="col_3 background">
		<h3 class="radius"><font size="4em">Employee Detail</font></h3>
	<table width="100%" style="border-collapse: collapse; ">
		
			<tr><td colspan="2"></td>
			</tr>
			<?php
			
				foreach ($data as $value) {
					
					
						
			?>
		
			
			
			<tr class="border"><td class="profile_left padding fontSize"><b>Full Name:</b></td><td class="fontSize"><?= base64_decode(base64_decode($value['employee_name'])); ?></td></tr>
			<div itemscope itemtype="http://schema.org/Country">
			<tr class="border"><td class="profile_left padding fontSize"><b>Country:</b></td><td class="fontSize"><span itemprop="contentLocation"><?= $value['employee_country']; ?></span></td></tr>
			<tr class="border"><td class="profile_left padding fontSize"><b>City:</b></td><td class="fontSize"><span itemprop="contentLocation"><?= base64_decode(base64_decode($value['employee_city'])); ?></span></td></tr>
			<tr class="border"><td class="profile_left padding fontSize"><b>State:</b></td><td class="fontSize"><span itemprop="contentLocation"><?= base64_decode(base64_decode($value['employee_state'])); ?></span></td></tr>
			</div>
			<tr class="border"><td class="profile_left padding fontSize"><b>Pin Code:</b></td><td class="fontSize"><?= $value['employee_pincode']; ?></td></tr>
			
			<tr class="border"><td class="profile_left padding fontSize"><b>Qualification:</b></td><td class="fontSize"><?= base64_decode(base64_decode($value['employee_qualification'])); ?></td></tr>
			<tr class="border"><td class="profile_left padding fontSize"><b>Points:</b></td><td class="fontSize"><?= base64_decode(base64_decode($value['employee_grade'])); ?></td></tr>
			<?php
			if(!empty($fresherExperience))
			{
			foreach ($employeeExperience as $experienceValue) {
			$experience=base64_encode(base64_encode('experience'));
			$experience1=base64_encode(base64_encode('Experience'));
			$experience2=base64_encode(base64_encode('EXPERIENCE'));
			if($experienceValue['fresher_experience']==$experience || $experienceValue['fresher_experience']==$experience1 || $experienceValue['fresher_experience']==$experience2)
			{
				if(!empty($experienceValue['company']) && !empty($experienceValue['experienceIn']) && !empty($experienceValue['experience']))
				{

				
		?>
<tr class="border"><td class="profile_left padding fontSize"><b>Experience:</b></td><td>Experience</td></tr>
<?php

			}
		}
			else
			{
				?>

	<?php
		}
	}

			?><!--
			<tr class="border"><td class="profile_left padding fontSize"><b>Experience:</b></td><td>No Experience</td></tr>-->
			<!--<tr class="border"><td class="profile_left paddding fontSize"><b>Key Skills:</b></td><td></td></tr>
			--><tr class="border"><td class="profile_left padding fontSize"><b>Cover Letter:</b></td><td class="fontSize"><?= base64_decode(base64_decode($value['employee_description'])); ?></td></tr>
	
<?php 
				if(!empty($recruiter_session) || !empty($recruiterCookie))
				{
					if($jobscount=='null')
					{
?>
<tr ><td colspan="2"> <div class="notee fontSize">In order to recruit this candidate you need to post a job.</div></td></tr>
<?php
					}
					else
					{
			if($recruited=='null' && empty($jid) && empty($fetchstatus))
			{
				?>
			<tr class="textalign"><td colspan="2" class="padding fontSize"><button class="editbutton" id="recruitButton2">Recruitt</button>
					<div class="col-md-offset-2 col-md-8 alert alert-success" id="recruitconfirm2" style=" text-align: center; display: none;">
						Are you Sure to Recruit this candidate.</br><p>
						<button class="btn btn-primary marginleft2" id="onclick1">Yes</button><button type="button" id="recruitno2" class="btn btn-danger marginleft2">No</button></p>
					</div>
			</td></tr>
			<tr class="textalign"><td colspan="2">Or</td></tr>
			<tr class="textalign"><td colspan="2" class="padding fontSize">

					<span  style="display:none;color:green; font-weight:bold;" id="shortlistformmsg">Employee successfully Shortlisted.</span>

					<span  style="display:none;color:red; font-weight:bold;" id="shortlistformfailure">Something went wrong please try after sometime.</span>

<?php
				if($shortlistCount!=null)
				{
					?>
<span  style="color:green; font-weight:bold;" id="shortlistformmsg1">Employee successfully Shortlisted.</span>
					<?php
				}
				else
				{
				?>
<form method="post" id="shortlistform">


	<input type="hidden" name="uid" value="<?= $value['employee_uid']; ?>">
<button type="button" class="btn btn-primary" id="shortlistButton2">Shortlist Candidate</button>
<div class="col-md-offset-2 col-md-8 alert alert-success" id="shortlistconfirm2" style=" text-align: center; display: none;">
						Are you Sure to Shortlist this candidate.</br><p>
						<button type="submit" class="btn btn-primary marginleft2">Yes</button><button type="button" id="shortlistno2" class="btn btn-danger marginleft2">No</button></p>
					</div>
</form>
<?php
}
?>
<!--
				<a href="<?= base_url(); ?>recruiter/shortlist?uid=<?= $value['employee_uid']; ?>">Shortlist this Candidate</a>
								-->
			</td></tr>
	
	<?php
}
elseif($recruited!='null' && empty($jid) && empty($fetchstatus))
{
	?>
	<tr><td colspan="2" style="color:green; text-align:center;"class="fontSize padding"><!--<button class="editbutton" id="onclick1">Recruitt</button>--><strong>You have already recruited this candidate.</strong></td></tr>
<!--<tr><td colspan="2" class="alert-success">You just recruited this candidate.</td></tr>
	<tr><td colspan="2"><a style="cursor:pointer;"  id="showwcontact">Show Contact</a></td></tr>	
	
<tr colspan="2"><td id="showcontact" style="display:none;"><?= base64_decode(base64_decode($value['employee_phone'])); ?></td>
	<tr colspan="2"><td id="showcontact1" style="display:none;"><?= base64_decode(base64_decode($value['employee_email'])); ?></td></tr>
	-->
	<?php
	}
}
}
if(empty($recruiter_session) && empty($recruiterCookie))
{
	?>
<tr ><td colspan="2" style="text-align: center;"><a href="<?= base_url(); ?>recruiter/login?uid=<?= $value['employee_uid']; ?>" style="color:red; text-decoration:none;">Please login to recruit or shortlist this candidate</a></td></tr>
	<tr><td colspan="2" style="text-align: center;"><a href="<?= base_url(); ?>RecruiterRegistrationStep1" style="text-decoration:none;">New user? Register here</a></td></tr>
	
	<?php
}
	
	
if(!empty($jid) && !empty($fetchstatus))
{
	foreach ($fetchstatus as $key){
		$fstatus=$key['applyjob_status'];
		if(($fstatus==0 || $fstatus=='') && $applycheck!='null')
		{
	?>
	<tr><td>
</td><td>
		<a href="<?= base_url(); ?>recruiter/updateapplystatus?jid=<?= $jid; ?>&employee_id=<?= $value['employee_uid']; ?>&status=1">   <button type="button" title="Accept job Invitation" class="accept" onclick="return confirm('Do you want to Accept this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Accept Invitation</button></a>

	
		<a href="<?= base_url(); ?>recruiter/updateapplystatus?jid=<?= $jid; ?>&employee_id=<?= $value['employee_uid']; ?>&status=2">   <button type="button" title="Decline job Invitation" class="decline" onclick="return confirm('Do you want to decline this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Decline Invitation</button></a>

	</td></tr>
	<?php
}




elseif ($fstatus==1) {

	?>
	<tr><td colspan="2" class="fontSize">
		<div class="alert-success">You just Accepted this Employees invitation.</div>
	</td></tr>
	<?php
}
elseif ($fstatus==2) {
	?>
	<tr><td colspan="2" class="fontSize">
	<div class="alert-danger">You just Declined this Employees invitation.</div>
	</td></tr>
	<?php
}
}
}
}
			?>
	</table>
</div>
</div>

<?php
$ex11=base64_encode(base64_encode('Fresher'));
$ex22=base64_encode(base64_encode('fresher'));
if($fresherExperience == $ex11 || $fresherExperience == $ex22)
{
	?>

<div class="col-lg-offset-1 col-lg-5" style=" margin-bottom:5%; padding:3px;">
	<div class="col_3 background fontSize">
		<h3 class="radius"><font size="4em">Experience Detail</font></h3>
	<h4 class="padding" style="text-align: center;">No experience</h4>
</div>
</br>
<div class="col_3 background fontSize">
		<h3 class="radius">Education Detail</h3>
	<table width="100%" style="text-align:center;">
		<th colspan="2"></th>
			<tr><td colspan="4" ></td></tr>
			<?php
if(empty($employeeQualification))
{
	?>
			<tr><td class="fontSize"><h4>Sorry No Detail found</h4></td></tr>
			<?php
		}
		else
		{
			?>
<tr><td class="hr fontSize"><b>Class</b></td><td class="hr fontSize"><b>Passed</b></td><td class="hr fontSize"><b>Uni</b></td><td class="hr fontSize"><b>Marks</b></td></tr>
			<?php
			
			foreach ($employeeQualification as $qualificationValue) {
				
?>
<tr><td class="hr"><?= $qualificationValue['degreeName']; ?></td><td class="hr fontSize"><?= $qualificationValue['passed']; ?></td><td class="hr fontSize"><?= $qualificationValue['university']; ?></td><td class="hr"><?= $qualificationValue['marks']; ?></td></tr>	
			<?php	}
			
			
	}

	?>
	</table>


</div>
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

	<?php
}
else
{
?>
<div class="col-lg-offset-1 col-lg-5" style="margin-bottom:5%; padding:3px;">
	<div class="col_3 background">
		<h3 class="radius"><font size="4em">Experience Detail</font></h3>
	<table width="100%" style="text-align:center;">
		<th colspan="2"></th>
			<tr><td colspan="3" ></td></tr>
			<?php

			if(!empty($employeeExperience))
			{

			foreach ($employeeExperience as $experienceValue) {
				if(!empty($experienceValue['company']) && !empty($experienceValue['experienceIn']) && !empty($experienceValue['experience']))
				{
			?>
		<tr><td class="fontSize hr"><b>Industry name</b></td><td class="fontSize hr"><b>Experience gained</b></td></tr>
				
				<tr class="padding"><td class="fontSize"><?= base64_decode(base64_decode($experienceValue['company'])); ?></td><td><?= $experienceValue['experience'].' Months'; ?></td></tr>
				
	<?php
}
}
}
else
{
	?>
		<tr class="padding"><td class="fontSize">No experience</td></tr>
				
	<?php
}
				?>
	</table>
</div>
</div>
<?php
}
				}
				
?>
</div>
<div class="row">
<div class="col-lg-6" style="margin-bottom:5%; padding:3px;">
	<div class="col_3 background">
		<h3 class="radius"><font size="4em">Employee Portfolio</font></h3>
	<table width="100%" style="border-collapse: collapse; text-align: center;">
		<?php
		if(empty($portfolio))
		{
?>
<tr><td>Sorry ! No result found</td></tr>
<?php
		}
		elseif (!empty($portfolio)) {
			
		?>

		<th colspan="3"></th>
		<tr><td><b>Project Name</b></td><td><b>Link</td>
<td><b>Description</b></td></tr>

<?php
foreach ($portfolio as $portfoliovalue) {
	$plink=$portfoliovalue['projectLink'];
	$pplink=substr($plink,0,4);
	if($pplink!='https' or $pplink!='Https' or $pplink=='http' or $pplink=='Http')
	{
		$linkk='https://'.$portfoliovalue['projectLink'];
	}
elseif ($pplink=='https' or $pplink=='Https' or $pplink=='Http' or $pplink=='http') {
		$linkk=$portfoliovalue['projectLink'];
	}
	?>
<tr><td class="padding"><?= $portfoliovalue['projectName']; ?></td><td class="padding"><a href="<?= $linkk ?>" target="_blank"><?= $portfoliovalue['projectLink'];; ?></a></td>
<td class="padding"><?= $portfoliovalue['Description']; ?></td></tr>
	<?php
}
}
?>
</table>
</div>
</div>

<div class="col-lg-offset-1 col-lg-5" style="margin-bottom:5%; padding:3px;">
	<div class="col_3 background">
		<h3 class="radius"><font size="4em">Employee Certification</font></h3>
	<table width="100%" style="border-collapse: collapse; text-align: center;">
		<?php
		if(empty($certification))
		{
?>
<tr><td>Sorry ! No result found</td></tr>
<?php
		}
		elseif (!empty($certification)) {
			
		?>

		<th colspan="3"></th>
		<tr><td><b> Name</b></td><td><b>Provider</td>
<td><b>Period</b></td></tr>

<?php
foreach ($certification as $certificationvalue) {
	?>
<tr><td class="padding"><?= base64_decode(base64_decode($certificationvalue['certificateName'])); ?></td><td class="padding"><?= base64_decode(base64_decode($certificationvalue['certificateProvider'])); ?></td>
<td class="padding"><?= base64_decode(base64_decode($certificationvalue['certificatePeriod'])); ?></td></tr>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closei")[0];

// When the user clicks the button, open the modal 
$("#onclick").click(function(){
	//alert('alert');
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
});

// When the user clicks the button, open the modal 
$("#onclick1").click(function(){
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
});




// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
    	$("#myModal").slideToggle(700);
        //modal.style.display = "none";
    }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    //modal.style.display = "none";
    $("#myModal").slideToggle(700);
}


$(document).ready(function(){


$(window).on('load', function() {
    $("#reportEmployee").hide();
});
});



$(document).ready(function(){




$("#report").click(function()
{
	$("#report").hide();
	$("#hidereport").show();
	$("#reportEmployee").slideToggle(700);
});

$("#hidereport").click(function()
{
	$("#reportEmployee").hide();
	$("#hidereport").hide();
	$("#report").show();
	
});
});

/*function func1() {
  documentgetElementById("reportEmployee").style.display="none";
  //alert("This is the first.");
}
window.onload=func1;*/
</script>
<script>

  /*   $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'https://jobtest.get-job.online/employee/reportEmployee',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
   
*/


//report  employee by a recruiter
      $('#reportEmployeeForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/reportEmployee'); ?>",
        data: $('#reportEmployeeForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		
        		$('#hidereport').hide(500);
        	$('#reportEmployee').hide(500);
            $('#reportEmployeefailure').show(500);
        
        }
        else if(response==1)
        {
       

        	$('#hidereport').hide(500);
        	$('#reportEmployee').hide(500);
            $('#reportEmployeemsg').show(500);
           
        }
        
        }
        
   });

});



//shortlist  employee by a recruiter
      $('#shortlistform').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/shortlist'); ?>",
        data: $('#shortlistform').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		$('#shortlistform').hide(500);
        			$('#shortlistform1').hide(500);
        				$('#shortlistform2').hide(500);
            $('#shortlistformfailure').show(500);
             $('#shortlistformfailure1').show(500);
              $('#shortlistformfailure2').show(500);
        
        }
        else if(response==1)
        {
       
        	$('#shortlistform').hide(500);
        	$('#shortlistform1').hide(500);
        	$('#shortlistform2').hide(500);
            $('#shortlistformmsg').show(500);
              $('#shortlistformmsg1').show(500);
                $('#shortlistformmsg2').show(500);
           
        }
        
        }
        
   });

});

      //shortlist  employee by a recruiter
      $('#shortlistform1').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/shortlist'); ?>",
        data: $('#shortlistform1').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{

        	$('#shortlistform1').hide(500);
        	$('#shortlistform2').hide(500);
        	$('#shortlistform').hide(500);
            $('#shortlistformfailure1').show(500);
                $('#shortlistformfailure2').show(500);
                
            $('#shortlistformfailure').show(500);
        
        }
        else if(response==1)
        {
       
        	$('#shortlistform1').hide(500);
        	$('#shortlistform2').hide(500);
        	$('#shortlistform').hide(500);
            $('#shortlistformmsg1').show(500);
            $('#shortlistformmsg').show(500);
            $('#shortlistformmsg2').show(500);
           
        }
        
        }
        
   });

});

      //shortlist  employee by a recruiter
      $('#shortlistform2').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/shortlist'); ?>",
        data: $('#shortlistform2').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		$('#shortlistform2').hide(500);
        		$('#shortlistform1').hide(500);
        		$('#shortlistform').hide(500);
            	$('#shortlistformfailure2').show(500);
            	    $('#shortlistformfailure1').show(500);
            	     $('#shortlistformfailure').show(500);
        
        }
        else if(response==1)
        {
       
        	$('#shortlistform2').hide(500);
        	$('#shortlistform1').hide(500);
        	$('#shortlistform').hide(500);
            $('#shortlistformmsg2').show(500);
             $('#shortlistformmsg1').show(500);
                $('#shortlistformmsg').show(500);
           
        }
        
        }
        
   });

});

         //shortlist  employee by a recruiter
      $('#AcceptInvitation').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/updateapplystatus'); ?>",
        data: $('#AcceptInvitation').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		$('#AcceptDeclineButtons').hide(500);
        		$('#loadingMsg').hide(500);
        		$('#InvitationSuccessMsg').show(500);
        
        }
        else if(response==1)
        {

       		$('#AcceptDeclineButtons').hide(500);
       		$('#loadingMsg').hide(500);
        	$('#InvitationSuccessMsg').show(500);
           
        }
        
        }
        
   });

});


         //shortlist  employee by a recruiter
      $('#DeclineInvitation').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/updateapplystatus'); ?>",
        data: $('#DeclineInvitation').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		$('#AcceptDeclineButtons').hide(500);
        		$('#loadingMsg').hide(500);
        		$('#InvitationDeclineMsg').show(500);
        }
        else if(response==1)
        {
   
        		$('#AcceptDeclineButtons').hide(500);
        		$('#loadingMsg').hide(500);
        		$('#InvitationDeclineMsg').show(500);
        	
           
        }
        
        }
        
   });

});


$(document).ready(function(){

         //show confirm form
    $("#recruitButton").click(function(){
        $("#recruitButton").hide(700);
        $("#recruitconfirm").show(700);
        
    });


//hide confirm form
     $("#recruitno").click(function(){
     	 $("#recruitconfirm").hide(700);
        $("#recruitButton").show(700);
       
        
    });


         //show confirm form2
    $("#recruitButton2").click(function(){
        $("#recruitButton2").hide(700);
        $("#recruitconfirm2").show(700);
        
    });


//hide confirm form2
     $("#recruitno2").click(function(){
     	 $("#recruitconfirm2").hide(700);
        $("#recruitButton2").show(700);   
    });

     

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

      //show confirm form2
    $("#shortlistButton2").click(function(){
        $("#shortlistButton2").hide(700);
        $("#shortlistconfirm2").show(700);
       });


//hide confirm form2
     $("#shortlistno2").click(function(){
     	 $("#shortlistconfirm2").hide(700);
        $("#shortlistButton2").show(700);
       });
 });
</script>
<script>
	 function msgonclick() {
	 	$('#AcceptDeclineButtons').hide(500);
	 	$('#loadingMsg').show(500);
	}
</script>
</html>	
				