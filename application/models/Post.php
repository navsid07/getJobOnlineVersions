<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model{
 


    function __construct() {
        $this->tblName = 'testPagination';
    }
    
   public function GetRowcity($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->like("city", $keyword);
        return $this->db->get('cities')->result_array();
    }

    public function Getcity($keyword) {        
        $this->db->order_by('id', 'DESC');
         $this->db->where('location_type!=', 'STATE');
        $this->db->like("name", $keyword);
        return $this->db->get('geo_locations')->result_array();
    }


 public function GetRowState($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->where('location_type','STATE');
        $this->db->like("name", $keyword);
        return $this->db->get('geo_locations')->result_array();
    }
    public function GetRow($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->like("degree", $keyword);
        return $this->db->get('education')->result_array();
    }

    public function fetchEmails()
    {
        $q=$this->db->select('*')
        ->limit('50000')
        ->where('id>','950000')
        ->from('email1')
        ->get();
        return $q->result_array();
    }

    public function GetRowpincode($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->where('location_type!=','State');
        $this->db->like("pin", $keyword);
        return $this->db->get('geo_locations')->result_array();
    }
    public function insert($array)
    {
    	return $this->db->insert('sendmarketingmail',$array);
    }


 function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->tblName);
        
        //fetch data by conditions
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }



} 
