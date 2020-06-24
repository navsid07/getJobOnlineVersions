
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
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . Register for free to apply jobs online. online job portal for job providers and job seekers." />
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
#showexperience1,#showexperience2,#showexperience3,#showexperience4,#showexperience5
{
	display:none;
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

#experience_in,#selectt
     {
 -webkit-appearance:none;  /* for chrome & safari */
 -moz-appearance: none; /* for mozilla */
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
           
            
                  <li><a href="EmployeeWishlist">My Shortlist</a></li>
            <li><a href="EditEmployee">Edit Profile</a></li>
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
    <ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Employee Registration</li></ul>
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
     }
      ?>


          <div class="col-md-offset-3 col-md-9 alert alert-success" id="addmoreSuccessmsg" style="font-weight: bold; display:none"> Previous detail submitted.</div>

<div class="col-md-12" id="Loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div>
        <form id="myForm" method="post">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             

             <?php
                  if(!empty($editstatus))
                  {
                  ?>
                  <input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                  <?php
                }
                  ?>
            </div>
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Fresher/Experience</label>
                <div class="col-md-9">

                    <select name="fresher/experience" id="selectt" onchange="showw()" class="form-control input-lg" required="">
                        <option value="">Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="Experience">Experience</option>
                        
                    </select>
                    
                </div>
            </div>
        </div>

        <div id="showexperience1">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience</label>
               
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-4">
                    <input type="text" name="experience1" id="experience1" class="form-control input-lg" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-4">
                    <input type="text" name="company1" id="company1" class="form-control input-lg" placeholder="Company Name"/>
                </div>
                <div class="col-md-offset-3 col-md-8">
<?php
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
                  
                     <select name="experience_in1" id="experience_in" class="form-control input-lg">
                        <option value="">Experience in</option>
                                 <optgroup label="Airline">
                                      <option value="Aircraft Dispatcher">Aircraft Dispatcher</option>
                                        <option value="Aircraft Mechanic">Aircraft Mechanic</option>
                                          <option value="Airline Pilot">Airline Pilot</option>
                                            <option value="Flight Attendent">Flight Attendent</option>

                                             <optgroup label="Arts">
                                      <option value="Actor">Actor</option>
                                        <option value="Architecture">Architecture</option>
                                          <option value="Art Appriaser">Art Appriaser</option>
                                            <option value="Art Auctionar">Art Auctionar</option>
                                             <option value="Artist">Artist</option>
                                                 <option value="Museum Jobs">Museum Jobs</option>
                                                 <option value="Music Conductor">Music Conductor</option>

                                                  <optgroup label="Business">
                                                     <option value="Accountant">Accountant</option>
                                        <option value="Administrator Assistant">Administrator Assistant</option>
                                          <option value="Advertising">Advertising</option>
                                            <option value="Consultant">Consultant</option>
                                             <option value="Financial Advisior">Financial Advisior</option>
                                                 <option value="Fund Raiser">Fund Raiser</option>
                                                 <option value="Govt. jobs">Govt. jobs</option>
                                                 <option value="Human Resources">Human Resources</option>
                                        <option value="Insurance Agent">Insurance Agent</option>
                                          <option value="Investment banker">Investment banker</option>
                                            <option value="Lawyer">Lawyer</option>
                                             <option value="Management">Management</option>
                                                 <option value="Non Profit Job">Non Profit Job</option>

                                                 <optgroup label="Media">
                                                     <option value="Book Publishing">Book Publishing</option>
                                        <option value="Freelance Editor">Freelance Editor</option>
                                          <option value="Freelance Writer">Freelance Writer</option>
                                            <option value="Public Relations">Public Relations</option>
                                             <option value="Web Developer">Web Developer</option>
                                                 <option value="Writer/Editor">Writer/Editor</option>
                                                
                                                      <optgroup label="Medical">
                                                     <option value="Doctor">Doctor</option>
                                        <option value="Emergency medical Services">Emergency medical Services</option>
                                          <option value="Nurse">Nurse</option>
                                            <option value="Paramedic">Paramedic</option>
                                             <option value="Pharmacist">Pharmacist</option>
                                                 <option value="Psychologist">Psychologist</option>
                                                     <option value="Social Worker">Social Worker</option>
                                                 <option value="Veterinarian">Veterinarian</option>

                                                  <optgroup label="Teaching">
                                                     <option value="Athletic Trainer">Athletic Trainer</option>
                                        <option value="Bank Teller">Bank Teller</option>
                                          <option value="Call Center">Call Center</option>
                                            <option value="Funeral Director">Funeral Director</option>
                                             <option value="Hair Stylist">Hair Stylist</option>
                                                 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                                     <option value="Retail">Retail</option>
                                                 <option value="Sales">Sales</option>   
                                                  <option value="Ski instructor">Ski instructor</option>
                                             <option value="Waiter">Waiter</option>
                                                 <option value="Wedding Planner">Wedding Planner</option>

                                                     <optgroup label="Teaching">
                                                     <option value="Carrier Counselor">Carrier Counselor</option>
                                        <option value="School jobs">School jobs</option>
                                          <option value="Substitute Teacher">Substitute Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                             <option value="Teaching Abroad">Teaching Abroad</option>
                                                 <option value="Teaching Online">Teaching Online</option>
                                                    
                                                                    <optgroup label="Technology">
                                                     <option value="App Developer">App Developer</option>
                                        <option value="Computer programmer">Computer programmer</option>
                                          <option value="Database">Database</option>
                                            <option value="Administrator">Administrator</option>
                                             <option value="">Programmer</option>
                                                 <option value="Software Developer">Software Developer</option>                         
                     </select>
                
                </div>
                 
                 <span id="requiredFields" style="text-align: center; color:red; display: none;">These fields are required</span>
            </div>
        </div>

    </div>

  

         
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Preffered City(optional)</label>
                <div class="col-md-9">
                  <?php
                  if(!empty($editstatus))
                  {
                    foreach ($data as $key) {
                      if(!empty($key['employee_preffered_location']))
                      {
                    ?>
                    <input type="text" name="prefferedlocation" class="form-control input-lg" value="<?= base64_decode(base64_decode($key['employee_preffered_location'])); ?>" />
                    <?php
                    }
                    elseif (empty($key['employee_preffered_location'])) {
                      ?>
                         <input type="text" name="prefferedlocation" class="form-control input-lg" placeholder="Preffered city for job" />
                      <?php
                    }
                  }
                  }
                  else{


                  ?>
                    <input type="text" name="prefferedlocation" class="form-control input-lg" placeholder="Preffered city for job" />
                    <?php
                  }
                    ?>
                </div>
            </div>
        </div>
       
         
        <div class="row">
            <div class="form-actions floatRight">
              <button type="button" class="btn regularButton btn-sm" id="addMoreExperience">+ Add More Experience</button>
             
               
                <button type="submit" class="btn regularButton btn-sm">Submit</button>

                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
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
    	 $("#showexperience2").slideToggle(700);
    	 $("#btn1").hide();
    	  $("#btn2").show();
    });
    $("#btn2").click(function(){
    	 $("#showexperience3").slideToggle(700);
    	 $("#btn2").hide();
    	 $("#btn3").show();
    });

    $("#btn3").click(function(){
    	 $("#showexperience4").slideToggle(700);
    	 $("#btn3").hide();
    	 $("#btn4").show();
    });

    $("#btn4").click(function(){
    	 $("#showexperience5").slideToggle(700);
    	 $("#btn4").hide();
    	 
    });

    
});
</script>

