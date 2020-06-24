<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

$recruiteridd=$this->session->userdata('recruiter_id');
	$recruiterCookie=get_cookie('sessionCookieRecruiter');
	if(!empty($recruiteridd) && empty($recruiterCookie))
	{
		$recruiterid=$recruiteridd;
	}
	elseif(empty($recruiteridd) && !empty($recruiterCookie))
	{
		$recruiterid=$recruiterCookie;
	}
	elseif(!empty($recruiteridd) && !empty($recruiterCookie))
	{
		$recruiterid=$recruiteridd;
	}
	


	$employeeCookie=get_cookie('sessionCookieEmployee');
	$employeidd=$this->session->userdata('employe_id');

	if(!empty($employeidd) && empty($employeeCookie))
	{
		$employeid=$employeidd;
	}
	elseif(empty($employeidd) && !empty($employeeCookie))
	{
		$employeid=$employeeCookie;
	}
	elseif(!empty($employeidd) && !empty($employeeCookie))
	{
		$employeid=$employeidd;
	}




/*$chart_data=" ";
foreach ($morisData as $row ) {
  
  $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
  }
  $chart_data = substr($chart_data, 0, -2);

*/
// print_r($monthlychartdataEmployee);
  if(!empty($employeid))
  	{
  		$countEmployeeMonthlyChart=count($monthlychartdataEmployee);
  		$monthlyChartData="";
		foreach ($monthlychartdataEmployee as $monthlyrow )
		{
  
 			$monthlyChartData .= "{ datee:'".$monthlyrow["referralEmployeeCount_date"]."', count:".$monthlyrow["referralEmployeeCount_clicks"]."}, ";
  		}
 		//$monthlyChartData = substr($monthlyChartData, 0, -2);
 		//print_r($monthly_chart_data);
  		$countEmployeeYearlyChart=count($yearlyreferralemployee);
  		$yearlyEmployee="";
  		foreach ($yearlyreferralemployee as $yearlyyrow )
		{
  
 			$yearlyEmployee .= "{ YearlyDate:'".$yearlyyrow["referralEmployeeCount_year"]."', YearlyCount:".$yearlyyrow["referralEmployeeCount_clicks"]."}, ";
  		}

	}
elseif (!empty($recruiterid)) {
		
		$countRecruiterMonthlyChart=count($monthlychartdataRecruiter);
	 $monthly_chart_data_recruiter=" ";
foreach ($monthlychartdataRecruiter as $monthlyrowrecruiter ) {
  
  $monthly_chart_data_recruiter .= "{ RecruiterDate:'".$monthlyrowrecruiter["referralRecruiterCount_date"]."', RecruiterCount:".$monthlyrowrecruiter["referralRecruiterCount_clicks"]."}, ";
  }
 $monthly_chart_data_recruiter = substr($monthly_chart_data_recruiter, 0, -2);

 	$countRecruiterYearlyChart=count($yearlyreferral);
 $yearlyRecruiter=" ";
 foreach ($yearlyreferral as $yearlyvalue)
  	{
  		$yearlyRecruiter .= "{ years:'".$yearlyvalue["referralRecruiterCount_year"]."', YearsCount:".$yearlyvalue["referralRecruiterCount_clicks"]."}, ";
 	}
 	$yearlyRecruiter = substr($yearlyRecruiter, 0, -2);
}
?><!DOCTYPE HTML>
<html  lang="en">
<head><?php

	


	$referralsession=$this->session->userdata('referralsession');
	if(!empty($referralsession))
	{
		$this->session->unset_userdata('referralsession');
	}

include 'fav.php';
?><title> Profile Detail| Get-job.online</title>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job recruitment" />
<meta name="description" content="job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.online job portal for job providers and job seekers." />
<script src="<?= base_url() ?>/js/jquery-3.3.1.js"></script>
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>

  

<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>


 <link rel="stylesheet" href="<?= base_url(); ?>morris/css/moris.css">
 <!--
    <script src="<?= base_url(); ?>morris/js/jquery.min.js"></script> -->
    <script src="<?= base_url(); ?>morris/js/raphael.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/morris.min.js"></script> 
  



  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->

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

#chart > svg {width: 100% !important;}

@media only screen and (min-width: 500px) and (max-width: 830px) {
 #chart
{
	width:650px;
}
#MonthlyChart
{
	width:650px;
}
.chartbar
{
	width:450px;
}
.chartbar1
{
	width:450px;
}
    }

