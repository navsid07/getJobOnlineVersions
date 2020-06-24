<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$eid=$this->session->userdata('employe_id');
$rid=$this->session->userdata('recruiter_id')
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php
include 'fav.php';
?>
	 
<title> Profile Detail| Get-job.online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city.Online job portalfor job providers and job seekers." />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 

<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheet.css" rel='stylesheet' type='text/css' />

<!-- flexisel slider-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.flexisel.js"></script>
<!----font-Awesome-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style>

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
</head>
<body>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

<div class="row" style="text-align:center;">
	 <div class="col-md-6"><h2></h2>	
</br>
<a href="<?= base_url(); ?>EmployeeRegistration" style="text-decoration: none;" class="signupbutton signupbutton1 ">I am a Employee</a></div>

	 <div class="col-md-6"><h2></h2>
</br>
	 <a href="<?= base_url(); ?>/RecruiterRegistrationStep1" style="text-decoration: none;" class="signupbutton">I am a Recruiter</a></div>
</div>
  hjfhdj fdjfhdf dkfdf djf
  

	</div>
	</div>



<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="<?= base_url(); ?>Index"><img src="https://get-job.online/logo/getjob.png" alt="logo"/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        
<?php
$employeid=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterid=$this->session->userdata('recruiter_id');
if(empty($employeid) && empty($recruiterid) && empty($employeeSession) && empty($recruiterSession))
{
?>
	        <ul class="nav navbar-nav">
	        	 <li><a href="<?= base_url(); ?>">Home</a></li>
		      
		        
			            <li><a href="<?= base_url(); ?>EmployeeLogin">Employee</a></li>
			            
			          
			            <li><a href="<?= base_url(); ?>RecruiterLogin">Recruiter</a></li>
			             
		        <li><a href="<?= base_url(); ?>About" >About Us</a></li>
		        <li><a href="<?= base_url(); ?>Contact" >Contact Us</a></li>
		        <li><a href="http://blog.therevew.com" target="_blank">Blog</a></li>
		        <?php
	       $countryCookie=get_cookie('countryCookie');
	       if($countryCookie=='Canada')
	       {
	       	$cookieValue='India';
	       	$cookie='IN';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="indian flag"/></a></li>
	        </ul>
	        <?php
	       }
	       elseif($countryCookie=='India')
	       {
	       	$cookieValue1='Canada';
	       	$cookie1='CA';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
	        </ul>
	       	<?php
	       }
	       ?>
	        </ul>

	        <?php
}
elseif (!empty($employeid) || !empty($employeeSession)) {
	

	        ?>
	         <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	<?php


		            	foreach ($ecategory as $value) {
		            	 	
		            	?>
			            <li><a href="<?= base_url(); ?>EmployeeSearch/<?= base64_encode(base64_encode($value['submitjob_category'])); ?>"><?= $value['submitjob_category']; ?></a></li>
			            <?php
			        }
			            ?>

			       </ul>
		        </li>
		        
		                 <li><a href="<?= base_url(); ?>EmployeeWishlist">My Wishlist</a></li>

			            <li><a href="<?= base_url(); ?>EditEmployee">Edit Profile</a></li>
			           
			            <?php
			            foreach ($edata as $value) {
			             	$status=$value['employee_referral_status'];
			             	if($status!=1)
			             	{
			            ?>
			             <li><a href="<?= base_url(); ?>ReferralIndex?q=<?= $value['employee_email']; ?>" title="Get started Refferal program">Let's begin</a></li>
			           
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
			           
		           
		       
		        
	        </ul>
	    	<?php
	    }
	    elseif (!empty($recruiterid) || !empty($recruiterSession)) {
	    
	    	?>

<ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Category<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	<?php
	

if($rcategory==null)
		            	{
		            		?>
		            		<li><a href="#">Categories Coming Soon</a></li>
			        <?php   
		            	}
		            	else
		            	{
		            		foreach ($rcategory as $value) {
		            		
		            	?>
			            <li><a href="<?= base_url(); ?>RecruiterSearch/<?= $value['employee_category']; ?>"><?= base64_decode(base64_decode($value['employee_category'])); ?></a></li>
			            <?php

			        }
			    }
			            ?>
		            </ul>
		        </li>
		         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	
			            <li><a href="<?= base_url(); ?>RecruiterShortlistEmployee">My Shortlist</a></li>
			            <li><a href="<?= base_url(); ?>RecruiterJobList">My Jobs</a></li>
			            <li><a href="<?= base_url(); ?>RecruiterJobInvitations">Job Invitations</a></li>
			             <li><a href="<?= base_url(); ?>SubmitJobForm">Submit Job</a></li>
			             	  <li><a href="<?= base_url(); ?>EditRecruiterProfile">Edit Profile</a></li>
		            </ul>
		        </li>
		        
		        

			          
			           
			           
			   			
			              <?php
			            foreach ($rdata as $value) {
			             	$status=$value['recruiter_referral_status'];
			             	if($status!=1)
			             	{
			            ?>
			             <li><a href="<?= base_url(); ?>ReferralIndex?q=<?= $value['recruiter_email']; ?>" title="Get started Refferal program">Let's begin</a></li>
			           
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
			            <li><a href="<?= base_url(); ?>RecruiterLogout">Logout</a></li>

	        </ul>
	        <?php
	        	}
	        ?>

	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
		    	<form action="search" method="post">
			 <input type="text" class="text"  name="job" placeholder="Enter Keyword(s)" >
			 <input type="text" class="text" name="location" placeholder="Location" >
			 <div class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></div>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">

	<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li><a href="<?= base_url(); ?>"><span itemprop="name">Home </a></li><li><span itemprop="name">Refer & Earn</span></li></span></ul>
	<div class="row background padding refer_earn" style="margin-bottom:5%; margin-top:5%;">

		<div class="single">  
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
       <h2>About Referral Program.</h2>
       <div class="about_top">
	     <div class="col-md-12 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li> 
					   <div class="item_content">
						<p><h5 style="font-size:25px; font-weight:bold;"><a href="#">Welcome to the get-job.online referral program.</a></h5> 
						</p><p style="font-size:18px;">We are delighted to know that you have decided to be a part of out referral family.That you are eager to earn reward points on our platform. This is the step where you will become a member od our small family of recruiters and candidates. Here you will be able to earn back your money by inviting 10 new users and if you have additional users who will reach the total profile completeness then you you will get the chance to earn more and more.
</p><p class="m_1" style="font-size:18px;">So lets get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
					
						<p>
							<?php

							if(!empty($loginas))
							{
							if($loginas=='employeelogin')
							{
								?>
										<button id="editbutton" class="employeebutton">Login for referral</button>
													
									<div class="row" style="margin-top:2%; display:none;" id="employeee"  >
										<div class="row" style="margin-top:2%;" >
											<div class="col-md-offset-2 col-md-4">
												Username/Email:
											</div>
											<div class="col-md-4">
												Password:
											</div>
										</div>

										<div class="row"  >
										<form action="<?= base_url().'ReferralEmployeeLogin'; ?>" method="post">
											<div class="col-md-offset-2 col-md-4" >
											<input type="text"  name="email" class="form-control" placeholder="Email">
											
											</div>
											<div class="col-md-4" >
											<input type="password" name="password" class="form-control">
											</div>
											<div class="col-md-offset-5 col-md-2"><input type="submit" value="Referral employee Login" id="editbutton"></div>
										</form>
									</div>
									</div>
							<?php
						}
							elseif($loginas=='recruiterlogin')
							{
								?>
										<button id="editbutton" class="recruiterbutton">Login for referral</button>
										
									<div class="row" style="margin-top:2%; display:none;" id="rrecruiterr"  >
										<div class="row" style="margin-top:2%;" >
											<div class="col-md-offset-2 col-md-4">
												Username/Email:
											</div>
											<div class="col-md-4">
												Password:
											</div>
										</div>

										<div class="row"  >
										<form action="<?= base_url().'referral/loginrecruiter'; ?>" method="post">
											<div class="col-md-offset-2 col-md-4" >
											<input type="text"  name="email" class="form-control" placeholder="Email">
											
											</div>
											<div class="col-md-4" >
											<input type="password" name="password" class="form-control">
											</div>
											<div class="col-md-offset-5 col-md-2"><input type="submit" value="Referral Login" id="editbutton"></div>
										</form>
									</div>
									</div>
						<?php

							}
								elseif($loginas=='recruiter')
								{


			            foreach ($rdata as $value) {
			             	$status=$value['recruiter_referral_status'];
			             	if($status!=1)
			             	{
			            ?>

			           <a href="<?= base_url(); ?>referral?q=<?= base64_decode(base64_decode($value['recruiter_email'])); ?>" style="color:white; text-decoration:none;"><button id="editbutton" title="Get started Refferal program">Let's begin</button></a>
							
			           
			            <?php
			        }
			        else
			        {
			            ?>
			             <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
			           
						<?php
					}
						}
						
							?>
					 		
<!--<a href="<?= base_url(); ?>referral/startreferralrecruiter?data=<?= $loginas ?> && q=<?= $emmail; ?>" style="color:white; text-decoration:none;"><button id="editbutton">Referral Dashboard</button></a>
		-->				
								<?php

								}


							else
							{

								?>

		<a href="<?= base_url(); ?>referral/startreferralemployee?data=<?= $loginas ?> && q=<?= $emmail; ?>" style="color:white; text-decoration:none;"><button id="editbutton">Referral Dashboard</button></a>
						
<?php
					}
}
elseif (empty($loginas)) {
	?>
	<a id="select" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Let's begin</button></a>
	<?php
	
}

?>
					 </p>

					 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
					 
					   </div>
					</li>
			    </ul>
			</div>
	     </div>

		
</div>
	</div>
</div>
</div>
<?php
include 'footer.php'; 
?>
</body>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
--><script>
$(document).ready(function(){
    $(".recruiterbutton").click(function(){
    	
        $("#rrecruiterr").fadeIn();
        $(".recruiterbutton").fadeOut();
         // $("#rrecruiter").fadeOut();
        //$("#div2").fadeIn("slow");
       // $("#div3").fadeIn(3000);
    });
});
</script>

<script>
$(document).ready(function(){
    $(".employeebutton").click(function(){
    	//alert('alert2');
       $("#employeee").fadeIn();
        $(".employeebutton").fadeOut();
         // $("#rrecruiter").fadeOut();
        //$("#div2").fadeIn("slow");
       // $("#div3").fadeIn(3000);
    });
});
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

var select = document.getElementById("select");


// When the user clicks the button, open the modal 
select.onclick = function() {
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
}

// When the user clicks on <span> (x), close the modal
/*span.onclick = function() {
    //modal.style.display = "none";
    $("#myModal").slideToggle(700);
}
*/
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
    	$("#myModal").slideToggle(700);
        //modal.style.display = "none";
    }
}
</script>
</html>	