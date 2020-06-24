<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<input type="hidden" id="stepValue" value="<?= $step ?>">

<!DOCTYPE HTML>
<html>
<head><?php include 'fav.php'; ?><title>Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online. Online job portal for job providers and job seekers." />
<!-- autocomplete -->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#degreeName").autocomplete({
                source : function(request, response) {
                    $.ajax({
                        //type: "GET",
                        url : "https://get-job.online/Employee/autoCompleteDegree",
                        dataType : "json",
                        cache: false,
                        data : {
                            q : request.term
                        },
                        success : function(data) {
                            //alert(data);
                            //console.log(data);
                            response(data);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus+" "+errorThrown);
                        }
                    });
                },
                minLength : 1
            });
        });
    </script>
<!-- autocomplete end-->
<!--textarea editor-->
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=jafjscapcv7dp9i4pb0vkt02dgvu25b6jukx3cwydvylm0cd"></script>
  <script>tinymce.init({selector:'#mytxtarea'});</script>
  
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

<link rel="canonical" href="<?= base_url(uri_string()); ?>">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>-->
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
<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
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


.verifybtn:hover {
  background: #f15f43;
 
  text-decoration: none;
}

#DropdownState {
    
    padding: 15px;
    width:20%;
    float:left;
    height: 200px;
    overflow: scroll;

}

#Dropdowngetcity 
{ 
    padding: 15px;
    width:20%;
    float:left;
    height: 200px;
    overflow: scroll;
}