@media only screen and (min-width: 280px) and (max-width: 430px) {
 #chart
{
	width:320px;
}
#MonthlyChart
{
	width:300px;
}
.chartbar
{
	width:320px;
}
.chartbar1
{
	width:300px;
}
    }
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
#editbutton
{
	font-size: 15px;
	
border:none;
padding:5px 10px;
background:#d3404e;
border: 1px solid #d3404e;
color:white;
margin-left: 40%;
  margin-bottom: 4%;
border-radius: 5px;
}
#editbutton:hover
{

background:#fff;
color: #d3404e;

}
.editbutton
{
	font-size: 15px;
	
border:none;
padding:5px 10px;
background:#f15f43;
color:white;

  margin-bottom: 4%;
border-radius: 5px;
}
.editbutton:hover
{

background:#2185c5;

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
.complete:hover
{
text-decoration: none;
color:red;
}


       
        .light {
        	background-color: #fff;
        }
        .dark 
        {
        	background-color: #f2f2f2;
        }

        table {
            border-collapse: collapse;
        }
        td {
        width:52.5px;
        padding: 7px;
        text-align:center;
        
        }


/* The Modal (background) */
.modal {

    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    bottom:5px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
/* Modal Content */
.top
{
	background-color: #f15f43;
	padding:10px;
	color:white;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
.close{
	color:white;
}
.modal-content {
	border-radius: 6px;
    
    margin: auto;
    
    /*border: 1px solid #888;*/
    width: 50%;
    color:#f15f43;
    /*border:3px solid white;*/
}
.content{
	padding:5%;
}
.modalbutton
{
	background-color: white;
	color:#f15f43;
	padding:5px 10px;
	border:none;
	border:2px solid #f15f43;
	border-radius: 5px;

}
.modalbutton:hover
{
	background-color: #f15f43;
	color:white;

}

.postjob{
	margin-top:5px;
	background-color: #d3404e;
	color:white;
	padding:5px;
	border-radius: 4px;
}
.postjob:hover{
	text-decoration: none;
	color:white;
	background-color: #d53110;
	
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



@media (min-width: 481px) and (max-width: 767px) {
  
  #MonthlyChartRecruiter,#noDataAvailable
{
	width:100%;
	height:30%;
}
  
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
  #MonthlyChartRecruiter,#noDataAvailable
{
	width:100%;
	height:30%;
}
  
  @media (min-width: 100px) and (max-width: 321px) {
  
  #MonthlyChartRecruiter,#noDataAvailable
{
	width:100%;
	height:30%;
}

 @media (min-width: 1px) and (max-width: 101px) {
  
  #MonthlyChartRecruiter,#noDataAvailable
{
	width:100%;
	height:30%;
}
  
  
}
</style>
</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1444175122384053&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--
<div data-href="https://jobtest.get-job.online/employee" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://jobtest.get-job.online/employee
&title=This+is+the+title+parameter
&description=This+is+the+description+parameter
&quote=hello how are you
&caption=This+is+the+caption+parameter" class="fb-xfbml-parse-ignore">Share</a></div>-->
	
<!-- second modal-->
	<div id="myModal" class="modal">


  <!-- Modal content -->
  <div class="modal-content">
  	<div class="top">
  		Please Note!<span class="close" style="color:white;">&times;</span>
  	</div>
  	<div class="content">
  	<p> You are about to transfer your earnings to your wallet. Please confirm the transfer. As you wouldn't be able to cash out the earnings you have made.</p>
  	<?php
  	if (!empty($employeid)) {
				foreach ($total as $totalvalue) {
														 $compl=$totalvalue['totalreferrale_completed'];
														 $transfered=$totalvalue['totalreferrale_transfered']; 
									 $earning=$compl*25;
									
									 if($finalearning==0)
									 {
?>
<p style="text-align:center;margin-top:3%; color:red;">Sorry! you don't have any pending earning to transfer your wallet.</p>
<?php
									 }
									 else
									 {

  	?>
  	<p style="text-align:center;margin-top:3%;">
		<form method="post" action="<?= base_url(); ?>EmployeeEarningTransferred" style="text-align:center;">
			<input type="hidden" name="earning" value="<?= $finalearning*25; ?>" >
		
  		<button type="submit" class="modalbutton">Transfer Now</button></p>
  		</form> 
<?php
}
}
}
?>
</div>
  	
  </div>
 
</div>

<!-- modal for recruiter-->

<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  	<div class="top">
  		Please Note!<span class="close" style="color:white;">&times;</span>
  	</div>
  	<div class="content">

  	<p> You are about to transfer your earnings to your wallet. Please confirm the transfer. As you wouldn't be able to cash out the earnings you have made.</p>
  	<?php
  	
  	if (!empty($recruiterid)) {

				foreach ($total as $totalvalue) {
														  $compl=$totalvalue['totalreferralr_completed'];
														  $transfered=$totalvalue['totalreferralr_transfered'];
														  
									 $earning=$compl*50;
									 $finalearning=$compl-$transfered;

									
									 if($finalearning==0)
									 {
?>
<p style="text-align:center;margin-top:3%; color:red;">Sorry! you don't have any pending earning to transfer your wallet.</p>
<?php
									 }
									 else
									 {

  	?>
  	<p style="text-align:center; margin-top:3%;">
		<form method="post" action="<?= base_url(); ?>RecruiterEarningTransferred" style="text-align:center;">
			<input type="hidden" name="earning" value="<?= $finalearning*50; ?>" >
		
  		<button type="submit" class="modalbutton">Transfer Now</button></p>
  		</form> 
<?php
}
}
}

?>
</div>
  	
  </div>
 
</div>
<?php
$employeId=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');
?>
<!-- end recruiter modal coding-->
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
	        	if(!empty($recruiterId) || !empty($recruiterSession))
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
		<!--<div id="search_wrapper1">
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
		</div>-->
   </div> 
</div>	
<div class="container">
	<?php
if(empty($recruiterCookie) && !empty($employeeCookie))
{
	?>

<ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home</a> </li><li><a href="<?= base_url();?>">Employee</a></li><li>Referral Dashboard</li></ul>
<?php
}
elseif (empty($employeeCookie) && !empty($recruiterCookie)) {
	?>
<ul id="breadcrumbs"><li><a href="base_url();">Home</a> </li><li><a href="<?= base_url();?>">Recruiter</a></li><li>Referral Dashboard</li></ul>
	<?php
}
?>

	<div class="row" style="margin-bottom:5%;">
<?php 
					if($insertpaytm= $this->session->flashdata('insertpaytm')):

			    $insertpaytm_class=$this->session->flashdata('insertpaytm_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12" style="margin-top:4%;">
			          <div class="alert alert-dismissible <?php echo $insertpaytm_class; ?>">
			  
			  <?php echo $insertpaytm ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			


			//if earnings successfully transfered into recruiter's acount
					if($recruiterpayment= $this->session->flashdata('recruiterpayment')):

			    $recruiterpayment_class=$this->session->flashdata('recruiterpayment_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12" style="margin-top:4%;">
			          <div class="alert alert-dismissible <?php echo $recruiterpayment_class; ?>">
			  
			  <?php echo $recruiterpayment ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;

			//if earnings successfully transfered into employee's acount
			if($employeepayment= $this->session->flashdata('employeepayment')):

			    $employeepayment_class=$this->session->flashdata('employeepayment_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12" style="margin-top:4%;">
			          <div class="alert alert-dismissible <?php echo $employeepayment_class; ?>">
			  
			  <?php echo $employeepayment ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
		<div class="single">  
       <h2>Referral Dashboard</h2>
       


<div class="col-md-9 single_right background" style="margin-bottom: 20px;">
	      <div class="but_list">
	       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			
			  <li role="presentation" class="active"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">My Referral Link</a></li>
		
		   </ul>
		<div id="myTabContent" class="tab-content">
		  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		   <!-- shortlisted candidates-->
		
			 <div class="tab_grid">
			    <div class="jobs-item with-thumb">

				</div>
			 </div>
			


		  </div>
		

		  <!-- recruit candidates-->
	
		  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		  	
		    <div class="tab_grid">
			    <div class="jobs-item with-thumb">
				   <div class="jobs_right">
				   		<div class="col-md-12">
				   			<?php foreach ($data as $value) {
				   				if($thiss=='recruiter')
				   				{
				   				$vvalue= base_url()."ReferralLink?src=".$value['recruiter_referral']."&loginas=recruiter";
				   				}
				   				elseif ($thiss=='employee') {
				   					$vvalue= base_url()."ReferralLink?src=".$value['employee_referral']."&loginas=employee";
				   				}
				   			?>
							<input type="text"  style="background-color:white; width:100%; border:none; font-weight:bold; text-align:center; padding:5px; border:1px solid #e6e6e6; border-radius:3px;" value="<?= $vvalue; ?>" id="myInput"  >
							<?php
						}
							?>
      				 	</div>
      				 	<div class="row" style="margin-top:5%;">
      				 		<?php foreach ($data as $value) {
				   				# code...
				   			?>
      				 	<div class="col-md-offset-2 col-md-3"  >
				   			<button class="btn regularButton" onclick="myFunction()"><image src="<?= base_url(); ?>icons/copyy.png" alt="icon"></img> Copy</button>
      				 		</div>
      				 		<div class="col-md-3"><button class="regularButton" id="editbutton"><image src="<?= base_url(); ?>icons/sharee.png" alt="icon"></img> Share</button>
      				 		</div><div class="col-md-3"> <table style="color:white; text-align:center" >
				<?php
				if($thiss=='recruiter')
				   				{
				   					?>
				   					<tr><td id="step1" colspan="4" style="cursor:pointer; display:none;">
				   						Step 1.) Copy the link given below so that people can reach to our website through your referral link.
				   					</td></tr><tr><td id="step2" colspan="4" style="cursor:pointer; display:none;">
				   						<b> <?= base_url(); ?>RecruiterRegistrationStep1?src=<?= $value['recruiter_referral']; ?>"></b>
</td></tr>
<tr><td id="step3" colspan="4" style="cursor:pointer; display:none;">
				   						Step 2.) Go to the Different social medias. The most popular choices aregiven below.
</td></tr>
						<tr><td title="Share on Twitter" id="icon" style="cursor:pointer; display:none;"><a href="https://twitter.com" target="_blank"><img src="<?= base_url(); ?>icons/twitter30.png" alt="twitter logo"></a></td>
						<td title="Share on Facebook" id="icon1" style="cursor:pointer; display:none;">  <a   href="https://www.facebook.com" target="_blank">
                <img src="<?= base_url(); ?>icons/facebook30.png" alt="facebook logo"></a></td>
						
						<td title="Share on linkedin" id="icon3" style="cursor:pointer; display:none;">
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online/RecruiterRegistrationStep1?src=<?= $value['recruiter_referral'];?>&title=Title&summary=Summary&source=GetJobOnline" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHWSURBVFhH7ZfPSwJBFMdXqUOd+kGHCKJD/QtdMqND/0Ed6k/o0h9RpkuBRT+oSwQldIu6RefoUNCumUEZJBiG0S2VMn3NW2dkdlF3GXciYj/wZeXNzHtf3gzujuLh4RphPeiLaCGiXRcVUkI3Y7SCM3xhfdkf1ir+iA6ui+T1hbUlWsoGVR+XZoSJ5MfO04qNQdd1E7gsUidKSzaGTIpZF3auxmF0/wG6owlTvBVhHVqyMVYzHStxSLwVAXn9KEH/xp0pqaiEzGBHeGZP0qakohIy00W2Jks6ghRKZRjZuTclFZWQGdTAZhLmTtOuGUEJmcHDO0xMMGGnMI5PPo7zMN6uxmFwKwm9a80Pu5CZ4GHK2CLG/FnGiOOTZzKWAvUyB/mvMo0AXGcLRpzPxyTVzBUpXI/P7woEDh5r+ZikmmHgIbdykcnX8jFJNXObK8LQdhLaVB2mj5+NjjDwV9+6+QxJNTNDDPDr9vR3OlIF/6/4calmJsg8ft3C+QsdqYJ5+HGpZqzF7MY9MwzPDNP/N9NDXohTR0814UsQ4/jk4ziPX2c37tTM3/kGViJa4FduB6QOrdgcozuyDJG85DK3SEs5hNyfsJWWG2Frwq1x2hEPD1sU5QeFL2rvMEU+MgAAAABJRU5ErkJggg==" alt="icon"></a></td>
				</tr>
<?php
}
elseif ($thiss=='employee') {

?>
<tr><td id="step1" style="cursor:pointer; display:none;">
				   						Step 1.) Copy the link given below so that people can reach to our website through your referral link.
				   					</td></tr><tr><td colspan="4" id="step2" style="cursor:pointer; display:none;">
				   						<b> <?= base_url(); ?>RecruiterRegistrationStep1?src=<?= $value['employee_referral']; ?></b>
</td></tr>
<tr><td id="step3" colspan="4" style="cursor:pointer; display:none;">
				   						Step 2.) Go to the Different social medias. The most popular choices aregiven below.
</td></tr>
<tr><td title="Share on Twitter" colspan="4" id="icon" style="cursor:pointer; display:none;"><a href="https://twitter.com" target="_blank"><img src="<?= base_url(); ?>icons/twitter30.png" alt="twitter logo"></a></td>
						<td title="Share on Facebook" id="icon1" style="cursor:pointer; display:none;">  <a   href="https://www.facebook.com" target="_blank">
                <img src="<?= base_url(); ?>icons/facebook30.png" alt="facebook logo"></a></td>
						
						<td title="Share on linkedin" id="icon3" style="cursor:pointer; display:none;">
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online/employee?src=<?= $value['employee_referral'];?>&title=Title&summary=Summary&source=GetJobOnline" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHWSURBVFhH7ZfPSwJBFMdXqUOd+kGHCKJD/QtdMqND/0Ed6k/o0h9RpkuBRT+oSwQldIu6RefoUNCumUEZJBiG0S2VMn3NW2dkdlF3GXciYj/wZeXNzHtf3gzujuLh4RphPeiLaCGiXRcVUkI3Y7SCM3xhfdkf1ir+iA6ui+T1hbUlWsoGVR+XZoSJ5MfO04qNQdd1E7gsUidKSzaGTIpZF3auxmF0/wG6owlTvBVhHVqyMVYzHStxSLwVAXn9KEH/xp0pqaiEzGBHeGZP0qakohIy00W2Jks6ghRKZRjZuTclFZWQGdTAZhLmTtOuGUEJmcHDO0xMMGGnMI5PPo7zMN6uxmFwKwm9a80Pu5CZ4GHK2CLG/FnGiOOTZzKWAvUyB/mvMo0AXGcLRpzPxyTVzBUpXI/P7woEDh5r+ZikmmHgIbdykcnX8jFJNXObK8LQdhLaVB2mj5+NjjDwV9+6+QxJNTNDDPDr9vR3OlIF/6/4calmJsg8ft3C+QsdqYJ5+HGpZqzF7MY9MwzPDNP/N9NDXohTR0814UsQ4/jk4ziPX2c37tTM3/kGViJa4FduB6QOrdgcozuyDJG85DK3SEs5hNyfsJWWG2Frwq1x2hEPD1sU5QeFL2rvMEU+MgAAAABJRU5ErkJggg==" alt="icon"></a></td>
				</tr>
				<?php
			}
				?>
			</table>
		</div>
		<?php
			
		}
		?>
      				 </div>
      				 	</div>
      				 </div>
      				</div>
      			</div>
      		
      </div></div>
  </div></div>




       <?php
       if(!empty($recruiterid))
       {
       ?>

       <div class="col-md-6 chartbar" style="margin-bottom:5%; ">
       	
       	<?php
       		if(empty($monthlychartdataRecruiter))
       		{
       			?>
       			 <div class="col_3 background">
				 		
       	<h3 class="radius">Monthly referral</h3>
       			
       			<img src="<?= base_url(); ?>images/noDataAvailable2.png" width="100%" id="noDataAvailable" alt="no Data Available image">
       		</div>
       			<?php
       		}
       		else
       		{
       	?>
       	 <div class="col_3 background">
       	<h3 class="radius">Weekly Report</h3>
      			
      			<div id="loadingReferralRecruiter" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>
<?php
if($countRecruiterMonthlyChart==1)
       		{
       		?>
       		
       	<div id="MonthlyChartRecruiter" style="width: 35%;"></div>
      <?php }

      else if($countRecruiterMonthlyChart==2)
       		{
       		?>
       		
       	<div id="MonthlyChartRecruiter" style="width: 70%;"></div>
      <?php }

        else if($countRecruiterMonthlyChart==3 || $countRecruiterMonthlyChart>3)
       		{
       		?>
       		
       	<div id="MonthlyChartRecruiter" style="width: 100%;"></div>
      <?php }
      ?>
				  


				</div>
				 <?php
}
				 ?>
			</div>
			<div class="col-md-offset-1 col-md-5">
				 <div class="col_3 background">
				 		
				 		<?php
       		if(empty($yearlyreferral))
       		{
       			?>
       			<h3 class="radius">Yearly Report</h3>
       			<img src="<?= base_url(); ?>images/noDataAvailable2.png" id="noDataAvailable" alt="no Data Available image" title="data not available" width="100%">
       			<?php
       		}
       		else
       		{
       	?>
       	<h3 class="radius">Yearly Report</h3>
       		<div id="loadingYearlyRecruiter" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>
       			
       			<?php
if($countRecruiterYearlyChart==1)
       		{
       		?>
       		
       	<div id="YearlyChartRecruiter" style="width: 35%;"></div>
      <?php }

      else if($countRecruiterYearlyChart==2)
       		{
       		?>
       		
       	<div id="YearlyChartRecruiter" style="width: 70%;"></div>
      <?php }

        else if($countRecruiterYearlyChart==3 || $countRecruiterYearlyChart>3)
       		{
       		?>
       		
       	<div id="YearlyChartRecruiter" style="width: 100%;"></div>
      <?php }
      ?>


					 <?php
					}
					 ?>
					</div>
	</div>
       <div class="col-md-9 single_right">
	      <div class="but_list" style="background-color:white;">
	       <div style="background-color:white;" class="background bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			
		<div id="myTabContent" class="tab-content ">
		
		  <?php
		}
		elseif (!empty($employeid)) {


			?>
			
			<div class="col-md-6 chartbar1">
				<?php

				if(!empty($monthlychartdataEmployee))
  	{
  //print_r($monthlychartdataEmployee);
		?>
		<div class="col_3 background">
       	<h3 class="radius">Weekly Report</h3>
      
      <div id="loadingReferralEmployee" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>
     <?php
       		if($countEmployeeMonthlyChart==1)
       		{
       		?>
       		
       	<div id="MonthlyChart" style="width: 35%;"></div>
      <?php }

      else if($countEmployeeMonthlyChart==2)
       		{
       		?>
       		
       	<div id="MonthlyChart" style="width: 70%;"></div>
      <?php }

        else if($countEmployeeMonthlyChart==3 || $countEmployeeMonthlyChart>3)
       		{
       		?>
       		
       	<div id="MonthlyChart" style="width: 100%;"></div>
      <?php }
      ?>
		

	</div>
<?php
	}
	else
	{
		?>
<img src="<?= base_url(); ?>images/noDataAvailable2.png" width="100%" id="noDataAvailable" style="width:100%; margin-bottom: 5%;" alt="no data icon">
		<?php
	}
			?>
				
			</div>
			<div class="col-md-offset-1 col-md-5">
				<div class="col_3 background">
					
					<?php
       		if(empty($yearlyreferralemployee))
       		{
       			?>
       			<h3 class="radius">Yearly Referral</h3>
       			<img src="<?= base_url(); ?>images/noDataAvailable2.png" id="noDataAvailable" alt="no Data Available image" title="Data not available" width="100%">
       			<?php
       		}
       		else
       		{
       	?>
       	<h3 class="radius">Yearly Report</h3>
       		<div id="loadingYearlyEmployee" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>
       		<?php
       		if($countEmployeeYearlyChart==1)
       		{
       		?>
       		
       	<div id="YearlyChartEmployee" style="width: 35%;"></div>
      <?php }

      else if($countEmployeeYearlyChart==2)
       		{
       		?>
       		
       	<div id="YearlyChartEmployee" style="width: 70%;"></div>
      <?php }

        else if($countEmployeeYearlyChart==3 || $countEmployeeYearlyChart>3)
       		{
       		?>
       		
       	<div id="YearlyChartEmployee" style="width: 100%;"></div>
      <?php }
  }
       ?></div>
			</div>
	
		 
			<?php
		}
		  ?>

		  <!-- recruit candidates-->

		  </div>
	  </div>
</div>
</div>

<?php
$rid=$this->session->userdata('recruiter_id');
$eid=$this->session->userdata('employe_id');

if(!empty($rid))
{

	?>
<div class="row">
		<div class="col-lg-7" style="margin-bottom:5%;">
				
			<div class="col_3 background">
				<h3 class="radius">Jobs by me</h3>
			<table width="100%" id="jobsByMeList" style="border-collapse: collapse;" itemscope itemtype="http://schema.org/JobPosting">
				<thead>
		<!--<th  colspan="3"><h3 class="radius">Jobs by me</h3></th>-->
			<!--<tr><td class="left"></td><td>Viewed</td><td>Applied</td></tr>-->
				<?php
				if($myjobs=='null')
				{
					?>
					<tr class="border"><td>
You haven't posted any job yet.
</td>
			</tr>
			<?php
				}
				
				else
				{
					?>
					<tr style="text-align:center;">
	 	<td><div id="loading1"><img src="<?= base_url(); ?>images/loading.gif" width="20%" height="10%" alt="loading"></img></div>
	
	 </td>
	</tr>
			</thead>

				<tbody></tbody>

				<?php
	
				}
				?>
			
		</table>

		<div style='text-align:center;' class="padding" id='jobsPostedPagination'></div>
		<div style="text-align: center;" class="padding"><a href="<?= base_url();?>SubmitJobForm" class="btn regularButton">Post a new job>></a></div>
</div>
	

		</div>
			<!-- pagination for jobs posted by-->

	<!-- pagination for jobs posted by-->

<script src="<?= base_url(); ?>js/jobsByMe.js"></script>


		<div class="col-lg-offset-1 col-lg-4 col_3">
				
				<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="4"><h3 class="radius">My referral progress this month</h3></th>
			
			<tr class="border"><td><b>Total Clicks:</b></td><td>0</td></tr>
			<tr class="border"><td><b>Total Earned:</b></td><td>0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center"><a  style="text-decoration:none; cursor:pointer;" class="btn regularButton" id="sharebutton" class="postjob">Share my referral link</td></tr>
			
		<?php

		 foreach ($data as $value) {
				   				# code...
				   		
				if($thiss=='recruiter')
				   				{
				   					?>
				   					<tr><td colspan="4" id="s1" style="cursor:pointer; display:none;">
				   						Step 1.) Copy the link given below so that people can reach to our website through your referral link.
				   					</td></tr><tr><td colspan="4" id="s2" style="cursor:pointer; display:none;">
				   						<b> <input type="text" name="copyRecruiterReferral" style="width: 100%; border: none;" id="copyRecruiterReferral" value="<?php echo base_url()."ReferralLink?src=".$value['recruiter_referral']."&loginas=recruiter"; ?>"></b>
				   						<br>
				   						<button class="btn regularButton" onclick="copyFunctionRecruiter()"> Copy Referral</button>
</td></tr>
<tr><td colspan="4" id="s3" style="cursor:pointer; display:none;">
				   						Step 2.) Go to the Different social medias. The most popular choices aregiven below.
</td></tr>
						<tr><td title="Share on Twitter" id="shareicon" style="cursor:pointer; display:none;"><a href="https://twitter.com" target="_blank"><img src="<?= base_url(); ?>icons/twitter30.png" alt="twitter logo"></a></td>
						<td title="Share on Facebook" id="shareicon1" style="cursor:pointer; display:none;">  <a   href="https://www.facebook.com" target="_blank">
                <img src="<?= base_url(); ?>icons/facebook30.png" alt="facebook logo"></a></td>
						
						<td title="Share on linkedin" id="shareicon3" style="cursor:pointer; display:none;">
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online/RecruiterRegistrationstep?src=<?= $value['recruiter_referral'];?>&title=Title&summary=Summary&source=GetJobOnline" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHWSURBVFhH7ZfPSwJBFMdXqUOd+kGHCKJD/QtdMqND/0Ed6k/o0h9RpkuBRT+oSwQldIu6RefoUNCumUEZJBiG0S2VMn3NW2dkdlF3GXciYj/wZeXNzHtf3gzujuLh4RphPeiLaCGiXRcVUkI3Y7SCM3xhfdkf1ir+iA6ui+T1hbUlWsoGVR+XZoSJ5MfO04qNQdd1E7gsUidKSzaGTIpZF3auxmF0/wG6owlTvBVhHVqyMVYzHStxSLwVAXn9KEH/xp0pqaiEzGBHeGZP0qakohIy00W2Jks6ghRKZRjZuTclFZWQGdTAZhLmTtOuGUEJmcHDO0xMMGGnMI5PPo7zMN6uxmFwKwm9a80Pu5CZ4GHK2CLG/FnGiOOTZzKWAvUyB/mvMo0AXGcLRpzPxyTVzBUpXI/P7woEDh5r+ZikmmHgIbdykcnX8jFJNXObK8LQdhLaVB2mj5+NjjDwV9+6+QxJNTNDDPDr9vR3OlIF/6/4calmJsg8ft3C+QsdqYJ5+HGpZqzF7MY9MwzPDNP/N9NDXohTR0814UsQ4/jk4ziPX2c37tTM3/kGViJa4FduB6QOrdgcozuyDJG85DK3SEs5hNyfsJWWG2Frwq1x2hEPD1sU5QeFL2rvMEU+MgAAAABJRU5ErkJggg==" alt="icon"></a></td>
				</tr>
<?php
}

		}
				?>

			</table>
		</div>
	</div>
<?php
}
elseif(!empty($eid))
{
	?>
<div class="container">	
<div class="row">
		<div class="col-lg-5 col_3 " style="margin-bottom:5%;">
			
				
			<table width="100%" class="background" style="border-collapse: collapse; font-size:.8em;" itemscope itemtype="http://schema.org/JobPosting">
		<th><h3 class="radius no-padding">Applied Jobs</h3></th>
			
				<?php
				if(empty($appliedjobs))
				{
					?>
					<tr class="border"><td class="profile_left">
You haven't applied any job yet.
</td>
			</tr>

			<tr class="border"><td>
				<a href="<?= base_url(); ?>"><button class="regularButton">Apply Now>></button></a>

</td>
			</tr>
			<?php
				}
				
				else
				{
					foreach ($appliedjobs as $key) {
					?>
<tr class="border"><td class="profile_left" itemprop="title">
	<a href="<?= base_url(); ?>EmployeeJobDetail?uid=<?= $key['submitjob_id']; ?>"><b><?= $key['submitjob_job_title']; ?></b></a>
</td></tr>
					<?php
					}
					
					
				}
				?>
			
		</table>
		</div>
		<div class="col-lg-offset-1 col-lg-5 col_3 " style="margin-bottom:5%;">
				
				<table width="100%" class="background" style="border-collapse: collapse; font-size:.8em;">
		<th colspan="4"><h3 class="radius no-padding">My referral progress this month</h3></th>
			
			<tr class="border"><td colspan="2" class="profile_left"><b>Total Clicks:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="2" class="profile_left"><b>Total Earned:</b></td><td colspan="2">0</td></tr>
			<tr class="border"><td colspan="4" style="text-align:center" class="profile_left"><b><a id="sharebutton" class="postjob" style="color:white; text-decoration:none; cursor:pointer;">Share my referral link</b></td></tr>
			<?php
			 foreach ($data as $value) {
if ($thiss=='employee') {

?>
<tr><td id="s1" colspan="4" style="cursor:pointer; display:none;">
				   						Step 1.) Copy the link given below so that people can reach to our website through your referral link.
				   					</td></tr><tr><td colspan="4" id="s2" style="cursor:pointer; display:none;">
				   					<b id="bold"><input type="text" style="width:100%; border:none;" name="copyEmployeeReferral" id="copyEmployeeReferral" value="<?php echo base_url()."ReferralLink?src=".$value['employee_referral']."&loginas=employee"; ?>"></b><br>
				   					<input type="hidden" name="copyEmployeeReferral" id="copyEmployeeReferral" value="<?php echo base_url()."ReferralLink?src=".$value['employee_referral']."&loginas=employee"; ?>">
				   					<button class="btn regularButton" onclick="copyFunctionEmployee()"> Copy Referral</button>
</td></tr>
<tr><td id="s3" colspan="4" style="cursor:pointer; display:none;">
				   						Step 2.) Go to the Different social medias. The most popular choices aregiven below.
</td></tr>
				
<tr><td title="Share on Twitter" id="shareicon" style="cursor:pointer; display:none;">
<a href="https://twitter.com" target="_blank"><!--
	<a href="http://twitter.com/share?text=<?= base_url();?>referral/<?= $value['employee_referral']; ?>" target="_blank">--><img src="<?= base_url(); ?>icons/twitter30.png" alt="twitter logo"></a></td>
						<td title="Share on Facebook" id="shareicon1" style="cursor:pointer; display:none;">  <a   href="https://www.facebook.com" target="_blank">
                <img src="<?= base_url(); ?>icons/facebook30.png" alt="facebook logo"></a></td>
						
						<td title="Share on linkedin" id="shareicon3" style="cursor:pointer; display:none;">
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online/employee?src=<?= $value['employee_referral'];?>&title=Title&summary=Summary&source=GetJobOnline" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHWSURBVFhH7ZfPSwJBFMdXqUOd+kGHCKJD/QtdMqND/0Ed6k/o0h9RpkuBRT+oSwQldIu6RefoUNCumUEZJBiG0S2VMn3NW2dkdlF3GXciYj/wZeXNzHtf3gzujuLh4RphPeiLaCGiXRcVUkI3Y7SCM3xhfdkf1ir+iA6ui+T1hbUlWsoGVR+XZoSJ5MfO04qNQdd1E7gsUidKSzaGTIpZF3auxmF0/wG6owlTvBVhHVqyMVYzHStxSLwVAXn9KEH/xp0pqaiEzGBHeGZP0qakohIy00W2Jks6ghRKZRjZuTclFZWQGdTAZhLmTtOuGUEJmcHDO0xMMGGnMI5PPo7zMN6uxmFwKwm9a80Pu5CZ4GHK2CLG/FnGiOOTZzKWAvUyB/mvMo0AXGcLRpzPxyTVzBUpXI/P7woEDh5r+ZikmmHgIbdykcnX8jFJNXObK8LQdhLaVB2mj5+NjjDwV9+6+QxJNTNDDPDr9vR3OlIF/6/4calmJsg8ft3C+QsdqYJ5+HGpZqzF7MY9MwzPDNP/N9NDXohTR0814UsQ4/jk4ziPX2c37tTM3/kGViJa4FduB6QOrdgcozuyDJG85DK3SEs5hNyfsJWWG2Frwq1x2hEPD1sU5QeFL2rvMEU+MgAAAABJRU5ErkJggg==" alt="icon"></a></td>
				</tr>
				<?php
			}
		}
			?>
			</table>
		</div>
	</div>
</div>
	<?php
	}
?>


</div>

</div>

</div>

</div>


<div class="container">
<div class="row refer_earn" style="margin-top:2%;">
	 <div class="col_3 message background">
	 	
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.
</p>
	 
<a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>

	 </div>
	  
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("Copy");
  alert("Your Referral code: " + copyText.value+" is copied.");
}

