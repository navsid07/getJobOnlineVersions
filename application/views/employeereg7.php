
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
?><title> Verification successfull :: Get-job.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" government jobs, buisness ideas, career, lattest government jobs, find local jobs, get job online, jobs, part time jobs, job opportunities, job nearby" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online.Online job portalfor job providers and job seekers." />
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


<!-- script for textarea editors-->
<!--<script type="text/javascript" src="<?= base_url(); ?>js/nicEdit.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->
<!-- end code for textarea editor-->
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
.verifybtn:hover {
  background: #f15f43;
 
  text-decoration: none;
}
	#empty, #empty1, #empty2
{
	color:red;
	display:none;
	
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
        <h2>Employee Registration</h2>


         <?php 
     }
      ?>
      <div class="row">
      <div class="col-md-12" id="submitLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
        </div>
        <form id="step7Form" method="post" enctype="multipart/form-data">
         
           

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
            
                <button type="button" id="submitForm" class="btn btn-primary btn-lg">Submit</button>
               
                 <a href="<?= base_url(); ?>"><button type="button" value="Cancel" class="btn btn-danger btn-lg">Cancel</button></a>
            </div>
        </div>
    </form>
  </br>
    <div class="alert alert-danger" id="formFailure" style="display: none;">All fields are required.</div>

    <div class="alert alert-danger" id="wrongExtension" style="display: none;">You are using non-allowed file type. Only .doc,.docx or .pdf file types are allowed.</div>
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
<script>
function showname () {
     var name = document.getElementById('file');
                //alert(thefile.value);
                
         document.getElementById('imgresult').value = name.files.item(0).name;
     }
     
      
    </script>

    <script>
	/* function validateForm() {
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
}*/

</script>

<!--count paragraph characters-->
<script>

</script>

<!--count description characters-->
<script>

$(document).ready(function() {
//add about jquery
 $("#submitForm").click(function (event) {

$("#step7Form").hide(200);
$("#wrongExtension").hide(200);
$("#submitLoading").show(200);
var cover = $("#mytxtarea").val();
 

  
if(cover == '')
{
  //alert('cover empty');
  $("#formFailure").show(200);
}
else
{

    //$("#aboutFailure").hide(200);
    //$("#aboutSuccess").hide(200);
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

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url('Employee/registerstep7'); ?>",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
           
             if(data == 1)
             {
              window.location.href=<?php echo base_url(); ?>'EmployeeLogin'
             }
             else if(data == 0)
             {
               $("#submitLoading").hide(200);
              $("#step7Form").show(200);
             
              $("#wrongExtension").show(200);
             }
             // alert(data);
              // $("#step7Form").trigger("reset");
              // $("#aboutSuccess").show(500);
            },
            error: function (e) {
             alert('error');
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