<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html  lang="en">
<head><?php

include 'fav.php';
include 'googleadvertisement.php';

$session=$this->session->userdata('employe_id');

?><title>Online job portal for job seekers and job providers.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Job search, job, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for job online" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates." />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<style>
	input:checked {
		
    height: 50px;
    width: 50px;
}
</style>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>

<style>
	
.textt
{
	margin: 10px 0;
    border: 1px solid #999;
    color: #999;
    background: none;
    padding: 8px;
    outline: 0;
    font-size: .85em;
    width:16%;
}

.btn-primary
{

	background-color:#d3404e; 
}

.marginleftright
{
	margin-left: 10px;
	margin-right: 10px;
}

</style>
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
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            	<?php
		            	if($category=='' || $category==null)
		            	{
		            		?>
							 <li>Sorry! No result found</li>
		            		<?php
		            	}
		            	else
		            		{
		            	foreach ($category as $value) {
		            	 	
		            	?>
			            <li><a href="<?= base_url(); ?>EmployeeSearch?category=<?= base64_encode(base64_encode($value['submitjob_category'])); ?>"><?= $value['submitjob_category']; ?></a></li>
			            <?php
			        }
			    }
			            ?>
			       </ul>
		        </li>
		        
		        
		       
		                 <li><a href="<?= base_url(); ?>EmployeeWishlist">My Shortlist</a></li>

			            <li><a href="<?= base_url(); ?>EditEmployee">Edit Profile</a></li>
			         
			            <?php
			            foreach ($data as $value) {
			             	$status=$value['employee_referral_status'];
			             	if($status!=1)
			             	{
			            ?>
			             <li><a href="<?= base_url(); ?>referral?q=<?= $value['employee_email']; ?>" title="Get started Refferal program">Refer & earn</a></li>
			           
			            <?php
			        }
			        else
			        {
			            ?>
			             <li><a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard">Referral Dashboard</a></li>
			           
						<?php
					}
						}
						?>
			            <li><a href="<?= base_url(); ?>EmployeeLogout">Logout</a></li>


			           <?php
	       $countryCookie=get_cookie('countryCookie');
	       if($countryCookie=='Canada')
	       {
	       	$cookieValue='India';
	       	$cookie='IN';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="indian flag"/></a></li>
	        </ul>
	        
	        <?php
	       }
	       elseif($countryCookie=='India')
	       {
	       	$cookieValue1='Canada';
	       	$cookie1='CA';
	       	?>
	       	 <ul style="list-style-type:none; margin-top:8px;">
	        	 <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
	        </ul>
	       	<?php
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

<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Add Credits</span></li></ul>

    <div class="single">  
	   <div class="form-container">
        

         <?php 
					if($emailexist= $this->session->flashdata('emailexist')):

			    $emailexist_class=$this->session->flashdata('emailexist_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $emailexist_class; ?>">
			  
			 			 <?php echo $emailexist ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
 
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
			?>
			<?php 
					if($loginemailfailed= $this->session->flashdata('loginemailfailed')):

			    $loginemailfailed_class=$this->session->flashdata('loginemailfailed_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $loginemailfailed_class; ?>">
			  
			  <?php echo $loginemailfailed ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
			
			<h2>Add Balance</h2>
		
			
        	<div class="col-md-2 margintop2">
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
			<div class="col-md-8 margintop2">

			<div class="alert alert-info" style="text-align:center;">
  				
  				<?php
  				$balancevalue=array();
  				foreach ($data as $value) {
  				$balancevalue=$value['employee_balance'];
  					if($balancevalue>25)
  					{
  					?>
  					<h4 class="fontSize"> There is a benefit of keeping some credit(s) in your wallet to search & apply for a job any time. 
  		
  					<?php	
  					}
  					else
  					{
  				?>
  <h4 class="fontSize"><strong>Please Note! </strong>   Add some credit(s) to your wallet in order to search and apply freely. 
  			
  			</h4>
  		
  			<?php
  		}
  		$balancestatus=$balancevalue;
        	
        		
        	?>
  			<p style="margin-top:2%;" class="fontSize">Your <font color="#f15f43">Current credit(s) are <?= 'Rs.'.$value['employee_balance']; ?></font> To add more credit(s) please select Below.</p>
        <!--<form action="<?= base_url(); ?>payumoney/payusubmit" method="post">
        	
        	<input type="hidden" name="email" value="<?= $value['email']; ?>">
        	<input type="hidden" name="mobile" value="<?= $value['phone']; ?>">
        	<input type="hidden" name="firstName" value="<?= $value['name']; ?>">
        	<input type="hidden" name="lastName" value="<?= $value['name']; ?>">

     	<p> <input type="radio" class="option-input radio" name="totalCost" value="200" />
     		<font size="5em" style="margin-right:10px;"> 200</font>
     	 <input type="radio" class="option-input radio" name="totalCost" value="300"  />
     		<font size="5em"  style="margin-right:10px;"> 300</font>
     	 <input type="radio" class="option-input radio" name="totalCost" value="400"  />
     		<font size="5em"  style="margin-right:10px;">400</font>
      <input type="radio" class="option-input radio" name="totalCost" value="500"  />
     		<font size="5em"  style="margin-right:10px;" >500</font>
     	
<p style="margin-top:2%;"><input type="submit" id="editbutton" value="+ Add balance">
         <?php

         ?>
         </form>--><?php
         }
         ?>
     </br>
         <form action="<?= base_url(); ?>payumoney/payusubmitemployee" method="post">
         

         <input type="hidden" name="email" value="<?= $value['employee_email']; ?>">
        	<input type="hidden" name="mobile" value="<?= $value['employee_phone']; ?>">
        	<input type="hidden" name="firstName" value="<?= $value['employee_name']; ?>">
        	<input type="hidden" name="lastName" value="<?= $value['employee_name']; ?>">
       
		 <div class="btn-group-toggle" data-toggle="buttons">
  
  <label class="btn btn-primary active">
    <input type="radio" checked="checked" class="marginleftright" name="totalCost" id="option1" value="200" autocomplete="off" > 200
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="totalCost" id="option2" value="300" autocomplete="off"> 300
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="totalCost" id="option3" value="400" autocomplete="off"> 400
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="totalCost" id="option2" value="500" autocomplete="off"> 500
  </label>
  </div>
<p style="margin-top:2%;">
 <input type="submit" class="editbutton" value="Add credits">
</p>
</form>
         </br>
         
    <!--      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
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
    </div>
 </div>
<div class="col-md-2">
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
<div class="container">
<div class="row background refer_earn" style="margin-top:2%; margin-bottom:2%;">
	 <div class="col_3 message">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	 </div>
	  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	</div>
</div>
<?php include 'footer.php'; ?>
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
</body>
</html>	
