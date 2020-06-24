<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct(); 
	}

	// Fetch records
	public function getData($rowno,$rowperpage,$country) {
	
		$encodedcountry=base64_encode(base64_encode($country));
		$this->db->select('*');
		$this->db->order_by('rand()');
		$this->db->where('submitjob_country',$encodedcountry);
		$this->db->where('submitjob_deactivate','0');
		$this->db->from('submitjob');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
		
	}

	
	// Fetch records
	public function employeeCertificationGetData($rowno,$rowperpage,$session) {
	

		$this->db->select('*');
		$this->db->order_by('id','desc');
	 	$this->db->where('uid',$session);
	 	$this->db->where('certificateStatus!=','delete');
	 	$this->db->from('EmployeeCertification');
	 	$this->db->limit($rowperpage, $rowno);  
	 	$query = $this->db->get();
		return $query->result_array();
		
	}

	// Fetch records if not empty category

	public function searchResultRecruiterPaginationData($rowno,$rowperpage,$category,$country) {
	
		 	$q=$this->db->select('*');
	  		$this->db->where('employee_category',$category);
	  		$this->db->where('employee_country',$country);
	  		$this->db->from('employer_info');
	 		$this->db->limit($rowperpage, $rowno);  
	 		$query = $this->db->get();
			return $query->result_array();
		
	}

	public function searchResultRecruiterPaginationData1($rowno,$rowperpage,$location,$country) {
		 	$this->db->like('employee_preffered_location',$location);
	  		$this->db->where('employee_country',$country);
	  		$this->db->from('employer_info');
	 		$this->db->limit($rowperpage, $rowno);  
	 		$query = $this->db->get();
			return $query->result_array();
		}

		public function searchResultRecruiterPaginationData2($rowno,$rowperpage,$location,$country,$category) {

				$array=array('employee_preffered_location'=>$location,'employee_category'=>$ctegory);
			$this->db->like($array);
	  		$this->db->where('employee_country',$country);
	  		$this->db->from('employer_info');
	 		$this->db->limit($rowperpage, $rowno);  
	 		$query = $this->db->get();
			return $query->result_array();
		
		}




	 public function searchResultRecruiterPaginationCount($category,$country) {
    
		$this->db->select('*');
	  		$this->db->where('employee_category',$category);
	  		$this->db->where('employee_country',$country);
	  		$this->db->from('employer_info');
      	$query = $this->db->get();
      	$result = $query->num_rows();//result_array();
      	return $result;
    }

     public function searchResultRecruiterPaginationCount1($location,$country) {
    
			$this->db->like('employee_preffered_location',$location);
	  		$this->db->where('employee_country',$country);
	  		$this->db->from('employer_info');
      		$query = $this->db->get();
      		$result = $query->num_rows();//result_array();
      		return $result;
    }

 public function searchResultRecruiterPaginationCount2($location,$category,$country) {
    	
    	$array=array('employee_preffered_location'=>$location,'employee_category'=>$ctegory);
		$this->db->like($array);
		$this->db->where('employee_country',$country);
	  		$this->db->from('employer_info');
      	$query = $this->db->get();
      	$result = $query->num_rows();//result_array();
      	return $result;
    }


	 public function employeeCertificationRecordCount($session) {
    
      	//new code is
      	
    	$this->db->select('*');
		$this->db->where('uid',$session);
    	$this->db->where('certificateStatus!=','delete');
      	$this->db->from('EmployeeCertification');
      	$query = $this->db->get();
      	$result = $query->num_rows();//result_array();
      	return $result;
    }


    // Fetch records
	public function employeePortfolioGetData($rowno,$rowperpage,$session) {
	
		$this->db->select('*');
	 	$this->db->where('uid',$session);
	 	$this->db->where('projectStatus!=','delete');
	 	$this->db->from('employeePortfolio');
	 	$this->db->limit($rowperpage, $rowno);  
	 	$q=$this->db->get();
		return $q->result_array();
		
	}
     public function employeePortfolioRecordCount($session) {
    
      	//new code is
    	$this->db->select('*');
		$this->db->where('uid',$session);
    	$this->db->where('projectStatus!=','delete');
      	$this->db->from('employeePortfolio');

      	$query = $this->db->get();
      	$result = $query->num_rows();//result_array();
      	return $result;
    }



