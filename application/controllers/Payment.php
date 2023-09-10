<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('department_model');
                $this->load->model('payment_model');

    }


    function add_invoice ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

             $this->payment_model->insertIntoIntoPaymentTable();
             $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
             redirect(base_url() . 'payment/list_invoice', 'refresh');
         }

         if($param1 == 'update'){

            $this->payment_model->updatePaymentTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
             redirect(base_url() . 'payment/list_invoice', 'refresh');
         }

         if($param1 == 'delete'){

            $this->payment_model->deleteFromPaymentTable($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
             redirect(base_url() . 'payment/list_invoice', 'refresh');
         }

    
        $page_data['page_name']  = 'add_invoice';
        $page_data['page_title'] =  get_phrase('Create Payment');
        $this->load->view('backend/index', $page_data);
    }

    function list_invoice ($param1 = null, $param2 = null, $param3 = null){
       
       
        $page_data['page_name']  = 'list_invoice';
        $page_data['page_title'] =  get_phrase('List invoice');
        $this->load->view('backend/index', $page_data);
    }


    function view_invoice($invoice_id){

        $page_data['select_invoice_by_id']  = $this->payment_model->select_invoice_by_id($invoice_id);
        $page_data['page_name']  = 'view_invoice';
        $page_data['page_title'] =  get_phrase('Print invoice');
        $this->load->view('backend/index', $page_data);
    }

    function edit_invoice($invoice_id){

        $page_data['select_invoice_by_id']  = $this->payment_model->select_invoice_by_id($invoice_id);
        
        $page_data['invoice_id'] = $invoice_id;
        $page_data['page_name']  = 'edit_invoice';
        $page_data['page_title'] =  get_phrase('Edit invoice');
        $this->load->view('backend/index', $page_data);
    }



    function expense_category ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

             $this->payment_model->insertIntoExpenseCategory();
             $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
             redirect(base_url() . 'payment/expense_category', 'refresh');
         }

         if($param1 == 'update'){

            $this->payment_model->updateExpenseCategory($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
             redirect(base_url() . 'payment/expense_category', 'refresh');
         }

         if($param1 == 'delete'){

            $this->payment_model->deleteExpenseCategory($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
             redirect(base_url() . 'payment/expense_category', 'refresh');
         }

    
        $page_data['page_name']  = 'expense_category';
        $page_data['page_title'] =  get_phrase('expense_category');
        $this->load->view('backend/index', $page_data);
    }


    function new_expense ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){

             $this->payment_model->insertIntoExpensePayment();
             $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
             redirect(base_url() . 'payment/new_expense', 'refresh');
         }

         if($param1 == 'update'){

            $this->payment_model->updateExpensePayment($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
             redirect(base_url() . 'payment/new_expense', 'refresh');
         }

         if($param1 == 'delete'){

            $this->payment_model->deleteExpensePayment($param2);
             $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
             redirect(base_url() . 'payment/new_expense', 'refresh');
         }

    
        $page_data['page_name']  = 'new_expense';
        $page_data['page_title'] =  get_phrase('new_expense');
        $this->load->view('backend/index', $page_data);
    }



}