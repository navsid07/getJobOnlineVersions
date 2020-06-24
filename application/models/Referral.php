<?php 
class Referral extends CI_Model
{
	public function fetchrecruiteruid($src)
	{

		 $q=$this->db->where('recruiter_referral',$src)
		
		->get('recruiter');
		if($q->num_rows())
		{
			
			$q->row()->contact;
		}
		//$qq=$q->result();
		//return $ss= json_decode(json_encode($qq),true);
	}

	

}