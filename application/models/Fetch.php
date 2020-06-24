<?php 
class Fetch extends CI_Model
{
	public function SendMailTimer()
	{
		$q=$this->db->where('status','0')
		->from('email1')
	 	->limit(10)
	 	->get();
		return $qq=$q->result_array();
	}


public function traffcAnalyticsTest()
{
	 $qq=$this->db->select("*")
		->from('employer_info')
		->get();
		 return $data= $qq->result_array(); 
		//echo json_decode(json_encode($data),TRUE);
		//return json_encode($data);

//return json_decode(json_encode($qq),TRUE);
}

public function fetchTraffic()
{
	 
	$q=$this->db->select_SUM('count')
	->select('trafficSource')
	->group_by('trafficSource')
	->from('trafficSource')
	->get();
	return $qq=$q->result_array();	
}

public function trafficAnalyticsTest1()
{

	return $qq=$this->db->select("student_id,student_name,marks")
		->from('tbl_marks ')
		->order_by('student_id')
		->get();
			 
}


//fetch referral clicks for admin panel
//yearly count of recruiter for referral dashboard
public function YearlyReferralFetchRecruiter($rid)
{
	$q=$this->db->select_SUM('referralRecruiterCount_clicks')
	->select('referralRecruiterCount_year')
	->group_by('referralRecruiterCount_year')
	->where('referralrecruiterCount_uid',$rid)
	->from('referralRecruiterCount')
	->get();
	return $qq=$q->result_array();	
}


//yearly count of employee for referral dashboard
public function YearlyReferralFetchEmployee($eid)
{
	$q=$this->db->select_SUM('referralEmployeeCount_clicks')
	->select('referralEmployeeCount_year')
	->group_by('referralEmployeeCount_year')
	->where('referralEmployeeCount_uid',$eid)
	->from('referralEmployeeCount')
	->get();

	return $qq=$q->result_array();
}


//fetch used referral uid employee
public function referralsUid($referralFrom)
	{
		$q=$this->db->where(['employee_referral'=>$referralFrom])
		->get('employer_info');
		return $q->row()->employee_uid;
		
	}



//fetch used referral uid recruiter
public function referralsUidRecruiter($referralFrom)
	{
		$q=$this->db->where(['recruiter_referral'=>$referralFrom])
		->get('recruiter');
		return $q->row()->recruiter_id;
		
	}


//public function 
	public function checkdateCoiunt($presentdate,$uid)
	{
		$q=$this->db->where(['employeeProfileViewCount_date'=>$presentdate,'employeeProfileViewCount_eid'=>$uid])
	 	->get('employeeProfileViewCount');
	 	return $result=$q->num_rows();
	}


	//check count while a employee's referral used by someone
	public function checkEmployeeReferralCount($presentdate,$referralUid)
	{
		$q=$this->db->where(['referralEmployeeCount_date'=>$presentdate,'referralEmployeeCount_uid'=>$referralUid])
	 	->get('referralEmployeeCount');
	 	return $result=$q->num_rows();
	}

//check count while a employee's referral used by someone
	public function checkRecruiterReferralCount($presentdate,$referralsUid)
	{
		$q=$this->db->where(['referralRecruiterCount_date'=>$presentdate,'referralRecruiterCount_uid'=>$referralsUid])
	 	->get('referralRecruiterCount');
	 	return $result=$q->num_rows();
	}

	//check count while shortlist a employee by recruiter 
	public function checkshortlistCount($presentdate,$eid)
	{
		$q=$this->db->where(['shortlistCount_date'=>$presentdate,'shortlistCount_employeeid'=>$eid])
	 	->get('shortlistCount');
	 	return $result=$q->num_rows();
	}
//fetch job for morris chart in recruiter/myjobs
	public function MchartFetchJobs($rid)
	{


		$q=$this->db->where('submitjob_employer_id',$rid)
		->order_by('submitjob_id','desc')
		->from('submitjob')
	 	->limit(10)
	 	->get();
		return $qq=$q->result_array();
		
	}


	//fetch jid
	/*public function fetchjobid($rid)
	{
		$q=$this->db->where(['submitjob_employer_id'=>$rid])
		->get('submitjob');
		
		if($q->num_rows())
		{
			//return 'failed';
			return  $q->row()->submitjob_id;
		}
		else
		{
			return  'failed';
		}
	}*/

	//fetch shortlist jobs last 7 days
	public function jobShortlistLast7($rid)
	{
		
		$qq=$this->db->select("*")
		->where('jobShortlistCount_uid',$rid)
		->where( 'jobShortlistCount_date BETWEEN NOW() - INTERVAL 7 DAY AND NOW()', "", false)
		->from('jobShortlistCount')
		->get();
			
			return $qq->result_array(); 
	}

	/*public function shortlistedjobs($sjid)
	{
		$qq=$this->db->select("*")
		->group_by('jobShortlist_jid')
		->where('jobShortlist_jid',$sjid)
		->from('jobShortlist')
		->get();
		$qs= $qq->row()->jobShortlist_jid;
		return array('array'=>$qs);
	}*/

//fetch records last 7 days
	public function profileViewsLast7($session)
	{
		
		$qq=$this->db->select("*")
		->where('employeeProfileViewCount_eid',$session)
		->where( 'employeeProfileViewCount_date BETWEEN NOW() - INTERVAL 7 DAY AND NOW()', "", false)
		//->where( 'employeeProfileViewCount_date BETWEEN NOW() - INTERVAL 7 DAY AND NOW()', "", false)
		->from('employeeProfileViewCount')
		->get();
			
			return $qq->result_array(); 
	}

//fetch records for shortlist for employee profile
	public function shortlistGraph($session)
	{
		$qq=$this->db->select("*")
		->where('shortlistCount_employeeid',$session)
		->where( 'shortlistCount_date BETWEEN NOW() - INTERVAL 7 DAY AND NOW()', "", false)
		
		->from('shortlistCount')
		->get();
			
			return $qq->result_array(); 
	}

//fetch last  years referral count for recruiter
	public function yearlyReferralRecruiter($rid)
	{
		$qq=$this->db->select("*")
		->where('referralRecruiteryearly_uid',$rid)
		->from('recruiterReferral_yearly')
		->get();
			
			return $qq->result_array(); 
	}


//fetch last  years referral count for employee
	public function yearlyReferralEmployee($eid)
	{
		$qq=$this->db->select("*")
		->where('EmployeeReferralYearly_uid',$eid)
		->from('EmployeeReferralYearly')
		->get();
			
			return $qq->result_array(); 
	}


	//fetch last 7 days recrord for employee dashboard
	public function last7ReferralEmployee($eid)
	{
		$qq=$this->db->select("*")
		->where('referralEmployeeCount_uid',$eid)
		->where( 'referralEmployeeCount_date BETWEEN NOW() - INTERVAL 365 DAY AND NOW()', "", false)
		
		->from('referralEmployeeCount')
		->get();
			
			return $qq->result_array(); 
	}

	//fetch last 7 days recrord for recruiter dashboard
	public function last7ReferralRecruiter($rid)
	{
		$qq=$this->db->select("*")
		->where('referralRecruiterCount_uid',$rid)
		->where( 'referralRecruiterCount_date BETWEEN NOW() - INTERVAL 7 DAY AND NOW()', "", false)
		
		->from('referralRecruiterCount')
		->get();
			
			return $qq->result_array(); 
	}


//fetch applied jobs for applied chart for my job controller for recruiter
public function appliedchart($sjid)
{
	$q=$this->db->where('applyjob_jid',$sjid)
	 	->get('applyjob');
	 	return $result=$q->num_rows();
		//return $qq=$q->result_array();
}
	
	//fetch portfolio
	public function fetchPortfolio($session)
	{
		$q=$this->db->select('*')
	 	->where('uid',$session)
	 	->where('projectStatus!=','delete')
	 	->from('employeePortfolio')
	 	->get();
		return $qq=$q->result_array();
	}


	//fetch portfolio
	public function fetchPortfolioLimit($session)
	{
		$q=$this->db->select('*')
	 	->where('uid',$session)
	 	->where('projectStatus!=','delete')
	 	->from('employeePortfolio')
	 	->limit(4)
	 	->get();
		return $qq=$q->result_array();
	}

//fetch portfolio for editing
	public function fetchPortfolioEmployeeEdit($pid)
	{
		$q=$this->db->select('*')
	 	->where('id',$pid)
	 	->from('employeePortfolio')
	 	->get();
		return $qq=$q->result_array();
	}


//fetch certification
	public function fetchCertification($session)
	{
		$q=$this->db->select('*')
		->order_by('id','desc')
	 	->where('uid',$session)
	 	->where('certificateStatus!=','delete')
	 	->from('EmployeeCertification')
	 	->limit(4)
	 	->get();
		return $qq=$q->result_array();
	}

	//fetch certification for editing
	public function fetchCertificationEdit($namee,$uid)
	{
			
			$name='certificateName';
			$cnumber='certificateNumber';
			$cprovider='certificateProvider';
			$q=$this->db->select('*')
	 	->where('certificateName',$namee)
	 	->where('uid',$uid)
	 	->from('EmployeeCertification')
	 	->get();
	return  $qq=$q->result_array();
	
	}

	//fetch certification employee for admin panel

	public function fetchCertificationEmployeeAdmin($uid)
	{
			
			
			$q=$this->db->select('*')
	 	->where('uid',$uid)
	 	->from('EmployeeCertification')
	 	->get();
	return  $qq=$q->result_array();
	
	}

	//fetch portfolio employee for admin panel

