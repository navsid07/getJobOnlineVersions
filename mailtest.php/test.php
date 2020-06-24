<?php
$to='jastgrewal@gmail.com';
 			$this->load->library('email');
            $config['protocol']='smtp';
            $config['smtp_host']='mail.get-job.online';
            $config['smtp_port']='25';
            $config['smtp_timeout']='30';
            $config['smtp_user']='noreply@get-job.online';
            $config['smtp_pass']='774411';
            $config['charset']='utf-8';
            $config['newline']="\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Email Verification');

$body  =  '<i>
	<html>
<head>
<style>
	.aa
	{
	background-color:white;
	border:2px solid #f15f43;
	color:#f15f43;
	border-radius:3px;
	padding:8px 16px;
	cursor:pointer; 
	margin:1%;
	font-weight:bold;
	}
	.aa:hover
	
	{
		font-weight:bold;
	background-color:#f15f43;
	color:white;
	}
	.aaa
	{
	background-color:white;
	border:2px solid #f15f43;
	color:#f15f43;
	border-radius:3px;
	padding:10px 25px;
	cursor:pointer; 
	margin:1%;
	font-weight:bold;
	}
	.aaa:hover
	
	{
	background-color:#f15f43;
	color:white;
	font-weight:bold;
	}


	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
	color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
	<body style="background-color:white;">
		<div class="row" style="background-color:white; color:#4d4d4d;">
			<div class="col-md-12" style="text-align:center;">
				<a href="http://www.get-job.online/" target="_blank"><img src="http://www.get-job.online/emailimage/getjobbb.png"  alt="Matrimony.solutions" ></a>
			</div>
			<div class="row" style="text-align:center; margin-left:25%;">
		<ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d"><b>Home</b></font></a></li>
  <li><a href="http://www.get-job.online/employee"><font color="#4d4d4d"><b>Employee</b></font></a></li>
  <li><a href="http://www.get-job.online/recruiter"><font color="#4d4d4d"><b>Employer</b></font></a></li>
  <li><a href="http://www.get-job.online"><font color="#4d4d4d"><b>Jobs</b></font></a></li>
   <li><a href="http://www.blog.therevew.com"><font color="#4d4d4d"><b>Blog</b></font></a></li>
</ul>
</div>
		</div>
		<div class="row" style="text-align:center;">
			<div class="col-md-offset-4 col-md-4">
				<a href="http://www.get-job.online/" target="_blank"><img src="http://arza.ca/wp-content/uploads/arza1920-1030x687.jpg" width="70%" height="50%"/></a>
			</div>
		</div>	
		<div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
				<div class="col-md-offset-2 col-md-8">
					 <p style="color:#404040;  font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
					Hello There,

					</p>
<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">
					We are pleased to tell you that we have launched a new web platform <a href="http://www.get-job.online" target="_blank">Get-job.online</a>.Here we have all you need here is create free account and you will hire free classified for job openings.if you find a promising profile then you can hire them or you can just post the opening and let people come to you.
					</p>
<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">
					The process is so easy that there is no hassle in posting the job and as we know time is even expensive than money the signup process is made easier.the posting is also made easy.
</p>
<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">
					<b>If you have any requirement Please click below to post a job opening.</b> 
</p>
<div class="row" style="text-align:center;">
				<a href="http://get-job.online/recruiter" style="text-decoration:none;"><input type="submit" class="aa" value="Post job"></a>
			</div>	
			</br>
			<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">
					<b>For any further query you can contact us here.</b>
</p>
<div class="row" style="text-align:center;">
				<a href="http://get-job.online/welcome/contact" style="text-decoration:none;"><input type="submit" class="aaa" value="Contact us"></a>
			</div>	



					 
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-12" style="text-align:center;">
				<p><b>You can also further reach us on. Social networks and join our Blog:</b></p>
													<a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank" title="Share on facebook"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank" title="Share on twitter"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank" title="Share on Google+"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                                    <a href="http://blog.therevew.com" target="_blank" title="Go to Blog"><img src="http://www.get-job.online/images/i5.png" alt="twit"></a>
                                           
				</div>
				
			</div>		
	</body>
	</html>
	</i>';
 
            $this->email->message($body);
         if($this->email->send())
         {
         	echo 'success';
         }
         else
         {
         	echo 'failed';//$this->email->print_debugger();;
         }
        

     }
?>