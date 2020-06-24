<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html  lang="en">
<head>
	<?php
include 'fav.php';
?>
<title>Online job portal for job seekers and job providers | Employer profile :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city." />
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
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<style>
	.verifybtn {
   background: #3498db;
border:none;
color:white;
font-size:15px;
 border-radius: 5px;
 padding:5px 10px;
  margin-left: 40%;
  margin-bottom: 4%;
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
</style>

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
		    	<form action="search" method="post">
			 <input type="text" class="text"  name="job" placeholder="Enter Keyword(s)" >
			 <input type="text" class="text" name="location" placeholder="Location" >
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
	 <?php 
					if($success= $this->session->flashdata('success')):

			    $success_class=$this->session->flashdata('success_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $success_class; ?>">
			  
			  <?php echo $success ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
		
			?>
	<div class="row">
	<div class="col-lg-6" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-top:5%; margin-bottom:3%; padding:3px;">
	<?php
	foreach ($data as $value) {
		
	?>
	<table width="100%">
		<th colspan="3"></th>
			<tr><td colspan="2"><h2><u><?= $value['name']; ?></u></h2></td><td rowspan="4"><img src="<?= base_url(); ?>images/banner.jpg" width="250" style="border-radius:20px;" alt="image"></img> </td>
			</tr>
			<tr><td><b>Company:</b></td><td><?= $value['previous_company']; ?></td></tr>
			<tr><td><b>Experience:</b></td><td><?= $value['experience']; ?></td></tr>
			<tr><td><b>Location:</b></td><td><?= $value['country']; ?></td></tr>
			<tr><td><b>Key Skills:</b></td><td>Key Skills</td><td><a href="<?= base_url(); ?>EmployeeEdit"><button id="editbutton">Edit Profile</button></a></td></tr>
	</table>
	<?php
}
	?>
</div>

<div class="col-lg-offset-1 col-lg-5" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-top:5%; margin-bottom:3%; padding:3px;">
	<?php
	foreach ($data as $value) {
		
	?>
	<table width="100%">
		<th colspan="2"></th>
			<tr><td colspan="2" ><h2><u>Profile Completeness</u></h2></td></tr>
			<tr><td colspan="2"><font color="#f15f43"><b>70%</b> </font><progress value="50" max="100">
</progress></td></tr>

			<tr><td><b>Rating:</b></td><td>&#10004;</td></tr>
			<tr><td><b>Profile Views:</b></td><td><?= $value['profile_viewed'].' Times'; ?></td></tr>
			<tr><td><b>Shortlisted:</b></td><td><?= $value['shortlist'].' Times'; ?></td></tr>
			<tr><td><b>Balance:</b></td><td><?= $value['balance']; ?></td></tr>
	</table>
	<?php
}
	?>
</div>
</div>

<div class="row">
		<div class="col-lg-4" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-bottom:5%; padding:3px;">
		<?php
	foreach ($data as $value) {
		
	?>
	<table width="100%" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h2><u>My Profile</u></h2></td>
			</tr>
			<tr class="border"><td class="left"><b>Full Name:</b></td><td><?= $value['name']; ?></td></tr>
			<tr class="border"><td class="left"><b>Email:</b></td><td><?= $value['email']; ?></td></tr>
			<tr class="border"><td class="left"><b>Country:</b></td><td><?= $value['country']; ?></td></tr>
			<tr class="border"><td class="left"><b>City:</b></td><td><?= $value['city']; ?></td></tr>
			<tr class="border"><td class="left"><b>State:</b></td><td><?= $value['state']; ?></td></tr>
			<tr class="border"><td class="left"><b>Full Address:</b></td><td><?= $value['address']; ?></td></tr>
			<tr class="border"><td class="left"><b>Pin Code:</b></td><td><?= $value['pincode']; ?></td></tr>
			<tr class="border"><td class="left"><b>Contact:</b></td><td><?= $value['phone']; ?></td></tr>
			<tr class="border"><td class="left"><b>Dob:</b></td><td><?= $value['birthdate']; ?></td></tr>
			<tr class="border"><td class="left"><b>Qualification:</b></td><td><?= $value['qualification']; ?></td></tr>
			<tr class="border"><td class="left"><b>Points:</b></td><td><?= $value['grade']; ?></td></tr>
			<tr class="border"><td class="left"><b>Experience:</b></td><td><?= $value['experience']; ?></td></tr>
			<tr class="border"><td class="left"><b>Company:</b></td><td><?= $value['previous_company']; ?></td></tr>
			<tr class="border"><td class="left"><b>Key Skills:</b></td><td>Key Skills,Key Skills,Key Skills,Key Skills,Key Skills,Key Skills,Key Skills,Key Skills,v,v,v</td></tr>
	
			<tr><td colspan="2"><h2><u>Inbox</u></h2></td></tr>
			<tr><td colspan="2">Recruiter Messages</td></tr>
	</table>
	<?php
}
	?>
</div>
<div class="col-lg-offset-1 col-lg-7" style="text-align:center; border:1px solid #d9d9d9; border-radius:10px; margin-bottom:5%; padding:3px;">
	<table width="100%" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td><h2><u>Jobs Recommendation</u></h2></td>
			</tr>
			<?php
			foreach ($jobs as $value) {
				
			?>
			<tr ><td class="leftt"><font color="blue"><a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $value['id']; ?>" style="color:blue; text-decoration:none;"><?= $value['job_title']; ?></a></font></td></tr>
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
<?php include 'footer.php'; ?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
<!-- Load Facebook SDK for JavaScript -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
</html>	