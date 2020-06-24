<html  lang="en">
	<head><?php
		 $ridd=$this->session->userdata('recruiter_id');
		   $emidd=$this->session->userdata('employe_id');
      $sessionCookieEmployee=get_cookie('sessionCookieEmployee');
    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');

if(!empty($emidd) || !empty($sessionCookieEmployee))
{
     if(!empty($emidd) && empty($sessionCookieEmployee))

    {
      $emid=$emidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($emidd)) 
    {
      $emid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($emidd)) 
    {
      $emid=$emidd;
    }
}
elseif (!empty($ridd) || !empty($sessionCookieRecruiter)) {
	
  if(!empty($ridd) && empty($sessionCookieRecruiter))
    {
      $rid=$ridd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($ridd)) {
      $rid=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($ridd)) {
      $rid=$ridd;
    }
}

		if(!empty($emid) || !empty($rid))
		{
			?>
				<!--<script>setTimeout(function(){window.location.href='https://www.get-job.online/welcome/dashboard'},2000);</script>
-->
			<?php
		}

		else
		{

			                 if ($result=='recruiter') {
				?>
				<!--<script>setTimeout(function(){window.location.href='https://www.get-job.online/recruiter/login'},2000);</script>
			--><?php
			}
			
			elseif($result=='employee')
			{
				?>
				<!--<script>setTimeout(function(){window.location.href='https://www.get-job.online/employee/login'},2000);</script>
--><?php
			}
		}
			
include 'googleadvertisement.php';

include 'fav.php';

?><title>Find a job and get recruited online | Get Job Online</title>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">

<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online,job recruitment" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
" />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url();?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome---->
<link href="<?= base_url(); ?>css/stylesheet.css" rel="stylesheet"> 
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome---->
<!-- google automatically ads-->
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
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
	ul#flexiselDemo3 li {
    display:inline;
}


/* The Modal (background) */
.modal {

    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    bottom:5px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}


/* Modal Content 
.modal-content {
	border-radius: 6px;
    background-color:  #f48771;
    margin: auto;
    padding: 20px;
    /*border: 1px solid #888;*/
   /* width: 50%;
    color:white;
    border:3px solid white;
}*/
/* Modal Content */
.modal-content {
	border-radius: 6px;
    
    margin: auto;
    
    /*border: 1px solid #888;*/
    width: 50%;
    color:white;
    /*border:3px solid white;*/
}

 .left
{
	
	background-color: #f15f43;
	background: linear-gradient(#ed3612, #f15f43, #ed3612);
	width: 40%;
	text-align:center;
}

.left span
{
	font-size: 6em;
	font-weight: bold;
}
.left img
{
	transform: rotate(315deg);
}

.left label
{
	font-size: 3em;
	font-weight: bold;
}
 .right
{
	
	padding:25px;
	background-color: white;
	width: 60%;
	color:black;
}
.rightt
{
	
	padding:5px;
	background-color: white;
	width: 60%;

}

.message p
{
	font-size:1.2em;
}
.form-title
{

	font-weight:normal; 
	font-size:1.5em; 
	font-family:Arial, Helvetica, sans-serif;
}

.social-heading
{
	font-weight:normal; 
	font-family:Arial, Helvetica, sans-serif;
	 margin-top:6%;
}

@media only screen and (min-width: 280px) and (max-width: 830px) {
	
	.left span
{
	font-size: 1em;
	
}
.social-heading{
	font-size: .7em;
}
.left label
{
	font-size: .8em;
	
}
.social-links
{
	width:15%;
}
.form-title
{

	 
	font-size:.9em; 
	
}
	
	.left img
	{
		width:30%;
		
	}
    .modal-content {
         top: 40%;
    	bottom:0;
    	width: 100%;
    }
    .modal-content h4{
    	font-size: 1em;
    }
   .modal-content .signupbutton
	{
		background-color: white;
		color:#2185c5;
		padding:2px 4px;
		border:1px solid #2185c5;
		font-size: .8em;
	}
	.looking h2
	{
		font-size: 1em;
	
	}
	.looking .signupbutton
	{
		background-color: white;
		color:#2185c5;
		padding:1px 2px;
		border:1px solid #2185c5;
		margin-bottom: 140px;
	}
	.signupbutton:hover
	{
		background-color: #f15f43;
		color:white;
		border:1px solid #f15f43;
	}
	.message p
	{
		font-size: 1em;
	}
}

/* The Close Button */
.close {
	float:right;
	margin-right: 10px;
	top:0;
    color: red; 
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color:red;
    text-decoration: none;
    cursor: pointer;
}
.cellpadding table, th, td
{
	border-collapse: collapse;
}
.padding
{
	 padding: 2%;
}

.btn-danger
{
	background: #ff6666;
	color: white;
	padding: 5px; 
	border-radius: 4px;
	text-decoration: none;
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


	    <?php

	    if(empty($rid) && !empty($emid))
	    {
	    ?>
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		       <?php
		       	include('EmployeeHeaderLi.php');

		       ?>
	        </ul>

	    </div>
	    <?php
}
elseif (empty($emid) && !empty($rid)) {
	
	    ?>

	      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <?php
		        		include('RecruiterHeaderLi.php');
		        ?>
		          
		        
	        </ul>
	    </div>
<?php
}
?>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!-- Trigger/Open The Modal -->
			<div id="spacer">
		&nbsp;
	</div>

		<div style="text-align:center; margin-top: 5%;">
		<?php 
			foreach ($data as $key) {
			

		echo $key;
		} 

		?>

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
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function() {
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    //modal.style.display = "none";
    $("#myModal").slideToggle(700);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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
		//function(data) 
		//{
			//alert('hello');
			// $('#success_msggg').show();
		 // $('#success_msggg').text(" Record saved successfully");
			//$("#votingg").hide();
			//$("#voting_answer").show();
		
		 //if(data == "Success")
		 //{
		 	
		  
		 //}
		//});	
		
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

</body>
</html>
	