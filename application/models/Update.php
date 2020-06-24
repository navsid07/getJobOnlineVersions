<?php 
class Update extends CI_Model
{

	public function updateemploye($insert)
	{
		
		$idd=$this->session->userdata('employe_id');
		$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(empty($idd) && !empty($sessionEmployee))
	{
		$id=$sessionRecruiter;
	}
		elseif(!empty($idd) && empty($sessionEmployee))
	{
		$id=$idd;
	}
		elseif(!empty($idd) && !empty($sessionEmployee))
	{
		$id=$idd;
	}
		return $this->db
			->where('employee_uid',$id)
			->update('employer_info',$insert);

	}

	//update job shortlist count table

	public function jobShortlistCount($jid,$presentdate)
{
	 return $q=$this->db->set('jobShortlistCount_Count', '`jobShortlistCount_Count`+1', FALSE)
		->where(['jobShortlistCount_jid'=>$jid,'jobShortlistCount_date'=>$presentdate])
		->update('jobShortlistCount');
}


public function deleteShortlisted($id)
{
	 return $q=$this->db->set('deleteStatus','1')
		->where('jobShortlist_id',$id)
		->update('jobShortlist');
}

//update recruiter password
public function updatePasswordRecruiter($password,$email)
{
	 return $q=$this->db->set('recruiter_password',$password)
		->where('recruiter_email',$email)
		->update('recruiter');
}

//update employee password
public function updatePasswordEmployee($password,$email)
{
	 return $q=$this->db->set('employee_password',$password)
		->where('employee_email',$email)
		->update('employer_info');
}


public function updateArticleStatus($id)
{
	 return $q=$this->db->set('deleteStatus','1')
		->where('article_id',$id)
		->update('employee_articles');
}
public function updateArticleStatusRecruiter($id)
{
	 return $q=$this->db->set('deleteStatus','1')
		->where('recruiter_articleId',$id)
		->update('recruiter_articles');
}

public function editarticle($heading,$body,$id)
{

	 return $q=$this->db->set(['employee_articleHeading'=>$heading,'employee_articleBody'=>$body])
		->where('article_id',$id)
		->update('employee_articles');
}

public function editarticlerecruiter($heading,$body,$id)
{



	 return $q=$this->db->set(['recruiter_articleHeading'=>$heading,'recruiter_articleBody'=>$body])
		->where('recruiter_articleId',$id)
		->update('recruiter_articles');
}

//update hash email recruiter
public function updateEmailHashRecruiter($emailHash,$to_encode)

{
	 return $q=$this->db->set('recruiter_resetHash',$emailHash)
		->where('recruiter_email',$to_encode)
		->update('recruiter');
}


//update hash email employee =0
public function updateResetHashRecruiter($email)

{
	 return $q=$this->db->set('recruiter_resetHash','0')
		->where('recruiter_email',$email)
		->update('recruiter');
}

//update hash email recruiter
public function updateEmailHashRecruiterSecurity($Emailhash,$email)

{
	 return $q=$this->db->set('recruiter_resetHash',$Emailhash)
		->where('recruiter_email',$email)
		->update('recruiter');
}

//update hash email employee
public function updateEmailHashEmployeeSecurity($Emailhash,$email)

{
	 return $q=$this->db->set('employee_resetHash',$Emailhash)
		->where('employee_email',$email)
		->update('employer_info');
}



//update hash email employee =0
public function updateResetHashEmployee($email)

{
	 return $q=$this->db->set('employee_resetHash','0')
		->where('employee_email',$email)
		->update('employer_info');
}




//update article view
public function updateArticleView($id)
{
	 return $q=$this->db->set('employee_articleViews', '`employee_articleViews`+1', FALSE)
		->where('article_id',$id)
		->update('employee_articles');
}

//update recruiter article view
public function updateRecruiterArticleView($id)
{
	 return $q=$this->db->set('recruiter_articleViews', '`recruiter_articleViews`+1', FALSE)
		->where('recruiter_articleId',$id)
		->update('recruiter_articles');
}


//delete shortlisted employee
public function deleteShortlistedEmployee($id,$iid)
{
	 return $q=$this->db->set('shortlist_status', '0')
		->where(['shortlist_employee_id'=>$id,'shortlist_employer_id'=>$iid])
		->update('shortlist');
}

public function updateEmailStatus($email,$array)
{
	return $this->db
			->where('email',$email)
			->update('employer_info',$array);
}

public function updateportfolioTable($pid,$array)
{
	return $this->db
			->where('id',$pid)
			->update('employeePortfolio',$array);
}

public function updateEmailStatusNew($email,$array)
{
	return $this->db
			->where('col3',$email)
			->update('email1',$array);
}


