<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html  lang="en">
<head>
	<?php
include 'fav.php';
?>
<title>Online job portal for job seekers and job providers | Employee Registration :: Get-job.online </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job websites in india" />
<meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city." />
<link rel="alternate" href="http://www.get-job.online" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
	         <a class="navbar-brand" href="<?= base_url(); ?>welcome/dashboard"><img src="http://www.get-job.online/logo/getjob.png" alt="logo"/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<li><a href="<?= base_url(); ?>">Home</a></li>
		        
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
		             <ul class="dropdown-menu">
			          
			            <li><a href="<?= base_url(); ?>recruiter/login">Recruiter Login</a></li>
			             <li><a href="<?= base_url(); ?>recruiter">Recruiter Signup</a></li>
			            
		             </ul>
		        </li>

		         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<b class="caret"></b></a>
		             <ul class="dropdown-menu">
			           
			            <li><a href="<?= base_url(); ?>employee/login">Employee Login</a></li>
			             <li><a href="<?= base_url(); ?>employee">Employee Signup</a></li>
			            
		             </ul>
		        </li>

		        
		          <li><a href="<?= base_url(); ?>welcome/about" >About Us</a></li>
                <li><a href="<?= base_url(); ?>welcome/contact" >Contact Us</a></li>
            
		        <li><a href="http://www.get-job.online/blog" target="_blank">Blog</a></li>
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
    <div class="single">  
	   <div class="form-container">
        <h2>Employee Registeration Form</h2>

         <?php 
         $email=$_GET['email'];
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

                foreach ($data as $value) {
                    
			?>
                
        <form action="<?= base_url(); ?>suggestion/updateemployeee" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Full Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" value="<?= base64_decode(base64_decode($value['employee_name'])); ?>" class="form-control input-sm"/>
                       </div>
            </div>
         </div>
         
        <input type="hidden" name="email" value="<?= base64_decode(base64_decode($email)); ?>">
       
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                    <select name="country" class="form-control input-sm" required="">
                        <option value="India">India</option>
                    </select>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">City</label>
                <div class="col-md-9">
                    <input type="text" name="city" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['employee_city'])); ?>"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">State</label>
                <div class="col-md-9">
                    <input type="text" name="state" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['employee_state'])); ?>"/>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Full Address</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" name="address" id="address" onkeyup="myFunction()" > <?= base64_decode(base64_decode($value['employee_address'])); ?></textarea><p id="addressresult" style="float:right;"> <font color="red"><b>0</b></font></p>
                     <div class="col-md-12" id="empty">
                    		Please fill Your full address.
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Pin Code</label>
                <div class="col-md-9">
                    <input type="text" name="pincode" class="form-control input-sm" value="<?= $value['employee_pincode']; ?>"/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Contact</label>
                <div class="col-md-9">
                    <input type="text" name="contact" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['employee_phone'])); ?>"/>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Highest Qualification</label>
                <div class="col-md-9">
                    <select name="qualification" class="form-control input-sm" required="">
                        <option value="">Select</option>
                        <option value="+2">+2</option>
                        <option value="Bachelors Degree">Bachelors Degree</option>
                        <option value="Masters Degree">Masters Degree</option>
                        <option value="Ph.D">Ph.D</option>
                         
                    </select>
                    
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Division</label>
                <div class="col-md-9">
                    <select name="grade" class="form-control input-sm" required="">
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
                    <select name="category" class="form-control input-sm" required="">
                        <option value="">Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="Contract">Contract</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Temporary">Temporary</option>
                        <option value="Walk in">Walk in</option>
                        <option value="Commision">Commision</option>
                        <option value="Internship">Internship</option>
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Fresher/Experience</label>
                <div class="col-md-9">
                    <select name="fresher/experience" id="selectt" class="form-control input-sm" onchange="showw()" required="">
                        <option value=""  >Select</option>
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
                    <input type="text" name="experience1" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['experience1'])); ?>" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company1" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['company1'])); ?>" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in1" id="experience_in" class="form-control input-sm">
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
                <label class="col-md-3 control-lable" for="email">Precvious Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience2" value="<?= base64_decode(base64_decode($value['experience2'])); ?>" class="form-control input-sm" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company2" value="<?= base64_decode(base64_decode($value['company2'])); ?>" class="form-control input-sm" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in2" id="experience_in" class="form-control input-sm">
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
                <label class="col-md-3 control-lable" for="email">Precvious Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience3" value="<?= base64_decode(base64_decode($value['experience3'])); ?>" class="form-control input-sm" placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company3" value="<?= base64_decode(base64_decode($value['company3'])); ?>" class="form-control input-sm"  placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in3" id="experience_in" class="form-control input-sm" >
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
                <label class="col-md-3 control-lable" for="email">Precvious Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience4" value="<?= base64_decode(base64_decode($value['experience4'])); ?>" class="form-control input-sm"  placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company4" value="<?= base64_decode(base64_decode($value['company4'])); ?>" class="form-control input-sm" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in4" id="experience_in" class="form-control input-sm" >
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
                <label class="col-md-3 control-lable" for="email">Precvious Experience (Optional)</label>
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-3">
                    <input type="text" name="experience5" value="<?= base64_decode(base64_decode($value['experience5'])); ?>" class="form-control input-sm"  placeholder="Experience in Months"/>
                </div>
                 <div class="col-md-3">
                    <input type="text" name="company5" value="<?= base64_decode(base64_decode($value['company5'])); ?>" class="form-control input-sm" placeholder="Company Name"/>
                </div>
                <div class="col-md-3">

                    <select name="experience_in5" id="experience_in" class="form-control input-sm" >
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
                    <input type="text" name="designation" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['employee_designation'])); ?>" placeholder="Designation" />
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Preferred Location</label>
                <div class="col-md-9">
                    <input type="text" name="preffered_location" class="form-control input-sm" value="<?= base64_decode(base64_decode($value['employee_preffered_location'])); ?>" placeholder="Suitable Location for job"/>
                </div>
            </div>
        </div>
         
        

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Description</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" name="description" id="description"  onkeyup="myFunction1()" placeholder="Something about yourself"> <?= base64_decode(base64_decode($value['employee_description'])); ?></textarea><p id="descriptionresult" style="float:right;"><font color="red"><b>0</b></font></p>
                     <div class="col-md-12" id="empty1">
                    		Please Write something about yourself.
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
<?php
}
    ?>
