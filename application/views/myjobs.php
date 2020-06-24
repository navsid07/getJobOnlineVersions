<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php

if(!empty($mchartdata))
{
$jobsviewed_chart=" ";
$charttesting=" ";
$appliedchartt=" ";
$appliedchart=" ";
$shortlistCount=" ";
foreach ($mchartdata as $row ) {
    $this->load->model('fetch');
  $sjid=$row['submitjob_id'];

  
  $a='aa';
  $appliedchart .= $this->fetch->appliedchart($sjid);
 $appliedchartt .= "{ namee:'".$row["submitjob_job_title"]."', count:".$appliedchart." },";//print_r($appliedchart);
  //$jobsviewed_chart .= "{ name:'".$row["name"]."', products:".$row["product"]."}, ";
//$jobsviewed_chart .= "{ products:'".$row["product"]."', name:".$row["name"]."}, ";
  $jobsviewed_chart .= "{ submitjob_job_titles:'".$row["submitjob_job_title"]."', submitjob_job_viewed:".$row["submitjob_job_viewed"]."},";
  }

  //$jobsviewed_chart = substr($jobsviewed_chart, 0, -2);
  //print_r($shortlistCount);
}

if(!empty($jobsShortlistCount))
{

	$shortlistedJobtitle=" ";
	$shortlistedCount=" ";


foreach ($jobsShortlistCount as $row ) {
    $this->load->model('fetch');
  $urii=$row['jobShortlistCount_jid'];

  
  $a='aa';
  $shortlistedTitle = $this->fetch->singlejob($urii);
  $shortlistedTitlee=" ";
  foreach ($shortlistedTitle as $key) {
  $shortlistedTitlee.=$key['submitjob_job_title'];
  }

  $shortlistedCount .= "{ shortlistedtjob_titles:'".$shortlistedTitlee."', shortlisted_by:".$row["jobShortlistCount_Count"]."},";
  }


}
?><!DOCTYPE HTML>
<html  lang="en">
<head>
	<?php
include 'fav.php';
?>
<title> Search jobs by city :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="career consultants near me, help me get a job, job recruitment, job search,  unemployement, seek jobs, jobs, part time jobs, job opportunities, unemployement in punjab" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. online job portal for job providers and job seekers." />
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


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->



 <link rel="stylesheet" href="<?= base_url(); ?>morris/css/moris.css">
 
    <script src="<?= base_url(); ?>morris/js/jquery.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/raphael.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/morris.min.js"></script> 
  


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
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




@media (min-width: 481px) and (max-width: 767px) {
  
 #noDataAvailable3
{
	width:100%;
	height:30%;
}
  
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
  #noDataAvailable3
{
	width:100%;
	height:30%;
}
  
  @media (min-width: 100px) and (max-width: 321px) {
  
  #noDataAvailable3
{
	width:100%;
	height:30%;
}

 @media (min-width: 1px) and (max-width: 101px) {
  
  #noDataAvailable3
{
	width:100%;
	height:30%;
}
  
  
}

</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<?php
		include('RecruiterHeader.php');
?>
<div id="spacer">
		&nbsp;
	</div>
<div class="container">

	<ul id="breadcrumbs" style="margin-top:6%;"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="name">My jobs</span></li></ul>
	
	<!--<div class="row" style=" margin-top:5%; margin-bottom:3%;">
		<div class="col-sm-10 follow_left">
		<div class="col-md-12" style="text-align:center;"><h1><u>Search Result</u></h1></div>-->
		<div class="single">  
      <div class="col-lg-8">
	  <div class="row">
	  <div class="col-lg-12">
      	<div class="follow_jobb background padding margin-bottom">
		<h1 class="regularColor">Recent Jobs</h1><font style="float:right;"><a href="<?= base_url(); ?>SubmitJobForm">Post a new Job>></a></font>
             
<?php
$recentJobCount=count($data);
             	
if($data=='null')
{

	?>
	
	
					
					<div class="title">
						<h5>Sorry! No Result Found.</h5>
						<p>If you wish to make people know about our site please share below.</p>
					</div>
					<div class="social padding">	
	
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
				</br>
					
				
				

	
	<?php
}

else
{

           foreach ($data as $value) 
		{
			
				?>

			  
			    	
					<img src="<?= base_url(); ?>images/banner.jpg" alt="" height="80" width="80" class="img-circle img-responsive" alt="image">
					<div class="title border padding">
						<h4 style="color:black;"><?= $value['submitjob_job_title']; ?></h4>
						<p><?php $str=base64_decode(base64_decode($value['submitjob_job_description'])); echo $str2 = substr($str, 0, 35);  ?></p>
						</br>
							<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i><span itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?= $value['submitjob_preffered_location']; ?></span></span></span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
						<span class="sallary"><i class="fa fa-dollar"></i><?= $value['submitjob_payscale']; ?></span>
					</div>
						<?php
							$jid=$value['submitjob_id'];
						$applyresult=$this->fetch->recruiterapplied($jid);
							
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
					else
					{
						$finalecho='No one applied your jobs.';
					}
						
						
						
						?>

						<a href="<?= base_url(); ?>RecruiterAppliedCandidates?jid=<?= $jid; ?>"style="font-size:12px;" ><?php print_r($finalecho); ?></a>

								
								<p>
								<?php
					}
					else
					{
						?>
							<!--<p ><form action="#"><button type="submit" class="more"> </button></form></p>
					-->
						<?php
					}
						?>
						
							<!--<a href="<?= base_url();?>recruiter/jobdetailrecruiter?rid=<?= $value['submitjob_id']; ?>"><button type="button" id="more" style="float:right;">More detail>></button></a>
					-->
				<a href="<?= base_url();?>RecruiterJobDetail?rid=<?= $value['submitjob_id']; ?>"><button type="button" class="marginleft editbutton">More detail>></button></a>
			
						</div>
					
					
			

				<?php
			}
?>


  	
	     <!--<table width="100%" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;"  id='recruiterAllJobsPaginationList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius">Recommended Jobs</h3>
				</td></tr>
			</thead>

				<tbody></tbody>

			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='recruiterAllJobsPagination'></div>-->

			<?php
			
		}
				?>

</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-12">
	<div class="col_3 margin-bottom background">

				     <table class="tablewidth">
             	<tr><td colspan="2"> <h3 class="radius">Most Viewed</h3></td></tr>
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
                        <tr class="unread checked border fontSize">
                           
                            <td class="padding hidden-xs">
                              <a href=<?= base_url()."EmployeeDetailRecruiter?uid=".$value['employee_uid']; ?>>  <?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                            <td>
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





<div class="col-sm-4">
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


	<div class="col_3 margin-bottom">
      		
			<table class="background tablewidth">
				<tr><td><h3 class="radius">Categories</h3></td></tr>
                    
                    	<?php
                    	if(empty($cat))
                    	{
                    		?>
                    		<tr><td class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
                    	
                    	<?php 
                    }
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

                         ?>
                
             </table>
</div>

<div class="col_3 margin-bottom">
             
             <table class="background tablewidth">
             <tr><td><h3 class="radius">Recently Joined</h3></td></tr>
                    <tbody>
                    	 </tbody>
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
                        <tr class="border fontSize">
                           
                            <td  class="padding" style="text-transform:capitalize;">
                               <a href="<?= base_url(); ?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>" style="text-decoration:none; color:#999999;"><?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                        </tr>
                        <?php
						}
					}
                        ?>
                         
                        
               
             </table>
             	</div>

             	<?php
