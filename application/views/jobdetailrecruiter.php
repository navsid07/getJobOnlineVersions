
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
 $employe_session=$this->session->userdata('recruiter_id');
 $cookieRecruiter=get_cookie('sessionCookieRecruiter');
?><!DOCTYPE HTML>
<html  lang="en">
<head>
	<?php
include 'fav.php';
foreach ($job as $value) {
?>

	<title><?= 'Required '. $value['submitjob_job_title']; ?></title>
<?php
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, job opportunities, unemployement, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<?php
foreach ($job as $value) {
	$subb=$value['submitjob_job_description']; 
	$sub=substr($subb, 0, 300);
?>
<meta name="description" content="<?= base64_decode(base64_decode($sub)); ?>" />
<?php
}
?>
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
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
</style>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
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
	   	if(empty($employe_session) && empty($cookieRecruiter))
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

	<div id="spacer">
    &nbsp;
  </div>
  <div id="spacetop">
    
  </div>

<div class="container">
	<ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="name">Job Detail</span></li></ul>
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
	if($applystatus=$this->session->flashdata('applystatus')):
		$applystatus_class=$this->session->flashdata('applystatus_class');
	?>
	<div class="row" style="margin-top:2%;">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?=  $applystatus_class; ?>">
			  
			  <?= $applystatus ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
		
			?>

	<div class="row">
		
	<div class="col-lg-7 no-padding col_3 background refer_earn" style="text-align:center; margin-top:5%; margin-bottom:3%;">
	
	<?php
		foreach ($job as $value) {
			
		?>
		
	<h3 class="radius"><?= $value['submitjob_job_title']; ?></h3>
	<div class="col-md-12"><?= base64_decode(base64_decode($value['submitjob_job_description'])); ?></div>
	<div class="col-md-4"><i class="fa fa-suitcase" title="Experience Required"aria-hidden="true"></i>
<?= base64_decode(base64_decode($value['submitjob_experience_required'])); ?></div>
<div class="col-md-4"><i class="fa fa-eye" title="Job Viewed"aria-hidden="true"></i>
<?= $value['submitjob_job_viewed']; ?></div>
<div class="col-md-4"><i class="fa fa-map-marker" title="Location" aria-hidden="true"></i>
<?= $value['submitjob_preffered_location']; ?></div>
<?php
		if($value['submitjob_deactivate']==1)
		{
?>

<div class="col-md-offset-4 col-md-4" >
	<span  style=" display:none; color:green; font-weight:bold; text-align: center;" id="activateJobSuccess">Your job Active Now.</span>

	<span  style=" display:none; color:red; font-weight:bold; text-align: center;" id="activateJobFailure">Something wentwrong pleasetryafter sometime.</span>

<form method="post" id="deactivateJobForm" style="display: none;">
	
	<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
	<button type="submit" onclick="return confirm('You are about to deactivate this job posting. The users would not be able to access this job. Do you wish to continue.');" class="btn regularButton"><span class="glyphicon glyphicon-off"></span> Deactivate</button>
</form>

	<form method="post" id="activateJobForm">
		<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
		<button type="submit" class="btn regularButton"  onclick="return confirm('You are about to activate this job posting. The users will be able to access this job. Do you wish to continue.');"><span class="glyphicon glyphicon-ok"></span> Activate</button>
	</form>
	<!--<a href="activatejob?jid=<?= $value['submitjob_id']; ?>">   <button type="button" title="activate this job" class="activateanother" onclick="return confirm('You are about to activate this job posting. The users will be able to access this job. Do you wish to continue.');"><span class="glyphicon glyphicon-ok"></span> activate</button></a>--></div>
		
<?php
		}
else
{
		?>
		<span  style="display:none;color:red; font-weight:bold;" id="deactivateJobSuccess">Your job successfully deactivated.</span>

			<span  style="display:none; color:red; font-weight:bold;" id="deactivateJobFailure">Something went wrong please try after sometime.</span>

			<form method="post" id="activateJobForm" style="display:none;">
		<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
		<button type="submit" class="btn regularButton"  onclick="return confirm('You are about to activate this job posting. The users will be able to access this job. Do you wish to continue.');"><span class="glyphicon glyphicon-ok"></span> Activate</button>
	</form>

<form method="post" id="deactivateJobForm">
	
	<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
	<button type="submit" onclick="return confirm('You are about to deactivate this job posting. The users would not be able to access this job. Do you wish to continue.');" class="btn regularButton"><span class="glyphicon glyphicon-off"></span> Deactivate</button>
</form>
		<!--
		<div class="col-md-12"><a href="deactivatejob?jid=<?= $value['submitjob_id']; ?>">   <button type="button" title="Deactivate this job" class="deactivateanother" ><span class="glyphicon glyphicon-off"></span> Deactivate</button></a></div>-->
		<?php
}
		
		?>
		<div class="col-md-12 padding"><a href="<?= base_url(); ?>RecruiterEditJob?jid=<?= $value['submitjob_id']; ?>">   <button type="button" class="btn regularButton" title="Edit this job"><span class="glyphicon glyphicon-edit"></span> Edit Job</button></a>
</div>				


<?php
}
if($applycount>=1)
{
	?>
	<div class="col-md-12">
<div class="alert alert-success" style="margin-top:3%;">
	You have <?= $applycount;?> Application on this job. 
</div>
</div>
	<?php
}
?>

</div>


<div class="col-lg-offset-1 no-padding col-lg-4 background col_3 refer_earn" style="text-align:center; margin-top:5%; margin-bottom:3%;">
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
	foreach ($data as $key) {
		foreach ($key as $value) {
			
		
	?>
	<table width="100%">
	
			<tr><td colspan="2" ><h3 class="radius">Profile Completeness</h3></td></tr>
			<?php 
			$checkbalance=$value['recruiter_balance']; 
				if($checkbalance<50)
				{


			?>
			
			<tr><td colspan="2"><font color="#f15f43"><b>50%</b> </font><progress value="50" max="100">
</progress> <font color="red"><b><a href="RecruiterAddBalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font></td></tr>
<?php
}
else
{
	?>
	
	<tr><td colspan="2"><font color="#f15f43"><b>100%</b> </font><progress value="100" max="100" style="color:red;">
</progress></td></tr>
<?php
}
?>

			<tr><td><b>Rating:</b></td><td>&#10004;</td></tr>
			<tr><td><b>Profile Views:</b></td><td><?= $value['recruiter_profile_viewed'].' Times'; ?></td></tr>
			<!--<tr><td><b>Shortlisted:</b></td><td><?= $value['recruiter_shortlist'].' Times'; ?></td></tr>
			--><tr><td><b>Balance:</b></td><td><?= $value['recruiter_balance']; ?></td></tr>
	</table>
	<?php
}
}
	?>
</div>
</div>


	<div class="row">
	<div class="col-lg-7 no-padding col_3 background refer_earn" style=" margin-bottom:5%;">
	
	<h3 class="radius">Job Description</h3>


	<?php
	foreach ($job as $value) {
		
	?>
	<div class="padding">
	<p><?= base64_decode(base64_decode($value['submitjob_job_description'])); ?></p>
	<p class="border"><span class="color">salary:</span>  </br><?= 'INR '.$value['submitjob_payscale'].' P.A.'; ?></p>
	<p class="border"><span class="color">Industry/category/Field:</span >  </br> <?= $value['submitjob_category']; ?> </p>
	<p class="border"><span class="color">Role&category:</span >  </br> <?= $value['submitjob_category']; ?> </p>
	<p class="border"><span class="color">Role:</span >  </br><?= $value['submitjob_category']; ?></p>

	<p class="border"><span class="color">Qualification:</span >  </br><?= base64_decode(base64_decode($value['submitjob_lowest_education'])); ?></p>
	<p class="border"><span class="color">Experience:</span >  </br><?= base64_decode(base64_decode($value['submitjob_experience_required'])); ?></p>
	<p ><h2 style="color: #d3404e;">Company Profile:</h2></p>
	<?php 
		foreach ($data as $keyy) {
			foreach ($keyy as $valuee) {
				
			
	 ?>
	<p class="border"><?= base64_decode(base64_decode($valuee['recruiter_description'])); ?></p>
	
	<p class="border"><span class="color">Recruiter name:</span >  </br><?= base64_decode(base64_decode($valuee['recruiter_company_name'])); ?></p>
	<p ><span class="color">Reruiter Id:</span >  </br><?= $valuee['recruiter_id']; ?></p>
	<?php
}
}
?>
</div>
<?php
}

	?>
</div>
<?php
//if(!empty($employe_session))
//{
?>
<!--<div class="col-lg-4" style=" border:1px solid #d9d9d9; text-align:center; border-radius:10px; margin-bottom:5%; padding:6px;">
		<table width="100%">
		<th colspan="2"></th>
			<tr><td colspan="2" ><h4><u>Jobs Applied:</u></h4></td></tr>
			<?php
if($apply=='null')
{
?>
<table style="margin-bottom:5%; text-align:center;">
				 	
				<tr> <td><h2>Sorry!! No result found</h2></td></tr>
				
			</table>
		
<?php

}
else
{
			foreach ($apply as $key ) {
				
					
			 foreach ($key as $value) {
				 ?>
				
				 <table style="margin-bottom:5%;">
				 	
				<tr> <td colspan="2"><a href="<?= base_url(); ?>employee/jobdetail?uid=<?= $value['id']; ?>" style="text-decoration:none;"><?= $value['job_description']; ?></a></td></tr>
				<tr ><td><i class="fa fa-suitcase" aria-hidden="true"></i>  <?= $value['category']; ?></td>
				<td><i class="fa fa-map-marker" aria-hidden="true"></i>  <?= $value['preffered_location']; ?></td></tr>
			
			</table>
		
			
				<?php
}
}
}

				?>
	</table>
	</div>-->
	<?php
//}
	?>

	<div class="col-lg-offset-1 col-lg-4 no-padding col_3 background refer_earn" style=" text-align:center; margin-bottom:5%; margin-top:.8%;">
	
		<h3 class="radius">Employee Invitations</h3>
		<table class="table">
                    <tbody>
                    	<?php

                    	if(empty($invitation)){
                    		?>

                    		  <tr class="unread checked">
                           
                            <td class="padding" style="text-transform:capitalize;"><strong>no invitation yet.</strong></td></tr>
                            	<?php
                            }
                            else
                            {
                    		foreach ($invitations as $value) {
                    	
                    			
                    	?>
                        <tr class="unread checked">
                           
                            <td class="hidden-xs padding" style="text-transform:capitalize;">
                               <a href="employerdetail?uid=<?= $value['employee_uid']; ?>&jid=<?= $jid; ?>" style="text-decoration:none; color:#999999;"><?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                        </tr>
                        <?php
						}
					}
                        ?>
                         
                        
                </tbody>
             </table>
	</div>
</div>

<div class="container">
<div class="row" style="margin-top:2%;">
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

</div>
<?php include'footer.php'; ?>
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




//job applied by a user from bottom button
      $('#deactivateJobForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/deactivatejob'); ?>",
        data: $('#deactivateJobForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		
        	$('#deactivateJobForm').hide(500);
            $('#deactivateJobFailure').show(500);
        }
        else if(response== 1)
        {
        	
        	$('#deactivateJobForm').hide(500);
        	$('#activateJobForm').show(500);
           // $('#deactivateJobSuccess').show(500);
           
        }
        
        }
        
   });

});





//job activate by a recruiter
      $('#activateJobForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/activatejob'); ?>",
        data: $('#activateJobForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		$('#activateJobForm').hide(500);
            $('#activateJobFailure').show(500);	
        }
        else if(response== 1)
        {
        	
        	$('#activateJobForm').hide(500);
        	$('#deactivateJobForm').show(500);
            //$('#activateJobSuccess').show(500);
           
        }
        
        }
        
   });

});

</script>