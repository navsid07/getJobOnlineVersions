<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php

if(!empty($last7))
{
$profileViewLast7=" ";
foreach ($last7 as $row ) {
  
  $profileViewLast7 .= "{ date:'".$row["employeeProfileviewCount_date"]."', view:".$row["employeeProfileViewCount_view"]."}, ";
  }
  $profileViewLast7 = substr($profileViewLast7, 0, -2);
}

if(!empty($shortlistGraphh))
{
  $shortlistGraph=" ";

foreach ($shortlistGraphh as $row ) {
  
  $shortlistGraph .= "{ date:'".$row["shortlistCount_date"]."', view:".$row["shortlistCount_count"]."}, ";
  }
  $shortlistGraph = substr($shortlistGraph, 0, -2);
}



$certificationCount = count($certification);
$portofolioCount = count($portfolio);


?><!DOCTYPE HTML>
<html  lang="en">
<head><?php
$country=base64_decode(base64_decode($this->session->userdata('country')));
if($country=='india' || $country=='India' || $country=='INDIA')
{
	$categoryy=$categoryindia;

}
elseif($country=='canada' || $country=='Canada'|| $country=='CANADA')
{
	$categoryy=$categorycanada;
}
include 'fav.php';
include 'googleadvertisement.php';

			            foreach ($data as $value) {
			             	
			            ?><title><?= base64_decode(base64_decode($value['employee_name'])); ?> Profile Detail| Get-job.online3232323</title><?php
}
?><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta name="description" content="job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.Online job portal for job providers and job seekers.
" />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>


<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>
<style>
	/* Three column layout */
.sidee {
    float: left;
    width: 15%;
  
}

.middlee {

    float: left;
    width: 70%;
}
.portfolioleftt {
	padding: 1%;
  	text-transform: capitalize;
    float: left;

}

/* Place text to the right */
.floatright {
    text-align: right;
    
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}

