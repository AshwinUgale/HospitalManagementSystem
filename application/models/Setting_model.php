<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Setting_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }

    function updateSystemSettingFunction(){

        $setting['description']  =   $this->input->post('system_name');
        $this->db->where('type', 'system_name');
        $this->db->update('settings', $setting);

        $setting['description']   =   $this->input->post('system_title');
        $this->db->where('type', 'system_title');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('address');
        $this->db->where('type', 'address');
        $this->db->update('settings', $setting);

        $setting['description'] =   $this->input->post('phone');
        $this->db->where('type', 'phone');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('currency');
        $this->db->where('type', 'currency');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('system_email');
        $this->db->where('type', 'system_email');
        $this->db->update('settings', $setting);

        $setting['description'] =   $this->input->post('language');
        $this->db->where('type', 'language');
        $this->db->update('settings', $setting);

        $setting['description'] =   $this->input->post('text_align');
        $this->db->where('type', 'text_align');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('footer');
        $this->db->where('type', 'footer');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('paypal_email');
        $this->db->where('type', 'paypal_email');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('abb');
        $this->db->where('type', 'abb');
        $this->db->update('settings', $setting);

    }


    function uploadSystemLogoFunction (){
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
    }

    function updateSystemThemeFunction(){

        $theme['description']  =   $this->input->post('skin_colour');
        $this->db->where('type', 'skin_colour');
        $this->db->update('settings', $theme);

    }


    function createNewLanguageColumn(){

        $language = $this->input->post('language');
        $this->load->dbforge();
        $fields = array($language => array('type' => 'LONGTEXT'));
        $this->dbforge->add_column('language', $fields);

        $page_data2['name'] = $language;
        $this->db->insert('language_list', $page_data2);
    }

    function createNewPhraseForlanguage(){
        $page_data['phrase'] = $this->input->post('phrase');
        $this->db->insert('language', $page_data);
    }

    function deleteSelectedlanguage($param2){

        $language = $param2;
        $this->load->dbforge();
        $this->dbforge->drop_column('language', $language);
    }


    function create_backup ($type){

        $this->load->dbutil();
		$options = array(
                'format'      => 'txt',             // gzip, zip, txt
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );
		if($type == 'all'){
			$tables = array('');
			$file_name	=	'database_backup';
		}

		else {
			$tables = array('tables'	=>	array($type));
			$file_name	=	'backup_'.$type;
		}
		$backup =& $this->dbutil->backup(array_merge($options , $tables)); 
		$this->load->helper('download');
        force_download($file_name.'.sql', $backup);
    }


    function delete_database ($type){

        if($type == 'all'){

            $this->db->truncate('admin');
            $this->db->truncate('doctor');
            $this->db->truncate('nurse');
            $this->db->truncate('donor');
		}
		else{	
		$this->db->truncate($type);
		}

    }





}