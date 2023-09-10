<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prescription extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('department_model');
                $this->load->model('prescription_model');

    }


    function add_prescription ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->prescription_model->insertIntoIntoPrescriptionTable();
             $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
             redirect(base_url() . 'prescription/list_prescription', 'refresh');
         }

         if($param1 == 'update'){

            $this->prescription_model->updatePrescriptionTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
             redirect(base_url() . 'prescription/list_prescription', 'refresh');
         }

         if($param1 == 'delete'){

            $this->prescription_model->deleteFromPresciptionTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
             redirect(base_url() . 'prescription/list_prescription', 'refresh');
         }

    
        $page_data['page_name']  = 'add_prescription';
        $page_data['page_title'] =  get_phrase('Create Prescription');
        $this->load->view('backend/index', $page_data);
    }

    function list_prescription ($param1 = null, $param2 = null, $param3 = null){
       
       
        $page_data['page_name']  = 'list_prescription';
        $page_data['page_title'] =  get_phrase('List Prescription');
        $this->load->view('backend/index', $page_data);
    }


    function view_prescription($prescription_id){

        $page_data['select_prescription_by_id']  = $this->prescription_model->select_prescription_by_id($prescription_id);
        $page_data['page_name']  = 'view_prescription';
        $page_data['page_title'] =  get_phrase('Print Prescription');
        $this->load->view('backend/index', $page_data);
    }

    function edit_prescription($prescription_id){

        $page_data['select_prescription_by_id']  = $this->prescription_model->select_prescription_by_id($prescription_id);
        
        $page_data['prescription_id'] = $prescription_id;
        $page_data['page_name']  = 'edit_prescription';
        $page_data['page_title'] =  get_phrase('Edit Prescription');
        $this->load->view('backend/index', $page_data);
    }

    function get_doctor_patient_edit ($department_id, $prescription_id){

        $page_data['department_id'] = $department_id;
        $page_data['prescription_id'] = $prescription_id;
        $this->load->view('backend/admin/display_doc_patient_prescrip', $page_data);
    }



}