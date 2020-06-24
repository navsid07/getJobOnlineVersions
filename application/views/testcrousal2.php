<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!doctype html>
<html amp lang="en">
<head><?php
include 'fav.php';
?><title>Find a job and get recruited online | Get Job Online</title>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">

<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online,job recruitment" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<link href="<?= base_url(); ?>css/style3.css" rel='stylesheet' type='text/css'/>
<link rel="canonical" href="<?= current_url(); ?>"  />



<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css'/>

<script>
$(function() {
  $('#breadcrumbs').breadcrumbsGenerator();
});
</script> 
<!----font-Awesome---->


<!-- end-->
<style>
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

/*new slider coding*/
.testimoniall{
    background: #fff;
    text-align: center;
    padding: 30px 30px 50px;
    margin: 0 15px 0;
    position: relative;
    
}


.testimoniall .pic{
    display: inline-block;
    border: 6px solid white;
    border-radius: 50%;
    box-shadow: 0 0 2px 2px grey;
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.testimoniall .pic img{
    width: 100%;
    height: auto;
}

    .pic img{
        width: 100% !important;
        height: 50%;
    }


    .testimoniall1{
    background: #fff;
    text-align: center;
    padding: 30px 30px 50px;
    margin: 0 15px 0;
    position: relative;

    
}


.testimoniall1 .pic1{
    display: inline-block;
     border: 6px solid white;

    box-shadow: 0 0 2px 2px grey;
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.testimoniall1 .pic1 img{
    width: 150px;
    height: auto;
}

    .pic1 img{
        width: 10%;
        height: 10px;
    }
   /*.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
   
    color: red;
}*/



</style>
<!-- sliders-->
<!-- new crousal testing-->


<style>

/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{

    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);

}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}

.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

</style>

<script type="text/javascript">
   $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>


<!-- sliders code end-->
</head>

<body style="background-color:#f5f5f0; margin: 0;">
	<!--<div class="container">
  <h2>Our  Partners/ Our Clients</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
   
</div>-->

<div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="<?= base_url(); ?>CookiePolicy" target="_blank">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
        I agree
    </button>
</div>

	 <!--<picture>
  <source media="(max-width: 25em)"
          srcset="<?= base_url(); ?>images/a1.jpg">

  <source media="(max-width: 48em)"
          srcset="<?= base_url(); ?>images/a1.jpg">

  <img src="<?= base_url(); ?>images/a1.jpg"
      alt="The iPhone Safari web browser showing the RICG website.">

</picture>-->


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

