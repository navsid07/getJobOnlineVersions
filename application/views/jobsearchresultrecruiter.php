<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php
	$sessionn=$this->session->userdata('recruiter_id');
  	$sessionCookie=get_cookie('sessionCookieRecruiter');
?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';
?><title>Search result :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Job openings, online work, online typing jobs, lattest government jobs, find local jobs, get job online, job consultants in bathinda, career center">
<meta name="description" content="
job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.Online Job portal.
" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css?v=1.1" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 

<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<!----font-Awesome-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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

	if(!empty($sessionn) || !empty($sessionCookie))
	{
		include('RecruiterHeader.php');
	}
	elseif(empty($sessionn) && empty($sessionCookie))
	{
		include('GetJobHeader.php');
	}
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
			--> 
			 <input type="text" class="text" name="location" placeholder="Location" >
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Employee"></label>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	

<div class="container">
	
<ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>">Home</a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>">Recruiter</a></li><li itemscope itemtype="http://schema.org/BreadcrumbList">Search Result</li></ul>
	 <?php 
					if($shortlisted= $this->session->flashdata('shortlisted')):

			    $shortlisted_class=$this->session->flashdata('shortlisted_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $shortlisted_class; ?>" style="margin-top:5%;">
			  
			  <?php echo $shortlisted ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>

	
	
		<div class="single">  
      <div class="col-lg-8 follow_left background" style="margin-bottom:3%;">
			<h1 class="regularColor">Search Result</h1>

             <div class="follow_jobb padding">

	<!--<div class="row" style=" margin-top:5%; margin-bottom:3%;">

		
		<div class="col-md-12" style="text-align:center;"><h1><u>Search Result</u></h1></div>
-->
<?php
if(empty($data))
{

	?>
	<table width="100%" style="text-align:center; text-transform:capitalize;">
		<th style="text-align:center;"></th>
			<tr><td>Sorry no result found.</td></tr>
			
	</table>
	<?php
}

else
{

	//foreach ($data as $value) {
		
?>


	
	     <table width="100%" class="radius" style="background-color: white; border-collapse: collapse;"  id='searchResultRecruiterPaginationList'>
	     	<thead>
	     		 <tr style="text-align:center;">
	 	<td><div id="searchResultRecruiterPaginationLoading"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
	     	</thead>		
	     		<tbody></tbody>

			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='searchResultRecruiterPagination'></div>

	
	
				<!--<div class="border padding">
					<div class="title">
						<h4><a href="<?= base_url(); ?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>" style="text-decoration:none; color:#d3404e; font-size:1.3em;"><?= base64_decode(base64_decode($value['employee_name'])); ?></a></h4>
					<p><?php $str=base64_decode(base64_decode($value['employee_description'])); echo $str2 = substr($str, 0, 45).'......';  ?></p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i><span itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?php if(empty($value['employee_preffered_location']))
						{
							$locationn='not inserted';
						} 
						else
							{
								$locationn=$value['employee_preffered_location'];
							} 
							echo $locationn; ?></span></span></span>
						<?php
						/*if(!empty($employeeExperience))
						{
							foreach ($employeeExperience as $experienceValue) {
								

						$experinecestatus=base64_decode(base64_decode($experienceValue['fresher_experience']));
						if($experinecestatus=='Fresher' || $experinecestatus=='fresher' || $experinecestatus=='')
						{

							$experience='Fresher';
						}
						else
						{
							foreach ($experienceSum as $sumValue) {
								
								$experience=$sumValue['experience'];
						?>

						<span class="type full-time"><i class="fa fa-suitcase"></i><?=  $experience; ?></span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i></span>-->
					</br>
							<a href="<?= base_url();?>recruiter/employerdetail?uid=<?= $value['employee_uid']; ?>" class="marginleft llinkcolor">More detail>></a>
					<?php
				}
			}
		}
	}*/
					?>
					</div>
				</div>-->
					
				
				

<?php 
//}
}

?>

</div>
</div>

 <div class="col-lg-4">
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
			<div class="col_3"><h3 class="widget-title radius">Search</h3>
			<div class="widget-content padding">
				<span>I'm looking for a ...</span>
                <select class="form-control jb_1">
					<option value="">Employee</option>
					
				</select>
                <span>in</span>
                 <form action="<?= base_url(); ?>RecruiterSearch" method="post">
			
                <input type="text" class="form-control jb_2" name="location" placeholder="Location">
                <!--<input type="text" class="form-control jb_2" name="job" placeholder="Job">-->
                <input type="submit" class="btn regularButton" value="Search">
                </form>
			</div>
			</div>
		  </div>
	   	 
	   </div>
  <div class="clearfix"> </div>


<div class="row">
		<div class="col-lg-6" style="margin-bottom:5%; padding:3px;">
				<!--<div class="col_3 radius"><h3>Jobs by me</h3></div>-->
				<div class="background col_3">
				<h3 class="radius">Jobs by me</h3>
			<table width="100%"  style="border-collapse: collapse;" id="jobsByMeList">
		<thead>
		<tr><td colspan="3"></td></tr>
			<!--<tr><td class="left"></td><td>Viewed</td><td>Applied</td></tr>-->
				<?php
				if($jobs=='null')
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
				<tbody>
				
				</tbody>
				<?php	/*foreach ($jobs as $key) {
						$jjid= $key['submitjob_id'];
					?>
					
<tr class="border"><td class="fontSize profile_left padding">
	<a href="<?= base_url(); ?>recruiter/jobdetailrecruiter?rid=<?= $key['submitjob_id']; ?>"><b><?= $key['submitjob_job_title']; ?></b></a>

</td>

<td class="padding fontSize"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHsSURBVDhP7VMxaxRBFB7FxigWYiMkhTGFtY1KinVn7jYHHoJwgsftzawxhvyAgI3hwDZCLAxoaSkoNhJrFSwtFBttEvUQ4c6dXc+DiNzme3Oz6+5xcPkB+eAV+773ffPevFl2gAw//PIxLd26VmI9UvypVvxJJPm9MHB50modtmWT0WlUTmgp7kdK/EYkY0OK7SgQixONY1We15K3c+JvML8bNUU1lLwGo4fouJ/y6Pptr7Fw2sqLAHkD4r+ZmeSvfl53jls6Q6y8c3RQZooGtO/MWXoInFqB4W5WpMR3ukNLs0Ht4tHEcY7YTxb5ly+gZpDW4/CvnYYzbcgw4OeR+JORQ8M1QwIY9Q4O+4f8L1qITTNM86agkeKTmQgtf8gTJqR7lUTt5eqUNRuKcGfGDYDBRkFjePGAxt0aJWgBJKIx0X03zcPkhXEDkH+c15iQ7ioL/fIZbC8sknzT6mhklzqDwfNu4M1QLmHsECb7nNeg5l12z7pZWkAiv5Q+bdOQYxCq0u28WWEpKWLJr6Gz3v9CvoP3d8nSBtQZ6pbyhyO+4I86a0uKoI2j+GNaTE8D8ZouG9+PRsdEZ8/0Le+klY8H3QNMV9Dh+4LYBj1+GL9EV56V7B/6ppiFyRVzQFMoWlBcd05Z+gAExvYAEA2cktP9p5wAAAAASUVORK5CYII=" title="Job Viewed"> <?= $key['submitjob_job_viewed'].' Times'; ?></td>
<?php
$q=$this->db->select('*')
->where('applyjob_jid',$jjid)
->from('applyjob')
->get();
if($q->num_rows())
		{
			
			$qq= $q->num_rows;
		}
		else
		{
			$qq= '0';
		}
//$qq=$q->result();
//$qqq=json_decode(json_encode($qq),true);
	
	?>
	<!--<td class="padding"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAC8SURBVDhPY8AH3qW58EOZpINP8U5lHxOck6Bc0sCHeJeKD3FOf/Ea8CneTeNDrLMLBo5znvMx3vk/TgM+xrtYgCWBivBhrAZ8SHCOwqYYgp3ufYxxMP8Y53QXxMcwAFOz00OYxndJjvIfYl3cP8Q7f4PJoxiArBkocfxfrgc70KaZ2DTC1cU7//4QY6+CYfOHeKc6sKG4NOKyGaHAeRFBjSBAUWiDwMcEF1Wy4hkfICqF4QIUpW38uYqBAQD/3hvsCYUPEAAAAABJRU5ErkJggg==" title="Applied"> <?= $qq; ?></td>-->


</tr>
					<?php
					}*/
					
					
				}
				?>
			<!--<tr ><td colspan="4" class="fontSize padding profile_left" style="text-align:center;"><a href="<?= base_url();?>recruiter/submitjob" class="postjob">Post a new job>></a></td></tr>
		-->

	</table>

		<div style='text-align:center;' class="padding" id='jobsPostedPagination'></div>
	</div>
		<!-- pagination for jobs posted by-->
