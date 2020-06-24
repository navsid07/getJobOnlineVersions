<?php

class Search extends CI_Model
{
	 public function searchlocation($location,$location1)
	 {

	 	$q=$this->db->like(['submitjob_preffered_location'=>$location,'submitjob_preffered_location'=>$location1])
	 	->get('submitjob');
	 	 $qq=json_decode(json_encode($q->result()), true);
	 	 if(!empty($qq))
	 	 {
	 	 $id=$q->row()->submitjob_employer_id;
	 	  return $result=array('result'=>$qq,
	 	 				'employer_id'=>$id);
	
	 	}
	 	else
	 	{
	 		return $result=array('result'=>$qq);
	 	}
	 	 

	 }
	 public function countreviewemployee($session)
	 {
	 	$q=$this->db->select('*')
	 	->where('erating_uid',$session)
	 	->where('erating_description!=','')
	 	->get('employee_rating');
	 	return $result=$q->num_rows();
}

	  public function countratingemployee($session)
	 {
	 	$q=$this->db->select('*')
	 	->where('erating_uid',$session)
	 	->where('erating_rate!=','')
	 	->get('employee_rating');
	 	return $result=$q->num_rows();

	 }

	  public function countreviewrecruiter($session)
	 {
	 	$q=$this->db->select('*')
	 	->where('rrating_recruiter_id',$session)
	 	->where('rrating_description!=','')
	 	->get('recruiter_rating');
	 	return $result=$q->num_rows();
}

	  public function countratingrecruiter($session)
	 {
	 	$q=$this->db->select('*')
	 	->where('rrating_recruiter_id',$session)
	 	->where('rrating_rate!=','')
	 	->get('recruiter_rating');
	 	return $result=$q->num_rows();

	 }

	 public function searchadmin($email)
	 {


	 	$q=$this->db->like(['employee_email'=>$email])
	 	->get('employer_info');
	 	return $qq=json_decode(json_encode($q->result()), true);
	 	
	
	 }

	 public function searchadminRecruiter($email)
	 {


	 	$q=$this->db->like(['recruiter_email'=>$email])
	 	->get('recruiter');
	 	return $qq=json_decode(json_encode($q->result()), true);
	 	
	
	 }


	 public function searchadminuid($email)
	 {


	 	$q=$this->db->like(['employee_email'=>$email])
	 	->get('employer_info');
	 	$qq=json_decode(json_encode($q->result()), true);
	 	if($q->num_rows())
	 	{
	 		return $q->row()->employee_uid;
		}
	 }

	  public function searchadminRecruiterUid($email)
	 {


	 	$q=$this->db->like(['recruiter_email'=>$email])
	 	->get('recruiter');
	 	$qq=json_decode(json_encode($q->result()), true);
	 	if($q->num_rows())
	 	{
	 	return $q->row()->recruiter_id;
	}
	 }



	 public function searchlocation1($location)
	 {

	 	$q=$this->db->like(['submitjob_preffered_location'=>$location])
	 	->group_by('submitjob_preffered_location')
	 	->get('submitjob');
	 	 $qq=json_decode(json_encode($q->result()), true);
	 	 if(!empty($qq))
	 	 {
	 	 $id=$q->row()->submitjob_employer_id;
	 	  return $result=array('result'=>$qq,
	 	 				'employer_id'=>$id);
	
	 	}
	 	else
	 	{
	 		return $result=array('result'=>$qq);
	 	}
	 	 

	 }

	 /*public function joined()
	 {
		$this->db->select('*');
		$this->db->from('employer_info');
		$this->db->join('employee_experience', 'employee_experience.uid = employer_info.employee_uid');
		$this->db->join('employee_qualification', 'employee_qualification.uid = employee_experience.uid'); 
		return $query = $this->db->get();
	 }*/



	  public function searchlocation11($location)
	 {

	 	$q=$this->db->like(['submitjob_preffered_location'=>$location])
	 	->get('submitjob');
	 	return $qq=json_decode(json_encode($q->result()), true);
	 	 
	 }

