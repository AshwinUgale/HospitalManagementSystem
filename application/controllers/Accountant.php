<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Accountant extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('accountant_model');

    }

    public function index() {
        if($this->session->userdata('accountant_login') != 1) redirect(base_url(). 'login', 'refresh');
        if($this->session->userdata('accountant_login') == 1) redirect(base_url(). 'accountant/dashboard', 'refresh');
    }


    function dashboard() {
        if($this->session->userdata('accountant_login') != 1) redirect(base_url(). 'login', 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] =  get_phrase('Accountant Dashboard');
        $this->load->view('backend/index', $page_data);
    }

    //******** The function below update accountant profile  *****************/
    function change_profile($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'update_info'){
            $this->accountant_model->updateaccountantInfoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'accountant/change_profile', 'refresh');
        }
        if($param1 == 'change_password'){
            $this->accountant_model->changePasswordFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Password Changed Successfully'));
            redirect(base_url() . 'accountant/change_profile', 'refresh');
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
 



}