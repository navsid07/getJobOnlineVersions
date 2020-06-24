
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

//print_r($singlearticle);
?>

<!DOCTYPE HTML>
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
			             	
			            ?><title><?= base64_decode(base64_decode($value['employee_name'])); ?> Profile Detail| Get-job.online</title><?php
}
?><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta name="description" content="job opportunities in IT, well paid jobs in india,Typing jobs, jobs in admin support. jobs in india to work in. register for free to apply jobs in your city.online job portals for job providers and job seekers." />
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
    font-weight: normal;
    color: grey;
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
#reportEmployee
{
	display:none;
}
</style>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
$employeid=$this->session->userdata('employe_id');
$recruiterid=$this->session->userdata('recruiter_id');
if(empty($employeid) && empty($recruiterid))
{
?>
	        <ul class="nav navbar-nav">
	        	<?php
                include('GetJobHeaderLi.php');
            ?>
	   	
	        </ul>
	       

	        <?php
}
elseif (!empty($employeid)) {
	

	        ?>
	         <ul class="nav navbar-nav">
		       <?php
		       include('EmployeeHeaderLi.php');
		       ?>
	        </ul>
	    	<?php
	    }
	    elseif (!empty($recruiterid)) {
	    
	    	?>

<ul class="nav navbar-nav">
		      
		       <?php
		       include('RecruiterHeaderLi.php');
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

	<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li ><a href="<?= base_url(); ?>"><span itemprop="name">Home</a> </span></li><li ><span itemprop="name">Articles</span> </li></span></ul>
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
		
		Your email is not verified please verify your email for enable activities on your account.If you want to resend verification email then please click on link below:
	
	</br></br><p style="text-align:center;"><a href="<?= base_url(); ?>RepeatEmployeeVerificationEmail?email=<?= $dataa['employee_email']; ?>" class="linkcolor"><font color="blue">Send Verification email</font></a></p>
	</div>
	<?php
}
}

			?>


			<div class="single">  

	   <div class="col-md-4">
	   	
	   	  <div class="col_3 cool radius margin-bottom">
	   	  	
	   	  	<h3 class="radius">Todays Jobs</h3>
  	<ul class="list_1" class="radius">
	   	  		<?php
	   	  			if(empty($jobs))
	   	  			{
	   	  				?>
	   	  		<li style="text-align:center;"><font color="blue">Sorry! No result found</font></li>
	   	  		<?php
	   	  	}
	   	  	else
	   	  	{
	   	  			foreach ($jobs as $value) {
	   	  				$sessioncookie=get_cookie('sessionCookieEmployee');

 					$sessionId=$this->session->userdata('employe_id');
 					if(!empty($sessioncookie) || !empty($sessionId))
 					{
 						$link=base_url().'EmployeeJobDetail?uid='.$value['submitjob_id'];
 					}
 					else
 					{
 							$link=base_url().'JobVisitor?uid='.$value['submitjob_id'];
 					}

	   	  				
	   	  		?>
	   	  		<li style="text-align:center;" class="border padding">

	   	  			
	   	  			<font size="3.5em" color="blue"><a href="<?= $link; ?>" style="color:blue; text-decoration:none;" ><?= $value['submitjob_job_title']; ?></a>
	   	  			</font>
	   	  		</br>
 					
 				
	   	  		
<!--<script src="https://apis.google.com/js/plusone.js"></script>
<g:plus action="share" annotation="bubble"></g:plus>-->
	   	  		</li>
	   	  				<?php
}
}
   	  			?>
	   	  	</ul>
	   	  	<div class="row"style="text-align:center padding:10px;">
	   	  			<div class="social" style="margin-top:2%; text-align:center;">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="https://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
							<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
	   	  		<!--<a name="fb_share" type="button" href="https://www.facebook.com/sharer.php?u=http://www.get-job.online" target="_blank">share on Facebook</a>
	   	--><!-- Place this tag in your head or just before your close body tag. -->
<!-- Place this tag in your head or just before your close body tag. -->


	   	  </div>

	   	 </div>

<?php
$employeid=get_cookie('sessionCookieEmployee');

