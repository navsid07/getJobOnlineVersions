<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$recentJobCount=count($data);
?>
<!DOCTYPE HTML>
<html>
<head><?php

		include 'googleadvertisement.php';
		include 'fav.php';

	?><title> bbSearch jobs by city :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, unemployement, unemployement in punjab, online jobs, government jobs, buisness ideas, jobs, part time jobs, job opportunities, career" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job providers and job seekers." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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

<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
<script>
function checkpassword()
{
	var password=$('#password').val();
	var passwordagain=$('#passwordagain').val();
	if(password != passwordagain)
	{
		//$("#error").html("Password do not match");
		$("#match").show();
		$("#submit").hide();
	}
	else
	{
		$("#submit").show();
		$("#match").hide();
		//$("#error").html("Password matched");
	}
}
</script>
<style>

#breadcrumbs
{
  margin-top: 2%;
}

#breadcrumbs li 
{
  display: inline-block;
}

#breadcrumbs li:not(:first-child) {
  margin-left: 0.2em;
}

#breadcrumbs li:not(:first-child):before {
  content: '/';
  margin-right: 0.2em;
}

#categoryPagination a, #locationPagination a, #mostViewedPagination a {
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

u 
{
    color: #d3404e;
}

.linkColorButtonCss
{
	color:white;
	text-decoration: none;
}

.linkColorButtonCss:hover
{
	color:#d3404e;
}