<div class="row">
	<div class="col-md-5 left padding-modal">
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAVASURBVHhe7Z0LiFRVAIY3bTMtK4mSyB4SmkQKRVQSlSBBD3pBEYQh9qKwKKJIogLLDCGxIiIKpAdCTwwSoxItQSpMMAR7oIQQGfbONDPd7TtzfmHI2WVmd+695977f/Azd2Zn7vn//yzDsnPPmR5jjDHGVJj+/v4ROjQpwIT0oo/7+vpu5vZwPWyKhMlYxmT0c/sTegJN0I9METAX14cJOQATshe9gS7QU0yeUPxYtEfz8X++4Gez0Sg93eQBha/UBLSEn/+IHkMn6CUmS+j89lj94DAh4e1sGTpPLzVZEH7z0X713hY8/3N0I4eH6TSmm1Dup7HqzuB129GjaLxOZboB3c6LFQ8NJmQPehWdo1Oa4UCnU2K1w4dJWYdu4LBXpzdDgRK/jpV2B873PXoIHachTCdQ3CJ12VU4799oKTpLQ5l2oLDp6jAzGOMTdB2Hh2pYMxCUNIKytjeayxjG2YYeRMdqeNMKCnpRneUC4+0OY6KpsmCaoZjL1VXuMPZqbq5BI2XHUMootLPRUEEw/nfofg6Pka16QxFvNpopGCblL/QCOkPW6gkFzFInSYCfwIfoSu7W72NnQo8j/N5GG4mBry3oXg6Plt16QOhVsYI0wd+f6Dl0uixXG4LerexJg8/A++gy7lb37YxwJ4ekjdQlAbvfoLvQWMWoFgTboKylAt9/oKfRJEWpBgR6RBlLCf73oxXoEu4eoljlhSDTYrTyQ5av0J3oCMUrJwTYqkyVgDy/ocVooiKWC4wvUZZKQa7wdrYczVTUcoD3GTFCdWFSNnETLoUao9jpgsmRGP45GK865PwFLUKnKH6a4PXlaLkeMCH70NvoYlWQFngMn1HUEiZlI0pruQZmxmBqd8NhTSF/WK6xEKWxXAMj78pbraGHf1HxyzUwMEeejKCTDaiY5RoMejzaJy+mCXoJyzUeR/ku12DAtfJgWkA/B5ZrnK/KsoWBZqGPrLbk9ZrGGGOMMeWEP+MW6k9uMwj0lM+/8Rlgs8Y0LaCfTeg2DrP/oIuBJsdhTTP0UsxHwQz4gDwYoI9wscRTqJiLJRh4nbzUGnrYjO5AxV1OxODjUUdbb1SJkB29h9K44A4jt0ZrteN3si9Bp6mKNMDQChmsBeQNF23PReldtI2/IzE20AZnlYGM4W1pJbqUu+leB4zBsMi/spAvLPx5Fk1W5LTB6GvyXinI9S26Bx2lqOmD714M/xojlB+yBD5AV3C3fKutMD4zRik35NiJnudwiqKVE0I8EyOVE/xvRfdxWI0NCAizLUYrD3gOrEJXcbc6i0AJdHaMWA7wuwuFXR/OVIRqQbD5ypo0+Az7ooR/fI6T9WpCyI0xcprgbw26lsPq7xxE0IkxdlrgK+yt9RKaJqv1gMBhL5FkwE/442Iet/XcfY7ga2IVxYKPtaje+zOG30JU2FXujO0dTJuhiNnqJlcY13v8toJClqujXGA874I9EBQzGu2KVWUHY4R94l9B3id+MCjoanWWCZz/B+RvUmgXilqq7roK5/0M+btGOoGywo4NOxoNdgHO9Q8Ky7vO1RCmEyjuInU5LDhPWAA5H/n7qoYDBS5Wp0OC169HNyF/o1s3oMgt6rZteE1Ydfo6mq7TmG5AoVPVcVvw/B1oATpRpzDdhGIfVteDwvPCzgVzkN+WsoSC16vzg+BnYW+Pt9CFerrJEoqegA7an5eHwu43T6KT9FSTBxQ+V3PQgPtfolvQaD3F5AnFh28dCDuovcN8zNDDpgiYhPDlLQuYiFP1kDHGGGOMMcYYY4wxxjTR0/Mf0pDsulPi9WMAAAAASUVORK5CYII=" alt="Icon"></br><span>GET</span></br><label>STARTED</label>
		
	</div>
	<div class="col-md-7 right">
  <span class="close">&times;</span>
  <form id="newsletterIndex" method="post" style="margin-top:3%; ">
  <font class="form-title">Never miss any update for job openings.Type in your email address to stay on pace.</font></br>
  
  <input type="text" name="email" placeholder="Enter Your Email here" class="form-control">
  <button type="submit" style="margin-top:2%; margin-left:35%;"class="signupbutton">Sign me up</button>

</form>
<div class="alert alert-success" id="newsletterSuccessMsg" style="display:none;">Successfully enrolled.</div>
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
	        	 <li ><a class="classli" href="<?= base_url(); ?>">Home</a></li>
		      
		      
			          
			            <li><a href="<?= base_url(); ?>EmployeeLogin">Employee</a></li>
			 
			            <li><a href="<?= base_url(); ?>RecruiterLogin">Recruiter</a></li>
			           
			            
		         		<li><a href="<?= base_url(); ?>AboutUs" >About Us</a></li>
		        		<li><a href="<?= base_url(); ?>ContactUs" >Contact Us</a></li>
		        		<li><a href="https://blog.therevew.com" target="_blank">Blog</a></li>
	       <?php
	       $countryCookie=get_cookie('countryCookie');
	       if($countryCookie=='Canada')
	       {
	       	$cookieValue='India';
	       	$cookie='IN';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="Indian flag"/></a></li>
	        </ul>
	        <?php
	       }
	       elseif($countryCookie=='India')
	       {
	       	$cookieValue1='Canada';
	       	$cookie1='CA';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="Canadian flag"/></a></li>
	        </ul>
	       	<?php
	       }
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
		       include('RecruiterheaderLi.php');
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
	<!-- Trigger/Open The Modal -->

	<div id="spacer">
		&nbsp;
	</div>
