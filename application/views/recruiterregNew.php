

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<input type="hidden" id="stepValue" value="<?= $step; ?>">
<!DOCTYPE HTML>
<html  lang="en">
<head><?php
  
include 'googleadvertisement.php';
include 'fav.php';

$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');
?><title>Signup for free account and get job online | Get Job Online</title>

<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, unemployement" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. online job portalfor job providers and job seekers." />

<!-- autocomplete -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--textarea editor-->
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=jafjscapcv7dp9i4pb0vkt02dgvu25b6jukx3cwydvylm0cd"></script>
  <script>tinymce.init({selector:'#description'});</script>

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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

#category,#employee_strength
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
            if(!empty($recruiterId) || !empty($recruiterSession))
            {
           
            include('RecruiterHeaderLi.php');
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
       <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
       <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
       <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
      </p>
           </div>
    </div>
   </div> 
</div>  
<div class="container">

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
      <div class="col-md-12 alert alert-success" id="lastSuccessmsg" style="text-align:center; display: none; color: green; font-weight: bold"> Congratulations! your registration process Completed.</div>

        <div class="col-md-12 alert alert-success" id="Successmsg" style="text-align:center; display: none; color: green; font-weight: bold">Updation successfully submitted.</div>
       

        
       

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
<h2>Recruiter Registration</h2>
        <?php
      }
      ?>

      <div id="step2">

        <form  id="step2Form" method="post" style="display: none;" enctype="multipart/form-data" name="myForm" itemscope itemtype="http://schema.org/Organization">
     <?php    
      if(!empty($editstatus))
    {
      ?>
      <input type="hidden" name="editstatus" value=<?= $editstatus; ?>>

      <?php
      foreach ($data as $value) {
      
      ?>
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Year of establishment</label>
                <div class="col-md-9">
                    <input type="text" name="established" id="established" value="<?= base64_decode(base64_decode($value['recruiter_established'])); ?>" class="form-control"/>
                </div>
            </div>
        </div>
       
        
       
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Your Website (Optional)</label>
                <div class="col-md-9">
                  <?php
                  if(!empty($value['recruiter_website']))
                  {
                  ?>
                    <input type="text" itemprop="Website" name="website" value="<?=base64_decode(base64_decode($value['recruiter_website'])); ?>" class="form-control"/>
                <?php
              }
              elseif (empty($value['recruiter_website'])) {
           ?>
           <input type="text" itemprop="Website" name="website" placeholder="www.yourdomain.com" class="form-control"/>
                  <p> <a href="https://www.therevew.com" target="_blank">If you don't have a website click here</a></p> 
           <?php
              }
                  ?>
                </div>
            </div>
        </div>
      <?php
    }
  }
  else
  {
    ?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Year of establishment</label>
                <div class="col-md-9">
                    <input type="text" name="established" id="established" placeholder="Ex. 2018" class="form-control"/>
                </div>
            </div>
        </div>
       
        
       
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Your Website (Optional)</label>
                <div class="col-md-9">
                    <input type="text" itemprop="Website" name="website" placeholder="www.yourdomain.com" class="form-control"/>
                  <p> <a href="https://www.therevew.com" target="_blank">If you don't have a website click here</a></p> 
                </div>
            </div>
        </div>
        <?php
}
        if(!empty($status))
        {
          ?>
    <input type="hidden" name="status" value="<?= $status; ?>">
    <?php }?>
        <input type="hidden" name="email" value="<?= $email; ?>">
       
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Employee Strength</label>
                <div class="col-md-9">
                    <select name="employee_strength" id="employee_strength" class="form-control">
                        <option value="">Select</option>
                        <option value="1-10">1-10</option>
                        <option value="10-50">10-50</option>
                        <option value="50-100">50-100</option>
                        <option value="above than 100">Above than 100</option>
                         
                    </select>
                    
                </div>
            </div>
        </div>
      
        <div class="row">
           <div class="col-md-12">
            <div class="form-actions floatRight">
                <button type="submit" id="submitStep2" class="btn regularButton btn-sm">Submit</button>
                <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-sm">Cancel</button></a>
            </div>
          </div>
        </div>
    </form>
    </div>
    <div id="step3">
      <form id="step3Form" method="post" style="display: none;" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" itemscope itemtype="http://schema.org/Organization">
        
     
          <?php
 
      if(!empty($editstatus))
    {
      ?>
      <input type="hidden" name="editstatus" value=<?= $editstatus; ?>>
      <?php
    }
  
        if(!empty($status))
        {
          ?>
       <input type="hidden" name="status" value="<?= $status; ?>">
       <?php
   }
       ?>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Category</label>
                <div class="col-md-9">
                    <select name="category" id="category" class="form-control" >
                        <option value="">Select</option>
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
        <?php
        if(!empty($editstatus))
        {
          foreach ($data as $value) {
            
          
          ?>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Contact Number</label>
                <div class="col-md-9">
                    <input type="text" itemprop="Contact" id="contact" name="contact" value="<?= base64_decode(base64_decode($value['recruiter_contact'])); ?>" class="form-control input-lg"/>
                </div>
            </div>
        </div>
         <input type="hidden" name="email" value="<?= $email; ?>">
        
       
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Describe your company</label>
                <div class="col-md-9 sm_1">
                   
                   <textarea cols="77" rows="6" class="ed"  name="description" id="description" onkeyup="myFunction1()"><?= base64_decode(base64_decode($value['recruiter_description'])); ?></textarea><p id="descriptionresult" style="float:right;"><font color="red"><b>0</b></font></p>
                     <div class="col-md-12" id="empty1">
                        Please Write about your company or buisness.
                    </div>
                </div>
            </div>
        </div>
          <?php

        }
      }
        elseif (empty($editstatus)) {
         ?>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Contact Number</label>
                <div class="col-md-9">
                    <input type="text" itemprop="Contact" id="contact" name="contact" placeholder="Enter your contact number" class="form-control input-lg"/>
                </div>
            </div>
        </div>
         <input type="hidden" name="email" value="<?= $email; ?>">
        
       
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Describe your company</label>
                <div class="col-md-9 sm_1">
                   
                   <textarea cols="77" rows="6" class="ed"  name="description" id="description" onkeyup="myFunction1()"  placeholder="Tell us about your organization. When you started what is your vision and who you are remember it should be 300 characters."></textarea><p id="descriptionresult" style="float:right;"><font color="red"><b>0</b></font></p>
                     <div class="col-md-12" id="empty1">
                        Please Write about your company or buisness.
                    </div>
                </div>
            </div>
        </div>
         <?php
        }
        ?>
         
          


        <div class="row">
           <div class="col-md-12">
            <div class="form-actions floatRight">
                <button type="submit" id="submitStep3" class="btn regularButton btn-sm">Submit</button>
               <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-sm">Cancel</button></a>
            </div>
        </div>
      </div>
    </form>
    </div>
    <div id="step4">
       <form id="step4Form" method="post" style="display: none;" enctype="multipart/form-data" name="myForm" >
         
         <?php    
      if(!empty($editstatus))
    {
      foreach ($data as $value) {
        
      ?>
      <input type="hidden" name="editstatus" value=<?= $editstatus; ?>>


      <span itemscope itemtype="http://schema.org/Place" class="myFile">
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">State</label>
                <div class="col-md-9">
                  <?php
                    if(!empty($value['recruiter_state']))
                    {
                      ?>
              
                   <input type="text"  itemprop="state" name="state" value="<?= base64_decode(base64_decode($value['recruiter_state'])); ?>" class="form-control input-lg"/>
  <!--                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>-->
                    <?php
                  }
                  elseif (empty($value['recruiter_state'])) {
                    ?>
                  <input type="text" id="state" itemprop="state" name="state" placeholder="You State name?" class="form-control input-lg"/>
                    <!--<ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>-->
                 <?php }
                    ?>
                  </div>
            </div>
        </div>
         <?php

        if(!empty($status))
        {
          ?>
  <input type="hidden" name="status" value="<?= $status; ?>">
  <?php
}
?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">City</label>
                <div class="col-md-9">

                    <?php
                    if(!empty($value['recruiter_city']))
                    {
                    ?>
                     <input type="text" itemprop="city" name="city" value="<?= base64_decode(base64_decode($value['recruiter_city'])); ?>" class="form-control input-lg" >
                   <?php
                 }
                 elseif (empty($value['recruiter_city'])) {
                  ?>
                     <input type="text" id="city" itemprop="city" name="city" placeholder="Your City" class="form-control input-lg" ><!--
                     <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>-->
                  <?php
                 }
                   ?>
                     
                </div>
            </div>
        </div>
       
        <input type="hidden" name="email" value="<?= $email; ?>">

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Full Address</label>
                <div class="col-md-9 sm_1">
                  <?php
                  if(!empty($value['recruiter_address']))
                  {


                  ?>
                   <textarea cols="77" rows="6" itemprop="address" name="address" id="address" onkeyup="myFunction()"   placeholder="The address of your organization"><?= base64_decode(base64_decode($value['recruiter_address']))?></textarea><p id="addressresult" style="float:right;"><font color="red"><b>0</b></font></p>
                    <div class="col-md-12" id="empty">
                        Please fill Your full address.
                    </div>

                    <?php
                    }
                    elseif (empty($value['recruiter_address'])) {
                ?>
                   <textarea cols="77" rows="6" itemprop="address" name="address" id="address" onkeyup="myFunction()"   placeholder="The address of your organization"></textarea><p id="addressresult" style="float:right;"><font color="red"><b>0</b></font></p>
                    <div class="col-md-12" id="empty">
                        Please fill Your full address.
                    </div>
                <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        </span>
      <?php
    }
  }
    else
    {
    ?>
 <span itemscope itemtype="http://schema.org/Place" class="myFile">
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">State</label>
                <div class="col-md-9">
                   <input type="text" id="state" itemprop="state" name="state" placeholder="You State name?" class="form-control input-lg"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>
                  </div>
            </div>
        </div>
         <?php

        if(!empty($status))
        {
          ?>
  <input type="hidden" name="status" value="<?= $status; ?>">
  <?php
}
?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">City</label>
                <div class="col-md-9">


                     <input type="text" id="getcity" itemprop="city" autocomplete="off" name="city" placeholder="Your City" class="form-control input-lg" >
                     <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>
                     
                </div>
            </div>
        </div>
       
        <input type="hidden" name="email" value="<?= $email; ?>">

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Full Address</label>
                <div class="col-md-9 sm_1">
                   <textarea cols="77" rows="6" itemprop="address" name="address" id="address" onkeyup="myFunction()"   placeholder="The address of your organization"></textarea><p id="addressresult" style="float:right;"><font color="red"><b>0</b></font></p>
                    <div class="col-md-12" id="empty">
                        Please fill Your full address.
                    </div>
                </div>
            </div>
        </div>
        
     
</span>
<?php
}
?>

        <div class="row">
          <div class="col-md-12">
            <div class="form-actions floatRight">
                <button type="submit" id="submitStep4" class="btn regularCancel btn-sm">Submit</button>
               <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-sm">Cancel</button></a>
            </div>
          </div>
        </div>
    </form>
    </div>
<div class="row">
  
    <div class="col-md-12" id="Loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div>
    
     <div class="col-md-offset-3 col-md-8 alert alert-danger" id="requiredFields" style="display: none;">All fields are required.</div></div>

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

  //show forms according to stepvalue
$(document).ready(function() {
 //alert($("#stepValue").val());
var value = $("#stepValue").val();
 if(value==2)
 {
  $("#step2Form").show(300);
 }
 else if(value==3)
 {
  $("#step3Form").show(300);
 }
 else if(value==4)
 {
  $("#step4Form").show(300);
 }

   $('#submitStep2').click(function() {

    $("#requiredFields").hide(200);
     $("#step2Form").hide(100);
    $("#Loading").show(100);
    
   });

   $('#submitStep3').click(function() {
    
    $("#requiredFields").hide(200);
     $("#step3Form").hide(100);
    $("#Loading").show(100);

   });

   $('#submitStep4').click(function() {
   
   $("#requiredFields").hide(200);
     $("#step4Form").hide(100);
    $("#Loading").show(100);

   });
  
});


//submit form 2
        
      $('#step2Form').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    var established = $("#established").val();
    var employee_strength = $("#employee_strength").val();

if(established == '' || employee_strength == '')
{
    
     $("#Loading").hide(100);
     $("#step2Form").show(100);
     $("#requiredFields").show(200);

}
else
{
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/recruiterreg2'); ?>",
        data: $('#step2Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
               

        }
        else if(response==1)
        {

        
                $("#Loading").hide(400);
               $("#step2").hide(400);
              $("#step3Form").show(400);
             
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>recruiter/editprofile";
        }
        
        }
    
        
   });
}
});


