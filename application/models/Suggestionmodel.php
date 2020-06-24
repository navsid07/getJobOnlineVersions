<?php
class Suggestionmodel extends CI_Model
{

	public function updateemployee($array,$email)
	{
		return $this->db
			->where('employee_email',$email)
			->update('employer_info',$array);
	}

public function updaterecruiter($array,$email)
	{
		return $this->db
			->where('recruiter_email',$email)
			->update('recruiter',$array);
	}

	public function suggestionemployee($email)
	{
		$q=$this->db->select('*')
		->where(['employee_email'=>$email])
		->from('employer_info')
		->get();
		return $qq=$q->row()->employee_uid;
		
	}

	public function employee($email)
	{
		$q=$this->db->select('*')
		->where(['employee_email'=>$email])
		->from('employer_info')
		->get();
		 $qq=$q->result();
		return json_decode(json_encode($qq), true);
		
	}

	public function suggestionrecruiter($email)
	{
		$q=$this->db->select('*')
		->where(['recruiter_email'=>$email])
		->from('recruiter')
		->get();
		return $qq=$q->row()->recruiter_id;
		
	}
	public function recruiter($email)
	{
		$q=$this->db->select('*')
		->where(['recruiter_email'=>$email])
		->from('recruiter')
		->get();
		 $qq=$q->result();
		return json_decode(json_encode($qq), true);
		
	}


}
	?>