<div class="banner" style="margin-top:20px;">
	<div class="container">
		<div id="search_wrapper">
		 <div id="search_form" class="clearfix">
		 <h1>Start your job search</h1>
		 <p>
		    <form action="<?= base_url(); ?>Employee/searchNoSession" method="post">
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
		            		
		            		foreach ($category as $value) {
		            	?>
			         <option value="<?= $value['submitjob_category']; ?>" ><?= $value['submitjob_category']; ?></option>
			            <?php
			        }
			    //}
		            	?>
			 </select>
			 <input type="text" class="text" name="location" placeholder="Location" >
			 <div class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></div>
				</form>
			</p>
            <h2 class="title"></h2>
         </div>
         <?php
         if($country=='India' || $country=='india' || $country=='INDIA')
         {
         	$categoryy=$categoryindia;
         ?>
		 
	     <?php
	 }
	 elseif($country=='Canada' || $country=='canada' || $country=='CANADA')
	 {
	 	$categoryy=$categorycanada;
?>


<?php
	 }
	     ?>
       </div>
   </div> 
</div>	
<ul id="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><li><span itemprop="name">Home</span> </li></span></ul>



<div id="">
<div class="container">
  <div class="grid_1">
	 <h3>Featured Employers</h3>
	
	<div class="container" style="margin-bottom: 5%;">
        <div class="row">
            <div class="col-md-12 background">
            	
            		<?php
	 	if($logo==null)
	{
		?>

		<ul style="text-align:center;" class="padding copyclass">
		<li style="display:inline; " class="padding">
	   		<font size="3.5em" color="blue">Sorry! no result found.
	   	  			</font>
		 </li>
		
	</ul>

	<?php
}
else
{
	?>

	 
                      
       <section class="customer-logos slider">
          <?php
      foreach ($logo as $value) {
?>
 <div class="testimoniall1">

<?php
    if(empty($value['recruiter_logo']) || $value['recruiter_logo']=='' || $value['recruiter_logo']==null)
              {
                
              ?>

              
      <div class="slide">
         <div class="testimonial-content">
                          <a href="<?= base_url(); ?>Single?uri=<?= $value['recruiter_id']; ?>">  <div class="pic1"><img src="<?= base_url(); ?>images/logonotavailable.gif" alt="logo not available"></img></div>
                           
                            <span class="post" style="text-align: center;"><br><?php $nameLength=base64_decode(base64_decode($value['recruiter_company_name'])); 
                             $nameLength2=strlen($nameLength);
                             if($nameLength2>=16)
                             {
                              $namelength3=substr($nameLength, 0,13);
                              echo $namelength3.'...';
                             }

                             else
                             {
                              echo $nameLength;
                             } ?></span></a>
                        </div>
</div>
              <?php

              }
              else
              {
                
              ?>
     
         <div class="slide">
            <div class="testimonial-content">
          <input type="hidden" name="singleid" value="<?= $value['recruiter_id']; ?>">

                <a href="<?= base_url(); ?>Single?uri=<?= $value['recruiter_id']; ?>"><div class="pic1"><img src="<?= base_url(); ?>logo/<?= $value['recruiter_logo']; ?>"  alt="Employee"/></div> <span class="post"><br>

                
                  <?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></span></a></div>
</div>
      <?php
     }
     ?>
</div>
     <?php
   }
     ?>
        
<!--
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>-->
     
   </section>
                    
                        
                  
	<?php
}
	   	/*foreach ($logo as $value) {
	   		
	  ?>
	  		 <div class="testimoniall1">
	  <?php
		if(empty($value['recruiter_logo']) || $value['recruiter_logo']=='' || $value['recruiter_logo']==null)
	      			{
	      				
	      			?>
	      			
		 <div class="testimonial-content">
                          <a href="<?= base_url(); ?>Single?uri=<?= $value['recruiter_id']; ?>">  <div class="pic1"><img src="<?= base_url(); ?>images/logonotavailable.gif" alt="logo not available"></img></div>
                           
                            <span class="post"><br><?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></span></a>
                        </div>
	      			<?php

	      			}
	      			else
	      			{
	      				
	      			?>
	   
	   		 <div class="testimonial-content">
	   			<input type="hidden" name="singleid" value="<?= $value['recruiter_id']; ?>">

	      			  <a href="<?= base_url(); ?>Single?uri=<?= $value['recruiter_id']; ?>"><div class="pic1"><img src="<?= base_url(); ?>logo/<?= $value['recruiter_logo']; ?>"  class="img-responsive" alt="Employee"/></div> <span class="post"><br>

	      			  
	      			  	<?= base64_decode(base64_decode($value['recruiter_company_name'])); ?></span></a></div>

		 	<?php
		 }
		 ?>
		 </div>
		 <?php
		 }*/
		 ?>

		 <?php
		
		 	?>
     

            
        </div>
 </div>


	 </div>
	 <div class="looking">
