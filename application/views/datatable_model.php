<?php

class Datatable_model extends CI_Model
{
	var $table = "employer_info";
	var $select_column = array("employee_name","employee_city","employee_state","employee_country");
	var $order_column = ("employee_uid","asc");

	function make_query()
	{
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if(isset($_POST["search"]["value"]))
		{
			$this->db->like("employee_name", $_POST["search"]["value"]);
		}
		if(isset($_POST["order"]))
		{
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']
				]], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by("employee_uid","DESC");

		}

	}

	function make_datatables()
	{
		$this->make_query();
		if($_POST["length"] != -1)
		{
			$this->db->limit($_POST["length"],$_POST["start"]);
		}
		$query = $this->db->get();
		return $query->result();
	}

	 function get_filtered_data()
	 {
	 	$this->make_query();
	 	$query = $this->db->get;
		return $query->num_rows();
	 }
	  function get_all_data()
	  {
	  	$this->db->select("*")
	  	$this->db->from($this->table);
	  	return $this->db->count_all_results();
	  }
}
?>