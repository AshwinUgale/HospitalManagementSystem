<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Department extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('department_model');
    }


    function manage_department($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->department_model->createNewDepartmentInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'department/manage_department', 'refresh');
        }

        if($param1 == 'update'){
            $this->department_model->updateDepartmentInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'department/manage_department', 'refresh');
        }

        if($param1 == 'delete'){
            $this->department_model->deleteDepartmentInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'department/manage_department', 'refresh');
        }

        $page_data['page_name']  = 'manage_department';
        $page_data['page_title'] =  get_phrase('Manage Department');
        $this->load->view('backend/index', $page_data);

    }



}