	public function fetchPortfolioEmployeeAdmin($uid)
	{
			
			
			$q=$this->db->select('*')
	 	->where('uid',$uid)
	 	->from('employeePortfolio')
	 	->get();
	return  $qq=$q->result_array();
	
	}





	
	//check for login
	public function checkemail($email,$password)
	{
		$q=$this->db->where(['employee_email'=>$email,'employee_password'=>$password])
		->get('employer_info');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'not success';
		}
	}




//fetch articles

	public function fetchArticles()
	{
			$q=$this->db->select('*')
			->where('deleteStatus!=',1)
	 	->order_by('rand()')
	 	->from('employee_articles')
	 	->limit(4)
	 	->get();
		return $qq=$q->result_array();
	
	}



	//fetch articles

	public function fetchArticlesEmployee($uid)
	{
			$q=$this->db->select('*')
			->where('employee_articleUid',$uid)
	 	->from('employee_articles')
	 	->get();
		return $qq=$q->result_array();
	
	}
	//fetch articles

	public function fetchArticlesRecruiter($uid)
	{
			$q=$this->db->select('*')
			->where('recruiter_articleUid',$uid)
	 	->from('recruiter_articles')
	 	->get();
		return $qq=$q->result_array();
	
	}

//check jid already inserted or not

public function jobShortlistCheck($jid,$presentdate)

{
	$q=$this->db->where(['jobShortlistCount_date'=>$presentdate,'jobShortlistCount_jid'=>$jid])
	 	->get('jobShortlistCount');
	 	return $result=$q->num_rows();
}
	//fetch recruiter articles

	public function fetchRecruiterArticles()
	{
			$q=$this->db->select('*')
			->where('deleteStatus!=',1)
	 	->order_by('rand()')
	 	->from('recruiter_articles')
	 	->limit(4)
	 	->get();
		return $qq=$q->result_array();
	
	}

	//fetch single article

	public function singleArticle($id)
	{
			$q=$this->db->select('*')
	 	->where('article_id',$id)
	 	->from('employee_articles')
	 	->get();
	 	$qid=$q->row()->article_id;
	 	$articleUid=$q->row()->employee_articleUid;
		 $qq=$q->result_array();

		 return array('result'=>$qq,'id'=>$qid,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}

	//fetch single article recruiter

	public function singleArticleRecruiter($id)
	{
			$q=$this->db->select('*')
	 	->where('recruiter_articleId',$id)
	 	->from('recruiter_articles')
	 	->get();
	 	$qid=$q->row()->recruiter_articleId;
	 	$articleUid=$q->row()->recruiter_articleUid;
		 $qq=$q->result_array();

		 return array('result'=>$qq,'id'=>$qid,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}

	//fetch previous article
	public function previousArticle($id,$articleUid)
	{
			$q=$this->db->select('*')
		->where('employee_articleUid',$articleUid)
	 	->where('article_id <',$id)
	 	->order_by('article_id','desc')
	 	->from('employee_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->article_id;
	 	$articleUid=$q->row()->employee_articleUid;
		 $qq=$q->result_array();
		 	
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}

//fetch previous article recruiter
	public function previousArticleRecruiter($id,$articleUid)
	{
			$q=$this->db->select('*')
		->where('recruiter_articleUid',$articleUid)
	 	->where('employee_articleId <',$id)
	 	->order_by('recruiter_articleId','desc')
	 	->from('recruiter_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->articleId;
	 	$articleUid=$q->row()->recruiter_articleUid;
		 $qq=$q->result_array();
		 	
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}

	//fetch previous article
	public function previousArticleSingle($id)
	{
			$q=$this->db->select('*')
	 	->where('article_id <',$id)
	 	->order_by('article_id','desc')
	 	->from('employee_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->article_id;
	 	$articleUid=$q->row()->employee_articleUid;
		 $qq=$q->result_array();
		 	
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}


	//fetch previous article recruiter
	public function previousArticleSingleRecruiter($id)
	{
			$q=$this->db->select('*')
	 	->where('recruiter_articleId <',$id)
	 	->order_by('recruiter_articleId','desc')
	 	->from('recruiter_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->recruiter_articleId;
	 	$articleUid=$q->row()->recruiter_articleUid;
		 $qq=$q->result_array();
		 	
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}

	//fetch next article

	public function nextArticle($id,$articleUid)
	{
			$q=$this->db->select('*')
			->where('employee_articleUid',$articleUid)
	 	->where('article_id >',$id)
	 	->from('employee_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->article_id;
	 	$articleUid=$q->row()->employee_articleUid;
		$qq=$q->result_array();
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}

//fetch next article recruiter

	public function nextArticleRecruiter($id,$articleUid)
	{
			$q=$this->db->select('*')
			->where('recruiter_articleUid',$articleUid)
	 	->where('recruiter_articleId >',$id)
	 	->from('recruiter_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->recruiter_articleId;
	 	$articleUid=$q->row()->recruiter_articleUid;
		$qq=$q->result_array();
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}


//fetch next article

	public function nextArticleSingle($id)
	{
			$q=$this->db->select('*')
	 	->where('article_id >',$id)
	 	->from('employee_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->article_id;
	 	$articleUid=$q->row()->employee_articleUid;
		$qq=$q->result_array();
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}


//fetch next article

	public function nextArticleSingleRecruiter($id)
	{
			$q=$this->db->select('*')
	 	->where('recruiter_articleId >',$id)
	 	->from('recruiter_articles')
	 	->limit(1)
	 	->get();
	 	$q1=$q->row()->recruiter_articleId;
	 	$articleUid=$q->row()->recruiter_articleUid;
		$qq=$q->result_array();
		return array('result'=>$qq,'id'=>$q1,'articleUid'=>$articleUid);
		//return json_decode(json_encode($qq),TRUE);
	
	}


	public function checkNext($checkId,$articleUid)
	{
			$q=$this->db->select('*')
		->where('employee_articleUid',$articleUid)
	 	->where('article_id >',$checkId)
	 	->from('employee_articles')
	 	->limit(1)
	 	->get();
	 	return $q1=$q->num_rows();
		
	
	}

	public function checkNextRecruiter($checkId,$articleUid)
	{
			$q=$this->db->select('*')
		->where('recruiter_articleUid',$articleUid)
	 	->where('recruiter_articleId >',$checkId)
	 	->from('recruiter_articles')
	 	->limit(1)
	 	->get();
	 	return $q1=$q->num_rows();
		
	
	}


public function checkPrevious($checkId,$articleUid)
	{
			$q=$this->db->select('*')
		->where('employee_articleUid',$articleUid)
	 	->where('article_id <',$checkId)
	 	->order_by('article_id','desc')
	 	->from('employee_articles')
	 	->limit(1)
	 	->get();
	 	return $q1=$q->num_rows();
		

	}


public function checkPreviousRecruiter($checkId,$articleUid)
	{
			$q=$this->db->select('*')
		->where('recruiter_articleUid',$articleUid)
	 	->where('recruiter_articleId <',$checkId)
	 	->order_by('recruiter_articleId','desc')
	 	->from('recruiter_articles')
	 	->limit(1)
	 	->get();
	 	return $q1=$q->num_rows();
		

	}

	//check for login
	public function RecruiterLoginJquery($email,$password)
	{

		$q=$this->db->where(['recruiter_email'=>$email,'recruiter_password'=>$password])
		->get('recruiter');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'null';
		}
		else
		{
			return 'success';
		}
		
		
	}
public function RecruiterLoginJquery1($email,$password)
	{
		$q=$this->db->where('recruiter_email',$email)
			->where('recruiter_password!=',$password)
			->get('recruiter');
		
		$result1=$q->num_rows();
		if($result1!=null)
		{
			$attempt=$q->row()->recruiterLoginAttempt;
			$result['numRows']='success';
			$result['loginAttempt']=$attempt;
			return $result;
		}
		else
		{
			$result['numRows']='null';
			//$result['loginAttempt']=$attempt;
			return $result;
		}
		
	}
public function RecruiterLoginJquery2($email,$password)
	{
		$q=$this->db->where(['employee_email'=>$email])
		->get('employer_info');
		$result=$q->num_rows();
		if($result!=null)
		{
			return 'success';
		}
		else
		{
			return 'null';
		}
		
	}


public function EmployeeLoginJquery1($email,$password)
	{
		$q=$this->db->where('employee_email',$email)
			->where('employee_password!=',$password)
			->get('employer_info');
		
		$result1=$q->num_rows();
		
		if($result1!=null)
		{
			$attempt=$q->row()->employeeLoginAttempt;
			$result['attemptCount']=$attempt;
			$result['numRows']='success';
			return $result;
		}
		else
		{
			//$result['attemptCount']=$attempt;
			$result['numRows']='null';
			return $result;
		}
	}



//jquery model


			//rating reviews
 public function fetchallreview($session)
	 {
	 	$q=$this->db->select('*')
	 	->order_by('rrating_id','desc')
	 	->where(['rrating_recruiter_id'=>$session,'rrating_parent_review_id'=>'0'])
	 	->from('recruiter_rating')
	 	->get();
		return $qq=$q->result_array();
	
	 	 //return $q->row()->rrating_rate;

	 }

	 			//rating reviews
 public function fetchallreviewrdashboard($session)
	 {
	 	$q=$this->db->select('*')
	 	->order_by('rrating_id','desc')
	 	->where(['rrating_recruiter_id'=>$session,'rrating_parent_review_id'=>'0'])
	 	->from('recruiter_rating')
	 	->get();
		return $qq=$q->result_array();
	
	 	 //return $q->row()->rrating_rate;

	 }

		//rating reviews
 public function fetchreviewrdashboard($session)
	 {
	 	$q=$this->db->select('*')
	 	->order_by('rrating_id','desc')
	 	->where('rrating_recruiter_id',$session)
	 	->where('rrating_parent_review_id!=','0')
	 	->from('recruiter_rating')
	 	->get();
		return $qq=$q->result_array();
	
	 	 //return $q->row()->rrating_rate;

	 }

		//rating reviews
 public function fetchreview($session)
	 {
	 	$q=$this->db->select('*')
	 	->order_by('rrating_id','desc')
	 	->where('rrating_recruiter_id',$session)
	 	->where('rrating_parent_review_id!=','0')
	 	->from('recruiter_rating')
	 	->get();
		return $qq=$q->result_array();
	
	 	 //return $q->row()->rrating_rate;

	 }

	 public function fetchreviewreply($rating_reviewid)
	 {
	 	$q=$this->db->select('*')
	 	//->order_by('rrating_id','desc')
	 	->where('rrating_grandparent_review_id',$rating_reviewid)
	 	->from('recruiter_rating')
	 	->get();
		return $qq=$q->result_array();
	
	 	 //return $q->row()->rrating_rate;

	 }

	 public function fetchchildreview($childid)
	 {
	 	$q=$this->db->select('*')
	 	//->order_by('rrating_id','desc')
	 	->where('rrating_parent_review_id',$childid)
	 	->from('recruiter_rating')
	 	->get();
		return $qq=$q->result_array();
	
	 	 //return $q->row()->rrating_rate;

	 }


	 //check recruiter empty fields for send mail

	 public function checkfields($session)
	 {
	 	$q=$this->db->select('*')
	 	->where('recruiter_id',$session)
	 	->get('recruiter');
	 	$f1=$q->row()->recruiter_contact;
	 	$f2=$q->row()->recruiter_city;
	 	$f3=$q->row()->recruiter_employee_strength;
	 	$f4=$q->row()->recruiter_category;
	 	$f5=$q->row()->recruiter_address;
	 	$f6=$q->row()->recruiter_description;
	 	$f7=$q->row()->recruiter_logo;
	 	$f8=$q->row()->recruiter_established;
	
		if(empty($f1) || empty($f2) || empty($f3) || empty($f4) || empty($f5) || empty($f6) || empty($f7) || empty($f8))
		{
			return $q->row()->recruiter_email;
		}
		else
		{
			return 'not_Null';
		}
	 }


//check employee empty fields for send mail

	 public function checkfieldsEmployee($session)
	 {
	 	$q=$this->db->select('*')
	 	->where('employee_uid',$session)
	 	->get('employer_info');
	 	$f1=$q->row()->employee_city;
	 	$f2=$q->row()->employee_phone;
	 
	 	$f4=$q->row()->employee_category;
	 	
	 	$f6=$q->row()->employee_description;
	 	$f7=$q->row()->employee_profile_pic;

	
		if(empty($f1) || empty($f2) || empty($f4) || empty($f6) || empty($f7))
		{
			return $q->row()->employee_email;
		}
		else
		{
			return 'not_Null';
		}
	 }


	 //

	 //
	 public function checkStepsRecruiter($email)
	 {
	 	$q=$this->db->select('*')
	 	->where('recruiter_email',$email)
	 	->get('recruiter');
	 	$num=$q->num_rows();
	 	if($num==null)
	 	{
	 		echo 'email='.$email;
	 		//print_r($num);
	 		//echo 'hello'; //redirect(base_url());
	 	}
	 	else
	 	{
	 	$f2=$q->row()->recruiter_established;
	 	$f4=$q->row()->recruiter_city;
	 	$f3=$q->row()->recruiter_category;
	 	
	 	if(empty($f2))
	 	{
	 		return '2';
	 	}
	 	elseif (!empty($f2) && empty($f3)) {
	 		return '3';
	 	}
	 	elseif (!empty($f2) && !empty($f3) && empty($f4)) {
	 		return '4';
	 	}
	 	elseif (!empty($f2) && !empty($f3) && !empty($f4)) {
	 		return '5';
	 	}
	 	
	 }
	}


 //
	 public function checkStepsEmployee($email)
	 {
	 	$q=$this->db->select('*')
	 	->where('employee_email',$email)
	 	->get('employer_info');
	 	$num=$q->num_rows();
	 	echo $uid=$q->row()->employee_uid;

	 	//fetch employee education
	 	$q2=$this->db->select('*')
	 	->where('uid',$uid)
	 	->get('employee_qualification');
	 	$qualificationNum=$q2->row()->uid;
	 	if($num==null)
	 	{
	 		echo 'email='.$email;
	 		//print_r($num);
	 		//echo 'hello'; //redirect(base_url());
	 	}
	 	else
	 	{
	 	$f2=$q->row()->employee_city;
	 	$f4=$q->row()->employee_phone;
	 
	 	$f5=$q->row()->employee_category;
	 	$f7=$q->row()->employee_description;
	 	
	 	if(empty($f2))
	 	{
	 		return '2';
	 	}
	 	elseif (!empty($f2) && empty($qualificationNum)) {
	 		return '3';
	 	}
	 	elseif (!empty($f2) && !empty($qualificationNum) && empty($f4)) {
	 		return '4';
	 	}
	 	elseif (!empty($f2) && !empty($qualificationNum) && !empty($f4) && empty($f5)) {
	 		return '5';
	 	}
	 	
	 	elseif (!empty($f2) && !empty($qualificationNum) && !empty($f4) && !empty($f5) && empty($f7)) {
	 		return '7';
	 	}
	 	
	 }
	}


	 public function fetchsinglereview($ratingid)
	 {

	 	$q=$this->db->select('*')
	 	->where('rrating_id',$ratingid)
	 	->from('recruiter_rating')
	 	->get();
	return $qq=$q->result_array();

	 }

	//rating employee
 public function ratingrecruiter($session)
	 {
	 	$q=$this->db->select_sum('rrating_rate')
	 	->where('rrating_recruiter_id',$session)
	 	->get('recruiter_rating');
	 
	 	 return $q->row()->rrating_rate;

	 }

	 // rating 1 star
	 public function recruiter1star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['rrating_recruiter_id'=>$session,'rrating_rate'=>'1'])
	 		 	->from('recruiter_rating')
	 		 	->count_all_results();
	 		 	return $q;
 
	 	 


	  //return $q->row()->erating_rate;

	 }

// rating 2 star
	 public function recruiter2star($session)
	 {
	 $q=$this->db->select('*')
	 	->where(['rrating_recruiter_id'=>$session,'rrating_rate'=>'2'])
	 	->from('recruiter_rating')
		->count_all_results();
	 		 	return $q;
	 	

	 }

// rating 3 star
	 public function recruiter3star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['rrating_recruiter_id'=>$session,'rrating_rate'=>'3'])
	 	->from('recruiter_rating')
		->count_all_results();
	 		 	return $q;
	 	 
	 }

// rating 4 star
	 public function recruiter4star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['rrating_recruiter_id'=>$session,'rrating_rate'=>'4'])
	 	->from('recruiter_rating')
	 	->count_all_results();
	 		 	return $q;

	 }

// rating 5 star
	 public function recruiter5star($session)
	 {
	 	$q=$this->db->select('*')
	 ->where(['rrating_recruiter_id'=>$session,'rrating_rate'=>'5'])
	 	->from('recruiter_rating')
	 	->count_all_results();
	 		 	return $q;
	 	 

	 }

	 // end rating employee



//rating employee
 public function ratingemployee($session)
	 {
	 	$q=$this->db->select_sum('erating_rate')
	 	->where('erating_uid',$session)
	 	->get('employee_rating');
	 
	 	 return $q->row()->erating_rate;

	 }
// rating 1 star
	 public function employee1star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['erating_uid'=>$session,'erating_rate'=>'1'])
	 		 	->from('employee_rating')
	 		 	->count_all_results();
	 		 	return $q;
 
	 	 


	  //return $q->row()->erating_rate;

	 }

