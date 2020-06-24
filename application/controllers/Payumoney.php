<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payumoney extends CI_Controller 
{
    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->library('session');
        $this->load->model('insert');
        $this->load->model('fetch');
        $this->load->model('update');
        $this->load->model('search');
        $this->load->helper('url');       
    }

    public function checkredirect()
    {
      $this->load->view('successorderrecruiter');
    }

  public function index()
  {
    $this->load->view('payumoneyform');
  }
    
    public function payusubmitrecruiter()
    {

    $data['txnid'] = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $data['email'] = base64_decode(base64_decode($this->input->post('email')));
    $data['uid'] = $this->input->post('uid');
    $this->session->set_userdata('pyuemail',$this->input->post('email'));
    $data['mobile'] = base64_decode(base64_decode($this->input->post('mobile')));
    $data['firstName'] = $this->input->post('firstName');
    $data['lastName'] = $this->input->post('lastName');
    $data['totalCost'] = $this->input->post('totalCost');
    $data['hash']         = '';
    $hash_string = MERCHANT_KEY."|".$data['txnid']."|".$data['totalCost']."|"."productinfo|".$data['firstName']."|".$data['email']."|||||||||||".SALT;
    $data['hash'] = strtolower(hash('sha512', $hash_string));
    $data['action'] = PAYU_BASE_URL . '/_payment';   

    $category=$this->fetch->fetchcategories();
  $rid=$this->session->userdata('recruiter_id');
  $sessionCookie=get_cookie('sessionCookieRecruiter');
    if(!empty($ridd) && empty($sessionCookie))
    {
      $rid=$ridd;
    }
    elseif (!empty($sessionCookie) && empty($ridd)) {
      $rid=$sessionCookie;
    }
    elseif (!empty($sessionCookie) && !empty($ridd)) {
      $rid=$ridd;
    }

    $fetch=$this->fetch->fetchemployer($rid);
    $data['categories']=$category;
    $data['result']=$fetch;
    $this->load->view('pum',$data);
  
  }

    public function payusubmitemployee()
        {

    $data['txnid'] = substr(hash('sha256', mt_rand() . microtime()), 0, 20);


    $data['email'] = base64_decode(base64_decode($this->input->post('email')));
    $data['uid'] = $this->input->post('uid');
    $this->session->set_userdata('pyuemail',$this->input->post('email'));
    $data['mobile'] = base64_decode(base64_decode($this->input->post('mobile')));
    $data['firstName'] = $this->input->post('firstName');
    $data['lastName'] = $this->input->post('lastName');
    $data['totalCost'] = $this->input->post('totalCost');
    $data['hash']         = '';
    $hash_string = MERCHANT_KEY."|".$data['txnid']."|".$data['totalCost']."|"."productinfo|".$data['firstName']."|".$data['email']."|||||||||||".SALT;
    $data['hash'] = strtolower(hash('sha512', $hash_string));
    $data['action'] = PAYU_BASE_URL . '/_payment';     

    

    $this->load->view('pumemployee',$data);

    }


  public function order_success() {
       
   /* $emid=$this->session->userdata('employe_id');
    $rid=$this->session->userdata('recruiter_id');
    echo 'status='.$status = $this->input->post("status");
    echo 'fname='.$firstname = $this->input->post("firstname");
    echo 'amount='.$amount = $this->input->post("amount")*2;
    echo 'txnid='.$txnid = $this->input->post("txnid");
    echo 'hash='.$posted_hash = $this->input->post("hash");
    echo 'key='.$key = $this->input->post("key");
    echo 'productinfo='.$productinfo = $this->input->post("productinfo");
    echo 'email='.$email = $this->input->post("email");
    echo 'pyuemail='. $emmail=$this->session->userdata('pyuemail');
    $result=$this->fetch->fetchpayu($emmail);
    $salt = "793ByyK5";
    if(!empty($emid))
    {
        $session=$emid;
    }
    elseif (!empty($rid)) {
        $session=$rid;
    }

    $daata=array('uid'=>$session,
        'amount'=>$amount,
        'txnid'=>$txnid,
        'posted_hash'=>$posted_hash,
        'key'=>$key,
        'productinfo'=>$productinfo,
         'status'=>$status
       );

    if ($this->input->post("additionalCharges")) {
        $additionalCharges = $this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    } else {

        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    }
    $hash = hash("sha512", $retHashSeq);
    $dataa=array('balance'=>$amount);
    if ($hash != $posted_hash) {
         $data['msg'] = "Invalid Transaction. Please try again";
             $this->load->view('pum_common', array('data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
         /*if(!empty($emid) && empty($rid))
     {
        $data['msg'] = "Invalid Transaction. Please try again";
        $this->insert->employeepayment($daata);
        $this->load->view('pum_common', $data);
    }

elseif (!empty($rid) && empty($emid)) {
            $data['msg'] = "Invalid Transaction. Please try again";
            $this->insert->recruiterpayment($daata);
             $this->load->view('pum_common', $data);
        }

        else
        {
            $data['msg'] = "Invalid Transaction. Please try again";
             $this->load->view('pum_common', $data);
        }*/
         //  $this->insert->employeepayment($daata);
         //$data['msg'] = "Invalid Transaction. Please try again";
    /*} else {

        $data['msg'] = "<h3>Thank You. Your order status is " . $status . ".</h3>";
        $data['msg'] .= "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
        $data['msg'] .= "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
     
            if(!empty($emid) && empty($rid))
     {
        $data['msg'] = "<h3>Thank You. Your order status is " . $status . ".</h3>";
        $data['msg'] .= "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
        $data['msg'] .= "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
        $this->insert->employeepayment($daata);
          $this->update->employeebalance($dataa);
        $this->load->view('pum_common', array('data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
    }
    elseif (!empty($rid) && empty($emid)) 
    {
            $data['msg'] = "<h3>Thank You. Your order status is " . $status . ".</h3>";
            $data['msg'] .= "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
            $data['msg'] .= "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
            $this->insert->recruiterpayment($daata);
            $this->update->recruiterbalance($dataa);
            $this->load->view('pum_common', array('data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
        }

                 //$this->insert->recruiterpayment($daata);
          

        // $this->load->view('pum_common', $data);
       
    }*/
  
   // $this->update->recruiterbalance($dataa);
     $status=$_POST["status"];
   $uid=$_POST["uid"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="793ByyK5";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
  else {    

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
     $hash = hash("sha512", $retHashSeq);
     
       if ($hash != $posted_hash) {
         echo "Invalid Transaction. Please try again";
       }
     else {
        $daata=array('epayment_uid'=>$firstname,'epayment_amount'=>$amount,'epayment_txnid'=>$txnid,'epayment_status'=>'success');
         $array=array('uid'=>$firstname,'txnid'=>$txnid,'status'=>'success','amount'=>$amount,'category'=>'employee');
        
        $this->insert->employeepayment($daata);
        $uidd=$this->session->userdata('employe_id');

        $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($uiddd) && empty($sessionCookieEmployee))
    {
      $uidd=$employeidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($uiddd)) 
    {
      $uidd=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($uiddd)) 
    {
      $uidd=$employeidd;
    }

           $this->update->updateEmployeePayment($uid,$amount);

        $data=$this->fetch->fetchemployeprofilee($uidd);
        $this->insert->paymenthistory($array);
        $category=$this->fetch->fetchcategory();
    $this->load->view('successorderemployee',array('category'=>$category,'data'=>$data,'status'=>$status,'uid'=>$firstname,'txnid'=>$txnid,'amount'=>$amount,'email'=>$email));
      
               
         /* echo "<h3>Thank You. Your order status is ". $status .".</h3>";
           echo "<h3>Thank You. Your uid is ". $firstname .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . $email.". Your order will soon be shipped.</h4>";
           */
       }  
}


public function order_success_recruiter() {
       
 
   // $this->update->recruiterbalance($dataa);
     $status=$_POST["status"];
   $uid=$_POST["uid"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="793ByyK5";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
  else {    

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
     $hash = hash("sha512", $retHashSeq);
     
       if ($hash != $posted_hash) 
       {
         echo "Invalid Transaction. Please try again";
       }
     else
      {
        $daata=array('rpayment_uid'=>$firstname,'rpayment_amount'=>$amount,'rpayment_txnid'=>$txnid,'rpayment_status'=>'success');
        $array=array('uid'=>$firstname,'txnid'=>$txnid,'status'=>'success','amount'=>$amount,'category'=>'recruiter');
        $this->insert->recruiterpayment($daata);
        $this->update->updateRecruiterPayment($uid,$amount);
        $this->insert->paymenthistory($array);
        $categories=$this->fetch->fetchcategories();
        $data=$this->fetch->fetchrecruiterprofile();
      $this->load->view('successorderrecruiter',array('data'=>$data,'categories'=>$categories,'status'=>$status,'uid'=>$firstname,'txnid'=>$txnid,'amount'=>$amount,'email'=>$email));

               
         /* echo "<h3>Thank You. Your order status is ". $status .".</h3>";
           echo "<h3>Thank You. Your uid is ". $firstname .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . $email.". Your order will soon be shipped.</h4>";
          */ 

       }  
}


public function load()
{
    $this->load->view('pum_common');
}

public function order_fail() {
     
     $ridd=$this->session->userdata('recruiter_id');

     
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

    $session=$rid;

     $rcategories=$this->fetch->fetchcategories();
      
   
    $rdata=$this->fetch->fetchrecruiterprofile();
    $status = $this->input->post("status");
    $firstname = $this->input->post("firstname");
    $amount = $this->input->post("amount");
    $txnid = $this->input->post("txnid");
    $posted_hash = $this->input->post("hash");
    $key = $this->input->post("key");
    $productinfo = $this->input->post("productinfo");
    $email = $this->input->post("email");
    $emmail=$this->session->userdata('pyuemail');
    $result=$this->fetch->fetchpayu($emmail);
     $salt = "793ByyK5";
   
        $daata=array('rpayment_uid'=>$session,
        'rpayment_amount'=>$amount,
        'rpayment_txnid'=>$txnid,
        'rpayment_posted_hash'=>$posted_hash,
        'rpayment_key'=>$key,
        'rpayment_productinfo'=>$productinfo,
        'rpayment_status'=>$status);

    if($this->input->post("additionalCharges")) {
        $additionalCharges = $this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    } else {
        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    }
    $hash = hash("sha512", $retHashSeq);
    if ($hash != $posted_hash) {

        $data['msg'] ="<div class='row'>";
        $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
        $data['msg'] .= "<h1>Invalid Transaction. Please try again</h1>";
        $data['msg'] .="</div>";
             $data['msg'] .="</div>";
       
          $this->load->view('pum_common',array('rdata'=>$rdata,'categories'=>$rcategories,'data'=>$data,'result'=>$result));
        header( "refresh:6;url=https://get-job.online" );
    } 
    else {


           
       if($this->insert->recruiterpayment($daata))
          {

            $array=array('uid'=>$session,'txnid'=>$txnid,'status'=>'failed','amount'=>$amount,'category'=>'recruiter');
       // $this->insert->recruiterpayment($daata);
             $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
 
            $data['msg'] .= "<h3>Transaction Incomplete</h3>";
            $data['msg'] .= "<h4>Your transaction id " . $txnid . " has failed. You can try completing the payment by clicking the link below.</h4></br><a href='https://get-job.online/RecruiterAddbalance' class='alert-link'>Try Again</a>";
            $data['msg'] .="</div>";
             $data['msg'] .="</div>";
            $this->load->view('pum_common',array('rdata'=>$rdata,'categories'=>$rcategories,'data'=>$data,'result'=>$result));
          }
   
    
    
   /* else
    {

            $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
           $data['msg'] .= "<h3>Transaction Incomplete</h3>";
            $data['msg'] .= "<h4>Your transaction id " . $txnid . " has failed. You can try completing the payment by clicking the link below.</h4></br><a href='https://get-job.online/recruiter/addbalance' class='alert-link'>Try Again</a>";
              $data['msg'] .="</div>";
              $data['msg'] .="</div>";
            $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
    }*/
       
    }

    header("Refresh: 4; url=\"https://get-job.online/RecruiterAddBalance\"");

    
}

/*public function order_fail() {
     $emidd=$this->session->userdata('employe_id');
     $ridd=$this->session->userdata('recruiter_id');

     $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($emidd) && empty($sessionCookieEmployee))
    {
      $emid=$emidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($emidd)) 
    {
      $emid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($emidd)) 
    {
      $emid=$emidd;
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
      $rrid=$ridd;
    }



     $rcategories=$this->fetch->fetchcategories();
      if(empty($emid) && !empty($rid))
    {
       $session=$rid;
    }
    elseif (empty($rid) && !empty($emid)) {
        $session=$emid;
    }
    $rdata=$this->fetch->fetchrecruiterprofile();
    $status = $this->input->post("status");
    $firstname = $this->input->post("firstname");
    $amount = $this->input->post("amount");
    $txnid = $this->input->post("txnid");
    $posted_hash = $this->input->post("hash");
    $key = $this->input->post("key");
    $productinfo = $this->input->post("productinfo");
    $email = $this->input->post("email");
    $emmail=$this->session->userdata('pyuemail');
    $result=$this->fetch->fetchpayu($emmail);
     $salt = "793ByyK5";
   
        $daata=array('rpayment_uid'=>$session,
        'rpayment_amount'=>$amount,
        'rpayment_txnid'=>$txnid,
        'rpayment_posted_hash'=>$posted_hash,
        'rpayment_key'=>$key,
        'rpayment_productinfo'=>$productinfo,
        'rpayment_status'=>$status);

    if($this->input->post("additionalCharges")) {
        $additionalCharges = $this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    } else {
        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    }
    $hash = hash("sha512", $retHashSeq);
    if ($hash != $posted_hash) {

        $data['msg'] ="<div class='row'>";
        $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
        $data['msg'] .= "<h1>Invalid Transaction. Please try again</h1>";
        $data['msg'] .="</div>";
             $data['msg'] .="</div>";
       
          $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
        header( "refresh:6;url=https://get-job.online" );
    } 
    else {


            if(empty($emid) && !empty($rid))
    {
       if($this->insert->recruiterpayment($daata))
          {

            $array=array('uid'=>$session,'txnid'=>$txnid,'status'=>'failed','amount'=>$amount,'category'=>'recruiter');
       // $this->insert->recruiterpayment($daata);
             $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
 
            $data['msg'] .= "<h3>Transaction Incomplete</h3>";
            $data['msg'] .= "<h4>Your transaction id " . $txnid . " has failed. You can try completing the payment by clicking the link below.</h4></br><a href='https://get-job.online/recruiter/addbalance' class='alert-link'>Try Again</a>";
            $data['msg'] .="</div>";
             $data['msg'] .="</div>";
            $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
          }
    }
    
    elseif (empty($rid) && !empty($emid)) 
    {
          if($this->insert->employeepayment($daata))
          {
              $array=array('uid'=>$session,'txnid'=>$txnid,'status'=>'failed','amount'=>$amount,'category'=>'recruiter');
        //$this->insert->recruiterpayment($daata);

              $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
            $data['msg'] = "<h3>Your order status is " . $status . ".</h3>";
            $data['msg'] .= "<h4>Your transaction id for this transaction is " . $txnid . ". You may try making the payment by clicking the link below.</h4></br><a href='http://www.get-job.online/recruiter/addbalance'>Try Again</a>";

              $data['msg'] ="</div>";
             $data['msg'] .="</div>";
           
            $this->load->view('pum_common',array('data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
          }
    }
    else
    {

            $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
           $data['msg'] .= "<h3>Transaction Incomplete</h3>";
            $data['msg'] .= "<h4>Your transaction id " . $txnid . " has failed. You can try completing the payment by clicking the link below.</h4></br><a href='https://get-job.online/recruiter/addbalance' class='alert-link'>Try Again</a>";
              $data['msg'] .="</div>";
              $data['msg'] .="</div>";
            $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
    }
       
    }
    
}*/

public function order_fail_employee()
{

  $country=get_cookie('countryCookie');
  $emidd=$this->session->userdata('employe_id');
  $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($emidd) && empty($sessionCookieEmployee))
    {
      $emid=$emidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($emidd)) 
    {
      $emid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($emidd)) 
    {
      $emid=$emidd;
    }
    $session=$emid;
    $uid=$emid;
    //$edata=$this->fetch->fetchemployeprofilee($uidd);
    $status = $this->input->post("status");
    $firstname = $this->input->post("firstname");
    $amount = $this->input->post("amount");
    $txnid = $this->input->post("txnid");
    $posted_hash = $this->input->post("hash");
    $key = $this->input->post("key");
    $productinfo = $this->input->post("productinfo");
    $email = $this->input->post("email");
    $emmail=$this->session->userdata('pyuemail');
    $result=$this->fetch->fetchpayu($emmail);
     $salt = "793ByyK5";

      $category=$this->search->category($country);

    $edata=$this->fetch->fetchemployeedit($uid);

      // $rdata=$this->fetch->fetchrecruiterprofile();
        $daata=array('epayment_uid'=>$session,
        'epayment_amount'=>$amount,
        'epayment_txnid'=>$txnid,
        'epayment_posted_hash'=>$posted_hash,
        'epayment_key'=>$key,
        'epayment_productinfo'=>$productinfo,
        'epayment_status'=>$status);


         if ($this->input->post("additionalCharges")) {
        $additionalCharges = $this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    } else {
        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    }
    $hash = hash("sha512", $retHashSeq);
    if ($hash != $posted_hash) {

           $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";

         $data['msg'] .= "<h4>Invalid Transaction</h4></br><a href='https://get-job.online/EmployeeAddBalance' class='alert-link'>Try Again</a>";
            $data['msg'] .="</div>";
              $data['msg'] .="</div>";

          $this->load->view('pum_common',array('edata'=>$edata,'category'=>$category,'data'=>$data,'result'=>$result));
    } 
    else {

            
       if($this->insert->employeepayment($daata))
          {
             $array=array('uid'=>$session,'txnid'=>$txnid,'status'=>'failed','amount'=>$amount,'category'=>'employee');
      //  $this->insert->recruiterpayment($daata);

               $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
            $data['msg'] .= "<h3>Transaction Incomplete</h3>";
            $data['msg'] .= "<h4>Your transaction id " . $txnid . " has failed. You can try completing the payment by clicking the link below.</h4></br><a href='https://get-job.online/EmployeeAddBalance' class='alert-link'>Try Again</a>";
            $data['msg'] .="</div>";
              $data['msg'] .="</div>";
            $this->load->view('pum_common',array('edata'=>$edata,'category'=>$category,'data'=>$data,'result'=>$result));
          }
    
    
    
    else
    {
             $data['msg'] ="<div class='row'>";
             $data['msg'] .="<div class='col-md-offset-3 col-md-6 alert alert-danger'>";
            $data['msg'] .= "<h3>Transaction Incomplete</h3>";
            $data['msg'] .= "<h4>Your transaction id " . $txnid . "has failed. You can try completing the payment by clicking the link below.</h4></br><a href='https://get-job.online/EmployeeAddBalance'>Try Again</a>";
            $data['msg'] .="</div>";
            $data['msg'] .="</div>";

            $this->load->view('pum_common',array('edata'=>$edata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
    }
       
    }


    header("Refresh: 4; url=\"https://get-job.online/EmployeeAddBalance\"");

}

/*public function order_fail_employee() {
     $emidd=$this->session->userdata('employe_id');
     $ridd=$this->session->userdata('recruiter_id');

     $sessionCookieEmployee=get_cookie('sessionCookieEmployee');

    if(!empty($emidd) && empty($sessionCookieEmployee))
    {
      $emid=$emidd;
    }
    elseif (!empty($sessionCookieEmployee) && empty($emidd)) 
    {
      $emid=$sessionCookieEmployee;
    }
    elseif (!empty($sessionCookieEmployee) && !empty($emidd)) 
    {
      $emid=$emidd;
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


     $rcategories=$this->fetch->fetchcategories();
      if(empty($emid) && !empty($rid))
    {
       $session=$rid;
    }
    elseif (empty($rid) && !empty($emid)) {
        $session=$emid;
    }
    $rdata=$this->fetch->fetchrecruiterprofile();
    $status = $this->input->post("status");
    $firstname = $this->input->post("firstname");
    $amount = $this->input->post("amount");
    $txnid = $this->input->post("txnid");
    $posted_hash = $this->input->post("hash");
    $key = $this->input->post("key");
    $productinfo = $this->input->post("productinfo");
    $email = $this->input->post("email");
    $emmail=$this->session->userdata('pyuemail');
    $result=$this->fetch->fetchpayu($emmail);
     $salt = "793ByyK5";
   
        $daata=array('epayment_uid'=>$session,
        'epayment_amount'=>$amount,
        'epayment_txnid'=>$txnid,
        'epayment_posted_hash'=>$posted_hash,
        'epayment_key'=>$key,
        'epayment_productinfo'=>$productinfo,
        'epayment_status'=>$status);

    if ($this->input->post("additionalCharges")) {
        $additionalCharges = $this->input->post("additionalCharges");
        $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    } else {
        $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
    }
    $hash = hash("sha512", $retHashSeq);
    if ($hash != $posted_hash) {

        $data['msg'] = "<h1>Invalid Transaction. Please try again</h1>";
          $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
    } 
    else {


            if(empty($emid) && !empty($rid))
    {
       if($this->insert->recruiterpayment($daata))
          {
             $array=array('uid'=>$session,'txnid'=>$txnid,'status'=>'failed','amount'=>$amount,'category'=>'employee');
      //  $this->insert->recruiterpayment($daata);
            $data['msg'] = "<h3>Your order status is " . $status . ".</h3>";
            $data['msg'] .= "<h4>Your transaction id for this transaction is " . $txnid . ". You may try making the payment by clicking the link below.</h4></br><a href='http://www.get-job.online/welcome/dashboard'>Try Again</a>";
            $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
          }
    }
    
    elseif (empty($rid) && !empty($emid)) 
    {
          if($this->insert->employeepayment($daata))
          {
              $array=array('uid'=>$session,'txnid'=>$txnid,'status'=>'failed','amount'=>$amount,'category'=>'employee');
       // $this->insert->recruiterpayment($daata);
            $data['msg'] = "<h3>Your order status is " . $status . ".</h3>";
            $data['msg'] .= "<h4>Your transaction id for this transaction is " . $txnid . ". You may try making the payment by clicking the link below.</h4></br><a href='http://www.get-job.online/welcome/dashboard'>Try Again</a>";
            $this->load->view('pum_common',array('data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
          }
    }
    else
    {
            $data['msg'] = "<h3>Your order status is " . $status . ".</h3>";
            $data['msg'] .= "<h4>Your transaction id for this transaction is " . $txnid . ". You may try making the payment by clicking the link below.</h4></br><a href='http://www.get-job.online/welcome/dashboard'>Try Again</a>";
            $this->load->view('pum_common',array('rdata'=>$rdata,'rcategory'=>$rcategories,'data'=>$data,'rid'=>$rid,'emid'=>$emid,'result'=>$result));
    }
       
    }
    
}
*/

    public function Paymentdecison()
    {
        $this->load->view('paymentdecison');
    }
}
?>