//fetch pagination for job categories
	// Fetch records
	public function getCategoryPaginationData($rowno,$rowperpage,$country) {
		
		$country=get_cookie('countryCookie');
		  $countryEncode=base64_encode(base64_encode($country));
	$this->db->select('*');
	$this->db->group_by('submitjob_category');
	$this->db->where('submitjob_category!=','');
	$this->db->where('submitjob_country',$countryEncode);
	$this->db->from('submitjob');
	  $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();	
	}

	 // Select total records
    public function getCategoryPaginationCount($country) {
    	/*
    	old code is
    	$encodedcountry=base64_encode(base64_encode($country));
    	$this->db->select('count(*) as allcount');
    	$this->db->where('submitjob_category!=','');
    	$this->db->where('submitjob_country',$encodedcountry);
    	$this->db->group_by('submitjob_category');
      	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      	return $result[0]['allcount'];*/
      	//new code is
      	 $encodedcountry=base64_encode(base64_encode($country));
    	
    	$this->db->select('*');
		$this->db->where('submitjob_category!=','');
    	$this->db->where('submitjob_country',$encodedcountry);
      	$this->db->from('submitjob');
      	$this->db->group_by('submitjob_category');
      	$query = $this->db->get();
      	$result = $query->num_rows();//result_array();
      	return $result;
    }
    //end pagination code for jo categories




public function getSearchWidgetPaginationData($rowno,$rowperpage) {
		
		//$country=get_cookie('countryCookie');
		 // $countryEncode=base64_encode(base64_encode($country));
	$location=$this->session->userdata('searchWidgetLocationSession');
	$job=$this->session->userdata('searchWidgetJobSession');
	$category=$this->session->userdata('searchWidgetCategorySession');

	if(!empty($location) && empty($job) && empty($category))
	{
		$this->db->select('*');
		$this->db->like('submitjob_preffered_location',$location);
		$this->db->from('submitjob');
	 	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
	}
	if(!empty($job) && empty($location) && empty($category))
	{
		$this->db->select('*');
		$this->db->like('submitjob_job_title',$job);
		$this->db->from('submitjob');
	 	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
	}
	if(!empty($category) && empty($job) && empty($location))
	{
		$this->db->select('*');
		$this->db->like('submitjob_category',$category);
		$this->db->from('submitjob');
	 	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
	}
	if(!empty($location) && !empty($job))
	{
		$this->db->select('*');
		$this->db->like(array('submitjob_preffered_location' => $location,'submitjob_job_title'=>$job));
		$this->db->from('submitjob');
	 	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
	}
	if(!empty($location) && !empty($category))
	{
		$this->db->select('*');
		$this->db->like(array('submitjob_preffered_location'=>$location,'submitjob_category'=>$category));
		$this->db->from('submitjob');
	 	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
	}
	
		return $query->result_array();	
	}

     // Select total records
    public function getSearchWidgetPaginationCount() {
    	
    	$location=$this->session->userdata('searchWidgetLocationSession');
	$job=$this->session->userdata('searchWidgetJobSession');
	$category=$this->session->userdata('searchWidgetCategorySession');

	if(!empty($location) && empty($job) && empty($category))
	{
		$this->db->select('*');
		$this->db->like('submitjob_preffered_location',$location);
		$this->db->from('submitjob'); 
		$query = $this->db->get();
	}
	if(!empty($job) && empty($location) && empty($category))
	{
		$this->db->select('*');
		$this->db->like('submitjob_job_title',$job);
		$this->db->from('submitjob');
		$query = $this->db->get();
	}
	if(!empty($category) && empty($job) && empty($location))
	{
		$this->db->select('*');
		$this->db->like('submitjob_category',$category);
		$this->db->from('submitjob'); 
		$query = $this->db->get();
	}
	if(!empty($location) && !empty($job))
	{
		$this->db->select('*');
		$this->db->like(array('submitjob_preffered_location' => $location,'submitjob_job_title'=>$job));
		$this->db->from('submitjob');
		$query = $this->db->get();
	}
	if(!empty($location) && !empty($category))
	{
		$this->db->select('*');
		$this->db->like(array('submitjob_preffered_location'=>$location,'submitjob_category'=>$category));
		$this->db->from('submitjob'); 
		$query = $this->db->get();
	}
	

      	$result = $query->num_rows();//result_array();
      	return $result;
    }
    //end pagination code for jo categories





