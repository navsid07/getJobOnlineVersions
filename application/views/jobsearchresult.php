<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php

$recentJobCount = count($data11);

?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';
?><title>Search result :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Job openings, online work, online typing jobs, unemployement in punjab, online jobs, government jobs, buisness ideas, career">
<meta name="description" content="
job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.Online job portal for job providers and job seekers.
" />
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

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />


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

#categoryPagination a, #locationPagination a, #mostViewedPagination a, #citySearchPagination a {
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
.title a
{
	color: #d3404e;
	padding:15px;
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
	        
<?php
$employeid=$this->session->userdata('employe_id');
$recruiterid=$this->session->userdata('recruiter_id');
$employeeCookie=get_cookie('sessionCookieEmployee');
$recruiterCookie=get_cookie('sessionCookieRecruiter');
if(empty($employeid) && empty($recruiterid) && empty($employeeCookie) && empty($recruiterCookie))
{
?>
	       
		             <ul class="nav navbar-nav">
	        	<?php
                include('GetJobHeaderLi.php');
            ?>
	        </ul>
	    
	        <?php
	    }
	        elseif (!empty($employeid) || !empty($employeeCookie)) {
	

	        ?>
	         <ul class="nav navbar-nav">
		        <?php
		        include('EmployeeHeaderLi.php');
		        ?>
		        
	        </ul>
	    	<?php
	    }
	    ?>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	
		<div id="spacer">
		&nbsp;
	</div>

	<div class="container">
	
<ul id="breadcrumbs" style="margin-top:6%;"itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</a></span> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li><span itemprop="name">Job Search</span></li></ul>


		<div class="single">  
      <div class="col-sm-8 follow_left">
      	<div class="col_3 background">
			<h1><u style="color:#d3404e;" class="padding">Recent Jobs</u></h1>
			
	
             <div class="follow_jobb">

             	<?php

			if($data=='null' || empty($data))
{
	?>
	
					
					<div class="title">
						<h4>No job available in this city please try again later.</h4>
						<h5><font color="#f15f43"><b>If you wish to make people know about our site please share below.</b></font></h5>
					</div>
				  <div class="social padding" style="text-align:center">	
	
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
	<?php
}
else
{
				?>

				<table class="tablewidth" id='searchWidgetPaginationList'>
		
			<thead class="radius">
				
					 <tr style="text-align:center;">
	 	<td><div id="searchWidgetLoading"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody class="follow_jobb" style="margin-bottom: 20px;"></tbody>
		</table>
		<?php
}
		?>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='searchWidgetPagination'></div>

			</div>
			</div>
<?php
if($recentJobCount==1 || $recentJobCount==0 || $recentJobCount==2)
{

?>
<div class="col_3 background">
	     	
             <table class="tablewidth"  id='mostViewedList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius" style="color:white;">Most Viewed</h3>
				</td></tr>
			
					 <tr style="text-align:center;">
	 	<td><div id="loading111"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>

			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='mostViewedPagination'></div>
	</div>
	<?php
}
	?>

		
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

 <div class="col_3 background">
             <table class="tablewidth"  id='categoriesList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius">Job Categories</h3>
				</td></tr>
			
					 <tr style="text-align:center;">
	 	<td><div id="loading1"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>
<?php
				//}
				?>
			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='categoryPagination'></div>
	</div>
	

           <div class="col_3 background">
	     	
             <table class="tablewidth"  id='locationPaginationList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius">Locations</h3>
				</td></tr>
			
					 <tr style="text-align:center;">
	 	<td><div id="loading11"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>

			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='locationPagination'></div>
	</div>
<!--<div class="col_3">
            
             <table class="tablewidth background">
             	<tr> <td colspan="2"> <h3 class="radius">Most Viewed</h3></td></tr>
                  

                    	<?php
                    		foreach ($fmax as $value) {
                    			
                    	?>
                        <tr class="unread checked">
                           <a href="<?= base_url() ?>EmployeeJobDetail?uid=<?= $value['submitjob_id']; ?>">
                            <td class="padding hidden-xs" style="text-decoration:none; color:#999999;">
                                <?= $value['submitjob_job_title']; ?>
                            </td>
                            <td style="text-decoration:none; color:#999999;">
                                (<?= $value['submitjob_job_viewed']; ?>)
                            </td></a>
                        </tr>
                         <?php
                     }
                         ?>

             </table>
         </div>-->
<?php
if($recentJobCount!=1 && $recentJobCount!=0 && $recentJobCount!=2) 
{

?>
       <div class="col_3 background">
	     	
             <table class="tablewidth"  id='mostViewedList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius">Most Viewed</h3>
				</td></tr>
			
					 <tr style="text-align:center;">
	 	<td><div id="loading111"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>

			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='mostViewedPagination'></div>
	</div>
	<?php
}
	?>

      </div>
	

</div>



</div>

<div class="container">


<div class="row background margintop2 marginbottom2 refer_earn">
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
<?php include('footer.php'); ?>
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
</html>	

 <!-- pagination jquery-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="<?= base_url() ?>js/jobCategoryPaginationn.js"></script>
					<script src="<?= base_url() ?>js/locationPagination11.js"></script>
					<script src="<?= base_url() ?>js/mostViewedPagination.js"></script>
					<script src="<?= base_url() ?>js/searchWidgetPagination13.js"></script><!--pagination jquery end-->