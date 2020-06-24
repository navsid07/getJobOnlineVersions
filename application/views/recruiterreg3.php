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
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Onlinejob portal for job providers and job seekers." />
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- script for textarea editors-->
<script src="<?= base_url(); ?>js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<!-- end code for textarea editor-->

<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

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

#category
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
            if(empty($recruiterId) && empty($recruiterSession))
            {
            ?>
	        <?php
                include('GetJobHeaderLi.php');
            ?>
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
       }
       elseif(!empty($recruiterSession) || !empty($recruiterId))
       {

        include('RecruiterHeaderLi.php');
        ?>
        
        <?php
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
		    <h1>Start employee search</h1>
            <p>
             <form action="<?= base_url(); ?>RecruiterSearch" method="post">
             <select class="textt" name="category">
                    <option value="">select Category</option>
                    <?php
                        if($category==null)
                        {
                            ?>
                            <option value=""><a href="#">Categories Coming Soon</a></option>
                    <?php   
                        }
                        else
                        {
                            foreach ($category as $value) {
                            
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
 <h2>Add your detail</h2>
        <?php
      }
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

        <form action="<?= base_url(); ?>RecruiterRegistrationQueryStep3" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" itemscope itemtype="http://schema.org/Organization">
        
     
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
                    <select name="category" id="category" class="form-control" required="">
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
                    <input type="text" itemprop="Contact" name="contact" value="<?= base64_decode(base64_decode($value['recruiter_contact'])); ?>" class="form-control input-lg"/>
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
                    <input type="text" itemprop="Contact" name="contact" required="" placeholder="Enter your contact number" class="form-control input-lg"/>
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
                <button type="submit" id="submit" class="btn regularButton btn-sm">Submit</button>
               <a href="<?= base_url(); ?>"> <button type="button" class="btn regularCancel btn-sm">Cancel</button></a>
            </div>
        </div>
      </div>
    </form>
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
