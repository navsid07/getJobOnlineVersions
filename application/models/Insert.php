<?php 
class Insert extends CI_Model
{
	 function __construct()
    {
        parent::__construct();

        $this->load->helper('date');
		
    }
		public function recruiterRegister( $array )
		{
			if($this->db->insert('recruiter',$array))
			{
				return 'success';
			}
			
		}

		public function InsertRecruiterReviewReply($array)
		{
			if($this->db->insert('recruiter_rating',$array))
			{
				return 'success';
			}
		}


		public function requestMoreInfoRecruiter($array)
		{
			if($this->db->insert('requestMoreInfoRecruiter',$array))
			{
				return 'success';
			}
		}
//for traffic source
		public function trafficSource($serverArray)
		{
			if($this->db->insert('trafficSource',$serverArray))
			{
				return 'success';
			}
		}

//update shortlist count

public function insertShortlistCount($eid)
{
			
			$datestring = '%Y/%m/%d';
			$time = time();
			$presentdate= mdate($datestring);
			$num=$this->fetch->checkshortlistCount($presentdate,$eid);

			if($num==null)
			{
				$array= array('shortlistCount_employeeid' => $eid, 'shortlistCount_date' => $presentdate,'shortlistCount_count'=> '1');
			$this->db->insert('shortlistCount',$array);
			}
			else
			{
				$this->db->set('shortlistCount_count', '`shortlistcount_Count`+1', FALSE)
			->where(['shortlistCount_date'=>$presentdate,'shortlistCount_employeeid'=>$eid])
			->update('shortlistCount');
				
			}

}


//insert employee education skills
public function employeeRegisterStep4( $array )
		{
			if($this->db->insert('employee_qualification',$array))
			{
				return 'success';
			}
			
		}

		//insert employee education skills
public function employeeRegisterStep6( $array )
		{
			if($this->db->insert('employee_experience',$array))
			{
				return 'success';
			}
			
		}


//update referral recruiter and recruiter referral count

public function insertReferral($referralUid)
{
			
			$datestring = '%Y/%m/%d';
			$year1='%Y';
			$month1='%m';
			$time = time();
			
			$year=mdate($year1);
			$month=mdate($month1);
			$presentdate= mdate($datestring);
			$num=$this->fetch->checkEmployeeReferralCount($presentdate,$referralUid);
			$array= array('referralEmployee_uid' => $referralUid, 'referralEmployee_date' => $presentdate,'referralEmployee_clicks'=> '1','referralEmployee_year'=> $year,'referralEmployee_month'=> $month);
			$this->db->insert('referralEmployee',$array);
			if($num==null)
			{
				$array= array('referralEmployeeCount_uid' => $referralUid, 'referralEmployeeCount_date' => $presentdate,'referralEmployeeCount_clicks'=> '1','referralEmployeeCount_year'=> $year);
			$this->db->insert('referralEmployeeCount',$array);
			}
			else
			{
				$this->db->set('referralEmployeeCount_clicks', '`referralEmployeeCount_clicks`+1', FALSE)
			->where(['referralEmployeeCount_date'=>$presentdate,'referralEmployeeCount_uid'=>$referralUid])
			->update('referralEmployeeCount');
				
			}

}




//update referral recruiter and recruiter referral  count

public function insertReferralRecruiter($referralsUid)
{
			
			$datestring = '%Y/%m/%d';
			$year1='%Y';
			$month1='%m';
			$time = time();
			
			$year=mdate($year1);
			$month=mdate($month1);
			$presentdate= mdate($datestring);
			$num=$this->fetch->checkRecruiterReferralCount($presentdate,$referralsUid);
			$array= array('referralRecruiter_uid' => $referralsUid, 'referralRecruiter_date' => $presentdate,'referralRecruiter_clicks'=> '1','referralrecruiter_year'=> $year,'referralRecruiter_month'=> $month);
			$this->db->insert('referralRecruiter',$array);
			if($num==null)
			{
				$array= array('referralRecruiterCount_uid' => $referralsUid, 'referralRecruiterCount_date' => $presentdate,'referralRecruiterCount_clicks'=> '1','referralRecruiterCount_year'=> $year);
			$this->db->insert('referralRecruiterCount',$array);
			}
			else
			{
				$this->db->set('referralRecruiterCount_clicks', '`referralRecruiterCount_clicks`+1', FALSE)
			->where(['referralRecruiterCount_date'=>$presentdate,'referralRecruiterCount_uid'=>$referralsUid])
			->update('referralRecruiterCount');
				
			}

}


//insert job shortlist count
public function jobShortlistCountInsert($array)
{
			
		return $this->db->insert('jobShortlistCount',$array);
		
}


//insert job shortlist while shortlist a job
public function jobShortlistInsert($array)
{
			
		return $this->db->insert('jobShortlist',$array);
		
}



