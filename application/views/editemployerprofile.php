

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
?><title>Employee Profile update :: Get-job.online </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="buisness ideas, job opportunities, career, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" /><meta property="og:title" content="Find a job and get recruited online | Get Job Online">
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
<!----font-Awesome-->

<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

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
<style>
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
	         <a class="navbar-brand" href="<?= base_url(); ?>Dashboard"><img src="<?= base_url(); ?>logo/getjob.png" alt="logo"/></a>
	    </div>
	    <!--/.navbar-header-->
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
             <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="indian flag"/></a></li>
          </ul>
          
          <?php
         }
         elseif($countryCookie=='India')
         {
          $cookieValue1='Canada';
          $cookie1='CA';
          ?>
           <ul style="list-style-type:none; margin-top:8px;">
             <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
          </ul>
          <?php
         }
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
		    <p><form action="<?= base_url();?>EmployeeSearch" method="post">
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
			 <input type="text" class="text" placeholder="Location">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
      </form>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container margintop2">
    <ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Edit Profile</span></li></ul>
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
        foreach ($data as $value) {
          
        
        ?>

         <div class="col-md-12 textalign">
           <a href="<?= base_url(); ?>EmployeeChangePassword?email=<?= $value['employee_email']; ?>"><button class="btn regularButton" style="margin-bottom: 2%;">Change Password</button></a>
</div>
      
        <div class="col-md-offset-2 col-md-4">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Address<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="2">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent;" >
            <img src="<?= base_url(); ?>icons/editWhite24.png" alt="icon"></button></form></font></h3></th>
            <tr><td class="padding"><b>City:</b></td><td><?= base64_decode(base64_decode($value['employee_city']));?></td></tr>
            <tr><td class="padding"><b>State:</b></td><td><?= base64_decode(base64_decode($value['employee_state']));?></td></tr>
            <tr><td class="padding"><b>Country:</b></td><td><?= $value['employee_country'];?></td></tr>
          </table>
        </div>

        <div class="col-md-4">
          <div class="col_3 background">
        
            <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Contact<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="3">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent;" >
            <img src="<?= base_url(); ?>icons/editWhite24.png" alt="icon"></button></form></font></h3></th>
            <?php
            if(!empty($value['employee_phone']))
            {
              $contact=base64_decode(base64_decode($value['employee_phone']));

            }
            else
            {
              $contact='NA';
            }



            if(!empty($value['employee_birthdate']))
            {
              $birthdate=base64_decode(base64_decode($value['employee_birthdate']));

            }
            else
            {
              $birthdate='NA';
            }
            ?>
            <tr><td class="padding"><b>Contact:</b></td><td><?= $contact; ?></td></tr>
            <tr><td class="padding"><b>Date of Birth:</b></td><td><?= $birthdate; ?></td></tr>
            
          </table>
          </div>
        </div>
     
     <div class="col-md-offset-2 col-md-8">
           <table class="col_3 background" width="100%">
             <th colspan="6"><h3 class="radius">Education<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="4">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent;" >
         <img src="<?= base_url(); ?>icons/editWhite24.png" alt="icon"></button></form></font></h3></th>

         <?php
          if(empty($employeeQualification))
             {
              ?>
               <tr><td colspan="6" class="padding" style="text-align: center;"><b>You have required to fill data this table. Click link below to fill data now</b></td></tr><tr><td colspan="6" class="padding" style="text-align: center;">  <a href="<?= base_url(); ?>EmployeeRegistrationStep4?id=<?= $value['employee_email'];?>&& status=edit">Add now>></a></td></tr>
              <?php
             }
             else
             {
         ?>
             <tr><td class="padding"><b>Admission</b></td><td class="padding"><b>Passed</b></td><td class="padding"><b>Degreename</b></td><td class="padding"><b>University</b></td><td class="padding"><b>Marks</b></td></tr>

             <?php
            
             
             foreach ($employeeQualification as $Qualificationvalue) {
             

             
                $college1=base64_decode(base64_decode($Qualificationvalue['admission']));
                 $passed1=base64_decode(base64_decode($Qualificationvalue['passed']));
                
                   $degreename1=base64_decode(base64_decode($Qualificationvalue['degreeName']));
                    $uni1=base64_decode(base64_decode($Qualificationvalue['university']));
                     $marks1=base64_decode(base64_decode($Qualificationvalue['marks']));

             ?>
             <!-- for qualification 1-->
             <tr><td class="padding border"><?= $college1; ?></td><td class="padding border"><?= $passed1; ?></td><td class="padding border"><?= $degreename1; ?></td><td class="padding border"><?= $uni1; ?></td><td class="padding border"><?= $marks1.'%'; ?></td></tr>
             <?php
                }
              }
          
               ?>
                    </table>
        </div>

        <?php
            if(!empty($value['employee_category']))
            {
              $category=base64_decode(base64_decode($value['employee_category']));

            }
            else
            {
              $category='NA';
            }



            if(!empty($value['employee_designation']))
            {
              $designation=base64_decode(base64_decode($value['employee_designation']));

            }
            else
            {
              $designation='NA';
            }
            ?>
        <div class="col-md-offset-2 col-md-4">
           <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Category<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="5">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent;" >
           <img src="<?= base_url(); ?>icons/editWhite24.png" alt="icon"></button></form></font></h3></th>
            <tr><td class="padding"><b>Category:</b></td><td><?= $category; ?></td></tr>
            <tr><td class="padding"><b>Designation:</b></td><td><?= $designation; ?></td></tr>
            
          </table>
        </div>


<?php
            /*if(!empty($value['employee_fresher_experience']))
            {
              $fresher_experience=base64_decode(base64_decode($value['employee_fresher_experience']));

            }
            else
            {
              $fresher_experience='NA';
            }*/





            if(!empty($value['employee_preffered_location']))
            {
              $preeffered_locatioin=base64_decode(base64_decode($value['employee_preffered_location']));

            }
            else
            {
              $preffered_location='NA';
            }
            ?>
       <!--<div class="col-md-4">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Experience<font style="float:right; cursor: pointer;">
              <form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="6">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent;" >
            <img src="<?= base_url(); ?>icons/editWhite24.png" alt="icon"></button></form></font></h3></th>
              <?php
                if(empty($employeeExperience))
                {
                  $fresher_experience='NA';
                            
              ?>
              
            <tr><td class="padding"><b>Fresher/Experience:</b></td><td><?= $fresher_experience; ?></td></tr>
            <?php
}
else
{
 foreach ($sum as $sumValue) {
   
    ?>
     <tr><td class="padding"><b>Fresher/Experience:</b></td><td><?php echo $sumValue['experience']; ?></td></tr>
     <?php
   }
  }
 

            ?>
            <tr><td class="padding"><b>Preferred Location:</b></td><td><?= $preffered_location; ?></td></tr>
            
          </table>
        </div>-->

         <div class="col-md-offset-2 col-md-8">
          <table class="col_3 background" width="100%">
            <th colspan="3"><h3 class="radius">Experience Detail If any<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="6">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent;" >
      <img src="<?= base_url(); ?>icons/editWhite24.png" alt="icon"></button></form></font></h3></th>
            <tr><td class="padding"><b>Experience In</b></td><td><b>Company</b></td><td><b>Experinece</b></td></tr>

            <?php
                if(empty($employeeExperience))
                {
                  ?>
                     <tr><td colspan="6" class="padding border" style="text-align: center;">Data not available</td></tr><tr><td colspan="6" class="padding border" style="text-align: center;"> <form action="<?= base_url(); ?>EmployeePendingRegistrationSteps" method="post">
              <input type="hidden" name="id" value="<?= $value['employee_email']; ?>">
              <input type="hidden" name="step" value="6">
                    <input type="hidden" name="status" value="edit">
              <button type="submit" style="border:none; background-color: transparent; color:#d3404e;" >
          Add Now>></button></form></td></tr>
                  <?php
                }

                   if(!empty($employeeExperience))
                {

                  foreach ($employeeExperience as $experienceValue) {
                    

                   $experience=$experienceValue['experience'];
                 $company=$experienceValue['company'];
                  $experienceIn=$experienceValue['experienceIn'];
                 
                    if(!empty($experience) && !empty($company))
                    {
                  ?>

                     <tr><td class="padding border"><?= $experience.' Months'; ?></td>
                    <td class="padding border"><?= base64_decode(base64_decode($company)); ?></td>
                     <td class="padding border"><?= base64_decode(base64_decode($experienceIn)); ?></td></tr>
                  <?php

                }
                }
              }
?>
          
          </table>
        </div>
        <?php
      }
        ?>
    <!--<div class="single col-md-8 ">  



	   <div class="form-container padding background" itemscope itemtype="http://schema.org/Person">
        <h2>Edit Profile</h2>
        <?php
        	foreach ($data as $value) {
        		
        ?>
        <form action="<?= base_url(); ?>employee/update" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Full Name</label>
                <div class="col-md-9" itemprop="additionalName">
                    <input type="text"  name="name" required="" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['employee_name'])); ?>" disabled />
                </div>
            </div>
         </div>
         
        
        
       
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9" itemprop="email">
                    <input type="text" name="email" required="" value="<?= base64_decode(base64_decode($value['employee_email'])); ?>" class="form-control input-sm" disabled/>
                </div>
            </div>
        </div>
       
         <!--<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                    <select name="country" class="form-control input-sm" required="" disabled>
                        <option value="India">India</option>
                    </select>
                </div>
            </div>
        </div>-->
       
        <!--<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">City</label>
                <div class="col-md-9">
                    <input type="text" name="city" value="<?= base64_decode(base64_decode($value['employee_city'])); ?>" class="form-control input-sm" required=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">State</label>
                <div class="col-md-9">
                    <input type="text" name="state" value="<?= base64_decode(base64_decode($value['employee_state'])); ?>" class="form-control input-sm" required=""/>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Full Address</label>
                <div class="col-md-9 sm_1" itemprop="address">
                   <textarea cols="77" rows="6" name="address" onfocus="this.value='';"  required="" onblur="if (this.value == '') {this.value = '';}"> <?= base64_decode(base64_decode($value['employee_address'])); ?></textarea>
                    
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Pin Code</label>
                <div class="col-md-9">
                    <input type="text" name="pincode" value="<?= $value['employee_pincode']; ?>" class="form-control input-sm" required=""/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Contact</label>
                <div class="col-md-9">
                    <input type="text" name="contact" value="<?= base64_decode(base64_decode($value['employee_phone'])); ?>" class="form-control input-sm" required=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Date of Birth</label>
                <div class="col-md-9">
                    <input type="date" name="birthdate" class="form-control input-sm" required="" />
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Highest Qualification</label>
                <div class="col-md-9">
                    <select name="qualification" class="form-control input-sm" required="">
                        <option value="">Select</option>
                        <option value="+2">+2</option>
                        <option value="Bachelors Degree">Bachelors Degree</option>
                        <option value="Masters Degree">Masters Degree</option>
                        <option value="Ph.D">Ph.D</option>
                         
                    </select>
                    
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Grade Points</label>
                <div class="col-md-9">
                    <select name="grade" class="form-control input-sm" required="">
                        <option value="">Select</option>
                        <option value="First Division">First Division</option>
                        <option value="Second Division">Second Division</option>
                        <option value="Third Division">Third Division</option>
                        
                    </select>
                    
                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Fresher/Experience</label>
                <div class="col-md-9">
                    <select name="category" id="selectt" class="form-control input-sm" onchange="showw()" required="">
                        <option value=""  >Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="Experience">Experience</option>
                        
                    </select>
                    
                </div>
            </div>
        </div>
        <div id="showexperience">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
               <!-- <div class="col-md-3">
                    <input type="text" name="experience1" class="form-control input-sm" placeholder="Experience in Months" value="<?= base64_decode(base64_decode($value['experience1'])); ?>"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company1" class="form-control input-sm" placeholder="Company Name" value="<?= base64_decode(base64_decode($value['company1'])); ?>"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in1" id="experience_in" class="form-control input-sm">
                        <option value="">Experience in</option>
                                 <optgroup label="Airline">
                                      <option value="Aircraft Dispatcher">Aircraft Dispatcher</option>
                                        <option value="Aircraft Mechanic">Aircraft Mechanic</option>
                                          <option value="Airline Pilot">Airline Pilot</option>
                                            <option value="Flight Attendent">Flight Attendent</option>

                                             <optgroup label="Arts">
                                      <option value="Actor">Actor</option>
                                        <option value="Architecture">Architecture</option>
                                          <option value="Art Appriaser">Art Appriaser</option>
                                            <option value="Art Auctionar">Art Auctionar</option>
                                             <option value="Artist">Artist</option>
                                                 <option value="Museum Jobs">Museum Jobs</option>
                                                 <option value="Music Conductor">Music Conductor</option>

                                                  <optgroup label="Business">
                                                     <option value="Accountant">Accountant</option>
                                        <option value="Administrator Assistant">Administrator Assistant</option>
                                          <option value="Advertising">Advertising</option>
                                            <option value="Consultant">Consultant</option>
                                             <option value="Financial Advisior">Financial Advisior</option>
                                                 <option value="Fund Raiser">Fund Raiser</option>
                                                 <option value="Govt. jobs">Govt. jobs</option>
                                                 <option value="Human Resources">Human Resources</option>
                                        <option value="Insurance Agent">Insurance Agent</option>
                                          <option value="Investment banker">Investment banker</option>
                                            <option value="Lawyer">Lawyer</option>
                                             <option value="Management">Management</option>
                                                 <option value="Non Profit Job">Non Profit Job</option>

                                                 <optgroup label="Media">
                                                     <option value="Book Publishing">Book Publishing</option>
                                        <option value="Freelance Editor">Freelance Editor</option>
                                          <option value="Freelance Writer">Freelance Writer</option>
                                            <option value="Public Relations">Public Relations</option>
                                             <option value="Web Developer">Web Developer</option>
                                                 <option value="Writer/Editor">Writer/Editor</option>
                                                
                                                      <optgroup label="Medical">
                                                     <option value="Doctor">Doctor</option>
                                        <option value="Emergency medical Services">Emergency medical Services</option>
                                          <option value="Nurse">Nurse</option>
                                            <option value="Paramedic">Paramedic</option>
                                             <option value="Pharmacist">Pharmacist</option>
                                                 <option value="Psychologist">Psychologist</option>
                                                     <option value="Social Worker">Social Worker</option>
                                                 <option value="Veterinarian">Veterinarian</option>

                                                  <optgroup label="Teaching">
                                                     <option value="Athletic Trainer">Athletic Trainer</option>
                                        <option value="Bank Teller">Bank Teller</option>
                                          <option value="Call Center">Call Center</option>
                                            <option value="Funeral Director">Funeral Director</option>
                                             <option value="Hair Stylist">Hair Stylist</option>
                                                 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                                     <option value="Retail">Retail</option>
                                                 <option value="Sales">Sales</option>   
                                                  <option value="Ski instructor">Ski instructor</option>
                                             <option value="Waiter">Waiter</option>
                                                 <option value="Wedding Planner">Wedding Planner</option>

                                                     <optgroup label="Teaching">
                                                     <option value="Carrier Counselor">Carrier Counselor</option>
                                        <option value="School jobs">School jobs</option>
                                          <option value="Substitute Teacher">Substitute Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                             <option value="Teaching Abroad">Teaching Abroad</option>
                                                 <option value="Teaching Online">Teaching Online</option>
                                                    
                                                                    <optgroup label="Technology">
                                                     <option value="App Developer">App Developer</option>
                                        <option value="Computer programmer">Computer programmer</option>
                                          <option value="Database">Database</option>
                                            <option value="Administrator">Administrator</option>
                                             <option value="">Programmer</option>
                                                 <option value="Software Developer">Software Developer</option>                         
                     </select>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
             <!--   <div class="col-md-3">
                    <input type="text" name="experience2" class="form-control input-sm" placeholder="Experience in Months" value="<?= base64_decode(base64_decode($value['experience2'])); ?>"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company2" class="form-control input-sm" placeholder="Company Name" value="<?=base64_decode(base64_decode( $value['company2'])); ?>"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in2" id="experience_in" class="form-control input-sm">
                        <option value="">Experience in</option>
                                 <optgroup label="Airline">
                                      <option value="Aircraft Dispatcher">Aircraft Dispatcher</option>
                                        <option value="Aircraft Mechanic">Aircraft Mechanic</option>
                                          <option value="Airline Pilot">Airline Pilot</option>
                                            <option value="Flight Attendent">Flight Attendent</option>

                                             <optgroup label="Arts">
                                      <option value="Actor">Actor</option>
                                        <option value="Architecture">Architecture</option>
                                          <option value="Art Appriaser">Art Appriaser</option>
                                            <option value="Art Auctionar">Art Auctionar</option>
                                             <option value="Artist">Artist</option>
                                                 <option value="Museum Jobs">Museum Jobs</option>
                                                 <option value="Music Conductor">Music Conductor</option>

                                                  <optgroup label="Business">
                                                     <option value="Accountant">Accountant</option>
                                        <option value="Administrator Assistant">Administrator Assistant</option>
                                          <option value="Advertising">Advertising</option>
                                            <option value="Consultant">Consultant</option>
                                             <option value="Financial Advisior">Financial Advisior</option>
                                                 <option value="Fund Raiser">Fund Raiser</option>
                                                 <option value="Govt. jobs">Govt. jobs</option>
                                                 <option value="Human Resources">Human Resources</option>
                                        <option value="Insurance Agent">Insurance Agent</option>
                                          <option value="Investment banker">Investment banker</option>
                                            <option value="Lawyer">Lawyer</option>
                                             <option value="Management">Management</option>
                                                 <option value="Non Profit Job">Non Profit Job</option>

                                                 <optgroup label="Media">
                                                     <option value="Book Publishing">Book Publishing</option>
                                        <option value="Freelance Editor">Freelance Editor</option>
                                          <option value="Freelance Writer">Freelance Writer</option>
                                            <option value="Public Relations">Public Relations</option>
                                             <option value="Web Developer">Web Developer</option>
                                                 <option value="Writer/Editor">Writer/Editor</option>
                                                
                                                      <optgroup label="Medical">
                                                     <option value="Doctor">Doctor</option>
                                        <option value="Emergency medical Services">Emergency medical Services</option>
                                          <option value="Nurse">Nurse</option>
                                            <option value="Paramedic">Paramedic</option>
                                             <option value="Pharmacist">Pharmacist</option>
                                                 <option value="Psychologist">Psychologist</option>
                                                     <option value="Social Worker">Social Worker</option>
                                                 <option value="Veterinarian">Veterinarian</option>

                                                  <optgroup label="Teaching">
                                                     <option value="Athletic Trainer">Athletic Trainer</option>
                                        <option value="Bank Teller">Bank Teller</option>
                                          <option value="Call Center">Call Center</option>
                                            <option value="Funeral Director">Funeral Director</option>
                                             <option value="Hair Stylist">Hair Stylist</option>
                                                 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                                     <option value="Retail">Retail</option>
                                                 <option value="Sales">Sales</option>   
                                                  <option value="Ski instructor">Ski instructor</option>
                                             <option value="Waiter">Waiter</option>
                                                 <option value="Wedding Planner">Wedding Planner</option>

                                                     <optgroup label="Teaching">
                                                     <option value="Carrier Counselor">Carrier Counselor</option>
                                        <option value="School jobs">School jobs</option>
                                          <option value="Substitute Teacher">Substitute Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                             <option value="Teaching Abroad">Teaching Abroad</option>
                                                 <option value="Teaching Online">Teaching Online</option>
                                                    
                                                                    <optgroup label="Technology">
                                                     <option value="App Developer">App Developer</option>
                                        <option value="Computer programmer">Computer programmer</option>
                                          <option value="Database">Database</option>
                                            <option value="Administrator">Administrator</option>
                                             <option value="">Programmer</option>
                                                 <option value="Software Developer">Software Developer</option>                         
                     </select>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
            <!--  <div class="col-md-3">
                    <input type="text" name="experience3" class="form-control input-sm" placeholder="Experience in Months" value="<?= base64_decode(base64_decode($value['experience3'])); ?>"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company3" class="form-control input-sm"  placeholder="Company Name" value="<?= base64_decode(base64_decode($value['company3'])); ?>"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in3" id="experience_in" class="form-control input-sm" >
                        <option value="">Experience in</option>
                                 <optgroup label="Airline">
                                      <option value="Aircraft Dispatcher">Aircraft Dispatcher</option>
                                        <option value="Aircraft Mechanic">Aircraft Mechanic</option>
                                          <option value="Airline Pilot">Airline Pilot</option>
                                            <option value="Flight Attendent">Flight Attendent</option>

                                             <optgroup label="Arts">
                                      <option value="Actor">Actor</option>
                                        <option value="Architecture">Architecture</option>
                                          <option value="Art Appriaser">Art Appriaser</option>
                                            <option value="Art Auctionar">Art Auctionar</option>
                                             <option value="Artist">Artist</option>
                                                 <option value="Museum Jobs">Museum Jobs</option>
                                                 <option value="Music Conductor">Music Conductor</option>

                                                  <optgroup label="Business">
                                                     <option value="Accountant">Accountant</option>
                                        <option value="Administrator Assistant">Administrator Assistant</option>
                                          <option value="Advertising">Advertising</option>
                                            <option value="Consultant">Consultant</option>
                                             <option value="Financial Advisior">Financial Advisior</option>
                                                 <option value="Fund Raiser">Fund Raiser</option>
                                                 <option value="Govt. jobs">Govt. jobs</option>
                                                 <option value="Human Resources">Human Resources</option>
                                        <option value="Insurance Agent">Insurance Agent</option>
                                          <option value="Investment banker">Investment banker</option>
                                            <option value="Lawyer">Lawyer</option>
                                             <option value="Management">Management</option>
                                                 <option value="Non Profit Job">Non Profit Job</option>

                                                 <optgroup label="Media">
                                                     <option value="Book Publishing">Book Publishing</option>
                                        <option value="Freelance Editor">Freelance Editor</option>
                                          <option value="Freelance Writer">Freelance Writer</option>
                                            <option value="Public Relations">Public Relations</option>
                                             <option value="Web Developer">Web Developer</option>
                                                 <option value="Writer/Editor">Writer/Editor</option>
                                                
                                                      <optgroup label="Medical">
                                                     <option value="Doctor">Doctor</option>
                                        <option value="Emergency medical Services">Emergency medical Services</option>
                                          <option value="Nurse">Nurse</option>
                                            <option value="Paramedic">Paramedic</option>
                                             <option value="Pharmacist">Pharmacist</option>
                                                 <option value="Psychologist">Psychologist</option>
                                                     <option value="Social Worker">Social Worker</option>
                                                 <option value="Veterinarian">Veterinarian</option>

                                                  <optgroup label="Teaching">
                                                     <option value="Athletic Trainer">Athletic Trainer</option>
                                        <option value="Bank Teller">Bank Teller</option>
                                          <option value="Call Center">Call Center</option>
                                            <option value="Funeral Director">Funeral Director</option>
                                             <option value="Hair Stylist">Hair Stylist</option>
                                                 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                                     <option value="Retail">Retail</option>
                                                 <option value="Sales">Sales</option>   
                                                  <option value="Ski instructor">Ski instructor</option>
                                             <option value="Waiter">Waiter</option>
                                                 <option value="Wedding Planner">Wedding Planner</option>

                                                     <optgroup label="Teaching">
                                                     <option value="Carrier Counselor">Carrier Counselor</option>
                                        <option value="School jobs">School jobs</option>
                                          <option value="Substitute Teacher">Substitute Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                             <option value="Teaching Abroad">Teaching Abroad</option>
                                                 <option value="Teaching Online">Teaching Online</option>
                                                    
                                                                    <optgroup label="Technology">
                                                     <option value="App Developer">App Developer</option>
                                        <option value="Computer programmer">Computer programmer</option>
                                          <option value="Database">Database</option>
                                            <option value="Administrator">Administrator</option>
                                             <option value="">Programmer</option>
                                                 <option value="Software Developer">Software Developer</option>                         
                     </select>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <!--<div class="col-md-3">
                    <input type="text" name="experience4" class="form-control input-sm"  placeholder="Experience in Months" value="<?= base64_decode(base64_decode($value['experience4'])); ?>"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company4" class="form-control input-sm" placeholder="Company Name" value="<?= base64_decode(base64_decode($value['company4'])); ?>"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in4" id="experience_in" class="form-control input-sm" >
                        <option value="">Experience in</option>
                                 <optgroup label="Airline">
                                      <option value="Aircraft Dispatcher">Aircraft Dispatcher</option>
                                        <option value="Aircraft Mechanic">Aircraft Mechanic</option>
                                          <option value="Airline Pilot">Airline Pilot</option>
                                            <option value="Flight Attendent">Flight Attendent</option>

                                             <optgroup label="Arts">
                                      <option value="Actor">Actor</option>
                                        <option value="Architecture">Architecture</option>
                                          <option value="Art Appriaser">Art Appriaser</option>
                                            <option value="Art Auctionar">Art Auctionar</option>
                                             <option value="Artist">Artist</option>
                                                 <option value="Museum Jobs">Museum Jobs</option>
                                                 <option value="Music Conductor">Music Conductor</option>

                                                  <optgroup label="Business">
                                                     <option value="Accountant">Accountant</option>
                                        <option value="Administrator Assistant">Administrator Assistant</option>
                                          <option value="Advertising">Advertising</option>
                                            <option value="Consultant">Consultant</option>
                                             <option value="Financial Advisior">Financial Advisior</option>
                                                 <option value="Fund Raiser">Fund Raiser</option>
                                                 <option value="Govt. jobs">Govt. jobs</option>
                                                 <option value="Human Resources">Human Resources</option>
                                        <option value="Insurance Agent">Insurance Agent</option>
                                          <option value="Investment banker">Investment banker</option>
                                            <option value="Lawyer">Lawyer</option>
                                             <option value="Management">Management</option>
                                                 <option value="Non Profit Job">Non Profit Job</option>

                                                 <optgroup label="Media">
                                                     <option value="Book Publishing">Book Publishing</option>
                                        <option value="Freelance Editor">Freelance Editor</option>
                                          <option value="Freelance Writer">Freelance Writer</option>
                                            <option value="Public Relations">Public Relations</option>
                                             <option value="Web Developer">Web Developer</option>
                                                 <option value="Writer/Editor">Writer/Editor</option>
                                                
                                                      <optgroup label="Medical">
                                                     <option value="Doctor">Doctor</option>
                                        <option value="Emergency medical Services">Emergency medical Services</option>
                                          <option value="Nurse">Nurse</option>
                                            <option value="Paramedic">Paramedic</option>
                                             <option value="Pharmacist">Pharmacist</option>
                                                 <option value="Psychologist">Psychologist</option>
                                                     <option value="Social Worker">Social Worker</option>
                                                 <option value="Veterinarian">Veterinarian</option>

                                                  <optgroup label="Teaching">
                                                     <option value="Athletic Trainer">Athletic Trainer</option>
                                        <option value="Bank Teller">Bank Teller</option>
                                          <option value="Call Center">Call Center</option>
                                            <option value="Funeral Director">Funeral Director</option>
                                             <option value="Hair Stylist">Hair Stylist</option>
                                                 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                                     <option value="Retail">Retail</option>
                                                 <option value="Sales">Sales</option>   
                                                  <option value="Ski instructor">Ski instructor</option>
                                             <option value="Waiter">Waiter</option>
                                                 <option value="Wedding Planner">Wedding Planner</option>

                                                     <optgroup label="Teaching">
                                                     <option value="Carrier Counselor">Carrier Counselor</option>
                                        <option value="School jobs">School jobs</option>
                                          <option value="Substitute Teacher">Substitute Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                             <option value="Teaching Abroad">Teaching Abroad</option>
                                                 <option value="Teaching Online">Teaching Online</option>
                                                    
                                                                    <optgroup label="Technology">
                                                     <option value="App Developer">App Developer</option>
                                        <option value="Computer programmer">Computer programmer</option>
                                          <option value="Database">Database</option>
                                            <option value="Administrator">Administrator</option>
                                             <option value="">Programmer</option>
                                                 <option value="Software Developer">Software Developer</option>                         
                     </select>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
               <!-- <div class="col-md-3">
                    <input type="text" name="experience5" class="form-control input-sm"  placeholder="Experience in Months" value="<?= base64_decode(base64_decode($value['experience5'])); ?>"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company5" class="form-control input-sm" placeholder="Company Name" value="<?= base64_decode(base64_decode($value['company5'])); ?>"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in5" id="experience_in" class="form-control input-sm" >
                        <option value="">Experience in</option>
                                 <optgroup label="Airline">
                                      <option value="Aircraft Dispatcher">Aircraft Dispatcher</option>
                                        <option value="Aircraft Mechanic">Aircraft Mechanic</option>
                                          <option value="Airline Pilot">Airline Pilot</option>
                                            <option value="Flight Attendent">Flight Attendent</option>

                                             <optgroup label="Arts">
                                      <option value="Actor">Actor</option>
                                        <option value="Architecture">Architecture</option>
                                          <option value="Art Appriaser">Art Appriaser</option>
                                            <option value="Art Auctionar">Art Auctionar</option>
                                             <option value="Artist">Artist</option>
                                                 <option value="Museum Jobs">Museum Jobs</option>
                                                 <option value="Music Conductor">Music Conductor</option>

                                                  <optgroup label="Business">
                                                     <option value="Accountant">Accountant</option>
                                        <option value="Administrator Assistant">Administrator Assistant</option>
                                          <option value="Advertising">Advertising</option>
                                            <option value="Consultant">Consultant</option>
                                             <option value="Financial Advisior">Financial Advisior</option>
                                                 <option value="Fund Raiser">Fund Raiser</option>
                                                 <option value="Govt. jobs">Govt. jobs</option>
                                                 <option value="Human Resources">Human Resources</option>
                                        <option value="Insurance Agent">Insurance Agent</option>
                                          <option value="Investment banker">Investment banker</option>
                                            <option value="Lawyer">Lawyer</option>
                                             <option value="Management">Management</option>
                                                 <option value="Non Profit Job">Non Profit Job</option>

                                                 <optgroup label="Media">
                                                     <option value="Book Publishing">Book Publishing</option>
                                        <option value="Freelance Editor">Freelance Editor</option>
                                          <option value="Freelance Writer">Freelance Writer</option>
                                            <option value="Public Relations">Public Relations</option>
                                             <option value="Web Developer">Web Developer</option>
                                                 <option value="Writer/Editor">Writer/Editor</option>
                                                
                                                      <optgroup label="Medical">
                                                     <option value="Doctor">Doctor</option>
                                        <option value="Emergency medical Services">Emergency medical Services</option>
                                          <option value="Nurse">Nurse</option>
                                            <option value="Paramedic">Paramedic</option>
                                             <option value="Pharmacist">Pharmacist</option>
                                                 <option value="Psychologist">Psychologist</option>
                                                     <option value="Social Worker">Social Worker</option>
                                                 <option value="Veterinarian">Veterinarian</option>

                                                  <optgroup label="Teaching">
                                                     <option value="Athletic Trainer">Athletic Trainer</option>
                                        <option value="Bank Teller">Bank Teller</option>
                                          <option value="Call Center">Call Center</option>
                                            <option value="Funeral Director">Funeral Director</option>
                                             <option value="Hair Stylist">Hair Stylist</option>
                                                 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                                     <option value="Retail">Retail</option>
                                                 <option value="Sales">Sales</option>   
                                                  <option value="Ski instructor">Ski instructor</option>
                                             <option value="Waiter">Waiter</option>
                                                 <option value="Wedding Planner">Wedding Planner</option>

                                                     <optgroup label="Teaching">
                                                     <option value="Carrier Counselor">Carrier Counselor</option>
                                        <option value="School jobs">School jobs</option>
                                          <option value="Substitute Teacher">Substitute Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                             <option value="Teaching Abroad">Teaching Abroad</option>
                                                 <option value="Teaching Online">Teaching Online</option>
                                                    
                                                                    <optgroup label="Technology">
                                                     <option value="App Developer">App Developer</option>
                                        <option value="Computer programmer">Computer programmer</option>
                                          <option value="Database">Database</option>
                                            <option value="Administrator">Administrator</option>
                                             <option value="">Programmer</option>
                                                 <option value="Software Developer">Software Developer</option>                         
                     </select>
                    
               
                </div>
                 
            </div>
        </div>
      </div>

       
        <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="submit" value="Update" class="btn btn-primary btn-sm">Update</button>
                <a href="<?= base_url(); ?>"  id="submit" class="btn btn-primary btn-sm" style="text-decoration:none;">Back to home</a>
                <h4 style="color:red; display:none;" id="match">Passowrd do not match.Because of that submit button is disabled.</h4>
            </div>
        </div>
    </form>
    <?php
}
    ?>
    </div>
 </div>--><!--
 <div class="col-md-2">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

        </div>-->

</div>

<div class="container">
<div class="row refer_earn" style="margin-top:2%;">
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
<script src="<?= base_url(); ?>js/paginationjquery.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
</html>	
