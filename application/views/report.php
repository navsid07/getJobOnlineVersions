<!DOCTYPE HTML>
<html  lang="en">
	<head><?php
include 'fav.php';

$employeId=$this->session->userdata('employe_id');
$employeeSession=get_cookie('sessionCookieEmployee');
$recruiterSession=get_cookie('sessionCookieRecruiter');
$recruiterId=$this->session->userdata('recruiter_id');

?><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
				
				<meta property="og:title" content="Find a job and get recruited online | Get Job Online">

        <meta name="description" content="job oppurtunities in IT, Typing jobs, jobs in admin support. proper jobs in india to work in. register for free to apply jobs in your city." />

<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
            <link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

							<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
							<script src="<?= base_url(); ?>js/jquery.min.js"></script>
								<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
									
										<!-- Custom Theme files -->
											<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
												<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
													<!----font-Awesome---->
														<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
															<!----font-Awesome---->
																
																<style>
                                  body
                                  {
                                    background:#f5f5f0;
                                  }
																	input[type="text"]
																	{
																		margin-bottom:4%;
																	}
																	label
																	{
																		font-size: 16px;
																		font-weight: bold;
																	}
																	form
																	{
																		margin-top:5%;
																	}
																	button
																	{
																		background-color: white;
																		color:#2185c5;
																		padding:10px 15px;
																		border:1px solid #2185c5;
																		margin-top: 5%;
																	}
																	button:hover
																	{
																		background-color: #f15f43;
																		color:white;
																		border:1px solid #f15f43;
																	}
																		.navbarr{min-height:100px;
																			
																	margin-bottom:0;}
															
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
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

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
            if(empty($employeId) && empty($recruiterId) && empty($employeeSession) && empty($recruiterSession))
{

                include('GetJobHeaderLi.php');
           
   
             
     }
            elseif(!empty($recruiterId) || !empty($recruiterSession))
            {
            
            include('RecruiterHeaderLi.php');
       }
       
       elseif(!empty($employeId) || !empty($employeeSession))
       {
       
      include('EmployeeHeaderLi.php');
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
	<div class="container">
    <ul id="breadcrumbs" style="margin-top: 6%;"><li><a href="<?= base_url(); ?>">Home </a></li><li>Submit Report</li></ul>
    <div class="col-md-offset-1 col-md-10" style="margin-bottom: 5%;">
    <div class="single background">  
				<div class="form-container">
        <h2 style="color:#d3404e;">Contact to report an issue</h2>
        <p>
        	<p style=" color:#666666; font-size:1.3em;" class="padding">If you are facing any issue at any point o the website please don't hesitate leave is a message and we will get back to you as soon as possible. Grab a screen shot and attach it with repoct to help us understand better. </p>
        </p>
					<form id="reportForm" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" itemscope itemtype="http://schema.org/Person">         
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Name<font color="red">*</font></label>
                <div class="col-md-9">
                    <input type="text" name="name" itemprop="name" placeholder="Enter your name here" required="" class="form-control"/>

                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Email<font color="red">*</font></label>
                <div class="col-md-9">
                    <input type="text" name="email" itemprop="email" placeholder="abc@example.com" required="" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Contact Number<font color="red">*</font></label>
                <div class="col-md-9">
                    <input type="text" name="contact" required="" placeholder="Your contact number" class="form-control"/>
                </div>
            </div>
        </div>


        

      
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Issue Subject<font color="red">*</red></label>
                <div class="col-md-9">
                    <input type="text" name="issue" required=""  placeholder="Enter your issue subject" class="form-control"/>
                </div>
            </div>
        </div>

      
       
        
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="subjects">Details<font color="red">*</font></label>
                <div class="col-md-9 sm_1">
                   <script>edToolbar('mytxtarea'); </script>
                   <textarea cols="77" rows="6" class="ed"  name="detail" id="description" onkeyup="myFunction1()"  placeholder="Tell us about issue you are facing it should be minimum 150 characters."></textarea><p id="descriptionresult" style="float:right;"><font color="red"><b>0</b></font></p>
                     
                </div>
            </div>
        </div>
          


<div class="row">
            <div class="form-group col-md-12">
            	     <label class="col-md-3 control-lable" for="subjects">Add Screenshot(optional)</label>
            	       <div class="col-md-9 sm_1">
        <label class="myFile">
  <img src="<?= base_url(); ?>images/addImage.png"  alt="image"/>
  <input type="file"  name="userfile" id="file" onchange="showname()"/>
  <input type="text" id="imgresult"/>
   
</label>


</div>
 </div>
            </div>
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" id="submit" value="Submit Report" class="btn-sm">
               
            </div>
            <div class="col-md-12" id="loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif" width="10%"></div>
             <div class="col-md-offset-2 col-md-8 alert alert-success" id="successMsg" style="text-align:center; display: none; font-weight: bold; margin-top: 2%;">Your report successfully submitted.</div>
        </div>
    </form>
				</div>
			</div>
		</div>
	</div>

				<?php include 'footer.php'; ?>
			
		</body>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
<script>
	
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
     
      
   
</script>

<script>
   
$(document).ready(function () {

    $("#submit").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#reportForm')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
        //$("#addMore").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('welcome/report_form'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              
              $('#reportForm').trigger("reset");
                $('#submit').show(300);
                $('#loading').hide(300);
                $('#successMsg').show(300);
            /*
              $("#addCertificationLoading").hide(400);
              $("#addCertificationSuccessmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/dashboard";*/
             

            },
            error: function (e) {

              alert('failure');
              /*
              $("#addCertificationLoading").hide(400);
              $('#addCertificationFailuremsg').show(600);
              $('#addCertification').show(600);
               $('#buttons').show(600);
              $('#addCertification').trigger("reset");*/
     }
        });

    });

});

$(document).ready(function () {

    $("#submit").click(function () {
      $("#submit").hide(300);
      $("#loading").show(300);
      
    });


  });

</script>
</html>