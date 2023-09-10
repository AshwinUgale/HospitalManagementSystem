<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Shedule_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function insertIntoSheduleTable(){

        $page_data['department_id']          = html_escape($this->input->post('department_id'));
        $page_data['doctor_id']              = html_escape($this->input->post('doctor_id'));
        $page_data['avail_day']              = strtotime($this->input->post('avail_day'));
        $page_data['start_time']             = html_escape($this->input->post('start_time'));
        $page_data['end_time']               = html_escape($this->input->post('end_time'));
        $page_data['per_patient_time']       = html_escape($this->input->post('per_patient_time'));
        $page_data['status']                 = html_escape($this->input->post('status'));

        $this->db->insert('shedule', $page_data);

    }

    function updateSheduleTable ($param2){
        $page_data['department_id']     = html_escape($this->input->post('department_id'));
        $page_data['doctor_id']         = html_escape($this->input->post('doctor_id'));
        $page_data['avail_day']         = strtotime($this->input->post('avail_day'));
        $page_data['start_time']        = html_escape($this->input->post('start_time'));
        $page_data['end_time']          = html_escape($this->input->post('end_time'));
        $page_data['per_patient_time']  = html_escape($this->input->post('per_patient_time'));
        $page_data['status']            = html_escape($this->input->post('status'));

        $this->db->where('shedule_id', $param2);
        $this->db->update('shedule', $page_data);

    }

    function deleteSheduleTable ($param2){

        $this->db->where('shedule_id', $param2);
        $this->db->delete('shedule');
    }


    function select_shedule(){
        $query = $this->db->get('shedule')->result_array();
        return $query;
    }

    function get_shedule_by_id($shedule_id){
        $query = $this->db->get_where('shedule', array('shedule_id' => $shedule_id))->result_array();
        return $query;
    }




}