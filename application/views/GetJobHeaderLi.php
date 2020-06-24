
 <li><a href="<?= base_url(); ?>">Home</a></li>
		      
		      
			          
			            <li><a href="<?= base_url(); ?>EmployeeLogin">Employee</a></li>
			 
			            <li><a href="<?= base_url(); ?>RecruiterLogin">Recruiter</a></li>
			           
			            
		         		<li><a href="<?= base_url(); ?>AboutUs" >About Us</a></li>
		        		<li><a href="<?= base_url(); ?>ContactUs" >Contact Us</a></li>
		        		<li><a href="https://blog.therevew.com" target="_blank">Blog</a></li>
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