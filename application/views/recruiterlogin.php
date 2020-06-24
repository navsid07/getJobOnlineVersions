<!--A Design by W3layouts

Author: W3layout

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

--><?php 
//echo 'verify='.$this->session->flashdata('checkk');
/*$flashdata=$this->session->flashdata('verifystatus');
echo 'flashdata='.$flashdata;*/
//$this->session->unset_userdata('url');
?><!DOCTYPE HTML>

<html  lang="en">

<head><?php

include 'fav.php';

?><title>Find a job and get recruited online | Get Job Online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job recruitment" />

<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job providers and job seekers. Online job portal for job providers and job seekers." />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>

<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	   	  <script src="<?= base_url(); ?>js/recruiterloginjs.js"></script>
<script src="<?= base_url(); ?>js/jquery.min.js"></script>

<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>


<script src="<?= base_url() ?>/js/recruiterloginjs1.js"></script>
<!-- Custom Theme files -->

<!-- recently joined bottom-->
 <script src="<?= base_url() ?>/js/r.js"></script>

 
 <!-- recently joined bottom code end-->

<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!--
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>js/jquery.breadcrumbs-generator.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>-->
<!--<script>
$(function() {
  $('#breadcrumbs').breadcrumbsGenerator();
});
</script> -->
<!--font-Awesome-->
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<style>
.loginbtn
{
	transition: background-color 0.5s ease;
	width:100%;
	height:50px;
	
}
		.display
{
	display: none;
}


@media only screen and (min-width: 280px) and (max-width: 830px) {
 .fa-user,.fa-key
{

font-size: 2px;

}
.display-none
{
	display:none;
}
.display
{
	display: block;
}
  }

  #msg
{
color:red;
font-weight: bold;
text-align: center;
}


.authorName
{
	font-weight: normal;
	text-transform: capitalize;
	font-size:.7em;
    font-style: italic;
    float:right;
    color:grey;
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
#paginationFeaturedEmployeeNew a {
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

<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 

<!--<font-Awesome-->

<!--jquery for show forget password-->



<script>

$(document).ready(function(){

    $("#bbutton").click(function(){

    	$("#loginquery").slideToggle();

    	$("#forgetpassword1").slideToggle();

       

    });



    $(".loginagain").click(function(){

    	$("#loginquery").slideToggle();

    	$("#forgetpassword1").slideToggle();

       

    });

});

</script>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
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
    	$("#myModal").slideToggle(700);
        //modal.style.display = "none";
    }
}
</script>

<style>
	
@media only screen and (min-width: 280px) and (max-width: 830px) {


 .fa-user,.fa-key
{
font-size: 100%;

}
  }

</style>


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


<!-- js file for captcha-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

</head>

<body>

<!-- modal for popup-->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

<div class="row">
	<div class="col-md-12 padding">
	<span class="close">&times;</span>
</div>

	<div class="col-md-offset-1 col-md-10 padding">
  
 	
  		<div class="alert alert-danger">
  			Your accout has been disabled due to invalid activity to activate it please visit your email.   
  		</div>

</br>
  <div class="social" style="text-align:center">	
	
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

					<a class="btn_1" href="#" target="_blank">
						<i class="fa fa-instagram instagram"></i>
						<span class="share1 insta">Follow</span>
					</a>
			   </div>
	</div>
	</div>
</div>
</div>

<!-- modal for popup ode end-->


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

	<div id="spacer">
		&nbsp;
	</div>

<div class="banner_1">

	<div class="container">

		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
            <h1>Start employee search</h1>
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
<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li ><span itemprop="name"><a href="<?= base_url(); ?>">Home</a> </span></li><li ><span itemprop="name">Recruiter Login </span></li></span>
  </ul>

