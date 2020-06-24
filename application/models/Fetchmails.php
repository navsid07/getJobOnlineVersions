<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fetchmails extends CI_Model 
{

	public function fetch()
	{
		
		$q=$this->db->select('*')
			->where('status','old')
		->from('sendmarketingmail')
		->get();
		$qq=$q->result();
		return (json_decode(json_encode($qq), true));

	}

	/*public function fetch()
	{
		
		$q=$this->db->select('*')
		->from('sendmarketingmail')
		->get();
		$qq=$q->result();
		print_r($qq);
		//return (json_decode(json_encode($qq), true));

	}*/

	public function status($tto,$arrayy)
	{
		return $this->db->where($tto)
		->update('sendmarketingmail',$arrayy);
	}


	public function insertsuccess($array)
	{
		return $this->db->insert('sendmailstatus',$array);
	}

	public function insertfailure($array)
	{
		return $this->db->insert('sendmailstatus',$array);
	}

}