<style>
	#certificationPagination a,
	#portfolioPagination a {
    border-radius: 50%;
    background-color: #d3404e;
    color: #fff;
    border: 1px solid #d3404e;
    padding-left: 5px;
    padding-right: 5px;
    margin-left: 5px;
    margin-right: 5px;
    -webkit-box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
    box-shadow: 0 4px 6px rgba(0, 0, 0, .1)
}
</style>
	    <div class="col-md-4">
	   	
	   	  

	<?php
	foreach ($data as $value) {
		$dp=$value['employee_profile_pic'];
		if($dp=='')
		{
			?>

			<table style="text-align:center;">
	<tr><td class="padding view overlay zoom contain" rowspan="4" width="90%" >
				<img class="imgshadow zoom" src="<?= base_url(); ?>EmployeeProfilePic/NoProfile.jpg" width="90%" style="border-radius:20px;" alt="Profile Picture">
			<div class="middle">
    <div class="texttt"><a class="href" href="<?= base_url(); ?>EmployeeRegistrationStep8?id=<?= $value['employee_email']; ?>" title="Update Profile Picture"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMdSURBVEhLtZbLaxRBEMbX9wPB9xtB8B9QxMdBHbd6E3NQfGURk2z3xEhunjx4MhHx6M2jCHoRMaIiEr14NmiiImpUUE8iHnRnNskhJmb9qqd7dtbNJjOb7AfD7lR316+ruqZmUvWQ79IRX4nbuK7llbPVmOurvKQLABbDS4q854pdZrg+KmazC31FL8vAGk5eXeAaKMWV352Z5XxVhUvabZbMXEXlLPaU6GXn+O1jMM51Be77y8AWPluRI9p5nqKb1rmFey37VuK+Eq7o68S5pkVmeXJpoBRXf7mNW6aESzFQDhbFfE7sMG6SiUHY+R0NkfSZz7gqvKNxFea+itjHhtoa1hlX8VV0nPmI4m7ghMY9l7La3t09Nw4c413aURIVO3cuwOIe43TMQvMqI9jxcOuhjdXgfk6sxpzz2lEScTpRlfcsFI2ime0aKmlE26X4OBVcO0oihmLxfeP8Twh102ShAYA+jUjabNaEcNTBIBch22MrgNLDCqikdDWolxOnItXeVWhvWsv22NJQKR6FUCVOsn1S6JnMJh7zZbod9+MY/5I4SlYApcfG8aiFFnIZpwyKcw2hilwNtZsxGYgt7iw4U9MGAXUzJ9geGxqxxxb3Xjh/YqEFScfZXpDpA/9DuYJ5DI+KKkFp0Npja6J57xLs/On00JJzNBMZQhV9GFbOBrbHFp8pnDwLoYqOsV1DFQ1PC5Xi/VAHrWd7IjEohObEUW1zaX8F1ETkq3SuFKl4V1P/ZWHxdQ1AH+b7CmgkjUh7WylSepv4ObXiBo9U/dAQFEoxlZoDh90A28Y+KRSbfFMzlOW3Hdxjdv83mrK8atjOUHt2yEprCUqvC6edNXpirYKTy0Fkos+YtL53Hl4aQl3REkI5E3jb6EkzEVKmvxIAvmhMofj9i8LriKR3gN+vZrh2cYcBcCIA0y0+bz5PROXC1oNseEGU+urnzxmzdGZCkzgbccwRfbMbsRc2NApbb+LmMJVQzQ+ikBCGKkex3eCXw8+ss8xMnz3B+XMN4iglvcD/S/zty4+UmVIfeTK9DdDWWU3jtEql/gED8UvZCweVwAAAAABJRU5ErkJggg==" alt="icon"></a></div>
  </div></img>
			</td></tr>
			</table>

			<?php
		}
		else
		{
	?>
	

	<table style="text-align:center;">
	<tr><td class="padding view overlay zoom contain" rowspan="4" width="90%" >
				<img class="imgshadow zoom" src="<?= base_url(); ?>EmployeeProfilePic/<?= $value['employee_profile_pic']; ?>"  width="50%" style="border-radius:20px;" alt="Profile Picture">
			<div class="middle">
    <div class="texttt"><a class="href" href="<?= base_url(); ?>EmployeeRegistrationStep8?id=<?= $value['employee_email']; ?>" title="Update Profile Picture"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMdSURBVEhLtZbLaxRBEMbX9wPB9xtB8B9QxMdBHbd6E3NQfGURk2z3xEhunjx4MhHx6M2jCHoRMaIiEr14NmiiImpUUE8iHnRnNskhJmb9qqd7dtbNJjOb7AfD7lR316+ruqZmUvWQ79IRX4nbuK7llbPVmOurvKQLABbDS4q854pdZrg+KmazC31FL8vAGk5eXeAaKMWV352Z5XxVhUvabZbMXEXlLPaU6GXn+O1jMM51Be77y8AWPluRI9p5nqKb1rmFey37VuK+Eq7o68S5pkVmeXJpoBRXf7mNW6aESzFQDhbFfE7sMG6SiUHY+R0NkfSZz7gqvKNxFea+itjHhtoa1hlX8VV0nPmI4m7ghMY9l7La3t09Nw4c413aURIVO3cuwOIe43TMQvMqI9jxcOuhjdXgfk6sxpzz2lEScTpRlfcsFI2ime0aKmlE26X4OBVcO0oihmLxfeP8Twh102ShAYA+jUjabNaEcNTBIBch22MrgNLDCqikdDWolxOnItXeVWhvWsv22NJQKR6FUCVOsn1S6JnMJh7zZbod9+MY/5I4SlYApcfG8aiFFnIZpwyKcw2hilwNtZsxGYgt7iw4U9MGAXUzJ9geGxqxxxb3Xjh/YqEFScfZXpDpA/9DuYJ5DI+KKkFp0Npja6J57xLs/On00JJzNBMZQhV9GFbOBrbHFp8pnDwLoYqOsV1DFQ1PC5Xi/VAHrWd7IjEohObEUW1zaX8F1ETkq3SuFKl4V1P/ZWHxdQ1AH+b7CmgkjUh7WylSepv4ObXiBo9U/dAQFEoxlZoDh90A28Y+KRSbfFMzlOW3Hdxjdv83mrK8atjOUHt2yEprCUqvC6edNXpirYKTy0Fkos+YtL53Hl4aQl3REkI5E3jb6EkzEVKmvxIAvmhMofj9i8LriKR3gN+vZrh2cYcBcCIA0y0+bz5PROXC1oNseEGU+urnzxmzdGZCkzgbccwRfbMbsRc2NApbb+LmMJVQzQ+ikBCGKkex3eCXw8+ss8xMnz3B+XMN4iglvcD/S/zty4+UmVIfeTK9DdDWWU3jtEql/gED8UvZCweVwAAAAABJRU5ErkJggg==" alt="icon"></a></div>
  </div></img>
			</td></tr>
			</table>


				<?php
			}
}
	?>


	<?php
	foreach ($data as $value) {
		
	?>
	 <div class="col_3"  style="margin-bottom:3%; padding:3px;">
	<table width="100%" class="background">
		<th colspan="2"></th>

			<tr><td colspan="2" style="text-transform: capitalize;"><h3 class="radius">Welcome <?= base64_decode(base64_decode($value['employee_name'])); ?> </h3></td></tr>
				<?php

			$completebalance=$value['employee_balance'];
			if($completebalance<25)
			{
			}

				?>
				<tr class="border"><td colspan="2" class="padding">
					
					<?php
					if(empty($value['employee_password']))
					{
					?>
					<font color="#f15f43"><b>10%</b></font>
					<progress value="10" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
					elseif(!empty($value['employee_password']) && empty($value['employee_city']))
					{
					?>
					<font color="#230046"><b>20%</b></font>
					<progress value="20" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
				-->	<?php
				}
					elseif(!empty($value['employee_city']) && empty($value['employee_phone']))
					{
					?>
					<font color="#230046"><b>30%</b></font>
					<progress value="30" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
					elseif(!empty($value['employee_phone']) && empty($value['employee_qualification']) )
					{
					?>
					<font color="#230046"><b>40%</b></font>
					<progress value="40" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
					elseif(!empty($value['employee_qualification']) && (empty($value['employee_category']) || empty($value['employee_designation'])))
					{
					?>
					<font color="#230046"><b>50%</b></font>
					<progress value="50" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
					elseif((!empty($value['employee_category']) ||!empty($value['employee_designation'])) && empty($value['employee_fresher_experience']))
					{
					?>
					<font color="#f15f43"><b>60%</b></font>
					<progress value="60" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
					elseif(!empty($value['employee_fresher_experience']) && empty($value['employee_description']))
					{
					?>
					<font color="#230046"><b>70%</b></font>
					<progress value="70" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
				elseif(!empty($value['employee_description']))
					{
					?>
					<font color="#230046"><b>80%</b></font>
					<progress value="80" max="100"></progress>
					<!--<font color="red"><b><a href="addbalance" class="complete" style="text-decoration:none; on">Complete Profile Now</a></b></font>
					--><?php
				}
					?>
					

					</td></tr>
			
			<tr class="border"><td class="padding"><b>Profile Views:</b></td><td class="padding"><?= $value['employee_profile_viewed'].' Times'; ?></td></tr>
			<?php 
				$short=$value['employee_shortlist'];
			if ($short==0) {
				$shortt='-';
			} 
			if ($short==1) {
				$shortt=$short.' Time';
			} 
			if ($short>1) {
				$shortt=$short.' Times';
			} 
			?>
			<tr class="border"><td class="padding"><b>Shortlisted:</b></td><td class="padding"><?= $shortt; ?></td></tr>
			
			<tr class="border"><td class="padding"><b>Credits:</b></td><td class="padding"><?= $value['employee_balance']; ?> <a href="<?= base_url(); ?>EmployeeAddBalance" style="color:#d3404e;">  Add more Credits>></a></td></tr>
			
				<tr class="border"><td class="profile_left padding"><b>Certification:</b></td><td class="padding">	
						<form method="post" action="<?= base_url(); ?>AddEmployeeCertification">
							<input type="hidden" name="uid" value="<?= $value['employee_uid']; ?>">
							<button type="submit" style="background-color: transparent; border: none; color:#d3404e;">Add Now>></button>
						</form>
				</td></tr>
			
	</table>
	 </div>
	<?php
}
	?>

  <div class="col_3 cool radius margin-bottom">
  	<h3 class="radius">Profile Views</h3>
  	<?php
  	if(!empty($last7))
  	{
  		$last7count=count($last7);
?>

<div id="loadingProfileView" style="text-align:center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>
<?php
if($last7count==1)
{


?>
<div id="profileViewLast7" style="width:50%;"></div>
<?php
}
else
{
	?>
<div id="profileViewLast7"></div>
	<?php
}
  	}
  	else
  	{
?>
<img src="<?= base_url(); ?>/images/noDataAvailable2.png" id="noDataAvailable2" alt="no data available" title="data not available" width="100%">

<?php
  	}
  	?>
  	
  </div>

   <div class="col_3 cool radius margin-bottom">
  	<h3 class="radius">Who Shortlisted Me</h3>
  	<?php
  		if(!empty($shortlistGraphh))
  		{
?>
<div id="loadingShortlist" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>

<?php
$countShortlistGraph=count($shortlistGraph);
if($countShortlistGraph==1)
{
?>

<div id="shortlistGraph" style="width: 50%;"></div>
<?php
}
else
{
	?>

<div id="shortlistGraph"></div>
	<?php
}
  		}
  		else
  		{
  			?>
  			<img src="<?= base_url(); ?>images/noDataAvailable2.png" id="noDataAvailable2" alt="no data available" title="Data not available" width="100%">
  			<?php

  		}
  	?>
  	
  </div>
	   	  
	   	  
	   	  <div class="col_3 cool radius margin-bottom">
	   	  	
	   	  	<h3 class="radius">Todays Jobs</h3>
  	<ul class="list_1" class="radius">
	   	  		<?php
	   	  			if(empty($jobs))
	   	  			{
	   	  				?>
	   	  		<li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li>
	   	  		<?php
	   	  	}
	   	  	else
	   	  	{
	   	  			foreach ($jobs as $value) {
	   	  				
	   	  		?>
	   	  		<li style="text-align:center;" class="border padding">

	   	  			<font size="3.5em" color="blue"><a href="<?= base_url(); ?>EmployeeDashboardRedirect?id=<?= $value['submitjob_id']; ?>&&title=<?= $value['submitjob_job_title']; ?>" style="color:blue; text-decoration:none;" ><?= $value['submitjob_job_title']; ?></a>
	   	  			</font>
	   	  		</br>

	   	  		</li>
	   	  				<?php
}
}
   	  			?>
	   	  	</ul>
	   	  	<?php
	   	  	foreach ($data as $values) {
	   	  	
	   	  	?>
	   	  	<div class="row"style="text-align:center padding:10px;">
	   	  			<div class="social" style="margin-top:2%; text-align:center;">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="https://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
							<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online/employee?src=<?= $values['employee_referral'];?>&title=Title&summary=Summary&source=GetJobOnline" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
	   	  		

	   	  </div>
	   	  <?php
	   	}
	   	  ?>
	   	 </div>

	   	 <div class="col_3" style=" margin-bottom:5%; padding:3px;">
	   	  	
		<?php
	

	foreach ($data as $value) {

		
		
		

		if(empty($value['employee_country']) || empty($value['employee_category']) || empty($value['employee_city']) || empty($value['employee_state']) || empty($value['employee_pincode']) || empty($value['employee_description']))
		{
	?>

	   	 
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">My Profile 
</h3> </td>
			</tr>
			<?php
			if(empty($value['employee_name']) || empty($value['employee_email']))
			{
			?>
			<tr class="border"><td class="profile_left padding"><b>Full Name:</b></td><td class="padding"><?= base64_decode(base64_decode($value['employee_name'])); ?></td></tr>
			<tr class="border"><td class="profile_left padding"><b>Email:</b></td><td class="padding"><?= base64_decode(base64_decode($value['employee_email'])); ?></td></tr>
			<?php
		}
			if(empty($value['employee_country']) || empty($value['employee_city']) || empty($value['employee_state']) || empty($value['employee_pincode']))
			{
			?>
			
			<div itemscope itemtype="http://schema.org/Country">
		 		
			<tr class="border"><td class="profile_left padding"><b>Country:</b></td><td class="padding">
				<span itemprop="contentLocation">
					<?php
					if(empty($value['employee_country']))
					{
				
						?>
						
					<?php 
				}
				else
				{
					
				echo $value['employee_country'];
				
					 }?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>City:</b></td><td class="padding">
				<span itemprop="contentLocation">
					<?php
					if(empty($value['employee_city']))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; color:#d3404e; background-color: white;" >Add Now>></button>
					
					<?php 
				}
				else
				{	echo base64_decode(base64_decode($value['employee_city'])); }?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>State:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				
					if(empty($value['employee_state']))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; color:#d3404e; background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{
				 echo base64_decode(base64_decode($value['employee_state'])); } ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>Pin Code:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				 
					if(empty($value['employee_pincode']))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; color:#d3404e; background-color: white; background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{
					echo $value['employee_pincode']; } ?></span></td></tr>
			<?php
		}
		if(empty($value['employee_phone']))
		{
			?>
			
</h3></td>
			</tr>
			<tr class="border"><td class="profile_left padding"><b>Contact:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
					if(empty($value['employee_phone']))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="3">
							<button type="submit" style="border:none; color:#d3404e; background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{
				echo base64_decode(base64_decode($value['employee_phone'])); } ?></span></td></tr>
			
			<?php
}
if(empty($value['degreeName']))
{
			?>
			
</h3></td>
			</tr>
			<tr class="border"><td class="profile_left padding"><b>Qualification:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				
				
					
				
					if($resultQualification['count'] == 0)
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="4">
							<button type="submit" style="border:none; color:#d3404e; background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{ 
					echo base64_decode(base64_decode($resultQualification['result'])); } ?></span></td></tr>
			
			<?php
		}
	
		
		if(empty($value['employee_category']))
		{
			?>
		<tr class="border"><td class="profile_left padding"><b>Category:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php

					if(empty($value['employee_category']))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="5">
							<button type="submit" style="border:none; color:#d3404e; background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{ base64_decode(base64_decode($value['employee_category'])); } ?></span></td></tr>
			
		<?php
	}
		if(empty($employeeExperience) || !empty($employeeExperience))
		{
			?>
			<tr class="border"><td class="profile_left padding"><b>Experience:</b></td>
				<td class="padding"><span itemprop="contentLocation"><?php

					if(empty($employeeExperience))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="6">
							<button type="submit" style="border:none; color:#d3404e;background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{ 
						
					echo base64_decode(base64_decode($fresherExperience)); }} ?></span></td></tr>
			<?php

if(empty($value['employee_description']))
{


			?>
			<tr><td class="profile_left padding"><b>Cover Letter:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				
					if(empty($value['employee_description']))
					{
						?>
						<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="7">
							<button type="submit" style="border:none; color:#d3404e; background-color: white;" >Add Now>></button>
						</form>
					<?php 
				}
				else
				{ 
					echo base64_decode(base64_decode($value['employee_description'])); } ?></span></td></tr>
			<?php
		}
			?>
			</div>
			
			
	
			
	</table>


	<?php
}
else
{
	?>


	<table width="100%" class="background" style="margin-top:7%; border-collapse: collapse; ">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Experience<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float:right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="6">
							<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></buttton></form>
</h3></td>
			</tr>
			<tbody>
			<?php
			if(!empty($fresherExperience))
			{

			$expp=base64_encode(base64_encode('Fresher'));
			$expp1=base64_encode(base64_encode('fresher'));
			if($fresherExperience==$expp || $fresherExperience==$expp1)
			{
				?>
			<tr class="border"><td class="padding"><b>Experience:</b></td><td class="padding"><?= base64_decode(base64_decode($fresherExperience)); ?></td></tr>
			<?php
			}
		}
			else
			{

			?>

			<tr class="border"><td class="padding"><b>Experience</b></td><td class="padding"><b>Company</b></td></tr>
			<?php
		foreach ($employeeExperience as $experienceValue)
				{
					?>
			<tr class="border"><td class="padding"><?= base64_decode(base64_decode($experienceValue['experience'])).' Months'; ?></td><td class="padding"><?= base64_decode(base64_decode($experienceValue['company'])); ?></td></tr>
				<?php
			}
				
				
		}

			?>
		</tbody>
	</table>


	<table width="100%" class="background" style="border-collapse: collapse; margin-top:7%;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Contact Detail<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float:right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="2">
						<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></buttton></form>
</h3></td>
			</tr>
			
			<div itemscope itemtype="http://schema.org/Country">
		 		
			<tr class="border"><td class="profile_left padding"><b>Contact:</b></td><td class="padding">
				<span itemprop="contentLocation">
						<?= base64_decode(base64_decode($value['employee_phone'])); ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>Dob:</b></td><td class="padding">
				<span itemprop="contentLocation">
					<?= base64_decode(base64_decode($value['employee_birthdate'])); ?></span></td></tr>
						
	</table>

	
					<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Qualification<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float:right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="4">
							<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></buttton></form>
</h3></td>
<tbody>
			</tr>
			<tr class="border"><td class="padding"><b>Degree name</b></td><td class="padding"><b>Passing Year</b></td></tr>
			<?php
			foreach ($employeeQualification as $qualificationValue) {
				?>
				<tr class="border"><td class="padding"><?= base64_decode(base64_decode($qualificationValue['degreeName'])); ?></td><td class="padding"><?= base64_decode(base64_decode($qualificationValue['passed'])); ?></td></tr>
			<?php
			}
			?>
			
			</tbody>
	</table>
			

	<table width="100%" class="background" style="border-collapse: collapse; margin-top:7%;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Category Detail<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float:right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="5">
							<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></button></form>
</h3></td>
			</tr>
			
			
		 		
			<tr class="border"><td class="profile_left padding"><b>Category:</b></td><td class="padding">
				<span itemprop="contentLocation">
						<?= base64_decode(base64_decode($value['employee_category'])); ?></span></td></tr>
			
	</table>

	<table width="100%" class="background" cellpadding="10" style=" margin-top:7%;">
		<th colspan="3"></th>
		<tbody>
			<tr><td><h3 class="radius">Cover Letter<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float:right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="7">
							<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></buttton></form>
</h3></td>
			</tr>
			
			
		 		
			<tr class="border"><td class="padding">
				
						<?= base64_decode(base64_decode($value['employee_description'])); ?></span></td></tr>
				
	</tbody></table>
	<?php

}
	}
  

