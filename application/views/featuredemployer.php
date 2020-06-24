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
?><title>Home :: get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta name="description" content="
job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.Online job portalforjob providers and job seekers." />

<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script><!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome---->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!----font-Awesome---->
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

#jobPostedByPagination a {
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
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
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
	        	 <?php
                include('GetJobHeaderLi.php');
            ?>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>

		
<div class="container">
  <div id="spacetop">
		&nbsp;
	</div>

<ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Jobs Posted</li></ul>
	 <div class="single">  
	   <div class="col-md-5 ">
	   	  <div class="col_3 background">
	   	  	<?php
	   	  	foreach ($logo as $value) {
	   	  		$memberSince = $value['recruiter_member_since'];
	   	  		$subMemberSince = substr($memberSince, 0,4);
	   	  	?>
	   	  	<h3 class="radius"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></h3>
	   	  
<table width="100%" >
		<th colspan="3"></th>

			<tr><td rowspan="4" class="padding" width="35%">
				<?php
				if(empty($value['recruiter_logo']) || $value['recruiter_logo'] == null || $value['recruiter_logo'] == '')
				{
				?>
				<img src="<?= base_url(); ?>images/logonotavailable.gif" width="90%" alt="logo not available"></img>

				
				<?php
					}
					else
					{
				?>
				<img src="<?= base_url(); ?>logo/<?= $value['recruiter_logo']; ?>" width="90%" style="border-radius:20px;" alt="Company logo"></img> 
				
					<?php
				}
					?>
			</td>
			</tr>
			<tr><td class="padding"><b>Member Since:</b></td><td><?php echo $subMemberSince; ?></td></tr>
			<tr><td class="padding"><b>Experience:</b></td><td><?=  base64_decode(base64_decode($value['recruiter_category'])); ?></td></tr>
			<tr><td class="padding"><b>Location:</b></td><td>
				<div itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?=  base64_decode(base64_decode($value['recruiter_country'])); ?></span></div></td></tr>
			</table>
		<?php

}	   	  	?>
	   	  	<!--<ul class="list_1">
	   	  		<?php //foreach ($jobs as $value) {
	   	  			?>
	   	  		<li>

	   	  			<!--<a href="employer/login/title/<?= $value['id']; ?>"><?= $value['job_title']; ?></a>
	   	  			 <h2>More Are coming Soon!</h2>
	   	  		</br>
	   	  		<div class="row"style="text-align:center">
	   	  			<div class="col-md-6">
	   	  		<div class="fb-share-button" data-href="https://www.get-job.online" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.get-job.online">Share</a></div>
	   	  		</div>
	   	  		

<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="col-md-6">
<!-- Place this tag where you want the share button to render. 
<div class="g-plus" data-action="share" data-width="300" data-height="24"></div>	
</div> 

	   	  		</li>
