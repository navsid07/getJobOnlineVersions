<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -  
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html



   */


   function __construct()
    {
           
           // this is your constructor
           parent::__construct();
           $this->load->helper('form');
           $this->load->library('session');
           $this->load->library('pagination');
           $this->load->helper('url');
           $this->load->model('insert');
           $this->load->model('Pagination_model');
           $this->load->model('search');
           $this->load->model('fetch');
           $this->load->model('update');
           $this->load->library('upload');
           $this->load->helper('cookie');
           $this->load->library('user_agent');
          
           
    }

    public function trafficAnalytics()
{

      $result =$this->fetch->fetchTraffic();
      $this->load->view('trafficAnalytics',['trafficAnalytics'=>$result]);
  
}

    public function CookiePolicy()
    {
      $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
        $sessionIdRecruiter=$this->session->userdata('recruiter_id');
        $country=get_cookie('countryCookie');

         $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

     $sessionIdEmployee=$this->session->userdata('employe_id');


    
        if(!empty($sessionCookieRecruiter) || !empty($sessionIdRecruiter))
        {
           $category=$this->fetch->fetchcategories();
           $data=$this->fetch->fetchrecruiterprofile();
           $this->load->view('CookiePolicy',['categories'=>$category,'data'=>$data]);
        }

        elseif (!empty($sessionCookieEmployee) || !empty($sessionIdEmployee)) 
    {
       $data= $this->fetch->fetchemployeprofile();
       $category=$this->search->category($country);

       $this->load->view('CookiePolicy',['data'=>$data,'categories'=>$category]);
    }
    else
    {
      $this->load->view('CookiePolicy');
    }

    }

    public function report()
    {
        $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
        $sessionIdRecruiter=$this->session->userdata('recruiter_id');
        $country=get_cookie('countryCookie');

         $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

     $sessionIdEmployee=$this->session->userdata('employe_id');

     

    

    
        if(!empty($sessionCookieRecruiter) || !empty($sessionIdRecruiter))
        {
           $category=$this->fetch->fetchcategories();
        $data=$this->fetch->fetchrecruiterprofile();
        $this->load->view('report',['categories'=>$category,'data'=>$data]);
        }
        elseif (!empty($sessionCookieEmployee) || !empty($sessionIdEmployee)) 
    {
       $data= $this->fetch->fetchemployeprofile();
  
      $category=$this->search->category($country);

       $this->load->view('report',['data'=>$data,'categories'=>$category]);
    }
    else
    {
      $this->load->view('report');
    }
    }

    public function report_form()
    {
      $name=$this->input->post('name');

      $email=$this->input->post('email');

      $phone=$this->input->post('contact');

      $issue=$this->input->post('issue');

      $detail=$this->input->post('detail');

$config= ['upload_path' => './reports/',

          'allowed_types' => 'jpg|jpeg|png|gif'];

          $this->upload->initialize($config);

      $data=$this->upload->do_upload('userfile');


          if($data==1)
          {
            $data = $this->upload->data();
            $image_path = base_url("reports/" .$data['raw_name'].$data['file_ext']);

                    $imagename=$data['raw_name'].$data['file_ext'];

           $array=array('report_name'=>$name

        ,'report_email'=>$email

        ,'report_phone'=>$phone

        ,'report_issue'=>$issue

        ,'report_detail'=>$detail

        ,'report_image'=>$imagename

        ,'status'=>'1');

            $this->insert->insertreport($array); 
            echo 1;
            //echo 'your issue successfully submitted.';
          //header('Refresh: 3;url='.base_url());
          }
          else
          {
            $array=array('report_name'=>$name

        ,'report_email'=>$email

        ,'report_phone'=>$phone

        ,'report_issue'=>$issue

        ,'report_detail'=>$detail

        ,'report_image'=>''

        ,'status'=>'1');

            $this->insert->insertreport($array); 
          echo 1;//  echo 'Your issue successfully Submitted.';
          //// header('Refresh: 3;url='.base_url());
          }
  
    }

    public function privacy_policy()
    {
      $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
      $country=get_cookie('countryCookie');
     $sessionIdRecruiter=$this->session->userdata('recruiter_id');


      $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

     $sessionIdEmployee=$this->session->userdata('employe_id');

     

     if(!empty($sessionCookieRecruiter) || !empty($sessionIdRecruiter))
     {
      $data=$this->fetch->fetchrecruiterprofile();
    
      $category=$this->fetch->fetchcategories();
      $this->load->view('privacyPolicy',['data'=>$data,'categories'=>$category]);
    }
    elseif (!empty($sessionCookieEmployee) || !empty($sessionIdEmployee)) 
    {
       $data= $this->fetch->fetchemployeprofile();
  
      $category=$this->search->category($country);

       $this->load->view('privacyPolicy',['data'=>$data,'categories'=>$category]);
    }
    else
    {
       $this->load->view('privacyPolicy');
    }

    }

      public function testmodal()
    {
      $this->load->view('testmodal');
    }
    public function recaptchatest()
    {
      $this->load->view('recaptchatest');
    }
     public function recaptchatestsubmit()
    {
            //$this->input->post('name');
        if(!empty($_POST['g-recaptcha-response']))
      {
       // var_dump($_POST);
        $secret="6LfoxWUUAAAAAMOdvcd5BNzU4JbEP4A-jMby8FeR";
        $ip=$_SERVER['REMOTE_ADDR'];
        $captcha=$_POST['g-recaptcha-response'];
        $rsp="https://www.google.com/recaptcha/api/siteverify?secret=$secret&captcha=$captcha&remoteip=$ip";
        var_dump($rsp);
      }
      else
      {
        echo 'noty good';
      }

    }


     public function getcookie()
 {

 $country=$this->input->get('country');
     $cookiie= array(
      'name'   => 'countryCookie',
      'value'  => $country,
       'expire' => '604800',
  );
     $cookies=set_cookie($cookiie);
     $emptycountry=$this->session->userdata('emptyCountry');
     if(!empty($emptycountry))
     {

       redirect($emptycountry);
       $this->session->unset_userdata('emptyCountry');
      }
      else
      {
        redirect(base_url().'Index');
      }
}

