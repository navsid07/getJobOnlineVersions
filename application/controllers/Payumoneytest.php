<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payumoneytest extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');       
    }
 public function index(){
    $this->load->view('form1');
 }
 public function check(){
     
     // all values are required
    $amount =  $this->input->post('totalCost');
    $product_info = $this->input->post('productinfo');
    $firstname = $this->input->post('firstName');
    $lastname = $this->input->post('lastName');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
 	 $address = $this->input->post('address');
    
    //payumoney details
    
        $MERCHANT_KEY = "y9Uziz"; //change  merchant with yours
        $SALT = "793ByyK5";  //change salt with yours 

        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';
        
         $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $firstname . '|' . $lastname . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
         $hash = strtolower(hash('sha512', $hashstring));
         
       $success = base_url() . 'Status';  
        $fail = base_url() . 'Status';
        $cancel = base_url() . 'Status';
        
        
         $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,           
            'firstname' => $firstname,
             'lastname' => $lastname,
            'productinfo' => $product_info,
            'mailid' => $email,
            'phoneno' => $mobile,
            'address' => $address,
            'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel            
        );
        $this->load->view('confirmationpayu', $data);   
     }
   
}
?>