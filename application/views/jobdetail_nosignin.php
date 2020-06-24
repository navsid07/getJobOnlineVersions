<!--A Design by W3layouts

Author: W3layout

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->
<?php

//session_start();

//echo $id=$this->session->userdata('eid');



/*if(!empty($id))

{

	echo 'isset';

}

else

{

	echo 'notisset';

}*/



 $employe_session=$this->session->userdata('employe_id');

?><!DOCTYPE HTML>

<html  lang="en">

<head>

	<?php
include 'googleadvertisement.php';

include 'fav.php';

?>

	<title><?php
	foreach ($job as $key ) {
	echo 'Required '.$key['submitjob_job_title'];
} 
?> | Job Title</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="job consultants in bathinda, job opportunities, career center, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<?php
foreach ($job as $key ) {
	?>
<meta name="description" content="
<?php

$substring=base64_decode(base64_decode($key['submitjob_job_description']));
$subbsting=substr($substring, 0, 150);
echo $subbsting;
	//echo $key['submitjob_job_description'];
	echo ' || Salary: '.$key['submitjob_payscale'];
?>
" />
<?php
}
foreach ($job as $key ) {
	
?>
<meta property="og:title" content="<?php echo 'Required '.$key['submitjob_job_title'];echo ' || Salary: '.$key['submitjob_payscale']; ?>">
<?php
}
?>
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<?php
foreach ($job as $key ) {
	
?>
<meta property="og:description" content="<?php echo $key['submitjob_job_description']; ?>">
<?php
}
?>
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

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

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

.color

{

	color:#808080;

	font-weight: bold;

}



	.delete

	{

		background-color: #ff6666;

		color:white;

		float:right;

		border:none;

		padding:5px 10px;

		border-radius:5px;

	}



	.delete:hover

	{

		background-color: #ff4d4d;

	}
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


</style>



</head>

<body>

<?php

include('MainHeader.php');

?>


<div class="container">

	<?php

	if($alert=$this->session->flashdata('alert')):

		$alert_class=$this->session->flashdata('alert_class');

	?>

	<div class="row" style="margin-top:2%;">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?=  $alert_class; ?>">

			  

			  <?= $alert ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

		

		

			?>

<div id="spacetop">
		&nbsp;
	</div>
<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li><a href="<?= base_url(); ?>"><span itemprop="name">Home </span></a></li><li><span itemprop="name">Job Detail</span></li></span></ul>
	<div class="row">

	<div class="col-lg-8 col_3" style="text-align:center; margin-top:5%; margin-bottom:3%;">

	<table width="100%" class="background" itemscope itemtype="jobPosting">

		<?php

		foreach ($job as $value) {

			

		?>

			<tr ><td colspan="2" itemprop="title"><h3 class="no-padding radius"><?= $value['submitjob_job_title']; ?></h3></td>

			</tr>

			<tr><td class="padding" colspan="2" itemrpop="description"><?= base64_decode(base64_decode($value['submitjob_job_description'])); ?></td></tr>

			<tr ><td class="padding" colspan="2" itemprop="experienceRequirements"><!-- Suitcase icon by Icons8 -->

<i class="fa fa-suitcase" aria-hidden="true"></i>

<?= base64_decode(base64_decode($value['submitjob_experience_required'])).'  Yrs'; ?></td></tr><tr><td colspan="2" itemprop="jobLocation"><i class="fa fa-map-marker" aria-hidden="true"></i>

 <?= $value['submitjob_preffered_location']; ?></td></tr>

			<tr></tr>

				<?php

				if($appliedjob=='success')

				{

					?>

					<tr><td class="padding" colspan="2">

				<div class=" col-md-9 alert-success">You have already applied for this job.</div>

				<div class="col-md-3"><a href="<?= base_url(); ?>EmployeeDeleteAppliedJob?id=<?= $value['id']; ?>&&eid=<?= $value['employer_id']; ?>" class="delete" style="text-decoration:none; color:white;">&#10008; Delete</a></div>

			</td></tr>



					<?php

				}

				else{

				if(!empty($employe_session))

				{

				?>

			<tr><td class="padding" colspan="2">

				<a href="applycheckbalance?jid=<?= $value['submitjob_id']; ?>&recruiter=<?= $value['submitjob_employer_id']; ?>" ><button  id="editbutton" >Apply Now</button></a>

				

			</td></tr>



	

			<?php

		}



				if(empty($employe_session))

				{

				?>

			<tr><td class="padding" colspan="2">

				<a href="<?= base_url(); ?>EmployeeLogin?linkid=<?= $value['submitjob_id']; ?>" style="color:red; text-decoration:none;">Please <font color="blue">Login</font> to apply for this job.</a>

					

				

			</td></tr>

			<tr><td class="padding" colspan="2">

				<a href="<?= base_url(); ?>employee" style="text-decoration:none;">New user? Register here.</a>

					

				

			</td></tr>



<?php

		

		}

	}

}

			?>

	</table>

</div>



<div class="col-lg-4" style="margin-top:5%; margin-bottom:3%;">
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
	<table  class="col_3 background" width="100%" itemscope itemtype="jobPosting">

		<th colspan="2"></th>

			<tr><td colspan="2" ><h3 class="radius">Job Posted by:</h3></td></tr>

			<?php foreach ($employer_id as $value) {
				?>
					<tr><td class="padding" rowspan="4" itemprop="image">
						<?php

					if(empty($value['recruiter_logo']))
					{
						?>
<img class="radius" src="<?= base_url(); ?>images/logonotavailable.gif" width="150" alt="Logo"></img>
						<?php
					}
					else
					{
				 ?>

		<img class="radius" src="<?= base_url(); ?>logo/<?= $value['recruiter_logo']; ?>" width="150" alt="Logo"></img>
				<?php
					}
				?>
				</td></tr>
				<tr><td class="padding" itemprop="hiringOrganization"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></td></tr>

				

				<tr><td class="padding"><?= base64_decode(base64_decode($value['recruiter_city'])); ?></td></tr>

				<?php

}

				?>
				
	</table>