//display cookies testing
public function displayCookie()
{
 $cookie=get_cookie('countryCookie');
 $this->load->view('cookieTest',['cookie'=>$cookie]);
}

//delete and insert new cookie for testing
public function deletecookie()
{
  $country=$this->input->get('country');
  if(!empty($country))
  {
    delete_cookie('countryCookie');
     $cookie= array(
      'name'   => 'countryCookie',
      'value'  => $country,
       'expire' => '604800',
  );
    set_cookie($cookie);
    redirect(base_url().'CheckCookie?country='.$country);
  }
  else
  {
     redirect(base_url());
  }
}

//reinsert cookies and test newely saved cookie
public function checkcookie()
{
  redirect(base_url().'welcome/checkagain');
}

//chang cookie on user's request
public function changeCookie()
{
  $country=$this->input->get('country');
  if(!empty($country))
  {
 delete_cookie('countryCookie');
 
  $cookie= array(
      'name'   => 'countryCookie',
      'value'  => $country,
       'expire' => '604800',
       //one month = 2592000
  );
 set_cookie($cookie);
redirect($_SERVER['HTTP_REFERER']);

}
else
{
  redirect(base_url());
}
}



 public function index()
 {

 $countryCookie=get_cookie('countryCookie');
  $recruiterlogin=get_cookie('recruiterLoginCookie');
$employeelogin=get_cookie('employeeLoginCookie');
  if(empty($countryCookie))
  {

    $this->load->view('mainindex');
  }
  elseif(!empty($countryCookie) && !empty($recruiterlogin))
  {

    redirect(base_url().'RecruiterDashboard');
  }
  elseif (!empty($countryCookie) && !empty($employeelogin)) 
  {
    redirect(base_url().'EmployeeDashboard');
  }
  elseif(!empty($countryCookie) && empty($recruiterlogin) && empty($employeelogin))
  {
   redirect(base_url().'Index');
  }

 }


  public function dashboardIndex()
  {
    
    //redirect(versionUpdate);
     /*$version = $this->config->item('version');
    if ($version == 'versionlattest') {
      
      redirect(base_url().'versionUpdtes/');
    }*/

$country=get_cookie('countryCookie');
if($country=='India' || $country=='United States' || $country=='Canada')
{
    get_cookie('countryCookie');
    //$blog=$this->fetch->anotherdatabase();
    $answer1=$this->fetch->fetchanswer1();
    $answer2=$this->fetch->fetchanswer2();
    $answer3=$this->fetch->fetchanswer3();
     $capitalise=ucfirst($country);
    $logo=$this->fetch->fetchlogo($country);
   
   $articles=$this->fetch->fetchArticles();
    $jobs=$this->search->todayjobs($country);
    //$edata= $this->fetch->fetchemployeprofile();
   // $rdata=$this->fetch->fetchrecruiterprofile();
    $category=$this->search->category($country);
    $categoryindia=$this->search->categoryindia();
    $categorycanada=$this->search->categorycanada();
    $voting=$this->fetch->voting();

//check session
    $blog='blog';
    $employeidd=$this->session->userdata('employe_id');
    $recruiteridd=$this->session->userdata('recruiter_id');
    $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($employeidd) && empty($sessionCookieEmployee))
    {
      $employeid=$employeidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($employeidd)) 
    {
      $employeid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($employeidd)) 
    {
      $employeid=$employeidd;
    }

    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($recruiteridd) && empty($sessionCookieRecruiter))
    {
      $recruiterid=$recruiteridd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($recruiteridd)) {
      $recruiterid=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($recruiteridd)) {
      $recruiterid=$recruiteridd;
    }

  if(empty($employeid) && empty($recruiterid))
  {
    
    $this->load->view('index',['articles'=>$articles,'logo'=>$logo,'jobs'=>$jobs,'categoryindia'=>$categoryindia,'categorycanada'=>$categorycanada,'category'=>$category,'voting'=>$voting,'answer1'=>$answer1,'answer2'=>$answer2,'answer3'=>$answer3,'blog'=>$blog,'country'=>$country]);
  }
  elseif (!empty($employeid)) 
  {
        redirect(base_url().'EmployeeDashboard');
  }
  elseif (!empty($recruiterid)) 
  {
   redirect(base_url().'RecruiterDashboard');
  }

  }
  else
  {
   
    redirect(base_url());
  }
}

  public function login()
  {
    $this->load->view('login');
  }

/*  public function loginquery()
  {
  
    $email=$this->input->post('email');
    $password=$this->input->post('password');
    $this->load->model('fetch');
    $fetch=$this->fetch->checkemail( $email,$password );
    if($fetch=='failed')
    {
        $this->session->set_flashdata('error','You have entered wrong email or password.');
      $this->session->set_flashdata('error_class','alert-danger');
      redirect ($_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo 'success';
    }
    //$this->load->view('login');
  }*/