//fetch pagination for start search
	// Fetch records
	public function getStartSearchPaginationData($rowno,$rowperpage) {
		
	$country=get_cookie('countryCookie');
	$countryEncode=base64_encode(base64_encode($country));
	$categorySession=$this->session->userdata('startSearchCategory');
    $locationSession=$this->session->userdata('startSearchLocation');
	
	if(!empty($categorySession) && !empty($locationSession))
	{

		$this->db->select('*');
		$this->db->like(array('submitjob_category' => $categorySession, 'submitjob_preffered_location' => $locationSession));
		//$this->db->group_by('submitjob_category');
		//$this->db->where('submitjob_category!=','');
		//$this->db->where('submitjob_country',$countryEncode);
		$this->db->from('submitjob');
		$this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();  

	}
	if(!empty($categorySession) && empty($locationSession))
	{
		$this->db->select('*');
		$this->db->like('submitjob_category',$categorySession);
				//$this->db->group_by('submitjob_category');
		//$this->db->where('submitjob_category!=','');
		//$this->db->where('submitjob_country',$countryEncode);
		$this->db->from('submitjob');
		$this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();  


	}
	if(empty($categorySession) && !empty($locationSession))
	{

		$this->db->select('*');
		$this->db->like('submitjob_preffered_location',$locationSession);
		//$this->db->group_by('submitjob_category');
		//$this->db->where('submitjob_category!=','');
		//$this->db->where('submitjob_country',$countryEncode);
		$this->db->from('submitjob');
		$this->db->limit($rowperpage, $rowno); 
		$query = $this->db->get(); 

	}
	
	return $query->result_array();	
	
	}

	 // Select total records 
    public function getStartSearchPaginationCount($country) {
    	

    	$categorySession=$this->session->userdata('startSearchCategory');
    	$locationSession=$this->session->userdata('startSearchLocation');
      	//new code is
      	$encodedcountry=base64_encode(base64_encode($country));


	if(!empty($categorySession) && !empty($locationSession))
	{
    	$this->db->select('*');
    	$this->db->like(array('submitjob_category' => $categorySession, 'submitjob_preffered_location' => $locationSession));
      	$this->db->from('submitjob');
      	$this->db->group_by('submitjob_category');
      	$query = $this->db->get();
     }

	if(!empty($categorySession) && empty($locationSession))
	{
    	$this->db->select('*');
    	$this->db->like('submitjob_category',$categorySession);
      	$this->db->from('submitjob');
      	$this->db->group_by('submitjob_category');
      	$query = $this->db->get();
     }

	if(empty($categorySession) && !empty($locationSession))
	{
    	$this->db->select('*');
    	$this->db->like('submitjob_preffered_location',$locationSession);
      	$this->db->from('submitjob');
      	$this->db->group_by('submitjob_category');
      	$query = $this->db->get();
     }
      	$result = $query->num_rows();//result_array();
      	return $result;

    }
    //end pagination code for start search


