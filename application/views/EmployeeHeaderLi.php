<?php
	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		}
  	

	$dataHeader=$this->fetch->fetchemployeedit($uid);

	$countryHeader=get_cookie('countryCookie');
  	$categoryHeader=$this->search->category($countryHeader);
  	?><li class="dropdown">

		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>

		            <ul class="dropdown-menu">

		            	<?php
		            	foreach ($categoryHeader as $valueHeader) {
		            	?>

			            <li><a href="<?= base_url(); ?>EmployeeSearch?category=<?= base64_encode(base64_encode($valueHeader['submitjob_category'])); ?>"><?= $valueHeader['submitjob_category']; ?></a></li>

			            <?php

			        }

			            ?>

			       </ul>

		        </li>


		                 <li><a href="<?= base_url(); ?>EmployeeWishlist">My Shortlist</a></li>



			            <li><a href="<?= base_url(); ?>EditEmployee">Edit Profile</a></li>

			           
			            <?php
			            foreach ($dataHeader as $valueDataHeader) {
			             	$status=$valueDataHeader['employee_referral_status'];
			             	if($status!=1)
			             	{
			            ?>
			             <li><a href="<?= base_url(); ?>referral?q=<?= base64_decode(base64_decode($valueDataHeader['employee_email'])); ?>" title="Get started Refferal program">Refer & earn</a></li>
			           
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
			            

			            <li><a href="<?= base_url(); ?>EmployeeLogout">Logout</a></li>

			            	<?php
	       $countryCookieHeader=get_cookie('countryCookie' || $countryCookieHeader=='CA');
	       if($countryCookieHeader=='Canada')
	       {
	       	$cookieValueHeader='India';
	       	$cookieHeader='IN';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValueHeader; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="indian flag"/></a></li>
	        </ul>
	        
	        <?php
	       }
	       elseif($countryCookieHeader=='India' || $countryCookieHeader=='IN')
	       {
	       	$cookieValue1Header='Canada';
	       	$cookie1Header='CA';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1Header; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
	        </ul>
	       	<?php
	       }
	       ?>
			    

	     