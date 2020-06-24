
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
	        	<li><a href="<?= base_url(); ?>">Home</a></li>

                  <li><a href="<?= base_url(); ?>EmployeeLogin">Employee</a></li>
   
			            <li><a href="<?= base_url(); ?>RecruiterLogin">Recruiter</a></li>
		
		          <li><a href="<?= base_url(); ?>AboutUs" >About Us</a></li>
                <li><a href="<?= base_url(); ?>ContactUs" >Contact Us</a></li>
            
		        <li><a href="https://blog.therevew.com" target="_blank">Blog</a></li><?php
         $countryCookie=get_cookie('countryCookie');
         if($countryCookie=='Canada')
         {
          $cookieValue='India';
          $cookie='IN';
          ?><ul style="list-style-type:none; margin-top:8px;">
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
             <li><a href="<?= base_url(); ?>ChangeCookie?country=<?= $cookieValue1; ?>"><img width="5%" title="Switch to canada" src="<?= base_url(); ?>images/canadaflag1.jpg" alt="canadian flag"/></a></li>
          </ul>
          <?php
         }
         ?>
	        </ul>
	    </div>


	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
