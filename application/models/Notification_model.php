<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Notification_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }


    function insertIntoNotificationTable(){
        $page_data['title'] = $this->input->post('title');
        $page_data['start_date'] = strtotime($this->input->post('start_date'));
        $page_data['end_date'] = strtotime($this->input->post('end_date'));
        $page_data['location'] = $this->input->post('location');
        $page_data['description'] = $this->input->post('description');
        $this->db->insert('noticeboard', $page_data);

        

    }

    function updateNotificationTable($param2){
        $page_data['title'] = $this->input->post('title');
        $page_data['start_date'] = strtotime($this->input->post('start_date'));
        $page_data['end_date'] = strtotime($this->input->post('end_date'));
        $page_data['location'] = $this->input->post('location');
        $page_data['description'] = $this->input->post('description');
        $this->db->where('noticeboard_id', $param2);
        $this->db->update('noticeboard', $page_data);
    }

    function deleteFromNotificationTable($param2){
        
        $this->db->where('noticeboard_id', $param2);
        $this->db->delete('noticeboard');
    }



}