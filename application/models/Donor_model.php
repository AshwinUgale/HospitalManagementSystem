<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Donor_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    /******* Select all from donor table  ****** */
    function select_all_blood_donors(){
        $query = $this->db->get('donor');
            return $query->result_array();
    }
    /**** end here */


    function createNewBloodDonorInformation(){
        $page_data['name']      = html_escape($this->input->post('name'));
        $page_data['sex']       = html_escape($this->input->post('sex'));
        $page_data['age']       = html_escape($this->input->post('age'));
        $page_data['phone']     = html_escape($this->input->post('phone'));
        $page_data['address']   = html_escape($this->input->post('address'));
        $page_data['email']     = html_escape($this->input->post('email'));
        $page_data['blood_group']   = html_escape($this->input->post('blood_group'));
        $page_data['last_donation'] = html_escape($this->input->post('last_donation'));
        $this->db->insert('donor', $page_data);

    }

    function updateBloodDonorInformation($param2){
        $page_data['name']      = html_escape($this->input->post('name'));
        $page_data['sex']       = html_escape($this->input->post('sex'));
        $page_data['age']       = html_escape($this->input->post('age'));
        $page_data['phone']     = html_escape($this->input->post('phone'));
        $page_data['address']   = html_escape($this->input->post('address'));
        $page_data['email']     = html_escape($this->input->post('email'));
        $page_data['blood_group']   = html_escape($this->input->post('blood_group'));
        $page_data['last_donation'] = html_escape($this->input->post('last_donation'));

        $this->db->where('donor_id', $param2);
        $this->db->update('donor', $page_data);

    }

    function deleteBloodDonorInformation($param2){
        $this->db->where('donor_id', $param2);
        $this->db->delete('donor');

    }

}