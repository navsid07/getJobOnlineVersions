<html  lang="en">
	<head>
		
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
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
		<body style="background: #f5f5f0;">
			<nav class="navbarr navbar-default" role="navigation" style="height:10px;">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	      </div>
	    <!--/.navbar-header-->
	     <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	 <li><a href="<?= base_url(); ?>admin">Home</a></li>
	        	
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiter<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	
			           <li><a href="<?= base_url(); ?>admin/allrecruiter" >All recruiter</a></li>
			            	  <li><a href="<?= base_url(); ?>admin/verifiedrecruiterr" >Verified recruiter</a></li>
			            	    <li><a href="<?= base_url(); ?>admin/suggestedrecruiter" >Suggested recruiters</a></li>
		     
			       </ul>
		        </li>

		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	
			          <li><a href="<?= base_url(); ?>admin/allemployer" >All employee</a></li>
			            	 <li><a href="<?= base_url(); ?>admin/verifiedemployeee" >Verified employee</a></li>
			            	    <li><a href="<?= base_url(); ?>admin/suggestdashboard">Suggested employee</a></li>
		      
			       </ul>
		        </li>
		      	<li><a href="<?= base_url(); ?>admin/adduserview">Add user</a></li>
		        <li><a href="<?= base_url();?>admin/logout" >Logout</a></li>
	       
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
				<div class="container">
					<div class="row" style="margin-top:4%;">
						<div class="row">
							<form action="<?= base_url(); ?>admin/searchClient" method="post">
							<div class="col-md-offset-2 col-md-6">
								<input type="hidden" name="client" value="employee">
							<input type="text" name="email" placeholder="Search user"class="form-control"></div>
							<div class="col-md-4"><input type="Submit" class="btn btn-primary" style="border:none;" value="Search"></div>
						</form>
					</div>
						<div class="col-md-12 padding background">
							
							
						<?php

						foreach ($data as $value) {
							
							$uid=$value['employee_uid'];
								$articles=$this->fetch->articlesCountEmployee($uid);
								$reportCountt=$this->fetch->reportsCountEmployee($uid);


								//reports count
									if(empty($reportCountt))
							  {
							  	$reportCount='No report';
							  }
							  elseif (!empty($reportCountt)) {
							  
							  	if($reportCountt==1)
							  	{
							  		$reportCount=$reportCountt.' report';
							  	}
							  	elseif ($reportCountt>1) {
							  		$reportCount=$reportCountt.' reports';
							  	}
							  }


								//articles count
								if(empty($articles))
							  {
							  	$articlescount='No article';
							  }
							  elseif (!empty($articles)) {
							  
							  	if($articles==1)
							  	{
							  		$articlescount=$articles.' article';
							  	}
							  	elseif ($articles>1) {
							  		$articlescount=$articles.' articles';
							  	}
							  }


								$jobscount=$this->fetch->appliedjobCount($uid);
							if(empty($jobscount))
							  {
							  	$appliedjobs='No job applied';
							  }
							  elseif (!empty($jobscount)) {
							  
							  	if($jobscount==1)
							  	{
							  		$appliedjobs=$jobscount.' Job Applied';
							  	}
							  	elseif ($jobscount>1) {
							  		$appliedjobs=$jobscount.' Jobs Applied';
							  	}
							  }
							$experienceData=$this->fetch->fetchemployeexperience($uid);
							$qualificationData=$this->fetch->fetchemployequalification($uid);
								//print_r($experienceData);
								//print_r($qualificationData);
							if(empty($value['employee_city']))
							{
								$completed='12%';
							}
							elseif(!empty($value['employee_city']) && empty($value['employee_phone']))
							{
								$completed='24%';
							}
							elseif (!empty($value['employee_city']) && !empty($value['employee_phone']) && empty($qualificationData)) {
								
								$completed='36%';
							}
							elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && empty($value['employee_category']))
							{
								$completed='48%';
							}
							elseif (!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && empty($experienceData))
							 {
							 	$completed='60%';
								
							}
							elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && !empty($experienceData) && empty($value['employee_resume']))
							{
								$completed='72%';

							}
							elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && !empty($experienceData) && empty($value['employee_resume']) && empty($value['employee_profile_pic']))
							{
								$completed='84%';

							}
							elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && !empty($experienceData) && empty($value['employee_resume']) && !empty($value['employee_profile_pic']))
							{
								$completed='100%';
							}
							else
							{
								$completed = '0%';
							}


							//profile views
							if ($value['employee_profile_viewed']==0) {
							$profileViews='No Profile View';
							}
							elseif ($value['employee_profile_viewed']<=1) {
							 $profileViews=$value['employee_profile_viewed'].' Profile view';
							}
							elseif ($value['employee_profile_viewed']>1) {
								$profileViews=$value['employee_profile_viewed'].' Profile views';
							}



							//member since

							if (empty($value['employee_member_since'])) {
							$membersince='Joining date not available';
							}
							elseif (!empty($value['employee_member_since'])) {
							 $membersince=$value['employee_member_since'];
							}
							
							
						?>
						
						
						<div class="row padding align-baseline" style="border:1px solid #f15f43;">
							<div class="col-md-12">
						 </div>
						<div class="col-md-5"><a href="<?= base_url(); ?>admin/search?email=<?= $value['employee_email']; ?>&&client=employee"><?php echo 'uid='.$value['employee_uid'].'</br>';
						echo base64_decode(base64_decode($value['employee_name']));
						?></a></div>
						<div class="col-md-5"><?php
						echo $completed.' Completed';
						?></div>
						<div class="col-md-2">Last Mail sent</div>
							<div class="col-md-5">
								<?php
						echo base64_decode(base64_decode($value['employee_email']));
						?>
							</div>
							<div class="col-md-5"><?php
						echo $appliedjobs;
						?></div>
							<div class="col-md-2"></div>
								<div class="col-md-5"><?php
						echo $membersince;
						?></div>

								<div class="col-md-5"><?php
						echo $articlescount;
						?></div>
						<div class="col-md-2"></div>

						<div class="col-md-5"> <?php
						echo $profileViews; ?></div>

								<div class="col-md-5">
									<?php
									echo $reportCount;
									?>
								</div>
						<div class="col-md-2"></div>
						<div class="row">
						<div class="col-md-12 align-center">


			<a href="<?= base_url(); ?>admin/search?email=<?= $value['employee_email'];?>&& client=employee"><button type="button">Visit Profile>></button></a>
				
					</div>
						</div>
						
				</div>
						<?php
					}
						?>
						
					
							</div>
												
					</div>
				</div>
			
		</body>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
</html>