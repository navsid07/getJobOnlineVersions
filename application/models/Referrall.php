<?php 
class Referrall extends CI_Model
{

	// if referral request from recruiters referral code
	public function fetchrecruiteruid($src)
	{

		 $q=$this->db->where('recruiter_referral',$src)
		
		->get('recruiter');
		if($q->num_rows())
		{
			
			return $q->row()->recruiter_id;
		}
		
	}
	public function fetchrecruiterreferral($email)
	{

		 $q=$this->db->where('recruiter_email',$email)
		
		->get('recruiter');
		if($q->num_rows())
		{
			
			return $q->row()->recruiter_id;
		}
		
	}
	public function fetchemployeereferral($email)
	{

		 $q=$this->db->where('employee_email',$email)
		
		->get('employer_info');
		if($q->num_rows())
		{
			
			return $q->row()->employee_uid;
		}
		
	}
/*	 public function insertclickrecruiter($id,$presentdate)
	 {
	 		$q=$this->db->select('*')
	 		->where('totalreferralr_uid',$id)
	 		->from('totalreferralrecruiter')
	 		->get();
	 		 $qq=$q->num_rows();

	 		//updated code for referral
	 		$q2=$this->db->select('*')
	 		->where(['referralRecruiterCount_uid'=>$id,'referralRecruiterCount_date'=>$presentdate])
	 		->from('referralRecruiterCount')
	 		->get();
	 		 $qq2=$q2->num_rows();
	 		if($qq2!=null)
	 		{
	 			$this->db->set('referralRecruiterCount_clicks', '`referralRecruiterCount_clicks`+1', FALSE)
			->where(['referralRecruiterCount_uid'=>$id,'referralRecruiterCount_date'=>$presentdate])
			->update('referralRecruiterCount');
	 		}

	 		else
	 		{
	 			$array=array('referralRecruiterCount_uid'=>$id,'referralRecruiterCount_date'=>$presentdate,'referralRecruiterCount_clicks'=>'1');
	 			$this->db->insert('referralRecruiterCount',$array);

	 		}


	 		if($qq!=null)
	 		{
	 		$this->db->set('totalreferralr_clicks', '`totalreferralr_clicks`+1', FALSE)
			->where('totalreferralr_uid',$id)
			->update('totalreferralrecruiter');

			$this->db->set('mreferralr_clicks', '`mreferralr_clicks`+1', FALSE)
			->where('mreferralr_uid',$id)
			->update('monthlyreferralrecruiter');

			$this->db->set('wreferralr_clicks', '`wreferralr_clicks`+1', FALSE)
			->where('wreferralr_uid',$id)
			->update('weeklyreferralrecruiter');
		}
		else
		{
			date_default_timezone_set('Asia/Kolkata');
			$time = round(microtime(true) * 1000);
			$datam=array('mreferralr_clicks'=>1,'mreferralr_completed'=>0,'mreferralr_register'=>0,'mreferralr_date_time'=>$time,'mreferralr_uid'=>$id);
			$dataw=array('wreferralr_clicks'=>1,'wreferralr_completed'=>0,'wreferralr_register'=>0,'wreferralr_date_time'=>$time,'wreferralr_uid'=>$id);
			$datatotal=array('totalreferralr_clicks'=>1,'totalreferralr_completed'=>0,'totalreferralr_register'=>0,'totalreferralr_date_time'=>$time,'totalreferralr_uid'=>$id);

			 $q1=$this->db->insert('weeklyreferralrecruiter',$dataw);
			 $q2=$this->db->insert('monthlyreferralrecruiter',$datam);
			return $q=$this->db->insert('totalreferralrecruiter',$datatotal);

		}
	 }
*/

	 public function updatereferalemployee($email)
	 {
	 	return $this->db->set('employee_referral_status','1')
	 	->where('employee_email',$email)
	 	->update('employer_info');

	 }