.regularButton
{
	color: white;
}
.regularButton:hover ~ .linkColorButtonCss
{
	color: #d3404e;
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
	          <a class="navbar-brand" href="<?= base_url(); ?>Dashboard"><img src="https://www.get-job.online/logo/getjob.png" alt="logo"/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        
				<?php
$employeid=$this->session->userdata('employe_id');
$recruiterid=$this->session->userdata('recruiter_id');
$cookieEmployee=get_cookie('sessionCookieEmployee');
$cookieRecruiter=get_cookie('sessionCookieRecruiter');

if(empty($cookieEmployee) && empty($cookieRecruiter) && empty($employeid) && empty($recruiterid))
{
?>
	        <ul class="nav navbar-nav">
	        	 <?php
                include('GetJobHeaderLi.php');
            ?>
	        </ul>

	        <?php
}
elseif (!empty($cookieEmployee) || !empty($employeid)) {
	

	        ?>
	         <ul class="nav navbar-nav">

		        <?php
		        	include('EmployeeHeaderLi.php');
		        ?>
			    

	        </ul>

	    	<?php
	    }
	    elseif (!empty($cookieRecruiter) || !empty($recruiterid)) {
	    	?>

 <ul class="nav navbar-nav">
		        <?php
		        include('RecruiterHeaderLi.php');
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
	<ul id="breadcrumbs" style="margin-top: 6%;" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li ><span itemprop="name"><a href="<?= base_url(); ?>">Home</a></span> </li><li ><span itemprop="name">Search</span> </li></span></ul>

	
	<!--<div class="row" style=" margin-top:5%; margin-bottom:3%;">
		<div class="col-sm-10 follow_left">
		<div class="col-md-12" style="text-align:center;"><h1><u>Search Result</u></h1></div>-->
		<div class="single">  
     <div class="col-sm-8 follow_left">
			

             <div class="follow_jobb padding">

               <div class="col_3 background">
	     	<h1><u class="padding">Recent Jobs</u></h1>
             <table class="tablewidth padding"  id='categorySearchPaginationList'>
		<?php
			if($result=='null')
{

	?>
	<a>
	 <div class="featured"></div>
					
					
					<div class="title">
						<h5>No job available in this city please try again later.</h5>
						<p>If you wish to make people know about our site please share below.</p>
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
				</a>

	
	<?php
}

else
{
	?>
			<thead class="radius">
				<!--<tr><td colspan="3" ><h3 class="radius">Most Viewed</h3>
				</td></tr>-->
			
					 <tr style="text-align:center;">
	 	<td><div id="loading1111"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>
				<tbody></tbody>
				<?php
			}
				?>
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='categorySearchPagination'></div>
	</div>
	


</div>

<?php
	if($recentJobCount==0 || $recentJobCount==1 || $recentJobCount==2)
	{
?>
<div class="col_3 background">
	     	
             <table class="tablewidth"  id='mostViewedList'>
		
			<thead class="radius">
				<tr><td colspan="3" ><h3 class="radius" style="color: white;">Most Viewed</h3>
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
	<div class="social" style="margin-bottom:2%;">	
	
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
      		
			<!--<table class="tablewidth background col_3" >
				<tr><td><h3 class="radius">Job Categories</h3></td></tr>
                    <tbody>
                    	<?php
                    		foreach ($categories as $value) {
                    			
                    	?>
                        <tr class="unread checked" itemscope itemtype="jobPosting">
                           
                            <td itemprop="occupationalCategory" class="padding hidden-xs">
                               <a href="<?= base_url(); ?>CategorySearch?category=<?= $value['submitjob_category']; ?>" style="text-decoration:none; color:#999999;"><?= $value['submitjob_category'];
                                ?></a>
                            
                            </td>

                        </tr>
                         <?php
                     }
                         ?>
                </tbody>
             </table>-->

             	<?php
                    	if(empty($categories))
                    	{
                    		?>
                    		 <div class="col_3 background">
                    		 <table class="tablewidth"  id='categoriesList'>
                    		  <tr class="border unread checked">
                           
                            <td class="padding hidden-xs" itemscope itemtype="jobPosting">Sorry! No result found</td></tr>
                        </table>
                    </div>

<?php
}
else
{
?>

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

			
		</table>
		<div style='margin-top: 10px; text-align:center;' class="padding" id='categoryPagination'></div>
	</div>
	<?php
}
	?>
		<!-- Paginate -->
	
             <!--<table class="tablewidth background col_3">
             	<tr><td><h3 class="radius">Locations</h3></td></tr>
                    <tbody>
                    	<?php
                    		foreach ($job_location as $value) {
                    			
                    	?>
                        <tr class="unread checked" itemscope itemtype="jobPosting">
                           
                            <td class="padding hidden-xs" itemprop="jobLocation" style="text-transform:capitalize;">
                               <a href="<?= base_url();?>Search?city=<?= $value['submitjob_preffered_location']; ?>" style="text-decoration:none; color:#999999;"><?= $value['submitjob_preffered_location']; ?></a>
                            </td>
                        </tr>
                        <?php
						}
                        ?>
                         
                        
                </tbody>
             </table>-->

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
        
            <!-- <table class="tablewidth background col_3">
             	<tr><td colspan="2"><h3 class="radius">Most Viewed</h3></td></tr>
                    <tbody>
                    	<?php
                    	foreach ($max as $value) {
                    		
                    	?>
                         <tr class="unread checked" itemscope itemtype="jobPosting">
                           
                            <td class="padding hidden-xs" itemprop="title">
                              <a href=<?= base_url()."JobVisitor?uid=".$value['submitjob_id']; ?>>  <?= $value['submitjob_job_title']; ?></a>
                            </td>
                            <td class="padding">
                                (<?= $value['submitjob_job_viewed']; ?>)
                            </td>
                        </tr>
                         <?php
                     }
                         ?>
                        
                </tbody>
             </table>-->


<?php
	if($recentJobCount!=0 && $recentJobCount!=1 && $recentJobCount!=2)
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
	
</div>
<div class="container">
<div class="row" style="margin-top:2%;">
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
<?php include 'footer.php'; ?>
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


  <!-- pagination jquery-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="<?= base_url() ?>js/jobCategoryPaginationn.js"></script>
				<script src="<?= base_url() ?>js/locationPagination11.js"></script>
				<script src="<?= base_url() ?>js/mostViewedPagination.js"></script>
				<script src="<?= base_url() ?>js/categorySearchPagination10.js"></script>
			


	<!--pagination jquery end-->
</html>	