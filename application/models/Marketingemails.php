<?php

class Marketingemails extends CI_Model
{
	public function fetchfail()
	{
		$q=$this->db
		->limit(50)
		->where('status','failed')
		->from('sendmailstatus')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}

	public function fetchnew()
	{
		$q=$this->db
		->limit(50)
		->where('status','new')
		->from('marketingmails')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);
	}
	public function fetchold()
	{
		$q=$this->db
		->where('status','old')
		->from('marketingmails')
		->get();
		$qq=$q->result();
		//print_r($qq);
		return json_decode(json_encode($qq),true);
	}

	public function fetcnewsletter()
	{
		$q=$this->db
		->where('status','0')
		->from('newsletter')
		->get();
		$qq=$q->result();
		//print_r($qq);
		return json_decode(json_encode($qq),true);
	}

	public function updatenewsletter()
	{
		$insert=array('status'=>'1');
		
		return $this->db
			->update('newsletter',$insert);

	}


	public function uupdate()
	{
		return $q=$this->db->where('status','')
		->update('marketingmails',array('status'=>'new'));
	
	}

	public function successupdate($to)
	{

		
		return $q=$this->db->where('email',$to)
		->update('sendmailstatus',array('status'=>'success'));

 		
	}

	public function successupdate1($to)
	{

		
		return $q=$this->db->where('email',$to)
		->update('marketingmails',array('status'=>'old'));
		/*if(!$q)
		{
			echo 'wrong';
		}
		else
		{
			echo 'to='.$to;
		}*/

 		
	}
	public function failupdate($to)
	{
		return $q=$this->db->where('email',$to)
		->update('sendmailstatus',array('status'=>'failed'));
	
	}

	public function successstatusupdate($array)
	{
		$this->db->insert('sendmailstatus',$array);
	}
	public function failstatusupdate($array)
	{
		$this->db->insert('sendmailstatus',$array);
	}
}

	?>