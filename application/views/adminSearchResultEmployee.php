
<html  lang="en">
	<head>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

						<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

							<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
							<script src="<?= base_url(); ?>js/jquery.min.js"></script>
								<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
										<!-- Custom Theme files -->
											<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
												<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
													<!----font-Awesome---->
														<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
															<!----font-Awesome---->
																
																<style>
																	input[type="text"]
																	{
																		margin-bottom:4%;
																	}
																	label
																	{
																		font-size: 16px;
																		font-weight: bold;
																	}
																	form
																	{
																		margin-top:5%;
																	}
																	button
																	{
																		background-color: white;
																		color:#2185c5;
																		padding:10px 15px;
																		border:1px solid #2185c5;
																		margin-top: 5%;
																	}
																	button:hover
																	{
																		background-color: #f15f43;
																		color:white;
																		border:1px solid #f15f43;
																	}
																		.navbarr{min-height:100px;
																			
																	margin-bottom:0;}
															
																
																</style>
																<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>-->
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>-->

	</head>
		<body style="background: #f5f5f0;">
			<nav class="navbarr navbar-default" role="navigation" style="height:10px;">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	      </div>
	    <!--/.navbar-header-->
	       <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
          <ul class="nav navbar-nav">
             <li><a href="<?= base_url(); ?>admin">Home</a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiter<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                 <li><a href="<?= base_url(); ?>AdminAgain/allrecruiter" >All recruiter</a></li>
                      
                         <li><a href="<?= base_url(); ?>admin/checkBoxmailAllrecruiter" >Send Cherckbox emails</a></li>
         
             </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                <li><a href="<?= base_url(); ?>AdminAgain/allemployer" >All employee</a></li>
                     
                        <li><a href="<?= base_url(); ?>admin/checkBoxmailAllemployee" >Send Cherckbox emails</a></li>
          
             </ul>
            </li>
            <li><a href="<?= base_url(); ?>admin/adduserview">Add user</a></li>
            <li><a href="<?= base_url();?>admin/logout" >Logout</a></li></ul>
         
      </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
				<div class="container">
					 <div class="single">
        <h2>Search Result</h2>

        	<div class="col-md-12">
        		 <?php
             $emaill='';
            
        foreach ($data as $value) {
          $emaill.=$value['employee_email'];
           $uid=$value['employee_uid'];
          
           $reports=$this->fetch->reportsFetchEmployee($uid);
          $experienceData=$this->fetch->fetchemployeexperience($uid);
              $qualificationData=$this->fetch->fetchemployequalification($uid);
              $eid=$uid;
              $referralcount=$this->fetch->YearlyReferralFetchEmployee($eid);

        //profile completeness

           if(empty($value['employee_city']))
              {
                $completed='12%';
              }
              elseif(!empty($value['employee_city']) && empty($value['employee_phone']))
              {
                $completed='24%';
              }
              elseif (!empty($value['employee_city']) && !empty($value['employee_phone']) && empty($qualificationData)) {
                
                $completed='36%';
              }
              elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && empty($value['employee_category']))
              {
                $completed='48%';
              }
              elseif (!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && empty($experienceData))
               {
                $completed='60%';
                
              }
              elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && !empty($experienceData) && empty($value['employee_resume']))
              {
                $completed='72%';

              }
              elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && !empty($experienceData) && !empty($value['employee_resume']) && empty($value['employee_profile_pic']))
              {
                $completed='84%';

              }
              elseif(!empty($value['employee_city']) && !empty($value['employee_phone']) && !empty($qualificationData) && !empty($value['employee_category']) && !empty($experienceData) && !empty($value['employee_resume']) && !empty($value['employee_profile_pic']))
              {
                $completed='100%';
              }
              
              
        ?>
        <div class="row">
        		   <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <?php
            if(empty($value['employee_name']))
            {
            ?>
            <th colspan="2"><h3 class="radius">Address Detail</h3></th>
            <?php
          }
          elseif (!empty($value['employee_name'])) {
            ?>
 <th colspan="2"><h3 class="radius"><?= base64_decode(base64_decode($value['employee_name'])); ?></h3></th>
            <?php
          }
            ?>
             <tr><td class="padding"><b>Profile Completeness:</b></td><td ><?php echo $completed; ?></td></tr>
            <tr><td class="padding"><b>City:</b></td><td><?= base64_decode(base64_decode($value['employee_city']));?><?=
              $value['employee_uid'];?>
            </td></tr>
            <tr><td class="padding"><b>State:</b></td><td><?= base64_decode(base64_decode($value['employee_state']));?></td></tr>
            <tr><td class="padding"><b>Country:</b></td><td><?= $value['employee_country'];?></td></tr>
          </table>
        </div>
        

        <div class="col-md-6">
         <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Contact Detail</h3></th>
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
            <div class="row">
          <div class="col-md-6">
           <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Category Detail</h3></th>
            <tr><td class="padding"><b>Category:</b></td><td><?= $category; ?></td></tr>
            <tr><td class="padding"><b>Designation:</b></td><td><?= $designation; ?></td></tr>
            
          </table>
        </div>


