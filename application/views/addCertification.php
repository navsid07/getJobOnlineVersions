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
?><title>Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online.Online jopb portals for job providers and job seekers." />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>

<!-- progress bar testing-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/progressbar.css">
    <!-- js for animate progress bar-->
    <script src="<?= base_url(); ?>assets/progressbar.js"></script>

<!-- progress bar testig end--> 

  

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><!--
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>-->
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
<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
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

<!-- submit file and progress bar-->


 <script type="text/javascript">
    $(document).ready(function() { 


      

       $('#addCertification').submit(function(e) { 

        //if($('#logoFile').val()) {
          e.preventDefault();

          $("#progress-bar-status-show").width('0%');
          var file_details    =   document.getElementById("file").files[0];
          var extension       =   file_details['name'].split(".");
          
          var allowed_extension   =   ["png", "jpg", "jpeg"];
          var check_for_valid_ext =   allowed_extension.indexOf(extension[1]);

          

          if(file_details['size'] > 4097152)
          {
            $("#largeFile").show(200);
            return false;
          }
          if(check_for_valid_ext == -1)
          {
      
            $("#invalidFormat").show(200);
            return false;
          }
          else
          { 
            //if(file_details['size'] < 2097152 && check_for_valid_ext != -1)
            if(check_for_valid_ext != -1)
            {
              $('#loader').show();
              $(this).ajaxSubmit({ 
                //target:   '#toshow', 
                beforeSubmit: function() {
                  $("#progress-bar-status-show").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){ 
                  $("#progress-bar-status-show").width(percentComplete + '%');
                  $("#progress-bar-status-show").html('<div id="progress-percent">' + percentComplete +' %</div>');               
                },
                success:function (){
                 // $('#loader').hide();
                 $('#successMsgCertification').show(200);
                 window.location.href = "<?= base_url(); ?>EmployeeDashboard";
                  
                },
                resetForm: true 
              }); 
              return false;
            }   
          }    
        //}
      });




     

    }); 
    </script>

<!-- end code submit file and progress file-->

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

.myFile,.myFile1,.myFile2,.myFile3,.myFile4 {
  position: relative;
  overflow: hidden;
  float: left;
  clear: left;
}

.myFile input[type="file"] {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
  font-size: 100px;
  filter: alpha(opacity=0);
  cursor: pointer;
}

.myFile1 input[type="file"] {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
  font-size: 100px;
  filter: alpha(opacity=0);
  cursor: pointer;
}

.myFile2 input[type="file"] {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
  font-size: 100px;
  filter: alpha(opacity=0);
  cursor: pointer;
}

.myFile3 input[type="file"] {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
  font-size: 100px;
  filter: alpha(opacity=0);
  cursor: pointer;
}

.myFile4 input[type="file"] {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
  font-size: 100px;
  filter: alpha(opacity=0);
  cursor: pointer;
}
#imgresult,#imgresult1,#imgresult2,#imgresult3,#imgresult4
{
    border:none;
    background-color: white;
    color: #f15f43;
    font-weight: bold;
}
#msg
{
color:red;
font-weight: bold;
text-align: center;
}


