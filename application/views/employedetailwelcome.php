<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

//session_destroy();
//session_start();
//$session=$_SESSION['recruiter_id'];
$rrid=$this->session->userdata('recruiter_id');
$employer_id=$this->session->userdata('employe_id');
//print_r($recruiter_id);
?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
	
	include 'googleadvertisement.php';
	include 'fav.php';
	
?><title>Online job portal for job seekers and job providers | Profile detail :: Get-job.online </title>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="career consultants near me, job opportunities, bathinda job consultant, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<style>
	.verifybtn {
   background: #3498db;
border:none;
color:white;
font-size:15px;
 border-radius: 5px;
 padding:5px 10px;
  
}


.verifybtn:hover {
  background: #f15f43;
 
  text-decoration: none;
}

u
{
	color:#f15f43;
}
.left
{
	text-align: left;
	margin-left: 2px;
	padding: 6px;
}
.leftt
{
	padding: 3px;
}
.border{
	border-bottom: 1px solid #e6e6e6;
	
}
.color
{
	color:#808080;
	font-weight: bold;
}

.alertbutton
{
	background-color: none;
	border: 2px solid #339933;
	
	color:#339933;
	font-weight: bold;
	border-radius: 5px;
	padding:5px 10px;
}
.alertbutton:hover
{
	background-color: #339933;
	border: 2px solid #339933;
	
	color:white;
}
#apply{
	background-color: white;
	color:#f15f43;
	font-weight: bold;
	border:2px solid #f15f43;
	border-radius: 3px;
	padding: 4px 8px;
	margin-top: 5px;
}
#apply:hover{
	background-color: #f15f43;
	color:white;
}

