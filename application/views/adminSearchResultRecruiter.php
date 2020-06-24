

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
            <li><a href="<?= base_url();?>admin/logout" >Logout</a></li>
         
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
          $emaill.=$value['recruiter_email'];
           $uid=$value['recruiter_id'];
           $reports=$this->fetch->reportsFetchRecruiter($uid);
         $singleid=$uid;
           $submittedJobs=$this->fetch->featutredrecruiter2($singleid);
            $rid=$uid;
           $referralcount=$this->fetch->YearlyReferralFetchRecruiter($rid);
           
           //profile completeness

           $established=$value['recruiter_established'];
              $category=$value['recruiter_category'];
                $state=$value['recruiter_state'];
                
                if(empty($established))
                {
                  $completed='20%';
                }
                elseif(!empty($established) && empty($category))
                {
                  $completed='40%';
                }
                elseif(!empty($established) && !empty($category) && empty($state))
                {
                  $completed='60%';
                }
                 elseif(!empty($established) && !empty($category) && !empty($state)  && empty($value['recruiter_logo']))
                {
                  $completed='80%';
                }
                elseif(!empty($established) && !empty($category) && !empty($state) && !empty($value['recruiter_logo']))
                {
                  $completed='100%';
                }

        ?>
        <div class="row">
        		  <div class="col-md-6">
           <table class="col_3 background" width="100%">
            <?php
            if(empty($value['recruiter_company_name']))
            {
            ?>
            <th colspan="2"><h3 class="radius">Company description</h3></th>
            <?php
          }
          elseif (!empty($value['recruiter_company_name'])) {
            ?>

             <th colspan="2"><h3 class="radius"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></h3></th>
            <?php


          }

            ?>
          <?php
          if(!empty($value['recruiter_established']))
          {
            $established=base64_decode(base64_decode($value['recruiter_established']));
          }
          else
          {
            $established='NA';
          }

          if(!empty($value['recruiter_website']))
          {
            $website=base64_decode(base64_decode($value['recruiter_website']));
          }
          else
          {
            $website='NA';
          }

          if(!empty($value['recruiter_employee_strength']))
          {
            $strength=base64_decode(base64_decode($value['recruiter_employee_strength']));
          }
          else
          {
            $strength='NA';
          }
          ?>
           <tr><td class="padding"><b>Profile completeness</b></td><td><?php echo $completed; ?>
             <?= $value['recruiter_id']; ?>
           </td></tr>
          <tr><td class="padding"><b>Year of establishment</b></td><td><?= $established; ?></td></tr>
          <tr><td class="padding"><b>Website</b></td><td><?= $website; ?></td></tr>
          <tr><td class="padding"><b>Employee Strangth</b></td><td><?= $strength; ?></td></tr>
        </table>
        </div>
<?php
          if(!empty($value['recruiter_category']))
          {
            $category=base64_decode(base64_decode($value['recruiter_category']));
          }
          else
          {
            $category='NA';
          }

          if(!empty($value['recruiter_contact']))
          {
            $contact=base64_decode(base64_decode($value['recruiter_contact']));
          }
          else
          {
            $contact='NA';
          }

          if(!empty($value['recruiter_description']))
          {
            $description=base64_decode(base64_decode($value['recruiter_description']));
          }
          else
          {
            $description='NA';
          }
          ?>
        <div class="col-md-6">
            <table class="col_3 background" width="100%"> 
            <th colspan="2"><h3 class="radius">Company description</h3></th>
          
          <tr><td class="padding"><b>Category</b></td><td><?= $category; ?></td></tr>
          <tr><td class="padding"><b>Contact</b></td><td><?= $contact; ?></td></tr>
          <tr><td class="padding"><b>Description</b></td><td><?= $description; ?></td></tr>
        </table>
        </div>
      </div>

        <?php
          if(!empty($value['recruiter_state']))
          {
            $state=base64_decode(base64_decode($value['recruiter_state']));
          }
          else
          {
            $state='NA';
          }

          if(!empty($value['recruiter_city']))
          {
            $city=base64_decode(base64_decode($value['recruiter_city']));
          }
          else
          {
            $city='NA';
          }

          if(!empty($value['recruiter_address']))
          {
            $address=base64_decode(base64_decode($value['recruiter_address']));
          }
          else
          {
            $address='NA';
          }
          ?>