#Dropdownpincode 
{ 
    padding: 15px;
    width:20%;
    float:left;
    height: 200px;
    overflow: scroll;
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

label
{
  font-size: 16px;
  
}
select:after
{
  width:20px;
}

#category,#experience_in,#select
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

<body class="body">
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
<?php
$employeeSession=get_cookie('sessionCookieEmployee');
    $uuid=$this->session->userdata('employe_id');
    if(!empty($uuid) || !empty($employeeSession))
    {
?>
          <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
          <ul class="nav navbar-nav">
           <?php
                include('EmployeeHeaderLi.php');
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
    <div id="search_wrapper1">
       <div id="search_form" class="clearfix">
        <h1>Start your job search</h1>
        <p>
        <form action="EmployeeSearch" method="post">
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
       <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
        </form>
      </p>
           </div>
    </div>
   </div> 
</div>  



<div class="container">
  <ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Employee Registration</li></ul>
   <?php 

          if($emailagain1= $this->session->flashdata('emailagain1')):



          $emailagain1_class=$this->session->flashdata('emailagain1_class');

          ?>

         <div class="row">

            <div class="col-lg-12">

                <div class="alert alert-dismissible <?php echo $emailagain1_class; ?>">

        

        <?php echo $emailagain1 ?>

      </div>

            </div>

        </div>

        <?php 

      endif;

      ?>
  
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
 <div class="col-md-8">
     <div class="single">  
     <div class="form-container background padding">
       <div class="col-md-12 alert alert-success" id="addmoreSuccessmsg" style="text-align:center; display: none; color: green; font-weight: bold"> Previous detail submitted.</div>

        <div class="col-md-12 alert alert-success" id="lastSuccessmsg" style="text-align:center; display: none; color: green; font-weight: bold"> Congratulations! your registration process Completed.</div>

        <div class="col-md-12 alert alert-success" id="Successmsg" style="text-align:center; display: none; color: green; font-weight: bold">Updation successfully submitted.</div>
     
       <div id="header">
       <?php
       if(!empty($header))
       {
        ?>

        <h2 id="heading"><?= $header; ?></h2>
        <?php
       }
      elseif(!empty($editstatus))
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
</div>

       <!--action="<?= base_url(); ?>EmployeeRegisterQueryStep2" -->
     <div id="step2">
        <form  id="step2Form" style="display: none;" method="post">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>
         <?php
              if(!empty($editstatus))
      {
        foreach ($data as $key) {
        ?>
           <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Cityy</label>
                <div class="col-md-9">
                    <input type="text" name="city" value="<?= base64_decode(base64_decode($key['employee_city'])); ?>" class="form-control input-lg"/>
                   
                    <!--
                    <input type="text" id="getcity" autocomplete="off" name="city" value="<?= base64_decode(base64_decode($key['employee_city'])); ?>" class="form-control" >-->
                     <!--
                       <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>-->
                     
                   
                </div>
            </div>
         </div>
       
                  <input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                  
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">State</label>
                <div class="col-md-9">
                  <input type="text" id="state" name="state" value="<?= base64_decode(base64_decode($key['employee_state'])); ?>" class="form-control input-lg"/>
                <!--
                    <input type="text" id="state" name="state" value="<?= base64_decode(base64_decode($key['employee_state'])); ?>" class="form-control"/>
                    <ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>-->
                </div>
            </div>
        </div>
       
    <input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
                  

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Pincode</label>
                <div class="col-md-9">
                    <input type="text" id="pincode" name="pincode"value="<?= $key['employee_pincode']; ?>" class="form-control input-lg"/>
                    <!--<ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdownpincode"></ul>-->
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
                <label class="col-md-3 control-lable" for="firstName" >City</label>
                <div class="col-md-9">
                    <input type="text" name="city" placeholder="You city name?"  class="form-control input-lg"/>
                  
                   <!-- <input type="text" id="getcity" autocomplete="off" name="city" placeholder="Your City" class="form-control" >
                     
                       <ul class="dropdown-menu txtgetcity" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdowngetcity"></ul>-->
                     
                   
                </div>
            </div>
         </div>
       <?php
if(!empty($editstatus))
                  {
                  ?>
                  <input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                  <?php
                }
       ?>
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">State</label>
                <div class="col-md-9">
                    <input type="text" id="state" name="state" placeholder="You State name?" class="form-control input-lg"/>
                    <!--<ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownState"></ul>-->
                </div>
            </div>
        </div>
         <?php
         if(!empty($data))
         {
foreach ($data as $key) {
  ?>
    <input type="hidden" name="email" value="<?= $key['employee_email']; ?>"/>
                  
  <?php
}
}
          
                  ?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Pincode</label>
                <div class="col-md-9">
                    <input type="text" id="pincode" name="pincode" placeholder="You Pincode?" class="form-control input-lg"/>
                    <!--<ul class="dropdown-menu txtstate" style="margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="Dropdownpincode"></ul>-->
                </div>
            </div>
         </div>
         <?php
     }
     ?>
       
         
        <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="submitStep2" value="Done" class="btn regularButton btn-sm">Submit</button>

                <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
       <div class="alert alert-danger" id="step2Failure" style="display: none;"><strong>All fields are required.</strong></div>
</div>

<div id="step3">
  <!-- action="<?= base_url(); ?>EmployeeRegisterQueryStep3" -->
      <form id="step3Form" style="display: none;"  method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">
             
            </div>
            <?php
                  if(!empty($editstatus))
                  {
                  ?>
                  <input type="hidden" name="editstatus" value="<?= $editstatus; ?>">

                   <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Contact</label>
                <div class="col-md-9">
                  <?php
                  foreach ($data as $key) {
                    
                  
                  ?>
                 
               <!-- <input type="text" style="width: 80%;" name="contact" placeholder="You contact" value="<?= base64_decode(base64_decode($key['employee_phone']));?>" class="form-control input-lg" id="contact"/>-->
                   
                    <div class="alert alert-danger" id="limitedNumber" style="display:none;">
                      Please enter a valid phone number.
                    </div>
                    
          
                    
                    <?php
                    }
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
                </div>
            </div>
         </div>
                  <?php
                }
                else {
                  
                
                  ?>
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Contact</label>
                <div class="col-md-9">
                    <input type="text" name="contact" id="contact" placeholder="You contact" required="" class="form-control input-lg"/>
                     <br>
                    <div class="alert alert-danger" id="limitedNumber" style="display:none;">
                      Please enter a valid phone number.
                    </div>
                    
          <?php if(!empty($email))
            {
            ?>

              <input type="text" name="email" value="<?= $email;?>" class="form-control input-lg"/>

            <?php
          }
            ?>
                    
                    <?php
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          hello2
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="text" value="<?= $emaiil; ?>" name="email" class="form-control input-lg">
         <?php
     }
         ?>
                </div>
            </div>
         </div>
         <?php
       }
         ?>
          
         
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName" >Date of birth</label>
                <div class="col-md-9">
                    <input type="date" name="dob" id="dob" required="" class="form-control input-lg"/>
                    
                </div>
            </div>
         </div>
       
       
         
        
       
         
        <div class="row">
            <div class="form-actions floatRight">
                <button id="submitStep3" type="submit"  class="btn regularButton btn-sm">Submit</button>

                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>

       <div class="alert alert-danger" id="step3Failure" style="display: none;"><strong>All fields are required.</strong></div>
  </div>

<div id="step4">
     <form  id="step4Form" style="display: none;" method="post" enctype="multipart/form-data">
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
           <?php if(!empty($email))
            {
            ?>

              <input type="hidden" name="email" value="<?= $email;?>"/>

            <?php
          }
            ?>
            <div class="row">
            <div class="form-group col-md-12">
        
               <?php
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
 <div class="row">
            <div class="form-group col-md-12">
        <label class="col-md-3" for="passed">From:</label>
         <div class="col-md-9">
       <input type="text" name="admission" id="admission" placeholder="Admission year" 
       class="form-control input-lg " required="">
     </div> 

   </div></div>

   <div class="row">
            <div class="form-group col-md-12">
         <label class="col-md-3" for="passed"> Ongoing course:</label>
        
      
      <div class="col-md-9">
       <input type="checkbox" class="font-left" id="checkBox" title="Checkbox if currently persuing" name="checkBox" class="form-control" value="Ongoing">
     </div>

     
    </div></div>

    <div class="row">
            <div class="form-group col-md-12">
         <label class="col-md-3" for="passed">To:</label>
         <div class="col-md-9">
       <input type="text" name="passed" id="passed" placeholder="Passing year" 
       class="form-control input-lg" required="">
      </div>
    
    </div></div>



   

      <div class="row">
            <div class="form-group col-md-12">
         <label class="col-md-3" for="passed">Degree Name:</label>
         <div class="col-md-9">
      <input type="text" id="degreeName" name='degreeName'  placeholder="Degree name" class="form-control input-lg" required="">
      
     </div></div></div>

     <div class="row">
            <div class="form-group col-md-12">
         <label class="col-md-3" for="passed">Uni/College:</label>
         <div class="col-md-9">
      <input type="text" name="university" id="university" placeholder="Uni/College name" 
      class="form-control input-lg" required="">
   </div></div></div>

   <div class="row">
            <div class="form-group col-md-12">
         <label class="col-md-3"  for="passed">Percentage:</label>
         <div class="col-md-9">
      <input type="text" name="percentage" id="percentage" placeholder="Percentage" 
      class="form-control input-lg" required="">
    </div></div></div>
             
            </div>
         </div>
         
        <div class="row">
            <div class="form-actions floatRight">
              <button type="button" class="btn regularButton btn-sm" id="addMoreQualification">+ Add More</button>
               
                <button type="submit" id="submitStep4"  value="Done" class="btn regularButton btn-sm">Submit</button>


                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
    <div class="alert alert-danger" id="educationFailure" style="display: none;"><strong>All fields are required.</strong></div>
    </div>

    <div id="step5">
      <!--action="<?= base_url(); ?>EmployeeRegisterQueryStep5"-->
       <form id="step5Form" style="display: none;"  method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <div class="col-md-offset-2 col-md-8" style="margin-bottom:10px; text-align:center;">

            <?php
                  if(!empty($editstatus))
                  {
                  ?>
                  <input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                  <?php
                }
                  ?>
           <?php
           if(!empty($email))
           {
           ?>
             <input type="hidden" name="email" value="<?= $email;?>"/>
             <?php
           }
             ?>
            </div>
            <div class="row">
            <div class="form-group col-md-12" id="select-side">
                <label class="col-md-3 control-lable" for="country">Select category</label>
                <div class="col-md-9">
<?php
         if(!empty($status) && !empty($emaiil))
         {
            ?>
            <input type="hidden" value="<?= $status; ?>" name="status">
                <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
                    <select name="category" id="category" class="form-control input-lg" required="">
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
         <?php
         if(!empty($editstatus))
         {
          foreach ($data as $key) {

         ?>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Designation (optional)</label>
                <div class="col-md-9">
                  <?php

                  if(!empty($key['employee_designation']))
                  {
                    ?>
                    <input type="text" name="designation" class="form-control input-lg" value="<?= base64_decode(base64_decode($key['employee_designation'])); ?>" />
                    <?php
                  }
                  elseif(empty($key['employee_designation']))
                  {
                    ?>
                    <input type="text" name="designation" class="form-control input-lg" placeholder="Your designatyion here" />
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
                <label class="col-md-3 control-lable" for="email">Designation (optional)</label>
                <div class="col-md-9">
                 
                    <input type="text" name="designation" class="form-control input-lg" id="designation" placeholder="Your designatyion here" />
                    
                </div>
            </div>
        </div>
        <?php
      }
    
        ?>
       
        <div class="row">
            <div class="form-actions floatRight">
                <button type="submit" id="submitStep5" class="btn regularButton btn-sm">Submit</button>

                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
       <div class="alert alert-danger" id="step5Failure" style="display: none;"><strong>All fields are required.</strong></div>
    </div>

   <div id="step6">
       <form id="step6Form" style="display: none;" name="myForm" action="<?= base_url(); ?>EmployeeRegisterQueryStep6" method="post" enctype="multipart/form-data" >
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

                    <select name="fresher/experience" id="select" onchange="showw()" class="form-control input-lg" required="">
                        <option value="">Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="Experience">Experience</option>
                        
                    </select>
                    
                </div>
            </div>
        </div>

        <div id="showexperiences" style="display: none;">
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Previous Experience</label>
               
                <!--<div class="col-md-9">
                    <input type="text" name="experience" class="form-control input-sm" required="" placeholder="Fill your Experience here"/>
                </div>-->
                <div class="col-md-4">
                    <input type="text" name="experience" id="experience1" class="form-control input-lg" placeholder="Experience in Months"/>
                </div>

                 <div class="col-md-4">
                    <input type="text" name="company" id="company1" class="form-control input-lg" placeholder="Company Name"/>
                </div>
              </div>
              <div class="form-group col-md-12">
                  
                <div class="col-md-offset-3 col-md-9">
<?php
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
                    <select name="experience_in" id="experience_in" class="form-control input-lg">
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
                    <div class="form-actions floatRight">

                       <div class="form-actions floatRight">
              <button type="button" class="btn regularButton btn-sm" id="addMoreExperience">+ Add More</button>
                <button type="submit" id="submitStep6" class="btn regularButton btn-sm">Submit</button>

                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
       
    </form>

       <div class="alert alert-danger" id="step6Failure" style="display: none;"><strong>All fields are required.</strong></div>
                 
    </div>
</div>
    <div id="step7">
       <form id="step7Form" style="display: none;" action="<?= base_url(); ?>EmployeeRegisterQueryStep7" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
         
           

           <?php
                  if(!empty($editstatus))
                  {
                  ?>
                  <input type="hidden" name="editstatus" value="<?= $editstatus; ?>">
                  <?php
                }
                  ?>
                  <?php
         if(!empty($status) && !empty($emaiil))
         {
          ?>
          <input type="hidden" value="<?= $status; ?>" name="status">
            <input type="hidden" value="<?= $emaiil; ?>" name="email">
         <?php
     }
         ?>
 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Cover Letter</label>
                <div class="col-md-9 sm_1">
               
    
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
  <img src="<?= base_url(); ?>images/uploaddocument.png"  alt="image" height="10%" width="10%" alt="Icon"/>
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
            
                <button type="submit" id="submitStep7" class="btn regularButton btn-sm">Submit</button>
               
                 <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
            </div>
        </div>
    </form>

       <div class="alert alert-danger" id="step7Failure" style="display: none;"><strong>All fields are required.</strong></div>
    </div>
    <div class="row">
     <div class="col-md-12" id="Loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div></div>
 </div>
</div>

 <div class="col-md-2">
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
<a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
   </div>
    
  </div>
</div>

<?php
include 'footer.php'; 
?>


</body>


        <!-- Latest compiled and minified JavaScript -->
    
        <script src="<?php echo base_url(); ?>assets/custom.js"></script>
        <!-- Latest compiled and minified CSS -->
       <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  
<!-- Global site tag (gtag.js)  Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>
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
  else if(value==5)
 {
  $("#step5Form").show(300);
 }
  else if(value==6)
 {
  $("#step6Form").show(300);
 }
  else if(value==7)
 {
  $("#step7Form").show(300);
 }
});


//submit form 2
        
     

        $(document).ready(function () {
           $('#step2Form').submit(function(e){
        //$("#submitStep2").click(function (e) {
    var form = $(this);
       
      $("#step2Failure").hide(200);
    e.preventDefault();
    var state = $("#state").val();
    var pincode = $("#pincode").val();

   
if(state=='' || pincode=='')
{
  
  $("#step2Failure").show(200);
}
  else
  {

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registerstep2'); ?>",
        data: $('#step2Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
      
          if(response== 0)
          {
            alert('error');
                /*
             $("#addPortfolioLoading").hide(400);
              $('#addPortfolioFailuremsg').show(600);
              $('#addPortfolio').show(600);
               $('#buttons').show(600);
              $('#addPortfolio').trigger("reset");*/

       }
        else if(response==1)
        {

                $("#Loading").hide(400);
               $("#step2").hide(400);
              $("#step3Form").show(400);
              $('#heading').text("Contact");
              //$("#addPortfolioSuccessmsg").show(200);
            //window.location.href = "<?= base_url(); ?>employee/dashboard";
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/editprofile";
        }
        
        }
       
       
    
        
   });
  }

});
      });


      //submit form 3
        $( "#contact" ).keyup(function() 
        {
  
             var contact = $("#contact").val();
              
              var aa= contact.length;
              if(aa>10)
              {
                $('#contact').val(contact.substring(0,contact.length - 1));
                $("#limitedNumber").show(400);
                $("#limitedNumber").delay(2000).hide(400);

              }

        });

      $('#step3Form').submit(function(e) {

    var form = $(this);

    e.preventDefault();

 var contact = $("#contact").val();
  var dob = $("#dob").val();
  
  //var leng= $("#contact").val().length;
 

if(contact=='' || dob=='')
{
  $("#step3Failure").show(200);
}
  else
  {
   
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registerstep3'); ?>",
        data: $('#step3Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
                /*
             $("#addPortfolioLoading").hide(400);
              $('#addPortfolioFailuremsg').show(600);
              $('#addPortfolio').show(600);
               $('#buttons').show(600);
              $('#addPortfolio').trigger("reset");*/

        }
        else if(response==1)
        {

            $("#Loading").hide(400);
            $("#step3").hide(400);
            $("#step4Form").show(400);
            $('#heading').text("Education Credentials");
          
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/editprofile";
        }
        
        }
    
        
   });
}
});

       //submit form 4
        
      $('#step4Form').submit(function(e) {

    var form = $(this);
     $("#eductionFailure").hide(200);
    e.preventDefault();

  var degreeName = $("#degreeName").val();
  var university = $("#university").val();
  var percentage = $("#percentage").val();

if( degreeName=='' || university=='' || percentage=='')
{
  $("#eductionFailure").show(200);
}
  else
  {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registerstep4'); ?>",
        data: $('#step4Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
                /*
             $("#addPortfolioLoading").hide(400);
              $('#addPortfolioFailuremsg').show(600);
              $('#addPortfolio').show(600);
               $('#buttons').show(600);
              $('#addPortfolio').trigger("reset");*/

        }
        else if(response==1)
        {

         
              $("#Loading").hide(400);
              $("#step4").hide(400);
              $('#heading').text("Category");
              $("#step5Form").show(400);
             
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/editprofile";
        }
        
        }
    
        
   });
}
});




