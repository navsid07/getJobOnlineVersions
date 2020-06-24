<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Pagination extends CI_Controller
 {
 	public function __construct()
 	{
 		 parent::__construct();
 		$this->load->helper('url');
 		$this->load->library('pagination');
 		$this->load->model('Pagination_model');
 	}


public function countt()
{
	$rowno=2;
	$rowperpage=3;
	$test=$this->Pagination_model->getData();
	print_r($test);
}
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
      	$config['base_url'] = base_url().'/Pagination/loadRecord';
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



//pagination new
  public function loadRecordNew($rowno=0){

$country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Pagination_model->getrecordCountfeaturedemployee($country);
if($allcount==0)
      	{
      		$users_record=0;
      	}
      	else
      	{
    // Get records
    $users_record = $this->Pagination_model->getDatafeaturedemployee($rowno,$rowperpage,$country);
 }
    // Pagination Configuration
    $config['base_url'] = base_url().'/Pagination/loadRecordNew';
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
	//


	public function loadRecordfeaturedemployee($rowno=0){
		
		$country=get_cookie('countryCookie');
		
		
     
		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->Pagination_model->getrecordCountfeaturedemployee($country);

      	if($allcount==0)
      	{
      		$users_record=0;
      	}
      	else
      	{
      	// Get  records
     	$users_record = $this->Pagination_model->getDatafeaturedemployee($rowno,$rowperpage,$country);
      	}
      	// Pagination Configuration
      	$config['base_url'] = base_url().'/Pagination/loadRecordfeaturedemployee';
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

	//controller for testing
	public function test()
	{
      //fetch country of user
		$ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
     $ipaddress;
   $substring = substr($ipaddress, 0, strpos($ipaddress, ','));
   $ip_address=$substring;//$_SERVER['REMOTE_ADDR'];
 
		/*Get user ip address details with geoplugin.net*/
		$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
		$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
		 
		/*Get City name by return array*/
		$city = $addrDetailsArr['geoplugin_city'];
		 
		/*Get Country name by return array*/
		$country = 'india';//$addrDetailsArr['geoplugin_countryName'];
		$capitalise=ucfirst($country);
		$this->load->model('pagination_model');
		$rowno=1;
		$rowperpage=2;
	$users_record = $this->Pagination_model->getDatafeaturedemployee($rowno,$rowperpage,$country,$capitalise);
		print_r($users_record);//echo '$data='.$data=$this->pagination_model->getrecordCountfeaturedemployee($country,$capitalise);
	}

	public function loadRecordrecentlyjoined($rowno=0){

		$country=get_cookie('countryCookie');
		// Row per page
		$rowperpage = 4;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->Pagination_model->getrecordCountfeaturedemployee($country);
	
      	if($allcount==0)
      	{
      		$users_record=0;
      	}
      	else
      	{
      	// Get  records
     	$users_record = $this->Pagination_model->getDatarecentlyjoined($rowno,$rowperpage,$country);
      	}
      	// Pagination Configuration
      	$config['base_url'] = base_url().'/Pagination/loadRecordrecentlyjoined';
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


  public function loadRecordFeaturedEmployeeNew($rowno=0){

    $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
        
        // All records count
        $allcount = $this->Pagination_model->getrecordCountfeaturedemployee($country);
  
        if($allcount==0)
        {
          $users_record=0;
        }
        else
        {
        // Get  records
      $users_record = $this->Pagination_model->getDataFeaturedEmployeeNew($rowno,$rowperpage,$country);
        }
        // Pagination Configuration
        $config['base_url'] = base_url().'/Pagination/loadRecordFeaturedEmployeeNew';
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

//featuredemployee testing
public function featuredTesting($rowno=0){

    $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
        
        // All records count
        $allcount = $this->Pagination_model->getrecordCountfeaturedemployee($country);

        
        if($allcount==0)
        {
          $users_record=0;
        }
        else
        {
        // Get  records
      $users_record = $this->Pagination_model->getDatarecentlyjoined($rowno,$rowperpage,$country);
        }
        // Pagination Configuration
        $config['base_url'] = base_url().'/Pagination/loadRecordrecentlyjoined';
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

 }
 ?>