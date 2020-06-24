<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminAgain extends CI_Controller 
{

function __construct()
    {
        // this is your constructor
        parent::__construct();
      
        $this->load->helper('url');
     
        $this->load->model('insert');
        $this->load->model('fetch');     
         $this->load->model('adminmodel');
          
    }


	function index()

	{

		$this->load->view('paginationTest');

	}



     public function fetchRecruiterAdmin()
  {
    $output = '';
    $data = $this->adminmodel->fetch_dataRecruiterAdmin($this->input->post('limit'), $this->input->post('start'));
    if($data->num_rows() > 0)
    {
      foreach($data->result() as $row)
      {
      	//print_r($row);
      	$uid=$row->recruiter_id;
      	$uidd=$row->recruiter_established;
      	$articles=$this->fetch->articlesCountrecruiter($uid);
		$reportCountt=$this->fetch->reportsCountRecruiter($uid);
		$jobscount=$this->fetch->submitjobCount($uid);

		//reports count
									if(empty($reportCountt))
							  {
							  	$reportCount='No report';
							  }
							  elseif (!empty($reportCountt)) {
							  
							  	if($reportCountt==1)
							  	{
							  		$reportCount=$reportCountt.' report';
							  	}
							  	elseif ($reportCountt>1) {
							  		$reportCount=$reportCountt.' reports';
							  	}
							  }


								if(empty($articles))
							  {
							  	$articlescount='No article';
							  }
							  elseif (!empty($articles)) {
							  
							  	if($articles==1)
							  	{
							  		$articlescount=$articles.'  article';
							  	}
							  	elseif ($articles>1) {
							  		$articlescount=$articles.' articles';
							  	}
							  }



							if(empty($jobscount))
							  {
							  	$submitjobs='No Jobs submitted';
							  }
							  elseif (!empty($jobscount)) {
							  
							  	if($jobscount==1)
							  	{
							  		$submitjobs=$jobscount.' Job Submitted';
							  	}
							  	elseif ($jobscount>1) {
							  		$submitjobs=$jobscount.' Jobs Submitted';
							  	}
							  }


							  	$established=$row->recruiter_established;
							$category=$row->recruiter_category;
							  $state=$row->recruiter_state;
							 
							  if(empty($established))
							  {
							  	$completedd='20%';
							  }
							  elseif(!empty($established) && empty($category))
							  {
							  	$completedd='40%';
							  }
							  elseif(!empty($established) && !empty($category) && empty($state))
							  {
							  	$completedd='60%';
							  }
							   elseif(!empty($established) && !empty($category) && !empty($state)  && empty($row->recruiter_logo))
							  {
							  	$completedd='80%';
							  }
							  elseif(!empty($established) && !empty($category) && !empty($state) && !empty($row->recruiter_logo))
							  {
							  	$completedd='100%';
							  }
							 

							   //profile views
							if ($row->recruiter_profile_viewed==0) {
							$profileViews='No Profile View';
							}
							elseif ($row->recruiter_profile_viewed<=1) {
							 $profileViews=$row->recruiter_profile_viewed.' Profile view';
							}
							elseif ($row->recruiter_profile_viewed>1) {
								$profileViews=$row->recruiter_profile_viewed.' Profile views';
							}

							//member since

							if (empty($row->recruiter_member_since)) {
							$membersince='Joining date not available';
							}
							elseif (!empty($row->recruiter_member_since)) {
							 $membersince=$row->recruiter_member_since;
							}
							
						  
                $signinid=$row->recruiter_id;
            $signindate=$this->adminmodel->signinresultRecruiter($signinid);
            if(empty($signindate))
            {
              $signintime='Last signin not found';
            }
            else
            {
              $signintime='';
              foreach ($signindate as $signvalue) {
                $signintime.=$signvalue['time'];
              }
            }

              $lastsentt=$this->adminmodel->lastmailtimerecruiter($uid);
            $rowsrecruiter=$lastsentt['rows'];
            $lastsent1=$lastsentt['result'];
           
              if($rowsrecruiter==0) //|| $lastsent1==null || $lastsent1=='')
              {
                $maillsent1='No email sent';
              }
              elseif ($rowsrecruiter>=1) {
                $maillsent1='';
               foreach ($lastsent1 as $lastsentvalue1) {
                  
                  $maillsent1.=$lastsentvalue1['recruiterMailSent_time'];
                }
              }
              else
              {
                $maillsent1='no';
              }
              
        
			$output .= '<div class="row padding align-baseline" id="idd'.$row->recruiter_id.'"style="border:1px solid #f15f43;">
							<div class="col-md-12">
								<div class="col-md-5">
'.$row->recruiter_id.'==='.base64_decode(base64_decode($row->recruiter_company_name)).'
						</div>
						<div class="col-md-5">'.
						 $completedd.' Completed
						</div>
						<div class="col-md-2" title="last mail sent">'.$maillsent1.'</div>

            <div class="col-md-5">
 '.base64_decode(base64_decode($row->recruiter_email)).'
          
              </div>
              <div class="col-md-5">'. $submitjobs.'</div>
              <div class="col-md-2" title="Recruiter referral">'. $row->recruiter_referral.'</div>


              <div class="col-md-5">'.$membersince.'</div>

                <div class="col-md-5">'.$articlescount.'</div>
            
            <div class="col-md-2" title="Last signin">'.$signintime.'</div>

            <div class="col-md-5">'.$profileViews.'</div>
                <div class="col-md-5">'.$reportCount.'</div>
            <div class="col-md-2"></div>


            <div class="row">
            <div class="col-md-12 align-center">


             <a href="https://get-job.online/admin/search?email='.$row->recruiter_email.'&& client=recruiter"><button type="button" class="btn btn-primary">Visit Profile>></button></a>

            <button type="button" id="showConfirm'.$row->recruiter_id.'" onclick="showConfirm('.$row->recruiter_id.')" class="btn btn-danger">Delete Client>></button>
         </br></br><div class=" col-md-offset-4 col-md-4 alert alert-danger" style="display:none;" id="confirmbox'.$row->recruiter_id .'">
          Are you sure want delete this client.
          </br>
         
           <form  id="deleterecruiter'.$row->recruiter_id .'" style="margin-top: 1px;">
        <input type="hidden" name="id"  value="'.$row->recruiter_id.' ?>">
      <button type="button" onclick="deleteRecruiter('.$row->recruiter_id.')" class="btn btn-danger">Yes</button>
       <button type="button" class="btn btn-danger" onclick="hideconfirm('.$row->recruiter_id.')">No</button>
     </form>
    
     
          </div>
        </div>
            </div>
							</div></div>';				  
        
      
    }
    }
    echo $output;
  }


   function allrecruiter()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {

  //$aa=$this->adminmodel->fetchallrecruiter();
  $this->load->view('allrecruiters');
}
  else
{
  redirect (base_url().'admin');
}
}


 function allemployer()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {
  //$aa=$this->adminmodel->fetchallemployer();
  $this->load->view('allemployers');//,['data'=>$aa]);
}
  else
{
  redirect (base_url().'admin');
}
}


