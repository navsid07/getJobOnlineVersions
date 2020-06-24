
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

?>
<!DOCTYPE HTML>
<html>
<head><?php
include 'fav.php';
?><title>Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job providers and job seekers." />
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

<link rel="canonical" href="<?= base_url(uri_string()); ?>">
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

#DropdownState {
    
    padding: 15px;
    width:20%;
    float:left;
    height: 200px;
    overflow: scroll;

}

#Dropdowngetcity 
{ 
    padding: 15px;
    width:20%;
    float:left;
    height: 200px;
    overflow: scroll;
}

#Dropdownpincode 
{ 
    padding: 15px;
    width:20%;
    float:left;
    height: 200px;
    overflow: scroll;
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
<?php
$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
?>
	    	  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
                        <?php 
                            foreach ($category as $value) {
                                
                        ?>
			           <li><a href="<?= base_url(); ?>EmployeeSearch?category=<?= base64_encode(base64_encode($value['submitjob_category'])); ?>"><?= $value['submitjob_category']; ?></a></li>
                 
			           <?php
                        }
                       ?>
		            </ul>
		        </li>
		       
		        
                  <li><a href="EmployeeWishlist">My Shortlist</a></li>
		        <li><a href="EditEmployee">Edit Profile</a></li>
		     <!--  <?php
                        foreach ($data as $value) {
                            
                        ?>
                         <li><a href="<?= base_url(); ?>employee/addbalance">My Balance: <?php echo $value['employee_balance'].'/-';  ?></a></li>
                       <?php
}
                       ?>-->
                        <?php
                  foreach ($data as $value) {
                    $status=$value['employee_referral_status'];
                    if($status!=1)
                    {
                  ?>
                   <li><a href="<?= base_url(); ?>referral?q=<?= $value['employee_email']; ?>" title="Get started Refferal program">Refer & earn</a></li>
                 
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

                  
                  <?php
         $countryCookie=get_cookie('countryCookie');
         if($countryCookie=='Canada')
         {
          $cookieValue='India';
          $cookie='IN';
          ?>
           <ul style="list-style-type:none; margin-top:8px;">
             <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="Indian flag"/></a></li>
          </ul>
          
          <?php
         }
         elseif($countryCookie=='India')
         {
          $cookieValue1='Canada';
          $cookie1='CA';
          ?>
           <ul style="list-style-type:none; margin-top:8px;">
             <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="Canadian flag"/></a></li>
          </ul>
          <?php
         }
         ?>
          
	        </ul>
	    </div>
<?php
}
else
{
?>



	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php
	        			include('GetJobHeaderLi.php');
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


		<div id="spacer">
		&nbsp;
	</div>

<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <form action="<?= base_url(); ?>startSearch" method="post">
      <select class="textt" name="category">
          <option value="">select Category</option>
          <?php
                 
                    foreach ($category as $value) {
                  ?>
               <option value="<?= $value['submitjob_category']; ?>" ><?= $value['submitjob_category']; ?></option>
                  <?php
              }
          
                  ?>
       </select>
       <input type="text" class="text" name="location" placeholder="Location" >
       <div class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></div>
        </form>
			</p>
           </div>
		</div>
   </div> 
</div>	



<div class="container">
	<ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Employee Registration</li></ul>
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
	  if(!empty($data))
	  {
	if($data=='hash not matched' || $data=='something went wrong')
	{
		?>
		<div class="col-md-offset-2 col-md-8"style="margin-top:5%;">
				<div class="alert alert-danger">
		<div style="text-align:center;"><h1>Sorry!</h1> <h3>You are using old verification link! </h3></div>
	</br>The verification link is that you have used is invalid please click below to send a valid email verification.</br></br><div style="text-align:center;">
<form action="<?= base_url(); ?>EmployeeOldVerificationLink" method="post">
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

?>
	 <div class="col-md-2">
          <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- sidebar -->
<!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->

        </div>
 <div class="col-md-8">
     <div class="single">  
	   <div class="form-container background padding">
       <?php
	   	if(!empty($editstatus))
	   	{
	   		?>
	   		  <h2>Edit Profile</h2>
	   		<?php
	   	}
	   	else
	   	{
	   	?>
        <h2>Employee Registration</h2>


         <?php 
     }


      
					if($register= $this->session->flashdata('register')):

			    $register_class=$this->session->flashdata('register_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $register_class; ?>">
			  
			 			 <?php echo $register ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

              <?php 
                    if($imageerror= $this->session->flashdata('imageerror')):

                $imageerror_class=$this->session->flashdata('imageerror_class');
                ?>
               <div class="row">
                  <div class="col-lg-12">
                      <div class="alert alert-dismissible <?php echo $imageerror_class; ?>">
              
                         <?php echo $imageerror ?>

                      </div>
                  </div>
              </div>
              <?php 
            endif;
            ?>
 
        <?php 
					if($emailagain= $this->session->flashdata('emailagain')):

			    $emailagain_class=$this->session->flashdata('emailagain_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $emailagain_class; ?>">
			  
			 			 <?php echo $emailagain ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

			 <?php 
					if($emailexist= $this->session->flashdata('emailexist')):

			    $emailexist_class=$this->session->flashdata('emailexist_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $emailexist_class; ?>">
			  
			 			 <?php echo $emailexist ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
			<?php 
					if($loginemailfailed= $this->session->flashdata('loginemailfailed')):

			    $loginemailfailed_class=$this->session->flashdata('loginemailfailed_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $loginemailfailed_class; ?>">
			  
			  <?php echo $loginemailfailed ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
      <?php 
          if($samemail= $this->session->flashdata('samemail')):

          $samemail_class=$this->session->flashdata('samemail_class');
          ?>
         <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-dismissible <?php echo $samemail_class; ?>">
        
        <?php echo $samemail ?>
      </div>
            </div>
        </div>
        <?php 
      endif;
      ?>

        <form action="<?= base_url(); ?>EmployeeRegisterQueryStep2" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" class="background">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>
         <?php
            	if(!empty($editstatus))
	   	{
	   		foreach ($data as $key) {
	   		?>
	   			 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >City</label>
                <div class="col-md-9">
                    <!--<input type="text" name="city" placeholder="You city name?" required="" class="form-control"/>
                    -->
                    <input type="text" id="getcity" autocomplete="off" name="city" value="<?= base64_decode(base64_decode($key['employee_city'])); ?>" class="form-control input-lg" >
                     
                       <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>
                     
                   
                </div>
            </div>
         </div>
       
                	<input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                	
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">State</label>
                <div class="col-md-9">
                    <input type="text" id="state" name="state" value="<?= base64_decode(base64_decode($key['employee_state'])); ?>" class="form-control input-lg"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>
                </div>
            </div>
        </div>
       
    <input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
                  

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Pincode</label>
                <div class="col-md-9">
                    <input type="text" id="pincode" name="pincode"value="<?= $key['employee_pincode']; ?>" class="form-control input-lg"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdownpincode"></ul>
                </div>
            </div>
         </div>

	   		<?php
	   	}
	   }
	   	else
	   	{
	   	?>
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >City</label>
                <div class="col-md-9">
                    <!--<input type="text" name="city" placeholder="You city name?" required="" class="form-control"/>
                    -->
                    <input type="text" id="getcity" autocomplete="off" name="city" placeholder="Your City" class="form-control input-lg" >
                     
                       <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>
                     
                   
                </div>
            </div>
         </div>
       <?php
if(!empty($editstatus))
                	{
                	?>
                	<input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                	<?php
                }
       ?>
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">State</label>
                <div class="col-md-9">
                    <input type="text" id="state" name="state" placeholder="You State name?" required="" class="form-control input-lg"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>
                </div>
            </div>
        </div>
         <?php
         if(!empty($data))
         {
foreach ($data as $key) {
	?>
    <input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
                  
	<?php
}
}
         	
                	?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Pincode</label>
                <div class="col-md-9">
                    <input type="text" id="pincode" name="pincode" placeholder="You Pincode?" required="" class="form-control input-lg"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdownpincode"></ul>
                </div>
            </div>
         </div>
         <?php
     }
     ?>
       
         
        <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="submit" value="Done" class="btn regularButton btn-sm">Submit</button>

                <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
    </div>
 </div>
</div>

 <div class="col-md-2">
         <!-- sidebar -->
<!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->

        </div>

</div>
<?php

	/*foreach ($data as $key) {
		
	?>
    <form action="https://www.get-job.online/payumoney/payusubmit" style="margin-top:15px;" method="post">
    			<input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
    			<input type="hidden" name="mobile" value="<?= $key['employee_phone']; ?>"/>
				<input type="hidden" name="firstName" value="<?= $key['employee_name']; ?>"/>
				<input type="hidden" name="lastName" value="<?= $key['employee_name']; ?>"/>
				<input type="hidden" name="totalCost" value="250"/>
				<div class="col-md-offset-2 col-md-8">
				<div class="alert alert-info">
						<div style="text-align:center;"><h1>Just one more step to take! </h1></div></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou have reached the last step of the registration process on get job online Employee portal.You have to deposit a small
amount of Rs.250 as a token of due diligence.This is not a membership fee of any sorts.  This will be considered as your account balance.  This is just the balance to spend on the application purposes.  You can check your balance and spendings in your profile.You can add more amount by clicking on add funds.	</br></br><div style="text-align:center;"><input type="submit" class="verifybtn" Value="Finish Registration"><a href="https://get-job.online/employee/paylater?email=<?= $email; ?>"><button type="button" style="margin-left:10px;" class="verifybtn">May be later</button></a></div>
			</div>
		</div>
    </form>
    <?php
}*/

}
}
?>

<?php
/*
if(!empty($status))
{
	?>
	 <div class="col-md-2">
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
<div class="col-md-8">
     <div class="single">  
	   <div class="form-container background padding">
	   	<?php
	   	if(!empty($editstatus))
	   	{
	   		?>
	   		  <h2>Edit Profile</h2>
	   		<?php
	   	}
	   	elseif(empty($editstatus))
	   	{
	   	?>
        <h2>Employee Registration Form</h2>


         <?php 
     }
					if($register= $this->session->flashdata('register')):

			    $register_class=$this->session->flashdata('register_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $register_class; ?>">
			  
			 			 <?php echo $register ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

              <?php 
                    if($imageerror= $this->session->flashdata('imageerror')):

                $imageerror_class=$this->session->flashdata('imageerror_class');
                ?>
               <div class="row">
                  <div class="col-lg-12">
                      <div class="alert alert-dismissible <?php echo $imageerror_class; ?>">
              
                         <?php echo $imageerror ?>

                      </div>
                  </div>
              </div>
              <?php 
            endif;
            ?>
 
        <?php 
					if($emailagain= $this->session->flashdata('emailagain')):

			    $emailagain_class=$this->session->flashdata('emailagain_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $emailagain_class; ?>">
			  
			 			 <?php echo $emailagain ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

			 <?php 
					if($emailexist= $this->session->flashdata('emailexist')):

			    $emailexist_class=$this->session->flashdata('emailexist_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $emailexist_class; ?>">
			  
			 			 <?php echo $emailexist ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
			<?php 
					if($loginemailfailed= $this->session->flashdata('loginemailfailed')):

			    $loginemailfailed_class=$this->session->flashdata('loginemailfailed_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $loginemailfailed_class; ?>">
			  
			  <?php echo $loginemailfailed ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
      <?php 
          if($samemail= $this->session->flashdata('samemail')):

          $samemail_class=$this->session->flashdata('samemail_class');
          ?>
         <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-dismissible <?php echo $samemail_class; ?>">
        
        <?php echo $samemail ?>
      </div>
            </div>
        </div>
        <?php 
      endif;
      ?>

        <form action="<?= base_url(); ?>employee/registerstep2" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Country</label>
                <div class="col-md-9">
                	<?php
                	if(!empty($editstatus))
                	{
                	?>
                	<input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                	<?php
                }
                	?>
                    <input type="text" name="country" placeholder="You country name?" required="" class="form-control"/>
                    
                </div>
            </div>
         </div>

         <?php
         if(!empty($status) && !empty($emaiil))
         {
         	?>
         	<input type="hidden" name="status" value="<?= $status; ?>" >
         	<input type="hidden" name="email" value="<?= $emaiil; ?>" >
         <?php
     }
         ?>

       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >City</label>
                <div class="col-md-9">
                    <!--<input type="text" name="city" placeholder="You city name?" required="" class="form-control"/>
                    -->
                    <input type="text" id="getcity" autocomplete="off" name="city" placeholder="Your City" class="form-control" >
                     
                       <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>
                     
                   
                </div>
            </div>
         </div>
       
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">State</label>
                <div class="col-md-9">
                    <input type="text" id="state" name="state" placeholder="You State name?" required="" class="form-control"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>
                </div>
            </div>
        </div>
         <?php
         if(!empty($data))
         {
foreach ($data as $key) {
	?>
    <input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
                  
	<?php
}
}
?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Pincode</label>
                <div class="col-md-9">
                    <input type="text" id="pincode" name="pincode" placeholder="You Pincode?" required="" class="form-control"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdownpincode"></ul>
                </div>
            </div>
         </div>
       
         
        <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="submit" class="btn btn-primary btn-sm">Submit</button>
               
            </div>
        </div>
    </form>
    </div>
 </div>
</div>

 <div class="col-md-2">
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


	<?php
}
    ?>
</div>
<?php
*/
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
<?php
include 'footer.php'; 
?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/custom.js"></script>
        <!-- Latest compiled and minified CSS -->
       <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
</html>	