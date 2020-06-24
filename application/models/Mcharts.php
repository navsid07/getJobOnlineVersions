<?php
defined('BASEPATH') OR exit('No DIrect script access allowed');

class Mcharts extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}


    //get fruts data 
    public function get_all_fruits() 
    { 
        return $this->db->get('mcharts')->result(); 
    } 



     public function findAll() 
    { 
        return $this->db->get('mcharts2')->result(); 
    } 


    public function mcharts3()
    {
        $result=$this->db->get('mcharts3')->result();
        return json_decode(json_encode($result),TRUE);
    }

    public function monthlychart()
    {
        $result=$this->db->get('mcharts2')->result();
        return json_decode(json_encode($result),TRUE);
    }
}
?>