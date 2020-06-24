<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html  lang="en">
<head><?php
	include 'googleadvertisement.php';

include 'fav.php';


	foreach ($data as $value) { 

		?><title>Online job portal for job seekers and job providers | <?= $value['company_name']; ?> profile detail :: Get-job.online </title><?php

}

?><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online work from home, job opportunities, help me get a job, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?><?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
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

	.delete
	{
		background-color: #ff6666;
		color:white;
		float:right;
		border:none;
		padding:2px 4px;
		border-radius:5px;
	}

	.delete:hover
	{
		background-color: #ff4d4d;
	}
	


</style>
</head>
<body>
<?php
		include('EmployeeHeader.php');
?>

<div class="container">
	 
			 <?php 
					if($wishlist= $this->session->flashdata('wishlist')):

			    $wishlist_class=$this->session->flashdata('wishlist_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12"  style="margin-top:2%;">
			          <div class="alert alert-dismissible <?php echo $wishlist_class; ?>">
			  
			  <?php echo $wishlist; ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
	<div class="row">

	<div class="col-lg-6" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-top:2%; margin-bottom:3%; padding:3px;">
	
	<table width="100%">
		<?php 
		
		foreach ($data as $value) {

		?>
			<tr><td><h4 ><font color="blue"><?= $value['company_name']; ?></font></h4></td>
			</tr>
			<tr><td>Fresher/Experience</td></tr>
			<tr><td><i class="fa fa-map-marker" aria-hidden="true"></i>
 			<?= $value['state']; ?></td></tr>
			<tr><td><?= $value['description']; ?></td></tr>
			<?php
			if($wishlistt=='not null')
			{
				?>
				<tr><td colspan="2"><div class="col-md-8 alert-success">This Candidate is already in your Wishlist.</div><div class="col-md-offset-1 col-md-3 delete"><a href="deletewishlist/<?= $value['id']; ?>" style="color:white; text-decoration:none;">&#10008; Delete</a></div></td></tr>
			<?php
			}
			else
			{
			?>
			<tr><td colspan="2"><a href="addwishlist/?rid=<?= $value['id']; ?>"><button id="editbutton" onclick="return confirm('Are you sure?');">Add to wishlist</button></a></td></tr>
			
	<?php
}
	
		}

	?>
	</table>

</div>

<div class="col-lg-offset-1 col-lg-5" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-top:2%; margin-bottom:3%; padding:3px;">
	<table width="100%">
		<th colspan="2"></th>
			<tr><td colspan="3" ><h4><u>Profile Status:</u></h4></td></tr>
			<?php
			foreach ($data as $value) {
				
			?>
			<tr><td rowspan="5"><img src="<?= base_url(); ?>images/banner.jpg" width="150" alt="image"></img></td><td colspan="2"><?= $value['company_name']; ?></td></tr>
				<tr><td>Profile Viewed:</td><td><?= $value['profile_viewed']. 'Times'; ?></td></tr>
				<tr><td>Requests</td><td>70 employers</td></tr>
				<tr><td> Location:</td><td><?= $value['state']; ?></td></tr>
				<tr><td>Category:</td><td><?= $value['category']; ?></td></tr>
				<?php
}
				?>
	</table>
</div>
</div>
<div class="row">

	<div class="col-lg-6" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-bottom:5%; padding:3px;">
	<table width="100%" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h2><u>Employer detail</u></h2></td>
			</tr>
			<?php
				foreach ($data as $value) {
					
			?>
		
			
			
			<tr class="border"><td class="left"><b>Company Name:</b></td><td><?= $value['company_name']; ?></td></tr>
			<tr class="border"><td class="left"><b>Established:</b></td><td><?= $value['established']; ?></td></tr>
			<tr class="border"><td class="left"><b>Country:</b></td><td><?= $value['country']; ?></td></tr>
			<tr class="border"><td class="left"><b>City:</b></td><td><?= $value['city']; ?></td></tr>
			<tr class="border"><td class="left"><b>State:</b></td><td><?= $value['state']; ?></td></tr>
			
		
			<tr class="border"><td class="left"><b>Employee strength:</b></td><td><?= $value['employee_strength']; ?></td></tr>
			<tr class="border"><td class="left"><b>Category:</b></td><td><?= $value['category']; ?></td></tr>
			<tr class="border"><td class="left"><b>Company Description:</b></td><td><?= $value['description']; ?></td></tr>
			<?php
			if($wishlistt=='not null')
			{
			?>
			<tr><td colspan="2"><div class="col-md-8 alert-success">This Recruiter is already in your Wishlist.</div><div class="col-md-offset-1 col-md-3 delete"><a href="deletewishlist/<?= $value['id']; ?>" style="color:white; text-decoration:none;">&#10008; Delete</a></div></td></tr>
			<?php
		}
		else
		{
			?>
			<tr><td colspan="2"><a href="addwishlist/?rid=<?= $value['id']; ?>"><button id="editbutton" onclick="return confirm('Are you sure?');">Add to wishlist</button></a></td></tr>
			
	
			<?php
		}
}
			?>
	</table>
</div>


<div class="col-lg-offset-1 col-lg-5" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-bottom:5%; padding:3px;">
	<table width="100%" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td><h2><font color="#f15f43"><u>Jobs Posted</u></font></h2></td>
			</tr>
			<?php
			foreach ($jobs as $value) {
				

			?>
			<tr ><td class="leftt"><font color="blue"><a href="jobdetail?uid=<?= $value['id']; ?>" style="color:blue; text-decoration:none;"><?= $value['job_title']; ?></a></font></td></tr>
			<tr><td class="leftt"><?= $value['company_name']; ?></td></tr>
			<tr><td class="leftt"><font color="#f15f43"><?= $value['preffered_location']; ?></b></td></tr>
			<tr class="border"><td class="leftt"><?= $value['job_description']; ?></td></tr>
			<?php
		}
			?>
	</table>
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