/* Individual bars */
.bar-0 {width: 0%; height: 18px; background-color: #f44336;}
.bar-0-10 {width: 5%; height: 18px; background-color: #f44336;}
.bar-10-20 {width: 10%; height: 18px; background-color: #f44336;} 
.bar-20-30 {width: 20%; height: 18px; background-color: #ff9800;}
.bar-30-40 {width: 30%; height: 18px; background-color: #ff9800;}
.bar-40-50 {width: 40%; height: 18px; background-color: #ff9800;}
.bar-50-60 {width: 50%; height: 18px; background-color: #00bcd4;}
.bar-60-70 {width: 60%; height: 18px; background-color: #00bcd4;}
.bar-70-80 {width: 70%; height: 18px; background-color: #2196F3;}
.bar-80-90 {width: 80%; height: 18px; background-color: #2196F3;}
.bar-90-100 {width: 90%; height: 18px; background-color: #4CAF50;}
.bar-100 {width: 100%; height: 18px; background-color: #4CAF50;}


/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    .right {
        display: none;
    }
}

.authorName
{
	text-transform: capitalize;
	font-size:.7em;
    font-style: italic;
    float:right;
    color:grey;
    font-weight: normal;
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


@media (min-width: 481px) and (max-width: 767px) {
  
  #noDataAvailable2
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
  
  #noDataAvailable2
{
	width:100%;
	height:30%;
}
  
  @media (min-width: 100px) and (max-width: 321px) {
  
  #noDataAvailable2
{
	width:100%;
	height:30%;
}

 @media (min-width: 1px) and (max-width: 101px) {
  
  #noDataAvailable2
{
	width:100%;
	height:30%;
}
  
  
}


#certificationPagination a,
#portfolioPagination a {
    border-radius: 50%;
    background-color: #d3404e;
    color: #fff;
    border: 1px solid #d3404e;
    padding-left: 5px;
    padding-right: 5px;
    margin-left: 5px;
    margin-right: 5px;
    -webkit-box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
    box-shadow: 0 4px 6px rgba(0, 0, 0, .1)
}



</style>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>

<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

	<!--bar graph external files-->
	<link rel="stylesheet" href="<?= base_url(); ?>morris/css/moris.css">
 	<script src="<?= base_url(); ?>morris/js/jquery.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/raphael.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/morris.min.js"></script> 
    <!-- bar graph code end-->

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
<link rel="stylesheet" href="<?= base_url(); ?>css/modal.css">

 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
		include('EmployeeHeader.php');
?>
<div id="spacer">
		&nbsp;
	</div>
	
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
		    	<form action="EmployeeSearch" method="post">
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
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
				</form>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">

	<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Employee Dashboard</span></li></ul>
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
					if($success= $this->session->flashdata('success')):

			    $success_class=$this->session->flashdata('success_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $success_class; ?>">
			  
			  <?php echo $success ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			foreach ($data as $dataa) {
		if($dataa['employee_verify']==0)
		{$toto_encode='toto';
			?>

			<div class="row" style="margin-top:3%;">
	<div class="col-md-offset-2 col-md-8 alert alert-danger">
		
		Your email is not verified. Please verify your email to enable critical activities on your account.If you want to resend the verification email then please click on the link below:
	
	</br></br><p style="text-align:center;"><a href="<?= base_url(); ?>RepeatEmployeeVerificationEmail?email=<?= $dataa['employee_email']; ?>" class="linkcolor"><font color="blue">Send Verification email</font></a></p>
	</div>
	<?php
}
}

			?>


			<div class="single">  


<?php
$certificationCount = count($certification);
$portofolioCount = count($portfolioLimit);


if($certificationCount==4 && $portofolioCount==4)
{

	include("EmployeeDashboard/Count8.php");
}
elseif($certificationCount==0 && $portofolioCount==0)
{
  include ("EmployeeDashboard/Count1.php");
}
elseif($certificationCount==0 && $portofolioCount==1 || $certificationCount==1 && $portofolioCount==0)
{
  
  include ("EmployeeDashboard/Count1.php");
}

elseif($certificationCount==2 && $portofolioCount==0 || $certificationCount==0 && $portofolioCount==2 || $certificationCount==1 && $portofolioCount==1)
{

    
     include ("EmployeeDashboard/Count2.php");
}

elseif($certificationCount==1 && $portofolioCount==2 || $certificationCount==3 && $portofolioCount==0 || $certificationCount==0 && $portofolioCount==3 || $certificationCount==2 && $portofolioCount==1 )
{
    
     include ("EmployeeDashboard/Count3.php");
}

elseif ($certificationCount==2 && $portofolioCount==3 || $certificationCount==3 && $portofolioCount==2 || $certificationCount==1 && $portofolioCount==4 || $certificationCount==4 && $portofolioCount==1) {
    
   
    include ("EmployeeDashboard/Count5.php");

}

elseif($certificationCount==2 && $portofolioCount==2 || $certificationCount==3 && $portofolioCount==1 || $certificationCount==1 && $portofolioCount==3 || $certificationCount==0 && $portofolioCount==4 || $certificationCount==4 && $portofolioCount==0)
{
   //print_r($certification);
    //echo count($certificationCount);
  
	include ("EmployeeDashboard/Count4.php");
}

elseif($certificationCount==4 && $portofolioCount==2 || $certificationCount==3 && $portofolioCount==3 || $certificationCount==2 && $portofolioCount==4)
{
 
	include ("EmployeeDashboard/Count6.php");
}

elseif($certificationCount==4 && $portofolioCount==3 || $certificationCount==3 && $portofolioCount==4)
{
  
	include ("EmployeeDashboard/Count7.php");
}


	   ?>
	   <div class="clearfix"> </div>
	   
	 <!--row class div end bottom-->  
	 </div>
	<div class="row">
	
</div>

<div class="row">
		
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
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 
<a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	  
	</div>
</div>
</div>

<?php 

include("footer.php");

 ?>

</body>

<script src="<?= base_url(); ?>js/analytics.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url() ?>js/recommendedjobjs1.js"></script>
<script src="<?= base_url(); ?>js/employeeCertification04.js"></script>
<script src="<?= base_url(); ?>js/employeePortfolio12.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
 
</html>	
<?php
//print_r($profileViewLast7);
?>
<script>

	
    Morris.Bar({

        element : 'profileViewLast7',
        data:[<?php echo $profileViewLast7; ?>],
        xkey:'date',
        ykeys:['view'],
        labels:['Profile Views'],
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
    	
        element : 'shortlistGraph',
        data:[<?php echo $shortlistGraph; ?>],
        xkey:'date',
        ykeys:['view'],
        labels:['Profile Views'],
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
  $("#profileViewLast7").show(function(){
    $('#loadingProfileView').hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#shortlistGraph").show(function(){
    $('#loadingShortlist').hide();
  });
});
</script>


<script>

  


        function deleteportfolio(id)
 {

    var paramstr=$("#deletePortfolioForm" + id).serialize();
   
    if($.post("<?php echo base_url();?>employee/deletePortfolio",
    paramstr))
    {
    	$("#deletePortfolioRow" + id).hide(600);
      
      $("#deletePortfolioSuccessmsg" + id).show(900);
    }
   }


   function deletecertification(id)
 {

    var paramstr=$("#deleteCertificationForm" + id).serialize();
   
    if($.post("<?php echo base_url();?>employee/deletecertification",
    paramstr))
    {
    	  $("#deleteCertificationRow" + id).hide(600);
      
      $("#deleteCertificationSuccessmsg" + id).show(900);
    }
   }


</script>
