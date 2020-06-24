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
?><title>Online job portal for job seekers and job providers | Change your Email :: Get-job.online </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Job search, job, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for job online" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" />
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

<style>
	
</style>
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
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php
	        			include('GetJobHeaderLi.php');
	        	?>
	        </ul>
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
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Recruiter Register Form</h2>
        
			<?php 
					if($email= $this->session->flashdata('email')):

			    $email_class=$this->session->flashdata('email_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $email_class; ?>">
			  
			  <?php echo $email ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			
				?>
				

			<?php 
					if($email_success= $this->session->flashdata('email_success')):

			    $email_success_class=$this->session->flashdata('email_success_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $email_success_class; ?>">
			  
			  <?php echo $email_success ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
<?php

foreach ($data as $value) {
	
	$id=$value['id'];
	$this->session->set_userdata('again_recruiter',$id);
?>
<div class="alert alert-info" style="text-align:center;">
  
  <strong>Please Note! </strong> You are only able to change your email address right now. But the rest of the information can be updated once you have verified your email address. 
</div>
        <form action="<?= base_url(); ?>RecruiterResendVerificationMail" method="post">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Company Name</label>
                <div class="col-md-9">
                    <input type="text" name="company_name" required="" value="<?= $value['company_name']; ?>" class="form-control input-sm" disabled/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Year of established</label>
                <div class="col-md-9">
                    <input type="text" name="established" value="<?= $value['established']; ?>" required="" class="form-control input-sm" disabled/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" name="contact" required="" value="<?= $value['contact']; ?>" class="form-control input-sm" disabled/>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Password</label>
                <div class="col-md-9">
                    <input type="password" name="password" required="" value="<?= $value['password']; ?>" id="password" class="form-control input-sm" disabled/>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" required="" value="<?= $value['email']; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                      <input type="text" name="email" required="" value="<?= $value['country']; ?>" class="form-control input-sm" disabled/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">City</label>
                <div class="col-md-9">
                    <input type="text" name="city" class="form-control input-sm" value="<?= $value['city']; ?>" required="" disabled/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">State</label>
                <div class="col-md-9">
                    <input type="text" name="state" class="form-control input-sm" value="<?= $value['state']; ?>" required="" disabled/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Employee Strength</label>
                <div class="col-md-9">
                     <input type="text" name="city" class="form-control input-sm" required="" value="<?= $value['employee_strength']; ?>" disabled/>
                    
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Category</label>
                <div class="col-md-9">
                     <input type="text" name="city" class="form-control input-sm" required="" value="<?= $value['category']; ?>" disabled/>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Full Address</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" name="address" onfocus="this.value='';"  required="" onblur="if (this.value == '') {this.value = '';}" disabled> <?= $value['address']; ?> </textarea>
                    
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Describe your company</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" value=" " required="" name="description" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" placeholder="Minimum 300 characters" disabled> <?= $value['description']; ?> </textarea>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" id="submit" value="Register" class="btn btn-primary btn-sm">
               
            </div>
        </div>
    </form>
    <?php
}
    ?>
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