<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajaxcontrol extends CI_Controller 
{

public $data;
function __construct()
    {
    	 parent::__construct();
    	  $this->load->model('insert');
    	   $this->load->model('update');
    }

// ajax for index pool voting

public function ajax()
 {
 	
 	 $answer=$this->input->post('answer');
 	 $qid=$this->input->post('qid');
 	 $title=$this->input->post('title');
 	$data= array('answer' => $answer, 'qid'=>$qid, 'title'=>$title);
 	$insert=$this->insert->insertvoting($data);
 	if($insert)
  {
    return "Success";
  }
 }

 public function ajaxfavourite()
 {
 	
 	 $jid=$this->input->post('jid');
	$update=array('submitjob_favourite'=>'1');
	$insert=$this->update->favourite($update,$jid);
 	if($insert)
  {
  return "Success";
  }
  
 }


//ajax for apply for a post
 public function applyajax()
 {
 	$result=$this->insert->decrementemployerbalance();
 	//$uid=$this->uri->segment(3);
 	/*$result=$this->fetch->checkbalanceapply();
 	if($result==null)
 	{
 		
 			//$this->load->view('payumoneyform');
 	}
 	else
 	{
 		
		
 		
 	
 	}*/
 
 }
}
?>