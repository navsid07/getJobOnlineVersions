<?php
defined('BASEPATH') OR exit('No DIrect script access allowed');

class Mcharttest extends CI_Controller
{
	function __construct()

    {
        // this is your constructor

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mcharts');
         $this->load->helper('string'); 

    }
	public function index()
	{
		
		$this->load->view('mchartIndex');
	}


	public function data()
	{
		 header('Access-Control-Allow-Origin: *');
         header('Access-Control-Allow-Credentials: true');
		
		$data = $this->Mcharts->get_all_fruits(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->fruits_name", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->quantity, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 




        //second testing file
        public function index2()
        {
        	 header('Access-Control-Allow-Origin: *');
         header('Access-Control-Allow-Credentials: true');
        	$this->load->view('mchartIndex1');
        } 

        public function data2()
        {
        	 header('Access-Control-Allow-Origin: *');
         header('Access-Control-Allow-Credentials: true');
        	echo json_encode($this->Mcharts->findAll());
        }



        //third testing file
        public function index3()
        {
        	header('Access-Control-Allow-Origin: *');
         	header('Access-Control-Allow-Credentials: true');
         	$data=$this->Mcharts->mcharts3();
        	$this->load->view('mchartIndex3',['data'=>$data]);
        }


	}

?>