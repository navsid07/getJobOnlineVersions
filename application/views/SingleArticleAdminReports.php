
<html  lang="en">
	<head>
		
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<title>Online job portal for job seekers and job providers | Home :: get-job.online</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
					<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
							<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
							<script src="<?= base_url(); ?>js/jquery.min.js"></script>
								<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
										<!-- Custom Theme files -->
											<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />

											<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />
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
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

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
	      </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	         <ul class="nav navbar-nav">
             <li><a href="<?= base_url(); ?>admin">Home</a></li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiter<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                 <li><a href="<?= base_url(); ?>AdminAgain/allrecruiter" >All recruiter</a></li>
                      
                         <li><a href="<?= base_url(); ?>admin/checkBoxmailAllrecruiter" >Send Cherckbox emails</a></li>
         
             </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                <li><a href="<?= base_url(); ?>AdminAgain/allemployer" >All employee</a></li>
                     
                        <li><a href="<?= base_url(); ?>admin/checkBoxmailAllemployee" >Send Cherckbox emails</a></li>
          
             </ul>
            </li>
            <li><a href="<?= base_url(); ?>admin/adduserview">Add user</a></li>
            <li><a href="<?= base_url();?>admin/logout" >Logout</a></li></ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
				<div class="container">
					<div class="col-lg-7 " style="text-align:center; margin-top:5%; margin-bottom:3%;">
						<div class="col_3 cool radius margin-bottom">
				<?php
				foreach ($article as $key) {
					?>
					<h3 class="radius">article detail<?= base64_decode((base64_decode($key['recruiter_articleHeading']))); ?></h3>
					<p><?= base64_decode(base64_decode($key['recruiter_articleBody'])); ?></p>
					<?php
				}
				?>
	
				</div></div>

				<div class="col-lg-5" style="text-align:center; margin-top:5%; margin-bottom:3%;">
					<table class="col_3 cool margin-bottom" width="100%">
						<th><h3 class="radius">Report detail</h3></th>
						
							<?php
							if(!empty($singlereport))
							{
								$uid='';
							foreach ($singlereport as $value) {
								?>
								<tr><td class="padding">
									<?=
									$value['description'];
									?>
								</td></tr>
								<?php
								$uid.=$value['userId'];
								
							}
						}
						else
						{


							?>
							
							<tr><td class="padding">Sorry no result found.</td></tr>
							<?php
						}
							?>
						</table>
					</div>

					<div class="col-lg-7 " style="text-align:center; margin-top:5%; margin-bottom:3%;">
						<div class="col_3 cool radius margin-bottom">
								<h3 class="radius">More reports</h3>
				<?php
			

				foreach ($totalreports as $keyy) {
					?>
				
					<a href="<?= base_url();?>admin/articlereport?aid=<?= $keyy['recruiter_articleId']; ?>&&client=recruiter&&id=<?= $keyy['id']; ?>"><p><?= $keyy['category']; ?></p></a>
					<?php
				}
				?>
	
				</div></div>

				<div class="col-lg-5 " style="text-align:center; margin-top:5%; margin-bottom:3%;">
						<div class="col_3 cool radius margin-bottom">
							<h3>Reported by</h3>
				<?php
				$recruiterdetrail=$this->adminmodel->singlerercuiter($uid);
			
				foreach ($recruiterdetrail as $akkeyy) {
					
					?>
					<?=  base64_decode(base64_decode($akkeyy['recruiter_company_name'])); ?>
					
					<?php
				
			}
				?>
	
				</div></div>
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
</script>

 <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  alert("Copied link is: " + copyText.value);
}
</script>

</html>