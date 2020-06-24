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
        $this->load->model('Adminmodel');

        $this->load->library('user_agent');
        //pagination
       	$this->load->library('pagination');
        //for get version from config file $this->config->item('version');
 		$this->load->model('Pagination_model');
 		$this->load->model('PaginationTestModel');
 		$this->load->helper('date');
        $job_id="";
    }

public function testcrousal()
{
	$this->load->view('testcrousal');
}

public function testcrousal2()
{

	$country=get_cookie('countryCookie');
if($country=='India' || $country=='United States' || $country=='Canada')
{
    get_cookie('countryCookie');
    //$blog=$this->fetch->anotherdatabase();
    $answer1=$this->fetch->fetchanswer1();
    $answer2=$this->fetch->fetchanswer2();
    $answer3=$this->fetch->fetchanswer3();
     $capitalise=ucfirst($country);
    $logo=$this->fetch->fetchlogo($country);
    
   $articles=$this->fetch->fetchArticles();
    $jobs=$this->search->todayjobs($country);
    //$edata= $this->fetch->fetchemployeprofile();
   // $rdata=$this->fetch->fetchrecruiterprofile();
    $category=$this->search->category($country);
    $categoryindia=$this->search->categoryindia();
    $categorycanada=$this->search->categorycanada();
    $voting=$this->fetch->voting();

//check session
    $blog='blog';
    $employeidd=$this->session->userdata('employe_id');
    $recruiteridd=$this->session->userdata('recruiter_id');
    $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($employeidd) && empty($sessionCookieEmployee))
    {
      $employeid=$employeidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($employeidd)) 
    {
      $employeid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($employeidd)) 
    {
      $employeid=$employeidd;
    }

    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($recruiteridd) && empty($sessionCookieRecruiter))
    {
      $recruiterid=$recruiteridd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($recruiteridd)) {
      $recruiterid=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($recruiteridd)) {
      $recruiterid=$recruiteridd;
    }

    if(empty($employeid) && empty($recruiterid))
    {
    
      $this->load->view('testcrousal2',['articles'=>$articles,'logo'=>$logo,'jobs'=>$jobs,'categoryindia'=>$categoryindia,'categorycanada'=>$categorycanada,'category'=>$category,'voting'=>$voting,'answer1'=>$answer1,'answer2'=>$answer2,'answer3'=>$answer3,'blog'=>$blog,'country'=>$country]);
    }
    elseif (!empty($employeid)) 
    {
          redirect(base_url().'EmployeeDashboard');
    }
    elseif (!empty($recruiterid)) 
    {
     redirect(base_url().'RecruiterDashboard');
    }

  }
  else
  {
   
    redirect(base_url());
  }
	
}




public function loadtesting()
{

	$this->load->view('employeereg1');
}
public function fetchtest()
{
	$this->fetch->testfetching();
}
public function version()
{
	echo CI_VERSION; 
}

public function testadd()
{
	$email='email';
	$this->load->view('employeereg8',['emaiil'=>'$email']);
}

public function employeerating()
    {
    	$review=$this->input->post('review');
    	$rating=$this->input->post('rating');
    	$uid=$this->input->post('uid');
   		 $rid=$this->input->post('rid');
   		 $data=array('erating_rate'=>$rating,'erating_description'=>$review,'erating_uid'=>$uid,'erating_rid'=>$rid);
   		 $this->insert->employeerating($data);
    }

public function datetest()
{
	$uid=1;
	$thiss=$this->insert->employeeviewCount($uid);
	print_r($thiss);
	/*$this->load->helper('date');
	$datestring = '%d/%m/%Y';
	$time = time();
	echo mdate($datestring, $time);*/
}

public function updatereview()
{
	$reviewid=$this->input->post('rid');
	$reply=$this->input->post('description');
	$array=['rrating_description'=>$reply];
	$this->update->updateemployeereview($array,$reviewid);
}

public function deletereview()
{
	$reviewid=$_GET['id'];//$this->input->post('reviewidd');
	$this->delete->deleteemployeereview($reviewid);
}

