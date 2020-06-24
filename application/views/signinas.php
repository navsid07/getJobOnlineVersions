

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
include 'googleadvertisement.php';
$employeId=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');
?><title>Online job portal for job seekers and job providers | Log in into your account :: Get-job.online</title>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, career consultants near me" />
<meta name="description" content="
job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.
" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!--<font-Awesome-->
<!--jquery for show forget password-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".buttonn").click(function(){
    	$("#loginquery").slideToggle();
    	$("#forgetpassword").slideToggle();
       
    });
});
</script>
<style>
	#paginationfeaturedemployee a {
	border-radius: 50%;
	background-color: #d3404e;
	color:white;
		border:1px solid #d3404e;
		padding-left: 5px;
		padding-right: 5px;
		margin-left: 5px;
		margin-right: 5px;
	}

	#paginationfeaturedemployee a:active {
	
	color: #f15f43;
	}
	#paginationrecentlyjoined a {
	border-radius: 50%;
	background-color: #d3404e;
	color:white;
		border:1px solid #d3404e;
		padding-left: 5px;
		padding-right: 5px;
		margin-left: 5px;
		margin-right: 5px;
	}

	#paginationrecentlyjoined a:active {
	
	color: #d3404e;
	}
	
</style>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

</head>
<body style="background-color:#f5f5f0; margin: 0;">
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
	        	if(empty($employeId) && empty($recruiterId) && empty($employeeSession) && empty($recruiterSession))
{

                include('GetJobHeaderLi.php');
 
	       }
	      
	        	elseif(!empty($recruiterId) || !empty($recruiterSession))
	        	{
	        	
	        	include('RecruiterHeaderLi.php');
		   }
		   
		   elseif(!empty($employeId) || !empty($employeeSession))
		   {
		   
		   		include('EmployeeHeaderLi.php');

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
	   <div class="col-md-4">

	   	<?php
	   	$employee=$this->session->userdata('employe_id');
	   	$recruiter=$this->session->userdata('recruiter_id');
	   	if(!empty($employee))
	   	{
	   	?>
	   	  <div class="col_3 background">
	   	  	<h3 class="radius">Todays Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<?php
	   	  		if(empty($jobs))

	   	  		{
	   	  			echo "<li>Sorry no result found.</li>";
	   	  		}
	   	  		else
	   	  		{
	   	  		foreach ($jobs as $value) {
	   	  		
	   	  		?>
	   	  		<li><a href="<?= base_url();?>EmployeeJobDetail?uid=<?= $value['submitjob_id']; ?>"><?= $value['submitjob_job_title']; ?></a></li>
	   	  		<?php
	   	  	}
	   	  }
	   	 
	   	  		?>						
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3 background">
	   	  	<h3 class="radius">Jobs by Category</h3>
	   	  	<ul class="list_2">
	   	  		<?php

	   	  		if(empty($job))
	   	  		{
	   	  			echo "<li>Sorry No result found.</li>";

	   	  		}
	   	  		else
	   	  		{
	   	  		foreach ($jobs as $value) {
	   	  			
	   	  		?>
	   	  		<li><a href="<?= base_url();?>CategorySearch?category=<?= $value['submitjob_category']; ?>"><?= $value['submitjob_category']; ?></a></li>
	   	  			<?php
	   	  		}
	   	  	}
	   	  			?>						
	   	  	</ul>
	   	  </div>
	   	  <?php
	   	}
	   	elseif (!empty($recruiter)) {
	   		?>
				
		<div class="col_3 background">

	   	  	<h3 class="radius">Featured Employee</h3>

	   	  	<?php
	   	  	if(empty($checkfeaturedemployee))
	   	  	{
	   	  		?>
<ul class="list_1">
	<li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li>
</ul>
	   	  		<?php
	   	  	}
	   	  	else
	   	  	{
	   	  	?>
<ul class="list_1" id="featuredemployee">
	<ubody>
	</ubody>
</ul>
	<div style='margin-top: 10px; text-align:center;' id='paginationfeaturedemployee'></div>
	   	  	<?php
	   	  }
	   	  	?>

	   	  </div>


	   	  <!-- pagination jquery for today jobs-->
				<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
				
	<script type='text/javascript'>
		$(document).ready(function(){

			// Detect pagination click
			$('#paginationfeaturedemployee').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/pagination/loadRecordfeaturedemployee/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						$('#paginationfeaturedemployee').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#featuredemployee ubody').empty();
				for(index in result){
					var employeename = result[index].employee_name;
					var country = result[index].employee_city;
					var country1 = atob(country);
					var country2 = atob(country1);
					var emp1= atob(employeename);
					var emp2 =atob(emp1);
					var link = result[index].employee_uid;
					sno+=1;
					
					var li = "<li style='text-align:center;'><a href='jobdetail?uid="+ link +"' style='text-decoration:none;'><font size='3.5em'>"+ emp2 + ' - ' + country2+"</a></li>";
					
					$('#featuredemployee ubody').append(li);
					
					//$('#postsListtodayjobs ubody').append(div);
					
				}
			}
		});
	</script>
	<!--pagination jquery end-->

	   	  <div class="col_3 background">

	   	  	<h3 class="radius">Recently Joined</h3>
	   	  <?php
	   	  if(empty($checkrecentlyjoined))
	   	  {
	   	  	?>
<ul class="list_2"><li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li></ul>
	   	  	<?php
	   	  }
	   	  else
	   	  {

	   	 
	   	  ?>
	   	  	<ul class="list_2" id="recentlyjoined">
					
<ubody></ubody>
	   	  	</ul>
	   	  	<div style='margin-top: 10px; text-align:center;' id='paginationrecentlyjoined'></div>
	<?php
}
	?>
	   	  	  	  <!-- pagination jquery for today jobs-->
					
	<script type='text/javascript'>
		$(document).ready(function(){

			// Detect pagination click
			$('#paginationrecentlyjoined').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/pagination/loadRecordrecentlyjoined/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						$('#paginationrecentlyjoined').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#recentlyjoined ubody').empty();
				for(index in result){
					var employeename = result[index].employee_name;
					var country = result[index].employee_city;
					var country1 = atob(country);
					var country2 = atob(country1);
					var emp1= atob(employeename);
					var emp2 =atob(emp1);
					var link = result[index].employee_uid;
					sno+=1;
					
					var li = "<li style='text-align:center;'><a href='jobdetail?uid="+ link +"' style='text-decoration:none;'><font size='3.5em'>"+ emp2 + ' - ' + country2+"</a></li>";
					
					$('#recentlyjoined ubody').append(li);
					
					//$('#postsListtodayjobs ubody').append(div);
					
				}
			}
		});
	</script>
	<!--pagination jquery end-->

	   	  </div>

			<?php
	   	}
	   	  ?>
	   	 <div class="widget background">
	   	  	<?php
	   	  	foreach ($voting as $value) {
	   	  		
	   	  	?>

	        <h3 class="radius"><?= $value['title']; ?></h3>
    	        <div class="widget-content" id="votingg"> 
    	        	<form  method="post" id="voting_form">
    	        	

    	        		<input type="hidden" name="title" value="<?= $value['title']; ?>" >
    	        		<input type="hidden" name="qid" value="<?= $value['id']; ?>" >
                 <div class="seeking-answer">
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input  name="answer"  value="<?= $value['id1']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><?= $value['option1']; ?></span>
		    			</label>
		    		</span>
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input name="answer"  value="<?= $value['id2']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><?= $value['option2']; ?></span>
		    			</label>
		    		</span>
			        <span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input name="answer"  value="<?= $value['id3']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><?= $value['option3']; ?></span>
		    			</label>
		    		</span>
		    		<div class="seeking_vote">
		    			<button type="button" class="seeking-vote-button"  onclick="branddetails()">Vote</button>
		    	
		    		
		    		 
		    		</div>
			     </div>
			 </form>
    	       </div>
    	       <div class="alert alert-success" style="display:none;" id="success_msggg"></div>
    	       <?php
    	   }
    	       ?>
    	       		<?php
	   	  	foreach ($voting as $value) {
	   	  		
	   	  	
    	   }
    	       ?>
    	</div>

	 </div>
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                    <form action="<?= base_url();?>EmployeeLoginQuery" method="post" id="loginquery">
                        <div class="section-title" style="text-align:center; font-size:20px;">
                           <?php
                         if($thiss=='recruiter' && $signup=='')
                          {
                           
                          
                           foreach ($data as $value) {
                           	
                           ?>
                            <p>You are Currently logged in as <b><a href="<?= base_url(); ?>Dashboard"><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></a>. </b> <a href="<?= base_url();?>RecruiterLogout">Not You? Signout</a></p>
                            <?php
                        }
                   }
                    elseif($thiss=='recruiter' && $signup=='asemployee')
                           {
                        
                           ?>
                            <p>You are Currently logged in as a <b><a href="<?= base_url(); ?>Dashboard">Recruiter</a>. </b> If you wish to continue as employee Please <a href="<?= base_url(); ?>EmployeeLogin?msg=signinas">Signin</a> with different email.</p>
                            <?php
                       
                         	
                    }

                  elseif($thiss=='employee' && $signup=='')
                  
                    
                           {
                           
                           foreach ($data as $value) {
                           	
                           ?>
                            <p>You are Currently logged in as <b><a href="<?= base_url(); ?>Dashboard"><?= base64_decode(base64_decode($value['employee_name'])); ?></a>. </b> <a href="<?= base_url(); ?>EmployeeLogout">Not You? Signout</a></p>
                            <?php
                        }
                   }
                   elseif($thiss=='employee' && $signup=='asrecruiter')
                           {
                         
                           	
                           ?>
                            <p>You are Currently logged in as a <b><a href="<?= base_url(); ?>Dashboard">Employee</a>. </b> If you wish to continue as recruiter Please <a href="<?= base_url(); ?>RecruiterLogin?msg=signinas">Signin</a> with different email.</p>
                            <?php
                        
                        	
                  }


                            ?>
			                        </div>
                       
                     
                  


                </div>
         </div>
   </div>





  <div class="clearfix"> </div>
 </div>

</div>
<div class="container">
<div class="row" style="margin-top:2%;">
	 <div class="col_3 message background">
	 	<h3 class="radius">Refer & Earn</h3>
	 	<div class="pading">
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
 <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
</div>
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
</html>	