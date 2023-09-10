<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Blood_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    /******* Select all from blood table  ****** */
    function select_all_bloods(){
        $query = $this->db->get('blood');
            return $query->result_array();
    }
    /**** end here */


    function createNewbloodInformation(){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['quantity'] = html_escape($this->input->post('quantity'));
        $page_data['status'] = html_escape($this->input->post('status'));
        $this->db->insert('blood', $page_data);

    }

    function updatebloodInformation($param2){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['quantity'] = html_escape($this->input->post('quantity'));
        $page_data['status'] = html_escape($this->input->post('status'));

        $this->db->where('blood_id', $param2);
        $this->db->update('blood', $page_data);

    }

    function deletebloodInformation($param2){
        $this->db->where('blood_id', $param2);
        $this->db->delete('blood');

    }

}