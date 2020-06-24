
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
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. online job portal for job providres and job seekers." />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>


<script src='https://www.google.com/recaptcha/api.js'></script>  

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
<script type="text/javascript" src="<?= base_url(); ?>js/editor/ed.js"></script>  
<style>
#empty
{
	color:red;
	display:none;
}
#empty1
{
	color:red;
	display:none;
}
#empty2
{
	color:red;
	display:none;
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

#addressresult, #descriptionresult
{
	 font-weight: bold; 
}
#imgresult
{
    border:none;
    background-color: white;
    color: #f15f43;
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

</style>


</head>
<body>
<?php
include('MainHeader.php');
?>

<div id="spacer">
		&nbsp;
	</div>

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
  <ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Recruiter Registration</li></ul>
    <div class="col-md-offset-2 col-md-8">
    <div class="single">  
	   <div class="form-container background padding">
        <h2>Recruiter Registration</h2>
<div class="col-md-12" style="margin-bottom:10px; text-align:center;">
             <div class="login-para1" id="already">
                            <p>Already Registered? <a  href="<?= base_url(); ?>RecruiterLogin" style="cursor:pointer; background:white;"> SignIn </a></p>
                         </div>
            </div>

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

      <div class="col-md-12" id="RegisterFormLoading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div>

      <div class="col-md-12" id="msgFormLoading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif" style="width: 30%;"></div>

        <form  id="RecruiterRegisterForm" method="post" itemscope itemtype="http://schema.org/Organization" name="myForm" onsubmit="return validateForm()">
         
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Company Name</label>
                <div class="col-md-9">
                    <input type="text" itemprop="name" id="companyName" name="company_name" placeholder="Enter your company's name" required="" class="form-control input-lg"/>
                     <input type="hidden" name="referralFrom" value="<?= $referralFrom; ?>" class="form-control"/>
                    <!--<input type="hidden" name="login" value="<?= $login; ?>" class="form-control input-sm"/>
                    <input type="hidden" name="id" value="<?= $id; ?>" class="form-control input-sm"/>
             -->
                </div>
            </div>
         </div>
        
      	 <input type="hidden" value="<?= $country; ?>" name="country">
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Password</label>
                <div class="col-md-9">
                    <input type="password" name="password" required="" placeholder="Enter a strong Password" id="password" class="form-control input-lg"/>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="text" id="email" itemprop="email" name="email" required="" placeholder="abc@example.com" class="form-control input-lg"/>
                </div>
            </div>
        </div>


          <div class="row">
        <div class="col-md-offset-3 col-md-9 login-btn" style="text-align:center;">
            <div class="g-recaptcha" data-sitekey="6LdqTG0UAAAAAKABd9_AJF2c17pwkZe3OCurc7Kr"></div>
    
              </div>

    </div>
    <br>


         <div class="row">
           <div class="col-md-12">
            <div class="form-actions floatRight">
                <button type="submit" id="submit" class="btn regularButton btn-lg">Submit</button>

                <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-lg">Cancel</button></a>
                
            </div>
          </div>
        </div>
       
    </form>


<div id="ChangeEmailFormDiv">
    <form id="ChangeEmailForm" style="display: none;" method="post" itemscope itemtype="http://schema.org/Organization" name="myForm">
         
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Your current email</label>
                <div class="col-md-9">
                    <input type="text" itemprop="name" name="email" id="CurrentEmail"  class="form-control input-lg"/>
                </div>
            </div>
         </div>
        
       
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Password</label>
                <div class="col-md-9">
                    <input type="password" name="password" required="" placeholder="Enter a strong Password" id="password" class="form-control input-lg"/>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">New email</label>
                <div class="col-md-9">
                    <input type="text" id="newEmail" itemprop="email" name="newEmail" required="" placeholder="abc@example.com" class="form-control input-lg"/>
                </div>
            </div>
        </div>
         <div class="row">
           <div class="col-md-12">
            <div class="form-actions floatRight">
                <button type="submit" id="ChangeEmailFormSubmit" class="btn regularButton btn-sm">Submit</button>

                <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-sm">Cancel</button></a>
                
            </div>
          </div>
        </div>
       
    </form>
  </div>
    <div class="row" style="margin-top:2%;">
            <div class="form-group col-md-12">
               
              <div class="alert alert-success" style="display: none;" id="successMsgAfter">
                 Verification link has been sent to your email.</br>
                 Please wait we redirecting....
               </div>

                 <div class="alert alert-danger" style="display: none;" id="formFailure">
                 All fields are required.
               </div>

                 <div class="alert alert-danger" style="display: none;" id="captchaError">
                 Confirm captcha to proceed.
               </div>

               <div class="alert alert-success" style="display: none;" id="changeEmailSuccessMsg">
                 Verification link has been sent to your email.</br>
                 Please wait we redirecting....
               </div>

                
               

               <div class="alert alert-danger" style="display: none;" id="RegisterFormSamemailMsg">
                 This email has been registered as a Employee in our system please try with different email.</br>
                 Please wait we redirecting....
               </div>
               <div class="alert alert-success" style="display: none;" id="RegisterFormSuccessMsg">
                 In order to proceed further you need to verify your email address. An email has been sent to your email <input type="text" style=
                 "border:none; background-color: transparent; font-weight: bold; width:100%;" id="emailValue"></br> Check your Inbox/Spam folder if the email appears in the spam folder and proceed further by clicking on the link given in the email. If you have not received the email click below. Or if you wish to change your email address click below. </br>
                 Please wait we redirecting....</br><div class="row" style="text-align:center; margin-top:10px;">
                
                    <form id="sendAgainEmail" method="post">
                      <input type="hidden" name="email" id="SendAgainValue">
                      <button type="submit" id="sendAgainEmailSubmit" class="btn regularButton btn-sm" style="margin-right:10px;">Send Again</button>
                    </form>
               </br>
               
                   
                     
                      <button type="button" id="changeEmailSubmit" class="btn regularButton btn-sm" style="margin-right:10px;">Change Email</button>
                    
                
                <!--  <a href="https://get-job.online/employee/sendagainemail/'.$toto_encode.'" class="btn btn-success" style="margin-right:10px;">Send Again</a><a href="employee/fetchdata/'.$toto_encode.'"  class="btn btn-info" style="margin-left:40%; margin-top: 2%; center;">Change Email</a>-->
               </div>
               
             
            </div>
            <div class="alert alert-danger" style="display: none;" id="RegisterFormFailureMsg">
                 Something went wrong please try again later.</br>
                 Please wait we redirecting....
               </div>

                <div class="alert alert-danger" style="display: none;" id="passwordNotMatched">
                 Password you have entered was wrong please try again with correct one.</br>
                 Please wait we redirecting....
               </div>

              <div class="alert alert-danger"  style="display: none;" id="RegisterFormEmailexistMsg">
                 Email you have entered is already registered with us. please try again with another email or signin with the same.</br>
                 Please wait we redirecting....
               </div>

        </div>
    </div>
 </div>
</div>
    </div>
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
  
	<a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
   </div>
    
  </div>
</div>
<?php
include 'footer.php'; 
?>	
 <script>
  
//job applied by a user from bottom button
      $('#RecruiterRegisterForm').submit(function(e) {


  var name = $("#companyName").val();
    var email = $("#email").val();
    var password = $("#password").val();

    if(name == '' || email == '' || password == '')
    {
      return false;
      //$("#formFailure").show(300);
    }
    else if(grecaptcha.getResponse() == '')
    {
      return false;
    }
    else
    {
    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/recruiterreg1'); ?>",
        data: $('#RecruiterRegisterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            //alert(response);
            $("#RegisterFormLoading").hide(300);
            $("#RegisterFormFailureMsg").show(500);
             $("#already").show(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
                }
        else if(response==1)
        { 
          
         
          $("#RegisterFormLoading").hide(300);
          $("#RegisterFormSuccessMsg").show(500);
           $("#already").hide(500);
            var m= $("#email").val();
           $("#SendAgainValue").val(m);
             $("#emailValue").val(m);
           $("#CurrentEmail").val(m);
            setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
          
        }
        else if(response==2)
        {
         // alert(response);
          
           $("#RegisterFormLoading").hide(300);
            alert(response);
            $("#RegisterFormSamemailMsg").show(500);
             $("#already").show(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
        }
        else if(response==3)
        {
          //alert(response);
         $("#RegisterFormLoading").hide(300);
         $("#RegisterFormEmailexistMsg").show(500);
              $("#already").show(500);
               setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
        }
        
        }
        
   });
  }

});

$(document).ready(function () {

    


       $("#companyName").add("#email").add("#password").keyup(function()
    {
      $("#formFailure").hide(500);
      $("#captchaError").hide(500);
    });

    $("#submit").click(function () {

       $("#captchaError").hide(500);
       
       var name = $("#companyName").val();
    var email = $("#email").val();
    var password = $("#password").val();

    if(name == '' || email == '' || password == '')
    {
      $("#formFailure").show(300);
    }
    else if(grecaptcha.getResponse() == '')
            {

              $("#captchaError").show(500);  
             
            }   
            else
            {

      $("#RecruiterRegisterForm").hide(300);
      $("#already").hide(300);
      $("#RegisterFormLoading").show(300);
    }
      
    });




// in processing
 //job applied by a user from bottom button
      $('#ChangeEmailForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/checkrepeatemail'); ?>",
        data: $('#ChangeEmailForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          

          if(response== 0)
          {
            $("#msgFormLoading").hide(300);
            $("#passwordNotMatched").show(500);
             $("#already").hide(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
          //alert(response);
         
       }
        else if(response==1)
        { $("#msgFormLoading").hide(300);
          $("#successMsgAfter").show(500);
           $("#already").hide(500);
            setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
          //alert(response);
          
        }
        else if(response==2)
        {
          
           $("#msgFormLoading").hide(300);
            //alert(response);
            $("#RegisterFormFailureMsg").show(500);
             $("#already").hide(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
        }

        else if(response==3)
        {
          
           $("#msgFormLoading").hide(300);
           
            $("#RegisterFormSamemailMsg").show(500);
             $("#already").hide(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
        }

        else if(response==4)
        {
          
           $("#msgFormLoading").hide(300);
          
            $("#RegisterFormEmailexistMsg").show(500);
             $("#already").hide(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
        }

        
        
        }
        
   });

});
    });
</script>
<script>
$(document).ready(function () {

    $("#ChangeEmailFormSubmit").click(function () {
      $("#RegisterFormSuccessMsg").hide(300);
      $("#ChangeEmailFormDiv").hide(300);
      $("#ChangeEmailForm").hide(300);
      $("#msgFormLoading").show(300);
      
    });
  });
</script>
<script>

$(document).ready(function () {

    $("#changeEmailSubmit").click(function () {
      $("#RegisterFormSuccessMsg").hide(300);
      $("#ChangeEmailForm").show(300);
      // $("#ChangeEmailFormDiv").hide(300);
      
      
    });
  });


//in  processing
 //job applied by a user from bottom button
      $('#sendAgainEmail').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/sendagainemail'); ?>",
        data: $('#sendAgainEmail').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            $("#msgFormLoading").hide(300);
            $("#RegisterFormFailureMsg").show(500);
              setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
          //
       }
        else if(response==1)
        { $("#msgFormLoading").hide(300);
          $("#successMsgAfter").show(500);
          setTimeout("window.location.href='https://get-job.online/recruiter/registrationstep';",10000);
           
         
        }
        
        }
        
   });

});


$(document).ready(function () {

    $("#sendAgainEmailSubmit").click(function () {
      $("#RegisterFormSuccessMsg").hide(300);
     
      $("#msgFormLoading").show(300);
      
    });
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
