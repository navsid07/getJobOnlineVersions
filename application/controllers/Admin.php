<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 
{

function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper('url');
        $this->load->model('adminmodel');
        $this->load->model('insert');
        $this->load->model('delete');
        $this->load->model('search');
        $this->load->model('fetch');
        $this->load->library('user_agent');
    }


public function login()
{
  $username=$this->input->post('username');
  $password=$this->input->post('password');
 // if(!empty($_POST['g-recaptcha-response']))
 //{
  $result=$this->adminmodel->login($username,$password);
  if($result==1)
  {
    $this->session->set_userdata('admin',$result);
    redirect (base_url().'admin/adminpanel');
  }
  else
  {
    echo 'error';
  }

/*}
else
{
  $this->session->set_flashdata('captcha','Error! Captcha code does not match.');
  $this->session->set_flashdata('captcha_class','captcha_class');
  redirect(base_url().'admin');
}*/

}


//scroll pagination
function fetch()
  {
    $output = '';
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
                $lastsent=$this->fetch->lastmailtimeemployee($uid);
                $maillsent='';
                foreach ($lastsent as $lastsentvalue) {
                  
                  $maillsent.=$lastsentvalue['mailSent_time'];
                }
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

              
        $output .= '
        <div class="post_data padding align-baseline"  id="idd'.$row->employee_uid.'" style="border:1px solid #f15f43;">
        <div class="row">
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
               <div class="col-md-2" title="Number of articles">Last signin</div>
        </div>
       <div class="row">
            <div class="col-md-5" title="Number of profile views">'.$profileViews.'</div>
          <div class="col-md-5" title="number of reports">'.$reportCount.'</div>
           <div class="col-md-2"></div>
        </div>
        <div class="row align-center">

        <a href="'.base_url().'admin/search?email='.$row->employee_email .'&& client=employee"><button type="button" class="btn btn-primary">Visit Profile>></button></a>
      <form id="deleteEmployees'.$row->employee_uid .'" style="margin-top: 1px;">
        <input type="hidden" name="id"  value="'.$row->employee_uid.' ?>">
      <button type="button" onclick="deleteEmployee('.$row->employee_uid.')" class="btn btn-danger">Delete Client>></button></form></div>
        </div>
        ';
   
    }}

    echo $output;


  }


 
  public function loadScroll()
  {
    $this->load->view('newscroll');
  }


public function search()
{

  if($this->input->post('email') && $this->input->post('client'))
  {
  $email=base64_encode(base64_encode($this->input->post('email')));
 $client=$this->input->post('client');
}
elseif ($this->input->get('email') && $this->input->get('client')) {
   $email=$this->input->get('email');
 $client=$this->input->get('client');
}

   if($client=='employee')
   {
  $dataEmployee=$this->search->searchadmin($email);
 	$uid=$this->search->searchadminuid($email);
	$appliedJobs=$this->fetch->adminAppliedJobs($uid);
  $employeeQualification=$this->fetch->fetchemployequalification($uid);
  $employeeExperience=$this->fetch->fetchemployeexperience($uid);
  $sumexperience=$this->fetch->experienceSum($uid);
  $eid=$uid;
  $totalreports=$this->adminmodel->totalEmployeeReports($uid);
  $articleReportTotal=$this->adminmodel->totalEmployeeArticleReport($uid);
  $referralcount=$this->fetch->YearlyReferralFetchEmployee($eid);
  $jobtotalreports=$this->adminmodel->totalReportsJob($uid);
   $employeeArticles=$this->adminmodel->fetchArticlesEmployee($uid);
   $yearlyreferral=$this->adminmodel->yearlyReferralEmployee($uid);
  // print_r($yearlyreferral);

  $jobscount=$this->adminmodel->submittedjobsCount();
  //print_r($jobtotalreports);
  $totalresult=$jobtotalreports['result'];
  $totalnum=$jobtotalreports['num'];
  $this->load->view('adminSearchResultEmployee',['employeearticles'=>$employeeArticles,'articleReportTotal'=>$articleReportTotal,'jobtotalreports'=>$totalresult,'appliedjobs'=>$totalnum,'totalreports'=>$totalreports,'appliedJobs'=>$appliedJobs,'data'=>$dataEmployee,'employeeExperience'=>$employeeExperience,'employeeQualification'=>$employeeQualification,'sum'=>$sumexperience,'jobscount'=>$jobscount,'yearlyreferral'=>$yearlyreferral]);

}
elseif ($client=='recruiter') {

   
  $dataRecruiter=$this->search->searchadminRecruiter($email);
  $uid=$this->search->searchadminRecruiterUid($email);
  $rid=$uid;
  $articleReportTotal=$this->adminmodel->totalRecruiterArticleReport($uid);
  $recruiterReport=$this->adminmodel->reportRecruiter($rid);
  $referralcount=$this->fetch->YearlyReferralFetchRecruiter($rid);
  $yearlyreferral=$this->adminmodel->yearlyReferralRecruiter($uid);
  $this->load->view('adminSearchResultRecruiter',['report'=>$recruiterReport,'referralCount'=>$referralcount,'data'=>$dataRecruiter,'articleReportTotal'=>$articleReportTotal,'yearlyreferral'=>$yearlyreferral]);
}
}

public function articlereport()
{
  $id=$_GET['id'];
  $aid= $_GET['aid'];
  $client=$_GET['client'];
  $totalreports=$this->adminmodel->totalReportArticle($aid);
  $singlereport=$this->adminmodel->SingleReportRecruiterArticle($id);
  $articleresult=$this->adminmodel->singleArticlesRecruiter($aid);
  $article=$articleresult['result'];
  $this->load->view('SingleArticleAdminReports',['article'=>$article,'singlereport'=>$singlereport,'totalreports'=>$totalreports]);
}