#experience_in
     {
 -webkit-appearance:none;  /* for chrome & safari */
 -moz-appearance: none; /* for mozilla */
  background-image:url("/../icons/selectArrow.png"); 
  /* To hide the orginal dropdown arrow in IE */
  background-repeat: no-repeat; 
  background-position:97% center; 
     }

     #validity
     {
 -webkit-appearance:none;  /* for chrome & safari */

  background-image:url("/../icons/selectArrow.png"); 
  /* To hide the orginal dropdown arrow in IE */
  background-repeat: no-repeat; 
  background-position:97% center; 
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
       <form action="<?= base_url(); ?>EmployeeSearch" method="post">
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
       <input type="text" class="text" placeholder="Location">
       <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
      </form>
      </p>
           </div>
    </div>
   </div> 
</div>  




<div class="container margintop2">
  
  <ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Employee</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Add Certification</span></li></ul>

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
<?php
         if($Editstatus!='status')
         {
          ?>
           <h2>Add Certification</h2>
           <?php
         }
         elseif ($Editstatus=='status')
         {
           ?>
  <h2>Edit Certification</h2>
           <?php
         }
         ?>
       
       <div class="row">
         <div class="col-md-12 alert alert-success" id="addCertificationSuccessmsg" style="text-align:center; display: none; color: green; font-weight: bold">Certification updated.</div>
         <div class="col-md-12" id="addCertificationLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
       </div>
       
         <?php
         if($Editstatus!='status')
         {
          

         ?>
      
        <form id="addCertification" action="<?= base_url(); ?>employee/addCertificationQuery" method="post" enctype="multipart/form-data">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>
           
            <input type="hidden" name="uid" value="<?= $resultUid; ?>">
           
              <input type="hidden" name="status">
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Certification Name</label>
                <div class="col-md-9">
                    <input type="text" name="certificatename" class="form-control input-lg" placeholder="Certification Name Here" id="certificatename"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Issueing authority</label>
                <div class="col-md-9">
                    <input type="text" name="certificateprovider" class="form-control input-lg" placeholder="Name of Issueing authority" id="authority" />
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Certificate Number</label>
                <div class="col-md-9">
                    <input type="text" name="certificatenumber" class="form-control input-lg" placeholder="Certificate Number" id="number" />
                </div>
            </div>
        </div>

     
          <div class="row">
            <div class="form-group col-md-12">
                
                <div class="col-md-offset-3 col-md-9">

                    <select name="certificateperiod" id="validity" class="form-control input-lg">
                        <option value="">Certification Validity</option>
                           <option value="6 Months">6 Months</option>
                             <option value="1 Year">1 Year</option>
                              <option value="2 Years">2 years</option>
                              <option value="3 Years">3 Years</option>
                               <option value="Not applicable">Not applicable</option>
                                                           
                     </select>
                    
               
                </div>
                 
   
        </div>
    </div>

      <div class="row">

          <div class="form-group col-md-12">
                   <label class="col-md-3 control-lable" for="subjects">Upload Certificate</label>
                     <div class="col-md-9 sm_1">
   <div style="position:relative; width: 100%;">
        <a class='btn regularButton' href='javascript:;'>
            <i class="fa fa-upload" aria-hidden="true"></i>  Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="userfile" id="file" size="80"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>

         <span class='badge badge-light' id="lblSize"></span>

          <span class='badge progress-bar-danger' style="display: none" id="lblSizeDanger"></span>

</div>
   <!--<label class="myFile">
  <img src="<?= base_url(); ?>images/uploaddocument.png"  alt="image" height="10%" width="10%" alt="icon"/>
  <input type="file"  name="userfile" id="file" onchange="showname()"/>-->
<!--  <p style="color:red;"><b>Please upload .doc or .pdf file only.</b></p>
--><!--</label>
<input type="text" id="imgresult" class="form-control"/>-->

</div>

<div class="row">

          
            <div class="col-md-offset-3 col-md-9">

              <div id="maxSize"  class="w3-text-red" style=" display:none; font-weight: bold; color:red">Image size too large, Maximum 4Mb Required</div>
<div id='err_msg' style='display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                   <div id='ermsg' class="w3-text-red">  
                  
                <div id='msg'>  </div></div></label>  
                </div></div></div>
 </div>

        </div>

</div>


   <!-- progress bar-->

   <div class="row">
        <div class="col-sm-12">      
          <div class="form-group">
           <div id="progressbr-container">
              <div id="progress-bar-status-show"></div>      
          </div>
          </div>
        </div>
    </div>

  <!-- progress bar-->

        <div class="row">
         

          <div class="col-md-12" id="addCertificationFailuremsg" style="text-align:center; display: none; color: red; font-weight: bold">Something Went Wrong.</div>


            <div class="form-actions floatRight" id="buttons">
            <button type="button" class="btn regularButton btn-sm" id="addMore">Add More Certification</button>
              
                <button type="submit" id="submit" class="btn regularButton btn-sm">Submit</button>

                 <a href="<?= base_url(); ?>"> <button type="button"  class="btn regularCancel btn-sm" id="cancelButton">Cancel</button></a>
               
            </div>
        </div>

<br>
        <div class="row">
         <div class="col-md-offset-2 col-md-8 alert alert-success" id="successMsgCertification" style="display: none;">Your Certifiation successfully submitted.</div>
       </div>
    </form>
      <?php
}
elseif ($Editstatus=='status') 
{
  ?>

   
        <form id="addCertification" method="post" enctype="multipart/form-data">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>

            <input type="hidden" name="uid" value="<?= $resultUid; ?>">

              <input type="hidden" name="status" value="status">
              <?php

foreach ($fetch as $value) {

?>
<input type="hidden" name="id" value="<?= $value['id']; ?>">
           <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Certificationn Name</label>
                <div class="col-md-9">
                    <input type="text" name="certificatename" class="form-control input-lg" value="<?= base64_decode(base64_decode($value['certificateName'])); ?>"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Issueing authority</label>
                <div class="col-md-9">
                    <input type="text" name="certificateprovider" class="form-control input-lg" value="<?= base64_decode(base64_decode($value['certificateProvider'])); ?>"/>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Certificate Number</label>
                <div class="col-md-9">
                    <input type="text" name="certificatenumber" class="form-control input-lg" value="<?= $value['certificateNumber']; ?>" />
                </div>
            </div>
        </div>
<?php
}
?>
     
          <div class="row">
            <div class="form-group col-md-12">
                
                <div class="col-md-offset-3 col-md-9">

                    <select name="certificateperiod" id="experience_in" class="form-control input-lg">
                        <option value="">Certification Validity</option>
                           <option value="6 Months">6 Months</option>
                             <option value="1 Year">1 Year</option>
                              <option value="2 Years">2 years</option>
                              <option value="3 Years">3 Years</option>
                               <option value="Not applicable">Not applicable</option>
                                                           
                     </select>
                    
               
                </div>
                 
   
        </div>
    </div>

   


        <div class="row">
         

          <div class="col-md-12" id="addCertificationFailuremsg" style="text-align:center; display: none; color: red; font-weight: bold">Something Went Wrong.</div>


            <div class="form-actions floatRight" id="buttons">
           
                <button type="button" id="submit" class="btn regularButton btn-lg">Submit</button>

                 <a href="<?= base_url(); ?>"> <button type="button"  class="btn regularCancel btn-lg">Cancel</button></a>
               
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

<script>
$(document).ready(function(){
    $("#btn1").click(function(){
       $("#showexperience6").slideToggle(700);
       $("#btn1").hide();
        $("#btn2").show();
    });
});
</script>

<script>
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }</script><script>

     function showname1 () {
     var name1 = document.getElementById('file1');
                //alert(thefile.value);
                
         document.getElementById('imgresult1').value = name1.files.item(0).name;
     }



     //Code Starts

$(document).ready(function() {

   $("#file").change(function ()

   {
    $("#maxSize").hide(200);
     $("#addMore").show(200);
      $("#submit").show(200);
        $("#cancelButton").show(200);
     
      var imageSize= (((this.files[0].size/1024)/1024)*100)/100;

  if(imageSize<4)
  {
      
  }
  else if(imageSize>4)
  {
     
      $("#maxSize").show(200);
      $("#addMore").hide(200);
      $("#submit").hide(200);
      $("#cancelButton").hide(200);
  }
    
   

  });

});

//Code Ends
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

<script>
$(document).ready(function () {

    $("#addMore").click(function (event) {

      var certificatename = $("#certificatename").val();  
            var authority = $("#authority").val();  
             var number = $("#number").val();  
            var validity = $("#validity").val();  
             // Returns error message when submitted without req fields.  
            if(certificatename==''|| authority=='' || number=='' || validity=='')  
            {  

              
            
               return false;
            }
            else
            {
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#addCertification')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
       // $("#addMore").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('employee/addCertificationQuery'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              $("#addCertificationLoading").hide(400);
              $('#addCertificationSuccessmsg').show(600);
              $('#addCertification').show(600);
                $("#buttons").show(300);
              $('#addCertification').trigger("reset");
              //alert('success');
/*
                $("#result").text(data);
                console.log("SUCCESS : ", data);
                $("#btnSubmit").prop("disabled", false);*/

            },
            error: function (e) {
              $("#addCertificationLoading").hide(400);
              $('#addCertificationFailuremsg').show(600);
              $('#addCertification').show(600);
               $('#buttons').show(600);
              $('#addCertification').trigger("reset");
//alert('success');
/*
                $("#result").text(e.responseText);
                console.log("ERROR : ", e);
                $("#btnSubmit").prop("disabled", false);
*/
            }
        });
}
    });

});