//pagination code
public function loadRecord($rowno=0){
	//$country=$this->session->userdata('country');
	 //$capitalise=ucfirst($country);
	 $country=get_cookie('countryCookie');
		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

      	// All records count
      	$allcount = $this->Pagination_model->getrecordCount($country);

      	// Get  records
     	$users_record = $this->Pagination_model->getData($rowno,$rowperpage,$country);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'employee/loadRecord';
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

  

public function testPagi()
{
$session='136';
  $result=$this->Pagination_model->employeePortfolioRecordCount($session);
  print_r($result);
}
public function loadPortfolio($rowno=0){
  //$country=$this->session->userdata('country');
   //$capitalise=ucfirst($country);
  
  $sessioncookie=get_cookie('sessionCookieEmployee');

 $sessionId=$this->session->userdata('employe_id');


  if(!empty($sessionId) && empty($sessioncookie))
  {
    $session=$sessionId;
  }
  elseif(empty($sessionId) && !empty($sessioncookie))
  {
    $session=$sessioncookie;
  }
  elseif(!empty($sessionId) && !empty($sessioncookie))
  {
    $session=$sessionId;
  }

    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        // All records count
        $allcount = $this->Pagination_model->employeePortfolioRecordCount($session);

      // Get  records
      $users_record = $this->Pagination_model->employeePortfolioGetData($rowno,$rowperpage,$session);
        
        // Pagination Configuration
    $config['base_url'] = base_url().'employee/loadPortfolio';
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

 //pagination code
public function loadCertification($rowno=0){
  //$country=$this->session->userdata('country');
   //$capitalise=ucfirst($country);
   $sessioncookie=get_cookie('sessionCookieEmployee');

 $sessionId=$this->session->userdata('employe_id');


  if(!empty($sessionId) && empty($sessioncookie))
  {
    $session=$sessionId;
  }
  elseif(empty($sessionId) && !empty($sessioncookie))
  {
    $session=$sessioncookie;
  }
  elseif(!empty($sessionId) && !empty($sessioncookie))
  {
    $session=$sessionId;
  }
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        // All records count
        $allcount = $this->Pagination_model->employeeCertificationRecordCount($session);

        // Get  records
      $users_record = $this->Pagination_model->employeeCertificationGetData($rowno,$rowperpage,$session);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'employee/loadCertification';
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



//pagination code for recruiter posted jobs
public function jobsPostedPagination($rowno=0){

	$id=$this->session->userdata('jobsPostedPagination');
		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

      	
      	// All records count
      	$allcount = $this->Pagination_model->getCountRecruiterJobs($id);

      	// Get  records
     	$users_record = $this->Pagination_model->getDataRecruiterJobs($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = 'https://get-job.online/employee/jobsPostedPagination';
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


//pagination code for jobs by me
public function jobsByMeTest($rowno=0){

		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

      	// All records count
      	$allcount = $this->Pagination_model->getCountJobsByMeTest();

      	// Get  records
     	$users_record = $this->Pagination_model->getDataJobsByMeTest($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = 'https://get-job.online/employee/jobsByMeTest';
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

//jobs by me pagination code end




//pagination code for jobs by me
public function jobsByMe($rowno=0){

		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

      	
      	// All records count
      $allcount = $this->Pagination_model->getCountJobsByMe();

      	// Get  records
     	$users_record = $this->Pagination_model->getDataJobsByMe($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'employee/jobsByMe';
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
//jobs by me pagination code end



public function admin()

{

	$this->load->view('admin');

}
public function load404()
{
	$this->load->view('404');
}

	public function index()

	{

		$country=get_cookie('countryCookie');
		$referral=$this->input->get('src', TRUE);
		$category=$this->search->category($country);
		$login=$this->input->get('login', TRUE);

		$id=$this->input->get('id', TRUE);

		$this->load->view('employeereg1',['category'=>$category,'country'=>$country,'referral'=>$referral,'login'=>$login,'id'=>$id]);

	}

//load employee registartion views

public function loademployeeEdit()
{

	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');

  		if(!empty($uuid) || !empty($employeeSession))
  	{

  	$step=$this->input->post('step');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);
	
 	}


	if(!empty($this->input->post('status')))
	{
		
		$email=$this->input->post('id');
	

		
	$this->load->view('employeeregNew',['data'=>$result,'category'=>$category,'emaiil'=>$email,'status'=>'status','step'=>$step,'editstatus'=>$this->input->post('status')]);
	}
	else
	{
		if($step==2)
		{
			$header='Address';
		}
		if($step==3)
		{
			$header='Contact';
		}
		if($step==4)
		{
			$header='Education credentials';
		}
		if($step==5)
		{
			$header='Category';
		}
		if($step==6)
		{
			$header='Experience';
		}
		if($step==7)
		{
			$header='Cover letter';
		}

		$email=$this->input->post('id');


	$this->load->view('employeeregNew',['header'=>$header,'emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category,'step'=>$step]);
	}
}
else
{


	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
}
	 
}

public function loademployeereg2()
{

	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 	}

	if(!empty($this->input->get('status')))
	{
		$email=$this->input->get('id');


	$this->load->view('employeereg2',['data'=>$result,'category'=>$category,'emaiil'=>$email,'status'=>'status','editstatus'=>$this->input->get('status')]);
	}
	else
	{
		$email=$this->input->get('id');


	$this->load->view('employeereg2',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
	}
	 
}

public function loademployeereg3()
{

	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 	}


	if(!empty($this->input->get('status')))
	{
		$email=$this->input->get('id');


	$this->load->view('employeereg3',['data'=>$result,'category'=>$category,'emaiil'=>$email,'status'=>'status','editstatus'=>$this->input->get('status')]);
}
		else
		{
	$email=$this->input->get('id');
	$this->load->view('employeereg3',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
}
}

public function loademployeereg4()
{

	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 	}



	if(!empty($this->input->get('status')))
	{
		$email=$this->input->get('id');


	$this->load->view('employeereg4',['data'=>$result,'category'=>$category,'emaiil'=>$email,'status'=>'status','editstatus'=>$this->input->get('status')]);
}
		else
		{
	 $email=$this->input->get('id');
	$this->load->view('employeereg4',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
}
}

public function loademployeereg5()
{
	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);
}
 	



	if(!empty($this->input->get('status')))
	{
		$email=$this->input->get('id');


	$this->load->view('employeereg5',['data'=>$result,'category'=>$category,'emaiil'=>$email,'status'=>'status','editstatus'=>$this->input->get('status')]);
}
		else
		{
	 $email=$this->input->get('id');
	$this->load->view('employeereg5',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
}
}

public function loademployeereg6()
{
	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 	}


	if(!empty($this->input->get('status')))
	{
		$email=$this->input->get('id');


	$this->load->view('employeereg6',['data'=>$result,'category'=>$category,'emaiil'=>$email,'status'=>'status','editstatus'=>$this->input->get('status')]);
}
		else
		{
	 $email=$this->input->get('id');
	$this->load->view('employeereg6',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
}
}


public function testmodel()
{
	date_default_timezone_set('Asia/Kolkata');
		echo $member= date('Y-m-d H:i:s'); 
	/*$country=get_cookie('countryCookie');
	$result=$this->search->category($country);
	print_r($result);*/
}

public function loademployeereg7()
{
	$country=get_cookie('countryCookie');
	 $email=$this->input->get('id');

	 $employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 	}
	$this->load->view('employeereg7',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
}

public function loademployeereg8()
{
	 $email=$this->input->get('id');
	 $country=get_cookie('countryCookie');
	 $employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 	}
	$this->load->view('employeereg8',['emaiil'=>$email,'status'=>'status','data'=>$result,'category'=>$category]);
}
		//load view code end


	public function registertest()

	{
		date_default_timezone_set('Asia/Kolkata');
		$member= date('Y-m-d H:i:s'); 
		$country=get_cookie('countryCookie');
		$member_since = round(microtime(true) * 1000);
	$to=$this->input->post('email');

		$toto_encode=base64_encode(base64_encode($to));

		$employemail=$this->fetch->checkmailemployer($toto_encode);

		$recruitermail=$this->fetch->sameemailemployee($toto_encode);
		if(!empty($this->input->post('referral')))
		{
		$referralFrom=$this->input->post('referral');
	}
	elseif (empty($this->input->post('referral'))) {
		$referralFrom='0';
	}


		if($employemail=='failed')
		{


		if($recruitermail=='success')

		{



			$email=base64_encode(base64_encode($this->input->post('email')));

			$name=base64_encode(base64_encode($this->input->post('name')));

			$password=base64_encode(base64_encode($this->input->post('password')));

		
           	$login=base64_encode(base64_encode($this->input->post('login')));

           	$id=$this->input->post('id');

			$hash= mt_rand();

			

				//function for referral code


//function for referral code
					/*$length = 10;
   					 $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    					$ReferralCode = '';    

   				 for ($p = 0; $p < $length; $p++) 
   				 {
        			$ReferralCode .= $characters[mt_rand(0, strlen($characters))];
    			}*/



			$array=array('employee_name'=>$name

				,'employee_password'=>$password
				,'employee_email'=>$email
				,'employee_hash'=>$hash
				,'employee_country'=>$country
				,'member_since'=>$member
				,'employee_referral_from'=>$referralFrom
				,'employee_referral'=>$hash
				,'employee_balance'=>'50');

				/*if(!empty($referralFrom))
				{
					$referralUid=$this->fetch->referralsUid($referralFrom);
					$this->insert->insertReferral($referralUid);
				}*/

			/*if($login=='recruiter')

			{

					//$this->referrall->registerupdaterid($id);

			}

			elseif($login=='employee')

			{

				$this->referrall->registerupdateeid($id);

			}*/



        
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

           //insert 10 points to who reffred
           		if($this->input->post('referral'))
				{

					$referralFrom=$this->input->post('referral');
					$referralsUid=$this->update->referralRewardEmployee($referralFrom);
				}

			$result=$this->insert->employerRegister($array);
			echo 1;
			//set_cookie('EmployeeEmail',$to,'300');
           	//$result=$this->insert->employerRegister( $array );

          	/*$this->session->set_flashdata(array('register'=>'In order to proceed further you need to verify your email address. An email has been sent to your email '.$to.'. Check your Inbox/Spam folder if the email appears in the spam folder and proceed further by clicking on the link given in the email. If you have not received the email click below. Or if you wish to change your email address click below. </br><div style="text-align:center; margin-top:10px;"><a href="https://get-job.online/employee/sendagainemail/'.$toto_encode.'" class="btn btn-success" style="margin-right:10px;">Send Again</a><a href="employee/fetchdata/'.$toto_encode.'"  class="btn btn-info">Change Email</a></div>','register_class'=>'alert-success'));

            $this->session->set_flashdata('register_class', 'alert-success');

			redirect($_SERVER['HTTP_REFERER']); */

           }

           else

           {

           	echo $this->email->print_debugger();
 				//echo 0;
  /*         	$this->session->set_flashdata('register','Something went wrong please try again later.');

           	$this->session->set_flashdata('register_class','alert-danger');

      		redirect ($_SERVER['HTTP_REFERER']);
*/
           	//echo 'second';

           }			

		}


	else

{
	echo 2;
	/*

	$this->session->set_flashdata('samemail','This email has been registered as a recruiter in our system please try with different email.');

          	$this->session->set_flashdata('samemail_class','alert-danger');

          	redirect ($_SERVER['HTTP_REFERER']);
*/
	//echo 'last';

}

	}

	else

	{

		echo 3;
/*		$this->session->set_flashdata('emailexist','Email you have entered is already registered with us. please try again with another email or signin with the same.');

           	$this->session->set_flashdata('emailexist_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);
*/
		//echo 'second last';

	}

}


	
public function registerstep2()
 {
 			
	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 			$editstatus=$this->input->post('editstatus');
 			$status=$this->input->post('status');
 			
			$email= $this->input->post('email');
           	$city=base64_encode(base64_encode($this->input->post('city')));

           	$state=base64_encode(base64_encode($this->input->post('state')));

           $pincode=$this->input->post('pincode');

           	$array=array(

				'employee_pincode'=>$pincode

				,'employee_city'=>$city

				,'employee_state'=>$state
);

           if($this->update->employeestep2($array,$email))
           {

           	if(!empty($editstatus))
           	{
           		echo 2;//redirect(base_url().'employee/editprofile');
           	}
           	elseif(empty($editstatus))
           	{
           	/*if(!empty($status))
           	{
           		redirect(base_url().'employee/login');
           	}
           	else
           	{*/
           	echo 1;
           	//$this->load->view('employeereg3',['email'=>$email,'data'=>$result,'category'=>$category]);
           	//}
           }
           else
           {
           	echo 0;
           }
           }
       

 }
}



 public function registerstep3()
 {



			$country=get_cookie('countryCookie');
      if($country=='India')
      {
        $phoneCode='+91';
      } 
      if($country=='Canada')
      {
        $phoneCode='+1';
      }
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);



 			 $contact=base64_encode(base64_encode($this->input->post('contact')));
			$email= $this->input->post('email');
           	$dob=base64_encode(base64_encode($this->input->post('dob')));
           	$status=$this->input->post('status');
           	

           	$array=array(
              'employee_phone_code'=>$phoneCode

				,'employee_phone'=>$contact

				,'employee_birthdate'=>$dob

);

           if($this->update->updateEmployee($array,$uid))
           {
           		if(!empty($this->input->post('editstatus')))
           	{
           		echo 2;//redirect(base_url().'employee/editprofile');
           	}
           	else
           	{
           		echo 1;
           	/*if(!empty($status))
           	{
           		redirect(base_url().'employee/login');
           	}
           	else
           	{*/
           	//$this->load->view('employeereg4',['email'=>$email,'data'=>$result,'category'=>$category]);
           //}
       }
       }

 }
}

 public function registerstep5()
 {


			$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);



 			$category=base64_encode(base64_encode($this->input->post('category')));
			$email= $this->input->post('email');
           	$designation=base64_encode(base64_encode($this->input->post('designation')));
           	$status=$this->input->post('status');
           	

           	$array=array(

				'employee_category'=>$category

				,'employee_designation'=>$designation

);

           if($this->update->updateEmployee($array,$uid))
           {
           		if(!empty($this->input->post('editstatus')))
           	{
           		echo 2;//redirect(base_url().'employee/editprofile');
           	}
           	else
           	{
           	/*if(!empty($status))
           	{
           		redirect(base_url().'employee/login');
           	}
           	else
           	{*/
           		echo 1;
           	//$this->load->view('employeereg6',['email'=>$email,'data'=>$result,'category'=>$category]);
           //}
       }
       }

 }
}



 /*public function registerstep6()
 {



			$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);


 			$status=$this->input->post('status');
			$email= $this->input->post('email');
          
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
           $prefferedlocation=base64_encode(base64_encode($this->input->post('prefferedlocation')));


           	$array=array(
           		'experience1'=>$experience1

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
				,'experience_in45'=>$experience_in5

				,'employee_fresher_experience'=>$fresherex
				,'employee_preffered_location'=>$prefferedlocation


);

           if($this->update->employeestep4($array,$email))
           {
           		if(!empty($this->input->post('editstatus')))
           	{
           		echo 2;//redirect(base_url().'employee/editprofile');
           	}
           	else
           	{
           	/*if(!empty($status))
           	{
           		redirect(base_url().'employee/login');
           	}
           	else
           	{*/
           		//echo 1;
           	//$this->load->view('employeereg7',['email'=>$email,'data'=>$result,'category'=>$category]);
          // }
      /* }
       }

 }
}*/





public function registerstep6()
 {



			$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);


 			$status=$this->input->post('status');
			$email= $this->input->post('email');
          
		$experience=$this->input->post('experience');

           

           	$company=base64_encode(base64_encode($this->input->post('company')));

          

           	$experience_in=base64_encode(base64_encode($this->input->post('experience_in')));

         
          $fresherex=base64_encode(base64_encode($this->input->post('fresher/experience')));
           $prefferedlocation=base64_encode(base64_encode($this->input->post('prefferedlocation')));


           	$array=array(
           		'experience'=>$experience

				,'company'=>$company

				,'experienceIn'=>$experience_in

				,'fresher_experience'=>$fresherex
				,'prefferedLocation'=>$prefferedlocation
				,'uid'=>$uid


);

           if($this->insert->employeeRegisterStep6( $array ))
           {
           		if(!empty($this->input->post('editstatus')))
           	{
           		echo 2;//redirect(base_url().'employee/editprofile');
           	}
           	else
           	{
           	/*if(!empty($status))
           	{
           		redirect(base_url().'employee/login');
           	}
           	else
           	{*/
           		echo 1;
           	//$this->load->view('employeereg7',['email'=>$email,'data'=>$result,'category'=>$category]);
          // }
       }
       }

 }
}

 public function registerstep7()
 {


	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);

 			
			$email= $this->input->post('email');
      
				$status=$this->input->post('status');
           	$description=base64_encode(base64_encode($this->input->post('description')));
           		
			$config= ['upload_path' => './resumes/',

					'allowed_types' => 'pdf|doc|docx'];

					$this->upload->initialize($config);



					if($this->upload->do_upload('userfile'))

						{

							$data = $this->upload->data();

							 $image_path = base_url("resumes/" .$data['raw_name'].$data['file_ext']);

           					$imagee=$data['raw_name'].$data['file_ext'];
           				
           	$array=array(
           		'employee_resume'=>$imagee

				,'employee_description'=>$description

);

           if($this->update->updateEmployee($array,$uid))
           {
           	if(!empty($status))
           	{
           		echo 0;//redirect(base_url().'employee/login');
           	}
           	else
           	{
           		//echo 1;
           		//$to=$email;
           		echo 1;
          //$data=$this->fetch->fetchdataemployer($to);
           	//$this->load->view('employeesuccessregister',['data'=>$data ,'category'=>$category]);
          }
}

}
else
{
	echo 0;
	//echo $errors = $this->upload->display_errors();
	/*$to=$email;
           	$data=$this->fetch->fetchdataemployer($to);
           	$this->load->view('employeesuccessregister',['data'=>$data ,'category'=>$category]);*/
                    //flashMsg($errors);
}
 }
}



public function registerstep4()
 {
 			

			$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{

  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);


 				$status=$this->input->post('status');
 			$admission=base64_encode(base64_encode($this->input->post('admission')));
			$email= $this->input->post('email');
			if(empty($this->input->post('checkBox')))
			{
           		$passed=base64_encode(base64_encode($this->input->post('passed')));
           }
           elseif (!empty($this->input->post('checkBox'))) {
           	
           		$passed = base64_encode(base64_encode($this->input->post('checkBox')));

           }
           	
			
			
			
			$degreename=base64_encode(base64_encode($this->input->post('degreeName')));
			
           
			$uni1=base64_encode(base64_encode($this->input->post('university')));
			$marks=base64_encode(base64_encode($this->input->post('percentage')));
			
           	

           	$array=array(

				'admission'=>$admission
				,'passed'=>$passed
				,'degreeName'=>$degreename
				,'university'=>$uni1
				,'marks'=>$marks
				,'uid'=>$uid

);

           if($this->insert->employeeRegisterStep4($array))
           {

           		if(!empty($this->input->post('editstatus')))
           	{
           		echo 2;//redirect(base_url().'employee/editprofile');
           	}
           	else
           	{
           	/*if(!empty($status))
           	{
           		echo 0;//redirect(base_url().'employee/login');
           	}*/
           	
           		echo 1;
           //$this->load->view('employeereg5',['email'=>$email,'data'=>$result,'category'=>$category]);

}
           }

 }
}

public function recruiterreg4()
{
		
			$city=base64_encode(base64_encode($this->input->post('city')));
			$state=base64_encode(base64_encode($this->input->post('state')));
			$address=base64_encode(base64_encode($this->input->post('address')));
			$status=$this->input->post('status');
			$email=$this->input->post('email');
		
		$array=array(
			
				'recruiter_city'=>$city
				,'recruiter_state'=>$state
				,'recruiter_address'=>$address);
		if($this->update->recruiterregister($array,$email))
		{
			if(!empty($status))
			{
				redirect(base_url().'RecruiterLogin');
			}
			else
			{
				$this->load->view('recruiterreg5',['email'=>$email,'status'=>$status]);
			}
		}
}






public function registerstep8()
{
			

			$email=$this->input->post('email');
					$config= [ 'upload_path' => './EmployeeProfilePic/',
					'allowed_types' => 'png|jpg|jpeg|gif|doc'];
					$this->upload->initialize($config);

					if($this->upload->do_upload('userfile'))
						{
							
							$data = $this->upload->data();
							 $image_path = base_url("EmployeeProfilePic/" .$data['raw_name'].$data['file_ext']);
           					 $imagee=$data['raw_name'].$data['file_ext'];
           					
			$email=$this->input->post('email');
			$status=$this->input->post('status');
		
		$array=array(
				'employee_profile_pic'=>$imagee);
		if($this->update->employeeregister($array,$email))
		{
			if(!empty($status))
			{
				redirect(base_url().'EmployeeLogin');
			}
			else
			{
				redirect(base_url().'EmployeeLogin');
			//echo 'success';//$this->load->view('recruiterreg5',['email'=>$email]);
		}}
	}
	else
	{
		echo $this->upload->display_errors();//echo 'something went wrong please try again later';
	}
}
	