		//update profile views in another table
		//update employee views in database
		public function employeeviewCount($uid)
		{
			
			$datestring = '%Y/%m/%d';
			$time = time();
			$presentdate= mdate($datestring);

			$num=$this->fetch->checkdateCoiunt($presentdate,$uid);
			if($num==null)
			{
				$array= array('employeeProfileViewCount_eid' => $uid, 'employeeProfileViewCount_date' => $presentdate,'employeeProfileViewCount_view'=> $uid);
			$this->db->insert('employeeProfileViewCount',$array);
			}
			else
			{
				$this->db->set('employeeProfileViewCount_view', '`employeeProfileViewCount_view`+1', FALSE)
			->where(['employeeProfileViewCount_date'=>$presentdate,'employeeProfileViewCount_eid'=>$uid])
			->update('employeeProfileViewCount');
				
			}
			/*
			$array= array('employeeProfileViewCount_eid' => $uid, 'employeeProfileViewCount_date' => $presentdate,'employeeProfileViewCount_view'=> $rid);
			$this->db->insert('employeeProfileViewCount',$array);*/
		}
		//update employee views in database
		public function employeeview($uid)
		{
			$rid=$this->session->userdata('recruiter_id');
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
		elseif (empty($sessionCookie) && empty($ridd)) {
			$rid=0;
		}

			$datestring = '%Y/%m/%d';
			$time = time();
			$presentdate= mdate($datestring, $time);
			$array= array('employeeProfileView_employee_id' => $uid, 'employeeProfileView_date' => $presentdate,'employeeProfileView_employer_id'=> $rid);
			$this->db->insert('employeeProfileView',$array);
		} 

		public function employeeProject( $array )
		{
			return $this->db->insert('employeePortfolio',$array);
			
		}


		//if a employee report a recruiter

		public function reportRecruiter($array)
		{
			return $this->db->insert('reportRecruiter',$array);
		}

		//insert employees article into database 
public function addArticle($array)

{
	return $this->db->insert('employee_articles',$array);
}


		//insert recruiters article into database 
public function addArticleRecruiter($array)

{
	return $this->db->insert('recruiter_articles',$array);
}

		//insert add certification

		public function addCertification($array)
		{
			return $this->db->insert('EmployeeCertification',$array);
		}

		//if a employee report a job
		 public function reportJob($array)
		 {
		 	return $this->db->insert('reportJob',$array);
		 }

		 //if a recruiter report a employee
		 public function reportEmployee($array)
		 {
		 	return $this->db->insert('reportEmployee',$array);
		 }

		  //if a recruiter report a employee
		 public function reportEmployeeArticle($array)
		 {
		 	return $this->db->insert('reportEmployeeArticle',$array);
		 }

		 //if a recruiter report a employee
		 public function reportRecruiterArticle($array)
		 {
		 	return $this->db->insert('reportRecruiterArticle',$array);
		 }

		public function recruiterrating($data)
		{

			if($this->db->insert('recruiter_rating',$data))
			{
				return 'success';
			}
			

		}

		public function reviewreply($data)
		{

			if($this->db->insert('recruiter_rating',$data))
			{
				return 'success';
			}
			

		}

		public function reviewreport($data)
		{

			if($this->db->insert('reportReview',$data))
			{
				return 'success';
			}
			

		}
				
		
		public function employeerating($data)
		{

			if($this->db->insert('employee_rating',$data))
			{
				return 'success';
			}
			

		}

		public function insertreport( $array )
		{
			if($this->db->insert('reports',$array))
			{
				return 'success';
			}
			
		}

//insert payment status in payment history
		public function paymenthistory($array)
		{
			if($this->db->insert('payment_history',$array))
			{
				return 'success';
			}
		}
	

		public function verification( $email )
		{
			$data=array('recruiter_verify'=>'1');
			return $this->db->where('recruiter_email', $email)
		->update('recruiter', $data);
		}