// rating 2 star
	 public function employee2star($session)
	 {
	 $q=$this->db->select('*')
	 	->where(['erating_uid'=>$session,'erating_rate'=>'2'])
	 	->from('employee_rating')
		->count_all_results();
	 		 	return $q;
	 	

	 }

// rating 3 star
	 public function employee3star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['erating_uid'=>$session,'erating_rate'=>'3'])
	 	->from('employee_rating')
		->count_all_results();
	 		 	return $q;
	 	 
	 }

// rating 4 star
	 public function employee4star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['erating_uid'=>$session,'erating_rate'=>'4'])
	 	->from('employee_rating')
	 	->count_all_results();
	 		 	return $q;

	 }

// rating 5 star
	 public function employee5star($session)
	 {
	 	$q=$this->db->select('*')
	 	->where(['erating_uid'=>$session,'erating_rate'=>'5'])
	 	->from('employee_rating')
	 	->count_all_results();
	 		 	return $q;
	 	 

	 }

	 // end rating employee





//fetch maximum viewed employee
	public function fetchmaxemployee()
	{
		 $country=get_cookie('countryCookie');
		
		$q=$this->db->
		order_by('employee_profile_viewed','desc')
		->where('employee_profile_viewed >=','1')
		->where('employee_country',$country)
		->limit(4)
		->get('employer_info');
		 $result=$q->result();
		return json_decode(json_encode($result),TRUE);

		
	}

//fetch maximum viewed jobs
	public function fetchmax()
	{
		  $country=get_cookie('countryCookie');
		  $countryEncode=base64_encode(base64_encode($country));
		$q=$this->db->
		order_by('submitjob_job_viewed','desc')
		->where('submitjob_job_viewed >=','1')
		->where('submitjob_country',$countryEncode)
		->limit(4)
		->get('submitjob');
		 $result=$q->result();
		return json_decode(json_encode($result),TRUE);

		
	}

	//fetch location from submitjob viewed jobs
	public function submitjoblocation()
	{
		$q=$this->db
			->order_by('rand()')
		->group_by('submitjob_preffered_location')
		->where('submitjob_preffered_location !=','')
		->limit(6)
		->get('submitjob');
		 $result=$q->result();
		return json_decode(json_encode($result),TRUE);

		
	}