public function searchClient()
{
  
  $email=base64_encode(base64_encode($this->input->post('email')));
 $client=$this->input->post('client');


   if($client=='employee')
   {
$dataEmployee=$this->search->searchadmin($email);
    if(empty($dataEmployee))
  {
    $datarec=$this->search->searchadminRecruiter($email);
    if(!empty($datarec))
    {
      ?>
   <div class="alert alert-danger">You are using recruiters email.</div>
      <?php
    }
    elseif (empty($datarec)) {
      ?>
       <div class="alert alert-danger">you are using wrong email or password</div>
       <?php
    }
  }
  else
  {
  
  $uid=$this->search->searchadminuid($email);
  $employeeQualification=$this->fetch->fetchemployequalification($uid);
  $employeeExperience=$this->fetch->fetchemployeexperience($uid);
  $sumexperience=$this->fetch->experienceSum($uid);
 $this->load->view('singleEmployerAdmin',['data'=>$dataEmployee,'employeeExperience'=>$employeeExperience,'employeeQualification'=>$employeeQualification,'sum'=>$sumexperience]);
}
}
elseif ($client=='recruiter') {
  $dataRecruiter=$this->search->searchadminRecruiter($email);
  if(empty($dataRecruiter))
  {
    $dataEmployee=$this->search->searchadmin($email);
    if(empty($dataEmployee))
    {
      ?>
       <div class="alert alert-danger">you are using wrong email</div>
      <?php
    }
    elseif (!empty($dataEmployee)) {
      ?>

       <div class="alert alert-danger">you are using employee email</div>
       <?php
    }
  }
 $this->load->view('singleRecruiterAdmin',['data'=>$dataRecruiter]);
}


}

public function logout()
{
  $this->session->unset_userdata('admin');
  redirect(base_url().'admin');
}

public function deleteemployee()
{
  $id=$this->input->post('id');
  $this->adminmodel->deleteEmployeeAdmin($id);
  
    
  
  $this->adminmodel->deleteArticlesEmployee($id);
 
  //echo 'deleted';
  //$this->load->view('admindeleteemployee');
 // $this->session->unset_userdata('admin');
 // redirect(base_url().'admin');
}

public function deleterecruiter()
{
  $id=$this->input->post('id');
  $this->adminmodel->deleteRecruiterAdmin($id);
 // echo 'deleted';
  //$this->load->view('admindeleteemployee');
 // $this->session->unset_userdata('admin');
 // redirect(base_url().'admin');
}

public function deleteemployeequery()
{
   $email11=$this->input->post('email');
   $email=base64_encode(base64_encode($email11));
   
   $id=$this->adminmodel->fetchempuid($email);


   $delete1=$this->delete->employeePayment($id);
   $delete2=$this->delete->employeeRating($id);
   $delete3=$this->delete->employeeRcandidate($id);
   $delete4=$this->delete->employeeRecRrating($id);
   $delete5=$this->delete->employeeSrecruiter($id);
   $delete6=$this->delete->employeeShortlist($id);
   $delete7=$this->delete->employeeShortlisted($id);
   $delete=$this->delete->adminemployee($email);
   if(!$delete)
   {
    echo 'error';
   }

   else
   {
    echo 'success';
   }
 
}

public function deleterecruiterquery()
{
   $email11=$this->input->post('email');
   
   $email=base64_encode(base64_encode($email11));
   $rid=$this->adminmodel->fetchrecuid($email);
   $delete=$this->delete->adminrecruiter($email);
   $delete=$this->delete->recruitershortlist($rid);
   $delete=$this->delete->recruiterapplyjob($rid);
   $delete=$this->delete->recruiterrecruitcandidate($rid);
   $delete=$this->delete->recruiterrating($rid);
   $delete=$this->delete->savedrecruiter($rid);
   $delete=$this->delete->recruitershortlistt($rid);
   if(!$delete)
   {
    echo 'error';
   }
   else
   {
    echo 'success';
   }
 
}


public function verifiedrecruiterr()
{
  $data=$this->adminmodel->verifiedrecruitermodel();

  $this->load->view('verifiedrecruiter',['data'=>$data]);
}

public function verifiedemployeee()
{
  $data=$this->adminmodel->verifiedemployeemodel();

  $this->load->view('verifiedemployee',['data'=>$data]);
}

public function index()
{
  $session=$this->session->userdata('admin');
 
  if(!empty($session))
  {
  $this->load->view('adminpanel');
}
else
{
  $this->load->view('admin');
}
	
}
public function adminpanel()
{
  $session=$this->session->userdata('admin');
 
  if(!empty($session))
  {
  $this->load->view('adminpanel');
}
else
{
  redirect (base_url().'admin');
}
}

public function adduserview()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {
  $aa=$this->adminmodel->fetchallemployer();
  $this->load->view('adduserAdmin',['data'=>$aa]);
}
  else
{
  redirect (base_url().'admin');
}
}

public function adduser()
{
 $name= $this->input->post('name');
  $contact=$this->input->post('contact');
  $category=$this->input->post('category');

  $array=array('name'=>$name,'contact'=>$contact,'category'=>$category);

  if($this->adminmodel->insertData($array))
  {
    echo 'success';
  }
}

public function testt()
{
 $aa=$this->input->post('a');
 print_r($aa);
 foreach ($aa as $value) {
   echo $value.',';
 }
}


public function allemployer()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {
  $aa=$this->adminmodel->fetchallemployer();
  count($aa);//$this->load->view('allemployers',['data'=>$aa]);
}
  else
{
  redirect (base_url().'admin');
}
}

public function checkBoxmailAllemployee()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {
  $aa=$this->adminmodel->fetchallemployer();
  $this->load->view('adminCheckboxEmployee',['data'=>$aa]);
}
  else
{
  redirect (base_url().'admin');
}
}


public function showresume()
{
  $resume=$_GET['resume'];
  $this->load->view('showresume', array('resume' =>$resume ));
}

public function fetchemployer()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {
  $uid=$this->uri->segment(3);
  $aa=$this->adminmodel->singleemployer($uid);
  $employee_experience=$this->fetch->fetchemployeexperience($uid);
  //print_r($aa);


  $this->load->view('singleemployer',['data'=>$aa,'employeeExperience'=>$employee_experience]);
}
  else
{
  redirect (base_url().'admin');
}
}