<div class="container">

	 <?php 

	if($noapply= $this->session->flashdata('noapply')):

			    $noapply_class=$this->session->flashdata('noapply_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-offset-1 col-lg-10" style="margin-top:10%;">

			          <div class="alert alert-dismissible <?php echo $noapply_class; ?>">

			  

			  <?php echo $noapply ?>



			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?> 

 <?php 
		if($session_destroyed= $this->session->flashdata('session_destroy')):



			    $session_destroyed_class=$this->session->flashdata('session_destroy_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-offset-1 col-lg-10" style="margin-top:10%;">

			          <div class="alert alert-dismissible <?php echo $session_destroyed_class; ?>">

			  

			  <?php echo $session_destroyed; ?>



			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			
		if($verifystatus= $this->session->flashdata('verifystatus')):



			    $verifystatus_class=$this->session->flashdata('verifystatus_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-offset-1 col-lg-10" style="margin-top:10%;">

			          <div class="alert alert-dismissible <?php echo $verifystatus_class; ?>">

			  

			  <?php echo $verifystatus; ?>



			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			



					if($signinrequired= $this->session->flashdata('signinrequired')):



			    $signinrequired_class=$this->session->flashdata('signinrequired_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-offset-1 col-lg-10" style="margin-top:10%;">

			          <div class="alert alert-dismissible <?php echo $signinrequired_class; ?>">

			  

			  <?php echo $signinrequired ?>



			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?> 
<?php 

				if($emailexistemployee= $this->session->flashdata('emailexistemployee')):
			    $emailexistemployee_class=$this->session->flashdata('emailexistemployee_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-offset-2 col-lg-8" style="margin-top:4%;">

			          <div class="alert alert-dismissible <?php echo $emailexistemployee_class; ?>">

			  

			  <?php echo $emailexistemployee ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;


							if($this->session->flashdata('checkk'))
							{
								?>
			<div class="row" style="margin-top:5%;">
					<div class="col-md-12">
							
<div class="alert alert-success">

	Email successfully verified please proceed below to login to your profile & add more details.

</div>
							
					</div>
			</div>
				<?php
							}
							?>

    <div class="single">  

	   <div class="col-md-4 display-none">

	   	  <div class="col_3">
			<div class="background radius">
	   	  	<h3 class="radius">Featured Employee</h3>
	   	  	<?php
	   	  	if(empty($checkfeaturedemployee))

	   	  	{
?>
<ul class="list_1"><li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li></ul>
<?php

	   	  	}
	   	  	else
	   	  	{


	   	  	?>

	   	  	<!--<div id="loadingFeaturedEmployeeRecruiterLogin" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>-->

<ul class="list_2" id="FeaturedEmployeeNew">

	   	  	
	   	  	
		<ubody></ubody>
 	</ul>
	<div style='margin-top: 10px; text-align:center;' class="border padding" id='paginationFeaturedEmployeeNew'></div>
	   	  <?php
}
?>
<div class="social padding" style="margin-top:2%; text-align:center;">	
	
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
			   </div>
	   	  </div>


	   	  <!-- pagination jquery for today jobs
			-->
<script src="<?= base_url() ?>/js/featuredEmployeeNew.js"></script>
	<!--pagination jquery end-->

	   	  <div class="col_3">
			<div class="background radius">
	   	  	<h3 class="radius">Recently Joined</h3>
	<?php

	   	  	if(empty($checkrecentlyjoined))
	   	  	{
?>
<ul class="list_2" >

	   	  	
	   	  	
		<li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li>
 	</ul>
<?php
	   	  	}
	   	  	else
	   	  	{

	   ?>
	   <!--<div id="loadingRecentlyJoinedRecruiterLogin" style="text-align: center;"><img src="<?= base_url(); ?>images/loading.gif" width="40%" height="30%" alt="loading"></img></div>-->
	   	  	<ul class="list_2" id="recentlyjoined">

	   	  	
	   	  	
		<ubody></ubody>
 	</ul>
	<div style='margin-top: 10px; text-align:center;' class="border padding" id='paginationrecentlyjoined'></div>
	<?php
}
	?>
	   	  	  	  <!-- pagination jquery for today jobs-->
	   	  	  	  <div class="row" style="text-align:center; margin-top:2%;">
					<div class="social padding">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="http://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
							<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
			</div>

			 </div>
	
	   	  </div>


	   	   <div class="col_3" style=" margin-bottom:5%; padding:3px;">
	<table width="100%" class="background" style="border-collapse: collapse;">
		<th colspan="3"></th>
			<tr><td colspan="2"><h3 class="radius">Articles
</h3> </td>
			</tr>
			<?php
			if($articles==null)
      {
        ?>
        <tr class="border"><td class="padding textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></td></tr>
        <?php
      }
      else
      {
			foreach ($articles as $key ) {
				
			
			?>
			<tr class="border">
<td width="20%">
	<?php

	if(empty($key['recruiter_articleThumbnail']))
	{
		?>
<img src="<?=base_url(); ?>RecruiterarticleImages/ArticleImageNotAvailable.gif" width="70%" class="margintop2 marginbottom2 marginleft2" alt="image not availabe"/>
		<?php
	}
	else
	{
	?>
	<img src="<?=base_url(); ?>RecruiterarticleImages/<?= $key['recruiter_articleThumbnail']; ?>" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="article thumbnail"/>
<?php
}
	$singleid=$key['recruiter_articleUid'];
$uidResult=$this->fetch->fetchlogo1($singleid);
?>
</td>
				<td class="profile_left padding" width="70%"><a href="<?= base_url();?>RecruiterSingleArticle?art=<?= $key['recruiter_articleHeading']; ?>&aid=<?= $key['recruiter_articleId']?>"><?= base64_decode(base64_decode($key['recruiter_articleHeading'])); ?></a><br><font class="authorName" style="font-weight: normal;
	text-transform: capitalize;
	font-size:.7em;
    font-style: italic;
    float:right;
    color:grey;"> <?php
				foreach ($uidResult as $resultkey) {
					$empname=base64_decode(base64_decode($resultkey['recruiter_company_name']));
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
}
	?>

		</table></div>
	   

	 </div>
 
<!--recently joined pagination testing-->

<!-- pagination testing end-->

	 <div class="col-md-4 single_right style">

	 	   <div class="login-form-section">

                <div class="login-content">

                        <div class="section-title">
 <?php 

					if($errorr= $this->session->flashdata('error')):

			    $cart_class=$this->session->flashdata('error_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $cart_class; ?>">

			  
			  <?php echo $errorr ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>



			 <?php 

					if($errorr1= $this->session->flashdata('error1')):



			    $cart_class1=$this->session->flashdata('error_class1');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $cart_class1; ?>">

			  

			  <?php echo $errorr1 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>

			 <?php 

					if($errorr2= $this->session->flashdata('error2')):



			    $cart_class2=$this->session->flashdata('error_class2');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $cart_class2; ?>">

			  

			  <?php echo $errorr2 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>

			 <?php 

					if($errorr3= $this->session->flashdata('error3')):



			    $cart_class3=$this->session->flashdata('error_class3');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $cart_class3; ?>">

			  

			  <?php echo $errorr3 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>

			<?php 

					if($emailfailed= $this->session->flashdata('emailfailed')):



			    $emailfailed_class=$this->session->flashdata('emailfailed_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $emailfailed_class; ?>">

			  

			  <?php echo $emailfailed ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>



			

			 <?php 

					if($passwordchanged= $this->session->flashdata('passwordchanged')):



			    $passwordchanged_class=$this->session->flashdata('passwordchanged_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $passwordchanged_class; ?>">

			  

			  <?php echo $passwordchanged ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>

			 <?php 

					if($emailsent= $this->session->flashdata('emailsent')):



			    $emailsent_class=$this->session->flashdata('emailsent_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $emailsent_class; ?>">

			  

			  <?php echo $emailsent ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>


 

			 <?php 

					if($checkmail= $this->session->flashdata('checkmail')):



			    $checkmail_class=$this->session->flashdata('checkmail_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $checkmail_class; ?>">

			  

			  <?php echo $checkmail ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>
 <?php 

					if($captcha= $this->session->flashdata('captcha')):



			    $captcha_class=$this->session->flashdata('captcha_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $captcha_class; ?>">

			  

			  <?php echo $captcha ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;


			if($verifyrec= $this->session->userdata('verifyrec')):

			    $verifyrec_class=$this->session->flashdata('verifyrec_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $verifyrec_class; ?>">

			  

			  <?php echo $verifyrec ?>


			</div>

			      </div>

			  </div>

			  <?php 

			endif;
		
			?>
			

                        </div>

<div id="loginquery">

                        <div class="row" style="text-align:center;">

                 <h2>Recruiter LogIn</h2>            

        </div>

        	   <form  method="post" >

                        <div class="textbox-wrap" id="emaill">

                            <div class="input-group">

                                <span class="input-group-addon "><i class="fa fa-user fa-2x"></i></span>

                               <!--<input type="text" required="required" name="email" class="form-control" placeholder="Email">-->

                            <?= form_input(['name'=>'email','required'=>'required','class'=>'textinput','placeholder'=>'Email', 'id'=>'RecruiterEmail']); ?></div>

                       

                        </div>

                  

                        <div class="textbox-wrap" id="passwordd">

                            <div class="input-group">

                                <span class="input-group-addon "><i class="fa fa-key fa-2x"></i></span>

                                <input type="password" required="required" name="password" class="textinput" placeholder="Password" id="RecruiterPassword">

                            </div>

                        </div>

                      <div class="textbox-wrap">

                            <div class="col-md-12">
                        <font style="color:red; float:right; display:none;" id="changeFontSpan"><h6><span id="changeFont">1</span>/5</h6></font>
                    </div>
</div>

                        <div class="alert alert-danger" id="errorMsgg" style="display: none;">All fields are required.</div>
                         <div class="alert alert-danger" id="errorMsg1" style="display: none;">You are using wrong email or password.</div>
                         <div class="alert alert-danger" id="errorMsg2" style="display: none;">Password does not match.</div>
                         <div class="alert alert-danger" id="errorMsg3" style="display: none;">Seems like you are a employee.</div>
                          <div class="alert alert-danger" id='err_msg' style='display: none'>
                          	Please confirm captcha to proceed.
                          </div>


                    <div class="textbox-wrap" style="display:none;" id="forget">

                            <div class="input-group">

                                <span class="input-group-addon "><i class="fa fa-key"></i></span>

                                <input type="text" name="femail" class="form-control " placeholder="Enter Your Email">

                            </div>

                     </div>


                       <div class="input-group" id="invalidActivityMsg" style="display: none;">

                               <div class="col-md-12">
                               		<div class="alert alert-danger">
                               			Your account has been disabled due to invalid activity to activate it please visit your email. 
                               		</div>
                               </div>

                     </div>
 


                     <div class="div" id="rememberMeBox">
  <input id="box1" class="checkbox" type="checkbox" />
  <label for="box1">Remember me</label>
  
</div>

                   
				<div class="col-md-8" id="captchaBox">
						
						<div class="g-recaptcha" data-sitekey="6LdqTG0UAAAAAKABd9_AJF2c17pwkZe3OCurc7Kr">
						
						</div>
						
					</br>
						
				</div>

				    <div class="login-btn" id="loginBtnBox" style="text-align:center;">

					   <input type="button" id="submit" class="loginbtn" value="Log in">

					</div>

				 		  <div class="login-btn col-md-12" id="newUserBox" style="text-align:center;">
								<p><b>New user?</b><a  href="<?= base_url(); ?>RecruiterRegistrationStep1" style="cursor:pointer;"> Register </a></br>Forgot Password? <a  style="cursor:pointer;" id="bbutton"> Reset </a></p>
							
				 		 </div>

					     <div class="clearfix"> </div>

			       

					</div>

					 </form>
					  
					
<!--jquery for reruiter login-->

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
            <script type="text/javascript">  
      
            // Ajax post  
            $(document).ready(function(){  
            $("#submit").click(function(){  
            var recruiter_email = $("#RecruiterEmail").val();  
            var password = $("#RecruiterPassword").val();  
             var recruiter_captcha = $("#RecruiterCaptcha").val();  
            // Returns error message when submitted without req fields.  
            if(recruiter_email==''||password=='')  
            {  
          		 $("#errorMsgg").show(500);
            	$('#errorMsgg').delay(2000).hide(500);
            } 
            else if(grecaptcha.getResponse() == '')
            {
            	$("#err_msg").show(500);
            	$('#err_msg').delay(5000).hide(500);
            //jQuery("div#err_msg").show(500);  
            //jQuery("div#msg").html("Please confirm captcha to proceed.");  
            } 
            else  
            {  
            // AJAX Code To Submit Form.  
            $.ajax({  
            type: "POST",  
            url:  "<?php echo base_url(); ?>" + "Recruiter/loginqueryJquery",  
            data: {Remail: recruiter_email, Rpassword: password},  
            cache: false,  
            success: function(result){  

                if(result==1){  
                    // On success redirect.  

              
                   $("#errorMsg1").show(500);
            	$('#errorMsg1').delay(2000).hide(500);
                }  
                if(result==2){  
                    // On success redirect.  
        			//if email match but password not

        			
            		$.ajax({  
            type: "POST",  
            url:  "<?php echo base_url(); ?>" + "Recruiter/invalidAttempts",  
            data: {Email: recruiter_email},  
            cache: false,  
            success: function(resultt){ 

            	//alert(resultt);

            	 var testing=$("#changeFont").val(); 
            	 	$("#changeFontSpan").show(500); 
            	 	if(resultt<=5)
            	 	{
            	 		$("#changeFont").html(resultt); 
            	 		$("#errorMsg2").show(500);
                	$('#errorMsg2').delay(2000).hide(500); 
            	 	}
                	/*else if(resultt>5)
                	{
                		$("#changeFont").html('5'); 
                	}*/
                	//alert(testing);
                	
                	else if(resultt>=5)
                	{
                		if(resultt>5)
                		{
                				$("#changeFont").html('5'); 
                		}
                		else
                		{
                			$("#changeFont").html($resultt); 
                		}
                	
                		$("#myModal").slideToggle(700);
                		$("#rememberMeBox").hide(400);
                		$("#captchaBox").hide(400);
                		$("#loginBtnBox").hide(400);
                		$("#newUserBox").hide(400);
                		$("#invalidActivityMsg").show(400);
                	}
                	
            	//alert(resultt);

            }
        });



                }  
                if(result==3){  
                    // On success redirect.  
             
              
                   $("#errorMsg3").show(500);
            	$('#errorMsg3').delay(2000).hide(500);
                }  
                if(result==4){  
                    // On success redirect.  
   						//alert('4');
                   window.location.replace('<?php echo base_url(); ?>recruiter/afterLogin');  
                }  
                 if(result==5){  
                    // On success redirect.  
   					//alert('5');
                   window.location.replace('<?php base_url(); ?>recruiter/checkRegistrationSteps');  
                }  
              }
              
            });  
            }  
            return false;  
            });  
            });  
            </script>   



<!-- jquery code end for recruiter login-->





                </div>
                	<div class="col-md-12" id="forgetPasswordLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
         <div class="alert alert-danger" id="emailMismatch" style="text-align:center; display: none; ">Email you have entered doesn't exist. Please try again with different one.</div>
          <div class="alert alert-danger" id="errorMsg" style="text-align:center; display: none;">Something went wrong please try again later.</div>
          <div class="alert alert-success" id="successMsg" style="text-align:center; display: none; ">Verification email successfully sent to your email.</div>
                <form id="forgetpassword1" method="post"  style="display:none;">

                        <div class="section-title" style="text-align:center;">

                            <h3>Forget Passwordd:</h3>

                        </div>

                    <div class="textbox-wrap">

                            <div class="input-group">

                                <span class="input-group-addon "><i class="fa fa-key"></i></span>

                                <input type="text" name="email" class="form-control " placeholder="Enter Your Email">

                            </div>

                     </div>

                     <div class="forgot">

						 <div class="login-check">

				 			<!--<label class="checkbox1"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>

				         -->

				     	</div>

				 		  

					     <div class="clearfix"> </div>

			        </div>

					<div class="login-btn" style="text-align:center;">

					   <input type="submit" value="Verify Email" id="verifyEmail">

					</div>



					 <div class="col-md-12" >

				 			<p><a  style="cursor:pointer; background-color:white;" class="loginagain"> Signin Here</a></p>

				 		 </div>

					 </form>


         </div>

   </div>


<div class="col-md-4">
	
<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- sidebar -->
<div class="background margin-bottom" >
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

<div class="background">
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


<div class="col-md-4 display">

	   	  <div class="col_3">
			<div class="background radius">
	   	  	<h3 class="radius">Featured Employeeee</h3>
	   	  	<?php
	   	  		if(empty($checkfeaturedemployee))

	   	  	{
?>
<ul class="list_1"><li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li></ul>
<?php

	   	  	}
	   	  	else
	   	  	{
	   	  		?>
<ul class="list_1" id="featuredemployeeSmall">

	 	<!--<li style="text-align:center;"><div id="loading11" ><img src="<?= base_url(); ?>images/loading.gif" width="25%" height="10%"></img></div>
	 </li>-->

	<ubody>
	</ubody>
</ul>
	<div style='margin-top: 10px; text-align:center;' class="padding border" id='paginationfeaturedemployeeSmall'></div>
	   	  <?php
	   	}
	   	  ?>
<div class="social padding" style="margin-top:2%; text-align:center;">	
	
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
			   </div>
	   	  </div>


	   	  <!-- pagination jquery for today jobs-->
			
 <script src="<?= base_url() ?>/js/featuredEmployeeSmall.js"></script>


	<!--pagination jquery end-->

	   	  <div class="col_3">
			<div class="background radius">
	   	  	<h3 class="radius">Recently Joined</h3>
	   	  	<?php

	   	  	if(empty($checkrecentlyjoined))
	   	  	{
?>
<ul class="list_2" >

	   	  	
	   	  	
		<li class="textalign"><font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font></li>
 	</ul>
<?php
	   	  	}
	   	  	else
	   	  	{

	   ?>

<ul class="list_2" id="recentlyjoined1">

	   	  	
	   	  	
		<ubody></ubody>
 	</ul>
 	<?php
}
 	?>
	<div style='margin-top: 10px; text-align:center;' class="border padding" id='paginationrecentlyjoinedd'></div>
	   	  	
	 
	   	  	  	  <!-- pagination jquery for today jobs-->
	   	  	  	  <div class="row" style="text-align:center; margin-top:2%;">
					<div class="social padding">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="http://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
							<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
			</div>

			 </div>
	
	<!--pagination jquery end-->

<!--<script src="<?= base_url(); ?>js/recruiterloginjs1.js"></script>-->
	   	  </div>

	   	  

	 </div>
	 


   					 <div class="col-md-4 single_right style">

	 	   <div class="login-form-section">

                <div class="login-content">

                    <form action="email" method="post" id="forgetpassword" style="display:none;">

                        <div class="section-title" style="text-align:center;">

                            <h3>Forget Password:</h3>

                            

			

                        </div>

                        	
                        

                     

                    <div class="textbox-wrap">

                            <div class="input-group">

                                <span class="input-group-addon "><i class="fa fa-key"></i></span>

                                <input type="text" name="email" class="form-control " placeholder="Enter Your Email">

                            </div>

                     </div>

                     <div class="forgot">

						 <div class="login-check">

				 			<!--<label class="checkbox1"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>

				         -->

				     	</div>

				 		  

					     <div class="clearfix"> </div>

			        </div>

					<div class="login-btn" style="text-align:center;">

					   <input type="submit" value="Verify Email">

					</div>



					 <div class="col-md-12" >

				 			<p><a  style="cursor:pointer;" class="loginagain"> Signin Here</a></p>

				 		 </div>

					 </form>

					

                </div>



         </div>



   </div>

  <div class="clearfix"> </div>

 </div>



</div>





<div class="container">
<div class="row" style="margin-top:2%;">
	 <div class="col_3 message background refer_earn">
	 	<h3 class="radius">Refer & Earn</h3>
<p style="font-size:1em;  color:#666666;" class="padding">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 
	  <a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
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





//job applied by a user from bottom button
      $('#forgetpassword1').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/email'); ?>",
        data: $('#forgetpassword1').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		//alert('0');
        	$('#forgetPasswordLoading').hide(500);
        	$('#errorMsg').show(500);
        	
        }
        else if(response== 1)
        {
        	//alert('1');
        	$('#forgetPasswordLoading').hide(500);
        	$('#successMsg').show(500);
        	
        }
         else if(response== 2)
        {
        	//alert('2');
        	$('#forgetPasswordLoading').hide(500);
        	$('#emailMismatch').show(500);
        }
        
        }
        
   });

});



      $(document).ready(function () {

    $("#verifyEmail").click(function () {
    
      $("#forgetpassword1").hide(300);
      $("#forgetPasswordLoading").show(300);
    
    });


  });

</script>

</html>	