<!DOCTYPE HTML>
<html  lang="en">
<head><?php
include 'fav.php';

			            foreach ($data as $value) {
			             	
			            ?><title>Online job portal for job seekers and job providers | <?=  base64_decode(base64_decode($value['recruiter_company_name'])); ?> Profile detail :: Get-job.online</title><?php 
}
?><meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="htps://www.get-job.online">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width; maximum-scale=1; minimum-scale=1;" />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online, job search" />
<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="alternate" href="https://www.get-job.online" hreflang="en"/>
<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- progress bar css-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!----font-Awesome-->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
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

u
{
	color:#f15f43;
}
.left
{
	text-align: left;
	margin-left: 2px;
	padding: 6px;
}
.leftt
{
	padding: 3px;
}
.border{
	border-bottom: 1px solid #e6e6e6;
	
}

.alertbutton
{
	background-color: none;
	border: 2px solid #339933;
	
	color:#339933;
	font-weight: bold;
	border-radius: 5px;
	padding:5px 10px;
}
.alertbutton:hover
{
	background-color: #339933;
	border: 2px solid #339933;
	
	color:white;
}
.complete:hover
{
text-decoration: none;
color:red;
}
.textt
{
	margin: 10px 0;
    border: 1px solid #999;
    color: #999;
    background: none;
    padding: 8px;
    outline: 0;
    font-size: .85em;
    width:16%;
}



	#paginationemployeerecommendation a {
	border-radius: 50%;
	background-color: #f15f43;
	color:white;
		border:1px solid #f15f43;
		padding-left: 5px;
		padding-right: 5px;
		margin-left: 5px;
		margin-right: 5px;
		text-decoration: none;
	}

	#paginationemployeerecommendation a:active {
	
	color: #f15f43;
	}

	#editbutton
{
	font-size: 18px;
	font-weight:bold;
border:none;
padding:10px 15px;
background:#f15f43;
color:white;
margin-top: 5%;
border-radius: 5px;
}
#editbutton:hover
{

background:#2185c5;

}
	@media (max-width:980px) {
   
    
   
    #search_form select {
        padding: 6px;
        font-size: .8125em;
        width: 30%
    }
    
}
.postjob{
	margin-top:5px;
	background-color: #f15f43;
	color:white;
	padding:5px;
	border-radius: 4px;
}
.postjob:hover{
	text-decoration: none;
	color:white;
	background-color: #d53110;
	
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=957428434400355';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!--<script>setTimeout(function(){window.location.href='http://www.test.autorevew.com'},15000);</script>
--></head>
<body>

<?php
		include('EmployeeHeader.php');
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

<div class="container">
	<div class="single">
		<h2>Voila</h2>
	
		<p style="font-size:1.2em;">You have successfully added some balance in your profile you will be now redirected to the last place you were. If you are not redirected within 15 seconds please click below.</p>
</div>
</div>

<?php include 'footer.php'; ?>
</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function() {
   // modal.style.display = "block";
   $("#myModal").slideToggle(700);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    //modal.style.display = "none";
    $("#myModal").slideToggle(700);
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script src="<?= base_url(); ?>js/analytics.js"></script>
</html>	

<script type="application/javascript">
 function branddetails()
 {

		var paramstr=$("#voting_form").serialize();
		$('#loading_pic').show();
		//alert(paramstr);
		if($.post("<?php echo base_url();?>ajaxcontrol/ajax",
		paramstr))
		{
			$("#votingg").hide();
			$('#success_msggg').show();
		 	 $('#success_msggg').text("Thankyou for submitting your Response.");
			//$("#voting_answer").show();
			
		}
		//function(data) 
		//{
			//alert('hello');
			// $('#success_msggg').show();
		 // $('#success_msggg').text(" Record saved successfully");
			//$("#votingg").hide();
			//$("#voting_answer").show();
		
		 //if(data == "Success")
		 //{
		 	
		  
		 //}
		//});	
		
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


</body>
</html>