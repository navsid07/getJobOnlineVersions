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
?><title> Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job providers and job seekers." />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>
<link rel="canonical" href="<?= base_url(uri_string()); ?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
function checkpassword()
{
	var password=$('#password').val();
	var passwordagain=$('#passwordagain').val();
	if(password != passwordagain)
	{
		//$("#error").html("Password do not match");
		$("#match").show();
		$("#submit").hide();
	}
	else
	{
		$("#submit").show();
		$("#match").hide();
		//$("#error").html("Password matched");
	}
}
</script>

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
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
<?php
$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
?>

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
                            foreach ($category as $value) {
                                
                        ?>
			           <li><a href="<?= base_url(); ?>EmployeeSearch?category=<?= base64_encode(base64_encode($value['submitjob_category'])); ?>"><?= $value['submitjob_category']; ?></a></li>
                 
			           <?php
                        }
                       ?>
		            </ul>
		        </li>
		       
		        
                  <li><a href="wishlist">My Shortlist</a></li>
		        <li><a href="editprofile">Edit Profile</a></li>
		     <!--  <?php
                        foreach ($data as $value) {
                            
                        ?>
                         <li><a href="<?= base_url(); ?>employee/addbalance">My Balance: <?php echo $value['employee_balance'].'/-';  ?></a></li>
                       <?php
}
                       ?>-->
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
	    </div>

<?php
}
else
{
?>


	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php
                include('GetJobHeaderLi.php');
            ?>
	        </ul>
	    </div>
	     <?php
	}
	    ?>
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
			<form action="<?= base_url(); ?>startSearch" method="post">
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
       <div class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></div>
        </form>
			</p>
           </div>
		</div>
   </div> 
</div>	



<div class="container margintop2">
	<ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Employee Registration</li></ul>
	 <?php 

					if($emailagain1= $this->session->flashdata('emailagain1')):



			    $emailagain1_class=$this->session->flashdata('emailagain1_class');

			    ?>

			   <div class="row">

			      <div class="col-lg-12">

			          <div class="alert alert-dismissible <?php echo $emailagain1_class; ?>">

			  

			  <?php echo $emailagain1 ?>

			</div>

			      </div>

			  </div>

			  <?php 

			endif;

			?>
	
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

 <div class="col-md-8">
     <div class="single">  
	   <div class="form-container background padding">
       <?php
	   	if(!empty($editstatus))
	   	{
	   		?>
	   		  <h2>Edit Profile</h2>
	   		<?php
	   	}
	   	else
	   	{
	   	?>
        <h2>Employee Registration</h2>


         
			


         <?php 
		}			if($register= $this->session->flashdata('register')):

			    $register_class=$this->session->flashdata('register_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $register_class; ?>">
			  
			 			 <?php echo $register ?>

					  </div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

              <?php 
                    if($imageerror= $this->session->flashdata('imageerror')):

                $imageerror_class=$this->session->flashdata('imageerror_class');
                ?>
               <div class="row">
                  <div class="col-lg-12">
                      <div class="alert alert-dismissible <?php echo $imageerror_class; ?>">
              
                         <?php echo $imageerror ?>

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
      <?php 
          if($samemail= $this->session->flashdata('samemail')):

          $samemail_class=$this->session->flashdata('samemail_class');
          ?>
         <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-dismissible <?php echo $samemail_class; ?>">
        
        <?php echo $samemail ?>
      </div>
            </div>
        </div>
        <?php 
      endif;
      ?>

        <form action="<?= base_url(); ?>EmployeeRegistrationStep3" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>
            <?php
                	if(!empty($editstatus))
                	{
                	?>
                	<input type="hidden" name="editstatus" value="<?= $editstatus; ?>">

                   <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Contact</label>
                <div class="col-md-9">
                  <?php
                  foreach ($data as $key) {
                    
                  
                  ?>
                    <input type="text" name="contact" placeholder="You contact" value="<?= base64_decode(base64_decode($key['employee_phone']));?>" id="contact" class="form-control input-lg"/>
                     <br>
                    <div class="alert alert-danger" id="limitedNumber" style="display:none;">
                      Please enter a valid phone number.
                    </div>
                    
          
                    
                    <?php
                    }
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
                </div>
            </div>
         </div>
                	<?php
                }
                else {
                  
                
                	?>
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Contact</label>
                <div class="col-md-9">
                    <input type="text" name="contact" placeholder="You contact" id="contact" required="" class="form-control input-lg"/>
                     <br>
                    <div class="alert alert-danger" id="limitedNumber" style="display:none;">
                      Please enter a valid phone number.
                    </div>
                    
					
                    
                    <?php
         if(!empty($status) && !empty($emaiil))
         {
         	?>
         	<input type="hidden" value="<?= $status; ?>" name="status">
         		<input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
                </div>
            </div>
         </div>
         <?php
       }
         ?>
         
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Date of birth</label>
                <div class="col-md-9">
                    <input type="date" name="dob" required="" class="form-control input-lg"/>
                    
                </div>
            </div>
         </div>
       
       
         
        
       
         
        <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="submit" class="btn regularButton btn-lg">Submit</button>

                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
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

</div>

<div class="container">
<div class="row" style="margin-top:2%;">
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
<script>
$( "#contact" ).keyup(function() 
        {
  
             var contact = $("#contact").val();
              
              var aa= contact.length;
              if(aa>10)
              {
                $('#contact').val(contact.substring(0,contact.length - 1));
                $("#limitedNumber").show(400);
                $("#limitedNumber").delay(2000).hide(400);
                
              }

        });
</script>

</html>	