//if recruiter signin as a employee email
	public function ifemployeemail($email)
	{
		$q=$this->db->where('employee_email',$email)
		->get('employer_info');
		return $q->num_rows();
	}

	//if employee signin as a recruiter email
	public function ifrecruiteremail($email)
	{
		$q=$this->db->where('recruiter_email',$email)
		->get('recruiter');
	$qq=$q->num_rows();
		if($qq==null)
		{
			return 'null';
		}
		else
		{
			return 'success';
		}
	}
	public function fetchemployeeresume($iid)
	{
		$q=$this->db->where('employee_uid',$iid)
		->get('employer_info');
		return $q->row()->employee_resume;

	}

//number of employees applied to your job
public function fetchcount($jid)
		{

	$ridd=$this->session->userdata('recruiter_id');
	$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($ridd) && !empty($sessionRecruiter))
	{
		$rid=$sessionRecruiter;
	}
		elseif(!empty($ridd) && empty($sessionRecruiter))
	{
		$rid=$ridd;
	}
		elseif(!empty($ridd) && !empty($sessionRecruiter))
	{
		$rid=$ridd;
	}
			$q=$this->db->join("applyjob","applyjob.applyjob_employee_id = employer_info.employee_uid")
			->where(['applyjob.applyjob_employer_id'=>$rid,'applyjob.applyjob_jid'=>$jid])
			->get('employer_info');
			$qq=$q->result();
			return json_decode(json_encode($qq),true);

		}


	public function fetchemailemployee($employee_id)
	{
		$q=$this->db->where('employee_uid',$employee_id)
		->get('employer_info');
		return $q->row()->employee_email;

	}

//fetch hash employee login compare hash
	public function fetchhash($email)
	{
		$q=$this->db->where(['employee_email'=>$email])
		->get('employer_info');
		return $q->row()->employee_hash;

	}

	public function referralrecruiter()
	{
		$sessionCookie=get_cookie('sessionCookieRecruiter');
		$idd=$this->session->userdata('recruiter_id');
		if(empty($idd) && !empty($sessionCookie))
		{
			$id=$sessionCookie;
		}
		elseif (empty($sessionCookie) && !empty($idd)) {
			$id=$idd;
		}
		elseif (!empty($sessionCookie) && !empty($idd)) {
			$id=$idd;
		}
		elseif(empty($sessionCookie) && empty($idd))
		{
			$id=0;
		
		}
		 $q=$this->db->select('*')
	
		->from('recruiter')
		->where('recruiter_id',$id)
		->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
	}

	public function fetchpayu($emmail)
	{
		$q=$this->db->where(['employee_email'=>$emmail])
		->get('employer_info');
		$result=$q->num_rows();
		if($result==null)
		{
			$q=$this->db->where(['recruiter_email'=>$emmail])
		->get('recruiter');
		$result=$q->num_rows();
		if($result!=null)
		{
			return 'recruiter';
		}
		}
		else
		{
			return 'employee';
		}


	}

 // check email for forget password
	public function checkmail($to_encode)
	{
		$q=$this->db->where(['employee_email'=>$to_encode])
		->get('employer_info');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}

	}

	// check email for forget password
	public function checkmailrecruiter($to_encode)
	{
		$q=$this->db->where('recruiter_email',$to_encode)
		->get('recruiter');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}

	}


	// check email hash for reset password
	public function checkRecruiterEmailhash($hash,$email)
	{
		$q=$this->db->where(['recruiter_email'=>$email,'recruiter_resetHash'=>$hash])
		->get('recruiter');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}

	}

	public function checkRecruiterAttemptsEmailhash($attemptHash,$email1)
	{
		$email=base64_encode(base64_encode($email1));
		$q=$this->db->where(['recruiter_email'=>$email,'recruiterAttemptHash'=>$attemptHash])
		->get('recruiter');
		 $result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}
	}
	public function checkEmployeeAttemptsEmailhash($attemptHash,$email1)
	{

		$email=base64_encode(base64_encode($email1));
	$q=$this->db->where(['employee_email'=>$email,'employeeLoginAttemptHash'=>$attemptHash])
		->get('employer_info');
		 $result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}

	}


	// check email hash for reset password
	public function checkEmployeeEmailhash($hash,$email)
	{
		$q=$this->db->where(['employee_email'=>$email,'employee_resetHash'=>$hash])
		->get('employer_info');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}

	}

	public function checkmailrecruiterr($email,$password)
	{
		$q=$this->db->where(['recruiter_email'=>$email,'recruiter_password'=>$password])
		->get('recruiter');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}

	}



	public function changepasswordd($data)
	{

		
		$email=$this->session->userdata('email');
		return $this->db->where('employee_email', $email)
		->update('employer_info', $data);
		$this->session->unset_userdata('email');
		

	}

//update recruiter pasword
	public function changepasswordrecruiter($data)
	{

		
		$email=$this->session->userdata('email');
		return $this->db->where('recruiter_email', $email)
		->update('recruiter', $data);
		$this->session->unset_userdata('email');
		

	}

	//check for recruiter login
	public function checkemailrecruiter($email,$password)
	{
		$q=$this->db->where(['recruiter_email'=>$email,'recruiter_password'=>$password])
		->get('recruiter');
		
		if($q->num_rows())
		{
			
			return $q->row()->recruiter_id;
		}
		else
		{
			return  'failed';
		}
	}

	//check if recruiter wants to change email while signup
	public function changeEmailRecruiter($emailEncode,$password)
	{
		$q=$this->db->where(['recruiter_email'=>$emailEncode,'recruiter_password'=>$password])
		->get('recruiter');
		
		if($q->num_rows())
		{
			
			return 1;//$q->row()->recruiter_id;
		}
		else
		{
			return  0;//'failed';
		}
	}


	//check for recruiter login
	public function checkonlyemailrecruiter($email)
	{
		$q=$this->db->where('recruiter_email',$email)
		->get('recruiter');
		
		if($q->num_rows())
		{
			
			return $q->row()->recruiter_id;
		}
		else
		{
			return  'failed';
		}
	}


	//check for recruiter change password
	public function changePasswordRecruiterCheck($password,$email)
	{
		$q=$this->db->where(['recruiter_password'=>$password,'recruiter_email'=>$email])
		->get('recruiter');
		
		if($q->num_rows())
		{
			
			return 1;//$q->row()->recruiter_id;
		}
		else
		{
			return  0;//'failed';
		}
	}

	//check for employee change password
	public function changePasswordEmployeeCheck($password,$email)
	{
		$q=$this->db->where(['employee_password'=>$password,'employee_email'=>$email])
		->get('employer_info');
		
		if($q->num_rows())
		{
			
			return 1;
		}
		else
		{
			return  0;
		}
	}

	public function checkpasswordrecruiter($email,$password)
	{
		$q=$this->db->where('recruiter_email',$email)
		->where('recruiter_password!=',$password)
		->get('recruiter');
		
		if($q->num_rows())
		{
			
			return 'password not matched';
		}
		else
		{
			return  'failed';
		}
	}

//check for recruiter profile is verified or not
	public function checkrecruiterverified($email,$password)
	{
		$q=$this->db->where(['recruiter_email'=>$email,'recruiter_password'=>$password])
		->get('recruiter');
		
				return $q->row()->recruiter_verify;
			}

//check for recruiter profile is verified or not
	public function checkemployeeverified($email,$password)
	{
		$q=$this->db->where(['employee_email'=>$email,'employee_password'=>$password])
		->get('employer_info');
		
				return $q->row()->employee_verify;
			}



	public function fetchemail()
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
		$q=$this->db->where(['recruiter_id'=>$id])
		->get('recruiter');
		
		if($q->num_rows())
		{
			//return 'failed';
			return $q->row()->recruiter_email;
		}
		else
		{
			return 'not success';
		}
	}


	public function changeemailsignup( $email )
	{
		
		 $q=$this->db->select('*')
		->from('recruiter')
		->where('recruiter_email',$email)
		->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
		
	}

//update email while signup and send email agan to new email
	public function updateemail( $emailEncode,$hash,$newEmailEncode )
	{
		 
		return $q=$this->db->set(['recruiter_email'=>$emailEncode,'recruiter_hash'=>$hash])
		->where('recruiter_email',$newEmailEncode)
		->update('recruiter');
		
		
	}

	//check for login
	public function checkmailemployer($toto_encode)
	{

		$q=$this->db->where(['employee_email'=>$toto_encode])
		->get('employer_info');
		
		if($q->num_rows())
		{
			//return 'failed';
			//echo 'success';
			return  $q->row()->employee_uid;
		}
		else
		{
			//echo 'failed';
			return  'failed';
		}
	}

	public function fetchingtest()
	{

	$id=49;//$this->session->userdata('recruiter_id');
	/*$this->db->select('submitjob.*');
    $this->db->select('employer_info.*');
    $this->db->select('applyjob.*');
    $this->db->from('submitjob, employer_info, applyjob');
    //$this->db->where('submitjob.submitjob_employer_id', $id);
    $where = 'submitjob.submitjob_employee_id, employer_info.employee_uid = applyjob.applyjob_employee_id AND submitjob.submitjob_employer_id = $id';
    $this->db->where($where);
    return $result = $this->db->get();*/
$aa=$this->db->SELECT('*')
->FROM('applyjob')
->JOIN('submitjob', 'submitjob.submitjob_employer_id = applyjob.applyjob_employer_id')
->JOIN('employer_info', 'employer_info.employee_uid = applyjob.applyjob_employee_id')
->where('submitjob.submitjob_employer_id',$id)
->get();
$aaa=$aa->result();
return $aa=json_decode(json_encode($aaa),true);

 }


	public function changeemployeremail( $email,$toto_encode,$newhash)
	{
		
		return $q=$this->db->set(['employee_email'=>$toto_encode,'employee_hash'=>$newhash])
		->where('employee_email',$email)
		->update('employer_info');
	}