	 public function searchjob($job)
	 {

	 	$q=$this->db->like('submitjob_job_title',$job)
	 	->get('submitjob');
	 	 $qq=$q->result();
	 	 if(!empty($qq))
	 	 {
	 	 $iid=$q->row()->submitjob_employer_id;
	 	 return $result=array('result'=>$qq,
	 	 				'employer_id'=>$iid);
	 	}
	 	else
	 	{
	 		 return $result=array('result'=>$qq);
	 	}
	 	
	 	
	 }
	  public function searchboth($location,$job)
	  {
	  	$array=array('submitjob_preffered_location'=>$location,'submitjob_job_title'=>$job);
	  		$q=$this->db->like($array)
	 	->get('submitjob');
	 	 $qq=$q->result();

	 if(!empty($qq))
	 {
	 	 $iid=$q->row()->submitjob_employer_id;
	 	 return $result=array('result'=>$qq,
	 	 				'employer_id'=>$iid);
	 }
	 else
	 {
	 	return $result=array('result'=>$qq);
	 }
	  }


	   public function searchboth2($location,$category)
	  {
	  	$array=array('submitjob_preffered_location'=>$location,'submitjob_category'=>$category);
	  		$q=$this->db->like($array)
	 	->get('submitjob');
	 	 $qq=$q->result();
	 	  return json_decode(json_encode($qq), true);
	 if(!empty($qq))
	 {
	 	 $iid=$q->row()->submitjob_employer_id;
	 	 return $result=array('result'=>$qq,
	 	 				'employer_id'=>$iid);
	 	 
	 }
	 else
	 {
	 	return $result=array('result'=>$qq);
	 }
	  }


	  public function searchboth1($location)
	  {
	  	$array=array('submitjob_preffered_location'=>$location);
	  		$q=$this->db->like($array)
	 	->get('submitjob');
	 	 $qq=$q->result();

	 if(!empty($qq))
	 {
	 	 $iid=$q->row()->submitjob_employer_id;
	 	 return $result=array('result'=>$qq,
	 	 				'employer_id'=>$iid);
	 }
	 else
	 {
	 	return $result=array('result'=>$qq);
	 }
	  }


	  public function searchcity($location)
	  {
	  	$q=$this->db->like('submitjob_preffered_location',$location)
	 	->get('submitjob');
	 	return $qq=$q->result();
	  }
	  

	  public function todayjobs($country)
	  {	
	  	$encodedcountry=base64_encode(base64_encode($country));
	  	$q=$this->db->select('*')
	  	->where('submitjob_country',$encodedcountry)
	  	->Order_by('rand()')
	  	->group_by('submitjob_category')
	  	->limit(4)
	  	->from('submitjob')
	 	->get();
	 	 $qq=$q->result();
	 	 return json_decode(json_encode($qq), true);
	  }


	   public function jobslocation()
	  {
	  	$country=get_cookie('countryCookie');
	  	$encodedcountry=base64_encode(base64_encode($country));
	  	$q=$this->db->select('*')
	  	->group_by('submitjob_preffered_location')
	  	->where('submitjob_country',$encodedcountry)
	  	->from('submitjob')
	 	->get();
	 	 $qq=$q->result();
	 	 return json_decode(json_encode($qq), true);
	  }


	   public function category($country)
	  {
	  	$encodedcountry=base64_encode(base64_encode($country));
	  
	  	$q=$this->db->select('*')
	  	->where('submitjob_category!=','')
	  	->where('submitjob_country',$encodedcountry)
	  	->Order_by('rand()')
	  	->group_by('submitjob_category')
	  	->limit(4)
	  	->from('submitjob')
	 	->get();
	 	 $qq=$q->result();
	 	 return json_decode(json_encode($qq), true);
	  }