<?php
   if(!empty($value['employee_preffered_location']))
            {
              $preffered_location=base64_decode(base64_decode($value['employee_preffered_location']));

            }
            else
            {
              $preffered_location='NA';
            }
            ?>

<div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Experience</h3></th>
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
        </div>
      </div>
          <div class="col-md-offset-2 col-md-8">
            <table class="col_3 background" width="100%">
             <th colspan="6"><h3 class="radius">Education</h3></th>

         <?php
          if(empty($employeeQualification))
             {
              ?>
               <tr><td colspan="6" class="padding" style="text-align: center;">No result found</td></tr>
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
             <tr><td class="padding border"><?= $college1; ?></td><td class="padding"><?= $passed1; ?></td><td class="padding"><?= $degreename1; ?></td><td class="padding"><?= $uni1; ?></td><td class="padding"><?= $marks1; ?></td></tr>
             <?php
                }
              }
          
               ?>
                    </table>
        </div>
        

      


        


         <div class="col-md-offset-2 col-md-8">
  <table class="col_3 background" width="100%">
            <th colspan="3"><h3 class="radius">Experience Detail If any</h3></th>
            <tr><td class="padding"><b>Experience In</b></td><td><b>Company</b></td><td><b>Experinece</b></td></tr>

            <?php
                if(empty($employeeExperience))
                {
                  ?>
                     <tr><td colspan="6" class="padding border" style="text-align: center;">Data not available</td></tr><tr><td colspan="6" class="padding border" style="text-align: center;"> </td></tr>
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

           <div class="col-md-offset-2 col-md-8">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Referral Detail</h3></th>
         
            

           <tr><td class="padding"><b>My referral:</b></td><td><?=
$value['employee_referral'];
           ?></td></tr>
<?php
 if(!empty($referralcount))
           {
            foreach ($referralcount as $referralcountvalue1) {
            // foreach ($referralcountvalue1 as $referralcountvalue) {
               
            ?>
            <tr><td class="padding"><b>Total referral Clicks:</b></td><td><?php

echo $referralcountvalue1['referralEmployeeCount_clicks'];
            ?></td></tr>

            <?php

           // }
           }

             }
           ?>
         
          
          
        </table>
        </div>

        <div class="col-md-offset-2 col-md-8">
          <table class="col_3 background" width="100%">
            <th colspan="4"><h3 class="radius">Certification</h3></th>
          <?php
          $employeeCertification=$this->fetch->fetchCertificationEmployeeAdmin($uid);
          if(empty($employeeCertification))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($employeeCertification)) {
?>
<tr><td class="padding"> <b>Certificate Number</b></td><td class="padding"><b> Certificate Name</b></td><td class="padding"> <b>Certificate Provider</b></td><td class="padding"><b>Certificate Period</b> </td></tr>
<?php

            foreach ($employeeCertification as $employeeCertificationValue) {
              
           ?>
<tr><td class="padding"><?= $employeeCertificationValue['certificateNumber']; ?></td><td class="padding"> <?= base64_decode(base64_decode($employeeCertificationValue['certificateName'])); ?></td><td class="padding"><?= base64_decode(base64_decode($employeeCertificationValue['certificateProvider'])); ?></td><td class="padding"><?= base64_decode(base64_decode($employeeCertificationValue['certificatePeriod'])); ?> </td></tr>
          
           <?php
          }
        }
          ?>
          
          
        </table>
        </div>

<div class="row">
         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Reports</h3></th>
          <?php
          if(empty($reports))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($reports)) {
            foreach ($reports as $reportsvalue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url();?>admin/singleReport?id=<?= $reportsvalue['id']; ?>&&client=employee&&reporter=<?= $reportsvalue['rid'];?>&&user=<?= $reportsvalue['uid'];?>"><?=
$reportsvalue['description'];
           ?></a></td></tr>
           <?php
          }
        }
       
       
          ?>
          
          
        </table>
        </div>

         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Number of Reports to job</h3></th>
          <?php
          if(empty($jobtotalreports))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($jobtotalreports)) {
            foreach ($jobtotalreports as $reportsvalue) {        
           ?>
           <tr><td class="padding"><a href="<?= base_url(); ?>admin/singlejob?jid=<?= $reportsvalue['submitjob_id']; ?>&&userid=<?= $reportsvalue['uid']; ?>&&id=<?= $reportsvalue['id']; ?>&&activity=reportjob"><?=
$reportsvalue['submitjob_job_title'];
           ?></a></td></tr>
           <?php
          }
        }
        
       if($appliedjobs!=0)
       {
          ?>
          
          <tr><td style="float:right;" class="padding" title="total jobs"><?= $appliedjobs; ?></td></tr>
          <?php
        }
          ?>
        </table>
        </div>
