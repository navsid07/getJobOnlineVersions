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
?><title>Post a job :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="bathinda job consultants, help me get a job, job recruitment, job search, unemployement, seek jobsunemployement in punjab, jobs, part time jobs, job opportunities, online jobs" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. online job portalfor job providers and job seekers." />

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<!-- script for textarea editors--><!--
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>-->
<!-- end code for textarea editor-->


<!--textarea editor-->
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=jafjscapcv7dp9i4pb0vkt02dgvu25b6jukx3cwydvylm0cd"></script>
  <script>tinymce.init({selector:'#job_description'});</script>

<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'/>
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"/> 
<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />


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
<style>
  
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


#category,#payscale,#country,#minimumqualification,#experience
     {
 -webkit-appearance:none;  /* for chrome & safari */
 -moz-appearance: none; /* for mozilla */
  background-image:url("/../icons/selectArrow.png"); 
  /* To hide the orginal dropdown arrow in IE */
  background-repeat: no-repeat; 
  background-position:97% center; 
     }

</style>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<script type="text/javascript" src="<?= base_url(); ?>js/editor/ed.js"></script>


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

</head>
<body>
<?php
      include('RecruiterHeader.php');
?>
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
<div class="container ">
  <ul id="breadcrumbs"  itemscope itemtype="http://schema.org/BreadcrumbList"><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url(); ?>"><span itemprop="name">Home</span></a> </li><li itemscope itemtype="http://schema.org/BreadcrumbList"><a href="<?= base_url();?>"><span itemprop="name">Recruiter</span></a></li><li itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="name">Submitjob</span></li></ul>
    <div class="single "> 
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
    
	   <div class="form-container">
        <div class=" col-md-8 background padding" style="margin-bottom:4%;">
        <h2>Submit Job</h2>
        <?php 
					if($submit= $this->session->flashdata('submit')):

			    $submit_class=$this->session->flashdata('submit_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $submit_class; ?>">
			  
			  <?php echo $submit; ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>

			<?php 
					if($submit_failed= $this->session->flashdata('submit_failed')):

			    $submit_failed_class=$this->session->flashdata('submit_failed_class');
			    ?>
			   <div class="row">
			      <div class="col-lg-12">
			          <div class="alert alert-dismissible <?php echo $submit_failed_class; ?>">
			  
			  <?php echo $submit_failed; ?>
			</div>
			      </div>
			  </div>
			  <?php 
			endif;
			?>
		
     <div class="col-md-12" id="submitJobFailuremsg" style="text-align:center; display: none; color: red; font-weight: bold">Something Went Wrong.</div>
        <div class="col-md-12 alert alert-success" id="submitJobSuccessmsg" style="text-align:center; display: none; color: green; font-weight: bold">Job Submitted.</div>
         <div class="col-md-12" id="submitJobLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
			

        <form id="submitJobForm" method="post" itemscope itemtype="JobPosting">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Job Title<span class="required">*</span></label>
                <div class="col-md-9" itemprop="title">
                    <input type="text" name="job_title" id="title" placeholder="What are you looking for?" class="form-control"/>
                </div>
            </div>
         </div>
        <div class="row">
            <div class="form-group col-md-12" itemprop="skills">
                <label class="col-md-3 control-lable" for="country">Experience Required<span class="required">*</span></label>
                <div class="col-md-9">
                    <select name="experience_required" id="experience" class="form-control">
                        <option value="Fresher">Fresher</option>
                         <option value="0-1">0-1 Year</option>
                          <option value="1-2">1-2 Years</option>
                           <option value="1-2">2-4 Years</option>
                           <option value="1-2">4-5 Years</option>
                           <option value="1-2">5 Years and more</option>

                    </select>
                </div>
            </div>
        </div>

               <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Category<span class="required">*</span></label>
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
                        		 	   
                        		 	        <option value="Funeral Director">Funeral Director</option>
                        		 	       	
                        		 	   			 <option value="Personal Fitness Trainer">Personal Fitness Trainer</option>
                        		 	   			 	
                        		 	   			  <option value="Ski instructor">Ski instructor</option>
                        		 	       	

                        		 	   			 	 <optgroup label="Teaching">
                        		 	     		  	 <option value="Career Counselor">Career Counselor</option>
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
                <label class="col-md-3 control-lable" for="country">Country<span class="required">*</span></label>
                <div class="col-md-9">
                    <select name="country" id="country" class="form-control" 
                    >
                                      <option value="">Select</option>
                                      <option value="India">India</option>
                                        <option value="Canada">Canada</option>
                                      
                     </select>
                    
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Location of the job<span class="required">*</span></label>
                <div class="col-md-9" itemprop="jobLocation">
                    <input type="text" name="preffered_location" class="form-control" id="joblocation"/>
                </div>
            </div>
        </div>

<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Minimum Qualification<span class="required">*</span></label>
                <div class="col-md-9" itemprop="qualifications">
                    <select name="lowest_education" class="form-control" id="minimumqualification">
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
                <label class="col-md-3 control-lable" for="country">pay Scale<span class="required">*</span></label>
                <div class="col-md-9" itemprop="baseSalary">
                    <select name="payscale" class="form-control" id="payscale">
                         <option value="0-1k">0-1k</option>
                          <option value="1k-5k">1k-5k</option>
                        <option value="5k-10k">5k-10k</option>
                        <option value="10k-25k">10k-25k</option>
                        <option value="25k-50k">25k-50k</option>
                        <option value="50k-1lac.">50k-1lac.</option>
                        <option value="Above than 1lac.">Above than 1lac.</option>
                         <option value="Do not wish to mention">Do not wish to mention</option>
                    </select>
                    
                </div>
            </div>
        </div>
<!--<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Company Name</label>
                <div class="col-md-9">
                    <input type="text" name="company_name" class="form-control input-sm" required=""/>
                </div>
            </div>
        </div>-->
       

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Job Description<span class="required">*</span></label>
                <div class="col-md-9" itemprop="description">
          
                   <!--<textarea style="width:100%;" class="ed" id="job_description"placeholder="Describe the duty & responsibilities of this job. Keep it detail for the candidate." rows="6" name="job_description"></textarea><p  style="float:right;">-->
                    <textarea style="width:100%;" class="ed" id="description"placeholder="Describe the duty & responsibilities of this job. Keep it detail for the candidate." rows="6" name="job_description"></textarea><p  style="float:right;">
                    <span  id="job_descriptionresult"><font color="red" ><b>0</b></font></span>/1500</p>
                </div>
                <div id='err_msg' style='display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                <div id='msg'> </div></label>  
                </div></div></div>
            </div>
        </div>

         <div class="row" id="buttons">
            <div class="form-actions floatRight">
              <button type="button" class="btn regularButton btn-sm" id="addMore">+ Add New Job</button>
                <button type="submit" id="submit" class="btn regularButton btn-sm">Submit Job</button>
                <a href="<?= base_url(); ?>"><button type="button" class="btn regularCancel btn-sm"> X Cancel</button></a>
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


<div class="container">

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
<div class="row background refer_earn" style="margin-top:2%; margin-bottom:2%;">
     <div class="col_3 message">
        <h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
     </div>
      <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>

    </div>
</div>
<?php
include 'footer.php';
?>
</body>
<script>


  $(function(){ // this will be called when the DOM is ready
  $('#job_description').keyup(function() {
     var x = document.getElementById("job_description").value;
    document.getElementById("job_descriptionresult").innerHTML =x.length;
    if(x.length>1500)
    {
        alert('You have exceeded words limit.');
    }
    //alert('Handler for .keyup() called.');
  });
});
function myFunction33() 
{
alert('hello');
   

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


         //shortlist  employee by a recruiter
      $('#submitJobForm').submit(function(e) {

    var form = $(this);

         var title = $("#title").val();  
            var experience = $("#experience").val();  
             var category = $("#category").val();  
            var country = $("#country").val();  
             var jobLocation = $("#joblocation").val();  
            var minimumqualification = $("#minimumqualification").val();  
             var payscale = $("#payscale").val();
            // Returns error message when submitted without req fields.  
            if(title==''|| experience=='' || category=='' || country=='' || jobLocation=='' || minimumqualification=='' || payscale=='')  
            {  
               return false;
            }
            else
            {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/jobsubmit'); ?>",
        data: $('#submitJobForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
  
    
            $("#submitJobLoading").hide(400);
              $('#submitJobFailuremsg').show(600);
              $('#submitJobForm').show(600);
               $('#buttons').show(600);
              $('#submitJobForm').trigger("reset");



          
        }
        else if(response==1)
        {
 
      
              $("#submitJobLoading").hide(400);
              $("#submitJobSuccessmsg").show(200);
            window.location.href = "<?= base_url(); ?>recruiter/myjobs";
          
           
        }
        
        }
    
        
   });
}

});


        
$(document).ready(function () {

    $("#addMore").click(function (e) {
        var title = $("#title").val();  
            var experience = $("#experience").val();  
             var category = $("#category").val();  
            var country = $("#country").val();  
             var jobLocation = $("#joblocation").val();  
            var minimumqualification = $("#minimumqualification").val();  
             var payscale = $("#payscale").val();
            // Returns error message when submitted without req fields.  
            if(title==''|| experience=='' || category=='' || country=='' || jobLocation=='' || minimumqualification=='' || payscale=='')  
            {  
               return false;
            }
            else
            {

        //stop submit the form, we will post it manually.
        e.preventDefault();

       
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('recruiter/jobsubmit'); ?>",
            data: $('#submitJobForm').serialize(),
            success: function (data) {
          
              $("#submitJobLoading").hide(400);
              $("#submitJobSuccessmsg").show(200);
               $('#submitJobForm').show(600);
               $('#buttons').show(600);
              $('#submitJobForm').trigger("reset");
               $('#job_description').val('');
            },
            error: function (data) {
            
              $("#submitJobLoading").hide(400);
              $('#submitJobFailuremsg').show(600);
              $('#submitJobForm').show(600);
               $('#buttons').show(600);
              $('#submitJobForm').trigger("reset");
              $('#job_description').val('');
     }
        });
    }

    });

});


 </script>

 <script>
 