<div class="row" style="text-align:center;">
	 <div class="col-md-6"><h2>Are You Looking For a Job?</h2>
	<!--<a href="<?= base_url(); ?>employee"  style="text-decoration:none;"></a></div> 
-->
</br>
<a href="<?= base_url(); ?>employee" class="signupbutton signupbutton1 ">Employee Signup</a></div>

	 <div class="col-md-6"><h2>Are You Looking For an Employee?</h2>
</br>
	
	  <a href="<?= base_url(); ?>RecruiterRegistrationStep1" class="signupbutton">Recruiter Signup</a><!--<a href="<?= base_url(); ?>recruiter" class="signupbutton" style="text-decoration:none;">Employer/ Recruiter Signup</a>--></div>
</div>
</div>

	 <div class="col_3 message background margintop2">
	 	<h3 class="radius">Top Cities</h3>
	 	<div class="container">
        <div class="row">
            <div class="col-md-12">

                 <section id="testimonial-slider1" class="customer-logos slider">

                  <?php
        if($country=='India' || $country=='india' || $country=='INDIA')
         {
          $categoryy=$categoryindia;
         ?>
      <div class="slide">
    
    <div class="testimoniall">
    
       <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="<?= base_url(); ?>Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a></div>
    </div>

      <div class="slide">
         <div class="testimoniall">
 <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of mumbai" width="10px"></div><a href="<?= base_url(); ?>Search?city=mumbai" title="mumbai Jobs"><span  class="post" itemprop="name"><br>Mumbai</span></a>  
      </div></div>

      <div class="slide">
        <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of noida" width="10px"></div><a href="<?= base_url(); ?>Search?city=noida" title="noida Jobs"><span  class="post" itemprop="name"><br>Noida</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
        <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of delhi" width="10px"></div><a href="<?= base_url(); ?>Search?city=delhi" title="delhi Jobs"><span  class="post" itemprop="name"><br>Delhi</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
        <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of ludhiana" width="10px"></div><a href="<?= base_url(); ?>Search?city=ludhiana" title="ludhiana Jobs"><span  class="post" itemprop="name"><br>Ludhiana</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
        <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bathinda" width="10px"></div><a href="<?= base_url(); ?>Search?city=bathinda" title="bathinda Jobs"><span  class="post" itemprop="name"><br>Bathinda</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
        
         <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of moga" width="10px"></div><a href="<?= base_url(); ?>Search?city=moga" title="moga Jobs"><span  class="post" itemprop="name"><br>Moga</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
        
         <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of amritsar" width="10px"></div><a href="<?= base_url(); ?>Search?city=amritsar" title="amritsar Jobs"><span  class="post" itemprop="name"><br>Amritsar</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
         <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of mohali" width="10px"></div><a href="<?= base_url(); ?>Search?city=mohali" title="mohali Jobs"><span  class="post" itemprop="name"><br>Mohali</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
         <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of lucknow" width="10px"></div><a href="<?= base_url(); ?>Search?city=lucknow" title="lucknow Jobs"><span  class="post" itemprop="name"><br>Lucknow</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
         <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of hyderabad" width="10px"></div><a href="<?= base_url(); ?>Search?city=hyderabad" title="hyderabad Jobs"><span  class="post" itemprop="name"><br>Hyderabad</span></a>
                           
                         
                        </div>
                    </div>
      </div>

      <div class="slide">
         <div class="testimoniall">
                      
                        
                     
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of chennai" width="10px"></div><a href="<?= base_url(); ?>Search?city=chennai" title="chennai Jobs"><span  class="post" itemprop="name"><br>Chennai</span></a>
                           
                         
                   
                    </div>
      </div>

         <?php
                }
                 elseif($country=='Canada' || $country=='canada' || $country=='CANADA')
   {
                    ?>

                       <div class="slide">
         <div class="testimoniall">
                      
                        <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of toronto" width="10px"></div><a href="<?= base_url(); ?>Search?city=toronto" title="Toronto Jobs"><span  class="post" itemprop="name"><br>Toronto</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of vancouver" width="10px"></div><a href="<?= base_url(); ?>Search?city=vancouver" title="vancouver Jobs"><span  class="post" itemprop="name"><br>Vancouver</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of otawa" width="10px"></div><a href="<?= base_url(); ?>Search?city=otawa" title="Otawa Jobs"><span  class="post" itemprop="name"><br>Otawa</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of montreal" width="10px"></div><a href="<?= base_url(); ?>Search?city=montreal" title="Montreal Jobs"><span  class="post" itemprop="name"><br>Montreal</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of calgary" width="10px"></div><a href="<?= base_url(); ?>Search?city=calgary" title="Calgary Jobs"><span  class="post" itemprop="name"><br>Calgary</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of quebec" width="10px"></div><a href="<?= base_url(); ?>Search?city=quebec" title="Quebec Jobs"><span  class="post" itemprop="name"><br>Quebec</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of edmonton" width="10px"></div><a href="<?= base_url(); ?>Search?city=edmonton" title="Edmonton Jobs"><span  class="post" itemprop="name"><br>Edmonton</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of winipeg" width="10px"></div><a href="<?= base_url(); ?>Search?city=winipeg" title="Winipeg Jobs"><span  class="post" itemprop="name"><br>Winipeg</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of victoria" width="10px"></div><a href="<?= base_url(); ?>Search?city=victoria" title="Victoria Jobs"><span  class="post" itemprop="name"><br>Victoria</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of saskatoon" width="10px"></div><a href="<?= base_url(); ?>Search?city=saskatoon" title="Saskatoon Jobs"><span  class="post" itemprop="name"><br>Saskatoon</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of regina" width="10px"></div><a href="<?= base_url(); ?>Search?city=regina" title="Regina Jobs"><span  class="post" itemprop="name"><br>Regina</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of hamilton" width="10px"></div><a href="<?= base_url(); ?>Search?city=hamilton" title="Hamilton Jobs"><span  class="post" itemprop="name"><br>Hamilton</span></a>
                       
                    </div>
      </div>

       <div class="slide">
         <div class="testimoniall">
                      
                          <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of guleph" width="10px"></div><a href="<?= base_url(); ?>Search?city=guleph" title="Guleph Jobs"><span  class="post" itemprop="name"><br>Guleph</span></a>
                       
                    </div>
      </div>
<?php

}
?>

    </section>
                <!--<div id="testimonial-slider1" class="owl-carousel">

                	<?php
        if($country=='India' || $country=='india' || $country=='INDIA')
         {
         	$categoryy=$categoryindia;
         ?>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bengaluru" width="10px"></div><a href="<?= base_url(); ?>Search?city=bengaluru" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Bengaluru</span></a>
                           
                         
                        </div>
                    </div>
                   	<div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of mumbai" width="10px"></div><a href="<?= base_url(); ?>Search?city=mumbai" title="mumbai Jobs"><span  class="post" itemprop="name"><br>Mumbai</span></a>                
                        </div>
                    </div>


                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of noida" width="10px"></div><a href="<?= base_url(); ?>Search?city=noida" title="noida Jobs"><span  class="post" itemprop="name"><br>Noida</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of delhi" width="10px"></div><a href="<?= base_url(); ?>Search?city=delhi" title="Bengaluru Jobs"><span  class="post" itemprop="name"><br>Delhi</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of ludhiana" width="10px"></div><a href="<?= base_url(); ?>Search?city=ludhiana" title="ludhiana Jobs"><span  class="post" itemprop="name"><br>Ludhiana</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of bathinda" width="10px"></div><a href="<?= base_url(); ?>Search?city=bathinda" title="bathinda Jobs"><span  class="post" itemprop="name"><br>Bathinda</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of moga" width="10px"></div><a href="<?= base_url(); ?>Search?city=moga" title="moga Jobs"><span  class="post" itemprop="name"><br>Moga</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of amritsar" width="10px"></div><a href="<?= base_url(); ?>Search?city=amritsar" title="amritsar Jobs"><span  class="post" itemprop="name"><br>Amritsar</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of mohali" width="10px"></div><a href="<?= base_url(); ?>Search?city=mohali" title="mohali Jobs"><span  class="post" itemprop="name"><br>Mohali</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of lucknow" width="10px"></div><a href="<?= base_url(); ?>Search?city=lucknow" title="lucknow Jobs"><span  class="post" itemprop="name"><br>Lucknow</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of hyderabad" width="10px"></div><a href="<?= base_url(); ?>Search?city=hyderabad" title="hyderabad Jobs"><span  class="post" itemprop="name"><br>Hyderabad</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of chennai" width="10px"></div><a href="<?= base_url(); ?>Search?city=chennai" title="chennai Jobs"><span  class="post" itemprop="name"><br>Chennai</span></a>
                           
                         
                        </div>
                    </div>
                    <?php
                }
                 elseif($country=='Canada' || $country=='canada' || $country=='CANADA')
	 {
                    ?>

                      <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of toronto" width="10px"></div><a href="<?= base_url(); ?>Search?city=toronto" title="toronto Jobs"><span  class="post" itemprop="name"><br>Toronto</span></a>
                           
                         
                        </div>
                    </div>
                   	<div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of vancouver" width="10px"></div><a href="<?= base_url(); ?>Search?city=vancouver" title="mumbai Jobs"><span  class="post" itemprop="name"><br>Vancouver</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of ottawa" width="10px"></div><a href="<?= base_url(); ?>Search?city=ottawa" title="ottawa Jobs"><span  class="post" itemprop="name"><br>Ottawa</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of montreal" width="10px"></div><a href="<?= base_url(); ?>Search?city=montreal" title="montreal Jobs"><span  class="post" itemprop="name"><br>Montreal</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of calgary" width="10px"></div><a href="<?= base_url(); ?>Search?city=calgary" title="calgary Jobs"><span  class="post" itemprop="name"><br>Calgary</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of quebec" width="10px"></div><a href="<?= base_url(); ?>Search?city=quebec" title="quebec Jobs"><span  class="post" itemprop="name"><br>Quebec</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of edmonton" width="10px"></div><a href="<?= base_url(); ?>Search?city=edmonton" title="edmonton Jobs"><span  class="post" itemprop="name"><br>Edmonton</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of winipeg" width="10px"></div><a href="<?= base_url(); ?>Search?city=winipeg" title="winipeg Jobs"><span  class="post" itemprop="name"><br>Winipeg</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of victoria" width="10px"></div><a href="<?= base_url(); ?>Search?city=victoria" title="victoria Jobs"><span  class="post" itemprop="name"><br>Victoria</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of saskatoon" width="10px"></div><a href="<?= base_url(); ?>Search?city=saskatoon" title="saskatoon Jobs"><span  class="post" itemprop="name"><br>Saskatoon</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of regina" width="10px"></div><a href="<?= base_url(); ?>Search?city=regina" title="regina Jobs"><span  class="post" itemprop="name"><br>Regina</span></a>
                           
                         
                        </div>
                    </div>
                    
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of hamilton" width="10px"></div><a href="<?= base_url(); ?>Search?city=hamilton" title="hamilton Jobs"><span  class="post" itemprop="name"><br>Hamilton</span></a>
                           
                         
                        </div>
                    </div>
                    <div class="testimoniall">
                      
                        
                        <div class="testimonial-content">
                            <div class="pic"><img src="<?= base_url();?>icons/IndexCity.png" alt="location of guelph" width="10px"></div><a href="<?= base_url(); ?>Search?city=guelph" title="guelph Jobs"><span  class="post" itemprop="name"><br>Guelph</span></a>
                           
                         
                        </div>
                    </div>
                   <?php
               }
                   ?>
                </div>-->
            </div>
        </div>
 </div>

	
	</div>
   		


 <script>
