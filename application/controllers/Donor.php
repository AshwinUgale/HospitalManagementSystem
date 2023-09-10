<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Donor extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('donor_model');
    }


    function manage_donor($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->donor_model->createNewBloodDonorInformation();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'donor/manage_donor', 'refresh');
        }

        if($param1 == 'update'){
            $this->donor_model->updateBloodDonorInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'donor/manage_donor', 'refresh');
        }

        if($param1 == 'delete'){
            $this->donor_model->deleteBloodDonorInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'donor/manage_donor', 'refresh');
        }

        $page_data['page_name']  = 'manage_donor';
        $page_data['page_title'] =  get_phrase('Blood Donor');
        $this->load->view('backend/index', $page_data);

    }



}