</div>
<div class="row">
         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Number of Reports to recruiter</h3></th>
          <?php
          if(empty($totalreports))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($totalreports)) {
            foreach ($totalreports as $reportsvalue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url(); ?>admin/search?email=<?= $reportsvalue['recruiter_email']; ?>&&client=recruiter"><?=
      base64_decode(base64_decode($reportsvalue['recruiter_email']));
           ?></a></td></tr>
           <?php
          }
        }
       
       
          ?>
          
          
        </table>
        </div>

        <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Number of Reports to article</h3></th>
          <?php
          if(empty($articleReportTotal))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($articleReportTotal)) {
            foreach ($articleReportTotal as $reportsvalue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url();?>admin/singlearticle?reportid=<?= $reportsvalue['id'] ?>&&aid=<?= $reportsvalue['articleId']; ?>&&client=employee"><?=
base64_decode(base64_decode($reportsvalue['employee_articleHeading']));
           ?></a></td></tr>
           <?php
          }
        }
      
       
          ?>
          
          
        </table>
        </div>
</div>

<div class="row">
        <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Articles</h3></th>
          <?php
        
          if(empty($employeearticles))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($employeearticles)) {
            foreach ($employeearticles as $employeearticlesValue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url()?>admin/singlearticle?aid=<?=$employeearticlesValue['article_id']; ?>&&client=employee"><?=
base64_decode(base64_decode($employeearticlesValue['employee_articleBody']));
           ?></a></td></tr>
           <?php
          }
        }
          ?>
          
          
        </table>
        </div>

     
         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Applied jobs</h3></th>
          <?php
         
          if($appliedJobs=='null' || empty($appliedJobs))
          {
            ?>
            <tr><td class="padding">No job found.</td></tr>
            <?php
          }
          else{
            foreach ($appliedJobs as $appliedJobsValue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url() ?>admin/singlejob?jid=<?= $appliedJobsValue['submitjob_id']; ?>&&activity=appliedjobs"><?=

$appliedJobsValue['submitjob_job_title'];

           ?></a></td></tr>
           <?php
          }
        }
          ?>
          
          
        </table>
        </div>

</div>
        

         <div class="col-md-12">
          <table class="col_3 background" width="100%">
            <th colspan="6"><h3 class="radius">Portfolio</h3></th>
          <?php
          $employeePortfolio=$this->fetch->fetchPortfolioEmployeeAdmin($uid);
          if(empty($employeePortfolio))
          {
            ?>
            
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($employeePortfolio)) {
            ?>

             <tr><td class="padding">
               Project Name
             </td><td class="padding">Project Link</td><td class="padding">Project Start Date</td><td class="padding">Project End Date</td><td class="padding">Published Year</td><td class="padding">Description</td></tr>
            <?php
            foreach ($employeePortfolio as $employeePortfolioValue) {
              
           ?>

           <tr><td class="padding">
               <?= $employeePortfolioValue['projectName']; ?>
             </td><td class="padding"><?= $employeePortfolioValue['projectLink']; ?></td><td class="padding"><?= $employeePortfolioValue['projectStartDate']; ?></td><td class="padding"><?= $employeePortfolioValue['projectEndDate']; ?></td><td class="padding"><?= $employeePortfolioValue['publishedYear']; ?></td><td class="padding"><?= $employeePortfolioValue['description']; ?></td></tr>
           <?php
          }
        }
          ?>
          
          
        </table>
        </div>

        <div class="row">
  <div class="col-md-offset-3 col-md-6">
    <table class="col_3 background" width="100%">
      <th colspan="2"><h3 class="radius">Yearly referral</h3></th>
      <?php
      if(empty($yearlyreferral))
      {
        ?>
        <tr><td class="padding">Sorry no result found!</td></tr>
        <?php
      }
      else
      {
        ?>
        <tr><td class="padding"><strong>Year</strong></td><td class="padding"><strong>Clicks</strong></td></tr>
        <?php
        foreach ($yearlyreferral as $referralvalue) {
         
        
        ?>
        <tr><td class="padding"><?= $referralvalue['EmployeeReferralYearly_date']; ?></td><td class="padding"><?= $referralvalue['EmployeeReferralYearly_clicks']; ?></td></tr>
        <?php
      }
    }
      ?>
    </table>
  </div>
  