public function newsletterindex()
{
  $country=get_cookie('countryCookie');
  $email=$this->input->post('email');
  //$data=array('email'=>$email);
 
    
   
$eidd=$this->session->userdata('employe_id');
    $ridd=$this->session->userdata('recruiter_id');

     $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    $sessionCookieEmployee=get_cookie('sessionCookieEmployee');
if(!empty($eidd) || !empty($sessionCookieEmployee))
{
    if(!empty($eidd) && empty($sessionCookieEmployee))
    {
      $eid=$eidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($eidd)) 
    {
      $eid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($eidd)) 
    {
      $eid=$eidd;
    }
     $edata= $this->fetch->fetchemployeprofile();
      $ecategory=$this->search->category($country);
}

elseif (!empty($ridd) || !empty($sessionCookieRecruiter)) {
  
   
    if(!empty($ridd) && empty($sessionCookieRecruiter))
    {
      $rid=$ridd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($ridd)) {
      $rid=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($ridd)) {
      $rid=$ridd;
    }
    $rdata=$this->fetch->fetchrecruiterprofile();
    $rcategory=$this->fetch->fetchcategories();

}
  if($this->insert->insertnewsletter($email))
  {
    
if(!empty($eid))
{

  echo 1;/*
  $message1='Thankyou For joining us!';
    $message2='Your Email address successfully registered with Get Job Online newsletter service.';
    $this->load->view('newsletterindex',['ecategory'=>$ecategory,'edata'=>$edata,'head'=>$message1,'message'=>$message2]);*/
    //header('Refresh: 8; URL=https://www.get-job.online');
  
}
elseif (!empty($rid)) {

  echo 1;
 /*$message1='Thankyou For joining us!';
    $message2='Your Email address successfully registered with Get Job Online newsletter service.';

   $this->load->view('newsletterindex',['rcategory'=>$rcategory,'rdata'=>$rdata,'head'=>$message1,'message'=>$message2]);
   // header('Refresh: 8; URL=https://www.get-job.online');*/
   
}
else
{
  echo 1;
/*$message1='Thankyou For joining us!';
    $message2='Your Email address successfully registered with Get Job Online newsletter service.';
    $this->load->view('newsletterindex',['head'=>$message1,'message'=>$message2]);
    //header('Refresh: 8; URL=https://www.get-job.online');
  */
}

  }
  else
  {
    if(!empty($eid))
{

  echo 1;
  /*$message3='Thankyou For joining us!';
    $message4='Your Email already registered with Get Job Online newsletter service.';
    $this->load->view('newsletterindex',['ecategory'=>$ecategory,'edata'=>$edata,'head'=>$message3,'message'=>$message4]);
   // header('Refresh: 8; URL=https://www.get-job.online');*/
  
}
elseif (!empty($rid)) 
{
  echo 1;
  /*$message3='Thankyou For joining us!';
    $message4='Your Email already registered with Get Job Online newsletter service.';
  $this->load->view('newsletterindex',['rcategory'=>$rcategory,'rdata'=>$rdata,'head'=>$message3,'message'=>$message4]);
   // header('Refresh: 8; URL=https://www.get-job.online');*/
   
}
else
{
  echo 1;

    /*$message3='Thankyou For joining us!';
    $message4='Your Email already registered with Get Job Online newsletter service.';
  $this->load->view('newsletterindex',['head'=>$message3,'message'=>$message4]);*/
    //header('Refresh: 8; URL=https://www.get-job.online');
  
}
     
    // $this->load->view('newsletterindex',['head'=>$message3,'message'=>$message4]);
      //header('Refresh: 8; URL=https://www.get-job.online');
  }
  //print_r($email);
  //$this->load->view('newsletterindex');
}
  public function email()
  {


      $to=$this->input->post('email');


      $this->load->model('fetch');
      $to_result=$this->fetch->checkmail($to);
if($to_result=='success')
{
      $this->load->library('email');
            $config['protocol']='smtp';
            $config['smtp_host']='get-job.online';
            $config['smtp_port']='587';
            $config['smtp_timeout']='30';
            $config['smtp_user']='noreply@get-job.online';
            $config['smtp_pass']='774411';
            $config['charset']='utf-8';
            $config['newline']="\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from('noreply@get-job.online', 'getjob.online');
            $this->email->to($to);
            $this->email->subject('Password Recovery');



$body  =  '<i>
  <html>
<head>
<style>
  
  
  .aa
  {
  background-color:white;
  border:2px solid green;
  color:green;
  border-radius:3px;
  padding:10px 25px;
  cursor:pointer; 
  }
  
  .aa:hover
  
  {
  background-color:green;
  color:white;
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
    

    
    
    <div class="row" style="text-align:center; margin-bottom:10px; margin-left:5%; margin-right:5%;">
        <div class="col-md-offset-2 col-md-8">
           <p style="color:#404040; text-align:center; font-size:18px;line-height:24px;font-weight:lighter;padding:0;margin:0">
          Click on button below to change your password.
          </p>
          

           
        </div>
      </div>
      
      <div class="row" style="text-align:center;">
        <a href="https://get-job.online/welcome/changepassword?email=jastgrewal@gmail.com"style="text-decoration:none;"><input type="submit" class="aa" value="Change Password"></a>
      </div>
      
      
      
  </body>
  </html>
  </i>';
 



            $this->email->message($body);
           if($this->email->send())
           {
            $this->session->set_flashdata('emailsent','Verification link has been sent to your email.');
            $this->session->set_flashdata('emailsent_class','alert-success');
            redirect ($_SERVER['HTTP_REFERER']);
            
           }
           else
           {
            $this->session->set_flashdata('emailfailed','Something went wrong please try again later.');
            $this->session->set_flashdata('emailfailed_class','alert-danger');
            redirect ($_SERVER['HTTP_REFERER']);
           }
       }
       else
       {
          $this->session->set_flashdata('checkmail','Email address you have entered doesnot exist please try again with registered email.');
            $this->session->set_flashdata('checkmail_class','alert-danger');
            redirect ($_SERVER['HTTP_REFERER']);
       }
           
  }


  public function changepassword()
  {
    //echo $this->uri->segment(2);//it will print blo
   $email= $this->input->get('email');
   $this->load->view('changepassword',['email'=>$email]);
    //echo 'reached';
    //echo $uri;
  }

  public function changepasswordquery()
  {
    
   $email= $this->input->post('email');
   $this->session->set_userdata('email',$email);
  $password= $this->input->post('password');
   $data=['password'=>$password];
  $this->load->model('fetch');
   if($this->fetch->changepasswordd($data))
   {
      $this->session->set_flashdata('passwordchanged','Your password successfully changed. Now you able to login with new password.');
            $this->session->set_flashdata('passwordchanged_class','alert-success');

            redirect ($_SERVER['HTTP_REFERER']);
   }
    
  }
  public function newsletter()
  {
    $email= $this->input->post('email');
     $data=array('email'=>$email);
     if($this->insert->insertnewsletter($data))
     {
      redirect ( $_SERVER['HTTP_REFERER']);
     }
  }



  public function search()
  {
    
   // echo 'This page is under maintenance please wait for few hours.';
      
     $this->session->unset_userdata('searchCitySession');

//yesterday commented
     //get current url
      $currentUrl= current_url();    

      //get query string in url  
      $qstring   = $_SERVER['QUERY_STRING']; //my_id=1,3
     
      //concate url and query string
     $fullURL = $currentUrl . '?' . $qstring; 

     //get query string value from fullURL variable
    $getCity = substr($fullURL, strpos($fullURL, "=") + 1);    
  
      //check if string have a space 
     if (strpos($getCity, '%20')) 
     {

         $cityy = str_replace('%20', ' ', $getCity);
     }
    else
      {
         $cityy = $getCity;
      }

    $this->session->set_userdata('searchCitySession',$cityy);

    $country=get_cookie('countryCookie');
    $employe_idd=$this->session->userdata('employe_id');
    $recruiter_idd=$this->session->userdata('recruiter_id');

    $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($employe_idd) && empty($sessionCookieEmployee))
    {
      $employe_id=$employe_idd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($employe_idd)) 
    {
      $employe_id=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($employe_idd)) 
    {
      $employe_id=$employe_idd;
    }

    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($recruiter_idd) && empty($sessionCookieRecruiter))
    {
      $recruiter_id=$recruiter_idd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($recruiter_idd)) {
      $recruiter_id=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($recruiter_idd)) {
      $recruiter_id=$recruiter_idd;
    }

     $joblocation=$this->fetch->fetchsubmitjoblocation();
    $max=$this->fetch->fetchmax();
    $locationn=$_GET['city'];
    $location=urldecode($locationn);
    //urldecode($this->uri->segment(3));
    $categories=$this->fetch->fetchcategory();
    
