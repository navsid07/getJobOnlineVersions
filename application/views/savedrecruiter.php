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
?><title>My shortlist :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="unemployement in punjab, online jobs, government jobs, buisness ideas, career, lattest government jobs, jobs, part time jobs, job opportunities, find local jobs" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online.Online job portal for job providers and job seekers" />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4121794652594490",
          enable_page_level_ads: true
     });
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
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
		    	<form action="<?= base_url(); ?>EmployeeSearch" method="post">
			 <select class="textt" name="category">
			 		<option value="">select Category</option>
			 		<?php
		            	
		            		foreach ($category as $value) {
		            	?>
			         <option value="<?= $value['submitjob_category']; ?>" ><?= $value['submitjob_category']; ?></option>
			            <?php
			        }
			    
		            	?>
			 </select>
			 <input type="text" class="text" placeholder="Location">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</form>
		</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
	<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Shortlist</span></li></ul>
    <div class="single">  
	<div class="row">
	   <div class="col-md-9  single_right">
	      <div class="but_list background">
	       <div class="bs-example bs-example-tabs " role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">My Shortlist</a></li>
			   <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Applied jobs</a></li>
			    </ul>
		<div id="myTabContent" class="padding tab-content">
		  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		   <!-- shortlisted candidates-->
		   <?php
		   if($shortlistedjobs==null || $shortlistedjobs=='null')
		   {
		   	?>

		  <div class="row" style="margin-top:5%; margin-left:1%;">
			<h3><p><!-- Sad icon by Icons8 -->
				<img src="<?php base_url(); ?>images/sorry.png"> <b>Sorry! No Result Found</b></p></h3>
		 </div>

		  <?php 
		   }
		   else
		   {
		   foreach ($shortlistedjobs as $value) {
		  
		   ?>
		   <div id="deleteShortlistt<?= $value['jobShortlist_id']; ?>">
						<div class="date_desc"><h6 class="title"><a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $value['submitjob_id']; ?>"><?= $value['submitjob_job_title']; ?></a></h6>
						  <span class="meta" itemprop="title"><?= $value['submitjob_job_title'].', '.$value['submitjob_job_title']; ?></span>
						</div>

						<div class="clearfix"> </div>
                       
						<p><div class="alert-danger"></div></p>
						<p class="description" itemprop="description"><?php $ddescription=base64_decode(base64_decode($value['submitjob_job_description']));
							echo substr($ddescription,0,35).'......';
						 ?> <a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $value['submitjob_id']; ?>" class="read-more">Read More</a></p>
                     <!--<a href="deleteapplied/<?= $value['submitjob_id']; ?>"> <button type="button" class="delete">&#10008; Delete</button></a>-->
                     <form method="post" id="deleteShortlist<?= $value['jobShortlist_id']; ?>">
						<input type="hidden" name="id" value="<?= $value['jobShortlist_id']; ?>">
						
						<button type="button" class="delete" onclick="deleteShortlist(<?= $value['jobShortlist_id']; ?>)">&#10008;Delete</button>
					</form>
				</div>
			
			 <?php
			}
		}
	
			 ?>


		  </div>





		  <!-- recruit candidates-->
		  <div role="tabpanel" class=" tab-pane fade" id="profile" aria-labelledby="profile-tab">
		  	<?php
		  	if($appliedjid=='null' || $appliedjid==null || empty($appliedjobsnew))
		  	{
		  		?>
		  		<div class="row" style="margin-top:5%; margin-left: 1%;">
<h3><p><!-- Sad icon by Icons8 -->
<img src="<?php base_url(); ?>images/sorry.png"><b>Sorry!  No Result Found</b></p></h3>
		</div>
		  <?php
		  	}
		  	else
		  	{
	
				   
		  	
		  			
		  				
		  	?>
		    <div class="tab_grid">
			    <div class="jobs-item with-thumb">
				   <div class="jobs_right" itemscope itemtype="JobPosting">
				   <?php
				   				foreach ($appliedjobsnew as $value) {
				   				

				   				
				   		?>

						
						<div id="deleteAppliedd<?= $value['submitjob_id']; ?>">
						<div class="date_desc"><h6 class="title"><a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $value['applyjob_jid']; ?>"><?= $value['submitjob_job_title']; ?></a></h6>
						  <span class="meta" itemprop="title"><?= $value['submitjob_job_title'].', '.$value['submitjob_job_title']; ?></span>
						</div>

						<div class="clearfix"> </div>
                       
						<p><div class="alert-danger"></div></p>
						<p class="description" itemprop="description"><?php $ddescription=base64_decode(base64_decode($value['submitjob_job_description']));
							echo substr($ddescription,0,35).'......';
						 ?> <a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $value['submitjob_id']; ?>" class="read-more">Read More</a></p>
                     <!--<a href="deleteapplied/<?= $value['submitjob_id']; ?>"> <button type="button" class="delete">&#10008; Delete</button></a>-->
                     <form method="post" id="deleteApplied<?= $value['submitjob_id']; ?>">
						<input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>">
						
						<button type="button" class="delete" id="deleteApplied" >&#10008;Deletee</button>

						<div class="col-md-offset-2 col-md-8 alert alert-success" id="deleteappliedconfirm" style="display:none; text-align: center;">
						Are you Sure to Delete this job.</br><p>
						<button type="button" class="btn btn-primary marginleft2" onclick="deleteAppliedJob(<?= $value['submitjob_id']; ?>)"
							>Yes</button><button type="button" id="applyno" class="btn btn-danger marginleft2">No</button></p>
					</div>
					</form>
				</div>
<div class="col-md-offset-2 col-md-8" style="display:none;color:green; font-weight:bold; text-align: center;"  id="deleteAppliedSuccessMsg<?= $value['submitjob_id']; ?>">Job Deleted
</div>

                     <?php
                     if($value['applyjob_status']==2)
                     {
                     ?> 
                     <div class="row">
						<div class="col-md-offset-2 col-md-8 alert-danger">Job Application you have applied has been declined.</div>
				</div>
				<?php
			}
			elseif ($value['applyjob_status']==1) {
				?>
				 <div class="row">
<div class=" col-md-offset-2 col-md-8 alert-success">Job Application you have applied has been Accepted.</div>
				</div>
				<?php
			
			}
			
				?>
                     
                  
                    	
					 <?php

}
?>
  </div>
</div>
			 </div>
			
			 
		 
<?php
}


			 ?>
			 </div>	
			 
			 
			 
	  </div>
     </div>
    </div></div>

  <div class="col-md-3">
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
	   	  <div class="background widget_search">
	   	  	<div class="col_3">
			<h3 class="radius">Search</h3>
			<div class="widget-content padding">
				<span>I'm looking for a ...</span>
                <select class="form-control jb_1">
					<option value="">Job</option>
					
				</select>
                <span>in</span>
                 <form action="<?= base_url(); ?>EmployeeSearch" method="post">
                <input type="text" class="form-control jb_2" name="location" placeholder="Location">
                <input type="text" class="form-control jb_2" name="job" placeholder="Job">
                <input type="submit" class="btn regularButton" value="Search">
                </form>
			</div>
		  </div>
		  </div>
		</div>
	   	 
	   
  <div class="clearfix"> </div>


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
include('footer.php');
?>
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

<script type="application/javascript">
 function deleteShortlist(id)
 {

    var paramstr=$("#deleteShortlist" + id).serialize();
   
    if($.post("<?php echo base_url();?>employee/deleteshortlist",
    paramstr))
    {
    	//alert($("#deleteApplied" + id).serialize());
              $("#deleteShortlistt" + id).hide(600);
              //$("#deleteAppliedSuccessMsg" + id).show(600);
         
    }
   }



 function deleteAppliedJob(id)
 {

    var paramstr=$("#deleteApplied" + id).serialize();
   
    if($.post("<?php echo base_url();?>employee/deleteapplied",
    paramstr))
    {
    	//alert($("#deleteApplied" + id).serialize());
              $("#deleteAppliedd" + id).hide(600);
              $("#deleteAppliedSuccessMsg" + id).show(600);
         
    }
   }


   $(document).ready(function(){
	//show confirm form
    $("#deleteApplied").click(function(){
        $("#deleteApplied").hide(700);
        $("#deleteappliedconfirm").show(700);
        
    });

    //hide confirm form
    $("#applyno").click(function(){
    	$("#deleteappliedconfirm").hide(700);
        $("#deleteApplied").show(700);
        
        
    });
});
 </script>

</html>	