</div>
        <?php
    }
        ?>
 <div class="col-md-12 text-center" id="spamBtn" style="margin-bottom: 4%; display: none;"><a href="<?= base_url(); ?>admin/employeeSpamarticleMail"><button type="button" class="btn btn-primary">Spam article</button></a>
          <a href="<?= base_url(); ?>admin/employeeSpamreportMail"><button type="button" class="btn btn-danger">Spam reporting</button></a>
        <a href="<?= base_url(); ?>admin/employeeSpamfeedbackMail"><button type="button" class="btn btn-warning">Spam feedback</button></a>
        <button type="button" class="btn btn-warning" title="Close" id="closeSpam">X</button>
     </div>

        <div class="col-md-offset-4 col-md-4 alert alert-success" id="successmsg" style="display: none;"><strong>Email Successfully Sent.</strong></div>

 <div class="col-md-12" id="actionBtnLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
<div class="col-md-12 text-center" id="actionBtn" style="margin-bottom: 4%; display: none;"><!--<a href="<?= base_url(); ?>admin/recruiterNotificationMail?email=<?= $emaill; ?>">-->
  <table align="center">
    <tr><td>
<form method="post" id="notificationmail">
  <input type="hidden" name="nemail" value="<?= $emaill; ?>">
  <button type="button" id="notificationButton" class="btn btn-primary">Notification mail</button></form></td><td>
    <form method="post" id="invalidmail">
          <button type="button" class="btn btn-danger">Invalid activity mail</button></form></td><td>
            <form method="post" id="lowbalancemail">
      <button type="button" class="btn btn-warning">Low balance mail</button></form></td><td>
        <form method="post" id="deactivationmail">
      <button type="button" class="btn btn-danger">Deactivation mail</button></form></td><td>
        <form method="post" id="nspammail">
       <button type="button" class="btn btn-danger" id="spamMain">Spam mail</button>
        <button type="button" class="btn btn-danger" title="Close" id="closeBtns">X</button></form></td></tr></table></div>
          <div class="col-md-12 text-center" style="margin-bottom: 2%;"><button id="mainBtn" type="button" class="btn btn-primary">Send mail</button></div>
          
        	</div>
    </div>
				</div>

			
		</body>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
  $('document').ready(function(){
    $("#mainBtn").click(function(){
    $("#actionBtn").show(800);
     $("#mainBtn").hide(800);
  });


    $("#spamMain").click(function(){
    $("#spamBtn").show(800);
     $("#actionBtn").hide(800);
     $("#mainBtn").hide(800);
  });

    $("#closeSpam").click(function(){
    $("#spamBtn").hide(800);
     $("#actionBtn").show(800);
     $("#mainBtn").hide(800);
  });

     $("#closeBtns").click(function(){
 
     $("#actionBtn").hide(800);
     $("#mainBtn").show(800);
  });



   $("#notificationButton").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#notificationmail')[0];

    // Create an FormData object 
        var data = new FormData(form);

   

   $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('admin/employeeNotificationMail'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              
               $("#actionBtnLoading").hide(800);
               $("#successmsg").show(800);
              $("#actionBtn").show(800);
           

            },
            error: function (e) {
              alert(data);
            
     }
        });
   });

   //invalid mail

   $("#invalidButton").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#invalidmail')[0];

    // Create an FormData object 
        var data = new FormData(form);

   

   $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('admin/employeeInvalidactivityMail'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              
               $("#actionBtnLoading").hide(800);
               $("#successmsg").show(800);
              $("#actionBtn").show(800);
           

            },
            error: function (e) {
              alert(data);
            
     }
        });
   });

   //notification mail

   $("#lowbalanceButton").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#lowbalancemail')[0];

    // Create an FormData object 
        var data = new FormData(form);

   

   $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('admin/employeeLowbalanceMail'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              
               $("#actionBtnLoading").hide(800);
               $("#successmsg").show(800);
              $("#actionBtn").show(800);
           

            },
            error: function (e) {
              alert(data);
            
     }
        });
   });

   //notification mail

   $("#deactivationButton").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#deactivationmail')[0];

    // Create an FormData object 
        var data = new FormData(form);

   

   $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('admin/employeeDeactivationMail'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              
               $("#actionBtnLoading").hide(800);
               $("#successmsg").show(800);
              $("#actionBtn").show(800);
           

            },
            error: function (e) {
              alert(data);
            
     }
        });
   });

  });
</script>
</html>