//fetch data after enployer signup if employer wanna change email address

public function fetchdataemployer( $to )
	{
		
		 $q=$this->db->select('*')
		->from('employer_info')
		->where('employee_email',$to)
		->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
		
	}

public function fetchlogo($country)
	{
		//$encodedcountry=base64_encode(base64_encode($country));
	  	
		 $q=$this->db->select('*')
		 ->where('recruiter_country',$country)
		->from('recruiter')
		->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
		
	}

	public function fetchlogo1($singleid)
	{
		
		 $q=$this->db->select('*')
		->from('recruiter')
		->where('recruiter_id',$singleid)
		->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
		
	}

	public function requestMoreInfoRecruiter($sid,$uid)
	{
		
		 $q=$this->db->select('*')
		->from('requestMoreInfoRecruiter')
		->where(['request_sid'=>$sid,'request_uid'=>$uid])
		->get();
		return $q->num_rows();
		//$qq=$q->result();
		//return $ss= json_decode(json_encode($qq),true);
		
	}


	public function requestMoreInfoRecruiterCount($uid)
	{
		
		 $q=$this->db->select('*')
		->from('requestMoreInfoRecruiter')
		->where('request_uid',$uid)
		->get();
		return $q->num_rows();
		
		
	}


//fetch info for payment from employer after verification
public function verifyemployerfetch($email,$hash)
{

	$q=$this->db->select('*')
	->where(['employee_email'=>$email,'employee_hash'=>$hash])
	->from('employer_info')
	->get();
	$result=$q->result();
	if(!empty($result))
	{
		return json_decode(json_encode($result),true);
	}
	else
	{

	$q=$this->db->select('*')
	->where('employee_email',$email)
	->where('employee_hash!=',$hash)
	->from('employer_info')
	->get();
	$result=$q->result();
	if(!empty($result))
	{
		return 'hash not matched';
	}
	else
	{
		return 'something went wrong';
	}
	}
	
}


//fetch info for payment from employer after verification
public function verifyrecruiterfetch($email,$hash)
{
	$q=$this->db->select('*')
	->where(['recruiter_email'=>$email,'recruiter_hash'=>$hash])
	->from('recruiter')
	->get();
	$result=$q->result();
	if(!empty($result))
	{

		$this->fetch->verifyrecruiterstatus($email,$hash);
		return json_decode(json_encode($result),true);
	}
	else
	{


	$q=$this->db->select('*')
	->where('recruiter_email',$email)
	->where('recruiter_hash!=',$hash)
	->from('recruiter')
	->get();
	$result=$q->result();
	if(!empty($result))
	{
		return 'hash not matched';
	}
	else
	{
		return 'something went wrong';
	}
	}
	
}

public function verifyemployerstatus($email,$hash)
{
	return $q=$this->db->set(array('employee_status'=>'1','employee_verify'=>'1'))
		->where(['employee_email'=>$email,'employee_hash'=>$hash])
		->update('employer_info');
}
public function verifyrecruiterstatus($email,$hash)
{
	return $q=$this->db->set('recruiter_verify','1')
		->where(['recruiter_email'=>$email,'recruiter_hash'=>$hash])
		->update('recruiter');
}

//check for employe login
	public function employelogin($email,$password)
	{
		$q=$this->db->where(['employee_email'=>$email,'employee_password'=>$password])
		->get('employer_info');
		
		if($q->num_rows())
		{
			
			$id=$q->row()->employee_uid;
			$country=$q->row()->employee_country;
			return array('id'=>$id,'country'=>$country);

		}
		else
		{
			return 'null';
		}
	}

	public function fetchemployeprofile()
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
		$q=$this->db->select('*')
		->where('employee_uid',$emid)
		->from('employer_info')
		->get();
		$qq=$q->result();
		return  json_decode(json_encode($qq),true);

	}

	//send email if employee recruit by recruiter 
	public function fetchemployeprofilee($uidd)
	{
		 //$emid=$this->session->userdata('employe_id');
		$q=$this->db->select('*')
		->where('employee_uid',$uidd)
		->from('employer_info')
		->get();
		return $qq=$q->result_array();
		//return  json_decode(json_encode($qq),true);

	}

	public function fetchlateremployee( $email )
	{
		
		$q=$this->db->where(['employee_email'=>$email])
		->get('employer_info');
		
		if($q->num_rows())
		{
			
			return $q->row()->employee_uid;

		}
		else
		{
			return 'not success';
		}
	

	}


	public function fetchlateremployer( $email )
	{
		
		$q=$this->db->where(['recruiter_email'=>$email])
		->get('recruiter');
		
		if($q->num_rows())
		{
			
			return $q->row()->recruiter_id;

		}
		else
		{
			return 'not success';
		}
	

	}

	public function alljobs($country)
	{
	  	 $encodedcountry=base64_encode(base64_encode($country));
		 $q=$this->db->select('*')
		->order_by('rand()')
		->limit('5')
		->where('submitjob_deactivate','0')
		->where('submitjob_country',$encodedcountry)
		->from('submitjob')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}

	public function singlejob($urii)
	{
		
		$q=$this->db->select('*')
		->where('submitjob_id',$urii)
		->from('submitjob')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}
//for jobs invitation file

	

public function jobsinvitation()
{
	$detail=$this->db->join("applyjob","applyjob.applyjob_jid = submitjob.submitjob_id")
	->where("applyjob.applyjob_status !=", "2")
	->get("submitjob");
	$data=array();
	return $data['records'] = $detail->result_array();

}

//fetch applied job for admin panel
public function adminAppliedJobs($uid)
{
	$detail=$this->db->join("applyjob","applyjob.applyjob_jid = submitjob.submitjob_id")
	->where("applyjob.applyjob_employee_id", $uid)
	->get("submitjob");
	$data=array();
	return $detail->result_array();

}

public function appliedjobsnew()
{
	$uid=$this->session->userdata('employe_id');
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
	$detail=$this->db->join("applyjob","applyjob.applyjob_jid = submitjob.submitjob_id")
	->where(["applyjob.applyjob_employee_id"=> $uid,"applyjob.applyjob_deleteStatus"=>0])
	//->where()
	->get("submitjob");
	//$data=array();
	//return $data['records'] = $detail->result_array();
	$detaill=$detail->result();
	return json_decode(json_encode($detaill),true);

}


public function shortlistjobNew()
{
	$uid=$this->session->userdata('employe_id');
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
	$detail=$this->db->join("jobShortlist","jobShortlist.jobShortlist_jid = submitjob.submitjob_id")
	->where("jobShortlist.jobShortlist_eid",$uid)
	->where("jobShortlist.deleteStatus!=",'1')
	->group_by('jobShortlist_jid')
	//->where()
	->get("submitjob");
	//$data=array();
	//return $data['records'] = $detail->result_array();
	$detaill=$detail->result();
	return json_decode(json_encode($detaill),true);

}


public function employeeinvitation()
{
	$uid=$this->session->userdata('recruiter_id');
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
	$detail=$this->db->join("applyjob","applyjob.applyjob_employee_id = employer_info.employee_uid")
	->where("applyjob.applyjob_employer_id",$uid)
	->group_by("applyjob.applyjob_employee_id")
	->get("employer_info");
	$data=array();
	return $data['records'] = $detail->result_array();
}

//fetch job applications for recruiterpublic function employeeinvitation()
public function fetchjobapplications()
{
	$uid=$this->session->userdata('recruiter_id');
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
	$detail=$this->db->join("applyjob","applyjob.applyjob_employee_id = employer_info.employee_uid")
	->where("applyjob.applyjob_employer_id",$uid)
	//->group_by("applyjob.employee_id")
	->get("employer_info");
	$data=array();
	return $data['records'] = $detail->result_array();
}

public function singlejobapply($apply)
	{
		
		$q=$this->db->select('*')
		->where('submitjob_id',$apply)
		->from('submitjob')
		->get();
		$qq=$q->result();
		 return json_decode(json_encode($qq),true);	 
	}

