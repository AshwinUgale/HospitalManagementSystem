<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Appointment_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function insertIntoAppointmentTable(){

        $appointment_data['appointment_code'] = html_escape($this->input->post('appointment_code'));
        $appointment_data['department_id'] = html_escape($this->input->post('department_id'));
        $appointment_data['patient_id'] = html_escape($this->input->post('patient_id'));

        $appointment_data['doctor_id'] = html_escape($this->input->post('doctor_id'));
        $appointment_data['schedule_id'] = html_escape($this->input->post('schedule_id'));
        $appointment_data['diagnose'] = html_escape($this->input->post('diagnose'));
        $appointment_data['date_created'] = strtotime(date('Y-m-d'));
        $appointment_data['status'] = html_escape($this->input->post('status'));

        $this->db->insert('appointment', $appointment_data);
    }

    function updateAppointmentInformation($param2){

        $appointment_data['appointment_code'] = html_escape($this->input->post('appointment_code'));
        $appointment_data['department_id'] = html_escape($this->input->post('department_id'));
        $appointment_data['patient_id'] = html_escape($this->input->post('patient_id'));

        $appointment_data['doctor_id'] = html_escape($this->input->post('doctor_id'));
        $appointment_data['schedule_id'] = html_escape($this->input->post('schedule_id'));
        $appointment_data['diagnose'] = html_escape($this->input->post('diagnose'));
        $appointment_data['date_created'] = strtotime(date('Y-m-d'));
        $appointment_data['status'] = html_escape($this->input->post('status'));

        $this->db->where('appointment_id', $param2);
        $this->db->update('appointment', $appointment_data);
        
    }

    function deleteAppointmentInformation($param2){
        $this->db->where('appointment_id', $param2);
        $this->db->delete('appointment');
    }


    function select_all_appointment(){
        $query = $this->db->get('appointment')->result_array();
        return $query;
    }


    function get_appointment_by_id ($appointment_id){

        $query = $this->db->get_where('appointment', array('appointment_id' => $appointment_id))->result_array();
        return $query;
    }


}