<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php

$recruiter_session=$this->session->userdata('recruiter_id');
$recruiterCookie=get_cookie('sessionCookieRecruiter');
$this->session->unset_userdata('linkid');

?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';
?><title>Online job portal for job seekers and job providers | profile detail | Get-job.online </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="get job online, job opportunities, job nearby, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
" />
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


<link href="<?= base_url(); ?>css/stylesheet.css" rel='stylesheet' type='text/css' />
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

<?php
	include('EmployeeHeader.php');
?>

	
<div class="container">
	<div id="spacetop">
		&nbsp;
	</div>

	<ul id="breadcrumbs"><li ><a href="<?= base_url(); ?>">Home</a> </li><li >Employerdetail </li></ul>
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
		
		foreach ($employee as $value) {

		?>
		<div class="col_3 background">
			<h3 class="radius"><font size="4em"><?= base64_decode(base64_decode($value['employee_name'])); ?></font></h3>
		<table width="100%" style="text-align:center;" cellpadding="10">
		
	
			<tr><td colspan="2"></td>
			</tr>

			<tr class="border"><td class="fontSize padding" colspan="2"><?= base64_decode(base64_decode($value['employee_fresher_experience'])); ?></td></tr>
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

			<tr><td colspan="2" style="text-align:center;" class="padding" ><a id="report" style="text-decoration:none; cursor:pointer;">Report this User</a>

				<a id="hidereport" style="text-decoration:none; display:none; cursor:pointer;">Hide Report</a></td></tr>

			<tr><td class="padding" colspan="2">
				<table id="reportEmployee" width="60%" align="center">
				<form action="<?= base_url();?>ReportEmployee" method="post">
					<tr><td><?php $get_uid=$this->input->get('uid'); ?>
		<input type="radio" name="category" value="Spam"> Spam
			
				<input type="hidden" name="getUid" value="<?= $get_uid; ?>">

			<input type="radio" name="category" value="Unresponsive" > Unresponsive</td></tr>
			<tr><td class="padding" colspan="2" style="text-align: center;"><textarea class="form-control" name="reportEmployee" Placeholder="Write something about your report"></textarea></td></tr>
			<tr><td class="padding" colspan="2"><input type="submit" class="editbutton"value="Submit Report"></td></tr>
		</form>
	</table>
</td></tr>
		<?php
				if(!empty($recruiter_session) || !empty($recruiterCookie))
				{
					if($jobscount=='null')
					{
						?>
		<tr><td colspan="2"><div class="fontSize notee">In order to recruit candidate you need to post a job.</div></td></tr>
						<?php
					}
					else
					{
			if($recruited=='null' && empty($jid) && empty($fetchstatus))
			{
				?>
			<!--<tr><td colspan="2"><a href="recruit/?rid=<?= $value['employee_uid']; ?>"><button class="editbutton" onclick="return confirm('Are you sure to Recruit <?= base64_decode(base64_decode($value['employee_name'])); ?>?');">Recruit</button></a></td></tr>
			-->
			<tr><td colspan="2" class="fontSize padding"><button class="editbutton" id="onclick">Recruit</button></a></td></tr>
			<tr><td colspan="2">Or</td></tr>
			<tr><td colspan="2" class="fontSize padding"><a href="<?= base_url(); ?>RecruiterShortlistEmployee?uid=<?= $value['employee_uid']; ?>">Shortlist this Candidate</a></td></tr>
	
	<?php
}
elseif($recruited!='null' && empty($jid) && empty($fetchstatus))
{
	?>

<tr><td colspan="2" class="fontSize padding"><button class="editbutton" id="onclick">Recruit</button></a></td></tr>
			<tr><td colspan="2">Or</td></tr>
			<tr><td colspan="2"><a href="<?= base_url(); ?>RecruiterShortlistEmployee?uid=<?= $value['employee_uid']; ?>">Shortlist this Candidate</a></td></tr>
	
	<tr><td colspan="2"><a style="cursor:pointer;"  id="showwcontact">Show Contact</a></td></tr>	
	
<tr colspan="2"><td id="showcontact" class="fontSize" style="display:none;"><?= base64_decode(base64_decode($value['employee_phone'])); ?></td>
	<tr colspan="2"><td id="showcontact1" class="fontSize" style="display:none;"><?= base64_decode(base64_decode($value['employee_email'])); ?></td></tr>
	
	<?php
	}
}
}
if(empty($recruiter_session) && empty($recruiterCookie))
{
	?>
<tr><td colspan="2"><a href="#" style="color:red; text-decoration:none;">Please login to recruit or shortlist this candidate</a></td></tr>
	<tr><td colspan="2"><a href="#" style="text-decoration:none;">New user? Register here</a></td></tr>
	
	<?php
}
	
	
if(!empty($jid) && !empty($fetchstatus))
{
	foreach ($fetchstatus as $key){
		$fstatus=$key['applyjob_status'];
		if(($fstatus==0 || $fstatus=='') && $applycheck !='null')
		{
	?>
	<tr><td>

		<a href="#">   <button type="button" title="Accepr job Invitation" class="accept" onclick="return confirm('Do you want to Accept this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Accept Invitation</button></a>

	</td><td>
		<a href="#">   <button type="button" title="Decline job Invitation" class="decline" onclick="return confirm('Do you want to decline this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Decline Invitation</button></a>

	</td></tr>
	<?php
}




elseif ($fstatus=='1') {

	?>
	<tr><td colspan="2">
		<div class="alert-success">You just Accepted this Employees invitation.</div>
	</td></tr>
	<?php
}
elseif ($fstatus==2) {
	?>
	<tr><td colspan="2">
	<div class="alert-danger">You just Declined this Employees invitation.</div>
	</td></tr>
	<?php
}
}

}
/*elseif(!empty($applycheck))
{
	?>
	<tr><td>

		<a href="<?= base_url(); ?>recruiter/updateapplystatus?jid=&employee_id=<?= $value['employee_uid']; ?>&status=1">   <button type="button" title="Accepr job Invitation" class="accept" onclick="return confirm('Do you want to Accept this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Accept Invitation</button></a>

	</td><td>
		<a href="<?= base_url(); ?>recruiter/updateapplystatus?jid=&employee_id=<?= $value['employee_uid']; ?>&status=2">   <button type="button" title="Decline job Invitation" class="decline" onclick="return confirm('Do you want to decline this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Decline Invitation</button></a>

	</td></tr>
	<?php

}*/
	?>
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
			foreach ($employee as $value) {
				
			?>
			<!--<tr><td rowspan="5"><img src="<?= base_url(); ?>images/banner.jpg" width="150" alt="image"></img></td><td colspan="2"><?= base64_decode(base64_decode($value['name'])); ?></td></tr>
				--><tr class="border"><td class="padding fontSize">Profile Viewed:</td><td class="fontSize"><?= $value['employee_profile_viewed']. 'Times'; ?></td></tr>
				<!--<tr class="border"><td class="padding fontSize">Rate Now:</td><td class="padding">


			<a href="" style="text-decoration:none;" data-toggle="modal" data-target="#myModal">	<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANCSURBVEhLzVZdSBRRFJ6iIvqhqKAoiogoKKjA6MGiae6MFiVB1EKFO3dV2ggS6qGfh0osqJcoSKhnM+pFEsqeRIvAl5JIIYoCK/oRLXfvjH/92fSd2eNgae5Pu9IHh5nz3XvPOffcc8+MlilU2FrfZ4tFrI4PvIqKiY4U7UqaNUyND+LSMpUtBuG4Py712UznHo40byopquH8pbLNQ0znFqqscA6cDbhha5OS1kkE0cJDuQXSWw7HLzxNm9BXai2E/j0uC9bxcO6AHba6UhxnVUMQd8BVsZob0BWCo289ZWI+U5pjGzvhOOZJfSpT2Ydjm9fguI5VH56uTwLXoSLmfqayiw/RommOLRR2t4OpAOAvIKhGVlMDpahX6gtUsb5cSSMvLs0tTtgswnXZi8KJwtExGK2E3IL+nnbISwNg/gr/XtvmRcw5jblHcdcPqIgIQd9GN4AKUJWYy9x9+jzfBhx8hHEvENuM4/kOhp6jOz2GNGDxbRi9jqB2s68R8K8WBZcotiZIC+QVHQOePZBhPsQNLW4LA84/w1E9pZPtZB3ocEspEAT3lN59klIAx23Y3ZPuSOFin8wiXNvYDPtd2GltZ0ifwXQCRCAtddh9J50J0/8MODwIm18hZ6jpMP07aABRncXkL1QcTGcEL5o3GRm8Sufr2mIX02MD574Hi3qxqGq0Kk4Gqlzs8AFstMdssYbp1BArMdaiEN5AGmNRaxbTSeGWiFVY8xpBN1EATKcHao2I/Ad9f5lKCuzyHBUqpZqp9DHUm0dU4higILFj958c46xPwPFDVlMCdUI0nH5XFmxkKn0gbQ1IWwWrKSPTdT7GirzHNlbj2t3H+VejT89lOkAmmQow2ll5odAUcJWJhmDWwHgz3jv//CRmUhsBkK7zMHqXVc2JGPkw9ozuJgxvJY5+cxFAOQWI1NbHwtaSIR4Z6caa7aSnBSx8BCdHPpXmz6RGQjuAXO4oLpjOUwKQQ4zd4wAOs+NaBH6Jp6SGxJ+kGKSzgvO3eG+DbODhv4JSjnldCKIZjq8g4FYeSg303cUiDwYGIKfSuZNUbHT+/npp/hz+f5YU2GWEWp5TaqxkKm1QHVCmqIUy9T9A034BzbbyCQg2Z9QAAAAASUVORK5CYII=">  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKrSURBVEhLtZVfiExRHMev/ykllFJCHuQ/hayocc+5s7vxyJR2Zs65szSUSMoDpfXgRR78eVG8iMKTB6zijXghSRGRfdklu2vvnDMjGw8zvr8zPxvZvXu3GZ+a7v19f79zz+93zu+c8SZCrbhhmlUix+b/oaTlLqNl1RTkUpaaj1Gy2yjx1ip5mqXm8jWbWogqBks6vR7PvlomM4VdzQMfPon9uOjelXhitdzpHM2i1tU12WrREymxlmyr/AImve2czcLkZYBJnrPp9WdSs1DVUCWXns9S42CjbxotDrDpQCVXsGTH2ExO9VD7DLO3dS61aFTw15V1eqsN/R34WBQVg9kc5rA6aEG3vXNV5rZvRlWrSzq1xHRsm/NPU6DsZ/QRDPiJ7L5jUwegfUT2L6A9hnYfS3WEw/8CsRcw9gHinuL5qj5ODKHqH9CGMXYQ9mWsd9BGRlmJfTy2YagSfPM8Jv5QzgcrnGjzchkdMsx+rtH+p2V11Sv5kJaO5TrOiRM9qjMh9WSxT3HJujKVPOPKLIiVLCcC2bdj7BfsX8hSPBiQxeb1U2exFAsqOIrEevHcwlIyMFER+3SPzVgQ22dCuYnN5HB7JjpsiLuBKjSbyUF2r+nGZTMWG8pOxF9nMxnfsm0L6FDWPG8SSw7qHmR9im4FlhxRp78Ye/iZzWTglObovmLTq6VSU9E5x10zaHELCXzC+x52O6C9ryh/FZvjgw9c/X0D4EbYiElfYpLuKB8sGtFwjSDuLv2ZkYakLkE7TO+JQHAvnROs81mXdSg72DVCvTpxgpYVkx00ocggkTvsjqesW5cjeJguOzyvYR/msWtUaJ+QzCPEvsFSWpqcXWNjtZ9HcA9dnCyNCzUIKtqPxEwllGtYHhu6WvCbzuaEqO5umcmvf+B5vwBFE2heXqSkoAAAAABJRU5ErkJggg==">  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH8SURBVDhPpZS/axRBFMfX3wYJUQtNIQRshMQ0XiMSXHdmT0xCrO5SJHFm7w7P6oiF2AZRsRLUgIWgEEhhE5IuMSgokkI8kvhXWCi3s7d2wq3ft/sQk9ucubsPLLvf7868ffPm7Vj7oX7LtYOic4Fl9xglN4yWb1h2R6icIQRcDrT4+qN4pZftzjFaPA20HA+Uc8/X7m22OyPK548GSmxFtn04nMmeQfDP/KozfCVyyO4xSwvBlxD4Isv2iCzrAOq2ZgryPFtWsnTxgmU6WMYCro9UdEyoJvf4+QvVj4fFoASH8O7tznE8T8kPeH5oBZ6YgNjups/qyrmKoN+MdjKJURCDyVfEaGy0gVHiDq3wl7b72UowpeunEXC1rsV9tloSlTNHsMSXCPi6UblxjO2dUHvgj3iGwIs0ge0mzNTIKYx5j2uWrdagpuv/7u5uAs8ZQ4nmWbYmmps7iC9vsUylVnb79t3kvicu7T4IqOC+tk+yjKGAFJjl3tCmIOA0PXPf3eV+2zTKnYwHAZTlEf7vmyz3BrV5RxmFnhymLDDxAf3TlCFK8Qreys9p+xydkdjh5zwtnUjbx6lBqeOR5Sc6uvjVX3wtr3HGyFxW2U4nPpm1DBGsQpvDdhON3OUeZPsE437TKcR2M99nsifCkjjL8r/Uis4A9S5LYFl/AJlZ+pZ5N05yAAAAAElFTkSuQmCC"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFqSURBVDhPlZKxSgNBEIZPC0VQEERRLLSzsLCwUBQ8dy8xAREscpW5nSTYiKiFpWBewEIQo4Ii2kSsfB3FFxAht3uJbeLMZlAuRhO/5mb+2dnd+W+dvzBKHnD4PyJILhvwXisFMcVS92DjmQYxr0Ees9Qd74WlIQOyRDE23zWKxV5b6IZIye1IiRWKDYhAK7FmC63gzkdGeRd4zUv7VfJKK3nTcJweqtcziwOol0n/WgfyHPt2nVDJDCX1vXS/3a0DIbjDWnn3UZBwrVDJiznc4KG2lZqwwi+YgpjB0x9xg2mWmkT59ChdjxxmKYYOEika5813B1mKYwJvRIN3ymmMjq6bnNyIQG5yGgON2qfxOP0JGnFChpDTGO/gaU86J32qVZWYRV8O7cJ2YMM1m1LGk9ZJw1EA9dsPJSdpZruwlRq441h8odPphbFsqWaTY/R/8SbPDd/vY/kb63Z2dYHTtoSQ8OjRNDPH+QQbFqA6IEIVKgAAAABJRU5ErkJggg==">  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADbSURBVChTdY89a0IxFIbTYsHSUfAHuBUncXG75JyrY2vBDyjm5AqiiE4uul2ok7/U8Z5cd2NiUoq2fSCQ9z3f4p4ik1AobEX5P0yw9i/KvzlNunWmdGRITo+T7ku0A6xwXBLMWOPcEHydB51no7Dmuube87FSQ1+4z0ep8D3W/YIz/GSSvSC0bLOGlRXi4Wo4bJJUXOdNqdLXaAX8CKuTapRh3wyGUf7AhEvf0QfdMW/Bg8U1+I3N80eXeGCd7niKjRPJZkGwNRr2MSXgrzSEdLNjKF7aeftJCCEu5pNa46JbMUkAAAAASUVORK5CYII="></td></a></tr>
			-->
				<!--<tr><td>Requests</td><td>70 employers</td></tr>-->
				<tr class="border"><td class="padding fontSize">Preferred Location:</td><td class="fontSize">
					<div itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?= $value['employee_preffered_location']; ?></span></div></td></tr>
				<tr><td class="fontSize">Member Since:</td><td class="fontSize"><?= $value['member_since']; ?></td></tr>
				<!--<tr><td colspan="2">Download Resume</a></td></tr>
	-->
<tr><td colspan="2">
<a href="#" target="_blank"><button type="button" class="download">Download Resume</button></a></td></tr>	<?php
}

				?>
	</table>


</div>
<!--
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
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

			
				foreach ($employee as $value) {
					
						
						
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
		
			foreach ($employeeExperience as $experienceValue) {
				$experiencecheck=base64_decode(base64_decode($value['fresher_experience']));

			
		?>
<tr class="border"><td class="profile_left padding fontSize"><b>Experience:</b></td><td><?= $experiencecheck; ?></td></tr>
	<?php
		}
			?>
			<tr class="border"><td class="profile_left padding fontSize"><b>Cover Letter:</b></td><td class="fontSize"><?= base64_decode(base64_decode($value['employee_description'])); ?></td></tr>
	
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
			<tr class="textalign"><td colspan="2" class="padding fontSize"><button class="editbutton" id="onclick1">Recruit</button></td></tr>
			<tr class="textalign"><td colspan="2">Or</td></tr>
			<tr class="textalign"><td colspan="2" class="padding fontSize"><a href="#">Shortlist this Candidate</a></td></tr>
	
	<?php
}
elseif($recruited!='null' && empty($jid) && empty($fetchstatus))
{
	?>
	<tr><td colspan="2"><button class="editbutton" >Recruit</button></td></tr>
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
<tr ><td colspan="2" style="text-align: center;"><a href="#" style="color:red; text-decoration:none;">Please login to recruit or shortlist this candidate</a></td></tr>
	<tr><td colspan="2" style="text-align: center;"><a href="#" style="text-decoration:none;">New user? Register here</a></td></tr>
	
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
		<a href="#">   <button type="button" title="Accept job Invitation" class="accept" onclick="return confirm('Do you want to Accept this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Accept Invitation</button></a>

	
		<a href="#">   <button type="button" title="Decline job Invitation" class="decline" onclick="return confirm('Do you want to decline this job invitation.');"><span class="glyphicon glyphicon-ok"></span> Decline Invitation</button></a>

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



<div class="col-lg-offset-1 col-lg-5" style=" margin-bottom:5%; padding:3px;">
	<?php

if(!empty($employeeExperience))
{
	foreach ($employeeExperience as $experienceValue) {
	
	?>
	<div class="col_3 background fontSize">
		<h3 class="radius"><font size="4em">Experience Detail</font></h3>
	<h4 class="padding" style="text-align: center;"><?= $experienceValue['fresher_experience']; ?></h4>
</div>
<?php
}
}
?>
</br>
<div class="col_3 background fontSize">
		<h3 class="radius">Education Detail</h3>
	<table width="100%" style="text-align:center;">
		<th colspan="2"></th>
			<tr><td colspan="4" ></td></tr>
			<?php

			if(empty($employeQualification))
			{
				?>
<tr><td class="fontSize"><h4>Sorry No Detail found</h4></td></tr>
				<?php
			}
			else
			{
				?>

				<tr></td><td class="hr fontSize"><b>Passed</b></td><td class="hr fontSize"><b>Uni</b></td><td class="hr fontSize"><b>Marks</b></td></tr>
				<?php
			foreach ($employeQualification as $employeQualificationvalue) {
				
				
				
?>


					
<tr><td class="hr fontSize"><?= $employeQualificationvalue['passed']; ?></td><td class="hr fontSize"><?= $employeQualificationvalue['university']; ?></td><td class="hr"><?= $employeQualificationvalue['marks']; ?></td></tr>	
			<?php	
			
			
	}
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

			
			foreach ($employeeExperience as $value) {
				
			?>
		<tr><td class="fontSize hr"><b>Industry name</b></td><td class="fontSize hr"><b>Experience gained</b></td></tr>
				<?php
				if((!empty($value['company1']) || !empty($value['experience1'])) && empty($value['company2'])) 
				{
				?>
				<tr class="padding"><td class="fontSize"><?= base64_decode(base64_decode($value['company1'])); ?></td><td><?= base64_decode(base64_decode($value['experience1'])).' months'; ?></td></tr>
				<?php
				}
				elseif((!empty($value['company1']) || !empty($value['experience1'])) && (!empty($value['company2']) || !empty($value['experience2']))) 
				{
				?>
				<tr ><td class="fontSize padding"><?= base64_decode(base64_decode($value['company1'])); ?></td><td><?= base64_decode(base64_decode($value['experience1'])).' months'; ?></td></tr>
				<tr ><td class="fontSize padding"><?= base64_decode(base64_decode($value['company2'])); ?></td><td><?= base64_decode(base64_decode($value['experience2'])).' months'; ?></td></tr>
					<?php
				}
				elseif((!empty($value['company1']) || !empty($value['experience1'])) && (!empty($value['company2']) || !empty($value['experience2'])) && (!empty($value['company3']) || !empty($value['experience3']))) 
				{
				?>
				<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company1'])); ?></td><td><?= base64_decode(base64_decode($value['experience1'])).' months'; ?></td></tr>
				<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company2'])); ?></td><td><?= base64_decode(base64_decode($value['experience2'])).' months'; ?></td></tr>
			
					<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company3'])); ?></td><td><?= base64_decode(base64_decode($value['experience3'])).' months'; ?></td></tr>
						<?php
				}
				elseif(!empty($value['company1']) || !empty($value['experience1']) && (!empty($value['company2']) || !empty($value['experience2'])) && (!empty($value['company3']) || !empty($value['experience3'])) && (!empty($value['company4']) || !empty($value['experience4']))) 
				{
				?>
				<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company1'])); ?></td><td><?= base64_decode(base64_decode($value['experience1'])).' months'; ?></td></tr>
				<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company2'])); ?></td><td><?= base64_decode(base64_decode($value['experience2'])).' months'; ?></td></tr>
			
					<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company3'])); ?></td><td><?= base64_decode(base64_decode($value['experience3'])).' months'; ?></td></tr>
				
						<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company4'])); ?></td><td><?= base64_decode(base64_decode($value['experience4'])).' months'; ?></td></tr>
						<?php
				}
				elseif(!empty($value['company1']) || !empty($value['experience1']) && (!empty($value['company2']) || !empty($value['experience2'])) && (!empty($value['company3']) || !empty($value['experience3'])) && (!empty($value['company4']) || !empty($value['experience4'])) && (!empty($value['company5']) || !empty($value['experience5']))) 
				{
				?>
<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company1'])); ?></td><td class="fontSize"><?= base64_decode(base64_decode($value['experience1'])).' months'; ?></td></tr>
				<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company2'])); ?></td><td class="fontSize"><?= base64_decode(base64_decode($value['experience2'])).' months'; ?></td></tr>
			
					<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company3'])); ?></td><td class="fontSize"><?= base64_decode(base64_decode($value['experience3'])).' months'; ?></td></tr>
				
						<tr><td class="fontSize padding"><?= base64_decode(base64_decode($value['company4'])); ?></td><td class="fontSize"><?= base64_decode(base64_decode($value['experience4'])).' months'; ?></td></tr>
					
							<tr><td class="padding"><?= base64_decode(base64_decode($value['company5'])); ?></td><td class="fontSize"><?= base64_decode(base64_decode($value['experience5'])).' months'; ?></td></tr>
	<?php
}
}
				?>
	</table>
</div>
</div>
<?php
}
?>
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
var span = document.getElementsByClassName("close")[0];

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
</html>	