//fetch recruiterid for show job description to employer
	public function recruiterid($uri)
	{
		$q=$this->db->where(['submitjob_id'=>$uri])
		->get('submitjob');
		
		if($q->num_rows())
		{
			//return 'failed';
			return  $q->row()->submitjob_employer_id;
		}
		else
		{
			return  'failed';
		}
	}


	//job count foe admin panel
	public function submitjobCount($uid)
	{
		$q=$this->db->where(['submitjob_employer_id'=>$uid])
		->get('submitjob');
		
		return $q->num_rows();
		
		
	}

	//articles count employee
	public function articlesCountEmployee($uid)
	{
		$q=$this->db->where(['employee_articleUid'=>$uid])
		->get('employee_articles');
		return $q->num_rows();
	}

	//articles count recruiter
	public function articlesCountRecruiter($uid)
	{
		$q=$this->db->where(['recruiter_articleUid'=>$uid])
		->get('recruiter_articles');
		return $q->num_rows();
	}

	//number of reports count recruiter
	public function reportsCountRecruiter($uid)
	{
		$q=$this->db->where(['uid'=>$uid])
		->get('reportRecruiter');
		return $q->num_rows();
	}

	//fetch reports recruiter
	public function reportsFetchRecruiter($uid)
	{
		$q=$this->db->where(['uid'=>$uid])
		->get('reportRecruiter');
		 $qq=$q->result();
		return json_decode(json_encode($qq),TRUE);
	}

	//number of reports count employee
	public function reportsCountEmployee($uid)
	{
		$q=$this->db->where(['uid'=>$uid])
		->get('reportEmployee');
		return $q->num_rows();
	}

	//fetch reports employee
	public function reportsFetchEmployee($uid)
	{
		$q=$this->db->where(['uid'=>$uid])
		->get('reportEmployee');
		 $qq=$q->result();
		return json_decode(json_encode($qq),TRUE);
	}

	//job count foe admin panel
	public function appliedjobCount($uid)
	{
		$q=$this->db->where(['applyjob_employee_id'=>$uid])
		->get('applyjob');
		return $q->num_rows();

	}

	//fetch employer for job description file
	public function fetchemployer($rid)
	{
		$q=$this->db->select('*')
		->where('recruiter_id',$rid)
		->from('recruiter')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}

	public function fetchemployeedit($uid)
	{
		
		$q=$this->db->select('*')
		->where('employee_uid',$uid)
		->from('employer_info')
		->get();
		$qq=$q->result();

		return json_decode(json_encode($qq),true);
	}

	public function fetchemployequalification($uid)
	{
		
		$q=$this->db->select('*')
		->where('uid',$uid)
		->from('employee_qualification')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}

//used in employer profile for check qualification is empty or not
	public function fetchemployequalificationResult($uid)
	{
		
		$q=$this->db->select('*')
		->where('uid',$uid)
	->order_by('id','desc')
	->limit(1)
		->from('employee_qualification')
		->get();
		$count = $q->num_rows();
		$qq=$q->result();
		if($count==null)
		{
			$result=0;
		}
		else
		{
			$result = $q->row()->degreeName;
		}
		return array('count' => $count, 'result' => $result);
	}

	public function fetchemployeexperience($uid)
	{
		
		$q=$this->db->select('*')
		->where('uid',$uid)
		->from('employee_experience')
		->get();
		$qq=$q->result();

		return json_decode(json_encode($qq),true);
	}

	

public function fetchemployeexperienceid($uid)
	{
		
		$q=$this->db->select('*')
		->where('uid',$uid)
		->order_by('id','desc')
		->get('employee_experience');
		if($q->num_rows())
		{
			
			return  $q->row()->fresher_experience;
		


		//return json_decode(json_encode($qq),true);
	}
}




public function experienceSum($uid)
	{
		
$q=$this->db->select_sum('experience')
->where('uid',$uid)
->from('employee_experience')
->get();
	return $qq=$q->result_array();

		//return json_decode(json_encode($qq),true);
		}


	//fetch recruiter for job description file
	public function fetchrecruiterprofile()
	{
		$sessionCookie=get_cookie('sessionCookieRecruiter');
		$riid=$this->session->userdata('recruiter_id');
		if(empty($sessionCookie) && !empty($riid))
		{
			$rid=$riid;
		}
		elseif (empty($riid) && !empty($sessionCookie)) {
			$rid=$sessionCookie;
		}
		elseif (!empty($riid) && !empty($sessionCookie)) {
			$rid=$riid;
		}
		elseif (empty($riid) && empty($sessionCookie)) {
			$rid=0;	
		}
		$q=$this->db->select('*')
		->where('recruiter_id',$rid)
		->from('recruiter')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}

	//fetch recruiter for job description file
	public function allemployee()
	{
		
		$q=$this->db->order_by('rand()')
		->limit('5')
		->from('employer_info')
		->where(['employee_verify'=>'1','employee_verify'=>'2'])
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}

	//fetch recruiter for job description file
	public function randemployee()
	{
		 $country=get_cookie('countryCookie');
		  
		$q=$this->db->order_by('rand()')
		->limit('5')
		->from('employer_info')
		->where('employee_country',$country)
		->where(['employee_verify'=>'1','employee_verify'=>'2'])
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}

	//fetch recruiter for job description file
	public function applyfetch($uid)
	{

		
		$q=$this->db->where(['applyjob_employee_id'=>$uid])
		->get('applyjob');
		$qqq=$q->num_rows();
		if($qqq==null)
		{
			return 'null';
		}
		else
		{
		$qq=$q->result();
		return json_decode(json_encode($qq), true);
		}
	}




	//fetch recruiter for job description file
	public function applyemployerfetch()
	{

		$emidd=$this->session->userdata('recruiter_id');
		$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($emidd) && !empty($sessionRecruiter))
	{
		$emid=$sessionRecruiter;
	}
		elseif(!empty($emidd) && empty($sessionRecruiter))
	{
		$emid=$emidd;
	}
		elseif(!empty($emidd) && !empty($sessionRecruiter))
	{
		$emid=$emidd;
	}
		$q=$this->db->where(['recruitcandidate_employer_id'=>$emid])
		->get('recruitcandidate');
		
		if($q->num_rows())
		{
			
			return  $q->row()->recruitcandidate_employee_id;
		}
		else
		{
			return  'failed';
		}

	}

//for get total applied jobs
	public function getappliedjobs()
	{

		$emid=$this->session->userdata('recruiter_id');
		$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($emidd) && !empty($sessionRecruiter))
	{
		$emid=$sessionRecruiter;
	}
		elseif(!empty($emidd) && empty($sessionRecruiter))
	{
		$emid=$emidd;
	}
		elseif(!empty($emidd) && !empty($sessionRecruiter))
	{
		$emid=$emidd;
	}
		$q=$this->db->where(['recruitcandidate_employer_id'=>$emid])
		->get('recruitcandidate');
		

		if($q->num_rows())
		{
			
			return  $q->row()->recruitcandidate_jid;
		}
		else
		{
			return  'failed';
		}

	}

	//for get total applied jobs count
	public function getappliedjobscount($uri)
	{

		
		$q=$this->db
		->where('applyjob_jid',$uri)
		->get('applyjob');
		if($q->num_rows())
		{
			
			return  $q->num_rows;
		}
		else
		{
			return  'failed';
		}
	}


	public function checkbalance($uid)
	{

		$this->db->select('*');    
        $this->db->from('recruiter');
        $this->db->where('recruiter_id',$uid);
      //  $this->db->where('balance != ',0,FALSE);
        $query = $this->db->get();
        
        return $b= $query->row()->recruiter_balance;
       
	}

public function checkbalanceapply()
	{

		 $uidd=$this->session->userdata('employe_id');
		 $sessionEmployee=get_cookie('sessionCookieEmployee');
		 if(empty($uidd) && !empty($sessionEmployee))
		 {
		 	$uid=$sessionEmployee;
		 }
		 elseif (empty($sessionEmployee) && !empty($uidd)) {
		 	$uid=$uidd;
		 }
		 elseif (!empty($sessionEmployee) && !empty($uidd)) {
		 	$uid=$uidd;
		 }
		$q= $this->db->select('*') 
        ->where('employee_uid',$uid)
		->get('employer_info');
        return $q->row()->employee_balance;
        
        
	}

//fetch status to tell us recruiter for accept or declined invitations
	public function fetchstatus($jid,$uid)
	{
		$q=$this->db->select('*')
		->where(['applyjob_jid'=>$jid,'applyjob_employee_id'=>$uid])
		->get('applyjob');
		$qq=$q->result();
		return json_decode(json_encode($qq), true);
	}
 public function fetchshortlist($id)
 {
 	$q=$this->db->select('*')
 	->group_by('shortlisted_employee_id')
 	->where('shortlisted_employer_id',$id)
 	->from('shortlisted')
 	->get();
 	$qq=$q->result();

 	return json_decode(json_encode($qq), true);

 }

//fetch employee shortlist by recruiter or not
  public function fetchshortlistCount($uid)
 {

 	$uidd=$this->session->userdata('recruiter_id');
	$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($uidd) && !empty($sessionRecruiter))
	{
		$id=$sessionRecruiter;
	}
		elseif(!empty($uidd) && empty($sessionRecruiter))
	{
		$id=$uidd;
	}
		elseif(!empty($uidd) && !empty($sessionRecruiter))
	{
		$id=$uidd;
	}
		elseif(empty($uidd) && empty($sessionRecruiter))
	{
		$id='';
	}


 	$q=$this->db->select('*')
 	//->group_by('shortlisted_employee_id')
 	->where('shortlist_employer_id',$id)
 	->where('shortlist_employee_id',$uid)
 	->from('shortlist')
 	->get();
 	$qq=$q->result();

 	return json_decode(json_encode($qq), true);

 }
 //fetch shortlisted candidates
 //fetch job applications for recruiterpublic function employeeinvitation()
public function fetchshortlisted1()
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
	$detail=$this->db->join("shortlist","shortlist.shortlist_employee_id = employer_info.employee_uid")
	->where("shortlist.shortlist_employer_id",$uid)
	->where("shortlist.shortlist_status",'1')
	->group_by("employer_info.employee_uid")
	->get("employer_info");
	
	return $detail->result_array();
}

	//featured employee check country of featured employees for widgets
	public function featuredemployee()
	{
		$country= get_cookie('countryCookie');
	
		 //$emid=$this->session->userdata('employe_id');
		$q=$this->db->select('*')
		->where('employee_country',$country)
		->from('employer_info')
		->get();
		return $qq=$q->result_array();
		

	}

	//featured employee check country of featured employees for widgets
	public function recentlyJoinedCount()
	{
		$country= get_cookie('countryCookie');
		
		 //$emid=$this->session->userdata('employe_id');
		$q=$this->db->select('*')
		->order_by('employee_uid','desc')
		->where('employee_country',$country)
		->from('employer_info')
		->get();
		return $qq=$q->result_array();
		

	}


 public function fetchrecruitjoin($id)
 {

 	//$q=$this->db->select('*')
 	$detail=$this->db->join("recruitcandidate","recruitcandidate.recruitcandidate_employee_id = employer_info.employee_uid")
	->group_by('recruitcandidate_employee_id')
	->where("recruitcandidate.recruitcandidate_employer_id",$id)
 	->get("employer_info");
 	//$qq=$q->result();
	//return json_decode(json_encode($qq), true);
 	return $detail->result_array();
 }
 public function fetchrecruit($id)
 {

 	$q=$this->db->select('*')
 	->group_by('recruitcandidate_employee_id')
 	 	->where('recruitcandidate_employer_id',$id)
 	->from('recruitcandidate')
 	->get();
 	$qq=$q->result();
	return json_decode(json_encode($qq), true);

 }