$data=$this->search->searchcity($location);
    if(!empty($employe_id))
    {
//if signin as employee 
    $dataa= $this->fetch->fetchemployeprofile();
    $category=$this->search->category($country);
//end
         if($data==null)
        {
          //print_r($categories);
             $this->load->view('searchcity',['job_location'=>$joblocation,'data'=>$dataa,'category'=>$category,'result'=>'null','categories'=>$categories,'max'=>$max,'country'=>$country]);
        }
        else
        {
            $result=json_decode(json_encode($data), true);
            //print_r($categories);
            $this->load->view('searchcity',['job_location'=>$joblocation,'data'=>$dataa,'category'=>$category,'result'=>$result,'categories'=>$categories,'max'=>$max,'country'=>$country]);
        }

    }

    elseif (!empty($recruiter_id)) 
    {
     //print_r($categories);
     //if signin as recruiter

    $datta=$this->fetch->fetchrecruiterprofile();
    $category=$this->fetch->fetchcategories();  
    //end               
                    if($data==null)
            {

                $this->load->view('searchcity',['job_location'=>$joblocation,'data'=>$datta,'categories'=>$category,'result'=>'null','categories'=>$categories,'max'=>$max,'country'=>$country]);
                //print_r($categories);

            }

            else
            {

           		 //print_r($categories);
               	 $result=json_decode(json_encode($data), true);
              $this->load->view('searchcity',['job_location'=>$joblocation,'data'=>$datta,'result'=>$result,'categories'=>$categories,'max'=>$max,'country'=>$country]);

           }
    }

    else
    {
          if($data==null)
          {

          	  //print_r($categories);
              $this->load->view('searchcity',['job_location'=>$joblocation,'result'=>'null','categories'=>$categories,'max'=>$max,'country'=>$country]);

          }
          else
          {

         	 //print_r($categories);
          	$result=json_decode(json_encode($data), true);
          	$this->load->view('searchcity',['job_location'=>$joblocation,'result'=>$result,'categories'=>$categories,'max'=>$max,'country'=>$country]);
        
        }
    }

    //tommorow commented end
    
    /* $location=$this->input->post('location');
     $job=$this->input->post('job');
     if(empty($location) && empty($job))
    {
      redirect($_SERVER['HTTP_REFERER']);
    }
    else
    {
    if(!empty($location))
    {
      $data=$this->search->searchlocation($location);
      $rresult=$data['result'];
      if($rresult==null)
      {
      $result=json_decode(json_encode($rresult), true);
      $this->load->view('jobsearchresult',['data'=>$result]);
      }
      if($rresult!=null)
      {
        $employer_id=$data['employer_id'];
      $employer=$this->fetch->fetchemployer($employer_id);
      
      $result=json_decode(json_encode($rresult), true);
      $this->load->view('jobsearchresult',['data'=>$result,'employer'=>$employer_id]);
      }
      

    }
    if(!empty($job))
    {
      $data=$this->search->searchjob($job);
      $ddata=$data['result'];
      if($ddata==null)
      {
        
      $rresult=$data['result'];
      $result=json_decode(json_encode($rresult), true);
      $this->load->view('jobsearchresult',['data'=>$result]);
      }
      if($ddata!=null)
      {
        
        //print_r($data);
      $employer_id=$data['employer_id'];
      $employer=$this->fetch->fetchemployer($employer_id);
      $rresult=$data['result'];
      $result=json_decode(json_encode($rresult), true);
      $this->load->view('jobsearchresult',['data'=>$result,'employer'=>$employer_id]);
      }
    
      
      
      
    }
    if(!empty($location) && !empty($job))
    {
      $data=$this->search->searchboth($location,$job);
      $rresult=$data['result'];
      if($rresult==null)
      {
      $result=json_decode(json_encode($rresult), true);
      $this->load->view('jobsearchresult',['data'=>$result]);
      }
      if($rresult!=null)
      {
        
      $employer_id=$data['employer_id'];
      $employer=$this->fetch->fetchemployer($employer_id);
      $rresult=$data['result'];
      $result=json_decode(json_encode($rresult), true);
      $this->load->view('jobsearchresult',['data'=>$result,'employer'=>$employer_id]);
      }
      //$this->load->view('jobsearchresult');
      
    }
  }
    
  }*/
}

  public function feedback()
  {
   
    $logo=$this->fetch->fetchlogo();
    $jobs=$this->search->todayjobs();
    $category=$this->search->category();
    $this->load->view('feedback',['logo'=>$logo,'jobs'=>$jobs,'category'=>$category]);
  }

  public function feedbacksubmit()
  {
     $data=$this->input->post();
     $this->insert->feedback($data);
     $this->session->set_flashdata('success','Your feedback successfully submitted');
     $this->session->set_flashdata('success_class','alert-success');
     redirect($_SERVER['HTTP_REFERER']);
  }


  public function test()
  {
    $this->load->view('newtest');
  }

 /* public function featuredemployer()
  {
    $answer1=$this->fetch->fetchanswer1();
    $answer2=$this->fetch->fetchanswer2();
     $answer3=$this->fetch->fetchanswer3();
    $logo=$this->fetch->fetchlogo();
    $jobs=$this->search->todayjobs();
    $category=$this->search->category();
    $voting=$this->fetch->voting();
  $this->load->view('featuredemployer',['logo'=>$logo,'jobs'=>$jobs,'category'=>$category,'voting'=>$voting,'answer1'=>$answer1,'answer2'=>$answer2,'answer3'=>$answer3]);
   
  }*/

  public function single()
  {
    $country=get_cookie('countryCookie');
    $singleid=$_GET['uri'];//$this->uri->segment(3);
  //$singleid= $this->session->set_userdata('single_id',$form); 
  $single=$this->fetch->featutredrecruiter($singleid);
  
   $answer1=$this->fetch->fetchanswer1();
    $answer2=$this->fetch->fetchanswer2();
     $answer3=$this->fetch->fetchanswer3();
    $logo=$this->fetch->fetchlogo1($singleid);
    $jobs=$this->search->todayjobs($country);
    $category=$this->search->category($country);
    $voting=$this->fetch->voting();
  $this->load->view('featuredemployer',['single'=>$single,'logo'=>$logo,'jobs'=>$jobs,'category'=>$category,'voting'=>$voting,'answer1'=>$answer1,'answer2'=>$answer2,'answer3'=>$answer3]);
  }


  public function contact()
  {
    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
      $country=get_cookie('countryCookie');
     $sessionIdRecruiter=$this->session->userdata('recruiter_id');



  $categoryy=$this->search->category($country);

      $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

     $sessionIdEmployee=$this->session->userdata('employe_id');

     

     if(!empty($sessionCookieRecruiter) || !empty($sessionIdRecruiter))
     {
      $data=$this->fetch->fetchrecruiterprofile();
    
      $category=$this->fetch->fetchcategories();
      $this->load->view('contact',['data'=>$data,'categories'=>$category]);
    }
    elseif (!empty($sessionCookieEmployee) || !empty($sessionIdEmployee)) 
    {
       $data= $this->fetch->fetchemployeprofile();
  
      $category=$this->search->category($country);

       $this->load->view('contact',['data'=>$data,'categories'=>$category]);
    }
    else
    {
       $this->load->view('contact',['categories'=>$categoryy]);
    }

 
  }

