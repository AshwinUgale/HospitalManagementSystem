<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Prescription_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }


    function insertIntoIntoPrescriptionTable(){

        $page_data['prescription_code'] = $this->input->post('prescription_code');
        $page_data['name'] = $this->input->post('name');
        $page_data['department_id'] = $this->input->post('department_id');
        $page_data['patient_id'] = $this->input->post('patient_id');
        $page_data['doctor_id'] = $this->input->post('doctor_id');
        $page_data['weight'] = $this->input->post('weight');
        $page_data['height'] = $this->input->post('height');
        $page_data['visiting_fee'] = $this->input->post('visiting_fee');
        $page_data['blood_pressure'] = $this->input->post('blood_pressure');
        $page_data['case_history'] = $this->input->post('case_history');
        $page_data['prescription_type'] = $this->input->post('prescription_type');
        $page_data['date_created'] = strtotime(date('Y-m-d'));
        
        $prescription_entries = array();
        $diagnose = $this->input->post('entry_diagnose');
        $medicine_name = $this->input->post('entry_medicine_name');
        $medicine_type = $this->input->post('entry_medicine_type');
        $usage_prescription = $this->input->post('entry_prescription');
        $usage_days = $this->input->post('entry_days');
        $number_of_entries          = sizeof($diagnose);

        for ($i = 0; $i < $number_of_entries; $i++){

            if($diagnose[$i] != "" && $medicine_name[$i] != "" && $medicine_type[$i] != "" && $usage_prescription[$i] != "" && $usage_days[$i] != ""){
                $new_entry = array('diagnose' => $diagnose[$i], 'medicine_name' => $medicine_name[$i], 'medicine_type' => $medicine_type[$i], 'usage_prescription' => $usage_prescription[$i], 'usage_days' => $usage_days[$i]);
                array_push($prescription_entries, $new_entry);
            }
        
        }

        $page_data['prescription_entries'] = json_encode($prescription_entries);

        $this->db->insert('prescription', $page_data);

    }

    function updatePrescriptionTable($param2){
        $page_data['name'] = $this->input->post('name');
        $page_data['department_id'] = $this->input->post('department_id');
        $page_data['patient_id'] = $this->input->post('patient_id');
        $page_data['doctor_id'] = $this->input->post('doctor_id');
        $page_data['weight'] = $this->input->post('weight');
        $page_data['height'] = $this->input->post('height');
        $page_data['visiting_fee'] = $this->input->post('visiting_fee');
        $page_data['blood_pressure'] = $this->input->post('blood_pressure');
        $page_data['case_history'] = $this->input->post('case_history');
        $page_data['prescription_type'] = $this->input->post('prescription_type');
        $page_data['date_created'] = strtotime(date('Y-m-d'));
        
        $prescription_entries = array();
        $diagnose = $this->input->post('entry_diagnose');
        $medicine_name = $this->input->post('entry_medicine_name');
        $medicine_type = $this->input->post('entry_medicine_type');
        $usage_prescription = $this->input->post('entry_prescription');
        $usage_days = $this->input->post('entry_days');
        $number_of_entries          = sizeof($diagnose);

        for ($i = 0; $i < $number_of_entries; $i++){

            if($diagnose[$i] != "" && $medicine_name[$i] != "" && $medicine_type[$i] != "" && $usage_prescription[$i] != "" && $usage_days[$i] != ""){
                $new_entry = array('diagnose' => $diagnose[$i], 'medicine_name' => $medicine_name[$i], 'medicine_type' => $medicine_type[$i], 'usage_prescription' => $usage_prescription[$i], 'usage_days' => $usage_days[$i]);
                array_push($prescription_entries, $new_entry);
            }
        
        }

        $page_data['prescription_entries'] = json_encode($prescription_entries);

        $this->db->where('prescription_id', $param2);
        $this->db->update('prescription', $page_data);
        
    }

    function deleteFromPresciptionTable($param2){
        $this->db->where('prescription_id', $param2);
        $this->db->delete('prescription');
        
    }

    function select_prescription_by_id($prescription_id){
        return $this->db->get_where('prescription', array('prescription_id' => $prescription_id))->result_array();
    }


}