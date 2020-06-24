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
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. online job portals for job providers and job seekers" />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>
<!--
<script type="text/javascript" src="<?= base_url(); ?>js/nicEdit.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->

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
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

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
#showexperience1,#showexperience2,#showexperience3,#showexperience4,#showexperience5,#showexperience6
{
	display:none;
}

.verifybtn:hover {
  background: #f15f43;
 
  text-decoration: none;
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

    <div id="spacer">
    &nbsp;
  </div>

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


<ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><li><span itemprop="name"><a href="<?= base_url(); ?>">Home</a></span> </li><li><span itemprop="name">Edit Project</span> </li></span></ul>
<div class="container margintop2">
	
	

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
 <div class="col-md-8  ">
     <div class="single background padding">  
	   <div class="form-container">
        <h2>Edit Project</h2>


        <?php
        foreach ($portfolio as $value) {
          
        ?>
        <form action="<?= base_url(); ?>EditEmployee" method="post" enctype="multipart/form-data">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>

            <input type="hidden" name="pid" value="<?= $pid; ?>">
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Project Name<span class="required">*</span></label>
                <div class="col-md-9">

                    <input type="text" name="projectname" class="form-control" value="<?= base64_decode(base64_decode($value['projectName'])); ?>"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Project Link(if any)</label>
                <div class="col-md-9">
                  <?php
                  if(!empty($value['projectLink']))
                  {
                  ?>
                    <input type="text" name="website" class="form-control" value="<?= base64_decode(base64_decode($value['projectLink'])); ?>" />
                    <?php
                  }
                  elseif(empty($value['projectLink']))
                  {
                    ?>
                    <input type="text" name="website" class="form-control" placeholder="Project link here" />
                    <?php
                  }
                  ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Start/End Date</label>
               <div class="col-md-9">
                 <table><tr>
                    <td style="width:50%;"><input type="date" name="startdate" class="form-control" placeholder="Year of published" /></td>
                    <td  style="margin-right: 2%; margin-left: 2%;"><b>TO</b></td><td style="width:50%">
                     <input type="date" name="enddate" class="form-control" placeholder="Year of published" /></td>
                </tr></table></div>
           </div>
        </div>
      <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Year of Published<span class="required">*</span></label>
                <div class="col-md-9">
                    <input type="text" name="yearpublished" class="form-control" value="<?= base64_decode(base64_decode($value['PublishedYear'])); ?>"/>
                </div>
            </div>

        </div>
         <!--<script type="text/javascript" src="<?= base_url(); ?>js/nicEdit.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Project Description</label>
                <div class="col-md-9">
                  <?php
                    if(!empty($value['Description']))
                  {
                  ?>
                    <textarea name="projectdescription" class="form-control" rows="6" ><?= $value['Description']; ?><</textarea>
<?php
}
elseif (empty($value['Description'])) {
?>
<textarea name="projectdescription" class="form-control" placeholder="Give a detailed description.
* What technology did you use?
* What was the project duration?
* What the project demanded?
* Any milestones in the project." rows="6" required=""></textarea>
<?php
}
?>
                </div>
            </div>
        </div>

</div>
         
         
       
         
        <div class="row">
            <div class="form-actions floatRight">
           
               
                <button type="submit" id="submit" class="btn btn-primary btn-sm">Submit</button>

                  <a href="<?= base_url(); ?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
    <?php
  }
  ?>
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

</div>

<div class="container">
<div class="row" style="margin-top:2%;">
	 <div class="col_3 message background">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding"style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
   </div>
	 

	</div>
</div>
<?php
include 'footer.php';
?>
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