public function testregform()
{
	$this->load->view('employeereg7');
}





	//if user forget password

	public function email()

	{

		$Emailhash= mt_rand();
			$to=$this->input->post('email');
			$to_encode=base64_encode(base64_encode($to));
		
			$to_result=$this->fetch->checkmail($to_encode);

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

                        

                            <h3>You just submitted a request to change your password. You can change the password by clicking below.</h3>



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

                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;">

                    <tbody>

                        <tr>

                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 13px;">

                                <a class="mcnButton " title="Changee password" href="https://get-job.online/EmployeeChangePassword?email='.$to_encode.'&&hash='.$Emailhash.'" target="_self" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Change password</a>

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

                        

                            <strong><span style="font-size:17px">If you have not requested the password change then just ignore this email.</span></strong>

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

                        

                            <em>Copyright © 2019 | All rights reserved.Designed and managed by The Revew.</em><br>

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
             $email= $to_encode;
            if($this->update->updateEmailHashEmployeeSecurity($Emailhash,$email))
            {
           	  echo '1';
            }

           	/*$this->session->set_flashdata('emailsent','Verification link has been sent to your email.');

           	$this->session->set_flashdata('emailsent_class','alert-success');

           	redirect ($_SERVER['HTTP_REFERER']);

           	*/

           }

           else

           {

  			echo '0';
  /*         	$this->session->set_flashdata('emailfailed','Something went wrong please try again later.');

           	$this->session->set_flashdata('emailfailed_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);
*/
           }

       }

       else

       {
       	echo '2';
/*
       		$this->session->set_flashdata('checkmail','Email address you have entered doesnot exist please try again with registered email.');

           	$this->session->set_flashdata('checkmail_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);*/

       }

	}



//change forget password

public function changepasswordquery()

	{

	$email= $this->input->post('email');
	$password1= $this->input->post('password');
	$password=base64_encode(base64_encode($password1));
	 
		 if($this->update->updatePasswordEmployee($password,$email))
	 {
    if($this->update->updateResetHashEmployee($email))
    {
	 	echo 1;
   }
	 }
	 else
	 {
	 	echo 0;
	 }

	}

//update recruiters password attempts
  public function changepasswordqueryAttempts()
  {
  $password1= $this->input->post('password');
  $email1= $this->input->post('email');
  $email= base64_encode(base64_encode($email1));
  $password=base64_encode(base64_encode($password1));
   if($this->update->updatePasswordEmployee($password,$email))
   {
     echo 1;
     $this->update->attemptHashEmailEmployee($email1);
   }
   else
   {
    echo 0;
   }
    
  }



//employer change password

public function changepassword()

	{
		$country=get_cookie('countryCookie');
		$data= $this->fetch->fetchemployeprofile();
		$category=$this->search->category($country);
		$email=$_GET['email'];//$this->uri->segment(3);
		$jobs=$this->fetch->alljobs($country);

	//$this->uri->segment(4);
	 $Emailhash= mt_rand();
		
		 if(!empty($_GET['hash']))
		 {
      echo '1';

		 	 $hash=$_GET['hash'];
		 	$emailHash=$this->fetch->checkEmployeeEmailhash($hash,$email);
		 	if($emailHash=='failed')
		 	{
		 		
		 		$hashResult='null';
		 	}
		 	elseif ($emailHash=='success') {

		 		$hashResult='success';
		 	}
		 	 $this->load->view('changepassword',['emailhash'=>$hashResult,'email'=>$email,'jobs'=>$jobs,'data'=>$data,'category'=>$category,'url'=>'changePassword']);		
		 	//$this->update->updateEmailHashEmployeeSecurity($Emailhash,$email);

		 }

		 elseif (empty($_GET['hash']) && empty($_GET['attemptHash'])) 
    {
		 	
		  $this->load->view('changepassword',['email'=>$email,'jobs'=>$jobs,'data'=>$data,'category'=>$category,'url'=>'changePassword']);	

		}

    elseif (empty($_GET['hash']) && !empty($_GET['attemptHash'])) {
      echo '2';
      
      $attemptHash=$_GET['attemptHash'];
      $email=$_GET['email'];
      $emailHash1=$this->fetch->checkEmployeeAttemptsEmailhash($attemptHash,$email);
      if($emailHash1=='failed')
      {
        
        $hashResult1='null';
      }
      elseif ($emailHash1=='success') {

        $hashResult1='success';
      }


     $this->load->view('changepassword',['emailhash'=>$hashResult1,'jobs'=>$jobs,'data'=>$data,'categories'=>$category,'email'=>$email,'url'=>'changeAttemptsPassword']);
       //$this->update->attemptHashEmailRecruiter($email);
     
    }

   
		

	}

	//update recruiters password
	public function checkPassword()
	{
		
	$email= $this->input->post('email');
	$password1= $this->input->post('password');
	$password=base64_encode(base64_encode($password1));
	$a=$this->fetch->changePasswordEmployeeCheck($password,$email);
	 
	if($a==1)
	 {
	 	echo 1;
	 }
	 elseif($a==0)
	 {
	 	echo 0;
	 
	 }
		
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

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="https://get-job.online/EmployeeVerification/'.$emaill.'/'.$newhash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

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

                <table class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;" width="100%" cellspacing="0" cellpadding="0" border="0">

                    <tbody>

                        <tr>

                            <td class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;" valign="middle" align="center">

                                <a class="mcnButton " title="Verify Now" href="https://get-job.online/EmployeeVerification/'.$emaill.'/'.$newhash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

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

		$to_decode=$this->input->get('email');

		$to=$this->input->get('email');

		$emailto=base64_decode(base64_decode($to_decode));
		$emaill=$to;
		$newhash=mt_rand();

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

            $this->email->to($emailto);

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

                        

                            <em>Copyright © 2020. All rights reserved.Designed and Managed by The Revew</em><br>

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

           $this->session->set_flashdata('emailagain','An email has been sent to your email '.$emailto.'. Check your inbox and proceed further by clicking on the link given in the email.');
          
          $this->session->set_flashdata('emailagain_class','alert-success');

          $this->update->updatehash($emaill,$newhash);
           		 //echo 1;
              
			     redirect($_SERVER['HTTP_REFERER']);

           }

           else

           {

           	$this->session->set_flashdata('emailagain','Something went wrong please try again later.');

           	$this->session->set_flashdata('emailagain_class','alert-danger');

         //$this->email->print_debugger();
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

			$idd=$this->session->userdata('employer_id');
		$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($idd) && empty($sessionCookie))
		{
			$id=$idd;
		}
		elseif (!empty($sessionCookie) && empty($idd)) {
			$id=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($idd)) {
			$id=$idd;
		}
		$to=$this->input->post('email');
		$newEmail=$this->input->post('newEmail');
		$password1=$this->input->post('password');
		$toto_encode=base64_encode(base64_encode($newEmail));
		$email=base64_encode(base64_encode($to));
		$password=base64_encode(base64_encode($password1));
		$checkPassword=$this->fetch->employelogin($email,$password);

		$result=$this->fetch->checkmailemployer($toto_encode);
		$same=$this->fetch->sameemailemployee($toto_encode);
		$newhash=mt_rand();
		
		if($checkPassword!='null')
		{
		if($result=='failed')

		{
			if($same=='success')
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

            $this->email->to($newEmail);

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

                                <a class="mcnButton " title="Verify Now" href="https://get-job.online/EmployeeVerification/'.$toto_encode.'/'.$newhash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>

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
           	$this->fetch->changeemployeremail($email,$toto_encode,$newhash);
           	echo 1;

          /* $this->session->set_flashdata('emailagain','An email has been sent to your email '.$to.'. Check your inbox and proceed further by clicking on the link given in the email.');

           	$this->session->set_flashdata('emailagain_class','alert-success');

			redirect($_SERVER['HTTP_REFERER']);*/

           	

           }

           else

           {
           	echo 2;

           /*	$this->session->set_flashdata('emailagain','Something went wrong please try again later.');

           	$this->session->set_flashdata('emailagain_class','alert-danger');

           	redirect ($_SERVER['HTTP_REFERER']);*/

           }



		
}
else
{
	echo 4;
}
			

		}

		else

		{

			echo 3;

				/*$this->session->set_flashdata('emailexist','Email you have entered already registered with us please try again with different one.');

           		$this->session->set_flashdata('emailexist_class','alert-danger');

           		redirect ($_SERVER['HTTP_REFERER']);*/

		}
	}
	else
	{
		echo 0;
	}

	}

public function verify()

