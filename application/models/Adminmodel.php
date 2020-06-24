<?php 
class Adminmodel extends CI_Model
{

	public function fetchhash($to_encode)
	{
		$q=$this->db->where(['recruiter_email'=>$to_encode])
		->get('recruiter');
		return $q->row()->recruiter_hash;

	}

	public function fetchrecruiterr()
	{
		$q=$this->db->select('*')
		->get('recruiter');
		 $qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
	}

	public function yearlyReferralEmployee($uid)
	{
		$q=$this->db->select('*')
		->where('EmployeeReferralYearly_uid',$uid)
		->get('EmployeeReferralYearly');
		 $qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
	}

	public function yearlyReferralRecruiter($uid)
	{
		$q=$this->db->select('*')
		->where('referralRecruiteryearly_uid',$uid)
		->get('recruiterReferral_yearly');
		 $qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
	}

//total reports from particular employee to recruiter
	public function totalEmployeeReports($uid)
	{
		
		$detail=$this->db->join("reportRecruiter","reportRecruiter.rid = recruiter.recruiter_id")
		->group_by('rid')
	->where("reportRecruiter.uid", $uid)
	->get("recruiter");
	$data=array();
	return $detail->result_array();
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


	//change status of article 
	public function deleteArticlesEmployee($id)
	{
			return $q=$this->db->set('deleteStatus','1')
		->where('employee_articleUid',$id)
		->update('employee_articles');
	
	}

	//fetch single report from employee articles report table
	public function fetchreportArticlesEmployee($reportid)
	{
			$q=$this->db->select('*')
			->where('id',$reportid)
	 	->from('reportEmployeeArticle')
	 	->get();
		return $qq=$q->result_array();
	
	}


//total article reports of employee 
	public function totalEmployeeArticleReport($uid)
	{
		
		$detail=$this->db->join("reportEmployeeArticle","reportEmployeeArticle.articleId = employee_articles.article_id")
		->group_by('articleId')
	->where("reportEmployeeArticle.userId", $uid)
	->get("employee_articles");
	$data=array();
	return $detail->result_array();
	}


//total article reports of employee 
	public function totalRecruiterArticleReport($uid)
	{
		
		$detail=$this->db->join("reportRecruiterArticle","reportRecruiterArticle.articleId = recruiter_articles.recruiter_articleId")
		->group_by('articleId')
	->where("reportRecruiterArticle.userId", $uid)
	->get("recruiter_articles");
	$data=array();
	return $detail->result_array();
	}


	//total reports on single article 
	public function totalReportArticle($aid)
	{
		
		$detail=$this->db->join("reportRecruiterArticle","reportRecruiterArticle.articleId = recruiter_articles.recruiter_articleId")
		//->group_by('articleId')
	->where("reportRecruiterArticle.articleId", $aid)
	->get("recruiter_articles");
	$data=array();
	return $detail->result_array();

	}



	//total reports to job employee
	public function totalReportsJob($uid)
	{		
		$detail=$this->db->join("reportJob","reportJob.jid = submitjob.submitjob_id")
		->group_by('jid')
	->where("reportJob.uid", $uid)
	->get("submitjob");
	$data=array();
	$num=$detail->num_rows();
	 $rresult=$detail->result_array();
	return array('num'=>$num,'result'=>$rresult);
	}

	//fetch jobs submitter


	public function jobSubmitBy($uid)
	{		
		$detail=$this->db->join("recruiter","recruiter.recruiter_id = submitjob.submitjob_employer_id")
		//->group_by('jid')
	->where("submitjob.submitjob_id", $uid)
	->get("submitjob");
	$data=array();
	return $detail->result_array();
	}

//fetch single job

	public function singlejob($urii)
	{
		$q=$this->db->select('*')
		->where('submitjob_id',$urii)
		->from('submitjob')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}
/*
$detail=$this->db->join("applyjob","applyjob.applyjob_employee_id = employer_info.employee_uid")
	->where("applyjob.applyjob_employer_id",$uid)
	->group_by("applyjob.applyjob_employee_id")
	->get("employer_info");
	$data=array();
	return $data['records'] = $detail->result_array();*/
//fetch applied job for admin panel job description
public function adminAppliedJobs($urii)
{
	$detail=$this->db->join("applyjob","applyjob.applyjob_employee_id = employer_info.employee_uid")
	->where("applyjob.applyjob_jid", $urii)
	->get("employer_info");
	$data=array();
	return $detail->result_array();

}

//article report
public function articleReport($aid)
{
	$detail=$this->db->join("reportEmployeeArticle","reportEmployeeArticle.userId = employer_info.employee_uid")
	->order_by('reportEmployeeArticle.id','desc')
	->group_by('reportEmployeeArticle.userId','desc')
	->where("reportEmployeeArticle.articleId", $aid)
	->get("employer_info");
	$data=array();
	return $detail->result_array();

}

//article report
public function articleReportrecruiter($aid)
{

	$detail=$this->db->join("reportRecruiterArticle","reportRecruiterArticle.userId = recruiter.recruiter_id")
	->order_by('reportRecruiterArticle.id','desc')
	->group_by('reportRecruiterArticle.userId')
	->where("reportRecruiterArticle.articleId", $aid)
	->get("recruiter");
	$data=array();
	return $detail->result_array();

}

/*//recruiter report
public function reportRecruiter($rid)
{
$detail=$this->db->join("reportRecruiter","reportRecruiter.uid = employer_info.employee_uid")
	//->order_by('reportRecruiterArticle.id','desc')
	//->group_by('reportRecruiter.uid')
	->where("reportRecruiter.rid", $rid)
	->get("employer_info");
	$data=array();
	return $detail->result_array();

}*/

//fetch articles

	public function reportRecruiter($rid)
	{
			$q=$this->db->select('*')
			->where('rid',$rid)
	 	->from('reportRecruiter')
	 	->get();
			$qq=$q->result();
		return json_decode(json_encode($qq), true);
	
	}


//fetch recruiter article report

	public function SingleReportRecruiterArticle($id)
	{
			$q=$this->db->select('*')
			->where('id',$id)
	 	->from('reportRecruiterArticle')
	 	->get();
			$qq=$q->result();
		return json_decode(json_encode($qq), true);
	
	}


	//fetch articles

	public function reportRecruiterFetch($id)
	{
			$q=$this->db->select('*')
			->where('id',$id)
	 	->from('reportRecruiter')
	 	->get();
			$qq=$q->result();
		return json_decode(json_encode($qq), true);
	
	}


	//fetch articles

	public function reportEmployeeFetch($id)
	{
			$q=$this->db->select('*')
			->where('id',$id)
	 	->from('reportEmployee')
	 	->get();
			$qq=$q->result();
		return json_decode(json_encode($qq), true);
	
	}

//employee articles 
public function singleArticlesEmployee($aid)
	{
		$q=$this->db->select('*')
	 	->from('employee_articles')
	 	->where('article_id',$aid)
	 	->get();
	 	$uid=$q->row()->employee_articleUid;
		$result=$q->result_array();
		return array('result'=>$result,'uid'=>$uid);
	}

//employee articles 
public function singleArticlesRecruiter($aid)
	{
			$q=$this->db->select('*')
	 	->from('recruiter_articles')
	 	->where('recruiter_articleId',$aid)
	 	->get();
	 	$uid=$q->row()->recruiter_articleUid;
	 	$result=$q->result_array();
		return array('result'=>$result,'uid'=>$uid);
	
	}

//fetch repport job for admin panel job description
public function adminReportJobs($urii)
{
	$detail=$this->db->join("reportJob","reportJob.uid = employer_info.employee_uid")
	->where("reportJob.jid", $urii)
	->group_by('uid')
	->get("employer_info");
	$data=array();
	return $detail->result_array();

}

//fetch repport job for admin panel job description
public function fetchsinglejob($urii)
{
	$detail=$this->db->join("reportJob","reportJob.uid = employer_info.employee_uid")
	->where("reportJob.id", $urii)
	->group_by('uid')
	->get("employer_info");
	$data=array();
	return $detail->result_array();

}

//fetch all reports on prticular job
public function fetchMorereports($jid,$uid)
{
	$detail=$this->db->join("reportJob","reportJob.uid = employer_info.employee_uid")
	->where("reportJob.jid", $jid)
	->where("reportJob.uid!=", $uid)
	->group_by('reportJob.uid')
	->get("employer_info");
	$data=array();
	return $detail->result_array();

}


//scroll pagination
	function fetch_data_scrolling($limit, $start)
	{

		$this->db->select("*");
		//$this->db->where("employee_status!=", "1");
		$this->db->from("employer_info");
		$this->db->order_by("employee_uid", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	//fetch soingle job
	public function fetchSingleReport($id,$userid)
	{

		$q=$this->db->select("*")
		->where('id',$id)
		->where('uid',$userid)	
		->from("reportJob")
		->get();
		return $result=$q->result_array();
		
	}

	//fetch all reports for single job
	public function allreportsforJob($urii)
	{

		$q=$this->db->select("*")
		->where('jid',$urii)
		->from("reportJob")
		->get();
		return $result=$q->result_array();
		
	}

	//fetch soingle job
	public function fetchSingleReportanother($id)
	{

		$q=$this->db->select("*")
		->where('id',$id)
		->from("reportJob")
		->get();
		return $result=$q->result_array();
		
	}

	 function fetch_dataRecruiterAdmin($limit, $start)
  {

    $this->db->select("*");
    $this->db->from("recruiter");
    $this->db->where("recruiter_status!=","1");
    $this->db->order_by("recruiter_id", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query;
  }
  
//insert last signin
	public function lastLoginEmployee( $array )
		{
			if($this->db->insert('employeeLastSignin',$array))
			{
				return 'success';
			}
			
		}

//insert last signin recruiter
	public function lastLoginRecruiter( $array )
		{
			if($this->db->insert('recruiterLastSignin',$array))
			{
				return 'success';
			}
			
		}

//fetch last signinresult
public function signinresult($signinid)

{
		$q=$this->db->select('*')
		->order_by('id','desc')
		->where('uid',$signinid)
		->limit(1)
		->get('employeeLastSignin');
		//return $q->row()->time;
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
		
}
//fetch last signinresult
public function signinresultRecruiter($signinid)

{
		$q=$this->db->select('*')
		->order_by('id','desc')
		->where('uid',$signinid)
		->limit(1)
		->get('recruiterLastSignin');
		//return $q->row()->time;
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
		
}

//fetch last signinresult
public function signinresultEmployee($uid)

{
		$q=$this->db->select('*')
		->order_by('id','desc')
		->where('uid',$uid)
		->limit(1)
		->get('employeeLastSignin');
		//return $q->row()->time;
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
		
}

	public function fetchallEmployees()
	{
		$q=$this->db->select('*')
		->get('employer_info');
		 $qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
	}


	public function fetchallemployer()
	{
			$q=$this->db
			//->where(array('employee_verify!='=>2))
			->order_by('employee_uid','desc')
			->from('employer_info')
			->get();
		$qq=$q->result();
		//print_r($qq);
		return $ss= json_decode(json_encode($qq),true);
	}

	public function insertData($array)
	{
		$this->db->insert('adminData',$array);
	}
	public function fetchsuggestedemployee()
	{
			$q=$this->db
			->where('employee_suggestion_status',1)
			->from('employer_info')
			->get();
		$qq=$q->result();
		//print_r($qq);
		return $ss= json_decode(json_encode($qq),true);
	}
	public function fetchsuggestedrecruiter()
	{
			$q=$this->db
			->where('recruiter_suggestion_status',1)
			->from('recruiter')
			->get();
		$qq=$q->result();
		//print_r($qq);
		return $ss= json_decode(json_encode($qq),true);
	}

//fetch empoloyee uid
	
public function employeeUid($to)
	{
		$q=$this->db->where('employee_email',$to)
		->get('employer_info');
		return $q->row()->employee_uid;
		
	}

	//fetch recruier uid
	
public function recruiterUid($to)
	{
		$q=$this->db->where('recruiter_email',$to)
		->get('recruiter');
		return $q->row()->recruiter_id;
		
	}

public function lastmailsentEmployee($array)
	{
	 	
	 	$this->db->insert('adminLastMailSentEmployee',$array);
	}

	public function lastmailsentRecruiter($array)
	{
	 	
	 	$this->db->insert('adminLastMailSentRecruiter',$array);
	}

	public function lastmailtimeemployee($uid)
	{

			$q=$this->db->select('*')
			->where('mailSent_uid',$uid)
			->order_by('mailSent_id','desc')
			->limit(1)
			->from('adminLastMailSentEmployee')
			->get();
		$qq=$q->result();
		//print_r($qq);
		return $ss= json_decode(json_encode($qq),true);
	}

	public function lastmailtimerecruiter($uid)
	{

			$q=$this->db->select('*')
			->where('recruiterMailSent_uid',$uid)
			->order_by('recruiterMailSent_id','desc')
			->limit(1)
			->from('adminLastMailSentRecruiter')
			->get();
			$rows=$q->num_rows();
		$qq=$q->result();
		//print_r($qq);
		 $ss= json_decode(json_encode($qq),true);
		return array('result'=>$ss,'rows'=>$rows);
	}

	

	public function updatesuggestion($suggestion,$tto)
	{

		  $time = round(microtime(true) * 1000);
		$insert=['employee_suggestion'=>$suggestion,'employee_suggestion_status'=>1,'employee_suggestion_date'=>$time];
		return  $this->db
			->where('employee_email',$tto)
			->update('employer_info',$insert);
			
	}
	public function updatesuggestionrecruiter($suggestion,$to_encode)
	{

		  $time = round(microtime(true) * 1000);
		$insert=['recruiter_suggestion'=>$suggestion,'recruiter_suggestion_status'=>1,'recruiter_suggestion_date'=>$time];
		return  $this->db
			->where('recruiter_email',$to_encode)
			->update('recruiter',$insert);
			
	}

	public function singleemployer($uid)
	{
		$q=$this->db->select('*')
			->where('employee_uid',$uid)
			->from('employer_info')
			->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
	}

	public function fetchallrecruiter()
	{
			$q=$this->db
			->where(array('recruiter_verify!='=>2))
			->from('recruiter')
			->get();
		$qq=$q->result();
		//print_r($qq);
		return $ss= json_decode(json_encode($qq),true);
	}

	public function singlerercuiter($uid)
	{
			$q=$this->db->select('*')
			->where('recruiter_id',$uid)
			->from('recruiter')
			->get();
		$qq=$q->result();

		return $ss= json_decode(json_encode($qq),true);
	}
	
	//fetch reports for particulatr recruiter
	public function fetchallreportsRecruiter($user,$id)
	{
			$detail=$this->db->join("reportRecruiter","reportRecruiter.uid = employer_info.employee_uid")
	->where("reportRecruiter.rid",$user)
	->where('reportRecruiter.id!=',$id)
	//->group_by('employer_info.employee_uid')
	->get("employer_info");
	$data=array();
	return $detail->result_array();
	}

	public function singleRecruiterReports($user)
	{
		$detail=$this->db->join("reportRecruiter","reportRecruiter.uid = employer_info.employee_uid")
	->where("reportRecruiter.rid",$user)
	//->group_by('employer_info.employee_uid')
	->get("employer_info");
	$data=array();
	return $detail->result_array();
	}

	//fetch reports for particulatr employee
	public function fetchallreportsEmployee($user,$id)
	{
			$detail=$this->db->join("reportEmployee","reportEmployee.rid = recruiter.recruiter_id")
	->where("reportEmployee.uid",$user)
	->where("reportEmployee.rid!=",$id)
	//->group_by('recruiter.recruiter_id')
	->get("recruiter");
	$data=array();
	return $detail->result_array();
	}



	public function login($username,$password)
	{
		$q=$this->db->select('*')
		->where(['username'=>$username,'password'=>$password])
		->from('admin')
		->get();
		return $q->num_rows();
	}

	public function verifiedrecruiter($email)
	{
		$email1=$email;
		return $this->db->where('recruiter_email',$email1)
		->update('recruiter',array('recruiter_verify'=>'2'));
	}

	public function verifiedemloyee($email)
	{
		$email1=$email;
		return $this->db->where('employee_email',$email1)
		->update('employer_info',array('employee_verify'=>'2'));
	}

	public function declineemloyee($email)
	{

		return $this->db->where('employee_email',$email)
		->update('employer_info',array('employee_verify'=>'3'));
	}

	public function declinerecruiter($email)
	{
		return $this->db->where('recruiter_email',$email)
		->update('recruiter',array('recruiter_verify'=>'3'));
	}

	public function verifiedrecruitermodel()
	{
		 $q=$this->db->select('*')
		->where('recruiter_verify',2)
		->from('recruiter')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),True);


	}


public function verifiedemployeemodel()
	{
		 $q=$this->db->select('*')
		->where('employee_verify',2)
		->from('employer_info')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),True);


	}

//total number of submitted jobs
		public function submittedjobsCount()
	{
		$q=$this->db->select('*')
		->from('submitjob')
		->get();
		return $q->num_rows();
	
		
	}