//scroll pagination
function fetch()
  {
    $outputt = '';
    //$this->load->model('scroll_pagination_model');
    $data = $this->adminmodel->fetch_data_scrolling($this->input->post('limit'), $this->input->post('start'));
    if($data->num_rows() > 0)
    {
      foreach($data->result() as $row)
      {

        $signinid=$row->employee_uid;
            $signindate=$this->adminmodel->signinresult($signinid);
           

        $uid=$row->employee_uid;
        $articles=$this->fetch->articlesCountEmployee($uid);
        $reportCountt=$this->fetch->reportsCountEmployee($uid);

        //reports count
                  if(empty($reportCountt))
                {
                  $reportCount='No report';
                }
                elseif (!empty($reportCountt)) {
                
                  if($reportCountt==1)
                  {
                    $reportCount=$reportCountt.' report';
                  }
                  elseif ($reportCountt>1) {
                    $reportCount=$reportCountt.' reports';
                  }
                }


                //articles count
                if(empty($articles))
                {
                  $articlescount='No article';
                }
                elseif (!empty($articles)) {
                
                  if($articles==1)
                  {
                    $articlescount=$articles.' article';
                  }
                  elseif ($articles>1) {
                    $articlescount=$articles.' articles';
                  }
                }


                $jobscount=$this->fetch->appliedjobCount($uid);
              if(empty($jobscount))
                {
                  $appliedjobs='No job applied';
                }
                elseif (!empty($jobscount)) {
                
                  if($jobscount==1)
                  {
                    $appliedjobs=$jobscount.' Job Applied';
                  }
                  elseif ($jobscount>1) {
                    $appliedjobs=$jobscount.' Jobs Applied';
                  }
                }

                $experienceData=$this->fetch->fetchemployeexperience($uid);
              $qualificationData=$this->fetch->fetchemployequalification($uid);
               $signindate=$this->adminmodel->signinresultEmployee($uid);
             
                $lastsent=$this->adminmodel->lastmailtimeemployee($uid);
              
               

              if(!empty($signindate))
              {
               $signintimeEmployee='';
             
              foreach ($signindate as $signvalue) {
                $signintimeEmployee.=$signvalue['time'];
              }
               }
               elseif (empty($signintime)) {
                 $signintimeEmployee='last signin not found';
               }
                //print_r($experienceData);
                //print_r($qualificationData);
              if(empty($row->employee_city))
              {
                $completed='12%';
              }
              elseif(!empty($row->employee_city) && empty($row->employee_phone))
              {
                $completed='24%';
              }
              elseif (!empty($row->employee_city) && !empty($row->employee_phone) && empty($qualificationData)) {
                
                $completed='36%';
              }
              elseif(!empty($row->employee_city) && !empty($row->employee_phone) && !empty($qualificationData) && empty($row->employee_category))
              {
                $completed='48%';
              }
              elseif (!empty($row->employee_city) && !empty($row->employee_phone) && !empty($qualificationData) && !empty($row->employee_category) && empty($experienceData))
               {
                $completed='60%';
                
              }
              elseif(!empty($row->employee_city) && !empty($row->employee_phone) && !empty($qualificationData) && !empty($row->employee_category) && !empty($experienceData) && empty($row->employee_resume))
              {
                $completed='72%';

              }
              elseif(!empty($row->employee_city) && !empty($row->employee_phone) && !empty($qualificationData) && !empty($row->employee_category) && !empty($experienceData) && empty($row->employee_resume) && empty($row->employee_profile_pic))
              {
                $completed='84%';

              }
              elseif(!empty($row->employee_city) && !empty($row->employee_phone) && !empty($qualificationData) && !empty($row->employee_category) && !empty($experienceData) && empty($row->employee_resume) && !empty($row->employee_profile_pic))
              {
                $completed='100%';
              }


              //profile views
              if ($row->employee_profile_viewed==0) {
              $profileViews='No Profile View';
              }
              elseif ($row->employee_profile_viewed<=1) {
               $profileViews=$row->employee_profile_viewed.' Profile view';
              }
              elseif ($row->employee_profile_viewed>1) {
                $profileViews=$row->employee_profile_viewed.' Profile views';
              }

              //member since

              if (empty($row->member_since)) {
              $membersince='Joining date not available';
              }
              elseif (!empty($row->member_since)) {
               $membersince=$row->member_since;
              }


              if(empty($lastsent))
              {
                $maillsent='no email sent';
              }
              elseif (!empty($lastsent)) {
                $maillsent='';
               foreach ($lastsent as $lastsentvalue) {
                  
                  $maillsent.=$lastsentvalue['mailSent_time'];
                }
              }
              
              
              if($row->employee_status != 1)
              {
        $outputt .= '
        <div class="post_data padding align-baseline"  id="idd'.$row->employee_uid.'" style="border:1px solid #f15f43;">
        <div class="row">

       <div class="col-md-5">'.$row->employee_uid.'</div>
          <div class="col-md-5">'. base64_decode(base64_decode($row->employee_name)).'</div>
          <div class="col-md-5">'.$completed.' Completed'.'</div>
           <div class="col-md-2" title ="Last mail sent at">'.$maillsent.'</div>
</div>
<div class="row">
            <div class="col-md-5">'. base64_decode(base64_decode($row->employee_email)).'</div>
          <div class="col-md-5" title="Number of jobs applied">'.$appliedjobs.'</div>
           <div class="col-md-2" title="Employee referral">'.$row->employee_referral.'</div>
        </div>

        <div class="row">
            <div class="col-md-5" title="Member since">'. $membersince.'</div>
          <div class="col-md-5" title="Number of articles">'.$articlescount.'</div>
               <div class="col-md-2" title="Last Signin">'.$signintimeEmployee.'</div>
        </div>
       <div class="row">
            <div class="col-md-5" title="Number of profile views">'.$profileViews.'</div>
          <div class="col-md-5" title="number of reports">'.$reportCount.'</div>
           <div class="col-md-2"></div>
        </div>
        <div class="row align-center">

        <a href="'.base_url().'admin/search?email='.$row->employee_email .'&& client=employee"><button type="button" class="btn btn-primary">Visit Profile>></button></a>
       
    
      <button type="button" id="showConfirm'.$row->employee_uid.'" onclick="showConfirm('.$row->employee_uid.')" class="btn btn-danger">Delete Client>></button>
         </br></br><div class=" col-md-offset-4 col-md-4 alert alert-danger" style="display:none;" id="confirmbox'.$row->employee_uid .'">
          Are you sure want delete this client.
          </br>
         
           <form  id="deleteEmployees'.$row->employee_uid .'" style="margin-top: 1px;">
        <input type="hidden" name="id"  value="'.$row->employee_uid.' ?>">
      <button type="button" onclick="deleteEmployee('.$row->employee_uid.')" class="btn btn-danger">Yes</button>
       <button type="button" class="btn btn-danger" onclick="hideconfirm('.$row->employee_uid.')">No</button>
     </form>
    
   
          
        
        </div>

      </div>


        </div>
        ';
      }

    }}

    echo $outputt;


  }



}
?>