		public function submitjob( $array )
		{
			/*$idd=$this->session->userdata('recruiter_id');
			$sessionRecruiter=get_cookie('sessionCookieRecruiter');
			if(empty($idd) && !empty($sessionRecruiter))
			{
				$id=$sessionRecruiter;
			}
				elseif(!empty($idd) && empty($sessionRecruiter))
			{
				$id=$idd;
			}
				elseif(!empty($idd) && !empty($sessionRecruiter))
			{
				$id=$idd;
			}
			$job_title=$input['job_title'];
			$job_description=base64_encode(base64_encode($input['job_description']));
			$experience_required=base64_encode(base64_encode($input['experience_required']));
			$category=$input['category'];
			$country=base64_encode(base64_encode($input['country']));
			$preffered_location=$input['preffered_location'];
			$minimumqualification=base64_encode(base64_encode($input['lowest_education']));
			$payscale=$input['payscale'];
			
			$date= round(microtime(true) * 1000);
			
			$array=array('submitjob_job_title'=>$job_title,
				'submitjob_job_description'=>$job_description,
				'submitjob_experience_required'=>$experience_required,
				'submitjob_category'=>$category,
				'submitjob_country'=>$country,
				'submitjob_preffered_location'=>$preffered_location,
				'submitjob_lowest_education'=>$minimumqualification,
				'submitjob_payscale'=>$payscale,
				'submitjob_employer_id'=>$id,
				'submitjob_date'=>$date);*/
				 $this->db->insert('submitjob',$array);
			return $this->db->insert_id();
		}

		public function employerRegister( $array )
		{
			
			if($this->db->insert('employer_info',$array))
			{
				
				return 'success';
			}
			
		}
		

//increment employee profilr views
		public function incrementview($uid)
		{
			$this->db->set('employee_profile_viewed', '`employee_profile_viewed`+1', FALSE)
			->where('employee_uid',$uid)
			->update('employer_info');
		}

		public function shortlist($uid)
	{
		 return $q=$this->db->set('employee_shortlist', '`employee_shortlist`+1', FALSE)
		->where('employee_uid',$uid)
		->update('employer_info');
        
	}


	public function employerincrement($uri)
	{
		 return $q=$this->db->set('recruiter_profile_viewed', '`recruiter_profile_viewed`+1', FALSE)
		->where('recruiter_id',$uri)
		->update('recruiter');
        
	}
		public function increment($data)
	{
		 return $q=$this->db->insert('shortlisted',$data);
        
	}
	public function shortlistincrement($uid,$rid)
	{
		$datestring = '%Y/%m/%d';
		$time = time();
		$presentdate= mdate($datestring);
		$data=array('shortlist_employee_id'=>$uid,
	 	'shortlist_employer_id'=>$rid,'shortlist_date'=>$presentdate,'shortlist_status'=>'1');
		 return $q=$this->db->insert('shortlist',$data);
        
	}
	public function decrementemployerbalance()
	{
		$sessionCookie=get_cookie('sessionCookieEmployee');
		$uidd=$this->session->userdata('employe_id');
		if(empty($uidd) && !empty($sessionCookie))
		{
			$uid=$sessionCookie;
		}
		elseif(!empty($uidd) && empty($sessionCookie))
		{
			$uid=$uidd;
		}
		elseif(!empty($sessionCookie) && !empty($uidd))
		{
			$uid=$uidd;
		}

		return $q=$this->db->set('employee_balance', '`employee_balance`-25', FALSE)
		->where('employee_uid',$uid)
		->update('employer_info');
        
	}

public function insertnewsletter($email)
{

	//$email=$this->input->post('email');
	$data=array('email'=>$email);
	$q=$this->db->select('*')
	->where('email',$email)
	->from('newsletter')
	->get();
	$ss=$q->num_rows();
	if($ss==null)
	{
		return $this->db->insert('newsletter',$data);
		
	}
	else
	{
		//echo 'You are successfully regsitered with us.';
   // header('Refresh: 4; URL=http://www.get-job.online');
	}
	
			
}


public function recruitmodel($data)
{
	
	return $this->db->insert('recruitcandidate',$data);
}

public function feedback($data)
{
	return $this->db->insert('rating',$data);
}

public function insertvoting($data)
{
	 $insertdet=$this->db->insert('answers', $data);

	 return $insertdet;
}

public function insertcontactform($form)
{

	 $insertdet=$this->db->insert('contactus', $form);

	 if($insertdet)
	 {
	 	return 'success';
	 }

}

public function saverecruiter( $data )
{
	return $this->db->insert('saved_recruiter', $data);
}

public function employeepayment( $daata )
{
	return $this->db->insert('employee_payment', $daata);
}
public function recruiterpayment( $daata )
{
	return $this->db->insert('recruiter_payment', $daata);
}


public function saveadmin( $data )
{
	return $this->db->insert('datacollection', $data);
}

public function employeesuggestion($data)
{
	return $this->db->insert('suggestedemployee', $data);
}

public function applyjob( $data )
{
		return $this->db->insert('applyjob', $data);
}
	

}
	?>