<script>
    document.getElementById('showexperience1').style.display="none";
    function showw()
    {
      var x=document.getElementById('selectt').value;
      if(x=='Experience')
      {
        //document.getElementById('showexperience1').style.display="block";
        $("#showexperience1").show(700);
        $("#btn1").show(500);
      }
      else if(x=='Fresher')
      {
        $('#showexperience1').hide(700);
        $('#showexperience2').hide(700);
        $('#showexperience3').hide(700);
        $('#showexperience4').hide(700);
        $('#showexperience5').hide(700);
          //document.getElementById('showexperience1').style.display="none";
           //document.getElementById('showexperience2').style.display="none";
            //document.getElementById('showexperience3').style.display="none";
             //document.getElementById('showexperience4').style.display="none";
              //document.getElementById('showexperience5').style.display="none";
      }
       else
      {
         $('#showexperience1').hide(700);
        $('#showexperience2').hide(700);
        $('#showexperience3').hide(700);
        $('#showexperience4').hide(700);
        $('#showexperience5').hide(700);
         /* document.getElementById('showexperience1').style.display="none";
           document.getElementById('showexperience2').style.display="none";
            document.getElementById('showexperience3').style.display="none";
             document.getElementById('showexperience4').style.display="none";
              document.getElementById('showexperience5').style.display="none";*/
      }
    }
</script>

<script>
  function testt()
  {
    var select=document.getElementById("selectt").value;
    var experience1=document.getElementById("experience1").value;
    var company1=document.getElementById("company1").value;
    var experience_in1=document.getElementById("experience_in").value;
    if(select=='Experience' && experience_in1=='' && company1=='' && experience1=='')
    {
     document.getElementById("requiredFields").style.display="block";
     $("#experience1").css("border-color", "red");
     $("#company1").css("border-color", "red");
     $("#experience_in").css("border-color", "red");
     return false;
     //experience1.style.backgroundColor = "yellow";
    }
    else
    {
      return true;//document.forms['myForm'].submit();
    }
   }




   //submit form with jquery

$(document).ready(function () {
    $('#myForm').submit(function(e) {
    e.preventDefault();
    var form = $(this);

    var selectt = $("#selectt").val();
   
  

if(selectt=='')
{
  alert('null');
}
  else
  {

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Employee/registerstep6'); ?>",
        data: $('#myForm').serialize(), // <--- THIS IS THE CHANGE
        success: function(response){

        if(response== 0)
        {
            alert('error');
               

        }
        else if(response==1)
        {
 
            window.location.href = "<?= base_url(); ?>EmployeeRegistrationStep7";
           
        }
        else if(response==2)
        {
           
            window.location.href = "<?= base_url(); ?>EmployeeRegistrationStep7";
        }
        }

        
   });

}
});

    $("#addMoreExperience").click(function (e) {

      $("#addmoreSuccessmsg").hide(200);
       $("#Loading").show(200);
    //  $("#educationFailure").hide(200);
      $('#myForm').hide(200);

       var selectt = $("#selectt").val();
        
        //stop submit the form, we will post it manually.
        e.preventDefault();
        
        
       
      
       if (selectt=='')
       {
        alert('empty');
        //$("#educationFailure").show(200);
        //alert('empty fileds found');
       }
       else
       {

    
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('employee/registerstep6'); ?>",
            data: $('#myForm').serialize(),
            success: function (data) {
            
              //echo 'success';
                 $('#Loading').hide(200);
              $("#addmoreSuccessmsg").show(200);

               $('#myForm').trigger("reset");
             $('#myForm').show(200);
             
             

            }
          
        });
}
    });



   });
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