function copyFunctionEmployee() {
  var copyText = document.getElementById("copyEmployeeReferral");
  copyText.select();
 // copyText.setSelectionRange(0, 99999);
  document.execCommand("Copy");
  alert("Your Referral code: " + copyText.value+" is copied.");
}

function copyFunctionRecruiter() {
  var copyText = document.getElementById("copyRecruiterReferral");
  copyText.select();
  document.execCommand("Copy");
  alert("Your Referral code: " + copyText.value+" is copied.");
}

function shows() {
  //var a = document.getElementById("myInput");
 	document.getElementById("icon").style.display='inline';
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#editbutton").click(function(){
        $("#icon").fadeIn("slow");
        $("#icon1").fadeIn(3000);
        $("#icon2").fadeIn(3000);
        $("#icon3").fadeIn(3000);
        
    });
});
</script>

<script>

$(document).ready(function(){
    $("#sharebutton").click(function(){
    	 $("#s1").fadeIn(300);
        $("#s2").fadeIn(3000);
        $("#s3").fadeIn(3000);
        $("#shareicon").fadeIn(3000);
        $("#shareicon1").fadeIn(3000);
        $("#shareicon2").fadeIn(3000);
        $("#shareicon3").fadeIn(3000);
    });
});

</script>
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
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks the button, open the modal 
// When the user clicks the button, open the modal 
btn.onclick = function() {
   // modal.style.display = "block";
     $("#myModal").slideToggle(700);
}
/*window.onload = function() {
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
}*/

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    //modal.style.display = "none";
    $("#myModal").slideToggle(700);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var spann = document.getElementsByClassName("close")[0];