{

	 $email=$this->uri->segment(2);

	 $hash=$this->uri->segment(3);


	$data=$this->fetch->verifyemployerfetch($email,$hash);
if($data != 'hash not matched' || $data != 'something went wrong')
{
	$this->fetch->verifyemployerstatus($email,$hash);

	$this->session->set_flashdata('verifystatus','Email successfully verified. Please proceed below to login in to your profile and add more details..');
		$this->session->set_flashdata('verifystatus_class','alert alert-success');
		redirect(base_url().'EmployeeLogin');
	//$this->load->view('employeereg2',['data'=>$data]);
}
elseif($data=='something went wrong')
{
	$this->session->set_flashdata('verifystatus','<strong>Sorry!</strong> You are proceeding with old hash.');
	$this->session->set_flashdata('verifystatus_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
	//echo 'something went wrong';
}
elseif ($data=='hash not matched') {
	$this->session->set_flashdata('verifystatus','Something went wrong please try again later.');
	$this->session->set_flashdata('verifystatus_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
	//echo 'hash not matched';
}
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

	redirect(base_url().'EmployeeDashboard');
	//$this->load->view('employerprofile',['data'=>$data,'jobs'=>$jobs]);

 }
 

 public function editprofile()

 {
 	$country=get_cookie('countryCookie');
 	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');
  	if(!empty($uuid) || !empty($employeeSession))
  	{
  		if(empty($uuid) && !empty($employeeSession))
  		{
  			$uid=$employeeSession;
  		}
  		elseif (empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  		elseif (!empty($employeeSession) && !empty($uuid)) {
  			$uid=$uuid;
  		}
  	$category=$this->search->category($country);

	$result=$this->fetch->fetchemployeedit($uid);
	$employeeQualification=$this->fetch->fetchemployequalification($uid);
	$employeeExperience=$this->fetch->fetchemployeexperience($uid);
	$sumexperience=$this->fetch->experienceSum($uid);

 	$this->load->view('editemployerprofile',['employeeExperience'=>$employeeExperience,'employeeQualification'=>$employeeQualification,'data'=>$result,'category'=>$category,'sum'=>$sumexperience]);

 
 }
 else
 {
 	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
 }
}

 public function jobdetailnosignin()

 {
 	//echo 'url='.$_SERVER['HTTP_REFERER'];
 //	$url=$_SERVER['HTTP_REFERER'];
    //$result=parse_url($url);
 	//print_r($result);
 	//echo 'host='.$result['host'];
 	//$domain = $_SERVER['SERVER_NAME'];
 	$uri=$this->input->get('uid');
	$employeeSession=get_cookie('sessionCookieEmployee');
  	$uuid=$this->session->userdata('employe_id');

if(!empty($employeeSession) || !empty($uuid))
{

	redirect(base_url().'EmployeeJobDetail?uid='.$uri);

}
	else
	{
 	$country=get_cookie('countryCookie');
 
	 $category=$this->search->category($country);

	
	$udatejobview=$this->update->updatejobview($uri);

	$appliedjob=$this->fetch->appliedjobs($uri);
	
	 $jobs=$this->search->todayjobs($country);
 	$this->insert->employerincrement($uri);

 	$job=$this->fetch->singlejob($uri);

 	 $rid=$this->fetch->recruiterid($uri);

 	  $rrid=$this->fetch->fetchemployer($rid);
 	
 	  $this->load->view('jobdetail_nosignin',['job'=>$job,'employer_id'=>$rrid,'category'=>$category,'appliedjob'=>$appliedjob,'jobs'=>$jobs]);

}
}

public function fetchhttest()
{

$uid=109;
echo $this->fetch->fetchemployeexperienceid($uid);

}



 public function jobdetail()

 {

 	$country=get_cookie('countryCookie');
 	$uri=$this->input->get('uid');
	$udatejobview=$this->update->updatejobview($uri);
 	$data=$this->fetch->fetchemployeprofile();
 	$uuid=$this->session->userdata('employe_id');
/*
	 $sessionCookie=get_cookie('sessionCookieEmployee');
	 if(!empty($uuid) || !empty($sessionCookie))
	 {*/

	 	if(empty($uuid) && !empty($sessionCookie))
	 	{
	 		$uid=$sessionCookie;
	 	}
	 	elseif (empty($sessionCookie) && !empty($uuid)) {
	 		$uid=$uuid;
	 	}
	 	elseif (!empty($sessionCookie) && !empty($uuid)) {
	 		$uid=$uuid;
	 	}

	 	
	 $category=$this->search->category($country);
	$jid=$uri;
	$applystatus=$this->fetch->fetchstatus($jid,$uid);
	$appliedjob=$this->fetch->appliedjobs($uri);
	$shortlistedjob=$this->fetch->shortlistedjobs($uri);
	$apply=$this->fetch->applyfetch($uid);

	if($apply!='null')

 	{
 		echo 'null';

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
 	  		$this->load->view('employerjobdescription',['shortlistedStatus'=>$shortlistedjob,'status'=>$statuss,'applystatus'=>$applystatus,'job'=>$job,'data'=>$data,'employer_id'=>$rrid,'apply'=>$applyjob,'category'=>$category,'appliedjob'=>$appliedjob]);

 	  }

 	  else
 	  {
 	  		
 	  		$this->load->view('employerjobdescription',['shortlistedStatus'=>$shortlistedjob,'applystatus'=>$applystatus,'job'=>$job,'data'=>$data,'employer_id'=>$rrid,'apply'=>$applyjob,'category'=>$category,'appliedjob'=>$appliedjob]);
 	}

 	
/*}

else
{
	if(!empty($this->input->get('signin')))
	{
		 $jjid=$this->input->get('uid');
		$this->session->set_userdata('linkid',$jjid);
		//echo 'link='.$this->session->userdata('linkid');
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'EmployeeLogin');
	}

	else
	{
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'EmployeeLogin');
	}

}*/

 	}


// if a recruiter report to a employee
public function reportEmployee()
{
	$ridd=$this->session->userdata('recruiter_id');
 	$sessionCookie=get_cookie('sessionCookieRecruiter');
		if(!empty($ridd) && empty($sessionCookie))
		{
			$rid=$ridd;
		}
		elseif (!empty($sessionCookie) && empty($ridd)) {
			$rid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($ridd)) {
			$rid=$ridd;
		}
	$uid=$this->input->post('getUid');
	$select=$this->input->post('category');
	$report=$this->input->post('reportEmployee');
	$array=array('category'=>$select,'description'=>$report,'uid'=>$uid,'rid'=>$rid);
	if($this->insert->reportEmployee($array))
	{
		echo 1;
	
	}
	else
	{
		echo 0;
	}
}

// if a recruiter report to a employee
public function reportArticle()
{
	$ridd=$this->session->userdata('employe_id');
 	$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($ridd) && empty($sessionCookie))
		{
			$rid=$ridd;
		}
		elseif (!empty($sessionCookie) && empty($ridd)) {
			$rid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($ridd)) {
			$rid=$ridd;
		}
		
	$aid=$this->input->post('articleId');
	$description=$this->input->post('description');
	$category=$this->input->post('category');
	$array=array('category'=>$category,'description'=>$description,'articleId'=>$aid,'userId'=>$rid);
	if($this->insert->reportEmployeeArticle($array))
	{
		echo 1;
	
	}
	else
	{
		echo 0;
	}
}


//if employee wanna report a job

 	public function reportJob()
 	{
 		$uid=get_cookie('sessionCookieEmployee');
 		$jid=$this->input->post('getJid');
 		$category=$this->input->post('select');
 		$report=$this->input->post('reportJob');
 		$array= array('jid' => $jid, 'category' => $category, 'report' => $report, 'uid' => $uid );
 		if($this->insert->reportJob($array))
 		{
 			echo 1;/*$this->session->set_flashdata('reportJob1','Your report Successfully submitted.');
		$this->session->set_flashdata('reportJob1_class','alert alert-success');
			redirect ($_SERVER['HTTP_REFERER']);*/
 		}
 		else
 		{
 			echo 0;
 		}
 	}



	public function shortlistJob1()
 	{

 		echo 0;

 	}

//if employee wanna shortlist a job

 	public function shortlistJob()
 	{

 		$datestring = '%Y/%m/%d';
		$time = time();
		$presentdate= mdate($datestring);

		$uidd=$this->session->userdata('employe_id');
	 	$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($uidd) && empty($sessionCookie))
		{
			$uid=$uidd;
		}
		elseif (!empty($sessionCookie) && empty($uidd)) {
			$uid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($uidd)) {
			$uid=$uidd;
		}

 		//$uid=get_cookie('sessionCookieEmployee');
 		$jid=$this->input->post('jid');
 		$eid=$this->input->post('eid');


 		//$report=$this->input->post('reportJob');
 		//check date and jobid for update shortlist count
 		$checkk=$this->fetch->jobShortlistCheck($jid,$presentdate);
 		if($checkk==0)
 		{
 			$array=array('jobShortlistCount_jid' => $jid, 'jobShortlistCount_uid' => $eid, 'jobShortlistCount_date' => $presentdate);
 			$this->insert->jobShortlistCountInsert($array);
 		}
 		else
 		{
 			$this->update->jobShortlistCount($jid,$presentdate);
 		}

 		$arrayy= array('jobShortlist_jid' => $jid, 'jobShortlist_eid'=>$uid,'jobShortlist_rid' => $eid, 'jobShortlist_date' => $presentdate);
 		//$this->insert->jobShortlistInsert($array);

 		if($this->insert->jobShortlistInsert($arrayy))
 		{
 			//$this->session->set_flashdata('shortlistJobFlash','Job Successfully Insert into your Shortlist.');
//		$this->session->set_flashdata('shortlistJobFlash_class','alert alert-success');
			//redirect ($_SERVER['HTTP_REFERER']);
 			echo 1;
 		}
 		else
 		{
 			echo 0;
 		}
 	}



public function refreshpage()
{
	redirect($this->agent->referrer());
}

//if employee share to facebook
 	 public function jobdetailshare()

 {


 	$data=$this->fetch->fetchemployeprofile();

	 $uidd=$this->session->userdata('employe_id');
	 $sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($uidd) && empty($sessionCookie))
		{
			$uid=$uidd;
		}
		elseif (!empty($sessionCookie) && empty($uidd)) {
			$uid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($uidd)) {
			$uid=$uidd;
		}
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
		redirect(base_url().'EmployeeLogin');
	}
	else
	{
		$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
		$this->session->set_flashdata('session_destroy_class','alert alert-danger');
		redirect(base_url().'EmployeeLogin');
	}
}


 	}



 public function login()
{

 	$country=get_cookie('countryCookie');
 	$category=$this->search->category($country);
 	$sessionn=$this->session->userdata('employe_id');
 	$sessionCookie=get_cookie('sessionCookieEmployee');
 	$articles=$this->fetch->fetchArticles();

		if(!empty($sessionn) && empty($sessionCookie))
		{
			$session=$sessionn;
		}
		elseif (empty($sessionn) && !empty($sessionCookie)) 
		{
			$session=$sessionCookie;
		}
		elseif (!empty($sessionn) && !empty($sessionCookie)) 
		{
			$session=$sessionn;
		}

    if(!empty($this->input->get('msg')))
    { 
      delete_cookie('sessionCookieRecruiter');
      $this->session->unset_userdata('recruiter_id');
      redirect(base_url().'RecruiterLogin');
    }


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
if(!empty($session))
{
	redirect(base_url().'EmployeeDashboard');
}
 	if(!empty($this->session->userdata('pyuemail')))

 	{

		$this->session->unset_userdata('pyuemail');

 	if($this->uri->segment(3) && $this->uri->segment(4))

 	{	

		$uri=$this->uri->segment(3);

		$urii=$this->uri->segment(4);

		$jobs=$this->fetch->alljobs($country);

   		$this->load->view('login',['articles'=>$articles,'uri'=>$uri,'jobs'=>$jobs,'category'=>$category]);

 	}

 	else

 	{

 		$jobs=$this->fetch->alljobs($country);

 		$this->load->view('login',['articles'=>$articles,'jobs'=>$jobs,'category'=>$category]);

 	}

 }

 else

 {

 	$jobs=$this->fetch->alljobs($country);
	$this->load->view('login',['articles'=>$articles,'jobs'=>$jobs,'category'=>$category]);

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

		$jobs=$this->fetch->alljobs($country);

		$this->load->view('login',['articles'=>$articles,'uri'=>$uri,'jobs'=>$jobs,'category'=>$category]);

 	}

 	else

 	{

 		

 		$jobs=$this->fetch->alljobs($country);

   

 		$this->load->view('login',['articles'=>$articles,'jobs'=>$jobs,'category'=>$category]);

 	}

 }

 else

 {

 	$jobs=$this->fetch->alljobs($country);

   

 		$this->load->view('login',['articles'=>$articles,'jobs'=>$jobs,'category'=>$category]);

 }

 }	

 }

 //login with jquery


//redirect after login

//after jquerylogin

	public function afterLogin()
	{
		$linkid=$this->session->userdata('linkid');
		$referralsession=$this->session->userdata('referralsession');
		$uurl=$this->session->userdata('url');
		$completed=$this->session->userdata('rcompleted');

		if(empty($completed))

			{

			if(!empty($uurl))

			{

				redirect(base_url().$uurl);

			}

			elseif (!empty($linkid)) 
			{
				
				redirect(base_url().'EmployeeJobDetail?uid='.$linkid);
			}
			elseif (!empty($referralsession)) {

				redirect(base_url().'ReferralDashboard');
			}

			else

			{

			redirect(base_url().'EmployeeDashboard');

 			}

 		}

 		else

 		{

 			redirect(base_url().'ReferralDashboard');

 		}

	}


// end redirect after login code
public function checkform()
{ ?>
	
	 <form method="post" action="<?= base_url(); ?>EmployeeJqueryLogin" id="check">
	 	<input type="hidden" name="Remail" value="jastgrewal@gmail.com">
	 	<input type="hidden" name="Rpassword" value="password">
	 </form>
<script>
function myFunction() {
  document.getElementById("check").submit();
}
myFunction();
</script>
	 <?php
}