public function about()
  {

   $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
      $country=get_cookie('countryCookie');


  $categoryy=$this->search->category($country);
     $sessionIdRecruiter=$this->session->userdata('recruiter_id');


      $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

     $sessionIdEmployee=$this->session->userdata('employe_id');

     

     if(!empty($sessionCookieRecruiter) || !empty($sessionIdRecruiter))
     {
      $data=$this->fetch->fetchrecruiterprofile();
    
      $category=$this->fetch->fetchcategories();
      $this->load->view('about',['data'=>$data,'categories'=>$category]);
    }
    elseif (!empty($sessionCookieEmployee) || !empty($sessionIdEmployee)) 
    {
       $data= $this->fetch->fetchemployeprofile();
  
      $category=$this->search->category($country);

       $this->load->view('about',['data'=>$data,'categories'=>$category]);
    }
    else
    {
       $this->load->view('about',['categories'=>$categoryy]);
    }


 
  }

  public function contactform()
  {
   
  $form=$this->input->post();
 $result=$this->insert->insertcontactform($form);
 if($result=='success')
{
  echo 1;
  /*
  $this->session->set_flashdata('success','<p><b><h2>Thankyou for contacting with us!</h2></b></br> Your Query successfully received. Get job online customer Representative will get in touch with you within 24 hours.</p><p>We Will appreciate your Patience as we are trying our best to answer all the Questions from our respected users.</p>');
  $this->session->set_flashdata('success_class','alert-success');
   redirect($_SERVER['HTTP_REFERER']);*/
}
  }

  //testing
