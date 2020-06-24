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
include 'googleadvertisement.php';

?><title>Online job portal for job seekers and job providers | Search result :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Job openings, online work, online typing jobs, lattest government jobs, find local jobs, get job online, job consultants in bathinda, career center">
<meta name="description" content="
job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.
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
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel="stylesheet"> 
<!----font-Awesome-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
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

#more{
	margin-top:5px;
	background-color: white;
	color:#f15f43;
	border: 2px solid #f15f43;
	border-radius: 3px;
	font-weight: bold;
}
#more:hover

{
	background-color: #f15f43;
	color: white;
}

.textt
{
	margin: 10px 0;
    border: 1px solid #999;
    color: #999;
    background: none;
    padding: 8px;
    outline: 0;
    font-size: .85em;
    width:16%;
}
h1{ font-family: Georgia, arial, serif; font-size: 38px; }
</style>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

</head>
<body>
<?php
		include('RecruiterHeader.php');
?>
	<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		     <div id="search_form" class="clearfix">
		    <h1>Start employee search</h1>
		    <p>
			 <form action="<?= base_url(); ?>RecruiterSearch" method="post">
			 <select class="textt" name="category">
			 		<option value="">select Category</option>
			 		<?php
		            	if($categories==null)
		            	{
		            		?>
		            		<option value=""><a href="#">Categories Coming Soon</a></option>
			        <?php   
		            	}
		            	else
		            	{
		            		foreach ($categories as $value) {
		            		
		            	?>
			         <option value="<?= $value['employee_category']; ?>" ><?= base64_decode(base64_decode($value['employee_category'])); ?></option>
			            <?php
}
			        }
		            	?>
			 </select>
			<!-- <input type="text" class="text"  name="category" placeholder="Employee Category" >
			--> 
			 <input type="text" class="text" name="location" placeholder="Location" >
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Employee"></label>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	

<div class="container">
	

	 <?php 
					if($shortlisted= $this->session->flashdata('shortlisted')):

			    $shortlisted_class=$this->session->flashdata('shortlisted_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $shortlisted_class; ?>" style="margin-top:5%;">
			  
			  <?php echo $shortlisted ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>

	
		
		<div class="single">  
      <div class="col-sm-10 follow_left background padding" style="margin-bottom:3%;">
			<h1><u>Candidate Applications</u></h1>

             <div class="follow_jobs">

	<!--<div class="row" style=" margin-top:5%; margin-bottom:3%;">

		
		<div class="col-md-12" style="text-align:center;"><h1><u>Search Result</u></h1></div>
-->
<?php
if(empty($data))
{

	?>
	<table width="100%" style="text-align:center; text-transform:capitalize;">
		<th style="text-align:center;"></th>
			<tr><td>Sorry no result found.</td></tr>
			
	</table>
	<?php
}

else
{

	foreach ($data as $value) {
		
?>
	
	<div class="aa">
				
					<div class="title">
						<h4><?= base64_decode(base64_decode($value['employee_name'])); ?></h4>
						<p><?php $str=base64_decode(base64_decode($value['employee_description'])); echo $str2 = substr($str, 0, 45).'......';  ?></p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i><?= $value['employee_preffered_location']; ?></span><!--
						<span class="type full-time"><i class="fa fa-suitcase"></i><?= base64_decode(base64_decode($value['employee_fresher_experience'])); ?></span>-->
						<!--<span class="sallary"><i class="fa fa-dollar"></i></span>-->
					</div>
					<div class="col-md-12">
							<a href="<?= base_url();?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>&jid=<?= $_GET['jid']; ?>"><button type="button" id="more" style="float:right;">More detail>></button></a>
					</div>
				</div>
				

<?php 
}
}

?>

</div>
</div>

</div>

	</div>

	<div class="container">
<div class="row background" style="margin-top:2%; margin-bottom: 2%;">
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