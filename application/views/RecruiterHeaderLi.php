<?php
	 $dataHeader=$this->fetch->fetchrecruiterprofile();
      
      $categoriesHeader=$this->fetch->fetchcategories();
?> <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Category<b class="caret"></b></a>
		            <ul class="dropdown-menu"><?php
		            	$kky=array();
foreach ($dataHeader as $keyyHeader) {
	 $kkyHeader=$keyyHeader['recruiter_verify'];
}

		            	if($categoriesHeader==null)
		            	{
		            		?>
		            		<li><a href="#">Categories Coming Soon</a></li>
			        <?php   
		            	}
		            	else
		            	{
		            		foreach ($categoriesHeader as $valueHeader) {
		            		
		            	?><li><a href="<?= base_url(); ?>RecruiterSearch?category=<?= $valueHeader['employee_category']; ?>"><?= base64_decode(base64_decode($valueHeader['employee_category'])); ?></a></li><?php

			        }
			    }
			            ?></ul>
		        </li><?php
			            foreach ($dataHeader as $valueHeader) {
			             	$statusHeader=$valueHeader['recruiter_referral_status'];
			             	if($statusHeader!=1)
			             	{
			            ?><li><a href="<?= base_url(); ?>referral?q=<?= $valueHeader['recruiter_email']; ?>" title="Get started Refferal program">Refer & earn</a></li><?php
			        }
			        else
			        {
			            ?><li><a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard">Referral Dashboard</a></li><?php
					}
						}
						?><li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	
			            <li><a href="<?= base_url(); ?>ShortlistedEmployees">My Shortlist</a></li>
			             <li><a href="<?= base_url(); ?>RecruiterJobList">My Jobs</a></li>
						  <li><a href="<?= base_url(); ?>RecruiterJobInvitations">Job Invitations</a></li>
						   <li><a href="<?= base_url(); ?>EditRecruiterProfile">Edit Profile</a></li>
			            
			   			 <li><a href="<?= base_url(); ?>SubmitJobForm">Submit Job</a></li>

			   			 
		            </ul>
		        </li>
			            <li><a href="<?= base_url(); ?>RecruiterLogout">Logout</a></li><?php
	       $countryCookieHeader=get_cookie('countryCookie');
	       if($countryCookieHeader=='Canada' || $countryCookieHeader=='CA')
	       {
	       	$cookieValueHeader='India';
	       	$cookieHeader='IN';
	       	?><ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValueHeader; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="indian flag"/></a></li>
	        </ul><?php
	       }
	       elseif($countryCookieHeader=='India' || $countryCookieHeader=='IN')
	       {
	       	$cookieValue1Header='Canada';
	       	$cookie1Header='CA';
	       	?><ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1Header; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
	        </ul><?php
	       }

	       ?>