	public function employeestep2($array,$email)
	{
	
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',$array);

	}

public function updateEmployee($array,$uid)
	{
	
		return $this->db
			->where('employee_uid',$uid)
			->update('employer_info',$array);

	}



	//Add Certification
	/*public function addCertification($array,$uid)
	{
	
		return $this->db
			->where('employee_uid',$uid)
			->update('employer_info',$array);

	}*/
	

	//Update Certification
	public function updateCertification($id,$array)
	{
		return $this->db
			->where('id',$id)
			->update('EmployeeCertification',$array);
	}

	//Update Certification
	public function updatePortfolio($id,$array)
	{
		return $this->db
			->where('id',$id)
			->update('employeePortfolio',$array);
	}

	public function addPortfolioQuery($array,$uid)
	{
	
		
		return $this->db
			->where('employee_uid',$uid)
			->update('employer_info',$array);

	}

	public function employeestep3($array,$email)
	{
	
		
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',$array);

	}

	public function appliedjob($iid,$jid)
	{

	$array=['applyjob_deleteStatus'=>'1'];
		 return $q=$this->db
		 //->set('applyjob_deleteStatus','1')
		 ->where(['applyjob_employee_id'=>$iid,'applyjob_jid'=>$jid])
		->update('applyjob',$array); 
	}

	public function employeestep4($array,$email)
	{
	
		
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',$array);

	}

	public function recruiterregister($array,$email)
	{
	
		
		return $this->db
			->where('recruiter_email',$email)
			->update('recruiter',$array);

	}

	public function updateemployeereview($array,$reviewid)
	{

		return $this->db
			->where('rrating_id',$reviewid)
			->update('recruiter_rating',$array);

	}


	
	//update balance when user transfer referral amount
	public function updatebalanceemployee($earning)
	{
		$uidd=$this->session->userdata('employe_id');
		$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$sessionEmployee;
	}
		elseif(!empty($uidd) && empty($sessionEmployee))
	{
		$uid=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$uidd;
	}
		 return $q=$this->db->set('employee_balance', '`employee_balance`+'.$earning, FALSE)
		->where('employee_uid',$uid)
		->update('employer_info');
	}
	//update balance when user transfer referral amount
	public function updatetransferedemployee($earning)
	{
		$uidd=$this->session->userdata('employe_id');
		$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$sessionEmployee;
	}
		elseif(!empty($uidd) && empty($sessionEmployee))
	{
		$uid=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$uidd;
	}
		 return $q=$this->db->set('totalreferrale_transfered', '`totalreferrale_transfered`+'.$earning/25, FALSE)
		->where('totalreferrale_uid',$uid)
		->update('totalreferralemployee');
	}
	//update balance when recruiter transfer referral amount
	public function updatebalancerecruiter($earning)
	{
		$uidd=$this->session->userdata('recruiter_id');
		$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($uidd) && !empty($sessionRecruiter))
	{
		$uid=$sessionRecruiter;
	}
		elseif(!empty($uidd) && empty($sessionRecruiter))
	{
		$uid=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionRecruiter))
	{
		$uid=$uidd;
	}
		 return $q=$this->db->set('recruiter_balance', '`recruiter_balance`+'.$earning, FALSE)
		->where('recruiter_id',$uid)
		->update('recruiter');
	}
	//update balance when recruiter number transfers has been done
	public function updatetransferedrecruiter($earning)
	{
		$uidd=$this->session->userdata('recruiter_id');

		$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($uidd) && !empty($sessionRecruiter))
	{
		$uid=$sessionRecruiter;
	}
		elseif(!empty($uidd) && empty($sessionRecruiter))
	{
		$uid=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionRecruiter))
	{
		$uid=$uidd;
	}
		 return $q=$this->db->set('totalreferralr_transfered', '`totalreferralr_transfered`+'.$earning/50, FALSE)
		->where('totalreferralr_uid',$uid)
		->update('totalreferralrecruiter');
	}

	public function updatehash($email,$newhash)
	{
		$hash=array('employee_hash'=>$newhash);	
		
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',$hash);
	}
	public function updatehashrecruiter($to,$newhash)
	{
		$hash=array('recruiter_hash'=>$newhash);	
		$idd=$this->session->userdata('recruiter_id');
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
		return $this->db
			->where('recruiter_email',$to)
			->update('recruiter',$hash);
	}

	public function favourite($update,$jid)
	{
		return $this->db->where('submitjob_id',$jid)
		->update('submitjob',$update);
	}

	public function applyjobstatus($employee_id,$jid,$status)
	{
		return $this->db->where(['applyjob_employee_id'=>$employee_id,'applyjob_jid'=>$jid])
		->update('applyjob',$status);
	}

	public function recruiterreferralstatus($insert)
	{
		extract($insert);
		//function for referral code
					$length = 10;
   					 $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    					$ReferralCode = '';    

   				 for ($p = 0; $p < $length; $p++) 
   				 {
        			$ReferralCode .= $characters[mt_rand(0, strlen($characters))];
    			}

		return $this->db
			->where('recruiter_email',$email)
			->update('recruiter',array('recruiter_referral_status'=> $status,'recruiter_referral'=>$ReferralCode));

	}