//click addmore in 4th step


        
$(document).ready(function () {

    $("#addMoreQualification").click(function (e) {
      $("#educationFailure").hide(200);
        //stop submit the form, we will post it manually.
        e.preventDefault();
        var admission = $("#admission").val();
     
        var degreeName = $("#degreeName").val();
        var university = $("#university").val();
        var percentage = $("#percentage").val();
       
       if(admission=='' || degreeName=='' || university=='' || percentage=='')
       {
        $("#educationFailure").show(200);
        //alert('empty fileds found');
       }
       else
       {

      
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('employee/registerstep4'); ?>",
            data: $('#step4Form').serialize(),
            success: function (data) {
          
              $("#addmoreSuccessmsg").show(200);
             
              $('#step4Form').trigger("reset");
             

            },
            error: function (data) {
            
     }
        });
}
    });


});



       //submit form 5
         /*$('#testButton').click(function(e) {
        <?php 
        //$header.reset();
         //unset($header);
        //$header='header'; ?>
        //alert('<?php echo $header; ?>');
        $('#headerr').text("heddeerr");
      }); */
           $('#step5Form').submit(function(e) {

    var form = $(this);

    e.preventDefault();
     $("#step5Failure").hide(200);
   
    var category = $("#category").val();
    if(category == '')
    {

   $("#step5Failure").show(200);
        //alert('empty fileds found');
       }
       else
       {

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registerstep5'); ?>",
        data: $('#step5Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            //alert('error');
                
             $("#addPortfolioLoading").hide(400);
              $('#addPortfolioFailuremsg').show(600);
              $('#addPortfolio').show(600);
               $('#buttons').show(600);
              $('#addPortfolio').trigger("reset");

        }
        else if(response==1)
        {

         // alert('success');
        
                $("#Loading").hide(400);
               $("#step5").hide(400);
               $('#heading').text("Experience");
              $("#step6Form").show(400);

              //$("#addPortfolioSuccessmsg").show(200);
            //window.location.href = "<?= base_url(); ?>employee/dashboard";
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/editprofile";
        }
        
        }
    
        
   });
}
});






       //submit form 6
         
      $('#step6Form').submit(function(e) {

    var form = $(this);

    e.preventDefault();
     $("#step6Failure").hide(200);
var select = $("#select").val();
var experience = $("#experience1").val();
var company = $("#company1").val();
var experience_in = $("#experience_in").val();
    
    if(select == '')
    {

   $("#step6Failure").show(200);
        //alert('empty fileds found');
       }
       else
       {

        
         if(select=='Fresher')
      {
          //run
              
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registerstep6'); ?>",
        data: $('#step6Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
              

        }
        else if(response==1)
        {

           $("#Loading").hide(400);
               $("#step6").hide(400);
               $("#Successmsg").hide(200);
                $('#heading').text("Cover Letter");
              $("#step7Form").show(400);
                
             
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/editprofile";
        }
        
        }
    
        
   });
        }
          else if(select=='Experience')
          {
            if(experience == '' || company == '' || experience_in == '')
            {
              $("#step6Failure").show(200);
            }
            else
            {
              //run
                  
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registerstep6'); ?>",
        data: $('#step6Form').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            alert('error');
              

        }
        else if(response==1)
        {

           $("#Loading").hide(400);
               $("#step6").hide(400);
               $("#Successmsg").hide(200);
                $('#heading').text("Cover Letter");
              $("#step7Form").show(400);
                
             
          
           
        }
        else if(response==2)
        {
            $("#Loading").hide(400);
              $("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>employee/editprofile";
        }
        
        }
    
        
   });
            }
          }





}
});