<?php
//}
?>
	   	  							
	   	  	</ul>-->
	   	  </div>
	   	  <!--<div class="col_3">
	   	  	<h3>Jobs by Category</h3>
	   	  	<ul class="list_2">
	   	  		<?php  
	   	  		foreach ($category as $value) {
	   	  			
	   	  		?>
	   	  		<li><a href="employee/login/category"><?= $value['category']; ?></a></li>
	   	  			<?php
	   	  		}
	   	  			?>					
	   	  	</ul>
	   	  </div>-->
	   	

	      
	   	  <div class="widget background">
	   	  	<?php
	   	  	foreach ($voting as $value) {
	   	  		
	   	  	?>

	        <h3 class="radius"><?= $value['title']; ?></h3>
    	        <div class="widget-content" id="votingg"> 
    	        	<form  method="post" id="voting_form">
    	        	

    	        		<input type="hidden" name="title" value="<?= $value['title']; ?>" >
    	        		<input type="hidden" name="qid" value="<?= $value['id']; ?>" >
                 <div class="seeking-answer">
			    	<span class="seeking-answer-group border">
		    			<span class="seeking-answer-input">
		    			   <input  name="answer" checked="checked"  value="<?= $value['id1']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><h4><?= $value['option1']; ?></h4></span>
		    			</label>
		    		</span>
			    	<span class="seeking-answer-group border">
		    			<span class="seeking-answer-input">
		    			   <input name="answer"  value="<?= $value['id2']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><h4><?= $value['option2']; ?></h4></span>
		    			</label>
		    		</span>
			        <span class="seeking-answer-group padding">
		    			<span class="seeking-answer-input">
		    			   <input name="answer"  value="<?= $value['id3']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><h4><?= $value['option3']; ?></h4></span>
		    			</label>
		    		</span>
		    		<div class="seeking_vote padding">
		    			<button type="button" class="seeking-vote-button"  onclick="branddetails()">Vote</button>
		    	
		    		
		    		 
		    		</div>
			     </div>
			 </form>
    	       </div>
    	       <div class="alert alert-success" style="display:none;" id="success_msggg"></div>
    	       <?php
    	   }
    	       ?>
    	       		
    	       
    	      
    	</div>

    	      
    	       		<?php
	   	  	/*foreach ($voting as $value) {
	   	  		
	   	  	?>
    	        <div class="widget-content" id="voting_answer" style="display:none;"> 
                 <div class="seeking-answer">
			    	<div class="row">
			    			<div class="col-md-6"><h4><?= $value['option1']; ?></h4></div>
			    			<div class="col-md-6"><?= $answer1; ?> Peoples</div>
			    	</div>
			        <div class="row">
			    			<div class="col-md-6"><h4><?= $value['option2']; ?></h4></div>
			    			<div class="col-md-6"><?= $answer2; ?> Peoples</div>
			    	</div>
			        <div class="row">
			    			<div class="col-md-6"><h4><?= $value['option3']; ?></h4></div>
			    			<div class="col-md-6"><?= $answer3; ?> Peoples</div>
			    	</div>	
			     </div>
			
    	       </div>
    	       <?php
    	   }
*/    	       ?>
    	



    	
	 </div>
	   <div class="col-md-7 ">
	   	<div class="col_3 background">	   	
	   	<?php
foreach ($logo as $key) {
	
	   			?>
	   		<h3 class="radius">Jobs posted by <?= base64_decode(base64_decode($key['recruiter_company_name']));?></h3>
<?php 
	   	if($single=='null')
	   	{
	   		?>


	 <div class="featured"></div>
					
					
					<div class="title">
						<h5 class="padding">Sorry no result found.</h5>
						<p class="padding">If you wish to make people know about our site please share below.</p>
					</div>
					<div class="data">
						<table style=" border-collapse: separate;
    border-spacing: 10px;" width="100%">
							
							<tr><td class="social">
						
	
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
			 
	
</td></tr>
					</table> 
				</div>
				
	   		<?php
	   		//echo '<p class="padding">Sorry no jobs found.</p>';
	   	}
	   	else
	   	{
	   	//foreach ($single as $value) {
	   		
	   	
	   	?>
	   		
			<!--<div class="col-sm-12 row_1 padding" style="margin-bottom:5%;">
				<h4><a href="<?= base_url(); ?>JobVisitor?uid=<?= $value['submitjob_id']; ?>"><?= $value['submitjob_job_title']; ?></a></h4>
				close this line when commented <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>-->
				<!--<p><?= base64_decode(base64_decode($value['submitjob_job_description'])); ?></p>
				<div class="social">	
					<a class="btn_1" href="#">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" href="#">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
							<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
			</div>-->

			 <table class="tablewidth" style="text-align: center;"  id='jobPostedByList'>
		
			<thead class="radius">
				
			
					 <tr style="text-align:center;">
	 	<td><div id="jobPostedloading"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody class="follow_jobb" style="margin-bottom: 20px;"></tbody>
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='jobPostedByPagination'></div>

			<div class="clearfix"> </div>
				
			<?php
		//}
			
			}
		}

		   ?>
		   </div>
		  
			</div>
			<div class="clearfix"> </div>
		   </div>
		
	   </div>
	   <div class="clearfix"> </div>
	 </div>

</div>
<div class="container">
<div class="row background" style="margin-top:2%; margin-bottom:2%;">
	 <div class="col_3 message">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="color:#666666; font-size: 1em;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	   <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	
	</div>
</div>


<?php include 'footer.php'; ?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>

</html>	

<script type="application/javascript">
 function branddetails()
 {

		var paramstr=$("#voting_form").serialize();
		$('#loading_pic').show();
		//alert(paramstr);
		if($.post("<?php echo base_url();?>ajaxcontrol/ajax",
		paramstr))
		{
			$("#votingg").hide();
			$('#success_msggg').show();
		 	 $('#success_msggg').text("Thankyou for submitting your Response.");
			//$("#voting_answer").show();
			
		}

 }
 </script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="<?= base_url(); ?>js/jobPostedBy17.js"></script>
