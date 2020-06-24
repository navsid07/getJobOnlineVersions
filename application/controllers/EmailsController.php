<?php
class EmailsController extends CI_Controller 
{
	function __construct()
{
        // this is your constructor
        parent::__construct();
         $this->load->helper('form');
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('fetch');
        $this->load->model('search');
        $this->load->model('delete');
        $this->load->model('update');
        $this->load->model('referrall');
        $this->load->model('adminmodel');
       	$this->load->model('pagination_model');
        $this->load->model('insert');
        $this->load->library('user_agent');
        $this->load->library('pagination');
}




public function recruiterDashboardEmail()
{
	$to=$this->input->get('email');
	$toDecode=base64_decode(base64_decode($to));
               $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'ssl://get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '0',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
               
           
             $this->load->library('email', $config);
			$this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($toDecode);
            $this->email->subject('Profile Information Required. Get-job.online');

            $body  =  '<i>
            <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!-- NAME: EDUCATE -->
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
        <title>Complete Your Profile Now</title>
        
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
		.mcnImage,.mcnRetinaImage{
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
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 2
	@style heading 2
	*/
		h2{
			/*@editable*/color:#222222;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:28px;
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
			/*@editable*/padding-bottom:63px;
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
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
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
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
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
        <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">Incomplate Profile</span><!--<![endif]-->
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
                        
                            <h1 class="null" style="text-align: left;">Profile information required</h1>

<p style="font-size:18px !important;">Dear sir/madam,<br>
It has come to our attention that your profile is missing some information which is required by you in order to complete the registration process.<br>
To ensure that you will get an even and fair exposure and get more opportunities, we would require your detailed professional details.<br>
Recruiters prefer the profiles which they do not have to ask any additional information of the candidate. Once that is clear, you will have unlimited access to the countless jobs <font color="#0782c1"><a href="http://www.get-job.online" target="_blank">Online</a>.</font><br>
<br>
&nbsp;</p>

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
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 6px;background-color: #D3404E;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;">
                                <a class="mcnButton " title="Update Profile Now" href="https://get-job.online/RecruiterCheckRegistrationSteps?mail='.$to.'" target="_blank" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Update Profile Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                                                                                    <a href="http://www.facebook.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://www.twitter.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://www.instagram.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://mailchimp.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                        
                            <em>Copyright © 2018, All rights reserved. Designed and Managed by therevew.</em><br>
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
           	redirect(base_url().'RecruiterDashboard');
           }
           else
           {
           	redirect(base_url().'RecruiterDashboard');
           }

}


public function employeeDashboardEmail()
{
	$to=$this->input->get('email');
	$toDecode=base64_decode(base64_decode($to));

	               $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'ssl://get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '0',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
               
           
             $this->load->library('email', $config);
			$this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($toDecode);
            $this->email->subject('Profile Information required. Get-job.online');

            $body  =  '<i>
            <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!-- NAME: EDUCATE -->
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
        <title>Complete Your Profile Now.</title>
        
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
		.mcnImage,.mcnRetinaImage{
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
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 2
	@style heading 2
	*/
		h2{
			/*@editable*/color:#222222;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:28px;
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
			/*@editable*/padding-bottom:63px;
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
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
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
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
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
        <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">Incomplete Profile</span><!--<![endif]-->
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
                        
                            <h1 class="null" style="text-align: left;">Profile information required</h1>

<p style="font-size:18px !important;">Dear sir/madam,<br>
It has come to our attention that your profile is missing some information which is required by you in order to complete the registration process.<br>
To ensure that you will get an even and fair exposure and get more opportunities, we would require your detailed professional details.<br>
Recruiters prefer the profiles which they do not have to ask any additional information of the candidate. Once that is clear, you will have unlimited access to the countless jobs <font color="#0782c1"><a href="http://www.get-job.online" target="_blank">Online</a>.</font><br>
<br>
&nbsp;</p>

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
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 6px;background-color: #D3404E;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;">
                                <a class="mcnButton " title="Update Profile Now" href="https://get-job.online/employee/checkRegistrationSteps?mail='.$to.'" target="_blank" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Update Profile Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                                                                                    <a href="http://www.facebook.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://www.twitter.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://www.instagram.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://mailchimp.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
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
                        
                            <em>Copyright © 2018, All rights reserved. Designed and Managed by therevew.</em><br>
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
           	redirect(base_url().'employee/dashboard');
           }
           else
           {
           	 redirect(base_url().'emloyee/dashboard');
           }

}


public function TestingT()
{
	$toto_encode='a';
	$hash ='hash';
	 $to = 'jastgrewal@gmail.com';

	 $config = Array(    

       'protocol' => 'smtp',

       'smtp_host' => 'ssl://smtp.googlemail.com',

      'smtp_port' => 465,

      'smtp_user' => 'contact@get-job.online',

      'smtp_pass' => 'Notorious12',

      //'smtp_timeout' => '30',

      'mailtype' => 'html',

      'charset' => 'utf-8'

 );

            // $this->load->library('email', $config);

	 			$this->load->library('email');

 				$this->email->initialize($config);

             $this->email->set_newline("\r\n");

            $this->email->from('contact@get-job.online', 'getjob.online');

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

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="https://get-job.online/EmployeeVerification/'.$toto_encode.'/'.$hash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

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

                                                                                    <a href="https://get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

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

                        

                            <em>Copyright © 2019. All rights reserved.Designed and Managed by The Revew</em><br>

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
        	echo 'sent';
        }
        else
        {
        	echo 'not sent';
        }
}

public function againEmaill11()
{
	echo 'againemil echo';
}
public function againEmaill()
{

	$to = 'jastgrewal@gmail.com';
	$newhash = 'dsdsdsd';
	 $config = Array(    

       'protocol' => 'smtp',

      
       'smtp_host' => 'ssl://smtp.googlemail.com',

      'smtp_port' => 465,

      'smtp_user' => 'contact@get-job.online',

      'smtp_pass' => 'Notorious12',

      'smtp_timeout' => '30',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'


    );

             $this->load->library('email', $config);

             $this->email->set_newline("\r\n");

            $this->email->from('contact@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Email Verification. Get job online');


$body  = '<i>

		<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

  <head>

  

    <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

    

        <title><b>Email Verification</b></title>

 <link href="emailstyle.css" type="text/css" rel="stylesheet">

</head>

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

                  
                </td>

                            </tr>

              <tr>

                <td align="center" valign="top" id="templateBody" data-template-container>

                

                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">

                    <tr>

                                      <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

              

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <h1>Dear employee</h1>



                        </td>

                    </tr>

                </tbody></table>

        

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

            

                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">

                    <tbody><tr>

                        

                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">

                        

                            <p><strong>We are so pleased to have you on boead with us.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent seekers in your field of expertise. There are lots &amp; lots of jobs for you out there to cally out according to your desire. We offer no cost for your account signup. if you have apply to a specific job then you have to pay a small amount of not more than 25.</p>



<p>In order for you get going with it. You are required to verify your email address.<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please Click the link below to verify your Account:</p>



                        </td>

                    </tr>

                </tbody></table>

        

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


            </td>

        </tr>

    </tbody>

</table><table class="mcnButtonBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">

    <tbody class="mcnButtonBlockOuter">

        <tr>

            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" class="mcnButtonBlockInner" valign="top" align="center">

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" 
                          href="https://get-job.online/EmployeeVerification/'.$to.'/'.$newhash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

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


            </td>

        </tr>

    </tbody>

</table></td>

                    </tr>

                  </table>

                

                </td>

                            </tr>

                            <tr>

                <td align="center" valign="top" id="templateFooter" data-template-container>


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

                                   
                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">

                                                <tbody><tr>

                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">

                                                            <tbody><tr>

                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">

                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">

                                                                        <tbody><tr>

                                                                            

                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">

                                                                                    <a href="https://get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>

                                                                                </td>

                                                                            

                                                                            

                                                                        </tr>

                                                                    </tbody></table>

                                                                </td>

                                                            </tr>

                                                        </tbody></table>

                                                    </td>

                                                </tr>

                                            </tbody></table>

                                 

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

            </td>

        </tr>

    </tbody>

</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">

    <tbody class="mcnTextBlockOuter">

        <tr>

            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">


                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">

                    <tbody><tr>

                        

                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                        

                            <em>Copyright © 2019. All rights reserved.Designed and Managed by The Revew</em><br>

<br>

&nbsp;

                        </td>

                    </tr>

                </tbody></table>


            </td>

        </tr>

    </tbody>

</table></td>

                    </tr>

                  </table>

                  

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
				echo 'sent';
			}
}

}
?>