//submit form on click submit


/*$(document).ready(function () {

    $("#submit").click(function (event) {


      var certificatename = $("#certificatename").val();  
            var authority = $("#authority").val();  
             var number = $("#number").val();  
            var validity = $("#validity").val();  
             // Returns error message when submitted without req fields.  
            if(certificatename==''|| authority=='' || number=='' || validity=='')  
            {  

              
            
              return false;
            }
            else
            {
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#addCertification')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
        //$("#addMore").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('employee/addCertificationQuery'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              $("#addCertificationLoading").hide(400);
              $("#addCertificationSuccessmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/dashboard";
             

            },
            error: function (e) {
              $("#addCertificationLoading").hide(400);
              $('#addCertificationFailuremsg').show(600);
              $('#addCertification').show(600);
               $('#buttons').show(600);
              $('#addCertification').trigger("reset");
     }
        });
}
    });

});*/


 </script>
 <script>
 
$(document).ready(function () {

    $("#addMore").click(function () {
      var certificatename = $("#certificatename").val();  
            var authority = $("#authority").val();  
             var number = $("#number").val();  
            var validity = $("#validity").val();  
             // Returns error message when submitted without req fields.  
            if(certificatename==''|| authority=='' || number=='' || validity=='')  
            {  

              
            
               jQuery("div#err_msg").show();  
                jQuery("div#msg").html("All fields are required*"); 
            }
            else
            {
          $("#upload-file-info").html('');
          $("#addCertificationSuccessmsg").hide(300);
          $("#addCertification").hide(300);
          $("#buttons").hide(300);
          $("#addCertificationLoading").show(300);
    }
    });


  });

/*$(document).ready(function () {

    $("#submit").click(function () {
       var certificatename = $("#certificatename").val();  
            var authority = $("#authority").val();  
             var number = $("#number").val();  
            var validity = $("#validity").val();  
             // Returns error message when submitted without req fields.  
            if(certificatename==''|| authority=='' || number=='' || validity=='')  
            {  

              
            
               jQuery("div#err_msg").show();  
                jQuery("div#msg").html("All fields are required*"); 
            }
            else
            {
      $("#addCertificationSuccessmsg").hide(300);
      $("#addCertification").hide(300);
      $("#buttons").hide(300);
      $("#addCertificationLoading").show(300);
    }
    });


  });*/


 </script>
 
</html> 