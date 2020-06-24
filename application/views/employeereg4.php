
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head><?php
  $email='email';
include 'fav.php';
?><title>Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online.Online job portal for job providers and job seekers." />
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<link rel="canonical" href="<?= base_url(uri_string()); ?>">
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
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

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


.control{

	
	border:none;
}
#DropdownDegree {
    
    padding: 15px;
    width:20%;
    height: 200px;
    overflow: scroll;

}
#DropdownDegree1 {
    
    padding: 15px;
    width:20%;
    height: 200px;
    overflow: scroll;

}
#DropdownDegree2 {
    
    padding: 15px;
    width:20%;
    height: 200px;
    overflow: scroll;

}
#DropdownDegree3 {
    
    padding: 15px;
    width:20%;
    height: 200px;
    overflow: scroll;

}
#DropdownDegree4 {
    
    padding: 15px;
    width:20%;
    height: 200px;
    overflow: scroll;

}
#DropdownDegree5 {
    
    padding: 15px;
    width:20%;
    height: 200px;
    overflow: scroll;

}
</style>
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
<!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

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
	        <a class="navbar-brand" href="<?= base_url(); ?>welcome/dashboard"><img src="<?= base_url(); ?>logo/getjob.png" alt="logo"/></a>
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
		       
		        
                  <li><a href="wishlist">My Shortlist</a></li>
		        <li><a href="editprofile">Edit Profile</a></li>
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
             <li><a href="<?= base_url(); ?>welcome/changeCookie?country=<?= $cookieValue; ?>" ><img width="5%" title="Switch to india"src="<?= base_url(); ?>images/indianflag1.png" alt="Indian flag"/></a></li>
          </ul>
          
          <?php
         }
         elseif($countryCookie=='India')
         {
          $cookieValue1='Canada';
          $cookie1='CA';
          ?>
           <ul style="list-style-type:none; margin-top:8px;">
             <li><a href="<?= base_url(); ?>welcome/changeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="Indian flag"/></a></li>
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



<div class="row margintop2" >

  <ul id="breadcrumbs"><li><a href="<?= base_url(); ?>">Home </a></li><li>Employee Registration</li></ul>
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
        <h2>Employee Registrationn</h2>


         <?php 
     }
      ?>

        <div class="col-md-offset-3 col-md-9 alert alert-success" id="addmoreSuccessmsg" style="font-weight: bold; display:none"> Previous detail submitted.</div>

        <form  id="step4Form" method="post">
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
       class="form-control input-lg" required="">
     </div></div></div>
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
      </div></div></div>

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
                <button type="submit" id="submit" value="Done" class="btn regularButton btn-sm">Submit</button>


                  <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn regularCancel btn-sm">Cancel</button></a>
               
            </div>
        </div>
    </form>
    <div class="col-md-12" id="Loading" style="text-align:center; display: none;"><img src="<?= base_url();?>images/loader.gif"></div>

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
	 
  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
   </div>
	  
	</div>
</div>
<?php

include 'footer.php';

?>
</body>


<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
        <!-- Latest compiled and minified JavaScript -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script src="<?php echo base_url(); ?>assets/custom.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <!--
<script src="<?= base_url(); ?>js/analytics.js"></script>-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');
</script>   

<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->

 

<script>
  $(document).ready(function () {

    $("#addMoreQualification").click(function (e) {

      $("#addmoreSuccessmsg").hide(200);
       $("#Loading").show(200);
    //  $("#educationFailure").hide(200);
      $('#step4Form').hide(200);

      
        var degreeName = $("#degreeName").val();
        var university = $("#university").val();
        var percentage = $("#percentage").val();
        
        //stop submit the form, we will post it manually.
        e.preventDefault();
        
        
       
      
       if (degreeName=='' || university=='' || percentage=='')
       {
        alert('empty');
        //$("#educationFailure").show(200);
        //alert('empty fileds found');
       }
       else
       {

    
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('employee/registerstep4'); ?>",
            data: $('#step4Form').serialize(),
            success: function (data) {
            
              //echo 'success';
                 $('#Loading').hide(200);
              $("#addmoreSuccessmsg").show(200);

               $('#step4Form').trigger("reset");
             $('#step4Form').show(200);
             
             

            }
          
        });
}
    });




  //submit form 4
        
      $('#step4Form').submit(function(e) {
         e.preventDefault();
    var form = $(this);
     $("#eductionFailure").hide(200);
   
    
 
  var degreeName = $("#degreeName").val();
  var university = $("#university").val();
  var percentage = $("#percentage").val();

  //alert(admission);  alert(passed);  alert(degreeName);  alert(university);  alert(percentage);
//$ddata=$('#step4Form').serialize();
   // alert(ddata);
if(degreeName=='' || university=='' || percentage=='')
{
  alert('null');//$("#eductionFailure").show(200);
}
  else
  {
    
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Employee/registerstep4'); ?>",
        data: $('#step4Form').serialize(), // <--- THIS IS THE CHANGE
        success: function(response){
          
        
          if(response== 0)
          {
            alert('error');
               

        }
        else if(response==1)
        {


               $("#Loading").hide(200);
              //$("#Successmsg").show(200);
            window.location.href = "<?= base_url(); ?>EmployeeRegistrationStep5";

           
        }
        else if(response==2)
        {
            $("#Loading").hide(200);
              
            window.location.href = "<?= base_url(); ?>EmployeeRegistrationStep5";
        }
        
        }
        
    
        
   });
}
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


</script>
</html>	