?>
	

	   	 </div>


<div class="col_3" style=" margin-bottom:5%; padding:3px;">
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Portfolios & Articles
</h3> </td>
			</tr>
			
			
	<tr class="border"><td class="profile_left padding"><b>Portfolio:</b></td><td class="padding">	<a href="<?= base_url(); ?>AddEmployeePortfolio?uid=648rhffj40b4&s=gzx4653&su=<?= $value['employee_uid']; ?>" style="color:#d3404e; text-decoration:none;">Add now >></a></td></tr>

		<tr class="border"><td class="profile_left padding"><b>Article:</b></td><td class="padding">	<a href="<?= base_url(); ?>EmployeeArticleBody?uid=345629856&s=78nbhgdft4dc43322&su=<?= $value['employee_uid']; ?>" style="color:#230046; text-decoration:none;">Publish now >></a></td></tr>
		</table></div>

<?php
		
		if(empty($value['employee_country']) || empty($value['employee_category']) || empty($value['employee_city']) || empty($value['employee_state']) || empty($value['employee_pincode']) || empty($value['employee_description']))
		{
			?>


		

				<div class="col_3" style=" margin-bottom:5%; padding:3px;">
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Articles
</h3> </td>
			</tr>
			<?php
			if(empty($articles))
			{
				?>
<tr class="border"><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
				<?php
			}
			foreach ($articles as $key ) {
				
			
			?>
			<tr class="border">
<td width="10%">
	<?php

	if(empty($key['employee_articleThumbnail']))
	{
		?>
<img src="<?=base_url(); ?>articleImages/ArticleImageNotAvailable.gif" width="70%" class="margintop2 marginbottom2 marginleft2" alt="no image"/>
		<?php
	}
	else
	{
	?>
	<img src="<?=base_url(); ?>articleImages/<?= $key['employee_articleThumbnail']; ?>" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="article thumbnail"/>
<?php
}
$uidd=$key['employee_articleUid'];
$uidResult=$this->fetch->fetchemployeprofilee($uidd);
?>
			<td class="profile_left padding" width="90%"><a href="<?= base_url();?>EmployeeArticle?art=<?= $key['employee_articleHeading']; ?>&aid=<?= $key['article_id']?>"><?= base64_decode(base64_decode($key['employee_articleHeading'])); ?></a><br><font class="authorName">- <?php
				foreach ($uidResult as $resultkey) {
					$empname=base64_decode(base64_decode($resultkey['employee_name']));
					if(empty($empname) || $empname=='' || $empname==null)
					{
						$authorName='Unknown';
					}
					else
					{
						$authorName=$empname;
					}

					echo $authorName;
				}
				?></font></td></tr>
	<?php
}
	?>
		</table></div>

			<?php
		}
			?>


	 </div>
	   <div class="col-md-8">
	      <div class="col_1 " style="margin-bottom:5%;">
	     
	     <div class="col_3 background">
	     	
	     <table width="100%" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;"  id='postsList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius">Recommended Jobs</h3>
				</td></tr>
				<?php

				if($jobs==null || $jobs=='' || empty($jobs))
				{
				?>
				<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
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
				}
				?>
			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='pagination'></div>
		</div> 
		
		<!-- Paginate -->
	
		   </div>

 <div class="col_1 " style="margin-bottom:5%;">
	     
	     <div class="col_3 background">
	   </div></div>



