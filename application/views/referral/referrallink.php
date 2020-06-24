
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
<head>
	<?php
include 'fav.php';
?>
<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city." />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome---->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome---->
<style>
	.signupbutton
	{
		background-color: white;
		color:#2185c5;
		padding:10px 15px;
		border:1px solid #2185c5;
	}
	.signupbutton:hover
	{
		background-color: #f15f43;
		color:white;
		border:1px solid #f15f43;
	}
	button
	{
		border:none;
		background-color: white;
	}

	.footer-social ul
	{	
		list-style: none;
	}
	.footer-social li{
		margin-right:3px;
		text-decoration:none;
		display:inline-block;  
		float:right;
		position: relative;
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
	        <a class="navbar-brand" href="<?= base_url(); ?>welcome/dashboard"><img src="<?= base_url(); ?>logo/getjob.png" alt="logo"/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        

	        <ul class="nav navbar-nav">
	        	 <li><a href="<?= base_url(); ?>">Home</a></li>
		      
		      
			          
			            <li><a href="<?= base_url(); ?>employee/login">Employee</a></li>
			 
			            <li><a href="<?= base_url(); ?>recruiter/login">Recruiter</a></li>
			           
			            
		         		<li><a href="<?= base_url(); ?>welcome/about" >About Us</a></li>
		        		<li><a href="<?= base_url(); ?>welcome/contact" >Contact Us</a></li>
		        		<li><a href="http://blog.therevew.com" target="_blank">Blog</a></li>
	       <?php
	       $countryCookie=get_cookie('countryCookie');
	       if($countryCookie=='Canada')
	       {
	       	$cookieValue='India';
	       	$cookie='IN';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>welcome/changeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png"/></a></li>
	        </ul>
	        <?php
	       }
	       elseif($countryCookie=='India')
	       {
	       	$cookieValue1='Canada';
	       	$cookie1='CA';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>welcome/changeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg"/></a></li>
	        </ul>
	       	<?php
	       }
	       ?>
				
	   	
	        </ul>
</div></div></nav>
<div class="container">
  
<div class="row" style="text-align:center; margin-bottom:5%; margin-top:10%;" >
	 <div class="col-md-6"><h2>Are You Looking For a Job?</h2>
	 </br><a href="<?= base_url(); ?>employee?src=<?= $link; ?>&login=<?= $login; ?>&id=<?= $id; ?>" class="signupbutton" style="text-decoration:none;">Employee Signup</a></div> 

	 <div class="col-md-6"><h2>Are You Looking For an Employee?</h2>

	  </br><a href="<?= base_url(); ?>recruiter/registrationstep?src=<?= $link; ?>&login=<?= $login; ?>&id=<?= $id; ?>" class="signupbutton" style="text-decoration:none;">Employer/ Recruiter Signup</a></div>
</div>
	 </div>


<?php
include 'footer.php';
?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
</html>	

<script type="application/javascript">
 function branddetails()
 {
		var paramstr=$("#voting_form").serialize();
		//$('#loading_pic').show();
		$.post("<?php echo base_url();?>ajaxcontrol/ajax",
		paramstr, 
		function(data) 
		{
			$("#votingg").hide();
			$("#voting_answer").show();
		
		 if(data == "Success")
		 {
		 	
		   /*$('#success_msg').show();
		  $('#success_msg').text(" Record saved successfully");*/
		 }
		});	
		
 }
 </script>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=957428434400355';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
