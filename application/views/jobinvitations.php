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
?><title>Job invitations :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="career consultants near me, help me get a job, job recruitment, job search,  unemployement, seek jobs, jobs, part time jobs, job opportunities, unemployement in punjab" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. online job portalsfor job providers and job seekers." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
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
<!-- Custom Theme files -->
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
<div id="spacer">
		&nbsp;
	</div>
<div class="container">
	
<ul id="breadcrumbs" style="margin-top:6%;"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>">Home</a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>">Recruiter</a></li><li itemscope itemtype="http://schema.org/BreadcrumbList">Job Invitations</li></ul>

<div class="single">
 
      <div class="col-sm-8">
      	<div class="col_3 background">
			<h3 class="radius"><font color="white">Job Invitations</font></h3>
		
					<div class="follow_jobb padding">
             	<?php
$invitationCount = count($data2);
           	
if($data2=='null' || empty($data2))
{

	?>

	 <div class="featured"></div>
					
					
					<div class="title padding">
						<h5>Sorry! No Result Found.</h5>
						<p>If you wish to make people know about our site please share below.</p>
					</div>
					<div class="social padding">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://get-job.online">
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
}

else
{
			$applyresult='';
            foreach ($data2 as $value) 
		{
			//print_r($value);
			//foreach ($key as $value) {
				
			 $jid=$value['submitjob_id'];
			$applyresult=$this->fetch->recruiterapplied($jid);
			
			if($applyresult!='null')
			{
				?>

			    <div class="aa" itemscope itemtype="http://schema.org/JobPosting">
					<!--<img src="<?= base_url(); ?>images/banner.jpg" alt="" height="80" width="80" class="img-circle img-responsive" alt="image">-->
					<div class="title">
						<h4 style="color:black;" itemprop="title"><a href="<?= base_url();?>RecruiterJobDetail?rid=<?= $value['submitjob_id']; ?>" style="text-decoration:none; color:#d3404e; font-size:1.3em;"><?php echo $value['submitjob_job_title']; ?></a></h4>
						<p style="margin-left: 4%;" itemprop="description"><?php $str=base64_decode(base64_decode($value['submitjob_job_description'])); echo $str2 = substr($str, 0, 35);  ?></p>
						
						<?php
							
						
							
							if($applyresult!='null')
							{
					
						$jjob=$this->fetch->fetchcount($jid);
					$arraycount=count($jjob);
				
					if($arraycount==1)
					{
						$user1=$jjob[0]['employee_name'];
						$finalecho=base64_decode(base64_decode($user1)). 'Applied your job.';
					}
					elseif($arraycount==2)
					{
						$user1=$jjob[0]['employee_name'];
						$user2=$jjob[1]['employee_name'];
						$finalecho=base64_decode(base64_decode($user1)).' and '.base64_decode(base64_decode($user2)).' Applied your job.';
					}
					elseif($arraycount>=3)
					{
						$user1=$jjob[0]['employee_name'];
						$user2=$jjob[1]['employee_name'];
						$user3=$jjob[2]['employee_name'];
						$minus=$arraycount-2;
						$finalecho=base64_decode(base64_decode($user1)).', '.base64_decode(base64_decode($user2)).' and '.$minus.' Other applied your job.';
					}
						elseif($arraycount==0)
					{
						
						$finalecho="You don't have any invitation on your job.";
					}
						
						
						if($finalecho!="You don't have any invitation on your job.")
						{
							?>
							<a href="<?= base_url(); ?>RecruiterAppliedCandidates?jid=<?= $jid; ?>"style="font-size:12px;" ><?php print_r($finalecho); ?></a>

							<?php
						}
						else
						{
							?>
				<p style="margin-left: 3%;">You don't have any invitation on your job.</p>
							<?php
						}
						?>
						
						
								
								<p>
								<?php
					}
					else
					{
						//echo '<div class="padding">Sorry! No result found</div>';
						?>

							<!--<p ><form action="#"><button type="submit" class="more"> </button></form></p>
					-->
						<?php
					}
						?>
						</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i><span itemprop="jobLocation"><?= $value['submitjob_preffered_location']; ?></span></span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
						<span class="sallary" itemprop="baseSalary"><i class="fa fa-dollar"></i><?= $value['submitjob_payscale']; ?></span>
				
					</div>
				
					<!--		<a href="<?= base_url();?>RecruiterJobDetail?rid=<?= $value['submitjob_id']; ?>"><button type="submit" class="btn regularButton" style="float:right;">More detail>></button></a>
				-->
				</div>
			

				<?php
			}

		}
		//}

		if($applyresult=='null')
		{
			echo '<div class="padding alert alert-danger">

			<strong>Sorry!</strong> No Invitation yet.</div>';
		}
			
		}
				?>
			
