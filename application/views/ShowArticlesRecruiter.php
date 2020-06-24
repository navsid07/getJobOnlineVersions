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

?><title>Online job portal for job seekers and job providers | Employer profile update :: Get-job.online </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="lattest government jobs, job opportunities, find local jobs, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<!-- script for textarea editors-->
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
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
#reportEmployee
{
  display:none;
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
    include('RecruiterHeader.php');
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
  <ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home</a> </li><li >Articles </li></ul>
    <div class="single "> 
     
       
        <div class="col-md-4">
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
<td width="10%">
  <?php

  if(empty($key['recruiter_articleThumbnail']))
  {
    ?>
<img src="<?=base_url(); ?>articleImages/ArticleImageNotAvailable.gif" width="70%" style="padding:5%;" class="padding"/>
    <?php
  }
  else
  {
  ?>
  <img src="<?=base_url(); ?>articleImages/<?= $key['recruiter_articleThumbnail']; ?>" width="50" height="50" style="padding:5%;" class="padding"/>
<?php
}
$singleid=$key['recruiter_articleUid'];
$uidResult=$this->fetch->fetchlogo1($singleid);
?>
      <td class="profile_left padding" width="90%"><a href="<?= base_url();?>RecruiterSingleArticle?art=<?= $key['recruiter_articleHeading']; ?>&aid=<?= $key['recruiter_articleId']?>"><?= base64_decode(base64_decode($key['recruiter_articleHeading'])); ?></a><br><font class="authorName">- <?php
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
  ?>
    </table></div>
        </div>
	   <div class="col-md-8 col_3">
      <div class="background">
<h3 class="radius">Article</h3>      
        <div class="col_1 " style="margin-bottom:5%;">
       
        
       
      
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
          
?>
<table width="100%" id="deleteArticlediv<?= $articlevalue['recruiter_articleId']; ?>" class="radius" style="background-color: white; text-align:center; border-collapse: collapse;">
  <thead class="radius">
    <tr ><td colspan="2">

      <div class="text-right padding"><img src="<?= base_url(); ?>images/eye20.png" title="Article Views"><?= $articlevalue['recruiter_articleViews']; ?> </div><h1><?= base64_decode(base64_decode($articlevalue['recruiter_articleHeading'])); ?></h1></td></tr>
    <tr><td colspan="2" class="padding"><?= base64_decode(base64_decode($articlevalue['recruiter_articleBody'])); ?></td></tr>
      </thead>
      <tr><td class="padding">
      <?php
      if($checkprevious!=0)
      {
      ?> <a href="<?= base_url(); ?>RecruiterPreviousArticle?aid=<?= $articlevalue['recruiter_articleId']; ?>"><< Previous</a> 
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
        <a href="<?= base_url(); ?>RecruiterNextArticle?aid=<?= $articlevalue['recruiter_articleId']; ?>">Next >>
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
          $sessionId=$this->session->userdata('recruiter_id');
         $sessionCookie=get_cookie('sessionCookieRecruiter');
          $articleuid=$articlevalue['recruiter_articleUid'];
            if($articleuid!=$sessionCookie && $sessionId!=$articleuid && (!empty($sessionId) || !empty($sessionCookie)))
            {
            ?>
            <form action="<?= base_url(); ?>EmployeeArticleBody" method="post"><input type="hidden" name="id" value="<?= $articlevalue['recruiter_articleId'];?>">
            <a id="report" style="cursor:pointer;">Report Article</a></form>
            <?php
          }
          elseif(empty($sessionCookie) && empty($sessionId))
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
      
        <input type="hidden" name="articleId" value="<?= $articlevalue['recruiter_articleId']; ?>">

      <input type="radio" name="category" value="Unresponsive" > Unresponsive</td></tr>
      <tr><td class="padding" colspan="2" style="text-align: center;"><textarea class="form-control" name="description" Placeholder="Write something about your report"></textarea></td></tr>
      <tr><td class="padding" colspan="2"><input type="submit" class="editbutton"value="Submit Report"></td></tr>
    </form>
  </table>


</td></tr>
          </td></tr>


      <?php
      
            if($sessionCookie==$articleuid || $sessionId==$articleuid)
            {
      ?>
      <tr><td class="padding" colspan="2">
            <form action="<?= base_url(); ?>RecruiterSubmitArticle" method="post"><input type="hidden" name="id" value="<?= $articlevalue['recruiter_articleId'];?>">
            <button type="submit" class="btn btn-danger btn-sm">Edit Article</button></form></td></tr>
          <tr><td class="padding" colspan="2">
<form id="deleteArticle<?= $articlevalue['recruiter_articleId']; ?>" method="post">  
<input type="hidden" name="id" value="<?= $articlevalue['recruiter_articleId']; ?>">         <button type="button" class="btn btn-primary btn-sm" onclick="deleteArticle(<?= $articlevalue['recruiter_articleId']; ?>)">Delete Article</button></form></td></tr> </table>
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

 </div>

</div>
<div class="row">
<div class="col-md-12">
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

<script type="application/javascript">
  function deleteArticle(id)
 {

    var paramstr=$("#deleteArticle" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/deleteArticle",
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
        url: "<?php echo base_url('recruiter/reportArticle'); ?>",
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