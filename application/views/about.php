
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head><?php
include 'googleadvertisement.php';

include 'fav.php';

$employeId=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');

?><title>Find a job and get recruited online | Get Job Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal forjob providers and job seekers." />

<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="online jobs, government jobs, buisness ideas, career, lattest government jobs, job, jobs, find local jobs, get job online" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome---->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel="stylesheet"> 
<!----font-Awesome---->
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
	
<nav class="navbarr navbar-default" role="navigation" >
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
	        	?>
		        
		           
		       <?php
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
		<div id="search_wrapper">
		   <div id="search_form" class="clearfix margintop2">

		    <h1>Start your job search</h1>
		     <p>
		    <form action="<?= base_url(); ?>EmployeeSearch" method="post">
			 <select class="textt" name="category">
			 		<option value="">select Category</option>
			 		<?php
		            	/*if(empty($category))
		            	{
		            		?>
		            		<option value=""><a href="#">Categories Coming Soon</a></option>
			        <?php   
		            	}
		            	else
		            	{*/
		            		
		            		foreach ($categories as $value) {
		            	?>
			         <option value="<?= $value['submitjob_category']; ?>" ><?= $value['submitjob_category']; ?></option>
			            <?php
			        }
			    //}
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

<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li ><span itemprop="name"><a href="<?= base_url(); ?>">Home</a> </span></li><li ><span itemprop="name">About</span> </li></span></ul>

<div class="container looking">
    <div class="single">  
       <h2 style="color:#230046;">Advantages</h2>
       <div class="about_top">
	     <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">1.</span>  
					   <div class="item_content">
						<h5><a href="#">Earn More</a></h5> 
						<p> We don't reduce any type of percentage of your Earning. You just paid a little-fixed amount of recruitment or employment.</p>
						<p class="m_1">So, here you get the right value of your work. You just signup and start working. We hope you will enjoy the working with us.</p>
					   </div>
					</li>
			    </ul>
			</div>
	     </div>
	     <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">2.</span>  
					   <div class="item_content">
						<h5><a href="#">Meet new Employee / Employer</a></h5> 
						<p>we have the huge collection of job seekers and job providers,  so you will daily meet new employee/employer.</p>
						<p class="m_1">Daily meet up is really helpful for Job seeker or job provider, because of this you promote yourself free of cost.</p>
					   </div>
					</li>
			    </ul>
			</div>
	     </div>
	     <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">3.</span>  
					   <div class="item_content">
						<h5><a href="#" class="regularColorBlue">Secure Payment method</a></h5> 
						<p>Payment/Balance security is an important factor for everyone.  Because our earning is our hard-earned earning.</p>
						<p class="m_1">Payment method we are using is pay u money. Which is secure and trusted by everyone, So you just working hard and earn safely.</p>
					   </div>
					</li>
			    </ul>
			</div>
	     </div>
	     <div class="clearfix"> </div>
	   </div>
	</div>
</div>
<!--<div class="about_middle">
	<div class="container">
         <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			   	   <h3>Testimonials</h3>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	    <div class="banner-wrap">
				   	 	    <ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="<?= base_url(); ?>images/f5.jpg" class="img-responsive" alt="image"/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main 
										components in one of the best-selling 
										supplemental weight loss products, 
										Hydroxycut., and researchers have 
										concluded that "the evidence for G. 
										cambogia is not compelling.</p>
										<div itemscope itemtype="http://schema.org/Person">
								      <h4><span itemprop="name"><a href="#">annette Doe</a></span> | <span itemprop="company">Abc Company</span></h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	    </div>
					</article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	    <div class="banner-wrap">
				   	 	    <ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="<?= base_url(); ?>images/f6.jpg" class="img-responsive" alt="image"/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main 
										components in one of the best-selling 
										supplemental weight loss products, 
										Hydroxycut., and researchers have 
										concluded that "the evidence for G. 
										cambogia is not compelling.</p>
										<div itemscope itemtype="http://schema.org/Person">
								      <h4><span itemprop="name"><a href="#">annette Doe</a></span> | <span itemprop="company">Abc Company</span</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	    </div>
					</article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	    <div class="banner-wrap">
				   	 	    <ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="<?= base_url(); ?>images/f7.jpg" class="img-responsive" alt="image"/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main 
										components in one of the best-selling 
										supplemental weight loss products, 
										Hydroxycut., and researchers have 
										concluded that "the evidence for G. 
										cambogia is not compelling.</p>
										<div itemscope itemtype="http://schema.org/Person">
								      <h4>
								      	 <span itemprop="name"><a href="#">annette Doe</a></span> |  <span itemprop="company">Abc Company</span>
								      	</h4>
								      	</div>

				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	    </div>
					</article>
				 </div>
				<ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
            </div>
            <script src="<?= base_url(); ?>js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