//fetch pagination for most viewed
	// Fetch records
	public function getMostViewedPaginationData($rowno,$rowperpage,$country) {

		$country=get_cookie('countryCookie');
		  $countryEncode=base64_encode(base64_encode($country));
	$this->db->select('*');
	$this->db->order_by('submitjob_job_viewed','desc');
	$this->db->where('submitjob_job_viewed >=','1');
	$this->db->where('submitjob_country',$countryEncode);
	$this->db->from('submitjob');
	  $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();	
	}

	 // Select total records
    public function getMostViewedPaginationCount($country) {
    	
    	$encodedcountry=base64_encode(base64_encode($country));
    	$this->db->select('count(*) as allcount');
    	$this->db->where('submitjob_job_viewed >=','1');
    	$this->db->where('submitjob_country',$encodedcountry);
      	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }
    //end pagination code for most viewed





//fetch pagination for locations widget
	// Fetch records
	public function getLocationPaginationData($rowno,$rowperpage,$country) {
		
	$country=get_cookie('countryCookie');
	$countryEncode=base64_encode(base64_encode($country));
	$this->db->select('*');
	$this->db->group_by('submitjob_preffered_location');
	$this->db->where('submitjob_category!=','');
	$this->db->where('submitjob_country',$countryEncode);
	$this->db->from('submitjob');
	$this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();	
	}

 // Select total records
    public function getLocationPaginationCount($country) {
    	
    	/*
	//old code
    	$encodedcountry=base64_encode(base64_encode($country));
    	$this->db->select('count(*) as allcount');
    	$this->db->group_by('submitjob_preffered_location');
    	$this->db->where('submitjob_category!=','');
    	$this->db->where('submitjob_country',$encodedcountry);
      	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      	return $result[0]['allcount'];*/

      	$encodedcountry=base64_encode(base64_encode($country));
    	$this->db->select('*');
    	$this->db->where('submitjob_category!=','');
    	$this->db->where('submitjob_country',$encodedcountry);
      	$this->db->from('submitjob');
      	$this->db->group_by('submitjob_preffered_location');
      	$query = $this->db->get();
      	$result = $query->num_rows();
      	return $result;

    }
    //end pagination code for location widget