// When the user clicks the button, open the modal 
// When the user clicks the button, open the modal 
btn.onclick = function() {
   // modal.style.display = "block";
     $("#myModal1").slideToggle(700);
}
/*window.onload = function() {
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
}*/

// When the user clicks on <span> (x), close the modal
spann.onclick = function() {
    //modal.style.display = "none";
     $("#myModal1").slideToggle(700);
     //modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        //modal.style.display = "none";
          $("#myModal1").slideToggle(700);
    }
}
</script>
</html>	
<?php //print_r($monthlyChartData); ?>

<script>
    Morris.Bar({
    	barSizeRatio:0.35,
    	resize:true,
        element : 'MonthlyChart',
        data:[<?php echo $monthlyChartData; ?>],
        xkey:'datee',
        ykeys:['count'],
        parseTime: false,
        labels:[''],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      //var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>

<script>
    Morris.Bar({
    	  barGap:1,
    	barSizeRatio:0.35,
    	resize:true,
        element : 'MonthlyChartRecruiter',
        data:[<?php echo $monthly_chart_data_recruiter; ?>],
        xkey:'RecruiterDate',
        ykeys:['RecruiterCount'],
        parseTime: false,
        labels:[''],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>


<script>
    Morris.Bar({
    	barSizeRatio:0.35,
    	resize:true,
        element : 'YearlyChartRecruiter',
        data:[<?php echo $yearlyRecruiter; ?>],
        xkey:'years',
        ykeys:['YearsCount'],
        parseTime: false,
        labels:[''],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>

<script>
    Morris.Bar({
    	barSizeRatio:0.35,
    	resize:true,
        element : 'YearlyChartEmployee',
        data:[<?php echo $yearlyEmployee; ?>],
        xkey:'YearlyDate',
        ykeys:['YearlyCount'],
        parseTime: false,
        labels:[''],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>


<script>
$(document).ready(function(){
  $("#MonthlyChartRecruiter").show(function(){
    $('#loadingReferralRecruiter').hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#MonthlyChart").show(function(){
    $('#loadingReferralEmployee').hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#YearlyChartEmployee").show(function(){
    $('#loadingYearlyEmployee').hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#YearlyChartRecruiter").show(function(){
    $('#loadingYearlyRecruiter').hide();
  });
});
</script>