//click addmore in 6th step


        
$(document).ready(function () {

    $("#addMoreExperience").click(function (e) {
       $("#step6Failure").hide(200);
        //stop submit the form, we will post it manually.
        e.preventDefault();

        $("#step6Failure").hide(200);
var select = $("#select").val();
var experience = $("#experience1").val();
var company = $("#company1").val();
var experience_in = $("#experience_in").val();
    
    if(select == '')
    {

   $("#step6Failure").show(200);
        //alert('empty fileds found');
       }
       else
       {

         if(select=='Fresher')
      {
          //run
           $.ajax({
            type: "POST",
            url: "<?php echo base_url('employee/registerstep6'); ?>",
            data: $('#step6Form').serialize(),
            success: function (data) {
          
              $("#addmoreSuccessmsg").show(200);
             
              $('#step6Form').trigger("reset");
             

            },
            error: function (data) {
            
     }
        });
        }
          else if(select=='Experience')
          {
            if(experience == '' || company == '' || experience_in == '')
            {
              $("#step6Failure").show(200);
            }
            else
            {
              //run
               $.ajax({
            type: "POST",
            url: "<?php echo base_url('employee/registerstep6'); ?>",
            data: $('#step6Form').serialize(),
            success: function (data) {
          
              $("#addmoreSuccessmsg").show(200);
             
              $('#step6Form').trigger("reset");
             

            },
            error: function (data) {
            
     }
        });
            }
          }




       
      }

    });

});




       //submit form 7
        
     //submit form on click submit