if(!empty($employeid))
{
?>
	   	 <div class="col_3" style=" margin-bottom:5%; padding:3px;">
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Portfolios and Articles 
</h3> </td>
			</tr>
			<?php
foreach ($data as $value) {

			?>
			
	<tr class="border"><td class="profile_left padding"><b>Portfolio:</b></td><td class="padding">	<a href="<?= base_url(); ?>AddEmployeePortfolio?uid=648rhffj40b4&s=gzx4653&su=<?= $value['employee_uid']; ?>" style="color:#f15f43; text-decoration:none;">Add now >></a></td></tr>

		<tr class="border"><td class="profile_left padding"><b>Article:</b></td><td class="padding">	<a href="<?= base_url(); ?>EmployeeArticleBody?uid=345629856&s=78nbhgdft4dc43322&su=<?= $value['employee_uid']; ?>" style="color:#f15f43; text-decoration:none;">Publish now >></a></td></tr>
		<?php
	}
		?>
		</table></div>
	   <?php
	}
	   ?>
 <div class="col_3" style=" margin-bottom:5%; padding:3px;">
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Articles
</h3> </td>
			</tr>
			<?php
			foreach ($articles as $key ) {
				
			
			?>
			<tr class="border">
<td width="20%">
	
	<?php

	if(empty($key['employee_articleThumbnail']))
	{
		?>
<img src="<?=base_url(); ?>articleImages/noImage.png" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="no image"/>
		<?php
	}
	else
	{
	?>
	<img src="<?=base_url(); ?>articleImages/<?= $key['employee_articleThumbnail']; ?>" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="article thumbnail"/>
<?php
}
$uidd=$key['employee_articleUid'];
$uidResult=$this->fetch->fetchemployeprofilee($uidd);
?>
</td>
				<td class="profile_left padding" width="70%"><a href="<?= base_url();?>EmployeeArticle?art=<?= $key['employee_articleHeading']; ?>&aid=<?= $key['article_id']?>"><?= base64_decode(base64_decode($key['employee_articleHeading'])); ?></a><br><font class="authorName">- <?php
				foreach ($uidResult as $resultkey) {
					$empname=base64_decode(base64_decode($resultkey['employee_name']));
					if(empty($empname) || $empname=='' || $empname==null)
					{
						$authorName='Unknown';
					}
					else
					{
						$authorName=$empname;
					}

					echo $authorName;
				}
				?></font></td></tr>
	<?php
}
	?>

		</table></div>
	   


	 </div>
	   <div class="col-md-8">
	      <div class="col_1 " style="margin-bottom:5%;">
	     
	     <div class="col_3 background">
	     	
	    
				
				<?php
				if($singlearticle==null || $singlearticle=='' || empty($singlearticle))
				{
				?>
				 <table width="100%" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;">
		
			<thead class="radius">
				<tr><td>Sorry! no result found.</td></tr>
			</thead>
		</table>
				<?php
				}
				else
				{
					foreach ($singlearticle as $articlevalue) {
						# code...

	$articleHeading=base64_decode(base64_decode($articlevalue['employee_articleHeading']));
					
?>
 <table width="100%" id="deleteArticlediv<?= $articlevalue['article_id']; ?>" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;">
		
			<thead class="radius">

		<tr ><td colspan="2"><div class="text-right padding"><img src="<?= base_url(); ?>images/eye20.png" title="Article Views"><?= $key['employee_articleViews']; ?> </div><h1><?= base64_decode(base64_decode($articlevalue['employee_articleHeading'])); ?></h1></td></tr>
		<tr><td colspan="2" class="padding"><?= base64_decode(base64_decode($articlevalue['employee_articleBody'])); ?></td></tr>
			</thead>
			<tr><td width="50%">
			<?php
			if($checkprevious!=0)
			{
			?> <a href="<?= base_url(); ?>PreviousArticleEmployee?aid=<?= $articlevalue['article_id']; ?>&&title=<?= $articleHeading; ?>"><< Previous</a> 
			<?php
		}
		else

		{
			?>
			<< Previous
			<?php
		}
			?></td><td>
				<?php
					if($checknext!=0)
					{
				?>
				<a href="<?= base_url(); ?>NextArticleEmployee?aid=<?= $articlevalue['article_id']; ?>&&title=<?= $articleHeading; ?>">Next >></a>
					<?php
				}
				else
{
	?>
	Next >>
	<?php
}

					?></td></tr>
					<tr><td class="padding" colspan="2">
						<?php
						$sessioncookie=get_cookie('sessionCookieEmployee');

 						$sessionId=$this->session->userdata('employe_id');
						$articleuid=$articlevalue['employee_articleUid'];
						if($articleuid!=$sessioncookie && $sessionId!=$articleuid && (!empty($sessionId) || !empty($sessioncookie)))
						{
						?>
						<form action="<?= base_url(); ?>EmployeeArticleBody" method="post"><input type="hidden" name="id" value="<?= $articlevalue['article_id'];?>">
						<a id="report" style="cursor:pointer;">Report Article</a></form>
						<?php
					}
					elseif(empty($sessioncookie) && empty($sessionId))
					{
						?>
						<a id="report1" style="cursor:pointer;">Report Article</a>
						<p id="loginRequired" style="display: none; color:red; font-weight: bold;">You have to be logged in to report this article<a href="<?= base_url(); ?>EmployeeLogin">Click here to login</a></p>
						<?php
						
					}
					?>

				<a id="hidereport" style="text-decoration:none; display:none; cursor:pointer; color:red;">Hide</a></td></tr>

			<tr><td class="padding" colspan="2">

					<span  style="display:none;color:green; font-weight:bold;" id="reportEmployeemsg">Your report successfully Submitted.</span>

					<span  style="display:none;color:red; font-weight:bold;" id="reportEmployeefailure">Something went wrong pleasetry again later.</span>

				
				<table id="reportEmployee" width="60%" align="center">
				<form id="reportEmployeeForm" method="post">
					<tr><td>
		<input type="radio" name="category" value="Spam"> Spam
			
				<input type="hidden" name="articleId" value="<?= $articlevalue['article_id']; ?>">

			<input type="radio" name="category" value="Unresponsive" > Unresponsive</td></tr>
			<tr><td class="padding" colspan="2" style="text-align: center;"><textarea class="form-control" name="description" Placeholder="Write something about your report"></textarea></td></tr>
			<tr><td class="padding" colspan="2"><input type="submit" class="editbutton"value="Submit Report"></td></tr>
		</form>
	</table>


</td></tr>
					</td></tr>
					<?php
					

						if($sessioncookie==$articleuid || $sessionId==$articleuid)
						{
					?>
					<tr><td class="padding" colspan="2">
						<form action="<?= base_url(); ?>EmployeeArticleBody" method="post"><input type="hidden" name="id" value="<?= $articlevalue['article_id'];?>">
						<button type="submit" class="btn btn-danger btn-sm">Edit Article</button></form></td></tr>
					<tr><td class="padding" colspan="2">
<form id="deleteArticle<?= $articlevalue['article_id']; ?>" method="post">	
<input type="hidden" name="id" value="<?= $articlevalue['article_id']; ?>">					<button type="button" class="btn btn-primary btn-sm" onclick="deleteArticle(<?= $articlevalue['article_id']; ?>)">Delete Article</button></form></td></tr>
		</thead></table>		

<?php
}
}
?>

<?php
				}
				?>
				
			
		 <table width="100%" id="successmsg" class="radius" style="background-color: white; text-align:center; border-collapse: collapse; display: none;"><tr><td class="alert alert-success">Article successfully deleted. <a href="<?= base_url(); ?>">Refresh page</a></td></tr></table>
		
		</div> 
		<!-- Paginate -->
	
		

	
		   </div>

		   
	   </div>
	   <div class="clearfix"> </div>
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
<?php include("footer.php"); ?>
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
 
 <script type="application/javascript">
  function deleteArticle(id)
 {

    var paramstr=$("#deleteArticle" + id).serialize();
   
    if($.post("<?php echo base_url();?>employee/deleteArticle",
    paramstr))
    {
    	//alert($("#deleteApplied" + id).serialize());
              $("#deleteArticlediv" + id).hide(600);
             $("#successmsg").show(600);
         
    }
   }
