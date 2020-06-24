
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />

<link rel="canonical" href="<?= base_url(uri_string()); ?>">
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta name="description" content="Register for free to apply jobs in your city. job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in.Online job portal for job providers and job seekers." />
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

<style>

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
	#empty, #empty1, #empty2
{
	color:red;
	display:none;
	
}


@media only screen and (min-width: 280px) and (max-width: 830px) {

  #editbutton
{
  font-size: 9px;
  font-weight:bold;
border:none;
padding:5px 10px;
background:#f15f43;
color:white;

border-radius: 2px;
margin-left: 40%;
  margin-bottom: 2%;
}
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
#description:hover
{
cursor:pointer;
}

.padding
{
   padding: 2%;
}
.tbody
  {
    -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    background-color:white;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

.radius
  {
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
  }

  @media only screen and (min-width: 280px) and (max-width: 830px) {

  #editbutton
{
  font-size: 9px;
  font-weight:bold;
border:none;
padding:5px 10px;
background:#f15f43;
color:white;

border-radius: 2px;
margin-left: 40%;
  margin-bottom: 2%;
}
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

<!-- textarea editor
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>js/editor.js"></script>

    <script>
      $(document).ready(function() {
        $("#txtEditor").Editor();
      });
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?= base_url(); ?>css/editor.css" type="text/css" rel="stylesheet"/>
-->
<script type="text/javascript" src="<?= base_url(); ?>js/editor/ed.js"></script>


<script src='https://www.google.com/recaptcha/api.js'></script>  
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
<div class="container">
  <ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Employee Registration</li></ul>
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
        <h2>Employee Registration</h2>


         <!--<?php 
					if($register= $this->session->flashdata('register')):

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
			?>-->

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
<!--
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
			?>-->
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
   <!--   <?php 
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
-->
       <div class="col-md-12" id="RegisterFormLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>

       <div class="col-md-12" id="msgFormLoading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif" style="width: 30%;"></div>

      <form action="<?= base_url(); ?>employee/registertest" method="post">
      
      <!--<form id="EmployeeRegisterForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">-->
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             <div class="login-para" id="already">
                            <p>Already Registered? <a  href="<?= base_url(); ?>EmployeeLogin" style="cursor:pointer; background:white;"> SignIn </a>
                            </p>

              </div>
            </div>

            
               
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Full Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" placeholder="What is your name?" required="" id="name" class="form-control input-lg"/>
                    <input type="hidden" name="referral" value="<?= $referral; ?>" class="form-control"/>
                    <input type="hidden" name="login" value="<?= $login; ?>" class="form-control"/>
                    <input type="hidden" name="id" value="<?= $id; ?>" class="form-control"/>
                </div>
            </div>
         </div>
          
         
        <div class="row">
            <div class="form-group col-md-12">

                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" id="email" placeholder="abc@example.com" required="" class="form-control input-lg"/>
                </div>
            </div>
        </div>


       
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Password</label>
                <div class="col-md-9">
                    <input type="password" placeholder="Enter a strong Password" name="password" required="" id="password" class="form-control input-lg"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Re-Enter Password</label>
                <div class="col-md-9">
                    <input type="password" placeholder="Re-Enter Password" name="passwordagain" required="" id="passwordagain" onkeyup="checkpassword();" class="form-control input-lg"/>
                <!--</br>-->
               
                </div>
            </div>

        </div>

        <div class="row">
        <div class="col-md-offset-3 col-md-9 login-btn" style="text-align:center;">
            <div class="g-recaptcha" data-sitekey="6LdqTG0UAAAAAKABd9_AJF2c17pwkZe3OCurc7Kr"></div>
    
              </div>

    </div>
    <br>
         <input type="hidden" value="<?= $country; ?>" name="country">
        
        <div class="row">
            <div class="form-actions floatRight">
                <!--<button type="submit" id="submit" class="btn regularButton btn-sm">Submit</button>
               -->
               <input type="submit" name="submit">
               <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-sm">Cancel</button></a>
                <!--<h4 style="color:red; display:none;" id="match">Passowrd do not match.</h4>
                <h4 style="color:red; display:none;" id="formFailure">All fields are required.</h4>-->
            </div>
        </div>



        
    </form>


<div id="ChangeEmailFormDiv">
    <form  id="ChangeEmailForm" method="post" itemscope itemtype="http://schema.org/Organization" name="myForm" style="display: none;" >
         
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Your current email</label>
                <div class="col-md-9">
                    <input type="text" itemprop="name" name="email"  id="CurrentEmail" class="form-control input-lg"/>
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
                <button type="submit" id="ChangeEmailFormSubmit" class="btn btn-primary btn-lg">Submit</button>

                <a href="<?= base_url(); ?>"> <button type="button" class="btn btn-danger btn-lg">Cancel</button></a>
                
            </div>
          </div>
        </div>
       
    </form>
  </div>

        <div class="row" style="margin-top:2%;">
            <div class="form-group col-md-12">
               <div class="alert alert-success" style="display: none;" id="successMsgAfter">
                 Verification link has been sent to your email.</br>Please wait we redirecting.....
               </div>

                <div class="alert alert-danger" style="display: none;" id="captchaError">
                 Confirm captcha to proceed.
               </div>

                <div class="alert alert-danger" style="display: none;" id="match">
                 Password do not match.
               </div>

                <div class="alert alert-danger" style="display: none;" id="formFailure">
                 All fields are required.
               </div>

               <div class="alert alert-success" style="display: none;" id="changeEmailSuccessMsg">
                 Verification link has been sent to your email.</br>Please wait we redirecting.....
               </div>

               <div class="alert alert-danger" style="display: none;" id="RegisterFormSamemailMsg">
                 This email has been registered as a recruiter in our system please try with different email.</br>Please wait we redirecting.....
               </div>
               <div class="alert alert-success" style="display: none;" id="RegisterFormSuccessMsg">
                 In order to proceed further you need to verify your email address. An email has been sent to your email <input style="background-color: transparent; border:none; font-weight: bold; width: 100%" type="text" id="emailValue" disabled=""></br> Check your Inbox/Spam folder if the email appears in the spam folder and proceed further by clicking on the link given in the email. If you have not received the email click below. Or if you wish to change your email address click below. </br>Please wait we redirecting.....
                  <div class="row" style="text-align:center; margin-top:10px;">
                 <form id="sendAgainEmail" method="post">
                      <input type="hidden" name="email" id="SendAgainValue">
                      <button type="submit" id="sendAgainEmailSubmit" class="btn btn-success btn-sm" style="margin-right:10px;">Send Again</button>
                    </form>
               </br>
               
                   
                     
                      <button type="button" id="changeEmailSubmit" class="btn btn-success btn-sm" style="margin-right:10px;">Change Email</button></div><!--<div style="text-align:center; margin-top:10px;"><a href="https://get-job.online/employee/sendagainemail/'.$toto_encode.'" class="btn btn-success" style="margin-right:10px;">Send Again</a><a href="employee/fetchdata/'.$toto_encode.'"  class="btn btn-info" style="margin-left:40%; margin-top: 2%; center;">Change Email</a>-->
               </div>
               <div class="alert alert-danger" style="display: none;" id="RegisterFormFailureMsg">
                 Something went wrong please try again later.</br>Please wait we redirecting.....
               </div>
               <div class="alert alert-danger" style="display: none;" id="RegisterFormEmailexistMsg">
                 Email you have entered is already registered with us. please try again with another email or signin with the same.</br>Please wait we redirecting.....
               </div>
            </div>

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
</script>
-->
        </div>

</div>

<div class="container">
<div class="row" style="margin-top:2%;">
   <div class="col_3 message tbody">
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

<?php include 'footer.php'; ?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
<script>
  
//job applied by a user from bottom button
      $('#EmployeeRegisterForm').submit(function(e) {

         //$("#formFailure").hide(300);
    var form = $(this);

    e.preventDefault();

    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var passwordagain = $("#passwordagain").val();

    if(name == '' || email == '' || password == '' || passwordagain == '')
    {
      $("#formFailure").show(300);
    }
    else if(grecaptcha.getResponse() == '')
            {

              $("#captchaError").show(500);  
             
            }   
    else
    {

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registertest'); ?>",
        data: $('#EmployeeRegisterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){

          if(response== 0)
          {
            $("#RegisterFormLoading").hide(300);
            $("#RegisterFormFailureMsg").show(500);
             setTimeout("window.location.href='https://get-job.online/employee';",12000);
          //alert(response);
                }
        else if(response==1)
        { 
          $("#RegisterFormLoading").hide(300);
          $("#RegisterFormSuccessMsg").show(500);
          var m= $("#email").val();
          $("#SendAgainValue").val(m);
          $("#CurrentEmail").val(m);
          $("#emailValue").val(m);
           setTimeout("window.location.href='https://get-job.online/employee';",10000);
          //alert(response);
         
        }
        else if(response==2)
        {
           $("#RegisterFormLoading").hide(300);
            //alert(response);
            $("#RegisterFormSamemailMsg").show(500);
             setTimeout("window.location.href='https://get-job.online/employee';",10000);
        }
        else if(response==3)
        {
         // alert(response);
         $("#RegisterFormLoading").hide(300);
         $("#RegisterFormEmailexistMsg").show(500);
          setTimeout("window.location.href='https://get-job.online/employee';",10000);
        }
        
        }
        
   });
  }

});



</script>
 <script>

// in processing
 //job applied by a user from bottom button
      $('#ChangeEmailForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/changeemail'); ?>",
        data: $('#ChangeEmailForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            $("#msgFormLoading").hide(300);
            $("#passwordNotMatched").show(500);
             $("#already").hide(500);
             setTimeout("window.location.href='https://get-job.online/employee';",12000);
          //alert(response);
         
       }
        else if(response==1)
        { $("#msgFormLoading").hide(300);
          $("#successMsgAfter").show(500);
           $("#already").hide(500);
           setTimeout("window.location.href='https://get-job.online/employee';",10000);
          //alert(response);
          
        }
        else if(response==2)
        {
          
           $("#msgFormLoading").hide(300);
            //alert(response);
            $("#RegisterFormFailureMsg").show(500);
             $("#already").hide(500);
             setTimeout("window.location.href='https://get-job.online/employee';",10000);
        }

        else if(response==3)
        {
          
           $("#msgFormLoading").hide(300);
  
            $("#RegisterFormEmailexistMsg").show(500);
             $("#already").hide(500);
             setTimeout("window.location.href='https://get-job.online/employee';",10000);
        }

        else if(response==4)
        {
          
           $("#msgFormLoading").hide(300);
          
            $("#RegisterFormSamemailMsg").show(500);
             $("#already").hide(500);
             setTimeout("window.location.href='https://get-job.online/employee';",10000);
        }

        
        
        }
        
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
        url: "<?php echo base_url('employee/sendagainemail'); ?>",
        data: $('#sendAgainEmail').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            $("#msgFormLoading").hide(300);
            $("#RegisterFormFailureMsg").show(500);
            setTimeout("window.location.href='https://get-job.online/employee';",10000);
             
          //
       }
        else if(response==1)
        { $("#msgFormLoading").hide(300);
          $("#successMsgAfter").show(500);
            setTimeout("window.location.href='https://get-job.online/employee';",10000);
         
        }
        
        }
        
   });

});


 

$(document).ready(function () {

  $("#name").add("#email").add("#password").add("#passwordagain").keyup(function()
    {
      $("#formFailure").hide(500);
      $("#captchaError").hide(500);
    });

    $("#submit").click(function () {

       $("#captchaError").hide(500);
       
       var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var passwordagain = $("#passwordagain").val();

    if(name == '' || email == '' || password == '' || passwordagain == '')
    {
      $("#formFailure").show(300);
    }
    else if(grecaptcha.getResponse() == '')
            {

              $("#captchaError").show(500);  
             
            }   
            else
            {
      $("#EmployeeRegisterForm").hide(300);
      $("#RegisterFormLoading").show(300);
    }
      //$("#addPortfolio").hide(300);
      //$("#buttons").hide(300);
      //$("#addPortfolioLoading").show(300);
    });


  });




 </script>
 <script>

$(document).ready(function () {

    $("#sendAgainEmailSubmit").click(function () {
      $("#RegisterFormSuccessMsg").hide(300);
     
      $("#msgFormLoading").show(300);
      
    });
  });

 </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
</html>	

              