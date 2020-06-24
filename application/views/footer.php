<style>
.li
{
 overflow: scroll;
    height: 300px !important;
}


</style>
<!-- custom scrollbar CSS -->
<link rel="stylesheet" href="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
<!-- jQuery lib --><!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!-- custom scrollbar plugin script -->
<script src="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="<?= base_url(); ?>Dashboard">Home</a></li>
				 <li><a href="<?= base_url(); ?>SigninAs?click=eid">Employee</a></li>
                <li><a href="<?= base_url(); ?>SigninAs?click=rid">Recruiter</a></li>
				<li><a href="<?= base_url(); ?>ReferralIndex">Refer & Earn</a></li>
				<li><a href="<?= base_url(); ?>AboutUs">About Us</a></li>
				<li><a href="<?= base_url(); ?>ContactUs">Contact Us</a></li>
				<li><a href="<?= base_url(); ?>Report">Report</a></li>
				<li><a href="<?= base_url(); ?>PrivacyPolicy">Privacy Policy</a></li>
				<li><a href="<?= base_url(); ?>CookiePolicy">Cookie Policy</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-3 grid_3">
			
			<div class="footer-list">
			  <ul>

				<li class="li">

<a  class="twitter-timeline" href="https://twitter.com/get_job_online?ref_src=twsrc%5Etfw">Tweets by get_job_online</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      
</li>

</ul>
			</div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>GET JOB ONLINE</h4>
			
			<p>This is the best platform for job seekers and job providers.You will just signup and start working at the place, where you get the right value of your work. We hope you will enjoy the working experience with us.</p>
		
		</div>
		<div class="col-md-3 grid_3">
			<span id="newsletter">
			<h4>Sign up for our newsletter</h4>
			<p>Enter your email and sighnup for newsletter.</p>
			<form id="newsletterForm" method="post">
				<input type="text" name="email" class="form-control" placeholder="Enter your email" required>
				<button type="submit" class="btn red">Subscribe now!</button>
		    </form>
		</span>
		    <p style="font-weight: bold; display: none;" id="newsletterMsg">Your Email address successfully registered with Get Job Online newsletter service.</p>
		</div>

		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_bottom">	
  <div class="container">
  <div class="social padding" style="text-align:center">	
	
					<a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
						<i class="fa fa-facebook fb"></i>
						<span class="share1 fb">Share</span>								
					</a>
					<a class="btn_1" target="_blank" href="https://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
						<i class="fa fa-twitter tw"></i>
						<span class="share1">Tweet</span>								
					</a>
					

					<a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
						<i class="fa fa-linkedin in"></i>
						<span class="share1 insta">Share</span>
					</a>
			   </div>
	<div class="copy">
		<p>Copyright © 2019. All Rights Reserved . Designed and managed by <a href="http://www.therevew.com" target="_blank">The Revew</a> </p>
	</div>
		
		
  </div>
</div>
<script>

  (function($){
    $(window).load(function(){
      /* initialize scrollbar */
      $("#twitter-timeline").mCustomScrollbar({
        theme:"dark-3",
        scrollButtons:{enable:true}
      });
      /* insert twitter widget js in window load fn */
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    });
  })(jQuery);

   //shortlist  employee by a recruiter
      $('#newsletterForm').submit(function(e) {

    var form = $(this);

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('welcome/newsletterindex'); ?>",
        data: $('#newsletterForm').serialize(), // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(response){
        	
        	if(response== 0)
        	{
        		
        		$('#newsletter').hide(500);
            	$('#newsletterMsg').show(500);
        
        }
        else if(response==1)
        {
       
       
        	$('#newsletter').hide(500);
           $('#newsletterMsg').show(500);
           
        }
        
        }
        
   });

});
	</script>