public function employeereferralstatus($insert)
	{
		extract($insert);
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',array('employee_referral_status'=> $status,'employee_referral'=>$ReferralCode));

	}

	public function updatestatus($insert)
	{
		$idd=$this->session->userdata('employe_id');
		$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(empty($idd) && !empty($sessionEmployee))
	{
		$id=$sessionEmployee;
	}
		elseif(!empty($idd) && empty($sessionEmployee))
	{
		$id=$idd;
	}
		elseif(!empty($idd) && !empty($sessionEmployee))
	{
		$id=$idd;
	}
		return $this->db
			->where('employee_uid',$id)
			->update('employer_info',$insert);

	}

	public function updatestatusemployer($insert)
	{
		$idd=$this->session->userdata('recruiter_id');
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
		return $this->db
			->where('recruiter_id',$id)
			->update('recruiter',$insert);
	}

	public function decrementbalance()
	{
		$idd=$this->session->userdata('recruiter_id');
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
		 return $q=$this->db->set('recruiter_balance', '`recruiter_balance`-50', FALSE)
		->where('recruiter_id',$id)
		->update('recruiter');
	}

	public function profileviewrecruiter($id)
	{
		 return $q=$this->db->set('recruiter_profile_viewed', '`recruiter_profile_viewed`+1', FALSE)
		->where('recruiter_id',$id)
		->update('recruiter');
	}

	public function updatejobview($uri)
	{
		 return $q=$this->db->set('submitjob_job_viewed', '`submitjob_job_viewed`+1', FALSE)
		->where('submitjob_id',$uri)
		->update('submitjob');
	}

public function recruiterprofile($data)
{
	$uidd=$this->session->userdata('recruiter_id');
	$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($uidd) && !empty($sessionRecruiter))
	{
		$uid=$sessionRecruiter;
	}
		elseif(!empty($uidd) && empty($sessionRecruiter))
	{
		$uid=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionRecruiter))
	{
		$uid=$uidd;
	}
	 return $q=$this->db
		->where('recruiter_id',$uid)
		->update('recruiter', $data);
}
public function employeebalance($dataa)
{
	$bal='';
	foreach ($dataa as $value) {
		$bal=$value;
	}
	
	$uidd=$this->session->userdata('employe_id');
	$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$sessionEmployee;
	}
		elseif(!empty($uidd) && empty($sessionEmployee))
	{
		$uid=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$uidd;
	}
	  return $q=$this->db->set('employee_balance', '`employee_balance`+'.$bal, FALSE)
		->where('employee_uid',$uid)
		->update('employer_info');
}
public function recruiterbalance($dataa)
{
	$bal=array();
	foreach ($dataa as $value) {
		$bal=$value;
	}
	
	$idd=$this->session->userdata('recruiter_id');
	$sessionRecruiter=get_cookie('sessionCookierecruiter');
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
	  return $q=$this->db->set('recruiter_balance', '`recruiter_balance`+'.$bal , FALSE)
		->where('recruiter_id',$id)
		->update('recruiter');
}