if($recentJobCount!=0 && $recentJobCount!=1 && $recentJobCount!=2)
{
             	?>
	<!--pagination jquery end-->
	<div class="col_3 margin-bottom">
            
             <table class="background tablewidth">
             	<tr><td colspan="2"> <h3 class="radius">Most Viewed</h3></td></tr>
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
                        <tr class="unread checked border fontSize">
                           
                            <td class="padding hidden-xs">
                              <a href=<?= base_url()."EmployeeDetailRecruiter?uid=".$value['employee_uid']; ?>>  <?= base64_decode(base64_decode($value['employee_name'])); ?></a>
                            </td>
                            <td>
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
<?php
}
?>
             		
      </div>

</div>
<div class="container">
<div class="row">
		<div class="col-lg-7 refer_earn" style="margin-bottom:5%; margin-top:5%;">
		<div class="col_3 background">
				<h3 class="radius">Job Views</h3>
				<?php
				
				$jobViewesCount=count($mchartdata);

				if(empty($mchartdata))
				{
					?>
					<img src="<?= base_url(); ?>images/noDataAvailable2.png" id="noDataAvailable3" title="Data not available" width="100%" alt="Data not available icon">
				<?php
				
				}
				else
				{
				
				?>
				<div class="row">
				<div id="loadingJobViews" style="text-align:center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="Loading icon"></img></div>
				<?php
				if($jobViewesCount==1)
				{
				?>

				<div class="col-md-4">
				<div id="jobViews"></div>
			</div>
		<?php
	}
	if($jobViewesCount==2)
				{
				?>

				<div class="col-md-8">
				<div id="jobViews"></div>
			</div>
		<?php
	}
	else{
		?>
		
				<div id="jobViews"></div>
		<?php
	}
	?>
</div>
<?php
	}
		?>
			<!--<table width="100%" style="border-collapse: collapse;" id="jobsByMeList">
			<thead>
			<!--	<tr><td colspan="3"><h3 class="radius">Jobs by me</h3></td></tr>-->
			<!--<tr><td class="left"></td><td>Viewed</td><td>Applied</td></tr>-->
				<!--<?php
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
	 	<td><div id="loading1"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>
				<?php
				}
				?>
			
	</table>-->

	<!--<div style='text-align:center;' class="padding" id='jobsPostedPagination'></div>
		--><div style="text-align: center;" class="padding"><a href="<?= base_url();?>SubmitJobForm" class="postjob">Post a new job>></a></div>
		</div>
		
	
		<!-- pagination for jobs posted by-->