	  public function categoryindia()
	  {
	   $country=get_cookie('countryCookie');
	  	$q=$this->db->select('*')
	  	->group_by('submitjob_category')
	  	->where('submitjob_country','india')
	  	->from('submitjob')
	 	->get();
	 	 $qq=$q->result();
	 	 return json_decode(json_encode($qq), true);
	  }

	  public function categorycanada()
	  {
	  	$q=$this->db->select('*')
	  	->group_by('submitjob_category')
	  	->where('submitjob_country','canada')
	  	->from('submitjob')
	 	->get();
	 	 $qq=$q->result();
	 	 return json_decode(json_encode($qq), true);
	  }

	  //serarch for recruiter
	  public function searchlocationrecruiter($location,$country)
	  {
	  	
	  	
	  	$q=$this->db->like('employee_preffered_location',$location)
	  	->where('employee_country',$country)
	 	->get('employer_info');
	 	 $qq=$q->result();
	 	 if(!empty($qq))
	 	 {
	 	 $id=$q->row()->employee_uid;
	 	 return $result=array('result'=>$qq,
	 	 				'uid'=>$id);
	 	}
	 	else
	 	{
	 		return $result=array('result'=>$qq);
	 	}
	 	//return json_decode(json_encode($qq), true);
	  }

	   public function searchcategory($job,$country)
	 {
	 	
	 
	 	$q=$this->db->like('employee_category',$job)
	 		->where('employee_country',$country)
	 	->get('employer_info');
	 	 $qq=$q->result();
	 	 if(!empty($qq))
	 	 {
	 	 $iid=$q->row()->employee_uid;
	 	 return $result=array('result'=>$qq,
	 	 				'uid'=>$iid);
	 	}
	 	else
	 	{
	 		 return $result=array('result'=>$qq);
	 	}
	 	
	 	
	 }


	  public function searchbothrecruiter($location,$job,$country)
	  {
	  	
	  
	  	$array=array('employee_preffered_location'=>$location,'employee_category'=>$job);
	  		$q=$this->db->like($array)
	  			->where('employee_country',$country)
	 	->get('employer_info');
	 	 $qq=$q->result();

	 if(!empty($qq))
	 {
	 	
	 	 return $result=array('result'=>$qq);
	 }
	 else
	 {
	 	return $result=array('result'=>$qq);
	 }
	  }


	  public function searchjobcategory($category)
	  {
	  	$q=$this->db->select('*')
	  		->where('submitjob_category',$category)
	  		->from('submitjob')
	  		->get();
	  		
	  		 $qq=$q->result();
	  		 $id=$q->row()->submitjob_employer_id;
	  		return array('result'=>$qq,'employer_id'=>$id);  		
	  }


	  public function searchemployeecategory($category,$country)
	  {
	  
	  	
	  	$q=$this->db->select('*')
	  		->where('employee_category',$category)
	  		->where('employee_country',$country)
	  		->from('employer_info')
	  		->get();
	  		
	  		 return $qq=$q->result();
	  		 
	  		//print_r($qq);
	  		
	  }
	  public function searchemployee($uid)
	  {
	  	$q=$this->db->select('*')
	  		->where('submitjob_id',$uid)
	  		->from('submitjob')
	  		->get();
	  		 $qq=$q->result();
	  		 
	  		return json_decode(json_encode($qq), true);
	  		
	  }

//if user search job click on category
	  public function searchcategoryy($category)
	  {
	  		$q=$this->db->like('submitjob_category',$category)
	  		->get('submitjob');
	  		//echo $q->num_rows();
	  		 $qq=$q->result();
	  		 
	  		 return $qqq= json_decode(json_encode($qq), true);

	  }
	  //if user search job click on category
	  public function searchcategoryrecruiter($category)
	  {
	  		$q=$this->db->like('employee_category',$category)
	  		->get('employer_info');
	  		
	  		 $qq=$q->result();

	  		 return json_decode(json_encode($qq), true);

	  }

}
?>