<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Employee extends CI_Controller 

{



function __construct()

    {

        // this is your constructor

        parent::__construct();

        $this->load->helper('form');

        $this->load->library('session');

        $this->load->library('upload');

        $this->load->helper('url');

        $this->load->model('fetch');

        $this->load->model('insert');

        $this->load->model('search');

        $this->load->model('referrall');

        $this->load->model('delete');

        $this->load->model('update');

        $this->load->library('user_agent');
        //pagination
       $this->load->library('pagination');
 		$this->load->model('Pagination_model');

        $job_id="";

    }



public function version()

{

	echo CI_VERSION; 

}
//pagination code
public function loadRecord($rowno=0){

		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

      	
      	// All records count
      	$allcount = $this->Pagination_model->getrecordCount();

      	// Get  records
     	$users_record = $this->Pagination_model->getData($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = 'http://www.test.autorevew.com/employee/loadRecord';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;

		echo json_encode($data);
		
	}
//pagination code end
public function admin()

{

	$this->load->view('admin');

}

	public function index()

	{

		$referral=$this->input->get('src', TRUE);

		$login=$this->input->get('login', TRUE);

		$id=$this->input->get('id', TRUE);

		$this->load->view('employerRegister',['referral'=>$referral,'login'=>$login,'id'=>$id]);

	}



	public function register()

	{

		$to=$this->input->post('email');

		$toto_encode=base64_encode(base64_encode($to));

		

		$resultt=$this->fetch->checkmailemployer($toto_encode);

		$sameemail=$this->fetch->sameemailemployee($toto_encode);



		if($sameemail=='success')

		{

		if($resultt=='failed')

		{

			$config= ['upload_path' => './resumes/',

					'allowed_types' => 'pdf|doc|docx'];

					$this->upload->initialize($config);



					if($this->upload->do_upload('userfile'))

						{



							$data = $this->upload->data();

							 $image_path = base_url("resumes/" .$data['raw_name'].$data['file_ext']);

           					$imagee=$data['raw_name'].$data['file_ext'];



           	$experience1=base64_encode(base64_encode($this->input->post('experience1')));

           	$experience2=base64_encode(base64_encode($this->input->post('experience2')));

           	$experience3=base64_encode(base64_encode($this->input->post('experience3')));

           	$experience4=base64_encode(base64_encode($this->input->post('experience4')));

           	$experience5=base64_encode(base64_encode($this->input->post('experience5')));

           	$company1=base64_encode(base64_encode($this->input->post('company1')));

           	$company2=base64_encode(base64_encode($this->input->post('company2')));

           	$company3=base64_encode(base64_encode($this->input->post('company3')));

           	$company4=base64_encode(base64_encode($this->input->post('company4')));

           	$company5=base64_encode(base64_encode($this->input->post('company5')));

           	$experience_in1=base64_encode(base64_encode($this->input->post('experience_in1')));

           	$experience_in2=base64_encode(base64_encode($this->input->post('experience_in2')));

           	$experience_in3=base64_encode(base64_encode($this->input->post('experience_in3')));

           	$experience_in4=base64_encode(base64_encode($this->input->post('experience_in4')));

           	$experience_in5=base64_encode(base64_encode($this->input->post('experience_in5')));

           	$fresherex=base64_encode(base64_encode($this->input->post('fresher/experience')));

			$email=base64_encode(base64_encode($this->input->post('email')));

			$name=base64_encode(base64_encode($this->input->post('name')));

			$password=base64_encode(base64_encode($this->input->post('password')));

			$address=base64_encode(base64_encode($this->input->post('address')));

			$pincode=$this->input->post('pincode');

			$qualification=base64_encode(base64_encode($this->input->post('qualification')));

			$grade=base64_encode(base64_encode($this->input->post('grade')));

			$contact=base64_encode(base64_encode($this->input->post('contact')));

			$country=base64_encode(base64_encode($this->input->post('country')));

			$city=base64_encode(base64_encode($this->input->post('city')));

			$state=base64_encode(base64_encode($this->input->post('state')));

			$birthdate=base64_encode(base64_encode($this->input->post('birthdate')));

			$description=base64_encode(base64_encode($this->input->post('description')));

			$preffered_location=base64_encode(base64_encode($this->input->post('preffered_location')));

			$designation=base64_encode(base64_encode($this->input->post('designation')));

			$category=base64_encode(base64_encode($this->input->post('category')));

			$experience_in=base64_encode(base64_encode($this->input->post('experience_in')));

			$referral=base64_encode(base64_encode($this->input->post('referral')));

           	$login=base64_encode(base64_encode($this->input->post('login')));

           	$id=$this->input->post('id');

			$hash= mt_rand();

			

				//function for referral code

					$length = 10;

   					 $characters = '0123456789abcdefghijklmnopqrstuvwxyz';

    					$ReferralCode = '';    



   				 for ($p = 0; $p < $length; $p++) 

   				 {

        			$ReferralCode .= $characters[mt_rand(0, strlen($characters))];

    			}



			$array=array('employee_name'=>$name

				,'employee_password'=>$password

				,'employee_address'=>$address

				,'employee_pincode'=>$pincode

				,'employee_qualification'=>$qualification

				,'employee_grade'=>$grade

				,'employee_phone'=>$contact

				,'employee_email'=>$email

				,'employee_country'=>$country

				,'employee_city'=>$city

				,'employee_state'=>$state

				,'employee_birthdate'=>$birthdate

				,'employee_category'=>$category

				,'employee_resume'=>$imagee

				,'employee_description'=>$description

				,'employee_preffered_location'=>$preffered_location

				,'employee_designation'=>$designation

				,'employee_hash'=>$hash

				,'experience1'=>$experience1

				,'experience2'=>$experience2

				,'experience3'=>$experience3

				,'experience4'=>$experience4

				,'experience5'=>$experience5

				,'company1'=>$company1

				,'company2'=>$company2

				,'company3'=>$company3

				,'company4'=>$company4

				,'company5'=>$company5

				,'experience_in1'=>$experience_in1

				,'experience_in2'=>$experience_in2

				,'experience_in3'=>$experience_in3

				,'experience_in4'=>$experience_in4

				,'employee_fresher_experience'=>$fresherex

				,'experience_in5'=>$experience_in5

				,'employee_referral'=>$ReferralCode

				,'employee_referral_from'=>$referral);


			$result=$this->insert->employerRegister($array);

			

		if($result=='success')

		{

			if($login=='recruiter')

			{

					$this->referrall->registerupdaterid($id);

			}

			elseif($login=='employee')

			{

				$this->referrall->registerupdateeid($id);

			}



             $config = Array(    



      'protocol' => 'sendmail',



      'smtp_host' => 'get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           

             $this->load->library('email', $config);

			$this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Email Verification. Get job online');







$body  = 



'<i> 

<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>

		<!-- NAME: FOLLOW UP -->

		<!--[if gte mso 15]>

		<xml>

			<o:OfficeDocumentSettings>

			<o:AllowPNG/>

			<o:PixelsPerInch>96</o:PixelsPerInch>

			</o:OfficeDocumentSettings>

		</xml>

		<![endif]-->

		<meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title><b>Email Verification</b></title>

        

    <style type="text/css">

		p{

			margin:10px 0;

			padding:0;

		}

		table{

			border-collapse:collapse;

		}

		h1,h2,h3,h4,h5,h6{

			display:block;

			margin:0;

			padding:0;

		}

		img,a img{

			border:0;

			height:auto;

			outline:none;

			text-decoration:none;

		}

		body,#bodyTable,#bodyCell{

			height:100%;

			margin:0;

			padding:0;

			width:100%;

		}

		.mcnPreviewText{

			display:none !important;

		}

		#outlook a{

			padding:0;

		}

		img{

			-ms-interpolation-mode:bicubic;

		}

		table{

			mso-table-lspace:0pt;

			mso-table-rspace:0pt;

		}

		.ReadMsgBody{

			width:100%;

		}

		.ExternalClass{

			width:100%;

		}

		p,a,li,td,blockquote{

			mso-line-height-rule:exactly;

		}

		a[href^=tel],a[href^=sms]{

			color:inherit;

			cursor:default;

			text-decoration:none;

		}

		p,a,li,td,body,table,blockquote{

			-ms-text-size-adjust:100%;

			-webkit-text-size-adjust:100%;

		}

		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{

			line-height:100%;

		}

		a[x-apple-data-detectors]{

			color:inherit !important;

			text-decoration:none !important;

			font-size:inherit !important;

			font-family:inherit !important;

			font-weight:inherit !important;

			line-height:inherit !important;

		}

		.templateContainer{

			max-width:600px !important;

		}

		a.mcnButton{

			display:block;

		}

		.mcnImage{

			vertical-align:bottom;

		}

		.mcnTextContent{

			word-break:break-word;

		}

		.mcnTextContent img{

			height:auto !important;

		}

		.mcnDividerBlock{

			table-layout:fixed !important;

		}

	/*

	@tab Page

	@section Heading 1

	@style heading 1

	*/

		h1{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:40px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 2

	@style heading 2

	*/

		h2{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:34px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 3

	@style heading 3

	*/

		h3{

			/*@editable*/color:#444444;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:22px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 4

	@style heading 4

	*/

		h4{

			/*@editable*/color:#999999;

			/*@editable*/font-family:Georgia;

			/*@editable*/font-size:20px;

			/*@editable*/font-style:italic;

			/*@editable*/font-weight:normal;

			/*@editable*/line-height:125%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Container Style

	*/

		#templateHeader{

			/*@editable*/background-color:#F7F7F7;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:54px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Header

	@section Header Interior Style

	*/

		.headerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Header

	@section Header Text

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Link

	*/

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Body

	@section Body Container Style

	*/

		#templateBody{

			/*@editable*/background-color:#FFFFFF;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:27px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Body

	@section Body Interior Style

	*/

		.bodyContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Body

	@section Body Text

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Body

	@section Body Link

	*/

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Footer

	@section Footer Style

	*/

		#templateFooter{

			/*@editable*/background-color:#333333;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:63px;

		}

	/*

	@tab Footer

	@section Footer Interior Style

	*/

		.footerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Footer

	@section Footer Text

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:12px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:center;

		}

	/*

	@tab Footer

	@section Footer Link

	*/

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	@media only screen and (min-width:768px){

		.templateContainer{

			width:600px !important;

		}



}	@media only screen and (max-width: 480px){

		body,table,td,p,a,li,blockquote{

			-webkit-text-size-adjust:none !important;

		}



}	@media only screen and (max-width: 480px){

		body{

			width:100% !important;

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImage{

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{

			max-width:100% !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer{

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupContent{

			padding:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{

			padding-top:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{

			padding-top:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardBottomImageContent{

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockInner{

			padding-top:0 !important;

			padding-bottom:0 !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockOuter{

			padding-top:9px !important;

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnTextContent,.mcnBoxedTextContentColumn{

			padding-right:18px !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{

			padding-right:18px !important;

			padding-bottom:0 !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcpreview-image-uploader{

			display:none !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 1

	@tip Make the first-level headings larger in size for better readability on small screens.

	*/

		h1{

			/*@editable*/font-size:30px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 2

	@tip Make the second-level headings larger in size for better readability on small screens.

	*/

		h2{

			/*@editable*/font-size:26px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 3

	@tip Make the third-level headings larger in size for better readability on small screens.

	*/

		h3{

			/*@editable*/font-size:20px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 4

	@tip Make the fourth-level headings larger in size for better readability on small screens.

	*/

		h4{

			/*@editable*/font-size:18px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Boxed Text

	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Header Text

	@tip Make the header text larger in size for better readability on small screens.

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Body Text

	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Footer Text

	@tip Make the footer content text larger in size for better readability on small screens.

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}</style></head>

    <body>

		<!--*|IF:MC_PREVIEW_TEXT|*-->

		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->

		<!--*|END:IF|*-->

        <center>

            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">

                <tr>

                    <td align="center" valign="top" id="bodyCell">

                        <!-- BEGIN TEMPLATE // -->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tr>

								<td align="center" valign="top" id="templateHeader" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

							<tr>

								<td align="center" valign="top" id="templateBody" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <h1>Dear employee</h1>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/_compresseds/caa9dd71-94fc-463e-b003-026515212665.jpg" width="564" style="max-width:1698px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <p><strong>We are so pleased to have you on boead with us.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent seekers in your field of expertise. There are lots &amp; lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. if you have apply to a specific job then you have to pay a small amount of not more than 25.</p>



<p>In order for you get going with it. You are required to verify your email address.<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please Click the link below to verify your Account:</p>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnDividerBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">

                <table class="mcnDividerContent" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnButtonBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" class="mcnButtonBlockInner" valign="top" align="center">

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #F15F43;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="http://get-job.online/employee/verify/'.$to_encode.'/'.$hash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                            <tr>

								<td align="center" valign="top" id="templateFooter" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">

    <tbody class="mcnFollowBlockOuter">

        <tr>

            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">

    <tbody><tr>

        <td align="center" style="padding-left:9px;padding-right:9px;">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">

                <tbody><tr>

                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">

                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                            <tbody><tr>

                                <td align="center" valign="top">

                                    <!--[if mso]>

                                    <table align="center" border="0" cellspacing="0" cellpadding="0">

                                    <tr>

                                    <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://twitter.com/get_job_online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                    <!--[if mso]>

                                    </tr>

                                    </table>

                                    <![endif]-->

                                </td>

                            </tr>

                        </tbody></table>

                    </td>

                </tr>

            </tbody></table>

        </td>

    </tr>

</tbody></table>



            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2017. All rights reserved.Designed and Managed by The Revew</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                        </table>

                        <!-- // END TEMPLATE -->

                    </td>

                </tr>

            </table>

        </center>

    </body>

</html>



</i>';







            $this->email->message($body);

           if($this->email->send())

           {

           	

           	//$result=$this->insert->employerRegister( $array );

          	$this->session->set_flashdata(array('register'=>'In order to proceed further you need to verify your email address. An email has been sent to your email '.$to.'. Check your Inbox/Spam folder if the email appears in the spam folder and proceed further by clicking on the link given in the email. If you have not received the email click below. Or if you wish to change your email address click below. </br><div style="text-align:center; margin-top:10px;"><a href="https://get-job.online/employee/sendagainemail/'.$toto_encode.'" class="btn btn-success" style="margin-right:10px;">Send Again</a><a href="employee/fetchdata/'.$toto_encode.'"  class="btn btn-info">Change Email</a></div>','register_class'=>'alert-success'));

            $this->session->set_flashdata('register_class', 'alert-success');

			redirect($_SERVER['HTTP_REFERER']); 

           

           }

           else

           {

           

           	$this->session->set_flashdata('register','Something went wrong please try again later.');

           	$this->session->set_flashdata('register_class','alert-danger');

        redirect ($_SERVER['HTTP_REFERER']);

           	//echo 'second';

           }			

		}

	}

	else

	{

		     $this->session->set_flashdata('imageerror','The filetype you are attempting to not allowed. Please upload .pdf or .doc file.');

           	$this->session->set_flashdata('imageerror_class','alert-danger');

          // echo 'file type not allowed';

           	redirect ($_SERVER['HTTP_REFERER']);

	}

	}

	else

	{

		$this->session->set_flashdata('emailexist','Email you have entered already registered with us please try again with different one.');

           	$this->session->set_flashdata('emailexist_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);

		//echo 'second last';

	}

}

else

{

	$this->session->set_flashdata('samemail','This email has been registered as a recruiter in our system please try with different email.');

          	$this->session->set_flashdata('samemail_class','alert-danger');

          	redirect ($_SERVER['HTTP_REFERER']);

	//echo 'last';

}

	}





	//if user forget password

	public function email()

	{


			$to=$this->input->post('email');

			$to_result=$this->fetch->checkmail($to);

			if($to_result=='success')

{

               $config = Array(    



      'protocol' => 'sendmail',



      'smtp_host' => 'get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           

             $this->load->library('email', $config);

			$this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Password Recovery. Get-job.online');









$body  = '<i>

		<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>

		<!-- NAME: SELL PRODUCTS -->

		<!--[if gte mso 15]>

		<xml>

			<o:OfficeDocumentSettings>

			<o:AllowPNG/>

			<o:PixelsPerInch>96</o:PixelsPerInch>

			</o:OfficeDocumentSettings>

		</xml>

		<![endif]-->

		<meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title><b>Password Recovery</b></title>

        

    <style type="text/css">

		p{

			margin:10px 0;

			padding:0;

		}

		table{

			border-collapse:collapse;

		}

		h1,h2,h3,h4,h5,h6{

			display:block;

			margin:0;

			padding:0;

		}

		img,a img{

			border:0;

			height:auto;

			outline:none;

			text-decoration:none;

		}

		body,#bodyTable,#bodyCell{

			height:100%;

			margin:0;

			padding:0;

			width:100%;

		}

		.mcnPreviewText{

			display:none !important;

		}

		#outlook a{

			padding:0;

		}

		img{

			-ms-interpolation-mode:bicubic;

		}

		table{

			mso-table-lspace:0pt;

			mso-table-rspace:0pt;

		}

		.ReadMsgBody{

			width:100%;

		}

		.ExternalClass{

			width:100%;

		}

		p,a,li,td,blockquote{

			mso-line-height-rule:exactly;

		}

		a[href^=tel],a[href^=sms]{

			color:inherit;

			cursor:default;

			text-decoration:none;

		}

		p,a,li,td,body,table,blockquote{

			-ms-text-size-adjust:100%;

			-webkit-text-size-adjust:100%;

		}

		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{

			line-height:100%;

		}

		a[x-apple-data-detectors]{

			color:inherit !important;

			text-decoration:none !important;

			font-size:inherit !important;

			font-family:inherit !important;

			font-weight:inherit !important;

			line-height:inherit !important;

		}

		.templateContainer{

			max-width:600px !important;

		}

		a.mcnButton{

			display:block;

		}

		.mcnImage{

			vertical-align:bottom;

		}

		.mcnTextContent{

			word-break:break-word;

		}

		.mcnTextContent img{

			height:auto !important;

		}

		.mcnDividerBlock{

			table-layout:fixed !important;

		}

	/*

	@tab Page

	@section Heading 1

	@style heading 1

	*/

		h1{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:40px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 2

	@style heading 2

	*/

		h2{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:34px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 3

	@style heading 3

	*/

		h3{

			/*@editable*/color:#444444;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:22px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 4

	@style heading 4

	*/

		h4{

			/*@editable*/color:#999999;

			/*@editable*/font-family:Georgia;

			/*@editable*/font-size:20px;

			/*@editable*/font-style:italic;

			/*@editable*/font-weight:normal;

			/*@editable*/line-height:125%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Container Style

	*/

		#templateHeader{

			/*@editable*/background-color:#F7F7F7;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:45px;

		}

	/*

	@tab Header

	@section Header Interior Style

	*/

		.headerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Header

	@section Header Text

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Link

	*/

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Body

	@section Body Container Style

	*/

		#templateBody{

			/*@editable*/background-color:#FFFFFF;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:36px;

			/*@editable*/padding-bottom:45px;

		}

	/*

	@tab Body

	@section Body Interior Style

	*/

		.bodyContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Body

	@section Body Text

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Body

	@section Body Link

	*/

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Footer

	@section Footer Style

	*/

		#templateFooter{

			/*@editable*/background-color:#333333;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:63px;

		}

	/*

	@tab Footer

	@section Footer Interior Style

	*/

		.footerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Footer

	@section Footer Text

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:12px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:center;

		}

	/*

	@tab Footer

	@section Footer Link

	*/

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	@media only screen and (min-width:768px){

		.templateContainer{

			width:600px !important;

		}



}	@media only screen and (max-width: 480px){

		body,table,td,p,a,li,blockquote{

			-webkit-text-size-adjust:none !important;

		}



}	@media only screen and (max-width: 480px){

		body{

			width:100% !important;

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImage{

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{

			max-width:100% !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer{

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupContent{

			padding:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{

			padding-top:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{

			padding-top:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardBottomImageContent{

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockInner{

			padding-top:0 !important;

			padding-bottom:0 !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockOuter{

			padding-top:9px !important;

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnTextContent,.mcnBoxedTextContentColumn{

			padding-right:18px !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{

			padding-right:18px !important;

			padding-bottom:0 !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcpreview-image-uploader{

			display:none !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 1

	@tip Make the first-level headings larger in size for better readability on small screens.

	*/

		h1{

			/*@editable*/font-size:30px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 2

	@tip Make the second-level headings larger in size for better readability on small screens.

	*/

		h2{

			/*@editable*/font-size:26px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 3

	@tip Make the third-level headings larger in size for better readability on small screens.

	*/

		h3{

			/*@editable*/font-size:20px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 4

	@tip Make the fourth-level headings larger in size for better readability on small screens.

	*/

		h4{

			/*@editable*/font-size:18px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Boxed Text

	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Header Text

	@tip Make the header text larger in size for better readability on small screens.

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Body Text

	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Footer Text

	@tip Make the footer content text larger in size for better readability on small screens.

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}</style></head>

    <body>

		<!--*|IF:MC_PREVIEW_TEXT|*-->

		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->

		<!--*|END:IF|*-->

        <center>

            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">

                <tr>

                    <td align="center" valign="top" id="bodyCell">

                        <!-- BEGIN TEMPLATE // -->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tr>

								<td align="center" valign="top" id="templateHeader" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

							<tr>

								<td align="center" valign="top" id="templateBody" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="bodyContainer"><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" align="left" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <h3>You just submitted a request to change your password. you can change the password by clicking below.</h3>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #F15F43;">

                    <tbody>

                        <tr>

                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 13px;">

                                <a class="mcnButton " title="Change password" href="http://www.get-job.online/employee/changepassword/'.$to.'" target="_self" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Change password</a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <strong><span style="font-size:17px">If you have not requested the password change then just ignore their email.</span></strong>

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                            <tr>

								<td align="center" valign="top" id="templateFooter" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">

    <tbody class="mcnFollowBlockOuter">

        <tr>

            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">

    <tbody><tr>

        <td align="center" style="padding-left:9px;padding-right:9px;">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">

                <tbody><tr>

                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">

                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                            <tbody><tr>

                                <td align="center" valign="top">

                                    <!--[if mso]>

                                    <table align="center" border="0" cellspacing="0" cellpadding="0">

                                    <tr>

                                    <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.facebook.com/Get-job-online-715235611999280" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.twitter.com/get-job-online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.instagram.com/getjobonline" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                    <!--[if mso]>

                                    </tr>

                                    </table>

                                    <![endif]-->

                                </td>

                            </tr>

                        </tbody></table>

                    </td>

                </tr>

            </tbody></table>

        </td>

    </tr>

</tbody></table>



            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2017 | All rights reserved.Designed and managed by The Revew.</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                        </table>

                        <!-- // END TEMPLATE -->

                    </td>

                </tr>

            </table>

        </center>

    </body>

</html>





</i>';









            $this->email->message($body);

           if($this->email->send())

           {

           	$this->session->set_flashdata('emailsent','Verification link has been sent to your email.');

           	$this->session->set_flashdata('emailsent_class','alert-success');

           	redirect ($_SERVER['HTTP_REFERER']);

           	

           }

           else

           {

           	$this->session->set_flashdata('emailfailed','Something went wrong please try again later.');

           	$this->session->set_flashdata('emailfailed_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);

           }

       }

       else

       {

       		$this->session->set_flashdata('checkmail','Email address you have entered doesnot exist please try again with registered email.');

           	$this->session->set_flashdata('checkmail_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);

       }

	}



//change forget password

public function changepasswordquery()

	{

	 $email= $this->input->post('email');

	 $this->session->set_userdata('email',$email);

	$password= $this->input->post('password');

	 $data=['password'=>$password];

	

	 if($this->fetch->changepasswordd($data))

	 {

	 		$this->session->set_flashdata('passwordchanged','Your password successfully changed. Now you able to login with new password.');

           	$this->session->set_flashdata('passwordchanged_class','alert-success');



           	redirect (base_url().'employee/login');

	 }

		

	}



//employer change password

public function changepassword()

	{

		 $email=$this->uri->segment(3);

		 $jobs=$this->fetch->alljobs();



		 $this->load->view('changepassword',['email'=>$email,'jobs'=>$jobs]);	

	}

public function verificationemailagain1()

	{

		$form=$this->input->post('email');
		print_r($form);
		$newhash= mt_rand();
		$to=base64_decode(base64_decode($_GET['email']));

		echo $emaill=$_GET['email'];

		echo $hash=$_GET['hash'];
	}

//if employee visiting with  old verification link
public function verificationemailagainn()

	{


		$newhash= mt_rand();
		$to=base64_decode(base64_decode($this->input->post('email')));

		$emaill=$this->input->post('email');;

		$hash=$form=$this->input->post('hash');;

		

		//$to=base64_decode($to_decode);

		  $config = Array(    



      'protocol' => 'sendmail',



      'smtp_host' => 'get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           

             $this->load->library('email', $config);

			$this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Email Verification. Get job online');


$body  = '<i>

		<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>

		<!-- NAME: FOLLOW UP -->

		<!--[if gte mso 15]>

		<xml>

			<o:OfficeDocumentSettings>

			<o:AllowPNG/>

			<o:PixelsPerInch>96</o:PixelsPerInch>

			</o:OfficeDocumentSettings>

		</xml>

		<![endif]-->

		<meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		

        <title><b>Email Verification</b></title>

    <style type="text/css">

		p{

			margin:10px 0;

			padding:0;

		}

		table{

			border-collapse:collapse;

		}

		h1,h2,h3,h4,h5,h6{

			display:block;

			margin:0;

			padding:0;

		}

		img,a img{

			border:0;

			height:auto;

			outline:none;

			text-decoration:none;

		}

		body,#bodyTable,#bodyCell{

			height:100%;

			margin:0;

			padding:0;

			width:100%;

		}

		.mcnPreviewText{

			display:none !important;

		}

		#outlook a{

			padding:0;

		}

		img{

			-ms-interpolation-mode:bicubic;

		}

		table{

			mso-table-lspace:0pt;

			mso-table-rspace:0pt;

		}

		.ReadMsgBody{

			width:100%;

		}

		.ExternalClass{

			width:100%;

		}

		p,a,li,td,blockquote{

			mso-line-height-rule:exactly;

		}

		a[href^=tel],a[href^=sms]{

			color:inherit;

			cursor:default;

			text-decoration:none;

		}

		p,a,li,td,body,table,blockquote{

			-ms-text-size-adjust:100%;

			-webkit-text-size-adjust:100%;

		}

		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{

			line-height:100%;

		}

		a[x-apple-data-detectors]{

			color:inherit !important;

			text-decoration:none !important;

			font-size:inherit !important;

			font-family:inherit !important;

			font-weight:inherit !important;

			line-height:inherit !important;

		}

		.templateContainer{

			max-width:600px !important;

		}

		a.mcnButton{

			display:block;

		}

		.mcnImage{

			vertical-align:bottom;

		}

		.mcnTextContent{

			word-break:break-word;

		}

		.mcnTextContent img{

			height:auto !important;

		}

		.mcnDividerBlock{

			table-layout:fixed !important;

		}

	/*

	@tab Page

	@section Heading 1

	@style heading 1

	*/

		h1{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:40px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 2

	@style heading 2

	*/

		h2{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:34px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 3

	@style heading 3

	*/

		h3{

			/*@editable*/color:#444444;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:22px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 4

	@style heading 4

	*/

		h4{

			/*@editable*/color:#999999;

			/*@editable*/font-family:Georgia;

			/*@editable*/font-size:20px;

			/*@editable*/font-style:italic;

			/*@editable*/font-weight:normal;

			/*@editable*/line-height:125%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Container Style

	*/

		#templateHeader{

			/*@editable*/background-color:#F7F7F7;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:54px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Header

	@section Header Interior Style

	*/

		.headerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Header

	@section Header Text

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Link

	*/

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Body

	@section Body Container Style

	*/

		#templateBody{

			/*@editable*/background-color:#FFFFFF;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:27px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Body

	@section Body Interior Style

	*/

		.bodyContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Body

	@section Body Text

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Body

	@section Body Link

	*/

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Footer

	@section Footer Style

	*/

		#templateFooter{

			/*@editable*/background-color:#333333;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:63px;

		}

	/*

	@tab Footer

	@section Footer Interior Style

	*/

		.footerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Footer

	@section Footer Text

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:12px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:center;

		}

	/*

	@tab Footer

	@section Footer Link

	*/

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	@media only screen and (min-width:768px){

		.templateContainer{

			width:600px !important;

		}



}	@media only screen and (max-width: 480px){

		body,table,td,p,a,li,blockquote{

			-webkit-text-size-adjust:none !important;

		}



}	@media only screen and (max-width: 480px){

		body{

			width:100% !important;

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImage{

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{

			max-width:100% !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer{

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupContent{

			padding:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{

			padding-top:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{

			padding-top:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardBottomImageContent{

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockInner{

			padding-top:0 !important;

			padding-bottom:0 !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockOuter{

			padding-top:9px !important;

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnTextContent,.mcnBoxedTextContentColumn{

			padding-right:18px !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{

			padding-right:18px !important;

			padding-bottom:0 !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcpreview-image-uploader{

			display:none !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 1

	@tip Make the first-level headings larger in size for better readability on small screens.

	*/

		h1{

			/*@editable*/font-size:30px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 2

	@tip Make the second-level headings larger in size for better readability on small screens.

	*/

		h2{

			/*@editable*/font-size:26px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 3

	@tip Make the third-level headings larger in size for better readability on small screens.

	*/

		h3{

			/*@editable*/font-size:20px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 4

	@tip Make the fourth-level headings larger in size for better readability on small screens.

	*/

		h4{

			/*@editable*/font-size:18px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Boxed Text

	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Header Text

	@tip Make the header text larger in size for better readability on small screens.

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Body Text

	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Footer Text

	@tip Make the footer content text larger in size for better readability on small screens.

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}</style></head>

    <body>

		<!--*|IF:MC_PREVIEW_TEXT|*-->

		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->

		<!--*|END:IF|*-->

        <center>

            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">

                <tr>

                    <td align="center" valign="top" id="bodyCell">

                        <!-- BEGIN TEMPLATE // -->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tr>

								<td align="center" valign="top" id="templateHeader" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

							<tr>

								<td align="center" valign="top" id="templateBody" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <h1>Dear employee</h1>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/_compresseds/caa9dd71-94fc-463e-b003-026515212665.jpg" width="564" style="max-width:1698px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <p><strong>We are so pleased to have you on boead with us.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent seekers in your field of expertise. There are lots &amp; lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. if you have apply to a specific job then you have to pay a small amount of not more than 25.</p>



<p>In order for you get going with it. You are required to verify your email address.<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please Click the link below to verify your Account:</p>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnDividerBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">

                <table class="mcnDividerContent" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnButtonBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" class="mcnButtonBlockInner" valign="top" align="center">

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #F15F43;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="http://get-job.online/employee/verify/'.$emaill.'/'.$newhash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                            <tr>

								<td align="center" valign="top" id="templateFooter" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">

    <tbody class="mcnFollowBlockOuter">

        <tr>

            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">

    <tbody><tr>

        <td align="center" style="padding-left:9px;padding-right:9px;">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">

                <tbody><tr>

                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">

                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                            <tbody><tr>

                                <td align="center" valign="top">

                                    <!--[if mso]>

                                    <table align="center" border="0" cellspacing="0" cellpadding="0">

                                    <tr>

                                    <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://twitter.com/get_job_online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                    <!--[if mso]>

                                    </tr>

                                    </table>

                                    <![endif]-->

                                </td>

                            </tr>

                        </tbody></table>

                    </td>

                </tr>

            </tbody></table>

        </td>

    </tr>

</tbody></table>



            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2017. All rights reserved.Designed and Managed by The Revew</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                        </table>

                        <!-- // END TEMPLATE -->

                    </td>

                </tr>

            </table>

        </center>

    </body>

</html>





		</i>';


            $this->email->message($body);

           if($this->email->send())

           {
$this->update->updatehash($emaill,$newhash);
           $this->session->set_flashdata('emailagain1','An email has been sent to your email '.$to.'. Check your Inbox/Spam folder if the email appears in the spam folder. Please click on not spam and proceed further by clicking on the link given in the email.</div>');
           
           	$this->session->set_flashdata('emailagain1_class','alert-success');

			redirect($_SERVER['HTTP_REFERER']);

           	

           }

           else

           {

           		$this->session->set_flashdata('emailagain1','Something went wrong please try again later.');

           		$this->session->set_flashdata('emailagain1_class','alert-danger');

           		redirect ($_SERVER['HTTP_REFERER']);

           }

}

//end



public function verificationemailagain()

	{


		$newhash= mt_rand();
		$to=base64_decode(base64_decode($_GET['email']));

		$emaill=$_GET['email'];

		$hash=$_GET['hash'];

		

		//$to=base64_decode($to_decode);

		  $config = Array(    



      'protocol' => 'sendmail',



      'smtp_host' => 'get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           

             $this->load->library('email', $config);

			$this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Email Verification. Get job online');



		/*$this->load->library('email');

            $config['protocol']='smtp';

            $config['smtp_host']='get-job.online';

            $config['smtp_port']='587';

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

            $this->email->subject('Email Verification');*/







$body  = '<i>

		<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>

		<!-- NAME: FOLLOW UP -->

		<!--[if gte mso 15]>

		<xml>

			<o:OfficeDocumentSettings>

			<o:AllowPNG/>

			<o:PixelsPerInch>96</o:PixelsPerInch>

			</o:OfficeDocumentSettings>

		</xml>

		<![endif]-->

		<meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		

        <title><b>Email Verification</b></title>

    <style type="text/css">

		p{

			margin:10px 0;

			padding:0;

		}

		table{

			border-collapse:collapse;

		}

		h1,h2,h3,h4,h5,h6{

			display:block;

			margin:0;

			padding:0;

		}

		img,a img{

			border:0;

			height:auto;

			outline:none;

			text-decoration:none;

		}

		body,#bodyTable,#bodyCell{

			height:100%;

			margin:0;

			padding:0;

			width:100%;

		}

		.mcnPreviewText{

			display:none !important;

		}

		#outlook a{

			padding:0;

		}

		img{

			-ms-interpolation-mode:bicubic;

		}

		table{

			mso-table-lspace:0pt;

			mso-table-rspace:0pt;

		}

		.ReadMsgBody{

			width:100%;

		}

		.ExternalClass{

			width:100%;

		}

		p,a,li,td,blockquote{

			mso-line-height-rule:exactly;

		}

		a[href^=tel],a[href^=sms]{

			color:inherit;

			cursor:default;

			text-decoration:none;

		}

		p,a,li,td,body,table,blockquote{

			-ms-text-size-adjust:100%;

			-webkit-text-size-adjust:100%;

		}

		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{

			line-height:100%;

		}

		a[x-apple-data-detectors]{

			color:inherit !important;

			text-decoration:none !important;

			font-size:inherit !important;

			font-family:inherit !important;

			font-weight:inherit !important;

			line-height:inherit !important;

		}

		.templateContainer{

			max-width:600px !important;

		}

		a.mcnButton{

			display:block;

		}

		.mcnImage{

			vertical-align:bottom;

		}

		.mcnTextContent{

			word-break:break-word;

		}

		.mcnTextContent img{

			height:auto !important;

		}

		.mcnDividerBlock{

			table-layout:fixed !important;

		}

	/*

	@tab Page

	@section Heading 1

	@style heading 1

	*/

		h1{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:40px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 2

	@style heading 2

	*/

		h2{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:34px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 3

	@style heading 3

	*/

		h3{

			/*@editable*/color:#444444;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:22px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 4

	@style heading 4

	*/

		h4{

			/*@editable*/color:#999999;

			/*@editable*/font-family:Georgia;

			/*@editable*/font-size:20px;

			/*@editable*/font-style:italic;

			/*@editable*/font-weight:normal;

			/*@editable*/line-height:125%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Container Style

	*/

		#templateHeader{

			/*@editable*/background-color:#F7F7F7;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:54px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Header

	@section Header Interior Style

	*/

		.headerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Header

	@section Header Text

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Link

	*/

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Body

	@section Body Container Style

	*/

		#templateBody{

			/*@editable*/background-color:#FFFFFF;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:27px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Body

	@section Body Interior Style

	*/

		.bodyContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Body

	@section Body Text

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Body

	@section Body Link

	*/

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Footer

	@section Footer Style

	*/

		#templateFooter{

			/*@editable*/background-color:#333333;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:63px;

		}

	/*

	@tab Footer

	@section Footer Interior Style

	*/

		.footerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Footer

	@section Footer Text

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:12px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:center;

		}

	/*

	@tab Footer

	@section Footer Link

	*/

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	@media only screen and (min-width:768px){

		.templateContainer{

			width:600px !important;

		}



}	@media only screen and (max-width: 480px){

		body,table,td,p,a,li,blockquote{

			-webkit-text-size-adjust:none !important;

		}



}	@media only screen and (max-width: 480px){

		body{

			width:100% !important;

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImage{

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{

			max-width:100% !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer{

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupContent{

			padding:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{

			padding-top:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{

			padding-top:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardBottomImageContent{

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockInner{

			padding-top:0 !important;

			padding-bottom:0 !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockOuter{

			padding-top:9px !important;

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnTextContent,.mcnBoxedTextContentColumn{

			padding-right:18px !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{

			padding-right:18px !important;

			padding-bottom:0 !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcpreview-image-uploader{

			display:none !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 1

	@tip Make the first-level headings larger in size for better readability on small screens.

	*/

		h1{

			/*@editable*/font-size:30px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 2

	@tip Make the second-level headings larger in size for better readability on small screens.

	*/

		h2{

			/*@editable*/font-size:26px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 3

	@tip Make the third-level headings larger in size for better readability on small screens.

	*/

		h3{

			/*@editable*/font-size:20px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 4

	@tip Make the fourth-level headings larger in size for better readability on small screens.

	*/

		h4{

			/*@editable*/font-size:18px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Boxed Text

	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Header Text

	@tip Make the header text larger in size for better readability on small screens.

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Body Text

	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Footer Text

	@tip Make the footer content text larger in size for better readability on small screens.

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}</style></head>

    <body>

		<!--*|IF:MC_PREVIEW_TEXT|*-->

		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->

		<!--*|END:IF|*-->

        <center>

            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">

                <tr>

                    <td align="center" valign="top" id="bodyCell">

                        <!-- BEGIN TEMPLATE // -->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tr>

								<td align="center" valign="top" id="templateHeader" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

							<tr>

								<td align="center" valign="top" id="templateBody" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <h1>Dear employee</h1>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/_compresseds/caa9dd71-94fc-463e-b003-026515212665.jpg" width="564" style="max-width:1698px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <p><strong>We are so pleased to have you on boead with us.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent seekers in your field of expertise. There are lots &amp; lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. if you have apply to a specific job then you have to pay a small amount of not more than 25.</p>



<p>In order for you get going with it. You are required to verify your email address.<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please Click the link below to verify your Account:</p>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnDividerBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">

                <table class="mcnDividerContent" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnButtonBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" class="mcnButtonBlockInner" valign="top" align="center">

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #F15F43;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="http://get-job.online/employee/verify/'.$emaill.'/'.$newhash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                            <tr>

								<td align="center" valign="top" id="templateFooter" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">

    <tbody class="mcnFollowBlockOuter">

        <tr>

            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">

    <tbody><tr>

        <td align="center" style="padding-left:9px;padding-right:9px;">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">

                <tbody><tr>

                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">

                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                            <tbody><tr>

                                <td align="center" valign="top">

                                    <!--[if mso]>

                                    <table align="center" border="0" cellspacing="0" cellpadding="0">

                                    <tr>

                                    <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://twitter.com/get_job_online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                    <!--[if mso]>

                                    </tr>

                                    </table>

                                    <![endif]-->

                                </td>

                            </tr>

                        </tbody></table>

                    </td>

                </tr>

            </tbody></table>

        </td>

    </tr>

</tbody></table>



            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2017. All rights reserved.Designed and Managed by The Revew</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                        </table>

                        <!-- // END TEMPLATE -->

                    </td>

                </tr>

            </table>

        </center>

    </body>

</html>





		</i>';



/* '<i>

	<html>

<head>

<style>

	.aa

	{

	background-color:white;

	border:2px solid green;

	color:green;

	border-radius:3px;

	padding:10px 25px;

	cursor:pointer; 

	}

	.aa:hover

	

	{

	background-color:green;

	color:white;

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

				<a href="http://www.store.matrimony.solutions/" target="_blank"><img src="http://www.matrimony.solutions/images/loogo.png"  alt="Matrimony.solutions" ></a>

			</div>

			<div class="row" style="text-align:center; margin-left:23%;">

		<ul>

  <li><a class="active" href="http://test.autorevew.com/jobs_codeigniter"><font color="#4d4d4d">Home</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter/employer"><font color="#4d4d4d">Employee</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter/recruiter"><font color="#4d4d4d">Employer</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter"><font color="#4d4d4d">Jobs</font></a></li>

</ul>

</div>

		</div>

		<div class="row" style="text-align:center;">

			<div class="col-md-offset-4 col-md-4">

				<a href="http://www.matrimony.solutions/" target="_blank"><img src="http://aes.az/adminpanel/pages/images/Full-HD-Business-People-Wallpaper.jpg" width="70%" height="50%"/></a>

			</div>

		</div>	

		<div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">

				<div class="col-md-offset-2 col-md-8">

					 <p style="color:#404040;  font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					Dear Employee,



					</p>

<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					We are so pleased to have you on boaed with us. As you are now a part of our family you can now search and pinpoint the talent seekers in your field of expertise. There are lots and lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. If you have apply to a specific job then you have to pay a small amount of not more than Rs. 25.

					</p>

<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					In order for you to get going with it. You are required to verify your email address.

</p>

<p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">

Please click the link below to verify your email address:

</p>

					 

				</div>

			</div>

			<div class="row" style="text-align:center;">

				<a href="http://get-job.online/employer/verify/'.$to.'"style="text-decoration:none;"><input type="submit" class="aa" value="Verify Now"></a>

			</div>	



			<div class="row">

				<div class="col-md-12" style="text-align:center;">

				<p><b>Follow Us on:</b></p>

													<a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>

                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>

                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>

                                           

				</div>

				

			</div>		

	</body>

	</html>

	</i>';*/

 









            $this->email->message($body);

           if($this->email->send())

           {
 			 $this->update->updatehash($emaill,$newhash);
           	$this->session->set_flashdata('emailagain','An email has been sent to your email '.$to.'. Check your Inbox/Spam folder if the email appears in the spam folder. Please click on not spam and proceed further by clicking on the link given in the email.</div>');
         	$this->session->set_flashdata('emailagain_class','alert-success');
			redirect($_SERVER['HTTP_REFERER']);
           }

           else

           {

           		$this->session->set_flashdata('emailagain','Something went wrong please try again later.');
				$this->session->set_flashdata('emailagain_class','alert-danger');
				redirect ($_SERVER['HTTP_REFERER']);

           }

}





	public function sendagainemail()

	{

		$to_decode=$this->uri->segment(3);

		$to=$this->uri->segment(3);

		//$to=base64_decode($to_decode);
		$emaill=$to;
		$newhash=mt_rand();
		  $config = Array(    



      'protocol' => 'sendmail',



      'smtp_host' => 'get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           

             $this->load->library('email', $config);

			$this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Email Verification. Get job online');



		/*$this->load->library('email');

            $config['protocol']='smtp';

            $config['smtp_host']='get-job.online';

            $config['smtp_port']='587';

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

            $this->email->subject('Email Verification');*/







$body  = '<i>

		<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>

		<!-- NAME: FOLLOW UP -->

		<!--[if gte mso 15]>

		<xml>

			<o:OfficeDocumentSettings>

			<o:AllowPNG/>

			<o:PixelsPerInch>96</o:PixelsPerInch>

			</o:OfficeDocumentSettings>

		</xml>

		<![endif]-->

		<meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		

        <title><b>Email Verification</b></title>

    <style type="text/css">

		p{

			margin:10px 0;

			padding:0;

		}

		table{

			border-collapse:collapse;

		}

		h1,h2,h3,h4,h5,h6{

			display:block;

			margin:0;

			padding:0;

		}

		img,a img{

			border:0;

			height:auto;

			outline:none;

			text-decoration:none;

		}

		body,#bodyTable,#bodyCell{

			height:100%;

			margin:0;

			padding:0;

			width:100%;

		}

		.mcnPreviewText{

			display:none !important;

		}

		#outlook a{

			padding:0;

		}

		img{

			-ms-interpolation-mode:bicubic;

		}

		table{

			mso-table-lspace:0pt;

			mso-table-rspace:0pt;

		}

		.ReadMsgBody{

			width:100%;

		}

		.ExternalClass{

			width:100%;

		}

		p,a,li,td,blockquote{

			mso-line-height-rule:exactly;

		}

		a[href^=tel],a[href^=sms]{

			color:inherit;

			cursor:default;

			text-decoration:none;

		}

		p,a,li,td,body,table,blockquote{

			-ms-text-size-adjust:100%;

			-webkit-text-size-adjust:100%;

		}

		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{

			line-height:100%;

		}

		a[x-apple-data-detectors]{

			color:inherit !important;

			text-decoration:none !important;

			font-size:inherit !important;

			font-family:inherit !important;

			font-weight:inherit !important;

			line-height:inherit !important;

		}

		.templateContainer{

			max-width:600px !important;

		}

		a.mcnButton{

			display:block;

		}

		.mcnImage{

			vertical-align:bottom;

		}

		.mcnTextContent{

			word-break:break-word;

		}

		.mcnTextContent img{

			height:auto !important;

		}

		.mcnDividerBlock{

			table-layout:fixed !important;

		}

	/*

	@tab Page

	@section Heading 1

	@style heading 1

	*/

		h1{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:40px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 2

	@style heading 2

	*/

		h2{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:34px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 3

	@style heading 3

	*/

		h3{

			/*@editable*/color:#444444;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:22px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 4

	@style heading 4

	*/

		h4{

			/*@editable*/color:#999999;

			/*@editable*/font-family:Georgia;

			/*@editable*/font-size:20px;

			/*@editable*/font-style:italic;

			/*@editable*/font-weight:normal;

			/*@editable*/line-height:125%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Container Style

	*/

		#templateHeader{

			/*@editable*/background-color:#F7F7F7;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:54px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Header

	@section Header Interior Style

	*/

		.headerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Header

	@section Header Text

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Link

	*/

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Body

	@section Body Container Style

	*/

		#templateBody{

			/*@editable*/background-color:#FFFFFF;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:27px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Body

	@section Body Interior Style

	*/

		.bodyContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Body

	@section Body Text

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Body

	@section Body Link

	*/

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Footer

	@section Footer Style

	*/

		#templateFooter{

			/*@editable*/background-color:#333333;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:63px;

		}

	/*

	@tab Footer

	@section Footer Interior Style

	*/

		.footerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Footer

	@section Footer Text

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:12px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:center;

		}

	/*

	@tab Footer

	@section Footer Link

	*/

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	@media only screen and (min-width:768px){

		.templateContainer{

			width:600px !important;

		}



}	@media only screen and (max-width: 480px){

		body,table,td,p,a,li,blockquote{

			-webkit-text-size-adjust:none !important;

		}



}	@media only screen and (max-width: 480px){

		body{

			width:100% !important;

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImage{

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{

			max-width:100% !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer{

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupContent{

			padding:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{

			padding-top:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{

			padding-top:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardBottomImageContent{

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockInner{

			padding-top:0 !important;

			padding-bottom:0 !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockOuter{

			padding-top:9px !important;

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnTextContent,.mcnBoxedTextContentColumn{

			padding-right:18px !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{

			padding-right:18px !important;

			padding-bottom:0 !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcpreview-image-uploader{

			display:none !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 1

	@tip Make the first-level headings larger in size for better readability on small screens.

	*/

		h1{

			/*@editable*/font-size:30px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 2

	@tip Make the second-level headings larger in size for better readability on small screens.

	*/

		h2{

			/*@editable*/font-size:26px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 3

	@tip Make the third-level headings larger in size for better readability on small screens.

	*/

		h3{

			/*@editable*/font-size:20px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 4

	@tip Make the fourth-level headings larger in size for better readability on small screens.

	*/

		h4{

			/*@editable*/font-size:18px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Boxed Text

	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Header Text

	@tip Make the header text larger in size for better readability on small screens.

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Body Text

	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Footer Text

	@tip Make the footer content text larger in size for better readability on small screens.

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}</style></head>

    <body>

		<!--*|IF:MC_PREVIEW_TEXT|*-->

		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->

		<!--*|END:IF|*-->

        <center>

            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">

                <tr>

                    <td align="center" valign="top" id="bodyCell">

                        <!-- BEGIN TEMPLATE // -->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tr>

								<td align="center" valign="top" id="templateHeader" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

							<tr>

								<td align="center" valign="top" id="templateBody" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <h1>Dear employee</h1>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/_compresseds/caa9dd71-94fc-463e-b003-026515212665.jpg" width="564" style="max-width:1698px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <p><strong>We are so pleased to have you on boead with us.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent seekers in your field of expertise. There are lots &amp; lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. if you have apply to a specific job then you have to pay a small amount of not more than 25.</p>



<p>In order for you get going with it. You are required to verify your email address.<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please Click the link below to verify your Account:</p>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnDividerBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">

                <table class="mcnDividerContent" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnButtonBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" class="mcnButtonBlockInner" valign="top" align="center">

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #F15F43;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="http://get-job.online/employee/verify/'.$to_encode.'/'.$hash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                            <tr>

								<td align="center" valign="top" id="templateFooter" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">

    <tbody class="mcnFollowBlockOuter">

        <tr>

            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">

    <tbody><tr>

        <td align="center" style="padding-left:9px;padding-right:9px;">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">

                <tbody><tr>

                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">

                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                            <tbody><tr>

                                <td align="center" valign="top">

                                    <!--[if mso]>

                                    <table align="center" border="0" cellspacing="0" cellpadding="0">

                                    <tr>

                                    <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://twitter.com/get_job_online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                    <!--[if mso]>

                                    </tr>

                                    </table>

                                    <![endif]-->

                                </td>

                            </tr>

                        </tbody></table>

                    </td>

                </tr>

            </tbody></table>

        </td>

    </tr>

</tbody></table>



            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2017. All rights reserved.Designed and Managed by The Revew</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                        </table>

                        <!-- // END TEMPLATE -->

                    </td>

                </tr>

            </table>

        </center>

    </body>

</html>





		</i>';



/* '<i>

	<html>

<head>

<style>

	.aa

	{

	background-color:white;

	border:2px solid green;

	color:green;

	border-radius:3px;

	padding:10px 25px;

	cursor:pointer; 

	}

	.aa:hover

	

	{

	background-color:green;

	color:white;

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

				<a href="http://www.store.matrimony.solutions/" target="_blank"><img src="http://www.matrimony.solutions/images/loogo.png"  alt="Matrimony.solutions" ></a>

			</div>

			<div class="row" style="text-align:center; margin-left:23%;">

		<ul>

  <li><a class="active" href="http://test.autorevew.com/jobs_codeigniter"><font color="#4d4d4d">Home</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter/employer"><font color="#4d4d4d">Employee</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter/recruiter"><font color="#4d4d4d">Employer</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter"><font color="#4d4d4d">Jobs</font></a></li>

</ul>

</div>

		</div>

		<div class="row" style="text-align:center;">

			<div class="col-md-offset-4 col-md-4">

				<a href="http://www.matrimony.solutions/" target="_blank"><img src="http://aes.az/adminpanel/pages/images/Full-HD-Business-People-Wallpaper.jpg" width="70%" height="50%"/></a>

			</div>

		</div>	

		<div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">

				<div class="col-md-offset-2 col-md-8">

					 <p style="color:#404040;  font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					Dear Employee,



					</p>

<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					We are so pleased to have you on boaed with us. As you are now a part of our family you can now search and pinpoint the talent seekers in your field of expertise. There are lots and lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. If you have apply to a specific job then you have to pay a small amount of not more than Rs. 25.

					</p>

<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					In order for you to get going with it. You are required to verify your email address.

</p>

<p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">

Please click the link below to verify your email address:

</p>

					 

				</div>

			</div>

			<div class="row" style="text-align:center;">

				<a href="http://get-job.online/employer/verify/'.$to.'"style="text-decoration:none;"><input type="submit" class="aa" value="Verify Now"></a>

			</div>	



			<div class="row">

				<div class="col-md-12" style="text-align:center;">

				<p><b>Follow Us on:</b></p>

													<a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>

                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>

                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>

                                           

				</div>

				

			</div>		

	</body>

	</html>

	</i>';*/

 









            $this->email->message($body);

           if($this->email->send())

           {

           $this->session->set_flashdata('emailagain','An email has been sent to your email '.$to.'. Check your inbox and proceed further by clicking on the link given in the email.If you wish to change your email address click below. </br><div style="text-align:center; margin-top:10px;"><a href="employee/fetchdata/'.$to.'"  class="btn btn-info">Change Email</a></div>');
           $this->update->updatehash($emaill,$newhash);
           	$this->session->set_flashdata('emailagain_class','alert-success');

			redirect($_SERVER['HTTP_REFERER']);

           	

           }

           else

           {

           	$this->session->set_flashdata('emailagain','Something went wrong please try again later.');

           	$this->session->set_flashdata('emailagain_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);

           }





	}



	public function fetchdata()

	{

		

		$to=$this->uri->segment(3);



		$data=$this->fetch->fetchdataemployer($to);

		$this->load->view('changeemployeremail',['data'=>$data]);

		//if($data!='failed')

		//{

		//	$uid=$this->fetch->updateemployeremail($data);

		//}

	}



	public function changeemail()

	{

		$id=$this->session->userdata('employer_id');

		$to=$this->input->post('email');

		$result=$this->fetch->checkmailemployer($to);

		if($result=='failed')

		{

			if($this->fetch->changeemployeremail($to))

			{

				 $config = Array(    



      'protocol' => 'sendmail',



      'smtp_host' => 'get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           

             $this->load->library('email', $config);

			$this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Email Verification. Get job online');



		/*$this->load->library('email');

            $config['protocol']='smtp';

            $config['smtp_host']='get-job.online';

            $config['smtp_port']='587';

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

            $this->email->subject('Email Verification');*/







$body  = '<i>

	<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

	<head>

		<!-- NAME: FOLLOW UP -->

		<!--[if gte mso 15]>

		<xml>

			<o:OfficeDocumentSettings>

			<o:AllowPNG/>

			<o:PixelsPerInch>96</o:PixelsPerInch>

			</o:OfficeDocumentSettings>

		</xml>

		<![endif]-->

		<meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

		

        

    <style type="text/css">

		p{

			margin:10px 0;

			padding:0;

		}

		table{

			border-collapse:collapse;

		}

		h1,h2,h3,h4,h5,h6{

			display:block;

			margin:0;

			padding:0;

		}

		img,a img{

			border:0;

			height:auto;

			outline:none;

			text-decoration:none;

		}

		body,#bodyTable,#bodyCell{

			height:100%;

			margin:0;

			padding:0;

			width:100%;

		}

		.mcnPreviewText{

			display:none !important;

		}

		#outlook a{

			padding:0;

		}

		img{

			-ms-interpolation-mode:bicubic;

		}

		table{

			mso-table-lspace:0pt;

			mso-table-rspace:0pt;

		}

		.ReadMsgBody{

			width:100%;

		}

		.ExternalClass{

			width:100%;

		}

		p,a,li,td,blockquote{

			mso-line-height-rule:exactly;

		}

		a[href^=tel],a[href^=sms]{

			color:inherit;

			cursor:default;

			text-decoration:none;

		}

		p,a,li,td,body,table,blockquote{

			-ms-text-size-adjust:100%;

			-webkit-text-size-adjust:100%;

		}

		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{

			line-height:100%;

		}

		a[x-apple-data-detectors]{

			color:inherit !important;

			text-decoration:none !important;

			font-size:inherit !important;

			font-family:inherit !important;

			font-weight:inherit !important;

			line-height:inherit !important;

		}

		.templateContainer{

			max-width:600px !important;

		}

		a.mcnButton{

			display:block;

		}

		.mcnImage{

			vertical-align:bottom;

		}

		.mcnTextContent{

			word-break:break-word;

		}

		.mcnTextContent img{

			height:auto !important;

		}

		.mcnDividerBlock{

			table-layout:fixed !important;

		}

	/*

	@tab Page

	@section Heading 1

	@style heading 1

	*/

		h1{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:40px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 2

	@style heading 2

	*/

		h2{

			/*@editable*/color:#222222;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:34px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Page

	@section Heading 3

	@style heading 3

	*/

		h3{

			/*@editable*/color:#444444;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:22px;

			/*@editable*/font-style:normal;

			/*@editable*/font-weight:bold;

			/*@editable*/line-height:150%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:center;

		}

	/*

	@tab Page

	@section Heading 4

	@style heading 4

	*/

		h4{

			/*@editable*/color:#999999;

			/*@editable*/font-family:Georgia;

			/*@editable*/font-size:20px;

			/*@editable*/font-style:italic;

			/*@editable*/font-weight:normal;

			/*@editable*/line-height:125%;

			/*@editable*/letter-spacing:normal;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Container Style

	*/

		#templateHeader{

			/*@editable*/background-color:#F7F7F7;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:54px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Header

	@section Header Interior Style

	*/

		.headerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Header

	@section Header Text

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Header

	@section Header Link

	*/

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Body

	@section Body Container Style

	*/

		#templateBody{

			/*@editable*/background-color:#FFFFFF;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:27px;

			/*@editable*/padding-bottom:54px;

		}

	/*

	@tab Body

	@section Body Interior Style

	*/

		.bodyContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Body

	@section Body Text

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/color:#808080;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:16px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:left;

		}

	/*

	@tab Body

	@section Body Link

	*/

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{

			/*@editable*/color:#00ADD8;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	/*

	@tab Footer

	@section Footer Style

	*/

		#templateFooter{

			/*@editable*/background-color:#333333;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:45px;

			/*@editable*/padding-bottom:63px;

		}

	/*

	@tab Footer

	@section Footer Interior Style

	*/

		.footerContainer{

			/*@editable*/background-color:transparent;

			/*@editable*/background-image:none;

			/*@editable*/background-repeat:no-repeat;

			/*@editable*/background-position:center;

			/*@editable*/background-size:cover;

			/*@editable*/border-top:0;

			/*@editable*/border-bottom:0;

			/*@editable*/padding-top:0;

			/*@editable*/padding-bottom:0;

		}

	/*

	@tab Footer

	@section Footer Text

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-family:Helvetica;

			/*@editable*/font-size:12px;

			/*@editable*/line-height:150%;

			/*@editable*/text-align:center;

		}

	/*

	@tab Footer

	@section Footer Link

	*/

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{

			/*@editable*/color:#FFFFFF;

			/*@editable*/font-weight:normal;

			/*@editable*/text-decoration:underline;

		}

	@media only screen and (min-width:768px){

		.templateContainer{

			width:600px !important;

		}



}	@media only screen and (max-width: 480px){

		body,table,td,p,a,li,blockquote{

			-webkit-text-size-adjust:none !important;

		}



}	@media only screen and (max-width: 480px){

		body{

			width:100% !important;

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImage{

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{

			max-width:100% !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer{

			min-width:100% !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupContent{

			padding:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{

			padding-top:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{

			padding-top:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardBottomImageContent{

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockInner{

			padding-top:0 !important;

			padding-bottom:0 !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageGroupBlockOuter{

			padding-top:9px !important;

			padding-bottom:9px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnTextContent,.mcnBoxedTextContentColumn{

			padding-right:18px !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{

			padding-right:18px !important;

			padding-bottom:0 !important;

			padding-left:18px !important;

		}



}	@media only screen and (max-width: 480px){

		.mcpreview-image-uploader{

			display:none !important;

			width:100% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 1

	@tip Make the first-level headings larger in size for better readability on small screens.

	*/

		h1{

			/*@editable*/font-size:30px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 2

	@tip Make the second-level headings larger in size for better readability on small screens.

	*/

		h2{

			/*@editable*/font-size:26px !important;

			/*@editable*/line-height:125% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 3

	@tip Make the third-level headings larger in size for better readability on small screens.

	*/

		h3{

			/*@editable*/font-size:20px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Heading 4

	@tip Make the fourth-level headings larger in size for better readability on small screens.

	*/

		h4{

			/*@editable*/font-size:18px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Boxed Text

	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Header Text

	@tip Make the header text larger in size for better readability on small screens.

	*/

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Body Text

	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.

	*/

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{

			/*@editable*/font-size:16px !important;

			/*@editable*/line-height:150% !important;

		}



}	@media only screen and (max-width: 480px){

	/*

	@tab Mobile Styles

	@section Footer Text

	@tip Make the footer content text larger in size for better readability on small screens.

	*/

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{

			/*@editable*/font-size:14px !important;

			/*@editable*/line-height:150% !important;

		}



}</style></head>

    <body>

		<!--*|IF:MC_PREVIEW_TEXT|*-->

		<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->

		<!--*|END:IF|*-->

        <center>

            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">

                <tr>

                    <td align="center" valign="top" id="bodyCell">

                        <!-- BEGIN TEMPLATE // -->

                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tr>

								<td align="center" valign="top" id="templateHeader" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

							<tr>

								<td align="center" valign="top" id="templateBody" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <h1>Dear employee</h1>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">

    <tbody class="mcnImageBlockOuter">

            <tr>

                <td valign="top" style="padding:9px" class="mcnImageBlockInner">

                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">

                        <tbody><tr>

                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">

                                

                                    

                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/_compresseds/caa9dd71-94fc-463e-b003-026515212665.jpg" width="564" style="max-width:1698px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">

                                    

                                

                            </td>

                        </tr>

                    </tbody></table>

                </td>

            </tr>

    </tbody>

</table><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <p><strong>We are so pleased to have you on boead with us.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent seekers in your field of expertise. There are lots &amp; lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. if you have apply to a specific job then you have to pay a small amount of not more than 25.</p>



<p>In order for you get going with it. You are required to verify your email address.<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please Click the link below to verify your Account:</p>



                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnDividerBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">

                <table class="mcnDividerContent" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table class="mcnButtonBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" class="mcnButtonBlockInner" valign="top" align="center">

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #F15F43;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="http://get-job.online/employee/verify/'.$to_encode.'/'.$hash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                            <tr>

								<td align="center" valign="top" id="templateFooter" data-template-container>

									<!--[if (gte mso 9)|(IE)]>

									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">

									<tr>

									<td align="center" valign="top" width="600" style="width:600px;">

									<![endif]-->

									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

										<tr>

                                			<td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">

    <tbody class="mcnFollowBlockOuter">

        <tr>

            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">

    <tbody><tr>

        <td align="center" style="padding-left:9px;padding-right:9px;">

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">

                <tbody><tr>

                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">

                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                            <tbody><tr>

                                <td align="center" valign="top">

                                    <!--[if mso]>

                                    <table align="center" border="0" cellspacing="0" cellpadding="0">

                                    <tr>

                                    <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://twitter.com/get_job_online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                        <!--[if mso]>

                                        <td align="center" valign="top">

                                        <![endif]-->

                                        

                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                        

                                        <!--[if mso]>

                                        </td>

                                        <![endif]-->

                                    

                                    <!--[if mso]>

                                    </tr>

                                    </table>

                                    <![endif]-->

                                </td>

                            </tr>

                        </tbody></table>

                    </td>

                </tr>

            </tbody></table>

        </td>

    </tr>

</tbody></table>



            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">

    <tbody class="mcnDividerBlockOuter">

        <tr>

            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">

                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">

                    <tbody><tr>

                        <td>

                            <span></span>

                        </td>

                    </tr>

                </tbody></table>

<!--            

                <td class="mcnDividerBlockInner" style="padding: 18px;">

                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />

-->

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              	<!--[if mso]>

				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">

				<tr>

				<![endif]-->

			    

				<!--[if mso]>

				<td valign="top" width="600" style="width:600px;">

				<![endif]-->

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2017. All rights reserved.Designed and Managed by The Revew</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>

				<!--[if mso]>

				</td>

				<![endif]-->

                

				<!--[if mso]>

				</tr>

				</table>

				<![endif]-->

            </td>

        </tr>

    </tbody>

</table></td>

										</tr>

									</table>

									<!--[if (gte mso 9)|(IE)]>

									</td>

									</tr>

									</table>

									<![endif]-->

								</td>

                            </tr>

                        </table>

                        <!-- // END TEMPLATE -->

                    </td>

                </tr>

            </table>

        </center>

    </body>

</html>





			</i>'; /*'<i>

	<html>

<head>

<style>

	.aa

	{

	background-color:white;

	border:2px solid green;

	color:green;

	border-radius:3px;

	padding:10px 25px;

	cursor:pointer; 

	}

	.aa:hover

	

	{

	background-color:green;

	color:white;

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

				<a href="http://www.store.matrimony.solutions/" target="_blank"><img src="http://www.matrimony.solutions/images/loogo.png"  alt="Matrimony.solutions" ></a>

			</div>

			<div class="row" style="text-align:center; margin-left:23%;">

		<ul>

  <li><a class="active" href="http://test.autorevew.com/jobs_codeigniter"><font color="#4d4d4d">Home</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter/employer"><font color="#4d4d4d">Employee</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter/recruiter"><font color="#4d4d4d">Employer</font></a></li>

  <li><a href="http://www.test.autorevew.com/jobs_codeigniter"><font color="#4d4d4d">Jobs</font></a></li>

</ul>

</div>

		</div>

		<div class="row" style="text-align:center;">

			<div class="col-md-offset-4 col-md-4">

				<a href="http://www.matrimony.solutions/" target="_blank"><img src="http://aes.az/adminpanel/pages/images/Full-HD-Business-People-Wallpaper.jpg" width="70%" height="50%"/></a>

			</div>

		</div>	

		<div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">

				<div class="col-md-offset-2 col-md-8">

					 <p style="color:#404040;  font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					Dear Employee,



					</p>

<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					We are so pleased to have you on boaed with us. As you are now a part of our family you can now search and pinpoint the talent seekers in your field of expertise. There are lots and lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. If you have apply to a specific job then you have to pay a small amount of not more than Rs. 25.

					</p>

<p style="color:#404040; text-align:center; font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0">

					In order for you to get going with it. You are required to verify your email address.

</p>

<p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">

Please click the link below to verify your email address:

</p>

					 

				</div>

			</div>

			<div class="row" style="text-align:center;">

				<a href="http://test.autorevew.com/jobs_codeigniter/employer/verify/'.$to.'"style="text-decoration:none;"><input type="submit" class="aa" value="Verify Now"></a>

			</div>	



			<div class="row">

				<div class="col-md-12" style="text-align:center;">

				<p><b>Follow Us on:</b></p>

													<a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>

                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>

                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>

                                           

				</div>

				

			</div>		

	</body>

	</html>

	</i>';*/

 









            $this->email->message($body);

           if($this->email->send())

           {

           $this->session->set_flashdata('emailagain','An email has been sent to your email '.$to.'. Check your inbox and proceed further by clicking on the link given in the email.');

           	$this->session->set_flashdata('emailagain_class','alert-success');

			redirect($_SERVER['HTTP_REFERER']);

           	

           }

           else

           {

           	$this->session->set_flashdata('emailagain','Something went wrong please try again later.');

           	$this->session->set_flashdata('emailagain_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);

           }



			}

			

		}

		else

		{

				$this->session->set_flashdata('emailexist','Email you have entered already registered with us please try again with different one.');

           		$this->session->set_flashdata('emailexist_class','alert-danger');

           		redirect ($_SERVER['HTTP_REFERER']);

		}

	}



public function verify()

{

	$email=$this->uri->segment(3);

	$hash=$this->uri->segment(4);


	$data=$this->fetch->verifyemployerfetch($email,$hash);

	//$this->fetch->verifyemployerstatus($email,$hash);

	$this->load->view('verifyemployer',['data'=>$data]);

}

 

 public function paylater()

 {

 	$email=$this->input->get('email', TRUE);

 	$fetchh= $this->fetch->fetchlateremployee($email);

 	$session=$this->session->set_userdata('employe_id',$fetchh);

 	$data= $this->fetch->fetchemployeprofile();

 	$jobs= $this->fetch->alljobs();

 	$insert=array('employee_paymentstatus'=>'0');

 	$this->update->updatestatus($insert);

	redirect(base_url().'employee/dashboard');
	//$this->load->view('employerprofile',['data'=>$data,'jobs'=>$jobs]);

 }
 

 public function editprofile()

 {

  	$uid=$this->session->userdata('employe_id');
  	if(!empty($uid))
  	{

  	$category=$this->search->category();

	$result=$this->fetch->fetchemployeedit($uid);

 	$this->load->view('editemployerprofile',['data'=>$result,'category'=>$category]);

 
 }
 else
 {
 	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'employee/login');
 }
}

 public function jobdetailnosignin()

 {
 
	 $category=$this->search->category();

	$uri=$this->input->get('uid');
	$udatejobview=$this->update->updatejobview($uri);

	$appliedjob=$this->fetch->appliedjobs($uri);

	

 	$this->insert->employerincrement($uri);

 	$job=$this->fetch->singlejob($uri);

 	 $rid=$this->fetch->recruiterid($uri);

 	  $rrid=$this->fetch->fetchemployer($rid);
 	

 	  $this->load->view('jobdetail_nosignin',['job'=>$job,'employer_id'=>$rrid,'category'=>$category,'appliedjob'=>$appliedjob]);
}



 public function jobdetail()

 {


	$uri=$this->input->get('uid');
	$udatejobview=$this->update->updatejobview($uri);
 	$data=$this->fetch->fetchemployeprofile();

	 $uid=$this->session->userdata('employe_id');
	 if(!empty($uid))
	 {

	 $category=$this->search->category();

	$jid=$uri;
	$applystatus=$this->fetch->fetchstatus($jid,$uid);
	$appliedjob=$this->fetch->appliedjobs($uri);

	

	$apply=$this->fetch->applyfetch($uid);

	

	if($apply!='null')

 	{

 	$applyjob=array();



 	foreach ($apply as $value) {

 		$urii=$value['applyjob_jid'];

 		$applyjob=$this->fetch->singlejob($urii);

 	}

 }

 else

 {

 	$applyjob='null';

 }



  $data=$this->fetch->fetchemployeprofile();

 	$this->insert->employerincrement($uri);

 	$job=$this->fetch->singlejob($uri);

 	 $rid=$this->fetch->recruiterid($uri);

 	  $rrid=$this->fetch->fetchemployer($rid);
 	
 	  if($this->input->get('status'))
 	  {
 	  		$statuss=$this->input->get('status');
 	  	$this->load->view('employerjobdescription',['status'=>$statuss,'applystatus'=>$applystatus,'job'=>$job,'data'=>$data,'employer_id'=>$rrid,'apply'=>$applyjob,'category'=>$category,'appliedjob'=>$appliedjob]);

 	  }
 	  else
 	  {
 	  $this->load->view('employerjobdescription',['applystatus'=>$applystatus,'job'=>$job,'data'=>$data,'employer_id'=>$rrid,'apply'=>$applyjob,'category'=>$category,'appliedjob'=>$appliedjob]);
 	}
}
else
{
	if(!empty($this->input->get('signin')))
	{
		 $jjid=$this->input->get('uid');
		$this->session->set_userdata('linkid',$jjid);
		//echo 'link='.$this->session->userdata('linkid');
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'employee/login');
	}
	else
	{
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'employee/login');
	}
}


 	}


//if employee share to facebook
 	 public function jobdetailshare()

 {


 	$data=$this->fetch->fetchemployeprofile();

	 $uid=$this->session->userdata('employe_id');
	 if(!empty($uid))
	 {

	 $category=$this->search->category();

	$uri=$this->input->segment(3);
	$jid=$uri;
	$applystatus=$this->fetch->fetchstatus($jid,$uid);
	$appliedjob=$this->fetch->appliedjobs($uri);

	

	$apply=$this->fetch->applyfetch($uid);

	

	if($apply!='null')

 	{

 	$applyjob=array();



 	foreach ($apply as $value) {

 		$urii=$value['jid'];

 		$applyjob=$this->fetch->singlejob($urii);

 	}

 }

 else

 {

 	$applyjob='null';

 }



  $data=$this->fetch->fetchemployeprofile();

 	$this->insert->employerincrement($uri);

 	$job=$this->fetch->singlejob($uri);

 	 $rid=$this->fetch->recruiterid($uri);

 	  $rrid=$this->fetch->fetchemployer($rid);
 	
 	  if($this->input->get('status'))
 	  {
 	  		$statuss=$this->input->get('status');
 	  	$this->load->view('employerjobdescription',['status'=>$statuss,'applystatus'=>$applystatus,'job'=>$job,'data'=>$data,'employer_id'=>$rrid,'apply'=>$applyjob,'category'=>$category,'appliedjob'=>$appliedjob]);

 	  }
 	  else
 	  {
 	  $this->load->view('employerjobdescription',['applystatus'=>$applystatus,'job'=>$job,'data'=>$data,'employer_id'=>$rrid,'apply'=>$applyjob,'category'=>$category,'appliedjob'=>$appliedjob]);
 	}
}
else
{
	if(!empty($this->input->get('signin')))
	{
		 $jjid=$this->input->get('uid');
		$this->session->set_userdata('linkid',$jjid);
		//echo 'link='.$this->session->userdata('linkid');
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'employee/login');
	}
	else
	{
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'employee/login');
	}
}


 	}



 public function login()

 {
 	$category=$this->search->category();
 	
 	if($this->input->get('linkid'))
 	{
 		$linkid=$this->input->get('linkid');
		$this->session->set_userdata('linkid',$linkid);
	}
	if($this->input->get('referral'))
 	{
 		$referralsession=$this->input->get('referral');
		$this->session->set_userdata('referralsession',$referralsession);
	}
		
 	if(empty($_GET['rcompleted']))

		{

 	if(!empty($this->session->userdata('pyuemail')))

 	{

		$this->session->unset_userdata('pyuemail');

 	if($this->uri->segment(3) && $this->uri->segment(4))

 	{	

		$uri=$this->uri->segment(3);

		$urii=$this->uri->segment(4);

		$jobs=$this->fetch->alljobs();

   		$this->load->view('login',['uri'=>$uri,'jobs'=>$jobs,'category'=>$category]);

 	}

 	else

 	{

 		$jobs=$this->fetch->alljobs();

 		$this->load->view('login',['jobs'=>$jobs,'category'=>$category]);

 	}

 }

 else

 {

 	$jobs=$this->fetch->alljobs();
	$this->load->view('login',['jobs'=>$jobs,'category'=>$category]);

 }

 	

 }



 else

 {

 		$completed=$_GET['rcompleted'];

		$this->session->set_userdata('rcompleted',$completed);



			if(!empty($this->session->userdata('pyuemail')))

 	{

		$this->session->unset_userdata('pyuemail');

 	if($this->uri->segment(3) && $this->uri->segment(4))

 	{	

		$uri=$this->uri->segment(3);

		$urii=$this->uri->segment(4);

		$jobs=$this->fetch->alljobs();

		$this->load->view('login',['uri'=>$uri,'jobs'=>$jobs,'category'=>$category]);

 	}

 	else

 	{

 		

 		$jobs=$this->fetch->alljobs();

   

 		$this->load->view('login',['jobs'=>$jobs,'category'=>$category]);

 	}

 }

 else

 {

 	$jobs=$this->fetch->alljobs();

   

 		$this->load->view('login',['jobs'=>$jobs,'category'=>$category]);

 }

 }	

 }

 

 public function loginquery()

	{

 if(!empty($_POST['g-recaptcha-response']))
 {
		$linkid=$this->session->userdata('linkid');
		$referralsession=$this->session->userdata('referralsession');
		$uurl=$this->session->userdata('url');

		 $completed=$this->session->userdata('rcompleted');

		$emaill=$this->input->post('email');

		$passwordd=$this->input->post('password');

		$email=base64_encode(base64_encode($emaill));

		$password=base64_encode(base64_encode($passwordd));

		$fetch=$this->fetch->employelogin( $email,$password );

		//if recruiter signin with recruiter email
		$emailexist=$this->fetch->ifrecruiteremail($email);

		if($emailexist==1)
			{
			$this->session->set_flashdata('emailexistemployee','Email you have enetered is registered as a Recruiter.If you are recruiter then click<a href="https://www.get-job.online/recruiter/login">here</a>for signin.');

			$this->session->set_flashdata('emailexistemployee_class','alert-danger');
			redirect ($_SERVER['HTTP_REFERER']);
			}
			else
			{

		if($fetch=='not success')

		{

			
			
			$this->session->set_flashdata('error','You have entered wrong email or password.');

			$this->session->set_flashdata('error_class','alert-danger');

			redirect ($_SERVER['HTTP_REFERER']);

			}

		



		else

		{

			$fetchhash=$this->fetch->fetchhash($email);

			$checkfetch=$this->fetch->checkemployeeverified( $email,$password );



				if($checkfetch==0)

			{



			$this->session->set_flashdata('error1','You have not verified your email yet. Please complete the verification process. If you wish to send the verification link again. <a href="verificationemailagain?email='.$email.'&hash='.$fetchhash.'">Please click here</a>');

			$this->session->set_flashdata('error_class1','alert-danger');

			redirect ($_SERVER['HTTP_REFERER']);

			}

			elseif($checkfetch==1)

			{



			$this->session->set_flashdata('error2','We are currently going through your profile. After we have reviewed all the information you have provided you will be granted full access to the website');

			$this->session->set_flashdata('error_class2','alert-danger');

			redirect ($_SERVER['HTTP_REFERER']);

			}

			elseif ($checkfetch==3) {

				$this->session->set_flashdata('error3','After scrutinizing your info ou CRT has declined your profile as the info provided by you is not reliable. Please follow the signup again.');

			$this->session->set_flashdata('error_class3','alert-danger');

			redirect ($_SERVER['HTTP_REFERER']);



			}

			else

			{





			 $fetch['id'];

			 $fetch['country'];



			 $this->session->set_userdata('employe_id',$fetch['id']);

			  $this->session->set_userdata('country',$fetch['country']);

			/*$iid=$this->session->userdata('employe_id');

			 $country=$this->session->userdata('country');

			 $this->referrall->updateweeklyemployee($iid);

			  $this->referrall->updatemonthlyemployee($iid);

			$data= $this->fetch->fetchemployeprofile();

			$category=$this->search->category();

			$categoryindia=$this->search->categoryindia();

    		$categorycanada=$this->search->categorycanada();

			$jobs= $this->fetch->alljobs();*/

			if(empty($completed))

			{

			if(!empty($uurl))

			{

				redirect(base_url().$uurl);

			}

			elseif (!empty($linkid)) 
			{
				
				redirect(base_url().'employee/jobdetail?uid='.$linkid);
			}
			elseif (!empty($referralsession)) {

				redirect(base_url().'referral/dashboard');
			}

			else

			{

			redirect(base_url().'employee/dashboard');

			//$this->load->view('employerprofile',['data'=>$data,'categoryindia'=>$categoryindia,'categorycanada'=>$categorycanada,'jobs'=>$jobs,'category'=>$category]);

 			}

 		}

 		else

 		{

 			redirect(base_url().'referral/dashboard');

 		}

			

		}

		

	}
}
}
else
{
	$this->session->set_flashdata('captcha','Error! Captcha code does not match.');
	$this->session->set_flashdata('captcha_class','captcha_class');
	redirect(base_url().'employee/login');
}
}





//if user reached job through index page 

	public function jobdetailid()

	{

		$jobid=$this->session->userdata('job_id');

		//echo $jobid;

	}



	public function profile()

 {

 	

 	 echo $session=$this->session->userdata('employe_id');

 	/*if(!empty($session))

 	{

 	$this->load->view('employerprofile');

 }

 else

 {

 	echo $session;

 	//echo 'failed to open';

 }*/

 }

	 public function logout()

	 {

	 	$this->session->unset_userdata('employe_id');

	 	//$ssession=$this->session->userdata('employe_id');

	 	redirect(base_url());

	 }

	

	public function update()

	{

		 $address=base64_encode(base64_encode($this->input->post('address')));

		  $pincode=$this->input->post('pincode');

		 $qualification=base64_encode(base64_encode($this->input->post('qualification')));

		 $grade=base64_encode(base64_encode($this->input->post('grade')));

		 $experience1=base64_encode(base64_encode($this->input->post('experience1')));

		 $experience2=base64_encode(base64_encode($this->input->post('experience2')));

		 $experience3=base64_encode(base64_encode($this->input->post('experience3')));

		 $experience4=base64_encode(base64_encode($this->input->post('experience4')));

		 $experience5=base64_encode(base64_encode($this->input->post('experience5')));

		 $company1=base64_encode(base64_encode($this->input->post('company1')));

		 $company2=base64_encode(base64_encode($this->input->post('company2')));

		 $company3=base64_encode(base64_encode($this->input->post('company3')));

		 $company4=base64_encode(base64_encode($this->input->post('company4')));

		 $company5=base64_encode(base64_encode($this->input->post('company5')));

         $experience_in1=base64_encode(base64_encode($this->input->post('experience_in1')));

         $experience_in2=base64_encode(base64_encode($this->input->post('experience_in2')));

         $experience_in3=base64_encode(base64_encode($this->input->post('experience_in3')));

         $experience_in4=base64_encode(base64_encode($this->input->post('experience_in4')));

         $experience_in5=base64_encode(base64_encode($this->input->post('experience_in5')));

		 $city=base64_encode(base64_encode($this->input->post('city')));

		 $state=base64_encode(base64_encode($this->input->post('state')));

		  $phone=base64_encode(base64_encode($this->input->post('contact')));

		 

		/*$config= [ 'upload_path' => './resumes/',

					'allowed_types' => 'png|jpg|jpeg|gif|doc'];



					$this->upload->initialize($config);

				

						if($this->upload->do_upload('userfile'))

						{

							

							

		$data = $this->upload->data();

		$image_path = base_url("resumes/" .$data['raw_name'].$data['file_ext']);

       $imagee=$data['raw_name'].$data['file_ext'];

        $this->load->model('update');

		 $address=$this->input->post('address');

		  $pincode=$this->input->post('pincode');

		 $qualification=$this->input->post('qualification');

		 $grade=$this->input->post('grade');

		 $experience=$this->input->post('experience');

		 $company=$this->input->post('company_name');

		 $city=$this->input->post('city');

		 $state=$this->input->post('state');

		  $phone=$this->input->post('contact');

		$resume=$data['raw_name'].$data['file_ext'];*/

		$insert=array(

			

			'employee_address'=>$address,

			'employee_pincode'=>$pincode,

			'employee_qualification'=>$qualification,

			'employee_grade'=>$grade,

			'experience1'=>$experience1,

			'experience2'=>$experience2,

			'experience3'=>$experience3,

			'experience4'=>$experience4,

			'experience5'=>$experience5,

			'company1'=>$company1,

			'company2'=>$company2,

			'company3'=>$company3,

			'company4'=>$company4,

			'company5'=>$company5,

			'experience_in1'=>$experience_in1,

			'experience_in2'=>$experience_in2,

			'experience_in3'=>$experience_in3,

			'experience_in4'=>$experience_in4,

			'experience_in5'=>$experience_in5,

			'employee_city'=>$city,

			'employee_state'=>$state,

			'employee_phone'=>$phone

			//'resume'=>$resume

		);

		

		if($this->update->updateemploye($insert))

		{

			$this->session->set_flashdata('success','You are Successfully Update Your Profile.');

			$this->session->set_flashdata('success_class','alert-success');

			//$data= $this->fetch->fetchemployeprofile();

			//$jobs= $this->fetch->alljobs();

			redirect(base_url().'employee/dashboard');

			// $this->load->view('employerprofile',['data'=>$data,'jobs'=>$jobs]);

		}



//}

/*else

{

	echo 'errror';

}*/

}







public function applycheckbalance()



 {



 	 $uid=$_GET['jid'];

 	 $employer_id=$_GET['recruiter'];

 	  $userid=$this->session->userdata('employe_id');

 	 $date = round(microtime(true) * 1000);

 	$result=$this->fetch->checkbalanceapply();

 	if($result==null)

 	{



 		$fetch=$this->fetch->fetchemployeprofile();

 		$this->load->view('addbalanceemployee',['data'=>$fetch]);

 		//redirect('employer/addbalance');

 		//$this->load->view('payumoneyform');

 	

 	}

 	else

 	{

		$result=$this->insert->decrementemployerbalance();

		$data=array('applyjob_employee_id'=>$userid,'applyjob_jid'=>$uid,'applyjob_date'=>$date,'applyjob_employer_id'=>$employer_id);

		$applyjob=$this->insert->applyjob($data);

 		$this->session->set_flashdata('alert','You have successfully applied for this job.');

		$this->session->set_flashdata('alert_class','alert-success');

		redirect($_SERVER['HTTP_REFERER']);

 	

 	}

 }

 public function addbalance()

 {

$session=$this->session->userdata('employe_id');
 	if(!empty($session))
 	{



 	$fetch=$this->fetch->fetchemployeprofile();

 	

			$category=$this->search->category();

			$jobs= $this->fetch->alljobs();



 	$this->load->view('addbalanceemployee',['data'=>$fetch,'category'=>$category,'job'=>$jobs]);
}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'employee/login');
}
 }

public function addpayment()

 {

 	$amount=$this->input->post('example');

 	print_r($amount);

 }



  public function search()

  {

//$session=$this->session->userdata('employe_id');
//if(!empty($session))
//{
  	$fmax=$this->fetch->fetchmax();

  	  $categories=$this->fetch->fetchcategory();

  	$category1=$this->uri->segment(3);
  	$category=base64_decode(base64_decode($category1));

  	$llocation=$this->input->get('location');

  	
  	$categoryy=$this->search->category();

 	$dataa= $this->fetch->fetchemployeprofile();


  	 $location=$this->input->post('location');

  	 $locationn=ucfirst($this->input->post('location'));

  	 $location1=$locationn;

  	 $job=$this->input->post('job');

  	 if(empty($location) && empty($job) && empty($category))

  	{

  		

  		redirect($_SERVER['HTTP_REFERER']);

  	}

  	else

  	{

  	if(!empty($location) && empty($job) && empty($category))

  	{
  		//echo 'location not empy';
  		//echo $location;

  		$data=$this->search->searchlocation($location,$location1);

  	 $rresult=$data['result'];
  	

  		if($rresult==null)

  		{
  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($rresult!=null)

  		{

  			
  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'balance'=>$dataa,'category'=>$categoryy,'categories'=>$categories]);

  		}

  	}

  	elseif(!empty($job) && empty($location) && empty($category))

  	{

  		//echo 'job not empty';

  		$data=$this->search->searchjob($job);

  		$ddata=$data['result'];

  		if($ddata==null)

  		{	

  			

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($ddata!=null)

  		{


  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}  	

  	}



  	elseif(!empty($category) && empty($job) && empty($location))

  	{
//echo 'category not empty';
  		

  		$data=$this->search->searchjobcategory($category);

  		$employer_id=$data['employer_id'];

  		

  		$rresult=$data['result'];

  		$result=json_decode(json_encode($rresult), true);

  		$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  	

  	}



  	elseif(!empty($location) && !empty($job))

  	{
  		//echo 'location and job not empty';

  		$data=$this->search->searchboth($location,$job,$location1);

  		$rresult=$data['result'];

  		if($rresult==null)

  		{

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		if($rresult!=null)

  		{

  			

  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		//$this->load->view('jobsearchresult');

  	}

  }

/*}
else
{
	$this->session->set_flashdata('session_destroy','Session Destroyed please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'employee/login');
}*/

 }

 public function search2()

  {

$session=$this->session->userdata('employe_id');
if(!empty($session))
{
  	$fmax=$this->fetch->fetchmax();

  	  $categories=$this->fetch->fetchcategory();

  	$location=$this->input->get('location');
  	$category=$this->input->get('category');

  	
  	$categoryy=$this->search->category();

 	$dataa= $this->fetch->fetchemployeprofile();


  	

  	 if(empty($location) && empty($category))

  	{

  		

  		redirect($_SERVER['HTTP_REFERER']);

  	}

  	else

  	{

  	if(!empty($location) && empty($category))

  	{
  		//echo $location;

  		$data=$this->search->searchlocation1($location);

  	 $rresult=$data['result'];
  	

  		if($rresult==null)

  		{
  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($rresult!=null)

  		{

  			
  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'balance'=>$dataa,'category'=>$categoryy,'categories'=>$categories]);

  		}

  	}

  	


  	elseif(!empty($category) && empty($location))

  	{

  		

  		$data=$this->search->searchjobcategory($category);

  		$employer_id=$data['employer_id'];

  		

  		$rresult=$data['result'];

  		$result=json_decode(json_encode($rresult), true);

  		$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  	

  	}



  	elseif(!empty($location))

  	{

  		

  		

  		$data=$this->search->searchboth1($location);

  		$rresult=$data['result'];

  		if($rresult==null)

  		{

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		if($rresult!=null)

  		{

  			

  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		$this->load->view('jobsearchresult');

  	}

  }

}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'employee/login');
}

 }



public function sessionn()

{



	$this->session->set_userdata('qw', '12');

	$a=$this->session->userdata('qw');

	//echo 'hello';

	print_r($a);

}

 

 public function save()

  {

  		$date= date("j");

 		$month= date("m");

 		$year= date("y");

  	$uid=$this->uri->segment(3);

  	$rid=$this->uri->segment(4);



  	$data=array('uid'=>$uid,

  		'recruiter_id'=>$rid,

  		'date'=>$date,

  		'month'=>$month,

  		'year'=>$year);

  	if($this->insert->saverecruiter($data))

  	{

  		echo '<h1 style="text-align:center; color:#F15F43;">Recruiter succerssfully saved into your wishlist.</h1>';

  		?>

  		<script>setTimeout(function(){window.location.href='http://www.get-job.online'},5000);</script>

  		<?php

  		

  	}

  }

 public function wishlist()

 {
 	$appliedjobsnew=$this->fetch->appliedjobsnew();
 	$uid=$this->session->userdata('employe_id');
 	
 	if(!empty($uid))
 	{

 	$result=$this->fetch->fetchwishlist();

	$category=$this->search->category();

 	$data= $this->fetch->fetchemployeprofile();

 	$appliedemployee=$this->fetch->appliedbyemployee($uid);

 	

	if($appliedemployee=='null')

	{

		$appliedjid='null';



	}

	else

	{

	$appliedjid=array();
	$time=array();
	foreach ($appliedemployee as $value) 

	{

		$apply=$value['applyjob_jid'];

		 $appliedjid[] =$this->fetch->singlejobapply($apply);

		 $time[]=$this->fetch->appliedbyemployeetime($uid,$apply);


	}
	

}

 	if($result=='null')

 	{

 		$resultt='null';

 	}

 	else

 	{

 		$resultt=array();

 	foreach ($result as $value) 

 	{

 		$rid=$value['recruiter_id'];

 		$resultt[]=$this->fetch->fetchemployer($rid);

 	}

 }


 	$this->load->view('savedrecruiter',['appliedjobsnew'=>$appliedjobsnew,'appliedtime'=>$time,'data'=>$resultt,'category'=>$category,'dataa'=>$data,'time'=>$result,'appliedjid'=>$appliedjid]);

 	

}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'employee/login');
}
 }



 	public function deletewishlist()

	{

		 $id=$this->uri->segment(3).'</br>';

		 $iid=$this->session->userdata('employe_id');

		if($this->delete->wishlist($id,$iid))

		{

			redirect ($_SERVER['HTTP_REFERER']);

		}



	}



	public function recruiterdetaill()

  	{

	  	$rid=$this->input->get('uid');

	  	$singleid=$rid;

	  	$id=$this->session->userdata('employe_id');

	  	$data=$this->fetch->fetchemployer($rid);

	  	$category=$this->search->category();

	  	$jobs=$this->fetch->featutredrecruiter($singleid);

	  	$this->update->profileviewrecruiter($id);

	  	$wishlistt=$this->fetch->recruiterwishlist($rid);

	  	$this->load->view('recruiterdetail',['data'=>$data,'category'=>$category,'jobs'=>$jobs,'wishlistt'=>$wishlistt]);

  	}



  	public function addwishlist()

  {

  	

  	$uid=$this->session->userdata('employe_id');

  	$rid=$this->input->get('rid');

  	$data=array('uid'=>$uid,

  		'recruiter_id'=>$rid);

  	if($this->insert->saverecruiter($data))

  	{

  		$this->session->set_flashdata('wishlist','Recruiter successfully added into your wishlist.');

  		$this->session->set_flashdata('wishlist_class','alert-success');

  		redirect($_SERVER['HTTP_REFERER']);

  	}

  }



  public function dashboard()

  {

 $session=$this->session->userdata('employe_id');
if(!empty($session))
{


  		$data= $this->fetch->fetchemployeprofile();

  		$completed=$this->session->userdata('rcompleted');

      $category=$this->search->category();

      $jobs= $this->fetch->alljobs();

		$categoryindia=$this->search->categoryindia();

    	$categorycanada=$this->search->categorycanada();

      if(!empty($completed))

{

		redirect(base_url().'referral/dashboard');

}

else

{

      $this->load->view('employerprofile',['data'=>$data,'jobs'=>$jobs,'categorycanada'=>$categorycanada,'categoryindia'=>$categoryindia,'category'=>$category]); 

}
}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'employee/login');
}

  }





  public function employeedashboard()

  {

  	$session=$this->session->userdata('employe_id');

  		$jid=$_GET['id'];

      if(!empty($session))

{

		redirect(base_url().'employee/jobdetail?uid='.$jid);

}

else

{

	$this->session->set_flashdata('loginrequired','You have to signin first for visit jobs.');

	$this->session->set_flashdata('loginrequired_class','alert alert-danger');

       redirect(base_url().'employee/login');

}

  }





  public function deleteapplied()

{

		$id=$this->uri->segment(3);

		$iid=$this->session->userdata('employe_id');

		if($this->delete->appliedjob($id,$iid))

		{

			redirect ($_SERVER['HTTP_REFERER']);

		}

	

	

	}



	public function deleteeapplied()

	{

		 $jid=$this->input->get('uid').'</br>';

		 $eid=$this->input->get('eid').'</br>';

		 $uid=$this->session->userdata('employe_id');

		if($this->delete->appliedjobagain($jid,$eid,$uid))

		{

			redirect ($_SERVER['HTTP_REFERER']);

		}

		

	}

}