<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
<script src="<?= base_url(); ?>js/jobsByMe.js"></script>

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
		<div class="col-lg-offset-1 col-lg-4 refer_earn" style="margin-bottom:5%; margin-top:5%;padding:3px;">
				
				<table width="100%" class="background col_3" style="border-collapse: collapse;">

		<th colspan="4"></th>

			<tr><td colspan="4"><h3 class="radius">My referral progress this month</h3></td></tr>
			<tr class="border"><td colspan="2" class="profile_left fontSize padding"><b>Total Clicks:</b></td><td style="text-align: center;"colspan="2">0</td></tr>
			<tr class="border"><td colspan="2" class="profile_left fontSize padding"><b>Total Earned:</b></td><td style="text-align: center;" colspan="3">0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center" class="fontSize padding"><a  style="text-decoration:none; cursor:pointer;" id="sharebutton" class="postjob">Share my referral link</td></tr>
			
		<?php

		 foreach ($result as $value) {
				   				# code...
				   		
				
		?>
						<tr class="social padding" style="text-align:center">
					
	
				<td colspan="2">	<a class="btn_1" target="_blank" id="shareicon" style="cursor:pointer; display:none;" href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					</td><td colspan="1"><a class="btn_1" target="_blank" id="shareicon1" style="cursor:pointer; display:none;"  href="https://twitter.com/share?text=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>&url=<?= base_url();?>referral?src=<?= $value['recruiter_referral']; ?>" target="_blank">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a></td><td colspan="1">

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

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
<div class="row">
	<div class="col-md-6">
<div class="col_3 background" style="margin-top:2%; margin-bottom:2%;">
<h3 class="radius">Favourite/Shortlisted</h3>
<?php
if(!empty($jobsShortlistCount))
{
	?>
	<div id="loadingshortlisted" style="text-align:center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="Loading icon"></img></div>

	<?php
	$shortlitedCount=count($jobsShortlistCount);
	if($shortlitedCount==1)
	{


	?>
	<div class="row">
		<div class="col-md-4">
<div id="shortlistedJobChart"></div>
	</div>
	</div>
	<?php
}
if($shortlitedCount==2)
	{


	?>
	<div class="row">
		<div class="col-md-8">
<div id="shortlistedJobChart"></div>
	</div>
	</div>
	<?php
}
else
	{


	?>
	
<div id="shortlistedJobChart"></div>
	
	<?php
}

}
else
{
	?>
<img src="<?= base_url(); ?>images/noDataAvailable2.png" width="100%" id="noDataAvailable3" title="Data not available" alt="data not available icon">
	<?php

}
?>
</div></div>

<div class="col-md-6">
<div class="col_3 background" style="margin-top:2%; margin-bottom:2%;">
<h3 class="radius">Jobs Applied</h3>
<?php
if(!empty($mchartdata) && $appliedchart!=0)
{
	?>
	<div id="loadingapplied" style="text-align:center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="Loading icon"></img></div>

	<?php
	$jobsAppliedCount=count($mchartdata);

	if ($jobsAppliedCount==1) {
		
	
	?>
	<div class="row">
		<div class="col-md-4">
			<div id="appliedJobsChart"></div>
		</div>
	</div>
	<?php
}
if ($jobsAppliedCount==2) {
	?>
<div class="row">
		<div class="col-md-8">
			<div id="appliedJobsChart"></div>
		</div>
	</div>
	<?php
	}
	else
	{
		?>
<div id="appliedJobsChart"></div>
		<?php
	}
}
else
{
	?>
<img src="<?= base_url(); ?>images/noDataAvailable2.png" width="100%" id="noDataAvailable3" title="Data not available" alt="data no available icon">
	<?php

}
?>
	
</div></div>

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

		
	
		<div class="clearfix"> </div>
	</div>
</div>
<?php
include 'footer.php';
?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>

<script src="<?= base_url(); ?>js/recruiterAllJobsPagination1.js"></script>
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

<script>
    Morris.Bar({
    	barSizeRatio:0.35,
    	resize:true,
        element : 'jobViews',
        data:[<?php echo $jobsviewed_chart; ?>],
        xkey:['submitjob_job_titles'],
        ykeys:['submitjob_job_viewed'],
       parseTime: false,
        labels:['Job Viewed Users'],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>


<script>
    Morris.Bar({
    	barSizeRatio:0.35,
    	resize:true,
        element : 'appliedJobsChart',
        data:[<?php echo $appliedchartt; ?>],
        xkey:['namee'],
        ykeys:['count'],
       parseTime: false,
        labels:['Job Applied by Users'],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>

<script>
    Morris.Bar({
  		barSizeRatio:0.35,
  		resize:true,
        element : 'shortlistedJobChart',
        data:[<?php echo $shortlistedCount; ?>],
        xkey:['shortlistedtjob_titles'],
        ykeys:['shortlisted_by'],
       parseTime: false,
        labels:['Job Shortlisted by Users'],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>

<script>
$(document).ready(function(){
  $("#appliedJobsChart").show(function(){
    $('#loadingapplied').hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#shortlistedJobChart").show(function(){
    $('#loadingshortlisted').hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#jobViews").show(function(){
    $('#loadingJobViews').hide();
  });
});
</script>
