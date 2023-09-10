<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Blood extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('blood_model');
    }


    function manage_blood($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->blood_model->createNewbloodInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'blood/manage_blood', 'refresh');
        }

        if($param1 == 'update'){
            $this->blood_model->updatebloodInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'blood/manage_blood', 'refresh');
        }

        if($param1 == 'delete'){
            $this->blood_model->deletebloodInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'blood/manage_blood', 'refresh');
        }

        $page_data['page_name']  = 'manage_blood';
        $page_data['page_title'] =  get_phrase('Blood blood');
        $this->load->view('backend/index', $page_data);

    }



}