<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>/js/jobsByMe.js"></script>
<!-- end code -->

		</div>
		<div class="col-lg-offset-1 col-lg-4" style="margin-bottom:5%; padding:3px;">
				
				<table width="100%" class="background col_3" style="border-collapse: collapse;">
		<th colspan="4"></th>
			<tr><td colspan="4"><h3 class="radius">My referral progress this month</h3><td></tr>
			<tr class="border"><td class="fontSize padding profile_left"><b>Total Clicks:</b></td><td>0</td></tr>
			<tr class="border"><td class="fontSize padding profile_left"><b>Total Earned:</b></td><td>0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center" class="fontSize padding profile_left"><b><a  style="text-decoration:none; cursor:pointer;" id="sharebutton" class="postjob">Share my referral link</b></td></tr>
			
		<?php

		 foreach ($recruiter as $value) {
				   				# code...
				   		
				
				   					?>
						<tr class="social padding" style="text-align:center">
					
	
				<td class="padding">	<a class="btn_1" target="_blank" id="shareicon" style="cursor:pointer; display:none;" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					</td><td><a class="btn_1" target="_blank" id="shareicon1" style="cursor:pointer; display:none;"  href="https://twitter.com/share?text=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>&url=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
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
		</div>
		<div class="col-md-12">
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
<?php
include 'footer.php';
?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
<script src="<?= base_url(); ?>js/searchResultRecruiterPagination21.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
$(document).ready(function(){
    $("#sharebutton").click(function(){
        $("#shareicon").fadeIn("slow");
        $("#shareicon1").fadeIn(3000);
        $("#shareicon2").fadeIn(3000);
        $("#shareicon3").fadeIn(3000);
    });
});
</script>
</html>	