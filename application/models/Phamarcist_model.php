<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Phamarcist_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    /******* Select all from phamarcist table  ****** */
    function select_all_phamarcists(){
        $query = $this->db->get('phamarcist');
            return $query->result_array();
    }
    /**** end here */


    function insertIntoPhamarcistTable(){
        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['date_of_birth']     = strtotime($this->input->post('date_of_birth'));

        $page_data['place_of_birth']    = html_escape($this->input->post('place_of_birth'));
        $page_data['id_card']           = html_escape($this->input->post('id_card'));
        $page_data['gender']            = html_escape($this->input->post('gender'));
        $page_data['mother_tongue']     = html_escape($this->input->post('mother_tongue'));
        $page_data['marital_status']    = html_escape($this->input->post('marital_status'));
        $page_data['religion']          = html_escape($this->input->post('religion'));
        $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
        $page_data['address']           = html_escape($this->input->post('address'));
        $page_data['city']              = html_escape($this->input->post('city'));
        $page_data['qualification']     = html_escape($this->input->post('qualification'));
        $page_data['state']             = html_escape($this->input->post('state'));
        $page_data['nationality']       = html_escape($this->input->post('nationality'));
        $page_data['biography']         = html_escape($this->input->post('biography'));

        $page_data['email']             = html_escape($this->input->post('email'));
        $page_data['phone']             = html_escape($this->input->post('phone'));
        $page_data['mobile_no']         = html_escape($this->input->post('mobile_no'));
        $page_data['password']          = sha1($this->input->post('password'));
        $page_data['facebook']          = html_escape($this->input->post('facebook'));
        $page_data['twitter']           = html_escape($this->input->post('twitter'));
        $page_data['google_plus']       = html_escape($this->input->post('google_plus'));
        $page_data['linkedin']          = html_escape($this->input->post('linkedin'));
        $page_data['biography']         = html_escape($this->input->post('biography'));

        $page_data['file_name'] = $_FILES["file_name"]["name"];

        $check_email = $this->db->get_where('phamarcist', array('email' => $page_data['email']))->row()->email;
        if($check_email != null){

            $this->session->set_flashdata('error_message', get_phrase('Email Already Exist'));
            redirect(base_url() . 'admin/manage_phamarcist', 'refresh');
        }
        else{

            $this->db->insert('phamarcist', $page_data);
            $phamarcist_id = $this->db->insert_id();
            move_uploaded_file($_FILES['file_name']['tmp_name'], 'uploads/phamarcist_image/' . $_FILES["file_name"]["name"]);
            // upload phamarcist's file/document to phamarcist image folder
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/phamarcist_image/' . $phamarcist_id . '.jpg');


        }

        


    }

    function updatePhamarcistInformation($param2){
        $page_data['name']              = html_escape($this->input->post('name'));
        $page_data['date_of_birth']     = strtotime($this->input->post('date_of_birth'));

        $page_data['place_of_birth']    = html_escape($this->input->post('place_of_birth'));
        $page_data['id_card']           = html_escape($this->input->post('id_card'));
        $page_data['gender']            = html_escape($this->input->post('gender'));
        $page_data['mother_tongue']     = html_escape($this->input->post('mother_tongue'));
        $page_data['marital_status']    = html_escape($this->input->post('marital_status'));
        $page_data['religion']          = html_escape($this->input->post('religion'));
        $page_data['blood_group']       = html_escape($this->input->post('blood_group'));
        $page_data['address']           = html_escape($this->input->post('address'));
        $page_data['city']              = html_escape($this->input->post('city'));
        $page_data['qualification']     = html_escape($this->input->post('qualification'));
        $page_data['state']             = html_escape($this->input->post('state'));
        $page_data['nationality']       = html_escape($this->input->post('nationality'));
        $page_data['biography']         = html_escape($this->input->post('biography'));

        $page_data['email']             = html_escape($this->input->post('email'));
        $page_data['phone']             = html_escape($this->input->post('phone'));
        $page_data['mobile_no']         = html_escape($this->input->post('mobile_no'));
        $page_data['facebook']          = html_escape($this->input->post('facebook'));
        $page_data['twitter']           = html_escape($this->input->post('twitter'));
        $page_data['google_plus']       = html_escape($this->input->post('google_plus'));
        $page_data['linkedin']          = html_escape($this->input->post('linkedin'));
        $page_data['biography']         = html_escape($this->input->post('biography'));

        $this->db->where('phamarcist_id', $param2);
        $this->db->update('phamarcist', $page_data);

        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/phamarcist_image/' . $param2 . '.jpg');

    }

    function deletePhamarcistInformtion($param2){
        $this->db->where('phamarcist_id', $param2);
        $this->db->update('phamarcist');
    }




    function updatePhamarcistInfoFunction(){

        $page_data['name']      =   html_escape($this->input->post('name'));
        $page_data['email']     =   html_escape($this->input->post('email'));
        $page_data['phone']     =   html_escape($this->input->post('phone'));
        $page_data['address']   =   html_escape($this->input->post('address'));

        $this->db->where('phamarcist_id', $this->session->userdata('phamarcist_id'));
        $this->db->update('phamarcist', $page_data);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/phamarcist_image/' . $this->session->userdata('phamarcist_id') . '.jpg');
    }



    function changePasswordFunction (){

        $page_data['password']       =   sha1($this->input->post('new_password'));
        $confirm_password            =   sha1($this->input->post('confirm_new_password'));

        if($page_data['password'] == $confirm_password){
            $this->db->where('phamarcist_id', $this->session->userdata('phamarcist_id'));
            $this->db->update('phamarcist', $page_data);

        }

        else{

            $this->session->set_flashdata('error_message', get_phrase('Password Mismatch'));
            redirect(base_url() . 'phamarcist/change_profile', 'refresh');

        }
    }


}