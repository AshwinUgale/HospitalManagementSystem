<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();
    }

    function userLoginFunction (){


        $email = $this->input->post('email');			
        $password = $this->input->post('password');	
        $credential = array('email' => $email, 'password' => sha1($password));	
  
        $query = $this->db->get_where('admin', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'admin');
            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('login_user_id', $row->admin_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'admin/dashboard', 'refresh');
           
        }

        $query = $this->db->get_where('accountant', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'accountant');
            $this->session->set_userdata('accountant_login', '1');
            $this->session->set_userdata('accountant_id', $row->accountant_id);
            $this->session->set_userdata('login_user_id', $row->accountant_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'accountant/dashboard', 'refresh');
            
           
        }

        $query = $this->db->get_where('doctor', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'doctor');
            $this->session->set_userdata('doctor_login', '1');
            $this->session->set_userdata('doctor_id', $row->doctor_id);
            $this->session->set_userdata('login_user_id', $row->doctor_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'doctor/dashboard', 'refresh');
           
        }

        $query = $this->db->get_where('nurse', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'nurse');
            $this->session->set_userdata('nurse_login', '1');
            $this->session->set_userdata('nurse_id', $row->nurse_id);
            $this->session->set_userdata('login_user_id', $row->nurse_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'nurse/dashboard', 'refresh');
           
        }

        $query = $this->db->get_where('patient', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'patient');
            $this->session->set_userdata('patient_login', '1');
            $this->session->set_userdata('patient_id', $row->patient_id);
            $this->session->set_userdata('login_user_id', $row->patient_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'patient/dashboard', 'refresh');
           
        }

        $query = $this->db->get_where('laboratorist', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'laboratorist');
            $this->session->set_userdata('laboratorist_login', '1');
            $this->session->set_userdata('laboratorist_id', $row->laboratorist_id);
            $this->session->set_userdata('login_user_id', $row->laboratorist_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'laboratorist/dashboard', 'refresh');
           
        }

        $query = $this->db->get_where('phamarcist', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'phamarcist');
            $this->session->set_userdata('phamarcist_login', '1');
            $this->session->set_userdata('phamarcist_id', $row->phamarcist_id);
            $this->session->set_userdata('login_user_id', $row->phamarcist_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'phamarcist/dashboard', 'refresh');
           
        }

        $query = $this->db->get_where('receptionist', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
  
            $this->session->set_userdata('login_type', 'receptionist');
            $this->session->set_userdata('receptionist_login', '1');
            $this->session->set_userdata('receptionist_id', $row->receptionist_id);
            $this->session->set_userdata('login_user_id', $row->receptionist_id);
            $this->session->set_userdata('name', $row->name);

            $this->session->set_flashdata('flash_message', $row->name.' '.get_phrase('Successfully Login'));
            redirect(base_url() . 'receptionist/dashboard', 'refresh');
           
        }

        elseif ($query->num_rows() == 0) {
        $this->session->set_flashdata('error_message', get_phrase('Invalid Login Detail'));
        redirect(base_url() . 'login', 'refresh');
        }



    }
	


	
	
}
