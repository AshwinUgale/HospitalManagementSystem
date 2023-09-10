<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bed extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('department_model');
                $this->load->model('bed_model');

    }


    function bed_ward ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->bed_model->insertIntoBedWardTable();
             $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
             redirect(base_url() . 'bed/bed_ward', 'refresh');
         }

         if($param1 == 'update'){

            $this->bed_model->updateBedWardInfo($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
             redirect(base_url() . 'bed/bed_ward', 'refresh');
         }

         if($param1 == 'delete'){

            $this->bed_model->DeleteFromBedWardTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
             redirect(base_url() . 'bed/bed_ward', 'refresh');
         }

    
        $page_data['page_name']  = 'bed_ward';
        $page_data['page_title'] =  get_phrase('Manage Bed Ward');
        $this->load->view('backend/index', $page_data);
    }

    
    

    function manage_bed ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

             $this->bed_model->insertIntoBedTable();
             $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
             redirect(base_url() . 'bed/manage_bed', 'refresh');
         }

         if($param1 == 'update'){

            $this->bed_model->updateBedInfo($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
             redirect(base_url() . 'bed/manage_bed', 'refresh');
         }

         if($param1 == 'delete'){

            $this->bed_model->DeleteFromBedTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
             redirect(base_url() . 'bed/manage_bed', 'refresh');
         }

    
        $page_data['page_name']  = 'manage_bed';
        $page_data['page_title'] =  get_phrase('Manage Bed');
        $this->load->view('backend/index', $page_data);
    }

    function get_department_bed_ward ($department_id){
        $bed_wards = $this->db->get_where('bed_ward', array('department_id' => $department_id))->result_array();
        foreach ($bed_wards as $key => $bed_ward){
            echo '<option value="'.$bed_ward['bed_ward_id'].'">'.$bed_ward['name'].'</option>';
        }
    }

    function assign_bed ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->bed_model->insertIntoAssignBedTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'bed/assign_bed', 'refresh');
        }

        if($param1 == 'update'){

           $this->bed_model->updateAssignBedTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'bed/assign_bed', 'refresh');
        }

        if($param1 == 'delete'){

           $this->bed_model->deleteAssignBedInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'bed/assign_bed', 'refresh');
        }

        $page_data['page_name']  = 'assign_bed';
        $page_data['page_title'] =  get_phrase('Assign Bed');
        $this->load->view('backend/index', $page_data);
    }

    function get_department_patient ($department_id){
        $select_patients = $this->db->get_where('patient', array('department_id' => $department_id))->result_array();
        foreach ($select_patients as $key => $patient){
            echo '<option value="'.$patient['patient_id'].'">'.$patient['name'].'</option>';
        }
    }


    function display_bed_brief_info ($bed_id){
        $select_beds = $this->db->get_where('bed', array('bed_id' => $bed_id))->result_array();
        foreach ($select_beds as $key => $bed){
        echo '<hr>';
        echo '"'.'<b>Bed Name:</b> '.$bed['name'].' <b>Bed Price:</b> '.$bed['bed_price'].' <b>Bed Size:</b> '.$bed['bed_size'].'"';
        }
    }







}