public function employeee($dataa)
 {
 	$q=$this->db->select('*')

 	->where('employee_uid',$dataa)
 	->from('employer_info')
 	->get();
 	$qq=$q->result();

 	return json_decode(json_encode($qq), true);

 }

public function fetchcategories()
{
	 $country=get_cookie('countryCookie');
	
	$q=$this->db->select('*')
	->where('employee_category!=','')
	->where('employee_country',$country)
	->order_by('rand()')
	->group_by('employee_category')
	->from('employer_info')
	->limit(5)
	->get();
	$qq=$q->result();
	return json_decode(json_encode($qq), true);
}


public function fetchdownload($id)
{
	$q=$this->db->select('*')
	->where('employee_uid',$id)
	->from('employer_info')
	->get();
	$qq=$q->result();
	return json_decode(json_encode($qq), true);
}

public function voting()
{
	$q=$this->db->select('*')
	->where('id','1')
	->from('pool_voting')
	->get();
	$qq=$q->result();
	return json_decode(json_encode($qq), true);
}

public function fetchanswer1()
{
	$q=$this->db->where(['answer'=>'1'])
		->get('answers');
		return $result=$q->num_rows();
	
}
public function fetchanswer2()
{
		$q=$this->db->where(['answer'=>'2'])
		->get('answers');
		return $result=$q->num_rows();
	
}
public function fetchanswer3()
{
		$q=$this->db->where(['answer'=>'3'])
		->get('answers');
		return $result=$q->num_rows();
	
}

//fetch jobs of featured employers
public function featutredrecruiter($singleid)
{

	$q=$this->db->select('*')
	->order_by('submitjob_favourite','desc')
		->where('submitjob_employer_id',$singleid)
		->from('submitjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{

			return 'null';

		}
		else
		{

		$qq=$q->result();
		return json_decode(json_encode($qq), true);

		}
	}
		//fetch jobs of featured employers
public function featutredrecruiter1($singleid)
{
	$q=$this->db->select('*')
		->where('submitjob_employer_id',$singleid)
		->from('submitjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{

			return 'null';

		}
		else
		{
				return $q->row();
		// $qq=$q->result();
			//return json_decode(json_encode($qq), true);

		}
		


/*$q=$this->db->where(['employer_id'=>$singleid])
		->get('submitjob');
		 $result=$q->num_rows();
		 print_r($result);*/
		//return json_decode(json_encode($qq), true);
}


	//count posted jobs of a recruiter
public function jobscount($singleid)
{
	$q=$this->db->select('*')
		->where('submitjob_employer_id',$singleid)
		->from('submitjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{

			return 'null';

		}
		else
		{
				return $qqq;
		// $qq=$q->result();
		//return json_decode(json_encode($qq), true);

		}
		
	
}
		
		// also fetch jobs for admin panel	
		//fetch jobs of when employee show recruiters profile
public function featutredrecruiter2($singleid)
{
	$q=$this->db->select('*')
		->where('submitjob_employer_id',$singleid)
		->from('submitjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{

			return 'null';

		}
		else
		{
				
		 $qq=$q->result();
		return json_decode(json_encode($qq), true);

		}
		


}

		//check employee send invitation to this recruiter 
public function invitationbeforedownload($iid)
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
	$q=$this->db->select('*')
		->where(['applyjob_employer_id'=>$uid,'applyjob_employee_id'=>$iid])
		->from('applyjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{

			return 'null';

		}
		else
		{
			return 'not null';	
		 //$qq=$q->result();
		//return json_decode(json_encode($qq), true);

		}
		


}
//fetch who has applied recruiter jobs

public function recruiterapplied($jid)
{
	$q=$this->db->select('*')
		->where('applyjob_jid',$jid)
		->from('applyjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{
			return 'null';
		}
		else
		{
			 $qq=$q->result();
			return json_decode(json_encode($qq), true);
		}
}
//fetch jobs for applied jobs by employee

public function appliedbyemployee($uid)
{
	$q=$this->db->select('*')
		->where('applyjob_employee_id',$uid)
		->from('applyjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{
			return 'null';
		}
		else
		{
			 $qq=$q->result();
			return json_decode(json_encode($qq), true);
		}
}
public function appliedbyemployeetime($uid,$apply)
{
	$q=$this->db->select('*')
		->where(['applyjob_employee_id'=>$uid,'applyjob_jid'=>$apply])
		->group_by('applyjob_jid')
		->from('applyjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{
			return 'null';
		}
		else
		{
			 $qq=$q->result();
			return json_decode(json_encode($qq), true);
		}
}


public function employerapplied()
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
	$q=$this->db->select('*')
		->where('applyjob_employer_id',$uid)
		->group_by('applyjob_jid')
		->from('applyjob')
		->get();
		$qqq=$q->num_rows();
		if($qqq==null)
		{
			return 'null';
		}
		else
		{
			 $qq=$q->result();
			  return $qqa=json_decode(json_encode($qq), true);

		}
}
/*
public function anotherdatabase()
{
	//Load another database
    $DB2 = $this->load->database('another_db', TRUE);
	//Another database query
	$q1=$DB2->select('*')
	->order_by('rand()')
	->where('post_type','post')
	//->where('ping_status','open')
	->where('post_title !=','auto draft')
	->where('post_title !=','trash')
	->where('post_status =','publish')
	->limit(4)
	->from('tb1posts')
	->get();
	$qq1=$q1->result();
	return json_decode(json_encode($qq1), true);
}
*/
private $postLimit = 2;
    private $imagesPerPost = 1;
public function test1()
{
/*
    
    $DB2 = $this->load->database('another_db', TRUE);
   
       $DB2->where('tb1posts.post_parent', 0);
        $DB2->where('tb1posts.post_status', 'publish');
       $DB2->limit($this->postLimit);
        $DB2->order_by('post_date', 'DESC');
 
        $query = $DB2->get('tb1posts');
 
        $data = $query->result();
 
        $post = array();
 
        for ($i = 0; $i < count($data); $i++) {
            array_push($post, 
                array(
                    'post' => $data[$i],
                   // 'image' => $this->getPostImages($data[$i]->ID)
                )
            );  

        }
          return $post;*/
    }
 
        //print_r($post);
 
      
    


public function fetchblogimage($postid)
{
	//return $postid;
	/*$DB2 = $this->load->database('another_db', TRUE);
	 $detail=$DB2->join("tb1posts","tb1posts.ID = tb1postmeta.post_id")
	->where('tb1posts.post_title !=','auto draft')
	->where('tb1posts.post_title !=','trash')
	->where('tb1posts.post_status =','publish')
	->where('tb1postmeta.post_id','16')
	->where('tb1postmeta.meta_key','_wp_attached_file')
	->get("tb1postmeta");
	
	return $detail->result_array();*/
	   		/*$DB2 = $this->load->database('another_db', TRUE);
	   		//fetch image for particular blog
	   		$w=array(16,42,82);
	   		$q = $DB2->select('*')
	   		->where('post_id',$w)
	   		->from('tb1postmeta')
	   		->get();
	   		//return $DB2->error();
	   		$qq= $q->result();
	   		

	   		return json_decode(json_encode($qq), true);*/
	   		//print_r($postimage);
}
// for job categories welcome
public function fetchcategory()
{	
	$country=get_cookie('countryCookie');
		  $countryEncode=base64_encode(base64_encode($country));
	$q=$this->db->select('*')
	->group_by('submitjob_category')
	->where('submitjob_category!=','')
	->where('submitjob_country',$countryEncode)
	->from('submitjob')
	->get();
	$qq=$q->result();
	return json_decode(json_encode($qq), true);

}
// for job locations welcome
public function fetchsubmitjoblocation()
{
	$country=get_cookie('countryCookie');
		  $countryEncode=base64_encode(base64_encode($country));
	$q=$this->db->select('*')
	->group_by('submitjob_preffered_location')
	->where('submitjob_category!=','')
	->where('submitjob_country',$countryEncode)
	->from('submitjob')
	->get();
	$qq=$q->result();
	return json_decode(json_encode($qq), true);

}

public function fetchwishlist()
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
	$q=$this->db->select('*')
	->group_by('rsaved_recruiter_id')
	->where('rsaved_uid',$uid)
	->from('saved_recruiter')
	->get();
	$qqq=$q->num_rows();
	if($qqq==null)
	{
		return 'null';
	}
	else
		{
	$qq=$q->result();
	 //print_r($qq);
	return (json_decode(json_encode($qq), true));
}
}

