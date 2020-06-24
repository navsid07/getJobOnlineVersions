<?php



	 $dataHeader=$this->fetch->fetchrecruiterprofile();
      
      $categoriesHeader=$this->fetch->fetchcategories();
?><nav class="navbar navbar-default" role="navigation">
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
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Category<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	<?php
		            	$kky=array();
foreach ($dataHeader as $keyyHeader) {
	 $kky=$keyyHeader['recruiter_verify'];
}

		            	if($categoriesHeader==null)
		            	{
		            		?>
		            		<li><a href="#">Categories Coming Soon</a></li>
			        <?php   
		            	}
		            	else
		            	{
		            		foreach ($categoriesHeader as $valueCategoryHeader) {
		            		
		            	?>
			            <li><a href="<?= base_url(); ?>RecruiterSearch?category=<?= $valueCategoryHeader['employee_category']; ?>"><?= base64_decode(base64_decode($valueCategoryHeader['employee_category'])); ?></a></li>
			            <?php

			        }
			    }
			            ?>
		            </ul>
		        </li>
		        
		        

			           
			              <?php
			            foreach ($dataHeader as $valueHeader) {
			             	$status=$valueHeader['recruiter_referral_status'];
			             	if($status!=1)
			             	{
			            ?>
			             <li><a href="<?= base_url(); ?>referral?q=<?= $valueHeader['recruiter_email']; ?>" title="Get started Refferal program">Refer & earn</a></li>
			           
			            <?php
			        }
			        else
			        {
			            ?>
			             <li><a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard">Referral Dashboard</a></li>
			           
						<?php
					}
						}
						?>
						 <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	
			            <li><a href="<?= base_url(); ?>ShortlistedEmployees">My Shortlist</a></li>
			             <li><a href="<?= base_url(); ?>RecruiterJobList">My Jobs</a></li>
						  <li><a href="<?= base_url(); ?>RecruiterJobInvitations">Job Invitations</a></li>
						   <li><a href="<?= base_url(); ?>EditRecruiterProfile">Edit Profile</a></li>
			            
			   			 <li><a href="<?= base_url(); ?>SubmitJobForm">Submit Job</a></li>

			   			 
		            </ul>
		        </li>
			            <li><a href="<?= base_url(); ?>RecruiterLogout">Logout</a></li>
			            <?php
	       $countryCookie=get_cookie('countryCookie');
	       if($countryCookie=='Canada')
	       {
	       	$cookieValue='India';
	       	$cookie='IN';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="indian flag"/></a></li>
	        </ul>
	        <?php
	       }
	       elseif($countryCookie=='India')
	       {
	       	$cookieValue1='Canada';
	       	$cookie1='CA';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
	        </ul>
	       	<?php
	       }
	       
	       ?>
		          
		        
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>