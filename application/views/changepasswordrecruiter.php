<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php


$sessionCookie=get_cookie('sessionCookieRecruiter');
	
	$sessionId=$this->session->userdata('recruiter_id');
?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';
include 'googleadvertisement.php';

?><title>Online job portal for job seekers and job providers |Change your Password :: Get-job.online </title>

<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online jobs, job opportunities, government jobs, typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="online job portal to offer jobs according to your job search. find part time and full time jobs. jobs for students and experrienced employees. register for free to find a job at home and apply online job." />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!--<font-Awesome-->
<!--for password match-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#passwordd").val();
    var confirmPassword = $("#checkpasswordd").val();

    if (password != confirmPassword)
    {
        $("#login-btn").hide(500);
        $("#checkpasswordmatchh").show(500);
    }
     	
    else
    {

       $("#checkpasswordmatchh").hide(500);
       $("#login-btn").show(500);
    }
}
</script>
<style>
	#checkpasswordmatch
	{
		font-weight: bold;
		color:red;
	}
</style>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
<style>

body
{
background: #f5f5f0;
}
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
	    	<?php
	    	if(!empty($sessionId) || !empty($sessionCookie))
	    	{
	    	?>
	    	<!--if isset session-->
	    	<ul class="nav navbar-nav">
		      <?php
		      		include('RecruiterHeaderLi.php');
		      ?>
		        
	        </ul>
	        <?php
	    }
	    elseif (empty($sessionCookie) && empty($sessionId)) {
	    	
	    
	        ?>
	        <!-- if reset password without login-->
	       <ul class="nav navbar-nav">
	        	 <?php
	        	 		include('GetJobHeaderLi.php');
	        	 ?>
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
			--> <input type="text" class="text" name="location" placeholder="Location" >
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Employee"></label>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="col-md-4">
	   	  <div class="col_3 background">
	   	  	<h3 class="radius">Featured Employee</h3>
	   	  	<ul class="list_1">
	   	  		<?php
	   	  		foreach ($employee as $value) {
	   	  		
	   	  		?>
	   	  		<li><a href="<?= base_url(); ?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>"><?= base64_decode(base64_decode($value['employee_name'])).' -'.$value['employee_preffered_location']; ?></a></li>
	   	  			<?php
	   	  			}	
	   	  			?>			
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3 background">
	   	  	<h3 class="radius">Recently added</h3>
	   	  	<ul class="list_2">
	   	  		<?php
	   	  		foreach ($employee as $value) {
	   	  		
	   	  		?>
	   	  		<li><a href="<?= base_url(); ?>EmployeeDetailRecruiter?uid=<?= $value['employee_uid']; ?>"><?= base64_decode(base64_decode($value['employee_name'])).' -'.$value['employee_preffered_location']; ?></a></li>
	   	  		<?php
	   	  	}
	   	  		?>							
	   	  	</ul>
	   	  </div>
	   	  
	 </div>

	 <?php 

	 if($url=='changePassword')
	 {	
	  ?>
	  
	 <div class="col-md-8 single_right background padding">
	 	   <div class="login-form-section">
                <div class="login-content">
                    
                        <div class="section-title">
                            <h2>Change Password</h2>

                             <div class="alert alert-danger" id="failure-msg" style="display: none;">Something went wrong please try again later.</div>
                          <div class="alert alert-success" id="success-msg" style="display: none;">Your password successfully changed. <strong>Please wait redirecting.....</strong></div>
					
			
			
                        </div>
                        <?php
                        if(!empty($emailhash))
                        {
                        	if($emailhash=='success')
                        	{
?>
<div class="textbox-wrap" id="oldpassword">
	<!--<form  method="post" id="checkPassword">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                              
                               <input type="hidden" name="email" value="<?= $email;?>">
                           <?= form_password(['name'=>'password','id'=>'password','required'=>'required','class'=>'form-control','placeholder'=>'Old Password here']); ?>
                            </div></br>
                            <div class="alert alert-danger" id="failureMsg" style="display: none;">Password you entered doesn't match. Please try again with correct one.</div>
                          <div class="login-btn">
					   <input type="submit" id="submitbtn" value="Submit">
					   <a href="<?= base_url(); ?>"><button type="<?= base_url(); ?>" class="btn btn-danger">Cancel</button></a>
					</div>

                       </form>  -->
                       <form method="post" id="changePasswordForm">
                        
                        <div class="textbox-wrap" id="emaill">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                              
                            <?= form_password(['name'=>'password','id'=>'passwordd','required'=>'required','class'=>'form-control','placeholder'=>'New Password']); ?></div>
                        </div>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <div class="textbox-wrap" id="passwordd">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" id="checkpasswordd" name="passwordd" class="form-control " placeholder="Re-Enter Password" onkeyup="checkPasswordMatch();">
                            </div>
                        </div>
                    <div class="textbox-wrap"  id="forget">
                            <div class="input-group">
                                <span class=""></span>
                                <div class="registrationFormAlert" id="checkpasswordmatch"></div>
                            </div>
                     </div>
                     <div class="forgot">
						 <div class="login-check">
				 			
				     	</div>
				 		  
					     <div class="clearfix"> </div>
			        </div>
			       	<div class="alert alert-danger" style="display: none;" id="checkpasswordmatchh">submit button is disable due to mismatch password.</div>
					<div class="login-btn" >
					   <input type="submit" id="login-btn" value="Update Password">
					   <a href="<?= base_url(); ?>"><button type="button" class="btn regularCancel">Cancel</button></a>
					</div>
					 
					 </form>
                        </div> 
<?php
                        	}
                        	elseif ($emailhash=='null') {
                        		?>
<div class="alert alert-danger">You are using old verification email.Please reset again and try with newest one.</div>
                        		<?php
                        	}
                        }
                        else
                        {

                        ?>

<div class="textbox-wrap" id="oldpassword">
	<form  method="post" id="checkPassword">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                              
                               <input type="hidden" name="email" value="<?= $email;?>">
                           <?= form_password(['name'=>'password','id'=>'password','required'=>'required','class'=>'form-control','placeholder'=>'Old Password here']); ?>
                            </div></br>
                            <div class="alert alert-danger" id="failureMsg" style="display: none;">Password you entered doesn't match. Please try again with correct one.</div>
                          <div class="login-btn">
					   <input type="submit" id="submitbtn" value="Submit">
					   <a href="<?= base_url(); ?>"><button type="<?= base_url(); ?>" class="btn regularCancel">Cancel</button></a>
					</div>

                       </form>  
                        </div> 
<?php
}
?>
                                          
                                <form method="post" style="display: none"id="changePasswordForm">
                        
                        <div class="textbox-wrap" id="emaill">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                              
                            <?= form_password(['name'=>'password','id'=>'passwordd','required'=>'required','class'=>'form-control','placeholder'=>'New Password']); ?></div>
                        </div>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <div class="textbox-wrap" id="passwordd">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" id="checkpasswordd" name="passwordd" class="form-control " placeholder="Re-Enter Password" onkeyup="checkPasswordMatch();">
                            </div>
                        </div>
                    <div class="textbox-wrap"  id="forget">
                            <div class="input-group">
                                <span class=""></span>
                                <div class="registrationFormAlert" id="checkpasswordmatch"></div>
                            </div>
                     </div>
                     <div class="forgot">
						 <div class="login-check">
				 			
				     	</div>
				 		  
					     <div class="clearfix"> </div>
			        </div>
			       	<div class="alert alert-danger" style="display: none;" id="checkpasswordmatchh">submit button is disable due to mismatch password.</div>
					<div class="login-btn" >
					   <input type="submit" id="login-btn" value="Update Password">
					   <a href="<?= base_url(); ?>"><button type="button" class="btn regularCancel">Cancel</button></a>
					</div>
					 
					 </form>
                </div>
         </div>
   </div>
<?php
}
elseif($url=='changeAttemptsPassword')
{
?>
   <!--change password on attempts-->


 <div class="col-md-8 single_right background padding">
	 	   <div class="login-form-section">
                <div class="login-content">
                    
                        <div class="section-title">
                            <h2>Change ppPassword</h2>

                             <div class="alert alert-danger" id="failure-msgAttempts" style="display: none;">Something went wrong please try again later.</div>
                          <div class="alert alert-success" id="success-msgAttempts" style="display: none;">Your password successfully changed. <strong>Please wait redirecting.....</strong></div>
					
			
			
                        </div>
                        <?php
                        if(!empty($emailhash))
                        {
                        	if($emailhash=='success')
                        	{
?>
<div class="textbox-wrap">
	
                       <form method="post" id="changeAttemptsPasswordForm">
                        
                        <div class="textbox-wrap" id="emaill">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                              
                            <?= form_password(['name'=>'password','id'=>'passwordd','required'=>'required','class'=>'form-control','placeholder'=>'New Password']); ?></div>
                        </div>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <div class="textbox-wrap" id="passwordd">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" id="checkpasswordd" name="passwordd" class="form-control " placeholder="Re-Enter Password" onkeyup="checkPasswordMatch();">
                            </div>
                        </div>
                    <div class="textbox-wrap"  id="forget">
                            <div class="input-group">
                                <span class=""></span>
                                <div class="registrationFormAlert" id="checkpasswordmatch"></div>
                            </div>
                     </div>
                     <div class="forgot">
						 <div class="login-check">
				 			
				     	</div>
				 		  
					     <div class="clearfix"> </div>
			        </div>
			       	<div class="alert alert-danger" style="display: none;" id="checkpasswordmatchh">submit button is disable due to mismatch password.</div>
					<div class="login-btn" >
					   <input type="submit" id="login-btn" value="Update Password">
					   <a href="<?= base_url(); ?>"><button type="button" class="btn regularCancel">Cancel</button></a>
					</div>
					 
					 </form>
                        </div> 
<?php
                        	}
                        	elseif ($emailhash=='null') {
                        		?>
<div class="alert alert-danger">You are using old verification email.Please reset again and try with newest one.</div>
                        		<?php
                        	}
                        }
?>
                </div>
         </div>
   </div>

   <!--change password on attempts-->
<?php
}
?>

  <div class="clearfix"> </div>
 </div>

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
<script src="<?= base_url(); ?>js/analytics.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
	   //shortlist  employee by a recruiter
      $('#changePasswordForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/changepasswordquery'); ?>",
        data: $('#changePasswordForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        	
        		$('#failure-msg').show(500);
        	 		
        	}

        else if(response==1)
        {
   			$('#changePasswordForm').hide(500);
        		$('#success-msg').show(500);	
        		  window.location.href = "<?= base_url(); ?>recruiter/dashboard";
   				
        	
        }
        
        }
        
   });

});



      //shortlist  employee by a recruiter
      $('#checkPassword').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/checkPassword'); ?>",
        data: $('#checkPassword').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        
        	if(response== 1)
        	{
        		
        		$('#checkPassword').hide(500);
        		$('#changePasswordForm').show(500);
        }
        else if(response==0)
        {
   				
   				$('#failureMsg').show(500);
   				$('#checkPassword').trigger("reset");
        		
        }
        
        }
        
   });

});

       //change password when url by attempt change password
      $('#changeAttemptsPasswordForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/changepasswordqueryAttempts'); ?>",
        data: $('#changeAttemptsPasswordForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        	
        		$('#failure-msgAttempts').show(500);
        	 		
        	}

        else if(response==1)
        {

   			$('#changeAttemptsPasswordForm').hide(500);
        	$('#success-msgAttempts').show(500);	
        	window.location.href = "<?= base_url(); ?>recruiter/dashboard";	
        }
        
        }
        
   });

});
</script>
</html>	