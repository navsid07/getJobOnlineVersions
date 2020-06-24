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
?><title>Signup for free account and get job online | Get Job Online</title>

<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, unemployement" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portalfor job providers and job seekers." />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<!-- progress bar testing-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/progressbar.css">
    <!-- js for animate progress bar-->
    <script src="<?= base_url(); ?>assets/progressbar.js"></script>

<!-- progress bar testig end--> 



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><!--
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>-->
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome--><!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
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
<style>
	#ermsg
	{
		color:red;
		font-weight: bold;
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
 #msg
{
color:red;
font-weight: bold;
text-align: center;
}
</style>
<script type="text/javascript" src="<?= base_url(); ?>js/editor/ed.js"></script>  
<!-- submit file and progress bar-->


 <script type="text/javascript">
    $(document).ready(function() { 
       $('#uploadImage').submit(function(e) { 

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
                  $('#loader').hide();
                   window.location.href = "<?= base_url(); ?>EmployeeDashboard";
                    $("#successMsg").show(200);
                  
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
	        <?php
                include('EmployeeHeaderLi.php');
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
<ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Edit Profile</li></ul>
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
    <div class="col-md-8">
    <div class="single">  
	   <div class="form-container background padding">
        <h2>Change Profile Picture</h2>


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

        <?php 
					if($error= $this->session->flashdata('loginemail')):

			    $loginemail_class=$this->session->flashdata('loginemail_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $loginemail_class; ?>">
			  
			 			 <?php echo $error ?>

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
					if($uploaderror= $this->session->flashdata('uploaderror')):

			    $uploaderror_class=$this->session->flashdata('uploaderror_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $uploaderror_class; ?>">
			  
			  <?php echo $uploaderror; ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

        <form action="<?= base_url(); ?>EmployeeRegisterQueryStep8" method="post" enctype="multipart/form-data" name="myForm" id="uploadImage" onsubmit="return validateForm()">
         
      
		 <?php

        if(!empty($status))
        {
        	?>
        	<input type="hidden" name="status" value="<?= $status; ?>">
        	
        	<?php
        }
        	?>

          <!-- progress bar-->
             <div class="col-sm-12">      
          <div class="form-group">
           <div id="progressbr-container">
            <div  id="progress-bar-status-show">  </div>        
          </div>
          </div>
        </div>
          <!-- progress bar-->

<div class="row">
  
            <div class="form-group col-md-12">

              <div id='err_msg' style='text-align:center; display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                <div id='msg'> </div> 
                </div></div></div>
            	     <label class="col-md-3 control-lable" for="subjects">Upload Image</label>
            	       <div class="col-md-9 sm_1">

                       <div style="position:relative; width: 100%;">
        <a class='btn btn-primary' href='javascript:;'>
            <i class="fa fa-upload" aria-hidden="true"></i>  Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="userfile" id="file" size="80"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
         <span class='badge badge-light' id="lblSize" style="display: none;"></span>

          <span class='badge progress-bar-danger' style="display: none" id="lblSizeDanger"></span>
        <input type="hidden" name="email" value="<?= $emaiil; ?>">
</div>

        <!--<label class="myFile">
  <img src="<?= base_url(); ?>images/uploaddocument.png"  alt="image" height="10%" width="10%" alt="Icon"/>
  <input type="file"  name="userfile" id="file" onchange="showname()" />
   <p style="color:red;"><b>Please upload .jpg ,.jpeg or .png file only.</b></p>
</label>
 <input type="hidden" name="email" value="<?= $emaiil; ?>">
<input type="text" style="margin-left:5px;" id="imgresult"/>-->
<div class="col-md-12" id="empty2">
		please select a file for upload.
	</div>
</div>
 </div>

</div>
        <div class="row">

          
            <div class="col-md-offset-3 col-md-9">
                <b><span id="ermsg"></span></b>
            </div>
            
            <div class="form-actions floatRight">
                <button type="submit" id="submit" class="regularButton">
            Update image</button>

            <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel">Cancel</button></a>

            </div>
        
        </div>
        <br>

        <div class="row">
      <div class="col-md-offset-2 col-md-8 alert alert-success" id="successMsg" style="display: none;">Your file successfully submitted.</div>
    
     <div class="col-md-offset-2 col-md-8 alert alert-danger" id="errorMsg" style="display: none;">Something went wrong please try again later.</div>

     <div class="col-md-offset-1 col-md-10 alert alert-danger" id="invalidFormat" style="display: none;">Please upload valid file format only jpg,jpeg and png file formats are allowed.</div>

     <div class="col-md-offset-2 col-md-8 alert alert-danger" id="largeFile" style="display: none;">Image size too large, Maximum 4Mb Required.</div>

     <div class="col-md-12" id="Loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div>
   </div>


    </form>

     <div class="row">
     <div class="col-md-12" id="Loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div></div>
    </div>
 </div>
</div>
<!--<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/JavaScript">
	//Code Starts

$(document).ready(function() {

   $("#file").change(function ()

   {

     var iSize = 0;

     if($.browser.msie)

     {

        var objFSO = new ActiveXObject("Scripting.FileSystemObject");

        var sPath = $("#file")[0].value;

        var objFile = objFSO.getFile(sPath);

        var iSize = objFile.size;
        var iSizee = objFile.size;

        iSize = iSize/ 1024;

     }

     else

        iSize = ($("#file")[0].files[0].size / 1024);

        var is = iSize / 1024
       
     if (iSize / 1024 > 1)

     {

        if (((iSize / 1024) / 1024) > 1)

        {

          $("#lblSize").hide(200);
            iSize = (Math.round(((iSize / 1024) / 1024) * 100) / 100);

            $("#lblSizeDanger").html( iSize + "Gb");
             $("#lblSizeDanger").show(200);
        }

        else

        {

            iSize = (Math.round((iSize / 1024) * 100) / 100)
          
            
           if(iSize<4)
            {
                
              $("#lblSize").hide(200);
                $("#lblSizeDanger").html( iSize  + "Mb");
                $("#lblSizeDanger").show(200);
              $("#ermsg").hide(200);
              $("#submit").show(200);
            }
           else if(iSize>4)
            {

               $("#lblSize").hide(200);
                $("#lblSizeDanger").html( iSize  + "Mb");
                $("#lblSizeDanger").show(200);
               $("#ermsg").show(200);
              $("#ermsg").html("Image size too large, Maximum 4Mb Required");
              $("#submit").hide(200);
            }

        }

     }

     else

     {


       $("#ermsg").hide(200);
      $("#submit").show(200);
  
        iSize = (Math.round(iSize * 100) / 100)

        
        $("#lblSizeDanger").hide(200);

        $("#lblSize").html( iSize  + "kb");
        $("#lblSize").show(200);

    }   

  });

});
//Code Ends

	</script>-->

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
<div class="row" style="margin-top:2%;">
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
 <script>
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
    



     $(document).ready(function() {

  $("#submit").click(function() {

           $("#largeFile").hide(200);
            $("#invalidFormat").hide(200);
            $("#successMsg").hide(200);
            $("#errorMsg").hide(200);
  });
            

});
      
    </script>

  
  	<!--<script>
	 function validateForm() {
    //var x = document.forms["myForm"]["address"].value;
    var x= document.getElementById("address").value;
    var a= document.getElementById("description").value;
     var c= document.getElementById("file").value;
    var y=x.trim();
    var b=a.trim();
    
    if (y == "") {
        //alert('Name must be filled out');
        document.getElementById("address").style.borderColor= "red";
        document.getElementById("empty").style.display = "block";

        return false;
    }
     if (b == "") {
        //alert('Name must be filled out');
        document.getElementById("description").style.borderColor= "red";
        document.getElementById("empty1").style.display = "block";

        return false;
    }
     if (c == "") {
        //alert('Name must be filled out');
       
        document.getElementById("empty2").style.display = "block";

        return false;
    }
    else
    {
    	
    	return true;
    }
}

</script>-->

<!--count description characters-->
<script>
/*function myFunction1() 
{

    var x = document.getElementById("description").value;
  	document.getElementById("descriptionresult").innerHTML =x.length;

}*/

$(document).ready(function () {

    /*$("#submit").click(function () {
      var heading = $("#file").val();  
             
            // Returns error message when submitted without req fields.  
            if(heading=='')  
            {  
                jQuery("div#err_msg").show();  
                jQuery("div#msg").html("please select a file for upload*");  
            }
            
    });

  });*/

/*
$(document).ready(function () {

    $("#submit").click(function () {
      
      $("#Loading").show();
      $("#uploadImage").hide();
 
    });*/
  });
</script>

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