$(document).ready(function () {

    $("#submitStep7").click(function (event) {
      $("#step7Failure").hide(200);
        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#step7Form')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
        //$("#addMore").prop("disabled", true);
var mytxtarea = $("#mytxtarea").val();
    if(mytxtarea == '')
    {

   $("#step7Failure").show(200);
        //alert('empty fileds found');
       }
       else
       {
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('employee/registerstep7'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {

                 $("#lastSuccessmsg").show(200);
                    window.location.href = "<?= base_url(); ?>employee/dashboard";
           

            },
            error: function (e) {
              alert('failure');
              window.location.href = "<?= base_url(); ?>employee/dashboard";
     }
        });
}
    });

});




//when submit second form
$(document).ready(function () {

    $("#submitStep2").click(function () {
       
        //hide failure alert
       $("#step2Failure").hide(200);

      var city = $("#city").val();
      var state = $("#state").val();
      var pincode = $("#pincode").val();
    
    if(city == '' || state == '' || pincode == '')
    {

        $("#step2Failure").show(200);
       
    }
    else
    {

      $("#step2").hide(300);
     
      $("#Loading").show(300);
    }

    });

    //submit third form
     /*$("#submitStep3").click(function () {
      
      //hide failure alert
      $("#step3Failure").hide(200);

      var contact = $("#contact").val();
      var dob = $("#dob").val();

    
    if(contact == '' || dob == '')
    {

        $("#step3Failure").show(200);
        
    }
    else
    {
          $("#step3").hide(300);
     
          $("#Loading").show(300);
    }
    });*/

      //submit third form
     $("#submitStep4").click(function () {

      //hide failure alert
      ("#addmoreSuccessmsg").hide(200);
        $("#step4Failure").hide(200);

      var admission = $("#admission").val();
     
      var tags3 = $("#tags3").val();
      var university = $("#university").val();
      var percentage = $("#percentage").val();
    
    if(admission == '' || tags3 == '' || university == '' || percentage == '')
    {

        $("#step4Failure").show(200);
        
    }
    else
    {
          $("#step4").hide(300);
     
          $("#Loading").show(300);
    }

    });

      //submit third form
     $("#submitStep7").click(function () {

      //hide failure alert
        $("#step7Failure").hide(200);

      var mytxtarea = $("#mytxtarea").val();

    if(mytxtarea == '')
    {

        $("#step7Failure").show(200);
       
    }
    else
   {
        $("#step7").hide(300);
     
        $("#Loading").show(300);
    }

    });

      //submit third form
     $("#submitStep5").click(function () {

        //hide failure alert
       $("#step5Failure").hide(200);

      var category = $("#category").val();

    
    if(category == '')
    {

        $("#step5Failure").show(200);
        //alert('empty fileds found');
    }
    else
    {
        $("#step5").hide(300);
     
        $("#Loading").show(300);
    }

    });

      //submit sixth form
     $("#submitStep6").click(function () {

      //hide failure alert
      $("#addmoreSuccessmsg").hide(200);
       $("#step6Failure").hide(200);

        var select = $("#select").val();
        var experience = $("#experience1").val();
        var company = $("#company1").val();
        var experience_in = $("#experience_in").val();
    
    if(select == '')
    {

          $("#step6Failure").show(200);
        //alert('empty fileds found');
    }
    else
    {
      if(select=='Fresher')
      {
          $("#step6").hide(300);
          $("#Successmsg").hide(200);
            $("#Loading").show(300);
        }
          else if(select=='Experience')
          {
            if(experience == '' || company == '' || experience_in == '')
            {
              $("#step6Failure").show(200);
            }
            else
            {
              $("#step6").hide(300);
             $("#Successmsg").hide(200);
            $("#Loading").show(300);
            }
          }
    }

    });


  });

 