public function testt()
{
  //$rrid=$this->session->userdata('recruiter_id');
 // print_r($rrid);
  $uu=$this->session->userdata('uurl');
  redirect(base_url().$uu);
}
  public function searchresult()
  {
    $fmax=$this->fetch->fetchmax();
    $uurl=$this->session->userdata('url');
    $uid=$this->input->get('rid');
    $url=$_SERVER['REQUEST_URI'];
    $categories=$this->fetch->fetchcategory();
    $dataa= $this->fetch->fetchemployeprofile();
    $jobs= $this->fetch->alljobs();

       if(!empty($uurl))
    {
       $this->session->unset_userdata('url');
    }

     else
    {
      $uu=$this->session->set_userdata('url',$url);
    }

    $riddd=$this->session->userdata('recruiter_id');


    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($riddd) && empty($sessionCookieRecruiter))
    {
      $ridd=$riddd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($riddd)) {
      $ridd=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($riddd)) {
      $ridd=$riddd;
    }

    $this->session->set_userdata('recruitid',$uid);
    $result=$this->search->searchemployee($uid);
   $this->load->view('employedetailwelcome',['data'=>$result,'fmax'=>$fmax,'categories'=>$categories,'dataa'=>$dataa,'jobs'=>$jobs]);
 
   // print_r($uid);
    
    
  /*  $url=$_SERVER['REQUEST_URI'];
    $categories=$this->fetch->fetchcategory();

    if(!empty($uurl))
    {
       $this->session->unset_userdata('url');
    }
    else
    {
      $uu=$this->session->set_userdata('url',$url);
    }
    $ridd=$this->session->userdata('recruiter_id');
     
     $this->session->set_userdata('recruitid',$uid);
    
    $result=$this->search->searchemployee($uid);
    $this->load->view('employedetailwelcome',['data'=>$result,'categories'=>$categories]);*/
  }
 public function noapply()
 {
   $jid=$_GET['jid'];
    $recruiter=$_GET['recruiter'];

   $eid=$this->session->userdata('employe_id');

   $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($eidd) && empty($sessionCookieEmployee))
    {
      $eid=$eidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($eidd)) 
    {
      $eid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($eidd)) 
    {
      $eid=$eidd;
    }


   if(empty($eid))
   {
      $this->session->set_flashdata('noapply','<strong>Sorry!</strong> You have to login first to apply this job. If you are new user then register Your profile with Get-Job.online.');
      $this->session->set_flashdata('noapply_class','alert alert-danger alert-dismissable');
      redirect(base_url().'EmployeeLogin');
    }
    if(!empty($eid))
    {
      redirect(base_url().'EmployeeBalance?jid='.$jid.'&recruiter='.$recruiter);
    }

 }
 /* public function employeedetail()
  {
    $url=$_SERVER['REQUEST_URI'];
    $this->session->set_userdata('url',$url);
    $urll=$this->session->userdata('url');
   print_r($urll);
    $this->load->view('employedetailwelcome');
  }*/
  public function redirectt()
  {
    redirect(base_url().'RecruitEmployeeSearch');
  }

    public function searchcategory()
  {

    
     $country=get_cookie('countryCookie');
    $employeidd=$this->session->userdata('employe_id');
    $recruiteridd=$this->session->userdata('recruiter_id');

    $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($employeidd) && empty($sessionCookieEmployee))
    {
      $employeid=$employeidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($employeidd)) 
    {
      $employeid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($employeidd)) 
    {
      $employeid=$employeidd;
    }

    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($recruiteridd) && empty($sessionCookieRecruiter))
    {
      $recruiterid=$recruiteridd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($recruiteridd)) {
      $recruiterid=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($recruiteridd)) {
      $recruiterid=$recruiteridd;
    }

     $category=$this->input->get('category');


    $this->session->set_userdata('searchCategorySession',$category);

    $categories=$this->fetch->fetchcategory();
     $joblocation=$this->fetch->fetchsubmitjoblocation();
    $max=$this->fetch->fetchmax();
    $hello=$this->search->searchcategoryy($category);
   
    if(!empty($employeid))
    {
    	
   //if signin as employee 
    $dataa= $this->fetch->fetchemployeprofile();
    $category=$this->search->category($country);
    //end
     $this->load->view('searchcategory',['job_location'=>$joblocation,'data'=>$dataa,'max'=>$max,'category'=>$category,'result'=>$hello,'categories'=>$categories]);

  }
  elseif (!empty($recruiterid)) {
     //if signin as recruiter
    $data1=$this->search->searchcategoryrecruiter($category);
    $datta=$this->fetch->fetchrecruiterprofile();
    $category=$this->fetch->fetchcategories();  
    //end  
     $this->load->view('searchcategory',['job_location'=>$joblocation,'data'=>$datta,'max'=>$max,'category'=>$category,'result'=>$hello,'categories'=>$categories]);
  }

else
{
   
  $this->load->view('searchcategory',['job_location'=>$joblocation,'result'=>$hello,'max'=>$max,'categories'=>$categories]);
  }  
    
}

