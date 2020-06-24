<?php
class Newmodel extends CI_Model
{
	
	function __construct()
    {
        parent::__construct();
    }
		public function recruiterRegister( $array )
		{
			if($this->db->insert('recruiter',$array))
			{
				return 'success';
			}
			
		}

		public function test()
		{

			$rid=15;
			$q=$this->db->join("applyjob","applyjob.applyjob_employee_id = employer_info.employee_uid")
			->where('applyjob.applyjob_employer_id',$rid)
			->get('employer_info');
			$qq=$q->result();
			return json_decode(json_encode($qq),true);

		}
}
?>