</div>
</div>

 <?php
           if($invitationCount==0 || $invitationCount==1 || $invitationCount==2)
           {


           ?>
             <table class="col_3 background tablewidth">
             	<tr><td>
             	  <h3 class="radius">Recently Added</h3></td></tr>
                    <tbody>
                    	<?php
                    	if(empty($rand))
                    	{
                    		?>
                    		<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
                    		<?php
                    		}
                    		else
                    		{
                    		foreach ($rand as $value) {
                    	
                    			
                    	?>
                        <tr class="unread checked border fontSize">
                           
                            <td style="padding:3%;" class="hidden-xs" style="text-transform:capitalize;">
                               <a href="<?= base_url();?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>" style="text-decoration:none; color:#999999;"><?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                        </tr>
                        <?php
						}
					}
                        ?>
       
                        
                </tbody>
             </table>
             <?php
         	}
             ?>
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
<div class="col-sm-4">
	<div class="social background padding" style="margin-bottom:2%;">	
		<h5><font color="#d3404e"><b>Help us Engage more audience:</b></font></h5>
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="http://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
					
			   </div>
	
      	
			<table class="col_3 background tablewidth background">
                    	<tr><td><h3 class="radius"> Categories</h3></td></tr>
                    	<?php
                    	if(empty($cat))
                    	{
?>
<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
<?php
                    	}
                    	else
                    	{
                    		foreach ($cat as $value) 
                    		{
                    			
                    	?>
                        <tr class="unread checked border">
                           
                            <td class="padding hidden-xs fontSize">
                                <a href="<?= base_url(); ?>RecruiterSearch?category=<?= $value['employee_category']; ?>" style="text-decoration:none; color:#999999;"><?= base64_decode(base64_decode($value['employee_category']));
                                ?></a>
                            </td>

                        </tr>
                         <?php

                     		}
                     	}

                         ?>
               
             </table>
      
				
           <?php
           if($invitationCount!=0 && $invitationCount!=1 && $invitationCount!=2)
           {


           ?>
             <table class="col_3 background tablewidth">
             	<tr><td>
             	  <h3 class="radius">Recently Added</h3></td></tr>
                    <tbody>
                    	<?php
                    	if(empty($rand))
                    	{
                    		?>
                    		<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
                    		<?php
                    		}
                    		else
                    		{
                    		foreach ($rand as $value) {
                    	
                    			
                    	?>
                        <tr class="unread checked border fontSize">
                           
                            <td style="padding:3%;" class="hidden-xs" style="text-transform:capitalize;">
                               <a href="<?= base_url();?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>" style="text-decoration:none; color:#999999;"><?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                        </tr>
                        <?php
						}
					}
                        ?>
       
                        
                </tbody>
             </table>
             <?php
         	}
             ?>
		
				<div class="col_3 background">
             <h3 class="radius">Most Viewed</h3>
             <table class="tablewidth">
                    <tbody>
                    	<?php
                    	if(empty($max))
                    	{
                    		?>
                    		<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
                    		<?php
                    	}
                    	else
                    	{
                    	foreach ($max as $value) {
                    		
                    	?>
                        <tr class="unread checked border">
                           
                            <td class="padding fontSize" class="hidden-xs">
                              <a href=<?= base_url()."EmployeeDetailRecruiter?uid=".$value['employee_uid']; ?>>  <?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                            <td class="fontSize">
                                (<?= $value['employee_profile_viewed']; ?>)
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

      <div class="row">
		<div class="col-lg-5" style="margin-bottom:5%;">
			<div class="background">
		<table width="100%" class="col_3" style="border-collapse: collapse;" id="jobsByMeList">
		<thead>
		<tr><td colspan="3"><h3 class="radius">Jobs by me</h3></td></tr>
			<!--<tr><td class="left"></td><td>Viewed</td><td>Applied</td></tr>-->
				<?php
				if($data2=='null')
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
					/*foreach ($data2 as $key) {
						$jjid= $key['submitjob_id'];
					?>
					
<tr class="border"><td class="profile_left padding fontSize">
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
	<!--<td class="padding"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAC8SURBVDhPY8AH3qW58EOZpINP8U5lHxOck6Bc0sCHeJeKD3FOf/Ea8CneTeNDrLMLBo5znvMx3vk/TgM+xrtYgCWBivBhrAZ8SHCOwqYYgp3ufYxxMP8Y53QXxMcwAFOz00OYxndJjvIfYl3cP8Q7f4PJoxiArBkocfxfrgc70KaZ2DTC1cU7//4QY6+CYfOHeKc6sKG4NOKyGaHAeRFBjSBAUWiDwMcEF1Wy4hkfICqF4QIUpW38uYqBAQD/3hvsCYUPEAAAAABJRU5ErkJggg==" title="Applied"> <?= $qq; ?></td>
-->

</tr>
					<?php
					}*/
					
					
				}
				?>
			<!--<tr ><td colspan="4" class="profile_left padding" style="text-align:center;"><a href="<?= base_url();?>recruiter/submitjob" class="postjob">Post a new job>></a></td></tr>
		--></table>
		<div style='text-align:center;' class="padding" id='jobsPostedPagination'></div>

			<div style='text-align:center;' class="padding">
				<a href="<?= base_url();?>SubmitJobForm" class="postjob">Post a new job>></a>
			</div>
	</div>
		
	
		<!-- pagination for jobs posted by-->
<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>/js/jobsByMe.js"></script>
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
		<div class="col-lg-offset-1 col-lg-5" style="margin-bottom:5%;">
				
				<table width="100%" class="background col_3" style="border-collapse: collapse;">
		<th colspan="4"></th>
			<tr><td colspan="4"><h3 class="radius">My referral progress this month</h3></td></tr>
			<tr class="border"><td colspan="2" class="profie_left padding"><b>Total Clicks:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="2" class="profile_left padding"><b>Total Earned:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center" class="profile_left padding"><a  style="text-decoration:none; cursor:pointer;" id="sharebutton" class="postjob">Share my referral link</td></tr>
		
		<?php

		 foreach ($result as $value) {
				   				# code...
				   		
				
				   					?>
				   				
<tr class="social padding" style="text-align:center">
	<td class="padding" colspan="4">
						<table width="100%">
	<tr><td>
					<a class="btn_1" target="_blank" id="shareicon" style="cursor:pointer; display:none;" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					</td><td><a class="btn_1" target="_blank" id="shareicon1" style="cursor:pointer; display:none;"  href="https://twitter.com/share?text=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>&url=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a></td><td>

					<a class="btn_1" id="shareicon3" style="cursor:pointer; display:none;"  href="https://www.linkedin.com/shareArticle?mini=true&url=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>&title=Find a job and get recruited online&summary=online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
&source=http://www.get-job.online" target="_blank">
						<i class="fa fa-linkedin linkedin"></i>
						<span class="share1 linkedin">Share</span>
					</a>
				</td></tr>
					</table>
					</td>
			   </tr>

<?php
}

		
				?>

			</table>
			<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- sidebar --><!--
<ins class="adsbygoogle"
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
	
</div>
<?php
include 'footer.php';
?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
</html>	
 

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