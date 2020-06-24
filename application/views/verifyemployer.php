
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head><?php
include 'fav.php';
?><title>Online job portal for job seekers and job providers | Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online." />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

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
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

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


</style>
</head>
<body>

<?php
                include('GetJobHeader.php');
            ?>
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>
           </div>
		</div>
   </div> 
</div>	



<div class="container">
	 <?php 

					if($emailagain1= $this->session->flashdata('emailagain1')):



			    $emailagain1_class=$this->session->flashdata('emailagain1_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $emailagain1_class; ?>">

			  

			  <?php echo $emailagain1 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>
	<?php
	 $email=$this->uri->segment(3);
	  $fetchhash=$this->uri->segment(4);
	if($data=='hash not matched' || $data=='something went wrong')
	{
		?>
		<div class="col-md-offset-2 col-md-8"style="margin-top:5%;">
				<div class="alert alert-danger">
		<div style="text-align:center;"><h1>Sorry!</h1> <h3>You are using old verification link! </h3></div>
	</br>The verification link is that you have used is invalid please click below to send a valid email verification.</br></br><div style="text-align:center;">
<form action="<?= base_url(); ?>EmployeeOldVerificationLinkn" method="post">
	<input type="hidden" name="email" value="<?= $email; ?>">
	<input type="hidden" name="hash" value="<?= $fetchhash; ?>">
	<input type="submit" value="Send Verification link again" class="verifybtn">
	<!--<a href="<?= base_url(); ?>employee/verificationemailagain?email='.$email.'&hash='.$fetchhash.'"><button type="button" style="margin-left:10px;" ></button></a></div>
--></form>
</div>
			</div>
		</div>
			<?php
}
else
{

	foreach ($data as $key) {
		
	?>
    <form action="<?= base_url(); ?>payumoney/payusubmit" style="margin-top:15px;" method="post">
    			<input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
    			<input type="hidden" name="mobile" value="<?= $key['employee_phone']; ?>"/>
				<input type="hidden" name="firstName" value="<?= $key['employee_name']; ?>"/>
				<input type="hidden" name="lastName" value="<?= $key['employee_name']; ?>"/>
				<input type="hidden" name="totalCost" value="250"/>
				<div class="col-md-offset-2 col-md-8">
				<div class="alert alert-info">
						<div style="text-align:center;"><h1>Just one more step to take! </h1></div></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou have reached the last step of the registration process on get job online Employee portal.You have to deposit a small
amount of Rs.250 as a token of due diligence.This is not a membership fee of any sorts.  This will be considered as your account balance.  This is just the balance to spend on the application purposes.  You can check your balance and spendings in your profile.You can add more amount by clicking on add funds.	</br></br><div style="text-align:center;"><input type="submit" class="verifybtn" Value="Finish Registration"><a href="<?= base_url(); ?>EmployeePayLater?email=<?= $email; ?>"><button type="button" style="margin-left:10px;" class="verifybtn">May be later</button></a></div>
			</div>
		</div>
    </form>
    <?php
}
}
    ?>
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