public function signinas()
  {
    $country=get_cookie('countryCookie');
    $jobs=$this->search->todayjobs($country);
    $eidd=$this->session->userdata('employe_id');
    $ridd=$this->session->userdata('recruiter_id');
    $featuredemployee=$this->fetch->featuredemployee();
    $checkrecentlyjoined=$this->fetch->recentlyJoinedCount();
    $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($eidd) && empty($sessionCookieEmployee))
    {
      $eid=$eidd;
      $uidd=$eid;
    }
    elseif (!empty($sessionCookieEmployee) && empty($eidd)) 
    {
      $eid=$sessionCookieEmployee;
      $uidd=$eid;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($eidd)) 
    {
      $eid=$eidd;
      $uidd=$eid;
    }

    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($ridd) && empty($sessionCookieRecruiter))
    {
      $rid=$ridd;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($ridd)) {
      $rid=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($ridd)) {
      $rid=$ridd;
    }


    $click=$this->input->get('click');
    $voting=$this->fetch->voting();
    
    if(!empty($eid) || !empty($rid))
    {
        if(!empty($eid) && $click=='eid')
        {
     
      $category=$this->search->category($country);
   
         $data=$this->fetch->fetchemployeprofilee($uidd);
        $this->load->view('signinas',['checkrecentlyjoined'=>$checkrecentlyjoined,'checkfeaturedemployee'=>$featuredemployee,'category'=>$category,'voting'=>$voting,'thiss'=>'employee','jobs'=>$jobs,'data'=>$data,'signup'=>'']);
        }

        elseif(!empty($eid) && $click=='rid')
        {
          $category=$this->search->category($country);
    
           $this->load->view('signinas',['checkrecentlyjoined'=>$checkrecentlyjoined,'checkfeaturedemployee'=>$featuredemployee,'category'=>$category,'voting'=>$voting,'thiss'=>'employee','jobs'=>$jobs,'signup'=>'asrecruiter','data'=>'r']);
        }

        elseif(!empty($rid) && $click=='rid')
        {
            $category=$this->fetch->fetchcategories();
          $data=$this->fetch->fetchemployer($rid);
          $this->load->view('signinas',['checkrecentlyjoined'=>$checkrecentlyjoined,'checkfeaturedemployee'=>$featuredemployee,'categories'=>$category,'voting'=>$voting,'thiss'=>'recruiter','jobs'=>$jobs,'data'=>$data,'signup'=>'']);
        }

         elseif(!empty($rid) && $click=='eid')
        {
           //echo 'hello3';
          $data=$this->fetch->fetchemployer($rid);
          $category=$this->fetch->fetchcategories();
          $this->load->view('signinas',['checkrecentlyjoined'=>$checkrecentlyjoined,'checkfeaturedemployee'=>$featuredemployee,'categories'=>$category,'voting'=>$voting,'thiss'=>'recruiter','jobs'=>$jobs,'signup'=>'asemployee','data'=>$data]);
        }
    }

    elseif($click=='eid')
    {
      redirect(base_url().'EmployeeLogin');
    }
    elseif($click=='rid')
    {
      redirect(base_url().'RecruiterLogin');
    }

  }
public function dashboard()
  {
    $esessionn=$this->session->userdata('employe_id');
    $rsession=$this->session->userdata('recruiter_id');

$sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($esessionn) && empty($sessionCookieEmployee))
    {
      $esession=$esessionn;
    }
    elseif (!empty($sessionCookieEmployee) && empty($esessionn)) 
    {
      $esession=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($esessionn)) 
    {
      $esession=$esessionn;
    }

    $sessionCookieRecruiter=get_cookie('sessionCookieRecruiter');
    if(!empty($rsessionn) && empty($sessionCookieRecruiter))
    {
      $rsession=$rsessionn;
    }
    elseif (!empty($sessionCookieRecruiter) && empty($rsessionn)) {
      $rsession=$sessionCookieRecruiter;
    }
    elseif (!empty($sessionCookieRecruiter) && !empty($rsessionn)) {
      $rsession=$rsessionn;
    }

    $data=$this->input->get('data', TRUE);
    $email=$this->input->get('q', TRUE);

  
    if(!empty($data))
    {

          if(!empty($esession))
      {
        $insert = array('status' => '1' ,'email'=>$email);
        $this->update->employeereferralstatus($insert);
        redirect(base_url().'EmployeeDashboard');
      }

       elseif(!empty($rsession))
      {
        $insert = array('status' => '1' ,'email'=>$email);
        $this->update->recruiterreferralstatus($insert);
        redirect(base_url().'RecruiterDashboard');
       
      }

      elseif($data=='recruiter')
      {
        redirect(base_url().'RecruiterLogin');
      }

      elseif($data=='employer')
      {
        redirect(base_url().'EmployeeLogin');
      }
      else
      {
         redirect(base_url());
      }

    }
    else
    {
        if(!empty($esession))
      {
       
        redirect(base_url().'EmployeeDashboard');
      }

       elseif(!empty($rsession))
      {
       
        redirect(base_url().'RecruiterDashboard');
       
      }
      else
      {
        
         redirect(base_url());
      }
    }

  }


public function paymentfailed()
{
  echo '<h1 style="text-align:center; color:#D3404E;">Your payment failed.</h1>';
      ?>
      <script>setTimeout(function(){window.location.href='https://www.get-job.online'},10000);</script>
      <?php
}

public function paymentsuccess()
{
  /*echo '<h1 style="text-align:center; color:#F15F43;">Your payment successfully received by get job online.</h1>';
     ?>

      <script>setTimeout(function(){window.location.href='http://www.get-job.online'},10000);</script>
      */


      
    $status = $this->input->post("status");
    $firstname = $this->input->post("firstname");
    $amount = $this->input->post("amount");
    $txnid = $this->input->post("txnid");
    $posted_hash = $this->input->post("hash");
    $key = $this->input->post("key");
    $productinfo = $this->input->post("productinfo");
    $email = $this->input->post("email");
    $salt = "GQs7yium";

    if ($this->input->post("additionalCharges")) {
        $additionalCharges = $this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    } else {

        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    }
    $hash = hash("sha512", $retHashSeq);

    if ($hash != $posted_hash) {
        $data['msg'] = "Invalid Transaction. Please try again";
    } else {
        $data['msg'] = "<h3>Thank You. Your order status is " . $status . ".</h3>";
        $data['msg'] .= "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
        $data['msg'] .= "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
    }
    print_r('status='.$status.'  name='.$firstname.'  amount='.$amount.' txnid='.$txnid.'  postedhash='.$posted_hash.'  key='.$key.'  productinfo='.$productinfo.'  email='.$email.'  salt='.$salt);

   // $this->load->view('pum_common', $data);
}


  public function admin()
  {
    $this->load->view('admin');
  }

  public function saveadmin()
  {
    $name=$this->input->post('name');
    $contact=$this->input->post('contact');
    $email=$this->input->post('email');
    $data=array('name'=>$name,'contact'=>$contact,'email'=>$email);
    $result=$this->insert->saveadmin($data);
    if($result=='success')
    {
      $this->session->set_flashdata('success','<p><b>Data Successfully Inserted</b>');
      $this->session->set_flashdata('success_class','alert-success');
      redirect($_SERVER['HTTP_REFERER']);
    }
  }


  //blog pagination code