</script>
<script>


$(document).ready(function(){


$(window).on('load', function() {
    $("#reportEmployee").hide();
});
});



$(document).ready(function(){




$("#report").click(function()
{
	$("#report").hide();
	$("#hidereport").show();
	$("#reportEmployee").slideToggle(700);
});

$("#report1").click(function()
{
	$("#report1").hide();
	$("#loginRequired").slideToggle(700);
});

$("#hidereport").click(function()
{
	$("#reportEmployee").hide();
	$("#hidereport").hide();
	$("#report").show();
	
});
});

/*function func1() {
  documentgetElementById("reportEmployee").style.display="none";
  //alert("This is the first.");
}
window.onload=func1;*/
</script>
<script>

  /*   $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'https://jobtest.get-job.online/employee/reportEmployee',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
   
*/


//report  employee by a recruiter
      $('#reportEmployeeForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/reportArticle'); ?>",
        data: $('#reportEmployeeForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		
        		$('#hidereport').hide(500);
        	$('#reportEmployee').hide(500);
            $('#reportEmployeefailure').show(500);
        
        }
        else if(response==1)
        {
       

        	$('#hidereport').hide(500);
        	$('#reportEmployee').hide(500);
            $('#reportEmployeemsg').show(500);
           
        }
        
        }
        
   });

});
	</script>
</html>	