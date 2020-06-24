
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

<meta name="description" content="Register for free to apply jobs in your city. job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in." />
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
                include('GetJobHeaderLi.php');
            ?>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
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
<div class="container">
    <div class="col-md-offset-2 col-md-8">
     <div class="single">  
	   <div class="form-container">
        <h2>Employee Registration Form</h2>


         <?php 
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

        <form action="employee/register" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             <div class="login-para" >
                            <p>Already Registered? <a  href="<?= base_url(); ?>EmployeeLogin" style="cursor:pointer; background:white;"> SignIn </a></p>
                         </div>
            </div>
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Full Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" placeholder="What is your name?" required="" class="form-control"/>
                    <input type="hidden" name="referral" value="<?= $referral; ?>" class="form-control input-sm"/>
                    <input type="hidden" name="login" value="<?= $login; ?>" class="form-control input-sm"/>
                    <input type="hidden" name="id" value="<?= $id; ?>" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Password</label>
                <div class="col-md-9">
                    <input type="password" placeholder="Enter a strong Password" name="password" required="" id="password" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Re-Enter Password</label>
                <div class="col-md-9">
                    <input type="password" placeholder="Re-Enter Password" name="passwordagain" required="" id="passwordagain" onkeyup="checkpassword();" class="form-control"/>
                </br>
               
                </div>
            </div>
        </div>

         <div class="row">
            <div class="form-group col-md-12">

                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" placeholder="abc@example.com" required="" class="form-control"/>
                </div>
            </div>
        </div>
       
       
          <div class="row">
            <div class="col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                    <select name="country" class="form-control" required="">
                        <option value="India">India</option>
                         <option value="Canada">Canada</option>

                    </select>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">City</label>
                <div class="col-md-9">
                    <input type="text" name="city" placeholder="Enter your city" class="form-control" required=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">State</label>
                <div class="col-md-9">
                    <input type="text" name="state" placeholder="Enter your state" class="form-control" required=""/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Pin Code</label>
                <div class="col-md-9">
                    <input type="text" name="pincode" placeholder="Enter your pincode" class="form-control" required=""/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Contact</label>
                <div class="col-md-9">
                    <input type="text" name="contact" placeholder="Enter your contact number" class="form-control" required=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Date of Birth</label>
                <div class="col-md-9">
                    <input type="date" name="birthdate" class="form-control" required=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Highest Qualification</label>
                <div class="col-md-9">
                    <select name="qualification" id="educationn" class="form-control" onchange="showweducation()" required="">
                        <option value="">Select</option>
                        <option value="+2">+2</option>
                        <option value="Bachelors Degree">Bachelors Degree</option>
                        <option value="Masters Degree">Masters Degree</option>
                        <option value="Ph.D">Ph.D</option>
                         
                    </select>
                    
                </div>
            </div>
        </div>
         <div id="showeducation">
          <div class="row">
            <div class="form-group col-md-12" id="+2">
                <label class="col-md-3 control-lable" for="email">+2 Detail (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">

                    <input type="text" name="passed1" class="form-control" placeholder="Passed in Year"/>
                </div>
                 <div class="col-md-3">
                 
                    <input type="text" name="uni1" class="form-control" placeholder="Uni/College"/>
                </div>
                <div class="col-md-3">

                  <input type="text" name="marks1" class="form-control" placeholder="Marks%"/>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" id="bachelor">
                <label class="col-md-3 control-lable" for="email">Bachelor Detail (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">

                    <input type="text" name="passed2" class="form-control" placeholder="Passed in Year"/>
                </div>
                 <div class="col-md-3">
                 
                    <input type="text" name="uni2" class="form-control" placeholder="Uni/College"/>
                </div>
                <div class="col-md-3">

                  <input type="text" name="marks2" class="form-control" placeholder="Marks%"/>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" id="master">
                <label class="col-md-3 control-lable" for="email">Master Detail (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">

                    <input type="text" name="passed3" class="form-control" placeholder="Passed in Year"/>
                </div>
                 <div class="col-md-3">
                 
                    <input type="text" name="uni3" class="form-control" placeholder="Uni/College"/>
                </div>
                <div class="col-md-3">

                  <input type="text" name="marks3" class="form-control" placeholder="Marks%"/>
                    
               
                </div>
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" id="phd">
                <label class="col-md-3 control-lable" for="email">Ph.D Detail (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">

                    <input type="text" name="passed4" class="form-control" placeholder="Passed in Year"/>
                </div>
                 <div class="col-md-3">
                 
                    <input type="text" name="uni4" class="form-control" placeholder="Uni/College"/>
                </div>
                <div class="col-md-3">

                  <input type="text" name="marks4" class="form-control" placeholder="Marks%"/>
                    
               
                </div>
                 
                 
            </div>
        </div>
      </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Division</label>
                <div class="col-md-9">
                    <select name="grade" class="form-control" required="">
                        <option value="">Select</option>
                        <option value="First Division">First Division</option>
                        <option value="Second Division">Second Division</option>
                        <option value="Third Division">Third Division</option>
                        
                    </select>
                    
                </div>
            </div>
        </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Select category</label>
                <div class="col-md-9">

                    <select name="category" class="form-control" required="">
                        <option value="">Select</option>
                        <option value="Arts">Arts</option>
                        <option value="Airline">Airline</option>
                        <option value="Business">Business</option> 
                        <option value="Contract">Contract</option>
                        <option value="Commission">Commission</option>
                        <option value="Internship">Internship</option>
                        <option value="Media">Media</option>
                        <option value="Medical">Medical</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Temporary">Temporary</option>                       
                        <option value="Teaching">Teaching</option>
                        <option value="Technology">Technology</option> 
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Fresher/Experience</label>
                <div class="col-md-9">
                    <select name="fresher/experience" id="selectt" class="form-control" onchange="showw()" required="">
                        <option value="">Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="Experience">Experienced</option>
                        
                    </select>
                    
                </div>
            </div>
        </div>
        <div id="showexperience">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience1" class="form-control" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company1" class="form-control" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in1" id="experience_in" class="form-control">
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
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience2" class="form-control" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company2" class="form-control" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in2" id="experience_in" class="form-control">
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
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience3" class="form-control" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company3" class="form-control"  placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in3" id="experience_in" class="form-control" >
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
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience4" class="form-control"  placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company4" class="form-control" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in4" id="experience_in" class="form-control" >
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
                 
                 
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience5" class="form-control"  placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company5" class="form-control" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in5" id="experience_in" class="form-control" >
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
                 
            </div>
        </div>
      </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Designation (optional)</label>
                <div class="col-md-9">
                    <input type="text" name="designation" class="form-control" placeholder="Enter you job title" />
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Preferred City</label>
                <div class="col-md-9">
                    <input type="text" name="preffered_location" class="form-control" required="" placeholder="Suitable City for job"/>
                </div>
            </div>
        </div>
         
        

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Cover Letter</label>
                <div class="col-md-9 sm_1">
                  <script>edToolbar('mytxtarea'); </script>
    
                   <textarea  id="mytxtarea" class="ed" placeholder="Impress your recruiterby explaining who you are and what you are capable of.
                   " title="Minimum 300 Characters" cols="77" rows="6" name="description" required=""></textarea><p id="descriptionresult" style="float:right;"><font color="red"><b>0</b></font></p>
                     <div class="col-md-12" id="empty1">
                    		Please Write something about yourself.
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Upload Resume</label>
                <div class="col-md-9">
                	<label class="myFile">
  <img src="<?= base_url(); ?>images/uploaddocument.png"  alt="image" height="10%" width="10%"/>
  <input type="file"  name="userfile" id="file" onchange="showname()"/>
  <p style="color:red;"><b>Please upload .doc or .pdf file only.</b></p>
</label>
<input type="text" id="imgresult"/>
                   
                    <div class="col-md-12" id="empty2">
						please select a file for upload.
					</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" id="submit" value="Register" class="btn btn-primary btn-sm">
                <h4 style="color:red; display:none;" id="match">Passowrd do not match.Because of that submit button is disabled.</h4>
            </div>
        </div>
    </form>
    </div>
 </div>
</div>

</div>

<div class="container">
<div class="row" style="margin-top:2%;">
   <div class="col_3 message">
    <h3>Refer & Earn</h3>
<p style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
   </div>
    <a href="<?= base_url(); ?>referral" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>
<script>
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
     
      
    </script>
<script>
	 function validateForm() {
    var x= document.getElementById("address").value;
    var a= document.getElementById("description").value;
     var c= document.getElementById("file").value;
    var y=x.trim();
    var b=a.trim();
    
    if (y == "") {
        document.getElementById("address").style.borderColor= "red";
        document.getElementById("empty").style.display = "block";

        return false;
    }
     if (b == "") {
        document.getElementById("description").style.borderColor= "red";
        document.getElementById("empty1").style.display = "block";

        return false;
    }
     if (c == "") {
       
        document.getElementById("empty2").style.display = "block";

        return false;
    }
    else
    {
    	
    	return true;
    }
}

</script>

<!--count paragraph characters-->
<script>
function myFunction() {
    var x = document.getElementById("address").value;
   
    
 	document.getElementById("addressresult").innerHTML =x.length;
 	
}
</script>

<!--count description characters-->
<script>
function myFunction1() {
    var x = document.getElementById("description").value;
  	document.getElementById("descriptionresult").innerHTML =x.length;
}
</script>

<script>
    document.getElementById('showexperience').style.display="none";
    function showw()
    {
      var x=document.getElementById('selectt').value;
      if(x=='Experience')
      {
        document.getElementById('showexperience').style.display="block";
      }
      else if(x=='Fresher')
      {
          document.getElementById('showexperience').style.display="none";
      }
       else
      {
          document.getElementById('showexperience').style.display="none";
      }
    }
</script>
<script>
    //document.getElementById('showeducation').style.display="none";
    document.getElementById('+2').style.display="none";
    document.getElementById('bachelor').style.display="none";
    document.getElementById('master').style.display="none";
    document.getElementById('phd').style.display="none";
    function showweducation()
    {
      var x=document.getElementById('educationn').value;
      if(x=='+2')
      {
        document.getElementById('+2').style.display="block";
         document.getElementById('bachelor').style.display="none";
      }
      else if(x=='Bachelors Degree')
      {
         document.getElementById('+2').style.display="block";
          document.getElementById('bachelor').style.display="block";
           document.getElementById('master').style.display="none";
      }
       else if(x=='Masters Degree')
      {
          document.getElementById('+2').style.display="block";
          document.getElementById('bachelor').style.display="block";
          document.getElementById('master').style.display="block";
           document.getElementById('phd').style.display="none";
      }
       else if(x=='Ph.D')
      {
        document.getElementById('+2').style.display="block";
          document.getElementById('bachelor').style.display="block";
          document.getElementById('master').style.display="block";
          document.getElementById('phd').style.display="block";
      }
      else
      {
        document.getElementById('+2').style.display="none";
          document.getElementById('bachelor').style.display="none";
          document.getElementById('master').style.display="none";
          document.getElementById('phd').style.display="none";
          
      }
  
    }
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