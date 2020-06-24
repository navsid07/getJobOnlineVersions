

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

$employeId=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');

?><title>Find a job and get recruited online | Get Job Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="buisness ideas, job opportunities, career, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome---->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel="stylesheet"> 

<!----font-Awesome---->
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<style>
	label
																	{
																		font-size: 16px;
																		font-weight: bold;
																	}
																	
																		.navbarr{min-height:100px;
																			
																	margin-bottom:0;}
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
</head>
<body >

<nav class="navbarr navbar-default" role="navigation" style="height:10px;">
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
		   	
		   	include('GetJobHeaderLi.php');
		   	
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
		   <div id="search_form" class="clearfix">
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
      itemtype="http://schema.org/ListItem"><li><span itemprop="name"><a href="<?= base_url(); ?>">Home</a></span> </li><li><span itemprop="name">Contact </span></li></span></ul>

<div class="container">
	
    <div class="single background">  
    	 
	   <div class="contact_top">
	   	<p itemscope itemtype="http://schema.org/Organization">
	   	 <h2 style="color:#230046;">Our Address</h2>
	   	 <div class="col-md-4">
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
	     <div class="col-md-4">
	   	   <address class="addr">
                <p class="secondary3">
                     <span itemprop="location">
                   Court Road, Bathinda-151 001(Pb.).</span></p>
                <dl>
                     <span itemprop="contact"><dt>Contact:</dt>
                    <dd>
                        +91 9988 4845 97
                    </dd></span>
                </dl>
                <dl>
                    <span itemprop="contact"> <dt>Office:</dt>
                    <dd>
                        +91 9988 4845 97</span>
                    </dd>
                </dl>
                <dl>
                    <dt>FAX:</dt>
                    <dd>
                        ---------------------------
                    </dd>
                </dl>
                <dl class="email">
                    <dt>E-mail:</dt>
                    <dd>
                        <a href="malito:mail@get-job.online" itemprop="email">mail@get-job.online</a>
                    </dd>
                </dl>
           </address>
          </div>
          
           <div class="col-md-4">
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
          </div>
          <div class="clearfix"> </div>
	   </div>
	   <div class="content_bottom background padding" id="form" style="margin-bottom:3%;">
	 
	   	 <h3 style="color:#230046;">Contact Form</h3>

	   	   <form id="contactForm" method="post">

				<div class="contact_box1">
					
	             	<input type="text" class="text" name="name" placeholder="Name" id="name" required="">
				 	<input type="text" class="text" name="email" id="email" placeholder="Email" style="margin-left:3%" required="">
				 	<input type="text" class="text" name="phone" id="phone" placeholder="Phone"  style="margin-left:3%" required="">
					
				</div>

				<div class="text_1">
	               <textarea placeholder="Message" name="message" id="message" required=""></textarea>
	            </div>

	            <div class="form-submit1 form_but1">
		          <input type="submit" id="submit" value="Submit" class="btn-sm" required="">
		        </div>
		        <div class="col-md-12" id="loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif" width="10%"></div>
             

				<div class="clearfix"></div>

           </form>


	   
    </div>
<div class="col-md-offset-2 col-md-8 alert alert-success" id="successMsg" style="text-align:center; display: none; margin-top: 2%;"><strong>Thankyou for contacting with us!</strong></br> Your Query successfully received. Get job online customer Representative will get in touch with you within 24 hours.</p><p>We Will appreciate your Patience as we are trying our best to answer all the Questions from our respected users.</div>
	   </div>
</div>

</p>
<div class="container">
<div class="map">
	<!--<iframe src="https://www.google.co.in/maps/place/The+Revew/@30.2071461,74.9416444,17z/data=!3m1!4b1!4m5!3m4!1s0x3917329f53ef6d69:0x3790e49fd6b9984f!8m2!3d30.2071461!4d74.9438331?hl=en"> </iframe>
-->
<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJQ_FBUZ8yFzkR7deXkUzVfG4&key=AIzaSyAWhe_S2Fn7R6kl_I3Y22Kwx9LX3zUq39o " allowfullscreen></iframe> 
</div>
</div>
<div class="container">
<div class="row referearn" style="margin-top:2%;">
	 <div class="col_3 message background">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
<a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	  
	</div>
</div>
<?php
include 'footer.php';
?>
</body>
<script>


     $('#contactForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('welcome/contactform'); ?>",
        data: $('#contactForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
               

        }
        else if(response==1)
        {
        	$('#reportForm').trigger("reset");
        	$('#submit').show(300);
        	 $('#form').hide(300);
                $('#loading').hide(300);
                $('#successMsg').show(300);
        
          
           
        }
       
        
        }
    
        
   });

});


$(document).ready(function () {

    $("#submit").click(function () {

    	var name=$("#name").val();
    	var email=$("#email").val();
    	var message=$("#message").val();
    	var phone=$("#phone").val();

	if(empty(name) || empty(email) || empty(message) || empty(phone))
	{

	}
	else
	{
	 	$("#submit").hide(300);
      	$("#loading").show(300);
	}
     
      
    });


  });


function myFunction() 
{

    document.getElementById("modal").style.visibility = "visible";
    
}
window.onload=function()
{
	$("#modal").slideToggle(700);
}


    var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("x");

// Get the <span> element that closes the modal
var span = document.getElementById("x");

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    //modal.style.display = "none";
    $("#modal").slideToggle(700);
}

    //document.getElementById("modal").style.visibility = "hidden";
    

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
</html>			