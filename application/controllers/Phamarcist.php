<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Phamarcist extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');
                $this->load->model('phamarcist_model');
                $this->load->model('medicine_model');

               
    }

    public function index() {
        if($this->session->userdata('phamarcist_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('phamarcist_login') == 1) redirect(base_url(). 'phamarcist/dashboard', 'refresh');
    }


    function dashboard() {
        if($this->session->userdata('phamarcist_login') != 1) redirect(base_url(). 'login', 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] =  get_phrase('phamarcist Dashboard');
        $this->load->view('backend/index', $page_data);
    }


     //******** The function below update phamarcist profile  *****************/
     function change_profile($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'update_info'){
            $this->phamarcist_model->updatePhamarcistInfoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'phamarcist/change_profile', 'refresh');
        }
        if($param1 == 'change_password'){
            $this->phamarcist_model->changePasswordFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Password Changed Successfully'));
            redirect(base_url() . 'phamarcist/change_profile', 'refresh');
        }
        $page_data['page_name']  = 'change_profile';
        $page_data['page_title'] =  get_phrase('Change Profile');
        $this->load->view('backend/index', $page_data);
    }
    //******** Ends here *****************/




    function notification ($param1 = null, $param2 = null, $param3 = null){

       

        $page_data['page_name'] =   'notification';
        $page_data['page_title'] =   get_phrase('Add Event');
        $this->load->view('backend/index', $page_data);

    }



    function medicine_category ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->medicine_model->insertIntoMedicineCategoryTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'phamarcist/medicine_category', 'refresh');
        }

        if($param1 == 'update'){

            $this->medicine_model->updateMedicineCategory($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'phamarcist/medicine_category', 'refresh');
        }

        if($param1 == 'delete'){

            $this->medicine_model->deleteMedicineCategory($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'phamarcist/medicine_category', 'refresh');
        }

        $page_data['page_name'] =   'medicine_category';
        $page_data['page_title'] =   get_phrase('Add Category');
        $this->load->view('backend/index', $page_data);

    }


    function manage_medicine ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

            $this->medicine_model->insertIntoMedicineTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'phamarcist/manage_medicine', 'refresh');
        }

        if($param1 == 'update'){

            $this->medicine_model->updateMedicineTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'phamarcist/manage_medicine', 'refresh');
        }

        if($param1 == 'delete'){

            $this->medicine_model->deleteFromMedicineTable($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'phamarcist/manage_medicine', 'refresh');
        }

        $page_data['page_name'] =   'manage_medicine';
        $page_data['page_title'] =   get_phrase('Add Medicine');
        $this->load->view('backend/index', $page_data);

    }


    



}