public function deactivatejob($jid)
{
	return $this->db->set('submitjob_deactivate','1')
	->where('submitjob_id',$jid)
	->update('submitjob');
}

public function activatejob($jid)
{
	return $this->db->set('submitjob_deactivate','0')
	->where('submitjob_id',$jid)
	->update('submitjob');
}

public function updatejob($jid,$update)
{
	return $this->db->where('submitjob_id',$jid)
	->update('submitjob',$update);
}


public function employeeregister($array,$email)
	{
	
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',$array);

	}

	public function referralReward($referralFrom)
	{
		$points = 10;
		 return $q=$this->db->set('recruiter_balance', '`recruiter_balance`+'.$points, FALSE)
		 ->where('recruiter_referral',$referralFrom)
		->update('recruiter');
	}

	public function referralRewardEmployee($referralFrom)
	{
		$points = 10;
		 return $q=$this->db->set('employee_balance', '`employee_balance`+'.$points, FALSE)
		 ->where('employee_referral',$referralFrom)
		->update('employer_info');
	}

	public function updateRecruiterPayment($uid,$amount)
	{
		return $q=$this->db->set('recruiter_balance', '`recruiter_balance`+'.$amount, FALSE)
		 ->where('recruiter_uid',$uid)
		->update('recruiter');
	}

	public function updateEmployeePayment($uid,$amount)
	{
		return $q=$this->db->set('employee_balance', '`employee_balance`+'.$amount, FALSE)
		 ->where('employee_uid',$uid)
		->update('employer_info');
	}

//update column value if valu = 0
	public function updateLoginAttempt($email)
	{
		return $q=$this->db->set('employeeLoginAttempt',1)
		 ->where('employee_email',$email)
		->update('employer_info');
	}

	//increment in column value if value not = 0
	public function updateLoginAttemptIncrement($email)
	{
		$increment=1;
		return $q=$this->db->set('employeeLoginAttempt', '`employeeLoginAttempt`+1', FALSE)
		 ->where('employee_email',$email)
		->update('employer_info');
	}

	//update column value if valu = 0
	public function updateLoginAttemptRecruiter($email)
	{
		return $q=$this->db->set('recruiterLoginAttempt',1)
		 ->where('recruiter_email',$email)
		->update('recruiter');
	}


	//update column value if valu = 0
	public function attemptHashRecruiter($attemptHash,$email)
	{
		return $q=$this->db->set(['recruiterAttemptHash'=>$attemptHash,'recruiterAttemptVerification'=>'1'])
		 ->where('recruiter_email',$email)
		->update('recruiter');
	}

	public function attemptHashEmployee($attemptHash,$email)
	{
		return $q=$this->db->set(['employeeLoginAttemptHash'=>$attemptHash,'employeeLoginAttemptVerification'=>'1'])
		 ->where('employee_email',$email)
		->update('employer_info');
	}

	//increment in column value if value not = 0
	public function updateLoginAttemptIncrementRecruiter($email,$loginAttempt)
	{
		if($loginAttempt<=5)
		{
			return $q=$this->db->set('recruiterLoginAttempt', '`recruiterLoginAttempt`+1', FALSE)
			 ->where('recruiter_email',$email)
			->update('recruiter');
		}
	}


	

	//increment in column value if value not = 0
	public function updateLoginAttemptIncrementEmployee($email,$loginAttempt)
	{
		if($loginAttempt<=5)
		{
			return $q=$this->db->set('employeeLoginAttempt', '`employeeLoginAttempt`+1', FALSE)
		 	->where('employee_email',$email)
			->update('employer_info');
		}
	}

	public function attemptHashEmailRecruiter($email1)
	{
		$email=base64_encode(base64_encode($email1));
			
			return $q=$this->db->set(['recruiterAttemptHash'=>'0','recruiterLoginAttempt'=>'0','recruiterAttemptVerification'=>'0'])
		 ->where('recruiter_email',$email)
		->update('recruiter');
	}

	public function attemptHashEmailEmployee($email1)
	{
		$emaill=base64_encode(base64_encode($email1));
			return $q=$this->db->set(['employeeLoginAttemptHash'=>'0','employeeLoginAttempt'=>'0','employeeLoginAttemptVerification'=>'0'])
		 ->where('employee_email',$emaill)
		->update('employer_info');
	}

}