$(document).ready(function () {

    $("#addMore").click(function () {
      
      $("#addCertificationSuccessmsg").hide(300);
      $("#addCertification").hide(300);
      $("#buttons").hide(300);
      $("#addCertificationLoading").show(300);
    });




$('#checkBox').change(function() {
        if($(this).is(":checked")) {
         $( "#passed" ).prop( "disabled", true );
            //var returnVal = confirm("Are you sure?");
            //$(this).attr("checked", returnVal);
        }
        else
        {
           $( "#passed" ).prop( "disabled", false );
        }
        //$('#textbox1').val($(this).is(':checked'));        
    });

  });



    document.getElementById('showexperiences').style.display="none";
    document.getElementById('addMoreExperience').style.display="none";
    function showw()
    {
      var x=document.getElementById('select').value;
      if(x=='Experience')
      {
      
        $("#showexperiences").show(700);
        $('#addMoreExperience').show(700);
      }
      else if(x=='Fresher')
      {
        $('#showexperiences').hide(700);
         $('#addMoreExperience').hide(700);
       
      }
       else
      {
         $('#showexperiences').hide(700);
          $('#addMoreExperience').hide(700);
       
      }
    }
</script>

<script>
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
     
    </script>

    <script>

       
  /*$(document).ready(function ()
{

  var aa= $("#testinput").val().length;
  alert(aa);
    /*$('#step3Form').submit(function(e) 
   {

      var form = $(this);

      e.preventDefault();
  }
});*/
</script>



</html> 