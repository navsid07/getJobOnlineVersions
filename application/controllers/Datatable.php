<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Datatable extends CI_Controller {  
      //functions  
      function index(){  
          $data["title"] = "Codeigniter Ajax CRUD with Data Tables and Bootstrap Modals";  
           $this->load->view('datatable_view', $data);
           //$this->load->model('datatable_model');
           ///$hello=$this->datatable_model->make_datatables();
           //print_r($hello);  
      }  
      public function get_records()
  {
    $this->load->library('Datatables');
     $this->datatables->select('employee_uid,employee_name')->from('employer_info');
     echo $this->datatables->generate();
  }
      
 }  
 ?>