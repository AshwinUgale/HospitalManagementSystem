<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Department_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    /******* Select all from department table  ****** */
    function select_all_departments(){
        $query = $this->db->get('department');
            return $query->result_array();
    }
    /**** end here */


    function createNewDepartmentInformation(){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['description'] = html_escape($this->input->post('description'));
        $this->db->insert('department', $page_data);

    }

    function updateDepartmentInformation($param2){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->where('department_id', $param2);
        $this->db->update('department', $page_data);

    }

    function deleteDepartmentInformation($param2){
        $this->db->where('department_id', $param2);
        $this->db->delete('department');

    }

}