/*function allrecruiter()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {

  $aa=$this->adminmodel->fetchallrecruiter();
  $this->load->view('allrecruiters',['data'=>$aa]);
}
  else
{
  redirect (base_url().'admin');
}
}*/

public function checkBoxmailAllrecruiter()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {

  $aa=$this->adminmodel->fetchallrecruiter();
  $this->load->view('adminCheckboxRecruiter',['data'=>$aa]);
}
  else
{
  redirect (base_url().'admin');
}
}



public function fetchrecruiter()
{
  $session=$this->session->userdata('admin');
  if(!empty($session))
  {
  $uid=$this->uri->segment(3);
 $aa=$this->adminmodel->singlerercuiter($uid); 
 $jobs=$this->adminmodel->recruiterjobs($uid); 

 $this->load->view('singlerecruiter',['data'=>$aa,'jobs'=>$jobs]);
}
  else
{
  redirect (base_url().'admin');
}

}

public function singleArticle()
{
  $aid=$_GET['aid'];
  $client=$_GET['client'];
  if(!empty($_GET['reportid']))
  {
    $reportid=$_GET['reportid'];
     $singlereport=$this->adminmodel->fetchreportArticlesEmployee($reportid);
  }
  else
  {
    $singlereport='';
  }
  
  if($client=='employee')
  {
   
  $articleresult=$this->adminmodel->singleArticlesEmployee($aid);
  $report=$this->adminmodel->articleReport($aid);
  $article=$articleresult['result'];
  $uid=$articleresult['uid'];
  $submitter=$this->adminmodel->singleemployer($uid);
  $this->load->view('SingleArticleAdmin',['submitter'=>$submitter,'article'=>$article,'report'=>$report,'singlereport'=>$singlereport]);
}
elseif ($client=='recruiter') {

  $articleresult=$this->adminmodel->singleArticlesRecruiter($aid);
  $report=$this->adminmodel->articleReportRecruiter($aid);
  $articleid=$articleresult['uid'];
  $article=$articleresult['result'];
  $recruiter=$this->adminmodel->fetchrecruiter($articleid);
 
  $this->load->view('SingleArticleAdminRecruiter',['submitted'=>$recruiter,'article'=>$article,'report'=>$report]);
}
}

public function singleReport()
{
  $id=$_GET['id'];
  $client=$_GET['client'];
  $uid=$_GET['reporter'];
  $user=$_GET['user'];
  if($client=='employee')
  {
  
  $report=$this->adminmodel->reportEmployeeFetch($id);
  $reporter=$this->adminmodel->singlerercuiter($uid);

   $allreports=$this->adminmodel->fetchallreportsEmployee($user,$id);
  
  $this->load->view('singleReportAdminEmployee',['report'=>$report,'reporter'=>$reporter,'morereports'=>$allreports]);
}
elseif ($client=='recruiter') {
  $report=$this->adminmodel->reportRecruiterFetch($id);
   $reporter=$this->adminmodel->singleemployer($uid);

  $allreports=$this->adminmodel->fetchallreportsRecruiter($user,$id);
  
  $this->load->view('SingleReportAdmin',['report'=>$report,'reporter'=>$reporter,'morereports'=>$allreports]);
}
}

public function singlejob()
{
   $urii=$_GET['jid'];
  
   $activity=$_GET['activity'];
   if($activity=='reportjob')

{
   $userid=$_GET['userid'];
  $id=$_GET['id'];
   $single=$this->adminmodel->fetchSingleReport($id,$userid);
}   
  elseif ($activity=='appliedjobs') {
   $single='';
  }
   
  $submitter=$this->adminmodel->jobSubmitBy($urii);
  $data=$this->fetch->singlejob($urii);
  $reportjob=$this->adminmodel->adminReportJobs($urii);
  $applyjob=$this->adminmodel->adminAppliedJobs($urii);
  $allreports=$this->adminmodel->allreportsforJob($urii);
  
  //$data=$this->adminmodel->fetchjob($jid);
  $this->load->view('adminjobdescription',['singlereport'=>$single,'data'=>$data,'reports'=>$reportjob,'applyjob'=>$applyjob,'allreports'=>$allreports,'jobsubmitter'=>$submitter]);
}


public function singlereportJob()
{
  $urii=$_GET['rid'];
  $jid=$_GET['jid'];
  $uid=$_GET['uid'];
  $id=$_GET['id'];
  $single=$this->adminmodel->fetchSingleReportanother($id);
  $reportDetail=$this->adminmodel->fetchsinglejob($urii);
  $morereports=$this->adminmodel->fetchMorereports($jid,$uid);
  $employer=$this->adminmodel->singleemployer($uid);
  //$data=$this->adminmodel->fetchjob($jid);
  $this->load->view('adminreportdescription',['reportdetail'=>$reportDetail,'reports'=>$morereports,'employer'=>$employer]);
}