<div class="col_1 " style="margin-bottom:5%;">
	     
	     <div class="col_3 background">


	     	<table width="100%" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;"  id='portfolioList'>
<thead>
<tr><td colspan="3" ><h3 class="radius">My Portfolio</h3>
				</td></tr>

<tr style="text-align:center;">
	 	<td><div id="portfolioLoading"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>

	<?php
	if(empty($portfolioLimit))
			{
				?>
<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
				<?php
			}
			?>

			</thead>
				<tbody></tbody>

		</table>

			<div style='margin-top: 10px; text-align:center;' class="padding" id='portfolioPagination'></div>
	     	</div>
	 
				
<div class="col_3 background">
 <table width="100%" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;"  id='certificationList'>
<thead>
<tr><td colspan="3" ><h3 class="radius">Certifications</h3>
				</td></tr>

<tr style="text-align:center;">
	 	<td><div id="certificationLoading"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>

	<?php			
	if(empty($certification) || $certification=='')
			{
				?>
				<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
				<?php
			}
			?>
			</thead>
				<tbody></tbody>
</table>

			<div style='margin-top: 10px; text-align:center;' class="padding" id='certificationPagination'></div>
		</div>


		<?php
		
		if(empty($value['employee_country']) || empty($value['employee_category']) || empty($value['employee_city']) || empty($value['employee_state']) || empty($value['employee_pincode']) || empty($value['employee_description']))
		{
			?>

		

		 
		<!--<div class="col_3">
			
				<table width="100%" class="background" style="-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1);">
		<th colspan="3" class="radius"></th>
			<tr><td colspan="2"><h3 class="radius">Address Detail<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float: right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></buttton></form>
</h3></td>
			</tr>
			
			<div itemscope itemtype="http://schema.org/Country">
		 		
			<tr class="border "><td class="profile_left padding"><b>Country:</b></td><td class="padding">
				<span itemprop="contentLocation">
						<?= $value['employee_country']; ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>City:</b></td><td class="padding">
				<span itemprop="contentLocation">
					<?= base64_decode(base64_decode($value['employee_city'])); ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>State:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				
				 echo base64_decode(base64_decode($value['employee_state']));  ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>Pin Code:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				 
				
					echo $value['employee_pincode'];  ?></span></td></tr>

	</table>
			</div>-->
		<?php
	}
		
		if(!empty($value['employee_country']) && !empty($value['employee_category']) && !empty($value['employee_city']) && !empty($value['employee_state']) && !empty($value['employee_pincode']) && !empty($value['employee_description']))
		{
			?>
			
			<div class="col-md-6 col_3">
			
				<table width="100%" class="background" style="-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1);">
		<th colspan="3" class="radius"></th>
			<tr><td colspan="2"><h3 class="radius">Address Detail<form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" style="float: right;" method="post">
							<input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
							<input type="hidden" name="step" value="2">
							<button type="submit" style="border:none; background-color: transparent;" ><img  src="<?= base_url(); ?>images/editPencilWhite.png" alt="Edit profile"></buttton></form>
</h3></td>
			</tr>
			
			<div itemscope itemtype="http://schema.org/Country">
		 		
			<tr class="border "><td class="profile_left padding"><b>Country:</b></td><td class="padding">
				<span itemprop="contentLocation">
						<?= $value['employee_country']; ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>City:</b></td><td class="padding">
				<span itemprop="contentLocation">
					<?= base64_decode(base64_decode($value['employee_city'])); ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>State:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				
				 echo base64_decode(base64_decode($value['employee_state']));  ?></span></td></tr>
			<tr class="border"><td class="profile_left padding"><b>Pin Code:</b></td><td class="padding">
				<span itemprop="contentLocation"><?php
				 
				
					echo $value['employee_pincode'];  ?></span></td></tr>

	</table>
			</div>

		<div class="col-md-6 col_3" style=" margin-bottom:5%; padding:3px;">
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Articles
</h3> </td>
			</tr>
			<?php
			if(empty($articles))
			{
				?>
<tr class="border"><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
				<?php
			}
			foreach ($articles as $key ) {
				
			
			?>
			<tr class="border">
<td width="10%">
	<?php

	if(empty($key['employee_articleThumbnail']))
	{
		?>
<img src="<?=base_url(); ?>articleImages/ArticleImageNotAvailable.gif" width="70%" class="margintop2 marginbottom2 marginleft2" alt="no image"/>
		<?php
	}
	else
	{
	?>
	<img src="<?=base_url(); ?>articleImages/<?= $key['employee_articleThumbnail']; ?>" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="article thumbnail"/>
<?php
}
$uidd=$key['employee_articleUid'];
$uidResult=$this->fetch->fetchemployeprofilee($uidd);
?>
			<td class="profile_left padding" width="90%"><a href="<?= base_url();?>EmployeeArticle?art=<?= $key['employee_articleHeading']; ?>&aid=<?= $key['article_id']?>"><?= base64_decode(base64_decode($key['employee_articleHeading'])); ?></a><br><font class="authorName">- <?php
				foreach ($uidResult as $resultkey) {
					$empname=base64_decode(base64_decode($resultkey['employee_name']));
					if(empty($empname) || $empname=='' || $empname==null)
					{
						$authorName='Unknown';
					}
					else
					{
						$authorName=$empname;
					}

					echo $authorName;
				}
				?></font></td></tr>
	<?php
}
	?>
		</table></div>
		
			
			<?php
		}
		//show my profile widget in responsive css
		//else
		//{

			?>
			   	 
	   

		<?php
	//}
	?>
		</div> 

			</div></div>
		   <!-- pagination jquery-->
			
				
				

	<!--pagination jquery end-->


<!--single class div end bottom-->
	   </div>