</div>

</div>





	<div class="row">

	<div class="col-lg-8 col_3" itemscope itemtype="jobPosting" style="margin-bottom:5%;">
<div class="background">
	<h1 style="display:none;">Jobs</h1>

	<h3 class="radius no-padding">Job Description</h3>

	<?php

	foreach ($job as $vvalue) {
	?>

	<p class="padding" itemprop="description"><?= base64_decode(base64_decode($vvalue['submitjob_job_description'])); ?></p>

	<p class="border padding" itemprop="baseSalary"><span class="color">salary:</span> <?= '     &#8377 '. base64_decode(base64_decode($vvalue['submitjob_payscale'])); ?></p>

	<p class="border padding" itemprop="occupationalCategory"><span class="color">Industry/category/Field:</span > <?= $vvalue['submitjob_category']; ?> </p>

	<!--<p class="border"><span class="color">Roel&category:</span >  </br> <?= base64_decode(base64_decode($value['submitjob_category'])); ?> </p>

	<p class="border"><span class="color">Role:</span >  <?= base64_decode(base64_decode(      $vvalue['submitjob_category'])); ?></p>
-->


	<p class="border padding" itemprop="qualifications"><span class="color">Qualification:</span >  <?= base64_decode(base64_decode(      $vvalue['submitjob_lowest_education'])); ?></p>

	<p class="border padding" itemprop="experienceRequirements"><span class="color">Experience:</span > <?= base64_decode(base64_decode(     $vvalue['submitjob_experience_required'])); ?></p>

	<p class="padding"><h2><u style="color:#d3404e;">Company Profile:</u></h2></p>

	<?php foreach ($employer_id as $value) {

				 ?>

	<p class="padding" itemprop="hiringOrganization"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></p>

	<p class="border padding"><?= base64_decode(base64_decode($value['recruiter_description'])); ?> </p>

	<p class="border padding" itemprop="hiringOrganization"><span class="color">Recruiter name:</span ><?= base64_decode(base64_decode(      $value['recruiter_company_name'])); ?></p>

	<p class="padding"><span class="color">Reruiter Id:</span >  <?= $value['recruiter_hash']; ?></p>
<?php

}


			
				if(empty($employe_session))

				{

				?>

			<p class="padding">

				<a href="<?= base_url(); ?>EmployeeLogin?linkid=<?= $vvalue['submitjob_id']; ?>" style="color:red; text-decoration:none;">Please <font color="blue">Login</font> to apply for this job.</a>

					

				

			</p>

			<p class="padding">
				<a href="<?= base_url(); ?>employee" style="text-decoration:none;">New user? Register here.</a>

			</p>



<?php

		

		}

		

}

	?>
</div>
</div>

<div class="col-lg-4" style="margin-bottom:3%;">

	<table  class="col_3 background" width="100%" itemscope itemtype="jobPosting">

		<th colspan="2"></th>

			<tr><td colspan="2" ><h3 class="radius">Similar Jobs</h3></td></tr>
			<?php
	   	  			if($jobs==null)
	   	  			{
	   	  				?>
						<tr><td style="text-align:center;" class="border">

	   	  			
	   	  			<font size="3.5em" color="blue">
	   	  				Sorry! No result found.
	   	  			</font>
	   	  		
	   	  		</td>
	   	  	</tr>
	   	  				<?php

	   	  			}
	   	  			else
	   	  			{
	   	  		 foreach ($jobs as $value) {
	   	  			?>
	   	  		<tr><td style="text-align:center;" class="border">

	   	  			<!--<font size="3.5em" color="blue"><a href="employee/login/title/<?= $value['id']; ?>" style="color:blue; text-decoration:none;" ><?= base64_decode(base64_decode($value['job_title'])); ?></a>
	   	  			</font>--><!--<h2>More Are coming Soon!</h2>-->
	   	  			<div itemscope itemtype="http://schema.org/Service">
	   	  				<span itemprop="name">
	   	  			<font size="3.5em" color="blue"><a href="<?= base_url(); ?>JobVisitor?uid=<?= $value['submitjob_id']; ?>" style="color:blue; text-decoration:none;" ><?= $value['submitjob_job_title']; ?></a>
	   	  			</font>
	   	  		</span>
	   	  		</div>
	   	  		</td></tr>
<?php
}
}
?>
</table></div>


</div>





</div>

	<div class="container">

	 <div class="background col_3 message margintop2 marginbottom2">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	  <a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	 

</div>

<?php include 'footer.php'; ?>

</body>

<script src="<?= base_url(); ?>js/analytics.js"></script>

</html>	



<script type="application/javascript">

 function branddetails()

 {



 	

 	

		var paramstr=$("#applyform").serialize();

		//$('#loading_pic').show();

		$.post("<?php echo base_url();?>ajaxcontrol/applyajax",

		paramstr, 

		function(data) 

		{

			/*$("#votingg").hide();

			$("#voting_answer").show();*/

		

		 if(data == "Success")

		 {

		 	

		   /*$('#success_msg').show();

		  $('#success_msg').text(" Record saved successfully");*/

		/* }

		});	*/



		

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