//fetch pagination for locations widget
	// Fetch records
	public function getCitySearchPaginationData($rowno,$rowperpage,$country,$city) {
		
		//$city='Bathinda';
		$country=get_cookie('countryCookie');
		  $countryEncode=base64_encode(base64_encode($country));
	$this->db->select('*');
	$this->db->where('submitjob_preffered_location',$city);
	//$this->db->where('submitjob_country',$countryEncode);
	$this->db->from('submitjob');
	$this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
		return $query->result_array();	
	}


 // Select total records
    public function getCitySearchPaginationCount($country,$city) {
    	
    	//$city='Bathinda';
    	$encodedcountry=base64_encode(base64_encode($country));

  /*
  old code   	$this->db->select('count(*) as allcount');
    	$this->db->where('submitjob_preffered_location',$city);
    	//$this->db->where('submitjob_country',$encodedcountry);
      	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      	return $result[0]['allcount'];
*/
//new code
	$this->db->select('*');
	$this->db->where('submitjob_preffered_location',$city);
	$this->db->from('submitjob');
	$query = $this->db->get();	
    $result = $query->num_rows();
      	return $result;
    }
    //end pagination code for location widget

    //loadmore testing query

     public function getCountry($page){
        $offset = 6*$page;
        $limit = 6;
        //$sql = "select * from submitjob where submitjob_preffered_location = Bathinda limit $offset ,$limit";
        $city='Bathinda';
        $this->db->select('*');
    	$this->db->where('submitjob_preffered_location',$city);
    	//$this->db->where('submitjob_country',$encodedcountry);
    	$this->db->limit($offset, $offset);
      	$this->db->from('submitjob');
      	$query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    //load more testing query code end


//fetch pagination for ctegory search
	// Fetch records
	public function getCategorySearchPaginationData($rowno,$rowperpage,$category) {
	
	$this->db->select('*');
	$this->db->where('submitjob_category',$category);
	$this->db->from('submitjob');
	  $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();	
	}

 // Select total records
    public function getCategorySearchPaginationCount($category) {
    	
    
    	$this->db->select('count(*) as allcount');
    	$this->db->where('submitjob_category',$category);
    	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      	return $result[0]['allcount'];

    }
    //end pagination code for category search


//job posted by 
	// Fetch records
	public function getJobPostedByPaginationData($rowno,$rowperpage) {
	
	$this->db->select('*');
	$this->db->where('submitjob_category!=','');
	$this->db->from('submitjob');
	  $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();	
	}

 // Select total records
    public function getJobPostedByPaginationCount() {
    	
    
    	$this->db->select('count(*) as allcount');
    	$this->db->where('submitjob_category!=','');
    	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      	return $result[0]['allcount'];

    }
    //end job posted by




	// recruiter review pagination code
    public function recruiterreviewCount() {

		    $this->db->where('rrating_parent_review_id',0);
			$this->db->from('recruiter_rating');
			return $this->db->count_all_results();
    }


    // Fetch data according to per_page limit.
public function fetch_data($limit, $start) {

		$this->db->limit($limit,$start);
		$this->db->where('rrating_parent_review_id',0);
		$query = $this->db->get("recruiter_rating");
		if ($query->num_rows() > 0) {
		foreach ($query->result() as $row) {
		$data[] = $row;
		}

		return json_decode(json_encode($data), true);
		}
		return false;

}
//recruiter review pagination code end

// Fetch data for recruiter side paginationit.
public function fetchRecruiterProfileReviewData($limit, $start) {

		$rid=$this->session->userdata('recruiter_id');
		$this->db->limit($limit,$start);
		$this->db->where('rrating_parent_review_id',0);
		$this->db->where('rrating_recruiter_id',$rid);
		$query = $this->db->get("recruiter_rating");
		if ($query->num_rows() > 0) {
		foreach ($query->result() as $row) {
		$data[] = $row;
		}

		return json_decode(json_encode($data), true);
		}
		return false;

}

public function getRecordCountRecruiterProfile() {

		$rid=$this->session->userdata('recruiter_id');
		  $this->db->where('rrating_parent_review_id',0);
		  $this->db->where('rrating_recruiter_id',$rid);
			$this->db->from('recruiter_rating');
			return $this->db->count_all_results();
    	
    }
//code end fetch data

//get record count for jobs posted  by recruiter
    public function getCountRecruiterJobs($id) {

		  $this->db->where('submitjob_employer_id',$id);
			$this->db->from('submitjob');
			return $this->db->count_all_results();
    	
    }


    public function getDataRecruiterJobs($rowno,$rowperpage) {
		
		$id=$this->session->userdata('jobsPostedPagination');
		$this->db->select('*');
		$this->db->where('submitjob_employer_id',$id);
		$this->db->order_by('rand()');
		$this->db->from('submitjob');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
		
	}
//close


//get record count for jobs by me
    public function getCountJobsByMe() {

    	$rid=$this->session->userdata('recruiter_id');
    	$idd=get_cookie('sessionCookieRecruiter');
    	if(!empty($rid) && !empty($idd))
    	{
    		$id=$rid;
    	}
    	elseif(empty($rid) && !empty($idd))
    	{
    		$id=$idd;
    	}
    	elseif (empty($idd) && !empty($rid)) {
    		$id=$rid;
    	}
		  $this->db->where('submitjob_employer_id',$id);
			$this->db->from('submitjob');
			return $this->db->count_all_results();
    	
    }


    public function getDataJobsByMe($rowno,$rowperpage) {
		
	
		$rid=$this->session->userdata('recruiter_id');
    	$idd=get_cookie('sessionCookieRecruiter');
    	if(!empty($rid) && !empty($idd))
    	{
    		$id=$rid;
    	}
    	elseif(empty($rid) && !empty($idd))
    	{
    		$id=$idd;
    	}
    	elseif (empty($idd) && !empty($rid)) {
    		$id=$rid;
    	}
		$this->db->select('*');
		$this->db->where('submitjob_employer_id',$id);
		$this->db->order_by('rand()');
		$this->db->from('submitjob');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
		
	}
//close


	//get record count for jobs by me
    public function getCountJobsByMeTest() {
    	$id=get_cookie('sessionCookieRecruiter');
		  $this->db->where('submitjob_employer_id',$id);
			$this->db->from('submitjob');
			return $this->db->count_all_results();
    	
    }


    public function getDataJobsByMeTest($rowno,$rowperpage) {
		
		$id=get_cookie('sessionCookieRecruiter');
		$this->db->select('*');
		$this->db->where('submitjob_employer_id',$id);
		$this->db->order_by('rand()');
		$this->db->from('submitjob');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
		return $query->result_array();
		
	}
//close



	//get record count for jobs by me
    public function getCountJobsByMe1() {
    	$id=get_cookie('sessionCookieRecruiter');
		  $this->db->where('submitjob_employer_id',$id);
			$this->db->from('submitjob');
			return $this->db->count_all_results();
    	
    }


    public function getDataJobsByMe1($rowno,$rowperpage) {
		
		$id=get_cookie('sessionCookieRecruiter');
		$this->db->select('*');
		$this->db->where('submitjob_employer_id',$id);
		$this->db->order_by('rand()');
		$this->db->from('submitjob');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
		
	}
//close


	// Select total records
    public function getrecordCount($country) {

    	
    	$encodedcountry=base64_encode(base64_encode($country));
    	$this->db->select('count(*) as allcount');
    	$this->db->where('submitjob_country',$encodedcountry);
    	$this->db->where('submitjob_deactivate','0');
      	$this->db->from('submitjob');
      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }





    public function getDatafeaturedemployee($rowno,$rowperpage,$country) {
		
		
		$this->db->select('*');
		//$this->db->order_by('rand()');
		$this->db->where('employee_country',$country);
		$this->db->from('employer_info');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
		
	}


	//review reply get data
public function getReviewReplyCount() 
{
    	$this->db->select('count(*) as allcount');
      	$this->db->from('recruiter_rating');
      	$query = $this->db->get();
      	$result = $query->result_array();
        return $result[0]['allcount'];
}



 	public function getReviewReplyData($rowno,$rowperpage)
 	 {
		
		$this->db->select('*');
		$this->db->order_by('rand()');
		$this->db->from('recruiter_rating');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	return $query->result_array();
		
	}
	//end code review reply data


	 public function getDatarecentlyjoined($rowno,$rowperpage,$country) {
		
		$this->db->select('*')->order_by('rand()');
		$this->db->where('employee_country',$country);
		$this->db->from('employer_info');
	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
		return $query->result_array();

	}

	public function getDataFeaturedEmployeeNew($rowno,$rowperpage,$country) {
		
		$this->db->select('*')->order_by('rand()');
		$this->db->where('employee_country',$country);
		$this->db->from('employer_info');
	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
		return $query->result_array();

	}

	// Select total records
    public function getrecordCountfeaturedemployee($country) {

    	$this->db->select('count(*) as allcount');
    		//$this->db->select('*');
    	$this->db->where('employee_country',$country);
      	$this->db->from('employer_info');
      	$query = $this->db->get();
    	// $result=$this->db->count_all_results();
      	$result = $query->result_array();      
      	return $result[0]['allcount'];
    }

     public function getDatamostlyviewed($rowno,$rowperpage) {
		
		$this->db->order_by('employee_profile_viewed','desc');
		$this->db->where('employee_profile_viewed >=','1');
		$this->db->from('employer_info');
	 $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get(); 	
		return $query->result_array();
		
	}

	// Select total records
    public function getrecordCountmostlyviewed() {

    	$this->db->select('count(*) as allcount');
      	$this->db->from('employer_info');
      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

	
}