	 public function updatereferalrecruiter($email)
	 {
	 	return $this->db->set('recruiter_referral_status','1')
	 	->where('recruiter_email',$email)
	 	->update('recruiter');

	 }
/*	 public function registerupdaterid($id)
	 {

	 	//updated code for referral
	 		$q2=$this->db->select('*')
	 		->where(['referralRecruiterCount_uid'=>$id,'referralRecruiterCount_date'=>$presentdate])
	 		->from('referralRecruiterCount')
	 		->get();
	 		 $qq2=$q2->num_rows();
	 		if($qq2!=null)
	 		{
	 			$this->db->set('referralRecruiterCount_clicks', '`referralRecruiterCount_clicks`+1', FALSE)
			->where(['referralRecruiterCount_uid'=>$id,'referralRecruiterCount_date'=>$presentdate])
			->update('referralRecruiterCount');
	 		}

	 		else
	 		{
	 			$array=array('referralRecruiterCount_uid'=>$id,'referralRecruiterCount_date'=>$presentdate,'referralRecruiterCount_clicks'=>'1');
	 			$this->db->insert('referralRecruiterCount',$array);

	 		}


	 	$this->db->set('totalreferralr_register', '`totalreferralr_register`+1', FALSE)
			->where('totalreferralr_uid',$id)
			->update('totalreferralrecruiter');

			$this->db->set('mreferralr_register', '`mreferralr_register`+1', FALSE)
			->where('mreferralr_uid',$id)
			->update('monthlyreferralrecruiter');

			return $this->db->set('wreferralr_register', '`wreferralr_register`+1', FALSE)
			->where('wreferralr_uid',$id)
			->update('weeklyreferralrecruiter');
	 }
*/
	 //end recruiter referral code request