</style>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
</head>
<body>
	<h1 style="display:none">Jobs in punjab</h1>
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
	        	if(!empty($employer_id))
	        	{
	        	?>
 
		        
		         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		             <ul class="dropdown-menu">
			           <?php
		            	foreach ($categories as $value) {
		            	 	
		            	?>
			            <li><a href="<?= base_url(); ?>EmployeeSearch?category=<?= $value['category']; ?>"><?= base64_decode(base64_decode($value['category'])); ?></a></li>
			            <?php
			        }
			            ?>
			            
		             </ul>
		        </li>
		         <li><a href="<?= base_url(); ?>EditEmployee" >Edit profile</a></li>
		        <li><a href="<?= base_url(); ?>EmployeeWishlist" >My Shortlist</a></li>
		        <!--<?php
			            foreach ($dataa as $value) {
			             	
			            ?>
			             <li><a href="<?= base_url(); ?>employee/addbalance">My Balance: <?php echo $value['balance'].'/-';  ?></a></li>
			           <?php
}
			           ?>-->
			          <?php
			            foreach ($dataa as $value) {
			             	$status=$value['referral_status'];
			             	if($status!=1)
			             	{
			            ?>
			             <li><a href="<?= base_url(); ?>referral?q=<?= $value['email']; ?>" title="Get started Refferal program">Refer & earn</a></li>
			           
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
	        }
	        	/*elseif(!empty($rrid) && empty($employer_id))
	        	{
?>
 <li><a href="<?= base_url(); ?>">Home</a></li>
		        
		         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<b class="caret"></b></a>
		             <ul class="dropdown-menu">
			           
			            <li><a href="<?= base_url(); ?>employer/login">Employee Login</a></li>
			             <li><a href="<?= base_url(); ?>employer">Employee Signup</a></li>
			            
		             </ul>
		        </li>
		         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
		             <ul class="dropdown-menu">
			          
			            <li><a href="<?= base_url(); ?>recruiter/login">Recruiter Login</a></li>
			             <li><a href="<?= base_url(); ?>recruiter">Recruiter Signup</a></li>
			            
		             </ul>
		        </li>
		        <li><a href="<?= base_url(); ?>welcome/about" >About Us</a></li>
		        <li><a href="<?= base_url(); ?>welcome/contact" >Contact Us</a></li>
		        <li><a href="http://www.blog.therevew.com" target="_blank">Blog</a></li>
		       

<?php
}*/

else
{
	        	
	        	
	        			include('GetJobHeaderLi.php');
	        	
}
 ?>
		       
	        </ul>
	      
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
			<div class="container">
	 <?php 
					if($shortlisted= $this->session->flashdata('shortlisted')):

			    $shortlisted_class=$this->session->flashdata('shortlisted_class');
			    ?>
			   <div class="row" style="margin-top:2%;">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $shortlisted_class; ?>">
			  
			  <?php echo $shortlisted ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>
			 <?php 
					if($recruit= $this->session->flashdata('recruit')):

			    $recruit_class=$this->session->flashdata('recruit_class');
			    ?>
			   <div class="row" style="margin-top:2%;">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $recruit_class; ?>">
			  
			  <?php echo $recruit ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>
			 <?php 
					if($alert= $this->session->flashdata('alert')):

			    $alert_class=$this->session->flashdata('alert_class');
			    ?>
			   <div class="row" style="margin-top:2%;">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $alert_class; ?>">
			  
			  <?php echo $alert ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>
			 
	<div class="row">
		 <div class="single">  
      <div class="col-sm-10 follow_left">
      		<table style="text-align:center; margin-bottom:5%;">
			<th colspan="2"></th>

			<?php

			
			 foreach ($data as $key) {
				
			?>
				<tr><td colspan="2"><h3><?= base64_decode(base64_decode($key['job_title'])); ?></h3></td></tr>
				<tr><td colspan="2"><?= base64_decode(base64_decode($key['job_description'])); ?></td></tr>
				<tr><td><b>Experience required:</b></td><td><?= base64_decode(base64_decode($key['experience_required'])); ?></td></tr>
				<tr><td><b>Job Category:</b></td><td><?= base64_decode(base64_decode($key['category'])); ?></td></tr>
				<tr><td><b>Preffered location:</b></td><td><?= base64_decode(base64_decode($key['preffered_location'])); ?></td></tr>
				<tr><td><b>Lowest Education:</b></td><td><?= base64_decode(base64_decode($key['lowest_education'])); ?></td></tr>
				<tr><td><b>Pay Scale:</b></td><td><?= base64_decode(base64_decode($key['payscale'])); ?></td></tr>
				
			
			
<?php

if(!empty($rrid))
{
	
?>
				<tr><td colspan="2"><a href="redirectt"><button type="button" id="apply">Recruit >></button></td></tr>
				
				<?php
			}
				else
				{
				?>
				<tr><td colspan="2"><a href="noapply?jid=<?= $key['id']; ?>&recruiter=<?= $key['employer_id']; ?>"><button type="button" id="apply">Apply >></button></td></tr>
				
				<?php
			}

}
				?>
	</table>
	<div class="col_3">
	   	  	<h3 style="color:white;">Todays Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<?php
	   	  		foreach ($jobs as $value) {
	   	  			
	   	  		?>
	   	  		<li><a href="<?= base_url(); ?>SearchResult?rid=<?= $value['id']; ?>"><?= base64_decode(base64_decode($value['job_title'])); ?></a></li>
	   	  		<?php
	   	  	}
	   	  		?>					
	   	  	</ul>
	   	  </div>
      </div>
      <div class="col-sm-2">
      		<h4 class="m_1">Job Categories</h4>
			<table class="table">
                    <tbody>
                    	<?php
                    		foreach ($categories as $value) {
                    			
                    	?>
                        <tr class="unread checked">
                           
                            <td class="hidden-xs">
                               <a href="<?= base_url();?>CategorySearch?category=<?= $value['category']; ?>" style="text-decoration:none; color:#999999;"> <?= base64_decode(base64_decode($value['category'])); ?></a>
                            </td>
                           
                        </tr>
                         <?php
                     }
                         ?>
                </tbody>
             </table>

             <h4 class="m_1">Locations</h4>
             <table class="table">
                    <tbody>
                    	<?php
                    		foreach ($categories as $value) {
                    			
                    	?>
                        <tr class="unread checked" style="text-transform:capitalize;">
                           
                            <td class="hidden-xs">
                              <a href="<?= base_url(); ?>Search?city=<?= $value['preffered_location']; ?>" style="text-decoration:none; color:#999999;">  <?= base64_decode(base64_decode($value['preffered_location'])); ?>
                            </td>
                            
                        </tr>
                        <?php
                    }
                        ?>
                         
                </tbody>
             </table>

             <h4 class="m_1">Most Viewed</h4>
             <table class="table">
                    <tbody>
                    	<?php
                    		foreach ($fmax as $value) {
                    			
                    	?>
                        <tr class="unread checked">
                           
                            <td class="hidden-xs">
                               <?= base64_decode(base64_decode($value['name'])); ?>
                            </td>
                            <td>
                                (<?= $value['profile_viewed']; ?>)
                            </td>


                        </tr>
                        <?php
                    }
                        ?>
                  
                </tbody>
             </table>
      </div>
  </div>
</div>

</div>

<div class="container">
<div class="row" style="margin-top:2%;">
	 <div class="col_3 message">
	 	<h3>Refer & Earn</h3>
<p style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 </div>
	  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
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
</html>	