<div class="row">
         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Address</h3></th>
          
          <tr><td class="padding"><b>state</b></td><td><?= $state; ?></td></tr>
          <tr><td class="padding"><b>City</b></td><td><?= $city; ?></td></tr>
          <tr><td class="padding"><b>Full Address</b></td><td><?= $address; ?></td></tr>
        </table>
        </div>

         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Referral Detail</h3></th>
         
            

           <tr><td class="padding"><b>My referral:</b></td><td><?=
$value['recruiter_referral'];
           ?></td></tr>
<?php
 if(!empty($referralcount))
           {
            foreach ($referralcount as $referralcountvalue1) {
            // foreach ($referralcountvalue1 as $referralcountvalue) {
               
            ?>
            <tr><td class="padding"><b>Total referral Clicks:</b></td><td><?php

echo $referralcountvalue1['referralRecruiterCount_clicks'];
            ?></td></tr>

            <?php

           // }
           }

             }
             else
             {
              ?>
 <tr><td class="padding"><b>Total referral Clicks:</b></td><td>0s</td></tr>
              <?php
             }
           ?>
         
          
          
        </table>
        </div>
      </div>
<div class="row">
        <div class="col-md-6">
          <table class="col_3 background" width="100%">

            <th colspan="2"><h3 class="radius">Submitted Jobs</h3></th>
            <?php
            if($submittedJobs=='null' || empty($submittedJobs))
            {
            ?>
          <tr><td class="padding" colspan="2"><b>Sorry no result found!</b></td></tr>
          <?php
        }
        else
        {
          foreach ($submittedJobs as $submittedJobsValue) {
            
          ?>
             <tr><td class="padding" colspan="2"><b><a href="<?= base_url(); ?>admin/singlejob?jid=<?= $submittedJobsValue['submitjob_id']; ?>&&activity=appliedjobs"><?= $submittedJobsValue['submitjob_job_title']; ?></a></b></td></tr>
          <?php
        }
      }
         ?>

        </table>
        </div>

        <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Reports</h3></th>
          <?php
          if(empty($report))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($report)) {
            foreach ($report as $reportsvalue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url();?>admin/singleReport?id=<?= $reportsvalue['id']; ?>&&client=recruiter&&reporter=<?= $reportsvalue['uid'];?>&&user=<?= $reportsvalue['rid'];?>"><?=
$reportsvalue['description'];
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
            <th><h3 class="radius">Report to article </h3></th>
          <?php

          if(empty($articleReportTotal))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($articleReportTotal)) {
            foreach ($articleReportTotal as $articleReportTotalvalue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url();?>admin/articlereport?aid=<?= $articleReportTotalvalue['recruiter_articleId']; ?>&&client=recruiter&&id=<?= $articleReportTotalvalue['id']; ?>"><?=
base64_decode(base64_decode($articleReportTotalvalue['recruiter_articleHeading']));
           ?></a></td></tr>

           <?php
          }
        }
          ?>
          
          
        </table>
        </div>



         <div class="col-md-6">
          <table class="col_3 background" width="100%">
            <th><h3 class="radius">Articles</h3></th>
          <?php
          $recruiterArticles=$this->fetch->fetchArticlesRecruiter($uid);
          if(empty($recruiterArticles))
          {
            ?>
            <tr><td class="padding">No result found.</td></tr>
            <?php
          }
          elseif (!empty($recruiterArticles)) {
            foreach ($recruiterArticles as $recruiterArticlesValue) {
              
           ?>

           <tr><td class="padding"><a href="<?= base_url()?>admin/singlearticle?aid=<?=$recruiterArticlesValue['recruiter_articleId']; ?>&&client=recruiter"><?=
base64_decode(base64_decode($recruiterArticlesValue['recruiter_articleBody']));
           ?></a></td></tr>
           <?php
          }
        }
          ?>
          
          
        </table>
        </div>
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
        <tr><td class="padding"><?= $referralvalue['referralRecruiteryearly_date']; ?></td><td class="padding"><?= $referralvalue['referralRecruiteryearly_count']; ?></td></tr>
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
    //show loading when click on send mail action
     $("#notificationButton").click(function(){
    $("#actionBtn").hide(800);
     $("#actionBtnLoading").show(800);
  });


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
  


//notification mail

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
            url: "<?php echo base_url('admin/recruiterNotificationMail'); ?>",
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
            url: "<?php echo base_url('admin/recruiterInvalidactivityMail'); ?>",
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
            url: "<?php echo base_url('admin/recruiterrecruiterLowbalanceMail'); ?>",
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
            url: "<?php echo base_url('admin/recruiterDeactivationMail'); ?>",
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