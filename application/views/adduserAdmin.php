
<html  lang="en">
	<head>
		
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

					<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
							<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
							<script src="<?= base_url(); ?>js/jquery.min.js"></script>
								<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
										<!-- Custom Theme files -->
											<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
												<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
													<!----font-Awesome---->
														<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
															<!----font-Awesome---->
																
																<style>
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
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
		<body>
			<nav class="navbarr navbar-default" role="navigation" style="height:10px;">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="<?= base_url(); ?>Dashboard"></a>
	    </div>
	    <!--/.navbar-header-->
	   <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
          <ul class="nav navbar-nav">
             <li><a href="<?= base_url(); ?>admin">Home</a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiter<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                 <li><a href="<?= base_url(); ?>AdminAgain/allrecruiter" >All recruiter</a></li>
                     
         
             </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                <li><a href="<?= base_url(); ?>AdminAgain/allemployer" >All employee</a></li>
                    
          
             </ul>
            </li>
          	<li><a href="<?= base_url(); ?>admin/adduserview">Add user</a></li>
            <li><a href="<?= base_url();?>admin/logout" >Logout</a></li>
         
      </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
				<div class="container">



					<div class="row" style="margin-top:2%;">
						 <div class="col-md-12" id="RegisterFormLoading" style="text-align:center; display:none;"><img src="<?= base_url();?>images/loader.gif"></div>
            <div class="form-group col-md-12">
               <div class="alert alert-success" style="display: none;" id="successMsgAfter">
                 Verification link has been sent to your email.
               </div>

               <div class="alert alert-success" style="display: none;" id="changeEmailSuccessMsg">
                 Verification link has been sent to your email.
               </div>

               <div class="alert alert-danger" style="display: none;" id="RegisterFormSamemailMsg">
                 This email has been registered as a recruiter in our system please try with different email.
               </div>

                 <div class="alert alert-danger" style="display: none;" id="RegisterFormSamemailMsgRecruiter">
                 This email has been registered as a employee in our system please try with different email.
               </div>
               <div class="alert alert-success" style="display: none;" id="RegisterFormSuccessMsg">
                Email successfullyt sent. 
                
               <div class="alert alert-danger" style="display: none;" id="RegisterFormFailureMsg">
                 Something went wrong please try again later
               </div>
               <div class="alert alert-danger" style="display: none;" id="RegisterFormEmailexistMsg">
                 Email you have entered is already registered with us. please try again with another email or signin with the same.
               </div>
            </div>
					<div class="col-md-offset-3 col-md-6" style="margin-top:4%;">
						
						
							
											<!--<form action="<?= base_url(); ?>admin/adduser" method="post">-->
												<!--<input type="text" name="name" class="form-control" placeholder="user name here">
												<input type="text" name="contact" placeholder="Contact here" class="form-control">-->
												<div id="category">Category:</br>
												<select name="category" class="form-control">
													<option >Select</option>
													<option value="employee">Employee</option>
													<option value="recruiter">Recruiter</option>
												</select>
													</div>
												<form id="EmployeeRegisterForm" method="post" style="display: none;">
													User name:</br>
													<input type="text" class="form-control" name="name" placeholder="Name">
												User email:</br>
													<input type="text" class="form-control" name="email" placeholder="Email">
												Password:</br>
													<input type="password" class="form-control" name="password">

													<button type="submit" id="employeeSubmit" class="btn btn-primary">Add employee</button>
												</form>

												<form id="RecruiterRegisterForm" style="display: none;">
													Company name:</br>
													<input type="text" class="form-control" name="company_name" placeholder="Company Name">
												Recruiter email:</br>
													<input type="text"class="form-control" name="email" placeholder="Email">
												Password:</br>
													<input type="password" class="form-control" name="password">
													<button type="submit" id="submit" class="btn btn-primary">Add recruiter</button>
												</form>
												

						
					</div>
				</div>
			
		</body>
		
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36521580-23');


// change form according to client
  $('select').on('change', function() {
  $val=this.value;
  if($val=='employee')
  {
  	
  	$('#RecruiterRegisterForm').hide(500);
  	$('#EmployeeRegisterForm').show(500);
  }
  else if($val=='recruiter')
  {
	$('#EmployeeRegisterForm').hide(500);
  	$('#RecruiterRegisterForm').show(500);
  }
});


  //add recruiter
      $('#RecruiterRegisterForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('recruiter/recruiterreg1'); ?>",
        data: $('#RecruiterRegisterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            //alert(response);
            $("#RegisterFormLoading").hide(300);
            $("#RegisterFormFailureMsg").show(500);
             $("#already").show(500);
                }
        else if(response==1)
        { 
          
         
          $("#RegisterFormLoading").hide(300);
          $("#RegisterFormSuccessMsg").show(500);
           $("#already").hide(500);
            var m= $("#email").val();
           $("#SendAgainValue").val(m);
             $("#emailValue").val(m);
           $("#CurrentEmail").val(m);
          
        }
        else if(response==2)
        {
         // alert(response);
          
           $("#RegisterFormLoading").hide(300);
            alert(response);
            $("#RegisterFormSamemailMsgRecruiter").show(500);
             $("#already").show(500);
        }
        else if(response==3)
        {
          //alert(response);
         $("#RegisterFormLoading").hide(300);
         $("#RegisterFormEmailexistMsg").show(500);
              $("#already").show(500);
        }
        
        }
        
   });

});

//add employee
//job applied by a user from bottom button
      $('#EmployeeRegisterForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('employee/registertest'); ?>",
        data: $('#EmployeeRegisterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
          
          if(response== 0)
          {
            $("#RegisterFormLoading").hide(300);
            $("#RegisterFormFailureMsg").show(500);
          //alert(response);
                }
        else if(response==1)
        { 
          $("#RegisterFormLoading").hide(300);
          $("#RegisterFormSuccessMsg").show(500);
         
          //alert(response);
         
        }
        else if(response==2)
        {
           $("#RegisterFormLoading").hide(300);
            //alert(response);
            $("#RegisterFormSamemailMsg").show(500);
        }
        else if(response==3)
        {
         // alert(response);
         $("#RegisterFormLoading").hide(300);
         $("#RegisterFormEmailexistMsg").show(500);
        }
        
        }
        
   });

});


//recruiter submit button
$(document).ready(function () {

    $("#submit").click(function () {
      $("#RecruiterRegisterForm").hide(300);
       $("#category").hide(300);
      $("#already").hide(300);
      $("#RegisterFormLoading").show(300);
      
    });
  });

//employee submit button
$(document).ready(function () {

    $("#employeeSubmit").click(function () {
    	 $("#category").hide(300);
      $("#EmployeeRegisterForm").hide(300);
      $("#RegisterFormLoading").show(300);
      
    });


  });

</script>

</html>