public function loadblog($rowno=0){

    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        
        // All records count
        $allcount = $this->Pagination_model->getblogCount();

        // Get  records
      $users_record = $this->Pagination_model->getblogData($rowno,$rowperpage);
        
        // Pagination Configuration
        $config['base_url'] = 'https://www.get-job.online/welcome/loadblog';
        $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
    
  }
//blog pagination code end



   public function employeeDetailNoSignin()
    {


      $uid = $this->input->get('uid');
  $employe=$this->fetch->allemployee($uid);
  $data=$this->fetch->fetchemployeedit($uid);
  $fresherExperience=$this->fetch->fetchemployeexperienceid($uid);
  $employeeExperience=$this->fetch->fetchemployeexperience($uid);
  $session=$uid;
   $portfolio=$this->fetch->fetchPortfolio($session);
   $certification=$this->fetch->fetchCertificationEmployeeAdmin($uid);

  $jid=$this->input->get('jid');
  $fetchstatus=$this->fetch->fetchstatus($jid,$uid);
  
 
  $this->load->view('employeeDetailNoSignin',['certification'=>$certification,'portfolio'=>$portfolio,'fresherExperience'=>$fresherExperience,'employeeExperience'=>$employeeExperience,'data'=>$data,'employe'=>$employe]);
    }


//for job categories widget 
    public function loadCategoryPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        // All records count
        $allcount = $this->Pagination_model->getCategoryPaginationCount($country);

        // Get  records
      $users_record = $this->Pagination_model->getCategoryPaginationData($rowno,$rowperpage,$country);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'welcome/loadCategoryPagination';
        $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
    
  }

  //for location widget 
    public function loadLocationPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        // All records count
        $allcount = $this->Pagination_model->getLocationPaginationCount($country);

        // Get  records
      $users_record = $this->Pagination_model->getLocationPaginationData($rowno,$rowperpage,$country);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'welcome/loadLocationPagination';
        $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
    
  }

   //for location widget 
    public function loadMostViewedPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        // All records count
        $allcount = $this->Pagination_model->getMostViewedPaginationCount($country);

        // Get  records
      $users_record = $this->Pagination_model->getMostViewedPaginationData($rowno,$rowperpage,$country);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'welcome/loadMostViewedPagination';
        $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
    
  }


//city search widget
  //for location widget 
    public function loadCitySearchPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    

       $city=$this->session->userdata('searchCitySession');
      

        // All records count
        $allcount = $this->Pagination_model->getCitySearchPaginationCount($country,$city);

        // Get  records
      $users_record = $this->Pagination_model->getCitySearchPaginationData($rowno,$rowperpage,$country,$city);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'welcome/loadCitySearchPagination';
        $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

     

    echo json_encode($data);
    
  }




   //for recent job widget 
    public function loadCategorySearchPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

     $category = $this->session->userdata('searchCategorySession');
 
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

        // All records count
        $allcount = $this->Pagination_model->getCategorySearchPaginationCount($category);

        // Get  records
      $users_record = $this->Pagination_model->getCategorySearchPaginationData($rowno,$rowperpage,$category);
        
    // Pagination Configuration
    $config['base_url'] = base_url().'welcome/loadCategorySearchPagination';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;


    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;


    echo json_encode($data);
  }



//for job postedby a brand
  
   public function loadJobPostedByPagination($rowno=0){

   $country=get_cookie('countryCookie');
    // Row per page
    $rowperpage = 4;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    

       //$city=$this->session->userdata('searchCitySession');
      

        // All records count
        $allcount = $this->Pagination_model->getJobPostedByPaginationCount();

        // Get  records
      $users_record = $this->Pagination_model->getJobPostedByPaginationData($rowno,$rowperpage);
        
        // Pagination Configuration
        $config['base_url'] = base_url().'welcome/loadJobPostedByPagination';
        $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

     

    echo json_encode($data);
    
  }


  public function testingPage()
  {

     //get current url
      $currentUrl= current_url();    

      //get query string in url  
      $qstring   = $_SERVER['QUERY_STRING']; //my_id=1,3
     
      //concate url and query string
     $fullURL = $currentUrl . '?' . $qstring; 

     //get query string value from fullURL variable
    $getCity = substr($fullURL, strpos($fullURL, "=") + 1);    
  
      //check if string have a space 
     if (strpos($getCity, '%20')) 
     {

         $city = str_replace('%20', ' ', $getCity);
     }
    else
      {
         $city = $getCity;
      }

      echo $city;

    /*$number= 'url='.current_url();

        
$whatIWant = substr($number, strpos($number, "=") + 1);    
echo $whatIWant;*/
    /*
    $category = 'Accountant';
    $allcount = $this->Pagination_model->getCategorySearchPaginationCount($category);
    print_r($allcount);*/
  }

//load more testing controller

 public function loadMoreTesting()
    {
        $this->load->view('loadMoreTestingView');
        //get current url
        
        $currentUrl= current_url(); 
      //get query string in url  
      $qstring   = $_SERVER['QUERY_STRING']; //my_id=1,3
     
      //concate url and query string
     $fullURL = $currentUrl . '?' . $qstring; 

     //get query string value from fullURL variable
    $city = substr($fullURL, strpos($fullURL, "=") + 1);    

    $this->session->set_userdata('cityy',$city);
        
    }
 
    public function getCountry()
    {

        $page =  $_GET['page'];
        $city = $this->session->cityy;
        $countries = $this->Pagination_model->getCountry($page);
        foreach($countries as $country){
            echo "<tr><td>".$country->submitjob_id."</td><td>".$country->submitjob_job_title."</td><td>".$country->submitjob_preffered_location."</td></tr>";
        }
        exit;
    
    }

    public function testModel()
    {
      $country='India';
       $allcount = $this->Pagination_model->getJobPostedByPaginationCount();
      //$model=$this->Pagination_model->getLocationPaginationCount($country);
      print_r($allcount);
    }

  //load more testing controller code


}
?>