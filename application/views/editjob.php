<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html  lang="en">
<head><?php
    //include 'googleadvertisement.php';
include 'fav.php';
?><title>Online job portal for job seekers and job providers | Employee Profile update :: Get-job.online </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="buisness ideas, job opportunities, career, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />
<meta name="description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.
" />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

<!-- script for textarea editors-->
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<!-- end code for textarea editor-->

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

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel="stylesheet"> 
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
  
</style>
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
<ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="name">Edit Job</span></li></ul>
<div class="container">
    <div class="single ">  
	   <div class="form-container background padding">
        <h2>Edit Job</h2>
        <?php
        	foreach ($job as $value) {
        		
        ?>
          <form action="<?= base_url(); ?>RecruiterUpdateJob" method="post">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Job Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" value="<?= $value['submitjob_job_title']; ?>" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         
       <input type="hidden" name="jid" value="<?= $value['submitjob_id']; ?>"/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Experience Required</label>
                <div class="col-md-9">
                    <select name="experience" class="form-control input-sm" required="">
                        <option value="Fresher">Fresher</option>
                         <option value="0-1">0-1 Years</option>
                          <option value="1-2">1-2 Years</option>
                           <option value="1-2">2-4 Years</option>
                           <option value="1-2">4-5 Years</option>
                           <option value="1-2">5 Yrs and more</option>

                    </select>
                </div>
            </div>
        </div>

               <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Category</label>
                <div class="col-md-9">
                    <select name="category" id="category" class="form-control input-sm" required="">
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
                                 
                                      <option value="Funeral Director">Funeral Director</option>
                                      
                                       <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                                        
                                        <option value="Ski instructor">Ski instructor</option>
                                      

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
                                       <option value="Programmer">Programmer</option>
                                       <option value="Software Developer">Software Developer</option>

                                                 <optgroup label="Hospitality">
                                                     <option value="Concierge">Concierge</option>
                                        <option value="Event Planner">Event Planner</option>
                                          <option value="Executive Chef">Executive Chef</option>
                                            <option value="Hotel General Manager">Hotel General Manager</option>
                                             <option value="Housekeeper">Housekeeper</option>
                                                 <option value="Porter">Porter</option>                   
                                        <option value="Waiter/Waitress">Waiter/Waitress</option>
                         </select> 
                    
                </div>
            </div>
        </div>

                    <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Country</label>
                <div class="col-md-9">
                    <select name="country" id="category" class="form-control input-sm" required="">
                        <option value="">Select</option>
                                 
                                      <option value="india">India</option>
                                        <option value="canada">Canada</option>
    
                                                                  
                     </select>
                    
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Preferred Location</label>
                <div class="col-md-9">
                    <input type="text" name="location" class="form-control input-sm" value="<?= $value['submitjob_preffered_location']; ?>"/>
                </div>
            </div>
        </div>

<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Minimum Qualification</label>
                <div class="col-md-9">
                    <select name="qualification" class="form-control input-sm" required="">
                        <option value="Matriculation">Matriculation</option>
                        <option value="Senior Secondary/Diploma">Senior Secondary/Diploma</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Ph.d">Ph.D</option>
                         
                    </select>
                    
                </div>
            </div>
        </div>

       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">pay Scale</label>
                <div class="col-md-9">
                    <select name="payscale" class="form-control input-sm" required="">
                         <option value="0-1k">0-1k</option>
                          <option value="1k-5k">1-5k</option>
                        <option value="5k-10k">5-10k</option>
                        <option value="10k-25k">10-25k</option>
                        <option value="25k-50k">25-50k</option>
                        <option value="50k-1lac.">50k-1lac.</option>
                        <option value="Above than 1lac.">Above than 1lac.</option>
                         <option value="Do not wish to mention">Do not wish to Mention</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Job Description</label>
                <div class="col-md-9">
                   <textarea style="width:100%;" rows="6" name="description"><?= base64_decode(base64_decode($value['submitjob_job_description'])); ?></textarea>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="postjob" class="btn btn-primary btn-sm">Update Job</button>
               <a href="<?= base_url(); ?>"> <button type="button"  class="btn btn-danger btn-sm">Cancel</button></a>
              
            </div>
            
        </div>
    </form>
    <?php
}
    ?>
    </div>
 </div>

</div>

<div class="container">
<div class="row " style="margin-top:2%;">
   <div class="col_3 message background">
    <h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
 <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
   </div>
   
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
<script src="<?= base_url(); ?>js/analytics.js"></script>

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
</html>	
