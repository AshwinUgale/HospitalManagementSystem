<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');  
                $this->load->model('department_model');
                $this->load->model('doctor_model');
                $this->load->model('nurse_model');
                $this->load->model('accountant_model');
                $this->load->model('phamarcist_model');
                $this->load->model('receptionist_model');
                $this->load->model('laboratorist_model');
                $this->load->model('shedule_model');
                $this->load->model('medicine_model');
                $this->load->model('notification_model');
    }

        public function index() {
            if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
            if($this->session->userdata('admin_login') == 1) redirect(base_url(). 'admin/dashboard', 'refresh');
        }

        //******** The function below is for admin dashboard  *****************/
        function dashboard() {
            if($this->session->userdata('admin_login') != 1) redirect(base_url(). 'login', 'refresh');
            $page_data['page_name']  = 'dashboard';
            $page_data['page_title'] =  get_phrase('Admin Dashboard');
            $this->load->view('backend/index', $page_data);
        }
        //******** Ends here *****************/

        //******** The function below update admin profile  *****************/
        function change_profile($param1 = null, $param2 = null, $param3 = null){
            if($param1 == 'update_info'){
                $this->admin_model->updateAdminInfoFunction();
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/change_profile', 'refresh');
            }
            if($param1 == 'change_password'){
                $this->admin_model->changePasswordFunction();
                $this->session->set_flashdata('flash_message', get_phrase('Password Changed Successfully'));
                redirect(base_url() . 'admin/change_profile', 'refresh');
            }
            $page_data['page_name']  = 'change_profile';
            $page_data['page_title'] =  get_phrase('Change Profile');
            $this->load->view('backend/index', $page_data);
        }
        //******** Ends here *****************/


        //******** The function below manages hospital doctor  *****************/
        function manage_doctor ($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'create'){
            $this->doctor_model->insertIntoDoctorTable();
            $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
            redirect(base_url() . 'admin/manage_doctor', 'refresh');
        }
        if($param1 == 'update'){
            $this->doctor_model->updateDoctorInformation($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'admin/manage_doctor', 'refresh');
        }
        if($param1 == 'delete'){
            $this->doctor_model->deleteDoctorInformtion($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
            redirect(base_url() . 'admin/manage_doctor', 'refresh');
        }
        $page_data['page_name'] =   'manage_doctor';
        $page_data['page_title'] =   get_phrase('Manage Doctor');
        $this->load->view('backend/index', $page_data);
        }
        //******** Ends here *****************/

         //******** The function below display doctor profle  *****************/
         function completeDoctorProfile ($doctor_id){

            $page_data['doctor_profile'] =  $this->db->get_where('doctor', array ('doctor_id' => $doctor_id))->result_array();
            $page_data['page_name'] =   'completeDoctorProfile';
            $page_data['page_title'] =   get_phrase('Doctor Profile');
            $this->load->view('backend/index', $page_data);
            }
             //******** Ends here *****************/


        //******** The function below manages hospital Nurse  *****************/
        function manage_nurse ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                $this->nurse_model->insertIntoNurseTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/manage_nurse', 'refresh');
            }
            if($param1 == 'update'){
                $this->nurse_model->updateNurseInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/manage_nurse', 'refresh');
            }
            if($param1 == 'delete'){
                $this->nurse_model->deleteNurseInformtion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/manage_nurse', 'refresh');
            }
            $page_data['page_name'] =   'manage_nurse';
            $page_data['page_title'] =   get_phrase('Manage Nurse');
            $this->load->view('backend/index', $page_data);
            }
            //******** Ends here *****************/

         //******** The function below display Nurse profle  *****************/
        function completeNurseProfile ($nurse_id){

            $page_data['nurse_profile'] =  $this->db->get_where('nurse', array ('nurse_id' => $nurse_id))->result_array();
            $page_data['page_name'] =   'completeNurseProfile';
            $page_data['page_title'] =   get_phrase('Nurse Profile');
            $this->load->view('backend/index', $page_data);
            }
             //******** Ends here *****************/


         //******** The function below manages hospital accountant  *****************/
         function manage_accountant ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                $this->accountant_model->insertIntoAccountantTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/manage_accountant', 'refresh');
            }
            if($param1 == 'update'){
                $this->accountant_model->updateAccountantInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/manage_accountant', 'refresh');
            }
            if($param1 == 'delete'){
                $this->accountant_model->deleteAccountantInformtion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/manage_accountant', 'refresh');
            }
            $page_data['page_name'] =   'manage_accountant';
            $page_data['page_title'] =   get_phrase('Manage Accountant');
            $this->load->view('backend/index', $page_data);
            }
            //******** Ends here *****************/

         //******** The function below display accountant profle  *****************/
        function completeAccountantProfile ($accountant_id){

            $page_data['accountant_profile'] =  $this->db->get_where('accountant', array ('accountant_id' => $accountant_id))->result_array();
            $page_data['page_name'] =   'completeAccountantProfile';
            $page_data['page_title'] =   get_phrase('Accountant Profile');
            $this->load->view('backend/index', $page_data);
            }
        //******** Ends here *****************/


        //******** The function below manages hospital phamarcist  *****************/
        function manage_phamarcist ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                $this->phamarcist_model->insertIntoPhamarcistTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/manage_phamarcist', 'refresh');
            }
            if($param1 == 'update'){
                $this->phamarcist_model->updatePhamarcistInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/manage_phamarcist', 'refresh');
            }
            if($param1 == 'delete'){
                $this->phamarcist_model->deletePhamarcistInformtion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/manage_phamarcist', 'refresh');
            }
            $page_data['page_name'] =   'manage_phamarcist';
            $page_data['page_title'] =   get_phrase('Manage Phamarcist');
            $this->load->view('backend/index', $page_data);
            }
            //******** Ends here *****************/

         //******** The function below display phamarcist profle  *****************/
        function completePhamarcistProfile ($phamarcist_id){

            $page_data['phamarcist_profile'] =  $this->db->get_where('phamarcist', array ('phamarcist_id' => $phamarcist_id))->result_array();
            $page_data['page_name'] =   'completePhamarcistProfile';
            $page_data['page_title'] =   get_phrase('Phamarcist Profile');
            $this->load->view('backend/index', $page_data);
            }
        //******** Ends here *****************/




        //******** The function below manages hospital receptionist  *****************/
        function manage_receptionist ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                $this->receptionist_model->insertIntoReceptionistTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/manage_receptionist', 'refresh');
            }
            if($param1 == 'update'){
                $this->receptionist_model->updateReceptionistInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/manage_receptionist', 'refresh');
            }
            if($param1 == 'delete'){
                $this->receptionist_model->deleteReceptionistInformtion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/manage_receptionist', 'refresh');
            }
            $page_data['page_name'] =   'manage_receptionist';
            $page_data['page_title'] =   get_phrase('Manage Receptionist');
            $this->load->view('backend/index', $page_data);
            }
            //******** Ends here *****************/

         //******** The function below display Receptionist profle  *****************/
        function completeReceptionistProfile ($receptionist_id){

            $page_data['receptionist_profile'] =  $this->db->get_where('receptionist', array ('receptionist_id' => $receptionist_id))->result_array();
            $page_data['page_name'] =   'completeReceptionistProfile';
            $page_data['page_title'] =   get_phrase('Phamarcist Profile');
            $this->load->view('backend/index', $page_data);
            }
        //******** Ends here *****************/


        //******** The function below manages hospital Laboratorist  *****************/
        function manage_laboratorist ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                $this->laboratorist_model->insertIntoLaboratoristTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/manage_laboratorist', 'refresh');
            }
            if($param1 == 'update'){
                $this->laboratorist_model->updateLaboratoristInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/manage_laboratorist', 'refresh');
            }
            if($param1 == 'delete'){
                $this->laboratorist_model->deleteLaboratoristInformtion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/manage_laboratorist', 'refresh');
            }
            $page_data['page_name'] =   'manage_laboratorist';
            $page_data['page_title'] =   get_phrase('Manage Laboratorist');
            $this->load->view('backend/index', $page_data);
            }
            //******** Ends here *****************/

         //******** The function below display Laboratorist profle  *****************/
        function completeLaboratoristProfile ($laboratorist_id){

            $page_data['laboratorist_profile'] =  $this->db->get_where('laboratorist', array ('laboratorist_id' => $laboratorist_id))->result_array();
            $page_data['page_name'] =   'completeLaboratoristProfile';
            $page_data['page_title'] =   get_phrase('Laboratorist Profile');
            $this->load->view('backend/index', $page_data);
            }
        //******** Ends here *****************/


        function add_schedule ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){

               $this->shedule_model->insertIntoSheduleTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/list_schedule', 'refresh');
            }

            if($param1 == 'update'){

                $this->shedule_model->updateSheduleTable($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/list_schedule', 'refresh');
            }

            if($param1 == 'delete'){

                $this->shedule_model->deleteSheduleTable($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/list_schedule', 'refresh');
            }

            $page_data['page_name'] =   'add_schedule';
            $page_data['page_title'] =   get_phrase('Add Shedule');
            $this->load->view('backend/index', $page_data);

        }


        function list_schedule(){

            $page_data['page_name'] =   'list_schedule';
            $page_data['page_title'] =   get_phrase('List Shedule');
            $this->load->view('backend/index', $page_data);
        }



        function get_department_doctor ($department_id){
            $doctors = $this->db->get_where('doctor', array('department_id' => $department_id))->result_array();
            foreach ($doctors as $key => $doctors){
                echo '<option value="'.$doctors['doctor_id'].'">'.$doctors['name'].'</option>';
            }
        }

        function edit_shedule ($shedule_id){
            $page_data['get_shedule'] = $this->shedule_model->get_shedule_by_id($shedule_id);
            $page_data['page_name'] =   'edit_shedule';
            $page_data['page_title'] =   get_phrase('Edit Shedule');
            $this->load->view('backend/index', $page_data);
        }


        function add_appointment ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){

                $this->appointment_model->insertIntoAppointmentTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/list_appointment', 'refresh');
            }

            if($param1 == 'update'){

                $this->appointment_model->updateAppointmentInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/list_appointment', 'refresh');
            }

            if($param1 == 'delete'){

                $this->appointment_model->deleteAppointmentInformation($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/list_appointment', 'refresh');
            }

            $page_data['page_name'] =   'add_appointment';
            $page_data['page_title'] =   get_phrase('Add Appointment');
            $this->load->view('backend/index', $page_data);

        }


        function select_doctor_patient($department_id){

            $page_data['department_id'] = $department_id;
            $this->load->view('backend/admin/display_doctor_patient', $page_data);
        }

        function get_doctor_shedule($doctor_id){
            $shedules = $this->db->get_where('shedule', array('doctor_id' => $doctor_id))->result_array();
            foreach ($shedules as $key => $shedule){
                echo '<option value="'.$shedule['shedule_id'].'">'.'Shedule Date: '. date('d M Y', $shedule['avail_day']) .' - '.'Start Time: '.$shedule['start_time'].' End Time: '.$shedule['end_time'].'</option>';
            }
        }


        function get_department_patient($department_id){
            $patients = $this->db->get_where('patient', array('department_id' => $department_id))->result_array();
            foreach ($patients as $key => $patient){
                echo '<option value="'.$patient['patient_id'].'">'.$patient['name'].'</option>';
            }

        }


        function list_appointment (){
            $page_data['page_name'] =   'list_appointment';
            $page_data['page_title'] =   get_phrase('List Appointment');
            $this->load->view('backend/index', $page_data);
        }

        function edit_appointment ($appointment_id){


            $page_data['display_appointment'] = $this->appointment_model->get_appointment_by_id($appointment_id);
            $page_data['appointment_id'] = $appointment_id;
            $page_data['page_name'] =   'edit_appointment';
            $page_data['page_title'] =   get_phrase('Edit Appointment');
            $this->load->view('backend/index', $page_data);
        }


        function get_doctor_patient_edit ($department_id, $appointment_id){

            $page_data['department_id'] = $department_id;
            $page_data['appointment_id'] = $appointment_id;
            $this->load->view('backend/admin/display_doctor_patient_edit', $page_data);
        }

        function medicine_category ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){

                $this->medicine_model->insertIntoMedicineCategoryTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/medicine_category', 'refresh');
            }

            if($param1 == 'update'){

                $this->medicine_model->updateMedicineCategory($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/medicine_category', 'refresh');
            }

            if($param1 == 'delete'){

                $this->medicine_model->deleteMedicineCategory($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/medicine_category', 'refresh');
            }

            $page_data['page_name'] =   'medicine_category';
            $page_data['page_title'] =   get_phrase('Add Category');
            $this->load->view('backend/index', $page_data);

        }


        function manage_medicine ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){

                $this->medicine_model->insertIntoMedicineTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/manage_medicine', 'refresh');
            }

            if($param1 == 'update'){

                $this->medicine_model->updateMedicineTable($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/manage_medicine', 'refresh');
            }

            if($param1 == 'delete'){

                $this->medicine_model->deleteFromMedicineTable($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/manage_medicine', 'refresh');
            }

            $page_data['page_name'] =   'manage_medicine';
            $page_data['page_title'] =   get_phrase('Add Medicine');
            $this->load->view('backend/index', $page_data);

        }


        function set_language($lang){
            $this->session->set_userdata('language', $lang);
            redirect(base_url() . 'admin', 'refresh');
            recache();
        }

        function saveGeneralMessage(){

            $page_data['message'] = $this->input->post('chatSend');
            $page_data['user_id'] = $this->input->post('user_id');
            
            $sql = "select * from general_message order by general_message_id desc limit 1";
			$return_query = $this->db->query($sql)->row()->general_message_id + 1;
            $page_data['general_message_id'] = $return_query;
                
            $this->db->insert('general_message', $page_data);
            echo json_encode($page_data);
        }



        function notification ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){

                $this->notification_model->insertIntoNotificationTable();
                $this->session->set_flashdata('flash_message', get_phrase('Data Saved Successfully'));
                redirect(base_url() . 'admin/notification', 'refresh');
            }

            if($param1 == 'update'){

                $this->notification_model->updateNotificationTable($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
                redirect(base_url() . 'admin/notification', 'refresh');
            }

            if($param1 == 'delete'){

                $this->notification_model->deleteFromNotificationTable($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data Deleted Successfully'));
                redirect(base_url() . 'admin/notification', 'refresh');
            }

            $page_data['page_name'] =   'notification';
            $page_data['page_title'] =   get_phrase('Add Event');
            $this->load->view('backend/index', $page_data);

        }




        

}