</div>-->
<div class="about_bottom ">
	<div class="container looking">
		<h3 style="color:#230046;">Our Team</h3>
		<div class="col-md-3">
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
	    <div class="col-md-3 team-member text-center">
		    <img src="<?= base_url(); ?>images/nav.jpg" class="img-responsive img-circle1" alt="image"/>
			<div itemscope itemtype="http://schema.org/Person">
			  <span itemprop="givenName"><h5>Navjot Sidhu</h5></span>
			 <h6>Account Manager</h6>
			 <span itemprop="description"><p>The visionary, The foreseer of the project. The man behind all the ideas and objectives of this franchise. Graduated with coumputer services and giving in everything to make a difference.</p></span>
			</span></div>
			<a href="#"><i class="fa fa-facebook fa1"> </i></a>
			<a href="#"><i class="fa fa-twitter fa1"> </i></a>
			<a href="#"><i class="fa fa-linkedin fa1"> </i></a>
			<a href="#"><i class="fa fa-instagram fa1"> </i></a>
		</div>
		<div class="col-md-3 team-member text-center">
			<img src="<?= base_url(); ?>images/jasss.jpg" class="img-responsive img-circle1" alt="image"/>
			<div itemscope itemtype="http://schema.org/Person">
			 <span itemprop="givenName"><h5>Jastpreet Grewal</h5></span>
			<h6>Website Developer</h6>
			 <span itemprop="description"><p>The wizard, The man behind the magic. Jast Preet Grewal Graduated with computer science and has been a vital part of the frenchise since the beginning.</p>
			</span></div>
			<a href="https://www.facebook.com/jastpreet.grewal"><i class="fa fa-facebook fa1"> </i></a>
			<a href="#"><i class="fa fa-twitter fa1"> </i></a>
			<a href="#"><i class="fa fa-linkedin fa1"> </i></a>
			<a href="#"><i class="fa fa-instagram fa1"> </i></a>
		</div>
		<div class="col-md-3">
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
		<div class="clearfix"> </div>
	</div>	

</div>

<div class="container">
<div class="row background">
	 <div class="col_3 message">
	 	<h3 class="radius">Refer & Earn</h3>
<p style="font-size:1em;  color:#666666;" class="padding">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 </div>
	  <a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	</div>
</div>
<?php 
include 'footer.php';
?>

</body>

<script>
/*function myFunction() 
{
	//$("#modal").slideToggle(400);
	$("#myModal").slideToggle(700);
    //document.getElementById("modal").style.visibility = "visible";
    
}*/
// When the user clicks the button, open the modal 
window.onload = function() {
   // modal.style.display = "block";
   $("#modal").slideToggle(700);
}


    var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal

$("#x").click(function(){
	$("#modal").slideToggle(700);
});

    //document.getElementById("modal").style.visibility = "hidden";
    

</script>
<script src="<?= base_url(); ?>js/analytics.js"></script>
<!-- Load Facebook SDK for JavaScript -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>

<script>
  //job applied by a user from bottom button
      $('#newsletterIndex').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('welcome/newsletterIndex'); ?>",
        data: $('#newsletterIndex').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        
        	
        	$('#newsletterIndex').hide(500);
            $('#newsletterSuccessMsg').show(500);
            
        }
        
   });

});
</script>
</html>		