	public function recruiterjobs($uid)
	{
		$q=$this->db->select('*')
		->where('submitjob_employer_id',$uid)
		->from('submitjob')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}
	public function fetchjob($jid)
	{
		$q=$this->db->select('*')
		->where('submitjob_id',$jid)
		->from('submitjob')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}

	//fetch recruiter uid for delete
	public function fetchrecuid($email)
	{
		$q=$this->db->where('recruiter_email',$email)
		->get('recruiter');
		return $q->row()->recruiter_id;
	} 

	//fetch employee uid for delete
	public function fetchempuid($email)
	{
		$q=$this->db->where('employee_email',$email)
		->get('employer_info');
		return $q->row()->employee_uid;
	} 

	public function deleteEmployeeAdmin($id)
{
	 return $q=$this->db->set('employee_status','1')
		->where('employee_uid',$id)
		->update('employer_info');
}

public function deleteRecruiterAdmin($id)
{
	 return $q=$this->db->set('recruiter_status','1')
		->where('recruiter_id',$id)
		->update('recruiter');
}

public function fetchrecruiter($articleid)
	{
		
		 $q=$this->db->select('*')
		->from('recruiter')
		->where('recruiter_id',$articleid)
		->get();
		$qq=$q->result();
		return $ss= json_decode(json_encode($qq),true);
		
	}

}