	 // if referral request from employee referral code
	public function fetchemployeeuid($src)
	{

		 $q=$this->db->where('employee_referral',$src)
		
		->get('employer_info');
		if($q->num_rows())
		{
			
			return $q->row()->employee_uid;
		}
		
	}
/*	 public function insertclickemployee($id,$presentdate)
	 {
	 	$datestring = '%Y/%m/%d';
			$time = time();
			$ppresentdate= mdate($datestring);
	 		$q=$this->db->select('*')
	 		->where('mreferrale_uid',$id)
	 		->from('monthlyreferralemployee')
	 		->get();
	 		$qq=$q->num_rows();


	 		//updated code for referral
	 		$q22=$this->db->select('*')
	 		->where(['referralEmployeeCount_uid'=>$id,'referralEmployeeCount_date'=>$presentdate])
	 		->from('referralEmployeeCount')
	 		->get();
	 		 echo 'qq2='.$qq22=$q22->num_rows();
	 		if($qq22!=null)
	 		{
	 			$this->db->set('referralEmployeeCount_clicks', '`referralEmployeeCount_clicks`+1', FALSE)
			->where(['referralEmployeeCount_uid'=>$id,'referralEmployeeCount_date'=>$presentdate])
			->update('referralEmployeeCount');
	 		}

	 		else
	 		{
	 			$array=array('referralEmployeeCount_uid'=>$id,'referralEmployeeCount_date'=>$presentdate,'referralEmployeeCount_clicks'=>'1');
	 			$this->db->insert('referralEmployeeCount',$array);

	 		}



	 		if($qq!=null)
	 		{
	 		//$this->db->set('totalreferrale_clicks', '`totalreferrale_clicks`+1', FALSE)
			//->where('totalreferrale_uid',$id)
			//->update('totalreferralemployee');

			//$this->db->set('wreferrale_clicks', '`wreferrale_clicks`+1', FALSE)
			//->where('wreferrale_uid',$id)
			//->update('weeklyreferralemployee');

			$this->db->set('mreferrale_clicks', '`mreferrale_clicks`+1', FALSE)
			->where('mreferrale_uid',$id)
			->update('monthlyreferralemployee');
		}
		else
		{
			date_default_timezone_set('Asia/Kolkata');
			$time = round(microtime(true) * 1000);
			//$dataw=array('wreferrale_clicks'=>1,'wreferrale_completed'=>0,'wreferrale_date_time'=>$time,'wreferrale_uid'=>$id);
			$datam=array('mreferrale_clicks'=>1,'mreferrale_completed'=>0,'mreferrale_date_time'=>$time,'mreferrale_uid'=>$id);
			//$datat=array('totalreferrale_clicks'=>1,'totalreferrale_completed'=>0,'totalreferrale_date_time'=>$time,'totalreferrale_uid'=>$id);
			
			// $q1=$this->db->insert('weeklyreferrale_employee',$dataw);
		 return $q2=$this->db->insert('monthlyreferralemployee',$datam);
			 //return $q=$this->db->insert('totalreferrale_employee',$datat);

		}
 }
*/
public function ttime()
{
	 $q=$this->db->where('totalreferrale_uid',1)
		->get('totalreferralemployee');
		return $q->row()->totalreferrale_date_time;
}
/*
public function registerupdateeid($id)
{

	//updated code for referral
	 		$q2=$this->db->select('*')
	 		->where(['referralEmployeeCount_uid'=>$id,'referralEmployeeCount_date'=>$presentdate])
	 		->from('referralEmployeeCount')
	 		->get();
	 		 $qq2=$q2->num_rows();
	 		if($qq2!=null)
	 		{
	 			$this->db->set('referralEmployeeCount_clicks', '`referralEmployeeCount_clicks`+1', FALSE)
			->where(['referralEmployeeCount_uid'=>$id,'referralEmployeeCount_date'=>$presentdate])
			->update('referralEmployeeCount');
	 		}

	 		else
	 		{
	 			$array=array('referralEmployeeCount_uid'=>$id,'referralEmployeeCount_date'=>$presentdate,'referralEmployeeCount_clicks'=>'1');
	 			$this->db->insert('referralEmployeeCount',$array);

	 		}


	$this->db->set('totalreferrale_register', '`totalreferrale_register`+1', FALSE)
			->where('totalreferrale_uid',$id)
			->update('totalreferralemployee');

			$this->db->set('mreferrale_register', '`mreferrale_register`+1', FALSE)
			->where('mreferrale_uid',$id)
			->update('monthlyreferralemployee');

			return $this->db->set('wreferrale_register', '`wreferrale_register`+1', FALSE)
			->where('wreferrale_uid',$id)
			 ->update('weeklyreferralemployee');
}*/
	 //end employee referral code request

public function checktotalemployee($eid)
{
	$q=$this->db->select('*')
	 		->where('totalreferrale_uid',$eid)
	 		->from('totalreferralemployee')
	 		->get();
	 		$qq=$q->result();
	 		return $a=json_decode(json_encode($qq),True);

}
/*
public function checkweeklyemployee($eid)
{
	$q=$this->db->select('*')
	 		->where('wreferrale_uid',$eid)
	 		->from('weeklyreferralemployee')
	 		->get();
	 		$qq=$q->result();
	 		return $a=json_decode(json_encode($qq),True);
}
*/
/*public function checkmonthlyemployee($eid)
{

	$q=$this->db->select('*')
	 		->where('mreferrale_uid',$eid)
	 		->from('monthlyreferralemployee')
	 		->get();
	 		$qq=$q->result();
	 		return $a=json_decode(json_encode($qq),True);
}*/


public function checktotalrecruiter($rid)
{
	$q=$this->db->select('*')
	 		->where('totalreferralr_uid',$rid)
	 		->from('totalreferralrecruiter')
	 		->get();
	 		$qq=$q->result();
	 		return $a=json_decode(json_encode($qq),True);

}
/*
public function checkweeklyrecruiter($rid)
{
	$q=$this->db->select('*')
	 		->where('wreferralr_uid',$rid)
	 		->from('weeklyreferralrecruiter')
	 		->get();
	 		$qq=$q->result();
	 		return $a=json_decode(json_encode($qq),True);
}*/
/*
public function checkmonthlyrecruiter($rid)
{

	$q=$this->db->select('*')
	 		->where('mreferralr_uid',$rid)
	 		->from('monthlyreferralrecruiter')
	 		->get();
	 		$qq=$q->result();
	 		return $a=json_decode(json_encode($qq),True);
}*/
/*
public function updateweeklyemployee($iid)
{
	$q=$this->db->where('wreferrale_uid',$iid)
		->get('weeklyreferralemployee');
		if($q->num_rows())
		{
			$ttime= $q->row()->wreferrale_date_time;
			$pastdate= date("y-m-d H:i:s", ($ttime / 1000));
			$curentTime = round(microtime(true) * 1000);
	 		$presentdate= date("y-m-d H:i:s", ($curentTime / 1000));
	 		 $date1=new \DateTime($pastdate);
	 	 $date2=new \DateTime($presentdate);
		$interval = new \DateInterval('PT1H');
		$periods = new \DatePeriod($date1, $interval, $date2);
		$hours = iterator_count($periods);
		if($hours>168)
		{
			$update=array('wreferrale_clicks'=>0,'wreferrale_register'=>0,'wreferrale_completed'=>0,'wreferrale_date_time'=>0);
			$this->db->update('weeklyreferralemployee',$update);
		}
		}
	 
}
*/
/*
public function updatemonthlyemployee($iid)
{
	$q=$this->db->where('mreferrale_uid',$iid)
		->get('monthlyreferralemployee');
		if($q->num_rows())
		{
			$ttime= $q->row()->mreferrale_date_time;
			$pastdate= date("y-m-d H:i:s", ($ttime / 1000));
			$curentTime = round(microtime(true) * 1000);
	 		$presentdate= date("y-m-d H:i:s", ($curentTime / 1000));
	 		 $date1=new \DateTime($pastdate);
	 	 $date2=new \DateTime($presentdate);
		$interval = new \DateInterval('PT1H');
		$periods = new \DatePeriod($date1, $interval, $date2);
		$hours = iterator_count($periods);
		if($hours>730)
		{
			$update=array('mreferrale_clicks'=>0,'mreferrale_register'=>0,'mreferrale_completed'=>0,'mreferrale_date_time'=>0);
			$this->db->update('monthlyreferralemployee',$update);
		}
		}
	 
}*/
/*
public function updateweeklyrecruiter($iid)
{
	$q=$this->db->where('wreferralr_uid',$iid)
		->get('weeklyreferralrecruiter');
		if($q->num_rows())
		{
			$ttime= $q->row()->wreferralr_date_time;
			$pastdate= date("y-m-d H:i:s", ($ttime / 1000));
			$curentTime = round(microtime(true) * 1000);
	 		$presentdate= date("y-m-d H:i:s", ($curentTime / 1000));
	 		 $date1=new \DateTime($pastdate);
	 	 $date2=new \DateTime($presentdate);
		$interval = new \DateInterval('PT1H');
		$periods = new \DatePeriod($date1, $interval, $date2);
		$hours = iterator_count($periods);
		if($hours>168)
		{
			$update=array('wreferralr_clicks'=>0,'wreferralr_register'=>0,'wreferralr_completed'=>0,'wreferralr_date_time'=>0);
			$this->db->update('weeklyreferralrecruiter',$update);
		}
		}
	 
}*/
/*
public function updatemonthlyrecruiter($iid)
{
	$q=$this->db->where('mreferralr_uid',$iid)
		->get('monthlyreferralrecruiter');
		if($q->num_rows())
		{
			$ttime= $q->row()->mreferrale_date_time;
			$pastdate= date("y-m-d H:i:s", ($ttime / 1000));
			$curentTime = round(microtime(true) * 1000);
	 		$presentdate= date("y-m-d H:i:s", ($curentTime / 1000));
	 		 $date1=new \DateTime($pastdate);
	 	 $date2=new \DateTime($presentdate);
		$interval = new \DateInterval('PT1H');
		$periods = new \DatePeriod($date1, $interval, $date2);
		$hours = iterator_count($periods);
		if($hours>730)
		{
			$update=array('mreferralr_clicks'=>0,'mreferralr_register'=>0,'mreferralr_completed'=>0,'mreferralr_date_time'=>0);
			$this->db->update('monthlyreferralrecruiter',$update);
		}
		}
	 
}*/
public function updatepaytmrecruiter($paytm)
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
	return $this->db->where('recruiter_id',$uid)->update('recruiter',array('recruiter_paytm'=>$paytm));
	
}

public function referralcompletedd()
	{
		
			$empty='';
		 $q=$this->db->where('recruiter_referral_email','0')
		->where('recruiter_referral_from !=',$empty)
		->get('recruiter');
		$qq=$q->result();
		//return $q->row()->email;
		return json_decode(json_encode($qq), true);
		//echo $result=$q->num_rows();
		

	}

	public function referralcompleteddemployee()
	{
		
			$empty='';
		 $q=$this->db->where('employee_referral_email','0')
		->where('employee_referral_from !=',$empty)
		->get('employer_info');
		$qq=$q->result();
		//return $q->row()->email;
		return json_decode(json_encode($qq), true);
		//echo $result=$q->num_rows();
	}

	public function fetchemployee()
	{
		$q=$this->db->select('*')
		->from('employer_info')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}
public function fetchrecruiter()
	{
		$q=$this->db->select('*')
		->from('recruiter')
		->get();
		$qq=$q->result();
		return json_decode(json_encode($qq),true);

	}

}