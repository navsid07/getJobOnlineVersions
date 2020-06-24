<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'googleadvertisement.php';
    include 'fav.php';

?><title> Employer profile update :: Get-job.online </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="lattest government jobs, job opportunities, find local jobs, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

<!-- script for textarea editors-->
<script src="<?= base_url(); ?>js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<!-- end code for textarea editor-->

<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>
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
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet">

<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<!----font-Awesome-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/editor/ed.js"></script>
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




<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
</head>
<body>

<?php
      include ('RecruiterHeader.php');
?>
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
<div class="container">
  <ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="name">Edit Profile</span></li></ul>
    
     <div class="col-md-2">
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
	   <div class="single">
        <h2>Edit Profile</h2>
         
        <?php
        foreach ($data as $value) {
           
        ?>
        <div class="col-md-12 textalign">
          <a href="<?= base_url(); ?>RecruiterChangePassword?email=<?= $value['recruiter_email']; ?>"><button class="btn regularButton" style="margin-bottom: 2%;">Change Password</button></a>
<!--       Change Password</a>--></div>

        <div class="col-md-offset-3 col-md-6">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Edit Company<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
              <input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
              <input type="hidden" name="step" value="2">
              <input type="hidden" name="editstatus" value="edit">
              <button type="submit" style="border:none; color:#f15f43; background-color: transparent;" >
          <img src="<?= base_url(); ?>icons/editWhite24.png" alt="Icon"></button></form></font></h3></th>
          <?php
          if(!empty($value['recruiter_established']))
          {
            $established=base64_decode(base64_decode($value['recruiter_established']));
          }
          else
          {
            $established='NA';
          }

          if(!empty($value['recruiter_website']))
          {
            $website=base64_decode(base64_decode($value['recruiter_website']));
          }
          else
          {
            $website='NA';
          }

          if(!empty($value['recruiter_employee_strength']))
          {
            $strength=base64_decode(base64_decode($value['recruiter_employee_strength']));
          }
          else
          {
            $strength='NA';
          }
          ?>
          <tr><td class="padding"><b>Year of establishment</b></td><td><?= $established; ?></td></tr>
          <tr><td class="padding"><b>Website</b></td><td><?= $website; ?></td></tr>
          <tr><td class="padding"><b>Employee Strangth</b></td><td><?= $strength; ?></td></tr>
        </table>
        </div>



 <?php
          if(!empty($value['recruiter_category']))
          {
            $category=base64_decode(base64_decode($value['recruiter_category']));
          }
          else
          {
            $category='NA';
          }

          if(!empty($value['recruiter_contact']))
          {
            $contact=base64_decode(base64_decode($value['recruiter_contact']));
          }
          else
          {
            $contact='NA';
          }

          if(!empty($value['recruiter_description']))
          {
            $description=base64_decode(base64_decode($value['recruiter_description']));
          }
          else
          {
            $description='NA';
          }
          ?>
        <div class="col-md-offset-3 col-md-6">
          <table class="col_3 background" width="100%"> 
            <th colspan="2"><h3 class="radius">Company description<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
              <input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
              <input type="hidden" name="step" value="3">
              <input type="hidden" name="editstatus" value="edit">
              <button type="submit" style="border:none; color:#f15f43; background-color: transparent;" >
          <img src="<?= base_url(); ?>icons/editWhite24.png" alt="Icon"></button></form></font></h3></th>
          
          <tr><td class="padding"><b>Category</b></td><td><?= $category; ?></td></tr>
          <tr><td class="padding"><b>Contact</b></td><td><?= $contact; ?></td></tr>
          <tr><td class="padding"><b>Description</b></td><td width="80%"><?= $description; ?></td></tr>
        </table>
        </div>



 <?php
          if(!empty($value['recruiter_state']))
          {
            $state=base64_decode(base64_decode($value['recruiter_state']));
          }
          else
          {
            $state='NA';
          }

          if(!empty($value['recruiter_city']))
          {
            $city=base64_decode(base64_decode($value['recruiter_city']));
          }
          else
          {
            $city='NA';
          }

          if(!empty($value['recruiter_address']))
          {
            $address=base64_decode(base64_decode($value['recruiter_address']));
          }
          else
          {
            $address='NA';
          }
          ?>
        <div class="col-md-offset-3 col-md-6">
          <table class="col_3 background" width="100%">
            <th colspan="2"><h3 class="radius">Address<font style="float:right; cursor: pointer;"><form action="<?= base_url(); ?>RecruiterRegistrationProcess" method="post">
              <input type="hidden" name="id" value="<?= $value['recruiter_email']; ?>">
              <input type="hidden" name="step" value="4">
              <input type="hidden" name="editstatus" value="edit">
              <button type="submit" style="border:none; color:#f15f43; background-color: transparent;" >
          <img src="<?= base_url(); ?>icons/editWhite24.png" alt="Icon"></button></form></font></h3></th>
          
          <tr><td class="padding"><b>state</b></td><td><?= $state; ?></td></tr>
          <tr><td class="padding"><b>City</b></td><td><?= $city; ?></td></tr>
          <tr><td class="padding"><b>Full Address</b></td><td width="80%"><?= $address; ?></td></tr>
        </table>
        </div>

        <div class="col-md-offset-3 col-md-6">

        </div>

        <div class="col-md-offset-3 col-md-6">

        </div>
     
    <?php
}
    ?>
<!--
<div class="col-md-2">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    -->
    </div>


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
<?php
include 'footer.php';
?>

</body>
<script>
function myFunction1() 
{
     var xx = document.getElementById("count");
    var x = document.getElementById("company_description").value;
    xx.style.display="none";
    document.getElementById("company_descriptionresult").innerHTML =x.length;
    if(x.length>1500)
    {
         alert("you have exceeded words limit");
    }

}
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