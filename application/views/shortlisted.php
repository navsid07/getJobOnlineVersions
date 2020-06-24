
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
<head><?php
include 'fav.php';
?><title> My shortlist :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="lattest government jobs, buisness ideas, find local jobs, get job online, job nearby, job consultants in bathinda, jobs, part time jobs, job opportunities, career center" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job provider and job seekers." />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
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
</style>
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 


<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

   

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
	<ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="name">My Shortlist</span></li></ul>
    <div class="single">  
	   <div class="col-md-8 single_right">
	   	<?php 
					if($favourite= $this->session->flashdata('favourite')):

			    $favourite_class=$this->session->flashdata('favourite_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $favourite_class; ?>">
			  
			  <?php echo $favourite; ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
	      <div class="but_list background">
	       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">My Shortlist</a></li>
			  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Recruited by me</a></li>
			   <li role="presentation"><a href="#jobs" role="tab" id="jobs-tab" data-toggle="tab" aria-controls="profile">My Jobs</a></li>
		   </ul>
		<div id="myTabContent" class="tab-content">
		  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		   <!-- shortlisted candidates-->
		   <?php
		   if($shortlistt==null || $shortlistt=='' || empty($shortlistt))
		   {
		   	?>

		  <div class="row padding" style="margin-top:5%; text-align:center;">
<h3><p><!-- Sad icon by Icons8 -->
<img src="<?php base_url(); ?>images/sorry.png"> <b>Sorry! No Result Found</b></p></h3>
		 </div>
		  <?php 
		   }
		   else
		   {
		   	
		   foreach ($shortlistt as $value) {
		  
		   ?>
			 <div class="tab_grid">
			    <div class="jobs-item with-thumb"><!--
				    <div class="thumb"><img src="<?= base_url(); ?>images/a3.jpg" class="img-responsive" alt="image"/></div>-->
				    <div class="jobs_right padding" id="deletedEmployee<?= $value['employee_uid']; ?>">
				    
				    	
						<div class="date_desc"><a href="<?= base_url(); ?>RecruiterEmployeeDetail?uid=<?= $value['employee_uid']; ?>"><?= base64_decode(base64_decode($value['employee_name'])); ?></a>
						 <span class="meta">
						<div itemscope itemtype="Place" style="padding: 1.3%;"><span itemprop="name"><img src="<?= base_url(); ?>images/location15.png"><?= base64_decode(base64_decode($value['employee_city'])).', '.base64_decode(base64_decode($value['employee_state'])); ?></span></div></span>
						</div>

						<div class="clearfix"> </div>
                        <!--<ul class="top-btns">
							<li><a href="#" class="fa fa-plus toggle"></a></li>
							<li><a href="#" class="fa fa-star"></a></li>
							<li><a href="#" class="fa fa-link"></a></li>
						</ul>-->
						<p class="description"><?= base64_decode(base64_decode($value['employee_description'])); ?> <a href="<?= base_url(); ?>RecruiterEmployeeDetail?uid=<?= $value['employee_uid']; ?>" class="read-more">More Info</a></p>
                    </div>
                    	<form method="post" id="deleteShortlisted<?= $value['employee_uid'];?>" class="padding">
                    		
                    		<input type="hidden" name="id" value="<?= $value['employee_uid'];?>">
                    		<button type="button" onclick="deleteShortlisted(<?= $value['employee_uid']; ?>)" class="delete">&#10008; Delete</button>
                    	</form>
                    <!--
                    <a href="deleteshortlisted/<?= $value['employee_uid']; ?>" " > <button type="button" style="margin-right:2%; margin-bottom: 1%;" class="delete">&#10008; Delete</button></a>-->
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <?php
			}
		
	}
			 ?>


		  </div>

		  <!-- recruit candidates-->
		  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
		  	<?php
		  	if($recruit=='null')
		  	{
		  		?>
		  		<div class="row padding" style="margin-top:5%; text-align:center;">
<h3><p><!-- Sad icon by Icons8 -->
<img src="<?php base_url(); ?>images/sorry.png"><b>Sorry!  No Result Found</b></p></h3>
		</div>
		  <?php
		  	}
		  	else
		  	{

		  		foreach ($recruit as $value) {
		  			
		  	?>
		    <div class="tab_grid">
			    <div class="jobs-item with-thumb">
				   <div class="jobs_right padding">
				   	<?php
				    	foreach ($recruitresult as $vvalue) {
				    		
				    		$mnth=$vvalue['recruitcandidate_month'];
				    		if($mnth==1)
				    		{
				    			$month='JAN';
				    		}
				    		if($mnth==2)
				    		{
				    			$month='FEB';
				    		}
				    		if($mnth==3)
				    		{
				    			$month='MAR';
				    		}
				    		if($mnth==4)
				    		{
				    			$month='APR';
				    		}
				    		if($mnth==5)
				    		{
				    			$month='MAY';
				    		}
				    		if($mnth==6)
				    		{
				    			$month='JUN';
				    		}
				    		if($mnth==7)
				    		{
				    			$month='JUL';
				    		}
				    		if($mnth==8)
				    		{
				    			$month='AUG';
				    		}
				    		if($mnth==9)
				    		{
				    			$month='SEP';
				    		}
				    		if($mnth==10)
				    		{
				    			$month='OCT';
				    		}
				    		if($mnth==11)
				    		{
				    			$month='NOV';
				    		}
				    		if($mnth==12)
				    		{
				    			$month='DEC';
				    		}
				    		
				    	?>
						<div class="date"><?= $vvalue['recruitcandidate_date']; ?> <span><?= $month; ?></span></div>
						<?php
					}
						?>
						<div class="date_desc"><h6 class="title"><a href="<?= base_url(); ?>RecruiterEmployeeDetail?uid=<?= $value['employee_uid']; ?>"><?= base64_decode(base64_decode($value['employee_name'])); ?></a></h6>
						  <span class="meta"><div itemscope itemtype="Place"><span itemprop="name"><?= base64_decode(base64_decode($value['employee_city'])).', '.base64_decode(base64_decode($value['employee_state'])); ?></span></div></span>
						</div>
						<div class="clearfix"> </div>
                        <ul class="top-btns">
							<li><a href="#" class="fa fa-plus toggle"></a></li>
							<li><a href="#" class="fa fa-star"></a></li>
							<li><a href="#" class="fa fa-link"></a></li>
						</ul>
						<p class="description"><?= base64_decode(base64_decode($value['employee_designation'])); ?> <a href="<?= base_url(); ?>RecruiterEmployeeDetail?uid=<?= $value['employee_uid']; ?>" class="read-more">Read More</a></p>
                     <a href="deleterecruit/<?= $value['employee_uid']; ?>">   <button type="button" class="delete">&#10008; Delete</button></a>
                    </div>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <?php
}

}

			 ?>
			 
		  </div>



		   <div role="tabpanel" class="tab-pane fade" id="jobs" aria-labelledby="jobs-tab">
		  	<?php
		  	if($jobs=='null')
		  	{
		  		?>
		  		<div class="row padding" style="text-align:center; margin-top:5%;">
<h3><p><!-- Sad icon by Icons8 -->
<img src="<?php base_url(); ?>images/sorry.png"><b>Sorry!  No Result Found</b></p></h3>
		</div>
		  <?php
		  	}
		  	else
		  	{

		  		foreach ($jobs as $value) {
		  		 $datee=$value['submitjob_date']/1000;
		  			$day= date("d", $datee);
		  			$mnth= date("m", $datee);
		  			$y= date("y", $datee);
		  			if($mnth==1)
				    		{
				    			$month='JAN';
				    		}
				    		if($mnth==2)
				    		{
				    			$month='FEB';
				    		}
				    		if($mnth==3)
				    		{
				    			$month='MAR';
				    		}
				    		if($mnth==4)
				    		{
				    			$month='APR';
				    		}
				    		if($mnth==5)
				    		{
				    			$month='MAY';
				    		}
				    		if($mnth==6)
				    		{
				    			$month='JUN';
				    		}
				    		if($mnth==7)
				    		{
				    			$month='JUL';
				    		}
				    		if($mnth==8)
				    		{
				    			$month='AUG';
				    		}
				    		if($mnth==9)
				    		{
				    			$month='SEP';
				    		}
				    		if($mnth==10)
				    		{
				    			$month='OCT';
				    		}
				    		if($mnth==11)
				    		{
				    			$month='NOV';
				    		}
				    		if($mnth==12)
				    		{
				    			$month='DEC';
				    		}
		  	?>
		    <div class="tab_grid" itemscope itemtype="http://schema.org/JobPosting">
			    <div class="jobs-item with-thumb">
				   <div class="jobs_right padding">

						<div class="date"><?= $day; ?> <span><?= $month; ?></span></div>
						<div class="date_desc" itemprop="title"><h6 class="title"><a href="<?= base_url(); ?>RecruiterJobDetail?rid=<?= $value['submitjob_id']; ?>"><?= $value['submitjob_job_title']; ?></a></h6>
						  <span class="meta" itemprop="jobLocation"><?= $value['submitjob_preffered_location'].', '.$value['submitjob_payscale']; ?></span>
						</div>
						<div class="clearfix"> </div>

                        <ul class="top-btns">
							<li><a href="<?= base_url(); ?>SubmitJobForm" title="Add new job" class="fa fa-plus toggle"></a></li>
							<li><a href="<?= base_url(); ?>RecruiterFavourite?jid=<?= $value['submitjob_id']; ?>" title="Save as Favourite" class="fa fa-star"></a></li>
							<!--<li><a   onclick="myFunction()" title="Copy link" class="fa fa-link"></a></li>
					-->	</ul>
						
						<p class="description"><?php $countt=base64_decode(base64_decode($value['submitjob_job_description']));
						 $ss= strlen($countt); echo substr($countt, 0, 50).'.....'?> <a href="<?= base_url(); ?>RecruiterJobDetail?rid=<?= $value['submitjob_id']; ?>" class="read-more">Read More</a></p>
                     <p style="margin-top:15px;">  <button type="button" class="delete" title="Edit this job"> <a href="<?= base_url(); ?>RecruiterEditJob?jid=<?= $value['submitjob_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit Job</a></button>
                  
                   <?php 
                    if($value['submitjob_deactivate']==0)
                    {
                    	?>
                    	<!--
                     <a href="deactivatejob?jid=<?= $value['submitjob_id']; ?>">   <button type="button" title="Deactivate this job" class="deactivate" onclick="return confirm('You are about to deactivate this job posting. The users would not be able to access this job. Do you wish to continue.');"><span class="glyphicon glyphicon-off"></span> Deactivate Job</button></a>-->
                     <form method="post" style="display: none;" id="activateJob<?= $value['submitjob_id']; ?>">
					<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
					<button type="button" title="Activate this job" class="activate" 
					onclick="activatejobFunction(<?= $value['submitjob_id']; ?>)"><span class="glyphicon glyphicon-ok"></span>Activate</button>
				</form>

                     <form method="post" id="deactivateJob<?= $value['submitjob_id']; ?>">
                 		<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>" >
                 		<button type="button" title="Deactivate this job" class="btn regularButton" onclick="deactivatejobFunction(<?= $value['submitjob_id']; ?>)"><span class="glyphicon glyphicon-off"></span>Deactivate Job</button>
                     </form>
                 </div>
					<?php
				}
				else
				{
				?><!--
				<a href="activatejob?jid=<?= $value['submitjob_id']; ?>">   <button type="button" title="Activate this job" class="activate" onclick="return confirm('You are about to activate this job posting. The users will be able to access this job. Do you wish to continue.');"><span class="glyphicon glyphicon-ok"></span> Activate Job</button></a>-->
				<form method="post" id="activateJob<?= $value['submitjob_id']; ?>">
					<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
					<button type="button" title="Activate this job" class="btn regularButton" 
					 id="activatebutton"><span class="glyphicon glyphicon-ok"></span>Activatee</button>
					<div class="col-md-offset-2 col-md-8 alert alert-success" id="activateconfirm" style=" text-align: center; display: none;">
						Are you sure want to activate this job.</br><p>
						<button type="button" onclick="activatejobFunction(<?= $value['submitjob_id']; ?>)" class="btn regularButton marginleft2">Yes</button><button type="button" id="activateno" class="btn regularButton marginleft2">No</button></p>
					</div>
				</form>

					<form method="post" style="display: none;" id="deactivateJob<?= $value['submitjob_id']; ?>">
                 		<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>" >
                 		<button type="button" title="Deactivate this job" class="btn regularButton" onclick="deactivatejobFunction(<?= $value['submitjob_id']; ?>)"><span class="glyphicon glyphicon-off"></span>Deactivate Job</button>
                     </form>
			</div>
			<?php
}
			?></p>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <?php
}

}

			 ?>
			 

		  </div>
	  </div>
     </div>
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

  <div class="col-md-4">
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
	   	  <div class="widget_search background">
			<div class="col_3"><h3 class="radius">Search</h3>
			<div class="widget-content padding">
				<span>I'm looking for a ...</span>
                <select class="form-control jb_1">
					<option value="">Employee</option>
					
				</select>
                <span>in</span>
                 <form action="<?= base_url(); ?>RecruiterSearch" method="post">
			
                <input type="text" class="form-control jb_2" name="location" placeholder="Location">
                <input type="text" class="form-control jb_2" name="job" placeholder="Job">
                <input type="submit" class="btn regularButton" value="Search">
                </form>
			</div>
		  </div>
	   	 </div>
	   </div>
  <div class="clearfix"> </div>

<div class="row">
		<div class="col-lg-7" style="margin-bottom:5%;">
			
				<div class="background col_3">
		<h3 class="radius">Jobs by me</h3>
			<table width="100%" style="border-collapse: collapse;" id="jobsByMeList">
		<thead>
	
			<!--<tr><td class="left"></td><td>Viewed</td><td>Applied</td></tr>-->
				<?php
				if($myjobs=='null')
				{
					?>
					<tr class="border"><td class="profile_left padding">
You haven't posted any job yet.
</td>
			</tr>
			<?php
				}
				
				else
				{
					?>
					 <tr style="text-align:center;">
	 	<td><div id="loading1"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="Loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>
					<?php
	
				}
				?>
			<!--<tr ><td colspan="4" class="profile_left padding" style="text-align:center;"><a href="<?= base_url();?>recruiter/submitjob" class="postjob">Post a new job>></a></td></tr>
		--></table>
		<div style='text-align:center;' class="padding" id='jobsPostedPagination'></div>
		<div style="text-align: center;" class="padding"><a href="<?= base_url();?>SubmitJobForm" class="postjob">Post a new job>></a></div>
	</div>
		<!-- pagination for jobs posted by-->
<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>/js/jobsByMe.js"></script>
<!-- end code -->

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
		<div class="col-lg-offset-1 col-lg-4 refer_earn" style="margin-bottom:5%; padding:3px;">
				
				<table width="100%" class="background col_3" style="border-collapse: collapse; text-align: center;">
		<th colspan="4"></th>
			<tr><td colspan="4"><h3 class="radius">My referral progress this month</h3></td></tr>
			<tr class="border"><td colspan="2" class="profile_left padding fontSize"><b>Total Clicks:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="2" class="profile_left padding fontSize"><b>Total Earned:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center" class=" padding"><a  style="text-decoration:none; cursor:pointer;" id="sharebutton" class="postjob">Share my referral link</td></tr>
			
		<?php

		 foreach ($profile as $value) {
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
	$(document).ready(function()
	{
		$("#link").click(function(){

			$("#inputbox").slideToggle();
		});
	});
</script>
<script>
$(document).ready(function(){
    $("#sharebutton").click(function(){
        $("#shareicon").fadeIn("slow");
        $("#shareicon1").fadeIn(3000);
        $("#shareicon2").fadeIn(3000);
        $("#shareicon3").fadeIn(3000);
    });


         //show confirm form
    $("#activatebutton").click(function(){
        $("#activatebutton").hide(700);
        $("#activateconfirm").show(700);
        
    });

//hide confirm form
     $("#activateno").click(function(){
     	 $("#activateconfirm").hide(700);
        $("#activatebutton").show(700);
       
        
    });




});

</script>

<!--activate job-->
     <script type="application/javascript">
 function activatejobFunction(id)
 {

    var paramstr=$("#activateJob" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/activatejob",
    paramstr))
    {
             $("#activateJob" + id).hide(600);
              $("#deactivateJob" + id).show(600);
         
    }
   }
 </script>



<!--deactivate job-->
     <script type="application/javascript">
 function deactivatejobFunction(id)
 {

    var paramstr=$("#deactivateJob" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/deactivatejob",
    paramstr))
    {
             $("#deactivateJob" + id).hide(600);
              $("#activateJob" + id).show(600);
         
    }
   }







 function deleteShortlisted(id)
 {

    var paramstr=$("#deleteShortlisted" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/deleteshortlisted",
    paramstr))
    {
       
      $("#deleteShortlisted" + id).hide(600);
      $("#deletedEmployee" + id).hide(600);
      
    }
   }




 </script>



</html>	