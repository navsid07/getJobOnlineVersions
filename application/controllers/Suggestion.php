<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suggestion extends CI_Controller 
{

function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper('url');
        $this->load->model('suggestionmodel');
        $this->load->model('adminmodel');
        $this->load->library('user_agent');
         
       
    }

public function suggestionemployee()
{  
    $email=$_GET['email'];
    $uid=$this->suggestionmodel->suggestionemployee($email);
    $result=$this->adminmodel->singleemployer($uid);
    $resultt=$this->suggestionmodel->employee($email);
    $this->load->view('suggestionupdate/employeeupdate',['data'=>$resultt]);  
}
public function updateemployeee()
{
    
            $email=base64_encode(base64_encode($this->input->post('email')));
            $experience1=base64_encode(base64_encode($this->input->post('experience1')));
            $experience2=base64_encode(base64_encode($this->input->post('experience2')));
            $experience3=base64_encode(base64_encode($this->input->post('experience3')));
            $experience4=base64_encode(base64_encode($this->input->post('experience4')));
            $experience5=base64_encode(base64_encode($this->input->post('experience5')));
            $company1=base64_encode(base64_encode($this->input->post('company1')));
            $company2=base64_encode(base64_encode($this->input->post('company2')));
            $company3=base64_encode(base64_encode($this->input->post('company3')));
            $company4=base64_encode(base64_encode($this->input->post('company4')));
            $company5=base64_encode(base64_encode($this->input->post('company5')));
            $experience_in1=base64_encode(base64_encode($this->input->post('experience_in1')));
            $experience_in2=base64_encode(base64_encode($this->input->post('experience_in2')));
            $experience_in3=base64_encode(base64_encode($this->input->post('experience_in3')));
            $experience_in4=base64_encode(base64_encode($this->input->post('experience_in4')));
            $experience_in5=base64_encode(base64_encode($this->input->post('experience_in5')));
            $fresherex=base64_encode(base64_encode($this->input->post('fresher/experience')));
    
      $name=base64_encode(base64_encode($this->input->post('name')));
    
      $address=base64_encode(base64_encode($this->input->post('address')));
      $pincode=$this->input->post('pincode');
      $qualification=base64_encode(base64_encode($this->input->post('qualification')));
      $grade=base64_encode(base64_encode($this->input->post('grade')));
      $contact=base64_encode(base64_encode($this->input->post('contact')));
      $country=base64_encode(base64_encode($this->input->post('country')));
      $city=base64_encode(base64_encode($this->input->post('city')));
      $state=base64_encode(base64_encode($this->input->post('state')));
      
      $description=base64_encode(base64_encode($this->input->post('description')));
      $preffered_location=base64_encode(base64_encode($this->input->post('preffered_location')));
      $designation=base64_encode(base64_encode($this->input->post('designation')));
      $category=base64_encode(base64_encode($this->input->post('category')));
      $experience_in=base64_encode(base64_encode($this->input->post('experience_in')));
      $referral=$this->input->post('referral');
        

      $array=array('employee_name'=>$name
      
        ,'employee_address'=>$address
        ,'employee_pincode'=>$pincode
        ,'employee_qualification'=>$qualification
        ,'employee_grade'=>$grade
        ,'employee_phone'=>$contact
        
        ,'employee_country'=>$country
        ,'employee_city'=>$city
        ,'employee_state'=>$state
       
        ,'employee_category'=>$category
        
        ,'employee_description'=>$description
        ,'employee_preffered_location'=>$preffered_location
        ,'employee_designation'=>$designation
       
        ,'experience1'=>$experience1
        ,'experience2'=>$experience2
        ,'experience3'=>$experience3
        ,'experience4'=>$experience4
        ,'experience5'=>$experience5
        ,'company1'=>$company1
        ,'company2'=>$company2
        ,'company3'=>$company3
        ,'company4'=>$company4
        ,'company5'=>$company5
        ,'experience_in1'=>$experience_in1
        ,'experience_in2'=>$experience_in2
        ,'experience_in3'=>$experience_in3
        ,'experience_in4'=>$experience_in4
        ,'employee_fresher_experience'=>$fresherex
        ,'experience_in5'=>$experience_in5
       
      );

      
    
      $result=$this->suggestionmodel->updateemployee($array,$email);
      if(!$result)
      {
        echo 'Something went wrong please try again later.';
      }
      else
      {
        echo 'Your Successfully update your profile.';
         header("Refresh: 3; URL=http://www.get-job.online");
      }
  
}

public function suggestionrecruiter()
{
   $email=$_GET['email'];
    $uid=$this->suggestionmodel->suggestionrecruiter($email);
   
     $result=$this->adminmodel->singleemployer($uid);
      $resultt=$this->suggestionmodel->recruiter($email);
      $this->load->view('suggestionupdate/recruiterupdate',['data'=>$resultt]);
}

public function updaterecruiter()
{

    $email=base64_encode(base64_encode($this->input->post('email')));
    $name=base64_encode(base64_encode($this->input->post('company_name')));
    $contact=base64_encode(base64_encode($this->input->post('contact')));
   
      $name=base64_encode(base64_encode($this->input->post('company_name')));
     
      $established=base64_encode(base64_encode($this->input->post('established')));
      $contact=base64_encode(base64_encode($this->input->post('contact')));
      $country=base64_encode(base64_encode($this->input->post('country')));
      $city=base64_encode(base64_encode($this->input->post('city')));
      $state=base64_encode(base64_encode($this->input->post('state')));
      $employee_strength=base64_encode(base64_encode($this->input->post('employee_strength')));
      $designation=base64_encode(base64_encode($this->input->post('designation')));
      $category=base64_encode(base64_encode($this->input->post('category')));
      $address=base64_encode(base64_encode($this->input->post('address')));
      $description=base64_encode(base64_encode($this->input->post('description')));
    
      
       


      $array=array('company_name'=>$name
      
        ,'address'=>$address
        ,'employee_strength'=>$employee_strength
        ,'category'=>$category
        ,'established'=>$established
        ,'contact'=>$contact
       
        ,'country'=>$country
        ,'city'=>$city
        ,'state'=>$state
       
        ,'description'=>$description
       );
    

    $result=$this->suggestionmodel->updaterecruiter( $array,$email );
    if(!$result)
    {
      echo 'Something went wrong please try again later.';
       header('Refresh:5,url=http://www.get-job.online');
    }
    else
    {
      echo 'Your profile successfully updated.';
      header('Refresh:3,url=http://www.get-job.online');
    }
    
}
}
?>