public function fetchrecruited($uid)
{
	$uuidd=$this->session->userdata('recruiter_id');
	$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($uuidd) && !empty($sessionRecruiter))
	{
		$uuid=$sessionRecruiter;
	}
		elseif(!empty($uuidd) && empty($sessionRecruiter))
	{
		$uuid=$uuidd;
	}
		elseif(!empty($uuidd) && !empty($sessionRecruiter))
	{
		$uuid=$uuidd;
	}
	$q=$this->db->select('*')
	->where(['recruitcandidate_employer_id'=>$uuid,'recruitcandidate_employee_id'=>$uid])
	->from('recruitcandidate')
	->get();
	$result=$q->num_rows();
	if($result==null)
	{
		return 'null';
	}
	else
	{
		return 'not null';
	}
}

//for recruiter signup
public function sameemailrecruiter($to_encode)
{
	$q=$this->db->where(['employee_email'=>$to_encode])
		->get('employer_info');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'success';
		}
		else
		{
			return 'failed';
		}
}

//for employee signup
public function sameemailemployee($toto_encode)
{
	$q=$this->db->where(['recruiter_email'=>$toto_encode])
		->get('recruiter');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'success';
		}
		else
		{
			 return 'failed';
		}
}

//return result job is shportlisted or not
public function shortlistedjobs($uri)
{
	$uidd=$this->session->userdata('employe_id');
	$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(!empty($uidd) && empty($sessionEmployee))
	{
		$uid=$uidd;
	}
	elseif(empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$sessionEmployee;
	}
	elseif(!empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$uidd;
	}
	elseif (empty($uidd) && empty($sessionEmployee)) 
	{
		$uid=0;	
	}
	$q=$this->db->where(['jobShortlist_eid'=>$uid, 'jobShortlist_jid'=>$uri, 'deleteStatus'=>'0'])
		->get('jobShortlist');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}
}

//check if user alredy applied job
public function appliedjobs($uri)
{
	$uidd=$this->session->userdata('employe_id');
	$sessionEmployee=get_cookie('sessionCookieEmployee');
	if(!empty($uidd) && empty($sessionEmployee))
	{
		$uid=$uidd;
	}
	elseif(empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$sessionEmployee;
	}
	elseif(!empty($uidd) && !empty($sessionEmployee))
	{
		$uid=$uidd;
	}
	elseif (empty($uidd) && empty($sessionEmployee)) 
	{
		$uid=0;	
	}
	$q=$this->db->where(['applyjob_employee_id'=>$uid, 'applyjob_jid'=>$uri, 'applyjob_deleteStatus'=>'0'])
		->get('applyjob');
		$result=$q->num_rows();
		if($result==null)
		{
			return 'failed';
		}
		else
		{
			return 'success';
		}
}

public function appliedjobsrecruiter($rid)
{
	
	$q=$this->db->where('applyjob_employee_id',$rid)
		->get('applyjob');
		$qq=$q->result();
		return json_decode(json_encode($qq), true);
				
		
}

public function recruiterwishlist($rid)
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
	$q=$this->db->select('*')
		->where(['rsaved_recruiter_id'=>$rid, 'rsaved_uid'=>$uid])
		->from('saved_recruiter')
	->get();
	$result=$q->num_rows();
	if($result==null)
	{
		return 'null';
	}
	else
	{
		return 'not null';
	}

}

public function autoCompleteDegreeModel($search_term)
{
	$arr = array(
				'B.Tech in Mechanical Engineering', 'B.Tech in Civil Engineering','B.Tech in Chemical Engineering', 'B.Tech in Electrical Engineering','B.Tech in Electronics Engineering','B.Tech in EC Engineering','B.Tech in IT Engineering','B.Tech in Production Engineering','B.Tech in Aeronautical Engineering','B.Tech inTextile Engineering','B.Tech in Environmental Engineering','B.Tech in Naval Architecture','B.Tech in Mining Engineering','B.Tech in Petroleum Engineering','B.Tech in IC Engineering','B.Tech in Food Processing and Technology','B.Tech in Power Engineering',
    'B.E. + M.E. Mechanical Engineering','B.Tech. + M.Tech. Electrical Engineering','B.E. + MBA',
    'Diploma in Mechanical Engineering', 'Diploma in Civil Engineering','Diploma in Chemical Engineering', 'Diploma in Electrical Engineering','Diploma in Electronics Engineering','Diploma in EC Engineering','Diploma in IT Engineering','Diploma in Production Engineering','Diploma in Aeronautical Engineering','Diploma in Textile Engineering','Diploma in Environmental Engineering','Diploma in Naval Architecture','Diploma in Mining Engineering','Diploma in Petroleum Engineering','Diploma in IC Engineering','Diploma in Food Processing and Technology','Diploma in Power Engineering',
    'B.Arch','B.Des. Fashion Design','B.Des. Leather Design','B.Des. Apparel Design','B.Des. Textile Design','B.Des. Interior Design','B.Des. Product Design','B.Des. Accessory Design','B.Pharmacy','B.Sc. Physics','B.Sc. Mathematics','B.Sc. Chemistry','B.Sc. Geology','B.Sc. IT','B.Sc. Computer Science','B.Sc. Biotechnology','B.Sc. Agriculture','B.Sc. Nautical Science','B.Sc. Hotel Management','B.Sc. Electronics and Communication','MBBS','BDS','B.Sc. Nursing','Bachelor of Pharmacy','Pharm D','BAMS','BHMS','BUMS','Physiotherapy','B.V.Sc. & A.H.','Bachelor of Occupational Therapy','Bachelor of Audiology Speech Language Pathology',
    'B.Sc. Biochemistry','B.Sc. Biology','B.Sc. Physics','B.Sc. Chemistry','B.Sc. Environmental Science','B.Sc. Biotechnology','B.Sc. Occupational Therapy','B.Sc. Physiotherapy','B.Sc. Radiology','B.Sc. Bioinformatics','B.Sc. Anthropology','B.Sc. Microbiology','B.Sc. Zoology','B.Sc. Forensic Science','B.Sc. Agriculture','B.Sc. Pathology','B.Sc. Speech Therapy','B.F.Sc. (Fisheries Science)','B.Sc. Horticulture','B.Sc. Genetics','B.Sc. Health Science and Nutrition','B.Sc. Sports Science','B.Sc. Audiology','B.Sc. Botany',
    'Diploma in Mechanical Engineering (DME)','Diploma in Electrical Engineering','Diploma in Civil Engineering','Diploma in Chemical Engineering','Diploma in Electronics and Communications Engineering','Diploma in Computer Science and Engineering','Diploma in Information Technology','Diploma in Agricultural Engineering','Diploma in Textile Engineering','Diploma in Environmental Engineering','Diploma in Instrumentation and Control','Diploma in Mechatronics Engineering','Diploma in Mining Technology','Diploma in Petroleum Engineering','Diploma in Aeronautical Engineering','Diploma in Automobile Engineering','Diploma in Plastic Engineering','Diploma in Metallurgy','Diploma in Fire and Safety Technology',
    'ITI Electrician','ITI Fireman','ITI Welder','ITI Wireman','ITI Mechanic','ITI Turner',
    'Diploma in Operation Theatre Technology (DOTT)','Diploma in X Ray Technology','Diploma in Radiography and Medical Imaging','Diploma in ECG Technology','Diploma in Dialysis Technology','Diploma in Medical Record Technology','Diploma in Medical Laboratory Technology (DMLT)','Diploma in Ophthalmic Technology','Diploma in Physiotherapy','Diploma in Anaesthesia Technology','Diploma in Nursing Care Assistant','Diploma in Sanitary Inspector','Diploma in Hearing Language and Speech (DHLS)','Diploma in Dental Hygienist','Diploma in Audiometry Technician','Diploma in Audiology and Speech Therapy',
    'X-Ray/Radiology Assistant (or Technician)','Medical Laboratory Assistant','Operation Theatre Assistant','Nursing Care Assistant (Certificate)','ECG Assistant','Dental Assistant','Ophthalmic Assistant','CT Scan Technician','Dialysis Technician','MRI Technician',
    'Postgraduate Diploma in Human Resource Management (PGDM HR)','Postgraduate Diploma in Banking and Finance','MBA','M.Tech','MCA','PGPM','PGDEMA','Post Graduate Diploma in Hotel Management','PGDM in Digital Marketing','PGDM in International Business','Post Graduate Diploma in Software Engineering (PGDSE)',
    'Certification in Finance and Accounts','Business Accounting and Taxation','Tally','PGDM Finance','M.Com','Digital Marketing','Mobile App Development','Machine Learning','Diploma in Computer Application','Diploma in Human Resource Management','Post Graduate Programme in Public Policy and Management (PGP-PMP)'
			);

			$filteredArray = array_filter($arr, function($element) use($search_term){
				return isset($element) && strpos($element, $search_term) !== false;
			});
			
			return $filteredArray;
}


public function employeeLoginAttempts($email)
{
	$emaill1=base64_encode(base64_encode($email));
	$q=$this->db->where('employee_email',$emaill1)
		->get('employer_info');
    return $q->row()->employeeLoginAttempt;
	//return json_decode(json_encode($qq), true);		
}

public function recruiterLoginAttempts($email)
{
	$emaill1=base64_encode(base64_encode($email));
	$q=$this->db->where('recruiter_email',$emaill1)
		->get('recruiter');
    return $q->row()->recruiterLoginAttempt;
	//return json_decode(json_encode($qq), true);		
}

public function attemptHashEmailRecruiter($attemptHash,$email)
{
	$emaill= base64_encode(base64_encode($email));
	$q=$this->db->where(['recruiter_email'=>$emaill,'recruiterAttemptHash'=>$attemptHash])
		->get('recruiter');
    return $result=$q->num_rows();
}

public function attemptHashEmailEmployee($hash,$email)
{
	$emaill= base64_encode(base64_encode($email));
	$q=$this->db->where(['employee_email'=>$emaill,'employeeLoginAttemptHash'=>$hash])
		->get('employer_info');
    return $result=$q->num_rows();
}

}
?>