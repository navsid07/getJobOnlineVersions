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
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job providers and job seekers." />
<link rel="canonical" href="<?= base_url(); ?>">
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<!--textarea editor -->



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



<!-- progress bar testing-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/progressbar.css">
    <!-- js for animate progress bar-->
    <script src="<?= base_url(); ?>assets/progressbar.js"></script>

<!-- progress bar testig end--> 


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

.required
{
  color:red;
}

.myFile {
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
#imgresult
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


</style>

<script type="text/javascript">
    $(document).ready(function() { 


      

       $('#addArticle').submit(function(e) { 

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
                 $('#successMsg').show(200);
                 window.location.href = "<?= base_url(); ?>RecruiterDashboard";
                  
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

</head>
<body>

<?php
    include ('RecruiterHeader.php');
?>
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



<div class="container margintop2">
  
  <ul id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><span itemprop="name">Add Article</span></li></ul>


 <div class="col-md-2">
   <!--       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
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
-->
        </div>
 <div class="col-md-10  ">
     <div class="single background padding">  
     <div class="form-container">
        <h2>Add Article</h2>


        <div class="col-md-12 alert alert-success" id="addArticleSuccessmsg" style="text-align:center; display: none; color: green; font-weight: bold">Article updated.</div>
         <div class="col-md-12" id="addArticleLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
         <div class="col-md-12" id="addArticleFailuremsg" style="text-align:center; display: none; color: red; font-weight: bold">Something Went Wrong.</div>
        <form action="<?= base_url(); ?>recruiter/articleBodyQuery" id="addArticle" method="post" enctype="multipart/form-data">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>

            <input type="hidden" name="uid" value="<?= $resultUid; ?>">
            <div class="row">
            <div class="form-group col-md-12">
                
                
                   <h1> <input type="text" name="articleheading" id="title" class="form-control" placeholder="Article Heading Here" required=""/>
              </h1>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
              
           
                    <textarea name="articlebody" id="articlebody" rows="20" class="form-control" placeholder="Article Body here" id="message"></textarea>
             
            </div>
        </div>

        <div class="row">

          <div class="form-group col-md-12">
                   <label class="col-md-3 control-lable" for="subjects">Upload Header image</label>
                     <div class="col-md-9 sm_1">
      
     

                       <div style="position:relative; width: 100%;">
        <a class='btn regularButton' href='javascript:;'>
            <i class="fa fa-upload" aria-hidden="true"></i>  Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="userfile" id="file" size="80"  onchange='$("#upload-file-info").html($(this).val());' required="">
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
         <span class='badge badge-light' id="lblSize" style="display: none;"></span>

          <span class='badge progress-bar-danger' style="display: none" id="lblSizeDanger"></span>
</div>

       
<div class="col-md-12" id="empty2">
    please select a file for upload.
  </div>

  <!--<img src="<?= base_url(); ?>images/uploaddocument.png"  alt="image" height="10%" width="10%"/>-->
  <!--<input type="file"  name="userfile" id="file" onchange="showname()"/>
   <p style="color:red;"><b>Please upload .jpg ,.jpeg or .png file only.</b></p>


<input type="text" style="margin-left:5px;" id="imgresult"/>
<div class="col-md-12" id="empty2">
    please select a file for upload.
  </div>-->
   <!--<label class="myFile">
  <img src="<?= base_url(); ?>images/uploaddocument.png"  alt="image" height="10%" width="10%" alt="Icons"/>
  <input type="file"  name="userfile" id="file" onchange="showname()"/>
</label>

</div>
<input type="text" id="imgresult" class="form-control"/>-->
<!--<div id='err_msg' style='display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                <div id='msg'> </div></label>  
                </div></div></div>-->
 </div>

        </div>


   
</div>

  <div class="row">
            <div class="form-actions floatRight" id="buttons">
            
                <button type="button" id="addMore" class="btn regularButton btn-sm">+ Add More</button>
                <button type="button" id="submit" class="btn regularButton btn-sm">Submit</button>
                 <a href="<?= base_url(); ?>"> <button type="button"  class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
         
    </form>
    </div>
 </div>

<div class="col-md-12">
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
</script>
-->
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
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
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

<script>
$(document).ready(function () {

    $("#addMore").click(function (event) {

       var heading = $("#heading").val();  
             var articlebody = $("#articlebody").val();
            // Returns error message when submitted without req fields.  
            if(heading==''|| articlebody=='')  
            {  
                return false;
            }
            else
            {
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#addArticle')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
       // $("#addMore").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('recruiter/articleBodyQuery'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              $("#addArticleLoading").hide(400);
              $('#addArticleSuccessmsg').show(600);
            
              $('#addArticle').show(600);
                $("#buttons").show(300);
              $('#addArticle').trigger("reset");
              //alert('success');
/*
                $("#result").text(data);
                console.log("SUCCESS : ", data);
                $("#btnSubmit").prop("disabled", false);*/

            },
            error: function (e) {
              $("#addArticleLoading").hide(400);
              $('#addArticleFailuremsg').show(600);
              $('#addArticle').show(600);
               $('#buttons').show(600);
              $('#addArticle').trigger("reset");

            }
        });
}
    });

});



//submit form on click submit


/*$(document).ready(function () {

    $("#submit").click(function (event) {
       var heading = $("#heading").val();  
             var articlebody = $("#articlebody").val();
            // Returns error message when submitted without req fields.  
            if(heading==''|| articlebody=='')  
            {  
                return false;
            }
            else
            {
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#addArticle')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
        //$("#addMore").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('recruiter/articleBodyQuery'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              $("#addArticleLoading").hide(400);
              $("#addArticleSuccessmsg").show(200);
            window.location.href = "<?= base_url(); ?>recruiter/dashboard";
             

            },
            error: function (e) {
              $("#addArticleLoading").hide(400);
              $('#addArticleFailuremsg').show(600);
              $('#addArticle').show(600);
               $('#buttons').show(600);
              $('#addArticle').trigger("reset");
     }
        });
}
    });

});*/


 </script>
 <script>
 
$(document).ready(function () {

    $("#addMore").click(function () {
       var heading = $("#heading").val();  
             var articlebody = $("#articlebody").val();
            // Returns error message when submitted without req fields.  
            if(heading==''|| articlebody=='')  
            {  
                 jQuery("div#err_msg").show();  
                jQuery("div#msg").html("All fields are required*");  
            }
            else
            {
      $("#addArticleSuccessmsg").hide(300);
      $("#addArticle").hide(300);
      $("#buttons").hide(300);
      $("#addArticleLoading").show(300);
    }
    });


  });

/*$(document).ready(function () {

    $("#submit").click(function () {
       var heading = $("#heading").val();  
             var articlebody = $("#articlebody").val();
            // Returns error message when submitted without req fields.  
            if(heading==''|| articlebody=='')  
            {  
                jQuery("div#err_msg").show();  
                jQuery("div#msg").html("All fields are required*");  
            }
            else
            {
      $("#addArticleSuccessmsg").hide(300);
      $("#addArticle").hide(300);
      $("#buttons").hide(300);
      $("#addArticleLoading").show(300);
    }
    });


  });*/


 </script>
</html> 