$(document).ready(function () {

    $("#addMore").click(function () {
         var title = $("#title").val();  
            var experience = $("#experience").val();  
             var category = $("#category").val();  
            var country = $("#country").val();  
             var jobLocation = $("#joblocation").val();  
            var minimumqualification = $("#minimumqualification").val();  
             var payscale = $("#payscale").val();
            // Returns error message when submitted without req fields.  
            if(title==''|| experience=='' || category=='' || country=='' || jobLocation=='' || minimumqualification=='' || payscale=='')  
            {  
            jQuery("div#err_msg").show();  
            jQuery("div#msg").html("All fields are required*");  
            }
            else
            {
      $("#submitJobSuccessmsg").hide(300);
      $("#submitJobForm").hide(300);
      $("#buttons").hide(300);
      $("#submitJobLoading").show(300);
  }
    });


  });

$(document).ready(function () {

    $("#submit").click(function () {
        var title = $("#title").val();  
            var experience = $("#experience").val();  
             var category = $("#category").val();  
            var country = $("#country").val();  
             var jobLocation = $("#joblocation").val();  
            var minimumqualification = $("#minimumqualification").val();  
             var payscale = $("#payscale").val();
            // Returns error message when submitted without req fields.  
            if(title==''|| experience=='' || category=='' || country=='' || jobLocation=='' || minimumqualification=='' || payscale=='')  
            {  
            jQuery("div#err_msg").show();  
            jQuery("div#msg").html("All fields are required*");  
            }
            else
            {
      $("#submitJobSuccessmsg").hide(300);
      $("#submitJobForm").hide(300);
      $("#buttons").hide(300);
      $("#submitJobLoading").show(300);
  }
    });


  });


 </script>
</html>	