<div class="footer">
    <div class="container">
        <div class="col-md-3 grid_3">
            <h4>Navigate</h4>
           <ul class="f_list f_list1">
                <li><a href="<?= base_url(); ?>welcome/dashboard">Home</a></li>
               <li><a href="<?= base_url(); ?>welcome/signinas?click=eid">Employee Login/Signup</a></li>
                <li><a href="<?= base_url(); ?>welcome/signinas?click=rid">Recruiter Login/Signup</a></li>
            
            </ul>
            <ul class="f_list">
                
                <li><a href="<?= base_url(); ?>referral">Refer & Earn</a></li>
                <li><a href="<?= base_url(); ?>welcome/about">About Us</a></li>
                <li><a href="<?= base_url(); ?>welcome/contact">Contact Us</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 grid_3">
            
            <div class="footer-list">
              <ul>
                <li >

                                                       <a class="twitter-timeline"  href="https://twitter.com/search?q=get_job_online" data-widget-id="930363023939608576">Tweets about get_job_online</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
</li>

                    <!--<i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
                <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
              --></ul>
            </div>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Seeking</h4>
           <p>This is the best platform for job seekers and job providers.You will just signup and start working at the place, where you get the right value of your work. We hope you will enjoy the working experience with us.</p>
           </div>
        <div class="col-md-3 grid_3">
            <h4>Sign up for our newsletter</h4>
            <p>Enter your email and signup for newsletter.</p>
            <form action="<?= base_url(); ?>welcome/newsletter" method="post">
                <input type="text" name="email" class="form-control" placeholder="Enter your email">
                <button type="submit" class="btn red">Subscribe now!</button>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="footer_bottom"> 
  <div class="container">
    <table style="color:white; text-align:center" align="center">
                
                        <tr><td title="Share on Twitter" style="cursor:pointer"><a href="https://twitter.com/get_job_online" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAR/SURBVFhH7ZhriFRlHMY3La/oByNTg0QJFbuYYoRiBhGCWgohq1jGJpFFflgUS9klgxRCFCQDb1+8kGy7YiKrH7yN0baz15lNN7ANQT8oBZkVqO2u7vZ7Ts+o4+jsOePsfpB94OE9538///eded9zCnrRi4cZnZ2djzQ2Nk6tr68vaWho2Ap3wXV1dXWvx2KxR22WAWwe8+VtKBiO4337wKCoWSRKwk6zHV5L3aO/QPHv2DxAIpF4Avl69H8xfm7x/0BYZOdVFuUMYnxGgg74O/y0trZ2nBognYpQYdgknG8PNh/CSq5vPQA2C4NgKSAMHBz4XYsjQwU5TmVNTc1QizNAwX2wW6N8sofXuI77uhn0s2nwVBOt+AoewfAmY7HVocESmYzfDfxPlJeX97U4K+jUTK1J/CbAM1B1JIlxgfGLwIiLQikQzmlpaenP9UHf72AcFBiFAPaV8CpJR1kUCn6wP5TzLhYGBgRdJgGBp+re7f8SudrfTIBXA8MsqK6uHoaturfdotBQF/Gtg9vw/5lRzdlodVDgAgkxfNOiAMjnwktQ67IM/QtWZYCHmOfA8y2KBM2ccjhGWdoSYTGPkQKutegW1BkcNsNWqI4eo5glVVVVQ2wSAF0wC6znSRZFAr575K9cmkGLbwNlAuX5+y1uihqLzRb4jwO1Mf7IuIHOvsf1Jsmxe8kukUCcH/Bv9m0mSLLQiUssuif014HNYmwrYMbCJs5bNo0EfNWgat+mA8XL8Dt4BcN2urDIqi5BQc/gNx8uh6VaElZFAr4t5D7q23Sg/CjVAZH7DopcanW3Q7sMea/DXRalg2Jmu7h9FLcTaj0UWd3tINfTyk/eUovSwV45AoN2DMos6lGQN/ibg29YlAmMDsBW/eVY1GOgsC3k7si6fjGYogJh6H00H9D6I6f23VqL7g8MV7jVFU1NTYMt7law/qcrJ7k/sSg7MFwJtWOcY3w/17+NsCDHN7ANjrQoOyhMZ7R/3Uk9Waue0uq8Qutd8eG3FnUNilrnwnQajsOdTPdwq/MK8ug0fZMGPGdR14jH40/iqKP3GaZ3oMV5B/FnqDjG3RaFB07FUF0s0zHI4ryB2IOIra3tsv6DLY4GAnytImEV11MszguIuU+xibvYotzAQeADglxNFQr1zvK21TmBeKWOt9WiB4N+IARbA4NXQhK0MS2PWx0J+K9yjONpb225wi9QhQT8SYHhWbo6zerQ0M5EjM0u7nvG0C9iBclk8ik68iw/9bF+/XwFfkygvfBPBYW/wdW5/Kp5oNHEOek4FZFj4HzRzndTR/v9FL4kFosNsHloqBBir1QcRu0UJdp3rQ4PHPXm9usdhe2noy9m+7iTDf6+sgLqAKApbeQhJ1udG7RgCaZpTXXzb671Clikqb/nW5YhX2yfh8uxP8yY2ibP4rsom29keDHPIXj5HYlEfTc5zXiK8RDjUUZ9R/kF6qtVyu4y8r2Mr+U0nVGgNUQHppNQpxudOE7AJnieAs5BfWyKcb+dsVi/7p48R/biIUFBwX8wCMeYl0CSwwAAAABJRU5ErkJggg==" alt="twitter logo"></a></td>
                        <td title="Share on Facebook" style="cursor:pointer"><a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHuSURBVFhH7Zg9SwNBEIYjGH+CWKWyVJAIIiJ2Nmqhpf4AQbA3sYhpJPY2pvBf2JgUEVJIvjBIsLEIVoKFtVbnM8tcSOLFyx3eRXAfeNmd2dmd9y7JaZKwWCwhaDabKVRuNBqfjE6U0h5llNL2/uiGTKfTmdFUZEgPemVRSVP+yFXFYc5FeklPDf3hahydxkagnr9lkHOSaIe7c46KzC8ZC+gEpbXMELvBVqu1gYkuZ92hHPEh8bGauyeX0VJDrAYxsILe0KamBiBfmJhBx3GmMNDmjD1NfWOiBmmeRk8aGsQ0Z+6SzzNeME7uJab5EfuvNDQQy4ejyphjlPfgCfNVXTYE6hmoeAj2nmEgr6GB+L3dbs9q6ElsBjET6v31fw1iaBEVXbH3wctgf42oXq+v6bIhSoPb6FEexK5qtdqSLhv610TUP6OBZ2TUBm80HAvquxid19DwZwxWKpVp6j/okdSUIWqDVe7Isite4jldNvSvUbuFXnSpR2QGqV2nYdMVvCKvD0l/zbUu9ZAanfoTqHgIDNjnoDXohTXoEqtBmu0HHZGnQfLyN3ukwho8CDoiT4P8c7DwkwIZpEnoL+6jDOrUkzBf3EsoG8ZkUIPSg/VT9t1qyh82yI9HJbkqOTxKaQ+5IeP/eGSxWFwSiS+414WXoZ+dNwAAAABJRU5ErkJggg==" alt="facebook logo"></a></td>
                        <td title="Share on Google+" style="cursor:pointer"><a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARiSURBVFhH7ZjJS1VRHMetTXP/QGVBkzbYAA3bVoVt2hTUX5AWNBBqtClTU8SKSiIiqCiJSlJp2rkxyee4cNOLCiJLCds32ud7+B157/nufdf3tDZ+4cv5nd947j33nnPuzZvBDDKgt7d3eXd3dzE8CsuNkot7enryze3foq+vbx3FL8L3DOQz7XN4BdYar6J/YbZ3tPWKsfDpA8UKYCv8QtHKKEVjsdgG+cIR+KSrq2uNmaYOY2Njs0l+hoGN0p4dHBxcaKY8yehrJWM7JEpGV5fqh63ScpQpp5lyw8DAwAISPoWvwVJTazA13J1tJq90ygR4He12+TolUA4GGUPXRjvf1NlBCeArkt1vb2+fa7qLzpgFfGxnZ+c85CbYAbMbpKaA4FYGdw95lig9z91q55AF/PPn89kgW33uSYGBnYGvdYWWrMVMOUPTazk1QzF42kzRQEABSb729/cvMdW0gVr51Po2qZkhqIWgsyY35DKtQVBO5ZZMLS1Dzc6QCVrbCPzS0dGxyFTTDt7sxarJrlRoqmBwJfU4nzf5glOmgIvYhM8d7J/gD7X070pvLpHha9BWk6POKcOA4wfetvWSWee2OGUCSHIc/oJjafiT+F3mGgnU2qyWu1dEbNwpg0ABPbBDktNNMfYDGgg+f+ANPUdaH3Xn6N+EjUFLBnE7sZdbNwmqpTjsI4mbwQTgsJdEz0yugeM7RDwen0Nfm7/u1ClTRwYxFYq17jhUQ7VM1gGj2BnSgQRHcLhm3SQoUAVoB7ja8X0UnQ4Q+1PJErXC7O7OwRfIindHMhecAuzXsZVYdyJwqMDBP7QHndJA/6QKwKStTjGmTyL+J8LsLtjga6k2tgqnTAcZ5SSZ1p1KPOgHDXAffOiJ3wdaDfCkuTigSzvFgq9Fm3GAGacY9gW9CPagvzW/3aZ2oB84QA/smuLD1p0IG4R7SWhr6Qe9JKWmTgL2Mtlph+Rv6lCwvKzC389a+EvCureMAsOSdQ50ygRg228DFG/hv9YvM+qT/Df8Iz8LiQTV8stMxv2f5O/8Qk3ADqdMAPZjMGihlv6YuUYC/jvV2loavlALOGmrqzL5nFOmAP1GfG7Dj8jf1arvL2wyIN4dSmhryOE+HULBleiwMPwfDgvDkQ4LAs46brm7h9zgT8JTCb0cyi2Ztgo+coYo0IAIGNVLY6ppA3XyVUv7uqmigaDTsAu6Iz93tM1MOUO5lFO5kXtgmZmiwxLoI71Jsih9LtPtY30+BvaA/C0+96ShK4T6NGzSp6J0JL3kjFmA2MtqlcsGl/1np4cSkKwN6ss98cO9Gm6VrAfeKRPgdfKRr1MCPdf0e8nbkvPgPJgC/frQNjYKq9L80vDnufFfH9Il+tlSUoX+G9Svj+ymNQx600jeDPUjqJq7VBRWSDb54KvD7wgDfJzubk85KFJIMR0m4rTDtC9ho3Smb5RONvjG9AUW/m+hZ4oB72EApQzK/8AskS70+2IGMxDy8v4C+MfZB3lEXwoAAAAASUVORK5CYII=" alt="google+ logo"></a></td>
                        <td title="Share on Instagram" style="cursor:pointer"><a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAViSURBVFhH7ZhtaJZlFMfXe43CInsxapT0Tq/7EFEqJRY1rVwQiR+MglCz1Aw1hTIR+hBi1mIUVLTo0yIqCfrQcihruk3nmhI2MXIDy+yDL0XL1PX73Zz7cc+zZ+uZu9cn//DnnHOdc53rPNd9Xdd93U/ZKYwWurq6zmlra5u6ZcuWVcj3siZ5a5BLYWUMWTpaW1tnkKAH9v1PbIQ3xvBDg1/0WnTaiT6rvb39knBlivr6+jOYiBscDx5mvANwYriLI2aujw7rmpubz4vmzLF169ZJjLOYcZYiFzDuw8ge7N/guAjLh2vOILgTlkdz5iD3BFj4iH+BEyjuGPLdCM0HTjeEszcrmkYF5J/rOM4aHI/9hjasgF/Ag05WhJ8AjlURODaaRgVpgchbtdFfjnEraJsdvoE7m8Za2BvmsMCaug0+SfKF5JiD/khLS8vl4c4DMc9GEW9Cj5mvtelzhf1CfyjCT4DAWpwHwvxPuImIXwZ3m7SQ5DsGN6JXR5cEPNaraMs7wohbpw+ZLrOpSXB/0FhygcTeB/fEAK3oS5ATmbXrKeAW7Cq4ljYXvwM2dHR0XBrdyxobG8/ctm3b1bEGc7sWvbQCd+zYcTb6NPhEIYlbAv+GFjgt6Qw2bdp0GfYEiryD/ufb5iwT9wrt/8Cf0Geao5C032U8srQC0ecYOBjxtzkjfX19pzMLz2B+X+A/Ar9Cv9t8yMnwUOovJLEeL2ORpRWITHYWbTMpYIrEno7di+z27dLZ2XkRdkPEdUAPXWOcpTXI/fA4+nJzkuPRsFvSnJH3fWih7uLhFWinxAnw+6hsmxZLwPfnUTiPmTwtwnJgjV1In8/sg3zRNvQ6dDdPcsQI2vofMydXoI8S/x7Ypo2YH4le0B4Mvm+JaYC9mzdvvkaiO4s1EZJNgTzS28NerE3sz7Cj2MwVwp1NrLO2WpscLei7EifAHnmB+J7S5gCd5IDqtC3RVwqIb4Xb1en3lv2bmpouCF8mBb6kzUxeFwtbX94BPBSIrYOH1MnlZvJdPD58mRSYe38ik9sIA8zQVwqI/5S++0JfYX/PzbBHXiByujYxVSZGem6t0VcKiHeDbVSn3wfoR9L1iz3yAn3x43ehr9VG+o79HY7RHgrEpD9uvkWhezFNihXYIy9QoH9HzF5kOfJ+eBx+7lESIQNg/+jj5cB+DyItYFGEZFpgMhPwVW3iX9dGNrh5kqB+wFeNby/sZb3e4w+hrR3mzTx6NgUKYtbT5ot/ctje57w4uCY9Sj6G9djpTafH4oxFf9s2fHO1U9CWXYG+g2nrJvYwfMw2zsZraVsDt9P2B/JXpGt0gbcZr1boNdCBP0kS9QPt2RUo4qD+kXhnrc7XV7jy4IYg5gFifKxJcRR7brhzwJdtgcKbDD6PC3d2ckNBekH1hr0C/UNkN3Sw/ch50XUA8J1UgQsiMHfrKAbWl7fn1XCX8SmxvQ9uhIu81UR4URCz0j5+k6APXiAOF/FRd5sfLRGYt6CHQnxXV3hmlnKJSEGfb+AB1yrjPu64/PAp4T4Bikneka4x73vYnv773AQRkjnI/bRjMk6tNrpLJHnnJwH9QVBlBK/URvea/hf2n8iP4DJ0j5Us6GN15hzvB+QYZt07Zyf67qSgYiBgPTzML7g57Er4LZ28OefWWEY8SO530jWKna7757WLgim/iSD/ZfJ9mXxpCexyjxPWxvgsSK4rXXPmdubIvxAeZcwNyLOSQQcDQfdCP3g8575EzoZVJM596GRBclfD5eT2sTpzG1j/F0cZQ4PgcdB/QQ/aeZTpPxPPpTM6LLib+bV3kqDoR/xI6Cx6YsRQpzBKKCv7F87b0yp7GirBAAAAAElFTkSuQmCC" alt="instagram logo"></a></td></tr>
                
        </table>
    <div class="copy">
        <p>Copyright © 2018. All Rights Reserved . Designed and Managed by <a href="http://www.therevew.com" target="_blank">The Revew</a> </p>
    </div>
  </div>
</div>
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

</html>	