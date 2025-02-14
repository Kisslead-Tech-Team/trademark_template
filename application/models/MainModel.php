<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {


    // Constructor
    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    public function get_all_clients()
    {
        // Query the 'users' table where 'flag' is 1
        $query = $this->db->get_where('tbl_clients', array('status' => 1));
        // Return the result as an associative array
        return $query->result_array();
    }


    

    public function get_scroll()
    {
        // Query the 'users' table where 'flag' is 1
        $query = $this->db->get_where('scrollbar', array('status' => 1));
        // Return the result as an associative array
        return $query->result_array();
    }


	public function save_enquiry($data)  
		{  

				$this->db->insert("tbl_enquiries", $data); 
				if ($this->db->affected_rows() == '1')
			{
				$result["result"] = "success";
				return $result;
			}
			else
			{
				$result["result"] = "fail";
				return $result;
			}
		}


}