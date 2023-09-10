<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Patient_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function select_patients(){

        $query = $this->db->get('patient')->result_array();
        return $query;
    }

    function get_patient_by_id($patient_id){
        $query = $this->db->get_where('patient', array('patient_id' => $patient_id))->result_array();
        return $query;
    }


        function createNewPatientInformation (){
            
            $page_data['idcard']            = html_escape($this->input->post('idcard'));
            $page_data['issue_at']          = html_escape($this->input->post('issue_at'));
            $page_data['issue_on']          = html_escape($this->input->post('issue_on'));
            $page_data['occupation']        = html_escape($this->input->post('occupation'));
            $page_data['mother_tongue']     = html_escape($this->input->post('mother_tongue'));
            $page_data['marital_status']    = html_escape($this->input->post('marital_status'));
            $page_data['religion']          = html_escape($this->input->post('religion'));
            $page_data['address']           = html_escape($this->input->post('address'));
            $page_data['city']              = html_escape($this->input->post('city'));
            $page_data['state']             = html_escape($this->input->post('state'));
            $page_data['nationality']       = html_escape($this->input->post('nationality'));
    
            $page_data['phone']             = html_escape($this->input->post('phone'));
            $page_data['mobile_no']         = html_escape($this->input->post('mobile_no'));
            $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
            $page_data['date_of_last_admission']    = html_escape($this->input->post('date_of_last_admission'));
            $page_data['diagnose']          = html_escape($this->input->post('diagnose'));
            $page_data['department_id']     = html_escape($this->input->post('department_id'));
            $page_data['discharge_condition']  = html_escape($this->input->post('discharge_condition'));
            $page_data['email']             = html_escape($this->input->post('email'));
            $page_data['password']          = sha1($this->input->post('password'));
    
            $page_data['file_name']         = $_FILES["file_name"]["name"];
    
            $check_email = $this->db->get_where('patient', array('email' => $page_data['email']))->row()->email;
            if($check_email != null){
    
              return false;
            }
            else{
    
                $this->db->insert('patient', $page_data);
                $patient_id = $this->db->insert_id();
                move_uploaded_file($_FILES['file_name']['tmp_name'], 'uploads/patient_image/' . $_FILES["file_name"]["name"]);
                // upload patient's file/document to nurse image folder
                move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/patient_image/' . $patient_id . '.jpg');
    
    
            }
        }


        function updatePatientInformation ($param2){

            $page_data['name']              = html_escape($this->input->post('name'));
            $page_data['sex']               = strtotime($this->input->post('sex'));
    
            $page_data['birth_date']        = html_escape($this->input->post('birth_date'));
            $page_data['age']               = html_escape($this->input->post('age'));
            $page_data['place_of_birth']    = html_escape($this->input->post('place_of_birth'));
            $page_data['idcard']            = html_escape($this->input->post('idcard'));
            $page_data['issue_at']          = html_escape($this->input->post('issue_at'));
            $page_data['issue_on']          = html_escape($this->input->post('issue_on'));
            $page_data['occupation']        = html_escape($this->input->post('occupation'));
            $page_data['mother_tongue']     = html_escape($this->input->post('mother_tongue'));
            $page_data['marital_status']    = html_escape($this->input->post('marital_status'));
            $page_data['religion']          = html_escape($this->input->post('religion'));
            $page_data['address']           = html_escape($this->input->post('address'));
            $page_data['city']              = html_escape($this->input->post('city'));
            $page_data['state']             = html_escape($this->input->post('state'));
            $page_data['nationality']       = html_escape($this->input->post('nationality'));
    
            $page_data['phone']             = html_escape($this->input->post('phone'));
            $page_data['mobile_no']         = html_escape($this->input->post('mobile_no'));
            $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
            $page_data['date_of_last_admission']    = html_escape($this->input->post('date_of_last_admission'));
            $page_data['diagnose']          = html_escape($this->input->post('diagnose'));
            $page_data['department_id']     = html_escape($this->input->post('department_id'));
            $page_data['discharge_condition']  = html_escape($this->input->post('discharge_condition'));
            $page_data['email']             = html_escape($this->input->post('email'));
    
    
                $this->db->where('patient_id', $param2);
                $this->db->update('patient', $page_data);
                move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/patient_image/' . $param2 . '.jpg');

        }



        function updatePatientInfoFunction(){

            $page_data['name']      =   html_escape($this->input->post('name'));
            $page_data['email']     =   html_escape($this->input->post('email'));
            $page_data['phone']     =   html_escape($this->input->post('phone'));
            $page_data['address']   =   html_escape($this->input->post('address'));
    
            $this->db->where('patient_id', $this->session->userdata('patient_id'));
            $this->db->update('patient', $page_data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/patient_image/' . $this->session->userdata('patient_id') . '.jpg');
        }
    
    
    
        function changePasswordFunction (){
    
            $page_data['password']       =   sha1($this->input->post('new_password'));
            $confirm_password            =   sha1($this->input->post('confirm_new_password'));
    
            if($page_data['password'] == $confirm_password){
                $this->db->where('patient_id', $this->session->userdata('patient_id'));
                $this->db->update('patient', $page_data);
    
            }
    
            else{
    
                $this->session->set_flashdata('error_message', get_phrase('Password Mismatch'));
                redirect(base_url() . 'patient/change_profile', 'refresh');
    
            }
        }



}