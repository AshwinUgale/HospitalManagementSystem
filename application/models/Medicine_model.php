<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Medicine_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    /******* Select all from med_category table  ****** */
    function select_all_medicine_categoriess(){
        $query = $this->db->get('med_category');
            return $query->result_array();
    }

    function select_all_medicine(){
        $query = $this->db->get('medicine');
            return $query->result_array();
    }

    /**** end here */


    function insertIntoMedicineCategoryTable(){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['description'] = html_escape($this->input->post('description'));
        $this->db->insert('med_category', $page_data);

    }

    function updateMedicineCategory($param2){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['description'] = html_escape($this->input->post('description'));

        $this->db->where('med_category_id', $param2);
        $this->db->update('med_category', $page_data);

    }

    function deleteMedicineCategory($param2){
        $this->db->where('med_category_id', $param2);
        $this->db->delete('med_category');

    }




    function insertIntoMedicineTable(){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['med_category_id'] = html_escape($this->input->post('med_category_id'));
        $page_data['price'] = html_escape($this->input->post('price'));
        $page_data['quantity'] = html_escape($this->input->post('quantity'));
        $page_data['company'] = html_escape($this->input->post('company'));
        $page_data['status'] = html_escape($this->input->post('status'));
        $page_data['description'] = html_escape($this->input->post('description'));
        $page_data['date_added'] = strtotime(date('Y-m-d'));
        $this->db->insert('medicine', $page_data);

    }

    function updateMedicineTable($param2){
        $page_data['name'] = html_escape($this->input->post('name'));
        $page_data['med_category_id'] = html_escape($this->input->post('med_category_id'));
        $page_data['price'] = html_escape($this->input->post('price'));
        $page_data['quantity'] = html_escape($this->input->post('quantity'));
        $page_data['company'] = html_escape($this->input->post('company'));
        $page_data['status'] = html_escape($this->input->post('status'));
        $page_data['description'] = html_escape($this->input->post('description'));
        $page_data['date_added'] = strtotime(date('Y-m-d'));

        $this->db->where('medicine_id', $param2);
        $this->db->update('medicine', $page_data);

    }

    function deleteFromMedicineTable($param2){
        $this->db->where('medicine_id', $param2);
        $this->db->delete('medicine');

    }

}