//submit form 3
        
      $('#step3Form').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    var category = $("#category").val();
    var contact = $("#contact").val();
     var description = $("#description").val();

if(category == '' || contact == '' || description == '')
{
  
     $("#Loading").hide(100);
     $("#step3Form").show(100);
     $("#requiredFields").show(200);

}
else
{
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/recruiterreg3'); ?>",
        data: $('#step3Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
               

        }
        else if(response==1)
        {

        
                $("#Loading").hide(400);
               $("#step3").hide(400);
              $("#step4Form").show(400);
             
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>recruiter/editprofile";
        }
        
        }
    
        
   });
}
});


//submit form 4
        
      $('#step4Form').submit(function(e) {

    var form = $(this);

    e.preventDefault();


    var state = $("#state").val();
    var city = $("#city").val();
     var address = $("#address").val();

if(state == '' || city == '' || address == '')
{
  
     $("#Loading").hide(100);
     $("#step4Form").show(100);
     $("#requiredFields").show(200);

}
else
{
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/recruiterreg4'); ?>",
        data: $('#step4Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
               

        }
        else if(response==1)
        {

        
                $("#Loading").hide(400);
               $("#step4").hide(400);
               window.location.href = "<?= base_url(); ?>recruiter/dashboard";
             
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>recruiter/editprofile";
        }
        
        }
    
        
   });
}
});
</script>
 <script>
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
     
      
    </script>

  
    <script>
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

</script>
<!--count paragraph characters-->
<script>
function myFunction() 
  {

        var x = document.getElementById("address").value;
        document.getElementById("addressresult").innerHTML =x.length;

  }
</script>

<!--count description characters-->
<script>
function myFunction1() 
{

    var x = document.getElementById("description").value;
    document.getElementById("descriptionresult").innerHTML =x.length;

}
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