$(document).ready(function(){
    $("#testimonial-slider1").owlCarousel({
        items:5,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
});
     </script>



	 


	 <div class="col_3 background">
	 	<h3 class="radius">A Message</h3>
<p style=" color:#666666;" class="padding">There is always an opportunity waiting for at the right moment and at right place.We have created the place where you can call the land of possibilities you can look for jobs online on Get-job.online. You can search for jobs apply for online jobs browse through entry level jobs. There are plenty of well paid jobs in india and students can get jobs as they lack exposure.This is the place where you can look for typing jobs, part time jobs, full time jobs, Engineering jobs, It jobs, jobs for freshers.</p>
	 </div>

	
	 <div class="single">  
	   <div class="col-md-4">
	   	 <p> <div class="col_3 background" >
	   	  	<h3 class="radius">Todays Jobs</h3>
	   	 
	   	  	<ul class="list_1" >
	   	  		<?php
	   	  			if($jobs==null)
	   	  			{
	   	  				?>
						<li style="text-align:center;" class="border">

	   	  			
	   	  			<font size="3.5em" color="blue">
	   	  				Sorry! No result found.
	   	  			</font>
	   	  		
	   	  		</li>
	   	  				<?php

	   	  			}
	   	  			else
	   	  			{
	   	  		 foreach ($jobs as $value) {
	   	  			?>
	   	  		<li style="text-align:center;" class="border">

	   	  			
	   	  			<div itemscope itemtype="https://schema.org/Service">
	   	  				<span itemprop="name">
	   	  			<font size="3.5em" color="blue"><a href="<?= base_url(); ?>JobVisitor?uid=<?= $value['submitjob_id']; ?>"  style="color:blue; text-decoration:none;" ><?= $value['submitjob_job_title']; ?></a>
	   	  			</font>
	   	  		</span>
	   	  		</div>
	   	  		</li>
<?php
}
}
?>
	   	  						
	   	  	</ul>
	   	  	<div class="row"style="text-align:center">
	   	  			
	   	  <div class="social padding">	
	
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


	   	   </p>

	   	  <div class="background col_3">
	   	  	<h3>Jobs by Category</h3>
	   	  	<ul class="list_1">
	   	  		<?php
	   	  		if($category==null)
	   	  		{
	   	  			?>
				<li style="text-align:center;" class="border">
	   	  			<div itemscope itemtype="https://schema.org/Service">
	   	  				 <span itemprop="category"><font size="3.5em" color="blue">Sorry! No Result Found</span></div></li>
	   	  			<?php
	   	  		}  
	   	  		else
	   	  		{
	   	  		foreach ($category as $value) {
	   	  		?>
	   	  		<li style="text-align:center;" class="border">
	   	  			
	   	  			<div itemscope itemtype="https://schema.org/Service">
	   	  				 <span itemprop="category"><font size="3.5em"><a href="<?= base_url();?>CategorySearch?category=<?= $value['submitjob_category']; ?>" style="text-decoration:none; color:blue;"><?= $value['submitjob_category']; ?></font></a></span></div></li>
	   	  			
	   	  			<?php
	   	  		}
	   	  		}	?>					
	   	  	</ul>
	   	  	<div class="row" style="text-align:center;">
	   	  	<div class="social padding">	
	
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

	if(empty($key['employee_articleThumbnail']))
	{
		?>
<img src="<?=base_url(); ?>articleImages/ArticleImageNotAvailable.gif" width="70%" class="margintop2 marginbottom2 marginleft2" alt="no image"/>
		<?php
	}
	else
	{
	?>
	<img src="<?=base_url(); ?>articleImages/<?= $key['employee_articleThumbnail']; ?>" width="50" height="50" class="margintop2 marginbottom2 marginleft2" alt="Article thumbnail"/>
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
}
	?>

		</table></div>
	   


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
			    	<span class="seeking-answer-group border">
		    			<span class="seeking-answer-input">
		    			   <input  name="answer" checked="checked"  value="<?= $value['id1']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><h4><?= $value['option1']; ?></h4></span>
		    			</label>
		    		</span>
			    	<span class="seeking-answer-group border">
		    			<span class="seeking-answer-input">
		    			   <input name="answer"  value="<?= $value['id2']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><h4><?= $value['option2']; ?></h4></span>
		    			</label>
		    		</span>
			        <span class="seeking-answer-group padding">
		    			<span class="seeking-answer-input">
		    			   <input name="answer"  value="<?= $value['id3']; ?>" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span"><h4><?= $value['option3']; ?></h4></span>
		    			</label>
		    		</span>
		    		<div class="seeking_vote padding">
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
	   	  		
	   	  	?>
    	        <!--<div class="widget-content" id="voting_answer" style="display:none;"> 
                 <div class="seeking-answer">
			    	<div class="row">
			    			<div class="col-md-6"><h4><?= $value['option1']; ?></h4></div>
			    			<div class="col-md-6"><?= $answer1; ?> Peoples</div>
			    	</div>
			        <div class="row">
			    			<div class="col-md-6"><h4><?= $value['option2']; ?></h4></div>
			    			<div class="col-md-6"><?= $answer2; ?> Peoples</div>
			    	</div>
			        <div class="row">
			    			<div class="col-md-6"><h4><?= $value['option3']; ?></h4></div>
			    			<div class="col-md-6"><?= $answer3; ?> Peoples</div>
			    	</div>	
			     </div>
			
    	       </div>-->
    	       <?php
    	   }
    	       ?>
    	</div>



    	
	 </div>
	
	   <div class="col-md-8 " id='blogList'>
	   <!--	<div class="background">
	   	<div class="col_3" width="100%">
	   		<h3 class="radius">More on our Blog</h3>
	   	</div>

	   	<?php
	  
	   	$rreturn=$this->fetch->test1();
	 
	  	//foreach ($blog as $value) {
	  		
	   	//	$mystr = $value['post_content'];
	   	//	$result = substr($mystr, 0, 50);
	   	
	   		
	   	?>
	     <div class="col_1 border" >
   	        <div class="col-sm-4">
				<a href="https://blog.therevew.com/<?=  $value['post_name']; ?>" target="_blank"><img src="<?= base_url(); ?>images/blogging.jpg" class="img-responsive" alt="image"/></a>
			</div>
			<div itemscope itemtype="http://schema.org/blogPost" class="col-sm-8 row_1">
				<h4>
					<span itemprop="Blog"><a href="http://www.blog.therevew.com/<?= $value['post_name']; ?>" target="_blank"><?=  $value['post_title']; ?></a></span></h4>
				<h6>Posted on: <span class="dot">·</span> <?php
				$yrdata= strtotime($value['post_date']);
    			echo date('M, Y', $yrdata);
				  ?></h6>
				<p></p>
				<div class="social">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.blog.therevew.com/<?= $value['post_name']; ?>">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="http://twitter.com/share?url=http://www.blog.therevew.com/<?= $value['post_name']; ?>">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
							<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
			</div>

			<div class="clearfix"> </div>
		   </div>
		   <?php
		//}
		   ?>
		   <div class="row">
		<div class="col-md-offset-4 col-md-4" style="margin-bottom:2%;">
		  <a href="http://blog.therevew.com" style="color:white; text-decoration:none;"class="editbutton" target="_blank">Read More Blogs >></a>
	    </div>
	</div>
	</div>-->
</div>
	 
</div>
</div>
</div>
</div>

<div class="container">

	 <div class="background col_3 message margintop2 marginbottom2">
	 	<h3 class="radius">Refer & Earn</h3>
<p style="font-size:1em;  font-size:1em; color:#666666;" class="padding">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	   <a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	
</div>
</div>
<?php
   
    include('footer.php');
?>

</body>
<?php
if(empty($this->input->cookie('modalCookie',true)))
{
	?>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function() {
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
}

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
<?php
}
?>

<!--<script src="<?= base_url(); ?>js/analytics.js"></script>
-->
</html>	

<script type="application/javascript">
 function branddetails()
 {

		var paramstr=$("#voting_form").serialize();
		$('#loading_pic').show();
		//alert(paramstr);
		if($.post("<?php echo base_url();?>ajaxcontrol/ajax",
		paramstr))
		{
			$("#votingg").hide();
			$('#success_msggg').show();
		 	 $('#success_msggg').text("Thankyou for submitting your Response.");
			//$("#voting_answer").show();
			
		}

		//function(data) 
		//{
			//alert('hello');
			// $('#success_msggg').show();
		 // $('#success_msggg').text(" Record saved successfully");
			//$("#votingg").hide();
			//$("#voting_answer").show();
		
		 //if(data == "Success")
		 //{
		 	
		  
		 //}
		//});	
		
 }
 </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>-->
<?php
 $cookie= array(
      'name'   => 'modalCookie',
      'value'  => 'modal',
       'expire' => '604800',
  );
  $this->input->set_cookie($cookie);
?>


<script>
	  //job applied by a user from bottom button
      $('#newsletterIndex').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('welcome/newsletterindex'); ?>",
        data: $('#newsletterIndex').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	
        	$('#newsletterIndex').hide(500);
            $('#newsletterSuccessMsg').show(500);
            
        }
        
   });

});
</script><!--
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>-->

