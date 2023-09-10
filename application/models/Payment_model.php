<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Payment_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }


    function insertIntoIntoPaymentTable(){

        $page_data['invoice_number'] = $this->input->post('invoice_number');
        $page_data['title'] = $this->input->post('title');
        $page_data['department_id'] = $this->input->post('department_id');
        $page_data['patient_id'] = $this->input->post('patient_id');
        $page_data['date_created'] = strtotime(date($this->input->post('date_created')));
        $page_data['due_date'] = strtotime(date($this->input->post('due_date')));
        $page_data['vat_percentage'] = $this->input->post('vat_percentage');
        $page_data['discount'] = $this->input->post('discount');
        $page_data['status'] = $this->input->post('status');
        
        $invoice_entries = array();
        $title = $this->input->post('entry_title');
        $amount = $this->input->post('entry_amount');
        $number_of_entries          = sizeof($title);

        for ($i = 0; $i < $number_of_entries; $i++){

            if($title[$i] != "" && $amount[$i] != ""){
                $new_entry = array('title' => $title[$i], 'amount' => $amount[$i]);
                array_push($invoice_entries, $new_entry);
            }
        
        }

        $page_data['invoice_entries'] = json_encode($invoice_entries);

        $this->db->insert('invoice', $page_data);

    }

    function updatePaymentTable($param2){
        $page_data['title'] = $this->input->post('title');
        $page_data['department_id'] = $this->input->post('department_id');
        $page_data['patient_id'] = $this->input->post('patient_id');
        $page_data['date_created'] = strtotime(date($this->input->post('date_created')));
        $page_data['due_date'] = strtotime(date($this->input->post('due_date')));
        $page_data['vat_percentage'] = $this->input->post('vat_percentage');
        $page_data['discount'] = $this->input->post('discount');
        $page_data['status'] = $this->input->post('status');
        
        $invoice_entries = array();
        $title = $this->input->post('entry_title');
        $amount = $this->input->post('entry_amount');
        $number_of_entries          = sizeof($title);

        for ($i = 0; $i < $number_of_entries; $i++){

            if($title[$i] != "" && $amount[$i] != ""){
                $new_entry = array('title' => $title[$i], 'amount' => $amount[$i]);
                array_push($invoice_entries, $new_entry);
            }
        
        }

        $page_data['invoice_entries'] = json_encode($invoice_entries);

        $this->db->where('invoice_id', $param2);
        $this->db->update('invoice', $page_data);
        
    }

    function deleteFromPaymentTable($param2){
        $this->db->where('invoice_id', $param2);
        $this->db->delete('invoice');
        
    }

    function select_invoice_by_id($invoice_id){
        return $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->result_array();
    }


    function calculate_invoice_total_amount($invoice_number){
        $total_amount = 0;
        $select_invoice = $this->db->get_where('invoice', array('invoice_number' => $invoice_number))->result_array();
        foreach ($select_invoice as $key => $row){
            $invoice_entries = json_decode($row['invoice_entries']);
            foreach ($invoice_entries as $key => $invoice_entry)
            $total_amount += $invoice_entry->amount;
            $vat_percentage = $total_amount * $row['vat_percentage'] / 100;
            $grand_total = $total_amount + $vat_percentage - $row['discount'];
        }

        return $grand_total;

    }

    function insertIntoExpenseCategory (){
        $page_data['name'] = $this->input->post('name');
        $this->db->insert('expense_category', $page_data);
    }

    function updateExpenseCategory ($param2){
        $page_data['name'] = $this->input->post('name');
        $this->db->where('expense_category_id', $param2);
        $this->db->update('expense_category', $page_data);
    }

    function deleteExpenseCategory ($param2){
        $this->db->where('expense_category_id', $param2);
        $this->db->delete('expense_category');
    }


    function insertIntoExpensePayment (){
        $page_data['title'] = $this->input->post('title');
        $page_data['expense_category_id'] = $this->input->post('expense_category_id');
        $page_data['description'] = $this->input->post('description');
        $page_data['amount'] = $this->input->post('amount');
        $page_data['payment_method'] = $this->input->post('payment_method');
        $page_data['timestamp'] = strtotime($this->input->post('timestamp'));
        $page_data['payment_type'] = 'expense';
        $this->db->insert('payment', $page_data);
    }

    function updateExpensePayment ($param2){
        $page_data['title'] = $this->input->post('title');
        $page_data['expense_category_id'] = $this->input->post('expense_category_id');
        $page_data['description'] = $this->input->post('description');
        $page_data['amount'] = $this->input->post('amount');
        $page_data['payment_method'] = $this->input->post('payment_method');
        $page_data['timestamp'] = strtotime($this->input->post('timestamp'));
        $this->db->where('payment_id', $param2);
        $this->db->update('payment', $page_data);
    }

    function deleteExpensePayment ($param2){
        $this->db->where('payment_id', $param2);
        $this->db->delete('payment');
    }






}