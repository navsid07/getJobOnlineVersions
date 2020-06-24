<?php 
class Delete extends CI_Model
{


	//this function not in use
/*	public function shortlisted($id,$iid)
	{
		return $this->db->delete('shortlisted',array('shortlisted_employee_id'=>$id,'shortlisted_employer_id'=>$iid)); 
	}
*/
	//if employee want to delete review
	public function deleteemployeereview($reviewid)
	{
		return $this->db->delete('recruiter_rating',array('rrating_id'=>$reviewid));
	}

//delete employee data from all tables 
	public function adminemployee($email)
	{
		return $this->db->delete('employer_info',array('employee_email'=>$email)); 
	}
	public function employeePayment($id)
	{
		return $this->db->delete('employee_payment',array('epayment_uid'=>$id)); 
	}

public function employeeRating($id)
	{
		return $this->db->delete('employee_rating',array('erating_uid'=>$id)); 
	}

//recruit candidate
public function employeeRcandidate($id)
	{
		return $this->db->delete('recruitcandidate',array('recruitcandidate_employee_id'=>$id)); 
	}

//recruiterrating
public function employeeRecRrating($id)
	{
		return $this->db->delete('recruiter_rating',array('rrating_uid'=>$id)); 
	}

//saved recruiter
public function employeeSrecruiter($id)
	{
		return $this->db->delete('saved_recruiter',array('rsaved_uid'=>$id)); 
	}

//shortlist table
public function employeeShortlist($id)
	{
		return $this->db->delete('shortlist',array('shortlist_employee_id'=>$id)); 
	}

//shortlisted table
	public function employeeShortlisted($id)
	{
		return $this->db->delete('shortlisted',array('shortlisted_employee_id'=>$id)); 
	}

//end code delete employee data from all tables


//delete all data of recruiter

	public function adminrecruiter($email)
	{
		return $this->db->delete('recruiter',array('recruiter_email'=>$email)); 
	}
public function recruitershortlist($rid)
	{
		return $this->db->delete('shortlisted',array('shortlisted_employer_id'=>$rid)); 
	}

public function recruiterapplyjob($rid)
	{
		return $this->db->delete('applyjob',array('applyjob_employer_id'=>$rid)); 
	}

public function recruiterrecruitcandidate($rid)
	{
		return $this->db->delete('recruitcandidate',array('recruitcandidate_employer_id'=>$rid)); 
	}

public function recruiterrating($rid)
	{
		return $this->db->delete('recruiter_rating',array('rrating_recruiter_id'=>$rid)); 
	}

public function savedrecruiter($rid)
	{
		return $this->db->delete('saved_recruiter',array('rsaved_recruiter_id'=>$rid)); 
	}

public function recruitershortlistt($rid)
	{
		return $this->db->delete('shortlist',array('shortlist_employer_id'=>$rid)); 
	}


//end delete recruiter 
	public function recruited($id,$iid)
	{
		return $this->db->delete('recruitcandidate',array('recruitcandidate_employee_id'=>$id,'recruitcandidate_employer_id'=>$iid)); 
	}

	public function recruitment($jid,$employeeid)
	{

			$iidd=$this->session->userdata('recruiter_id');
			$sessionRecruiter=get_cookie('sessionCookieRecruiter');
	if(empty($iidd) && !empty($sessionRecruiter))
	{
		$iid=$sessionRecruiter;
	}
		elseif(!empty($iidd) && empty($sessionRecruiter))
	{
		$iid=$iidd;
	}
		elseif(!empty($iidd) && !empty($sessionRecruiter))
	{
		$iid=$iidd;
	}
		return $this->db->delete('recruitcandidate',array('recruitcandidate_employee_id'=>$employeeid,'recruitcandidate_employer_id'=>$iid,'recruitcandidate_jid'=>$jid)); 
	}

	public function wishlist($id,$iid)
	{
		return $this->db->delete('saved_recruiter',array('rsaved_recruiter_id'=>$id,'rsaved_uid'=>$iid)); 
	}




	public function appliedjob($iid,$jid)
	{
		 return $q=$this->db->set('applyjob_deleteStatus', '1')
		->where(['applyjob_employee_id'=>$iid,'applyjob_jid'=>$jid])
		->update('applyjob'); 
	}
	public function appliedjobagain($jid,$eid,$uid)
	{
		return $this->db->delete('applyjob',array('applyjob_jid'=>$jid,'applyjob_employee_id'=>$uid,'applyjob_employer_id'=>$eid)); 
	}
}
?>