public function modelTest()
{
	$signinid=119;
	$this->load->model('adminmodel');
	$q=$this->adminmodel->signinresult($signinid);
	print_r($q);
}
//testing jquery recruiter login
public function loginqueryJquery()
{
	date_default_timezone_set('Asia/Kolkata');
	$signinTime= date('Y-m-d H:i:s'); 
	$emaill1=htmlspecialchars($_POST['Remail']);  
    $passwordd=htmlspecialchars($_POST['Rpassword']);
    $emaill=strtolower($emaill1); 
 	$email=base64_encode(base64_encode($emaill));
 	$password=base64_encode(base64_encode($passwordd));
	$result=$this->fetch->employelogin( $email,$password );
	$resultArray=$this->fetch->EmployeeLoginJquery1($email,$password);
	$result2=$this->fetch->ifrecruiteremail($email);
	$result1=$resultArray['numRows'];
   
	if($result=='null' && $result1=='null' && $result2=='null')
	{
		$msg='1';//'You are using wrong email or password';
	}
	elseif ($result=='null' && $result1=='success' && $result2=='null') 
  {
    
     $attemptCount=$resultArray['attemptCount'];
     if($attemptCount==0)
    {
      $this->update->updateLoginAttempt($email);
      $msg='2';
    }
    elseif ($attemptCount>=1 && $attemptCount<=5) {
      $loginAttempt=$attemptCount;
      $this->update->updateLoginAttemptIncrementEmployee($email,$loginAttempt);
      $msg='2';
    }
    else
    {

      //$msg='2';

        $attemptHash=rand();

             $config = Array(    



      //'protocol' => 'sendmail',

              'protocol' => 'sendmail',
     
      'smtp_host' => 'ssl://get-job.online',



      'smtp_port' => 25,



      'smtp_user' => 'noreply@get-job.online',



      'smtp_pass' => '774411',



      'smtp_timeout' => '4',



      'mailtype' => 'html',



      'charset' => 'iso-8859-1'



    );

           
             $to=$email;
             $this->load->library('email', $config);

      $this->email->set_newline("\r\n");

            $this->email->from('noreply@get-job.online', 'getjob.online');

            $this->email->to($to);

            $this->email->subject('Invalid Activities Verification. Get job online');

$body  = 
'<!doctype html>
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
        <title>*|MC:SUBJECT|*</title>
        
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
      /*@editable*/color:#949494;
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
      /*@editable*/color:#757575;
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
      /*@editable*/color:#007C89;
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
      /*@editable*/color:#757575;
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
      /*@editable*/color:#007C89;
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

} @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

} @media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnRetinaImage{
      max-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImage{
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
      max-width:100% !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnBoxedTextContentContainer{
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupContent{
      padding:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
      padding-top:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
      padding-top:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardBottomImageContent{
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockInner{
      padding-top:0 !important;
      padding-bottom:0 !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockOuter{
      padding-top:9px !important;
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnTextContent,.mcnBoxedTextContentColumn{
      padding-right:18px !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
      padding-right:18px !important;
      padding-bottom:0 !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcpreview-image-uploader{
      display:none !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1{
      /*@editable*/font-size:30px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2{
      /*@editable*/font-size:26px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3{
      /*@editable*/font-size:20px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4{
      /*@editable*/font-size:18px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
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
        <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
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
                        
                            <h2 class="null"><span style="font-size:22px"><span style="font-family:georgia,times,times new roman,serif"><span class="mc-toc-title">Due to some invalid activties on your account we have disabled your account for a while. Please choose from the options below</span>.</span></span></h2>

<h1 class="null">&nbsp;</h1>

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
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #230046;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                <a class="mcnButton " title="Login Now" href="https://get-job.online/Employee/testAttempt?hash='.$attemptHash.'&&email='.$to.'&&url=login" target="_blank" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Login Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 4px;background-color: #230046;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Arial; font-size: 16px; padding: 18px;">
                                <a class="mcnButton " title="Change Password" href="https://get-job.online/Employee/testAttempt?hash='.$attemptHash.'&&email='.$to.'&&url=changePassword" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Change Password</a>
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
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
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
                                                                                    <a href="http://www.facebook.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" alt="Facebook" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://www.twitter.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" alt="Twitter" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://www.instagram.com/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" alt="Link" style="display:block;" height="24" width="24" class=""></a>
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
                                                                                    <a href="http://mailchimp.com" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" alt="Website" style="display:block;" height="24" width="24" class=""></a>
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
                        
                            <em>Copyright @ 2020 , All rights reserved.</em><br>
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
</html>';

            $this->email->message($body);

   

           if($this->email->send())

           {
            
            //$this->update->attemptHashEmployee($attemptHash,$email);
            $msg='2';

           }
    
           
    //'Password does not match'; if password does not match then insert a new value in login attempt column.
   }

	}
	elseif ($result=='null' && $result1=='null'&& $result2=='success') {
		$msg='3';//'Seems like you are an Recruiter';
	}
	
	elseif($result!='null' && $result1=='null' && $result2=='null')
	{
		$employeeUid=$result['id'];
		$array=array('uid'=>$employeeUid,'time'=>$signinTime);
		$this->Adminmodel->lastLoginEmployee($array);
		/*set_cookie('sessionCookieEmployee',$result['id'],'7200');
		$this->session->set_userdata('employe_id',$result['id']);
		*/
		//$emailcookie=1;//get_cookie('employeeRequiredEmail');
		//$stepcookie=2;//get_cookie('employeeRequiredStep');
		if(!empty(get_cookie('employeeRequiredEmail')) && !empty(get_cookie('employeeRequiredStep')))
		{

			$msg='5';
			set_cookie('sessionCookieEmployee',$result['id'],'7200');
		$this->session->set_userdata('employe_id',$result['id']);
		//redirect(base_url().'recruiter/checkRegistrationSteps');
		}
		elseif(empty(get_cookie('employeeRequiredEmail')) && empty(get_cookie('employeeRequiredStep')))
		{
			$msg='4';
		set_cookie('sessionCookieEmployee',$result['id'],'7200');
		$this->session->set_userdata('employe_id',$result['id']);
	}
	}
	
	echo $msg;
}

public function testAttempt()
{

  $hash=$_GET['hash'];
  $email=$_GET['email'];
  $url=$_GET['url'];
  //$resetHash=$_GET['resetHash'];
  $nums=$this->fetch->attemptHashEmailEmployee($hash,$email);
  //echo $nums;

  if($nums!=0)
  {
      //if($this->update->attemptHashEmailRecruiter($hash,$email))
      //{
        if($url=='login')
        {
          $email1=$email;
          $this->update->attemptHashEmailEmployee($email1);
          redirect(base_url().'EmployeeLogin');
        }
        elseif($url=='changePassword') 
        {
          redirect(base_url().'EmployeeChangePassword?attemptHash='.$hash.'&&email='.$email.'&&url=changeAttemptsPassword');
        }

      //}

  }
  else
  {
    redirect(base_url().'EmployeeChangePassword?attemptHash=NotAvailable&&email=NotAvailable&&url=changeAttemptsPassword');
  }
  
}
public function test()

{
  redirect(base_url().'Employee/test1');
  //echo $_SERVER['HTTP_REFERER'];
}

public function test1()
{
  $this->load->library('user_agent');
  echo $this->agent->referrer();
}

public function invalidAttempts()
{
  $email= $_POST['Email'];
  $result=$this->fetch->employeeLoginAttempts($email);
  echo $result;
}

	//testing code end

 //end code jquery login

 public function loginquery()

	{

 //if(!empty($_POST['g-recaptcha-response']))
 //{
		
		$linkid=$this->session->userdata('linkid');
		$referralsession=$this->session->userdata('referralsession');
		$uurl=$this->session->userdata('url');

		 $completed=$this->session->userdata('rcompleted');

		$emaill=$this->input->post('email');

		$passwordd=$this->input->post('password');
		$remember=$this->input->post('rememberLogin');

		
		$email=base64_encode(base64_encode($emaill));

		$password=base64_encode(base64_encode($passwordd));

		$fetch=$this->fetch->employelogin( $email,$password );

		//if recruiter signin with recruiter email
		$emailexist=$this->fetch->ifrecruiteremail($email);

		if($emailexist==1)
			{
			$this->session->set_flashdata('emailexistemployee','Email you have enetered is registered as a Recruiter.If you are recruiter then click<a href="https://get-job.online/RecruiterLogin">here</a>for signin.');

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

			//if not empty $remember set remember cookie for 7days. 
		if(!empty($remember))
		{
			set_cookie('employeeLoginCookie',$remember,'604800');
			
		}

			set_cookie('sessionCookieEmployee',$fetch['id'],'7200');
			$fetchhash=$this->fetch->fetchhash($email);

			$checkfetch=$this->fetch->checkemployeeverified( $email,$password );



				/*if($checkfetch==0)

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



			}*/

			




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
				
				redirect(base_url().'EmployeeJobDetail?uid='.$linkid);
			}
			elseif (!empty($referralsession)) {

				redirect(base_url().'ReferralDashboard');
			}

			else

			{

			redirect(base_url().'EmployeeDashboard');

			//$this->load->view('employerprofile',['data'=>$data,'categoryindia'=>$categoryindia,'categorycanada'=>$categorycanada,'jobs'=>$jobs,'category'=>$category]);

 			}

 		}

 		else

 		{

 			redirect(base_url().'ReferralDashboard');

 		}

			

		

		

	}
}
/*}
else
{
	$this->session->set_flashdata('captcha','Error! Captcha code does not match.');
	$this->session->set_flashdata('captcha_class','captcha_class');
	redirect(base_url().'employee/login');
}*/
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
	 	delete_cookie('employeeLoginCookie');
	 	delete_cookie('sessionCookieEmployee');

	 	//$ssession=$this->session->userdata('employe_id');

	 	redirect(base_url());

	 }

	

	/*public function update()

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

		  $dob=base64_encode(base64_encode($this->input->post));
		 

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

		/*$insert=array(

			

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

			'employee_phone'=>$phone,

			'employee_birthdate'=>$dob
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

}

}*/







public function applycheckbalance()

 {

 	$country=get_cookie('countryCookie');
	$category=$this->search->category($country);
 	 $uid=$this->input->post('jid');

 	 $employer_id=$this->input->post('recruiter');

 	 $cookieEmployee=get_cookie('sessionCookieEmployee');
 	  $useridd=$this->session->userdata('employe_id');
 	  if(empty($useridd) && !empty($cookieEmployee))
 	  {
 	  	$userid=$cookieEmployee;
 	  }
 	  elseif (empty($cookieEmployee) && !empty($useridd)) {
 	  	$userid=$useridd;
 	  }
 	  elseif (!empty($cookieEmployee) && !empty($useridd)) {
 	  	$userid=$useridd;
 	  }
 	  date_default_timezone_set('Asia/Kolkata');
		$date= date('Y-m-d H:i:s'); 
 	 //$date = round(microtime(true) * 1000);

 $result=$this->fetch->checkbalanceapply();

 	if($result<=24)

 	{


 		echo 0;
 		/*$fetch=$this->fetch->fetchemployeprofile();

 		$this->load->view('addbalanceemployee',['data'=>$fetch,'category'=>$category]);
 		*/
 		//redirect('employer/addbalance');

 		//$this->load->view('payumoneyform');

 	

 	}

 	else

 	{


		$result=$this->insert->decrementemployerbalance();

		$data=array('applyjob_employee_id'=>$userid,'applyjob_jid'=>$uid,'applyjob_date'=>$date,'applyjob_employer_id'=>$employer_id);

		$applyjob=$this->insert->applyjob($data);
		echo 1;
/*
 		$this->session->set_flashdata('alert','You have successfully applied for this job.');

		$this->session->set_flashdata('alert_class','alert-success');

		redirect($_SERVER['HTTP_REFERER']);*/

 	

 	}

 }


//if user have not minimum balance 
 public function addBalanceLoad()
 {
 	$country=get_cookie('countryCookie');
	$category=$this->search->category($country);
 	$fetch=$this->fetch->fetchemployeprofile();
	$this->load->view('addbalanceemployee',['data'=>$fetch,'category'=>$category]);
 	
 }

 public function addbalance()

 {
$country=get_cookie('countryCookie');
$sessionn=$this->session->userdata('employe_id');

$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($sessionn) && empty($sessionCookie))
		{
			$session=$sessionn;
		}
		elseif (!empty($sessionCookie) && empty($sessionn)) {
			$session=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($sessionn)) {
			$session=$sessionn;
		}
 	if(!empty($session))
 	{



 	$fetch=$this->fetch->fetchemployeprofile();

 	

			$category=$this->search->category($country);

			$jobs= $this->fetch->alljobs($country);



 	$this->load->view('addbalanceemployee',['data'=>$fetch,'category'=>$category,'job'=>$jobs]);
}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
}
 }

public function addpayment()

 {

 	$amount=$this->input->post('example');

 	print_r($amount);

 }
 public function ssearchh()
 {
 	


	$jlocation=$this->search->jobslocation();
	$country=get_cookie('countryCookie');//$this->session->userdata('country');
	
  	$fmax=$this->fetch->fetchmax();

  	  $categories=$this->fetch->fetchcategory();

  	//$category1=$this->uri->segment(3);
  	//$category=base64_decode(base64_decode($category1));
  	  $category=$this->input->post('category');
  	$llocation=$this->input->get('location');

  	

  	$categoryy=$this->search->category($country);

 	$dataa= $this->fetch->fetchemployeprofile();


  	 $location=$this->input->post('location');

  	 $locationn=ucfirst($this->input->post('location'));

  	 $location1=$locationn;
	$submitjoblocation=$this->fetch->submitjoblocation();
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

  			

  		}

  		if($rresult!=null)

  		{

  			
  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			 $result=json_decode(json_encode($rresult), true);

  			

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

  			
  		}

  		if($ddata!=null)

  		{


  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			

  		}  	

  	}



  	elseif(!empty($category) && empty($job) && empty($location))

  	{

  		

  		$data=$this->search->searchjobcategory($category);

  		$employer_id=$data['employer_id'];

  		

  		$rresult=$data['result'];

  		$result=json_decode(json_encode($rresult), true);


  	

  	}



  	elseif(!empty($location) && !empty($job))

  	{
  		//echo 'location and job not empty';

  		$data=$this->search->searchboth($location,$job,$location1);

  		$rresult=$data['result'];

  		if($rresult==null)

  		{

  			$result=json_decode(json_encode($rresult), true);

  		

  		

  		}

  		if($rresult!=null)

  		{

  			

  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

 ;

  		

  		}

  	

  	}

  }

 
 }






  public function search()

  {

  	$sessionCookie=get_cookie('sessionCookieEmployee');
$session=$this->session->userdata('employe_id');
/*if(!empty($session) || !empty($sessionCookie))
{*/


	$jlocation=$this->search->jobslocation();
	$country=get_cookie('countryCookie');//$this->session->userdata('country');
	
  	$fmax=$this->fetch->fetchmax();

  	  $categories=$this->fetch->fetchcategory();

  	  if(!empty($_GET['category']))
  	  {
  		$category1=$_GET['category'];
  		$category=base64_decode(base64_decode($category1));
  	}
  	elseif (!empty($this->input->post('category'))) {
  		$category=$this->input->post('category');
  	}
  	  

  	  
  	$llocation=$this->input->get('location');

  	

  	$categoryy=$this->search->category($country);

 	$dataa= $this->fetch->fetchemployeprofile();


  	 $location=$this->input->post('location');

  	 $locationn=ucfirst($this->input->post('location'));

  	 $location1=$locationn;
	$submitjoblocation=$this->fetch->submitjoblocation();
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

      $this->session->set_userdata('searchWidgetLocationSession',$location);

  		$data=$this->search->searchlocation($location,$location1);

  	 $rresult=$data['result'];
  	

  		if($rresult==null)

  		{
  			 $result=json_decode(json_encode($rresult), true);

  			 
  			$this->load->view('jobsearchresult',['location'=>$jlocation,'submitjoblocation'=>$submitjoblocation,'data'=>'null','data11'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($rresult!=null)

  		{

  			
  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'balance'=>$dataa,'category'=>$categoryy,'categories'=>$categories]);

  		}

  	}

  	elseif(!empty($job) && empty($location) && empty($category))

  	{
      $this->session->set_userdata('searchWidgetJobSession',$job);
  		//echo 'job not empty';

  		$data=$this->search->searchjob($job);

  		$ddata=$data['result'];

  		if($ddata==null)

  		{	

  			

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  		$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>'null','data11'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($ddata!=null)

  		{


  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}  

  	}



  	elseif(!empty($category) && empty($job) && empty($location))

  	{
//echo 'category not empty';
        $this->session->set_userdata('searchWidgetCategorySession',$category);
  		

  		$data=$this->search->searchjobcategory($category);

  		$employer_id=$data['employer_id'];

  		

  		$rresult=$data['result'];

  		$result=json_decode(json_encode($rresult), true);

  		$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  	

  	}



  	elseif(!empty($location) && !empty($job))

  	{
      $this->session->set_userdata('searchWidgetLocationSession',$location);
      $this->session->set_userdata('searchWidgetJobSession',$job);
  		//echo 'location and job not empty';

  		$data=$this->search->searchboth($location,$job);

  		$rresult=$data['result'];
  		
  		if($rresult==null)


  		{

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>'null','data11'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		if($rresult!=null)

  		{

  			

  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		//$this->load->view('jobsearchresult');


  	}
  	elseif(!empty($location) && !empty($category))
  	{

      $this->session->set_userdata('searchWidgetLocationSession',$location);
      $this->session->set_userdata('searchWidgetCategorySession',$category);

  		 $data=$this->search->searchboth2($location,$category);
 
  		 if(!empty($data['employer_id']))
  		 {
  		 $employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);
}
else
{
	$employer_id='';
}
  			if(!empty($data['result']))
  			{
  			$rresult=$data['result'];
}
else
{
	$rresult='';
}
  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);
  	}

  }
/*
}
else
{
	$this->session->set_flashdata('session_destroy','Session Destroyed please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
}*/

 }

//when serach by index widget

  public function searchNoSession()

  {

    $this->session->unset_userdata('startSearchCategory');
    $this->session->unset_userdata('startSearchLocation');

  	$sessionCookie=get_cookie('sessionCookieEmployee');
	  $session=$this->session->userdata('employe_id');

	$jlocation=$this->search->jobslocation();
	$country=get_cookie('countryCookie');//$this->session->userdata('country');
	
  	$fmax=$this->fetch->fetchmax();

  	  $categories=$this->fetch->fetchcategory();

  	  if(!empty($_GET['category']))
  	  {
  		$category1=$_GET['category'];
  		$category=base64_decode(base64_decode($category1));
  	}
  	elseif (!empty($this->input->post('category'))) {
  		$category=$this->input->post('category');
  	}
  	  

  	  
  	$llocation=$this->input->get('location');

  	

  	$categoryy=$this->search->category($country);

 	$dataa= $this->fetch->fetchemployeprofile();


  	 $location=$this->input->post('location');

  	 $locationn=ucfirst($this->input->post('location'));

  	 $location1=$locationn;
	$submitjoblocation=$this->fetch->submitjoblocation();
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
  	   
       $this->session->set_userdata('startSearchLocation',$location);

  		if($rresult==null)

  		{
  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresultNoSession',['location'=>$jlocation,'submitjoblocation'=>$submitjoblocation,'data'=>'null','data11'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($rresult!=null)

  		{

  			
  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'balance'=>$dataa,'category'=>$categoryy,'categories'=>$categories]);

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

  		$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>'null','data11'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($ddata!=null)

  		{


  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}  

  	}



  	elseif(!empty($category) && empty($job) && empty($location))

  	{
//echo 'category not empty';
  		
      $this->session->set_userdata('startSearchCategory',$category);

  		$data=$this->search->searchjobcategory($category);

  		$employer_id=$data['employer_id'];

  		

  		$rresult=$data['result'];

  		$result=json_decode(json_encode($rresult), true);

  		$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  	

  	}



  	elseif(!empty($location) && !empty($job))

  	{
  		//echo 'location and job not empty';

  		$data=$this->search->searchboth($location,$job);
      $this->session->set_userdata('startSearchCategory',$category);
  		$rresult=$data['result'];
  		
  		if($rresult==null)


  		{

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>'null','data11'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		if($rresult!=null)

  		{

  			

  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		//$this->load->view('jobsearchresult');


  	}
  	elseif(!empty($location) && !empty($category))

  	{

        $this->session->set_userdata('startSearchCategory',$category);
        $this->session->set_userdata('startSearchLocation',$location);
  		 $data=$this->search->searchboth2($location,$category);
 
  		 if(!empty($data['employer_id']))
  		 {
  		 $employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);
}
else
{
	$employer_id='';
}
  			if(!empty($data['result']))
  			{
  			$rresult=$data['result'];
}
else
{
	$rresult='';
}
  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresultNoSession',['submitjoblocation'=>$submitjoblocation,'location'=>$jlocation,'data'=>$result,'data11'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);
  	}

  }


 }



 public function search2()

  {
  	$country=get_cookie('countryCookie');
  	$jobslocation=$this->search->jobslocation();
$employeeCookie=get_cookie('sessionCookieEmployee');
$session=$this->session->userdata('employe_id');
if(!empty($session) || !empty($employeeCookie))
{
  	  $fmax=$this->fetch->fetchmax();

  	  $categories=$this->fetch->fetchcategory();

  	$location=$this->input->get('location');
  	$category=$this->input->get('category');

  	
  	$categoryy=$this->search->category($country);

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
  		$data11=$this->search->searchlocation11($location);
  	 $rresult=$data['result'];
  	

  		if($rresult==null)

  		{

  			
  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['location'=>$jobslocation,'data11'=>$data11,'data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		}

  		if($rresult!=null)

  		{
  			
  			
  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			 $result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['location'=>$jobslocation,'data11'=>$data11,'data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'balance'=>$dataa,'category'=>$categoryy,'categories'=>$categories]);

  		}

  	}

  	


  	elseif(!empty($category) && empty($location))

  	{


  		
  		$data=$this->search->searchjobcategory($category);

  		$employer_id=$data['employer_id'];

  		

  		$rresult=$data['result'];

  		$result=json_decode(json_encode($rresult), true);

  		$this->load->view('jobsearchresult',['location'=>$jobslocation,'data11'=>$result,'data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

 	

  	}



  	elseif(!empty($location))

  	{

  		

  		

  		$data=$this->search->searchboth1($location);

  		$rresult=$data['result'];

  		if($rresult==null)

  		{
  			echo 'rresult==null';

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['location'=>$jobslocation,'data'=>'null','data'=>'null','fmax'=>$fmax,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		if($rresult!=null)

  		{



  			$employer_id=$data['employer_id'];

  			$employer=$this->fetch->fetchemployer($employer_id);

  			$rresult=$data['result'];

  			$result=json_decode(json_encode($rresult), true);

  			$this->load->view('jobsearchresult',['location'=>$jobslocation,'data'=>$result,'data'=>$result,'fmax'=>$fmax,'employer'=>$employer_id,'category'=>$categoryy,'balance'=>$dataa,'categories'=>$categories]);

  		

  		}

  		$this->load->view('jobsearchresult');

  	}

  }

}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
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

  		echo '<h1 style="text-align:center; color:#D3404E;">Recruiter succerssfully saved into your wishlist.</h1>';

  		?>

  		<script>setTimeout(function(){window.location.href='https://get-job.online'},5000);</script>

  		<?php

  	}

  }

 public function wishlist()

 {
 	$country=get_cookie('countryCookie');
 	
 	$appliedjobsnew=$this->fetch->appliedjobsnew();
 	$uuid=$this->session->userdata('employe_id'); 	
 	$cookieEmployee=get_cookie('sessionCookieEmployee');
 	if(!empty($uuid) || !empty($cookieEmployee))
 	{
 		if(empty($uuid) && !empty($cookieEmployee))
 		{
 			$uid=$cookieEmployee;
 		}
 		elseif (empty($cookieEmployee) && !empty($uuid)) {
 			$uid=$uuid;

 		}
 		elseif (!empty($uuid) && !empty($cookieEmployee)) {
 		$uid=$uuid;
 		}
 	$result=$this->fetch->fetchwishlist();
 	$shortlistnew=$this->fetch->shortlistjobNew();

	$category=$this->search->category($country);

 	$data= $this->fetch->fetchemployeprofile();

 	$appliedemployee=$this->fetch->appliedbyemployee($uid);


 //shortlist jobs
//shortlist job code end

 	
	if($appliedemployee=='null')

	{

		$appliedjid='null';
		$time='null';


	}

	else

	{

	$appliedjid=array();
	$time=array();//array();
	foreach ($appliedemployee as $value) 

	{

		$apply=$value['applyjob_jid'];

		 $appliedjid[] =$this->fetch->singlejobapply($apply);

		 $time[]=$this->fetch->appliedbyemployeetime($uid,$apply);
		 //echo $uid;
		 //echo $appliedjid;
		//print_r($time);

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



 	$this->load->view('savedrecruiter',['shortlistedjobs'=>$shortlistnew,'appliedjobsnew'=>$appliedjobsnew,'appliedtime'=>$time,'data'=>$resultt,'category'=>$category,'dataa'=>$data,'time'=>$result,'appliedjid'=>$appliedjid]);
}
else
{
	$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	redirect(base_url().'EmployeeLogin');
}
 }



 	public function deletewishlist()

	{

		 $id=$this->uri->segment(3).'</br>';

		 $iiid=$this->session->userdata('employe_id');
		 $sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($iiid) && empty($sessionCookie))
		{
			$iid=$iiid;
		}
		elseif (!empty($sessionCookie) && empty($iiid)) {
			$iid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($iiid)) {
			$iid=$iiid;
		}

		if($this->delete->wishlist($id,$iid))

		{

			redirect ($_SERVER['HTTP_REFERER']);

		}



	}


 	public function deleteshortlist()

	{

		 $id=$this->input->post('id');

		 $iiid=$this->session->userdata('employe_id');
		 $sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($iiid) && empty($sessionCookie))
		{
			$iid=$iiid;
		}
		elseif (!empty($sessionCookie) && empty($iiid)) {
			$iid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($iiid)) {
			$iid=$iiid;
		}

		if($this->update->deleteShortlisted($id))

		{

			echo 1;


		}



	}



	public function recruiterdetaill()

  	{

	  	$rid=$this->input->get('uid');

	  	$singleid=$rid;

	  	$idd=$this->session->userdata('employe_id');
	  	$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($idd) && empty($sessionCookie))
		{
			$id=$idd;
		}
		elseif (!empty($sessionCookie) && empty($idd)) {
			$id=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($idd)) {
			$id=$idd;
		}
		 $country=get_cookie('countryCookie');
	  	$data=$this->fetch->fetchemployer($rid);

	  	$category=$this->search->category($country);

	  	$jobs=$this->fetch->featutredrecruiter($singleid);

	  	$this->update->profileviewrecruiter($id);

	  	$wishlistt=$this->fetch->recruiterwishlist($rid);

	  	$this->load->view('recruiterdetail',['data'=>$data,'category'=>$category,'jobs'=>$jobs,'wishlistt'=>$wishlistt]);

  	}



  	public function addwishlist()

  {

  	

  	$uidd=$this->session->userdata('employe_id');
  	$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($uidd) && empty($sessionCookie))
		{
			$uid=$uidd;
		}
		elseif (!empty($sessionCookie) && empty($uidd)) {
			$uid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($uidd)) {
			$uid=$uidd;
		}

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


public function checkFields()
{
	$session='109';
	$fields=$this->fetch->checkfieldsEmployee($session);
print_r($fields);
}

  public function dashboard()
{

//pagination code

$config = array();

       $config["base_url"] = base_url() . "EmployeeDashboard";

       $config["total_rows"] = $this->PaginationTestModel->record_count();

       $config["per_page"] = 4;

       $config["uri_segment"] = 3;

       $this->pagination->initialize($config);

       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

       $resultsnew = $this->PaginationTestModel->

           fetch_departments($config["per_page"], $page);

       $linknew = $this->pagination->create_links();

       $articles=$this->fetch->fetchArticles();
//pagination code end 	


 $country=get_cookie('countryCookie');

 $sessioncookie=get_cookie('sessionCookieEmployee');

 $sessionId=$this->session->userdata('employe_id');
if(!empty($sessionId) || !empty($sessioncookie))
{

	if(!empty($sessionId) && empty($sessioncookie))
	{
		$session=$sessionId;
	}
	elseif(empty($sessionId) && !empty($sessioncookie))
	{
		$session=$sessioncookie;
	}
	elseif(!empty($sessionId) && !empty($sessioncookie))
	{
		$session=$sessionId;
	}
	$uid=$session;


	$last7=$this->fetch->profileViewsLast7($session);
	$shortlistGraph1=$this->fetch->shortlistGraph($session);
if($shortlistGraph1=='' || empty($shortlistGraph1))
{
	$shortlistGraph = 0;
}
else
{
	$shortlistGraph = $shortlistGraph1;
}

	$certification=$this->fetch->fetchCertification($session);
 
	$employeeQualification=$this->fetch->fetchemployequalification($uid);
	$resultQualification=$this->fetch->fetchemployequalificationResult($uid);
	$employeeExperience=$this->fetch->fetchemployeexperience($uid);

	$fresherExperience=$this->fetch->fetchemployeexperienceid($uid);
	$experienceSum=$this->fetch->experienceSum($uid);
	  $portfolio=$this->fetch->fetchPortfolio($session);
    $portfolioLimit=$this->fetch->fetchPortfolioLimit($session);
		$checkupdate=get_cookie('UpdateProfileEmployee');
		$fields=$this->fetch->checkfieldsEmployee($session);

		if($fields!='not_Null' && empty($checkupdate))
		{
      //echo '1';
			$update='set';
			set_cookie('UpdateProfileEmployee',$update,'259200');
			redirect(base_url().'EmailsController/employeeDashboardEmail?email='.$fields);
			
		}
		elseif(($fields!='not_Null' && !empty($checkupdate)) || $fields=='not_Null')
		{

     
  		$data= $this->fetch->fetchemployeprofile();
      

		$completed=$this->session->userdata('rcompleted');
		$category=$this->search->category($country);
	
        $countreview=$this->search->countreviewemployee($session);
        $countrating=$this->search->countratingemployee($session);
         $totalrating=$this->fetch->ratingemployee($session);
		$jobs= $this->fetch->alljobs($country);
		$categoryindia=$this->search->categoryindia();
		$categorycanada=$this->search->categorycanada();

		$employee1star=$this->fetch->employee1star($session);
         $employee2star=$this->fetch->employee2star($session);
		$employee3star= $this->fetch->employee3star($session);
		$employee4star=$this->fetch->employee4star($session);
		$employee5star=$this->fetch->employee5star($session);
		
		if($totalrating!=0)
		{
			$ratingstar=$totalrating/$countrating;
		}
		else
		{
			$ratingstar=0;
		}

      if(!empty($completed))
{

		echo '2';//redirect(base_url().'ReferralDashboard');

}

else

{



     $this->load->view('employerprofile',['fresherExperience'=>$fresherExperience,'employeeExperience'=>$employeeExperience,'experienceSum'=>$experienceSum,'employeeQualification'=>$employeeQualification,'certification'=>$certification,'shortlistGraphh'=>$shortlistGraph,'last7'=>$last7,'portfolio'=>$portfolio,'portfolioLimit'=>$portfolioLimit,'resultsnew'=>$resultsnew,'articles'=>$articles,'links'=>$linknew,'employee1star'=>$employee1star,'employee2star'=>$employee2star,'employee3star'=>$employee3star,'employee4star'=>$employee4star,'employee5star'=>$employee5star,'ratingstar'=>$ratingstar,'totalrating'=>$totalrating,'ratingcount'=>$countrating,'reviewcount'=>$countreview,'data'=>$data,'jobs'=>$jobs,'categorycanada'=>$categorycanada,'categoryindia'=>$categoryindia,'category'=>$category,'resultQualification'=>$resultQualification]); 

}

}
}
else
{

  echo 'last';
	//$this->session->set_flashdata('session_destroy','Session Expired please login again for any activity.');
	//$this->session->set_flashdata('session_destroy_class','alert alert-danger');
	//redirect(base_url().'EmployeeLogin');
}

  }

  //show singlearticle
  public function articleView()
  {
  		$id=$this->input->get('aid');
  		$articles=$this->fetch->fetchArticles();
	  	$country=get_cookie('countryCookie');
  		$data= $this->fetch->fetchemployeprofile();
		$category=$this->search->category($country);
  		$jobs= $this->fetch->alljobs($country);
		$categoryindia=$this->search->categoryindia();
		$categorycanada=$this->search->categorycanada();
		$singlearticles=$this->fetch->singleArticle($id);
		$singlearticle=$singlearticles['result'];
		$checkid=$singlearticles['id'];
		$articleUid=$singlearticles['articleUid'];
		//check previous id ofarticle
		$checkprevious=$this->fetch->checkPrevious($checkid,$articleUid);
		// check next id of article 
		$checkNext=$this->fetch->checkNext($checkid,$articleUid);
		$this->update->updateArticleView($id);
		//print_r($checkprevious);
		//print_r($checkNext);
  		$this->load->view('ShowArticles',['checknext'=>$checkNext,'checkprevious'=>$checkprevious,'singlearticle'=>$singlearticle,'articles'=>$articles,'edata'=>$data,'data'=>$data,'jobs'=>$jobs,'categorycanada'=>$categorycanada,'categoryindia'=>$categoryindia,'category'=>$category]); 

  }

//fetch previous article
  public function previousArticle()
  {
  	$id=$this->input->get('aid');
  	
  	$singlearticle=$this->fetch->previousArticleSingle($id);


  $singlearticleResult=$singlearticle['result'];
  	 $checkId=$singlearticle['id'];
  	 $articleUid=$singlearticle['articleUid'];

  	// $singlearticlee=$this->fetch->previousArticle($id,$articleUid);

 $checkPrevious=$this->fetch->checkPrevious($checkId,$articleUid);
  	//print_r($singlearticle);
 

		// check next id of article 
		$checkNext=$this->fetch->checkNext($checkId,$articleUid);

  		$articles=$this->fetch->fetchArticles();
	  	$country=get_cookie('countryCookie');
  		$data= $this->fetch->fetchemployeprofile();
		$category=$this->search->category($country);
  		$jobs= $this->fetch->alljobs($country);
		$categoryindia=$this->search->categoryindia();
		$categorycanada=$this->search->categorycanada();
		//$singlearticle=$this->fetch->singleArticle($id);


  		$this->load->view('ShowArticles',['singlearticle'=>$singlearticleResult,'checknext'=>$checkNext,'checkprevious'=>$checkPrevious,'articles'=>$articles,'data'=>$data,'jobs'=>$jobs,'categorycanada'=>$categorycanada,'categoryindia'=>$categoryindia,'category'=>$category]);

  }

  //fetch next article
    public function nextArticle()
  {
  	$id=$this->input->get('aid');
  	
  		$singlearticle=$this->fetch->nextArticleSingle($id);
  $singlearticleResult=$singlearticle['result'];
  	$checkId=$singlearticle['id'];
  		$articleUid=$singlearticle['articleUid'];

  		//$singlearticle=$this->fetch->nextArticle($id,$articleUid);

  	 $checkNext=$this->fetch->checkNext($checkId,$articleUid);
  	$checkPrevious=$this->fetch->checkPrevious($checkId,$articleUid);
  		$articles=$this->fetch->fetchArticles();
	  	$country=get_cookie('countryCookie');
  		$data= $this->fetch->fetchemployeprofile();
		$category=$this->search->category($country);
  		$jobs= $this->fetch->alljobs($country);
		$categoryindia=$this->search->categoryindia();
		$categorycanada=$this->search->categorycanada();
		//$singlearticle=$this->fetch->nextArticle($id);


  		$this->load->view('ShowArticles',['checkprevious'=>$checkPrevious,'singlearticle'=>$singlearticleResult,'checknext'=>$checkNext,'articles'=>$articles,'data'=>$data,'jobs'=>$jobs,'categorycanada'=>$categorycanada,'categoryindia'=>$categoryindia,'category'=>$category]); 

  }



//when user comes from email
  public function checkRegistrationSteps()
{
	
	$singleidd=$this->session->userdata('employe_id');
	$sessionCookie=get_cookie('sessionCookieEmployee');
	$emailcookie=get_cookie('employeeRequiredEmail');
	$stepcookie=get_cookie('employeeRequiredStep');
	
	if(!empty($sessionCookie) || !empty($singleidd))
	{

		 if(!empty($this->input->get('mail'))) 
	 {
	 	 $mail=$this->input->get('mail');
	
	$step=$this->fetch->checkStepsEmployee($mail);
	 	  ?>
	 <form method="post" action="<?= base_url(); ?>EmployeePendingRegistrationSteps" id="check">
	 	<input type="hidden" name="id" value="<?= $mail; ?>">
	 	<input type="hidden" name="step" value="<?= $step; ?>">
	 </form>

	<script>
function myFunction() {
  document.getElementById("check").submit();
}
myFunction();
</script>
	<?php
	 }
	 elseif (!empty($emailcookie) && !empty($stepcookie)) {
		 		$mail1=get_cookie('employeeRequiredEmail');
	 		$step1=get_cookie('employeeRequiredStep');
	 		?>
	 		 <form method="post" action="<?= base_url(); ?>EmployeePendingRegistrationSteps" id="check">
	 	<input type="hidden" name="id" value="<?= $mail1; ?>">
	 	<input type="hidden" name="step" value="<?= $step1; ?>">
	 </form>

	<script>
function myFunction() {
  document.getElementById("check").submit();
}
myFunction();
</script>
	 		<?php
	 }
	}
	elseif(empty($sessionCookie) || empty($singleidd))
	{
		$mail=$this->input->get('mail');
	 	 $stepcookie=$this->fetch->checkStepsEmployee($mail);
	 	 set_cookie('employeeRequiredEmail',$mail,'120');
		set_cookie('employeeRequiredStep',$stepcookie,'120');
		redirect(base_url().'EmployeeLogin');

	}

}
	




public function ttestt()
{
	$country=$this->session->userdata('country');
	$capitalise=ucfirst($country);

	$jobs= $this->fetch->alljobs($country,$capitalise);
}



  public function employeedashboard()

  {

  	$sessionn=$this->session->userdata('employe_id');
  	$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($sessionn) && empty($sessionCookie))
		{
			$session=$sessionn;
		}
		elseif (!empty($sessionCookie) && empty($sessionn)) {
			$session=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($sessionn)) {
			$session=$sessionn;
		}

  		$jid=$_GET['id'];

      if(!empty($session))

{

		redirect(base_url().'EmployeeJobDetail?uid='.$jid);

}

else

{

	$this->session->set_flashdata('loginrequired','You have to signin first for visit jobs.');

	$this->session->set_flashdata('loginrequired_class','alert alert-danger');

       redirect(base_url().'EmployeeLogin');

}

  }


//add certification view
  public function addcertification()
  {

  $uid=$this->input->post('uid');
  	$status=$this->input->post('status');

  	

  	if($status!='status')
  	{
  	

		$data= $this->fetch->fetchemployeprofile();
		$country=get_cookie('countryCookie');
		$category=$this->search->category($country);

  	$this->load->view('addCertification',['Editstatus'=>'','resultUid'=>$uid,'data'=>$data,'category'=>$category]);

  }
  elseif ($status=='status') {
  	

  		

  		$namee=$this->input->post('name');
  		$fetch=$this->fetch->fetchCertificationEdit($namee,$uid);
		$data= $this->fetch->fetchemployeprofile();
		$country=get_cookie('countryCookie');
		$category=$this->search->category($country);

  	$this->load->view('addCertification',['Editstatus'=>$status,'fetch'=>$fetch,'resultUid'=>$uid,'data'=>$data,'category'=>$category]);
  }
  }




//delete certification
public function deletecertification()
{

	  $id=$this->input->post('id');
	
	 		 $array=array('certificateStatus'=>'delete');
	

	 return $this->update->updateCertification($id,$array);
	 

}

//delete certification
public function deleteArticle()
{

	 $id=$this->input->post('id');
	
	 		 
	

	 return $this->update->updateArticleStatus($id);
	 

}




 //add certification query
public function addCertificationQuery()
 {
 	$uid=$this->input->post('uid');
 	if($this->input->post('status')!='status')
 	{
		$certificationname=base64_encode(base64_encode($this->input->post('certificatename')));

			$certificateNumber=$this->input->post('certificatenumber');

           	$certificationprovider=base64_encode(base64_encode($this->input->post('certificateprovider')));


           	$certificationperiod=base64_encode(base64_encode($this->input->post('certificateperiod')));

          
		$userfile=$_FILES['userfile']['name'];
		
		$config= [ 'upload_path' => './certificateImages/',
					'allowed_types' => 'png|jpg|jpeg|gif|doc'];
					$this->upload->initialize($config);

					if($this->upload->do_upload('userfile'))
						{
							
							$data = $this->upload->data();
							 $image_path = base_url("certificateImages/" .$data['raw_name'].$data['file_ext']);
           					 $imagee=$data['raw_name'].$data['file_ext'];
           					}

           					if(empty($imagee))
           					{
           						$imagee='';
           					}
           			
           				$array=array(
           							'certificateThumbnail'=>$imagee
				
           		,'certificateName'=>$certificationname
           		,'certificateNumber'=>$certificateNumber
    
				,'certificateProvider'=>$certificationprovider

				,'certificatePeriod'=>$certificationperiod
				,'uid'=>$uid


);
           			
         	if($this->insert->addCertification($array))
         	{
         		echo 1;
         	}

 }
 elseif ($this->input->post('status')=='status') {

 		$id=$this->input->post('id');
 			$certificationname=base64_encode(base64_encode($this->input->post('certificatename')));

			$certificateNumber=$this->input->post('certificatenumber');

				


           	$certificationprovider=base64_encode(base64_encode($this->input->post('certificateprovider')));

           

           	$certificationperiod=base64_encode(base64_encode($this->input->post('certificateperiod')));

          
           				$array=array(			
				'certificateName'=>$certificationname
           		,'certificateNumber'=>$certificateNumber
    
				,'certificateProvider'=>$certificationprovider

				,'certificatePeriod'=>$certificationperiod
);
           	if($this->update->updateCertification($id,$array))
         	{
         		echo 1;
         		//redirect (base_url()."employee/dashboard");
         	}
 }
}



//loadview for add article
public function addPortfolioView()
{
		$data= $this->fetch->fetchemployeprofile();
		$country=get_cookie('countryCookie');
		$category=$this->search->category($country);

		if($this->input->post('editStatus')=='edit')
		{
		
			$pid=$this->input->post('pid');
			 $portfolio=$this->fetch->fetchPortfolioEmployeeEdit($pid);
			$this->load->view('addPortfolio',['editStatus'=>'edit','portfolio'=>$portfolio,'pid'=>$pid,'data'=>$data,'category'=>$category]);
		}
		else
		{
	
			$result=$this->input->post('uid');
			$this->load->view('addPortfolio',['editStatus'=>'status','resultUid'=>$result,'data'=>$data,'category'=>$category]);
		} 
}




public function profilePublic()
 {	
 	$sessionCookie=get_cookie('sessionCookieEmployee');
		 $emidd=$this->session->userdata('employe_id');
		 if(empty($emid) && !empty($sessionCookie))
		 {
		 	$emid=$sessionCookie;
		 }
		 elseif (empty($sessionCookie) && !empty($emidd)) {
		 	$emid=$emidd;
		 }
		 elseif (!empty($sessionCookie) && !empty($emidd)) {
		 	$emid=$emidd;
		 }
		 elseif(empty($sessionCookie) && empty($emidd))
		 {
		 	$emid=0;//redirect(base_url());
		 }
		 $uid=$emid;
	$data= $this->fetch->fetchemployeprofile();
	$employeeQualification=	$this->fetch->fetchemployequalification($uid);
	$employeeExperience=	$this->fetch->fetchemployeexperience($uid);
	$this->load->view('profilePublic',['employeeQualification'=>$employeeQualification,'employeeExperience'=>$employeeExperience,'data'=>$data,'employee'=>$data]);





 }
 public function decode()
 {
 	$a=base64_encode(base64_encode('1'));
 	$b=base64_encode(base64_encode('2'));
 	$c=$a+$b;
 	$d=base64_decode(base64_decode($c));
 	echo $d;
 }



//delete certification
public function deletePortfolio()
{

	  $id=$this->input->post('id');
	
	 		 $array=array('projectStatus'=>'delete');
	

	return $this->update->updatePortfolio($id,$array);
	 
}

public function addPortfolioQuery()
{

	if($this->input->post('editStatus')!='edit')
	{
	$uid=$this->input->post('uid');
	$projectdescription=$this->input->post('projectdescription');
	
		$startdate=$this->input->post('startdate');
			$enddate=$this->input->post('enddate');
			

	$projectname=base64_encode(base64_encode($this->input->post('projectname')));

          
           	$website=base64_encode(base64_encode($this->input->post('website')));

         

           	$publishedyear=base64_encode(base64_encode($this->input->post('yearpublished')));

           	

           	$array=array(
           		'projectName'=>$projectname
           		,'Description'=>$projectdescription
           		,'ProjectStartDate'=>$startdate
				,'ProjectEndDate'=>$enddate
				,'projectLink'=>$website
				,'PublishedYear'=>$publishedyear
				,'uid'=>$uid
);

        	if($this->insert->employeeProject($array))
        	{
        		echo 1;//redirect(base_url().'employee/dashboard');
        	}
        	else
        	{
        		echo 0;
        	}


}
elseif ($this->input->post('editStatus')=='edit') {

        	//second

		$pid=$this->input->post('pid');
		$projectname=base64_encode(base64_encode($this->input->post('projectname')));
		$website=base64_encode(base64_encode($this->input->post('website')));
		$startdate=$this->input->post('startdate');
		$enddate=$this->input->post('enddate');
		$yearpublished=base64_encode(base64_encode($this->input->post('yearpublished')));
		$description=$this->input->post('projectdescription');
		
		$array=array('ProjectName'=> $projectname,
			'projectLink'=> $website,
			'ProjectStartDate'=> $startdate,
			'ProjectEndDate'=> $enddate,
			'PublishedYear'=> $yearpublished,
			'Description'=> $description);

		if($this->update->updateportfolioTable($pid,$array))
		{
			echo 1;
		}
	}

}

//load article view
public function articleBody()
{
	$result=$this->input->get('su');
	$id=$this->input->post('id');
	$data= $this->fetch->fetchemployeprofile();
		$country=get_cookie('countryCookie');
		$category=$this->search->category($country);

	if(!empty($id))
	{
		 $resulttt=$this->fetch->singleArticle($id);
		 $resultdata=$resulttt['result'];
		 $this->load->view('editarticle',['status'=>'edit','editdata'=>$resultdata,'result'=>$result,'data'=>$data,'category'=>$category]);

	}
	else
	{
	
	$this->load->view('addArticle',['result'=>$result,'data'=>$data,'category'=>$category]);
}
}

public function editarticle()
{

	 $heading1=$this->input->post('heading');
	 $body1=$this->input->post('body');
	 $id=$this->input->post('id');
	$heading=base64_encode(base64_encode($heading1));
	$body=base64_encode(base64_encode($body1));
	$this->update->editarticle($heading,$body,$id);
}



//load article view
public function articleBodyQuery()
{
	$userfile=$_FILES['userfile']['name'];
	$uid=$this->input->post('uid');
	$articleheading=base64_encode(base64_encode($this->input->post('articleheading')));
	$articlebody=base64_encode(base64_encode($this->input->post('articlebody')));
	$email=$this->input->post('email');

           $this->session->set_userdata('EmployeeEmail',$email);
                 
	if(empty($userfile))
	{

           	$array=array(
           		'employee_articleHeading'=>$articleheading

				,'employee_articleBody'=>$articlebody
				,'employee_articleUid'=>$uid);

           if($this->insert->addArticle($array))
           {
           		echo 1;//redirect(base_url().'employee/dashboard');
           }

	}
	elseif (!empty($userfile)) {
		

		$config= [ 'upload_path' => './articleImages/',
					'allowed_types' => 'png|jpg|jpeg|gif|doc'];
					$this->upload->initialize($config);

					if($this->upload->do_upload('userfile'))
						{
							
							$data = $this->upload->data();
							 $image_path = base_url("articleImages/" .$data['raw_name'].$data['file_ext']);
           					 $imagee=$data['raw_name'].$data['file_ext'];
           					}

           	$array=array(
           		'employee_articleHeading'=>$articleheading

				,'employee_articleBody'=>$articlebody
				,'employee_articleThumbnail'=>$imagee
				,'employee_articleUid'=>$uid);

           if($this->insert->addArticle($array))
           {
           		echo 1;//redirect(base_url().'employee/dashboard');
           }
	}
					
}

  public function deleteapplied()
{

		$jid=$this->input->post('jid');
		$id=$this->session->userdata('employe_id');
		$sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($id) && empty($sessionCookie))
		{
			$iid=$id;
			
		}
		elseif (!empty($sessionCookie) && empty($id)) {
			$iid=$sessionCookie;
				
		}
		elseif (!empty($sessionCookie) && !empty($id)) {
			$iid=$id;
			
		}
	
		 if($this->update->appliedjob($iid,$jid))
		 {
		 	echo 1;
		 }
	}


	public function deleteeapplied()

	{

	
		 if($this->input->post('jid') && $this->input->post('eid'))

		 {
		 	 $jid=$this->input->post('jid');
		 

		$eid=$this->input->post('eid');

		 $uidd=$this->session->userdata('employe_id');
		 $sessionCookie=get_cookie('sessionCookieEmployee');
		if(!empty($uidd) && empty($sessionCookie))
		{
			$uid=$uidd;
		}
		elseif (!empty($sessionCookie) && empty($uidd)) {
			$uid=$sessionCookie;
		}
		elseif (!empty($sessionCookie) && !empty($uidd)) {
			$uid=$uidd;
		}

		if($this->delete->appliedjobagain($jid,$eid,$uid))

		{
			redirect (base_url().'EmployeeDashboard');

		}
	}
	}



	public function autocompleteTest()
	{
		 
		if (isset($_REQUEST['q'])) {
			$results = $this->data_model->get_data($_REQUEST['q']);
			echo json_encode($results);
		}
	
	}

	public function autocomplete(){
  

        $this->load->view('autocompletetest');
    }

    public function autoCompleteDegree()
    {
    
		if (isset($_REQUEST['q'])) {
			$results = $this->fetch->autoCompleteDegreeModel($_REQUEST['q']);
			echo json_encode($results);
		}
	
    }



//for job postedby a brand
  
   public function loadStartSearchPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
     
        
       
          // All records count
        $allcount = $this->Pagination_model->getStartSearchPaginationCount($country);

        // Get  records
      $users_record = $this->Pagination_model->getStartSearchPaginationData($rowno,$rowperpage);
        
        
        
        // Pagination Configuration
        $config['base_url'] = base_url().'Employee/loadStartSearchPagination';
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

  //for job postedby a brand
  
   public function loadSearchWidgetPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    

       //$city=$this->session->userdata('searchCitySession');
      

        // All records count
        $allcount = $this->Pagination_model->getSearchWidgetPaginationCount();

        // Get  records
      $users_record = $this->Pagination_model->getSearchWidgetPaginationData($rowno,$rowperpage);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'employee/loadSearchWidgetPagination';
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


public function requestMoreInfoRecruiter()
{

	$request=$this->input->post('request');
	$uid=$this->input->post('uid');
	 $sid=$this->input->post('sid');

	$array=['request_uid'=>$uid,'request_sid'=>$sid];
	$this->insert->requestMoreInfoRecruiter($array);
	$requestCount = $this->fetch->requestMoreInfoRecruiterCount($uid);
	if($requestCount>=5)
	{
		   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '0',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           $to='jastgrewal@gmail.com';
             $this->load->library('email', $config);
			$this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Email Verification. Get-job.online');



$body  =  '<i>
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
        <title>*|MC:SUBJECT|*</title>
        
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
			/*@editable*/color:#949494;
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
			/*@editable*/color:#757575;
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
			/*@editable*/color:#007C89;
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
			/*@editable*/color:#757575;
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
			/*@editable*/color:#007C89;
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
        <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
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
                                
                                    
                                        <img align="center" alt="" src="https://mcusercontent.com/484efbcf07b032157d1fc0b97/images/d7c14982-2e7e-4f66-aa56-b491143daa68.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
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
                        
                            <h3>Users are requested more information on your profile . Please click below to complete the requested information.</h3>

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
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                <a class="mcnButton " title="Update Now" href="" target="_blank" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Update Now</a>
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
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
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
                                            <td valign="top" class="footerContainer"></td>
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
           	echo 'success';
           }
	}
	


}



}
?>