public function resendsuggestionemployee()
{
  $suggestion=$this->input->post('suggestion');
   $tto=$this->input->post('email');
   $to=base64_decode(base64_decode($tto));
 
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Account Suggestion. Get job online');



$body  = 

'<i> 
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <!-- NAME: EDUCATE -->
    <!--[if gte mso 15]>
    <xml>
      <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>*|MC:SUBJECT|*</title>
        
    <style type="text/css">
    p{
      margin:10px 0;
      padding:0;
    }
    table{
      border-collapse:collapse;
    }
    h1,h2,h3,h4,h5,h6{
      display:block;
      margin:0;
      padding:0;
    }
    img,a img{
      border:0;
      height:auto;
      outline:none;
      text-decoration:none;
    }
    body,#bodyTable,#bodyCell{
      height:100%;
      margin:0;
      padding:0;
      width:100%;
    }
    .mcnPreviewText{
      display:none !important;
    }
    #outlook a{
      padding:0;
    }
    img{
      -ms-interpolation-mode:bicubic;
    }
    table{
      mso-table-lspace:0pt;
      mso-table-rspace:0pt;
    }
    .ReadMsgBody{
      width:100%;
    }
    .ExternalClass{
      width:100%;
    }
    p,a,li,td,blockquote{
      mso-line-height-rule:exactly;
    }
    a[href^=tel],a[href^=sms]{
      color:inherit;
      cursor:default;
      text-decoration:none;
    }
    p,a,li,td,body,table,blockquote{
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%;
    }
    .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
      line-height:100%;
    }
    a[x-apple-data-detectors]{
      color:inherit !important;
      text-decoration:none !important;
      font-size:inherit !important;
      font-family:inherit !important;
      font-weight:inherit !important;
      line-height:inherit !important;
    }
    .templateContainer{
      max-width:600px !important;
    }
    a.mcnButton{
      display:block;
    }
    .mcnImage,.mcnRetinaImage{
      vertical-align:bottom;
    }
    .mcnTextContent{
      word-break:break-word;
    }
    .mcnTextContent img{
      height:auto !important;
    }
    .mcnDividerBlock{
      table-layout:fixed !important;
    }
  /*
  @tab Page
  @section Heading 1
  @style heading 1
  */
    h1{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:40px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 2
  @style heading 2
  */
    h2{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:28px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 3
  @style heading 3
  */
    h3{
      /*@editable*/color:#444444;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:22px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 4
  @style heading 4
  */
    h4{
      /*@editable*/color:#999999;
      /*@editable*/font-family:Georgia;
      /*@editable*/font-size:20px;
      /*@editable*/font-style:italic;
      /*@editable*/font-weight:normal;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Container Style
  */
    #templateHeader{
      /*@editable*/background-color:#F7F7F7;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:54px;
      /*@editable*/padding-bottom:54px;
    }
  /*
  @tab Header
  @section Header Interior Style
  */
    .headerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Header
  @section Header Text
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Link
  */
    .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Body
  @section Body Container Style
  */
    #templateBody{
      /*@editable*/background-color:#FFFFFF;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:27px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Body
  @section Body Interior Style
  */
    .bodyContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Body
  @section Body Text
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Body
  @section Body Link
  */
    .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Footer
  @section Footer Style
  */
    #templateFooter{
      /*@editable*/background-color:#333333;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:45px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Footer
  @section Footer Interior Style
  */
    .footerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Footer
  @section Footer Text
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:12px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:center;
    }
  /*
  @tab Footer
  @section Footer Link
  */
    .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  @media only screen and (min-width:768px){
    .templateContainer{
      width:600px !important;
    }

} @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

} @media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnRetinaImage{
      max-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImage{
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
      max-width:100% !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnBoxedTextContentContainer{
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupContent{
      padding:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
      padding-top:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
      padding-top:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardBottomImageContent{
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockInner{
      padding-top:0 !important;
      padding-bottom:0 !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockOuter{
      padding-top:9px !important;
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnTextContent,.mcnBoxedTextContentColumn{
      padding-right:18px !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
      padding-right:18px !important;
      padding-bottom:0 !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcpreview-image-uploader{
      display:none !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1{
      /*@editable*/font-size:30px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2{
      /*@editable*/font-size:26px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3{
      /*@editable*/font-size:20px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4{
      /*@editable*/font-size:18px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Footer Text
  @tip Make the footer content text larger in size for better readability on small screens.
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

}</style></head>
    <body>
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->
    <!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center" valign="top" id="templateHeader" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
              <tr>
                <td align="center" valign="top" id="templateBody" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
                        
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:32px"><strong>Suggestion</strong></span>
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span>'.$suggestion.'</span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #00ADD8;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                <a class="mcnButton " title="Update Now" href="http://www.get-job.online/suggestion/suggestionemployee?email='.$to.'" target="_self" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Update Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                            <tr>
                <td align="center" valign="top" id="templateFooter" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.facebook.com/Get-job-online-715235611999280" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.twitter.com/get-job-online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.instagram.com/getjobonline" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                    <!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <em>Copyright © 2018 , All rights reserved.</em><br>
Designed and Managed by The Revew<br>
<br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>


</i>';


            $this->email->message($body);
           if($this->email->send())
           {
          $this->adminmodel->updatesuggestion($suggestion,$tto);
           /* $data=array('email'=>$tto,'suggestion'=>$suggestion,'date'=>$time);
            $this->insert->employeesuggestion($data);*/
            echo 'Suggestion sent';
            header('refresh:2; url=http://www.get-job.online/admin');
           }
           else
           {
            echo 'error';
            header('refresh:2; url=http://www.get-job.online/admin');
           }
}

public function suggestemployer()
{
  $suggestion=$this->input->post('suggestion');
   $tto=$this->input->post('email');
   $to=base64_decode(base64_decode($tto));
 
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Account Suggestion. Get job online');



$body  = 

'<i> 
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <!-- NAME: EDUCATE -->
    <!--[if gte mso 15]>
    <xml>
      <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>*|MC:SUBJECT|*</title>
        
    <style type="text/css">
    p{
      margin:10px 0;
      padding:0;
    }
    table{
      border-collapse:collapse;
    }
    h1,h2,h3,h4,h5,h6{
      display:block;
      margin:0;
      padding:0;
    }
    img,a img{
      border:0;
      height:auto;
      outline:none;
      text-decoration:none;
    }
    body,#bodyTable,#bodyCell{
      height:100%;
      margin:0;
      padding:0;
      width:100%;
    }
    .mcnPreviewText{
      display:none !important;
    }
    #outlook a{
      padding:0;
    }
    img{
      -ms-interpolation-mode:bicubic;
    }
    table{
      mso-table-lspace:0pt;
      mso-table-rspace:0pt;
    }
    .ReadMsgBody{
      width:100%;
    }
    .ExternalClass{
      width:100%;
    }
    p,a,li,td,blockquote{
      mso-line-height-rule:exactly;
    }
    a[href^=tel],a[href^=sms]{
      color:inherit;
      cursor:default;
      text-decoration:none;
    }
    p,a,li,td,body,table,blockquote{
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%;
    }
    .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
      line-height:100%;
    }
    a[x-apple-data-detectors]{
      color:inherit !important;
      text-decoration:none !important;
      font-size:inherit !important;
      font-family:inherit !important;
      font-weight:inherit !important;
      line-height:inherit !important;
    }
    .templateContainer{
      max-width:600px !important;
    }
    a.mcnButton{
      display:block;
    }
    .mcnImage,.mcnRetinaImage{
      vertical-align:bottom;
    }
    .mcnTextContent{
      word-break:break-word;
    }
    .mcnTextContent img{
      height:auto !important;
    }
    .mcnDividerBlock{
      table-layout:fixed !important;
    }
  /*
  @tab Page
  @section Heading 1
  @style heading 1
  */
    h1{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:40px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 2
  @style heading 2
  */
    h2{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:28px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 3
  @style heading 3
  */
    h3{
      /*@editable*/color:#444444;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:22px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 4
  @style heading 4
  */
    h4{
      /*@editable*/color:#999999;
      /*@editable*/font-family:Georgia;
      /*@editable*/font-size:20px;
      /*@editable*/font-style:italic;
      /*@editable*/font-weight:normal;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Container Style
  */
    #templateHeader{
      /*@editable*/background-color:#F7F7F7;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:54px;
      /*@editable*/padding-bottom:54px;
    }
  /*
  @tab Header
  @section Header Interior Style
  */
    .headerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Header
  @section Header Text
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Link
  */
    .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Body
  @section Body Container Style
  */
    #templateBody{
      /*@editable*/background-color:#FFFFFF;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:27px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Body
  @section Body Interior Style
  */
    .bodyContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Body
  @section Body Text
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Body
  @section Body Link
  */
    .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Footer
  @section Footer Style
  */
    #templateFooter{
      /*@editable*/background-color:#333333;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:45px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Footer
  @section Footer Interior Style
  */
    .footerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Footer
  @section Footer Text
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:12px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:center;
    }
  /*
  @tab Footer
  @section Footer Link
  */
    .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  @media only screen and (min-width:768px){
    .templateContainer{
      width:600px !important;
    }

} @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

} @media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnRetinaImage{
      max-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImage{
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
      max-width:100% !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnBoxedTextContentContainer{
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupContent{
      padding:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
      padding-top:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
      padding-top:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardBottomImageContent{
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockInner{
      padding-top:0 !important;
      padding-bottom:0 !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockOuter{
      padding-top:9px !important;
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnTextContent,.mcnBoxedTextContentColumn{
      padding-right:18px !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
      padding-right:18px !important;
      padding-bottom:0 !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcpreview-image-uploader{
      display:none !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1{
      /*@editable*/font-size:30px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2{
      /*@editable*/font-size:26px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3{
      /*@editable*/font-size:20px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4{
      /*@editable*/font-size:18px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Footer Text
  @tip Make the footer content text larger in size for better readability on small screens.
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

}</style></head>
    <body>
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->
    <!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center" valign="top" id="templateHeader" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
              <tr>
                <td align="center" valign="top" id="templateBody" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
                        
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:32px"><strong>Suggestion</strong></span>
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span>'.$suggestion.'</span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #00ADD8;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                <a class="mcnButton " title="Update Now" href="http://www.get-job.online/suggestion/suggestionemployee?email='.$tto.'" target="_self" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Update Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                            <tr>
                <td align="center" valign="top" id="templateFooter" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.facebook.com/Get-job-online-715235611999280" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.twitter.com/get-job-online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.instagram.com/getjobonline" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                    <!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <em>Copyright © 2018 , All rights reserved.</em><br>
Designed and Managed by The Revew<br>
<br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>


</i>';


            $this->email->message($body);
           if($this->email->send())
           {
           $this->adminmodel->updatesuggestion($suggestion,$tto);
            
            echo 'Suggestion sent';
            header('refresh:2; url=http://www.get-job.online/admin');
           }
           else
           {
            echo 'error';
            header('refresh:2; url=http://www.get-job.online/admin');
           }
}


public function suggestrecruiter()
{
  $to=base64_decode(base64_decode($this->input->post('email')));
  $to_encode=$this->input->post('email');
  $suggestion=$this->input->post('suggestion');
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Email Verification. Get job online');



$body  = 

'<i> 
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <!-- NAME: EDUCATE -->
    <!--[if gte mso 15]>
    <xml>
      <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>*|MC:SUBJECT|*</title>
        
    <style type="text/css">
    p{
      margin:10px 0;
      padding:0;
    }
    table{
      border-collapse:collapse;
    }
    h1,h2,h3,h4,h5,h6{
      display:block;
      margin:0;
      padding:0;
    }
    img,a img{
      border:0;
      height:auto;
      outline:none;
      text-decoration:none;
    }
    body,#bodyTable,#bodyCell{
      height:100%;
      margin:0;
      padding:0;
      width:100%;
    }
    .mcnPreviewText{
      display:none !important;
    }
    #outlook a{
      padding:0;
    }
    img{
      -ms-interpolation-mode:bicubic;
    }
    table{
      mso-table-lspace:0pt;
      mso-table-rspace:0pt;
    }
    .ReadMsgBody{
      width:100%;
    }
    .ExternalClass{
      width:100%;
    }
    p,a,li,td,blockquote{
      mso-line-height-rule:exactly;
    }
    a[href^=tel],a[href^=sms]{
      color:inherit;
      cursor:default;
      text-decoration:none;
    }
    p,a,li,td,body,table,blockquote{
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%;
    }
    .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
      line-height:100%;
    }
    a[x-apple-data-detectors]{
      color:inherit !important;
      text-decoration:none !important;
      font-size:inherit !important;
      font-family:inherit !important;
      font-weight:inherit !important;
      line-height:inherit !important;
    }
    .templateContainer{
      max-width:600px !important;
    }
    a.mcnButton{
      display:block;
    }
    .mcnImage,.mcnRetinaImage{
      vertical-align:bottom;
    }
    .mcnTextContent{
      word-break:break-word;
    }
    .mcnTextContent img{
      height:auto !important;
    }
    .mcnDividerBlock{
      table-layout:fixed !important;
    }
  /*
  @tab Page
  @section Heading 1
  @style heading 1
  */
    h1{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:40px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 2
  @style heading 2
  */
    h2{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:28px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 3
  @style heading 3
  */
    h3{
      /*@editable*/color:#444444;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:22px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 4
  @style heading 4
  */
    h4{
      /*@editable*/color:#999999;
      /*@editable*/font-family:Georgia;
      /*@editable*/font-size:20px;
      /*@editable*/font-style:italic;
      /*@editable*/font-weight:normal;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Container Style
  */
    #templateHeader{
      /*@editable*/background-color:#F7F7F7;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:54px;
      /*@editable*/padding-bottom:54px;
    }
  /*
  @tab Header
  @section Header Interior Style
  */
    .headerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Header
  @section Header Text
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Link
  */
    .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Body
  @section Body Container Style
  */
    #templateBody{
      /*@editable*/background-color:#FFFFFF;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:27px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Body
  @section Body Interior Style
  */
    .bodyContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Body
  @section Body Text
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Body
  @section Body Link
  */
    .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Footer
  @section Footer Style
  */
    #templateFooter{
      /*@editable*/background-color:#333333;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:45px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Footer
  @section Footer Interior Style
  */
    .footerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Footer
  @section Footer Text
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:12px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:center;
    }
  /*
  @tab Footer
  @section Footer Link
  */
    .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  @media only screen and (min-width:768px){
    .templateContainer{
      width:600px !important;
    }

} @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

} @media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnRetinaImage{
      max-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImage{
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
      max-width:100% !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnBoxedTextContentContainer{
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupContent{
      padding:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
      padding-top:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
      padding-top:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardBottomImageContent{
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockInner{
      padding-top:0 !important;
      padding-bottom:0 !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockOuter{
      padding-top:9px !important;
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnTextContent,.mcnBoxedTextContentColumn{
      padding-right:18px !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
      padding-right:18px !important;
      padding-bottom:0 !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcpreview-image-uploader{
      display:none !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1{
      /*@editable*/font-size:30px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2{
      /*@editable*/font-size:26px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3{
      /*@editable*/font-size:20px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4{
      /*@editable*/font-size:18px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Footer Text
  @tip Make the footer content text larger in size for better readability on small screens.
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

}</style></head>
    <body>
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
    <!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center" valign="top" id="templateHeader" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
              <tr>
                <td align="center" valign="top" id="templateBody" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; text-align:center; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <h2>Suggestion</h2>

<p style="font-size:18px !important;">'. $suggestion .'</p>

                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #00ADD8;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                <a class="mcnButton " title="Update Now" href="http://www.get-job.online/suggestion/suggestionrecruiter?email='.$to_encode.'" target="_self" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Update Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                            <tr>
                <td align="center" valign="top" id="templateFooter" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.facebook.com/Get-job-online-715235611999280" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.twitter.com/get-job-online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.instagram.com/getjobonline" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                    <!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <em>Copyright © 2018 , All rights reserved.</em><br>
Designed and Managed by The Revew<br>
<br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>


</i>';


            $this->email->message($body);
           if($this->email->send())
           {
             $this->adminmodel->updatesuggestionrecruiter($suggestion,$to_encode);
            echo 'sent';
           }
           else
           {
            echo 'error';
           }
}



public function verifiedrecruiter()
{
  $to=base64_decode(base64_decode($_GET['email']));
  $tto=$_GET['email'];
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Email Verification. Get job online');

$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Get Job Online Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/welcome/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/welcome/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.get-job.online/" target="_blank"><img src="http://get-job.online/emailimage/get.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Congratulations!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get-job.online has been verified as legit.</br>You can now browse recruiters and find a suitable job.
          </p>
          <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p>
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>

</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            $email=$tto;
            $this->adminmodel->verifiedrecruiter($email);
            echo 'sent';
            header('refresh:2; url=http://www.get-job.online/admin/allrecruiter');
           }
           else
           {
            echo 'error';
           }
}


public function sendverifyemail()
{
  $to_encode=$_GET['email'];
  $this->adminmodel->fetchhash($to_encode);
 $to=base64_decode(base64_decode($_GET['email']));
   $hash=$this->adminmodel->fetchhash($to_encode);
  $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Email Verification. Get-job.online');



$body  =  '<i>
  <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <!-- NAME: FOLLOW UP -->
    <!--[if gte mso 15]>
    <xml>
      <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><b>Email Verification</b></title>
        
    <style type="text/css">
    p{
      margin:10px 0;
      padding:0;
    }
    table{
      border-collapse:collapse;
    }
    h1,h2,h3,h4,h5,h6{
      display:block;
      margin:0;
      padding:0;
    }
    img,a img{
      border:0;
      height:auto;
      outline:none;
      text-decoration:none;
    }
    body,#bodyTable,#bodyCell{
      height:100%;
      margin:0;
      padding:0;
      width:100%;
    }
    .mcnPreviewText{
      display:none !important;
    }
    #outlook a{
      padding:0;
    }
    img{
      -ms-interpolation-mode:bicubic;
    }
    table{
      mso-table-lspace:0pt;
      mso-table-rspace:0pt;
    }
    .ReadMsgBody{
      width:100%;
    }
    .ExternalClass{
      width:100%;
    }
    p,a,li,td,blockquote{
      mso-line-height-rule:exactly;
    }
    a[href^=tel],a[href^=sms]{
      color:inherit;
      cursor:default;
      text-decoration:none;
    }
    p,a,li,td,body,table,blockquote{
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%;
    }
    .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
      line-height:100%;
    }
    a[x-apple-data-detectors]{
      color:inherit !important;
      text-decoration:none !important;
      font-size:inherit !important;
      font-family:inherit !important;
      font-weight:inherit !important;
      line-height:inherit !important;
    }
    .templateContainer{
      max-width:600px !important;
    }
    a.mcnButton{
      display:block;
    }
    .mcnImage{
      vertical-align:bottom;
    }
    .mcnTextContent{
      word-break:break-word;
    }
    .mcnTextContent img{
      height:auto !important;
    }
    .mcnDividerBlock{
      table-layout:fixed !important;
    }
  /*
  @tab Page
  @section Heading 1
  @style heading 1
  */
    h1{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:40px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:center;
    }
  /*
  @tab Page
  @section Heading 2
  @style heading 2
  */
    h2{
      /*@editable*/color:#222222;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:34px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 3
  @style heading 3
  */
    h3{
      /*@editable*/color:#444444;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:22px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:150%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:center;
    }
  /*
  @tab Page
  @section Heading 4
  @style heading 4
  */
    h4{
      /*@editable*/color:#999999;
      /*@editable*/font-family:Georgia;
      /*@editable*/font-size:20px;
      /*@editable*/font-style:italic;
      /*@editable*/font-weight:normal;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Container Style
  */
    #templateHeader{
      /*@editable*/background-color:#F7F7F7;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:50% 50%;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:54px;
      /*@editable*/padding-bottom:54px;
    }
  /*
  @tab Header
  @section Header Interior Style
  */
    .headerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Header
  @section Header Text
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Link
  */
    .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Body
  @section Body Container Style
  */
    #templateBody{
      /*@editable*/background-color:#FFFFFF;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:42px;
      /*@editable*/padding-bottom:42px;
    }
  /*
  @tab Body
  @section Body Interior Style
  */
    .bodyContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Body
  @section Body Text
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/color:#808080;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Body
  @section Body Link
  */
    .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
      /*@editable*/color:#00ADD8;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Footer
  @section Footer Style
  */
    #templateFooter{
      /*@editable*/background-color:#333333;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:45px;
      /*@editable*/padding-bottom:63px;
    }
  /*
  @tab Footer
  @section Footer Interior Style
  */
    .footerContainer{
      /*@editable*/background-color:transparent;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Footer
  @section Footer Text
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:12px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:center;
    }
  /*
  @tab Footer
  @section Footer Link
  */
    .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
      /*@editable*/color:#FFFFFF;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  @media only screen and (min-width:768px){
    .templateContainer{
      width:600px !important;
    }

} @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

} @media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImage{
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
      max-width:100% !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnBoxedTextContentContainer{
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupContent{
      padding:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
      padding-top:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
      padding-top:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardBottomImageContent{
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockInner{
      padding-top:0 !important;
      padding-bottom:0 !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockOuter{
      padding-top:9px !important;
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnTextContent,.mcnBoxedTextContentColumn{
      padding-right:18px !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
      padding-right:18px !important;
      padding-bottom:0 !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcpreview-image-uploader{
      display:none !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1{
      /*@editable*/font-size:30px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2{
      /*@editable*/font-size:26px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3{
      /*@editable*/font-size:20px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4{
      /*@editable*/font-size:18px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Footer Text
  @tip Make the footer content text larger in size for better readability on small screens.
  */
    .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

}</style></head>
    <body>
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span><!--<![endif]-->
    <!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center" valign="top" id="templateHeader" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/d25e44c4-558c-48c3-b20f-7d8557054722.png" width="172" style="max-width:172px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
              <tr>
                <td align="center" valign="top" id="templateBody" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <h1>Dear Recruiter</h1>

                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://gallery.mailchimp.com/f454099160982fb4dadc863e8/images/7beaa690-2230-4546-977e-ebe7e28ae488.jpg" width="564" style="max-width:852px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
                    <tbody><tr>
                        
                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
                        
                            <p><strong>We are so pleased to have you on our team.</strong>&nbsp;As you are now a part of our family you can now search &amp; pinpoint the talent you are looking for. There are lots &amp; lots of aspirants waiting for the right opportunity to work in the field they desire. We offer employees with no additional cost but just the standard rates for the employee to give a call for the interview.</p>

<p><strong>In order for you get going, </strong>We require verifying your email address associated with our company so, that we would communicate with your seamlessly.<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Please click the link below to verify your account:</p>

                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #D3404E;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 16px; padding: 10px;">
                                <a class="mcnButton " title="Verify Now" href="http://get-job.online/recruiter/verify?to='.$to_encode.'&hash='.$hash.'" target="_self" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 18px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                            <tr>
                <td align="center" valign="top" id="templateFooter" data-template-container>
                  <!--[if (gte mso 9)|(IE)]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                  <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                                      <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <!--[if mso]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://www.facebook.com/Get-Job-Online-715235611999280/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://twitter.com/get_job_online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://www.instagram.com/getjobonline/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="http://www.get-job.online" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                        <!--[if mso]>
                                        <td align="center" valign="top">
                                        <![endif]-->
                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://plus.google.com/b/110929941140767668525/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-googleplus-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        
                                        <!--[if mso]>
                                        </td>
                                        <![endif]-->
                                    
                                    <!--[if mso]>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>
<!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <em>Copyright © 2017. All rights reserved. Designed and Managed by The Revew</em><br>
<br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                    </tr>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>

</i>';



            $this->email->message($body);
           if($this->email->send())
           {
            //echo 'send';
         echo $this->agent->referrer();
            //header('refresh:2;URL=https://get-job.online');
           }
           else
           {
            echo 'error';
           }
}
 

public function verifiedemployee()
{
  $to1=$_GET['email'];
  $to=base64_decode(base64_decode($to1));
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your profile verified || Get job online');



$body  = 
'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Get Job Online Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/welcome/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/welcome/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.get-job.online/" target="_blank"><img src="http://get-job.online/emailimage/get.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Congratulations!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get-job.online has been verified as legit.</br>You can now browse recruiters and find a suitable job.
          </p>
          <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p>
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/Get-job-online-715235611999280"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/get-job-online"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/110929941140767668525" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>

</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            $email=$to1;
            $this->adminmodel->verifiedemloyee($email);
            echo 'sent';
            header('refresh:2; url=https://get-job.online/admin/allemployer');
           }
           else
           {
            echo 'error';
           }
}


public function declineemployee()
{
  $to1=$_GET['email'];
 
  $to=base64_decode(base64_decode($to1));
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            $email=$to1;
            $this->adminmodel->declineemloyee($email);
            echo 'sent';
            header('refresh:2; url=http://www.get-job.online/admin/allemployer');
          
           }
           else
           {
            echo 'error';
           }
}

public function declinerecruiter()
{
  $to=base64_decode(base64_decode($_GET['email']));
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            $email=$_GET['email'];
             $this->adminmodel->declinerecruiter($email);
            echo 'sent';
           }
           else
           {
            echo 'error';
           }
}


//notification email recruiter admin
public function recruiterNotificationMail()
{
  $to_decode='jastgrewal@gmail.com';
  //$to=$_GET['email'];
 // $to_decode=base64_decode(base64_decode($to));
 // $uid=$this->adminmodel->recruiterUid($to);
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to_decode);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';
            $this->email->message($body);
           if($this->email->send())
           {
            
             //$time = round(microtime(true) * 1000);
           // $array=array('recruiterMailSent_time'=>$time,'recruiterMailSent_uid'=>$uid);
           
           // $this->adminmodel->lastmailsentRecruiter($array);
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}


//notification email employee admin
public function employeeNotificationMail()
{
  //$to='jastgrewal@gmail.com';
  $to=$_GET['email'];
  $to_decode=base64_decode(base64_decode($to));
  $uid=$this->adminmodel->employeeUid($to);
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to_decode);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {

             $time = round(microtime(true) * 1000);
            $array=array('mailSent_time'=>$time,'mailSent_uid'=>$uid);
           
            $this->adminmodel->lastmailsentEmployee($array);
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}

//invalid activity mail
public function employeeInvalidactivityMail()
{
  $to='jastgrewal@gmail.com';
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}

//low balance mail employee admin
public function employeeLowbalanceMail()
{
  $to='jastgrewal@gmail.com';
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}

//profile deactivation alert mail employee
public function employeeDeactivationMail()
{
  $to='jastgrewal@gmail.com';
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}

//spam article employee
public function employeeSpamarticleMail()
{
  $to='jastgrewal@gmail.com';
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}


//spam report employee
public function employeeSpamreportMail()
{
  $to='jastgrewal@gmail.com';
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}


//spam feedback
public function employeeSpamfeedbackMail()
{
  $to='jastgrewal@gmail.com';
  
   $config = Array(    

      'protocol' => 'sendmail',

      'smtp_host' => 'get-job.online',

      'smtp_port' => 25,

      'smtp_user' => 'noreply@get-job.online',

      'smtp_pass' => '774411',

      'smtp_timeout' => '4',

      'mailtype' => 'html',

      'charset' => 'iso-8859-1'

    );
           
             $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Your Registration Declined || Get job online');



$body  = 

'<i> 
<html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid #f15f43;
  color:#f15f43;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:#f15f43;
  color:white;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
  color:#4d4d4d;
}

li a {
    display: block;
    color: #4d4d4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body style="background-color:white;">
    <div class="row" style="background-color:white; color:#4d4d4d;">
      <div class="col-md-12" style="text-align:center;">
        <a href="http://www.get-job.online" target="_blank"><img src="http://www.get-job.online/logo/getjobbb.png"  alt="Logo" ></a>
      </div>
      <div class="row" style="text-align:center; margin-left:23%;">
    <ul>
  <li><a class="active" href="http://www.get-job.online"><font color="#4d4d4d">Home</font></a></li>
  <li><a href="http://www.get-job.online/about"><font color="#4d4d4d">About</font></a></li>
  <li><a href="http://www.get-job.online/contact"><font color="#4d4d4d">Contact Us</font></a></li>
  <li><a href="http://www.get-job.online/blog"><font color="#4d4d4d">Blog</font></a></li>
</ul>
</div>
    </div>
    

    <div class="row" style="text-align:center;">
      <div class="col-md-offset-4 col-md-4">
        <a href="http://www.matrimony.solutions/" target="_blank"><img src="http://matrimony.solutions/admin/rejected.jpg" width="70%" height="50%"/></a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12" style="margin-top:5%; text-align:center;">
          <h2 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:35px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0"></br>Sorry!</h2>
        </div>
    </div>
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Your info submitted on Get Job Online unfortunatly has been declined. Please Register again with some valid changes in order to get back into the game. 
          </p>

           <p style="color:#404040; text-align:center; font-size:15px;line-height:21px;font-weight:lighter;padding:0;margin:0">
          If you wish to be a member of our referral program & earn commission on the side you can become a proud Referral. 
          </p> 
          <p style="color:#404040; text-align:center; font-size:14px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Please click button below to visit Get Job Online.
          </p>

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="http://www.get-job.online" style="text-decoration:none;"><input type="submit" class="aa" value="Visit Now"></a>
      </div>
      
      
      <div class="row">
        <div class="col-md-12" style="text-align:center;">
        <p><b>Follow Us on:</b></p>
                          <a href="https://www.facebook.com/MatrimonySolutions-138532853178528/"  target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>
                                                   <a href="https://twitter.com/Matri_Solutions"  target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>
                                                    <a href="https://plus.google.com/103890344556311186986" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>
                                           
        </div>
        
      </div>
  </body>
  </html>
</i>';


            $this->email->message($body);
           if($this->email->send())
           {
            echo 'success';
           }
           else
           {
            echo 'failed';
           }
}

public function progressTestView()
  {   
      
        $this->load->view('progressTest.php');
    
  }
  public function progressTestQuery()
  { 

    if(!empty($_FILES['image_up']['name']))
        {   
          $config['upload_path']   = 'Testimages/'; 
          $config['allowed_types'] = '*'; 
          $this->upload->initialize($config);
          //$this->load->library('upload', $config);
          $file_name      =   $_FILES['image_up']['name'];
            $file_extension     =   pathinfo($file_name, PATHINFO_EXTENSION);
            $allowed_extension  =   array('jpg','jpeg','png');

            if(in_array($file_extension,$allowed_extension))
            {
              if ($this->upload->do_upload('image_up'))
              {
                echo base_url().'Testimages/'.$file_name;
              }
              else
              {
                echo $this->upload->display_errors();//'somethig went !wrong';
              } 
            }
            else
            {
              echo 'please upload valid file';
            } 
            #echo 'uploaded';
        } 
  }

}
?>